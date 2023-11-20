jQuery(document).ready(function($) {
    // Обработчик события клика по элементу
    $('.custom-element').click(function() {
        // Получаем ID элемента
        var element_id = $(this).attr('id');

        // Отправляем AJAX-запрос
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'custom_plugin_action',
                element_id: element_id
            },
            success: function(response) {
                // В этом месте вы можете обработать ответ от сервера
                // Например, отобразить данные в форме или выполнить другие действия
                console.log('Server response:', response);
            }
        });
    });
});
