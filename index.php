
<html>
	
	<head>
			<meta charset="UTF-8">
			 <link rel="shortcut icon" type="image/png" href="https://cdn.tutsplus.com/wp/authors/japh/Understanding-the-WordPress-Favicon-x400.png" />
			<title>MDSRK-PHP_MYSQL </title>
			<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<h1><center>SIMPLE WEBSITE FOR DISPLAYING TABLE DETAILS FROM A DATABASE</center> </h1>

	</head>
	<body><center>
<br><br>
			<table class="table table-bordered " >
				<thead>
				<tr class="info">
				<th>ID</th>
				<th>Name</th>
				<th>Address</th>
		</tr>
		</thead>
		<tbody>

			<?php 

			$host="localhost";
			$user="root";
			$password="";
			$database="studentdb";
			$socket=null;
			

			$conn= new mysqli($host,$user,$password,$database,$socket);
			if(mysqli_connect_error()){
				echo mysqli_connect_error();
				exit();
			}

			$query="SELECT * FROM student";
			$result=$conn->query($query);
			while ($row=$result->fetch_assoc()) {

				echo '<tr class="success">';

				echo '<td>';
				echo $row['sid'];
				echo '</td>';

				echo '<td>';
				echo $row['sname'];
				echo '</td>';

				echo '<td>';
				echo $row['saddress'];
				echo '</td>';

				echo '</tr>';
			}

			?>
			</center></tbody></table>

		
  <p align="left">
  	<h4>Technologies Used</h4>
  	<ul>
  	<li><b>Front End:</b>HTML,CSS,Bootstrap </li>
  	<li><b>BackEnd: </b>Php,MySQL </li>
  	<li><b>Hosting:</b>RedHat OpenShift Cloud</a></li>
  </ul>
</p>
	</body>

</html>