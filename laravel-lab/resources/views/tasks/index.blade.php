<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список задач</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #fafafa;
            color: #333;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            font-size: 2rem;
            font-weight: 300;
            margin-bottom: 2rem;
            color: #222;
        }
        .add-btn {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            margin-bottom: 2rem;
            transition: background 0.2s;
        }
        .add-btn:hover {
            background: #0056b3;
        }
        .task-list {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .task-item {
            padding: 20px 24px;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .task-item:last-child {
            border-bottom: none;
        }
        .task-title {
            font-size: 1.1rem;
            flex-grow: 1;
        }
        .task-completed {
            text-decoration: line-through;
            color: #888;
        }
        .task-actions {
            display: flex;
            gap: 8px;
        }
        .btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            border-radius: 4px;
            font-size: 1.2rem;
            transition: background 0.2s;
        }
        .btn:hover {
            background: #f5f5f5;
        }
        .btn-toggle {
            color: #28a745;
        }
        .btn-delete {
            color: #dc3545;
        }
        .empty-state {
            background: white;
            border-radius: 8px;
            padding: 3rem 2rem;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            color: #666;
        }
        .empty-state p {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Задачи</h1>

        <a href="{{ route('tasks.create') }}" class="add-btn">+ Добавить задачу</a>

        @if($tasks->count() > 0)
        <div class="task-list">
            @foreach($tasks as $task)
                <div class="task-item">
                    <span class="task-title {{ $task->completed ? 'task-completed' : '' }}">
                        {{ $task->title }}
                    </span>
                    <div class="task-actions">
                        <form action="{{ route('tasks.toggle', $task) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-toggle" title="Отметить {{ $task->completed ? 'невыполненной' : 'выполненной' }}">
                                {{ $task->completed ? '✓' : '○' }}
                            </button>
                        </form>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline;"
                              onsubmit="return confirm('Удалить задачу?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" title="Удалить">
                                ×
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        @else
        <div class="empty-state">
            <p>Нет задач</p>
            <a href="{{ route('tasks.create') }}" class="add-btn">Создать первую задачу</a>
        </div>
        @endif
    </div>
</body>
</html>