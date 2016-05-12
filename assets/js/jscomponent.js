var ajax = createAjax();
function createAjax(){
	try{
		return new XMLHttpRequest();
	}
	catch(e){
		try{
			return new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(e){
			return new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
}
function ajax_post(url,data,success){
	ajax.open("POST",url,true);
	ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	ajax.send(data);
	ajax.onreadystatechange=success;
}
function _(id){
	return document.getElementById(id);
}
function css(id){
	return document.getElementById(id).style;
}