<!-- resources/views/tasks/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Task Details</title>
</head>
<body>
    <h1>{{ $task->title }}</h1>
    <p>Status: {{ $task->completed ? 'Completed' : 'Incomplete' }}</p>
    <a href="{{ route('tasks.index') }}">タスク一覧に戻る</a>
</body>
</html>
