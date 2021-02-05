<?php
function checkAnagram($string1, $string2){
    return (count_chars($string1, 1) == count_chars($string2, 1));
}

function Anagram($arrayString){
    $result = array();
    $temp;
    foreach ($arrayString as $str ) {
        if(count($result)==0){
            array_push($result, array($str));
        }else{
            $i=0;
            while($i<count($result)){
                if(checkAnagram($str, $result[$i][0])==1){
                    array_push($result[$i], $str);
                    break;
                }else if ($i+1==count($result)){
                    array_push($result, array($str));
                    break;
                }
                
                $i+=1;
            }
        }
    }
    $i = 0;
    while ($i < count($result)) {
        $j = 0;
        while ($j < count($result[$i])) {
            echo "  ".$result[$i][$j] . "  ";
            $j += 1;
        }
        echo "\n";
        $i += 1;
    }
}


Anagram(["kita", "atik", "tika", "aku", "kia", "makan", "kua"]);
?>