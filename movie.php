<?php
$dom=new DomDocument();
$dom->load("movie.xml");
$t=$dom->getElementsByTagName("MovieTitle");
echo "<br>Movie Title</br>";
foreach($t as $node)
{
echo $node->textContent."<br>";
}
$t=$dom->getElementsByTagName("ActorName");
echo "<br>Actor Name</br>";
foreach($t as $node)
{
	echo $node->textContent."<br>";
}
?>
