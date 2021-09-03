<?php
	//啟動 session
	session_start();

?>

<!DOCTYPE html> <!--這是 文件類型 (DOCTYPE)是 html-->
<html lang="zh-Hant-TW">

<head> <!-- 類似所有設定中心-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>我的櫛田</title>
    <link rel="shortcut icon" href="/icc.PNG"/>
    <style data-styled="active" data-styled-version="1.0.0"></style>


    <style>
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

    </style>

</head>
<body style="background-color:#FF7841;"> 
<div style="
        margin: 12px auto;
        max-width: 760px;
        min-width: 400px;
        overflow: auto;
        width: 92%;">
<!--完美-->



<!--註冊的區塊 -->
<div class="alldivuse">
   <?php
			//使用 isset()方法，判別有沒有此變數可以使用，以及為已經登入
			if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE):
			//使用php header 來轉址到後台
			header('Location:main.php');

			else:
		?>
		<form method="post" action="checkUser.php">
			<?php
				if(isset($_GET['msg'])){
					echo "<p class='error'>{$_GET['msg']}</p>";
				}
			?>
			<div>
			<h3>遊戲名稱：</h3>
            <p/>
            <input 
            onkeyup="this.value=this.value.replace(/[^\a-\z\A-\Z0-9\u4E00-\u9FA5]/g,'');"
            type="text" name="username" style="width:90%; height:20px">
            <p/>
			<h3>密碼：</h3>
            <p/>
            <input 
            onkeyup="this.value=this.value.replace(/[^\a-\z\A-\Z0-9]/g,'');"
            type="password" name="password" style="width:90%; height:20px">
			</div>
			<button class="mainbut"> 登入 </button>
		</form>
		<?php endif;?>
</div>
<!--註冊的區塊 -->















</div>
</html>
