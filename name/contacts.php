<?php
/*
Template Name: Контакты
*/
?>


<?php 
get_header();
?>


<style type="text/css">
      
h1{

  margin-top: 100px;
}


    </style>


  



  <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
  

     <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="http://agistest4ec.1gb.ru/"> <i class="fa fa-home" aria-hidden="true"></i> </a>
        </li>
        <li class="breadcrumb-item active">Контакты</li>
      </ol>


      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A454024e0856a83c6388423861bdb8eed5283f3604f319f2659c35fd144937ff7&amp;source=constructor" width="700" height="400" frameborder="0"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Контактная информация</h3>
          <hr>
          <p>
            117405 г.Москва
            <br>Кирпичные выемки, д2, корп.1
            <br>
          </p>
          <p>
            <abbr title="Phone">Телефон</abbr>: 8(495) 783-44-67
          </p>
          <p>
            <abbr title="Email">Email</abbr>:
            <a href="mailto:info@agiseng.ru">info@agiseng.ru; </a>

            <a href="mailto:7834467@mail.ru">7834467@mail.ru</a>
           
          </p>
          <p>
            <abbr title="Hours">Часы работы</abbr>: Понедельник - Пятница: с 9:00 до 18:00 
          </p>
        </div>
      </div>
      <!-- /.row -->

   

<div class="maps">
  
<p>Проезд: метро «Аннино», последний вагон из центра, выход направо в стеклянные двери до конца и налево наверх (это переход на другую сторону Варшавское шоссе к торговому центру электроники «Юлмарт»), далее 200 м вдоль Варшавского шоссе в сторону центра мимо заправки «Газпромнефть» до ул. Кирпичные Выемки.  Справа будет 5-этажное сине-бело-оранжевое здание, вход со стороны ул. Кирпичные Выемки, подъезд №9, этаж 3.</p>


<img class="img-responsive" src= "<?php bloginfo('template_directory') ?>/img/схемапроезда.jpg">


</div>








    </div>
    <!-- /.container -->

 

    <?php  
get_footer();

    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>




  </body>

</html>

