<?php 
    require 'class/GetInnerLinks.php';
    require 'class/GetScript.php';


    $mainPageScript=[];
    $subLink =[];
    $mainLink = 'https://www.mozilor.com';
    $links = GetInnerLinks::getLink($mainLink);
    $mainPageScript = GetScript::getScript($mainLink);
    // foreach ($mainPageScript as $mScript)
    // {
    //     echo $mScript."<br>";
    // }
    if(!empty($links))
    {
        var_dump($links);
        foreach($links as $link)
        {
            echo $link."-";
            $subLink = GetScript::getScript($mainLink.$link);
            foreach($subLink as $script)
            {
                echo $script."<br>";
            }
        }
        
    }
    
?>