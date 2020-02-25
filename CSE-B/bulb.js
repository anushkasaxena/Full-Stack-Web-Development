<!DOCTYPE html>
<html>
<body>

<img id="myImage" onclick="changeImage()" src="bulboff.jpg" width="100" height="180">
<p> Click on bulb to on and off</p>
<script>
function changeImage() {
  var image = document.getElementById('myImage');
  if (image.src.match("bulbon")) {
    image.src =" bulboff.jpg";
  } else {
    image.src = "bulbon.jpg";
  }
}
</script>
</body></html>