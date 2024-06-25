<?
	session_start();
	require_once('./config.php');
	include('./templates/_head.php');
?>

<body>

<style>
	
	.footer {
		margin-top: 24px;
	}

	.footer-wrapper{
		margin-top: 8px;
		display: flex;
		justify-content: space-evenly;
		align-items: center;
	}

	.footer-card {
		min-width: 300px;
		margin: 8px;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;

	}

	.footer-card-wrapper {
		margin-top: 8px;
		padding: 8px;
		border: 1px solid black;
		border-radius: 0.25rem;
		width: 100%;
	}

	.soc:hover {
		color:#007bff;
	}

	.footer-btn {
		width: 200px;
		height: 50px;
		margin: 8px;
		border-radius: 0.25rem;
		color: #fff;
		background-color: #696969;
		border-color: #007bff;
		font-size: 25px;
	}

	.main-wrapper {
		display: flex;
		justify-content: space-between;
		/* align-items: top; */
		width: 100%;
		margin-bottom: 8px;
		margin-top: 8px;
	}

	.main-text {
		margin-left: 8px;
		width: 50%;
	}

	.ui-datepicker{
		width: 700px;
		font-size: 40px;
	}

	.date-wrapper {
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}

	@media (max-width: 992px) {
		.main-wrapper {
			flex-direction: column;
		}

		.footer-wrapper{
			flex-direction: column;
		}

		.main-text {
			margin-top: 8px;
			width: 100%;
		}

		.ui-datepicker{
		width: 400px;
		font-size: 32px;
		}
	}

	@media (max-width: 420px) {
		.ui-datepicker{
			width: 300px;
			font-size: 20px;
		}
	}	
	
</style>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- header -->
			<?php include('./templates/_header.php'); ?>
			<!-- // header -->
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<!-- Left aside -->
				<!-- // Left aside -->
				<!-- Center Part -->
				<div class="col-md-10 col-lg-10">
					<div class="main-wrapper">
						<div>
							<img src="./img/main.jpg" alt="photo" width="500px">
						</div>
						<div class="main-text">
							<p>Мы предлагаем уникальную возможность погрузиться в захватывающий мир компьютерных игр, насладиться игровыми турнирами, мастер-классами от профессионалов игровой индустрии и общением с единомышленниками.
							</p>
							<p>Наш клуб оборудован современной игровой техникой, атмосферой для комфортного и захватывающего времяпрепровождения. У нас вы сможете насладиться самыми популярными играми, а также открыть для себя новые игровые миры.
							</p>					
						</div>
					</div>

					<div class="date-wrapper">
						Забронированные дни
						<div>
							<div id="datepicker" style=""></div>
							<input type="text" id="datepicker_value" value="01.08.2019">
						</div>
					</div>
				</div>
				<!-- // Center Part -->
			</div>
			<div class="footer">
				<iframe id="map_547409812" frameborder="0" width="100%" height="300px" sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"></iframe><script type="text/javascript">(function(e,t){var r=document.getElementById(e);r.contentWindow.document.open(),r.contentWindow.document.write(atob(t)),r.contentWindow.document.close()})("map_547409812", "PGJvZHk+PHN0eWxlPgogICAgICAgIGh0bWwsIGJvZHkgewogICAgICAgICAgICBtYXJnaW46IDA7CiAgICAgICAgICAgIHBhZGRpbmc6IDA7CiAgICAgICAgfQogICAgICAgIGh0bWwsIGJvZHksICNtYXAgewogICAgICAgICAgICB3aWR0aDogMTAwJTsKICAgICAgICAgICAgaGVpZ2h0OiAxMDAlOwogICAgICAgIH0KICAgICAgICAuYnVsbGV0LW1hcmtlciB7CiAgICAgICAgICAgIHdpZHRoOiAyMHB4OwogICAgICAgICAgICBoZWlnaHQ6IDIwcHg7CiAgICAgICAgICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmY7CiAgICAgICAgICAgIGJveC1zaGFkb3c6IDAgMXB4IDNweCAwIHJnYmEoMCwgMCwgMCwgMC4yKTsKICAgICAgICAgICAgYm9yZGVyOiA0cHggc29saWQgIzAyODFmMjsKICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlOwogICAgICAgIH0KICAgICAgICAucGVybWFuZW50LXRvb2x0aXAgewogICAgICAgICAgICBiYWNrZ3JvdW5kOiBub25lOwogICAgICAgICAgICBib3gtc2hhZG93OiBub25lOwogICAgICAgICAgICBib3JkZXI6IG5vbmU7CiAgICAgICAgICAgIHBhZGRpbmc6IDZweCAxMnB4OwogICAgICAgICAgICBjb2xvcjogIzI2MjYyNjsKICAgICAgICB9CiAgICAgICAgLnBlcm1hbmVudC10b29sdGlwOmJlZm9yZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7CiAgICAgICAgfQogICAgICAgIC5kZy1wb3B1cF9oaWRkZW5fdHJ1ZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrOwogICAgICAgIH0KICAgICAgICAubGVhZmxldC1jb250YWluZXIgLmxlYWZsZXQtcG9wdXAgLmxlYWZsZXQtcG9wdXAtY2xvc2UtYnV0dG9uIHsKICAgICAgICAgICAgdG9wOiAwOwogICAgICAgICAgICByaWdodDogMDsKICAgICAgICAgICAgd2lkdGg6IDIwcHg7CiAgICAgICAgICAgIGhlaWdodDogMjBweDsKICAgICAgICAgICAgZm9udC1zaXplOiAyMHB4OwogICAgICAgICAgICBsaW5lLWhlaWdodDogMTsKICAgICAgICB9CiAgICA8L3N0eWxlPjxkaXYgaWQ9Im1hcCI+PC9kaXY+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly9tYXBzLmFwaS4yZ2lzLnJ1LzIuMC9sb2FkZXIuanM/cGtnPWZ1bGwmYW1wO3NraW49bGlnaHQiPjwvc2NyaXB0PjxzY3JpcHQ+KGZ1bmN0aW9uKGUpe3ZhciB0PUpTT04ucGFyc2UoZSkscj10Lm9yZGVyZWRHZW9tZXRyaWVzLG49dC5tYXBQb3NpdGlvbixhPXQuaXNXaGVlbFpvb21FbmFibGVkO2Z1bmN0aW9uIG8oZSl7cmV0dXJuIGRlY29kZVVSSUNvbXBvbmVudChhdG9iKGUpLnNwbGl0KCIiKS5tYXAoZnVuY3Rpb24oZSl7cmV0dXJuIiUiKygiMDAiK2UuY2hhckNvZGVBdCgwKS50b1N0cmluZygxNikpLnNsaWNlKC0yKX0pLmpvaW4oIiIpKX1ERy50aGVuKGZ1bmN0aW9uKCl7dmFyIGU9REcubWFwKCJtYXAiLHtjZW50ZXI6W24ubGF0LG4ubG9uXSx6b29tOm4uem9vbSxzY3JvbGxXaGVlbFpvb206YSx6b29tQ29udHJvbDohYX0pO0RHLmdlb0pTT04ocix7c3R5bGU6ZnVuY3Rpb24oZSl7dmFyIHQscixuLGEsbztyZXR1cm57ZmlsbENvbG9yOm51bGw9PT0odD1lKXx8dm9pZCAwPT09dD92b2lkIDA6dC5wcm9wZXJ0aWVzLmZpbGxDb2xvcixmaWxsT3BhY2l0eTpudWxsPT09KHI9ZSl8fHZvaWQgMD09PXI/dm9pZCAwOnIucHJvcGVydGllcy5maWxsT3BhY2l0eSxjb2xvcjpudWxsPT09KG49ZSl8fHZvaWQgMD09PW4/dm9pZCAwOm4ucHJvcGVydGllcy5zdHJva2VDb2xvcix3ZWlnaHQ6bnVsbD09PShhPWUpfHx2b2lkIDA9PT1hP3ZvaWQgMDphLnByb3BlcnRpZXMuc3Ryb2tlV2lkdGgsb3BhY2l0eTpudWxsPT09KG89ZSl8fHZvaWQgMD09PW8/dm9pZCAwOm8ucHJvcGVydGllcy5zdHJva2VPcGFjaXR5fX0scG9pbnRUb0xheWVyOmZ1bmN0aW9uKGUsdCl7cmV0dXJuInJhZGl1cyJpbiBlLnByb3BlcnRpZXM/REcuY2lyY2xlKHQsZS5wcm9wZXJ0aWVzLnJhZGl1cyk6REcubWFya2VyKHQse2ljb246ZnVuY3Rpb24oZSl7cmV0dXJuIERHLmRpdkljb24oe2h0bWw6IjxkaXYgY2xhc3M9J2J1bGxldC1tYXJrZXInIHN0eWxlPSdib3JkZXItY29sb3I6ICIrZSsiOyc+PC9kaXY+IixjbGFzc05hbWU6Im92ZXJyaWRlLWRlZmF1bHQiLGljb25TaXplOlsyMCwyMF0saWNvbkFuY2hvcjpbMTAsMTBdfSl9KGUucHJvcGVydGllcy5jb2xvcil9KX0sb25FYWNoRmVhdHVyZTpmdW5jdGlvbihlLHQpe2UucHJvcGVydGllcy5kZXNjcmlwdGlvbiYmdC5iaW5kUG9wdXAobyhlLnByb3BlcnRpZXMuZGVzY3JpcHRpb24pLHtjbG9zZUJ1dHRvbjohMCxjbG9zZU9uRXNjYXBlS2V5OiEwfSksZS5wcm9wZXJ0aWVzLnRpdGxlJiZ0LmJpbmRUb29sdGlwKG8oZS5wcm9wZXJ0aWVzLnRpdGxlKSx7cGVybWFuZW50OiEwLG9wYWNpdHk6MSxjbGFzc05hbWU6InBlcm1hbmVudC10b29sdGlwIn0pfX0pLmFkZFRvKGUpfSl9KSgneyJvcmRlcmVkR2VvbWV0cmllcyI6W3sidHlwZSI6IkZlYXR1cmUiLCJwcm9wZXJ0aWVzIjp7ImNvbG9yIjoiIzAyODFmMiIsInRpdGxlIjoiIiwiZGVzY3JpcHRpb24iOiIiLCJ6SW5kZXgiOjEwMDAwMDAwMDB9LCJnZW9tZXRyeSI6eyJ0eXBlIjoiUG9pbnQiLCJjb29yZGluYXRlcyI6WzU5Ljk3NjkwMSw1Ny45MTkwODhdfSwiaWQiOjExODV9XSwibWFwUG9zaXRpb24iOnsibGF0Ijo1Ny45MTgzNDY3NDEzMjE3MSwibG9uIjo1OS45Nzg3NjQxMjczNzQ4NjYsInpvb20iOjE2fSwiaXNXaGVlbFpvb21FbmFibGVkIjp0cnVlfScpPC9zY3JpcHQ+PHNjcmlwdCBhc3luYz0iIiB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly93d3cuZ29vZ2xldGFnbWFuYWdlci5jb20vZ3RhZy9qcz9pZD1VQS0xNTg4NjYxNjgtMSI+PC9zY3JpcHQ+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPihmdW5jdGlvbihlKXtmdW5jdGlvbiB0KCl7ZGF0YUxheWVyLnB1c2goYXJndW1lbnRzKX13aW5kb3cuZGF0YUxheWVyPXdpbmRvdy5kYXRhTGF5ZXJ8fFtdLHQoImpzIixuZXcgRGF0ZSksdCgiY29uZmlnIixlKSx3aW5kb3cuZ3RhZz10fSkoJ1VBLTE1ODg2NjE2OC0xJyk8L3NjcmlwdD48L2JvZHk+")</script>
				<div class="footer-wrapper">
					<div class="footer-card">
						<div>Контакты</div>
						<div class="footer-card-wrapper">
							<div class="soc">Адрес: Проспект Мира, 57</div>
							<div class="soc">Телефон: +7 (902) 446 47-87</div>
							<div class="soc">Почта: test@gmail.com</div>
						</div>
					</div>
					<div>
						<a href="./index1.php" class="footer-btn">Забронировать</a>
						<!-- <a href="./admin-insert-product-form.php" class="btn btn-primary" style="margin-bottom:30px;">Добавить товар</a> -->
					</div>
					<div class="footer-card">
						<div>Соц. сети</div>
						<div class="footer-card-wrapper">
							<div class="soc"><img src="./img/vk.png" width="25px"> ВКонтакте</div>
							<div class="soc"><img src="./img/od.png" width="25px">  Одноклассники</div>
							<div class="soc"><img src="./img/tg.png" width="25px">  Telegramm</div>
						</div>
					</div>
				</div>
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php include('./templates/_footer.php'); ?>


<script>
	let idUser = <? if ($_SESSION['authorize']) { echo $_SESSION['id_user']; } else { echo 0; } ?>;
	$(".alert").toggle();


	/* Локализация datepicker */

$.datepicker.regional['ru'] = {
	closeText: 'Закрыть',
	prevText: 'Предыдущий',
	nextText: 'Следующий',
	currentText: 'Сегодня',
	monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
	monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
	dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
	dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
	dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
	weekHeader: 'Не',
	dateFormat: 'dd.mm.yy',
	firstDay: 1,
	isRTL: false,
	showMonthAfterYear: false,
	yearSuffix: ''
};

$.datepicker.setDefaults($.datepicker.regional['ru']);



$(function(){
	$("#datepicker").datepicker({
		onSelect: function(date){
			$('#datepicker_value').val(date)
		},
		minDate: 0,
		beforeShowDay: function(date){
			var dayOfWeek = date.getDay();
			if (dayOfWeek == 0 || dayOfWeek == 6){
				return [false];
			} else {
				return [true];
			}
		},

	});
	$("#datepicker").datepicker("setDate", $('#datepicker_value').val());

});
</script>
<script src="./js/script.js"></script>
</body>