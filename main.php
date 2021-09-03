<?php
	//啟動 session
	session_start();
?>
<!-- PHP 可以先定義變數 -->

<!DOCTYPE html> <!--這是 文件類型 (DOCTYPE)是 html-->
<html lang="zh-Hant-TW">

<head> <!-- 類似所有設定中心-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>我的櫛田</title>
    <link rel="shortcut icon" href="/icc.PNG"/>
    <style data-styled="active" data-styled-version="1.0.0"></style>

    <style>
    h3
    {
        display:block;
        color:white;
        font-size: 21px;
        margin-block-start: 8px;
        margin-block-end: 16px;
        margin-inline-start: 2px;
        margin-inline-end: 2px;
    }
     /* h3  DIV區塊的標語 */

    .alldivuse
    {    
        margin-bottom:1%;
        padding:1.618%;
        border: 1px solid white;
        font-weight:bold;
        font-size:18px;
        display:block;             
        font-family: 'Noto Sans TC', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    }
     /* 所有DIV 區塊 */

    .itemspan
    {    
        margin-bottom:1%;
        padding:1.618%;
        font-weight:bold;
        font-size:18px;
        display:block;             
        font-family: 'Noto Sans TC', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    }
     /* span 區塊 */

    .mainbut
    {
        border:none;    
        padding: 9px 14px;
        border-radius:6px;
        transition-duration: 0.45s;
        background-color:#F2F2F2;

        font-weight:bold;
        font-size:10px;
    }
     /* 按鈕 */

    .mainbut:hover
    {
        background-color:#38C786;
        padding: 9px 14px;
        background-color:#38C786;
        border-radius:6px;

        font-weight:bold;
        font-size:10px;
    }
    /* 按鈕碰撞 */

    .mainbut:disabled
    {
        padding: 9px 14px;
        border-radius:6px;
        background-color:#E0E0E0;

        font-weight:bold;
        font-size:10px;
    }
    /* 按鈕禁用 */

    #table1
    {   
        border-collapse: separate;
        box-sizing: border-box;
        text-indent: initial;        
        border-spacing: 0px;  
        font-size:16px;
        width:100%;
        display:table;
        vertical-align: middle;
    }
    /* 表格 */

    .th
    {  
        border-collapse: separate;
        border:0.5px solid gray;
        font-size:14px;
        background-color:#272727; 
        padding:3px 7px;
        text-align:left;
        min-width:73px;       
        color:white;
    }
    /* 表格 th */

    .td
    {
        border-collapse: separate;
        border:0.5px solid gray;
        font-size:16px;
        background-color:#FCFCFC;
        padding:3px 5px;
        text-align:left;
        width:60%;
        color:black;
    }
    /* 表格 td */

    .tr
    {
        height:10%;    
    }
    /* 表格 tr */
    
    .tditem
    {    
        border-collapse: separate;
        border:0.5px solid gray;
        font-size:12px;
        background-color:#FCFCFC;
        padding:3px 5px;
        text-align:left;
        max-width:25%;
        color:black;
    }
    /* 物品欄的表格 td */
    .thitem
    {  
        border-collapse: separate;
        border:0.5px solid gray;
        font-size:14px;
        background-color:#272727; 
        padding:3px 7px;
        text-align:left;
        min-width:50px;       
        color:white;
    }
    /* 表格 th */
    
    </style>
</head>
<body style="background-color:#FF7841;"> 
      <?php
			//使用 isset()方法，判別有沒有此變數可以使用，以及為已經登入
		    if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE)
            {
                $playername = "";   
                $arca = 8;//到時候要連SQL
                $body = 8;
                $think = 6;
                $social = 15;
                $friend = 0;
                $pr = 50;
                $pow = 30;
                $maxpow = 30;
                $hp = 40;
                $maxhp = 40;
                $item = array(0,0,0,0); 
                //物品陣列 看JS
                
                /* 玩家資料 在這裡設定*/
                //$playername = ;
            }	 
			else
			{	//使用php header 來轉址到後台
				header('Location: index.php');		
            }
	  ?>


<div style="
        margin: 12px auto;
        max-width: 760px;
        min-width: 400px;
        overflow: auto;
        width: 92%;">
<!--完美-->



<!--目錄的區塊 -->
<div class="alldivuse">
    <h3 >目錄</h3>
    <button class="mainbut" onclick="goindex(0)"> 櫛田桔梗 </button>
    <button class="mainbut" onclick="goindex(1); " > 物品欄 </button>
    <button class="mainbut" onclick="" > 學生 </button>
    <button class="mainbut" onclick=""> 聯絡人與任務 </button>
    <button class="mainbut" onclick=""> 期中考 </button>
    <button class="mainbut" onclick="" > 特殊考試 </button>
    <button class="mainbut" onclick="location.href='ou.php'" > 登出 </button>
</div>
<!--目錄的區塊 -->






<!--通知的區塊 -->
<div class="alldivuse">
    <h3 >通知</h3>
</div>
<!--通知的區塊 -->





<!-- 目錄 櫛田 -->
<div id="goindex0" style="display:;">
    <div class="alldivuse">
    <h3 >狀態  <b id="statname" style="color:lightgreen;"><script src="playerStat.js"></script></b></h3>
    </div>
    <div class="alldivuse">
    <table id="table1">
    <tr class="tr">
    <th class="th" colspan="4" style="background-color:#DBDBDB; color:black;">高級育成高級中學學生資料</th>   
    </tr>
    <tr class="tr">
    <th class="th">玩家</th>
    <td  class="td"><?php echo $playername ?></td>
    <td  rowspan="9" colspan="2" style="padding:0%;">
    <div style="border:4px solid gray;width:100;">
    <img style="width:100%;" id="imgstat" src="indexthing/you.jpg"/>  
    </div>
    </td>
    </tr>
    <tr class="tr">
    <th class="th">班級</th>
    <td  class="td">1年D班</td>
    </tr>
    <tr class="tr">
    <th class="th">學號</th>
    <td  class="td">S01T004721</td>    
    </tr>
    <tr class="tr">
    <th class="th">社團</th>
    <td  class="td">無</td>
    </tr>
    <tr class="tr">
    <th class="th" style="background:green">Pr</th>
    <td  class="td" id="coco" style="background:lightgreen"><script src="playerStat.js"></script></td>    
    </tr>
    <tr class="tr">
    <th class="th" style="background-color:gray" colspan="2"></th>
    </tr>
    <tr class="tr">    
    <th class="th">學力</th>
    <td class="td" id="arcade"><script src="playerStat.js"></script></td>
    </tr>
    <tr class="tr">
    <th class="th">身體能力</th>
    <td class="td" id="body"><script src="playerStat.js"></script></td>  
    </tr>
    <tr class="tr">
    <th class="th">思考力</th>
    <td class="td" id="thinck"><script src="playerStat.js"></script></td>   
    </tr>
    <tr class="tr">
    <th class="th">團體合作力</td>
    <td class="td" id="social"><script src="playerStat.js"></script></td>
    <th class="th">生命</th>
    <td class="td" id="hp"><script src="playerStat.js"></script></td>
    </tr>
    <tr class="tr">
    <th class="th">朋友</th>
    <td class="td" id="friends"><script src="playerStat.js"></script></td>
    <th class="th">體力</th>
    <td class="td" id="power"><?php echo $pow  ?></script></td>
    </tr>
    </table>
    </div>






    <div class="alldivuse">
    <h3 >地點</h3>
    <button class="mainbut" id="area0" disabled> 宿舍 </button>
    <button class="mainbut" id="area1" > 教室 </button>
    <button class="mainbut" id="area2" > 食堂 </button>
    <!--<button id="button" onclick=""> 工具間 </button>-->
    </div>






    <div class="alldivuse">
    <h3 >行動</h3>
    <div id="actiondiv0" style="display:">
    <button class="mainbut" id="button0"> 自習 </button>
    <button class="mainbut" id="button1"> 自我鍛鍊 </button>
    <button class="mainbut" id="button2"> 睡覺 </button>
    </div><!--宿舍 -->

    <div id="actiondiv1" style="display:none">
    <button class="mainbut" id="button10"> 上課 </button>
    <button class="mainbut" id="button11"> 友好交流 </button>
    </div><!--教室 -->

    <div id="actiondiv2" style="display:none">
    <button class="mainbut" id="button20"> 買炒麵麵包 ( -20Pr ) </button>
    </div><!--食堂 -->
    </div>




    <div class="alldivuse">
    <p style="color:white;"><b id="actionwork">   
    <script src="action.js"></script>
    ...
    </b></p>
    <div style="border: 1px solid white;">
    <div id="actionload" style="background-color:white; width:0%; height:14px; transition-duration: 1s;">
    <script src="actionload.js"></script>
    </div>
    </div>
    </div>
</div>
<!-- 目錄 櫛田 -->







<!-- 目錄 物品 -->
<div id="goindex1" style="display:none; ">
    <div class="alldivuse">
    <h3 >操作 - <script></script></h3>
    <script></script>
    <button id="" class="mainbut" onclick="" disabled>使用</button>
    </div>




    <div class="alldivuse">
    <h3 >物品欄</h3>
    <table id="table1">
    <tr class="tr">
    <th class="thitem">飲食</th>
    <th class="thitem">學習</th>
    <th class="thitem">暗器</th>
    <th class="thitem">任務</th>
    </tr>

    <tr class="tr">
    <td><button class="mainbut" onclick="">炒麵麵包 X <?php echo $item[0]; ?></button></td>
    <td><button class="mainbut" onclick="">歷年考試卷 X <?php echo $item[1]; ?></button></td>
    <td><button class="mainbut" onclick="">圓規 X <?php echo $item[2]; ?></button></td>
    <td><button class="mainbut" onclick="">綾小路的聯絡方式 X <?php echo $item[3]; ?></button></td>
    </tr>
    
    </table>
    


    </div>
</div>
<!-- 目錄 物品 -->























<!-- 本站說明 -->
<div style="
    padding:1%;
    text-align:center;
    font-weight:bold;
    font-size:12px;
    color:white;
    font-family: 'Noto Sans TC', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    ">    
    am 製作 版本 v1.0.0
    <p>
    此角色來自:「<a href="https://www.youtube.com/watch?v=UJn5rSaMMXA&list=PL12UaAf_xzfqaKn8JdnUc9WbNeapHHbpk" target="_blank">歡迎來到實力至上主義教室</a>」 作品，本站內容涉及該作品些許劇透，請斟酌閱覽。
    </p>
</div>
<!-- 本站說明 -->
</div><!-- 總DIV 的縮排 -->
</body>
</html>