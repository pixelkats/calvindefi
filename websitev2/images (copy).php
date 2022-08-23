<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css.css">
<style>
.imagess img {
  max-height:512px;
max-width:598px;
margin: auto;
display: block;
padding-bottom: 20px;
}

</style>
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

<div class="mainlogo">
<h2><a href="/index.html">lolicon.xyz</a></h2>
</div>

  <div class="sidenav">

      <a href="/images.php">images</a>
    <a href="/videos.html">videos</a>
<a href="/comics.html">comics</a>
    <a href="/resources.html">resources</a>
    <a href="/uploadimage.html">submit</a>
  </div>
</div>

</div>
    <div class="flex-item">
<img src="https://i.imgur.com/XoWAn3k.png" width="700">
 <h2>images</h2>
<p>a huge cluttered dump of lolicon images... sorry for no sources, im too lazy :p</p>
<div class="imagess">
 <div class="image-background">
               <div class="image-container">
 <?php
$imagesDirectory = "images/";
 
if(is_dir($imagesDirectory))
{
	$opendirectory = opendir($imagesDirectory);
  
    while (($image = readdir($opendirectory)) !== false)
	{
		if(($image == '.') || ($image == '..'))
		{
			continue;
		}
		
		$imgFileType = pathinfo($image,PATHINFO_EXTENSION);
		
		if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
		{
			echo "<img src='images/".$image."' ;> ";
		}
    }
	
    closedir($opendirectory);
 
}
?>
</div></div></div>
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
