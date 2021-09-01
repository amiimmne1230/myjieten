var actionload = document.getElementById("actionload");
actionload.style.width = "0%";
var a = 0 ;
function doload(ass)
{	
	a += ass;
	if(a >= 100)
		a = 100;	
	actionload.style.width = (a +'%').toString();	
}
function overload()
{	a = 0 ;
	actionload.style.width = "0%";
}