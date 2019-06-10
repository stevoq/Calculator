<?php ?>
<html>
    <head>
        <title>Calculator</title>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<script language="javascript" type="text/javascript" src="calculator.js"></script>
		<link rel="stylesheet" type="text/css" href="calculator.css">
    </head>
    <body>
		<div id = "container">
			<div id="content">
				<div class="diplayFeld">
					<input type="text" id="display" Readonly>
					<input type="text" id="display2" Readonly>
				</div>

				<div class="keysAndDisplay">
					<div class="keys">
						<input type="button" class="btn" value="MR" onclick='giveMemo()'>
						<input type="button" class="btn" value="M" onclick='takeMemo()'>
						<input type="button" class="btn" value="CE" onclick='setClearForLastInput("")'>
						<input type="button" class="btn" value="C" onclick='setClear("")'>

						<input type="button" class="btn" value="&radic;" onclick='setSq()'>
						<input type="button" class="btn" value="x²" onclick='setPow()'>
						<input type="button" class="btn" value="Sin" onclick='setSin()'>
						<input type="button" class="btn" value="Cos" onclick='setCos()'>

						<input type="button" class="btn" value="7" onclick='setNumAndOp("7")'>
						<input type="button" class="btn" value="8" onclick='setNumAndOp("8")'>
						<input type="button" class="btn" value="9" onclick='setNumAndOp("9")'>
						<input type="button" class="btn" value="/" onclick='setNumAndOp("/")'>

						<input type="button" class="btn" value="4" onclick='setNumAndOp("4")'>
						<input type="button" class="btn" value="5" onclick='setNumAndOp("5")'>
						<input type="button" class="btn" value="6" onclick='setNumAndOp("6")'>
						<input type="button" class="btn" value="X" onclick='setNumAndOp("*")'>

						<input type="button" class="btn" value="1" onclick='setNumAndOp("1")'>
						<input type="button" class="btn" value="2" onclick='setNumAndOp("2")'>
						<input type="button" class="btn" value="3" onclick='setNumAndOp("3")'>
						<input type="button" class="btn" value="-" onclick='setNumAndOp("-")'>

						<input type="button" class="btn" value="0" onclick='setNumAndOp("0")'>
						<input type="button" class="btn" value="," onclick='setNumAndOp(".")'>
						<input type="button" class="btn" value="=" onclick='setResult("")'>
						<input type="button" class="btn" value="+" onclick='setNumAndOp("+")'>
					</div>

					<div class="displayFeld2">
						<input type="text" id="display3" Readonly>
						<input type="button" class="delBtn" value="Del" onclick='deleteMemo("")'>
					</div>
				</div>
				<div id="delBtnFeld">
				</div>
			</div>
		</div>
    </body>
</html>
