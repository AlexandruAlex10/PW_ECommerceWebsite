<!-- new product added confirmation -->
<?php
$conn = mysqli_connect("localhost", "root", "", "atech");
if($conn === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}
$item_brand = $_REQUEST['item_brand'];
$item_name = $_REQUEST['item_name'];
$item_price = $_REQUEST['item_price'];
$item_image = $_REQUEST['item_image'];
$item_register = $_REQUEST['item_register'];
$sql = "INSERT INTO product VALUES (NULL, '$item_brand','$item_name','$item_price','$item_image','$item_register')";
if(mysqli_query($conn, $sql)){
    echo "<h1 style='color: green'><center>A new product has been added successfully!</center></center></h1>";
}
    else{
    echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
?>
<!-- !new product added confirmation -->