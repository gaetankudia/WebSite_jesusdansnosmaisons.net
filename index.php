<?php 

include_once 'Global/config.php'; 

        if(isset($_POST['Module'])  && isset($_POST['Action']) ) 
        {    
                if (isset($_POST['Action'])) 
                {
                    $Action=$_POST['Action'];
                    $Module=$_POST['Module'];
                }
                include "Modules/".$_POST['Module']."/controler.".$_POST['Module'].".php";  
        }
        else if(isset($_GET['Module'])  && isset($_GET['Action']) ) 
        {    
                if (isset($_GET['Action'])) 
                {
                    $Action=$_GET['Action'];
                    $Module=$_GET['Module'];
                } 
                 include "Modules/".$_GET['Module']."/controler.".$_GET['Module'].".php";  
        } 
        else 
        {    
            include    GLOBAL_MODULE."VIEW/View_Accueil.php";

        } 
?>