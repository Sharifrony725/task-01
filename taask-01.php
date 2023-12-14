<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .quotation {
        background-color: aliceblue;
        padding: 20px;
        font-size: 20px;
        width: 400px;
        margin: 0 auto;
    }

    .heading{
        text-align: center;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 10px;
    }
</style>

<body>
    <h2 class="heading">Task 01</h2>
    <?php
    $random_text = array(
        "<div class='quotation'>How many chocolate chips are there in a rainbow? <br> Cocoa Chipstein</div>",
        "<div class='quotation'>What's the square root of a penguin? <br>  Professor IcyFeather Quackingtonv </div>",
        "<div class='quotation'>Can you teach a cat to play the accordion? <br> Sir Whisker Melody Maker </div>",
        "<div class='quotation'>If a tree falls in a video game and no one is around to hear it, does it make a sound?  <br> Pixelwood Philosophicus
        </div>",
    );

    $sizeof = count($random_text);
    $random = (rand() % $sizeof);
    print("$random_text[$random]");

    ?>
</body>

</html>