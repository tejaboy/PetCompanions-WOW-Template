toggle = document.querySelectorAll(".toggle")[0];
nav = document.querySelectorAll("nav")[0];
stateOn = false;
var body = document.getElementsByTagName("body")[0];

toggle.addEventListener('mouseover', function() {
	if (stateOn == false)
	{
		nav.classList.toggle('open');
		toggle.innerHTML = "Close";
		stateOn = true;
	}
}, false);

body.addEventListener('click', function() {
	if (stateOn == true)
	{
		nav.classList.toggle('open');
		toggle.innerHTML = "Menu";
		stateOn = false;
	}
}, false);

nav.classList.toggle('open');