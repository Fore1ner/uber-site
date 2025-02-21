window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.menu'),
    menuItem = document.querySelectorAll('.menu_item'),
    hamburger = document.querySelector('.hamburger'),
    nav = document.getElementsByTagName('nav');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger_active');
        menu.classList.toggle('menu_active');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger_active');
            menu.classList.toggle('menu_active');
        });
    });
    
    
    $(window).scroll(function(){// при скроле будет срабатывать функция
		if($(this).scrollTop()>600){ // если нашу страницу, проскролили больше чем на 1600 px
			$('.pageup').fadeIn() // то кнопка появляеться
            $('nav').css('background-color', 'grey');
		}
		else{
			$('.pageup').fadeOut()// иначе кнопка скрыта
            $('nav').css('background-color', 'black');
		}
	});
	$("a[href^=#up]").click(function(){
		const _href = $(this).attr("href");
		$("html, body").animate({scrollTop: $(_href).offset().top+"px"});
		return false;
	});
	// new WOW().init();
});