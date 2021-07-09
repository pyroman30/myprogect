<?php
/*
Template Name: варианты сотрудничества
*/
?>

<?php 
get_header();
?>






    <!-- Page Content -->
    <div class="container">
    

       <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="http://agistest4ec.1gb.ru/"> <i class="fa fa-home" aria-hidden="true"></i> </a>
        </li>
        <li class="breadcrumb-item active">Наши партнеры</li>
      </ol>



     <div class="row">






<div class="text col-tx col-xs-2 col-sm-12 col-md-12">

<?php the_post(); ?>
    
<?php the_content();  ?>

</div>
</div>


</div>



<?php get_footer();

    ?>