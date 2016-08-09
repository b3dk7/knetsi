  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
  <script src="//cache0.bigcartel.com/api/4/api.eur.js" type="text/javascript"></script>
  <script src="//cache0.bigcartel.com/theme_assets/3/1.5.15/theme.js" type="text/javascript"></script>
  <script type="text/javascript">
    Store.isotopeOptions = {
      itemSelector: '.product',
      layoutMode: 'masonry',
      masonry: {
        columnWidth: 240,
        gutterWidth: 30
      }
    };

    Store.infiniteOptions = {
      paginationSelector: '.pagination',
      moreSelector: '.next',
      itemSelector: '.products_list .product'
    };

    
  </script>

</body>

<?php
$conn->close();
?>
</html>