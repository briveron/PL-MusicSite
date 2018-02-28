<!DOCTYPE html>
<html>
<body style="background-color:MediumSeaGreen;">
<center>

	<?php

	$Songs=array("Song 8, Artist 8, Album8", "Song 9, Artist 9, Album9", "Song 10, Artist 10, Album10", "Song 11, Artist 11, Album11", "Song 12, Artist 12, Album12", "Song 13, Artist 13, Album13", "Song 14, Artist 14, Album14" );

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

</style>
<h1>My Zpotify</h1>
<p>Make this look nice</p>


<form  action="myLibrary.php". method=post>
   <p/>
   <button style="position: absolute; left: 0;" >Go to Music Library</button> 
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