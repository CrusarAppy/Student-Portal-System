
		 function validation(){
			var flag;
			var name = document.forms['registration-form']['name'];
			var nameError = document.getElementById('nameError');
			if(name.value=="") {
				nameError.style.color = 'red';
				nameError.innerHTML = "*Full Name Required";
				flag =0;;	
			}
			else {
				nameError.innerHTML = "";
			}
			var user = document.forms['registration-form']['username'];
			var usernameError = document.getElementById('usernameError');

			if(user.value=="") {
				usernameError.style.color = 'red';
				usernameError.innerHTML = "*Username Required";
				var flag =0;
			}
			else if(user.value.match(/^[a-zA-Z0-9]*$/)== null) {
				alert("0-9 & Alphabets only");
				var flag =0;
			}
			else {
				usernameError.innerHTML = "";
			}
			var password = document.forms['registration-form']['password'];
			var passError = document.getElementById('passError');
			
			if(password.value == "") {
				passError.style.color = 'red';
				passError.innerHTML = "*Password shouldn't be empty";
				var flag =0;
			}
			else if(password.value.length < 8) {
				passError.style.color = 'red';
				passError.innerHTML = "*Minimum 8 characters required";
				var flag =0;
			}
			else{
				passError.innerHTML = "";
				
			}
			var passConfirm = document.forms['registration-form']['conPassword'];		
			var matchError = document.getElementById('confirmError');
			if(password.value != passConfirm.value) {
				matchError.style.color = 'red';
				matchError.innerHTML = "*Password do not match";	
				var flag =0;
			}
			else {
				matchError.innerHTML = "";
			}
			var email = document.forms['registration-form']['email'];
			var emailError = document.getElementById('emailError');

			if (email.value == "") {
				emailError.style.color = 'red';
				emailError.innerHTML = "*Email Required";
				var flag =0;
			}else {
				emailError.innerHTML = "";
			}
			//student only

			var type = document.getElementById("type");
			var acType = type.options[type.selectedIndex].value;
			if(acType == "student"){
				var puregis = document.forms['registration-form']['puregis'];
				var puregisError = document.getElementById('puregisError');
				if (puregis.value == "") {
						puregisError.style.color = 'red';
						puregisError.innerHTML = "*PUregistration number Required";
				var flag =0;
			}else {
				puregisError.innerHTML = "";
			}
			var clzregis = document.forms['registration-form']['clzregis'];
			var clzregisError = document.getElementById('clzregisError');

			if (clzregis.value == "") {
				clzregisError.style.color = 'red';
				clzregisError.innerHTML = "*College registration no. Required";
				var flag =0;
			}else {
				clzregisError.innerHTML = "";
			}
			}else if (acType == "teacher"){
			

//teacher only

			var xp = document.forms['registration-form']['experience'];
			var aError = document.getElementById('experienceError');
			if (xp.value == "") {
				aError.style.color = 'red';
				aError.innerHTML = "*Experience Required";
				var flag =0;
			}else {
				aError.innerHTML = "";
			}
			var Tid = document.forms['registration-form']['teacherId'];
			var bError = document.getElementById('teacherIdError');
			if (Tid.value == "") {
				bError.style.color = 'red';
				bError.innerHTML = "*TeacherId Required";
				var flag =0;
			}else {
				bError.innerHTML = "";
			}
			var speciality = document.forms['registration-form']['speciality'];
			var cError = document.getElementById('specialityError');
			if (speciality.value == "") {
				cError.style.color = 'red';
				cError.innerHTML = "*Speciality is Required";
				var flag =0;
			}else {
				cError.innerHTML = "";
			}
		}
		if(flag==0){
			return false;
		}else{
			return true;
		}
		}