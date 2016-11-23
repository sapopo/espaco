<!DOCTYPE html>
<html>
<head>
	<title>Second Page of the backoffice project</title>
	    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/bootstrap.min.css");?>">
	    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/style/second-backoffice-style.css"); ?>">
	    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/font-awesome/css/font-awesome.css");?>">
	    <script type="text/javascript" src="<?php echo base_url("assets/js/tinymce/tinymce.min.js"); ?>"></script>
</head>
</head>
	<body>
		<div class="row">
			<div class="row">
				<div class="container-fluid top-header">
					<div class="col-md-12 header">
						<h2>Cardiovascular Backoffice</h2>
					</div>
				</div>
			</div>
				<div class="row">
					<div class="container">
						<div class="col-md-12 info">
							<form>
							<div class="form-group title">
							<label>Title:</label>
								<input type="text" value="">
							</div>

							<div class="form-group date">
							<label>Date:</label>
								<input type="date">
							</div>

							<div class="form-group state">
							<label>State:</label>
								<select>
								 <option value="volvo">options</option>
								  <option value="volvo">Published</option>
								  <option value="saab">Not yet Published</option>
								</select>
							</div>

							<div class="form-group author">
							<label>Author:</label>
								<input type="text" value="">
							</div>		
							</form>
						</div>
					</div>
				</div>
					<div class="container">
						<div class="col-md-12">
							<div class="form-group multimedia">
								<label>Image/Video:</label>
								<input type="file" upload>
							</div>
						</div>
					</div>
				<div class="container">
					<div class="col-md-12">	
 						<textarea id="mytextarea" name="mytextarea"></textarea>
					</div>
 				</div>		
					<script type="text/javascript">
			        tinymce.init({
			            selector: "#mytextarea"
			        });
					  </script>
					 <div class="row"> 
						  <div class="container">
							  <div class="col-md-12">
							  	<button>Save</button>
							  </div>
						  </div>
					</div>

		</div>	
				