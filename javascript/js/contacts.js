/* 
Activité : gestion des contacts
*/

// TODO : complétez le programme

/**
* Creating the Contact object
*/

var Contact = {
	
		firstname : "",
		name : "",
	
		show : function () {
			
			return this.firstname + " " + this.name;
		}
	
};

// New array of Contacts
var contacts = [];

// Loop until we quit the program
var quit = 0;
while (!quit) {
	
	full_name = prompt("Please enter a full name :");

	// Use Object creation 
	var aContact = Object.create(Contact);
	aContact.firstname = full_name.split(" ")[0];
	aContact.name = full_name.split(" ")[1];
	
	// Then add the new object to the array of Contacts.
	contacts.push(aContact);
	
	quit = confirm("Have you finished adding contacts ?");
}

// Display the list of contacts now 
contacts.forEach(function show(contact) {
	
	console.log(contact.show() + '\n');
	
});
