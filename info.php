<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properities -->
    <title>LaSalle Group</title>

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>


    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
    <script src="packaged/javascript/semantic.js"></script>

    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" media="screen,print" href="css/styles.css">
    <link rel="stylesheet" type="text/css" media="screen,print"href="css/stylesold.css" />
    <![endif]-->
    <!--[if gt IE 9]>
    <link rel="stylesheet" type="text/css" href="packaged/css/semantic.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="css/fixer.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="css/styles.css">
    <![endif]-->
    <!--[if !IE]> -->
    <link rel="stylesheet" type="text/css" href="packaged/css/semantic.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="css/fixer.css">
    <link rel="stylesheet" type="text/css" media="screen,print" href="css/styles.css">
    <![endif]-->

<!--    <script src="packaged/javascript/modernizr.custom.98580.js"></script>-->


</head>
<!--<html class="no-js">-->
<body>
<div class="outer">
    <div class="middle">
        <div id="inner" class="inner">
            <div class="ui page celled computer only grid">
                <div class="row">
                    <div class="twelve wide column logo ">
                        <h1>logo</h1>
                    </div>
                    <div class="four wide column aboutus " onclick="ani()">
                        <h1>about us</h1>
                    </div>

                </div>
                <div class="row">
                    <div class="four wide column twittertl old-twittertl  ">
                        <h1>twitter</h1>
                    </div>
                    <div class="twelve wide column  " style="padding: 0" >
                        <div class="  ui  celled grid    ">
                            <div class="  row    ">
                                <div class=" four wide column help  "><h1>help</h1></div>
                            </div>
                            <div class="  row    ">
                                <div class="twothird wide column contact "><h1>contact</h1></div>
                                <div class="onethird wide column social "><h1>social info</h1></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <div class="ui page celled tablet only   grid">
                <div class="row">
                    <div class="sixteen wide column logo">
                        <h1>logo</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="  ui  celled   tablet only grid    ">
                        <div class="row">
                            <div class="five wide column twittertl old-twittertl  ">
                                <h1>twitter</h1>
                            </div>
                            <div class="eleven wide column  " style="padding: 0" >
                                <div class="  ui  celled tablet only grid    ">
                                    <div class="  row    ">
                                        <div class="sixteen wide column help"><h1>help</h1>  </div>
                                    </div>
                                    <div class="  row    ">
                                        <div class="twothird wide column contact "><h1>contact</h1></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row " >
                    <div class="eight wide column social "><h1>social info</h1></div>
                    <div class="eight wide column aboutus "><h1>about us</h1></div>
                </div>
            </div>

            <div class="ui page celled mobile only   grid">
                <div class="row "><div class="sixteen wide column logo "><h1>logo</h1></div></div>
                <div class="row "><div class="sixteen wide column help "><h1>help</h1></div></div>
                <div class="row "><div class="sixteen wide column contact "><h1>contact us</h1></div></div>
                <div class="row "><div class="sixteen wide column aboutus "><h1>about us</h1></div></div>
                <div class="row "><div class="sixteen wide column social "><h1>social</h1></div></div>
                <div class="row "><div class="sixteen wide column twittertl "><h1>twitter</h1></div></div>


            </div>



        </div>

    </div>





</div>
</div>
</div>

<script>
    function ani(){
        document.getElementById('inner').className ='flipOutR';
        setTimeout("window.location='http://www.google.com';",1000);
    }

</script>
</body>