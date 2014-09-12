<?php include(dirname(__FILE__).'/header.php'); ?>


<section class="sub-title">
      
  <div class="wrap">
      <div class="bloc-12">
          <h3>Vous êtes sur la page <span class="yellow">Blog</span></h3>
      </div>
  </div>

</section>


 <section class="contenu">
     
       <div class="wrap">
      
            <article class="bloc-12">

                  <div class="page">
                     <h2 class="titre"><?php $plxShow->artTitle(''); ?></h2>
                     
                     <p>
                        <i class="flaticon-pencil5"></i><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> 
                        <i class="flaticon-diary"></i><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> 
                        <i class="flaticon-text"></i><?php $plxShow->artNbCom(); ?>
                    </p>
                    
                    <!-- Affichage le contenu -->
                    <?php $plxShow->artContent(); ?>


                    <!-- informations de l'article, catégorie et Tags -->
                    <p>
                        <i class="flaticon-folder5"></i><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> 
                        <i class="flaticon-botton4"></i><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
                    </p>
                    
                    <h3>A propos de l'auteur, <?php $plxShow->artAuthor() ?>:</h3>
                    <?php $plxShow->artAuthorInfos('<blockquote>#art_authorinfos</blockquote>'); ?>

                    <?php include(dirname(__FILE__).'/commentaires.php'); ?>
                    
                  </div>

            </article>
            
       </div>

    </section>
    
 <?php include(dirname(__FILE__).'/footer.php'); ?>