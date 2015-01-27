function formValidate(form_id){
	var formElements = document.getElementById(form_id).elements;
	var alertText = 'The highlighted fields need to be valid before you can proceed.';
	var j = 0;
	var data = new Array();
	var rIndex = 0;
	var rName;
	var rSkip = new Array();
	var skip;
	var idLength;
	var length;
	for(var i = 0; i < formElements.length; i++) {
		skip = false;
		if(formElements[i].className == 'is_required') {
			formElements[i].style.backgroundColor = '#FFFFFF';
			formElements[i].style.borderWidth = '1px';
			formElements[i].style.color = "#000000";
			if(formElements[i].value == "" || formElements[i].value == null || formElements[i].value == "0")	{
				formElements[i].style.borderWidth = '1px';
				formElements[i].style.backgroundColor = '#FFD1DD';
				formElements[i].style.color = "#000000";
				j = j + 1;
			}
			if(formElements[i].id == "phone"){
				if(validatePhoneNumber(formElements[i].value) == false){
					formElements[i].style.borderWidth = '1px';
					formElements[i].style.backgroundColor = '#FFD1DD';
					formElements[i].style.color = "#000000";
					j = j + 1;
				}
			}
			if(formElements[i].id == "email"){
				if(emailCheck(formElements[i].value) == false){
					formElements[i].style.borderWidth = '1px';
					formElements[i].style.backgroundColor = '#FFD1DD';
					formElements[i].style.color = "#000000";
					j = j + 1;
				}
			}
		}
	}
	if(j != 0) {
		alert(alertText);
		return false;
	} else {
		return true;
	}
}
function validatePhoneNumber(elementValue){  
	var phoneNumberPattern = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;  
	return phoneNumberPattern.test(elementValue);  
}

function emailCheck(str) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(str);			
}

function flashCheck(){
	var hasFlash = false;
	try {
		var fo = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');
		if(fo){
			hasFlash = true;
		}
	}catch(e){
		if(navigator.mimeTypes ["application/x-shockwave-flash"] != undefined){
			hasFlash = true;
		}
	}
	
	return hasFlash;
}

function ajaxView(n,f,v){
	var ajaxRequest;
	if(window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		ajaxRequest=new XMLHttpRequest();
	}
	else{// code for IE6, IE5
		ajaxRequest=new ActiveXObject("Microsoft.XMLHTTP");
	}
	ajaxRequest.onreadystatechange=function(){
		if(ajaxRequest.readyState==4 && ajaxRequest.status==200){
			result = ajaxRequest.responseText;
			parsed_result = parseScript(result);
			document.getElementById(parsed_result.div).innerHTML = parsed_result.source;
		}
	}
	ajaxRequest.open("GET","/view.php?n="+n+"&f="+f+"&v="+v+"&time="+(new Date).getTime(),true);
	ajaxRequest.send();
}

function parseScript(_source) {
	var source = _source;
	var scripts = new Array();
	
	while(source.indexOf("<script") > -1 || source.indexOf("</script") > -1) {
		var s = source.indexOf("<script");
		var s_e = source.indexOf(">", s);
		var e = source.indexOf("</script", s);
		var e_e = source.indexOf(">", e);
		
		scripts.push(source.substring(s_e+1, e));
		source = source.substring(0, s) + source.substring(e_e+1);
	}
	
	for(var i=0; i<scripts.length; i++) {
		try {
			eval(scripts[i]);
			var div = div;
		}
		catch(ex) {
		}
	}
	
	return {source: source, div: div};
}