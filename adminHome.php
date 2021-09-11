
 <?php 
 // Connects to your Database 
 $con = mysql_connect("localhost", "root", "", "musicloud") or die(mysql_error()); 
 
 
$data = mysql_query("SELECT * FROM songs") or die(mysql_error()); 
  while($row = mysql_fetch_assoc($data)){
    echo "No: ".$row['No'].", Name:".$row['Name']
    .", Surname:".$row['Surname']."<br/>";
    }
 ?>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="assets/css/adminHome.css">
</head>
<body>
	<ul>
		<li onclick="songs()">Songs</li>
		<li onclick="artists()">Artists</li>
		<li onclick="albums()">Albums</li>
		<li onclick="users()">Users</li>
	</ul>
			<div class="songs-table db-table">
				<table style="width:100%">
				  	<tr>
					    <th>Firstname</th>
					    <th>Lastname</th>
					    <th>Age</th>
				  </tr>
				  <tr>
					    <td>Jill</td>
					    <td>Smith</td>
					    <td>50</td>
				  </tr>
				  <tr>
				    <td>Eve</td>
				    <td>Jackson</td>
				    <td>94</td>
				  </tr>
				</table>
		</div>

			<div class="artists-table db-table">
			<table style="width:100%">
  <tr>
    <th>Artist</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>
		</div>

		<div class="albums-table db-table">
			<table style="width:100%">
  <tr>
    <th>Artist</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>
		</div>


<script type="text/javascript">
	const artists = () => {
	document.querySelector(".artists-table").style.display="block";
		document.querySelector(".songs-table").style.display="none";
	}

	const songs = () => {
	document.querySelector(".artists-table").style.display="none";
		document.querySelector(".songs-table").style.display="block";
	}



</script>
</body>
</html>