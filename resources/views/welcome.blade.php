<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <h1 style="text-align:center">Todo Application</h1>

    <form action="{{route('save-todo')}}" method="post">
        @csrf
        <input type="text" class="input-group mb-3" name="todo" placeholder="Enter Todo">
        <button type="submit" class= "btn btn-primary">Save</button>
    </form>
    <!-- <pre>
        {{$list}}
        
    </pre> -->

    <table class="table table-bordered">
        <th>SN</th>
        <th>List</th>
        <th colspan="2">Action</th>

    <tbody>
        @foreach($list as $value)
        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value->title}}</td>
            <td> <a href="{{url('/edit/'.$value->id)}}" class="btn btn-danger">Edit</a>  </td>
            <td> <a href="{{url('/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>  </td>
        </tr>
        @endforeach
    </tbody>
    </table>

    <!-- <ul>
        @foreach ($list as $value)

        <li>{{$value->title}}</li>

        @endforeach
    </ul> -->
       

</body>
</html>