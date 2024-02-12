<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /login.php');
}
?>
<!doctype html>
<html lang="ru">
<head>
    <?php require_once __DIR__ . '/components/head.php'?>
    <title>Добавить заявку</title>
</head>
<body>
<?php require_once __DIR__ . '/components/header.php'?>
<section class="main">
    <div class="container">
        <div class="row">
            <h2 class="display-6 mb-3">Добавить заявку</h2>
        </div>
        <div class="row">
            <form action="action/tickets/store.php" method="post" enctype="multipart/form-data">
            <form>
                <div class="mb-3">
                    <label for="fullNameField" class="form-label">Тема заявки</label>
                    <input type="text" name="title" class="form-control" id="fullNameField" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="fullNameField" class="form-label">Изображение</label>
                    <input type="file" name="image" class="form-control" id="fullNameField" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="dobField" class="form-label">Описание</label>
                    <textarea name="description" class="form-control" id="dobField" aria-describedby="emailHelp"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Добавить заявку</button>
            </form>
        </div>
    </div>
</section>
<?php require_once __DIR__ . '/components/scripts.php'?>
</body>
</html>