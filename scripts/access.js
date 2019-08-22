function startLoginCode() {
	var username = document.getElementById('name'),
		password = document.getElementById('password');
	var xmlHttp;
	if (username.value == "" || password.value == "") {
		swal({
			type: 'error',
			title: 'Empty Fields',
			text: 'Please check your input fields',
			footer: '<a href>Empty fields please recheck </a>'
		})
	} else {
		if (window.XMLHttpRequest) {
			xmlHttp = new XMLHttpRequest();
		} else {
			xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlHttp.onreadystatechange = function () {
			if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				var result = xmlHttp.responseText;
				if (result=='wrong') {
					swal({
						type: 'error',
						title: 'Wrong Details',
						text: 'Check your username and password',
						footer: '<a href>Why do I have this issue?</a>'
					})
				}else{
					window.location = "home.php";
				}
			}
		}
		xmlHttp.open('GET', './phpScript/login.php?name=' + username.value + '&password=' + password.value, true);
		xmlHttp.send();
	}
}
var btnSubmit = document.getElementById('btnLog');
var login = function () {
	startLoginCode();
}
