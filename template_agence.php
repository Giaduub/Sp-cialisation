<?php /* Template Name: page Agence */ ?>

<?php get_header(); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 text-center">
            <p>Salut</p>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-6 text-center">
            <h2>Création du groupe</h2>
            <div class="row">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus eos, a cumque accusantium vero
                    sit odio possimus qui officiis,
                    consectetur velit sapiente adipisci aut natus praesentium necessitatibus debitis in quo.</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-start">
        <div class="col-6">
        <h2>Création du groupe</h2>
            <div class="row">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus eos, a cumque accusantium vero
                    sit odio possimus qui officiis,
                    consectetur velit sapiente adipisci aut natus praesentium necessitatibus debitis in quo.</p>
            </div>
        </div>
    </div>
</div>

<?php $map = get_field('map');

echo '<div><p>'.$map.'</p></div>'

?>
<?php get_footer(); ?>