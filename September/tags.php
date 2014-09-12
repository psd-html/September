<?php include(dirname(__FILE__).'/header.php'); ?>

<section class="sub-title">
  <div class="wrap">
      <div class="bloc-12">
          <h3>Vous êtes dans les mots clés <span class="yellow"><?php $plxShow->tagName(); ?></span></h3>
      </div>
  </div>
</section>
    
    <section class="contenu">
     
       <div class="wrap">
      
            <article class="bloc-8">
                  
                  <!-- création de la boucle pour récuperer les articles du blog -->
                  <?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

                  <div class="blog">
                     <h2 class="titre"><?php $plxShow->artTitle('link'); ?></h2>
                     
                     <p>
                        <i class="flaticon-pencil5"></i><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> 
                        <i class="flaticon-diary"></i><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> 
                        <i class="flaticon-text"></i><?php $plxShow->artNbCom(); ?>
                    </p>
                    
                    <!-- Affichage du bloc Chapo -->
                    <?php $plxShow->artChapo(); ?>


                    <!-- informations de l'article, catégorie et Tags -->
                    <p>
                        <i class="flaticon-folder5"></i><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> 
                        <i class="flaticon-botton4"></i><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
                    </p>
                  </div>
                  
                 <!-- fin de la boucle -->
                   <?php endwhile; ?>


                    <div class="pagination">
                        <?php $plxShow->pagination(); ?>
                    </div> 

            </article>
            
           <?php include(dirname(__FILE__).'/sidebar.php'); ?>
          
           
       </div>

    </section>
    
 <?php include(dirname(__FILE__).'/footer.php'); ?>