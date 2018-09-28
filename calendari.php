<!DOCTYPE html>
<html>
<head>
	<title>Calendari</title>
</head>
<body>

<?php 

	echo "<h1>Calendari</h1>";
	echo "<table width='800' border='1'>";
	$dias = array('Di', 'Dm', 'Dx', 'Dj', 'Dv', 'Ds', 'Dg');
	
	function primerdiadelmes() {
	  $month = date('m');
	  $year = date('Y');
	  return date('N', mktime(0,0,0, $month, 1, $year));
	};
	 function ultimodiadelmes() { 
      $month = date('m');
      $year = date('Y');
      $day = date("d", mktime(0,0,0, $month+1, 0, $year));
 
      return date('d', mktime(0,0,0, $month, $day, $year));
  };

  	$ultimdata = ultimodiadelmes(); //ultimo dia del mes en numero del 1 al 7
	$primerdata = primerdiadelmes(); //Primer dia del mes en numero del 1 al 7
	echo "$ultimdata";
	echo "<tr>";
	for ($x=0;$x<7;$x++) {
		echo "<td>".$dias[$x]."</td>";
	}
	echo "</tr>";
	$num=1;
	for ($i=0;$i<5;$i++) {
		echo "<tr>";
		for ($a=0;$a<7;$a++) {
			for ($y=0;$y==4;$y++){
				echo "<td> </td>";
			}
			echo "<td>$num</td>"; //este esta machacando el de arriba, poner condicion para que no sea asi
			$num=$num+1;
			if ($num==$ultimdata) {
				$a=5;
			}
		}
		echo "</tr>"; 
	}
	echo "</table>";
	?>

</body>
</html>