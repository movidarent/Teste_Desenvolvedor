$(document).ready(function(){
	$("#veiculos").animate({
		width: 'toggle', duration: 0
	});
	$("#produtos").animate({
		width: 'toggle', duration: 0
	});
	$("#protecoes").animate({
		width: 'toggle', duration: 0
	});
	$("#label-veiculos").click(function() {
		$("#veiculos").animate({
			width: 'toggle', duration: 0
		});
	});
	$("#label-produtos").click(function() {
		$("#produtos").animate({
			width: 'toggle', duration: 0
		});
	});
	$("#label-protecoes").click(function() {
		$("#protecoes").animate({
			width: 'toggle', duration: 0
		});
	});

	$( function() {
		var dateFormat = "dd/mm/yy",
		from = $( "#from" )
		.datepicker({
			dateFormat: "dd/mm/yy",
			minDate: 0,
			defaultDate: null,
			changeMonth: true,
			numberOfMonths: 3
		})
		.on( "change", function() {
			to.datepicker( "option", "minDate", getDate( this ) );
		}),
		to = $( "#to" ).datepicker({
			dateFormat: "dd/mm/yy",
			minDate: 0,
			defaultDate: null,
			changeMonth: true,
			numberOfMonths: 3
		})
		.on( "change", function() {
			from.datepicker( "option", "maxDate", getDate( this ) );
		});

		function getDate( element ) {
			var date;
			try {
				date = $.datepicker.parseDate( dateFormat, element.value );
			} catch( error ) {
				date = null;
			}

			return date;
		}
	} );
});