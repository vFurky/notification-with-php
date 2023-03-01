$(document).ready(function() {
	$("#notificationNumber").load("NotificationNumbers.php");
	$("#notifications").load("GetNotifs.php");
});

setInterval(function() {
	$("#notificationNumber").load("NotificationNumbers.php");
	$("#notifications").load("GetNotifs.php");
}, 10000);


function readNotifications() {
	$.ajax({
		url: "ReadNotifs.php",
		type: "POST",
		success: function (response) {
			swal({
				title: "Başarılı!",
				text: "Bildirimler başarıyla okundu!",
				icon: "success",
				timer: 3000
			}).then(() => {
				$("#notificationNumber").load("NotificationNumbers.php");
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