<?php
/*
Template Name: Руководство
*/
?>
<?php 
get_header();
?>



<style type="text/css">
    	
h1{

	margin-top: 80px;
}


    </style>


    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="http://agistest4ec.1gb.ru/"> <i class="fa fa-home" aria-hidden="true"></i> </a>
        </li>
        <li class="breadcrumb-item active">Руководство</li>
      </ol>

  

    <?php  the_post(); ?>

    <?php the_content();  ?>

</div>








  









			<?php
get_footer();
			?>


		