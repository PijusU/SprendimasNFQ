<?php  

include 'dbpris2.php';

$id = $_GET['id'];


    $sql = "SELECT * FROM `knygos` WHERE ID = '$id';";
    $result = $conn->query($sql);

    

?>


<!DOCTYPE html>
<html>
<head>

	<title>Sprendimas</title>

	 <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
	 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
	 <link rel="stylesheet" type="text/css" href="css/style.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>

<nav>
    <div class="nav-wrapper">
      <ul>
        <li><a href="index.php">Knygos</a></li>
      </ul>
    </div>
     <form method="POST" action="ieskoti.php">
        <div class="input-field">
          <input id="search" type="search" required placeholder="Ieškoti knygos pagal pavadinimą" name="search">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
    </form>
</nav>

<div class="container">

  <div class="row">

    <div class="col s12">
    
      <h4>Plačiau</h4>
        <?php 

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>";
            echo "<p>Sąrašo nr : " . $row["ID"] . "</p>" ;
            echo "<p>Pavadinimas : " . $row["Pavadinimas"] . "</p>" ;
            echo "<p>Leidimo Metai : " . $row["LeidimoMetai"] . "</p>" ;
            echo "<p>Autorius : " . $row["Autorius"] . "</p>" ;
            echo "<p>Žanras : " . $row["Zanras"] . "</p>" ;
            echo "</tr></td></a>";
        }
        } else {
            echo "0 results";
        }
        $conn->close();


         ?>


    </div>

  </div>

</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>