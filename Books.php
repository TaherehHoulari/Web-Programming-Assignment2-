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
        <title>Books</title>
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"/>
        <link rel="stylesheet" type="text/css" href="assignment2.css">
        <script src="searchfilter.js" defer></script>
    </head>
<body>
    
 <?php include "header.php"; ?>

        <div class="container1">
       <div class="input-filter">
        <input type="text" name="" id="filter" class="filter" placeholder="Search Book Titles..." onkeyup="searchProduct();">
   
</div>
        <div class="books" id="books">
        <div class="card" id="card">
            <a target="blank" href="https://www.amazon.ca/Emotional-Intelligence-2-0-Relationships-Influence/dp/B095L9LTXP/ref=sr_1_59_sspa?crid=3CK6XCC80THOQ&keywords=self+help+book&qid=1669763037&qu=eyJxc2MiOiI1LjM5IiwicXNhIjoiNS4yMCIsInFzcCI6IjQuNjYifQ%3D%3D&sprefix=self+help+book%2Caps%2C102&sr=8-59-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFHR0JGRTFVNEo5TkwmZW5jcnlwdGVkSWQ9QTAwMTM3NDUzMTQ0WVBaWk9RVDRIJmVuY3J5cHRlZEFkSWQ9QTEwMTk1MjMyTFZISzlPOFUzRUNIJndpZGdldE5hbWU9c3BfYnRmJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ== ">
         <img src="images/EmotionalIntelligence.png" alt="IntelligenceBook" style="width:100%"></a>
         <div class="container">
          <h4 class="title"><b>Emotional Intelligence</b></h4> 
         <p>Author: Joseph Griffith</p> 
          <p>Price: $24.42</p>
          
        </div>
        </div>
    
    
       <div class="card" id="card">
         <a target="blank" href="https://www.amazon.ca/Power-Now-Guide-Spiritual-Enlightenment/dp/1577314808/ref=sr_1_47?crid=3NOKXOHLRZDGG&keywords=self+help+book&qid=1669763518&qu=eyJxc2MiOiI1LjM5IiwicXNhIjoiNS4yMCIsInFzcCI6IjQuNjYifQ%3D%3D&sprefix=self+help+boo%2Caps%2C203&sr=8-47">
         <img src="images/ThePowerofNow.png" alt="ThePower" style="width:100%"></a>
         <div class="container">
          <h4 class="title"><b>The Power of Now</b></h4> 
         <p>Author: Eckhart Tolle</p> 
          <p>Price: $23.71</p>
            
            </div>
            </div>

        <div class="card" id="card">
         <a target="blank" href="https://www.amazon.ca/Master-Your-Emotions-Practical-Negativity/dp/1981089152/ref=sr_1_16?crid=3HB1363XIJUQJ&keywords=self+help+books&qid=1669764719&qu=eyJxc2MiOiI2LjQyIiwicXNhIjoiNi4xMiIsInFzcCI6IjUuOTUifQ%3D%3D&sprefix=self+help+books%2Caps%2C274&sr=8-16">
         <img src="images/MasterYourEmotions.png" alt="Master" style="width:100%"></a>
         <div class="container">
          <h4 class="title"><b>Master Your Emotions</b></h4> 
         <p>Author: Thibaut Meurisse</p> 
          <p>Price: $21.99</p>
            
            </div>
            </div>

        <div class="card" id="card">
            <a target="blank" href="https://www.amazon.ca/10-Minute-Fix-simple-better/dp/0648847101/ref=sr_1_57_sspa?crid=1Q8KZJV9T84KI&keywords=self+help+book&qid=1669763950&qu=eyJxc2MiOiI1LjM5IiwicXNhIjoiNS4yMCIsInFzcCI6IjQuNjYifQ%3D%3D&sprefix=%2Caps%2C144&sr=8-57-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFZSzQ4NU0zOFM2WkkmZW5jcnlwdGVkSWQ9QTA3OTQzMTEyQlhMSFRUUDRVVFVFJmVuY3J5cHRlZEFkSWQ9QTA2ODU1MDg4M0pQVDVVQU04TkMmd2lkZ2V0TmFtZT1zcF9idGYmYWN0aW9uPWNsaWNrUmVkaXJlY3QmZG9Ob3RMb2dDbGljaz10cnVl">
         <img src="images/the10minutefix.png" alt="10MinuteFix" style="width:100%"></a>
         <div class="container">
          <h4 class="title"><b>10 Minute Fix</b></h4> 
         <p>Author: Catherine Greer</p> 
          <p>Price: $19.99</p>
            
            </div>
            </div>

        <div class="card" id="card">
            <a target="blank" href="https://www.amazon.ca/Lightly-Live-Simple-Serene-Stress-free/dp/1328585034/ref=sr_1_2?crid=M1RXQKISM9TY&keywords=lightly+book&qid=1669764612&qu=eyJxc2MiOiIxLjk0IiwicXNhIjoiMS41MiIsInFzcCI6IjAuMDAifQ%3D%3D&sprefix=lightly+book%2Caps%2C235&sr=8-2">
         <img src="images/lightly.png" alt="lightly" style="width:100%"></a>
         <div class="container">
          <h4 class="title"><b>Lightly</b></h4> 
         <p>Author: Francine Jay</p> 
          <p>Price: $26.68</p>
            
            </div>
            </div>

        <div class="card" id="card">
            <a target="blank" href="https://www.amazon.ca/Atomic-Habits-Proven-Build-Break/dp/0735211299/ref=asc_df_0735211299/?tag=googleshopc0c-20&linkCode=df0&hvadid=309344616184&hvpos=&hvnetw=g&hvrand=10883938045067316506&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9000664&hvtargid=pla-541463258824&psc=1">
         <img src="images/Atomic.jpg" alt="Atomic" style="width:100%"></a>
         <div class="container">
          <h4 class="title"><b>Atomic Habits</b></h4> 
         <p>Author: James Clear</p> 
          <p>Price: $21.66</p>
            
            </div>
            </div>
       
       <div class="card" id="card">
           <a target="blank" href="https://www.amazon.ca/Girl-Wash-Your-Face-Believing/dp/1400201659">
         <img src="images/Girl.jpg" alt="Atomic" style="width:100%"></a>
         <div class="container">
          <h4 class="title"><b>Girl Wash Your Face</b></h4> 
         <p>Author: James Clear</p> 
          <p>Price: $24.15</p>
            </div>
            </div>

        <div class="card" id="card">
            <a target="blank" href="https://www.amazon.ca/Mans-Search-Meaning-Viktor-Frankl/dp/067166736X/ref=sr_1_5?gclid=Cj0KCQiA4aacBhCUARIsAI55maHQT7bBLDTPGrUcgzXwaZErV3HLY-htv5C2HJ6gkO5cK6yO31tgS2waAvOlEALw_wcB&hvadid=252282851518&hvdev=c&hvlocphy=9000682&hvnetw=g&hvqmt=e&hvrand=18158041758805891409&hvtargid=kwd-314814788776&hydadcr=10138_10274288&keywords=man%27+search+for+meaning&qid=1670000618&qu=eyJxc2MiOiIwLjAwIiwicXNhIjoiMC4wMCIsInFzcCI6IjAuMDAifQ%3D%3D&sr=8-5">
         <img src="images/MansSearch.jpg" alt="MansSearch" style="width:100%"></a>
         <div class="container">
          <h4 class="title"><b>Man's Search For Meaning</b></h4> 
         <p>Author: Viktor E. Frankl </p> 
          <p>Price: $57.78</p>
            
            </div>
            </div>
            
            
         <div class="card" id="card">
             <a target="blank" href="https://www.amazon.ca/You-are-Badass-Deluxe-Greatness/dp/0762490543/ref=tmm_hrd_swatch_0?_encoding=UTF8&qid=&sr=">
         <img src="images/YouAreABadass.jpg" alt="Badass" style="width:100%"></a>
         <div class="container">
         <h4 class="title"><b>You are a Badass </b></h4> 
         <p>Author: Jen Sincero </p> 
         <p>Price: $24.75</p>
         </div>
         </div>
        
        
         <div class="card" id="card">
         <a target="blank" href="https://www.amazon.ca/Habits-Highly-Effective-People-Collectors/dp/1642507628/ref=tmm_hrd_swatch_0?_encoding=UTF8&qid=1670001219&sr=1-2-spons">
         <img src="images/7habits.jpg" alt="7habits" style="width:100%"></a>
         <div class="container">
         <h4 class="title"><b>The 7 Habits of Highly Effective People </b></h4> 
         <p>Author: Sean Covey  </p> 
         <p>Price: $33.95</p>
         </div>
         </div>
  
            </div>

 
<?php include "footer.php"; ?> 
    </body>
  </html>
  
