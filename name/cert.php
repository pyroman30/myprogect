<?php
/*
Template Name: cert
*/
?>

<?php 
get_header();
?>


<!-- Page Content -->
    <div class="container">

    	<h1>
    
      </h1>

 <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="http://agistest4ec.1gb.ru/"> <i class="fa fa-home" aria-hidden="true"></i> </a>
        </li>
        <li class="breadcrumb-item active">Сертификация</li>
      </ol>


<div class="row">

<section class="news col-tx col-xs-2 col-sm-12 col-md-12 ">

    <?php the_post(); ?>
    
        <?php the_content();  ?>
     

     
     </section> 
</div>
</div>




<?php 
get_footer();
?>
