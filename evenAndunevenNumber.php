<?php ?>
<html>
	<head>
		<script>
			function unevenNumber() {
				var text = "";
				var i = 0;
				do {
					text += "<br>" + (2 * i + 1);
					i++;
				} while (i < 10);
				document.getElementById("demo").innerHTML = text;
				showButton();
			}
			function evenNumber() {
				var text = 0;
				var i = 0;
				do {
					text += "<br>" + (2 * i + 2);
					i++;
				} while (i < 10);
				document.getElementById("demo").innerHTML = text;
				showButton2();
			}
			function showButton() {
				document.getElementById("une").style.display = 'none';
				document.getElementById("eve").style.display = 'block';
			}

			function showButton2() {
				document.getElementById("une").style.display = 'block';
				document.getElementById("eve").style.display = 'none';
			}
		</script>
	</head>
	
	<body>
		<h2>Die gerade und ungerade Zahlen!</h2>
		<p id="demo"></p>
		<p id="demo2"></p>
		<input type="Button" value="> uneven" id="une" onclick="unevenNumber()">
		<input type="Button" value="> even"   id="eve" onclick="evenNumber()">

	</body>
</html>


