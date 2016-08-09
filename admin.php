<?php
 //database connection
 // scp /home/knetsi/index.php root@37.139.23.94:/var/www/html/knetsi
$servername = "localhost";
$username = "root";
$password = "gZuIQPnrgC";
$dbname = "knetsi";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from items;";


$result = $conn->query($sql);

$sqlinset = 'insert into items (item_name,item_description,item_price,item_amount,item_image,category) values ("'.$_POST["newname"].'","'.$_POST["description"].'", '.$_POST["price"].', '.$_POST["amount"].', "'.$_POST["image"].'","'.$_POST["category"].'")';

echo $sqlinset;
          
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<form action="form_handler.php" method="POST">
        
   Name: <input name="name" type="text" value="'.$row["item_name"].'" />
   Description: <textarea name="description" cols="40" rows="5">'.$row["item_description"].'</textarea>
   Price: <input name="price" type="text"  value="'.$row["item_price"].'" />
   Amount: <input name="amount" type="text"  value="'.$row["item_amount"].'" />
   Category: <input name="category" type="text"  value="'.$row["category"].'" />
   Image: <input name="user" type="file"  value="'.$row["item_image"].'" />
   
   
   
   <input type="submit"value="Update" />
 </form>';
    }
} else {
    echo "0 results";
}


?>

<form action="#" method="POST">
   Name: <input name="newname" type="text" />
   Description: <textarea name="description" cols="40" rows="5"></textarea>
   Price: <input name="price" type="text" />
   Amount: <input name="amount" type="text" />
   Category: <input name="category" type="text" />
   Image: <input name="image" type="file" />
   <input type="submit"value="add new" />
 </form>


<?php
$conn->close();
?>


