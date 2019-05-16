
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Freemake</title>
</head>
<body>
  数量
&emsp;&emsp;&emsp;


<!-- ＋とーのボタンを作成  -->
<input type="submit" value="+" style="width:60px; height:30px"/>
<input type="submit" value="-" style="width:60px; height:30px"/>


<!-- ボタンを押すと数値が変わるやつ  -->
<input type="button" value="Exec" onclick="document.getElementById('output').innerHTML='ぺんぎん';" /><br />
<br />
<div id="output"></div>


<!-- ＋とーのボタンを作成  -->
<input type="button" value="+" style="width:60px; height:30px" ondblclick="document.getElementById('output').innerHTML='ぺんぎん';" />
<input type="button" value="-" style="width:60px; height:30px" ondblclick="document.getElementById('output').innerHTML='ぺんぎん';" />
<br />
<div id="output"></div>


<!-- リアルタイムの時間を表示  -->
<p id="RealtimeClockArea"></p>
<script type="text/javascript">

function showClock1() {

   var nowTime = new Date();
   var nowHour = nowTime.getHours();
   var nowMin  = nowTime.getMinutes();
   var nowSec  = nowTime.getSeconds();
<!-- リアルタイム時間の10の位を表示  -->

   if (nowTime < 10){
     (nowTime="0"+nowTime);
   }
   if (nowMin < 10){
     (nowMin="0"+nowMin);
   }
   if (nowSec < 10){
     (nowSec="0"+nowSec);
   }

   var msg = nowHour + ":" + nowMin + ":" + nowSec;
   document.getElementById("RealtimeClockArea").innerHTML = msg;
}
setInterval('showClock1()',1000);
</script>

<form method="post" action="example.cgi">
<p>コメント
<textarea name="example1" cols="15" rows="1"></textarea></p>
</form>

<input type="submit" value="追加" style="width:60px; height:30px"/>
</nobr>

</body>
