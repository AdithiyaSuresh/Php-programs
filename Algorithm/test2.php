<?php
function merge_sort($my_array){
    if(count($my_array) == 1 )
    { 
        return $my_array;
    }
    else
    {
        $mid = count($my_array) / 2;
        echo $mid;
        $left = array_slice($my_array, 0, $mid);
        print_r($left);
        $right = array_slice($my_array, $mid);
        print_r($right);
        $left = merge_sort($left);
        $right = merge_sort($right);
        return merge($left, $right);
    }
}
function merge($left, $right){
	$res = array();
	while (count($left) > 0 && count($right) > 0){
        if(strcmp($left[0],$right[0])>0)
        {
			$res[] = $right[0];
			$right = array_slice($right , 1);
        }
        else
        {
			$res[] = $left[0];
			$left = array_slice($left, 1);
		}
	}
	while (count($left) > 0){
		$res[] = $left[0];
		$left = array_slice($left, 1);
	}
	while (count($right) > 0){
		$res[] = $right[0];
		$right = array_slice($right, 1);
	}
	return $res;
}
$test_array = array("abc","dfe","Abc","def","aaa");
echo "Original Array : ";
echo implode(', ',$test_array );
echo "\nSorted Array :";
echo implode(', ',merge_sort($test_array))."\n";
?>