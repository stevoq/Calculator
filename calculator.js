

var firstInput;
var secondInput;
var outFirstInput	= firstInput;											// globale Variable
var outSecondInput	= secondInput;

function setNumAndOp(val) {
	firstInput	= document.getElementById("display").value;					// erste Eingabe
	secondInput	= val;														// Letzte Eingabe
	calculate	= firstInput + secondInput;
	document.getElementById("display").value = calculate;
}
function setResult() {														// Die try..catch Anweisung rahmt einen Block von Anweisungen(try statement)ein
																			// und legt Reaktionen(catch statement ) fest,die im Fehlerfall ausgeführt werden. 	
	try {																	//Die Methode eval wertet einen String aus und führt ihn als javascript-Code aus.
		setClear(eval(document.getElementById("display").value));			//eval(string)
	} 
	catch (setResult) {
		setClear('Error');
	}
}

function setClear(val) {
	document.getElementById("display2").value	= val;
}

function setClearForLastInput() {
	document.getElementById("display").value	= firstInput;
}

function takeMemo(){
	//document.getElementById("display3").value = secondInput;
	document.getElementById("display3").value	= document.getElementById("display2").value;
}

function giveMemo(){
	 
	document.getElementById("display").value	+= document.getElementById("display3").value;	
}

function deleteMemo(val){
	document.getElementById("display3").value	= val;
	document.getElementById("display").value	= val;
	setClear(val);
}
function setSq(){
	document.getElementById("display2").value = Math.sqrt(document.getElementById("display").value);
	
	}
function setPow(){
	document.getElementById("display2").value = Math.pow(document.getElementById("display").value,2);
}
function setSin(){
	document.getElementById("display2").value = Math.sin(document.getElementById("display").value* Math.PI / 180);
}
function setCos(){
	document.getElementById("display2").value = Math.cos(document.getElementById("display").value* Math.PI / 180);
}
