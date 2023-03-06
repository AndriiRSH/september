<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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

    <div class="container">
      <div class="row justify-content-around">
        <div class="col-md-4 my-4">
          <div class="post">
            <img src="assets/img/1.jpeg" alt="Your Image" class="img-fluid d-block mx-auto" style=" max-width: 250px; max-height: 250px;">
            <h2><a href="#">Прикольна стаття</a></h2>
            <i class="far fa-user">Імя</i>
            <i class="far fa-calendar">Mar 11, 2022</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, eveniet cumque? Sit porro
              necessitatibus molestiae debitis nemo
            </p>
          </div>
        </div>
        <div class="col-md-4 my-4">
          <div class="post">
            <img src="assets/img/1.jpeg" alt="Your Image" class="img-fluid d-block mx-auto" style=" max-width: 250px; max-height: 250px;">
            <h2><a href="#">Прикольна стаття</a></h2>
            <i class="far fa-user">Імя</i>
            <i class="far fa-calendar">Mar 11, 2022</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, eveniet cumque? Sit porro
              necessitatibus molestiae debitis nemo
            </p>
          </div>
        </div>
      </div>
    </div>
      <?php include('app/include/footer.php'); ?>


  </div>
</body>

</html>