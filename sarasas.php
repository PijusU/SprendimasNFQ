<?php  

		include 'dbpris2.php';

		$sql = "SELECT `ID`, `Pavadinimas` FROM `knygos` WHERE 1 LIMIT 20;";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	echo "<tr><td>";
		    	echo $row['ID'];
		    	echo "</td>";
		    	echo "<td>";
		    	echo "<a href='info.php?id=".$row['ID']."'>";
		        echo $row["Pavadinimas"] ;
		        echo "</tr></td></a>";
		    }
		} else {
		    echo "<p>No books :(</p>";
		}
		$conn->close();

?>
