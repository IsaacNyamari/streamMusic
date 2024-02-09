<?php
require "./connect.php";
//echo
$id = isset($_POST['id']) ? $_POST['id'] : null;
if (!empty($id)) {
    $getViews = $conn->query("SELECT views FROM music where id = $id");
    if (mysqli_num_rows($getViews) > 0) {
        $views = mysqli_fetch_assoc($getViews);
        $viewsCount = $views['views'];
       echo $viewCount = $viewsCount + 1;
        $conn->query("UPDATE `music` SET `views`=$viewCount WHERE id = $id");
    }
}
