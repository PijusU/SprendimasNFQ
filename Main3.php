<?php  

    include 'dbpris2.php';
    
    $sql = "SELECT `ID`, `Pavadinimas` FROM `knygos` WHERE 1 LIMIT 10 OFFSET 40;";
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

			<h4>Sąrašas</h4>


      <table class="bordered">
        <thead>
          <tr>
            <ul class="pagination">
                <li class="waves-effect"><a href="Main2.php"><i class="material-icons">chevron_left</i></a></li>
                <li class="waves-effect"><a href="index.php">1</a></li>
                <li class="waves-effect"><a href="Main2.php">2</a></li>
                <li class="active"><a href="Main3.php">3</a></li>
                <li class="waves-effect"><a href="#"><i class="material-icons">chevron_right</i></a></li>
            </ul>
          </tr>
          <tr>
            <th data-field="Nr">Nr</th>
            <th data-field="Knyga">Knyga</th>
          </tr>

        </thead>

        <tbody>
          <?php 
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
        </tbody>

      </table>


		</div>

	</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>