<footer>
  <p>&copy Virgil Anderson <script type="text/javaScript">var year = new Date();document.write(year.getFullYear());</script> </p>
</footer>
</body>
<script>
  document.getElementById(page).className = "active";
  document.getElementById(page_2).className = "paginationActive";

  // Create arrows which dynamically determine the last and next page links
  // determine the page behind
  var page_back = page_2 - 1;
  var page_forward = page_2 + 1;
  // Should we display left arrow?
  if(page_back < 1){
    // If backpage is less than 1, hide back arrow
    document.getElementById('back').style.display = "none";
  } else {
    // Get the link
    var link = document.getElementById(page_back).href;
    // Assign link to back arrow
    document.getElementById('back').href = link;
  }

  // Should we display link?
  //Determine total links

  // store side nav
  var x = document.getElementById('side_nav');
  // store a tags
  var y = x.getElementsByTagName('a');

  var totalLinks = y.length;
  //Is link forward equal to total links?
  if(page_2 == totalLinks){
    // Don't display
    document.getElementById('forward').style.display = "none";
  } else {
    // Get the link
    link = document.getElementById(page_forward).href;
    // Assign the link to forward arrows
    document.getElementById('forward').href = link;
  }




</script>
</html>
