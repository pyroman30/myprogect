<?php
/*
Template Name: Монтаж
*/
?>

<?php 
get_header();
?>





  


<style type="text/css">
    	
h1{

	margin-top: 20px;
}


    </style>


<div class="bul">
      <!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="Строительство" width="100%">

      	


<div class="text">
  <h2><span>Грузоподъемные механизмы любой сложности</span></h2>
</div>
</div>


    <!-- Page Content -->
    <div class="container">

     





<?php the_post(); ?>
    
<?php the_content();  ?>



<?php get_footer();

		?>


	</div>

<link href="<?php bloginfo('template_directory') ?>/vendor/bootstrap/css/img.css" rel="stylesheet">