<?php
$whose_user = 1;

$getSelected = $_GET['selected'];
if($getSelected != "patient" &&
    $getSelected != "doctor" &&
    $getSelected != "administrator") {
    header("Location: /lk/users/");
    exit;
}
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
    <link rel="stylesheet" href="/css/chosen.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="/js/all.js"></script>
    <script src="/js/chosen.js"></script>
    <title>Регистрация пользователя</title>
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
                <li class="breadcrumb-item active" aria-current="page">Регистрация нового пользователя</li>
            </ol>
        </nav>
        <ul class="nav nav-pills flex-column flex-sm-row mb-2" role="tablist">
            <li class="nav-item flex-sm-fill text-sm-center mr-1 ml-1" role="presentation">
                <a class="nav-link tab-bg-active font-weight-bold <? if($getSelected == 'patient') echo "active";?>" onclick="window.history.pushState('', '', '/lk/users/add.php?selected=patient');"  data-toggle="tab" href="#patient" role="tab">
                    <i class="fas fa-user-injured mr-1"></i>Пациент
                </a>
            </li>
            <li class="nav-item flex-sm-fill text-sm-center mr-1 ml-1" role="presentation">
                <a class="nav-link tab-bg-active font-weight-bold <? if($getSelected == 'doctor') echo "active";?>" onclick="window.history.pushState('', '', '/lk/users/add.php?selected=doctor');" data-toggle="tab" href="#doctor" role="tab">
                    <i class="fas fa-user-md mr-1"></i> Медицинский персонал
                </a>
            </li>
            <li class="nav-item flex-sm-fill text-sm-center mr-1 ml-1" role="presentation">
                <a class="nav-link tab-bg-active font-weight-bold <? if($getSelected == 'administrator') echo "active";?>" onclick="window.history.pushState('', '', '/lk/users/add.php?selected=administrator');" data-toggle="tab" href="#admin" role="tab">
                    <i class="fas fa-user-cog mr-1"></i> Администрация
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show <? if($getSelected == 'patient') echo "active";?>" id="patient" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <h5 class="mb-3 text-muted text-uppercase bg-light p-2">
                                <i class="fas fa-user mr-1"></i>
                                Персональные данные
                            </h5>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Фамилия <strong style="color: var(--red--color)">*</strong></label>
                                        <input type="text" class="form-control" name="user_name" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Имя <strong style="color: var(--red--color)">*</strong></label>
                                        <input type="text" class="form-control" name="user_surname" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Отчество</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <label style="color: var(--yellow-color)">Пол <strong style="color: var(--red--color)">*</strong></label><br>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="radio_box_man" name="user_sex" value="man" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="radio_box_man">М</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="radio_box_woman" name="user_sex" value="woman" class="custom-control-input">
                                        <label class="custom-control-label" for="radio_box_woman">Ж</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label style="color: var(--yellow-color)">Категория пациента <strong style="color: var(--red--color)">*</strong></label><br>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="radio_box_healing" name="user_type" value="healing" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="radio_box_healing">Лечащийся</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="radio_box_resting" name="user_type" value="resting" class="custom-control-input">
                                        <label class="custom-control-label" for="radio_box_resting">Отдыхающий</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Дата рождения <strong style="color: var(--red--color)">*</strong></label>
                                        <input type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Фото</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" accept="image/*">
                                            <label class="custom-file-label" for="customFile" data-browse="Открыть">Выберите фото</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="color: var(--yellow-color)">Паспортные данные <strong style="color: var(--red--color)">*</strong></label>
                                <div class="form-row">
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" placeholder="99 99 999999" name="user_passport_id" required>
                                        <small class="text-muted form-text">Серия и номер</small>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" placeholder="999-999" name="user_passport_code" required>
                                        <small class="text-muted form-text">Код подразделения</small>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="date" class="form-control" placeholder="Дата выдачи" required>
                                        <small class="text-muted form-text">Дата выдачи</small>
                                    </div>
                                    <div class="col-lg">
                                        <input type="text" class="form-control" required>
                                        <small class="text-muted form-text">Кем выдан</small>
                                    </div>
                                </div>
                            </div>


                            <h5 class="mb-3 text-muted text-uppercase bg-light p-2">
                                <i class="fas fa-address-book mr-1"></i>
                                Контактные данные
                            </h5>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Почта <strong style="color: var(--red--color)">*</strong></label>
                                        <input type="email" class="form-control" placeholder="example@mail.ru" name="user_email" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Номер телефона </label>
                                        <input type="tel" class="form-control" placeholder="+7 (999) 99-99-999" name="user_phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col alert alert-danger alert-dismissible fade show animate slideIn mr-3 ml-3" role="alert" style="font-size: 12px">
                                    Аккаунт с указанным адресом электронной почтой уже существует. Измените или проверьте введенный адрес электронной почты!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Регион <strong style="color: var(--red--color)">*</strong></label>
                                        <select id="chosen_required_region" name="user_region" class="form-control form-control-chosen-required" data-placeholder="Выберите регион" required>
                                            <option></option>
                                            <option value="22"> Алтайский край</option>
                                            <option value="28"> Амурская область</option>
                                            <option value="29"> Архангельская область</option>
                                            <option value="30"> Астраханская область</option>
                                            <option value="31"> Белгородская область</option>
                                            <option value="32"> Брянская область</option>
                                            <option value="33"> Владимирская область</option>
                                            <option value="34"> Волгоградская область</option>
                                            <option value="35"> Вологодская область</option>
                                            <option value="36"> Воронежская область</option>
                                            <option value="77"> г. Москва</option>
                                            <option value="79"> Еврейская автономная область</option>
                                            <option value="75"> Забайкальский край</option>
                                            <option value="37"> Ивановская область</option>
                                            <option value="99"> Иные территории, включая город и космодром Байконур</option>
                                            <option value="38"> Иркутская область</option>
                                            <option value="07"> Кабардино-Балкарская Республика</option>
                                            <option value="39"> Калининградская область</option>
                                            <option value="40"> Калужская область</option>
                                            <option value="41"> Камчатский край</option>
                                            <option value="09"> Карачаево-Черкесская Республика</option>
                                            <option value="42"> Кемеровская область - Кузбасс</option>
                                            <option value="43"> Кировская область</option>
                                            <option value="44"> Костромская область</option>
                                            <option value="23">	Краснодарский край</option>
                                            <option value="24">	Красноярский край</option>
                                            <option value="45">	Курганская область</option>
                                            <option value="46">	Курская область</option>
                                            <option value="47">	Ленинградская область</option>
                                            <option value="48">	Липецкая область</option>
                                            <option value="49">	Магаданская область</option>
                                            <option value="50">	Московская область</option>
                                            <option value="51">	Мурманская область</option>
                                            <option value="83">	Ненецкий автономный округ</option>
                                            <option value="52">	Нижегородская область</option>
                                            <option value="53">	Новгородская область</option>
                                            <option value="54">	Новосибирская область</option>
                                            <option value="55">	Омская область</option>
                                            <option value="56">	Оренбургская область</option>
                                            <option value="57">	Орловская область</option>
                                            <option value="58">	Пензенская область</option>
                                            <option value="59">	Пермский край</option>
                                            <option value="25">	Приморский край</option>
                                            <option value="60">	Псковская область</option>
                                            <option value="01">	Республика Адыгея (Адыгея)</option>
                                            <option value="04">	Республика Алтай</option>
                                            <option value="02">	Республика Башкортостан</option>
                                            <option value="03">	Республика Бурятия</option>
                                            <option value="05">	Республика Дагестан</option>
                                            <option value="06">	Республика Ингушетия</option>
                                            <option value="08">	Республика Калмыкия</option>
                                            <option value="10">	Республика Карелия</option>
                                            <option value="11">	Республика Коми</option>
                                            <option value="91">	Республика Крым</option>
                                            <option value="12">	Республика Марий Эл</option>
                                            <option value="13">	Республика Мордовия</option>
                                            <option value="14">	Республика Саха (Якутия)</option>
                                            <option value="15">	Республика Северная Осетия - Алания</option>
                                            <option value="16">	Республика Татарстан (Татарстан)</option>
                                            <option value="17">	Республика Тыва</option>
                                            <option value="19">	Республика Хакасия</option>
                                            <option value="61">	Ростовская область</option>
                                            <option value="62">	Рязанская область</option>
                                            <option value="63">	Самарская область</option>
                                            <option value="78">	Санкт-Петербург</option>
                                            <option value="64">	Саратовская область</option>
                                            <option value="65">	Сахалинская область</option>
                                            <option value="66">	Свердловская область</option>
                                            <option value="92">	Севастополь</option>
                                            <option value="67">	Смоленская область</option>
                                            <option value="26">	Ставропольский край</option>
                                            <option value="68">	Тамбовская область</option>
                                            <option value="69">	Тверская область</option>
                                            <option value="70">	Томская область</option>
                                            <option value="71">	Тульская область</option>
                                            <option value="72">	Тюменская область</option>
                                            <option value="18">	Удмуртская Республика</option>
                                            <option value="73">	Ульяновская область</option>
                                            <option value="27">	Хабаровский край</option>
                                            <option value="86">	Ханты-Мансийский автономный округ - Югра</option>
                                            <option value="74">	Челябинская область</option>
                                            <option value="20">	Чеченская Республика</option>
                                            <option value="21">	Чувашская Республика - Чувашия</option>
                                            <option value="87">	Чукотский автономный округ</option>
                                            <option value="89">	Ямало-Ненецкий автономный округ</option>
                                            <option value="76">	Ярославская область</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Населенный пункт <strong style="color: var(--red--color)">*</strong></label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-3 text-muted text-uppercase bg-light p-2">
                                <i class="fas fa-file-medical-alt mr-1"></i>
                                Cостояние здоровья
                            </h5>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Субъективные жалобы <strong style="color: var(--red--color)">*</strong></label>
                                        <textarea class="form-control"></textarea>
                                        <small class="text-muted form-text">Кратко с чем поступил пациент</small>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn mt-2 text-white" style="background-color: var(--dark-cyan-color)">
                                    <i class="fas fa-user-injured mr-2"></i>Зарегистрировать
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show <? if($getSelected == 'doctor') echo "active";?>" id="doctor" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <h5 class="mb-3 text-muted text-uppercase bg-light p-2">
                                <i class="fas fa-user mr-1"></i>
                                Персональные данные
                            </h5>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Фамилия <strong style="color: var(--red--color)">*</strong></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Имя <strong style="color: var(--red--color)">*</strong></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Отчество</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Дата рождения <strong style="color: var(--red--color)">*</strong></label>
                                        <input type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Фото</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" accept="image/*">
                                            <label class="custom-file-label" for="customFile" data-browse="Открыть">Выберите фото</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-3 text-muted text-uppercase bg-light p-2">
                                <i class="fas fa-address-book mr-1"></i>
                                Контактные данные
                            </h5>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Почта <strong style="color: var(--red--color)">*</strong></label>
                                        <input type="email" class="form-control" placeholder="example@mail.ru" name="user_email" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Номер телефона </label>
                                        <input type="tel" class="form-control" placeholder="+7 (999) 99-99-999" name="user_phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col alert alert-danger alert-dismissible fade show animate slideIn mr-3 ml-3" role="alert" style="font-size: 12px">
                                    Аккаунт с указанным адресом электронной почтой уже существует. Измените или проверьте введенный адрес электронной почты!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>

                            <h5 class="mb-3 text-muted text-uppercase bg-light p-2">
                                <i class="fas fa-briefcase mr-1"></i>
                                Профессиональные навыки
                            </h5>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Должность <strong style="color: var(--red--color)">*</strong></label>
                                        <select id="chosen_required_post" name="user_med_post" class="form-control form-control-chosen-required" data-placeholder="Выберите должность" required>
                                            <option></option>
                                            <option value="doctor"> Врач</option>
                                            <option value="nurse"> Медсестра (процедура)</option>
                                            <option value="nurse"> Медсестра (обследование)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-5" id="chosen_med">
                                    <!--Тег для элемента выбора направления работы медперсонала-->
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Квалификационная категория <strong style="color: var(--red--color)">*</strong></label>
                                        <select id="chosen_required_category" name="user_med_category" class="form-control form-control-chosen-required" data-placeholder="Выберите категорию" required>
                                            <option></option>
                                            <option value="0"> Без категории</option>
                                            <option value="1"> Первая</option>
                                            <option value="2"> Вторая</option>
                                            <option value="3"> Высшая</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Стаж <strong style="color: var(--red--color)">*</strong></label>
                                        <input type="number" class="form-control" min="0" placeholder="Лет">
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn mt-2 text-white" style="background-color: var(--dark-cyan-color)">
                                    <i class="fas fa-user-md mr-2"></i>Зарегистрировать
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show <? if($getSelected == 'administrator') echo "active";?>" id="admin" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <h5 class="mb-3 text-muted text-uppercase bg-light p-2">
                                <i class="fas fa-user mr-1"></i>
                                Персональные данные
                            </h5>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Фамилия <strong style="color: var(--red--color)">*</strong></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Имя <strong style="color: var(--red--color)">*</strong></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Отчество</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <h5 class="mb-3 text-muted text-uppercase bg-light p-2">
                                <i class="fas fa-address-book mr-1"></i>
                                Контактные данные
                            </h5>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Почта <strong style="color: var(--red--color)">*</strong></label>
                                        <input type="email" class="form-control" placeholder="example@mail.ru" name="user_email" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Номер телефона </label>
                                        <input type="tel" class="form-control" placeholder="+7 (999) 99-99-999" name="user_phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col alert alert-danger alert-dismissible fade show animate slideIn mr-3 ml-3" role="alert" style="font-size: 12px">
                                    Аккаунт с указанным адресом электронной почтой уже существует. Измените или проверьте введенный адрес электронной почты!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>

                            <h5 class="mb-3 text-muted text-uppercase bg-light p-2">
                                <i class="fas fa-address-book mr-1"></i>
                                Прочее
                            </h5>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label style="color: var(--yellow-color)">Должность <strong style="color: var(--red--color)">*</strong></label>
                                        <select id="chosen_required_post_adm" name="user_post" class="form-control form-control-chosen-required" onselect="" data-placeholder="Выберите должность" required>
                                            <option></option>
                                            <option value="main">Главный администратор</option>
                                            <option value="registrar">Регистратор</option>
                                            <option value="maintenance">Управляющий услугами</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn mt-2 text-white" style="background-color: var(--dark-cyan-color)">
                                    <i class="fas fa-user-cog mr-2"></i>Зарегистрировать
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Футер (нижний блок)-->
<?php require $_SERVER['DOCUMENT_ROOT']."/footer.php"; ?>
</body>
<script>
    $('#chosen_required_region').chosen();
    $('#chosen_required_post').chosen();
    $('#chosen_required_post_adm').chosen();
    $('#chosen_required_category').chosen();

    $(document).on('change', '#chosen_required_post', function () {
        let index = this.options.selectedIndex;
        if(index === 1) {
            $('#chosen_med').append(
                '<div class="form-group" id="div_chosen_profession">' +
                    '<label style="color: var(--yellow-color)">Специальность <strong style="color: var(--red--color)">*</strong></label>' +
                    '<select multiple  id="chosen_required_profession" name="user_med_profession" class="form-control form-control-chosen-required" data-placeholder="Выберите специальность" required>' +
                        '<option></option>' +
                        '<option value="profession1"> Специальность 1</option>' +
                        '<option value="profession2"> Специальность 2</option>' +
                    '</select>' +
                '</div>'
            );
            $('#chosen_required_profession').chosen();
            $('#chosen_required_procedure').closest('div').remove();
            $('#chosen_required_examination').closest('div').remove();
        }
        if(index === 2) {
            $('#chosen_med').append(
                '<div class="form-group" id="div_chosen_procedure">' +
                    '<label style="color: var(--yellow-color)">Процедура <strong style="color: var(--red--color)">*</strong></label>' +
                    '<select multiple id="chosen_required_procedure" name="user_med_procedure" class="form-control form-control-chosen-required" data-placeholder="Выберите процедуру" required>' +
                        '<option></option>' +
                        '<option value="procedure1"> Процедура 1</option>' +
                        '<option value="procedure2"> Процедура 2</option>' +
                    '</select>' +
                '</div>'
            );
            $('#chosen_required_profession').closest('div').remove();
            $('#chosen_required_procedure').chosen();
            $('#chosen_required_examination').closest('div').remove();
        }
        if(index === 3) {
            $('#chosen_med').append(
                '<div class="form-group" id="div_chosen_examination">' +
                    '<label style="color: var(--yellow-color)">Обследование <strong style="color: var(--red--color)">*</strong></label>' +
                    '<select multiple id="chosen_required_examination" name="user_med_examination" class="form-control form-control-chosen-required" data-placeholder="Выберите обследование" required>' +
                        '<option></option>' +
                        '<option value="examination1"> Обследование 1</option>' +
                        '<option value="examination2"> Обследование 2</option>' +
                    '</select>' +
                '</div>'
            );
            $('#chosen_required_profession').closest('div').remove();
            $('#chosen_required_procedure').closest('div').remove();
            $('#chosen_required_examination').chosen();
        }
        console.log(index);
    });


    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    $('input[name="user_phone"]').mask("+7 (999) 99-99-999");
    $('input[name="user_passport_id"]').mask("99 99 999999");
    $('input[name="user_passport_code"]').mask("999-999");

</script>
</html>
