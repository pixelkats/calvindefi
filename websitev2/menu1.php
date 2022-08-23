<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css.css">

</head>
<body>
<style>
.show {
  display: block;
}
</style>
<div class="containermain">
<div class="containerr">
<div class="fixed">
<div class="fixed1">

<h2>lolicon.xyz</h2>

  <div class="sidenav">

    <a href="#Browse">images</a>
    <a href="#services">videos</a>
    <a href="#clients">about</a>
    <a href="#submit">submit</a>
  </div>
</div>

</div>
    <div class="flex-item">
<img src="https://i.imgur.com/XoWAn3k.png" width="700">
 <h2>images</h2>
<div id="myBtnContainer">
  <button class="btn btn1 active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn btn1" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn btn1" onclick="filterSelection('animals')"> Animals</button>
  <button class="btn btn1" onclick="filterSelection('fruits')"> Fruits</button>
  <button class="btn btn1" onclick="filterSelection('colors')"> Colors</button>
</div>
 <?php

	// open this directory 
	$myDirectory = opendir("images");

	// get each entry
	while($entryName = readdir($myDirectory)) {
		$dirArray[] = $entryName;
	}

	// close directory
	closedir($myDirectory);

	//	count elements in array
	$indexCount	= count($dirArray);

	?>

	<ul>

		<?php
		// loop through the array of files and print them all in a list
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			if ($extension == 'jpg'){ // list only jpgs
				echo '<li><img src="images/' . $dirArray[$index] . '" alt="Image" /><span>' . $dirArray[$index] . '</span>';
			}	
		}
		?>

	</ul>	


<div class="row"> 
  <div class="column">
    <img src="https://i.imgur.com/DKzOJHo.jpg" style="width:100%">
    <img src="https://i.imgur.com/4OvxwTY.png" style="width:100%">
    <img src="https://i.imgur.com/F6W4JRs.jpg" style="width:100%">
    <img src="https://i.imgur.com/DKzOJHo.jpg" style="width:100%">
    <img src="https://i.imgur.com/7hKKxql.jpg" style="width:100%">
    <img src="https://i.imgur.com/i98WUov.jpg" style="width:100%">
    <img src="/w3images/paris.jpg" style="width:100%">
  </div>
  <div class="column">
 <img src="https://i.imgur.com/4OvxwTY.png" style="width:100%">
    <img src="https://i.imgur.com/F6W4JRs.jpg" style="width:100%">
    <img src="https://i.imgur.com/DKzOJHo.jpg" style="width:100%">
    <img src="https://i.imgur.com/7hKKxql.jpg" style="width:100%">
    <img src="https://i.imgur.com/i98WUov.jpg" style="width:100%">
    <img src="https://i.imgur.com/7hKKxql.jpg" style="width:100%">
    <img src="https://i.imgur.com/i98WUov.jpg" style="width:100%">
    <img src="/w3images/paris.jpg" style="width:100%">
  </div>  
  <div class="column">
 <img src="https://i.imgur.com/DKzOJHo.jpg" style="width:100%">
    <img src="https://i.imgur.com/4OvxwTY.png" style="width:100%">
    <img src="https://i.imgur.com/F6W4JRs.jpg" style="width:100%">
   <img src="https://i.imgur.com/4OvxwTY.png" style="width:100%">
    <img src="https://i.imgur.com/F6W4JRs.jpg" style="width:100%">
    <img src="https://i.imgur.com/DKzOJHo.jpg" style="width:100%">
    <img src="https://i.imgur.com/7hKKxql.jpg" style="width:100%">
    <img src="https://i.imgur.com/i98WUov.jpg" style="width:100%">
    <img src="/w3images/paris.jpg" style="width:100%">
  </div>
  <div class="column">
     <img src="https://i.imgur.com/DKzOJHo.jpg" style="width:100%">
    <img src="https://i.imgur.com/4OvxwTY.png" style="width:100%">
    <img src="https://i.imgur.com/F6W4JRs.jpg" style="width:100%">
    <img src="https://i.imgur.com/DKzOJHo.jpg" style="width:100%">
    <img src="https://i.imgur.com/7hKKxql.jpg" style="width:100%">
    <img src="https://i.imgur.com/i98WUov.jpg" style="width:100%">
    <img src="/w3images/paris.jpg" style="width:100%">
  </div>
</div>

</div>
</div>
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

</script>
</div>
</div>
</div>
</div>
</body>
</html>
