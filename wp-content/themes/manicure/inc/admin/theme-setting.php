<?php

/**
 * WordPress theme settings API class
 *
 */
if (!class_exists('Manicure_Settings_API')):
    class Manicure_Settings_API
    {

        private $settings_api;

        function __construct()
        {
            $this->settings_api = new WeDevs_Settings_API;

            add_action('admin_init', array($this, 'admin_init'));
            add_action('admin_menu', array($this, 'admin_menu'));
        }

        function admin_init()
        {

            //set the settings
            $this->settings_api->set_sections($this->get_settings_sections());
            $this->settings_api->set_fields($this->get_settings_fields());

            //initialize settings
            $this->settings_api->admin_init();
        }

        function admin_menu()
        {
            add_options_page('Theme Settings', 'Theme Settings', 'delete_posts', 'settings_api_test', array(
                $this,
                'theme_setting_page'
            ));
        }

        function get_settings_sections()
        {
            $sections = array(
                array(
                    'id' => 'header',
                    'title' => __('Header Settings', 'manicure')
                ),
                array(
                    'id' => 'footer',
                    'title' => __('Footer Settings', 'manicure')
                ),
                array(
                    'id' => 'action2',
                    'title' => __('Action Vip мастер', 'manicure')
                ),
                array(
                    'id' => 'action3',
                    'title' => __('Action PREMIUM курс', 'manicure')
                ),
                array(
                    'id' => 'popup',
                    'title' => __('Popup Settings (по кнопке закажите звонок)', 'manicure')
                ), array(
                    'id' => 'form-course',
                    'title' => __('Форма курса', 'manicure')
                ), array(
                    'id' => 'table-vip',
                    'title' => __('Форма в таблице Вип', 'manicure')
                ), array(
                    'id' => 'form-premium',
                    'title' => __('Форма в таблице Premium', 'manicure')
                )


            );

            return $sections;
        }

        /**
         * Returns all the settings fields
         *
         * @return array settings fields
         */
        function get_settings_fields()
        {
            $settings_fields = array(
                'table-vip' => array(
                    array(
                        'name' => 'popup_shortcode-vip',
                        'label' => __('Шорткод формы', 'manicure'),
                        'type' => 'text',

                    ),

                    array(
                        'name' => 'block-table-price-vip-old',
                        'label' => __('Старая цена', 'manicure'),
                        'type' => 'text',

                    ),    array(
                        'name' => 'block-table-price-vip',
                        'label' => __('Цена', 'manicure'),
                        'type' => 'text',

                    ),
                    array(
                        'name' => 'block-table-price-vip-link',
                        'label' => __('Ссылка на страницу', 'manicure'),
                        'type' => 'text',

                    )

                ),
                'form-premium' => array(
                    array(
                        'name' => 'popup_shortcode-premium',
                        'label' => __('Шорткод формы', 'manicure'),
                        'type' => 'text',

                    ),

                    array(
                        'name' => 'block-table-price-premium-old',
                        'label' => __('Старая цена', 'manicure'),
                        'type' => 'text',

                    ),
                    array(
                        'name' => 'block-table-price-premium',
                        'label' => __('Цена', 'manicure'),
                        'type' => 'text',

                    ),
                    array(
                        'name' => 'block-table-price-premium-link',
                        'label' => __('Ссылка на страницу', 'manicure'),
                        'type' => 'text',

                    )


                ),
                'popup' => array(
                    array(
                        'name' => 'popup_shortcode',
                        'label' => __('Шорткод формы', 'manicure'),
                        'type' => 'text',

                    ),

                    array(
                        'name' => 'popup_shortcode-vipbanner',
                        'label' => __('Шорткод формы баннер', 'manicure'),
                        'type' => 'text',

                    ),
                    array(
                        'name' => 'last-price',
                        'label' => __('Шорткод формы "Последний шанс"', 'manicure'),
                        'type' => 'text',

                    ),

                    array(
                        'name' => 'popup_shortcodeVip',
                        'label' => __('Шорткод формы Вип', 'manicure'),
                        'type' => 'text',

                    ),

                    array(
                        'name' => 'shortcodeVip',
                        'label' => __('Шорткод формы Вип секция', 'manicure'),
                        'type' => 'text',

                    )
                ),
                'form-course' => array(
                    array(
                        'name' => 'form_shortcode',
                        'label' => __('Шорткод формы', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'form_shortcode2',
                        'label' => __('Шорткод формы на главной', 'manicure'),
                        'type' => 'text',

                    )
                ),
                'action2' => array(
                    array(
                        'name' => 'action-top',
                        'label' => __('Дата проведения C', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-top',
                        'label' => __('Дата проведения C', 'manicure'),
                        'type' => 'text',

                    ),
                    array(
                        'name' => 'action-po',
                        'label' => __('Дата проведения ПО', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-section-month',
                        'label' => __('Месяц', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-old-price',
                        'label' => __('Новая цена', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-new-price',
                        'label' => __('Старая цена', 'manicure'),
                        'type' => 'text',

                    ),
                    array(
                        'name' => 'action-form',
                        'label' => __('Шорткод формы', 'manicure'),
                        'type' => 'text',

                    ),
                    array(
                        'name' => 'action-year',
                        'label' => __('Год', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-month',
                        'label' => __('Месяц', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-day',
                        'label' => __('День', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-hour',
                        'label' => __('Час', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-minute',
                        'label' => __('Минута', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-second',
                        'label' => __('Секунда', 'manicure'),
                        'type' => 'text',
                    ),
                ),
                'action3' => array(
                    array(
                        'name' => 'action-top2',
                        'label' => __('Дата проведения C', 'manicure'),
                        'type' => 'text',

                    ),
                    array(
                        'name' => 'action-po2',
                        'label' => __('Дата проведения ПО', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-section-month2',
                        'label' => __('Месяц', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-old-price2',
                        'label' => __('Новая цена', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-new-price2',
                        'label' => __('Старая цена', 'manicure'),
                        'type' => 'text',

                    ),
                    array(
                        'name' => 'action-form2',
                        'label' => __('Шорткод формы', 'manicure'),
                        'type' => 'text',

                    ),
                    array(
                        'name' => 'action-year2',
                        'label' => __('Год', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-month2',
                        'label' => __('Месяц', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-day2',
                        'label' => __('День', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-hour2',
                        'label' => __('Час', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-minute2',
                        'label' => __('Минута', 'manicure'),
                        'type' => 'text',

                    ), array(
                        'name' => 'action-second2',
                        'label' => __('Секунда', 'manicure'),
                        'type' => 'text',
                    ),
                ),


                'footer' => array(

                    array(
                        'name' => 'footer-menu-text',
                        'label' => __('Текст копирайт', 'manicure'),
                        'type' => 'text',
                        'default' => 'Школа маникюра и педикюра в Москве © 2018 Все права защищены',
                    ),
                    array(
                        'name' => 'link-wb-st',
                        'label' => __('Наши контакты', 'manicure'),
                        'type' => 'text',
                        'default' => 'https://sait-sozdanie.com/',
                    ),
                    array(
                        'name' => 'footer_link-text-web',
                        'label' => __('Текст ссылки на веб-студию', 'manicure'),
                        'type' => 'text',
                        'default' => 'Создание сайтов и сео продвижение'
                    ),
                    array(
                        'name' => 'footer_link-data',
                        'label' => __('Текст ссылки Контактные данные', 'manicure'),
                        'type' => 'text',
                        'default' => 'КОНТАКТНЫЕ ДАННЫЕ ОРГАНИЗАЦИИ'
                    ),
                    array(
                        'name' => 'vk-icon',
                        'label' => __('Иконка Вконтакте', 'manicure'),
                        'type' => 'file',

                    ),
                    array(
                        'name' => 'vk-link',
                        'label' => __('Ссылка вконтакте', 'manicure'),
                        'type' => 'text',
                        'default' => 'https://vk.com/zolotaya_nika/'
                    ),
                    array(
                        'name' => 'fb-icon',
                        'label' => __('Иконка facebook', 'manicure'),
                        'type' => 'file',

                    ),
                    array(
                        'name' => 'fb-link',
                        'label' => __('Ссылка facebook', 'manicure'),
                        'type' => 'text',
                        'default' => 'https://www.facebook.com/nikagoldschool/'
                    ),
                    array(
                        'name' => 'insta-icon',
                        'label' => __('Иконка instagram', 'manicure'),
                        'type' => 'file',

                    ),
                    array(
                        'name' => 'insta-link',
                        'label' => __('Ссылка instagram', 'manicure'),
                        'type' => 'text',
                        'default' => 'https://www.instagram.com/shkola_nika/'
                    )
                ),
                'header' => array(
                    array(
                        'name' => 'header-logo',
                        'label' => __('Логотип', 'manicure'),
                        'type' => 'file',
                        'default' => '',
                    ),
                    array(
                        'name' => 'header-logo-text',
                        'label' => __('Текст возле логотипа', 'manicure'),
                        'type' => 'text',
                        'default' => 'Учебный Центр <br> Маникюра и Педикюра',
                    ),
                    array(
                        'name' => 'header-btn-price',
                        'label' => __('Стоимость курса', 'manicure'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'header-btn-name',
                        'label' => __('Название курса', 'manicure'),
                        'type' => 'text',
                        'default' => '',
                    ), array(
                        'name' => 'header-btn-mobile',
                        'label' => __('Иконка сбербанка для мобильного', 'manicure'),
                        'type' => 'file',
                        'default' => '',
                    ), array(
                        'name' => 'header_top-text',
                        'label' => __('Текст над кнопкой', 'manicure'),
                        'type' => 'text',
                        'default' => 'Позвоните Бесплатно!',
                    ), array(
                        'name' => 'header_tel-text',
                        'label' => __('Текст кнопки', 'manicure'),
                        'type' => 'text',
                        'default' => 'или Закажите Звонок',
                    ),
                )
            );

            return $settings_fields;
        }


        function theme_setting_page()
        {
            echo '<div class="wrap">';

            $this->settings_api->show_navigation();
            $this->settings_api->show_forms();

            echo '</div>';
        }

        /**
         * Get all the pages
         *
         * @return array page names with key value pairs
         */
        function get_pages()
        {
            $pages = get_pages();
            $pages_options = array();
            if ($pages) {
                foreach ($pages as $page) {
                    $pages_options[$page->ID] = $page->post_title;
                }
            }

            return $pages_options;
        }

    }

    new Manicure_Settings_API();

endif;