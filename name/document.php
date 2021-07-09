<?php
/*
Template Name: Документы
*/
?>

<?php 
get_header();
?>



<style type="text/css">
    	
h1{

	margin-top: 80px;
}


.n_image{
    height: 123px;
    width: 165px;
    float: left;
overflow: hidden;
}








    </style>




 <!-- Page Content -->
    <div class="container">



<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="http://agistest4ec.1gb.ru">На главную</a>
        </li>
        <li class="breadcrumb-item active">документы</li>
      </ol>

    <div class="row">
        <div class="col-tx col-xs-2 col-sm-12 col-md-12">

     <?php the_post(); ?>
    
        <?php the_content();  ?>

    </div>
</div>





<?php $recent = new WP_Query("posts_per_page=-1"); 



while($recent->have_posts()) : $recent->the_post();?>




<section class="content_news">

<div class="content_item left n_image"> 

<a href="<?php the_permalink(); ?>"><?php $thumbnail = get_the_post_thumbnail();

echo $thumbnail ?></a>

</div>



<span class="entry-date"> <?php echo get_the_date('j F Y    '); ?> </span>
 
<a class="content_name_news" href="<?php the_permalink(); ?>"> <p><?php the_title();?></p> </a>

<div class="content_text"><p>     </p> </div>

<a class="content_next" href="<?php the_permalink(); ?>">подробнее</a>

<div class="clear"></div>

<hr>

  </section>





<?php endwhile; ?>
















