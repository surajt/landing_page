/* Author:

*/
$(function(){
	// Tabs
	$('#tabs').tabs();
	// Progressbar
	$("#progressbar").progressbar({
		value: parseInt(Percentage) 
	});
	
	//alert( theEnd );
	
	// Countdown timer			
	$('#countdown').countdown({until: theEnd, format: 'dHMS', regional: 'pt-BR',layout: '<ul>{y<}<li>{yn} {yl}</li>{y>}{o<}<li>{on} {ol}</li>{o>}' + '{d<}<li> <div class="sub-title">{dl}</div> {dn} </li> {d>}{h<} <li><div class="sub-title">{hl}</div>  {hn}</li>{h>}' +  '{m<}<li><div class="sub-title">{ml}</div> {mn} </li>{m>}{s<}<li><div class="sub-title">{sl}</div> {sn} </li>{s>}</ul>'});
	
	$('#form1').validationEngine();
	$('#from2').validationEngine();
	if(TwitterAcc!="") {
		$('#twitter-status').twitterSearch(TwitterAcc);
	}
	
	$('#btn').click(function(){
		if(jQuery('#form1').validationEngine('validate')){
			$('#processshow').addClass('loading');
			 var dataString = 'name='+ $('#name').val() + '&email=' + $('#email').val() + '&yourself=' + $('#yourself').val();
			 
			  $.ajax({
				type: "POST",
				url: "bin/ProcessAjax.php?mode=invite",
				data: dataString,
				success: function(responseText) {
					if(responseText==1) {
						$('#processshow').html("Process Complete");
					} else {
						$('#processshow').html("Mail sent error.");
					}	
					$('#processshow').removeClass('loading');
				}
			  });
		} else {
			//alert('Form Invalid');	
		}			 
	});
	
	$('#btnsubscribe').click(function(){
		if(jQuery('#from2').validationEngine('validate')){
			$('#p-show').addClass('loading');
			var dataString='subscriberemail='+$('#subscriberemail').val();
			$.ajax({
				type: "POST",
				url: "bin/ProcessAjax.php?mode=subscribe",
				data: dataString,
				success: function(responseText) {
					if(responseText==1) {
						$('#p-show').html("Process Complete");
					} else {
						$('#p-show').html("Mail sent error.");
					}	
					$('#p-show').removeClass('loading');
				}
			  });
		}
							 
	});
	 
		
});