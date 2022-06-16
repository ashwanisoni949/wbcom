<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}">
    <title>Document</title>
    <style>
        body
        {
            /* background:linear-gradient(to top right,aqua 20%,red,pink); */
        }
        .sc
        {
            margin-bottom: 20px;
        }
        label
        {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color:green;
            font-size: 20px;
        }
    </style>
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script>
    var siteURL = "{{url('')}}";
</script>
</head>
<body>
    <div class="container w-50 mt-5">
        {{-- @csrf --}}
        <h2 class="text-center">PURE AJAX OPERATION</h2>
        {{-- {{$errors}} --}}
        <form id="studentForm">
            @csrf
            <div class="md-3 sc">
                <input type="hidden" name="student_id" id="student_id"/>
                <label for="">Name</label>
                <input type="text" name="title" id="title" placeholder="Enter the Name" class="form-control">
                
            </div>
            <div class="md-3 sc">
                <label for="">Email</label>
                <input type="email" placeholder="Enter The Email" name="author" id="author" class="form-control">
                
            </div>
            <div class="md-3 sc">
                <label for="">Address</label>
                <input type="text" placeholder="Enter The Mobile" name="address" id="address" class="form-control">
                
            </div>
            <br>
            <button type="submit" class="btn btn-danger" id="button">Save</button>
        </form>
    </div><br>
    <table border='1' width='100%' cellspacing='2px' cellpadding='3px' id="dataTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>ADDRESS</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{url('/customjs/student.js')}}"></script>
</body>
</html>