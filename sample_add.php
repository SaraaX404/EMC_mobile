<?php

include 'config.php';


#add phone
if ( isset($_POST['submit'])) {
 
 // collect value of input field
 $branch_name = $_POST ['branch_name'];
 $image=$_POST ['image'];
 $phone_name=$_POST ['phone_name'];

  
 $sql = "INSERT INTO phone(branch_name,image,phone_name) VALUES ( '$branch_name', '$image', ' $phone_name')";

if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
}



?>

#update phone
<?php

$id = $_GET ['id'];
if ( isset($_POST['submit'])) {

   
 $image=$_POST ['image'];
 $phone_name=$_POST ['phone_name'];
 $branch_name = $_GET ['branch_name'];


 $sql = "UPDATE phone SET image='$image',phone_name='$phone_name',branch_name='$branch_name' WHERE id='$id';
  
  

if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>


#delete Phone
<?php
$id = $_GET["id"];
if ( isset($_POST['submit'])) {
  
    
    $sql = "DELETE FROM phone WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
      header("Location: delete_phone.php?msg=Data deleted successfully");
    } else {
      echo "Failed: " . mysqli_error($conn);
    }
}
?>

#Search phone
<?php
$sql = "SELECT * FROM phone";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
?>

<?
}
?>

?>