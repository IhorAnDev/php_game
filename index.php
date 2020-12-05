<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Php game</title>
</head>

<body>
<div class="game__row">
    <div class="game__column">
        <div class="item-game">
            <div class="item-game__one">Первый игрок</div>
        </div>
    </div>
    <div class="game__column">
        <div class="game__form">
            <form action="index.php" method="post">
                <div class="game__action">
                    <div class="action-attack">
                        <div class="action-attack__title">Aтака</div>
                        <div>
                            <div class="action-attack__item">
                                <input tabindex="1" type="radio" name="attack"  value="attack"/>
                                Удар в голову
                            </div>
                        </div>

                        <div>
                            <div class="action-attack__item">
                                <input tabindex="2" type="radio" name="attack" value="attack"/>
                                Удар в грудь</div>
                        </div>
                        <div>
                            <div class="action-attack__item">
                                <input tabindex="3" type="radio" name="attack" value="attack"/>
                                Удар в живот</div>
                        </div>
                        <div>
                            <div class="action-attack__item">
                                <input tabindex="4" type="radio" name="attack" value="attack" />
                                Удар в пояс (пах)</div>
                        </div>
                        <div>
                            <div class="action-attack__item">
                                <input tabindex="5" type="radio" name="attack" value="attack"/>
                                Удар по ногам</div>
                        </div>
                    </div>
                    <div class="action-deffender">
                        <div class="action-deffender__title">Защита</div>
                        <div>
                            <div class="action-deffender__item">
                                <input tabindex="1" type="radio" name="deffender" value="deffender" />
                                Блок головы,груди и живота</div>
                        </div>

                        <div>
                            <div class="action-deffender__item">
                                <input tabindex="2" type="radio" name="deffender"  value="deffender"/>
                                Блок груди,живота и пояса</div>
                        </div>
                        <div>
                            <div class="action-deffender__item">
                                <input tabindex="3" type="radio" name="deffender" value="deffender"/>
                                Блок живота ,пояса и ног</div>
                        </div>
                        <div>
                            <div class="action-deffender__item">
                                <input tabindex="4" type="radio" name="deffender" value="deffender"/>
                                Блок пояса,ног и головы</div>
                        </div>
                        <div>
                            <div class="action-deffender__item">
                                <input tabindex="5" type="radio" name="deffender" value="deffender"/>
                                Блок ног ,головы и груди</div>
                        </div>
                    </div>
                </div>
                <div class="game-button">
                    <a href="#" class="button" type="submit"  name="submit">Вперед!</a>
                </div>
            </form>
        </div>
    </div>
    <div class="game__column">
        <div class="item-game">
            <div class="item-game__two">Второй игрок</div>
        </div>
    </div>
</div>
</body>

</html>