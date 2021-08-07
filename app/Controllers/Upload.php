<?php
if (is_array($_FILES) && count($_FILES) > 0) {
    if (($_FILES["file"]["type"] == "img/jpg")
        || ($_FILES["file"]["type"] == "img/jpeg")
        || ($_FILES["file"]["type"] == "img/png")
        || ($_FILES["file"]["type"] == "img/gif")) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], "img/".$_FILES['file']['name'])) {
            //more code here...
            echo "img/".$_FILES['file']['name'];
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }
} else {
    echo 0;
}