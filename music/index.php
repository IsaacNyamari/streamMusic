<?php
require_once "./connect.php";
$result = $conn->query("SELECT * FROM `music` m JOIN `artists` a ON a.artist_id = m.artist_id ORDER BY `m`.`id` DESC");
if (mysqli_num_rows($result) > 0) {
$audios = mysqli_fetch_all($result,1);
}
