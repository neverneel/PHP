<?php
// Find the second most frequent element in an array

$a = [2,5,2,2,6,5,7];

// $count1 = 0;
// $count2 = 0;
// $new1 = null;
// $new2 = null;


// for($i = 0; $i < count($a); $i++){
//         $maxCount = 0;

//     for($j = 0; $j < count($a); $j++){
//         if($a[$i] == $a[$j]){
//             $maxCount++;
//         }
//     }
//     if($maxCount > $count1){
//         $count2 = $count1;
//         $new2 = $new1;
//         $count1 = $maxCount;
//         $new1 = $a[$i];
// } elseif($maxCount > $count1 && $maxCount != $new1){
//     $count2 = $maxCount;
//     $new2 = $a[$i];
// }

    
// }


$baseArray = [2,5,2,2,2,5,7,6,5,7];

$countArray = [];
echo "<pre>";

for($i=0; $i<count($baseArray); $i++){
    
    if(isset($countArray[$baseArray[$i]])) {
        $countArray[$baseArray[$i]] ++;
    } else {
        $countArray[$baseArray[$i]] = 1;
    }
    
    //print_r($countArray);
}

arsort($countArray);
print_r($countArray);

$count = 1;
foreach($countArray as $key => $ca) {     
    if($count == 3) {
        echo "Second most repeated: ". $key;
    }
    $count++;
}



//print_r($baseArray);

//print_r($countArray);


?>