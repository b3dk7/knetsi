<?php
include('header.php');

$sql = "select * from items where item_id=".$_GET["id"].";";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

} else {
    echo "0 results";
}

?>


<div class="page product_detail">
  <div class="gallery" style="max-width: 3840px ">
    <a href="images/<?php echo $row["item_image"]; ?>" class="fancybox" rel="group">
      <img src="images/<?php echo $row["item_image"]; ?>" alt="Image of Wolf Shirt">
    </a>
    
  </div>

  <div class="gallery mobile_only">
    <img src="images/<?php echo $row["item_image"]; ?>" alt="Image of Wolf Shirt" class="mobile_gallery_viewer">
    
  </div>

  <div class="detail">
    <h1><?php echo $row["item_name"]; ?></h1>
    

     
        <p class="price ">
          <span class="currency_sign">&euro;</span>35.00
          
        </p>
    

    

    

    
    <form method="post" action="" class="jcart">
  <fieldset>
    <input type="hidden" name="my-item-id" value="<?php echo $row["item_id"]; ?>" />
    <input type="hidden" name="my-item-name" value="<?php echo $row["item_name"]; ?>" />
    <input type="hidden" name="my-item-price" value="<?php echo $row["item_price"]; ?>" />
    <input type="hidden" name="my-item-url" value="" />
    <input type="submit" name="my-add-button" value="add to cart" class="button" />
    <div class="description">
      <p><?php echo $row["item_name"]; ?></p>
      <p><?php echo $row["item_description"]; ?></p>
      <p><b>Price: <?php echo $row["item_price"]; ?> Euro</b></p>
      <p><label>Qty: <input type="text" name="my-item-qty" value="1" size="3" /></label></p>
    </div>
        

    </ul>


  </fieldset>
</form> 
    
    
    

    

    
      
         
      
    
  </div>
</div>

      
    </div>
  </div>
  
  
  <?php
include('footer.php');
?>