$('#quizbook ul li .respuesta').on('click', function () {
    $(this).siblings().removeClass('seleccionada');
    $(this).siblings().removeAttr('seleccionada', false);
    $(this).addClass('seleccionada');
    $(this).attr('seleccionada', true);
});