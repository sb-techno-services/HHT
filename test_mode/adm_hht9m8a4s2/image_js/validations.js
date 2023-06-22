// JavaScript Document

function validation()
{
	var frm=document.edit_freelancer;
	if(frm.email.value=="")
	{
		alert("Please Enter Email Id");
		frm.email.focus();
		return false;
	}
	if(frm.email.value!="")
	{
		var email =frm.email.value ;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
    if (!filter.test(email)) {
		alert("Please Enter Valid Email Id");
		frm.email.focus();
		return false;
		}	
	}
	if(frm.password.value=="")
	{
		alert("Please Enter Password");
		frm.password.focus();
		return false;
	}
	if(frm.Uname.value=="")
	{
		alert("Please Enter Name");
		frm.Uname.focus();
		return false;
	}
	if(frm.address.value=="")
	{
		alert("Please Enter Address");
		frm.address.focus();
		return false;
	}
	if(frm.city.value=="")
	{
		alert("Please Enter City");
		frm.city.focus();
		return false;
	}
	if(frm.Country.value=="")
	{
		alert("Please Select Country");
		frm.Country.focus();
		return false;
	}
	if(frm.state.value=="")
	{
		alert("Please Select State");
		frm.state.focus();
		return false;
	}
	if(frm.phone_number.value=="")
	{
		alert("Please Enter Phone Number");
		frm.phone_number.focus();
		return false;
	}

	if(frm.bank_account.value=="")
	{
		alert("Please Enter Bank Account");
		frm.bank_account.focus();
		return false;
	}

	if(frm.state.value=="")
	{
		alert("Please Select State");
		frm.state.focus();
		return false;
	}
	if(frm.IFSC_code.value=="")
	{
		alert("Please Enter IFSC Code");
		frm.IFSC_code.focus();
		return false;
	}
	if(frm.bank_name.value=="")
	{
		alert("Please Enter Bank Name");
		frm.bank_name.focus();
		return false;
	}
	

}

function get_state()
{
	var Country_id = $('select[name=Country]').val()
	$.ajax({  
			 type: "GET",
			 url: "tmpl/ajax.php",
			 data: "conty_id="+ Country_id,
			 success: function(msg)
			 {
				 document.getElementById('response').innerHTML = msg;
			 } 
		 });
}

function sub_cat()
{
	var Country_id = $('select[name=Category]').val()
	$.ajax({  
			 type: "GET",
			 url: "tmpl/ajax.php",
			 data: "cat_id="+ Country_id,
			 success: function(msg)
			 {
				 document.getElementById('sub_response').innerHTML = msg;
			 } 
		 });
}

function sub_val()
{
	var Country_id = $('select[name=sub_Category]').val()
	$.ajax({  
			 type: "GET",
			 url: "tmpl/ajax.php",
			 data: "sub_cat_id="+ Country_id,
			 success: function(msg)
			 {
				 document.getElementById('sub_sub_response').innerHTML = msg;
			 } 
		 });
}

function sub_sub_val()
{
	var Country_id = $('select[name=sub__sub_Category]').val()
	$.ajax({  
			 type: "GET",
			 url: "tmpl/ajax.php",
			 data: "sub_sub_cat_id="+ Country_id,
			 success: function(msg)
			 {
				 document.getElementById('sub_sub_sub_response').innerHTML = msg;
			 } 
		 });
}
function validate()
{
	var form=document.add_topic;
	if(form.Tname.value=="" && form.topics_file.value=="")
	{
		alert("Please Enter Topic Or Upload Csv File.");
		form.Tname.focus();
		return false;
	}
	if(form.topics_file.value!="")
	{
		var file1 =form.topics_file.value;
		var File2= file1.split('.');
		var Fl=File2.pop();
		if(Fl!='csv')
		{
			alert("Please Upload only Csv file.");
			form.topics_file.focus();
			return false;
		}
	}
	if(form.Category.value=="")
	{
		alert("Please Select Main Category");
		form.Category.focus();
		return false;
	}
/*	if(form.sub_Category.value=="")
	{
		alert("Please Select Sub Category");
		form.sub_Category.focus();
		return false;
	}
	if(form.sub__sub_Category.value=="")
	{
		alert("Please Select Sub Category");
		form.sub__sub_Category.focus();
		return false;
	}
	if(form.sub__sub_sub_Category.value=="")
	{
		alert("Please Select Sub Sub Category");
		form.sub__sub_sub_Category.focus();
		return false;
	}
*/	if(form.keywords.value=="")
	{
		alert("Please Enter keywords");
		form.keywords.focus();
		return false;
	}
	if(form.word_count.value=="")
	{
		alert("Please Enter Word Count");
		form.word_count.focus();
		return false;
	}
	if(isNaN(form.word_count.value))
	{
		alert("Please Enter Numbers(0-9) only");
		form.word_count.focus();
		return false;
	}
	
}
function validated()
{
	var frm=document.add_payment;
	if(frm.amount.value=='')
	{
		alert("Please Enter Amount");
		frm.amount.focus();
		return false
	}
	if(isNaN(frm.amount.value))
	{
		alert("Please Enter Numbers(0 -9) Only");
		frm.amount.focus();
		return false
	}
}

function validater()
{
	var form=document.edit_articles;
	if(form.Option[0].checked==false && form.Option[1].checked==false)
	{
		alert("Please Select Option");
		form.Option[0].focus();
		return false;
	}
	if(form.Option[1].value=='Publish' && form.Option[0].checked==false)
	{
		if(form.ftitle.value=="")
		{
			alert("Please Enter Title");
			form.ftitle.focus();
			return false;
		}
		if(form.falias.value=="")
		{
			alert("Please Enter Url");
			form.falias.focus();
			return false;
		}
		if(form.Category.value=="")
		{
			alert("Please Select Category");
			form.Category.focus();
			return false;
		}
		if(form.tags.value=="")
		{
			alert("Please Enter Tags");
			form.tags.focus();
			return false;
		}
		if(form.metatitle.value=="")
		{
			alert("Please Enter Page title");
			form.metatitle.focus();
			return false;
		}
		if(form.metakey.value=="")
		{
			alert("Please Enter Meata Keywords");
			form.metakey.focus();
			return false;
		}
		if(form.metadesc.value=="")
		{
			alert("Please Enter Meata Description");
			form.metadesc.focus();
			return false;
		}
		if(form.metadesc.value=="")
		{
			alert("Please Enter Meata Description");
			form.metadesc.focus();
			return false;
		}
		if(form.design.value=="")
		{
			alert("Please Select Page design");
			form.design.focus();
			return false;
		}
	}
	else
	{
		if(form.falias.value=="")
		{
			alert("Please Enter Url");
			form.falias.focus();
			return false;
		}
	}
}