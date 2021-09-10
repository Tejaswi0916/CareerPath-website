

<div id="header" style="background-color:#CEDFCD; height: 100px;">
	<h1>This is the homepage</h1>
	</div>
<table  width='100%'>
<tr>
<td>
<div align="left" id="wb_JavaScript2" style="margin:0; width:180px; height:22px; text-align:left; z-index:21; ">
<div style="color:#0000FF;font-size:12px;font-family:Arial;font-weight:bold;font-style:italic;text-decoration:none" id="basicdate">Wednesday, August 29, 2012</div>
<script type="text/javascript">
   var now = new Date();
   var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
   var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
   var date = ((now.getDate() < 10) ? "0" : "") + now.getDate();
   var year = (now.getYear() < 1000) ? now.getYear() + 1900 : now.getYear();
   today = days[now.getDay()] + ", " + months[now.getMonth()] + " " + date + ", " + year;
   var basicdate = document.getElementById('basicdate');
   basicdate.innerHTML = today;
</script>
</div>
</td>
<td align='right' width="5%"> 
<div id='wb_JavaScript2' width:71px; height:22px; text-align:right; z-index:21;>
<div align="right" style="color:#0000FF;font-size:12px;font-family:Arial;font-weight:bold;font-style:italic;text-decoration:none" id="basicclock">3:23:35</div>
<script type="text/javascript">
function clock() 
{
   var digital = new Date();
   var hours = digital.getHours();
   var minutes = digital.getMinutes();
   var seconds = digital.getSeconds();
   if (minutes <= 9) minutes = "0" + minutes;
   if (seconds <= 9) seconds = "0" + seconds;
   dispTime = hours + ":" + minutes + ":" + seconds;

   var basicclock = document.getElementById('basicclock');
   basicclock.innerHTML = dispTime;
   setTimeout("clock()", 1000);
}
clock();
</script>


</div>
</td>
</tr>
</table>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
</td>