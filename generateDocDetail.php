<!doctype html>
<html>
<?php
include 'bootstrap.php';
?>
<script type="text/javascript" src="js/DocGeneration.js"></script>
<script type="text/javascript" src="js/AddField.js"></script>

<body>
<div class="container row col-md-4 text-center" id="DocTitle">
    <h1>Title: </h1><strong><?php echo $_POST['title'] ?></strong>
</div>
<div class="container row" id="DocDetail">
    <h3>Please select the type of format you want to add to the document: </h3>
    <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
        <div class="dropdown-content">
            <a href="#" onclick="add_field(text)">Text</a>
            <a href="#" onclick="add_field(video)">Video</a>
            <a href="#" onclick="add_field(audio)">Audio</a>
        </div>
    </div>
    <div id="form_zone" />
</div>
</body>
</html>