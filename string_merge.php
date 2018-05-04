<?php
/*
author = arindam57@gmail.com
description = merge array based on key
e.g  $a= 'abcd'
     $b = 'zxcvddd'
the merge result will be azbxccdvddd
the rest value will be saved after the merging

*/

public function stringMerge($a,$b){
	    
	    $split_a = str_split($a);
            $count_a = count($split_a);
            $split_b = str_split($b);
            $count_b = count($split_b);
            if($count_a < $count_b){
            $extra_length = substr($b,$count_a);
            }
            if($count_b < $count_a){
                $l = substr($a,$count_b);
            }
            $result = [];
            foreach($split_a as $key_a =>$value){
                foreach($split_b as $key_b => $value_b){
                    if($key_b == $key_a){
                        $result[] = $value;
                        $result[] = $value_b;
                    }
                }
            }
           $r =  implode('',$result);
           if(!empty($l)){
            return $r.''.$extra_length;
           }else{
               return 
		$extra_length
           }


}
