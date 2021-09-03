
<?php
	//啟動 session
	session_start();
	//假設的有效會員帳號
	
	$link = mysqli_connect("localhost", "root", "as2243350", "myjieten");
	if (mysqli_connect_errno())
	{
		//有錯誤就代表連線失敗
		echo '無法連線資料庫 :<br/>' . mysqli_connect_errno();
	}
	else
	{
		//設定連線編碼為UTF-8
		mysqli_query($link, "SET NAMES utf8");
		
	}		
	
	$sql = "SELECT * FROM `playerdata`";
	$result = mysqli_query($link, $sql);
	$datas = array();
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			$datas[]= $row;			
			//全部玩家DATA資料抓到  $datas[]
		}
	}	


	function random_color($length = 6) {
	    $characters = '0123456789ABCDEF';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}


	/*
	foreach($datas as $asd)						
		echo $asd['playername'] . "*" . $asd['password'] . "@@@";	
	*/



	
	if(!empty($datas))//資料庫不空
	{
		//使用 isset 判別有沒有此變數可以使用
		if(isset($_POST['username']) && isset($_POST['password']))
		{	
			foreach($datas as $asd)	
			{		
				if($_POST['username'] == $asd['playername'] && $_POST['password'] == $asd['password'])
				{
					//如果密碼一樣，以及帳號一樣，那就代表正確，所以顯示登入成功
					//將 session 加入一個已經登入的紀錄
					$_SESSION['is_login'] = true;
					
					//使用php header 來轉址 前往後台
					header('Location:index.php');
				}
				else
				{
					//要不然就是登入失敗
					//將 session 加入一個失敗的紀錄
					$_SESSION['is_login'] = false;
					//使用php header 來轉址回 login.php 必加入在網址加入 msg 的 GET 用變數 返回登入頁
					
					
					header("Location:index.php?msg=<h3>名稱或密碼錯誤</h3>");					
				}				
			}
		}
		else
		{
			//安全一點，若沒有用 POST 傳 username 跟 password
			//就使用php header 來轉址 返回登入頁，並在警告一下
			header('Location: index.php?msg=<h3>請不要亂搞</h3>');
		}
	}
	else
	{
		echo 沒有資料;
	}
	
?>
