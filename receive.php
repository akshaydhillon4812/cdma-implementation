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


function receiveData()
{
 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     var xx = this.responseText;
     var serverData=xx.split(",");    
     serverData[0]=serverData[0]* localStorage.matrixAssigned0;   
    serverData[1]=serverData[1]* localStorage.matrixAssigned1;
    serverData[2]=serverData[2]* localStorage.matrixAssigned2;
    serverData[3]=serverData[3]* localStorage.matrixAssigned3;

    var add=(serverData[0]+serverData[1]+serverData[2]+serverData[3])/4;
      document.getElementById("demo").innerHTML = add;


    }
  };
  xhttp.open("POST", "receivemsg.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();


}

</script>
<body>
<h2>Which Computer from which you want to recieve data?</h2>

<input type="text" id="computerNo">
<input type="button" value="Assign Computer No" onclick="assignCodes()"><h3 id="ca"></h3>

<h2 id="demo"></h2>
<input type="button" value="Receive Data" onclick="receiveData()">

</body>
</html>