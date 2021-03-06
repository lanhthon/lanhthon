
<!DOCTYPE html>
<html lang="vi">
  <head>
  	<link rel="icon" href="./img/cc.png">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    
    <title>Lành Thôn</title>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
var loader = function() {
    setTimeout(function() {
        $('#loader').css({ 'opacity': 0, 'visibility':'hidden' });
    }, 3000);
};
$(function(){
    loader();
});
</script>
<style type="text/css" media="screen">
 
  body {
 background-color:#83F1F5;
 background-repeat:no-repeat;
 background-size:100%; 
 background-attachment: fixed;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}
.outer {
  background-color: pink;
  width: 100px;
  position: relative;
  display: inline-block;
  margin: 100px 20px;

}

.inner {
  font-size: 20px;
  font-color: #878787;
  position: absolute;
  top: 50%;
  left: 50%;
  background: #DDD;

}

.rotate {
    -moz-transform: translateX(-50%) translateY(-50%) rotate(-90deg);
  -webkit-transform: translateX(-50%) translateY(-50%) rotate(-90deg);
  transform:  translateX(-50%) translateY(-50%) rotate(-90deg);
}

.content {
  position: fixed;
  bottom: 0;
  
  background: rgba(0, 0, 0, 0.3);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;

}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}


#bg {
    background-color: rgba(192,192,192,0.2);
   font-size: auto;font-weight: 700;color:#fff;text-shadow: 0 0 10px #fff, 0 0 20px #fff; }

h3.a {text-shadow: 0 0 0.2em #8F7}
@import url('https://fonts.googleapis.com/css?family=Source+Code+Pro:200,900');

:root {
  --text-color: hsla(210, 50%, 85%, 1);
  --shadow-color: hsla(210, 40%, 52%, .4);
  --btn-color: hsl(210, 80%, 42%);
  --bg-color: #141218;
}

* {
  box-sizing: border-box;
}
button2 {
    background: none;
}

button {
  position:relative;
  padding: 10px 20px;  
  border: none;
  background: none;
  cursor: pointer;
  
  font-family: "Source Code Pro";
  font-weight: 900;
  text-transform: uppercase;
  font-size: 30px;  
  color: var(--text-color);
  
  background-color: var(--btn-color);
  box-shadow: var(--shadow-color) 2px 2px 22px;
  border-radius: 4px; 
  z-index: 0;  
  overflow: hidden;   
}

button:focus {
  outline-color: transparent;
  box-shadow: var(--btn-color) 2px 2px 22px;
}

.right::after, button::after {
  content: var(--content);
  display: block;
  position: absolute;
  white-space: nowrap;
  padding: 40px 40px;
  pointer-events:none;
}

button::after{
  font-weight: 200;
  top: -30px;
  left: -20px;
} 

.right, .left {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
}
.right {
  left: 66%;
}
.left {
  right: 66%;
}
.right::after {
  top: -30px;
  left: calc(-66% - 20px);
  
  background-color: var(--bg-color);
  color:transparent;
  transition: transform .4s ease-out;
  transform: translate(0, -10%) rotate(0deg)
}

button:hover .right::after {
  transform: translate(0, -47%) rotate(0deg)
}

button .right:hover::after {
  transform: translate(0, -50%) rotate(-7deg)
}

button .left:hover ~ .right::after {
  transform: translate(0, -50%) rotate(7deg)
}

/* bubbles */
button::before {
  content: '';
  pointer-events: none;
  opacity: .6;
  background:
    radial-gradient(circle at 20% 35%,  transparent 0,  transparent 2px, var(--text-color) 3px, var(--text-color) 4px, transparent 4px),
    radial-gradient(circle at 75% 44%, transparent 0,  transparent 2px, var(--text-color) 3px, var(--text-color) 4px, transparent 4px),
    radial-gradient(circle at 46% 52%, transparent 0, transparent 4px, var(--text-color) 5px, var(--text-color) 6px, transparent 6px);

  width: 100%;
  height: 300%;
  top: 0;
  left: 0;
  position: absolute;
  animation: bubbles 5s linear infinite both;
}

@keyframes bubbles {
  from {
    transform: translate();
  }
  to {
    transform: translate(0, -66.666%);
  }
}
/*xoay*/
#xoay {
	background-image: url('./img/bgcot5.png');
	background-size: 102% 100%;
 background-repeat:no-repeat;
background-attachment: fixed;
}
.app-logo {
  animation: app-logo-spin infinite 15s linear
  
}

@keyframes app-logo-spin {
  from {
    transform: rotate(360deg)
  }
  to {
    transform: rotate(0deg)
  }
}@-webkit-keyframes {
  from {
    -webkit-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes rotating {
  from {
    -ms-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -ms-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}


* { /* reset lại margin và padding cho các tag */
    margin: 0;
    padding: 0;
}
#loader {
    position: fixed;
    top: 0;
    z-index: 99999;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
	
    transition: all 0.3s ease-in-out;
}
.circle {
    height: 40px;
    margin: 50px auto;
    position: relative;
    text-align: center;
    width: 40px;
    -webkit-animation: circle_dot 2.0s infinite linear;
            animation: circle_dot 2.0s infinite linear;
}

.circle1, .circle2 {
    height: 60%;
    display: inline-block;
    background-color: #ef5f38;
    border-radius: 100%;
    position: absolute;
    top: 0;
    width: 60%;
    -webkit-animation: circle_bounce 2.0s infinite ease-in-out;
            animation: circle_bounce 2.0s infinite ease-in-out;
}

.circle2 {
    bottom: 0;
    top: auto;
    -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
}

@-webkit-keyframes circle_dot { 100% { -webkit-transform: rotate(360deg) }}
@keyframes circle_dot { 100% { transform: rotate(360deg); -webkit-transform: rotate(360deg) }}

@-webkit-keyframes circle_bounce {
    0%, 100% { -webkit-transform: scale(0.0) }
    50%      { -webkit-transform: scale(1.0) }
}

@keyframes circle_bounce {
    0%, 100% { 
        -webkit-transform: scale(0.0);
                transform: scale(0.0);
    } 50% { 
        -webkit-transform: scale(1.0);
                transform: scale(1.0);
    }
}

/*tải trang*/
</style>
	


</head>

<body>
     <?
          $CountFile = "index.log";
          $CF = fopen ($CountFile, "r");
          $Views = fread ($CF, filesize ($CountFile));
          fclose ($CF);
          $Views++; 

          $CF = fopen ($CountFile, "w");
          fwrite ($CF, $Views); 
          fclose ($CF); 
          echo ($Views);
          ?>
          <center>
<div id="loader">
    <div class="circle">
        <div class="circle1"></div>
        <div class="circle2"></div>
    </div>
đang tải</div>
</center>
<video autoplay loop muted id="myVideo">

  <source src="vid/videonendau.mp4" type="video/mp4">

  Your browser does not support HTML5 video.
  

</video>
    mạng bạn chậm
đang tải video vui lòng đợi of tải lại trang
<div class="content">

    <div id="bg"><h2>Welcome to lành thôn</h2></div>
  <h1>to do</h1>
  <p>design,web,photoshop...</p>

<center>
    <audio id="myAudio">
  <source src="nhac.ogg" type="audio/ogg">
  <source src="nhac/nhac.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<button onclick="lt(),playAudio()" type="button">go</button>
</center>
  </div>


<script>

function lt() {
  setTimeout(function () {
   window.location.href= 'batdau.html'; // the redirect goes here
 
},1000);
}
var x = document.getElementById("myAudio"); 

function playAudio() { 
  x.play(); 
} 

function pauseAudio() { 
  x.pause(); 
} 
</script>

</body></html>





