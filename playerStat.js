

var		arca=8;//學歷
var		body=8;//身體能力
var		think=7;//思考力
var		nowpower=30;//體力
var		maxpower=30;//最大體
var		soci=12;////社交
var		frien=0;//朋友
var		cococo=50;//前
var		boing=1;//身材


var		item_bread=0;//炒麵麵包
var		stat =	document.getElementById("statname");//設定狀態


var		playerstat= ["活著","活著(黑化)","亡矣"];
				//狀態 0      1          2

var state0 = document.getElementById("arcade"),
	state1 = document.getElementById("body"),
	state2 = document.getElementById("thinck"),
	state3 = document.getElementById("power"),	
	state5 = document.getElementById("social"),
	state6 = document.getElementById("friends"),
	state7 = document.getElementById("coco"),
	state8 = document.getElementById("boingboing");
	//必須依各個設定
	
	
	
	startallset();
function startallset()
{	
		if( state0 != null)
		state0.innerHTML = arca;
		if(state1 != null)
		state1.innerHTML = body;
		if(state2 != null)
		state2.innerHTML = think;
		if(state3 != null)
		state3.innerHTML = nowpower + "/" + maxpower;
		if(state5 != null)
		state5.innerHTML = soci;
		if(state6 != null)
		state6.innerHTML = frien;
		if(state7 != null)
		state7.innerHTML = cococo;
		if(state8 != null)
		state8.innerHTML = boing;
		if(stat != null)
		stat.innerHTML = playerstat[0];//一開始活者?
}//一開始設定
