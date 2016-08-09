

<?php
include('header.php');
?>
      
        <div class="page products">
  <h1>Music</h1>
  

    
      <ul class="products_list">
        
          
          
<?php
if (empty($_GET["category"]))
  $sql = "select * from items;";
else
  $sql = "select * from items where category = '".$_GET["category"]."';";

$result = $conn->query($sql);
          
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<li class="product">
            <a href="product.php?id='.$row["item_id"].'&name='.$row["item_name"].'">
              <img alt="Image of SVT158 | Schneeweiß V presented by Oliver Koletzki - CD" src="images/'.$row["item_image"].'">
              <div class="product_info">
                <div>
                  <p>
                    <span class="product_name">'.$row["item_name"].'</span>
                    <span class="price sold-out">
                      <span class="currency_sign">&euro;</span>'.$row["item_price"].is_sold($row["item_amount"]).'
                        
                    </span>
                  </p>
                </div>
              </div>
            </a>
          </li>';
    }
} else {
    echo "0 results";
}





?>
          
          
          


        
          
        
      </ul>

      <p class="pagination">
        
          
        

        
          
        
      </p>

    

  
</div>

      
    </div>
  </div>


<?php
include('footer.php');
?>
