<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Luxurious+Roman&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Css/info-avt.css">
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
    <div class="modal hidden">
        <div class="modal-window">
            <h1>
                Появились вопросы?
            </h1>
            <p class="modal-window__fnl">Ваше ФИО</p>
            <input type="text" class="modal-window__enter" name="fnl" id="fnl">
            <p class="modal-window__email">Электронная почта</p>
            <input type="email" class="modal-window__enter" name="email" id="email">
            <p class="modal-window__qvest">Ваш вопрос</p>
            <input type="text" class="modal-window__enter-qv" name="qvest" id="qvest">
            <button class="modal-window__addqv">Отправить</button>
        </div>
        <div class="modal-window-back"></div>
    </div>
    <header>
        <div class="container">
            <a href="exit.php" class="title">Главная</a>
            <?php
            if ($_COOKIE['id'] == ''):
                ?>
                <div class="register">
                    <button class="login">Login</button>
                    <button class="singUp-button">Sing Up</button>
                </div>
            <?php else: ?>
                <a href="info-avt.php" class="profil">Профиль</a>
            <?php endif ?>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="baner">
                <img src="Images/PNG/banner.png" alt="banner" class="baner__img">
            </div>
            <div class="nameofcomand">
                <div class="nameofcomand-head">
                    <h1>

                        Название команды

                    </h1>
                    <div class="tabs">
                        <ul class="tabs-list">
                            <li id="title-1" data-tab="tab-1" class="tabs-list-content ">Участник 1
                                <div class="tabs-list-block">
                                </div>
                            </li>
                            <li id="title-2" data-tab="tab-2" class="tabs-list-content hid">Участник 2
                                <div class="tabs-list-block">
                                </div>
                            </li>
                            <li id="title-3" data-tab="tab-3" class="tabs-list-content hid">Участник 3
                                <div class="tabs-list-block">
                                </div>
                            </li>
                            <li id="title-4" data-tab="tab-4" class="tabs-list-content hid">Участник 4
                                <div class="tabs-list-block">
                                </div>
                            </li>
                            <li id="title-5" data-tab="tab-5" class="tabs-list-content hid">Участник 5
                                <div class="tabs-list-block">
                                </div>
                            </li>
                            <li id="title-6" data-tab="tab-6" class="tabs-list-content hid">Участник 6
                                <div class="tabs-list-block">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="tab-1" class="nameofcomand-bot">
                    <img src="Images/PNG/user1.png" alt="user1" class="user1">
                    <div class="about">

                        <?php
                        require "conect.php";
                        $result = $mysql->query("SELECT * FROM `User1`");
                        $user = $result->fetch_all();
                        ?>
                        <h1 class="about__fnl">
                            Гаврилов Роман Абудабовиновагодич
                        </h1>
                        <p class="about__you">
                            Lorem ipsum dolo1111111111111114111114444r sit amet consectetur adipisicing elit. Deleniti
                            illo dolorum repellat assumenda aliquam dolor. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Deleniti illo dolorum repellat assumenda aliquam dolor.
                        </p>
                    </div>
                </div>
                <div id="tab-2" class="nameofcomand-bot hidden">
                    <img src="Images/PNG/user1.png" alt="user1" class="user1">
                    <div class="about">
                        <h1 class="about__fnl">
                            Гаврилов Роман Абудабовиновагодич
                        </h1>
                        <p class="about__you">
                            Lorem ipsum dolo1111111111111114111114444r sit amet consectetur adipisicing elit. Deleniti
                            illo dolorum repellat assumenda aliquam dolor. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Deleniti illo dolorum repellat assumenda aliquam dolor.
                        </p>
                    </div>
                </div>
                <div id="tab-3" class="nameofcomand-bot hidden">
                    <img src="Images/PNG/user1.png" alt="user1" class="user1">
                    <div class="about">
                        <h1 class="about__fnl">
                            Гаврилов Роман Абудабовиновагодич
                        </h1>
                        <p class="about__you">
                            Lorem ipsum dolo1111111111111114111114444r sit amet consectetur adipisicing elit. Deleniti
                            illo dolorum repellat assumenda aliquam dolor. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Deleniti illo dolorum repellat assumenda aliquam dolor.
                        </p>
                    </div>
                </div>
                <div id="tab-4" class="nameofcomand-bot hidden">
                    <img src="Images/PNG/user1.png" alt="user1" class="user1">
                    <div class="about">
                        <h1 class="about__fnl">
                            Гаврилов Роман Абудабовиновагодич
                        </h1>
                        <p class="about__you">
                            Lorem ipsum dolo1111111111111114111114444r sit amet consectetur adipisicing elit. Deleniti
                            illo dolorum repellat assumenda aliquam dolor. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Deleniti illo dolorum repellat assumenda aliquam dolor.
                        </p>
                    </div>
                </div>
                <div id="tab-5" class="nameofcomand-bot hidden">
                    <img src="Images/PNG/user1.png" alt="user1" class="user1">
                    <div class="about">
                        <h1 class="about__fnl">
                            Гаврилов Роман Абудабовиновагодич
                        </h1>
                        <p class="about__you">
                            Lorem ipsum dolo1111111111111114111114444r sit amet consectetur adipisicing elit. Deleniti
                            illo dolorum repellat assumenda aliquam dolor. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Deleniti illo dolorum repellat assumenda aliquam dolor.
                        </p>
                    </div>
                </div>
                <div id="tab-6" class="nameofcomand-bot hidden">
                    <img src="Images/PNG/user1.png" alt="user1" class="user1">
                    <div class="about">
                        <h1 class="about__fnl">
                            Гаврилов Роман Абудабовиновагодич
                        </h1>
                        <p class="about__you">
                            Lorem ipsum dolo1111111111111114111114444r sit amet consectetur adipisicing elit. Deleniti
                            illo dolorum repellat assumenda aliquam dolor. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Deleniti illo dolorum repellat assumenda aliquam dolor.
                        </p>
                    </div>
                </div>
                <div class="qvest-cont"><a href="#" class="qvestion">Задать вопрос</a></div>
            </div>
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
    <script src="Js/info.js"></script>
</body>

</html>