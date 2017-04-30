<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tic Tac Toe</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="screen screen-start" id="start">
    <header>
        <h1>Tic Tac Toe</h1>
        <p>
            Player 1 Name
            <input type="text" name="player_1_name_input" id="player_1_name_input" value=""/>
        </p>
        <a href="#" class="button new-game-button">Start game</a>

    </header>
</div>
<div class="board" id="board">
    <header>
        <h1>Tic Tac Toe</h1>
        <ul>
            <li class="players" id="player1">
                <span class="player_name_span" id="player1_name"></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" version="1.1">
                    <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-200.000000, -60.000000)" fill="#000000">
                            <g transform="translate(200.000000, 60.000000)">
                                <path class="circle-svg" d="M21 36.6L21 36.6C29.6 36.6 36.6 29.6 36.6 21 36.6 12.4 29.6 5.4 21 5.4 12.4 5.4 5.4 12.4 5.4 21 5.4 29.6 12.4 36.6 21 36.6L21 36.6ZM21 42L21 42C9.4 42 0 32.6 0 21 0 9.4 9.4 0 21 0 32.6 0 42 9.4 42 21 42 32.6 32.6 42 21 42L21 42Z"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </li>
            <li class="players" id="player2">
                <span class="player_name_span">Computer</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="43" viewBox="0 0 42 43" version="1.1">
                    <g class="cross-svg" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-718.000000, -60.000000)" fill="#000000">
                            <g transform="translate(739.500000, 81.500000) rotate(-45.000000) translate(-739.500000, -81.500000) translate(712.000000, 54.000000)">
                                <path d="M30 30.1L30 52.5C30 53.6 29.1 54.5 28 54.5L25.5 54.5C24.4 54.5 23.5 53.6 23.5 52.5L23.5 30.1 2 30.1C0.9 30.1 0 29.2 0 28.1L0 25.6C0 24.5 0.9 23.6 2 23.6L23.5 23.6 23.5 2.1C23.5 1 24.4 0.1 25.5 0.1L28 0.1C29.1 0.1 30 1 30 2.1L30 23.6 52.4 23.6C53.5 23.6 54.4 24.5 54.4 25.6L54.4 28.1C54.4 29.2 53.5 30.1 52.4 30.1L30 30.1Z"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </li>
        </ul>
    </header>
    <ul class="boxes">
        <li class="box" id="s_0"></li>
        <li class="box" id="s_1"></li>
        <li class="box" id="s_2"></li>
        <li class="box" id="s_3"></li>
        <li class="box" id="s_4"></li>
        <li class="box" id="s_5"></li>
        <li class="box" id="s_6"></li>
        <li class="box" id="s_7"></li>
        <li class="box" id="s_8"></li>
    </ul>
</div>

<div class="screen screen-win" id="finish">
    <header>
        <h1>Tic Tac Toe</h1>
        <p class="message"></p>
        <a href="#" class="button new-game-button">New game</a>
    </header>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>