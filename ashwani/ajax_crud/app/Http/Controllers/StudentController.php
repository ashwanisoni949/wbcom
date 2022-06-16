<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Student;
use Datatables;

class StudentController extends Controller{
    
    public function saveStudent(Request $requests){
        //dd($requests->all());
        // laravel Form Validation
        $valitator = Validator::make($requests->all(),[
            'title' => 'required',
            'author' => 'required|email',
            'address' => 'required'
        ]);

        if($valitator->passes()){
            $id = $requests->post('student_id');
            $formData = array();
            $formData['name'] = $requests->post('title');
            $formData['email'] = $requests->post('author');
            $formData['address'] = $requests->post('address');
            if(!empty($id)){
                $resp = Student::where('id',$id)->update($formData);
                if(!empty($resp)){
                    $response = array('status'=>true,'status_code'=>200,'message'=>'Data Updated Successfully');
                }else{
                    $response = array('status'=>false,'status_code'=>201,'message'=>"Can't Updated Data !");
                }
            }else{
                $resp = Student::insertGetId($formData);
                if(!empty($resp)){
                    $response = array('status'=>true,'status_code'=>200,'message'=>'Data Inserted Successfully');
                }else{
                    $response = array('status'=>false,'status_code'=>201,'message'=>"Can't Inserted Data !");
                }
            }
        }else{
            $response = array('status'=>false,'status_code'=>301,'message'=>$valitator->errors()->all());
        }

        return $response;

    }// End of Function

    public function showList(Request $rep){
        if ($rep->ajax()) {
            $data = Student::get();
            return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" onclick="editdata('.$row->id.')" class="edit btn btn-primary btn-sm">Edit</a>
                        <a href="javascript:void(0)" onclick="deletedata('.$row->id.')" class="edit btn btn-danger btn-sm">Delete</a>';
                        return $btn;
                })
                ->addColumn('abcd', function($row){
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>
                    <a href="javascript:void(0)" class="edit btn btn-danger btn-sm">Delete</a>';
                        return $btn;
                })
            ->rawColumns(['action','abcd'])
            ->make(true);
        }
    }// End of Function

    public function deletedata(Request $delete){
        $student_id = $delete->post('student_id');
        $resp = Student::where('id',$student_id)->delete();
        if(!empty($resp)){
            $response = array('status'=>true,'status_code'=>200,'message'=>'Data Deleted Successfully');
        }else{
            $response = array('status'=>false,'status_code'=>201,'message'=>"Can't Deleted Data !");
        }

        return $response;

    }// End of Function
    public function editdata(Request $edit)
    {
        $edit_id=$edit->post('edit_id');
        $resp=Student::where('id',$edit_id)->first(['id','name','email','address']);
        if($resp){
            $response = array('status'=>true,'status_code'=>200,'data'=>$resp);
        }else{
            $response = array('status'=>false,'status_code'=>201,'message'=>"Can't Edit Data !");
        }
        return $response;

    }


}// End of Class
