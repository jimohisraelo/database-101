<?php require_once 'connection.php'; ?>

<?php
$nql = "SELECT * FROM indeximg";
$result = $conn->query($nql);

if ($result->num_rows > 0) {
  while ($row4 = $result -> fetch_assoc()) {?>

<?php $sliderImg =$row4["sliderImg"]?>
<?php $trackingImg =$row4["trackingImg"]?>
<?php $h2 =$row4["h2"]?>
<?php $paragraph =$row4["para"]?>
<?php $btnInfo =$row4["butInfo"]?>
<?php $aboutParagraph =$row4["aboutP"]?>
<?php $aboutH2 =$row4["aboutH2"]?>
<?php $readmore =$row4["aboutReadMore"]?>
<?php $aboutImg =$row4["aboutImg"]?>
<?php $indexH2 =$row4["indexH2"]?>
<?php $servicesH2 =$row4["servicesH2"]?>
<?php $servicesP =$row4["servicesp"]?>
<?php $contactH2 =$row4["contactH2"]?>
<?php $contactBtn =$row4["contactbtn"]?>
        
<?php  }
      } else {
        echo "no images yet";
      }?>