userName = prompt('What is your name?');
console.log(userName);
elem = document.getElementById('title1');

x = elem.innerHTML;

console.log(x);

elem.innerHTML = userName;

elem2 = document.getElementById('title2');



y = elem2.textContent;
z = elem2.innerHTML;

console.log(y);
console.log(z);

elem2.textContent = "A completely new heading";

// it is a single line comment

/*

		this one
		is
		a multiline
		comment

*/


