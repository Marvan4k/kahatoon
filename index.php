<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Luxurious+Roman&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/login.css">
    <link rel="stylesheet" href="Css/avt-style.css">
    <title>Document</title>
</head>

<body>

    <div class="form-reg hider">
        <!--<form action="" method="post">-->
        <form action="check.php" method="post" class="form-reg-conta">
            <h1 class="title">Регистрация</h1>
            <div class="top">
                <div class="top-left">
                    <p class="form__title">Название команды*:</p>
                    <input required type="text" class="form__field" name="namekom" id="namekom" maxlength="20">
                    <p id="bot" class="form__title">Email*:</p>
                    <input required type="email" class="form__field" name="emaile" id="emaile">
                </div>
                <div class="top-right">
                    <p class="form__title">Логин*:</p>
                    <input required type="text" class="form__field" name="login" id="login">
                    <p id="bot" class="form__title">Пароль*:</p>
                    <input required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" type="password" class="form__field"
                        name="password" id="password">
                </div>
            </div>
            <div class="baner">
                <p class="buner-text">Баннер команды*:</p>
                <input required accept="image/png, image/jpeg, image/pdf" type="file" name="banner" id="banner">
            </div>
            <div class="participants">
                <h1>Участники команды:</h1>
                <button class="addperson" type="button">Добавить участника</button>
                <button class="deletePerson" type="button">Удалить участника</button>
            </div>
            <button class="register-btn" type="submit" disabled>Регистрация</button>
        </form>
        <!--</form>-->
        <div class="form-reg-back"></div>
    </div>
    <div class="login-ent hider">
        <form action="verif.php" method="post" class="login-ent-window">
            <h1>Вход</h1>
            <p class="login-ent-log">Логин</p>
            <input type="text" name="login" id="login">
            <p class="password">Пароль</p>
            <input type="password" name="password" id="password">
            <button class="enter" type="submit">Войти</button>
            <button class="reg" type='button'>Регистрация</button>
        </form>
        <div class="login-ent-back"></div>
    </div>
    <header>

        <div class="container">
            <a href="exit.php" class="title">Главная</a>
            <?php
            if ($_COOKIE['user'] == ''):
                ?>
                <div class="register">
                    <button class="login">Login</button>
                    <button class="singUp-button">Sing Up</button>
                </div>
            <?php else: ?>
                <a href="info-avt-p.php" class="profil">Профиль</a>
            <?php endif ?>
        </div>
    </header>
    <main>
        <div class="head">
            <div class="container">
                <h1>
                    Здесь вы сможете ознакомиться с зарегистрированными командами
                </h1>
            </div>
            <div class="elipse"></div>
        </div>
        <div class="comands">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    require "conect.php";
                    $result = $mysql->query("SELECT `namekom` FROM `Info`");
                    $user = $result->fetch_all();
                    for ($n = 0; $n < count($user); $n++) {
                        ?>
                        <a href="#" class="swiper-slide" style='text-decoration: none;'>
                            <div href="#" class="comandHref"><img src="Images/PNG/CommandF.png" /></div>
                            <div class="commandH1"><?php echo $user[$n][0] ?></div>
                        </a>
                        <?php
                    }

                    $mysql->close();
                    ?>


                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="avt">
                <h1>Авторы</h1>
                <p class="vit">Евменов Виталий</p>
                <p class="max">Баранов Максим</p>
                <p class="rom">Гаврилов Роман</p>
            </div>
            <p class="footer-right">Над проектом трудилась <span>команда “Жадные хомяки”</span></p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="Js/script.js"></script>
    <script src="Js/login.js"></script>
</body>

</html>