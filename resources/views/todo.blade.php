<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
             @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('create') }}" method="post">
        @csrf
        <label for="">task</label>
        <input type="text" name="task">
        <br>
        <label for="">bg</label>
        <input type="text" name="bg">
        <br>
        <label for="">description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="add new todo">
    </form>

    <table border="2">
        <tr>
            <td>id</td>
            <td>task</td>
            <td>bg</td>
            <td>description</td>
            <td>action</td>
        </tr>
        @foreach ($data as $todo)
        <tr>
            <td>{{$todo->id}}</td>
            <td>{{$todo->task}}</td>
            <td>{{$todo->bg}}</td>
            <td>{{$todo->description}}</td>
            <td><a href="{{ route('delete', $todo->id) }}">delete</a></td>
        </tr>
        @endforeach
    </table>

</body>
</html>
