<?php
    include "path.php";
    include "app/database/db.php";
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

    <div class="slideshow-container">
      <div class="mySlides fade">
        <img class="slider__img" src="assets/img/1.jpeg">
        <div class="text">ЯК ВІДЧУВАТИ СЕБЕ ВПЕВНЕНІШОЮ ПЕРЕД ПЕРШИМ ПОБАЧЕННЯМ?</div>
      </div>
      <div class="mySlides fade">
        <img class="slider__img" src="assets/img/2.jpeg">
        <div class="text">ЧИ ІСНУЄ ІНТУЇЦІЯ І ЯК ЇЇ РОЗВИВАТИ</div>
      </div>
      <div class="mySlides fade">
        <img class="slider__img" src="assets/img/3.jpeg">
        <div class="text">ЩО У ЖІНЦІ НАЙВАЖЛИВІШЕ?</div>
      </div>
      <div class="mySlides fade">
        <img class="slider__img" src="assets/img/4.jpeg">
        <div class="text">ТОП-10 ТАРГАНІВ У НАШІЙ ГОЛОВІ</div>
      </div>
      <div class="mySlides fade">
        <img class="slider__img" src="assets/img/5.jpeg">
        <div class="text">План подорожі на 3 дні у 3-x різних країнах</div>
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div class="dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
    </div>


    <div class="section__content">
      <p class="section__name">SEPTEMBER - ЖІНОЧИЙ ЖУРНАЛ ДЛЯ НАТХНЕННЯ</p>
      <div class="section__text">
        <div class="section__text-1">
          <p>Надихайтесь.</p>
          <p>Та надихайте все, що навколо вас.</p>
          <p>Нашому світу потрібно більше щасливих жінок.</p>
          <p>Відчувайте наповну, що будучи собою ми можемо все.</p>
          <p>Абсолютно все.</p>
        </div>
        <div class="section__text-2">
          <p>Головне - відчути себе.</p>
          <p>І йти до своїх цілей.</p>
          <p>При будь-яких негараздах чи проблемах</p>
          <p>ми повинні не здаватись і чітко знати,</p>
          <p>що вихід є.</p>
        </div>
      </div>
    </div>

    <hr class="line">

    <div class="section__content">
      <div class="section__text">
        <div class="section__text-1">
          <h3 class="slogan">September -<br> це більше ніж просто<br> журнал.</h3> <br> <br> <br>
          <p>— ЗАСНОВНИЦЯ ЖУРНАЛУ <br> МАР'ЯНА ЯНКО</p>
        </div>
        <div class="section__text-2">
          <p>September створений для того, щоб якомога більше жінок,<br> дівчат були по-<br>справжньому щасливими. <br>
            Відчували свою внутрішню силу. <br>
            Журнал зібрано про все найцікавіше: про подорожі,<br> фотографії, їжу, тренди, новинки, стилі та людей.
            <br>
            <br>
            <br>
            Просто будьте тут. <br>
            Просто робіть те, що ви хочете. <br>
            Не дивіться, як робить хтось. <br>
            А тобіть так, як ви відчуваєте. <br> <br> <br>
            І будьте щасливими! <br> <br> <br>
            Instagram: @marianaseptember</p>
        </div>
      </div>
    </div>

    <div class="color">
      <div class="section__text-for-form color">
        <h4 class="section__text-for-text">ЗАПРОПОНУВАТИ МАТЕРІАЛ</h4>
        <p class="section__text-for-text-1">Бажаєте, щоб ваша стаття вийшла в журналі September<br>пишіть нам на пошту:
          writer@september.is</p>
      </div>

      <div class="section__content color color1">
        <div class="section__text">
          <div class="section__text-1">
            <p class="section__form-text">ПІДПИСАТИСЬ НА РОЗСИЛКУ</p>
            <p class="section__form-text-1">Бажаєте першими<br>дізнаватись про вихід<br>нової статті?</p>
          </div>
          <div class="section__text-2">
            <form action="">
              <input class="lastname" type="text" placeholder="Імя"> <br>
              <input class="lastname" type="text" placeholder="Прізвище"> <br>
              <input class="lastname" type="email" placeholder="E-mail"> <br>
              <button class="button">ПІДПИСАТИСЬ</button>
            </form>
          </div>
        </div>
      </div>
    </div>
      <?php include('app/include/footer.php'); ?>

  </div>
  <script src="assets/script/script.js"></script>
</body>

</html>