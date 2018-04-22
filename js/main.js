$(function () {    

		// Модальное окно
		$('.main-screen__btn, .rest-questions__btn').click(function() { 
		    $('.modal').modal('show'); 
		});

		// Маска ввода номера телефона
		$(".phone-field").mask("+7 (999) 999 99 99", { placeholder: " " }); 

});