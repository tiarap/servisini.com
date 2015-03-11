<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>servisini - Login</title>

  <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<div class="wrap">
<p><strong>SERVISINI.COM</strong></p>
<p>&nbsp;</p>

<form action="index.html" method="POST">

<td>Username</td>
  <input type="text" placeholder="username" required>
		<div class="bar">

  </div>
		<td>Password</td><p>
          <input type="password" placeholder="password" required>
	</p>
    
    <?php		
				//kode php ini kita gunakan untuk menampilkan pesan eror
				if (!empty($_GET['error'])) {
					if ($_GET['error'] == 1) {
						echo '<h3>Username dan Password belum di isi!</h3>';
					} else if ($_GET['error'] == 2) {
						echo '<h3>Username belum di isi!</h3>';
					} else if ($_GET['error'] == 3) {
						echo '<h3>Password belum di isi!</h3>';
					} else if ($_GET['error'] == 4) {
						echo '<h3>Username dan Password tidak terdaftar!</h3>';
					}
				}
			?>
			
			
  <p>&nbsp; </p>
		<button style="color: #FFF">Login</button>
        

  <script src="js/index.js"></script>
</body>

</html>
