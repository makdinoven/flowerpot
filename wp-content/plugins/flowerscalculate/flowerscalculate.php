<?php
/*
Plugin Name: flowercalculate
Description: Данный плагин позволяет рассчитать необходимое количество комнатных растений
Version: 1.0
Author: Maksim Dudzich
*/
function add_plugin_menu() {
    add_menu_page(
        'Настройк',          // Название страницы
        'Настройка',          // Название меню
        'administrator',      // Роль пользователя, который видит этот пункт меню
        'your-plugin-settings', // Уникальный идентификатор страницы
        'plugin_settings_page' // Функция, вызываемая для отображения содержимого страницы
    );
}
add_action('admin_menu', 'add_plugin_menu');

// Функция для отображения содержимого страницы настроек плагина
function plugin_settings_page() {
    echo '<div class="wrap">';
    echo '<h1>Настройки вашего плагина</h1>';
    echo '<p>Добавьте здесь свой HTML-код или форму настроек.</p>';
    echo '</div>';
}


function enqueue_plugin_scripts() {
    wp_enqueue_style('plugin-styles', plugins_url('css/styles.css', __FILE__));
    wp_enqueue_script('plugin-scripts', plugins_url('js/scripts.js', __FILE__), array('jquery'), null, true);
 }

    function custom_plugin_ajax_handler() {
        // Получаем ID элемента
        $element_id = $_POST['element_id'];

    
        // Здесь вы можете выполнить дополнительные действия с полученным ID
        // Например, обработать данные формы, сохранить их и вернуть результат
    
        // Возвращаем ответ в формате JSON
        wp_send_json_success(array('element_id' => $element_id));
    }
    add_action('wp_ajax_custom_plugin_action', 'custom_plugin_ajax_handler');
    
    // Добавляем скрипты и стили в админку (если необходимо)
    function custom_plugin_admin_enqueue_scripts() {
        //wp_enqueue_script();
        //wp_enqueue_style();
    }
    add_action('admin_enqueue_scripts', 'custom_plugin_admin_enqueue_scripts');
    ?>