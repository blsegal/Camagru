<?php

function resetpassword($dest, $lien)
{
	 mail(
	       $dest,
		   "renitialisation du mot de passe", 
		   "veuillez reinitialiser votre mot de passe en cliquant sur ce lien : $lien",
		   array('From'=>'camagru@supersite.com')
		)
}
