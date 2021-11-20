<?php
$lim = 2;
if ($_POST['text']) {
    $lim = $_POST['text'];
}
$link = mysqli_connect('localhost', 'root', 'aasd', 'db_products');
$result = mysqli_query($link, "select * from images limit $lim");
while ($row = mysqli_fetch_assoc($result)) {
    echo '<img style="margin: 5px;" src="image/'.$row['name'] . '">';
}
?>