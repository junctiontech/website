/* Function to check email availablity*/

 
function check_email_exsist(id)
{ 
	$("html, body").animate({ scrollTop: 0 }, 600);	
	
	if($('.'+id).html()!="")
	{ 
		alert('This email id is alredy exsist please try another email!!');
		return false;
	}
	else{
	return true;
	}
}

function check_email(obj,id){
	
	var edit_mode='';
	if(id){
		edit_mode=id;
		}else{
			edit_mode=0;
			}
	$(".msg_box_"+obj.id).html('');
		var email = obj.value; 
	//alert(email);
		var email = email; 
		if(email!=''){
			$.ajax({
					type:"POST",
					url: base_url+"common_functions/check_email/"+edit_mode,
					data: {email: email},
					})
					.done(function( msg ) {
						//alert(msg);
						if(msg!=1) {
							
							$('#reg-email').val('');
             $('#reg-email').attr('placeholder','Email id already registered with us.');
							$(".msg_box_"+obj.id).html("Email id already registered with us.");
							//alert(msg)
							//$('#register_form').attr('onSubmit','return false');
							return false;
							
							//alert('false');
							
						}else{
								$('#register_form').attr('onSubmit','return true');
								//alert('true');
								
							} 	
					});
			return false;		
		}
		/* Function to match password*/
}
function check_mobile_exsist(id)
{ 
	$("html, body").animate({ scrollTop: 0 }, 600);	
	
	if($('.'+id).html()!="")
	{    $('.reg-mobile').html("");
		alert('This mobile number  is alredy exsist please try another mobile number!!');
		return false;
	}
	else{
	return true;
	}
}

function check_mobile(obj,id){
	//alert("fdsf");
	var edit_mode='';
	if(id){
		edit_mode=id;
		}else{
			edit_mode=0;
			}
	$(".msg_box_"+obj.id).html('');
		var mobile = obj.value; 
	//alert(mobile);
		var mobile = mobile; 
		if(mobile!=''){
			$.ajax({
					type:"POST",
					url: base_url+"common_functions/check_mobile/"+edit_mode,
					data: {mobile: mobile},
					})
					.done(function( msg ) {
						
						if(msg!=1) {
							
							$('#reg-mobile').val('');
              $('#reg-mobile').attr('placeholder','Mobile id already registered with us.');
							$(".msg_box_"+obj.id).html("Mobile id already registered with us.");
							//alert(msg);
							
							//$('.reg-mobile').html("");
							//$( "#reg-mobile" ).html();
							 // document.getElementById('reg-mobile').innerHTML='';
							return false;
							//alert('false');
							
						}else{
								$('#register_form').attr('onSubmit','return true');
								//alert('true');
							} 	
					});
			return false;		
		}
		/* Function to match password*/
}




function check_imei(obj,status,id){
	
	var edit_mode='';
	if(id){
		edit_mode=id;
		}else{
			edit_mode=0;
			}
	$(".msg_box_"+obj.id).html('');
		var imei = obj.value; 
	//alert(mobile);
		var imei = imei; 
		if(imei!=''){
			$.ajax({
					type:"POST",
					url: base_url+"common_functions/check_imei/"+edit_mode,
					data: {imei: imei},
					data: {imei: imei},
					})
					.done(function( msg ) {
						//alert(msg);
						if(msg!=1) {
							$('#reg-imei').val('');
             $('#reg-imei').attr('placeholder','imei id already registered with us.');
							$(".msg_box_"+obj.id).html("imei id already registered with us.");
							
							//alert(msg);
							//$('#register_form').attr('onSubmit','return false');
							return false;
							//alert('false');
							
						}else{
								$('#register_form').attr('onSubmit','return true');
								//alert('true');
							} 	
					});
			return false;		
		}
		/* Function to match password*/
}




function check_email_exsist_needy(id)
{ 
	$("html, body").animate({ scrollTop: 0 }, 600);	
	
	if($('.'+id).html()!="")
	{ 
		alert('This email id is alredy exsist please try another email!!');
		return false;
	}
	else{
	return true;
	}
}

function check_email_needy(obj,status,id){
	
	var edit_mode='';
	if(id){
		edit_mode=id;
		}else{
			edit_mode=0;
			}
	$(".msg_box_"+obj.id).html('');
		var email = obj.value; 
	
		var email = email; 
		if(email!=''){
			$.ajax({
					type:"POST",
					url: base_url+"common_functions/check_email_needy/"+edit_mode,
					data: {email: email},
					})
					.done(function( msg ) {
						
						if(msg!=1) {
							$('#reg-email-needy').val('');
							$(".msg_box_"+obj.id).html("Email id already registered with us.");
							//$(".msg_box_"+obj.id).html(msg);
							//alert(msg)
							//$('#register_form').attr('onSubmit','return false');
							return false;
							//alert('false');
							
						}else{
								$('#register_form').attr('onSubmit','return true');
								//alert('true');
							} 	
					});
			return false;		
		}
		/* Function to match password*/
}
function check_mobile_exsist_needy(id)
{ 
	$("html, body").animate({ scrollTop: 0 }, 600);	
	
	if($('.'+id).html()!="")
	{ 
		alert('This mobile number  is alredy exsist please try another mobile number!!');
		return false;
	}
	else{
	return true;
	}
}

function check_mobile_needy(obj,status,id){
	
	var edit_mode='';
	if(id){
		edit_mode=id;
		}else{
			edit_mode=0;
			}
	$(".msg_box_"+obj.id).html('');
		var mobile = obj.value; 
	//alert(mobile);
		var mobile = mobile; 
		if(mobile!=''){
			$.ajax({
					type:"POST",
					url: base_url+"common_functions/check_mobile_needy/"+edit_mode,
					data: {mobile: mobile},
					})
					.done(function( msg ) {
						
						if(msg!=1) {
							$('#reg-mobile-needy').val('');
							$(".msg_box_"+obj.id).html("Mobile Number is already registered with us.");
							//$(".msg_box_"+obj.id).html(msg);
							//alert(msg);
							//$('#register_form').attr('onSubmit','return false');
							return false;
							//alert('false');
							
						}else{
								$('#register_form').attr('onSubmit','return true');
								//alert('true');
							} 	
					});
			return false;		
		}
		/* Function to match password*/
}

 






//$(document).ready(function(){
	
//});
function match_pass(section)
{
var pass = $('#password_'+section).val();
var rpass = $('#rpassword_'+section).val();
if(pass!=rpass){
$('#rpassword_'+section).css("border", "1px solid red");
$('#rpassword_'+section).val('');
$('#rpassword_'+section).attr('placeholder','Value doesn\'t match with password.');	 
}	 
}


function match_currentpass(password)
{
var pass = password;
var epass = $('#cpassword').val();
//alert(epass);
//alert(pass);
   $.ajax({
type: "POST",
url : base_url+'common_functions/match_currentpass',
data: {pass: pass,epass:epass },

})
.done(function(msg){
//alert(msg);	
if(msg=='1'){
 $('#cpassword').css("border", "1px solid red");
             $('#cpassword').val('');
              $('#cpassword').attr('placeholder','Value doesn\'t match with password.');
}
});
return false;
}
function submit(){
	
document.forms["myform"].submit();

}

function submit_status(info){
	var string1, string2, name;
string1 = info ; // first string
string2 = "myform2"; // second string
name = string1 + string2; 
	//alert(stringConcatenated);
document.forms[name].submit();

}

function submit_status_accept(info){
	var string1, string2, name;
string1 = info ; // first string
string2 = "myform3"; // second string
name = string1 + string2; 
	//alert(stringConcatenated);
document.forms[name].submit();

}

function check_halt(value){
	//alert(value);

var waiting = value;
var epass = $('#time').val();
alert(epass);
alert(waiting);

   $.ajax({
type: "POST",
url : base_url+'common_functions/check_halt',
data: {waiting: waiting,epass:epass },

})

.done(function( msg ) {
	//alert(msg);					
						if(msg) {
							$('#time').val('');
							$(".msg_box_"+obj.id).html("Mobile Number is already registered with us.");
							//$(".msg_box_"+obj.id).html(msg);
							//alert(msg);
							//$('#register_form').attr('onSubmit','return false');
							return false;
							//alert('false');
							
						}else{
								$('#register_form').attr('onSubmit','return true');
								//alert('true');
							} 	
					});
}
function check_halt(halt_time){
	//alert(value);
$.ajax({
				type: "POST",
				url : base_url+'index.php/common_functions/show_filterresult',
				data: {halt_time:halt_time},
			})	
				.done(function(msg){
					
						if(msg!=1) {
							
						return false;		
						}else{
					$('#filter_id').html(msg);					
					}
					
				});
		
		return false;

}




/*The above functions are use to validate user can enter only numeric value in text box*/
