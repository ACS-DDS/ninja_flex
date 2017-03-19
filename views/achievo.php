<section id="effet_de_beaute">
	<?=include('create.php');?>
</section>
<section class="cardrillage">
	<aside class="side_gauche">
		<div class="barre_l">
			<!-- <dl>
				<dt id="titre_co_on">
				</dt>
				<dt id="liste_co_block"> -->

					<!-- <article id="liste_co" class="btn btn-default">				
						<span class="lol"></span>
						<?php //echo $_SESSION['client']; ?>			
					</article>	 -->
				<!-- </dt>
				<dt id="liste_co_block"> -->
					<!-- <article id="liste_co" class="btn btn-default">				
						<span class="lol"></span>
						<?php// echo $_SESSION['client']; ?>			
			 		</article>
				</dt>				
			</dl>  -->
		</div>
	</aside>
	<aside id="flex_flux" class="">
		<?php
			foreach($lecture as $lec) :
				echo '<article id="block_donnees"><a id="delete_link" class="btn btn-default" href="http://yassinl.dijon.codeur.online/achievo_project/index.php/delete?id=' . $lec['id'] . '">x</a><h4 id="titre_block">'. $lec['titre'] . '</h4><div id="para_intitul"><span id="intitulle_block">' . $lec['intitulle'] . '</span></div><p class="p_progression"><progress value="' . $lec['progression'] . '" min="'. $lec['progression'] .'" max="'.$lec['objectif'].'"></progress></p><h3 class="r_u_d"><a id="update_link" class="btn btn-default" href="http://yassinl.dijon.codeur.online/achievo_project/index.php/update?id=' . $lec['id'] . '">Update note</a></h3></article>';			
			endforeach;					
			?>
	</aside>
	<aside class="side_droite">
		<div class="barre_l">
				
	</aside>
</section>

