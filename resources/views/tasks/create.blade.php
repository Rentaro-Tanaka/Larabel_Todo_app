<!-- resources/views/tasks/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>タスク作成</title>
</head>
<body>
    <h1>新しいタスク</h1>
    
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Task Title" required>
        <button type="submit">タスク作成</button>
    </form>

    <a href="{{ route('tasks.index') }}">タスク一覧に戻る</a>
</body>
</html>
