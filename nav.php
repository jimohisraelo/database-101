<?php require_once 'connection.php'; ?>

<?php
$rql = "SELECT * FROM nav";
$result = $conn->query($rql);

if ($result->num_rows > 0) {
  while ($row1 = $result -> fetch_assoc()) {?>

<?php $navPhone =$row1["phone"]?>
<?php $navEmail =$row1["email"]?>
<?php $navLocation =$row1["location"]?>
<?php $navHeader =$row1["header"]?>
<?php $navHome =$row1["home"]?>
<?php $navServices =$row1["services"]?>
<?php $navAbout =$row1["about"]?>
<?php $navContact =$row1["contact"]?>
<?php $navLogin =$row1["login"]?>
        
<?php  }
      } else {
        echo "no nav element yet";
      }?>


<?php
$mql = "SELECT * FROM footer";
$result = $conn->query($mql);

if ($result->num_rows > 0) {
  while ($row2 = $result -> fetch_assoc()) {?>

<?php $footAddress =$row2["address"]?>
<?php $footInfo =$row2["info"]?>
<?php $footPara =$row2["footp"]?>
<?php $footLinks =$row2["links"]?>
<?php $footSubscribe =$row2["sub"]?>
        
<?php  }
      } else {
        echo "No Footer Element Yet";
      }?>