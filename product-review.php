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
            <div class="product-header2">
                <h2>JACKS CHOICE | PRODUCT LIST</h2>
            </div>
            <!--Product Card for Jack Daniel's No, 7-->
            <div class="card">
                <img src="images/old_no7_01_opt.png" alt="Denim Jeans" style="width:100%">
                <p>Jack Daniel's Ols No. 7 Tennessee Whiskey</p>
                <p class="price">$35.95</p>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-o checked"></span>
                <span class="fa fa-star-o checked"></span>
                <p>Set up in 1866, Jack Daniel's became the US's first registered distillery; it soon became a lengendary American whiskey.</p>
                <p><button>Add to Cart</button></p>
                <!--Product card for Jack Daniel's Gentleman-->
                <img src="images/gentleman_jack_01.png" alt="Denim Jeans" style="width:100%">
                <p>Jack Daniel's Gentleman Jack</p>
                <p class="price">$40.00</p>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-o checked"></span>
                <span class="fa fa-star-o checked"></span>
                <p>Tennessee- New oak, light caramel and butter. Air contact allows the aroma to develop only modestly. Palate entry is seamlessly smooth, off-dry and slightly nutty or oaky. At midpalate, the taste veers to the fruity and grainy side - the mellower side of Jack Daniels.</p>
                <p><button>Add to Cart</button></p>
                <!--Product card for jack Daniel's Silver Select-->
                <img src="images/5d1219febcd70.png" alt="Denim Jeans" style="width:100%">
                <p>Jack Daniel's Silver Select</p>
                <p class="price">$435.00</p>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <p>A gorgeous Tennessee whiskey from Jack Daniel's, Silver Select is bottled at higher strength and the result is plenty of rich sweetness and complexity. Each barrel is aged in a different location within the warehouse for a better maturation.</p>
                <p><button>Add to Cart</button></p>
            </div>

                <label>Rating: <b><span id="rating"></span></b> out of <b>5</b></label>
                <br>
                <input type="range" min="0" max="5" step="1" id="range"/>
                <br>
                <button type="reset">Submit</button>

        </div>
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