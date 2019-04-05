function get_contacts(){
console.log("Enters here");
CRM.$.ajaxSetup({async : false});
console.log("Enters here 2");
CRM.api3('Contact', 'get', {
	  "sequential": 1
	}).done(function(result) {
		console.log("asa")
		console.log(result)
	});
}