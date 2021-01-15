<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Jack Daniel's Tennessee Whiskey</title>
        <meta name="author" content="" />
        <meta name="description" content="Web site for jack Daniel's" />
        <link rel="shortcut icon" href="images/l" />
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
      <header class="grid topnav hover ul-top">
        <?php
          include '/home/Lacasse200368820/public_html/comp1002/Project/includes/global-nav.php';
        ?>
      </header>
        <main>
            <div class="container">
                <div style="text-align:center">
                  <h2>CONTACT US</h2>
                  <p>FOR GENERAL QUESTIONS DROP US A NOTE USING THE FORM BELOW</p>
                </div>
                <div class="row">
                  <div class="column">
                    <img src="images/John-A-Leach-New-York-City-agents-1920.jpg" style="width:100%">
                  </div>
                  <div class="column">

                  <form action="welcome.php" method="post" Style="display: flex; flex-direction: column; text=align: center; align-items: center;">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fName" placeholder="Your name..">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lName" placeholder="Your last name..">
                        <label for="email">Email Address</label>
                        <input type="text" id="email" name="email" placeholder="Your email address..">
                        <label for="country">Country</label>
                        <select id="country" name="country">
                          <option value="australia">Australia</option>
                          <option value="canada">Canada</option>
                          <option value="usa">USA</option>
                        </select>
                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Content.." style="height:170px"></textarea>
                        <button type="submit" onclick="myFunction()">Submit</button>
                        <script>
                          function myFunction() {
                          alert("You will now be directed to a confimation page!");
                          }
                        </script>
                      </div>
                    </div>
                  </div>
                </form>
        </main>
        <footer>
            <img class="bottom-logo" src="images/121-1215708_jack-daniels-logo-png.png" />
            <p><small>JACK DANIEL DISTILLERY LYNCHBURG, TENNESSEE<br>
                JACK DANIEL’S, OLD NO. 7, TENNESSEE FIRE,  TENNESSEE HONEY, GENTLEMAN JACK, AND NO. 27 GOLD<br>
                are registered trademarks of Jack Daniel's Properties, Inc. © 2020.<br>
                All rights reserved. All other trademarks and trade names are properties of their respective owners.<br>
                TO FIND OUT MORE ABOUT RESPONSIBLE CONSUMPTION, VISIT RESPONSIBILITY.ORG AND OURTHINKINGABOUTDRINKING.COM<br>
                Please do not share or forward with anyone under the legal drinking age.<br></small></p>
        </footer>
    </body>
</html>