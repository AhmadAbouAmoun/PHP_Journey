<?php
$word=$_POST["word"];
$length=0;
while(isset($word[$length])){
    $length++;
}
for($i=0;$i<$length/2;$i++){
    if($word[$i]!=$word[$length-$i-1]){
        echo"$word is not palindromic";
        return;
    }
}
echo"$word is palindromic";