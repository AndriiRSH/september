<?php

include "../../path.php";
include "../../app/controllers/posts.php";
?>
<!doctype html>
<html lang="ua">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>September</title>
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
<body>


<div class="">
    <?php include "../../app/include/sidebar-admin.php"; ?>
    <div class="posts col-9">
        <div class="button row">
            <a href="<?php echo BASE_URL . "admin/posts/create.php";?>" class="col-2 btn btn-success">Создать</a>
            <span class="col-1"></span>
            <a href="<?php echo BASE_URL . "admin/posts/index.php";?>" class="col-3 btn btn-warning">Редактировать</a>
        </div>
        <div class="row title-table">
            <h2>Добавление записи</h2>
        </div>
        <div class="row add-post">
            <div class="mb-12 col-12 col-md-12 err">
                <!-- Вывод массива с ошибками -->
                <?php include "../../app/helps/errorInfo.php"; ?>
            </div>
            <form action="create.php" method="post" enctype="multipart/form-data">
                <div class="col mb-4">
                    <input value="<?=$title; ?>" name="title" type="text" class="form-control" placeholder="Title" aria-label="Название статьи">
                </div>
                <div class="col">
                    <label for="editor" class="form-label">Содержимое записи</label>
                    <textarea name="content" id="editor" class="form-control" rows="6"><?=$content; ?></textarea>
                </div>
                <div class="input-group col mb-4 mt-4">
                    <input name="img" type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <select name="topic" class="form-select mb-2" aria-label="Default select example">
                    <option selected>Категория поста:</option>
                    <?php foreach ($topics as $key => $topic): ?>
                        <option value="<?=$topic['id']; ?>"><?=$topic['name'];?></option>
                    <?php endforeach; ?>
                </select>
                <div class="form-check">
                    <input name="publish" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Publish
                    </label>
                </div>
                <div class="col col-6">
                    <button name="add_post" class="btn btn-primary" type="submit">Добавить запись</button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<!-- Добавление визуального редактора к текстовому полю админки -->
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>


<script src="../../assets/js/scripts.js"></script>
</body>
</html>
