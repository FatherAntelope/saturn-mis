<?php
$whose_user = 1;
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/images/logo-mini.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="/js/all.js"></script>
    <title>СанКонтроль</title>
</head>
<body>
<!--Панель навигации по модулям пользователя-->
<?php require $_SERVER['DOCUMENT_ROOT']."/header.php"; ?>

<!--Основной контент страницы-->
<div class="page-content">
    <div class="container pt-3 pb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/lk/" style="color: var(--dark-cyan-color)">Профиль</a></li>
                <li class="breadcrumb-item"><a href="/lk/users/" style="color: var(--dark-cyan-color)">Пользователи</a></li>
                <li class="breadcrumb-item active" aria-current="page">Иванов И. И.</li>
            </ol>
        </nav>

        <!--Карточка с основной информацией пациента-->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2 text-center">
                        <img src="/images/user.png" class="img-thumbnail rounded-circle mb-2" width="120" alt="">
                        <br>
                        <button type="button" disabled class="btn mt-1 btn-sm text-white" style="background-color: var(--cyan-color)"><i class="fas fa-comments"></i></button>
                    </div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col">
                                <h4 class="font-weight-bold" style="color: var(--dark-cyan-color)">Иванов Иван Иванович</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <h5 class="text-muted">Возраст: 22 (01.01.1999)</h5>
                                <h5 class="text-muted">Пол: Мужской</h5>
                                <h5 class="text-muted">Рост: 170 cм. </h5>
                                <h5 class="text-muted">Категория: Лечащийся </h5>
                            </div>
                            <div class="col-lg-7">
                                <h5 class="text-muted">ID карты: 123456789</h5>
                                <h5 class="text-muted">Терапевт:
                                    <a href="#" style="color: var(--dark-cyan-color); text-decoration: none">Иванов И.И.</a>
                                    / Отсутствует
                                </h5>
                                <h5 class="text-muted">Дата поступления: 01.01.1999</h5>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <h5 class="text-muted">Группа пациента:</h5>
                                    </div>
                                    <div class="col">
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="badge badge-pill text-white" style="background-color: var(--dark-cyan-color)">С сахарным диабетом</span>
                                            </li>
                                            <li>
                                                <span class="badge badge-pill text-white" style="background-color: var(--dark-cyan-color)">После Ковид</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="border-top: 3px solid var(--yellow-color);">
                <div class="row">
                    <div class="col-lg-4">
                        <h5 class="text-muted">Паспортные данные:</h5>
                        <p class="text-muted mb-1">
                            <strong>Серия и номер:</strong>
                            <span class="ml-2">99 99 999999</span>
                        </p>
                        <p class="text-muted mb-1">
                            <strong>Код подразделения:</strong>
                            <span class="ml-2">111-111</span>
                        </p>
                        <p class="text-muted mb-1">
                            <strong>Дата выдачи:</strong>
                            <span class="ml-2">01.01.2020</span>
                        </p>
                        <p class="text-muted mb-1">
                            <strong>Кем выдан:</strong>
                            <span class="ml-2">Отделом МВД по РБ в г.Уфа</span>
                        </p>
                    </div>
                    <div class="col-lg-8">
                        <h5 class="text-muted">Субъективные жалобы:</h5>
                        <h6 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda natus nemo quis sequi. Aut debitis deleniti id in possimus quidem, quo tempore tenetur! A cupiditate dicta dolore doloremque eius ex impedit laborum, libero, mollitia nam nemo optio praesentium qui quo reprehenderit similique totam. Ab delectus labore nihil. Deserunt, enim, vel!</h6>
                    </div>
                </div>
                <hr style="border-top: 3px solid var(--yellow-color);">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-around flex-xl-row flex-md-row flex-sm-column flex-column">
                        <a href="tel:+7 (999) 999-99-99" aria-haspopup="true" style="text-decoration: none; color: var(--yellow-color)">
                            <h5 class="font-weight-bold"><i class="fas fa-phone mr-1"></i> +7 (999) 999-99-99</h5>
                        </a>
                        <a href="mailto:mail@mail.ru" aria-haspopup="true" style="text-decoration: none; color: var(--yellow-color)">
                            <h5 class="font-weight-bold"><i class="fas fa-envelope-open-text mr-1"></i>mail@mail.ru</h5>
                        </a>
                        <h5 class="font-weight-bold" style="color: var(--yellow-color)">
                            <i class="fas fa-map-marked-alt mr-1"></i>
                            Республика Башкортостан
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <!--Карточка основной информации врача-->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2 text-center">
                        <img src="/images/user.png" class="img-thumbnail rounded-circle mb-2" width="120" alt="">
                        <br>
                        <button type="button" disabled class="btn mt-1 btn-sm text-white" style="background-color: var(--cyan-color)"><i class="fas fa-comments"></i></button>
                    </div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col">
                                <h4 class="font-weight-bold" style="color: var(--dark-cyan-color)">Иванова Екатерина Ивановна</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="text-muted">Возраст: 45</h5>
                                <h5 class="text-muted">Должность: Врач / Специалист по услугам </h5>
                                <h5 class="text-muted">Квалификационная категория: Без категории / Первая / Вторая / Высшая</h5>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="text-muted">Стаж: 14 лет</h5>
                                <h5 class="text-muted">Специальность:</h5>
                                <span class="badge badge-pill text-white" style="background-color: var(--dark-cyan-color)">Стоматолог</span>
                                <span class="badge badge-pill text-white" style="background-color: var(--dark-cyan-color)">Терапевт</span>
                                <h5 class="text-muted">Услуги:</h5>
                                <span class="badge badge-pill text-white" style="background-color: var(--dark-cyan-color)">Бассейн</span>
                                <span class="badge badge-pill text-white" style="background-color: var(--dark-cyan-color)">ОАК</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="border-top: 3px solid var(--yellow-color);">
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted">Биография:</h5>
                        <h6 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda natus nemo quis sequi. Aut debitis deleniti id in possimus quidem, quo tempore tenetur! A cupiditate dicta dolore doloremque eius ex impedit laborum, libero, mollitia nam nemo optio praesentium qui quo reprehenderit similique totam. Ab delectus labore nihil. Deserunt, enim, vel!</h6>
                    </div>
                    <div class="col">
                        <h5 class="text-muted">Образование:</h5>
                        <ul class="text-muted">
                            <li>
                                1998 г. Медицинский колледж при БГМУ по специальности зубной врач
                            </li>
                            <li>
                                2003-2008 гг. Башкирский государственный медицинский университет
                            </li>
                            <li>
                                2008-2009 гг. Прохождение интернатуры по специальности «Терапевтическая стоматология»
                            </li>
                        </ul>
                    </div>
                </div>
                <hr style="border-top: 3px solid var(--yellow-color);">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-around flex-xl-row flex-md-row flex-sm-column flex-column">
                        <a href="tel:+7 (999) 999-99-99" aria-haspopup="true" style="text-decoration: none; color: var(--yellow-color)">
                            <h5 class="font-weight-bold"><i class="fas fa-phone mr-1"></i> +7 (999) 999-99-99</h5>
                        </a>
                        <a href="mailto:mail@mail.ru" aria-haspopup="true" style="text-decoration: none; color: var(--yellow-color)">
                            <h5 class="font-weight-bold"><i class="fas fa-envelope-open-text mr-1"></i>mail@mail.ru</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--Карточка основной информации администратора-->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2 text-center">
                        <img src="/images/user.png" class="img-thumbnail rounded-circle mb-2" width="120" alt="">
                        <br>
                        <button type="button" disabled class="btn mt-1 btn-sm text-white" style="background-color: var(--cyan-color)"><i class="fas fa-comments"></i></button>
                    </div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col">
                                <h4 class="font-weight-bold" style="color: var(--dark-cyan-color)">Иванов Иван Иванович</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <h5 class="text-muted">Должность: главный администратор</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="border-top: 3px solid var(--yellow-color);">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-around flex-xl-row flex-md-row flex-sm-column flex-column">
                        <a href="tel:+7 (999) 999-99-99" aria-haspopup="true" style="text-decoration: none; color: var(--yellow-color)">
                            <h5 class="font-weight-bold"><i class="fas fa-phone mr-1"></i> +7 (999) 999-99-99</h5>
                        </a>
                        <a href="mailto:mail@mail.ru" aria-haspopup="true" style="text-decoration: none; color: var(--yellow-color)">
                            <h5 class="font-weight-bold"><i class="fas fa-envelope-open-text mr-1"></i>mail@mail.ru</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Список всплывающих уведомлений-->
<div class="position-fixed p-3" style="z-index: 5; right: 0; bottom: 0;">
    <!--Всплывающее уведомление-->
    <div id="notificationToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
        <div class="toast-header">
            <strong class="mr-auto" style="color: var(--cyan-color)">
                <i class="fas fa-bell mr-2"></i> "Название уведомления"
            </strong>
            <small>"Время"</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at atque cumque delectus dolore ea enim nam porro, qui repellat.
        </div>
    </div>
</div>

<!--Футер (нижний блок)-->
<?php require $_SERVER['DOCUMENT_ROOT']."/footer.php"; ?>

</body>
<script>
    $('#notificationToast').toast('show');

</script>
</html>