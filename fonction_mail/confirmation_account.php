<?php

function confirmaccount($dest, $token)
{
    mail(
        $dest,
        "confimation de compte", 
        "Merci pour votre inscription !\n Veuillez confimer votre inscription en cliquant sur http://site/validation?token=" . $token,
        array('From'=>'camagru@supersite.com')
        )
}
