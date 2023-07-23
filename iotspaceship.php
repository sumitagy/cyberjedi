<!DOCTYPE html>
<html>

<style>
body {
  background-image: url('darth vader gray.jpg');
  background-repeat: no-repeat;
  background-size: 100%;
}
</style>
<head>
<script>
document.addEventListener('contextmenu', event => event.preventDefault());
</script>
</head>
<body>

<h2>Darth Vader's Spaceship has an IoT controlled Propeller.</h2>
<h3>The Spaceship's speed can be controlled with these buttons:</h3>


<iframe id="frame1" frameborder="0" scrolling="no" src="propeller.html" height="200" width="300" title="Industrial Propeller control"></iframe>

<br><br>
<button onclick="slowFunction()">Slow</button>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<button onclick="medFunction()">Medium</button>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<button onclick="fastFunction()">Fast</button>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<p id="demo"></p>
<script>

function slowFunction() {
  document.getElementById("frame1").src = "slow/propeller2.html";
var i = "MjUwMDAwMHJwbTtsb2NhdGlvbj1hcmVhODNhbmRyb21lZGE=";
var r = "spaceship.darthvader.iot\\api?value=" + i;
document.getElementById("demo").innerHTML = r;
}

function medFunction() {
  document.getElementById("frame1").src = "medium/propeller2.html";
var j = "NzUwMDAwMHJwbTtsb2NhdGlvbj1hcmVhODNhbmRyb21lZGE=";
var r = "spaceship.darthvader.iot\\api?value=" + j;
document.getElementById("demo").innerHTML = r;
}

function fastFunction() {
  document.getElementById("frame1").src = "fast/propeller2.html";
var k = "OTUwMDAwMHJwbTtsb2NhdGlvbj1hcmVhODNhbmRyb21lZGE=";
var r = "spaceship.darthvader.iot\\api?value=" + k;
document.getElementById("demo").innerHTML = r;
}

</script>

<pre>
The speed control API above is leaking Darth Vader's Spaceship's
location and propeller speed which can be tampered!
What is the location of darth vader's spaceship?
</pre>

<form id="myForm">
  <label for="Location">Location:</label>&nbsp;
  <input type="text" id="textinput" name="textinput">
</form>

<br>
<button onclick="myFunction()">Submit</button>

<p id="demo2"></p>

<script>
function myFunction() {
  var x = document.getElementById("myForm").elements[0].value;
    if(window.btoa(x)=="YXJlYTgzYW5kcm9tZWRh")
  {
  
  var r = "congrats! you have found darth vader's location. The flag-2 is " + window.atob("YXJlYTgzYW5kcm9tZWRh") + ".<br>" + "The next challenge is " + "<a href=" + "http://cyber-challenge.club/area83network.php" + ">" + "here" + "</a>"; 
  } 
  else 
  {
  var r = "It seems you din't get Darth Vader's location correctly!";
  }
document.getElementById("demo2").innerHTML = r;
}
</script>
<button onclick="document.location = 'index.php'">Back to Home</button>
</body>
</html>