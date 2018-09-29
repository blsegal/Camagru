<?php

function sendcomment($dest, $comment)
{
	 mail(
	         $dest,
		     "Votre Image a ete commente !", 
			 "commentaire : $comment",
		     array('From'=>'camagru@supersite.com')
		)
}
