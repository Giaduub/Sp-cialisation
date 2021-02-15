<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>


<!-- Intro page  -->
<div class="container">
     <div class="row justify-content-sm-center justify-content-lg-between">
          <div class="col-sm-12 col-lg-6">
               <?php $para = get_field("paragraphe_introduction");
echo '<p class="goodPeople">'.$para.'</p>';
?>

          </div>
          <div class="col-sm-12 col-lg-3">
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                         <?php $slide = get_field("slider"); ?>
                         <div class="carousel-item active">
                              <img src="<?=$slide[0]["img_slider"]['url']?>" class="d-block  carousel-img"
                                   alt="Le carousel">
                         </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                    </a>
               </div>
          </div>
     </div>
</div>



<!-- End -->

<!-- Squad section -->

<section class="mobileFirst">

</section>

<section class="allTeam desktop">
     <hr class="hrBase">
     <section class="team d-flex align-items-center">

          <div class="container">
               <div class="row">
                    <p class="goodPeople equipe">L'équipe</p>

               <ul class="ch-grid">
                    <li>
                         <div class="ch-item ch-img-1">
                              <div class="ch-info-wrap">
                                   <div class="ch-info">
                                        <div class="ch-info-front ch-img-1"></div>
                                        <div class="ch-info-back">
                                             <h3>taxi</h3>
                                             <p>by Ana Villa-Zamora <a href="#">View on Dribbble</a>
                                             </p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </li>
                    <li>
                         <div class="ch-item ch-img-2">
                              <div class="ch-info-wrap">
                                   <div class="ch-info">
                                        <div class="ch-info-front ch-img-2"></div>
                                        <div class="ch-info-back">
                                             <h3>Stay Foxy</h3>
                                             <p>by Arnel Baluyot <a href="#">View on Dribbble</a></p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </li>
                    <li>
                         <div class="ch-item ch-img-3">
                              <div class="ch-info-wrap">
                                   <div class="ch-info">
                                        <div class="ch-info-front ch-img-3"></div>
                                        <div class="ch-info-back">
                                             <h3>Klava Jinx</h3>
                                             <p>by Jamal Charanek <a href="#">View on Dribbble</a></p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </li>
               </ul>
          </div>
          </div>

     </section>
     <hr class="hrBase">
</section>

<!-- Contact -->


<section class="contact d-flex  align-items-end">
    

          <div class="col-6">
               <p class="goodPeople"> Prêt à nous confier votre projet ?</p>
          </div>
          
    

         
          <div class="col-6">
               <p class="solid goodPeople">Contactez-nous!</p>
          </div>


</section>

<?php get_footer(); ?>