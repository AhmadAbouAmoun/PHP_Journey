<?php

function mergeSort(array $array):array{
    if(count($array)<=1){
        return $array;
    }
    $middle=floor(count($array)/2);
    $left=array_slice($array,0,$middle);
    $right=array_slice($array,$middle);
    $left=mergeSort($left);
    $right=mergeSort($right);
    return merge($left,$right);
}
function merge(array $left,array $right){
    $i=$j=0;
    $result=[];
    while($i<count($left)&&$j<count($right)){
        if($left[$i]<=$right[$j]){
            $result[]=$left[$i];
            $i++;
        }
        else{
            $result[]=$right[$j];
            $j++;
        }
    }
    while($i<count($left)){
        $result[]=$left[$i];
        $i++;
    }
    while($j<count($right)){
        $result[]=$right[$j];
        $j++;
    }
    return $result;
}


$unsortedArray = [38, 27, 43, 3, 9, 82, 10];
$sortedArray = mergeSort($unsortedArray);

echo "Unsorted: " . implode(", ", $unsortedArray) . "\n";
echo "Sorted: " . implode(", ", $sortedArray) . "\n";
?>
