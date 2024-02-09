<?php require "../nav/nav.php" ?>
<?php $artist = $_SESSION['artist_id']; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require "../css/css.php" ?>
    <title>Upload Song</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center p-3">
        <div class="col-sm-5 border shadow-sm p-5 rounded bg-light">
            <?php if (isset($_COOKIE['error_uploading'])) { ?>
                <div class="alert alert-danger"><?php echo $_COOKIE["error_uploading"] ?></div>
            <?php } ?>
            <?php if (isset($_COOKIE['file_exists'])) { ?>
                <div class="alert alert-danger"><?php echo $_COOKIE["file_exists"] ?></div>
            <?php } ?>
            <?php if (isset($_COOKIE['success'])) { ?>
                <div class="alert alert-success"><?php echo $_COOKIE["success"] ?></div>
            <?php } ?>
            <form action="../ulpoad.php" method="post" enctype="multipart/form-data">
                <h5 class="text-center">Add Song</h5>
                <div class="form-group">
                    <label for="genre">Select Genre</label>
                    <select type="text" class="form-control" id="genre" name="genre">
                        <option value="pop">Pop music</option>
                        <option value="country"> Country music</option>
                        <option value="gospel" selected>Gospel music</option>
                        <option value="reggae">Reggae music</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="audio" class="btn btn-success form-control">Audio File <i
                                class="fa-solid fa-music"></i></label>
                    <input type="file" class="photo form-control-file" id="audio" name="audio" required
                           accept="audio/mp3">
                </div>
                <div class="form-group">
                    <p id="audioName" style="width: 50%"></p>
                </div>
                <div class="form-group">
                    <label for="poster" id="audio-art" class="btn btn-success form-control">Album-art <i
                                class="fa-solid fa-image"></i></label>
                    <input type="file" class="photo form-control-file" id="poster" name="photo" accept="image/*">
                </div>
                <div class="form-group">
                    <img id="uploadImage" src="" alt="uploadImage">
                </div>
                <div class="form-group">
                    <label class="d-block terms">
                        <input type="checkbox" id="terms">
                        Agree to TnC?
                    </label>
                </div>

                <button type="submit" disabled id="submitBtn" class="btn btn-secondary" name="submit">Upload <i
                            class="fa-solid fa-upload"></i></button>
            </form>
        </div>
    </div>
</div>
<script src="../script.js">

</script>
</body>
</html>
