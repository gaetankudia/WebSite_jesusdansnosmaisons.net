<?php 
              
    switch ($Action) 
    {  
       
        case 'Accueil': 
            include    GLOBAL_MODULE."VIEW/View_Accueil.php";

        break;
        case 'Team': 
                include    GLOBAL_MODULE."VIEW/View_Team.php";
    
        break;
        case 'Links':  
            include    GLOBAL_MODULE."VIEW/View_Links.php";

        break;
        case 'Help':  
            include    GLOBAL_MODULE."VIEW/View_Help.php";

        break;
      
        case 'Error_Page': 
            include    GLOBAL_MODULE."VIEW/View_Error.php";

        break;
        case 'Partenaire': 
            include    GLOBAL_MODULE."VIEW/View_Partenaire.php";

        break;
        case 'Contact': 
            include    GLOBAL_MODULE."VIEW/View_Contact.php";

        break;
        case 'About': 
            include    GLOBAL_MODULE."VIEW/View_About.php";

        break;
        default:
        
            include    GLOBAL_MODULE."VIEW/View_Accueil.php";
    
        break;
    } 
 

?>