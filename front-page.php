<?php get_header();?>

<?php get_template_part('template-parts/hero'); ?>
<div class="container my-5">
<div class="d-flex justify-content-evenly">
    <a href="travel_camp"><button type="button" class="btn btn-secondary">Träningsläger</button></a>
    <a href="travel_cup"><button type="button" class="btn btn-secondary">Cuper</button></a>
    <a href="travel_soccer"><button type="button" class="btn btn-secondary">Fotbollsresor</button></a>
</div>
<?php get_template_part('template-parts/searchbar'); ?>


<div class="row" style="margin-bottom: 1rem;">
<h2 class="text-decoration-underline mb-4" >Träningsläger</h2>

<?php
get_template_part('template-parts/travel_camp_fp');
?>

</div>


<div class="row" style="margin-bottom: 1rem;">

<h2 class="text-decoration-underline mb-4">Cupresor</h2>

<?php
 get_template_part('template-parts/travel_cup_fp');
 get_template_part('template-parts/newsletter');?>
</div>
</div>



<?php get_footer(); ?>