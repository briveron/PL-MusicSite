<!DOCTYPE html>
<html>
<body style="background-color:DodgerBlue;">


	<?php

	$Songs=array();


	?> 



<style type="text/css">

	button {
    background-color: white; /* Green */
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    /*display: inline-block;*/
    font-size: 16px;
    border-radius: 100px;

}

#butt1 {
	float: left;
}
	
</style>

<center>

<h1>Music Library</h1>
<p>Make this work</p>



<form  action="zpotify.php". method=post>
   <p/>
   <button style="position: absolute; right: 0;" >Go to Zpotify</button> 
</form>


<form action="Btunes.php". method=post>
   <p/>
   <button style="position: absolute; left: 0;">Go to BTunes</button> 
</form>

<table border="1">
    
    <tr bgcolor=Grey> 
    	<th>Buy Song</th>
    	<th>Song</th>
        <th>Artist</th>
        <th>Album</th>
        
    </tr>
<?php

	for($i=0 ; $i<count($Songs);$i++ ){
        list($s,$a,$al)=explode(",", $Songs[$i]);
        
       //Center the days and nothing else
        echo "<tr>"."<td align \"left\">"."<input type=\"submit\" value=\"Buy Song\">"."</td>"
                        ."<td>".$s."</td>"
                        ."<td>".$a."</td>"
                        ."<td>".$al."</td>"
                        ."</tr>";
        //echo "\n";
    }

?>
</table>


</center>




</body>
</html>