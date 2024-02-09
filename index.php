<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require "./css.php" ?>
    <?php require "./music/index.php" ?>
    <?php require "./nav.php" ?>
    <script src="./myIcons.js"></script>
    <title>streamMusic</title>
</head>

<body>
    <?php require "./search/search.php" ?>
    <div class="container-fluid main-app">
        <div class="row mt-4">


            <div class="col-sm-4 justify-content-center">
                <div>
                    <img src="" alt="audioPoster" id="audioPoster">
                </div>
                <div>
                    <p class="text-center" id="audioTitle"></p>
                    <audio src="" id="currentSong" controls autoplay>
                </div>
                        <p id="views"></p>
            </div>
            <div class="col-sm-8 all-songs">
                <ul>
                    <?php foreach ($audios as $audio) { ?>
                        <li id="audioLists">
                            <input type="text" class="audio_id" value="<?php echo $audio['id'] ?>" hidden>
                            <input type="text" class="audio_poster" value="<?php echo $audio['music_poster'] ?>" hidden>
                            <h6 class="d-block"><?php echo $audio['music_name'] ?></h6>
                            <span class="text-sm-left"><?php echo $audio['fname'] . " " . $audio['lname'] ?></span>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="container bg-light rounded-pill">
            <div class="row justify-content-center">
                <div class="col-sm-6 controls d-flex">
                    <i class="fa-solid fa-volume-up"></i>
                    <div class="progress" style="height: 6px; width: 50px;margin-top: 5px; background-color: skyblue" >
                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <i class="fa-solid fa-backward"></i>
                    <i class="fa-solid fa-play"></i>
                    <i class="fa-solid fa-forward"></i>
                    <i class="fa-solid fa-shuffle"></i>
                    <i class="fa-solid fa-repeat"></i>
                </div>
            </div>
        </div>
    </div>
    <script src="views.js">

    </script>
</body>

</html>