<?php

function sendlike($dest, $nblike)
{
	 mail(
        $dest,
        "votre image a ete like !", 
		"nombre de likes : $nblike",
        array('From'=>'camagru@supersite.com')
    )

}
