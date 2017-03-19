	<aside id="stikuss">
		<form action="" method="POST">
			<input id="message" placeholder="Message" name="message_post"/>
			<input id="message" placeholder="Num" name="num"/>
			<input class="btn btn-default" id="post_mess" type="submit" value="Post !"/>
		</form>
	</aside>		
	<div class="msg">
		<?php 
		foreach ($userpost as $postMess) {
		echo '<dl id="post"><dt><span class="btn btn-default" id="notif">dit : </span></dt><dt id="p"><span id="notif_para">' . $postMess['message'].'</span></dt><dd><span id="notif_time">' . $postMess['temp_reel'].'</span></dd></dl>';
		} 
		?>
	</div>