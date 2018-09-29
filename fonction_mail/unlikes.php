<?php

function sendlike($dest, $nb_unlike)
{
	 mail(
        $dest,
        "votre image a ete unlike ! );", 
		"nombre de unlikes : $nb_unlike",
        array('From'=>'camagru@supersite.com')
	)
}
