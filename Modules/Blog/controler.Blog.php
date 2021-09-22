<?php
               
               switch ($Action) 
               {  
                  
                   case 'Blog':
                         
                          
                       include    BLOG_MODULE."VIEW/View_Blog.php";
           
                       break;
                   case 'Blog_Details':
           
                       include    BLOG_MODULE."VIEW/View_Blog_Details_".$_GET['Blog'] .".php";
           
                   break;
                  
                   default:
                   
                   include    GLOBAL_MODULE."VIEW/View_Error.php";
               
                       break;
               } 
 

?>