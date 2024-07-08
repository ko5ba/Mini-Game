<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Играть - Rock Paper Scissors</title>
    <link rel="stylesheet" href="{{ asset('app/game.css') }}">
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
                <h1 class="h1-game">Играть</h1>
            </div>
            <div>
                <p>Выберите ваш ход:</p>
            </div>
            <div>
                <form action="{{ route('play') }}" method="POST">
                    @csrf
                    <label for="player_choice_1">Камень</label>
                    <input id="player_choice_1" type="radio" name="player_choice" value="rock">
                    <label for="player_choice_2">Бумага</label>
                    <input id="player_choice_2" type="radio" name="player_choice" value="paper">
                    <label for="player_choice_3">Ножницы</label>
                    <input id="player_choice_3" type="radio" name="player_choice" value="scissors">
                    <div>
                        <button type="submit">Выбрать</button>
                    </div>
                </form>
            </div>
            @if(isset($result)) 
                <p>{{ $result }}</p>
            @endif
        </article>
    </section>
    <section>
        <footer>

        </footer>
    </section>
</body>
</html>