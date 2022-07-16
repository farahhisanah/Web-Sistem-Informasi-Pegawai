<html lang="en">

<head>
    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Insert Data</title>
</head>

<body >
    <div class="card text-white bg-info mb-3" style="margin: 50px 500px auto">
	<span class="border border-primary">
        <div class="card-body">
            <form class="input-form" id="formInput" method="POST" action="inserttunit.php">
				<fieldset>
					<legend class="card-header text-center"><h1>Insert Data Unit</h1></legend>
						<div>
								<label for="id">Nama Unit</label>
								<input type="text" class="form-control" id="id" placeholder="Nama Unit " required autocomplete="off" name="nama_unit"/>
						</div>
	
                        <div>
								<label for="id">Kepala Unit</label>
								<input type="text" class="form-control" id="id" placeholder="Kepala Unit " required autocomplete="off" name="kepala_unit"/>
						</div>
						
						<input type="submit" class="btn btn-primary" onclick="onSubmit()" style="margin: 10px 0 0" value="Submit" name="submit">
				</fieldset>
            </form>
        </div>
	</span>
    </div>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>