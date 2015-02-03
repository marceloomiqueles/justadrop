<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<title>Industrial | Just a Drop</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src='../js/script.js'></script>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script type="text/javascript">
			$(document).ready(function(){
				timeLap(5000, 1000, 1000);
			});

			function timeLap(retr, tran, habla) {
				$(".paso-1").show();
				$(".paso-2").hide();
				$(".paso-3").hide();
				$(".paso-1").delay(retr).fadeOut(tran);
				$(".paso-2").delay(retr).fadeIn(tran).delay(retr).fadeOut(tran);
				$(".paso-3").delay(retr * 2).fadeIn(tran);
				$(".habla").fadeIn("fast").delay(habla).fadeOut("fast").delay(habla).fadeIn("fast").delay(habla).fadeOut("fast").delay(habla).fadeIn("fast").delay(habla).fadeOut("fast").delay(habla).fadeIn("fast").delay(habla).fadeOut("fast").delay(habla).fadeIn("fast").delay(habla).fadeOut("fast").delay(habla).fadeIn("fast").delay(habla).fadeOut("fast").delay(habla).fadeIn("fast").delay(habla).fadeOut("fast");
			}
		</script>
	</head>
	<body>
		<div id='bigBox'>
			<div id='box-1'>
				<div id='menu' class='bg-azul'>
					<div id='menuBox'>
						<a href="../">
							<div id='logo'></div>
						</a>
						<div id='menuInteriorBox'>
							<div id='separaPunto'>
								<a href="../">
									<img src="../img/casita.png">
								</a>
							</div>
							<div id='textoMenu'>
								<a href="../funciona/">
									CÓMO FUNCIONA
								</a>
							</div>
							<div id='separaPunto'>·</div>
							<div id='textoMenu'>
								<a href="../ostomia/">
									OSTOMÍA
								</a>
							</div>
							<div id='separaPunto'>·</div>
							<div id='textoMenu'>
								<a href="../industrial/">
									INDUSTRIAL
								</a>
							</div>
							<div id='separaPunto'>·</div>
							<div id='textoMenu'>
								<a href="../contacto/">
									CONTACTO
								</a>
							</div>
							<div id='separaPunto'>·</div>
							<div id='textoMenu'>
								<a href="../faq/">
									PREGUNTAS FRECUENTES
								</a>
							</div>
							<div id='separaPunto'>·</div>
							<div id='textoMenu'>
								<a href="../comprar/">
									DÓNDE COMPRAR
								</a>
							</div>
							<div id='separaPunto'>·</div>
							<div id='redes' class='redesMenu'>
								<a href='https://www.facebook.com/pages/Just-a-Drop-Chile/1399265286973574' target='_blank'>
									<img class='fb-logo' src='../img/fb-logo.png'>
								</a>
								<a href='https://www.twitter.com/JustaDropCL' target='_blank'>
									<img class='tw-logo' src='../img/tw-logo.png'>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div id='imgHomeF'>
					<div id='contenedorBox'>
						<div id='contenedorBoxInt'>
							<div id='layerBoxT'></div>
							<div id='layerBoxHeadTO'></div>
							<div id='layerBoxHeadO'>
								<div id='layerBoxHeadTitulo'>CÓMO FUNCIONA</div>
							</div>
							<div id='layerBox'>
								<div id='layerContIndustrial'>
									<div id='funcionaWater' class='normal'></div>
									<div id='funcionaWater' class='habla'></div>
									<div id='funcionaPaso' class='paso-1'></div>
									<div id='funcionaPaso' class='paso-2'></div>
									<div id='funcionaPaso' onclick='timeLap(5000, 1000, 1000);' class='paso-3'></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id='box-2'>
				<div id='footBox'>
					<div id='footBoxInterior'>
						<div id='logoFooter'></div>
						<div id='textoFooter'><a href='mailto:info@justadrop.cl'>info@justadrop.cl</a> / <a href='tel:+56229206344'>+56 2 2920 6344</a></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>