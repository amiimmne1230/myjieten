
var searchhtml = document.getElementById("actionwork");
//這個是尋找 html 的<> 名稱 

var needcd = 0;
//行動CD

//Math.round(Math.max(1, Math.random()*5))
//亂數設定
var intervalID;
//計時器

var bool_checkinaction = false;
//BOOL 確認是否在行動中

function iii(m,x)
{
	return Math.round(Math.max(m, Math.random()*x));
}
function disallbutppn(ass,ass2)
{
	bool_checkinaction = true;
	searchbutton0.disabled = true;
	searchbutton1.disabled = true;
	searchbutton2.disabled = true;
	searchbutton3.disabled = true;
	searchbutton4.disabled = true;
	searchbutton5.disabled = true;


	searchhtml.innerHTML = ass;	
	var aasdasd = 100/needcd;
	intervalID = setInterval(function()
	{//needcd -= 999999;//測試
		needcd--; //正常		
		doload(aasdasd);
		if(needcd <= 0)
		{
			if(ass2 == 0)
				{clearInterval(intervalID);
					var a = iii(1,3);
					searchhtml.innerHTML = '自習完成 得到 ' + a + ' 點學力  體力消耗 ' +  2 + ' 點';				
					arca+=a;
					state0.innerHTML = arca;
					powerevent(-2);
				}
			if(ass2 == 1)
				{clearInterval(intervalID);
					var a = iii(1,6);
					searchhtml.innerHTML = '鍛鍊完成 得到 ' + a + ' 點身體能力  體力消耗 ' +  3 + ' 點';
					body+=a;
					state1.innerHTML = body;
					powerevent(-3);
				}
			if(ass2 == 2)
				{clearInterval(intervalID);
					searchhtml.innerHTML = '休息完了 體力恢復 ' + 10 + ' 點';	
					powerevent(10);	
				}
				if(ass2 == 3)
				{
					clearInterval(intervalID);
					var a = iii(0,15);
					var b = iii(0,4);
					searchhtml.innerHTML = '下課了 得到 ' + a + ' 點學力, ' + b + ' 點思考力 體力消耗 ' +  8 + ' 點';
					arca+=a;
					think+=b;					
					state0.innerHTML = arca;
					state2.innerHTML = think;
					powerevent(-8);
				}
				if(ass2 == 4)
				{	
					clearInterval(intervalID);
					var aa =0;
					var asd = iii(3,6);
					if(iii(0,22) == 0)
						aa++;
					searchhtml.innerHTML = '交流完成 交到 ' + aa + ' 位朋友  體力消耗 ' + asd  + ' 點';					
					frien+= aa;
					state6.innerHTML = frien;
					powerevent(-asd);
				}
				if(ass2 == 5)
				{
					clearInterval(intervalID);
					searchhtml.innerHTML = '買到炒麵麵包了   Pr ' + -20 + ' 點  體力消耗 ' + 2 +" 點";		
					item_bread++;
					powerevent(-2);
					prevent(-20);
				}
				
					timeoutID = setTimeout(Doneactioneff, 3000);
		}
		

	},1000);
}
function powerevent(ass)
{
	nowpower+= ass;
	if(nowpower > maxpower)
		nowpower = maxpower;
	if(nowpower < 0)
		nowpower = 0;
	state3.innerHTML = nowpower + "/" + maxpower;
}
function prevent(ass)
{
	cococo+= ass;	
	state7.innerHTML = cococo;
}

function Doneactioneff() 
{	
	overload();
	bool_checkinaction = false;
	clearTimeout(timeoutID);
    searchhtml.innerHTML = '...';
	searchbutton0.disabled = false;
	searchbutton1.disabled = false;
	searchbutton2.disabled = false;
	searchbutton3.disabled = false;
	searchbutton4.disabled = false;
	searchbutton5.disabled = false;
}
//按鈕切換


function clearall(ass,ass2)
{
	searcharea0.disabled = false;
	searcharea1.disabled = false;
	searcharea2.disabled = false;
	a0.style.display = "none";
	a1.style.display = "none";
	a2.style.display = "none";
	ass.disabled = true;
	ass2.style.display = "";
}
var a0 = document.getElementById("actiondiv0");
var a1 = document.getElementById("actiondiv1");
var a2 = document.getElementById("actiondiv2");


var searcharea0 = document.getElementById("area0");
searcharea0.addEventListener("click",function()
{	
	clearall(searcharea0,a0);
});
//地點 宿舍

var searcharea1 = document.getElementById("area1");
searcharea1.addEventListener("click",function()
{	clearall(searcharea1,a1);
});
//地點 宿舍

var searcharea2 = document.getElementById("area2");
searcharea2.addEventListener("click",function()
{	
clearall(searcharea2,a2);
});
//地點 宿舍









var searchbutton0 = document.getElementById("button0");
searchbutton0.addEventListener("click",function()
{	if(boolhavepow(2))
	{
	needcd = 3;
	disallbutppn('你把之前上課的內容再溫習一次',0);
	}
	else
	actionfail();
});
//自習


var searchbutton1 = document.getElementById("button1");
searchbutton1.addEventListener("click",function()
{	if(boolhavepow(3))
	{
	needcd = 6;
	disallbutppn('你進行一段間歇體能訓練',1);
	}else
	actionfail();
});
//自我鍛鍊


var searchbutton2 = document.getElementById("button2");
searchbutton2.addEventListener("click",function()
{	
	needcd = 177;
	disallbutppn('你小歇一會',2);	
});
//休息



var searchbutton3 = document.getElementById("button10");
searchbutton3.addEventListener("click",function()
{	
	if(boolhavepow(8))
	{
		needcd = 37;
		disallbutppn('1年D班 上課中...',3);
	}
	else
	actionfail();
});
//上課



var searchbutton4 = document.getElementById("button11");
searchbutton4.addEventListener("click",function()
{	
	if(boolhavepow(3))
	{
		needcd = 17;
		disallbutppn('你與其他同學打好關係',4);
	}
	else
	actionfail();
});
//交朋友



var searchbutton5 = document.getElementById("button20");
searchbutton5.addEventListener("click",function()
{	
	if(boolhavepr(20) && boolhavepow(2))
	{
		needcd = iii(3,27);
		disallbutppn('尋找炒麵麵包中',5);
	}
	else
	actionfail();
});
//買超面面標

function actionfail()
{
	searchhtml.innerHTML = '你沒有足夠的  Pr 或 體力'
		timeoutID = setTimeout(Doneactioneff, 1500);
}
function boolhavepr(ass)
{
	if(cococo < ass)
		return false;
	else
		return true;
}//有足夠的PR?
function boolhavepow(ass)
{
	if(nowpower < ass)
		return false;
	else
		return true;
}//有足夠的體力?

