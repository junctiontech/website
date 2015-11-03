<div id="main-content">
<div class="page-title">
<div>
<h1><i class="fa fa-keyboard-o"></i> Subitem Calculation</h1>
</div>
</div>
<div id="breadcrumbs">
<ul class="breadcrumb">
<li class="active"> <i class="fa fa-home"></i><?php echo($this->breadcrumb->output());?> </li>

</ul>
</div>
 
	
 <!--DESCRIPTION STARTS -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"><h4><?php echo str_replace("%20"," ",ucwords($subitem_des));?></h4>
					</div>
				</div>
			</div>
		</div>
	 <!--DESCRIPTION eNDS -->
<div class="row">
	

	<div class="col-md-12">
	
	
	 <form action="index.php/home/create_sub_cal" method="post" name="addsubitemcal">
	    <input type="hidden" readonly name="dep_id" value="<?=$dep_id?>" />
		<input type="hidden" readonly name="chap_id" value="<?=$chap_id?>" />
		<input type="hidden" readonly name="item_id" value="<?=$item_id?>" />
		<input type="hidden" readonly name="subitem_id" value="<?=$subitem_id?>" />
		<div class="row ">
				<div class="col-md-4 col-md-offset-8" style="text-align: right;">
				
			
				 </div>
		  </div>
		  </br>

<div class="table-big">
			
	    <table class="table table-bordered fill-head" >

		    
			<thead>
				<tr>
				<th class="subitem">#</th>
				<th class="subitem">Order</th>
				<th class="subitem">Type</th>
				<th class="subitem">Description</th>
				<th class="subitem">Code </th>
				<th class="subitem">Unit</th>
				<th class="subitem">Quantity</th>
				<th class="subitem">Rate</th>
				<th class="subitem">Amount</th>
				<th class="subitem">Total</th>
				<th>Action</th>
				</tr>
				</thead>
					<?php if(!empty($subitem_costing)){
					//echo"edit";die;?>
				<tbody id="editTable">
			
						<?php foreach($subitem_costing as $key=> $sub){ ?>	
					<tr>
							<input type="hidden" readonly name="edit_costing" id="edit_costing" value="1" />
							<td><input type="checkbox" id="select_<?=$key+1?>"  title="Check/Uncheck all" class="select_all" /></td>
							
                           <td><input type="text" readonly class="input-mini-xs" id="serial_<?=$key+1?>" name="serial[]"  value="<?=(!empty($sub->serial))?$sub->serial:"";?>"></td>
                           	
                           
							<td><select class="input-small" id="type_<?=$key+1?>"  placeholder="Select Category" name="item_type[]" >
						<option value="">Select Type</option>
                        <?php foreach($cost_type as $ct){?>
						 <option value="<?=$ct->costtype_desc?>" <?=(!empty($sub->item_type) && $sub->item_type==$ct->costtype_desc)?'selected':''?>><?=$ct->costtype_desc?></option>
                       <?php }?>
						</select></td>
							<td><textarea  class="input-medium"  rows="1" id="item_desc_<?=$key+1?>" name="item_desc[]"><?=(!empty($sub->item_desc))?$sub->item_desc:"";?></textarea></td>
							<td><input type="text" class="input-mini-xs" id="code_<?=$key+1?>" name="code[]" onblur="get_type_value(this.id)" value="<?=(!empty($sub->code))?$sub->code:"";?>"></td>
							<td><input type="text" class="input-mini" id="unit_<?=$key+1?>" name="unit[]" value="<?=(!empty($sub->unit))?$sub->unit:"";?>"></td>
							<td><input type="text" class="input-mini"  id="quantity_<?=$key+1?>" name="quantity[]" onblur="calculate_amount(this.id)" value="<?=(!empty($sub->quantity))?$sub->quantity:"";?>"></td>
							<td><input type="text" class="input-mini-xs"  id="rate_<?=$key+1?>" name="rate[]" onblur="calculate_amount(this.id)" value="<?=(!empty($sub->rate))?$sub->rate:"";?>"></td>
							<td><input type="text" readonly class="input-mini"id="amount_<?=$key+1?>" name="amount[]" value="<?=(!empty($sub->amount))?$sub->amount:"";?>" onblur="get_total(this.id)"></td>
							<td><input type="text" readonly placeholder="Total" id="total_<?=$key+1?>" name="total_amount[]" value="<?=(!empty($sub->total_amount))?$sub->total_amount:"";?>"></td>
				 				<td>	<?php if(!empty($subitem_costing)){?>
			<input type="button" value="+" class="btn btn-info " onclick="edit_addRow('editTable')">
          <input type="button" value="X"class="btn btn-info "  onclick="edit_deleteRow('editTable')">
          <?php } else {?>
			  	<input type="button" value="+" class="btn btn-info "  onclick="addRow('dataTable')">
          <input type="button" value="X" class="btn btn-info " onclick="deleteRow('dataTable')">
          <?php }?></td>
				 </tr>
							 <?php }?>
			 </tbody>
			<?php } else {?>
				     	<tbody id="dataTable">   
		                <tr>
						<td><input type="checkbox" id="select_1" onclick="check(this.id,'dataTable')" title="Check/Uncheck all" class="select_all" /></td>
						<td><input type="text" readonly class="input-mini-xs" id="serial_1" name="serial[]"  value=""></td>
					

						<td><select class="input-small" id="type_1"  placeholder="Select Category" name="item_type[]" >
						<option value="">Select Type</option>
                        <?php foreach($cost_type as $ct){?>
						 <option value="<?=$ct->costtype_desc?>"><?=$ct->costtype_desc?></option>
                       <?php }?>
						</select></td>
						<td><textarea  readonly  class="input-medium" rows="6" id="item_desc_1" name="item_desc[]"></textarea></td>
						<td><input type="text"  class="input-mini-xs" id="code_1" name="code[]" onblur="get_type_value(this.id)" value=""></td>
						<td><input type="text" readonly class="input-mini" id="unit_1" name="unit[]" value=""></td>
						<td><input type="text" class="input-mini" id="quantity_1" name="quantity[]" onblur="calculate_amount(this.id)" value=""></td>
						<td><input type="text"  class="input-mini" id="rate_1" name="rate[]" onblur="calculate_amount(this.id)" value=""></td>
						<td><input type="text" readonly class="input-mini-xs" id="amount_1" name="amount[]" value="" onblur="get_total(this.id)"></td>
						<td><input type="text" readonly placeholder="Total" id="total_1" name="total_amount[]" value=""></td>
				  			<td>	<?php if(!empty($subitem_costing)){?>
			<input type="button" value="+" class="btn btn-info " onclick="edit_addRow('editTable')">
          <input type="button" value="X"class="btn btn-info "  onclick="edit_deleteRow('editTable')">
          <?php } else {?>
			  	<input type="button" value="+" class="btn btn-info "  onclick="addRow('dataTable')">
          <input type="button" value="X" class="btn btn-info " onclick="deleteRow('dataTable')">
          <?php }?></td>
				  </tr>
                   </tbody>
			<?php }?>
		  
</table>
</div>					
			 <input type="hidden" readonly name="final_total" id="final_total" value="" />
                  <!--<p><a class="btn span2" href="javascript:;" onclick="javascript:append_menus();">Add Subitem Line</a></p>	-->	
					
					
		  <input type="submit" name="save" class="btn btn-primary pull-right" value="Save Changes">
 </form>
	
	

	</div>

		

</div>
<script language="javascript">
	var last_row=1;
function addRow(tableID)
{ last_row++;
		var table=document.getElementById(tableID);
		var rowCount=table.rows.length;
		var row=table.insertRow(rowCount);
		
			//alert(last_row);	
	//alert(rowCount+1);
//	alert("we are in addrow" ); 
		var colCount=table.rows[0].cells.length;
		
		//alert(colCount);

for(var i=0;i<colCount;i++)
{
	var newcell= row.insertCell(i);
	newcell.innerHTML=table.rows[0].cells[i].innerHTML;
	
	//alert(newcell.childNodes[0].type);
	switch(newcell.childNodes[0].type)
	{
	
		case"text":newcell.childNodes[0].value="";
		
			var get_data = newcell.childNodes[0].id.split('_');	
			var textbox_name =  get_data[0];
			var textbox_id = get_data[1];
		 
		//alert(rowCount);
		case"text":
			newcell.childNodes[0].id=textbox_name+"_"+(last_row);
			break;
		case"textarea":
			newcell.childNodes[0].value="";
		case"textarea":
			newcell.childNodes[0].id=textbox_name+"_"+(last_row);
			break;
		case"checkbox":
			newcell.childNodes[0].checked=false;
			
			newcell.childNodes[0].id='select_'+(last_row);
			//alert(chekbox_id);
			break;
		case"select-one":
			 get_data = newcell.childNodes[0].id;//.split('_');	
			var dropdown= get_data.split('_');
			var drop_name =  dropdown[0];
			// alert(drop_name);
//			var textbox_name =  get_data[0];
//			var textbox_id = get_data[1];
		
			newcell.childNodes[0].selectedIndex=0;
			newcell.childNodes[0].id=drop_name+"_"+(last_row);
//			alert(newcell.childNodes[0].id);
//		    var get_type = newcell.childNodes[0].selectedIndex.split('_');	
		    
//		    alert("this is the type of select box " +get_type);
//		    var select_name =  get_type[0];
//		var select_id = get_type[1];
	//	alert(select_name);
		
//		case"select-one":newcell.childNodes[0].id=0;
		break;
		}
		
		}
		
		}
		
		
function deleteRow(tableID)
{
			try{
					var table=document.getElementById(tableID);
					var rowCount=table.rows.length;
					var no_of_rows_selected=0;	
					for(var i=0;i<rowCount;i++)
					{
						var row=table.rows[i];
						var chkbox=row.cells[0].childNodes[0];
						if(null!=chkbox&&true==chkbox.checked){
							no_of_rows_selected++;	
							
						}
					}
					if(no_of_rows_selected==rowCount){
						alert("Cannot delete all the rows.");
					
					}else{
						for(var i=0;i<rowCount;i++)
						{
							var row=table.rows[i];
							var chkbox=row.cells[0].childNodes[0];
							if(null!=chkbox&&true==chkbox.checked)
							{
								table.deleteRow(i);
								rowCount--; 
								i--;
							}
						}
						table.rows[0].cells[9].childNodes[0].value=table.rows[0].cells[8].childNodes[0].value;	
						for(i=1;i<rowCount;i++){
							table.rows[i].cells[9].childNodes[0].value= //new value pf total
								parseInt(table.rows[i-1].cells[9].childNodes[0].value) + // value of total in prev row
								parseInt(table.rows[i].cells[8].childNodes[0].value) ;	// value of ampount in current row	
						}
                     
					}
           }
		catch(e)
		{
			alert(e);

		}
}
function edit_addRow(tableID)
{ 
		var table=document.getElementById(tableID);
		var rowCount=table.rows.length;
		var row=table.insertRow(rowCount);
		
			//alert(rowCount);	
	//alert(rowCount+1);
//	alert("we are in addrow" ); 
		var colCount=table.rows[0].cells.length;
		
		///alert(colCount);

for(var i=0;i<colCount;i++)
{
	var newcell= row.insertCell(i);
	newcell.innerHTML=table.rows[0].cells[i].innerHTML;
	// alert(newcell.childNodes[0].type);
	switch(newcell.childNodes[0].type)
	{
	
		case"text":newcell.childNodes[0].value="";
		
			var get_data = newcell.childNodes[0].id.split('_');	
			var textbox_name =  get_data[0];
			var textbox_id = get_data[1];
		 
		//alert(rowCount+1);
		case"text":
			newcell.childNodes[0].id=textbox_name+"_"+(rowCount+1);
			break;
		case"textarea":
			newcell.childNodes[0].value="";
		case"textarea":
			newcell.childNodes[0].id=textbox_name+"_"+(rowCount+1);
			break;
		case"checkbox":
			newcell.childNodes[0].checked=false;
			
			newcell.childNodes[0].id='select_'+(rowCount+1);
			//alert(chekbox_id);
			break;
		
		case"select-one":
			 get_data = newcell.childNodes[0].id;//.split('_');	
			var dropdown= get_data.split('_');
			var drop_name =  dropdown[0];
			// alert(drop_name);
//			var textbox_name =  get_data[0];
//			var textbox_id = get_data[1];
		
			newcell.childNodes[0].selectedIndex=0;
			newcell.childNodes[0].id=drop_name+"_"+(rowCount+1);
//			alert(newcell.childNodes[0].id);
//		    var get_type = newcell.childNodes[0].selectedIndex.split('_');	
		    
//		    alert("this is the type of select box " +get_type);
//		    var select_name =  get_type[0];
//		var select_id = get_type[1];
	//	alert(select_name);
		
//		case"select-one":newcell.childNodes[0].id=0;

		break;
		}
		
		}
		
		}
		
		
function edit_deleteRow(tableID)
{
			try{
					var table=document.getElementById(tableID);
					var rowCount=table.rows.length;
					var no_of_rows_selected=0;	
					for(var i=0;i<rowCount;i++)
					{
						var row=table.rows[i];
						var chkbox=row.cells[0].childNodes[0];
						if(null!=chkbox&&true==chkbox.checked){
							no_of_rows_selected++;	
							
						}
					}
					if(no_of_rows_selected==rowCount){
						alert("Cannot delete all the rows.");
					
					}else{
						for(var i=0;i<rowCount;i++)
						{
							var row=table.rows[i];
							var chkbox=row.cells[0].childNodes[0];
							if(null!=chkbox&&true==chkbox.checked)
							{
								table.deleteRow(i);
								rowCount--; 
								i--;
							}
						}
						table.rows[0].cells[9].childNodes[0].value=table.rows[0].cells[8].childNodes[0].value;	
						for(i=1;i<rowCount;i++){
							table.rows[i].cells[9].childNodes[0].value= //new value pf total
								parseInt(table.rows[i-1].cells[9].childNodes[0].value) + // value of total in prev row
								parseInt(table.rows[i].cells[8].childNodes[0].value) ;	// value of ampount in current row	
						}
                     
					}
           }
		catch(e)
		{
			alert(e);

		}
}
</script>
