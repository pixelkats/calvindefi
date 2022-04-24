<?php

$postName = htmlspecialchars($_POST["name"]);
$postText = htmlspecialchars($_POST["post"]);

$postTemplate = file_get_contents("replyTemplate.html");
$postNum = file_get_contents("counter.txt");

// fill out the template with the post contents
$postHTML = str_replace("<_POSTNAME_>",$postName, $postTemplate);
$postHTML = str_replace("<_POSTTEXT_>",$postText, $postHTML);
$postHTML = str_replace("<_POSTNUM_>",$postNum, $postHTML);
$postHTML = str_replace("<_POSTDATE_>",date("Y/m/d g:i:s"), $postHTML);

// greentext
if(preg_match("/&gt;./", $postText) == 1){
	$postHTML = str_replace("style=''","style='color: green;'", $postHTML);
}


echo $postHTML;
file_put_contents("posts.html", $postHTML . file_get_contents("posts.html")); // put the post in the flatfile
//file_put_contents("index.html", file_get_contents("index.html") . $postHTML); // add post to frontpage
file_put_contents("counter.txt", $postNum+1); // update the counter

header("Location: index.php");
?>
