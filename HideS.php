<!DOCTYPE html>
<html>
<head>
	<title>Hide Section</title>
</head>
<body>

<button onclick="myFunction()">Click Me</button>

<div id="myDIV">
  This is my DIV element.
</div>
</body>
</html>

<script type="text/javascript">
	function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

	
</script>