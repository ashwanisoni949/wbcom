<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{csrf_token()}}">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css" rel="stylesheet"> -->
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet"> 
    <!-- <link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" rel="stylesheet"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css"></script>  
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> 
    <!-- <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>    
    <script>
        var siteURL = '{{url('')}}';
    </script>
</head>
<body>
    <section id="login">
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-6">
                    <form  id="Form">
                    @csrf
                    <input type="hidden" name="post_id" id="post_id"/>
                    <input type="text" class="form-control" name="title" id="title" /> <br>
                    <input type="text" class="form-control" name="desc" id="desc" /> <br>
                    <input type="submit" class="form-control btn btn-warning" id="button" value="submit" /> <br>
                </form>
                </div>
                <div class="col-sm-6">
                     <table class="table table-bordered table-striped" id="tbl_data">
                    <th>Id</th>
                    <th>tile</th>
                    <th>description</th>
                    <th>action</th>
                    <th>action1</th>
                </table>
                </div>
            </div>
        </div>
    </section>
    <script src="{{url('savedata.js')}}"></script>
</body>
</html>
