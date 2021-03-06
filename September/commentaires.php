<?php if(!defined('PLX_ROOT')) exit; ?>

	<?php if($plxShow->plxMotor->plxRecord_coms): ?>

		<h3><?php echo $plxShow->artNbCom(); ?></h3>

		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

		<div id="<?php $plxShow->comId(); ?>" class="comment">

				<p class="info_comment">
					<a class="num-com" href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a>
					<time datetime="<?php $plxShow->comDate('#num_year(4)-#num_month-#num_day #hour:#minute'); ?>"><?php $plxShow->comDate('#day #num_day #month #num_year(4) &#64; #hour:#minute'); ?></time>
					<?php $plxShow->comAuthor('link'); ?>
					<?php $plxShow->lang('SAID'); ?> :
				</p>
				<p class="content_com type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent(); ?></p>

		</div>

		<?php endwhile; # Fin de la boucle sur les commentaires ?>

		<p>
		   <i class="flaticon-signal1"></i><?php $plxShow->comFeed('rss',$plxShow->artId()); ?>
		</p>


	<?php endif; ?>

	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

	<div id="form">

		<h3>
			<?php $plxShow->lang('WRITE_A_COMMENT') ?>
		</h3>

		<form action="<?php $plxShow->artUrl(); ?>#form" method="post">
			<fieldset>
				<p>
					<label for="id_name"><?php $plxShow->lang('NAME') ?> :</label>
					<input id="id_name" name="name" type="text" size="20" value="<?php $plxShow->comGet('name',''); ?>" />
				</p>
				<p>
					<label for="id_site"><?php $plxShow->lang('WEBSITE') ?> :</label>
					<input id="id_site" name="site" type="text" value="<?php $plxShow->comGet('site',''); ?>" />
				</p>
				<p>
					<label for="id_mail"><?php $plxShow->lang('EMAIL') ?> :</label>
					<input id="id_mail" name="mail" type="text" value="<?php $plxShow->comGet('mail',''); ?>" />
				</p>
				<p>
					<label for="id_content" class="lab_com"><?php $plxShow->lang('COMMENT') ?> :</label>
					<textarea id="id_content" name="content"><?php $plxShow->comGet('content',''); ?></textarea>
				</p>
				<p class="com-alert">
					<?php $plxShow->comMessage(); ?>
				</p>
				<?php if($plxShow->plxMotor->aConf['capcha']): ?>
				<p>
                <label for="id_rep">
                    <?php echo $plxShow->lang('ANTISPAM_WARNING') ?> <br>
                    <i class="flaticon-padlock"></i><?php $plxShow->capchaQ(); ?> :
                </label>

				</p>
				<p>
                    <input id="id_rep" name="rep" type="text" class="capcha"/>
				</p>
				
				<?php endif; ?>
				
				<p>
					<input type="submit"  value="<?php $plxShow->lang('SEND') ?>" />
				</p>
			</fieldset>
		</form>

	</div>

	<?php else: ?>

		<p>
			<?php $plxShow->lang('COMMENTS_CLOSED') ?>.
		</p>

	<?php endif; # Fin du if sur l'autorisation des commentaires ?>