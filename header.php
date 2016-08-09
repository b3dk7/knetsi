
<!DOCTYPE html>

 <?php
 
 // If your page calls session_start() be sure to include jcart.php first
include_once('jcart/jcart.php');
session_start();
 
 
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



function is_sold($x){
  if($x < 1):
      return " / Sold Out";
  endif;
}



?>


<!--[if lt IE 8]><html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html> <!--<![endif]-->
<head>
  <title>Stil vor Talent Shop &mdash; Music</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" content="Music by Stil vor Talent Shop">
  <meta name="keywords" content="Boys, Music, Shirts, Pants, Bags, KIDS, Andhim, Spring I Summer 2012, Girls, Hats, Overall, It&#39;s always spring in Paris &#39;14, Other, Sweaters | Hoodies">

  <link href="css/theme.css" media="screen" rel="stylesheet" type="text/css">

  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Big Cartel generated meta tags -->
<meta name="generator" content="Big Cartel" />
<meta name="author" content="Stil vor Talent Shop" />
<meta name="description" content="Browse all products in the Music category from Stil vor Talent Shop." />
<meta name="referrer" content="origin" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Stil vor Talent Shop" />
<meta property="og:title" content="Music" />
<meta property="og:url" content="http://stilvortalent.bigcartel.com/category/music" />
<meta property="og:description" content="Browse all products in the Music category from Stil vor Talent Shop." />
<meta property="og:image" content="https://images.bigcartel.com/product_images/170068861/SVT158_1448017312.w750.h750.jpg?auto=format&amp;fit=max&amp;h=1200&amp;w=1200" />
<meta property="og:image:secure_url" content="https://images.bigcartel.com/product_images/170068861/SVT158_1448017312.w750.h750.jpg?auto=format&amp;fit=max&amp;h=1200&amp;w=1200" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Music" />
<meta name="twitter:description" content="Browse all products in the Music category from Stil vor Talent Shop." />
<meta name="twitter:image" content="https://images.bigcartel.com/product_images/170068861/SVT158_1448017312.w750.h750.jpg?auto=format&amp;fit=max&amp;h=1200&amp;w=1200" />
<!-- end of generated meta tags -->

<!-- Big Cartel generated link tags -->
<link href="http://shop.stilvortalent.de/category/music" rel="canonical" />
<link href="http://shop.stilvortalent.de/products.rss" rel="alternate" title="Product Feed" type="application/rss+xml" />
<link href="https://images.bigcartel.com/account_images/28226/store.jpg?auto=format&amp;fit=max&amp;h=180&amp;w=180" rel="apple-touch-icon" />
<!-- end of generated link tags -->

        <script type="text/javascript">
          var _bcaq = _bcaq || [];
          _bcaq.push(['_setUrl','stats1.bigcartel.com']);_bcaq.push(['_trackVisit','67212']);
          (function() {
            var bca = document.createElement('script'); bca.type = 'text/javascript'; bca.async = true;
            bca.src = '/stats.min.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(bca, s);
          })();
        </script>

  <link rel="canonical" href="http://shop.stilvortalent.de/category/music" />
  
    <!-- jcart stuff -->
    <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/jcart.css" />
    <script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="jcart/js/jcart.min.js"></script>
  
  
</head>

<body id="products" class="theme" data-search="true">
  <div class="wrapper">
    <aside>
      <div>
        <header>
          <a href="/" title="Stil vor Talent Shop" class="logo  image " >
            
              <img src="images/logo.png" alt="Stil vor Talent Shop"  />
            
          </a>
        </header>

        <nav>
          <section>

            
            
             <div id="jcart"><?php $jcart->display_cart();?></div>
            
            
          </section>

          <section>
            <h2 class="title">
              <a href="/products.php" class="">
                Products
              </a>
            </h2>

            

            

            <ul>
              
                <li>
                  <a href="/products.php?category=organic" class="current">
                    Organic
                  </a>
                </li>

              
                <li>
                  <a href="/products.php?category=inorganic" class="">
                    Inorganic
                  </a>
                </li>
              

              

              
            </ul>
          </section>

          

          <section>
            <ul>
              
                <li class="title">
                  <a href="/imprint-agbs" class="">
                    Imprint | AGBs
                  </a>
                </li>
              
              <li class="title">
                <a href="/contact" class="">
                  Contact
                </a>
              </li>
              
                <li class="title"><a href="/">Back to Site</a></li>
              
            </ul>
          </section>
        </nav>
      </div>

      
    </aside>

    <div class="main overlay">
      <header>
        <a href="/cart" class="cart">0</a>
        <a href="#" class="menu">Menu<b></b></a>
        <a href="/" title="Stil vor Talent Shop" class="logo">Stil vor Talent Shop</a>
      </header>