<?php

function accountchanged($dest)
{
    mail(
	      $dest,
		  "confimation des modifications des preferences utilisateurs de votre compte", 
		   array('From'=>'camagru@supersite.com')
		)
}
