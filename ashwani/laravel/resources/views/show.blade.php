<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-bordered shadow text-center table-striped">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>MOBILE</th>
                <th>PASSWORD</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->post_title}}</td>
                <td>{{$post->post_author}}</td>
                <td>{{$post->post_mobile}}</td>
                <td>{{$post->post_password}}</td>


                <td><a href="/delete/{{$post->id}}" class="btn btn-outline-danger">delete</a></td>
                <td><a href="/edit/{{$post->id}}" class="btn btn-outline-success">edit</a></td>

            </tr>
                
            @endforeach
        </table>
        <a href="http://localhost:8000">back To Home</a>
    </div>
</body>
</html>