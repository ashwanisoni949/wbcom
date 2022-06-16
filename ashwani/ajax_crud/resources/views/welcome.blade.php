<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
</head>
<body>
    <div class="container w-50 mt-5">
        <h2 class="text-center">PURE AJAX OPERATION</h2>
        {{-- {{$errors}} --}}
        <form action="" method="post">
            @csrf
            <div class="md-3 sc">
                <label for="">Name</label>
                <input type="text" name="title" placeholder="Enter the Name" class="form-control">
                
            </div>
            <div class="md-3 sc">
                <label for="">Email</label>
                <input type="email" placeholder="Enter The Email" name="author" class="form-control">
                
            </div>
            <div class="md-3 sc">
                <label for="">Address</label>
                <input type="text" placeholder="Enter The Mobile" name="address" class="form-control">
                
            </div>
            <br>
            <input type="submit" name="insert" save="insert" class="btn btn-warning">
        </form>
    </div>
</body>
</html>