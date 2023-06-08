<?php 
    require 'class/GetInnerLinks.php';
    require 'class/GetScript.php';


    $mainPageScript=[];
   
    $mainLink = 'https://www.mozilor.com';
    $links = GetInnerLinks::getLink($mainLink);
    $mainPageScript = GetScript::getScript($mainLink);
    foreach ($mainPageScript as $mScript)
    {
        echo $mScript."<br>";
    }
    if(!empty($links))
    {
       
        foreach($links as $link)
        {
            $subLink =[];
            
            if(strpos($link,"https")!==false)
            {
                $subLink = GetScript::getScript($link);
            }
            else{
                $subLink = GetScript::getScript($mainLink.$link);
            }
            foreach($subLink as $script)
            {
                echo $script."<br>";
            }
        }
        
    }
    
?>