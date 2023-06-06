$(function(e){
  'use strict';
	$('body').ihavecookies({
		title: 'Sayt test rejimida ishlamoqda!',
		message: "Assalomu allaykum, qadirli foydalanuvchi, sizni saytda ko'rib turganimizdan hursandmiz, sayt to'liq qayta ishlanmoqda va yangilanishlar qo'shib borilyapti, Agarda biron hatoliklar vujudga kelsa <a href='https://t.me/Raxmatilla_Fayziyev'> Bu haqda xabar berishingiz mumkin.</a>",
		delay: 600,
		expires: 1,
		link: '#privacy',
		onAccept: function(){
			var myPreferences = $.fn.ihavecookies.cookie();
			console.log('Yay! The following preferences were saved...');
			console.log(myPreferences);
		},
		uncheckBoxes: true,
		acceptBtnLabel: 'Tushunarli 😊',
		moreInfoLabel: ''
	});

	if ($.fn.ihavecookies.preference('marketing') === true) {
		console.log('This should run because marketing is accepted.');
	}
});