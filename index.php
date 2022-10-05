
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cookie Converter</title>
<link rel="icon" href="https://i.ibb.cor2DK9v6/IMG-20221006-025011.png">
<meta name="title" content="Cookie Converter">
<meta name="robots schedule" content="auto" />
<meta name="distribution" content="global" />
<link rel="stylesheet" href="cookie.css">
<div class="texture"></div>
<div class="texture2"></div>
<style>
  .texture {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    background: url(https://i.imgur.com/34uOiaV.png);
}
  .texture2 {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    background-color: black;
        opacity: 0.7;
}
  </style>
<style type="text/css">
   body,td,th {
   color: #000;
   margin: 0;
   padding: 0;
   width: 100%;
   height: 100%;
   position: absolute;
   font-family: 'Rajdhani', sans-serif;
   background-image: url("https://i.ibb.co/d0Nfj2r/giphy.gif");
   z-index: -2;
   background-color:#000000;
   background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  /*text-shadow: 3px 3px 2px black, 6px 6px 5px black, 6px 6px 5px black;*/
  text-shadow: 3px 3px 2px black;
  a:visited, a:hover, a:focus {
    text-decoration: none;
    color: white;
}
   }
</style>
<style>
.textarea{
    background-image: url("https://i.ibb.co/S0vwc52/code-rain.gif");
    opacity: 0.8;
       background-position: center;
     position: relative;
    /*background: #000000d1;*/
    box-shadow: 3px 3px 2px black;
    text-shadow: 3px 3px 2px black;
}
.textarea::before {
    background-color: rgba(0,0,0,0.50);
}
* {
              font-family: 'serif';
          }
          .serif {
              font-family: 'serif';
          }
      @font-face {
            font-family: 'serif';
            

        }
* {cursor: url(https://ani.cursors-4u.net/cursors/cur-13/cur1160.ani), url(https://ani.cursors-4u.net/cursors/cur-13/cur1160.png), auto !important;}
/*a:hover, a:active {cursor: url(https://cur.cursors-4u.net/cursors/cur-7/cur683.cur),default;}*/

::-webkit-scrollbar {
  width: 10px;
  background-color: #1a1a1a;
}

::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  background-color: #1a1a1a;
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background-image: -webkit-gradient(linear,
                     left bottom,
                     left top,
                     color-stop(0.44, rgb(122,153,217)),
                     color-stop(0.72, rgb(73,125,189)),
                     color-stop(0.86, #00d1b2));
} 
::-moz-selection {
  color: #00d1b2;
  background: #3498db;
}

::selection {
  color: #00d1b2;
  background: #3498db;
}
</style>
</head>
	
<!--	
	
	/*
________STREAFEN_0101_RASEL__
________STREAFEN_0101_RASEL__
_____________0101010_________
_____________0101010_________
_____________0101010_________
_____________0101010_________
_____________0101010_________
_____________0101010_________
_____________0101010_________
_____________0101010_________
________STREAFEN_0101_RASEL__
________STREAFEN_0101_RASEL__

_____010101_____________________
_0101010101010__________________
010101010101010_________________
01010101010101011_______________
01010101010101010_______________
01010101010101010101010101______
01010101010101010101010101010___
0101010100101010101010101010101_
01010101010101010101010101010101
010101010101010101010101010__01_
01010101010101010100101010101___
01010100101010010101010101______
01010101010101010101010_________
1010101010101010101_____________
01010101010101__________________
101010101_______________________
010101__________________________
10______________________________
*/
-->
	
	
	
	
	
	
<body>
<section class="section">
<div class="container">
<!--<nav class="navbar" role="navigation" aria-label="main navigation">
<div class="navbar-brand">

  <a class="navbar-item"><strong>درووستکردنی پاسۆردلیستی دیاریکراو</strong></a>

</div>
</nav>
  
  
  
  
</div>
</section>
<section class="section pt-1">-->
<h1 class="title">Cookie Converter:</h1>
<hr style="height:3px;border-top:3px solid #3498db;box-shadow: 3px 3px 2px black;" />
<div class="container">



<div class="field">
  <label class="label">Paste Here</label>
  <div class="control">
    <textarea id = "input" wrap="soft" rows="8" style="width: 100%" onclick="this.select()" class="textarea is-primary" ></textarea> 
  </div>
</div>


<div class="field is-grouped">
  <div class="control">
    <button style="text-shadow: 3px 3px 2px black;box-shadow: 3px 3px 2px black;" class="button is-link" onclick="copy()">Marks</button>

  </div>
  <div class="control">
    <button style="text-shadow: 3px 3px 2px black;box-shadow: 3px 3px 2px black;" class="button is-success" onclick="generate()">Convert:</button>
  </div>

  
</div>


<div class="field">
  <label class="label" id="count">Output:</label>
  <div class="control">
    <textarea id = "result" wrap="soft" rows="13" style="width: 100%" onclick="this.select()" class="textarea is-primary"></textarea> 
  </div>
</div>



<script>

 window.onload=function(){
   document.getElementById("input").wrap='off';
 }
function generate(){
var textArea2 = document.getElementById("result");
	textArea2.value = '';
	var arrObjects = [];
	var textArea1 = document.getElementById("input");
	var arrayOfLines = textArea1.value.split("\n"); 
	var i = 0;
	for (i=0; i<arrayOfLines.length; i++){
		var kuka = arrayOfLines[i].split("\t"); 
		var cook = new Object();	
			cook.domain = kuka[0];
			cook.expirationDate = parseInt(kuka[4]);

			if (kuka[1] == "FALSE") cook.httpOnly = false;  
			if (kuka[1] == "TRUE") cook.httpOnly = true;  

			cook.name = kuka[5];
			cook.path = kuka[2];
			
			if (kuka[3] == "FALSE") cook.secure = false;  
			if (kuka[3] == "TRUE") cook.secure = true; 


			cook.value = kuka[6];  
			

			arrObjects[i] = cook;		
	}
	
	var cookieStr = JSON.stringify(arrObjects);
	
	
	textArea2.value = cookieStr;
	
	
	}

function hideRules() {
    if (document.getElementById('hideRules').checked) {
        document.getElementById('ruleBox').hidden = false;
    } else
        document.getElementById('ruleBox').hidden = true;
}

function copy() {
  document.getElementById("result").select();
  document.execCommand("copy");
  document.getElementById('notify').style.display = 'block';

  setTimeout(function() { document.getElementById('notify').style.display = 'none'; },5000); 
}

hideRules();
document.getElementById('notify').style.display = 'none';
</script>
<script src="https://l2dwidget.js.org/lib/L2Dwidget.min.js"></script>
<script type="text/javascript">
  L2Dwidget
    .init({
       model: {
           jsonPath: "https://1877.team/1877/1877.json"},
        display: {
            "position": "left",
            "width": 220,
            "height": 320,
            "hOffset": 10,
            "vOffset": 0
       },
       mobile: { 
           show: false,
           scale: 1
       },
      dialog: {
        enable: false,
        script: {
            'every idle 100s': '^_^',
			'hover .star': "(* / ω＼ *)",
			'tap body': "⁄ (⁄ ⁄ • ⁄ω⁄ • ⁄ ⁄) ⁄",
			'tap face': '~~'
            }
      }
    });
</script>

<script>
class Circle {
  constructor({ origin, speed, color, angle, context }) {
    this.origin = origin
    this.position = { ...this.origin }
    this.color = color
    this.speed = speed
    this.angle = angle
    this.context = context
    this.renderCount = 0
  }

  draw() {
    this.context.fillStyle = this.color
    this.context.beginPath()
    this.context.arc(this.position.x, this.position.y, 2, 0, Math.PI * 2)
    this.context.fill()
  }

  move() {
    this.position.x = (Math.sin(this.angle) * this.speed) + this.position.x
    this.position.y = (Math.cos(this.angle) * this.speed) + this.position.y + (this.renderCount * 0.3)
    this.renderCount++
  }
}

class Boom {
  constructor ({ origin, context, circleCount = 16, area }) {
    this.origin = origin
    this.context = context
    this.circleCount = circleCount
    this.area = area
    this.stop = false
    this.circles = []
  }

  randomArray(range) {
    const length = range.length
    const randomIndex = Math.floor(length * Math.random())
    return range[randomIndex]
  }

  randomColor() {
    const range = ['8', '9', 'A', 'B', 'C', 'D', 'E', 'F']
    return '#' + this.randomArray(range) + this.randomArray(range) + this.randomArray(range) + this.randomArray(range) + this.randomArray(range) + this.randomArray(range)
  }

  randomRange(start, end) {
    return (end - start) * Math.random() + start
  }

  init() {
    for(let i = 0; i < this.circleCount; i++) {
      const circle = new Circle({
        context: this.context,
        origin: this.origin,
        color: this.randomColor(),
        angle: this.randomRange(Math.PI - 1, Math.PI + 1),
        speed: this.randomRange(1, 6)
      })
      this.circles.push(circle)
    }
  }

  move() {
    this.circles.forEach((circle, index) => {
      if (circle.position.x > this.area.width || circle.position.y > this.area.height) {
        return this.circles.splice(index, 1)
      }
      circle.move()
    })
    if (this.circles.length == 0) {
      this.stop = true
    }
  }

  draw() {
    this.circles.forEach(circle => circle.draw())
  }
}

class CursorSpecialEffects {
  constructor() {
    this.computerCanvas = document.createElement('canvas')
    this.renderCanvas = document.createElement('canvas')

    this.computerContext = this.computerCanvas.getContext('2d')
    this.renderContext = this.renderCanvas.getContext('2d')

    this.globalWidth = window.innerWidth
    this.globalHeight = window.innerHeight

    this.booms = []
    this.running = false
  }

  handleMouseDown(e) {
    const boom = new Boom({
      origin: { x: e.clientX, y: e.clientY },
      context: this.computerContext,
      area: {
        width: this.globalWidth,
        height: this.globalHeight
      }
    })
    boom.init()
    this.booms.push(boom)
    this.running || this.run()
  }

  handlePageHide() {
    this.booms = []
    this.running = false
  }

  init() {
    const style = this.renderCanvas.style
    style.position = 'fixed'
    style.top = style.left = 0
    style.zIndex = '999999999999999999999999999999999999999999'
    style.pointerEvents = 'none'

    style.width = this.renderCanvas.width = this.computerCanvas.width = this.globalWidth
    style.height = this.renderCanvas.height = this.computerCanvas.height = this.globalHeight

    document.body.append(this.renderCanvas)

    window.addEventListener('mousedown', this.handleMouseDown.bind(this))
    window.addEventListener('pagehide', this.handlePageHide.bind(this))
  }

  run() {
    this.running = true
    if (this.booms.length == 0) {
      return this.running = false
    }

    requestAnimationFrame(this.run.bind(this))

    this.computerContext.clearRect(0, 0, this.globalWidth, this.globalHeight)
    this.renderContext.clearRect(0, 0, this.globalWidth, this.globalHeight)

    this.booms.forEach((boom, index) => {
      if (boom.stop) {
        return this.booms.splice(index, 1)
      }
      boom.move()
      boom.draw()
    })
    this.renderContext.drawImage(this.computerCanvas, 0, 0, this.globalWidth, this.globalHeight)
  }
}

const cursorSpecialEffects = new CursorSpecialEffects()
cursorSpecialEffects.init()
</script>
<script>
    // <![CDATA[
var colour="#00d1b2";
var sparkles=100;
var x=ox=400;
var y=oy=300;
var swide=800;
var shigh=600;
var sleft=sdown=0;
var tiny=new Array();
var star=new Array();
var starv=new Array();
var starx=new Array();
var stary=new Array();
var tinyx=new Array();
var tinyy=new Array();
var tinyv=new Array();
window.onload=function() { if (document.getElementById) {
var i, rats, rlef, rdow;
for (var i=0; i<sparkles; i++) {
var rats=createDiv(3, 3);
rats.style.visibility="hidden";
document.body.appendChild(tiny[i]=rats);
starv[i]=0;
tinyv[i]=0;
var rats=createDiv(5, 5);
rats.style.backgroundColor="transparent";
rats.style.visibility="hidden";
var rlef=createDiv(1, 5);
var rdow=createDiv(5, 1);
rats.appendChild(rlef);
rats.appendChild(rdow);
rlef.style.top="3px";
rlef.style.left="0px";
rdow.style.top="0px";
rdow.style.left="3px";
document.body.appendChild(star[i]=rats);
}
set_width();
sparkle();
}}
function sparkle() {
var c;
if (x!=ox || y!=oy) {
ox=x;
oy=y;
for (c=0; c<sparkles; c++) if (!starv[c]) {
star[c].style.left=(starx[c]=x)+"px";

star[c].style.top=(stary[c]=y)+"px";
star[c].style.clip="rect(0px, 5px, 5px, 0px)";
star[c].style.visibility="visible";
starv[c]=50;
break;
}
}
for (c=0; c<sparkles; c++) {
if (starv[c]) update_star(c);
if (tinyv[c]) update_tiny(c);
}
setTimeout("sparkle()", 40);
}
function update_star(i) {
if (--starv[i]==25) star[i].style.clip="rect(1px, 4px, 4px, 1px)";
if (starv[i]) {
stary[i]+=1+Math.random()*3;
if (stary[i]<shigh+sdown) {
star[i].style.top=stary[i]+"px";
starx[i]+=(i%5-2)/5;
star[i].style.left=starx[i]+"px";
}
else {
star[i].style.visibility="hidden";
starv[i]=0;
return;
}

}
else {
tinyv[i]=50;
tiny[i].style.top=(tinyy[i]=stary[i])+"px";
tiny[i].style.left=(tinyx[i]=starx[i])+"px";
tiny[i].style.width="2px";
tiny[i].style.height="2px";
star[i].style.visibility="hidden";
tiny[i].style.visibility="visible"
}
}
function update_tiny(i) {
if (--tinyv[i]==25) {
tiny[i].style.width="1px";
tiny[i].style.height="1px";
}
if (tinyv[i]) {
tinyy[i]+=1+Math.random()*3;
if (tinyy[i]<shigh+sdown) {
tiny[i].style.top=tinyy[i]+"px";
tinyx[i]+=(i%5-2)/5;
tiny[i].style.left=tinyx[i]+"px";
}
else {


tiny[i].style.visibility="hidden";
tinyv[i]=0;
return;
}
}
else tiny[i].style.visibility="hidden";
}
document.onmousemove=mouse;
function mouse(e) {
set_scroll();
y=(e)?e.pageY:event.y+sdown;
x=(e)?e.pageX:event.x+sleft;
}
function set_scroll() {
if (typeof(self.pageYOffset)=="number") {
sdown=self.pageYOffset;
sleft=self.pageXOffset;
}
else if (document.body.scrollTop || document.body.scrollLeft) {
sdown=document.body.scrollTop;
sleft=document.body.scrollLeft;
}
else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
sleft=document.documentElement.scrollLeft;
sdown=document.documentElement.scrollTop;
}
else {
sdown=0;
sleft=0;
}
}
window.onresize=set_width;
function set_width() {
if (typeof(self.innerWidth)=="number") {
swide=self.innerWidth;
shigh=self.innerHeight;
}
else if (document.documentElement && document.documentElement.clientWidth) {
swide=document.documentElement.clientWidth;
shigh=document.documentElement.clientHeight;
}
else if (document.body.clientWidth) {
swide=document.body.clientWidth;
shigh=document.body.clientHeight;
}
}
function createDiv(height, width) {
var div=document.createElement("div");
div.style.position="absolute";
div.style.height=height+"px";
div.style.width=width+"px";
div.style.overflow="hidden";
div.style.backgroundColor=colour;
return (div);
}
// ]]>
</script>
 </div>
</section>
  </body>
</html>
