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
<style>
    @media (max-width: 992px) {
        #cost {
            display: none;
        }
    }
</style>
<body>
<!--Панель навигации по модулям пользователя-->
<?php require $_SERVER['DOCUMENT_ROOT']."/header.php"; ?>

<!--Основной контент страницы-->
<div class="page-content">
    <div class="container pt-3 pb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/lk/" style="color: var(--dark-cyan-color)">Профиль</a></li>
                <li class="breadcrumb-item"><a href="/lk/services/" style="color: var(--dark-cyan-color)">Услуги</a></li>
                <li class="breadcrumb-item"><a href="/lk/services/appointment.php?selected=procedures" style="color: var(--dark-cyan-color)">Процедуры</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Запись на процедуру
                </li>
            </ol>
        </nav>
        <!--Карточка основной информации о процедуре-->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h3 class="text-center font-weight-bold" style="color: var(--cyan-color)">Бассейн</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>
                            <span class="badge text-secondary float-md-right" style="background-color: var(--yellow-color)">500₽</span>
                            <span class="badge badge-info float-md-right mr-2">2 зал</span>
                        </h3>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-5">
                        <img src="http://baik-info.ru/sites/default/files/7_2008.jpg" class="img-fluid  rounded" alt="...">
                    </div>
                    <div class="col-lg-7">
                        <h5 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur laborum officia praesentium qui ratione sed, sit totam. Accusamus aliquam, amet consequuntur culpa cupiditate doloremque earum excepturi incidunt, ipsum laboriosam molestias officia quas quasi quibusdam quis, quo rem rerum sint suscipit unde! Ab, accusantium atque consectetur dolor dolores enim esse exercitationem explicabo impedit, laudantium maxime molestiae nisi non numquam porro quaerat quam quibusdam quod sequi veritatis. Animi at commodi cum dignissimos eligendi eos fugit iure laboriosam laudantium minima nam optio recusandae, repellat saepe temporibus. Accusamus blanditiis consectetur cupiditate esse mollitia nihil, nisi, non obcaecati pariatur qui quisquam rerum sunt temporibus tenetur.</h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <div class="alert alert-success">
                            <h5>Назначения:</h5>
                            <ul>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="alert alert-danger">
                            <h5>Противопоказания:</h5>
                            <ul>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h5 class="text-muted"> Специалист:
                    <a href="#" class="text-decoration-none" style="color: var(--dark-cyan-color)">Иванов И. И.</a>,
                    <a href="#" class="text-decoration-none" style="color: var(--dark-cyan-color)">Волкова В. В.</a>
                </h5>
            </div>
        </div>

        <!--Карточка выбора даты и времени записи на слугу-->
        <div class="card mt-3">
            <div class="card-body"></div>
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