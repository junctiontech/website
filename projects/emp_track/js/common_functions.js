var counter=2;
/*function get_subitem_list(dep_id,chap_id,item_id){
	//alert(dep_id+""+chap_id+""+item_id);
	 $.ajax({
			type: "POST",
			url: base_url+"index.php/common_functions/get_subitem_list/"+dep_id+"/"+chap_id+"/"+item_id,
			data: {},
		})
		.done(function( msg ) {
			$('#sub_item_list').html(msg);
		
				
		});
	return false;	
	
	
	
}*/
function calculate_amount(row)
{//alert(row);
	
	var get_data = row.split('_');		
		var id_type =  get_data[0];
		 var row_id = get_data[1];// current counter 
	
	
	var e = document.getElementById("type_"+row_id);
	var type_val = e.options[e.selectedIndex].value;
	//alert(type_val);
	if(type_val=='overhead'){
		
		
		var count=row_id-1;// last counter 
		//alert(count);
		var check_ref = document.getElementById("type_"+count);
	    var type_ref_val = check_ref.options[check_ref.selectedIndex].value;
		//alert(type_ref_val);
		
		if(type_ref_val=='refrence'){
			//alert("d");
			var previous_counter=row_id-2;//counter To count last to  last sum  
			 var last_total=document.getElementById('total_'+previous_counter).value;
				var percent=document.getElementById('rate_'+row_id).value;
				//alert(last_total);
				var c=last_total*percent;
				var final_amt = c/100;
				document.getElementById('amount_'+row_id).value=final_amt;
		}else{
	    var last_total=document.getElementById('total_'+count).value;
		var percent=document.getElementById('rate_'+row_id).value;
		//alert(last_total);
		var c=last_total*percent;
		//alert(c);
		var final_amt = c/100;
		
		//alert(final_amt);
		//alert(row_id);
		document.getElementById('amount_'+row_id).value=final_amt;
		
	   }
	}else if(type_val=='convert'){
			//alert("d");
			var count=row_id-1;//counter To count  last sum  
			 var last_total=document.getElementById('total_'+count).value;
			// alert(last_total);
				var in_unit_change=document.getElementById('quantity_'+row_id).value;//it shows the unit that we want
				
				var c=last_total/in_unit_change;
				var final_amt = c;
				document.getElementById('amount_'+row_id).value=final_amt;//final_amt stand for amount per unit
				document.getElementById('total_'+row_id).value=final_amt;
				document.getElementById('final_total').value=final_amt;
				document.getElementById('serial_'+row_id).value=row_id;
		}else{
	
    var quantity=document.getElementById('quantity_'+row_id).value;
	var rate=document.getElementById('rate_'+row_id).value;
	var c=quantity*rate;
	document.getElementById('amount_'+row_id).value=c;	
	}
}

function append_menus(){
	
	counter++;
	 var tr = '<tr><td><input type="checkbox" id="select_all" title="Check/Uncheck all" class="select_all" /></td><td class="reorder"><a class="icon-move" href="#move" title="Reorder"></a></td><td><select id="type" placeholder="Select Category" name="type[]" ><option value="">Select Type</option><option value="material">Material</option><option value="lebor">Lebbor</option><option value="other">Other</option></select></td></td><td><textarea   rows="6" id="description" name="description[]"></textarea></td><td><input type="text" placeholder="Subitem Code" id="code" name="code[]" value=""></td> <td><input type="text" placeholder="Subitem Unit" id="unit" name="unit[]" value=""></td><td><input type="text" placeholder="Subitem Quantity"  id="quantity'+counter+'" name="quantity[]" onblur="calculate_amount()" value=""></td><td><input type="text" placeholder="Subitem Rate"  id="rate'+counter+'"  name="rate[]" onblur="calculate_amount()"  value=""></td><td><input type="text" readonly placeholder="Subitem Amount" id="amount'+counter+'" name="amount[]" value=""></td></tr>'; 
	
	$(".menus").append(tr);
	
}
function get_type_value(row)
{//alert(row);
	var get_data = row.split('_');		
		var id_type =  get_data[0];
		 var row_id = get_data[1];
		 
		 var val_id=id_type+'_'+row_id;	

	
	
	var e = document.getElementById("type_"+row_id);
	var type_val = e.options[e.selectedIndex].value;
	var code_val=document.getElementById(val_id).value;
	
	

	
	//alert(type_val);
	 $.ajax({
			type: "POST",
			url: base_url+"index.php/common_functions/get_type_value/"+type_val+"/"+code_val,
			data: {},
		})
		
		.done(function(msg) {	
		var topic = eval(msg);
		
                              $.each(topic, function(i,v){
								 //alert(v);
			
		   if(type_val=='refrence'){
			 $('#rate_'+row_id).val(v.cost_total);
			$('#unit_'+row_id).val(v.unit);
			$('#item_desc_'+row_id).val(v.description); 
			$('#serial_'+row_id).val(row_id); 
			   
		   }else if(type_val=='overhead'){
			 
			$('#rate_'+row_id).val(v.overhead_percent);
			$('#item_desc_'+row_id).val(v.overhead_desc); 
			$('#serial_'+row_id).val(row_id);    
			   
		   }else if(type_val=='labour'){
			   $('#rate_'+row_id).val(v.labour_rate);
			$('#unit_'+row_id).val(v.labour_unit);
			$('#item_desc_'+row_id).val(v.labour_description);   
			$('#serial_'+row_id).val(row_id);    
			   
			}else if(type_val=='carriage'){
			   $('#rate_'+row_id).val(v.carriage_rate);
			$('#unit_'+row_id).val(v.carriage_unit);
			$('#item_desc_'+row_id).val(v.carriage_description);   
			  $('#serial_'+row_id).val(row_id);  
			   
			}else if(type_val=='plant'){
			   $('#rate_'+row_id).val(v.rate);
			$('#unit_'+row_id).val(v.unit);
			$('#item_desc_'+row_id).val(v.pla_desc);   
			 $('#serial_'+row_id).val(row_id);   
			   
			}else if(type_val=='subitem'){
				 $('#rate_'+row_id).val(v.rate);
			$('#unit_'+row_id).val(v.unit);
			$('#item_desc_'+row_id).val(v.subitem_desc); 
			$('#serial_'+row_id).val(row_id); 
				
				}else{   
			   
			 $('#rate_'+row_id).val(v.rate);
			$('#unit_'+row_id).val(v.unit);
			$('#item_desc_'+row_id).val(v.mat_desc);  
			  $('#serial_'+row_id).val(row_id);  
		   }
				
		});
	 });	

}
function get_total(row){
	
	var get_data = row.split('_');		
		var id_type =  get_data[0];
		 var row_id = get_data[1];
		 
		 
		
		 var val_id=id_type+'_'+row_id;	

	
	
	var e = document.getElementById("type_"+row_id);
	var type_val = e.options[e.selectedIndex].value;
		 
	  if(type_val=='convert'){

       // alert("convert");
       var total=document.getElementById('amount_'+row_id).value;
		 //alert(grand_total);
		document.getElementById('final_total').value=total;       

	  }else{  
		 
		 
	if(row_id==1){
		//alert("dsfg");
		var total=document.getElementById('amount_'+row_id).value;
	
		document.getElementById('total_'+row_id).value=total;
		document.getElementById('final_total').value=total;
	}else{
		
		var count=row_id-1;
		//alert(count);
		var total=document.getElementById('amount_'+row_id).value;
		//alert(total);
	    var last_total=document.getElementById('total_'+count).value;
		//alert(last_total);
		if(last_total==''){
			var last_amt=0;
			
		}else{
			var last_amt=last_total;
		}
	    var grand_total=parseFloat(total)+parseFloat(last_amt);
		//alert(grand_total);
		document.getElementById('total_'+row_id).value=grand_total;
		
		document.getElementById('final_total').value=grand_total;
	}
	  }
	
}
function check(currentcount,tableID){
	var table=document.getElementById(tableID);
					var rowCount=table.rows.length;//Counter for total row exist
		 //var count=row_id+1;
		
		
		var get_data = currentcount.split('_');		
		var id_type =  get_data[0];
		 var row_id = get_data[1];//Counter for current row 
	 //alert(rowCount+""+row_id);
	
}
function show_chapter(dep_id,current_value)
{
	$.ajax({
				type: "POST",
				url : base_url+'index.php/common_functions/show_chapter',
				data: {dep_id: dep_id , current_value: current_value },
			})	
				.done(function(msg){
					
					$('#show_chap').html(msg);					
					
					return false;	
				});
		
		return false;
}
function show_item(chap_id,current_value,dep_id)
{
	//alert(chap_id);
	$.ajax({
				type: "POST",
				url : base_url+'index.php/common_functions/show_item',
				data: {chap_id: chap_id , current_value: current_value,dep_id:dep_id },
			})	
				.done(function(msg){
					
					$('#show_item').html(msg);					
					
					return false;	
				});
		
		return false;
}
function show_sitem(item_id,current_value,dep_id,chap_id)
{
	//alert(item_id);
	$.ajax({
				type: "POST",
				url : base_url+"index.php/common_functions/show_sitem/"+dep_id+"/"+chap_id+"/"+item_id,
				data: {dep_id:dep_id,chap_id:chap_id,item_id:item_id},
			})	
				.done(function(msg){
					
					$('#show_subitem').html(msg);					
					
					return false;	
				});
		
		return false;
}
function show_itemchapter(dep_id,current_value)
{
	$.ajax({
				type: "POST",
				url : base_url+'index.php/common_functions/show_itemchapter',
				data: {dep_id: dep_id , current_value: current_value },
			})	
				.done(function(msg){
					
					$('#show_itemchap').html(msg);					
					
					return false;	
				});
		
		return false;
}
function show_item_list(chap_id,current_value,dep_id)
{
	//alert(dep_id);
	$.ajax({
				type: "POST",
				url : base_url+"index.php/common_functions/show_item_list/"+chap_id+"/"+dep_id,
				data: {chap_id:chap_id,dep_id:dep_id},
			})	
				.done(function(msg){
					
					$('#show_item_list').html(msg);					
					
					return false;	
				});
		
		return false;
}
function show_chapterlist(dep_id,current_value)
{
	//alert(item_id);
	$.ajax({
				type: "POST",
				url : base_url+"index.php/common_functions/show_chapterlist/"+dep_id,
				data: {dep_id:dep_id},
			})	
				.done(function(msg){
					
					$('#show_chapter_list').html(msg);					
					
					return false;	
				});
		
		return false;
}
function check_unit_exsist(id)
{ $("html, body").animate({ scrollTop: 0 }, 600);	
	if($('.'+id).html()!="")
	{ 
		alert('This Unit is alredy exsist!!');
		return false;
	}
	else{
	return true;
	}
}

function check_unitname(obj,id){
	
	var edit_mode='';
	if(id){
		edit_mode=id;
		}else{
			edit_mode=0;
			}
	$(".msg_box_"+obj.id).html('');
		var unit_name = obj.value; 
	
		var unit_name = unit_name; 
		if(unit_name!=''){
			$.ajax({
					type:"POST",
					url: base_url+"index.php/common_functions/check_unitname/"+edit_mode,
					data: {unit_name: unit_name},
					})
					.done(function( msg ) {
						//alert(msg);
						if(msg!=1) {
							
							$(".msg_box_"+obj.id).html(msg);
							$('#validation-form').attr('onSubmit','return false');
							return false;
							//alert('false');
							
						}else{
							//alert("fkjd");
								$('#validation-form').attr('onSubmit','return true');
								//alert('true');
							} 	
					});
			return false;		
		}
		/* Function to match password*/
}
$(document).ready(function () {
	/* Get the checkboxes values based on the class attached to each check box */
	$("#buttonClass").click(function() {
	    getValueUsingClass();
	});
	
	/* Get the checkboxes values based on the parent div id */
	$("#buttonParent").click(function() {
	    getValueUsingParentTag();
	});
});
function getValueUsingClass(){
	/* declare an checkbox array */
	var chkArray = [];
	
	/* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
	$(".chk:checked").each(function() {
		chkArray.push($(this).val());
	});
	
	/* we join the array separated by the comma */
	var selected;
	selected = chkArray.join(',') + ",";
	
	/* check if there is selected checkboxes, by default the length is 1 as it contains one single comma */
	$.ajax({
				type: "POST",
				url : base_url+"index.php/common_functions/show_estimation",
				data: {selected:selected},
			})	
				.done(function(msg){
					
					$('#show_estimaed').html(msg);					
					
					return false;	
				});
		
		return false;
}