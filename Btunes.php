<!DOCTYPE html>
<html>
<body style="background-color:Gray;">


		<?php

	$Songs=array("Song 1, Artist 1, Album1", "Song 2, Artist 2, Album2", "Song 3, Artist 3, Album3", "Song 4, Artist 4, Album4", "Song 5, Artist 5, Album5", "Song 6, Artist 6, Album6", "Song 7, Artist 7, Album7" );


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

<center>

<h1>BTunes</h1>
<p>Also make this work</p>


<form  action="myLibrary.php". method=post>
   <p/>
   <button style="position: absolute; right: 0;" >Go to Music Library</button> 
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