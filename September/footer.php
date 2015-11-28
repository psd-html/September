<footer role="contentinfo">
        <div class="wrap">
            <div class="bloc-12">
                <p>
                    <?php $plxShow->mainTitle('link'); ?> © 2014 - <?php $plxShow->subTitle(); ?> -                
                    <?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml<i class="flaticon-leaf3"></i></a> 
                    <?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?>  
                    <a href="http://libertea.fr">utilisant la technologie SASS</a> 
                    <a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"> <i class="flaticon-lock4"> </i><?php $plxShow->lang('ADMINISTRATION') ?></a> -  
                    <a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a> - 
                    <?php $plxShow->httpEncoding() ?>  <a href="http://validator.w3.org/check?uri=referer"><i class="flaticon-accepted"> </i> W3C</a>
                </p>
            </div>
        </div>
    </footer>
    
        <!-- scripts js -->
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        
        <script>
        $(window).scroll(function() {
           
        
        $('.blog').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("effet");
			}
		});
            
        
		});    

    </script>  

</body>
</html>
