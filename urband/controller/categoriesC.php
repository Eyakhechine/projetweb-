<?php

include "config.php";
class categorieC
{

    function affichercategorie()
    {
        $sql="select * from crud.categories order by id asc";
        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }



}


?>