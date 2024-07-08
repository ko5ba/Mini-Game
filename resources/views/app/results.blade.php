<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты игр - Rock Paper Scissors</title>
    <link rel="stylesheet" href="{{ asset('app/results') }}">
</head>
<body>
    <section>
        <header>
            <div>
                <nav>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Главная страница</a></li>
                        <li><a href="{{ route('game') }}">Играть</a></li>
                        <li><a href="{{ route('results') }}">Статистика</a></li>
                        <li><a href="{{ route('edit') }}">Смена ника</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </section>
    <section>
        <article>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Ник игрока</th>
                            <th>Выбор игрока</th>
                            <th>Выбор бота</th>
                            <th>Результат игры</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($games as $game)
                            <tr>
                                <td>{{ $game->name_player }}</td>
                                <td>{{ $game->player_choice  }}</td>
                                <td>{{ $game->computer_choice }}</td>
                                <td>{{ $game->result_game }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </article>
    </section>
    <section>
        <footer>

        </footer>
    </section>
</body>
</html>