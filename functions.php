<?php
/**
 * ****************************************************************************
 *
 *   НЕ РЕДАКТИРУЙТЕ ЭТОТ ФАЙЛ
 *   DON'T EDIT THIS FILE
 *
 *   После обновления Вы потереяете все изменения. Используйте дочернюю тему
 *   After update you will lose all changes. Use child theme
 *
 *   https://support.wpshop.ru/docs/general/child-themes/
 *
 * *****************************************************************************
 *
 * @package reboot
 */

require get_template_directory() . '/inc/init.php';


add_action('wp_enqueue_scripts', function () {
    wp_add_inline_style('wp-block-library', ':root{--accent:#4d3bfe}.subscribe-box__text{margin:8px 0 18px;color:#5D6475;line-height:1.55;font-size:16px}');
}, 1);





// Поддержка логотипа
add_theme_support( 'custom-logo', [
    'height'      => 80,
    'width'       => 280,
    'flex-height' => true,
    'flex-width'  => true,
] );
















/**
 * Shortcode: [why_plugins]
 * Блок "Почему выбирают наши плагины?"
 */
add_shortcode('why_plugins', function () {

    ob_start(); ?>

    <section class="whyPlugins">
        <div class="whyPlugins__container">
            <h2 class="whyPlugins__title">Почему выбирают наши плагины</h2>

            <div class="whyPlugins__grid wpds-fade-group" data-step="120">

                <article class="whyPlugins__card wpds-fade-item">
                    <div class="whyPlugins__icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M12 15.2a3.2 3.2 0 1 0 0-6.4 3.2 3.2 0 0 0 0 6.4Z"/>
                            <path d="M19.4 13.1c.04-.36.06-.73.06-1.1 0-.37-.02-.74-.06-1.1l2-1.55a.7.7 0 0 0 .17-.9l-1.9-3.29a.7.7 0 0 0-.85-.3l-2.35.95a8.1 8.1 0 0 0-1.9-1.1l-.35-2.5a.7.7 0 0 0-.7-.6h-3.8a.7.7 0 0 0-.7.6l-.35 2.5a8.1 8.1 0 0 0-1.9 1.1l-2.35-.95a.7.7 0 0 0-.85.3L2.43 7.46a.7.7 0 0 0 .17.9l2 1.55c-.04.36-.06.73-.06 1.1 0 .37.02.74.06 1.1l-2 1.55a.7.7 0 0 0-.17.9l1.9 3.29a.7.7 0 0 0 .85.3l2.35-.95c.6.44 1.23.8 1.9 1.1l.35 2.5a.7.7 0 0 0 .7.6h3.8a.7.7 0 0 0 .7-.6l.35-2.5c.67-.3 1.3-.66 1.9-1.1l2.35.95a.7.7 0 0 0 .85-.3l1.9-3.29a.7.7 0 0 0-.17-.9l-2-1.55Z"/>
                        </svg>
                    </div>
                    <h3 class="whyPlugins__cardTitle">SEO-оптимизация</h3>
                    <p class="whyPlugins__cardText">
                        Чистый код, быстрая загрузка, правильная семантическая структура.
                        Плагины используют SEO-специалисты и агентства.
                    </p>
                </article>

                <article class="whyPlugins__card wpds-fade-item">
                    <div class="whyPlugins__icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M13 2 4 14h7l-1 8 10-13h-7l0-7Z"/>
                        </svg>
                    </div>
                    <h3 class="whyPlugins__cardTitle">Минимальный вес</h3>
                    <p class="whyPlugins__cardText">
                        Никаких тяжёлых фреймворков. Каждый плагин написан вручную —
                        только необходимый код, максимальная скорость.
                    </p>
                </article>

                <article class="whyPlugins__card wpds-fade-item">
                    <div class="whyPlugins__icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M12 12a4 4 0 1 0-4-4 4 4 0 0 0 4 4Z"/>
                            <path d="M4.5 20.5c1.8-4.1 13.2-4.1 15 0"/>
                        </svg>
                    </div>
                    <h3 class="whyPlugins__cardTitle">Поддержка от разработчика</h3>
                    <p class="whyPlugins__cardText">
                        Общаетесь напрямую с тем, кто пишет код.
                        Без шаблонных ответов и очереди из менеджеров.
                    </p>
                </article>

                <article class="whyPlugins__card wpds-fade-item">
                    <div class="whyPlugins__icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M7.5 18.5H7a4.5 4.5 0 0 1 0-9 5.9 5.9 0 0 1 11.3 1.8A3.7 3.7 0 0 1 18.5 18.5H17"/>
                            <path d="M12 11.5v8"/>
                            <path d="M9.5 17l2.5 2.5L14.5 17"/>
                        </svg>
                    </div>
                    <h3 class="whyPlugins__cardTitle">Регулярные обновления</h3>
                    <p class="whyPlugins__cardText">
                        Выпускаем обновления с 2022 года.
                        Плагины всегда совместимы с актуальными версиями WordPress и WooCommerce.
                    </p>
                </article>

                <article class="whyPlugins__card wpds-fade-item">
                    <div class="whyPlugins__icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M12 21a9 9 0 1 0-9-9 9 9 0 0 0 9 9Z"/>
                            <path d="m8.2 12 2.5 2.6 5.1-5.4"/>
                        </svg>
                    </div>
                    <h3 class="whyPlugins__cardTitle">Совместимость с любой темой</h3>
                    <p class="whyPlugins__cardText">
                        Работают с любой темой без конфликтов и правок CSS.
                        Проверено на десятках проектов.
                    </p>
                </article>

                <article class="whyPlugins__card wpds-fade-item">
                    <div class="whyPlugins__icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M8 3h7l3 3v15a1.5 1.5 0 0 1-1.5 1.5H8A1.5 1.5 0 0 1 6.5 21V4.5A1.5 1.5 0 0 1 8 3Z"/>
                            <path d="M15 3v4h4"/>
                            <path d="M9 11h6"/>
                            <path d="M9 14h6"/>
                            <path d="M9 17h4.5"/>
                        </svg>
                    </div>
                    <h3 class="whyPlugins__cardTitle">Простая настройка</h3>
                    <p class="whyPlugins__cardText">
                        Понятный интерфейс без лишнего.
                        Установили — настроили за 10 минут, не нужен разработчик.
                    </p>
                </article>

            </div>
        </div>
    </section>

    <?php
    return ob_get_clean();
});


add_action('wp_enqueue_scripts', function () {

    $css = '
    .whyPlugins{padding:56px 0 64px}
    .whyPlugins__title{margin:0 0 28px;font-weight:700;letter-spacing:-.02em;color:#252A3A;font-size:clamp(28px,3.2vw,44px)}
    .whyPlugins__grid{display:grid;grid-template-columns:repeat(3,1fr);gap:28px}
    .whyPlugins__card{background:#fff;border-radius:20px;padding:26px;box-shadow:0 14px 40px rgba(16,24,40,.06)}
    .whyPlugins__icon svg{width:28px;height:28px;stroke:var(--accent);stroke-width:1.8;fill:none}
    .whyPlugins__cardTitle{margin:10px 0;font-weight:700;color:#424654;font-size:18px}
    .whyPlugins__cardText{margin:0;color:#7B8090;font-size:14px;line-height:1.65}

    @media (max-width:1024px){
      .whyPlugins__grid{grid-template-columns:repeat(2,1fr)}
    }
    @media (max-width:640px){
      .whyPlugins__grid{grid-template-columns:1fr;gap:16px}
      .whyPlugins__container{padding:0 16px}
    }
    ';

    wp_add_inline_style('wp-block-library', $css);
}, 20);







add_action('wp_enqueue_scripts', function () {

    /* CSS */
    $css = '
    .wpds-fade-item{opacity:0;transform:translateY(14px);transition:opacity .5s ease,transform .5s ease;will-change:opacity,transform}
    .wpds-fade-item.is-visible{opacity:1;transform:translateY(0)}
    @media (prefers-reduced-motion: reduce){
      .wpds-fade-item{opacity:1!important;transform:none!important;transition:none!important}
    }';
    wp_add_inline_style('wp-block-library', $css);

    /* JS */
    wp_register_script('wpds-fade', false, [], null, true);
    wp_enqueue_script('wpds-fade');

    wp_add_inline_script('wpds-fade', <<<JS
(function(){
  const groups=document.querySelectorAll('.wpds-fade-group');
  const observer=new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
      if(!entry.isIntersecting)return;
      const group=entry.target;
      const items=group.querySelectorAll('.wpds-fade-item');
      const step=parseInt(group.dataset.step||'120',10);
      items.forEach((item,i)=>{
        item.style.transitionDelay=(i*step)+'ms';
        item.classList.add('is-visible');
      });
      observer.unobserve(group);
    });
  },{threshold:.2,rootMargin:'0px 0px -10% 0px'});
  groups.forEach(g=>observer.observe(g));
})();
JS);

}, 30);


















/**
 * Shortcode: [wps_hero]
 * Hero-блок "Премиум темы и плагины для WordPress"
 */
add_shortcode('wps_hero', function () {

    ob_start(); ?>

    <section class="wpsHero">
        <div class="wpsHero__box">
            <div class="wpsHero__bg" aria-hidden="true"></div>

            <div class="wpsHero__content">
    <h2 class="wpsHero__title">
        Плагины и готовые решения<br>
        для WordPress и WooCommerce
        <span class="wpsHero__titleLine"></span>
    </h2>

    <p class="wpsHero__text">
        Разрабатываю кастомные плагины с 2022 года: автозаполнение,
        многошаговый чекаут, интеграции с CDEK и DaData.<br>
        Чистый код, быстрая установка, поддержка от разработчика.
    </p>

    <p class="wpsHero__trust">
        <a class="wpsHero__btn wpsHero__btn--primary" href="/wp-plugins/">Смотреть плагины →</a>
        <a class="wpsHero__btn wpsHero__btn--ghost" href="/contacts/">Написать по задаче</a>
    </p>
</div>
        </div>
    </section>

    <?php
    return ob_get_clean();
});


add_action('wp_enqueue_scripts', function () {

    $css = '
    .wpsHero__box{
        position:relative;
        overflow:hidden;
        border-radius:22px;
        background:var(--accent);
        box-shadow:0 24px 80px rgba(16,24,40,.12);
        min-height:640px
    }

    .wpsHero__bg{
    position:absolute;
    inset:0;
    pointer-events:none;
    opacity:.55;
    background: var(--accent);
}

    .wpsHero__content{
        position:relative;
        height:100%;
        display:grid;
        place-items:center;
        text-align:center;
        padding:72px 24px 64px;
        color:#fff
    }

    .wpsHero__title{
        margin:0;
        font-weight:800;
        letter-spacing:-.03em;
        font-size:clamp(32px,4.2vw,64px);
        line-height:1.08
    }

    .wpsHero__titleLine{
        display:block;
        width:200px;
        height:2px;
        background:rgba(255,255,255,.35);
        margin:18px auto 0;
        border-radius:999px
    }

    .wpsHero__text{
        margin:34px 0 0;
        max-width:920px;
        font-size:clamp(16px,1.6vw,22px);
        line-height:1.35;
        color:rgba(255,255,255,.85)
    }

    .wpsHero__trust{
        margin:44px 0 0;
        font-size:clamp(18px,1.9vw,26px);
        display:flex;
        align-items:center;
        justify-content:center;
        gap:14px;
        flex-wrap:wrap;
        color:rgba(255,255,255,.88)
    }

    .wpsHero__count{
        padding:10px 18px;
        background:#fff;
        color:#0E1220;
        border-radius:10px;
        font-weight:800;
        min-width:132px;
        box-shadow:0 12px 30px rgba(0,0,0,.12)
    }
    .wpsHero__btn{display:inline-flex;align-items:center;justify-content:center;padding:14px 22px;border-radius:12px;font-weight:800;text-decoration:none;transition:transform .18s ease,box-shadow .18s ease,background .18s ease}
    .wpsHero__btn:hover{transform:translateY(-2px);text-decoration:none}
    .wpsHero__btn--primary{background:#fff;color:#0E1220;box-shadow:0 12px 30px rgba(0,0,0,.12)}
    .wpsHero__btn--ghost{border:2px solid rgba(255,255,255,.5);color:#fff;background:rgba(255,255,255,.08)}

    @media (max-width:1024px){
        .wpsHero__box{min-height:560px;border-radius:20px}
        .wpsHero__content{padding:64px 18px 56px}
        .wpsHero__titleLine{width:170px}
    }

    @media (max-width:640px){
        .wpsHero__box{min-height:520px;border-radius:18px}
        .wpsHero__content{padding:54px 16px 48px}
        .wpsHero__text{margin-top:24px;line-height:1.45}
        .wpsHero__trust{margin-top:30px;gap:10px}
        .wpsHero__count{min-width:120px}
    }
    ';

    wp_add_inline_style('wp-block-library', $css);
}, 20);














/**
 * Shortcode: [top_month_plugins]
 * Блок "Чаще покупают за последний месяц"
 */
add_shortcode('top_month_plugins', function () {

    ob_start(); ?>

    <section class="topMonth">
        <div class="topMonth__container">
            <h2 class="topMonth__title">Популярные решения</h2>

            <div class="topMonth__grid wpds-fade-group" data-step="120">

                <!-- DaData -->
                <article class="pCard pCard--green wpds-fade-item">
                    <span class="pCard__badge pCard__badge--green">Лидер продаж</span>

                    <div class="pCard__row">
                        <div class="pCard__iconBox pCard__iconBox--green">
                            📍
                        </div>

                        <div class="pCard__body">
                            <h3 class="pCard__title">DaData WooCommerce</h3>
                            <p class="pCard__text">
                                Умное автозаполнение адреса, ИНН и реквизитов компании прямо в чекауте.
                                Клиент вводит первые буквы — система подбирает остальное.
                                Меньше ошибок в заказах, меньше ручной работы для вас.
                            </p>

                            <div class="pCard__meta">
                                <span class="pCard__star">★</span>
                                <strong>5.0</strong>
                                <span class="pCard__dot">·</span>
                                <span>Автозаполнение</span><span class="pCard__dot">·</span><span>WooCommerce</span>
                            </div>

                            <a class="pCard__btn pCard__btn--green" href="/dadata-woocommerce/">Подробнее →</a>
                        </div>
                    </div>
                </article>

                <!-- Checkout -->
                <article class="pCard pCard--purple pCard--outlined wpds-fade-item">
                    <div class="pCard__row">
                        <div class="pCard__iconBox pCard__iconBox--purple">
                            ⚡
                        </div>

                        <div class="pCard__body">
                            <h3 class="pCard__title pCard__title--purple">Кастомный Checkout</h3>
                            <p class="pCard__text">
                                Многошаговое оформление заказа с раздельной логикой для физических
                                и юридических лиц. Автоматическое определение страны, адаптивный
                                интерфейс, рост конверсии без A/B-тестов.
                            </p>

                            <div class="pCard__meta">
                                <span class="pCard__star">★</span>
                                <strong>5.0</strong>
                                <span class="pCard__dot">·</span>
                                <span>Чекаут</span><span class="pCard__dot">·</span><span>Конверсия</span>
                            </div>

                            <a class="pCard__btn pCard__btn--purple" href="/custom-checkout/">Подробнее →</a>
                        </div>
                    </div>
                </article>

                <!-- CDEK -->
                <article class="pCard pCard--blue wpds-fade-item">
                    <div class="pCard__row">
                        <div class="pCard__iconBox pCard__iconBox--blue">
                            🚚
                        </div>

                        <div class="pCard__body">
                            <h3 class="pCard__title">CDEK Delivery UX</h3>
                            <p class="pCard__text">
                                Исправляет стандартные проблемы с выбором ПВЗ CDEK в WooCommerce:
                                автоподбор города, корректный расчёт стоимости доставки,
                                оформление без ошибок.
                            </p>

                            <div class="pCard__meta">
                                <span class="pCard__star">★</span>
                                <strong>4.9</strong>
                                <span class="pCard__dot">·</span>
                                <span>Доставка</span><span class="pCard__dot">·</span><span>WooCommerce</span>
                            </div>

                            <a class="pCard__btn pCard__btn--blue" href="/cdek-delivery/">Подробнее →</a>
                        </div>
                    </div>
                </article>

                <!-- HivePress Map -->
                <article class="pCard pCard--purple wpds-fade-item">
                    <span class="pCard__badge pCard__badge--purple">Карта объявлений</span>

                    <div class="pCard__row">
                        <div class="pCard__iconBox pCard__iconBox--purple">
                            🗺
                        </div>

                        <div class="pCard__body">
                            <h3 class="pCard__title">HivePress Map Listings</h3>
                            <p class="pCard__text">
                                Отображение объявлений на карте Яндекс с фильтрами, карточками
                                и синхронизацией с поиском. Работает быстро даже при тысячах объявлений.
                            </p>

                            <div class="pCard__meta">
                                <span class="pCard__star">★</span>
                                <strong>5.0</strong>
                                <span class="pCard__dot">·</span>
                                <span>Маркетплейсы</span><span class="pCard__dot">·</span><span>HivePress</span>
                            </div>

                            <a class="pCard__btn pCard__btn--purpleOutline" href="/hivepress-map/">Подробнее →</a>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <?php
    return ob_get_clean();
});


add_action('wp_enqueue_scripts', function () {

    $css = '
    .topMonth{padding:40px 0}
    .topMonth__title{font-size:42px;font-weight:800;margin-bottom:24px;color:#252A3A}
    .topMonth__grid{display:grid;grid-template-columns:1fr 1fr;gap:26px}

    .pCard{background:#fff;border-radius:22px;padding:28px;box-shadow:0 16px 54px rgba(0,0,0,.06);position:relative}
    .pCard--outlined{border:2px solid var(--accent);box-shadow:none}

    .pCard__badge{position:absolute;top:18px;right:18px;padding:8px 12px;border-radius:999px;font-size:12px;font-weight:700;color:#fff}
    .pCard__badge--green{background:var(--accent)}
    .pCard__badge--purple{background:var(--accent)}

    .pCard__row{display:flex;gap:22px}
    .pCard__iconBox{width:64px;height:64px;border-radius:16px;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800;font-size:22px}
    .pCard__iconBox--green{background:var(--accent)}
    .pCard__iconBox--purple{background:var(--accent)}
    .pCard__iconBox--blue{background:var(--accent)}

    .pCard__title{margin:0 0 10px;font-size:22px;font-weight:800}
    .pCard__title--purple{color:var(--accent)}
    .pCard__text{font-size:14px;line-height:1.6;color:#5D6475;margin-bottom:16px}

    .pCard__meta{font-size:13px;color:#7B8090;margin-bottom:18px}
    .pCard__star{color:#F6A21A}

    .pCard__btn{display:inline-block;padding:12px 18px;border-radius:10px;font-weight:700;text-decoration:none;border:2px solid transparent}
    .pCard__btn--green{border-color:var(--accent);color:var(--accent)}
    .pCard__btn--purple{background:var(--accent);color:#fff}
    .pCard__btn--blue{border-color:var(--accent);color:var(--accent)}
    .pCard__btn--purpleOutline{border-color:var(--accent);color:var(--accent)}

    @media(max-width:1024px){
      .topMonth__grid{grid-template-columns:1fr}
    }
    ';

    wp_add_inline_style('wp-block-library', $css);
}, 20);





/**
 * Shortcode: [wpds_trust]
 * Блок доверия с цифрами и фактами.
 */
add_shortcode('wpds_trust', function () {
    $items = [
        ['num' => '4+', 'label' => 'года в разработке WordPress-плагинов'],
        ['num' => '500+', 'label' => 'установок на сайтах клиентов'],
        ['num' => '5.0 ★', 'label' => 'средний рейтинг продуктов'],
        ['num' => '0', 'label' => 'шаблонных ответов — только живой разработчик'],
    ];
    ob_start(); ?>
    <section class="wpdsTrust">
        <div class="wpdsTrust__grid wpds-fade-group" data-step="90">
            <?php foreach ($items as $item): ?>
                <article class="wpdsTrust__item wpds-fade-item">
                    <div class="wpdsTrust__num"><?php echo esc_html($item['num']); ?></div>
                    <p class="wpdsTrust__label"><?php echo esc_html($item['label']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <?php return ob_get_clean();
});

/**
 * Shortcode: [wpds_workflow]
 * Секция "Как проходит работа".
 */
add_shortcode('wpds_workflow', function () {
    $steps = [
        ['title' => 'Разбираемся в задаче', 'text' => 'Вы описываете проблему или пишете ТЗ. Если нужно — помогаем сформулировать требования и предлагаем несколько вариантов решения.'],
        ['title' => 'Подбираем или разрабатываем решение', 'text' => 'Смотрим, подойдёт ли готовый плагин или нужна доработка. Называем сроки и стоимость до старта — без неожиданностей.'],
        ['title' => 'Устанавливаем и настраиваем', 'text' => 'Внедряем на ваш сайт, проверяем совместимость с темой и другими плагинами, тестируем на реальных сценариях.'],
        ['title' => 'Поддерживаем после сдачи', 'text' => 'Отвечаем на вопросы, выпускаем обновления, помогаем с настройкой под изменения в проекте.'],
    ];
    ob_start(); ?>
    <section class="wpdsWorkflow">
        <div class="wpdsWorkflow__container">
            <h2 class="wpdsWorkflow__title">Как проходит работа</h2>
            <div class="wpdsWorkflow__grid wpds-fade-group" data-step="120">
                <?php foreach ($steps as $index => $step): ?>
                    <article class="wpdsWorkflow__card wpds-fade-item">
                        <div class="wpdsWorkflow__num"><?php echo esc_html($index + 1); ?></div>
                        <h3><?php echo esc_html($step['title']); ?></h3>
                        <p><?php echo esc_html($step['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php return ob_get_clean();
});

/**
 * Shortcode: [wpds_faq]
 * Секция FAQ для главной страницы.
 */
add_shortcode('wpds_faq', function () {
    $items = [
        ['q' => 'Плагины подойдут к моей теме?', 'a' => 'Да. Плагины разработаны без привязки к конкретным темам и не переопределяют стили без необходимости. Работают с Astra, Flatsome, OceanWP, кастомными темами и большинством других.'],
        ['q' => 'Как получить поддержку после покупки?', 'a' => 'Пишите напрямую в мессенджер или по email. Отвечаем в рабочее время, обычно в течение нескольких часов. Технические вопросы решаем, а не перекидываем на документацию.'],
        ['q' => 'Возможна ли доработка под мой проект?', 'a' => 'Да, это основное направление работы. Опишите задачу — разберём, что нужно изменить или добавить, и назовём стоимость.'],
        ['q' => 'Как часто выходят обновления?', 'a' => 'Регулярно, с 2022 года. При обновлении WordPress или WooCommerce проверяем совместимость и выпускаем патч при необходимости.'],
        ['q' => 'Можно ли купить плагин и самому установить?', 'a' => 'Конечно. После оплаты получаете файл плагина и инструкцию по установке. Если возникнут вопросы — поможем.'],
    ];
    ob_start(); ?>
    <section class="wpdsFaq">
        <div class="wpdsFaq__container">
            <h2 class="wpdsFaq__title">Частые вопросы</h2>
            <div class="wpdsFaq__list">
                <?php foreach ($items as $item): ?>
                    <details class="wpdsFaq__item">
                        <summary><?php echo esc_html($item['q']); ?></summary>
                        <p><?php echo esc_html($item['a']); ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php return ob_get_clean();
});

/**
 * Shortcode: [wpds_cta]
 * Финальный CTA для главной страницы.
 */
add_shortcode('wpds_cta', function () {
    ob_start(); ?>
    <section class="wpdsCta">
        <div class="wpdsCta__box">
            <h2>Есть задача под WordPress?</h2>
            <p>Опишите, что нужно сделать — разберёмся, подберём решение и назовём стоимость. Без лишних вопросов и шаблонных ответов.</p>
            <div class="wpdsCta__actions">
                <a class="wpdsCta__btn wpdsCta__btn--primary" href="/contacts/">Написать о задаче →</a>
                <a class="wpdsCta__btn wpdsCta__btn--ghost" href="/wp-plugins/">Смотреть готовые плагины</a>
            </div>
        </div>
    </section>
    <?php return ob_get_clean();
});

add_action('wp_enqueue_scripts', function () {
    $css = '
    .wpdsTrust{padding:34px 0}.wpdsTrust__grid{display:grid;grid-template-columns:repeat(4,1fr);gap:18px}.wpdsTrust__item{background:#fff;border-radius:20px;padding:24px;box-shadow:0 14px 40px rgba(16,24,40,.06)}.wpdsTrust__num{font-size:clamp(30px,3.5vw,48px);line-height:1;font-weight:800;color:var(--accent);letter-spacing:-.03em}.wpdsTrust__label{margin:10px 0 0;color:#5D6475;font-size:15px;line-height:1.45}
    .wpdsWorkflow,.wpdsFaq{padding:56px 0}.wpdsWorkflow__title,.wpdsFaq__title{margin:0 0 28px;font-weight:800;letter-spacing:-.02em;color:#252A3A;font-size:clamp(30px,3.5vw,46px)}.wpdsWorkflow__grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}.wpdsWorkflow__card{background:#fff;border-radius:22px;padding:26px;box-shadow:0 16px 54px rgba(16,24,40,.06)}.wpdsWorkflow__num{width:42px;height:42px;border-radius:12px;background:var(--accent);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:800;margin-bottom:18px}.wpdsWorkflow__card h3{margin:0 0 10px;color:#252A3A;font-size:19px;font-weight:800}.wpdsWorkflow__card p{margin:0;color:#5D6475;font-size:14px;line-height:1.65}
    .wpdsFaq__list{display:grid;gap:14px}.wpdsFaq__item{background:#fff;border-radius:16px;box-shadow:0 14px 40px rgba(16,24,40,.06);padding:0 22px}.wpdsFaq__item summary{cursor:pointer;list-style:none;padding:20px 0;font-weight:800;color:#252A3A;font-size:18px}.wpdsFaq__item summary::-webkit-details-marker{display:none}.wpdsFaq__item p{margin:0;padding:0 0 22px;color:#5D6475;line-height:1.65}
    .wpdsCta{padding:56px 0}.wpdsCta__box{background:var(--accent);border-radius:24px;padding:54px 28px;text-align:center;color:#fff;box-shadow:0 24px 80px rgba(16,24,40,.12)}.wpdsCta__box h2{margin:0;font-size:clamp(32px,4vw,52px);font-weight:800;letter-spacing:-.03em}.wpdsCta__box p{max-width:820px;margin:18px auto 0;color:rgba(255,255,255,.86);font-size:20px;line-height:1.45}.wpdsCta__actions{display:flex;gap:14px;justify-content:center;flex-wrap:wrap;margin-top:28px}.wpdsCta__btn{display:inline-flex;padding:14px 22px;border-radius:12px;font-weight:800;text-decoration:none}.wpdsCta__btn--primary{background:#fff;color:#0E1220}.wpdsCta__btn--ghost{border:2px solid rgba(255,255,255,.5);color:#fff;background:rgba(255,255,255,.08)}
    @media(max-width:1024px){.wpdsTrust__grid,.wpdsWorkflow__grid{grid-template-columns:repeat(2,1fr)}}@media(max-width:640px){.wpdsTrust__grid,.wpdsWorkflow__grid{grid-template-columns:1fr}.wpdsTrust,.wpdsWorkflow,.wpdsFaq,.wpdsCta{padding-left:16px;padding-right:16px}.wpdsCta__box{padding:38px 18px}.wpdsCta__box p{font-size:17px}}';
    wp_add_inline_style('wp-block-library', $css);
}, 20);












/**
 * ACF Options Page: Reviews
 */
add_action('acf/init', function () {

    if ( ! function_exists('acf_add_options_page') || ! function_exists('acf_add_local_field_group') ) {
        return;
    }

    acf_add_options_page([
        'page_title' => 'Отзывы (WPDS)',
        'menu_title' => 'Отзывы (WPDS)',
        'menu_slug'  => 'wpds-reviews',
        'capability' => 'manage_options',
        'redirect'   => false,
        'position'   => 59,
        'icon_url'   => 'dashicons-testimonial',
    ]);

    acf_add_local_field_group([
        'key' => 'group_wpds_reviews',
        'title' => 'Отзывы для слайдера',
        'fields' => [
            [
                'key' => 'field_wpds_reviews_title',
                'label' => 'Заголовок',
                'name' => 'wpds_reviews_title',
                'type' => 'text',
                'default_value' => 'Что говорят клиенты',
            ],
            [
                'key' => 'field_wpds_reviews_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'wpds_reviews_subtitle',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Только реальные отзывы от тех, кто купил продукт или заказал разработку. Без анонимов и накрутки.',
                'new_lines' => 'br',
            ],
            [
                'key' => 'field_wpds_reviews_items',
                'label' => 'Отзывы',
                'name' => 'wpds_reviews_items',
                'type' => 'repeater',
                'layout' => 'row',
                'button_label' => 'Добавить отзыв',
                'sub_fields' => [
                    [
                        'key' => 'field_wpds_review_name',
                        'label' => 'Имя',
                        'name' => 'name',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'key' => 'field_wpds_review_role',
                        'label' => 'Кто / сайт',
                        'name' => 'meta',
                        'type' => 'text',
                        'instructions' => 'Напр.: "Блоггер / vn-travel.ru"',
                    ],
                    [
                        'key' => 'field_wpds_review_avatar',
                        'label' => 'Аватар',
                        'name' => 'avatar',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ],
                    [
                        'key' => 'field_wpds_review_text',
                        'label' => 'Текст отзыва',
                        'name' => 'text',
                        'type' => 'textarea',
                        'rows' => 8,
                        'new_lines' => 'br',
                        'required' => 1,
                    ],
                    [
                        'key' => 'field_wpds_review_link',
                        'label' => 'Ссылка (опционально)',
                        'name' => 'link',
                        'type' => 'link',
                        'return_format' => 'array',
                    ],
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'wpds-reviews',
                ],
            ],
        ],
    ]);
});







/**
 * Shortcode: [wpds_reviews]
 * Требует ACF options:
 * - wpds_reviews_title
 * - wpds_reviews_subtitle
 * - wpds_reviews_items (repeater: name, meta, avatar(image), text, link)
 *
 * Поведение:
 * - Desktop: 4 карточки на экран
 * - Tablet: 2 карточки на экран
 * - Mobile: 1 карточка на экран
 * - Точки и стрелки листают "страницами" (группами) по текущему perView
 * - Свайп/drag: перелистывает на следующую/предыдущую страницу
 * - Длинный текст внутри карточки скроллится вниз
 */


/* =========================
 * 1) SHORTCODE
 * ========================= */
add_shortcode('wpds_reviews', function () {

    if ( ! function_exists('get_field') ) {
        return '<!-- ACF not installed -->';
    }

    $title    = get_field('wpds_reviews_title', 'option') ?: 'Отзывы наших клиентов';
    $subtitle = get_field('wpds_reviews_subtitle', 'option') ?: '';
    $items    = get_field('wpds_reviews_items', 'option');

    if ( empty($items) || !is_array($items) ) return '';

    $uid = 'wpdsReviews_' . wp_rand(1000, 9999);

    ob_start(); ?>
    <section class="reviewsBlock" data-wpds-reviews="<?php echo esc_attr($uid); ?>">
        <div class="reviewsBlock__container">
            <h2 class="reviewsBlock__title"><?php echo esc_html($title); ?></h2>

            <?php if ($subtitle): ?>
                <p class="reviewsBlock__subtitle"><?php echo wp_kses_post(nl2br($subtitle)); ?></p>
            <?php endif; ?>

            <div class="reviewsSlider">
                <button class="reviewsNav reviewsNav--prev" type="button" aria-label="Предыдущая страница отзывов">
                    <span aria-hidden="true">‹</span>
                </button>

                <div class="reviewsViewport">
                    <div class="reviewsInner" aria-live="polite">
                        <?php foreach ($items as $r):
                            $name = $r['name'] ?? '';
                            $meta = $r['meta'] ?? '';
                            $text = $r['text'] ?? '';
                            $link = $r['link'] ?? null;

                            $avatar_url = '';
                            if (!empty($r['avatar']) && is_array($r['avatar']) && !empty($r['avatar']['url'])) {
                                $avatar_url = $r['avatar']['url'];
                            }
                        ?>
                            <article class="reviewSlide">
                                <div class="reviewCard">
                                    <header class="reviewCard__head">
                                        <div class="reviewCard__who">
                                            <div class="reviewCard__name"><?php echo esc_html($name); ?></div>
                                            <?php if ($meta): ?>
                                                <div class="reviewCard__meta"><?php echo esc_html($meta); ?></div>
                                            <?php endif; ?>
                                        </div>

                                        <?php if ($avatar_url): ?>
                                            <div class="reviewCard__avatar">
                                                <img src="<?php echo esc_url($avatar_url); ?>" alt="<?php echo esc_attr($name); ?>">
                                            </div>
                                        <?php endif; ?>
                                    </header>

                                    <div class="reviewCard__text"><?php echo wp_kses_post(nl2br($text)); ?></div>

                                    <?php if (!empty($link['url']) && !empty($link['title'])): ?>
                                        <a class="reviewCard__link"
                                           href="<?php echo esc_url($link['url']); ?>"
                                           target="<?php echo esc_attr($link['target'] ?: '_self'); ?>"
                                           rel="noopener">
                                            <?php echo esc_html($link['title']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>

                <button class="reviewsNav reviewsNav--next" type="button" aria-label="Следующая страница отзывов">
                    <span aria-hidden="true">›</span>
                </button>

                <div class="reviewsDots" data-reviews-dots></div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});


/* =========================
 * 2) CSS (INLINE)
 * ========================= */
add_action('wp_enqueue_scripts', function () {

    $css = '
    .reviewsBlock{background:#F6F7FB;padding:34px 0 44px}
    .reviewsBlock__container{max-width:1260px;margin:0 auto;padding:0 24px}
    .reviewsBlock__title{margin:0 0 10px;font-family:Inter,system-ui,-apple-system,"Segoe UI",Roboto,Arial,sans-serif;font-weight:800;letter-spacing:-.02em;color:#252A3A;font-size:clamp(34px,4.3vw,56px);line-height:1.06}
    .reviewsBlock__subtitle{margin:0 0 28px;font-family:Inter,system-ui,-apple-system,"Segoe UI",Roboto,Arial,sans-serif;font-size:20px;line-height:1.45;color:#5D6475;max-width:980px}

    .reviewsSlider{position:relative}
    .reviewsViewport{overflow:hidden;border-radius:12px}
    .reviewsInner{
      display:flex;
      gap:22px;
      will-change:transform;
      transition:transform .35s ease;
      touch-action:pan-y;
    }

    /* Desktop: 4 cards */
    .reviewSlide{
      flex:0 0 calc((100% - 22px * 3) / 4);
      max-width:calc((100% - 22px * 3) / 4);
    }

    /* Tablet: 2 cards */
    @media (max-width: 1024px){
      .reviewSlide{
        flex:0 0 calc((100% - 22px) / 2);
        max-width:calc((100% - 22px) / 2);
      }
    }

    /* Mobile: 1 card */
    @media (max-width: 640px){
      .reviewSlide{
        flex:0 0 100%;
        max-width:100%;
      }
    }

    .reviewCard{
      background:#fff;
      border-radius:12px;
      box-shadow:0 16px 46px rgba(16,24,40,.06);
      padding:22px 22px 18px;
      min-height:520px;
      display:flex;
      flex-direction:column;
    }
    .reviewCard__head{display:flex;align-items:flex-start;justify-content:space-between;gap:16px;margin-bottom:18px}
    .reviewCard__name{font-family:Inter,system-ui,-apple-system,"Segoe UI",Roboto,Arial,sans-serif;font-weight:800;color:#252A3A;font-size:20px;line-height:1.2}
    .reviewCard__meta{margin-top:6px;font-family:Inter,system-ui,-apple-system,"Segoe UI",Roboto,Arial,sans-serif;color:#7B8090;font-size:14px}
    .reviewCard__avatar{width:56px;height:56px;border-radius:999px;overflow:hidden;flex:0 0 56px;box-shadow:0 10px 20px rgba(16,24,40,.10)}
    .reviewCard__avatar img{width:100%;height:100%;object-fit:cover;display:block}

    .reviewCard__text{
      font-family:Inter,system-ui,-apple-system,"Segoe UI",Roboto,Arial,sans-serif;
      color:#2F3443;
      font-size:18px;
      line-height:1.65;
      max-height:360px;
      overflow-y:auto;
      padding-right:14px;
    }
    .reviewCard__text::-webkit-scrollbar{width:10px}
    .reviewCard__text::-webkit-scrollbar-thumb{background:rgba(37,42,58,.16);border-radius:999px}
    .reviewCard__text::-webkit-scrollbar-track{background:rgba(37,42,58,.06);border-radius:999px}

    .reviewCard__link{margin-top:auto;padding-top:18px;font-family:Inter,system-ui,-apple-system,"Segoe UI",Roboto,Arial,sans-serif;font-weight:600;color:var(--accent);text-decoration:none}
    .reviewCard__link:hover{text-decoration:underline}

    .reviewsNav{
      position:absolute;
      top:50%;
      transform:translateY(-60%);
      width:54px;height:54px;border-radius:999px;
      border:2px solid color-mix(in srgb, var(--accent) 45%, transparent);
      background:#F6F7FB;
      color:var(--accent);
      display:flex;align-items:center;justify-content:center;
      cursor:pointer;z-index:5;
      box-shadow:0 16px 40px rgba(16,24,40,.06);
    }
    .reviewsNav span{font-size:30px;line-height:1;transform:translateY(-1px)}
    .reviewsNav--prev{left:-74px}
    .reviewsNav--next{right:-74px}
    .reviewsNav[disabled]{opacity:.35;pointer-events:none}

    .reviewsDots{
      display:flex;
      align-items:center;
      justify-content:center;
      gap:10px;
      margin-top:14px;
      user-select:none;
    }
    .reviewsDot{
      width:10px;height:10px;border-radius:999px;
      background:color-mix(in srgb, var(--accent) 25%, transparent);
      border:0;padding:0;cursor:pointer;
      transition:transform .15s ease, background .15s ease;
    }
    .reviewsDot:hover{transform:scale(1.1);background:color-mix(in srgb, var(--accent) 45%, transparent)}
    .reviewsDot.is-active{background:var(--accent);transform:scale(1.15)}

    @media(max-width:1240px){
      .reviewsNav--prev{left:-18px}
      .reviewsNav--next{right:-18px}
    }
    @media(max-width:1024px){
      .reviewsBlock__subtitle{font-size:18px}
      .reviewCard{min-height:500px}
      .reviewCard__text{font-size:16px;max-height:330px}
    }
    @media(max-width:640px){
      .reviewsBlock__container{padding:0 16px}
      .reviewsNav{display:none}
      .reviewCard{border-radius:14px;padding:18px 18px 16px;min-height:480px}
      .reviewCard__text{max-height:320px;padding-right:10px}
      .reviewsDots{gap:9px}
      .reviewsDot{width:11px;height:11px}
    }
    ';

    wp_add_inline_style('wp-block-library', $css);

}, 20);


/* =========================
 * 3) JS (INLINE) — groups/pages
 * ========================= */
add_action('wp_enqueue_scripts', function () {

    wp_register_script('wpds-reviews-slider', false, [], null, true);
    wp_enqueue_script('wpds-reviews-slider');

    wp_add_inline_script('wpds-reviews-slider', <<<JS
(function(){
  function clamp(n,min,max){ return Math.max(min, Math.min(max, n)); }

  function init(root){
    const inner = root.querySelector('.reviewsInner');
    const viewport = root.querySelector('.reviewsViewport');
    const slides = Array.from(root.querySelectorAll('.reviewSlide'));
    const dotsWrap = root.querySelector('[data-reviews-dots]');
    const prev = root.querySelector('.reviewsNav--prev');
    const next = root.querySelector('.reviewsNav--next');

    if(!inner || !viewport || !slides.length || !dotsWrap) return;

    let startIndex = 0;      // левый видимый слайд
    let maxStart = 0;        // максимальный левый видимый индекс (чтобы справа не было пустоты)
    let perView = 4;         // сколько видно на экране
    let dots = [];

    let dragging = false;
    let startX = 0;
    let baseX = 0;

    function getGap(){
      const st = getComputedStyle(inner);
      const g = parseFloat(st.gap || st.columnGap || '22');
      return isNaN(g) ? 22 : g;
    }

    function slideW(){
      return slides[0].getBoundingClientRect().width || 1;
    }

    function measure(){
      const vw = viewport.getBoundingClientRect().width || 1;
      const w = slideW();
      const gap = getGap();

      // сколько реально влезает (4/2/1 по CSS, но считаем фактически)
      perView = Math.max(1, Math.floor((vw + gap) / (w + gap)));

      // сколько позиций старта возможно без пустоты справа
      maxStart = Math.max(0, slides.length - perView);

      startIndex = clamp(startIndex, 0, maxStart);
    }

    function offsetFor(i){
      const gap = getGap();
      const w = slideW();
      return -i * (w + gap);
    }

    function applyTransform(px, animate){
      inner.style.transition = animate ? 'transform .35s ease' : 'none';
      inner.style.transform = 'translateX(' + px + 'px)';
    }

    function setActiveDot(i){
      dots.forEach((d,idx)=> d.classList.toggle('is-active', idx === i));
      if(prev) prev.disabled = (i <= 0);
      if(next) next.disabled = (i >= maxStart);
    }

    function buildDots(){
      dotsWrap.innerHTML = '';
      dots = [];

      // точки = все возможные стартовые позиции (сдвиг по 1)
      for(let i=0;i<=maxStart;i++){
        const b = document.createElement('button');
        b.type = 'button';
        b.className = 'reviewsDot';
        b.setAttribute('aria-label', 'Сдвиг ' + (i+1));
        b.addEventListener('click', () => go(i));
        dotsWrap.appendChild(b);
        dots.push(b);
      }

      setActiveDot(startIndex);
    }

    function go(i){
      measure();
      startIndex = clamp(i, 0, maxStart);
      applyTransform(offsetFor(startIndex), true);
      setActiveDot(startIndex);
    }

    function goBy(dir){
      go(startIndex + dir);
    }

    // arrows: ВСЕГДА по 1 слайду
    prev && prev.addEventListener('click', ()=> goBy(-1));
    next && next.addEventListener('click', ()=> goBy(1));

    // swipe/drag: тоже по 1 слайду
    function pointerDown(e){
      if(e.target.closest('.reviewCard__text')) return; // не мешаем вертикальному скроллу текста
      dragging = true;
      startX = e.clientX;
      baseX = offsetFor(startIndex);
      applyTransform(baseX, false);
      inner.setPointerCapture && inner.setPointerCapture(e.pointerId);
    }

    function pointerMove(e){
      if(!dragging) return;
      const dx = e.clientX - startX;
      applyTransform(baseX + dx, false);
    }

    function pointerUp(e){
      if(!dragging) return;
      dragging = false;

      const dx = e.clientX - startX;
      const w = slideW();
      const threshold = Math.min(120, w * 0.25);

      if(dx > threshold) goBy(-1);
      else if(dx < -threshold) goBy(1);
      else go(startIndex);
    }

    inner.addEventListener('pointerdown', pointerDown, {passive:true});
    window.addEventListener('pointermove', pointerMove, {passive:true});
    window.addEventListener('pointerup', pointerUp, {passive:true});

    // resize: пересчитать perView/maxStart и перестроить точки
    let to = null;
    window.addEventListener('resize', ()=>{
      clearTimeout(to);
      to = setTimeout(()=>{
        const keep = startIndex;
        measure();
        buildDots();
        go(clamp(keep, 0, maxStart));
      }, 160);
    });

    // init
    measure();
    buildDots();
    go(0);
  }

  document.querySelectorAll('[data-wpds-reviews]').forEach(init);
})();
JS);

}, 30);







add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'font-awesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
		array(),
		'6.5.1'
	);
});











if (!defined('ABSPATH')) {
	exit;
}

/**
 * Регистрация CPT "Plugins"
 */
add_action('init', 'ps_register_plugin_post_type');
function ps_register_plugin_post_type() {
	$labels = array(
		'name'               => 'Плагины',
		'singular_name'      => 'Плагин',
		'menu_name'          => 'Плагины',
		'name_admin_bar'     => 'Плагин',
		'add_new'            => 'Добавить',
		'add_new_item'       => 'Добавить плагин',
		'new_item'           => 'Новый плагин',
		'edit_item'          => 'Редактировать плагин',
		'view_item'          => 'Посмотреть плагин',
		'all_items'          => 'Все плагины',
		'search_items'       => 'Искать плагины',
		'not_found'          => 'Плагины не найдены',
		'not_found_in_trash' => 'В корзине плагинов не найдено',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_in_rest'       => true,
		'menu_icon'          => 'dashicons-admin-plugins',
		'supports'           => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'page-attributes',
		),
		'has_archive'        => 'wp-plugins',
		'rewrite'            => array(
			'slug'       => 'wp-plugins',
			'with_front' => false,
		),
		'menu_position'      => 5,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'map_meta_cap'       => true,
	);

	register_post_type('plugin', $args);
}

/**
 * Регистрация таксономии категорий для плагинов
 */
add_action('init', 'ps_register_plugin_category_taxonomy');
function ps_register_plugin_category_taxonomy() {
	$labels = array(
		'name'              => 'Категории плагинов',
		'singular_name'     => 'Категория плагина',
		'search_items'      => 'Искать категории',
		'all_items'         => 'Все категории',
		'parent_item'       => 'Родительская категория',
		'parent_item_colon' => 'Родительская категория:',
		'edit_item'         => 'Редактировать категорию',
		'update_item'       => 'Обновить категорию',
		'add_new_item'      => 'Добавить категорию',
		'new_item_name'     => 'Название новой категории',
		'menu_name'         => 'Категории',
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'hierarchical'      => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array(
			'slug'         => 'plugin-category',
			'with_front'   => false,
			'hierarchical' => true,
		),
	);

	register_taxonomy('plugin_category', array('plugin'), $args);
}

/**
 * Включаем поддержку шаблонов для CPT plugin
 */
add_filter('theme_plugin_templates', 'ps_register_plugin_templates');
function ps_register_plugin_templates($post_templates) {
	$post_templates['plugins/page-dadata-woocommerce.php']       = 'Лендинг плагина: DaData WooCommerce';
	$post_templates['plugins/page-custom-checkout.php']          = 'Лендинг плагина: Custom Checkout';
	$post_templates['plugins/page-cdek-delivery.php']            = 'Лендинг плагина: CDEK Delivery';
	$post_templates['plugins/page-store-hours.php']              = 'Лендинг плагина: WooCommerce Store Hours';
	$post_templates['plugins/page-booking.php']                  = 'Лендинг плагина: HivePress Booking Reminders';
	$post_templates['plugins/page-phone masks.php']              = 'Лендинг плагина: Automatic Phone Masks';
	$post_templates['plugins/plugin-ai-translator-template.php'] = 'Лендинг плагина: AI PO Translator';
	$post_templates['plugins/plugin-hivepress-map.php']          = 'Лендинг плагина: HivePress Map';

	return $post_templates;
}



/**
 * ACF поля для выбора похожих материалов на страницах плагинов.
 */
add_action('acf/init', 'ps_register_plugin_related_acf_fields');
function ps_register_plugin_related_acf_fields() {
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}

	acf_add_local_field_group([
		'key' => 'group_ps_plugin_related_content',
		'title' => 'Похожие материалы для плагина',
		'fields' => [
			[
				'key' => 'field_ps_plugin_related_plugins',
				'label' => 'Похожие плагины',
				'name' => 'ps_plugin_related_plugins',
				'type' => 'relationship',
				'instructions' => 'Выберите плагины, которые нужно вывести в конце страницы.',
				'post_type' => ['plugin'],
				'filters' => ['search', 'taxonomy'],
				'return_format' => 'id',
			],
			[
				'key' => 'field_ps_plugin_related_articles',
				'label' => 'Похожие статьи',
				'name' => 'ps_plugin_related_articles',
				'type' => 'relationship',
				'instructions' => 'Выберите статьи, которые нужно вывести в конце страницы.',
				'post_type' => ['post'],
				'filters' => ['search', 'taxonomy'],
				'return_format' => 'id',
			],
		],
		'location' => [
			[
				[
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'plugin',
				],
			],
		],
	]);
}

function ps_get_plugin_related_ids($field_name, $post_id = null) {
	$post_id = $post_id ?: get_the_ID();
	$items = function_exists('get_field') ? get_field($field_name, $post_id) : get_post_meta($post_id, $field_name, true);

	if (empty($items)) {
		return [];
	}

	$ids = is_array($items) ? $items : [$items];
	$ids = array_map(static function ($item) {
		return is_object($item) && isset($item->ID) ? (int) $item->ID : (int) $item;
	}, $ids);

	return array_values(array_filter(array_unique($ids)));
}

function ps_render_plugin_related_sections($post_id = null) {
	$post_id = $post_id ?: get_the_ID();

	ps_render_plugin_related_section('Похожие плагины', ps_get_plugin_related_ids('ps_plugin_related_plugins', $post_id), 'plugin');
	ps_render_plugin_related_section('Похожие статьи', ps_get_plugin_related_ids('ps_plugin_related_articles', $post_id), 'post');
}

function ps_render_plugin_related_section($title, array $ids, $post_type) {
	if (empty($ids)) {
		return;
	}

	$query = new WP_Query([
		'post_type' => $post_type,
		'post_status' => 'publish',
		'post__in' => $ids,
		'orderby' => 'post__in',
		'posts_per_page' => count($ids),
		'ignore_sticky_posts' => true,
	]);

	if (!$query->have_posts()) {
		return;
	}
	?>
	<section class="ps-plugin-related">
		<div class="container">
			<h2 class="ps-plugin-related__title"><?php echo esc_html($title); ?></h2>
			<div class="ps-plugin-related__grid">
				<?php while ($query->have_posts()) : $query->the_post(); ?>
					<article <?php post_class('ps-plugin-related__card'); ?>>
						<a class="ps-plugin-related__image-link" href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('medium_large', ['class' => 'ps-plugin-related__image']); ?>
							<?php else : ?>
								<span class="ps-plugin-related__image ps-plugin-related__image--placeholder"></span>
							<?php endif; ?>
						</a>
						<div class="ps-plugin-related__content">
							<h3 class="ps-plugin-related__card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p class="ps-plugin-related__excerpt"><?php echo esc_html(wp_trim_words(wp_strip_all_tags(get_the_excerpt() ?: get_the_content()), 22)); ?></p>
						</div>
					</article>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
	<?php
	wp_reset_postdata();
}

add_action('wp_enqueue_scripts', 'ps_enqueue_plugin_related_styles');
function ps_enqueue_plugin_related_styles() {
	$css = '.ps-plugin-related{padding:56px 0;background:#f8fafc}.ps-plugin-related .container{box-sizing:border-box;padding-left:20px;padding-right:20px}.ps-plugin-related__title{margin:0 0 24px;font-size:clamp(28px,3vw,40px);line-height:1.15;color:#0f172a}.ps-plugin-related__grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px}.ps-plugin-related__card{background:#fff;border:1px solid rgba(15,23,42,.08);border-radius:22px;overflow:hidden;box-shadow:0 12px 34px rgba(15,23,42,.05)}.ps-plugin-related__image-link{display:block;aspect-ratio:16/10;background:#e2e8f0}.ps-plugin-related__image{display:block;width:100%;height:100%;object-fit:cover}.ps-plugin-related__image--placeholder{background:linear-gradient(135deg,color-mix(in srgb, var(--accent) 16%, #fff) 0%,#e2e8f0 100%)}.ps-plugin-related__content{padding:20px}.ps-plugin-related__card-title{margin:0 0 10px;font-size:20px;line-height:1.3}.ps-plugin-related__card-title a{color:#0f172a;text-decoration:none}.ps-plugin-related__excerpt{margin:0;color:#64748b;line-height:1.6}@media(max-width:900px){.ps-plugin-related__grid{grid-template-columns:repeat(2,minmax(0,1fr))}}@media(max-width:640px){.ps-plugin-related__grid{grid-template-columns:1fr}.ps-plugin-related{padding:40px 0}.ps-plugin-related .container{padding-left:16px;padding-right:16px}}';
	wp_add_inline_style('wp-block-library', $css);
}








add_filter('template_include', 'ps_plugin_legacy_template_include', 90);
function ps_plugin_legacy_template_include($template) {
	if (!is_singular('plugin')) {
		return $template;
	}

	$legacy_templates = [
		'page-dadata-woocommerce.php' => 'plugins/page-dadata-woocommerce.php',
		'page-custom-checkout.php' => 'plugins/page-custom-checkout.php',
		'page-cdek-delivery.php' => 'plugins/page-cdek-delivery.php',
		'page-store-hours.php' => 'plugins/page-store-hours.php',
		'page-booking.php' => 'plugins/page-booking.php',
		'page-phone masks.php' => 'plugins/page-phone masks.php',
		'plugin-ai-translator-template.php' => 'plugins/plugin-ai-translator-template.php',
		'plugin-hivepress-map.php' => 'plugins/plugin-hivepress-map.php',
	];

	$selected_template = get_page_template_slug(get_queried_object_id());
	if (isset($legacy_templates[$selected_template])) {
		$plugin_template = get_stylesheet_directory() . '/' . $legacy_templates[$selected_template];
		if (file_exists($plugin_template)) {
			return $plugin_template;
		}
	}

	return $template;
}

add_filter('template_include', 'ps_plugin_archive_template_include', 99);
function ps_plugin_archive_template_include($template) {
	if (is_post_type_archive('plugin')) {
		$custom_template = get_stylesheet_directory() . '/plugins/archive-plugin.php';

		if (file_exists($custom_template)) {
			return $custom_template;
		}
	}

	return $template;
}











add_filter('template_include', 'ps_plugin_category_template_include', 99);
function ps_plugin_category_template_include($template) {
	if (is_tax('plugin_category')) {
		$custom_template = get_stylesheet_directory() . '/plugins/taxonomy-plugin_category.php';

		if (file_exists($custom_template)) {
			return $custom_template;
		}
	}

	return $template;
}









add_action('wp_head', 'ps_add_yandex_metrika_counter', 20);

function ps_add_yandex_metrika_counter() {
    ?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m,e,t,r,i,k,a){
            m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) { return; }
            }
            k=e.createElement(t),
            a=e.getElementsByTagName(t)[0],
            k.async=1,
            k.src=r,
            a.parentNode.insertBefore(k,a)
        })(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js?id=108973499', 'ym');

        ym(108973499, 'init', {
            ssr: true,
            webvisor: true,
            clickmap: true,
            ecommerce: "dataLayer",
            referrer: document.referrer,
            url: location.href,
            accurateTrackBounce: true,
            trackLinks: true
        });
    </script>
    <noscript>
        <div>
            <img src="https://mc.yandex.ru/watch/108973499" style="position:absolute; left:-9999px;" alt="">
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <?php
}