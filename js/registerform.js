<script>
	function validate(){
		var username=document.forms["myform"]["username"].value;
		var sex=document.forms["myform"]["sex"].value;
		var frequency=document.forms["myform"]["frequency"].value;
		var country=document.forms["myform"]["country"].value;
		var city= document.forms["myform"]["city"].value;
		var district=document.forms["myform"]["district"].value;
		var postalcode=document.forms["myform"]["postalcode"].value.length;
		var username1=document.forms["myform"]["username1"].value;
		var password=document.forms["myform"]["password"].value;
		var password2=document.forms["myform"]["password2"].value;
		//var email=document.forms["myform"]["email"].value;
		if(username==""){
			error_username.textContent="*Name is required";
			//username.focus();
			alert("name required");
			return false;
		}
		else{
			error_username.textContent="";
		}
		if(sex=="gender"){
			error_sex.textContent="*Please Select Gender";
			//sex.focus();
			alert("select gender");
			return false;
		}
		else{
			error_sex.textContent="";
		}
		if(frequency=="freq"){
			error_frequency.textContent="*Please Select Something";
			//frequency.focus();
			alert("select frequency");
			return false;
		}
		else{
			error_frequency.textContent="";
		}
		if(country=="select"){
			error_country.textContent="*Select Country";
			return false;
		}
		else{
			error_country.textContent="";
		}
		if(city=="select"){
			error_city.textContent="*Select City";
			return false;
		}
		else{
			error_city.textContent="";
		}
		if(district==""){
			error_district.textContent="*Please enter district";
			return false;
		}
		else{
			error_district.textContent="";
		}
		if(postalcode!=4){
			error_postalcode.textContent="*Invalid Postal Code";
			return false;
		}
		else{
			error_postalcode.textContent="";
		}
		if(username1==""){
			error_username1.textContent="Enter your username";
			return false;
		}
		else{
			error_username1.textContent="";
		}
		if(password!=password2 || password==""){
			error_password.textContent="*Password donot match";
			return false;
		}
		else{
			error_password.textContent="";
		}
		if(document.getElementById('termsandcondition').checked){
			return true;
		}
		else{
			alert("PLease accept terms and condition");
			return false;
		}

		
	}
	function validateemail(inputemail){
			var emailformat= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(inputemail.value.match(emailformat)){
				document.myform.email.focus();
				error_email.textContent="";
				return true;
			}
			else{
				alert("Invalid Email address");
				error_email.textContent="*Invalid Email address";
				return false;
			}
		}
	function validatemobile(inputmobile){
		var mobilenumber=document.forms["myform"]["mobile"].value.length;
		var numberformat= /^[0-9]+$/;
		if(mobilenumber==11 && inputmobile.value.match(numberformat)){
			document.myform.mobile.focus();
			//document.write(inputmobile.length);
			error_mobile.textContent="";
			return true;
		}
		else{
			alert("Invalid mobile number");
			error_mobile.textContent="*Invalid Mobile number";
			return false;
		}
	}
</script>