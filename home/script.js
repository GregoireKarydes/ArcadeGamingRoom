window.onload = function() {

    
    
        animation();
        setInterval("animation()", 10000);
        setInterval("clignot()",300);
        setInterval("clignot2()",500);
        setInterval("clignot3()",500);
          
        

        var audio=document.createElement('audio');
        var first=true;
             window.addEventListener('mousedown',onmousedown);
        
           function onmousedown(){
              if(!first) return;
              first=false;
              audio.src="home/intro.mp3";
              audio.play();
           }

           $("#soundOff").click(function off(){
            audio.pause()
        });

        $("#play").click(function hide(){
            TweenMax.to("#ecran1", 0.2, {display : "none"}) ;
            TweenMax.to("#welcome", 0.2, {display : "block"}).delay(1)
            TweenMax.to("#p1", 0.2, {display : "block"}).delay(2)
            TweenMax.to("#p2", 0.2, {display : "block"}).delay(3)
            TweenMax.to("#p3", 0.2, {display : "block"}).delay(4)
            TweenMax.to("#p4", 0.2, {display : "block"}).delay(5)
            TweenMax.to("#p5", 0.2, {display : "block"}).delay(6)
            TweenMax.to("#p6", 0.2, {display : "block"}).delay(7)
            TweenMax.to("#go", 0.2, {display : "block"}).delay(8)     
        });
            
};





function animation () {


    TweenMax.from("#retro1", 10 ,{x:30, y :30, autoAlpha : 0});
    TweenMax.from("#retro2", 10 ,{x:80, y :-30, autoAlpha : 0});
    TweenMax.from("#retro3", 10 ,{x:-60, y :-10, autoAlpha : 0});
    TweenMax.from("#retro4", 10 ,{x:20, y :70, autoAlpha : 0});
};

function clignot () {
    TweenMax.to("#titre",0.2, {color : "#8dfbf8"});
    TweenMax.to("#titre",0.2, {color : "#ff90ff"}).delay(0.2);

}



function clignot2() {
    TweenMax.to("#sousTitre",0.2, {color : "#ff90ff"});
    TweenMax.to("#sousTitre",0.2, {color : "#8dfbf8"}).delay(0.2);
}

function clignot3() {
    TweenMax.to("#go",0.2, {color : "green"});
    TweenMax.to("#go",0.2, {color : "yellow"}).delay(0.2);
}





