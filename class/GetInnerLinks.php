<?php 

    class GetInnerLinks
    {
        public $link;
        public $links =[];
        public static function getLink($link)
        {
            $i=0;
            $count=0;
            $links =[];
            $path = "//div[@id='nav-menu']//a/@href" ;
            $html = new DOMDocument();
            newLink:
            $html->loadHtmlFile($link);
            $xpath = new DOMXPath( $html );
            $nodelist = $xpath->query( $path);
            foreach ($nodelist as $n){
                if($count<5)
                {
                    array_push($links,$n->nodeValue);
                    $count++;
                }
                else
                {
                    break;
                }
                
            }
            if(sizeof($links)==5){
                return $links;
            }
            else{
                $link = $link.$links[$i];
                $i++;
                $path = "//a/@href";
                goto newLink;
            }
        }
    }
?>