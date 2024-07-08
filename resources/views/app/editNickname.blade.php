<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Смена Ника - Rock Paper Scissors</title>
    <link rel="stylesheet" href="{{ asset('app/editNickname') }}">
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
                <h1 class="change-nick">Смена ника</h1>
            </div>
            <div>
                <form action="{{ route('update') }}" method="POST">
                    @csrf 
                    @method('patch')
                    <div>
                        <label for="nick">Введите новый ник</label>
                        <input id="nick" type="text" name="nickname" value="">
                    </div>
                    <div>
                        <button type="submit">Изменить</button>
                    </div>
                </form>
            </div>
        </article>
    </section>
    <section>
        <footer>

        </footer>
    </section>
</body>
</html>