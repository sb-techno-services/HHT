// JavaScript Document
function getcat(val, rep_id)
{ 
	    $.ajax({  
				 type: "GET",
				 url: "ajax/getcat.php",
			  	 data: "catid="+val,
			 	 success: function(msg)
			 	 { 
					  document.getElementById(rep_id).innerHTML=msg;
					  //alert(msg);
			 	 } 
			 });
  		 
}
	

function validate()
{
	if(document.google_products.maincat.value=='')
	{
	 alert("Please select main category");
	 document.google_products.maincat.focus();
	 return false;
	}
	if(document.google_products.subcat.value=='')
	{
	 alert("Please select subcategory");
	 document.google_products.subcat.focus();
	 return false;
	}
	
 return true;	
}


function checkval(chkname1)
{
	var allchkbox=document.forms['gproducts'].elements[chkname1];
	var countallchkbox = allchkbox.length;
	for(var i = 0; i < countallchkbox; i++)
		{
			if(allchkbox[i].checked == 0)
			document.gproducts.selall.checked=0;
		}
}	
function checkstate(chkname)
{
   if(document.gproducts.selall.checked==1)
	{
		checkall("gproducts",chkname,1);
		
	}
	if(document.gproducts.selall.checked==0)
	{
		checkall("gproducts",chkname,0);
	}
}	
	
function checkall(FormName, FieldName, CheckValue)
{
  if(!document.forms[FormName])
		return;
	var objCheckBoxes = document.forms[FormName].elements[FieldName];
	if(!objCheckBoxes)
		return;
	var countCheckBoxes = objCheckBoxes.length;
	if(!countCheckBoxes)
		objCheckBoxes.checked = CheckValue;
	else
		// set the check value for all check boxes
		for(var i = 0; i < countCheckBoxes; i++)
			objCheckBoxes[i].checked = CheckValue;
}	

function validate_delete()
{
if (confirm("Are you sure you want to delete")) 
{ 	
 var privs = document.getElementsByName("prod[]"); 
 var privschecked = false; 
 for (var i = 0; i < privs.length; i++) { 
  if (privs[i].checked) { 
   privschecked = true; 
   
  } 
 } 
	if (!privschecked) { 
	  alert('Please Check atleast 1 checkbox'); 
	  return false; 
	}	
 }
 else
 {
	 return false;
 }
}


