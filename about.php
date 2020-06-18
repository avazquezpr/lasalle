<?php

$cprof = "";
$tprof = "";
$sprof = "";
$vis = "";
$miss = "";
$cpill = "";
$ourteam = "";

if (isset($_GET['company-profile']))
    $cprof = "active";
else if (isset($_GET['team-profile']))
    $tprof = "active";
else if (isset($_GET['service-profile']))
    $sprof = "active";
else if (isset($_GET['vision']))
    $vis = "active";
else if (isset($_GET['mission']))
    $miss = "active";
else if (isset($_GET['company-pillars']))
    $cpill = "active";
    else if (isset($_GET['our-team']))
    $ourteam = "active";
else
    $cprof = "active";

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

<!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>-->


    <link rel="stylesheet" type="text/css" media="screen,print" href="less/collections/grid2.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="less/elements/label.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="less/elements/icon.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="less/elements/divider.css">
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
<body >
        <div id="inner" class="inner">
            <div class="ui page  grid stackable">
                <div class="row">
                    <div class="small-11 column no-overflow">
                            <div id="fullcontent"  class="row hidden-right no-overflow " style="overflow: visible">
                                <div id="aboutus" class=" menux small-16 medium-14  column aboutus  nocursor aboutus-menu ">
                                    <div class="row">
                                        <div class=" left floated small-10 wide column" ><span class="tsqMont tsq-bottom">about us</span></div>
                                        <div class="  right floated  aligned small-5  column menux " onclick="gohome(3);"> <span class="tsq-bottom-home linkhome "> <i class="  home icon"> </i> <span class="tsqhome">Home</span> </span></div>
                                    </div>

                                </div>

                            <div class="row no-overflow texto">
                                <div id="art-content" class="small-16 medium-14 wide column art-content  ">
                                    <br/><br/>
                                    <div class="ui accordion " >
                                        <div class="<?php echo $cprof; ?> title">
                                            COMPANY PROFILE
                                            <i class="  dropdown small icon"></i>
                                        </div>
                                        <div class="<?php echo $cprof; ?> content">
                                            <p>LaSalle Group, LLC is a business-consulting firm with experience in North and Latin America helping clients increase efficiency, reduce operational costs, and create a culture of continuous improvement.  Our service offerings include business and cultural transformation, organizational development, strategic planning, and coaching/training.  These services allow us to help multinational clients in the Pharmaceutical, Manufacturing, Research, and Banking industries, among others, achieve sustainable, efficient, and competitive operations.  </p>
                                            <img class="ancho-max" src="images/1_CompanyProfile.jpg" alt="contact us" />

                                        </div>
                                        <div class="<?php echo $tprof; ?> title">
                                            TEAM PROFILE
                                            <i class="  dropdown small icon"></i>
                                        </div>
                                        <div class="<?php echo $tprof; ?> content">
                                            <p>The LaSalle Group, LLC team is composed of highly skilled and experienced professionals with ample academic and professional backgrounds in the areas of Cultural Transformation, Operational Excellence, Maintenance Excellence, Lean Six Sigma, Strategic Planning, Coaching and Training.  Staying true to the company's motto “We Believe in Change”, its industrial organizational psychologists, engineers, scientists, and business team members (including former plant managers, LSS practitioners, and professionals with over 12 years of experience) are known to roll up their sleeves and work in tight partnership with your team.  Whether working with corporate teams or floor management and staff, the main goal is to help your organization become top performing, leading, and innovative. LaSalle Group, LLC helps you lead transformation and prepare your organization's leaders to foster change and continuous improvement.</p>

                                                <div CLASS="ui right divider">PRINCIPALS</div>

                                            <div class="ui  horizontal list" style="text-align: left">
                                                <div class="item listpers" >
                                                    <div class="content" style="font-size: 0.8rem">
                                                        <img src="images/Yolanda.jpg"/><br/>
                                                        Eng. Yolanda Lassalle,<br/> LSSMBB
                                                    </div>
                                                </div>
                                                <div class="item listpers" >
                                                    <div class="content"  style="font-size: 0.8rem">
                                                        <img src="images/David.jpg"/><br/>
                                                        Eng. David Pagan-Rosa
                                                    </div>
                                                </div>
                                            </div>

                                            <div CLASS="ui right divider">Senior Consultants</div>
                                            <div class="ui  horizontal list" style="text-align: left">
                                                <div class="item listpers" >
                                                    <div class="content" style="font-size: 0.8rem">
                                                        <img src="images/MercedesSotomayor.jpg"/><br/>
                                                        Mercedes Sotomayor, <br/>PhD
                                                    </div>
                                                </div>
                                                <div class="item listpers" >
                                                    <div class="content" style="font-size: 0.8rem">
                                                        <img src="images/amarilys-vellon.png"/><br/>
                                                        Amarilys Vellon, <br/>MBA
                                                    </div>
                                                </div>
                                                <div class="item listpers" >
                                                    <div class="content"  style="font-size: 0.8rem">
                                                        <img src="images/luis-sola.png"/><br/>
                                                        Luis Sola,<br/>PhD, SSMBB
                                                    </div>
                                                </div>
                                                <div class="item listpers" >
                                                    <div class="content"  style="font-size: 0.8rem">
                                                        <img src="images/HectorAponte.jpeg"/><br/>
                                                        Hector Aponte, <br/>IE, LSSGB
                                                    </div>
                                                </div>
                                                <div class="item listpers" >
                                                    <div class="content" style="font-size: 0.8rem">
                                                        <img src="images/martin.png"/><br/>
                                                         Martin Ortiz, <br/>HRN
                                                    </div>
                                                </div>
                                                <div class="item listpers" >
                                                    <div class="content"  style="font-size: 0.8rem">
                                                        <img src="images/JuanPGutierrez.png"/><br/>
                                                        Juan P. Gutierrez ,<br/>BDS, LSSGB
                                                    </div>
                                                </div>
                                                <div class="item listpers" >
                                                    <div class="content"  style="font-size: 0.8rem">
                                                        <img src="images/oscar-longo.png"/><br/>
                                                        Oscar Longo, <br/>ME, LSSBB
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div CLASS="ui right divider">OUR TEAM</div>
                                            </div> -->
                                            
                                        <!-- <div CLASS="ui right divider">OUR TEAM</div>
                                            <div class="ui  horizontal list" style="text-align: left">

                                            <div class="<?php echo $cprof; ?> content">
                                            <p>LaSalle Group, LLC is a business-consulting firm with experience in North and Latin America helping clients increase efficiency, reduce operational costs, and create a culture of continuous improvement.  Our service offerings include business and cultural transformation, organizational development, strategic planning, and coaching/training.  These services allow us to help multinational clients in the Pharmaceutical, Manufacturing, Research, and Banking industries, among others, achieve sustainable, efficient, and competitive operations.  </p>
                                            <img class="ancho-max" src="images/1_CompanyProfile.jpg" alt="contact us" />

                                        </div>

                                            </div> -->
                                            <div CLASS="ui right divider">FINANCE</div>
                                            <div class="ui  horizontal list" style="text-align: left">

                                                <div class="item listpers" >
                                                    <div class="content"  style="font-size: 0.8rem">
                                                        <img src="images/Antonio%20Acevedo.jpg"/><br/>
                                                        Antonio Acevedo
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="<?php echo $cprof; ?> title">
                                            OUR TEAM
                                            <i class="  dropdown small icon"></i>
                                        </div>
                                        <div class="<?php echo $ourteam; ?> content">
                                            <p>The LaSalle Group team is composed of top-notch seasoned professionals and industry veterans that are committed to creating best work environments and more efficient and profitable businesses. With the skills set and eperience as broad as its client portfolio, the team include former Site Leaders, VPs Engineers and industry professionals that will hit the ground running.</p>
                                        </div>
                                        <div class="<?php echo $sprof; ?> title">
                                            SERVICE PROFILE
                                            <i class="dropdown small icon"></i>
                                        </div>
                                        <div class="<?php echo $sprof; ?> content">
                                            <img class="ancho-max" src="images/2_ServiceProfile.jpg" alt="Service Profile" />
                                            <p>The company's service portfolio includes 6 key components:</p>
                                            <div style="width: 100%; padding-left: 1rem; line-height: 150%">
                                                <br style="display: none"/>
                                                <span class="ui circular naranja inverted  label">1</span> Business Assesment<br/>
                                                <span class="ui circular naranja inverted  label">2</span> Strategic Planning<br/>
                                                <span class="ui circular naranja inverted  label">3</span> Business and Cultural Transformation<br/>
                                                <span class="ui circular naranja inverted  label">4</span> Leadership Development<br/>
                                                <span class="ui circular naranja inverted  label">5</span> Team Development and Training<br/>
                                                <span class="ui circular naranja inverted  label">6</span> Placement with a purpose<br/>
                                            </div>
                                            <p>The firm's consultant's professional and academic experience supports the idea that no company and no project is the same.  To achieve the best results LaSalle Group, LLC offers solutions specifically tailored to each organization and carried out using the company's own ADIS model.</p>
                                            <p class="textoMont"><b>ASSESS&nbsp;<i class="right arrow icon textoNaranja"></i>&nbsp;&nbsp;DESIGN&nbsp;<i class="right arrow icon textoNaranja"></i>&nbsp;&nbsp;IMPLEMENT&nbsp;<i class="right arrow icon textoNaranja"></i>&nbsp;&nbsp;SUSTAIN</b></p>
                                        </div>
                                        <div class="<?php echo $vis; ?> title">
                                            VISION
                                            <i class="  dropdown small icon"></i>
                                        </div>
                                        <div class="<?php echo $vis; ?> content">
                                            <p>We are recognized as innovative, resourceful partners that help leaders and organizations improve, sustain, and surpass current performance delivering more value than expected.</p>
                                        </div>
                                        <div class="<?php echo $miss; ?> title">
                                            MISSION
                                            <i class="  dropdown small icon"></i>
                                        </div>
                                        <div class="<?php echo $miss; ?> content">
                                            <p>At LaSalle Group we partner with enterprises and organizations with the goal of adding value and recognition, providing tools, and developing competencies through consulting services aimed at developing efficient, innovative and cost competitive businesses.</p>
                                            <p>“We Believe in Change” – LaSalle Group, LLC</p>
                                        </div>
                                        <div class="<?php echo $cpill; ?> title">
                                            COMPANY PILLARS
                                            <i class="  dropdown small icon"></i>
                                        </div>
                                        <div class="<?php echo $cpill; ?> content">
                                            <div class="ui right divider">Respect for Others</div>
    
                                            <div class="row">
                                                <div class="column"><img  src="images/respect-for-others.png" alt="Respect for Others" style="width:95%;"/></div>
                                                <div class="column"><p>We promote diversity and an environment of mutual respect and dignity. We value each person's uniqueness, acknowledge everyone's contribution, and honor everybody's opinions. Our work environment is open, honest, supportive, and fulfilling.</p></div>
                                            </div>
                                            
                                            <div class="ui right divider">Quality</div>
                                            <div class="row">
                                                <div class="column"><img  src="images/quality.png" alt="Quality" style="width:95%;"/></div>
                                                <div class="column"> <p>We deliver the best and highest quality service to our clients every day. We are committed to spend the client's and the firm's resources wisely.</p></div>
                                            </div>
                                           
                                            <div class="ui right divider">Integrity</div>
                                            <div class="row">
                                                <div class="column"><img  src="images/integrity.png" alt="Integrity" style="width:95%;"/></div>
                                                <div class="column"><p>We appreciate diversity without compromising integrity. We observe the highest ethical and moral standards; respect former and existing local culture and traditions; and behave with absolute integrity.</p></div>
                                            </div>

                                            <div class="ui right divider">Innovation</div>
                                            <div class="row">
                                                <div class="column"><img  src="images/innovation.png" alt="Innovation" style="width:95%;"/></div>
                                                <div class="column"><p>We foster innovation in all our projects and initiatives, and furthermore, support the challenge of existing practices leveraging the use of forefront technologies.</p></div>
                                            </div>

                                            <div class="ui right divider">Entrepreneurship</div>
                                            <div class="row">
                                                <div class="column"><img  src="images/entrepreneurship.jpg" alt="Entrepreneurship" style="width:95%;"/></div>
                                                <div class="column"><p>Demonstrate leadership and undertake innovation, finance, and business acumen in an effort to transform innovations into economic goods.</p></div>
                                            </div>

                                            <div class="ui right divider">Serve to a higher purpose</div>
                                            <div class="row">
                                                <div class="column"><img  src="images/serve-higher-purpose.png" alt="Serve Higher Purpose" style="width:95%;"/></div>
                                                <div class="column"><p>We contribute to our community, businesses, and economic environment through the sharing of knowledge and tools that make our organization and our partners succeed.</p></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>
                    <div class="small-5 wide column  ">
                            <div class="row  no-overflow ">
                                <div id="aboutus-menu" class="single column  aboutus menux  aboutus-menu" ><span class="tsqMenu tsq-middle ">about us</span></div>

                            </div>

                            <div class="row  rowrollover  ">
                                <div  id="help-menu"  class="single column help menux linkmenu" url="help.php" ><span class="tsqMenu tsq-middle "> <span >how</span> we can help</span></div>
                                <div  id="help-menu-roll" class="single column  help-rollover text-rollover upone "  >
                                    <li class="munulinks">
                                        <ul>
                                        <a href="help.php?business-assesment"> BUSINESS ASSESMENT</a></ul>
                                        <ul><a href="help.php?strategic-planning">STRATEGIC PLANNING </a></ul>
                                        <ul><a href="help.php?cultural-transformation">BUSINESS AND CULTURAL TRANSFORMATION</a></ul>
                                        <ul><a href="help.php?leadership-development">LEADERSHIP DEVELOPMENT</a></ul>
                                        <ul><a href="help.php?team-development">TEAM DEVELOPMENT AND TRAINING</a></ul>
                                        <ul><a href="help.php?placement-with-purpose">PLACEMENT WITH PURPOSE</a></ul>
                                    </li>
                                </div>

                            </div>
                            <div class="row ">
                                <div id="contact-menu" class="single column contact menux linkmenu upone" url="contact.php" ><span class="tsqMenu tsq-middle"> <span>contact</span> us</span></div>
                            </div>
                            <div class="row ">
                                <div id="twittertl" class="single column twittertl menu3x upone center aligned padding-top-1"><span class="tituloMont font1p5 ">LinkedIn</span>
                                    <?php include 'twitter.php'; ?>
                                </div>
                            </div>
                            <div class="row ">
                                <div id="social" class="single column social menu2d center aligned upone" >
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

                $("#aboutus-menu")
                    .transition({ x: '-100%', easing: 'ease' , duration:'800'})
                    .transition({ x: '-100%', easing: 'ease' ,  visibility:'hidden', delay:'500'});
                $("#help-menu")
                    .transition({ y: '-100%', easing: 'ease' , duration:'250',delay:'800'});
                $("#help-menu-roll")
                    .transition({ y: '-100%', easing: 'ease' , duration:'250',delay:'800'});
                $("#contact-menu")
                    .transition({ y: '-100%', easing: 'ease' , duration:'250',delay:'800'});
                $("#twittertl")
                    .transition({ y: '-33%', easing: 'ease' , duration:'250',delay:'800'});
                $("#social")
                    .transition({ y: '-200%', easing: 'ease' , duration:'250',delay:'800'});

            });

            $( ".linkmenu" ).click(function() {


                $("#help-menu")
                    .transition({ y: '0%', easing: 'ease' , duration:'250',delay:'0'});
                $("#contact-menu")
                    .transition({ y: '0%', easing: 'ease' , duration:'250',delay:'0'});
                $("#help-menu-roll")
                    .transition({ y: '0%', easing: 'ease' , duration:'250',delay:'0'});
                $("#twittertl")
                    .transition({ y: '0%', easing: 'ease' , duration:'250',delay:'0'});
                $("#social")
                    .transition({ y: '0%', easing: 'ease' , duration:'250',delay:'0'});
                $("#fullcontent")
                    .transition({ x: '+150%', easing: 'ease' , duration:'1000',delay:'100'});
                $("#aboutus-menu")
                    .transition({ x: '+0%', easing: 'ease',visibility:'visible', duration:'800'});

                setTimeout("window.location = '"+$(this).attr('url')+"'", 1250);

            });

            $( "#help-menu" ).hover(function() {
                    $("#help-menu>span>span")
                        .addClass("underln");
                    $("#help-menu-roll")
                        .transition({ y: '0%', height: '16rem', easing: 'ease' , duration:'250',delay:'0'});


            });

            $( "#contact-menu" ).hover(function() {
                $("#contact-menu>span>span")
                    .addClass("underln");
            });

            $( "#contact-menu" ).mouseleave(function() {
                $("#contact-menu>span>span")
                    .removeClass("underln");
            });

            $( ".rowrollover" ).mouseleave(function() {
                $("#help-menu>span>span")
                    .removeClass("underln")
                $("#help-menu-roll")
                    .transition({ y: '-100%', height: '8rem', easing: 'ease' , duration:'250',delay:'0'});




            });



        </script>


</body>
