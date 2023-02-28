<?php require_once("./Functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bildirim Sistemi</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="#">Bildirim Sistemi</a>
					<button class="navbar-toggler">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
									<i class="fa-solid fa-bell"></i> 
									<?php
									if($notifNum > 0) {
										echo $notifNum;
									};
									?>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<div class="col-md-12 mt-1">
										<?php
										$result = getNotification();
										foreach ($result as $a) {
											echo '<a class="dropdown-item" href="#">' . $a['content'] . '</a>';
										}
										?>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item col-md-12 mt-1" onclick="readNotifications()">Okundu olarak işaretle</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/648418db2c.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script type="text/javascript">

		function readNotifications() {
			$.ajax({
				url: "ReadNotifs.php",
				type: "POST",
				success: function (response) {
					swal({
						title: "Başarılı!",
						text: "Bildirimler başarıyla okundu!",
						icon: "success"
					}).then(() => {
						window.location.reload();
					})
				},
				error: function(jqXHR, textStatus, errorThrown) {
					swal({
						title: "Ups...",
						text: "Bir hata oluştu, lütfen yöneticiyle iletişime geçin!",
						icon: "error"
					}).then(() => { 
						console.log(textStatus, errorThrown);
					})
				}
			});
		}

	</script>

</body>
</html>
