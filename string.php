
<?php
$strings = ["Hello", "World", "PHP", "Programming"];


function countvowel($str){
    $vowel=['a','e','i','o','u','A','E','I','O','U'];
    $count=0;
    for ($i=0;$i<strlen($str);$i++){
        if(in_array($str[$i],$vowel)){
            $count++;
        }
    }
    return $count;
}

foreach($strings as $str){
    $revstring=strrev($str);
    $Vowelcount=countvowel($str);
    echo "Orginal String $str , Vowel Count: $Vowelcount , Reversed String: $revstring ";

}