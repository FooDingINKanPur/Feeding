<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.a {
  width: 45px;
  height: 7px;
  background-color:white;
  margin: 6px 0;
  margin-left:10px;
}
.b {
  position: relative;
  display: inline-block;
}
.bod{
  position:relative;
  background-size:cover;
  background-image:url("helping1.jpg");
  height:100%;
  width:100%;
}

/* Dropdown Content (Hidden by Default) */
.c {
  display: none;
  position: absolute;
  background-color: #ebebe0;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left:10px;
}

/* Links inside the dropdown */
.c a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.c a:hover {background-color: gray;}

.b:hover .c {display: block;}
.d{	font-size:30px;
	color:white;
	background-color: #00b300;
	opacity:0.9;}
.d:hover{
	opacity:1;}
.e{	margin-left:33.33%;}
.e a{
	color:white;}
.f{
	color:white;
	text-align:center;
	background-color:gray;
	}	

/*.b:hover .dropbtn {background-color: #3e8e41;}*/
.a1{
	background-color:gray;
	height:70px;
	}
	
	table{
		width:100%;
		font-size:25px;
		color:white;
		border-collapse:collapse;
		border:1px solid;
		font-family: monospace;        
            }
            th {
            background-color:#588c7e;
            color:white;
            border:1px solid;  
            }
            td{
            color:white;
            background-color:gray;
            border:1px solid;
            padding:5px;
            }
            tr{
            background-color:gray;
            }
            tr:nth-child(even) {
            background-color:gray;
            border:1px solid;  
            }
          .j {
          	float:right;
          	}
            
</style>
</head>

<body>
<div class="bod"><br>
<div class="a1">
<div class="b">
	<div class="a"></div>
	<div class="a"></div>
	<div class="a"></div>
	<div class="c">
    	<a href="index.html">HOME</a>
	<a href="fooddonators.html">DONATORS</a>
    	<a href="foodreceivers.html">RECEIVERS</a>
	 <a href="operation.html">ABOUT OPERATIONS</a>
	<a href="volunteer.html">VOLUNTEER</a>
	 <a href="about.html">ABOUT US</a>
	 </div>
</div>
<div class="j"><a href="index.html"><img src="mainlogo.png" style="height:70px;width:70px;margin-right:1300px;"></a></div>
</div>
<div class="e">
<button class="d" name="donator"><a href="fooddonators.html">FOOD DONATOR</a></button>
<button class="d" name="receiver"><a href="foodreceivers.html">FOOD RECEIVER</a></button>
</div>
<div class="f">
<table>
<tr><th>SrNo.</th>
<th>NAME</th>
<th>ADDRESS</th>
<th>CONTACT NO.</th>
<th>DATE</th></tr>
<?php
$conn=new mysqli("localhost","root","","demo");
$sql="select SrNo,name,address,contact,currentdate from receiver";
$result=$conn-> query($sql);
if($result-> num_rows > 0)
{
while ($row = $result-> fetch_assoc()) {
echo "<tr><td>".$row["SrNo"]. "</td><td>".$row["name"]. "</td><td>". $row["address"]. "</td><td>". $row["contact"]. "</td><td>". $row["currentdate"]."</td></tr>";
}
echo "</table>";
}
else {
 echo " No Result Found";
 }
 $conn->close();
 ?>

</div>
</div>
</body>
</html>
