<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* .container
        {
            width: 50px;
            height: 200px;
            border: 1px solid black;
        } */
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
    <div class="container">
        <form action="upload" class="form-control md-5" method="POST" enctype="multipart/form-data">
            @csrf
           <label class="sc"> Please Upload the File</label><br>
            <input type="file" class="sc" name="file"><br> 
            <button type="submit" class="btn btn-success">Upload File</button>
        </form>
    </div>
</body>
</html>