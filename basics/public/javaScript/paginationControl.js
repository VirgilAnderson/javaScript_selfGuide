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
// Should we display the double_back link?
if(page_2 == 1){
  document.getElementById('double_back').style.display = "none";
}

// Set link for double_forward
var end = document.getElementById(totalLinks).href;
document.getElementById('double_forward').href = end;

// Should we display the double_forward link?
if(page_2 ==  totalLinks){
  document.getElementById('double_forward').style.display = "none";
}


document.getElementById('beer').innerHTML=page_set;
// else display current page +-2
