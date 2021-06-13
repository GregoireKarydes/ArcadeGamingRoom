window.onload= function(){

    document.getElementById("scoreDone").innerHTML = "Your score : " + localStorage.yourScore;
    document.getElementById("yourScore").value.innerHTML = "Ceci est un test";
  
};

var audio=document.createElement('audio');
        var first=true;
             window.addEventListener('mousedown',onmousedown);
        
           function onmousedown(){
              if(!first) return;
              first=false;
              audio.src="over.mp3";
              audio.play();
           }


  
