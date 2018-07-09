function name(){
		var name = document.forms['registration-form']['name'];
		
		var nameError = document.getElementById('nameError');

		if(name.value=="") {
			nameError.style.color = 'red';
			nameError.innerHTML = "Full Name Required";
			flag = 0;
		}
		else if(name.value.match(/^[a-zA-Z]*$/) == null) {
			alert("Full name should be Only Alphabets");
			flag = 0;
		}
		else {
			nameError.innerHTML = "";
			flag = 1;
		}
		return flag;
	}
function username() {
		var user = document.forms['registration-form']['username'];
		var usernameError = document.getElementById('usernameError');

		if(user.value=="") {
			usernameError.style.color = 'red';
			usernameError.innerHTML = "Username Required";
			flag = 0;
		}
		else if(user.value.match(/^[a-zA-Z0-/)== null) {
			alert("0-9 & Alphabets only");
			flag = 0;
		}
		else {
			usernameError.innerHTML = "";
			flag = 1;
		}
		return flag;
	}
function password() {
		var password = document.forms['registration-form']['password'];
		var passError = document.getElementById('passError');
		var passConfirm = document.forms['registration-form']['conPassword'];
		var confirmError = document.getElementById('confirmError');
			
		if(password.value == "" || passConfirm.value == "") {
			passError.style.color = 'red';
			passError.innerHTML = "Password shouldn't be empty";
			flag = 0;
		}
		else if(password.value.length < 8) {
			passError.style.color = 'red';
			passError.innerHTML = "Minimum 8 characters required";
			flag = 0;
			}
			else{
				passError.innerHTML = "";
				flag = 1;
			}

		var matchError = document.getElementById('matchError');

		if(password.value != passConfirm.value) {
			matchError.style.color = 'red';
			matchError.innerHTML = "Password do not match";	
			flag = 0;
		}
		else {
			matchError.innerHTML = "";
			flag = 1;
		} 
		return flag;
	}

function email() {
		var email = document.forms['studentform']['email'];
		var emailError = document.getElementById('emailError');

		if (email.value == "") {
			emailError.style.color = 'red';
			emailError.innerHTML = "Email Required"
			flag = 0;
		}

		else {
			emailError.innerHTML = "";
			flag = 1;
		}
		return flag;
	}
function validation(){
		name();
		username();
		password();
		if(flag == 0) {
			return false;
		}
		else 
			return true;
	}