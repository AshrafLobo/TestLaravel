<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laravel Test</title>
</head>

<body>
    <ul>
        @foreach ($tasks as $task)
            <li><a href="/tasks/{{$task->id}}">{{ $task->body }}</a></li>
        @endforeach 
    </ul>
</body>
</html>