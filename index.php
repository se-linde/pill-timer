<!DOCTYPE html> 
<html>
<head>
    <title>Time Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/portal.css" />
</head> 

    
<body>

<?php include 'includes/header.php';?>    

            
<h1>Time Calculator</h1>
   

<!-- Here on out is the HTML formatting of the PHP data. --> 


<main> 

    <!-- HTML portion of the script. --> 

        <h4>This app retrieves the current time, and also tells you the time an hour later. This is useful for times when you have to take medication now, and can't have caffeine for an hour afterwards. This is your brain, Dwayne, whilst you're on those iron meds that can't be taken with caffeine.</h4>
        <p> 
            
    	<form action="" method="post">
    	<table>
       
        	
        	<tr>
            	<td>
                	<input type="submit" name="btn" value="Summon the TARDIS.">
            	</td>
        	</tr>
        	<tr>
            	<td>
                	<?php
                    
// The switch sends the input to the functions, and produces the output.
                    
if(isset($_POST['btn'])) // The form handler.
{ // show data.

    $second_temp_type_name=$_POST['second_temp_type_name'];
    $given_value=$_POST['given_value'];
                    
    $timenow = date('h:i:s A'); 
    $timelater = date('h') + 1 . date(':i:s A'); 
    $timelater2 = date(':i:s A');
    $timestring = (string) $timenow; 

}
                    
                        ?>
            	</td>
        	</tr>
    	</table>
    	</form>
    
        

        <p class="error">This is the current time. Take the iron now: <?php echo "$timenow"; ?> </p>

        <p class="error">This is the time an hour later. Don't take caffeine until then: <?php echo "$timelater"; ?> </p>

        
</main>    
</body>        
    
</html>

        
<?php include 'includes/footer.php';?> 