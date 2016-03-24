function validate_acc(){
	if(document.getElementById("gender").value=="none"){
		document.getElementById("gender").className=document.getElementById("gender").className+" err";
		return false;
	}
	return true;
}
function validate_pass(){
	var cpassword=document.getElementById("cpassword");
	var npassword=document.getElementById("npassword");
	var cnewpassword=document.getElementById("cnewpassword");
	if(npassword.value==cnewpassword.value){
		if(npassword.value.length>=6){
			return true;
		}
		else{
			alert("password length minimum 6 characters!");
			err(npassword);
			err(cnewpassword);
		return false;
		}
	}
	else
	{
		alert("confirm your new password!");
		err(npassword);
			err(cnewpassword);
		return false;
	}
}
function validate_modify_address(){
	var pincode=document.getElementById("pincode");
	var phoneno=document.getElementById("phoneno");
	if(!((Number.parseInt(pincode.value) + "").length == 6)){
		err(pincode);
		return false;
	}
	if(!((Number.parseInt(phoneno.value) + "").length ==10)){
		err(phoneno);
		return false;
	}
	else
	{
		return true;
	}
}
function err(_doc){
	_doc.className="err";
}