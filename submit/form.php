<?php include 'database.php'; ?>

<?php


// create a variable
$name=$_POST['name'];
$facefile=$_POST['facefile'];
$facescreenshot=$_POST['facescreenshot'];
$description=$_POST['description'];
$notes=$_POST['notes'];
//Execute the query


mysqli_query($connect,"INSERT INTO facesubmission (name,description,notes)
		        VALUES ('$name','$description','$notes')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Employee Added</p>";
	echo "<a href='index.php'>Go Back</a>";
} else {
	echo "Employee NOT Added<br>";
	echo mysqli_error ($connect);
}
?>