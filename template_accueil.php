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
                              <img src="<?=$slide[0]["img_slider"]['url']?>" class="d-block img-fluid carousel-img"
                                   alt="Le carousel">
                         </div>
                         <?php
    
    for ($i=1; $i < count($slide); $i++){
     echo '<div class="carousel-item">
     <img src="'.$slide[$i]["img_slider"]['url'].'" class="d-block carousel-img img-fluid" alt="...">
     </div>';
   }?>


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

<!-- Mobile Squad -->
<section class="mobileFirst">
     <section class="blackF">
     <ul class="ch-grid">
     <?php $imgcowork = get_field('img_cowork1');
                     $name1 = get_field('name_cowork1');
                     $git1 = get_field ('git_cowork1');
                     $link1 = get_field ('linkedin_cowork1');

                    echo '<li>
                         <div class="ch-item ch-img-1">
                              <div class="ch-info-wrap">
                                   <div class="ch-info">
                                        <div class="ch-info-front ch-img-1"><img src="'.$imgcowork['url'].'" class="ch-info-front ch-img-1 img-fluid"></div>
                                        <div class="ch-info-back">
                                             <h3 class="goodPeople">'.$name1.'</h3>
                                             <p><a href="'.$git1.'">Github</a>
                                             </p>
                                             <p><a href="'.$link1.'">Linkedin</a>
                                             </p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </li>'

                    ?>
</ul>
     </section>
     <section class="white">
     <ul class="ch-grid">
     <?php $imgcowork2 = get_field('img_cowork2');
                     $name2 = get_field('name_cowork2');
                     $git2 = get_field ('git_cowork2');
                     $link2 = get_field ('linkedin_cowork2');

                    echo '<li>
                         <div class="ch-item ch-img-2">
                              <div class="ch-info-wrap">
                                   <div class="ch-info">
                                        <div class="ch-info-front ch-img-2"><img src="'.$imgcowork2['url'].'" class="ch-info-front ch-img-2 img-fluid"></div>
                                        <div class="ch-info-back">
                                             <h3 class="goodPeople">'.$name2.'</h3>
                                             <p><a href="'.$git2.'">Github</a>
                                             </p>
                                             <p><a href="'.$link2.'">Linkedin</a>
                                             </p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </li>'

                    ?>
</ul>
     </section>
     <section class="blackS">
     <ul class="ch-grid">
     <?php $imgcowork3 = get_field('img_cowork3');
                     $name3 = get_field('name_work3');
                     $git3 = get_field ('git_cowork3');
                     $link3 = get_field ('linkedin_cowork3');

                    echo '<li>
                         <div class="ch-item ch-img-3">
                              <div class="ch-info-wrap">
                                   <div class="ch-info">
                                        <div class="ch-info-front ch-img-2"><img src="'.$imgcowork3['url'].'" class="ch-info-front ch-img-3 img-fluid"></div>
                                        <div class="ch-info-back">
                                             <h3 class="goodPeople">'.$name3.'</h3>
                                             <p><a href="'.$git3.'">Github</a>
                                             </p>
                                             <p><a href="'.$link3.'">Linkedin</a>
                                             </p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </li>'

                    ?>
               </ul>
     </section>

</section>

<!-- Mobile Squad end -->

<section class="allTeam desktop">


     <hr class="hrBase">
     <section class="team d-flex align-items-center">

          <div class="container">
               <div class="row">
                    <p class="goodPeople equipe">L'équipe</p>

               <ul class="ch-grid">
                    <?php $imgcowork = get_field('img_cowork1');
                     $name1 = get_field('name_cowork1');
                     $git1 = get_field ('git_cowork1');
                     $link1 = get_field ('linkedin_cowork1');

                    echo '<li>
                         <div class="ch-item ch-img-1">
                              <div class="ch-info-wrap">
                                   <div class="ch-info">
                                        <div class="ch-info-front ch-img-1"><img src="'.$imgcowork['url'].'" class="ch-info-front ch-img-1 img-fluid"></div>
                                        <div class="ch-info-back">
                                             <h3 class="goodPeople">'.$name1.'</h3>
                                             <p><a href="'.$git1.'">Github</a>
                                             </p>
                                             <p><a href="'.$link1.'">Linkedin</a>
                                             </p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </li>'

                    ?>
                     <?php $imgcowork2 = get_field('img_cowork2');
                     $name2 = get_field('name_cowork2');
                     $git2 = get_field ('git_cowork2');
                     $link2 = get_field ('linkedin_cowork2');

                    echo '<li>
                         <div class="ch-item ch-img-2">
                              <div class="ch-info-wrap">
                                   <div class="ch-info">
                                        <div class="ch-info-front ch-img-2"><img src="'.$imgcowork2['url'].'" class="ch-info-front ch-img-2 img-fluid"></div>
                                        <div class="ch-info-back">
                                             <h3 class="goodPeople">'.$name2.'</h3>
                                             <p><a href="'.$git2.'">Github</a>
                                             </p>
                                             <p><a href="'.$link2.'">Linkedin</a>
                                             </p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </li>'

                    ?>
                      <?php $imgcowork3 = get_field('img_cowork3');
                     $name3 = get_field('name_work3');
                     $git3 = get_field ('git_cowork3');
                     $link3 = get_field ('linkedin_cowork3');

                    echo '<li>
                         <div class="ch-item ch-img-3">
                              <div class="ch-info-wrap">
                                   <div class="ch-info">
                                        <div class="ch-info-front ch-img-2"><img src="'.$imgcowork3['url'].'" class="ch-info-front ch-img-3 img-fluid"></div>
                                        <div class="ch-info-back">
                                             <h3 class="goodPeople">'.$name3.'</h3>
                                             <p><a href="'.$git3.'">Github</a>
                                             </p>
                                             <p><a href="'.$link3.'">Linkedin</a>
                                             </p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </li>'

                    ?>
               </ul>
          </div>
          </div>

     </section>
     <hr class="hrBase">
</section>

<!-- Squad End -->


<!-- Contact -->


<section class="contact d-flex  align-items-end">
          <div class="container-fluid ">
         <div class="row">
          <div class="col-12">
               <p class="goodPeople"> Prêt à nous confier votre projet ?</p>
          </div>
          </div>
    

         <div class="row">
          <div class="col-6">
               <p class="solid goodPeople">Contactez-nous!</p>
          </div></div>

</div>
</section>

<?php get_footer(); ?>