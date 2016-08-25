<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body 
            td{
                padding-top: 5px;
                padding-bottom: 20px;
            }
            .table tr td{
            	font-style: bolder;
            	font-size: 1.6em;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <style >
    	.btn a{
			text-decoration: none;
			color: white;
		}


    </style>
    <body>
   
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
         <script src="js/vendor/jquery-3.1.0.slim.min.js"></script>

        <script src="js/main.js"></script>
      	<div class="col-md-12">
			<h1>PHP CRUD Grid</h1>
		</div>
		<div class="col-md-12">
			<button type="button" class="btn btn-success"><a href="create.php">Create</a></button>
		</div>
		<?php 
			$host = "localhost";
			$user_name = "root";
			$password = "";
			$db_name = "homeworkphp1";
			$db_con = mysqli_connect($host, $user_name, $password, $db_name);


			if($db_con){
				
				$sql = "SELECT * FROM info";
				$query = mysqli_query($db_con,$sql);
		?>
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td>Name</td>
						<td>Email Address</td>
						<td>Mobile Number</td>
						<td>Action</td>
					</tr>
				</thead>
				<?php
					while ($row = mysqli_fetch_assoc($query)) {
				?>
					<tr>
					
						<td><?php echo $row['name'] ; ?></td>
						<td><?php echo $row['EmailAddress'] ; ?></td>
						<td><?php echo $row['MobileNumber'] ; ?></td>
													
						
					<td>
					<button type="button" class="btn btn-default">Read</button>
					<button type="button" class="btn btn-success">Update</button>
					<button type="button" class="btn btn-danger"><a href="delete.php?id=<?php echo $row["id"]; ?>">delete</a></button>	
					</td>
					</tr>	
							
					<?php } ?>

			</table>
				<?php } ?>


		</div>
				
    </body>
</html>
