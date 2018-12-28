<?php

function primeSum($limit){
	$sum=0;
	$sums=[];
	$primes=[];	
	for($i=2;$i<$limit;$i++){   
		if(isPrime($i)){
			$primes[]=$i;
			$sum+=$i;
			if(isPrime($sum) && $sum<$limit){
				$sums[]=$sum; 
			}  
			if($sum>$limit){
				//unset($sums[count($sums)]);
				break;
			}
		}
	}
	return max($sums);
}
function isPrime($i){
    $np=false;
    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $np=true;
            break;
        }        
    }
    return !$np;
}
echo "Longest Sum of consecutive prime numbers below one million which is prime is <b>".primeSum(1000000)."<b>";
