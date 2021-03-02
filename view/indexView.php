<?php $title = ""; ?>

<?php ob_start(); ?>
    <!-- Content -->
    <div class="w3-card-3" id="container">
        <div class="w3-container w3-center w3-black w3-sofia" id="title">
            <p class="w3-xxxlarge">
                Welcome to Paraiges
            </p>
        </div>
        <div class="w3-content w3-display-container" id="slides">
            <img class="mySlides" src="view/src/img/equipment-768534_1280.jpg">
            <img class="mySlides" src="view/src/img/music-4507817_1280.jpg">
            <img class="mySlides" src="view/src/img/filmmaker-2838932_1280.jpg">
            <img class="mySlides" src="view/src/img/screenplay-2651055_1280.jpg">
            <img class="mySlides" src="view/src/img/old-1130731_1280.jpg">


            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>

        <div class="w3-content w3-container w3-justify">
            <p class="w3-justify">
                Paraiges is the biggest company which can help you to produce your videos for funky film platform.<br>
                Trust us, we can help you any way.<br>
                To be able to order some equipment, login to your account and go to search to order stuff. If you don't
                have
                an account, you can register in 5 minutes. It's free and safe.
            </p>
            <p class="w3-large">
                Your safety is our priority !!!
            </p>
        </div>
        <hr>
        <div class="w3-content w3-container w3-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus pharetra quam, id euismod elit
            placerat ut. Nullam lacus erat, ullamcorper imperdiet elit et, dapibus blandit ex. Maecenas sagittis pretium
            congue. Fusce iaculis sodales bibendum. Ut vitae auctor eros. Vestibulum ante ipsum primis in faucibus orci
            luctus et ultrices posuere cubilia curae; Sed ac commodo dolor. Donec pellentesque pellentesque felis, eu
            luctus libero sagittis nec. Vestibulum mollis turpis eget accumsan vestibulum.

            Phasellus sit amet convallis nunc. Duis non risus lorem. Nam tempus erat non urna pellentesque condimentum.
            Praesent id dolor auctor, vulputate ex id, fermentum libero. Suspendisse auctor placerat nisl, quis
            hendrerit felis rutrum at. Proin id nibh in lorem cursus vulputate a ac ipsum. Aliquam mollis, velit et
            rhoncus consequat, massa tortor sagittis lacus, vel auctor libero orci quis velit. Aenean in tempor diam.
            Nulla pulvinar nisi non arcu ultricies efficitur. Fusce vitae consectetur justo, id vehicula quam. Praesent
            dictum neque in porta tincidunt. Aliquam vel nulla molestie, placerat libero in, viverra nunc. Donec sed
            enim neque. Pellentesque ut dictum turpis. In sit amet rutrum quam, id tincidunt mauris. Nulla cursus
            eleifend leo, ac auctor turpis iaculis eu.

            Ut gravida lorem et erat fermentum, nec gravida nisi viverra. Maecenas dictum tortor ex, eget posuere dui
            interdum a. Etiam eleifend vehicula nisl nec sollicitudin. Aenean et fringilla dui. Nam mollis posuere nisi
            nec sagittis. Duis cursus sem nulla, eu viverra mi sagittis ut. Donec molestie et dolor ut vestibulum.
            Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis non placerat lorem, id euismod quam.
            Pellentesque vehicula erat quis lacus sollicitudin varius. Nunc congue ultricies ligula, ut tempor nisl
            rhoncus nec. Morbi euismod lacus tortor, sed sagittis sem consequat vehicula. Praesent sed sodales enim.
            Etiam mollis finibus tortor, et faucibus sapien mollis eget. Fusce vitae dolor quis magna tempus pharetra.

            Vestibulum eget gravida augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
            inceptos himenaeos. Aliquam vulputate est ante, et dignissim augue dignissim vitae. Nunc dolor quam, blandit
            a justo vel, commodo congue ex. Maecenas et dolor eget nibh tempor scelerisque a quis arcu. Praesent
            volutpat risus ac diam euismod scelerisque. Class aptent taciti sociosqu ad litora torquent per conubia
            nostra, per inceptos himenaeos. Sed venenatis ex eu diam dictum, vestibulum vestibulum nisi malesuada.

            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas tortor
            ante, feugiat condimentum accumsan id, dapibus nec nulla. Ut mauris augue, rhoncus ornare elit et, consequat
            maximus enim. Maecenas luctus tempor quam nec tincidunt. Nullam sit amet nunc posuere ante porta ullamcorper
            nec nec libero. Vestibulum rhoncus eros ante, id dapibus turpis interdum ac. Suspendisse ac pretium metus,
            sit amet sagittis nibh. Cras et est id augue mattis interdum. Aliquam erat volutpat.
        </div>

        <div class="w3-content w3-container" id="card-container">
            <div class="w3-card-4 cards">

                <header class="w3-container w3-light-grey">
                    <h3>Lorem ipsum dolor sit amet</h3>
                </header>

                <div class="w3-container">
                    <p>Lacinia at quis risus sed vulputate odio ut enim blandit volutpat maecenas volutpat blandit
                        aliquam.</p>
                </div>
            </div>
            <div class="w3-card-4 cards">

                <header class="w3-container w3-light-grey">
                    <h3>morbi tristique senectus</h3>
                </header>

                <div class="w3-container">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. In nisl nisi scelerisque eu ultrices vitae auctor. Mi tempus
                        imperdiet nulla malesuada pellentesque elit eget gravida.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>

<?php $content = ob_get_clean(); ?>

<?php require("view/template.php"); ?>