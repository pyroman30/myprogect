<?php

	/*

	Template Name: Archives
Template post type: post, page
	*/

?>

<!-- Page Content -->
    

     

<?php

get_header();

?>




 <!-- Page Content -->
    <div class="container">

    
<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="http://agistest4ec.1gb.ru">На главную</a>
        </li>
        <li class="breadcrumb-item active">архив</li>
      </ol>




     
</div>
</div>


</li>
 </ol>
</div>

<div class="container">



  <div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content', get_post_type() );

      

   

    endwhile; // End of the loop.
    ?>
    
</div>
    </main><!-- #main -->
  </div><!-- #primary -->

</div>
<?php

get_footer();