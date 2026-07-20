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

global $wpshop_core;
global $class_advertising;

$is_show_arrow     = $wpshop_core->get_option( 'arrow_display' );
$is_show_arrow_mob = ( $wpshop_core->get_option( 'arrow_mob_display' ) ) ? ' data-mob="on"' : '';

?>

</div><!--.site-content-inner-->

<?php echo $class_advertising->show_ad( 'after_site_content' ) ?>

</div><!--.site-content-->

<?php do_action( THEME_SLUG . '_after_site_content' ) ?>

   <footer class="ps-footer">
  <div class="ps-footer__inner">

    <div class="ps-footer__col ps-footer__brand">
      <div class="ps-footer__logo">Plugins Store</div>

      <p>
        Готовые плагины и кастомная разработка решений для WordPress и WooCommerce.
      </p>

      <div class="ps-footer__partner">
        <strong>Партнёрская программа</strong>
        <span>15% с заказа за приведённого клиента после заключения сделки.</span>
      </div>
    </div>

    <div class="ps-footer__col">
      <h3>Разделы</h3>
      <ul>
        <li><a href="/wp-plugins/">Плагины</a></li>
        <li><a href="/blog/">Блог</a></li>
        <li><a href="/contacts/">Контакты</a></li>
        <li><a href="/sitemap/">Карта сайта</a></li>
      </ul>
    </div>

    <div class="ps-footer__col">
      <h3>Услуги</h3>
      <ul>
        <li><a href="/plugin-category/woocommerce">Доработка WooCommerce</a></li>
        <li><a href="/razrabotka-plagina-pod-klyuch/">Разработка плагинов</a></li>
      </ul>
    </div>

    <div class="ps-footer__col ps-footer__cta">
      <h3>Нужен плагин под задачу?</h3>
      <p>Опишите задачу — подскажу решение или оценю разработку.</p>
      <a href="/contacts/" class="ps-footer__btn">Обсудить проект</a>
    </div>

  </div>

  <div class="ps-footer__bottom">
    <span>© 2026 Plugins Store</span>
    <span>Копирование материалов только с разрешения правообладателя.</span>
  </div>
</footer>

<style>
.ps-footer {
  background: #23232b;
  color: #ffffff;
  padding: 64px 0 28px;
}

.ps-footer__inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
  display: grid;
  grid-template-columns: 1.4fr 1fr 1fr 1.2fr;
  gap: 40px;
}

.ps-footer__logo {
  font-size: 24px;
  font-weight: 800;
  margin-bottom: 16px;
}

.ps-footer p {
  color: rgba(255, 255, 255, .72);
  line-height: 1.6;
  margin: 0;
}

.ps-footer h3 {
  font-size: 16px;
  margin: 0 0 16px;
  color: #ffffff;
}

.ps-footer ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.ps-footer li {
  margin-bottom: 10px;
}

.ps-footer a {
  color: rgba(255, 255, 255, .72);
  text-decoration: none;
  transition: .2s;
}

.ps-footer a:hover {
  color: #ffffff;
}

.ps-footer__partner {
  margin-top: 22px;
  padding: 16px;
  border: 1px solid rgba(108, 92, 231, .35);
  border-radius: 16px;
  background: rgba(108, 92, 231, .10);
}

.ps-footer__partner strong {
  display: block;
  margin-bottom: 6px;
  color: #ffffff;
  font-size: 15px;
  font-weight: 700;
}

.ps-footer__partner span {
  display: block;
  color: rgba(255, 255, 255, .72);
  font-size: 14px;
  line-height: 1.5;
}

.ps-footer__btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin-top: 18px;
  padding: 12px 18px;
  border-radius: 12px;
  background: #6c5ce7;
  color: #ffffff !important;
  font-weight: 700;
}

.ps-footer__btn:hover {
  background: #7b6cff;
  color: #ffffff !important;
}

.ps-footer__bottom {
  max-width: 1200px;
  margin: 44px auto 0;
  padding: 24px 24px 0;
  border-top: 1px solid rgba(255, 255, 255, .14);
  display: flex;
  justify-content: space-between;
  gap: 20px;
  color: rgba(255, 255, 255, .7);
  font-size: 14px;
}

@media (max-width: 900px) {
  .ps-footer__inner {
    grid-template-columns: 1fr 1fr;
  }

  .ps-footer__bottom {
    flex-direction: column;
  }
}

@media (max-width: 600px) {
  .ps-footer {
    padding-top: 44px;
  }

  .ps-footer__inner {
    grid-template-columns: 1fr;
    gap: 28px;
  }

  .ps-footer__bottom {
    margin-top: 34px;
  }
}
</style>
<?php if ( $is_show_arrow ) { ?>
    <button type="button" class="scrolltop js-scrolltop"<?php echo $is_show_arrow_mob ?>></button>
<?php } ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<?php $wpshop_core->the_option( 'code_body' ) ?>

<?php do_action( THEME_SLUG . '_before_body' ) ?>

<?php
$slider_per_view = 1;

if ( $wpshop_core->get_option( 'slider_type' ) == 'three' ) {
    $slider_per_view = apply_filters( THEME_SLUG . '_slider_three_count', 3 );
}

if ( $wpshop_core->get_option( 'slider_type' ) == 'thumbnails' ) {
    $slider_per_view = 1;
}

if ( apply_filters( THEME_SLUG . '_slider_output', is_front_page() || is_home() ) && $wpshop_core->get_option( 'slider_count' ) != 0 ) {
    if ( ! wp_is_mobile() || ( wp_is_mobile() && ! $wpshop_core->get_option( 'slider_mob_disable' ) ) ) { ?>
        <!-- Initialize Swiper -->
        <script>
            <?php if ( $wpshop_core->get_option( 'slider_type' ) == 'thumbnails' ) { ?>

            var wpshopSwiperThumbs = new Swiper('.js-swiper-home-thumbnails', {
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                loopedSlides: 5, //looped slides should be the same
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                breakpoints: {
                    1024: {
                        slidesPerView: 4,
                    },
                    900: {
                        slidesPerView: 3,
                    },
                    760: {
                        slidesPerView: 2,
                    },
                    600: {
                        slidesPerView: 1,
                    },
                },
            });

            <?php } ?>

            var wpshopSwiper = new Swiper('.js-swiper-home', {
                <?php if ( $wpshop_core->get_option( 'slider_type' ) != 'thumbnails' ) { ?>
                slidesPerView: <?php echo $slider_per_view ?>,
                <?php } ?>
                <?php if ( $wpshop_core->get_option( 'slider_type' ) == 'three' ) { ?>
                breakpoints: {
                    1201: {
                        slidesPerView: <?php echo $slider_per_view ?>,
                        spaceBetween: 30,
                    },
                    300: {
                        slidesPerView: 1,
                    }
                },
                <?php } ?>
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                <?php if ( is_numeric( $wpshop_core->get_option( 'slider_autoplay' ) ) && $wpshop_core->get_option( 'slider_autoplay' ) > 0 ) { ?>
                autoplay: {
                    delay: <?php $wpshop_core->the_option( 'slider_autoplay' ) ?>,
                    disableOnInteraction: true,
                },
                <?php } ?>
                <?php if ( $wpshop_core->get_option( 'slider_type' ) == 'thumbnails' ) { ?>
                thumbs: {
                    swiper: wpshopSwiperThumbs,
                },
                loopedSlides: 5, //looped slides should be the same
                <?php } ?>
            });
        </script>
    <?php }
} ?>

</body>
</html>