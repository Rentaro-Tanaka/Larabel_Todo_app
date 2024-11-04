<!-- resources/views/tasks/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>タスク編集</h1>
    
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $task->title }}" required>
        <label>
            <input type="checkbox" name="completed" {{ $task->completed ? 'checked' : '' }}> 完了
        </label>
        <button type="submit">タスク更新</button>
    </form>

    <a href="{{ route('tasks.index') }}">タスク一覧に戻る</a>
</body>
</html>
