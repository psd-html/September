<?php include(dirname(__FILE__).'/header.php'); ?>


<section class="sub-title">
      
  <div class="wrap">
      <div class="bloc-12">
          <h3><?php $plxShow->lang('ERROR'); ?></h3>
      </div>
  </div>

</section>


 <section class="contenu">
     
       <div class="wrap">
      
            <article class="bloc-12">

                  <div class="page">

                    <h3><?php $plxShow->erreurMessage(); ?></h3>
                    <img src="<?php $plxShow->template(); ?>/img/404.png" alt="la page n'existe plus...." class="page404">

                  </div>

            </article>
            
       </div>

    </section>
    
 <?php include(dirname(__FILE__).'/footer.php'); ?>