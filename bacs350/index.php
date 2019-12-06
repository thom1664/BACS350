<?php
    /*
        Create page content by rendering a template.
    */
    $site_title = 'BACS 350';
    
    $page_title = "David's Brain";
    
    $content = '
       
        <p> 
            My Class Assignments:
        </p>
 
        
              <h2>  <a href="https://shrinking-world.com/unc/bacs350">Class website</a> </h2>
            
            
               <h2> <a href="project">Projects</a> </h2>
       
            
               <h2> <a target="https://github.com/thom1664/UNC-BACS350-Demo" href="https://github.com/thom1664/UNC-BACS350-Demo" >My Repository </a> </h2>
        
           
              <h2>  <a href="pattern">Design Patterns</a> </h2>
          
            
          
               <h2> <a href="skills">Skills</a> </h2>
          
             
      
        
    ';
    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);
?>