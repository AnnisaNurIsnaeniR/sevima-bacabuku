
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Openai Image library api</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
	
<?php
    include "header.php";
    ?>
    <h2>Selamat Datang <?=$_SESSION['nama']?> di website Baca Buku Online.</h2>
    <p>Coba Fitur baru kami</p>
  <div class="container">
		<div class="row">
	  	<div class="col-md-8 offset-md-2">
	  
			<div class="row">
				<div class="col-md-12 mt-5 text-center">
					<h2>Baca Buku Assistant</h2>
					<form action="" method="post">
						<input type="text" class="form-control" name="ai" placeholder="ketikan apapun disini">
					</form>
				</div>
			</div>
			
			
	    </div>
				<div class="col-md-10 offset-md-1">
	  
			<div class="row mt-5">
				<?php
				if(isset($_POST['ai'])){
					
					$query = $_POST['ai'];
					
						$queryOne = 'apapun tentang baca buku." question:'.$query.' Ans:';
					$ar = array(
						'prompt' => $queryOne,
						'model' => 'text-davinci-003',
						'temperature' => 0.6,
						'max_tokens' => 150,
						'top_p' => 1,
						'frequency_penalty' => 1,
						'presence_penalty' => 1,
					);
					
					
					
					$data = json_encode($ar);
					
					
				
					$ch = curl_init();

				curl_setopt($ch, CURLOPT_URL,"https://api.openai.com/v1/completions");
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS,
				$data);

				$headers = array();
				$headers[] = 'Content-Type: application/json';
				$headers[] = 'Authorization:Bearer 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';
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


				$result = curl_exec($ch);
				
					
				curl_close($ch);
					
				$decode = json_decode($result,true);
					
				
				echo $decode['choices'][0]['text'];
					
					
				}
				?>
			</div>
			
			
	    </div>
	    </div>
	</div>
	
	
</body>
</html>

<?php
    include "footer.php";
    ?>

