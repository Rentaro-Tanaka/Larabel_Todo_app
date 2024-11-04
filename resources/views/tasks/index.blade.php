<!-- resources/views/tasks/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>タスク一覧</title>
</head>
<body>
    <h1>タスク一覧</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }} - {{ $task->completed ? 'Completed' : 'Incomplete' }}
                <a href="{{ route('tasks.show', $task->id) }}">詳細</a>
                <a href="{{ route('tasks.edit', $task->id) }}">編集</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </form>
            </li>
        @endforeach
    </ul>
    <h2>タスクを追加</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Task Title" required>
        <button type="submit">追加</button>
    </form>
</body>
</html>
