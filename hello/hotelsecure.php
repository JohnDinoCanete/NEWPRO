
<html>
<link rel="stylesheet" href="secure.css"/>
    <body>
    <div class="container">
<div class="main">
<!--  This code will execute when form method is set to POST  -->
<?php
if(isset($_POST['firstname']))
{
    $card = $_POST['card'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
echo "<span class='success'>Mode of Payment: <b>Cash</b></span><br/>";
echo "<strong>First Name : </strong>".$fname."<br/><strong>Last Name : </strong>".$lname;
echo "<strong>Card Number: ".$card;
}
?>
<!--  This code will execute when form method is set to GET  -->
<?php
if(isset($_GET['firstname']))
{
$card = $_GET['card'];
$fname = $_GET['firstname'];
$lname = $_GET['lastname'];
echo "<span class='success'>Mode of Payment: <b>Visa</b></span><br/>";
echo "<strong>First Name :</strong> ".$fname."<br/><strong>Last Name :</strong> ".$lname;
echo "<br><strong>Card Number: </strong>".$card;
}
?>
<a href="hotelserver.php"><input type="submit" name="Submit"  value="Submit"></a>
</div>
</div>
<br>
</body>
</html>