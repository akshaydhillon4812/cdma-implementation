<html>
<script>
var matrixAssigned;
function assignCodes()
{
var computerNo = document.getElementById("computerNo").value;


if(computerNo==1)
{

localStorage.matrixAssigned0=1;
localStorage.matrixAssigned1=1;
localStorage.matrixAssigned2=1;
localStorage.matrixAssigned3=1;

}
else if(computerNo==2)
{

localStorage.matrixAssigned0=1;
localStorage.matrixAssigned1=-1;
localStorage.matrixAssigned2=1;
localStorage.matrixAssigned3=-1;

}
else if(computerNo==3)
{

localStorage.matrixAssigned0=1;
localStorage.matrixAssigned1=1;
localStorage.matrixAssigned2=-1;
localStorage.matrixAssigned3=-1;

}
else 
{

localStorage.matrixAssigned0=1;
localStorage.matrixAssigned1=-1;
localStorage.matrixAssigned2=-1;
localStorage.matrixAssigned3=1;

}

document.getElementById("ca").innerHTML = "Matrix has been Assigned to you ["+localStorage.matrixAssigned0+","
+localStorage.matrixAssigned1+","+localStorage.matrixAssigned2+","+localStorage.matrixAssigned3+"]";






}
function sendData()
{
var x = document.getElementById("data").value;
localStorage.matrixAssigned0=localStorage.matrixAssigned0*x;
localStorage.matrixAssigned1=localStorage.matrixAssigned1*x;
localStorage.matrixAssigned2=localStorage.matrixAssigned2*x;
localStorage.matrixAssigned3=localStorage.matrixAssigned3*x;

document.getElementById("dataToSend").innerHTML = "Data sent to the Server is ["+localStorage.matrixAssigned0+","
+localStorage.matrixAssigned1+","+localStorage.matrixAssigned2+","+localStorage.matrixAssigned3+"]";



//ajax code


 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     // document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "sendmsg.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("a1="+localStorage.matrixAssigned0+"&a2="+localStorage.matrixAssigned1+"&a3="+localStorage.matrixAssigned2+"&a4="+localStorage.matrixAssigned3);




}

</script>
<body>
<input type="text" id="computerNo">
<input type="button" value="Assign Computer No" onclick="assignCodes()">
<h3 id="ca"></h3>

<br><br>
<center><h1>Enter Data to send</h1><br>
<input type="text" id="data">&nbsp;<input  type="button" value="Send Data" onclick="sendData()">

<h2 id="dataToSend"></h2>

</body>
</html>