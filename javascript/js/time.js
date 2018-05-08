/* get time and display the difference */

var d = Date.now();

console.log(d);

// do waiting and fill up var with another time
setTimeout(function() {
	var d2 = Date.now();

	// Now the difference :
	var seconds = (d2 - d) / 1000;
	console.log(d2);
	document.getElementById("time").innerHTML = "Time diff is : " + seconds;
	
	
}, 2000);





