<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="content">
        <div class="content_100w">
            <h1>Контакты и способы связи</h1>
            <p>
                Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить
                макеты
                или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать
                наличие самого текста или продемонстрировать типографику в деле.
            </p>
            <ul>
                <li>
                    <a href="https://instagram.com/a_kutseva/" rel="nofollow" target="_blank">
                        <svg>
                            <use xlink:href="#instagram"></use>
                        </svg>
                        instagram.com/a_kutseva/
                    </a>
                </li>
                <li>
                    <a href="https://vk.com/club80096689/" rel="nofollow" target="_blank">
                        <svg>
                            <use xlink:href="#vk"></use>
                        </svg>
                        vk.com/club80096689
                    </a>
                </li>
            </ul>
            <h2>Написать мне:</h2>
            <p>
                Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить
                макеты
                или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать
                наличие самого текста или продемонстрировать типографику в деле.
            </p>
            <p>
                <? $APPLICATION->IncludeComponent("bitrix:main.feedback", "feedback", array(
                    "EMAIL_TO" => "mihail@bazarow.ru",    // E-mail, на который будет отправлено письмо
                    "EVENT_MESSAGE_ID" => "",    // Почтовые шаблоны для отправки письма
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",    // Сообщение, выводимое пользователю после отправки
                    "REQUIRED_FIELDS" => array(    // Обязательные поля для заполнения
                        0 => "NAME",
                        1 => "EMAIL",
                        2 => "MESSAGE",
                    ),
                    "AJAX_MODE" => "Y",
                    "USE_CAPTCHA" => "Y",    // Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
                ),
                    false
                ); ?>
            </p>

        </div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>