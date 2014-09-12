<?php include(dirname(__FILE__).'/header.php'); ?>


<section class="sub-title">
      
  <div class="wrap">
      <div class="bloc-12">
          <h3>Vous êtes sur la page <span class="yellow"><?php $plxShow->staticTitle(); ?></span></h3>
      </div>
  </div>

</section>


 <section class="contenu">
     
       <div class="wrap">
      
            <article class="bloc-8">

                  <div class="page" id="static-page-<?php echo $plxShow->staticId(); ?>">

                        <!-- Affichage le contenu de la page statique -->
                        <?php $plxShow->staticContent(); ?>

                      </div>

            </article>
            
           <?php include(dirname(__FILE__).'/sidebar.php'); ?>
          
           
       </div>

    </section>
    
 <?php include(dirname(__FILE__).'/footer.php'); ?>