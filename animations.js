/**
 * Created by josed on 03/04/14.
 */

function ani() {
    document.getElementById('inner').className = 'flipOutR';
    setTimeout("window.location='info.php';", 200);
    }

function pull1() {
//    removeClass('aboutus',"invisible");
//    addClass('aboutus',"pull-menu1");
//    setTimeout('   addClass("dummy"," d-smaller"); ', 100);
    setTimeout('   addClass("art-content","show-content"); ', 1000);
    setTimeout('   removeClass("art-content","arriba"); ', 1000);
}

function pull2() {
//    removeClass('help',"invisible");
//    addClass('help',"pull-menu2");
//    setTimeout('   addClass("dummy"," dummy-off  d-smaller"); ', 100);
    setTimeout('   addClass("art-content","show-content"); ', 1000);
    setTimeout('   removeClass("art-content","arriba"); ', 1000);
}

function pull3() {
//    removeClass('contact',"invisible");
//    addClass('contact',"pull-menu3");
//    setTimeout('   addClass("dummy"," dummy-off  d-smaller"); ', 100);
//    setTimeout('   addClass("art-content","show-content"); ', 1000);
//    setTimeout('   removeClass("art-content","arriba"); ', 1000);
}

function push1(dest) {
    removeClass('art-content',"show-content");
    addClass("art-content","hide-content");
    setTimeout("   addClass('art-content','arriba'); push1x('"+dest+"');  ", 1000);
}

function push1x(dest){
    removeClass('aboutus',"pull-menu1");
    removeClass('dummy',"d-smaller");
    addClass('aboutus',"push-menu1");
    setTimeout(' addClass("aboutus","invisible"); removeClass("aboutus-menu","hidden"); addClass("aboutus-menu","push-set"); ', 1000);
   setTimeout(function() {    if (dest == "i")      aniR();   else window.location.href = dest;  }, 2000);
}

function push2(dest) {
    removeClass('art-content',"show-content");
    addClass("art-content","hide-content");

        setTimeout("   addClass('art-content','arriba'); push2x('"+dest+"'); ", 1000);
}


    function push2x(dest) {
        removeClass('help',"pull-menu2");
        removeClass('dummy',"d-smaller");
        addClass('help',"push-menu2");
        setTimeout(' addClass("help","invisible"); removeClass("help-menu","hidden"); addClass("help-menu","push-set"); ', 1000);
        setTimeout(function() {    if (dest == "i")      aniR();   else window.location.href = dest;  }, 2000);
    }

function push3(dest) {
    removeClass('art-content',"show-content");
    addClass("art-content","hide-content");

        setTimeout("   addClass('art-content','arriba'); push3x('"+dest+"'); ", 1000);
}


function push3x(dest) {
    removeClass('contact',"pull-menu3");
    removeClass('dummy',"d-smaller");
    addClass('contact',"push-menu3");
    setTimeout(' addClass("contact","invisible"); removeClass("contact-menu","hidden"); addClass("contact-menu","push-set"); ', 1000);
    setTimeout(function() {    if (dest == "i")      aniR();   else window.location.href = dest;  }, 2000);
}



function gohome(sec){
//    switch (sec){
//        case 1:push1('i'); break;
//        case 2:push2('i');break;
//        case 3:push3('i');break;
//
//    }
    aniR();
//    setTimeout(function() {window.location.href = 'index.php'; }, 0);
}


function start(){

}

function ani(dest){
    addClass('inner',"fipped");
    setTimeout(function() { removeClass('back',"hidden"); addClass('front',"hidden");    }, 1000);
    setTimeout(function() { window.location=dest;  }, 2000);
}

function aniR(){
      addClass('inner',"fadedout");
    setTimeout(function() {  window.location='index.php';  }, 125);
}

function hasClass(elename,cls) {
    var ele =  document.getElementById(elename);
    return ele.className.match(new RegExp('(\\s|^)'+cls+'(\\s|$)'));
    }
function addClass(elename,cls) {
    var ele =  document.getElementById(elename);
    if (!this.hasClass(elename,cls)) ele.className += " "+cls;
    }
function removeClass(elename,cls) {
    var ele =  document.getElementById(elename);
    if (hasClass(elename,cls)) {
    var reg = new RegExp('(\\s|^)'+cls+'(\\s|$)');
    ele.className=ele.className.replace(reg,' ');
    }
}
