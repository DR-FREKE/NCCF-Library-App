function startRegisterCode() {
	var name = document.getElementById('name'),
		contact = document.getElementById('contact'),
		email = document.getElementById('email'),
		password = document.getElementById('password'),
		reg_code = document.getElementById('reg_code');
	var xmlHttp;
	if (name.value == "" || contact.value == "" || email.value == "" || password.value == "" || reg_code.value == "") {
		swal({
			type: 'error',
			title: 'Empty Fields',
			text: 'Please fill all input fields',
			footer: '<a href>Check your input fields</a>'
		})
	}else{
		if (window.XMLHttpRequest) {
		xmlHttp = new XMLHttpRequest();
	} else {
		xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlHttp.onreadystatechange = function () {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			var result = xmlHttp.responseText;
			if (result == 'registered') {
				window.location="home.php";
			}else if(result == 'bad'){
				swal({
					type: 'error',
					title: 'Existed Pin!!',
					text: 'Pin has already been used!',
					footer: '<a href>Why do I have this issue?</a>'
				})
			}else{
				swal({
					type: 'error',
					title: 'Unsuccessful Registration!',
					text: 'Incorrect registration pin!',
					footer: '<a href>Why do I have this issue?</a>'
				})
			}
		}
	  }
	}
	
	xmlHttp.open('GET', './phpScript/register.php?name=' + name.value + '&contact=' + contact.value + '&email=' + email.value + '&password=' + password.value + '&reg_code=' + reg_code.value, true);
	xmlHttp.send();
}
var btnSubmit = document.getElementById('btnReg');
var clickme = function () {
	startRegisterCode();
	// Ajax();
}
