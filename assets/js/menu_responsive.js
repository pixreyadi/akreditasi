var tResponsive;
var tMenuPosition;
function responsive(){
	if(window.matchMedia("screen and (max-width:800px)").matches){
		css("sidebar-menu").display="none";
		css("content").paddingLeft="0px";
	}
	else{
		css("sidebar-menu").display="inline-block";
		css("content").paddingLeft="230px";
	}
	tResponsive = setTimeout("responsive()",100);
}
responsive();
function menuPosition(){
	if(window.matchMedia("screen and (max-width:800px)").matches){
		if(css("sidebar-menu").display=="none"){
			css("sidebar-menu").paddingLeft="0px";
		}
		else{
			css("sidebar-menu").position="absolute";
			css("content").paddingLeft="0px";
		}
	}
	else{
		if(css("sidebar-menu").display=="none"){
			css("sidebar-menu").paddingLeft="-230px";
			css("content").paddingLeft="0px";
		}
		else{
			css("sidebar-menu").paddingLeft="0px";
			css("content").paddingLeft="230px";
		}
	}
	tMenuPosition = setTimeout("menuPosition()",100);
}
menuPosition();
function hideMenu(){
	if(css("sidebar-menu").display=="none"){
		css("sidebar-menu").display="inline-block";
		css("content").paddingLeft="230px";
	}
	else if(css("sidebar-menu").display=="inline-block"){
		css("sidebar-menu").display="none";
		css("content").paddingLeft="0px";
	}
	else{
		css("sidebar-menu").display="none";
		css("content").paddingLeft="0px";
	}
	clearTimeout(tResponsive);
}
