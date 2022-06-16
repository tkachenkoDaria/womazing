(function ($)
  { "use strict"
  

/* 2. Sticky And Scroll UP */
    $(window).on('scroll', function () {
      var scroll = $(window).scrollTop();
      if (scroll < 250) {
        $(".header").removeClass("header-bar");
		$(".menu__item").removeClass("menu__item_scroll");
        // $('#back-top').fadeOut(500);
      } else {
        $(".header").addClass("header-bar");
		$(".menu__item").addClass("menu__item_scroll");
		$('.menu-mobi-header').fadeOut(400);
        // $('#back-top').fadeIn(500);
      }
    });


/* Hamburger menu */

$('.hamburger').on('click', function(){
	$('.menu-mobi-header').toggle();
  })
  
  $('.mobi-menu-close').on('click', function(){
	$('.menu-mobi-header').hide();
  })
  




  /* Tabs animate */

$('.offer-btn__next').on('click',function(){
	let href=$(this).attr('href');
  
	$('html,body').animate({
	  scrollTop:$(href).offset().top 
	}, {
	  duration:350,
	  easing:"linear"
	});
  
	return false;
  })

  
/* Wrapper-modal call-back */

  $(document).ready(function(){
	$('.phone-icon').click(function(){
	  $('.wrapper-modal').addClass('active');
	  
	});
  })
  $(document).ready(function(){
	$('.overlay').click(function(){
	  $('.wrapper-modal').removeClass('active');
	  
	});
  })
  $(document).ready(function(){
	$('.close').click(function(){
	  $('.wrapper-modal').removeClass('active');
	  
	})
  })

  /* Wrapper-modal-two successfully */
//   $(document).ready(function(){
// 	$('.overlay').click(function(){
// 	  $('.wrapper-modal-two').removeClass('active');
	  
// 	});
//   })
//   $(document).ready(function(){
// 	$('.btn-ghost_modal').click(function(){
// 	  $('.wrapper-modal-two').removeClass('active');
	  
// 	})
//   })

/* Validate*/

$('.select-btn').on('click',function(e){
	e.preventDefault();
		  $(this).parent('form').submit();
  })
  
  
  $.validator.addMethod("regex", function(value, element, regexp) {
	let regExsp = new RegExp(regexp);
	return regExsp.test(value);
  },"Please check your input.");

// Функция валидации и вывода сообщения

function valEl(el){
	el.validate ({
	  rules:{
		firstName:{
		  required: true,
		  regex : "[a-zA-Z-А-Яа-я]" 
	  },
	  email:{
		required: true,
		email: true
	  },
	  phone:{
		required: true,
		digits : true,
		minlength: 10,
		maxlength: 11,
		regex: "[0-9]+"
	  }
	},
	messages: {
	  firstName: {
		required: 'Поле обязательно для заполнения',
		regex: 'Введите имя вверно'
	  },
	  phone:{
		required: 'Поле обязательно для заполнения',
		digits: 'Телефон может содержать только числа',
		minlength: 'Минимальное количество цифер 10',
		maxlength: 'Максимальное количество цифер 11'
	  },
	  email: {
		required: 'Поле обязательно для заполнения',
		email: 'Неверный формат E-mail'
	  }
  
	},
	 // Начинаем проверку id="" формы
	 submitHandler: function (form) {
		// $('#preloader-active').fadeIn();
		let $form = $(form);
		let $formId = $(form).attr('id');
		switch ($formId) {
			// Если у формы id="goToNewPage" - делаем:
			case 'form-book':
			  $.ajax({
				type: 'POST',
				url: '/wp-content/themes/womazing/mail.php',
				data: $form.serialize()
			})
			.done(function() {
				console.log('Success');
			})
			.fail(function() {
				console.log('Fail');
			})
			.always(function() {
				console.log('Always');
				setTimeout(function() {
					$form.trigger('reset');
					$('.call-back_modal').addClass('none');
					$('.successfully').fadeIn();
					//открытие сообщ 
				}, 1100);
				$('.btn-ghost_modal').on('click', function(e) {
					$('.wrapper-modal').removeClass('active');
					//close
				});

			});
		break;
}
return false;
}
})
}
	// Запускаем механизм валидации форм, если у них есть класс .js-form
	$('.form-val').each(function() {
		valEl($(this));
	  });


	  // Ввод input class="quantity" только с 1 (-1,0 нельзя)
	//   $(function() {
	// 	$(document).on("change keyup input click", "input[name='quantity']" , function() {
	// 		if(this.value.match(/[^0-9]/g)){
	// 			this.value = this.value.replace(/[^0-9]/g, "");
	// 		};
	// 	});
	// });

	// Ввод input class="phone" только с 1 (-1,0 нельзя)
	$(function() {
		$(document).on("change keyup input click", "input[name='phone']" , function() {
			if(this.value.match(/[^0-9]/g)){
				this.value = this.value.replace(/[^0-9]/g, "");
			};
		});
	});

	
	// active на цвет одежды
	$('.color').click(function() {  
		$('.color').not(this).removeClass('active');
		$(this).toggleClass('active');
	});
	// active на размер одежды
	$('.size').click(function() {  
		$('.size').not(this).removeClass('active');
		$(this).toggleClass('active');
	});


	$('.btn-ghost_shop').click(function() {  
		$('.btn-ghost_shop').not(this).removeClass('active');
		$(this).toggleClass('active');
	});

	//Slider

		$(document).ready(function(){
		$('.slider').slick({
			arrows: false,
			dots: true,
			speed:1000,
			easing:'_ease_',
			autoplay:true,
			autoplaySpeed:2000,
			infinite: true,
			waitForAnimate:false,
			asNavFor: '.slider-photo'
		});
		$('.slider-photo').slick({
			arrows: false,
			dots: false,
			speed:1000,
			easing:'_ease_',
			autoplay:true,
			autoplaySpeed:2000,
			infinite: true,
			waitForAnimate:false,
			asNavFor: '.slider'
		});	
		$('.slider-wrapper').slick({
			arrows: true,
			dots: true,
			speed:1000,
			easing:'_ease_',
			autoplay:true,
			autoplaySpeed:2000,
			infinite: true,
			waitForAnimate:false
	});
});


// выделение активного меню

	// $(function($){
	// 	var url = document.location.href;
	// 	var pos= url.indexOf("#");
	// 	if (pos > 0) {
	// 		url = url.substring(0, pos);
	// 	}
	// 	$.each($('.menu__item a'), function(index, value) {
	// 		if (url.indexOf($(this).attr('href')) + 1) {
	// 			$(this).addClass('active').parent().addClass('active');
	// 		}
	// 	});
	// });

	$('li.filter-item.label:nth-child(1)').addClass('active');
	$('img.attachment-full.size-full').addClass('size-box');

	


})(jQuery);

const sort_items = document.querySelectorAll('.orderby option');

sort_items.forEach(el => el.addEventListener('click', () => {
  const data_value = el.getAttribute('data-value');
  window.location.href = "/shop?orderby=" + data_value;
}));
