<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #fafafa;
            color: #333;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .welcome-container {
            text-align: center;
            background: white;
            border-radius: 12px;
            padding: 3rem 2rem;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 300;
            margin-bottom: 1rem;
            color: #222;
        }

        .subtitle {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }

        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            padding: 14px 28px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 500;
            transition: all 0.2s;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background: #0056b3;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: #f8f9fa;
            color: #666;
            border: 2px solid #e9ecef;
        }

        .btn-secondary:hover {
            background: #e9ecef;
            border-color: #dee2e6;
        }

        .features {
            text-align: left;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid #e9ecef;
        }

        .features h3 {
            font-size: 1.2rem;
            font-weight: 500;
            margin-bottom: 1rem;
            color: #555;
        }

        .features ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .features li {
            padding: 4px 0;
            color: #666;
        }

        .features li:before {
            content: "✓ ";
            color: #28a745;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="welcome-container">
        <h1>Задачи</h1>
        <p class="subtitle">Задачи</p>

        <div class="action-buttons">
            <a href="{{ route('tasks.index') }}" class="btn btn-primary">
                Мои задачи
            </a>
            <a href="{{ route('tasks.create') }}" class="btn btn-secondary">
                Новая задача
            </a>
        </div>

        <div class="features">
            <h3>Возможности</h3>
            <ul>
                <li>Добавление задач</li>
                <li>Отметка выполненных</li>
                <li>Удаление задач</li>
            </ul>
        </div>
    </div>
</body>

</html>