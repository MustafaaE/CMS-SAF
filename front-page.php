<?php get_header();?>

<?php get_template_part('template-parts/hero'); ?>
<div class="container my-5">
<div class="d-flex justify-content-evenly">
    <a href="traningslager"><button type="button" class="btn btn-secondary">Träningsläger</button></a>
    <a href="travel_cup"><button type="button" class="btn btn-secondary">Cuper</button></a>
    <a href="fotbollsresor"><button type="button" class="btn btn-secondary">Fotbollsresor</button></a>
</div>
<?php get_template_part('template-parts/searchbar'); ?>


<div class="row" style="margin-bottom: 1rem;">
<h2 class="text-decoration-underline mb-4" >Våra resor</h2>

<?php
get_template_part('template-parts/camp-travel');
?>

</div>


<div class="row" style="margin-bottom: 1rem;">

<h2 class="text-decoration-underline mb-4">Våra resor</h2>

<?php
 get_template_part('template-parts/featured-travel');
 get_template_part('template-parts/newsletter');?>
</div>
</div>



<?php get_footer(); ?>