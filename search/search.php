<?php
if(!isset($_SESSION['logged_in'])){
?>
<div class="container-fluid pb-2 bg-secondary">
    <div class="row justify-content-center">
        <div class="col-sm-6 d-flex">
            <input type="search" class="mt-2 form-control search" name=""
                   id="search" placeholder="Search artists, songs, albums, genres here...">
            <i class="searchBtn fa-solid fa-magnifying-glass ml-2"></i>
        </div>

    </div>
</div>

<?php } ?>