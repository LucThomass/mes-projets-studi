<?php
if(isset($_GET['plat']) && !empty($_GET['plat'])) {
  $plat = $_GET['plat'];
} else {
  $plat = 'Plat non défini';
}
?>

<a href="?plat=pizza"> Plat 1 </a><br>
<a href="?plat=salade"> Plat 2 </a><br>

<?php
echo '<br>';
echo $plat;
echo '</br>';
?>