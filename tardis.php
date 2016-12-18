<?php include 'includes/header.php';?>    

    
<h1>TARDIS!</h1>



<?php

function time_elapsed_A($secs){
    $bit = array(
        'y' => $secs / 31556926 % 12,
        'w' => $secs / 604800 % 52,
        'd' => $secs / 86400 % 7,
        'h' => $secs / 3600 % 24,
        'm' => $secs / 60 % 60,
        's' => $secs % 60
        );
        
    foreach($bit as $k => $v)
        if($v > 0)$ret[] = $v . $k;
        
    return join(' ', $ret);
    }
    

function time_elapsed_B($secs){
    $bit = array(
        ' year'        => $secs / 31556926 % 12,
        ' week'        => $secs / 604800 % 52,
        ' day'        => $secs / 86400 % 7,
        ' hour'        => $secs / 3600 % 24,
        ' minute'    => $secs / 60 % 60,
        ' second'    => $secs % 60
        );
        
    foreach($bit as $k => $v){
        if($v > 1)$ret[] = $v . $k . 's';
        if($v == 1)$ret[] = $v . $k;
        }
    array_splice($ret, count($ret)-1, 0, 'and');
    $ret[] = 'ago.';
    
    return join(' ', $ret);
    }
    

$nowtime = time();
$oldtime = 1335939007;

$nowtime = time(); 
$newtime = time()  + (60 * 60); 

echo "time_elapsed_A: ".time_elapsed_A($nowtime-$oldtime)."<br>"; 
echo "time_elapsed_B: ".time_elapsed_B($nowtime-$oldtime)."<br>";
echo "<p></p>"; 

echo "time_future_A: ".time_elapsed_A($newtime - $nowtime)."<br>"; 
echo "time_future_B: ".time_elapsed_B($newtime - $nowtime)."<br>";
echo "<p></p>"; 


/** Output:
time_elapsed_A: 6d 15h 48m 19s
time_elapsed_B: 6 days 15 hours 48 minutes and 19 seconds ago.
**/
?>

      
<?php include 'includes/footer.php';?> 