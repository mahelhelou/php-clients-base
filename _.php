<?php
include('db.php');
include('header.php');

$id = $_GET['id'];
$sql ="SELECT * FROM clients WHERE id = '$id'";
$results = mysqli_query($db,$sql);
foreach($results as $result){  

?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h1>Send email</h1>
		<form action="email.php" method="POST">

			<div class="form-group">
				<label for="">Subject</label>
				<input type="text" name="subject" class="form-control">
			</div>
			<div class="form-group">
				<label for="message">Message</label>
				<textarea name="message" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="subject" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Send e-mail</button>
			</div>
		</div>
	</form>

		<div class="col-md-6 float-right">
			<div class="card">
				<div class="card-header">
					Client Details
				</div>
				<div class="card-body">
					<p><strong>Name</strong>: <?php echo $result['name']; ?></p>
					<p><strong>Email</strong>: <?php echo $result['email']; ?></p>
					<p><strong>Phone</strong>: <?php echo $result['phone']; ?></p>
					<p><strong>Address</strong>: <?php echo $result['address']; ?></p>
					<p><strong>Description</strong>: <?php echo $result['description']; ?></p>
				</div>
			</div>
		</div>
	<?php }?>

	</div>
</div>