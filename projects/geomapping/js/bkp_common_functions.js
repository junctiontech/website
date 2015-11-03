/* Function to check email availablity*/
 $(document).ready(function(){
					$('.channel_patner_sort a').live('click',function(event) {
                    event.preventDefault(); 
				$.ajax({
				type: "POST",
				url : $(this).attr('href'),
				})	
				.done(function(msg){
                			
					$('#search_result').html(msg);					
					
				});
		
		return false;
					});
				});


function check_email(obj){
		var email = obj.email.value;
		var enums = "";	
		if(email!=''){
			$.ajax({
					type:"POST",
					url: base_url+"common_functions/check_email",
					data: {email: email},
					})
					.done(function( msg ) {
						//alert(msg);
						enums = msg;
						//return enums;
					}); 
			alert(enums);		
			return enums;		
		}
		/* Function to match password*/
}

//$(document).ready(function(){
	
//});

function password(){
	var password=document.getElementById('password_r').value;
	//alert(password);
	//alert("HIaisashjahsjah");
	return password;
}	

function show_state(country_id,current_value)
{//alert("jnjvf");
	$.ajax({
				type: "POST",
				url : base_url+'common_functions/show_state',
				data: {country_id: country_id , current_value: current_value },
			})	
				.done(function(msg){
                  //alert(msg);				
					$('#show_state').html(msg);					
					return false;	
				});
		
		return false;
}
function show_cities(state_id,current_value)
{;
	$.ajax({
				type: "POST",
				url : base_url+'common_functions/show_cities',
				data: {state_id: state_id , current_value: current_value },
			})	
				.done(function(msg){
                //alert(msg);				
					$('#show_city').html(msg);					
					return false;	
				});
		
		return false;
}
function check_refral_url(url,id){
	setCookie("url",url);
	/*alert(getCookie("url"));
	alert(url +" === "+id);*/
	$("#refferal").val(url+"/"+id);
}
function setCookie(c_name,value,exdays)
{
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
document.cookie=c_name + "=" + c_value;
}
function getCookie(c_name)
{
var c_value = document.cookie;
var c_start = c_value.indexOf(" " + c_name + "=");
if (c_start == -1)
  {
  c_start = c_value.indexOf(c_name + "=");
  }
if (c_start == -1)
  {
  c_value = null;
  }
else
  {
  c_start = c_value.indexOf("=", c_start) + 1;
  var c_end = c_value.indexOf(";", c_start);
  if (c_end == -1)
  {
c_end = c_value.length;
}
c_value = unescape(c_value.substring(c_start,c_end));
}
return c_value;
}
function add_fev(property_status,property_id){
//alert(property_status +" ==== "+ property_id );		
	$.ajax({
					type: "POST",
					url : base_url+'common_functions/add_fev',
					data: {property_status: property_status,property_id: property_id },
				})
				.done(function(msg){					
					if(msg=='1')
					{
						$('#ajax-msg').html("<div class='alert alert-success'><a class='close' data-dismiss='alert'>×</a>	This property  added to your favourite list.</div>");
										
					}
					
					if(msg=='2')
					{
						$('#ajax-msg').html("<div class='alert alert-warning'><a class='close' data-dismiss='alert'>×</a>	This property removed from your favourite list.</div>");	
							
					}	
					$("html, body").animate({ scrollTop: 0 }, 600);					
					return false;	
				});
		
		return false;
}
function calculate_Estimated_ROI()
{
	var sale=document.getElementById('estimated_sale_price').value;
	var purchase=document.getElementById('estimated_purchase_price').value;
	var rehab=document.getElementById('estimated_rehab').value;
	var a=rehab/1+purchase/1;

	var b=sale-a;

	var c=b* (0.60);
	var roi=c/100;
	document.getElementById('estimated_roi').value=roi;
}
function fetch_map()
{
	
	var map=document.getElementById('city_id').value;
		$.post(base_url+'common_functions/add_map',
  {
    id:map,
     },
  function(data,status)
  {
	  if(status)
	  {	
		 $('#map').val(data);
		  }
		  else{
			