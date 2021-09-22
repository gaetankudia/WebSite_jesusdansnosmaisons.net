<?php
               
    switch ($Action) 
    {  
       
        case 'Videos':
              
               
            include    MEDIA_MODULE."VIEW/View_Videos.php";

            break;
        case 'Service_Details':

            include    MEDIA_MODULE."VIEW/View_Service".$_GET['Service'] .".php";

        break;
       
        default:
        
        include    GLOBAL_MODULE."VIEW/View_Error.php";
    
            break;
    } 
 

?>