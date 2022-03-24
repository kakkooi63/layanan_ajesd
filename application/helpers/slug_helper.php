<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function slug($text)
{
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
    $text = trim($text, '-');
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = strtolower($text);
    $text = preg_replace('~[^-\w]+~', '', $text);

    if (empty($text))
    {
        return 'n-a';
    }

    return $text;
}



function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
?>