try {
  document.execCommand("BackgroundImageCache", false, true);
} catch(err) {}

function addDOMLoadEvent(f){if(!window.__ADLE){var n=function(){if(arguments.callee.d)return;arguments.callee.d=true;if(window.__ADLET){clearInterval(window.__ADLET);window.__ADLET=null}for(var i=0;i<window.__ADLE.length;i++){window.__ADLE[i]()}window.__ADLE=null};if(document.addEventListener)document.addEventListener("DOMContentLoaded",n,false);/*@cc_on @*//*@if (@_win32)document.write("<scr"+"ipt id=__ie_onload defer src=//0><\/scr"+"ipt>");var s=document.getElementById("__ie_onload");s.onreadystatechange=function(){if(this.readyState=="complete")n()};/*@end @*/if(/WebKit/i.test(navigator.userAgent)){window.__ADLET=setInterval(function(){if(/loaded|complete/.test(document.readyState)){n()}},10)}window.onload=n;window.__ADLE=[]}window.__ADLE.push(f)}


function getElementsByClass(searchClass,node,tag) {
	var classElements = new Array();
	if ( node == null )
		node = document;
	if ( tag == null )
		tag = '*';
	var els = node.getElementsByTagName(tag);
	var elsLen = els.length;
	var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
	for (i = 0, j = 0; i < elsLen; i++) {
		if ( pattern.test(els[i].className) ) {
			classElements[j] = els[i];
			j++;
		}
	}
	return classElements;
}


function fixlayout_ff () {
	var title_wrapper_right =  getElementsByClass('title_wrapper_right',null,null);
	if(!title_wrapper_right.length) {return false}
	for(i=0; i<title_wrapper_right.length; i++) {
		var this_element = title_wrapper_right[i];
		var this_element_parent = title_wrapper_right[i].parentNode;
		this_element.style.display = 'none';
		title_wrapper_right[i].parentNode.removeChild(title_wrapper_right[i]);
		this_element_parent.appendChild(this_element);
		
		this_element.style.display = 'block';
		
	}
}


window.onresize = function () {
	fixlayout_ff ();
}

 function replaceAll(txt, replace, with_this) {
  return txt.replace(new RegExp(replace, 'g'),with_this);
 }

 function autofill(evt)
 {
      var e = window.event || evt; // for trans-browser compatibility
	  var charCode = e.which || e.keyCode;
	 // alert(charCode);
	  
	 // alert(document.getElementById('ftitle').value);
	  var charpos = document.getElementById('ftitle').value.search("[A-Za-z0-9\]");
	  //alert(charpos);
	  if(document.getElementById('ftitle').value=='')
	  {
	    document.getElementById('alias').value='';
	  }
	  else if(document.getElementById('ftitle').value.length > 0 &&  charpos >= 0)
	  {
			  if (charCode == 92 || charCode == 124 || charCode == 39 || charCode == 34 || charCode == 59 || charCode == 58 || charCode == 47 || charCode == 63 || charCode == 46 || charCode == 62 || charCode == 44 || charCode == 60 || charCode == 33 || charCode == 64 || charCode == 35 || charCode == 36 || charCode == 37 || charCode == 94 || charCode == 38 || charCode == 42 || charCode == 40 || charCode == 41 || charCode == 95 || charCode == 45 || charCode == 61 || charCode == 43 || charCode == 16 || charCode == 109){
		  document.getElementById('alias').value=document.getElementById('ftitle').value;
			}
			 else if(charCode == 8)
			{ 
			  document.getElementById('alias').value='';
			  var char = document.getElementById('ftitle').value.toLowerCase();
			  var newchar = replaceAll(char," ","-");
			  document.getElementById('alias').value+=newchar;
			}
			else if(charCode == 32)
			{ 
			  var char = String.fromCharCode(evt.which);
			  var newchar = char.replace(char,"-");
			  document.getElementById('alias').value+=newchar;
			}
			else{
			        document.getElementById('alias').value = document.getElementById('alias').value.replace(".html","");
				    document.getElementById('alias').value+=String.fromCharCode(evt.which).toLowerCase();
				 }
			 
	  }		 
	  
 }
 
 function adding()
 {
    if(document.getElementById('alias').value!='')
	{
	        document.getElementById('alias').value=document.getElementById('alias').value.replace(".html",""); 
			document.getElementById('alias').value+='.html';
	}		
 }





 