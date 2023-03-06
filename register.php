<?php
    include ("path.php");
    include ("app/controllers/users.php");
?>
<!DOCTYPE html>
<html lang="ua">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>September</title>
  <link rel="stylesheet" href="assets/style/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</head>

<body>
  <div class="">
    <?php include('app/include/header.php'); ?>
    <div class="">

      <div class="container">
        <form class="row" method="post" action="register.php">
          <h2>Реєстрація</h2>
            <div class="mb-3 err">
                <p><?= $errMsg ?></p>
            </div>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Логін</label>
            <input name="login" value="<?= $login ?>" type="text" class="form-control" id="formGroupExampleInput">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input name="email" type="email" value="<?= $email ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Повторити пароль</label>
            <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2">
          </div>
          <button type="submit" class="btn btn-success">Зареєструватись</button>
          <a href="login.php" class="btn btn-primary mt-3">Війти</a>
        </form>
      </div>

      <hr class="line">

        <?php include('app/include/footer.php'); ?>

    </div>
    <script src="script/script.js"></script>
</body>

</html>