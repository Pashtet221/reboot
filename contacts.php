<?php
/*
Template Name: Контакты Plugins Store
*/

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="ps-contact-page">

  <section class="ps-contact">
    <div class="ps-contact__inner">

      <div class="ps-contact__hero">
        <span class="ps-contact__label">Контакты</span>

        <h1>Связаться с Plugins Store</h1>

        <p>
          Нужен готовый плагин, доработка WordPress/WooCommerce или разработка функционала под задачу?
          Напишите — обсудим проект и подберём решение.
        </p>
      </div>

      <div class="ps-contact__grid">

        <div class="ps-contact__card ps-contact__card--main">
          <h2>Написать по проекту</h2>

          <p>
            Кратко опишите задачу: что нужно сделать, на каком сайте, какие есть требования и сроки.
          </p>

          <div class="ps-contact__actions">
            <a href="https://t.me/paveldamut4@gmail.com" class="ps-contact__btn" target="_blank" rel="noopener">
              Написать в Telegram
            </a>

            <a href="mailto:paveldamut4@gmail.com" class="ps-contact__btn ps-contact__btn--secondary">
              paveldamut4@gmail.com
            </a>
          </div>
        </div>

        <div class="ps-contact__card">
          <h3>Разработка плагинов</h3>
          <p>
            Кастомные плагины для WordPress, WooCommerce, HivePress, форм, интеграций и личных кабинетов.
          </p>
        </div>

        <div class="ps-contact__card">
          <h3>Доработка WooCommerce</h3>
          <p>
            Checkout, доставка, оплата, статусы заказов, личный кабинет, карточки товаров и нестандартная логика.
          </p>
        </div>

        <div class="ps-contact__card">
          <h3>Партнёрская программа</h3>
          <p>
            15% с заказа за приведённого клиента после заключения сделки.
          </p>
        </div>

      </div>

      <div class="ps-contact__info">

        <div>
          <span>Email</span>
          <a href="mailto:paveldamut4@gmail.com">paveldamut4@gmail.com</a>
        </div>

        <div>
          <span>Telegram</span>
          <a href="https://t.me/wp_devstudio" target="_blank" rel="noopener">
            @wp_devstudio
          </a>
        </div>

        <div>
          <span>Сайт</span>
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php echo esc_html(parse_url(home_url('/'), PHP_URL_HOST)); ?>
          </a>
        </div>

      </div>

    </div>
  </section>

</main>

<style>
.site-content-inner{
  display: block;	
}

.site-content{
  padding-left: 0;
  padding-right: 0;
}

.ps-contact-page {
  background: #f7f7fb;
}

.ps-contact {
  padding: 72px 0;
  color: #19191f;
}

.ps-contact__inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
}

.ps-contact__hero {
  max-width: 760px;
  margin-bottom: 44px;
}

.ps-contact__label {
  display: inline-flex;
  margin-bottom: 16px;
  padding: 8px 14px;
  border-radius: 999px;
  background: rgba(108, 92, 231, .10);
  color: #6c5ce7;
  font-size: 14px;
  font-weight: 700;
}

.ps-contact h1 {
  margin: 0 0 18px;
  font-size: clamp(34px, 5vw, 58px);
  line-height: 1.05;
  color: #19191f;
}

.ps-contact__hero p {
  margin: 0;
  max-width: 680px;
  color: #5f6070;
  font-size: 18px;
  line-height: 1.65;
}

.ps-contact__grid {
  display: grid;
  grid-template-columns: 1.3fr 1fr 1fr;
  gap: 22px;
}

.ps-contact__card {
  padding: 28px;
  border-radius: 24px;
  background: #ffffff;
  box-shadow: 0 18px 45px rgba(20, 20, 30, .08);
}

.ps-contact__card--main {
  grid-row: span 2;
  background: #23232b;
  color: #ffffff;
}

.ps-contact__card h2,
.ps-contact__card h3 {
  margin: 0 0 14px;
  color: inherit;
}

.ps-contact__card h2 {
  font-size: 28px;
}

.ps-contact__card h3 {
  font-size: 20px;
}

.ps-contact__card p {
  margin: 0;
  color: #666879;
  line-height: 1.6;
}

.ps-contact__card--main p {
  color: rgba(255, 255, 255, .72);
}

.ps-contact__actions {
  display: flex;
  flex-direction: column;
  gap: 12px;
  margin-top: 28px;
}

.ps-contact__btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-height: 48px;
  padding: 13px 18px;
  border-radius: 14px;
  background: #6c5ce7;
  color: #ffffff !important;
  font-weight: 700;
  text-decoration: none;
  transition: .2s;
}

.ps-contact__btn:hover {
  background: #7b6cff;
  color: #ffffff !important;
}

.ps-contact__btn--secondary {
  background: rgba(255, 255, 255, .08);
}

.ps-contact__btn--secondary:hover {
  background: rgba(255, 255, 255, .14);
}

.ps-contact__info {
  margin-top: 24px;
  padding: 24px 28px;
  border-radius: 24px;
  background: #ffffff;
  box-shadow: 0 18px 45px rgba(20, 20, 30, .06);
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 22px;
}

.ps-contact__info span {
  display: block;
  margin-bottom: 8px;
  color: #777887;
  font-size: 14px;
}

.ps-contact__info a {
  color: #23232b;
  font-weight: 700;
  text-decoration: none;
}

.ps-contact__info a:hover {
  color: #6c5ce7;
}

@media (max-width: 900px) {
  .ps-contact {
    padding: 56px 0;
  }

  .ps-contact__grid {
    grid-template-columns: 1fr 1fr;
  }

  .ps-contact__card--main {
    grid-column: 1 / -1;
    grid-row: auto;
  }

  .ps-contact__info {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 600px) {
  .ps-contact {
    padding: 44px 0;
  }

  .ps-contact__inner {
    padding: 0 16px;
  }

  .ps-contact__grid {
    grid-template-columns: 1fr;
  }

  .ps-contact__card {
    padding: 22px;
    border-radius: 20px;
  }

  .ps-contact__hero {
    margin-bottom: 32px;
  }

  .ps-contact__hero p {
    font-size: 16px;
  }

  .ps-contact__info {
    padding: 22px;
    border-radius: 20px;
  }
}
</style>

<?php
get_footer();