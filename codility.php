<?
// ORIGINAL SOLUTIONS TO CODILITY PROBLEMS (GIULIO GATTO)

// https://codility.com/programmers/lessons/1

// FROG JUMPS --> 100/100 


function solution($X, $Y, $D) {
    
    // write your code in PHP5.3
    
    if($D){
        
        $steps=ceil(($Y-$X)/$D);
        
    }else($steps=0);
    
        return intval($steps);
    }
?>


<?
// https://codility.com/programmers/lessons/1

//PERM MISSING --> 100/100



function solution($A) {
   
    $elements=count($A)+1;
    
    $naturaltotal=1/2*$elements*($elements+1);
    
    $mytotal=array_sum($A);
    
    $missing=intval($naturaltotal-$mytotal);
    
    return $missing;
    
}
?>

<?
// https://codility.com/programmers/lessons/1

//TAPE EQUILIBRIUM --> 100/100

function solution($A) {
    
    $total=array_sum($A);
    
    $leftcount=$A[0];
    
    $rightcount=$total-$leftcount;
    
    $diff=abs($rightcount-$leftcount);
    
    for($i=1;$i<(count($A)-1);$i++){
        
        $leftcount+=$A[$i];
        
        $rightcount=$total-$leftcount;
        
        $newdiff=abs($rightcount-$leftcount);
        
        if($newdiff<$diff)$diff=$newdiff;
        
    }
    
    return $diff;
    
}
?>

<?
//https://codility.com/programmers/lessons/2

//PERM CHECK --> 90/100 ???????? Gotta check why only 90/100!!

function solution($A) {

    $numberofelements=count($A);
    
    $sumvalues=array_sum($A);
    
    $arrayofkeys=array_flip($A);
    
    $sumkeys=array_sum($arrayofkeys)+$numberofelements;
    
    if($sumkeys==$sumvalues){
        
        return 1;
        
    } else {
        
        return 0;
        
    }
    
}

?>
<?
//https://codility.com/programmers/lessons/2

//FROG RIVER ONE  --> 100/100


function solution($X, $A) {

    $positions=array();
    
    for($i=0;$i<count($A);$i++){
        
        if(($A[$i]<=$X) && (!isset($positions[$A[$i]]))){
            
            $positions[$A[$i]]=$i;

        }
        if($X<=$A[$i]){
            
            $foundstep=$i;

        }
        
        if(count($positions)==$X){return $i;}
        
    }
    return -1;
}
?>

<?
//https://codility.com/programmers/lessons/4

//DISTINCT -->100/100

function solution($A) {
    
    sort($A);
    
    if(count($A)>0){
        
        $distinct=1;
        
        $buffer=$A[0];
        
        for($i=0;$i<count($A);$i++){
            
            if($A[$i]!=$buffer)$distinct++;
            
            $buffer=$A[$i];
            
        }
        return $distinct;
        
    } else {
        
        return 0;
    }
}
?>

<?
// https://codility.com/programmers/lessons/6


// DOMINATOR --> 100/100 

function solution($A) {

    asort($A);

    $counter=1;
    
    $dominatorminimun=floor(count($A)/2)+1;
    
    foreach($A as $key=>$candidate){

        if(isset($previouscandidate) && $candidate==$previouscandidate){
            
            $counter++;
            
            if($counter>=$dominatorminimun){
                
                $dominator=$key;

                break;
                
            }
            
        }else{
            
            $counter=1;
        }
        
        $previouscandidate=$candidate;
        
    }
    
    if(isset($dominator)){
        
        return $dominator;
        
    } else {
        
        if(count($A)==1){
            
            return 0;    
            
        } else {
            
            return -1;
            
        }
        
    }
    
}
?>
<?
// https://codility.com/programmers/lessons/7

//MAX PROFIT --> 100/100

function solution($A) {

    $sellingprice=0;
    
    $minimumprice=$A[0]; 
    
    for($i=1;$i<(count($A));$i++){
        
        if($A[$i]<$minimumprice){
            
            $minimumprice=$A[$i];
            
        } else if($A[$i]>=$minimumprice){
            
            if($A[$i]-$minimumprice>$sellingprice)$sellingprice=$A[$i]-$minimumprice;

        }
    }
    return $sellingprice;
}
?>

<?
//https://codility.com/programmers/lessons/8

//MINPERIMETERRECTANGLE -->100/100

function solution($N) {

    if($N==1)return 4;
    
    $i=1;
    
    $firstperimeterset=0;
    
    while($i*$i <= $N){
        
        if(($N % $i)==0){
            
            $firstdivisor=$N/$i;
            
            $seconddivisor=$N/$firstdivisor;
            
            if(!$firstperimeterset){
                
                $perimeter=2*($firstdivisor+$seconddivisor);
                
                $firstperimeterset=1;
                
            }
            
            $newperimeter=2*($firstdivisor+$seconddivisor);
            
            if($newperimeter<$perimeter)$perimeter=$newperimeter;

        }
        
        $i++;
        
    }
    
    return $perimeter;
    
}
?>
