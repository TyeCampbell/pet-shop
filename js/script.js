/* ---------- Footer Year Update ---------- */

	var theYear = new Date().getFullYear();

	$("#year").html(theYear);



/* ---------- Regular Expressions For Frorm Validations ---------- */

var reProperName = /^([A-Z][A-Za-z]+ )*[A-Z][A-Za-z']+$/;
var reEmail = /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
var rePhone = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
var reZipCode = /^\d{5}(\-\d{4})?$/;
var reUserName = /^[A-Za-z\d]{6,15}$/;
var rePassword = /^[A-Za-z\d]{6,8}$/;


/* ---------- Contact Us Form ---------- */

/* Validate Form */

function validate(element, reValidate) {
	var elValue = element.value;
	var elParent = element.parentNode;
	var elSibling = element.nextSibling.nextSibling;
	var tipEle = element.parentNode.lastChild.previousSibling;

	if (elValue == "") {
		tipEle.innerHTML = "Required. Please enter information.";
		elParent.className = "form-group has-error has-feedback";
		elSibling.className = "glyphicon glyphicon-remove form-control-feedback";
		document.getElementById("sendmessage").disabled = true;

	} else if (!reValidate.test(elValue)) {
			tipEle.innerHTML = "This information is incorrect. Please enter valid information.";
			elParent.className = "form-group has-error has-feedback";
			elSibling.className = "glyphicon glyphicon-remove form-control-feedback";
			document.getElementById("sendmessage").disabled = true;

	} else {
			tipEle.innerHTML = "";
			elParent.className = "form-group has-success has-feedback";
			elSibling.className = "glyphicon glyphicon-ok form-control-feedback";
			document.getElementById("sendmessage").disabled = false;
		}
}

/*
//On Focus Character Count for message. --- Need to work on. Add (onfocus="charCount(this, 15);) to text message area.
function charCount(element, maxNum) {
	var elValue = element.value;
	var tipEle = element.parentNode.lastChild.previousSibling;
	var numChar = elValue.length; 
	tipEle.innerHTML = "Your message length: " + numChar + " (Max message length is: " + maxNum + " characters.)";
}
*/

function validateTextArea(element, maxNum) {
	var elValue = element.value;
	var elParent = element.parentNode;
	var elSibling = element.nextSibling.nextSibling;
	var tipEle = element.parentNode.lastChild.previousSibling;

	if (elValue == "") {
		tipEle.innerHTML = "A message is required. Please enter information.";
		elParent.className = "form-group has-error has-feedback";
		elSibling.className = "glyphicon glyphicon-remove form-control-feedback";
		document.getElementById("sendmessage").disabled = true;
	} else if (elValue.length < 5) {
		tipEle.innerHTML = "More information is required. Keep typing...";
		elParent.className = "form-group has-error has-feedback";
		elSibling.className = "glyphicon glyphicon-remove form-control-feedback";
		document.getElementById("sendmessage").disabled = true;
	} else if (elValue.length > maxNum) {
		var numChar = elValue.length;
		tipEle.innerHTML = "You have typed " + numChar + " characters and have exceeded the " + maxNum + " character limit. Please reduce your meassage.";
		elParent.className = "form-group has-error has-feedback";
		elSibling.className = "glyphicon glyphicon-remove form-control-feedback";
		document.getElementById("sendmessage").disabled = true;
	} else {
		tipEle.innerHTML = "";
		elParent.className = "form-group has-success has-feedback";
		elSibling.className = "glyphicon glyphicon-ok form-control-feedback";
		document.getElementById("sendmessage").disabled = false;
	}
}


function submitForm() {
	
	var firstName = document.getElementById("fname");
	var lastName = document.getElementById("lname");
	var email = document.getElementById("email");
	var message = document.getElementById("message");
	
	function submitValidate(element) {
		var elValue = element.value;
		var elParent = element.parentNode;
		var elSibling = element.nextSibling.nextSibling;
		var tipEle = element.parentNode.lastChild.previousSibling;

		tipEle.innerHTML = "Required. Please enter information.";
		elParent.className = "form-group has-error has-feedback";
		elSibling.className = "glyphicon glyphicon-remove form-control-feedback";
	};

	if (firstName.value == "" || lastName.value == "" || email.value == "" || message.value == "") {
		
		document.getElementById("sendmessage").disabled = true;

		if (firstName.value == "") {
			submitValidate(firstName);
		};

		if (lastName.value == "") {
			submitValidate(lastName);
		};

		if (email.value == "") {
			submitValidate(email);
		};

		if (message.value == "") {
			submitValidate(message);
		};				
	} else {
		sendForm();
	}
}

/* SendForm via AJAX*/

function sendForm() {
		
	document.getElementById('sendmessage').disabled = true;

	var firstName = document.getElementById("fname");
	var lastName = document.getElementById("lname");
	var email = document.getElementById("email");
	var message = document.getElementById("message");

	var formdata = new FormData();
	formdata.append("fname", firstName.value);
	formdata.append("lname", lastName.value);
	formdata.append("email", email.value);
	formdata.append("message", message.value);	
	var ajax = new XMLHttpRequest();
	ajax.open("POST", "email_parser.php");
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4 && ajax.status == 200) {
			if (ajax.responseText == "success") {
				$('#mymodal').modal({show: true});
				document.getElementById("statusheader").innerHTML = "Message Status";		
				document.getElementById("status").innerHTML = "Thank you, " + firstName.value +"! Your message has been sent!";						
				firstName.value = "";
				lastName.value = ""; 
				email.value = "";
				message.value = "";
				document.getElementById("sendmessage").disabled = false;		
			} else {
				$('#mymodal').modal({show: true});				
				document.getElementById("statusheader").innerHTML = "Oops! There was an error...";				
				document.getElementById("status").innerHTML = ajax.responseText;
				document.getElementById("sendmessage").disabled = false;
			}
		}
	}
	ajax.send(formdata);
}

/* ---------- Request Appoinment Show Hide Breed ---------- */

$(function(){
	$("breedselect").hide();

	$("#aptpettype").change(function(){
		var element = $(this).val();

		if (element == "Dog") {
			$("#breedselect").show();
		} else {
			$("#breedselect").hide();
			$("#aptbreed").val("select");
			$("#aptbreed").parent().removeClass("has-error");
			$("#aptbreed").next("span").removeClass("glyphicon-remove");
			$("#aptbreed").next("span").next().html("");
		};
	});
	
})

/* ---------- Request Appoinment Blur Validations ---------- */



/* -- First, Last Names, Pet Name, City-- */

$("#aptfirstname, #aptlastname, #aptcity, #aptpetname").blur(function(){
	if ($(this).val() == "") {
		$(this).parent().addClass("has-error");
		$(this).next("span").addClass("glyphicon-remove");
		$(this).next("span").next().html("Required information.")
		$("#requestbutton").disabled = true;

	} else if (!reProperName.test($(this).val())) {
		$(this).parent().addClass("has-error");
		$(this).next("span").addClass("glyphicon-remove");
		$(this).next("span").next().html("Not a valid proper name.")
		$("#requestbutton").disabled = true;
	} else {
		$(this).parent().removeClass("has-error");
		$(this).next("span").removeClass("glyphicon-remove");
		$(this).next("span").next().html("");
		$("#requestbutton").disabled = false;
	};
});

/* -- Address -- */

$("#aptaddress").blur(function(){
		if ($(this).val() == "") {
			$(this).parent().addClass("has-error");
			$(this).next("span").addClass("glyphicon-remove");
			$(this).next("span").next().html("Required information.")
			$("#requestbutton").disabled = true;
		}  else {
			$(this).parent().removeClass("has-error");
			$(this).next("span").removeClass("glyphicon-remove");
			$(this).next("span").next().html("");
			$("#requestbutton").disabled = false;
		};
});

$("#aptaddress").on("change", function(){
	var $address = $(this).val();
	$address = $address.replace(/[^\w\s]/gi, "");
	$(this).val($address);
});


/* //OLD ADDRESS VALIDATION 
$("#aptaddress").on("change", function(){
	var $address = $(this).val();
	$address = $address.replace(/[^\w\s]/gi, "");
	$(this).val($address);

	$("#aptaddress").blur(function(){
		if ($(this).val() == "") {
			$(this).parent().addClass("has-error");
			$(this).next("span").addClass("glyphicon-remove");
			$(this).next("span").next().html("Required information.")
			$("#requestbutton").disabled = true;
		}  else {
			$(this).parent().removeClass("has-error");
			$(this).next("span").removeClass("glyphicon-remove");
			$(this).next("span").next().html("");
			$("#requestbutton").disabled = false;
		};
	});
});
*/

/* -- Zip -- */

$("#aptzip").blur(function(){
	if ($(this).val() == "") {
		$(this).parent().addClass("has-error");
		$(this).next("span").addClass("glyphicon-remove");
		$(this).next("span").next().html("Required information.")
		$("#requestbutton").disabled = true;
	} else if (!reZipCode.test($(this).val())) {
		$(this).parent().addClass("has-error");
		$(this).next("span").addClass("glyphicon-remove");
		$(this).next("span").next().html("Not a valid 5 digit zip code.")
		$("#requestbutton").disabled = true;
	} else {
		$(this).parent().removeClass("has-error");
		$(this).next("span").removeClass("glyphicon-remove");
		$(this).next("span").next().html("");
		$("#requestbutton").disabled = false;
	};
});



/* -- Phone -- */



$("#aptphonenumber").on('change',function() {
	var $number = $(this).val();
	$number = $number.replace(/(\d{3})(\d{3})(\d{4})/, "($1) $2-$3");
	$(this).val($number);

	$("#aptphonenumber").blur(function(){
		if ($(this).val() == "") {
			$(this).parent().addClass("has-error");
			$(this).next("span").addClass("glyphicon-remove");
			$(this).next("span").next().html("Required information.")
			$("#requestbutton").disabled = true;
		} else if (!rePhone.test($(this).val())) {
			$(this).parent().addClass("has-error");
			$(this).next("span").addClass("glyphicon-remove");
			$(this).next("span").next().html("Not a valid phone number.")
			$("#requestbutton").disabled = true;
		} else {
			$(this).parent().removeClass("has-error");
			$(this).next("span").removeClass("glyphicon-remove");
			$(this).next("span").next().html("");
			$("#requestbutton").disabled = false;
		};
	});
});
 



/* -- Optional Email -- */

$("#aptemail").blur(function(){

	if ($(this).val() != ""){ // this is so email can stay optional 
		if (!reEmail.test($(this).val())) {
			$(this).parent().addClass("has-error");
			$(this).next("span").addClass("glyphicon-remove");
			$(this).next("span").next().html("Not a valid email address.")
			$("#requestbutton").disabled = true;
		} else {
			$(this).parent().removeClass("has-error");
			$(this).next("span").removeClass("glyphicon-remove");
			$(this).next("span").next().html("");
			$("#requestbutton").disabled = false;
		}
	} else {
		$(this).parent().removeClass("has-error");
		$(this).next("span").removeClass("glyphicon-remove");
		$(this).next("span").next().html("");
		$("#requestbutton").disabled = false;
	}
})

/* -- Drop Down Options State, Pet Type, Breed -- */

$("#aptstate, #aptpettype, #aptbreed").blur(function(){

	if ($(this).val() == "select") {
		$(this).parent().addClass("has-error");
		$(this).next("span").addClass("glyphicon-remove");
		$(this).next("span").next().html("Required information.")
		$("#requestbutton").disabled = true;

	} else {
		$(this).parent().removeClass("has-error");
		$(this).next("span").removeClass("glyphicon-remove");
		$(this).next("span").next().html("");
		$("#requestbutton").disabled = false;
	};
});


/* ---------- Request Appoinment Validation Click without Fields filled In ---------- */


function submitApptRequest() {
	
	var $aptfirstname = $("#aptfirstname");
	var $aptlastname = $("#aptlastname");
	var $aptaddress = $("#aptaddress");
	var $aptcity = $("#aptcity");
	var $aptstate = $("#aptstate");
	var $aptzip = $("#aptzip");
	var $aptphonenumber = $("#aptphonenumber");
	var $aptpetname = $("#aptpetname");
	var $aptpettype = $("#aptpettype");
	var $aptbreed = $("#aptbreed");


	var $aptemail = $("#aptemail"); // ------ this is optional 
	var $aptpetage = $("#aptpetage"); // ------ this is optional 
	var $aptneutered = $("#aptneutered").is(':checked'); // ------ this is optional 
	
	function submitValidate(element) {
		$(element).parent().addClass("has-error");
		$(element).next("span").addClass("glyphicon-remove");
		$(element).next("span").next().html("Required information.")
	};


	if (!$aptfirstname.val() || !$aptlastname.val() || !$aptaddress.val() || !$aptcity.val() || $aptstate.val() == "select" || !$aptzip.val()  || !$aptphonenumber.val() || !$aptpetname.val() || $aptpettype.val() == "select" || ($aptpettype.val() == "Dog" && $aptbreed.val() == "select")) {

		$("#requestbutton").disabled = true;

		if (!$aptfirstname.val()) {
			submitValidate($aptfirstname);
		};

		if (!$aptlastname.val()) {
			submitValidate($aptlastname);
		};

		if (!$aptaddress.val()) {
			submitValidate($aptaddress);
		};

		if (!$aptcity.val()) {
			submitValidate($aptcity);
		};
	
		if ($aptstate.val() == "select") {
			submitValidate($aptstate);	
		};
		
		if (!$aptzip.val()) {
			submitValidate($aptzip);
		};

		if (!$aptphonenumber.val()) {
			submitValidate($aptphonenumber);
		};

		if (!$aptpetname.val()) {
			submitValidate($aptpetname);
		};

		if ($aptpettype.val() == "select") {
			submitValidate($aptpettype);
		};

		if ($aptpettype.val() == "Dog" && $aptbreed.val() == "select") {
			submitValidate($aptbreed);
		}

	} else { 
		sendRequest();
	};
}

/* ---------- Request Appoinment Send via Ajax ---------- */

function sendRequest() {
		
	$('#requestbutton').disabled = true;

	var aptfirstname = $("#aptfirstname").val();
	var aptlastname = $("#aptlastname").val();
	var aptaddress = $("#aptaddress").val();
	var aptcity = $("#aptcity").val();
	var aptstate = $("#aptstate").val();
	var aptzip = $("#aptzip").val();
	var aptphonenumber = $("#aptphonenumber").val();
	var aptemail = $("#aptemail").val();
	var aptpetname = $("#aptpetname").val();
	var aptpetage = $("#aptpetage").val();
	var aptneutered = $("#aptneutered").is(':checked');
	var aptpettype = $("#aptpettype").val();
	var aptbreed = $("#aptbreed").val();

	var formdata = new FormData();
	formdata.append("aptfirstname", aptfirstname);
	formdata.append("aptlastname", aptlastname);
	formdata.append("aptaddress", aptaddress);
	formdata.append("aptcity", aptcity);
	formdata.append("aptstate", aptstate);
	formdata.append("aptzip", aptzip);
	formdata.append("aptphonenumber", aptphonenumber);
	formdata.append("aptemail", aptemail);
	formdata.append("aptpetname", aptpetname);
	formdata.append("aptpetage", aptpetage);
	formdata.append("aptneutered", aptneutered);
	formdata.append("aptpettype", aptpettype);
	formdata.append("aptbreed", aptbreed);
	var ajax = new XMLHttpRequest();
	ajax.open("POST", "process.php");
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4 && ajax.status == 200) {
			if (ajax.responseText == "success") {
				$('#mymodal').modal({show: true});
				$("#statusheader").html("Request Status");		
				$("#status").html("Thank you, " + aptfirstname + "! Your request has been sent!");						
				$("#aptfirstname").val("");
				$("#aptlastname").val("");
				$("#aptaddress").val("");
				$("#aptcity").val("");
				$("#aptstate").val("");
				$("#aptzip").val("");
				$("#aptphonenumber").val("");
				$("#aptemail").val("");
				$("#aptpetname").val("");
				$("#aptpetage").val("");
				$("#aptneutered").prop('checked', false);
				$("#aptpettype").val("");
				$("#aptbreed").val("");
				$("#requestbutton").disabled = false;		
			} else {
				$('#mymodal').modal({show: true});				
				$("#statusheader").html("Oops! There was an error...");				
				$("#status").html(ajax.responseText);
				$("#requestbutton").disabled = false;
			}
		}
	}
	ajax.send(formdata);
}

