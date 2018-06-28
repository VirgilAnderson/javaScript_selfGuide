var top_page = totalLinks - 2;

// If on page 2 or less, display first 5
if(page_2 <= 2){
  var i;
  // hide pages above bottom five
  for(i = 6; i <= totalLinks; i++){
    // Set style display to none for link
    document.getElementById(i).style.display = "none";
  }
}else if(page_2 >= top_page){
  // Else if current page is greater than last page -2, display last 5
  var page_set = totalLinks - 5;

  // Hide pages below last 5
  for(i=page_set; i > 0; i--){
    document.getElementById(i).style.display = "none";
  }
} else {
  // else display current page +-2
  var page_below = page_2 - 3; // Set range below
  var page_above = page_2 + 3; // Set range above

  // Hide pages below range
  for(i=page_below; i > 0; i--){
    document.getElementById(i).style.display = "none";
  }
  // Hide pages above range
  for(i=page_above; i <= totalLinks; i++){
    document.getElementById(i).style.display = "none";
  }

}
document.getElementById('beer').innerHTML=page_set;
// else display current page +-2
