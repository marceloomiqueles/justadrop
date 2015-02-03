$(document).ready(function(){
	$(".cuadro-1").click(function(){
		$("#videosCaja").hide("slow");
		$(".videosBox2").css("visibility", "hidden");
		$(".videosBox1").css("visibility", "visible");
		$("#videosCaja").fadeIn("slow");
	});

	$(".cuadro-2").click(function(){
		$("#videosCaja").hide("slow");
		$(".videosBox1").css("visibility", "hidden");
		$(".videosBox2").css("visibility", "visible");
		$("#videosCaja").show("slow");
	});

	$(".vacioBox-1").click(function(){
		$("#videosCaja").hide("slow");
		$(".videosBox1").css("visibility", "hidden");
	});

	$(".vacioBox-2").click(function(){
		$("#videosCaja").hide("slow");
		$(".videosBox2").css("visibility", "hidden");
	});

	$("#water2").mouseover(function(){
		var msj = Math.floor((Math.random() * 3) + 1);
		if (msj == 1) {
			$(".mensaje-1").css("visibility", "visible");
		}
		if (msj == 2) {
			$(".mensaje-2").css("visibility", "visible");
		}
		if (msj == 3) {
			$(".mensaje-3").css("visibility", "visible");
		}
	});

	$("#contiene_water").mouseout(function(e){
		$(".mensaje-1").css("visibility", "hidden");
		$(".mensaje-2").css("visibility", "hidden");
		$(".mensaje-3").css("visibility", "hidden");
	});
});