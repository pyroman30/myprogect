

<?php

/*
Template Name: News
*/

?>



<?php

get_header();

?>


<style>
.img-responsive {

margin: 0 1em 1em 0;

}
</style>



   <!-- Page Content -->
   

    <div class="container">

    

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="http://agistest4ec.1gb.ru/"> <i class="fa fa-home" aria-hidden="true"></i> </a>
        </li>
        <li class="breadcrumb-item active">Новости</li>
      </ol>







  
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


</div>



<?php
get_footer();
?>


