var label = document.querySelectorAll(".labelDevis")
var input = document.querySelectorAll(".inputDevis");
var test = document.querySelectorAll("input");

var k = 0;
var i = 0;



function changeClass() {
	setTimeout(function () {
		if (i >= 6) {
			test[k + 2].className = "showBouton";
			label[k].className = "showLabel";
			input[k].className = "showInput";
		} 
		else {
			label[k].className = "showLabel";
			input[k].className = "showInput";
			k = k + 1;
		}
	}, 1200);
	
	test[i].removeEventListener("keypress", changeClass, false);
	i++;
	test[i].addEventListener("keypress", changeClass, false);
}


test[i].addEventListener("keypress", changeClass, false);