<?php
     class GetScript
     {
         public static function getScript($link)
         {
             $html = new DOMDocument();
             $html->loadHtmlFile($link);
             $xpath = new DOMXPath( $html );
             $links =[];
             $nodelist = $xpath->query( "//script" );
 
             foreach ($nodelist as $n){                 
                 array_push($links,$n->nodeValue);
             }
             return $links;
         }
     }
?>