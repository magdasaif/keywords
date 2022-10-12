<?php

namespace AboSaif\Keywords;

Class KeywordsFactory{


    protected $keywords;

    public function __construct($keywords = null)
    {
        if($keywords){
           $this->keywords=$keywords; 
        }
        
    }

    public function converStringToKeywords()
    {
         //replace any \n\r with <br /> tage and then explode depend on it to git array of all keywords
         $keys=explode('<br />',preg_replace("/\r\n|\r|\n/", '<br />', $this->keywords));
         $new_keys=array();
         foreach($keys as $k){
             //handel ecah array element to be span tag
             array_push($new_keys,'<span class="badge bg-secondary keywords">'.$k.'</span><br/>');
         }
    
         //return $this->keywords;
         return $new_keys;
    }

    //---------------------------------------------------------//
    function returnStringFromKeywords($data){
        $data=implode($data);
        $f_step=str_replace('<span class="badge bg-secondary keywords">',"",$data) ;
        $s_step= str_replace('</span>',"",$f_step) ;
        $skill= str_replace('<br/>',",",$s_step) ;
        $skill= str_replace(",","\n",$skill) ;
        return $skill;
    }
}