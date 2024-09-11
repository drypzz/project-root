<?php
    function generateCard($title, $description, $image, $link) {
        echo "
        <div class='card'>
            <img src='$image' alt='$title'>
            <div class='card-content'>
                <h3>$title</h3>
            </div>
            <div class='card-content'>
                <p>$description</p>
            </div>
            <div class='card-content'>
                <a href='$link' class='card-button'>Learn More</a>
            </div>
        </div>";
    }
?>