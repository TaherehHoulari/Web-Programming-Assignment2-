<!--
Name: Ikram Farah, Tejas Patel, Glenda Andaur, SeyedehTahereh Houlari
Date: December 4, 2022
Section: CST 8285 section 304
This is the index.html for our Assignment 2 submission.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=" author " content=" Ikram Farah, Tejas Patel, Glenda Andaur, SeyedehTahereh Houlari ">
    <meta name=" description " content=" Assignment 2">
    <meta name=" keywords " content=" assignment2,cst8285,htmlcode">
    <title>Audio Books</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="assignment2.css">
    <script src="searchfilter.js" defer></script>
</head>

<body>
 <?php include "header.php"; ?>
    
       <div class="container1">
       <div class="input-filter">
        <input type="text" name="" id="filter" class="filter" placeholder="Search Audio Book Titles..." onkeyup="searchProduct();">
    
        <div class="books" id="books">
            <div class="card" id="card">
                <a target="blank"
                    href="https://www.amazon.com/the-light-we-carry/dp/B0B5FW755D/ref=sr_1_1?qid=1669100581&refinements=p_n_feature_browse-bin%3A1240885011&s=books&sr=1-1 ">
                    <img src="images/MichelleO.jpg" alt="MichelleOBook" style="width:100%"></a>
                    <div class="container">
                        <h4 class="title"><b>The Light We Carry: Overcoming in Uncertain Times</b></h4>
                        <p>Authour: Michelle Obama</p>
                        <p>Price: $16.99</p>
                    </div>
            </div>

            <div class="card" id="card">
                <a target="blank "
                    href="https://www.amazon.com/Mountain-You-Transforming-Self-Sabotage-Self-Mastery/dp/B09WXLQM7J/ref=sr_1_15?qid=1669097259&refinements=p_n_feature_browse-bin%3A1240885011&s=books&sr=1-15 ">
                    <img src="images/Mountain.jpg" alt="MountainBook" style="width:100%"></a>
                <div class="container">
                    <h4 class="title"><b>The Mountain Is You: Transforming Self-Sabotage into Self-Mastery</b></h4>
                    <p>Author:Brianna Wiest</p>
                    <p>Price:$9.99</p>
                </div>
            </div>

            <div class="card" id="card">
                <a target="blank"
                    href="https://www.amazon.com/Breaking-Habit-Being-Yourself/dp/B0868X3NHH/ref=sr_1_33?qid=1669097398&refinements=p_n_feature_browse-bin%3A1240885011&s=books&sr=1-33 ">
                    <img src="images/Breaking.jpg" alt="BreakingBook" style="width:100%"></a>
                <div class="container">
                    <h4 class="title"><b>Breaking the Habit of Being Yourself</b></h4>
                    <p>Author:Joe Dispenza</p>
                    <p>Price:$9.99</p>
                </div>
            </div>

            <div class="card" id="card">
                <a target="blank "
                    href="https://www.amazon.com/Relentless-Good-Great-Unstoppable/dp/B08KFGLH15/ref=sr_1_34?qid=1669097398&refinements=p_n_feature_browse-bin%3A1240885011&s=books&sr=1-34 ">
                    <img src="images/Relentless.jpg" alt="RelentlessBook" style="width:100%"></a>
                <div class="container">
                    <h4 class="title"><b>Relentless: From Good to Great to Unstoppable</b></h4>
                    <p>Author:Tim S. Grover</p>
                    <p>Price:$13.99</p>
                </div>
            </div>

            <div class="card" id="card">
                <a target="blank"
                    href="https://www.amazon.com/The-Obstacle-Is-Way-Ryan-Holiday-audiobook/dp/B00K5JUNSU/ref=sr_1_40?qid=1669097398&refinements=p_n_feature_browse-bin%3A1240885011&s=books&sr=1-40 ">
                    <img src="images/Obstacle.jpg" alt="ObstacleBook" style="width:100%"></a>
                <div class="container">
                    <h4 class="title"><b>The Obstacle Is the Way: The Timeless Art of Turning Trials into Triumph</b></h4>
                    <p>Author:Ryan Holiday</p>
                    <p>Price:$10.99</p>
                </div>
            </div>

            <div class="card" id="card">
                <a target="blank "
                    href="https://www.amazon.ca/Good-Vibes-Life-Self-Love-Unlocking/dp/B08NW9M1PF/ref=tmm_aud_swatch_0?_encoding=UTF8&qid=1669176844&sr=8-11 ">
                    <img src="images/AudioBook6.jpg" alt="AudioBook6" style="width:100%"></a>
                <div class="container">
                    <h4 class="title"><b>Good Vibes, Good Life: How Self-Love Is the Key to Unlocking Your Greatness</b></h4>
                    <p>Author: Vex King</p>
                    <p>Price: $13.99</p>
                </div>
            </div>

            <div class="card" id="card">
                <a target="blank"
                    href="https://www.amazon.ca/Think-Again-Power-Knowing-What-ebook/dp/B08H177WQP/ref=zg_bs_5792143011_sccl_8/139-1574921-6889228?psc=1 ">
                    <img src="images/AudioBook7.jpg" alt="AudioBook7" style="width:100%"></a>
                <div class="container">
                    <h4 class="title"><b>Think Again</b></h4>
                    <p>Author: Adam Grant </p>
                    <p>Price: $16.99</p>
                </div>
            </div>

            <div class="card" id="card">
                <a target="blank "
                    href="https://www.amazon.ca/Burnout-Secret-Unlocking-Stress-Cycle-ebook/dp/B07DT4GW16/ref=sr_1_34?crid=15HAXID1PRU4Z&keywords=self+help+ebook&qid=1669183572&qu=eyJxc2MiOiIxLjYzIiwicXNhIjoiMC4wMCIsInFzcCI6IjAuMDAifQ%3D%3D&refinements=p_72%3A5916688011&rnid=5916682011&s=digital-text&sprefix=%2Caps%2C586&sr=1-34 ">
                    <img src="images/AudioBook8.jpg" alt="AudioBook8" style="width:100%"></a>
                <div class="container">
                    <h4 class="title"><b>Title</b></h4>
                    <p>Author: Amelia Nagoski, Emily Nagoski</p>
                    <p>Price: $13.99</p>
                </div>
            </div>

            <div class="card" id="card">
                <a target="blank"
                    href="https://www.amazon.ca/Coffee-Self-Talk-Minutes-Living-Magical-ebook/dp/B0B5Y773GB/ref=sr_1_38?crid=15HAXID1PRU4Z&keywords=self+help+ebook&qid=1669183853&qu=eyJxc2MiOiIxLjYzIiwicXNhIjoiMC4wMCIsInFzcCI6IjAuMDAifQ%3D%3D&refinements=p_72%3A5916688011&rnid=5916682011&s=digital-text&sprefix=%2Caps%2C586&sr=1-38 ">
                    <img src="images/AudioBook9.jpg" alt="AudioBook9" style="width:100%"></a>
                <div class="container">
                    <h4 class="title"><b>Coffee Self Talk</b></h4>
                    <p>Author: Kristen Helmstetter</p>
                    <p>Price: $12.99</p>
                </div>
            </div>

            <div class="card" id="card">
                <a target="blank"
                    href="https://www.amazon.ca/Break-Your-Self-Help-Addiction-ebook/dp/B0736J2HMH/ref=sr_1_50?crid=15HAXID1PRU4Z&keywords=self+help+ebook&qid=1669183950&qu=eyJxc2MiOiIxLjYzIiwicXNhIjoiMC4wMCIsInFzcCI6IjAuMDAifQ%3D%3D&refinements=p_72%3A5916688011&rnid=5916682011&s=digital-text&sprefix=%2Caps%2C586&sr=1-50 ">
                    <img src="images/AudioBook10.jpg" alt="AudioBook10" style="width:100%"></a>
                <div class="container">
                    <h4 class="title"><b>Your Self Help Addiction</b></h4>
                    <p>Author: Brian D. Ridgway</p>
                    <p>Price: $17.99</p>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

    </body>

</html>
