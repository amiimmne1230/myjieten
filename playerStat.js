﻿var		arca=8;//學歷
var		body=8;//身體能力
var		think=7;//思考力
var		nowpower=30;//體力
var		maxpower=30;//最大體
var		soci=12;////團體合作
var		frien=0;//朋友
var		cococo=50;//PR
var		hp=40;//生命
var		maxhp=40;//最大生命




var	stat =	document.getElementById("statname");
//玩家狀態 文字
var	playerstat= ["活著","活著(黑化)","亡矣"];
				//狀態 0      1          2




var state0 = document.getElementById("arcade"),
	state1 = document.getElementById("body"),
	state2 = document.getElementById("thinck"),
	state3 = document.getElementById("power"),	
	state5 = document.getElementById("social"),
	state6 = document.getElementById("friends"),
	state7 = document.getElementById("coco"),
	state8 = document.getElementById("hp")

	
	;
	//必須依各個設定
	
	
	
	
	



startallset();//一打開會先執行這個


function startallset()
{	
		if(state0 != null)
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
			state8.innerHTML = hp +"/" + maxhp;




		if(stat != null)
			stat.innerHTML = playerstat[0];//一開始活者?

			/*

		if(item00 != null)
			item00.innerHTML = item[0];

		if(item01 != null)
			item01.innerHTML = item[1];

		if(item02 != null)
			item02.innerHTML = item[2];

		if(item03 != null)
			item03.innerHTML = item[3];
			*/


}//一開始設定







