<?php
$bass = "";
$stra = "";
$bust = "";
$cult = "";
$leadd = "";
$tdat = "";
$pwap = "";

if (isset($_GET['business-assesment']))
    $bass = "active";
else if (isset($_GET['strategic-planning']))
    $stra = "active";
else if (isset($_GET['cultural-transformation']))
    $cult = "active";
else if (isset($_GET['leadership-development']))
    $orgd = "active";
else if (isset($_GET['team-development']))
    $impk = "active";
else if (isset($_GET['placement-with-purpose']))
    $pwap = "active";
else
    $bust = "active";

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properities -->
    <title>LaSalle Group</title>
    <script src="animations.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700'
          rel='stylesheet' type='text/css'>


    <link rel="prefetch" href="about.php">
    <link rel="prefetch" href="contact.php">
    <link rel="prefetch" href="help.php">
    <link rel="prefetch" href="index.php">
    <link rel="prefetch" href="css/styles.css">
    <link rel="prefetch" href="animations.js">
    <link rel="prefetch" href="packaged/css/semantic.css">


    <link rel="stylesheet" type="text/css" media="screen,print" href="less/collections/grid2.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="less/elements/label.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="less/elements/divider.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="less/elements/icon.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="less/views/list.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="less/elements/segment.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="less/elements/header.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="less/elements/button.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="less/modules/accordion.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="css/fixer.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="css/styles.css">


    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" media="screen,print" href="less/collections/oldframe.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="css/styles-old.css">
    <![endif]-->


</head>
<!--<html class="no-js">-->
<body  >
        <div id="inner" class="inner">
            <div class="ui page  grid stackable">
                <div class="row no-overflow">
                    <div class="small-11 wide column no-overflow ">
                        <div id="fullcontent"  class="row hidden-right "   style="overflow: hidden !important;"      >
                                <div id="help" class=" menux small-16 medium-14 wide column help nocursor no-overflow  ">
                                    <div class="row" >
                                        <div class=" left floated small-10 wide column" ><span class="tsqMont tsq-bottom smallhelp ">how we can help</span></div>
                                        <div class="  right floated  aligned small-5  column menux " onclick="gohome(3);"> <span class="tsq-bottom-home linkhome "> <i class="  home icon"> </i> <span class="tsqhome">Home</span> </span></div>
                                    </div>
                                </div>

                            <div class="row no-overflow texto">
                                <div id="art-content" class="small-16 medium-14 wide column art-content ">
                                    <br/><br/>
                                    <div class="ui accordion">
                                        <div class="<?php echo $bass; ?> title">
                                            BUSINESS ASSESMENT
                                            <i class="dropdown small icon"></i>
                                        </div>
                                        <div class="<?php echo $bass; ?> content">
                                            <p>Asses business and organization resources, financial cultural and operational state.</p>
                                        </div>
                                        <div class="<?php echo $stra; ?> title">
                                            STRATEGIC PLANNING
                                            <i class="dropdown small icon"></i>
                                        </div>
                                        <div class="<?php echo $stra; ?> content">
                                            <p>We beleive in tailored solutions to a company's challenges that are specific to their needs and goals.</p>
                                            <img class="ancho-max" src="images/3_StrategicPlanning.jpg" alt="Strategic Planning" />
                                        </div>
                                        <div class="<?php echo $bust; ?> title">
                                            BUSINESS AND CULTURAL TRANSFORMATION
                                            <i class="dropdown small icon"></i>
                                        </div>
                                        <div class="<?php echo $bust; ?> content">
                                            <p>
                                                Our holistic approach includes a structured methodology, trainings and coaching that will give leaders the tools they need for a succesful business transformation. Our consultants merge into organizations and work in close collaboration with company resources every step of the way.
                                            </p>
                                        </div>
                                        <div class="<?php echo $leadd; ?> title">
                                            LEADERSHIP DEVELOPMENT
                                            <i class="dropdown small icon"></i>
                                        </div>
                                        <div class="<?php echo $leadd; ?> content">
                                            <p>
                                                Our Process Knowledge Robustness allows decision makers to execute based on knowledge that includes an understanding of concepts and ideas as well as operational insight. Formation of leaders at all levels to achieve a sustainable high-performance operation.
                                            </p>
                                        </div>
                                        <div class="<?php echo $tdat; ?> title">
                                            TEAM DEVELOPMENT AND TRAINING
                                            <i class="dropdown small icon"></i>
                                        </div>
                                        <div class="<?php echo $tdat; ?> content">
                                            <p>
                                            Short Term Technical, Lean Six Sigma and Soft Skills development. Our Process Knowledge Robustness allows decision makers to execute based on knowledge that includes an understanding of concepts and ideas as well as operational insight. 
                                            </p>
                                        </div>
                                        <div class="<?php echo $pwap; ?> title">
                                            PLACEMENT WITH A PURPOSE
                                            <i class="dropdown small icon"></i>
                                        </div>
                                        <div class="<?php echo $pwap; ?> content">
                                            <p>
                                            Expert problem solver to help you SUCCEED.
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </div>
                    </div>
                    <div class="small-5 wide column no-overflow ">
                            <div class="row rowrollover ">
                                <div id="aboutus-menu" class="single column  aboutus menux aboutus-menu linkmenu" url="about.php" ><span class="tsqMenu tsq-middle "><span>about</span> us</span></div>
                                <div  id="aboutus-menu-roll" class="single column  aboutus-rollover text-rollover "  >
                                    <li class="munulinks">
                                        <ul><a href="about.php?company-profile"> COMPANY PROFILE</a></ul>
                                        <ul><a href="about.php?team-profile">TEAM PROFILE</a></ul>
                                        <ul><a href="about.php?our-team">OUR TEAM</a></ul>
                                        <ul><a href="about.php?service-profile">SERVICE PROFILE</a></ul>
                                        <ul><a href="about.php?vision">VISION</a></ul>
                                        <ul><a href="about.php?mission">MISSION</a></ul>
                                        <ul><a href="about.php?company-pillars">COMPANY PILLARS</a></ul>
                                    </li>
                                </div>
                            </div>

                        <div class="row  ">
                            <div id="help-menu" class="single column help menux upone" ><span class="tsqMenu tsq-middle ">how can we help</span></div>
                        </div>



                            <div class="row ">
                                <div id="contact-menu" class="single column contact menux linkmenu upone" url="contact.php" ><span class="tsqMenu tsq-middle"><span> contact</span> us</span></div>
                            </div>
                        <div class="row ">
                            <div id="twittertl" class="single column twittertl menu3x upone center aligned padding-top-1">
                                <span class="tituloMont font1p5 ">LinkedIn</span>
                                <?php include 'twitter.php'; ?>
                            </div>
                        </div>
                            <div class="row ">
                                <div id="social" class="single column social menu2d  center aligned upone" >
                                    <?php include 'social.php'; ?>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="js/jquery181.min.js"></script>
        <script src="js/jquery.address.js"></script>
        <!--<script type="text/javascript"  src="less/modules/accordion.js"></script>-->
        <!--<script type="text/javascript"  src="less/modules/dropdown.js"></script>-->
        <!--<script type="text/javascript"  src="less/modules/tab.js"></script>-->
        <!--<script type="text/javascript"  src="less/modules/jquery.bxslider.js"></script>-->
        <script type="text/javascript"  src="less/modules/modules-min.js"></script>
        <script type="text/javascript"  src="js/base.js"></script>
        <script src="js/jquery.transit.min.js"></script>
        <script>

            var touchEnabled = false;
            $(document.body).one('touchstart',
                function(e){
                    touchEnabled=true;
                    $(".text-rollover").addClass("invisible");
                    // other touch related init
                    //
                }
            );


            $( document ).ready(function() {
                $("#fullcontent")
                    .transition({ x: '0%', easing: 'ease' , duration:'1000',delay:'300'});

                $("#help-menu")
                    .transition({ x: '-100%', easing: 'ease' , duration:'800'})
                    .transition({ x: '-100%', easing: 'ease' ,  visibility:'hidden', delay:'500'});
                $("#contact-menu")
                    .transition({ y: '-100%', easing: 'ease' , duration:'250',delay:'800'});
                $("#twittertl")
                    .transition({ y: '-33%', easing: 'ease' , duration:'250',delay:'800'});
                $("#social")
                    .transition({ y: '-200%', easing: 'ease' , duration:'250',delay:'800'});

            });

            $( ".linkmenu" ).click(function() {


                $("#contact-menu")
                    .transition({ y: '0', easing: 'ease' , duration:'250',delay:'0'});
                $("#twittertl")
                    .transition({ y: '0%', easing: 'ease' , duration:'250',delay:'0'});
                $("#social")
                    .transition({ y: '0%', easing: 'ease' , duration:'250',delay:'0'});
                $("#fullcontent")
                    .transition({ x: '+150%', easing: 'ease' , duration:'1000',delay:'100'});
                $("#help-menu")
                    .transition({ x: '+0%', easing: 'ease' ,visibility:'visible', duration:'800'});

                setTimeout("window.location = '"+$(this).attr('url')+"'", 1250);

            });

            $( "#aboutus-menu" ).hover(function() {
                $("#aboutus-menu>span>span")
                    .addClass("underln");
                $("#aboutus-menu-roll")
                    .transition({ y: '8rem', height: '16rem', easing: 'ease' , duration:'250',delay:'0'});


            });

            $( ".rowrollover" ).mouseleave(function() {
                $("#aboutus-menu>span>span")
                    .removeClass("underln")
                $("#aboutus-menu-roll")
                    .transition({ y: '-100%', height: '8rem', easing: 'ease' , duration:'250',delay:'0'});
            });

            $( "#contact-menu" ).hover(function() {
                $("#contact-menu>span>span")
                    .addClass("underln");
            });

            $( "#contact-menu" ).mouseleave(function() {
                $("#contact-menu>span>span")
                    .removeClass("underln");
            });

        </script>



</body>
