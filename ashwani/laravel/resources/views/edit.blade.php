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
    <div class="container w-50 mt-5">
        <h2 class="text-center">Post Records</h2>
        <form action="/update/{{@$posts->id}}" method="post">
            @csrf
            <div class="md-3 sc">
                <label for="">Name</label>
                <input type="text" name="title" placeholder="Enter the Name" class="form-control" value={{@$posts->post_title}}>

            </div>
            <div class="md-3 sc">
                <label for="">Email</label>
                <input type="email" placeholder="Enter The Email" name="author" class="form-control" value={{@$posts->post_author}}>

            </div>
            <div class="md-3 sc">
                <label for="">Mobile</label>
                <input type="number" placeholder="Enter The Mobile" name="mobile" class="form-control" value={{@$posts->post_mobile}}>

            </div>
            <div class="md-3 sc">
                <label for="">Password</label>
                <input type="password" name="pass" placeholder="Enter The Password" class="form-control" value={{@$posts->post_password}}>

            </div>
            <br>
            <input type="submit" name="update" save="Update" class="btn btn-outline-warning">
        </form>
    </div>
</body>
</html>
