<html>
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Add Flight</title>
		<link rel="stylesheet" href="desktop.css">
		
	</head>
	<body topmargin="0">
	<div class="transbox"> 
    <h1>World Travels</h1>
    <h2>Let us be a part of your Journey</h2>
	
	<center>
	<font size=10>
		<form method="POST" action="checkflight.php" name="f2">
		<fieldset style="width:270px">
		<legend>
		<div style="color:#FF5733">
		<h1>Add Flight</h1>
		</div>
		</legend>
		<table>
		<tr>
			<td>Travel route</td>
			<td> 
                <input type="radio" name="route" id="oneway" value="oneway">
			<label for="oneway">One Way</label>
                <input type="radio" name="route" id="roundtrip" value="roundtrip">
			<label for="roundtrip">roundtrip</label>
                <br>
                <br>
                </td>
			</tr>
			<tr>
			<td>Departure:</td>
			<td><input type="text" name="dname"></td>
			</tr>
            <tr>
			<td>Arrival:</td>
			<td><input type="text" name="aname"></td>
			</tr><tr>
			<td>Airlines:</td>
			<td><input type="text" name="airlines"></td>
			</tr>
			<tr>	
 			<td>Flight Number:</td>
			<td><input type="text" name="fnumber"></td>
			</tr>
			<tr>	
 			<td>Travel Time:</td>
			<td><input type="number" name="ttime"></td>
			<td>hrs</td>
			</tr>
			<tr>
			<td>Economy Price:</td>
			<td>$<input type="number" name="eprice"></td>
			</tr>
			<tr>
			<td>Economy Plus Price:</td>
			<td>$<input type="number" name="eplus"></td>
			</tr>
			<tr>
			<td>Business Class Price:</td>
			<td>$<input type="number" name="bprice"></td>
			</tr>
			<tr><td></td></tr>
			<tr><td></td>
			<td align="center"><input type="submit" name="add" value="Add"> &nbsp &nbsp &nbsp &nbsp &nbsp<input type="reset"></td>
			</tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			</tr>
			
			</tr>
		</table>
		
		</fieldset>
		</form>
		</font>
	</center>
	</div>
	<div class="transbox"> 
	<center>
	<font size=10>
		<form method="POST" action="addseats.php" name="f2">
		<fieldset style="width:270px">
		<legend>
		<div style="color:#FF5733">
		<h3>Add Seats</h3>
		</div>
		</legend>
	<table>
		  <tr>
			<td>Flight Number:</td>
			<td><input type="text" name="flinumber"></td>
			</tr>
			 <tr>
			<td>Total Seats:</td>
			<td><input type="number" name="tseats"></td>
			</tr>
			 <tr>
			<td>Economy seats:</td>
			<td><input type="number" name="eseats"></td>
			</tr>
			 <tr>
			<td>Economyplus Seats:</td>
			<td><input type="number" name="epseats"></td>
			</tr>
			 <tr>
			<td>Business Seats:</td>
			<td><input type="number" name="bseats"></td>
			</tr>
			<tr><td></td>
			<td align="center"><input type="submit" name="add" value="Add"> &nbsp &nbsp &nbsp &nbsp &nbsp<input type="reset"></td>
			</tr>
		</table>
	    </fieldset>
		</form>
		</font>
	</center>
	</div>
	
	<footer>
  		<p>Created by: Us</p>
  			<p>Contact information: <a href="mailto:snuthalapati1@studnet.gsu.edu">Us</a>.</p>
	</footer>
	</body>

</html>