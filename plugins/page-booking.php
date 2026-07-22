<?php
/*
Template Name: HivePress Booking Reminders
Template Post Type: plugin
*/
get_header();
?>

<main id="primary" class="site-main hpbr-page">

<section class="pscdHero">
    <div class="container">
        <div class="pscdHero__wrap">
            <div class="pscdHero__content">
                <div class="pscdBadge">HivePress / Bookings</div>

                <h1 class="pscdHero__title">
                    Напоминания о бронированиях<br>
                    для HivePress
                </h1>

                <p class="pscdHero__text">
                    Плагин автоматически отправляет email-напоминания клиентам и владельцам объявлений
                    о предстоящих бронированиях в HivePress Bookings. Помогает снизить количество
                    забытых встреч, отмен и пропущенных заявок.
                </p>

                <div class="pscdHero__actions">
                    <a href="/contacts" class="pscdBtn pscdBtn--primary">Заказать плагин</a>
                    <a href="mailto:paveldamut4@gmail.com" class="pscdBtn pscdBtn--ghost">Задать вопрос</a>
                </div>

                <div class="pscdHero__trust">
                    <span>HivePress Bookings</span>
                    <span>WP-Cron</span>
                    <span>Email-уведомления</span>
                </div>
            </div>

            <div class="pscdHero__side">
                <div class="pscdMiniCard">
                    <div class="pscdMiniCard__title">Что умеет плагин</div>
                    <ul class="pscdMiniCard__list">
                        <li>Напоминания перед бронированием</li>
                        <li>Письма клиентам</li>
                        <li>Письма владельцам объявлений</li>
                        <li>Настраиваемое время отправки</li>
                        <li>Несколько напоминаний</li>
                        <li>Персонализированные тексты писем</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pscdSection pscdSection--soft">
    <div class="container">
        <div class="pscdHeading">
            <h2>Зачем нужны напоминания о бронированиях</h2>
            <p>
                На сайтах с бронированиями пользователи часто забывают о встречах,
                консультациях, аренде или записи на услугу. Автоматические напоминания
                помогают заранее уведомить обе стороны и снизить количество срывов.
            </p>
        </div>

        <div class="pscdGrid pscdGrid--3">
            <article class="pscdCard">
                <h3>Меньше пропущенных встреч</h3>
                <p>
                    Клиент получает письмо до начала бронирования и заранее вспоминает
                    о запланированной услуге, аренде или консультации.
                </p>
            </article>

            <article class="pscdCard">
                <h3>Уведомления для исполнителей</h3>
                <p>
                    Владелец объявления тоже получает напоминание, поэтому ему проще
                    подготовиться и не пропустить заявку.
                </p>
            </article>

            <article class="pscdCard">
                <h3>Автоматизация без ручной работы</h3>
                <p>
                    После настройки плагин сам проверяет будущие бронирования и отправляет
                    письма по заданным интервалам.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="pscdSection">
    <div class="container">
        <div class="pscdHeading">
            <h2>Основные возможности</h2>
        </div>

        <div class="pscdGrid pscdGrid--2">
            <article class="pscdFeature">
                <h3>Автоматические напоминания</h3>
                <p>
                    Плагин отслеживает предстоящие бронирования и отправляет уведомления
                    за заданное количество часов или дней до начала.
                </p>
            </article>

            <article class="pscdFeature">
                <h3>Несколько уведомлений</h3>
                <p>
                    Можно настроить несколько напоминаний: например, за 24 часа и за 2 часа
                    до начала бронирования.
                </p>
            </article>

            <article class="pscdFeature">
                <h3>Письма клиентам</h3>
                <p>
                    Клиент получает понятное письмо с информацией о предстоящем бронировании,
                    дате, времени и деталях записи.
                </p>
            </article>

            <article class="pscdFeature">
                <h3>Письма владельцам объявлений</h3>
                <p>
                    Владелец объявления может получать отдельное уведомление, чтобы заранее
                    подготовиться к услуге или встрече.
                </p>
            </article>

            <article class="pscdFeature">
                <h3>Настраиваемые тексты</h3>
                <p>
                    Тексты email-уведомлений можно адаптировать под стиль проекта,
                    формат услуги и конкретный сценарий бронирования.
                </p>
            </article>

            <article class="pscdFeature">
                <h3>Работа через WP-Cron</h3>
                <p>
                    Отправка напоминаний работает на стандартном механизме WordPress,
                    без обязательного подключения сторонних сервисов.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="pscdSection pscdSection--soft">
    <div class="container">
        <div class="pscdHeading">
            <h2>Для каких проектов подходит</h2>
        </div>

        <div class="pscdGrid pscdGrid--3">
            <article class="pscdCard pscdCard--accent">
                <h3>Маркетплейсы услуг</h3>
                <p>
                    Для сайтов, где клиенты бронируют специалистов, консультации,
                    записи, выезды или индивидуальные услуги.
                </p>
            </article>

            <article class="pscdCard pscdCard--accent">
                <h3>Аренда недвижимости и техники</h3>
                <p>
                    Подходит для проектов с посуточной арендой, бронированием помещений,
                    оборудования, транспорта или инвентаря.
                </p>
            </article>

            <article class="pscdCard pscdCard--accent">
                <h3>Образовательные проекты</h3>
                <p>
                    Можно использовать для записи на занятия, курсы, консультации,
                    онлайн и офлайн мероприятия.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="pscdSection">
    <div class="container">
        <div class="pscdHeading">
            <h2>Как это работает</h2>
        </div>

        <div class="pscdSteps">
            <div class="pscdStep">
                <div class="pscdStep__num">01</div>
                <div class="pscdStep__content">
                    <h3>Плагин проверяет бронирования</h3>
                    <p>
                        Система отслеживает будущие бронирования, созданные через HivePress Bookings.
                    </p>
                </div>
            </div>

            <div class="pscdStep">
                <div class="pscdStep__num">02</div>
                <div class="pscdStep__content">
                    <h3>Сравнивает дату и интервал</h3>
                    <p>
                        Если до бронирования осталось заданное количество часов или дней,
                        плагин подготавливает уведомление.
                    </p>
                </div>
            </div>

            <div class="pscdStep">
                <div class="pscdStep__num">03</div>
                <div class="pscdStep__content">
                    <h3>Отправляет email</h3>
                    <p>
                        Напоминание уходит клиенту, владельцу объявления или обеим сторонам,
                        в зависимости от настроек.
                    </p>
                </div>
            </div>

            <div class="pscdStep">
                <div class="pscdStep__num">04</div>
                <div class="pscdStep__content">
                    <h3>Работает автоматически</h3>
                    <p>
                        После настройки администратору не нужно вручную напоминать пользователям
                        о предстоящих бронированиях.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pscdSection pscdSection--soft">
    <div class="container">
        <div class="pscdHeading">
            <h2>Что получает владелец сайта</h2>
        </div>

        <div class="pscdGrid pscdGrid--3">
            <article class="pscdCard">
                <h3>Меньше отмен</h3>
                <p>
                    Пользователи заранее получают уведомления и реже забывают о своих бронированиях.
                </p>
            </article>

            <article class="pscdCard">
                <h3>Лучший сервис</h3>
                <p>
                    Автоматические письма делают проект более аккуратным, понятным и профессиональным.
                </p>
            </article>

            <article class="pscdCard">
                <h3>Экономия времени</h3>
                <p>
                    Менеджерам не нужно вручную писать клиентам и исполнителям перед каждой записью.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="pscdSection">
    <div class="container">
        <div class="pscdHeading">
            <h2>Технические требования</h2>
        </div>

        <div class="pscdGrid pscdGrid--3">
            <article class="pscdCard">
                <h3>WordPress</h3>
                <p>
                    Рекомендуемая версия WordPress — 6.0 или выше.
                </p>
            </article>

            <article class="pscdCard">
                <h3>HivePress Bookings</h3>
                <p>
                    Плагин рассчитан на работу с HivePress и расширением HivePress Bookings.
                </p>
            </article>

            <article class="pscdCard">
                <h3>PHP 8.0+</h3>
                <p>
                    Для стабильной работы рекомендуется современная версия PHP и настроенная отправка почты.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="pscdSection pscdSection--soft">
    <div class="container">
        <div class="pscdHeading">
            <h2>Что нужно для заказа</h2>
        </div>

        <div class="pscdGrid pscdGrid--2">
            <article class="pscdFeature">
                <h3>Доступ к сайту</h3>
                <p>
                    Нужен сайт с установленным HivePress и HivePress Bookings,
                    чтобы проверить совместимость и корректно настроить плагин.
                </p>
            </article>

            <article class="pscdFeature">
                <h3>Интервалы напоминаний</h3>
                <p>
                    Нужно определить, когда отправлять письма: например, за 24 часа,
                    за 2 часа или по другому сценарию.
                </p>
            </article>

            <article class="pscdFeature">
                <h3>Тексты писем</h3>
                <p>
                    Можно использовать стандартные тексты или подготовить свои сообщения
                    под стиль вашего проекта.
                </p>
            </article>

            <article class="pscdFeature">
                <h3>Проверка почты</h3>
                <p>
                    На сайте должна быть настроена отправка email. При необходимости
                    можно дополнительно подключить SMTP.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="pscdSection">
    <div class="container">
        <div class="pscdHeading">
            <h2>Частые вопросы</h2>
        </div>

        <div class="pscdFaq">
            <div class="pscdFaq__item">
                <h3>Для чего нужен этот плагин?</h3>
                <p>
                    Он автоматически напоминает клиентам и владельцам объявлений
                    о предстоящих бронированиях в HivePress.
                </p>
            </div>

            <div class="pscdFaq__item">
                <h3>Можно ли отправлять несколько напоминаний?</h3>
                <p>
                    Да, можно настроить несколько уведомлений до начала бронирования,
                    например за день и за несколько часов.
                </p>
            </div>

            <div class="pscdFaq__item">
                <h3>Кому отправляются письма?</h3>
                <p>
                    Уведомления можно отправлять клиентам, владельцам объявлений
                    или обеим сторонам одновременно.
                </p>
            </div>

            <div class="pscdFaq__item">
                <h3>Можно ли изменить текст уведомлений?</h3>
                <p>
                    Да, тексты писем можно адаптировать под конкретный сайт,
                    нишу и формат бронирования.
                </p>
            </div>

            <div class="pscdFaq__item">
                <h3>Нужны ли сторонние сервисы?</h3>
                <p>
                    Нет, базовая отправка работает через стандартную почтовую систему WordPress.
                    Для лучшей доставляемости можно подключить SMTP.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="pscdCta">
    <div class="container">
        <div class="pscdCta__box">
            <div class="pscdCta__content">
                <h2>Нужно добавить напоминания в HivePress?</h2>
                <p>
                    Опишите, как сейчас устроены бронирования на вашем сайте:
                    какие услуги бронируют, кому нужно отправлять письма и за сколько времени
                    до события нужно напоминать.
                </p>
            </div>

            <div class="pscdCta__actions">
                <a href="/contacts" class="pscdBtn pscdBtn--primary">Обсудить плагин</a>
                <a href="mailto:paveldamut4@gmail.com" class="pscdBtn pscdBtn--ghost">Написать на почту</a>
            </div>
        </div>
    </div>
</section>

</main>

<style>
.pscdHero,
.pscdSection,
.pscdCta {
    padding: 72px 0;
}

.pscdSection--soft {
    background: #f5f7fb;
}

.pscdHero__wrap {
    display: grid;
    grid-template-columns: minmax(0, 1.2fr) minmax(320px, .8fr);
    gap: 32px;
    align-items: center;
}

.pscdBadge {
    display: inline-flex;
    align-items: center;
    min-height: 36px;
    padding: 8px 14px;
    border-radius: 999px;
    background: rgba(108, 64, 255, 0.08);
    color: #6c40ff;
    font-size: 14px;
    font-weight: 700;
    margin-bottom: 18px;
}

.pscdHero__title,
.pscdHeading h2,
.pscdCta__content h2 {
    margin: 0 0 18px;
    color: #2f3950;
    line-height: 1.08;
    font-weight: 800;
}

.pscdHero__title {
    font-size: clamp(36px, 5vw, 62px);
}

.pscdHero__text,
.pscdHeading p,
.pscdCard p,
.pscdFeature p,
.pscdStep__content p,
.pscdFaq__item p,
.pscdCta__content p {
    color: #667085;
    font-size: 18px;
    line-height: 1.75;
    margin: 0;
}

.pscdHero__actions,
.pscdCta__actions {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    margin-top: 28px;
}

.pscdBtn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 52px;
    padding: 0 22px;
    border-radius: 16px;
    text-decoration: none;
    font-weight: 700;
    transition: transform .2s ease, box-shadow .2s ease, background .2s ease;
}

.pscdBtn:hover {
    transform: translateY(-2px);
}

.pscdBtn--primary {
    background: #6c40ff;
    color: #fff;
    box-shadow: 0 18px 40px rgba(108, 64, 255, 0.18);
}

.pscdBtn--ghost {
    background: #fff;
    color: #2f3950;
    border: 1px solid #e3e8f2;
}

.pscdHero__trust {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 24px;
}

.pscdHero__trust span {
    padding: 10px 14px;
    border-radius: 999px;
    background: #f5f7fb;
    color: #546076;
    font-size: 14px;
    font-weight: 600;
}

.pscdMiniCard,
.pscdCard,
.pscdFeature,
.pscdFaq__item,
.pscdCta__box,
.pscdStep {
    background: #fff;
    border: 1px solid #e8edf5;
    border-radius: 28px;
    box-shadow: 0 14px 40px rgba(31, 41, 55, 0.04);
}

.pscdMiniCard {
    padding: 28px;
}

.pscdMiniCard__title {
    font-size: 22px;
    font-weight: 800;
    color: #2f3950;
    margin-bottom: 18px;
}

.pscdMiniCard__list {
    margin: 0;
    padding-left: 20px;
    color: #667085;
    line-height: 1.9;
}

.pscdHeading {
    max-width: 780px;
    margin: 0 auto 34px;
    text-align: center;
}

.pscdGrid {
    display: grid;
    gap: 24px;
}

.pscdGrid--2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

.pscdGrid--3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
}

.pscdCard,
.pscdFeature {
    padding: 28px;
}

.pscdCard h3,
.pscdFeature h3,
.pscdStep__content h3,
.pscdFaq__item h3 {
    margin: 0 0 14px;
    color: #2f3950;
    font-size: 24px;
    line-height: 1.3;
    font-weight: 800;
}

.pscdCard--accent {
    background: #fff;
}

.pscdSteps {
    display: grid;
    gap: 18px;
}

.pscdStep {
    display: grid;
    grid-template-columns: 92px 1fr;
    gap: 20px;
    padding: 24px;
    align-items: start;
}

.pscdStep__num {
    width: 68px;
    height: 68px;
    border-radius: 20px;
    background: #6c40ff;
    color: #fff;
    font-size: 22px;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
}

.pscdFaq {
    display: grid;
    gap: 18px;
}

.pscdFaq__item {
    padding: 28px;
}

.pscdCta__box {
    padding: 36px;
    display: flex;
    justify-content: space-between;
    gap: 24px;
    align-items: center;
    background: #fff;
}

.pscdCta__content {
    max-width: 760px;
}

@media (max-width: 1100px) {
    .pscdGrid--3 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 900px) {
    .pscdHero__wrap,
    .pscdGrid--2,
    .pscdGrid--3,
    .pscdCta__box,
    .pscdStep {
        grid-template-columns: 1fr;
    }

    .pscdHero,
    .pscdSection,
    .pscdCta {
        padding: 56px 0;
    }

    .pscdHero__text,
    .pscdHeading p,
    .pscdCard p,
    .pscdFeature p,
    .pscdStep__content p,
    .pscdFaq__item p,
    .pscdCta__content p {
        font-size: 16px;
    }

    .pscdCard h3,
    .pscdFeature h3,
    .pscdStep__content h3,
    .pscdFaq__item h3 {
        font-size: 22px;
    }
}
</style>

<?php if (function_exists('ps_render_plugin_specs')) {
	ps_render_plugin_specs(array('version' => '1.0.0', 'wp_tested' => 'WordPress 6.6', 'wc_tested' => 'WooCommerce 9.1', 'updated' => '21 июля 2026'));
}
?>

<?php if (function_exists('ps_render_plugin_related_sections')) {
	ps_render_plugin_related_sections();
}

get_footer(); ?>