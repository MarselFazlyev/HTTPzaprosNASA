<html lang="en-us">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>Super Planet Crash - Can you feel the gravity?</title>
        <meta name="author" content="Stefano Meschiari">
        <meta name="description" content="A game of gravity.">
        <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Exo:400,100,200,300,500,700,600,800,900&a=.css" rel="stylesheet">
        <meta property="og:image" content="img/spc.png">
        <script src="libs/underscore/underscore-min.js" type="text/javascript"></script>
        <script src="libs/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="libs/devicejs/lib/device.min.js" type="text/javascript"></script>
        <script src="libs/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47960829-1', 'auto');
  ga('send', 'pageview');

</script>
    </head>

    <body>
        


        <script type="text/javascript">
         BASEURL = location.protocol + '//' + location.host + location.pathname;
        </script>
        <script type="text/javascript" src="js/template.min.js"></script>
        <canvas id="universe" resize="true" hidpi="false">
        </canvas>
        <div id="sidebar">
            <div id="title">
                <a class="spc">
                    <span class="white-color" id="title0">Super</span><br>
                    <span class="base0C" id="title1">Planet</span><br>
                    <span class="base0A" id="title2">Crash</span>
                </a>
            </div>
            <div id="cfg">
                Click on the type of body to add next:
                <ul class="nav nav-pills nav-stacked" id="masses">
                    <li class="active" id="mass-earth">
                        <a href="#" class="mass-sel" data-points="1">
                            <span class="badge pull-right">1x</span>
                            Earth
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mass-sel" data-points="20">
                            <span class="badge pull-right">15x</span>
                            Ice giant
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mass-sel" data-points="300">
                            <span class="badge pull-right">300x</span>
                            Giant planet
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mass-sel" data-points="5000">
                            <span class="badge pull-right">5,000x</span>
                            Brown dwarf
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mass-sel" data-points="30000">
                            <span class="badge pull-right">30,000x</span>
                            Dwarf star
                        </a>
                    </li>
                </ul>
            </div>
            <div class="btn-group adjust-2">
                <button type="button" class="btn btn-default btn-lg" id="slower" title="Slower"><span class="glyphicon glyphicon-backward"></span> Slower</button>      
                <button type="button" class="btn btn-default btn-lg" id="faster" title="Faster"><span class="glyphicon glyphicon-forward"></span> Faster</button>

            </div>
            <div>
                <button type="button" class="btn btn-info btn-lg full-width" id="help">Help</button>        
                <button type="button" class="btn btn-danger btn-lg full-width" id="stop">End Game</button>
            </div>
        </div>
        <div id="popup" style="display:none">
            <div>
                <button type="button" class="btn pull-right" id="close-popup"><span class="glyphicon glyphicon-remove"></span></button>
            </div>
            <div id="pop-help">
                To beat <span class="white-color" id="title0">Super</span>
                <span class="base0C" id="title1">Planet</span>
                <span class="base0A" id="title2">Crash</span>, create a planetary
                system that can survive for <strong>1000</strong> years.
                <hr>
                <ul>
                    <li>You can gain more points by adding more bodies (up to 10 bodies). Add bodies by clicking anywhere.</li>
                    <li>The more massive the body, the more points! From 1 point for an Earth-mass planet, to 30,000 for a stellar companion. But remember, each planet attracts each other gravitationally and you don't want your system to go KABOOM!</li>
                    <li>You will lose the game if two bodies crash with each other, or if one of the bodies crashes against the 2-AU barrier (the gray circle)</li>
                    
                </ul>
                <hr>
                <center>
                    <button type="button" class="btn btn-lg btn-info" id="close-help">Close Help</button>
                </center>
            </div>
            <div id="pop-why" style="display:none">
                
            </div>
            <div id="pop-points" style="display:none">
                <center>
                    <div class="pop-big" id="pop-points-tot"></div>points over
                    <div class="pop-big" id="pop-years-tot"></div> years!
                    <hr>
                    Enter your name for the leaderboard:<br>
                    <input type="input" id="hiscore-name" maxlength="3" size="8" placeholder="NAME"><br>
                    <button type="button" class="btn btn-danger btn-lg" id="newgame">New game</button>                    
                </center>
            </div>
            
        </div>
        <div id="pop-highscore" style="display:none">
            <hr>
        </div>
        </div>
        <div id="sidebar-right">
            <div id="points"></div>
            <div id="time"></div>
        </div>
        <script src="js/uiutils.js" type="text/javascript"></script>
        <script src="js/colors.min.js" type="text/javascript"></script>
        <script src="js/utils.min.js" type="text/javascript"></script>
        <script src="js/pcl.js?v=62af5672406af" type="text/javascript"></script>
        <script src="libs/paperjs_git/paper-full.min.js" type="text/javascript"></script>    
        <script src="js/ps.js?v=62af5672406b6" type="text/paperscript" canvas="universe"></script>
    </body>
</html>
