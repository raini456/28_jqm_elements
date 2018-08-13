<html>
    <head>
        <title>jQuery Mobile page</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="assets/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="assets/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="assets/css/themes/mycolors.css" />
        <link rel="stylesheet" href="assets/css/themes/jquery.mobile.icons.min.css" />
        <!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
        <link rel="stylesheet" href="assets/css/jquery.mobile.structure-1.4.5.min.css" /> 
        <script src="assets/js/jquery-1.11.1.min.js"></script> 
        <script src="assets/js/jquery.mobile-1.4.5.min.js"></script>


    </head>
    <body>

        <div data-role="page">
            <!-- Öffnen und Schließen einer Seitennavigation-->
            <div data-role="panel" id="sideNav" data-display="overlay"><!-- oder auch push oder reveal-->
                <a href="#" class="ui-btn">HOME</a>
                <a href="#" class="ui-btn" data-rel="close">CLOSE</a>                
            </div>
            
            <!-- data-position="fixed" fixiert den Header, es ist ein HTML5-Element-->
            <div data-role="header" data-position="fixed">
                <h1>JQM</h1>
                <!-- data-role="navbar" strukturiert die Navileiste, geht maximal mit 5 Elementen-->
                <div data-role="navbar" data-iconpos="bottom">
                <ul>
                    <!--icons liegen in assets/images/icons-png-->
                    <!-- ui-btn-c holt sich aus der ui-CSS die entsprechenden btn-Attribute-->
                    <li><a href="#" class="ui-btn ui-btn-c" data-icon="home">HOME</a></li>
                    <li><a href="#" class="ui-btn ui-btn-c" data-icon="camera">PHOTO</a></li>
                    <li><a href="#" class="ui-btn ui-btn-c" data-icon="eye">ABOUT</a></li>     
                    <li><a href="#" class="ui-btn ui-btn-c" data-icon="heart">STORE</a></li> 
                </ul>
            </div>
                
            </div>
            <!-- data-role="content" rückt ein-->
            <div data-role="content">
                <h2>Steuerelemente</h2>
                <h3>Panell öffnen & schließen</h3>
                <a href="#sideNav" class="ui-btn ui-icon-bars" ui-btn-icon="bars">MENU</a>
                <h3>Buttons</h3>
                <!--Normaler Button-->
                <button class="ui-btn ui-btn-b ui-icon-delete ui-btn-icon-left">Klick</button>
                <!--Darstellung eines Links als Button mittels ui-btn-->
                <button class="ui-btn ui-icon-delete iu-btn-inline ui-btn-icon-notext">Klick</button>
                <button class="ui-btn ui-icon-calendar iu-btn-inline ui-btn-icon-notext">Klick</button>
                
                <a href="#" class="ui-btn ui-btn-c">Link als Button</a>
                <button class="ui-btn ui-icon-delete iu-btn-inline ui-btn-icon-notext ui-btn-icon-left">Klick</button>
                <button class="ui-btn ui-icon-calendar iu-btn-inline ui-btn-icon-notext ui-btn-icon-left">Klick</button>
                <h3>Gruppierte Links</h3>
            <!-- data-role=controlgroup" fasst alles zu einer einzigen Gruppe zusammen -->
            <div data-role="controlgroup">
                <!-- ui-corner-all nimmt den Borderradius weg-->
                <a href="#" class="ui-btn ui-corner-all">Link1</a>
                <a href="#" class="ui-btn ui-corner-all">Link2</a>
                <a href="#" class="ui-btn ui-corner-all">Link3</a>
                <a href="#" class="ui-btn ui-corner-all">Link4</a>
                <a href="#" class="ui-btn ui-corner-all">Link5</a>
            </div>
            
            <!-- data-type="horizontal" gruppiert horizontal -->
            <div data-role="controlgroup" data-type="horizontal">
                
                <a href="#" class="ui-btn ui-corner-all">Link1</a>
                <a href="#" class="ui-btn ui-corner-all">Link2</a>
                <a href="#" class="ui-btn ui-corner-all">Link3</a>                
            </div>
                <p>
                    Meow to be let in litter kitter kitty litty little kitten big roar roar feed me meow to be let in or howl on top of tall thing and meow and walk away. Stare at ceiling light. Toy mouse squeak roll over mesmerizing birds lick human with sandpaper tongue or friends are not food for intently sniff hand, and try to hold own back foot to clean it but foot reflexively kicks you in face, go into a rage and bite own foot, hard lick left leg for ninety minutes, still dirty. Hunt anything that moves catty ipsum. Claw drapes slap owner's face at 5am until human fills food dish purr please stop looking at your phone and pet me jump around on couch, meow constantly until given food, , yet chase laser. Step on your keyboard while you're gaming and then turn in a circle chill on the couch table or meow for food, then when human fills food dish, take a few bites of food and continue meowing. Rub face on owner have secret plans yet toilet paper attack claws fluff everywhere meow miao french ciao litterbox being gorgeous with belly side up kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff. Sit on human they not getting up ever meow to be let out meeeeouw playing with balls of wool and the dog smells bad open the door, let me out, let me out, let me-out, let me-aow, let meaow, meaow!. Chase red laser dot. Proudly present butt to human find a way to fit in tiny box lick the curtain just to be annoying, purr. Rub whiskers on bare skin act innocent refuse to come home when humans are going to bed; stay out all night then yowl like i am dying at 4am. Stare at ceiling light go into a room to decide you didn't want to be in there anyway sit in a box for hours for leave fur on owners clothes or i like fish. 
                </p>
            </div>
            
            
            <div data-role="content">

            </div>
            <div data-role="footer" data-position="fixed">
                <p>&copy; 2018</p>
                <div data-role="navbar" data-iconpos="right">
                <ul>
                    <li><a href="#" data-icon="mail">KONTAKT</a></li>
                    <li><a href="#">DATENSCHUTZ</a></li>
                    <li><a href="#">PHILOSOPHIE</a></li>                  
                </ul>
            </div>
            </div>
        </div>


    </body>
</html>