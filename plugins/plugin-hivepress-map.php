<?php
/**
 * Template Name: Плагин Hivepress Map
 * Template Post Type: plugin
 * Description: Лендос под плагин
 */

if ( ! defined('ABSPATH') ) exit;
get_header();

// Можно переопределять через кастомные поля (если захочешь позже).
$title   = get_the_title();
$lead    = get_post_meta(get_the_ID(), 'ds_lead', true);
$text    = get_post_meta(get_the_ID(), 'ds_text', true);
$video   = get_post_meta(get_the_ID(), 'ds_video_url', true); // iframe URL (YouTube embed) или mp4
$poster  = get_post_meta(get_the_ID(), 'ds_video_poster', true); // URL постера (опционально)

if ( empty($lead) ) {
  $lead = "Плагин для WordPress. Без ежемесячных платежей и лимитов.";
}
if ( empty($text) ) {
  $text = "Короткое описание ценности: как помогает собирать лиды и повышать конверсию.";
}

// Если не задано видео — заглушка
if ( empty($video) ) {
  $video = "https://www.youtube.com/embed/dQw4w9WgXcQ";
}
?>
<style>
  .ds-plugin-hero{
    --bg: #7B67F0;
    --text: #fff;
    --muted: rgba(255,255,255,.82);
    --line: rgba(255,255,255,.26);
    --card: #fff;
    --shadow: 0 18px 60px rgba(0,0,0,.18);
    --radius: 12px;
    --container: 1200px;

    background: var(--bg);
    color: var(--text);
    padding: clamp(28px, 4vw, 64px) 0;
	margin-top: 30px;
  }
  .ds-plugin-hero__container{
    max-width: var(--container);
    margin: 0 auto;
    padding: 0 20px;

    display: grid;
    grid-template-columns: 1.05fr 1fr;
    gap: clamp(18px, 3vw, 42px);
    align-items: center;
  }
  .ds-plugin-hero__title{
    margin: 0 0 16px;
    font-weight: 800;
    letter-spacing: -0.02em;
    font-size: clamp(44px, 5vw, 62px);
    line-height: 1.02;
  }
  .ds-plugin-hero__lead{
    margin: 0 0 18px;
    font-size: clamp(16px, 1.6vw, 20px);
    line-height: 1.55;
    color: var(--muted);
    max-width: 42ch;
  }
  .ds-plugin-hero__text{
    margin: 0 0 26px;
    font-size: clamp(15px, 1.35vw, 18px);
    line-height: 1.6;
    color: var(--muted);
    max-width: 56ch;
  }
  .ds-plugin-hero__links{
    display: flex;
    flex-wrap: wrap;
    gap: 18px 28px;
  }
  .ds-plugin-hero__link{
    color: var(--text);
    text-decoration: none;
    border-bottom: 1px solid var(--line);
    padding-bottom: 3px;
    font-weight: 600;
    opacity: .95;
  }
  .ds-plugin-hero__link:hover{
    opacity: 1;
    border-bottom-color: rgba(255,255,255,.7);
  }

  .ds-plugin-hero__card{
    background: var(--card);
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    overflow: hidden;
  }
  .ds-plugin-hero__video{
    width: 100%;
    aspect-ratio: 16 / 9;
    background: #f4f6fb;
  }
  .ds-plugin-hero__video iframe,
  .ds-plugin-hero__video video{
    width: 100%;
    height: 100%;
    display: block;
    border: 0;
  }

  @media (max-width: 900px){
    .ds-plugin-hero__container{ grid-template-columns: 1fr; align-items: start; }
    .ds-plugin-hero__lead, .ds-plugin-hero__text{ max-width: 65ch; }
  }
	
	
	
	.site-content-inner{
		display: block;
	}
	#content {
        padding: 0;
    }
</style>

<main id="primary" class="site-main">
  <section class="ds-plugin-hero">
    <div class="ds-plugin-hero__container">

      <div class="ds-plugin-hero__content">
        <h1 class="ds-plugin-hero__title"><?php echo esc_html($title); ?></h1>

        <p class="ds-plugin-hero__lead"><?php echo wp_kses_post(nl2br($lead)); ?></p>

        <p class="ds-plugin-hero__text"><?php echo wp_kses_post(nl2br($text)); ?></p>

        <nav class="ds-plugin-hero__links" aria-label="Ссылки">
          <a class="ds-plugin-hero__link" href="#license">Выбрать лицензию</a>
          <a class="ds-plugin-hero__link" href="#video">Видео-обзор</a>
          <a class="ds-plugin-hero__link" href="http://paveld9o.beget.tech/hivepress-map/?demo=1&token=X0DfFPrWVU6fJd4iIrXlTSpaf3m1oojAsPFBaVzs">Демо</a>
        </nav>
      </div>

      <div class="ds-plugin-hero__media" id="video">
        <div class="ds-plugin-hero__card">
<!--           <div class="ds-plugin-hero__video">
            <?php
              // Если это mp4/webm — вставляем <video>, иначе iframe
              $is_video_file = preg_match('~\.(mp4|webm|ogg)(\?.*)?$~i', $video);

              if ( $is_video_file ) :
            ?>
              <video controls playsinline preload="metadata" <?php if($poster) echo 'poster="'.esc_url($poster).'"'; ?>>
                <source src="<?php echo esc_url($video); ?>">
              </video>
            <?php else: ?>
              <iframe
                src="<?php echo esc_url($video); ?>"
                title="<?php echo esc_attr($title); ?> — видео"
                loading="lazy"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            <?php endif; ?>
          </div> -->
        </div>
      </div>

    </div>
  </section>
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
<style>
.ds-shots{
  --container: 1200px;
  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --accent: #7B67F0;

  padding: clamp(22px, 3vw, 48px) 0;
}

.ds-shots__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;
}

.ds-shots__head{ margin-bottom: clamp(14px, 2vw, 22px); }
.ds-shots__title{
  margin: 0 0 10px;
  font-weight: 900;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}
.ds-shots__subtitle{
  margin: 0;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 84ch;
}

.ds-shots__wrap{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: clamp(12px, 2vw, 16px);
}

/* viewport */
.ds-shots__viewport{
  border-radius: calc(var(--radius) - 6px);
  overflow: hidden;
  outline: none;
  position: relative;
}

/* centered track (gallery) */
.ds-shots__track{
  display: flex;
  gap: 14px;
  align-items: center;
  will-change: transform;
  transition: transform .35s ease;
  touch-action: pan-y;
  /* чтобы края не "резались" при увеличении активного */
  padding: 8px 0;
}

/* 3 items visible */
.ds-shots__slide{
  flex: 0 0 calc((100% - 28px) / 3); /* 2 gaps = 28px */
  margin: 0;
  transform: scale(.92);
  opacity: .72;
  transition: transform .28s ease, opacity .28s ease, filter .28s ease;
  filter: saturate(.92);
}

/* active (center) */
.ds-shots__slide.is-active{
  transform: scale(1.06);
  opacity: 1;
  filter: saturate(1);
}

.ds-shots__zoom{
  width: 100%;
  border: 0;
  padding: 0;
  background: transparent;
  cursor: zoom-in;
  display: block;
  border-radius: 16px;
  overflow: hidden;
  position: relative;
}

.ds-shots__zoom::after{
  content: "";
  position: absolute;
  inset: 0;
  pointer-events: none;
  opacity: 0;
  background:
    radial-gradient(700px 260px at 50% 0%, rgba(123,103,240,.22), transparent 60%),
    linear-gradient(to top, rgba(15,23,42,.25), transparent 55%);
  transition: opacity .25s ease;
}

.ds-shots__zoom:hover::after{ opacity: 1; }

.ds-shots__zoom img{
  width: 100%;
  height: auto;
  display: block;
  aspect-ratio: 16 / 9;
  object-fit: cover;
  border-radius: 16px;
  border: 1px solid var(--line);
  background: #f4f6fb;
}

/* caption under each slide (gallery-like) */
.ds-shots__cap{
  margin: 10px 2px 0;
  color: var(--muted);
  font-size: 13px;
  line-height: 1.45;
  min-height: 2.8em; /* чтобы подписи не "прыгали" */
}

/* highlight frame for active slide */
.ds-shots__slide.is-active .ds-shots__zoom img{
  border-color: rgba(123,103,240,.35);
  box-shadow: 0 18px 40px rgba(123,103,240,.18);
}

/* controls */
.ds-shots__controls{
  display: grid;
  grid-template-columns: 44px 1fr 44px;
  gap: 12px;
  align-items: center;
  margin-top: 12px;
}

.ds-shots__nav{
  width: 44px;
  height: 44px;
  border-radius: 14px;
  border: 1px solid var(--line);
  background: #fff;
  box-shadow: 0 12px 26px rgba(15,23,42,.08);
  font-size: 22px;
  font-weight: 900;
  color: rgba(15,23,42,.8);
  cursor: pointer;
}
.ds-shots__nav:hover{ filter: brightness(.98); }
.ds-shots__nav:disabled{ opacity: .45; cursor: not-allowed; }

.ds-shots__dots{
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  flex-wrap: wrap;
}

.ds-shots__dot{
  width: 8px;
  height: 8px;
  border-radius: 999px;
  border: 1px solid rgba(15,23,42,.18);
  background: rgba(15,23,42,.06);
  cursor: pointer;
  padding: 0;
}
.ds-shots__dot[aria-current="true"]{
  width: 24px;
  background: var(--accent);
  border-color: rgba(123,103,240,.35);
}

/* Lightbox */
.ds-shots__lb{
  position: fixed;
  inset: 0;
  display: none;
  z-index: 9999;
}
.ds-shots__lb[aria-hidden="false"]{ display: block; }

.ds-shots__lbBg{
  position: absolute;
  inset: 0;
  background: rgba(15,23,42,.65);
  backdrop-filter: blur(6px);
}

.ds-shots__lbInner{
  position: relative;
  margin: 6vh auto;
  width: min(1100px, calc(100% - 26px));
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 30px 90px rgba(0,0,0,.45);
  background: #0b1220;
}
.ds-shots__lbImg{
  width: 100%;
  height: auto;
  display: block;
  max-height: 82vh;
  object-fit: contain;
}
.ds-shots__lbClose{
  position: absolute;
  top: 10px;
  right: 10px;
  width: 42px;
  height: 42px;
  border-radius: 14px;
  border: 1px solid rgba(255,255,255,.18);
  background: rgba(255,255,255,.10);
  color: #fff;
  cursor: pointer;
  font-weight: 900;
}

/* ✅ Responsive */
@media (max-width: 980px){
  /* 2 on screen */
  .ds-shots__slide{ flex-basis: calc((100% - 14px) / 2); }
}
@media (max-width: 560px){
  /* 1 on screen (center is active anyway) */
  .ds-shots__slide{ flex-basis: 100%; transform: scale(.98); opacity: .92; }
  .ds-shots__slide.is-active{ transform: scale(1.00); }
  .ds-shots__track{ gap: 10px; }
  .ds-shots__controls{ grid-template-columns: 40px 1fr 40px; }
  .ds-shots__nav{ width: 40px; height: 40px; border-radius: 12px; }
}
</style>

<section class="ds-shots" id="screenshots">
  <div class="ds-shots__container">

    <header class="ds-shots__head">
      <h2 class="ds-shots__title">Скриншоты</h2>
      <p class="ds-shots__subtitle">
        Галерея интерфейса: листайте стрелками/свайпом. Центральный скрин — выделен.
      </p>
    </header>

    <div class="ds-shots__wrap" data-shots>
      <div class="ds-shots__viewport" data-shots-viewport tabindex="0" aria-label="Галерея скриншотов">
        <div class="ds-shots__track" data-shots-track>

          <figure class="ds-shots__slide">
            <button class="ds-shots__zoom" type="button" data-shots-zoom data-src="https://plugins-store.ru/wp-content/uploads/2026/02/44390067-68a873ca50558.jpg" aria-label="Открыть скриншот">
              <img src="https://plugins-store.ru/wp-content/uploads/2026/02/44390067-68a873ca50558.jpg" alt="Скриншот — главный экран" loading="lazy" decoding="async">
            </button>
            <figcaption class="ds-shots__cap">Главный экран — быстрый доступ к настройкам</figcaption>
          </figure>

          <figure class="ds-shots__slide">
            <button class="ds-shots__zoom" type="button" data-shots-zoom data-src="https://plugins-store.ru/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.43.27.png" aria-label="Открыть скриншот">
              <img src="https://plugins-store.ru/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.43.27.png" alt="Скриншот — настройки" loading="lazy" decoding="async">
            </button>
            <figcaption class="ds-shots__cap">Настройки — всё в одном месте, без лишних вкладок</figcaption>
          </figure>

          <figure class="ds-shots__slide">
            <button class="ds-shots__zoom" type="button" data-shots-zoom data-src="https://plugins-store.ru/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.43.42.png" aria-label="Открыть скриншот">
              <img src="https://plugins-store.ru/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.43.42.png" alt="Скриншот — редактор" loading="lazy" decoding="async">
            </button>
            <figcaption class="ds-shots__cap">Редактор — логика и внешний вид в понятных блоках</figcaption>
          </figure>

          <figure class="ds-shots__slide">
            <button class="ds-shots__zoom" type="button" data-shots-zoom data-src="https://plugins-store.ru/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.37.55-scaled.png" aria-label="Открыть скриншот">
              <img src="https://plugins-store.ru/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.37.55-scaled.png" alt="Скриншот — результат" loading="lazy" decoding="async">
            </button>
            <figcaption class="ds-shots__cap">Результат — как это выглядит на странице</figcaption>
          </figure>

          <figure class="ds-shots__slide">
            <button class="ds-shots__zoom" type="button" data-shots-zoom data-src="https://plugins-store.ru/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.38.36-scaled.png" aria-label="Открыть скриншот">
              <img src="https://plugins-store.ru/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.38.36-scaled.png" alt="Скриншот — отчёты" loading="lazy" decoding="async">
            </button>
            <figcaption class="ds-shots__cap">Отчёты/лог — что происходит и что улучшить</figcaption>
          </figure>
			
			
			
			<figure class="ds-shots__slide">
            <button class="ds-shots__zoom" type="button" data-shots-zoom data-src="https://plugins-store.ru/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.39.19-scaled.png" aria-label="Открыть скриншот">
              <img src="https://plugins-store.ru/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.39.19-scaled.png" alt="Скриншот — отчёты" loading="lazy" decoding="async">
            </button>
            <figcaption class="ds-shots__cap">Отчёты/лог — что происходит и что улучшить</figcaption>
          </figure>

        </div>
      </div>

      <div class="ds-shots__controls">
        <button class="ds-shots__nav ds-shots__nav--prev" type="button" data-shots-prev aria-label="Назад">‹</button>
        <div class="ds-shots__dots" data-shots-dots aria-label="Навигация по слайдам"></div>
        <button class="ds-shots__nav ds-shots__nav--next" type="button" data-shots-next aria-label="Вперёд">›</button>
      </div>
    </div>

  </div>

  <!-- Lightbox -->
  <div class="ds-shots__lb" data-shots-lb aria-hidden="true">
    <div class="ds-shots__lbBg" data-shots-lb-close></div>
    <div class="ds-shots__lbInner" role="dialog" aria-modal="true" aria-label="Просмотр скриншота">
      <button class="ds-shots__lbClose" type="button" data-shots-lb-close aria-label="Закрыть">✕</button>
      <img class="ds-shots__lbImg" data-shots-lb-img alt="">
    </div>
  </div>
</section>

<script>
(function(){
  const root = document.querySelector('[data-shots]');
  if (!root) return;

  const viewport = root.querySelector('[data-shots-viewport]');
  const track = root.querySelector('[data-shots-track]');
  const slides = Array.from(root.querySelectorAll('.ds-shots__slide'));
  const btnPrev = root.querySelector('[data-shots-prev]');
  const btnNext = root.querySelector('[data-shots-next]');
  const dotsWrap = root.querySelector('[data-shots-dots]');

  // Lightbox
  const lb = document.querySelector('[data-shots-lb]');
  const lbImg = document.querySelector('[data-shots-lb-img]');
  const lbCloseEls = document.querySelectorAll('[data-shots-lb-close]');

  let index = 1; // чтобы изначально был "центр" (вторая картинка) активной
  let slideW = 0;
  let gap = 0;

  function clamp(v, min, max){ return Math.max(min, Math.min(max, v)); }

  function computeSizes(){
    const style = getComputedStyle(track);
    gap = parseFloat(style.columnGap || style.gap || 0) || 0;

    // ширина одного слайда = его фактическая ширина
    slideW = slides[0]?.getBoundingClientRect().width || viewport.clientWidth;
  }

  function setActive(){
    slides.forEach((s,i)=> s.classList.toggle('is-active', i === index));
  }

  function updateDots(){
    const dots = dotsWrap.querySelectorAll('.ds-shots__dot');
    dots.forEach((d,i)=> d.setAttribute('aria-current', i === index ? 'true' : 'false'));
  }

  function update(){
    index = clamp(index, 0, slides.length - 1);

    // центрируем активный слайд в viewport
    const viewportW = viewport.clientWidth;
    const x = -((index * (slideW + gap)) - (viewportW/2 - slideW/2));
    track.style.transform = `translate3d(${x}px,0,0)`;

    btnPrev.disabled = index === 0;
    btnNext.disabled = index === slides.length - 1;

    setActive();
    updateDots();
  }

  function buildDots(){
    dotsWrap.innerHTML = '';
    slides.forEach((_, i) => {
      const b = document.createElement('button');
      b.type = 'button';
      b.className = 'ds-shots__dot';
      b.setAttribute('aria-label', `Слайд ${i+1}`);
      b.setAttribute('aria-current', i === index ? 'true' : 'false');
      b.addEventListener('click', () => { index = i; update(); });
      dotsWrap.appendChild(b);
    });
  }

  // controls
  btnPrev.addEventListener('click', () => { index--; update(); });
  btnNext.addEventListener('click', () => { index++; update(); });

  // keyboard
  viewport.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') { index--; update(); }
    if (e.key === 'ArrowRight') { index++; update(); }
    if (e.key === 'Enter') {
      // Enter on focused viewport -> open active slide
      const active = slides[index]?.querySelector('[data-shots-zoom]');
      if (active) active.click();
    }
  });

  // click on any slide: center it; second click opens lightbox via button itself
  slides.forEach((slide, i) => {
    slide.addEventListener('click', (e) => {
      // если кликают по кнопке/картинке — пусть откроет lightbox
      if (e.target.closest('[data-shots-zoom]')) return;
      index = i;
      update();
    });
  });

  // drag/swipe
  let isDown = false;
  let startX = 0;
  let startTranslate = 0;
  let moved = 0;

  function getTranslateX(){
    const m = track.style.transform.match(/translate3d\(([-0-9.]+)px/);
    return m ? parseFloat(m[1]) : 0;
  }

  function pointerDown(x){
    isDown = true;
    moved = 0;
    startX = x;
    startTranslate = getTranslateX();
    track.style.transition = 'none';
  }

  function pointerMove(x){
    if (!isDown) return;
    const dx = x - startX;
    moved = dx;
    track.style.transform = `translate3d(${startTranslate + dx}px,0,0)`;
  }

  function pointerUp(){
    if (!isDown) return;
    isDown = false;
    track.style.transition = 'transform .35s ease';

    const threshold = Math.min(90, viewport.clientWidth * 0.14);
    if (moved < -threshold) index++;
    else if (moved > threshold) index--;

    update();
  }

  viewport.addEventListener('pointerdown', (e) => {
    viewport.setPointerCapture(e.pointerId);
    pointerDown(e.clientX);
  });
  viewport.addEventListener('pointermove', (e) => pointerMove(e.clientX));
  viewport.addEventListener('pointerup', pointerUp);
  viewport.addEventListener('pointercancel', pointerUp);

  // Lightbox open
  root.querySelectorAll('[data-shots-zoom]').forEach(btn => {
    btn.addEventListener('click', () => {
      const src = btn.getAttribute('data-src') || btn.querySelector('img')?.src;
      if (!src) return;
      lbImg.src = src;
      lb.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    });
  });

  function closeLb(){
    lb.setAttribute('aria-hidden', 'true');
    lbImg.src = '';
    document.body.style.overflow = '';
  }
  lbCloseEls.forEach(el => el.addEventListener('click', closeLb));
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && lb.getAttribute('aria-hidden') === 'false') closeLb();
  });

  // init
  function init(){
    // если слайдов меньше 3 — отключим масштаб/центрирование проблемно? всё равно работает
    computeSizes();
    buildDots();
    // старт: центр на втором, если он есть
    index = slides.length > 1 ? 1 : 0;
    update();
  }

  window.addEventListener('resize', () => {
    computeSizes();
    update();
  });

  init();
})();
</script>
	
	
	
	
	
	
	
	
	
	
	
	
	<style>
		.ds-pr{
  /* можно переопределять под твою страницу */
  --container: 1200px;
  --bg: transparent;

  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --minus: #ef4444;
  --plus: #22c55e;

  --accent: #7B67F0; /* если хочешь — как в hero */
  background: var(--bg);
  padding: clamp(22px, 3vw, 44px) 0;
}

.ds-pr__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;
}

.ds-pr__head{
  margin-bottom: clamp(14px, 2vw, 22px);
}

.ds-pr__title{
  margin: 0 0 10px;
  font-weight: 800;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}

.ds-pr__subtitle{
  margin: 0;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 72ch;
}

.ds-pr__grid{
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  gap: clamp(12px, 2vw, 22px);
  align-items: stretch;
}

.ds-pr__card{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: clamp(16px, 2.4vw, 26px);
  position: relative;
  overflow: hidden;
}

.ds-pr__card::before{
  content:"";
  position:absolute;
  inset: 0;
  pointer-events:none;
  opacity:.12;
  background:
    radial-gradient(800px 220px at 10% 0%, rgba(123,103,240,.55), transparent 60%),
    radial-gradient(600px 200px at 90% 0%, rgba(56,189,248,.45), transparent 55%);
}

.ds-pr__badge{
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-weight: 800;
  font-size: 13px;
  letter-spacing: .02em;
  padding: 8px 12px;
  border-radius: 999px;
  border: 1px solid var(--line);
  background: rgba(255,255,255,.75);
  backdrop-filter: blur(6px);
  position: relative;
  z-index: 1;
}

.ds-pr__badge--problem{
  color: var(--minus);
  border-color: rgba(239,68,68,.25);
}

.ds-pr__badge--solution{
  color: var(--plus);
  border-color: rgba(34,197,94,.25);
}

.ds-pr__cardTitle{
  margin: 14px 0 14px;
  font-size: 20px;
  line-height: 1.25;
  font-weight: 800;
  color: var(--text);
  position: relative;
  z-index: 1;
}

.ds-pr__list{
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  gap: 12px;
  position: relative;
  z-index: 1;
}

.ds-pr__item{
  display: grid;
  grid-template-columns: 22px 1fr;
  gap: 10px;
  align-items: start;
  color: var(--text);
  line-height: 1.5;
}

.ds-pr__item::before{
  content:"";
  width: 18px;
  height: 18px;
  margin-top: 3px;
  border-radius: 6px;
  border: 1px solid var(--line);
  background: #fff;
}

.ds-pr__item--minus::before{
  background: rgba(239,68,68,.10);
  border-color: rgba(239,68,68,.25);
  box-shadow: inset 0 0 0 2px rgba(239,68,68,.18);
}

.ds-pr__item--plus::before{
  background: rgba(34,197,94,.10);
  border-color: rgba(34,197,94,.25);
  box-shadow: inset 0 0 0 2px rgba(34,197,94,.18);
}

.ds-pr__hint{
  margin-top: 16px;
  padding-top: 14px;
  border-top: 1px dashed var(--line);
  color: var(--muted);
  font-size: 14px;
  line-height: 1.5;
  position: relative;
  z-index: 1;
}

/* middle divider */
.ds-pr__mid{
  display: grid;
  grid-template-rows: 1fr auto 1fr;
  align-items: center;
  justify-items: center;
  min-width: 44px;
}

.ds-pr__line{
  width: 2px;
  height: 100%;
  background: linear-gradient(to bottom, transparent, rgba(15,23,42,.18), transparent);
}

.ds-pr__arrow{
  width: 44px;
  height: 44px;
  border-radius: 999px;
  border: 1px solid var(--line);
  background: #fff;
  box-shadow: 0 10px 25px rgba(15,23,42,.12);
  display: grid;
  place-items: center;
}

.ds-pr__arrowIcon{
  font-size: 20px;
  font-weight: 900;
  color: var(--accent);
  transform: translateX(1px);
}

/* CTA */
.ds-pr__ctaRow{
  display: flex;
  flex-wrap: wrap;
  gap: 12px 16px;
  margin-top: 18px;
  position: relative;
  z-index: 1;
}

.ds-pr__btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 44px;
  padding: 0 16px;
  border-radius: 12px;
  background: var(--accent);
  color: #fff;
  font-weight: 800;
  text-decoration: none;
  border: 1px solid rgba(0,0,0,0);
}

.ds-pr__btn:hover{
  filter: brightness(0.97);
}

.ds-pr__link{
  display: inline-flex;
  align-items: center;
  height: 44px;
  color: var(--text);
  text-decoration: none;
  border-bottom: 1px solid rgba(15,23,42,.25);
  padding-bottom: 2px;
  font-weight: 700;
}

/* responsive */
@media (max-width: 900px){
  .ds-pr__grid{
    grid-template-columns: 1fr;
  }
  .ds-pr__mid{
    grid-template-rows: auto;
    grid-template-columns: 1fr auto 1fr;
    min-width: 0;
    min-height: 44px;
  }
  .ds-pr__line{
    width: 100%;
    height: 2px;
    background: linear-gradient(to right, transparent, rgba(15,23,42,.18), transparent);
  }
  .ds-pr__arrowIcon{
    transform: rotate(90deg);
  }
}
	</style>
	
	<section class="ds-pr">
  <div class="ds-pr__container">

    <header class="ds-pr__head">
      <h2 class="ds-pr__title">Проблема → Решение</h2>
      <p class="ds-pr__subtitle">
        Коротко и по делу: что мешает без плагина и что становится проще после установки.
      </p>
    </header>

    <div class="ds-pr__grid" role="list">

      <!-- PROBLEM -->
      <article class="ds-pr__card ds-pr__card--problem" role="listitem">
        <div class="ds-pr__badge ds-pr__badge--problem">Без плагина</div>

        <h3 class="ds-pr__cardTitle">Теряете заявки и время</h3>

        <ul class="ds-pr__list">
          <li class="ds-pr__item ds-pr__item--minus">
            Сложная настройка, много ручной рутины
          </li>
          <li class="ds-pr__item ds-pr__item--minus">
            Низкая конверсия из трафика в лиды
          </li>
          <li class="ds-pr__item ds-pr__item--minus">
            Путаница в шагах, пользователи бросают процесс
          </li>
          <li class="ds-pr__item ds-pr__item--minus">
            Нет понятной аналитики и контроля результата
          </li>
        </ul>

        <div class="ds-pr__hint">
          Итог: меньше обращений и выше стоимость лида.
        </div>
      </article>

      <!-- arrow / divider -->
      <div class="ds-pr__mid" aria-hidden="true">
        <div class="ds-pr__line"></div>
        <div class="ds-pr__arrow" title="Переход к решению">
          <span class="ds-pr__arrowIcon">→</span>
        </div>
        <div class="ds-pr__line"></div>
      </div>

      <!-- SOLUTION -->
      <article class="ds-pr__card ds-pr__card--solution" role="listitem">
        <div class="ds-pr__badge ds-pr__badge--solution">С плагином</div>

        <h3 class="ds-pr__cardTitle">Конверсия и процесс под контролем</h3>

        <ul class="ds-pr__list">
          <li class="ds-pr__item ds-pr__item--plus">
            Быстрый старт: понятная логика, готовые сценарии
          </li>
          <li class="ds-pr__item ds-pr__item--plus">
            Пользователь проходит шаги без “затыков”
          </li>
          <li class="ds-pr__item ds-pr__item--plus">
            Заявки собираются стабильно и без потерь
          </li>
          <li class="ds-pr__item ds-pr__item--plus">
            Появляется прозрачность: что работает, что улучшить
          </li>
        </ul>

        <div class="ds-pr__ctaRow">
          <a class="ds-pr__btn" href="#demo">Посмотреть демо</a>
          <a class="ds-pr__link" href="#license">Выбрать лицензию</a>
        </div>
      </article>

    </div>
  </div>
</section>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<style>
		.ds-how{
  --container: 1200px;

  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --accent: #7B67F0; /* можно в тон hero */
  --accent2: #38bdf8;

  padding: clamp(22px, 3vw, 48px) 0;
}

.ds-how__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;

  display: grid;
  grid-template-columns: .95fr 1.05fr;
  gap: clamp(16px, 3vw, 44px);
  align-items: start;
}

.ds-how__title{
  margin: 0 0 10px;
  font-weight: 900;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}

.ds-how__subtitle{
  margin: 0 0 18px;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 70ch;
}

.ds-how__actions{
  display: flex;
  flex-wrap: wrap;
  gap: 12px 16px;
  margin-bottom: 16px;
}

.ds-how__btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 44px;
  padding: 0 16px;
  border-radius: 12px;
  background: var(--accent);
  color: #fff;
  font-weight: 800;
  text-decoration: none;
  border: 1px solid rgba(0,0,0,0);
  box-shadow: 0 12px 26px rgba(123,103,240,.25);
}

.ds-how__btn:hover{ filter: brightness(.98); }

.ds-how__btn--ghost{
  background: transparent;
  color: var(--text);
  border: 1px solid var(--line);
  box-shadow: none;
}

.ds-how__link{
  display: inline-flex;
  align-items: center;
  height: 44px;
  color: var(--text);
  text-decoration: none;
  border-bottom: 1px solid rgba(15,23,42,.25);
  padding-bottom: 2px;
  font-weight: 800;
}

.ds-how__meta{
  display: grid;
  gap: 10px;
  padding-top: 14px;
  border-top: 1px dashed var(--line);
}

.ds-how__metaItem{
  display: inline-flex;
  gap: 10px;
  align-items: center;
  color: var(--muted);
  font-weight: 600;
}

/* Steps list */
.ds-how__steps{
  list-style: none;
  padding: 0;
  margin: 0;

  display: grid;
  gap: 14px;
}

.ds-how__step{
  display: grid;
  grid-template-columns: 48px 1fr;
  gap: 14px;
  align-items: start;
  position: relative;
}

/* Timeline line */
.ds-how__step::before{
  content: "";
  position: absolute;
  left: 23px;
  top: 52px;
  bottom: -14px;
  width: 2px;
  background: linear-gradient(to bottom, rgba(15,23,42,.14), transparent);
}

.ds-how__step:last-child::before{
  display: none;
}

.ds-how__num{
  width: 48px;
  height: 48px;
  border-radius: 14px;
  display: grid;
  place-items: center;
  font-weight: 900;
  color: var(--text);
  background: #fff;
  border: 1px solid var(--line);
  box-shadow: 0 12px 26px rgba(15,23,42,.08);
  position: relative;
  z-index: 1;
}

.ds-how__num--result{
  color: #fff;
  border-color: rgba(0,0,0,0);
  background: linear-gradient(135deg, var(--accent), var(--accent2));
}

.ds-how__card{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: 16px 18px;
  position: relative;
  overflow: hidden;
}

.ds-how__card::after{
  content:"";
  position:absolute;
  inset: 0;
  opacity: .10;
  pointer-events:none;
  background:
    radial-gradient(800px 240px at 15% 0%, rgba(123,103,240,.65), transparent 60%),
    radial-gradient(700px 220px at 90% 0%, rgba(56,189,248,.55), transparent 55%);
}

.ds-how__stepTitle{
  margin: 2px 0 8px;
  font-size: 18px;
  line-height: 1.25;
  font-weight: 900;
  color: var(--text);
  position: relative;
  z-index: 1;
}

.ds-how__stepText{
  margin: 0;
  color: var(--muted);
  line-height: 1.55;
  position: relative;
  z-index: 1;
}

.ds-how__chips{
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-top: 12px;
  position: relative;
  z-index: 1;
}

.ds-how__chip{
  font-size: 13px;
  font-weight: 800;
  color: rgba(15,23,42,.82);
  background: rgba(255,255,255,.75);
  border: 1px solid var(--line);
  border-radius: 999px;
  padding: 6px 10px;
  backdrop-filter: blur(6px);
}

.ds-how__ctaInline{
  display: flex;
  flex-wrap: wrap;
  gap: 12px 16px;
  margin-top: 14px;
  position: relative;
  z-index: 1;
}

.ds-how__card--result{
  border-color: rgba(123,103,240,.28);
}

/* Responsive */
@media (max-width: 900px){
  .ds-how__container{
    grid-template-columns: 1fr;
  }
}

@media (max-width: 420px){
  .ds-how__step{
    grid-template-columns: 42px 1fr;
  }
  .ds-how__num{
    width: 42px;
    height: 42px;
    border-radius: 12px;
  }
  .ds-how__step::before{
    left: 20px;
    top: 46px;
  }
}
	</style>
	
	<section class="ds-how">
  <div class="ds-how__container">

    <!-- Left intro -->
    <header class="ds-how__head">
      <h2 class="ds-how__title">Как работает</h2>
      <p class="ds-how__subtitle">
        3 шага до результата: установка, настройка, запуск. Дальше плагин делает рутину за вас.
      </p>

      <div class="ds-how__actions">
        <a class="ds-how__btn" href="#demo">Открыть демо</a>
        <a class="ds-how__link" href="#docs">Документация</a>
      </div>

      <div class="ds-how__meta">
        <span class="ds-how__metaItem">⏱ 10–15 минут на старт</span>
        <span class="ds-how__metaItem">🧩 Без кодинга</span>
        <span class="ds-how__metaItem">⚙️ Настройки — внутри WP</span>
      </div>
    </header>

    <!-- Steps -->
    <ol class="ds-how__steps" aria-label="Шаги работы">

      <li class="ds-how__step">
        <div class="ds-how__num">1</div>
        <div class="ds-how__card">
          <h3 class="ds-how__stepTitle">Установите плагин</h3>
          <p class="ds-how__stepText">
            Загрузите архив в WordPress или установите через админку. Активируйте — и плагин появится в меню.
          </p>
          <div class="ds-how__chips">
            <span class="ds-how__chip">WP: 5.8+</span>
            <span class="ds-how__chip">PHP: 7.4+</span>
          </div>
        </div>
      </li>

      <li class="ds-how__step">
        <div class="ds-how__num">2</div>
        <div class="ds-how__card">
          <h3 class="ds-how__stepTitle">Настройте под задачу</h3>
          <p class="ds-how__stepText">
            Выберите сценарий/шаблон, задайте параметры и внешний вид. Всё в понятных полях, без сложных форм.
          </p>
          <div class="ds-how__chips">
            <span class="ds-how__chip">Шаблоны</span>
            <span class="ds-how__chip">Гибкая логика</span>
            <span class="ds-how__chip">Стили</span>
          </div>
        </div>
      </li>

      <li class="ds-how__step">
        <div class="ds-how__num">3</div>
        <div class="ds-how__card">
          <h3 class="ds-how__stepTitle">Вставьте на страницу и запускайте</h3>
          <p class="ds-how__stepText">
            Добавьте шорткод/блок, проверьте отображение на мобильных и публикуйте. Далее смотрите результат.
          </p>
          <div class="ds-how__chips">
            <span class="ds-how__chip">Shortcode</span>
            <span class="ds-how__chip">Gutenberg</span>
            <span class="ds-how__chip">Elementor</span>
          </div>
        </div>
      </li>

      <li class="ds-how__step ds-how__step--result">
        <div class="ds-how__num ds-how__num--result">✓</div>
        <div class="ds-how__card ds-how__card--result">
          <h3 class="ds-how__stepTitle">Получаете результат</h3>
          <p class="ds-how__stepText">
            Заявки/данные собираются стабильно, процесс прозрачен, а улучшения видны по метрикам.
          </p>
          <div class="ds-how__ctaInline">
            <a class="ds-how__btn ds-how__btn--ghost" href="#license">Выбрать лицензию</a>
            <a class="ds-how__link" href="#faq">FAQ</a>
          </div>
        </div>
      </li>

    </ol>
  </div>
</section>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<style>
		.ds-fit{
  --container: 1200px;

  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --accent: #7B67F0;
  --accent2: #38bdf8;

  padding: clamp(22px, 3vw, 48px) 0;
}

.ds-fit__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;
}

.ds-fit__head{
  margin-bottom: clamp(14px, 2vw, 22px);
}

.ds-fit__title{
  margin: 0 0 10px;
  font-weight: 900;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}

.ds-fit__subtitle{
  margin: 0 0 14px;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 78ch;
}

.ds-fit__tags{
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}

.ds-fit__tag{
  font-size: 13px;
  font-weight: 800;
  color: rgba(15,23,42,.78);
  background: rgba(255,255,255,.75);
  border: 1px solid var(--line);
  border-radius: 999px;
  padding: 6px 10px;
}

.ds-fit__grid{
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: clamp(12px, 2vw, 18px);
}

.ds-fit__card{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: clamp(16px, 2.2vw, 22px);
  position: relative;
  overflow: hidden;
  min-height: 170px;
}

.ds-fit__card::after{
  content:"";
  position:absolute;
  inset: 0;
  pointer-events:none;
  opacity: .10;
  background:
    radial-gradient(700px 240px at 15% 0%, rgba(123,103,240,.65), transparent 60%),
    radial-gradient(700px 220px at 90% 0%, rgba(56,189,248,.55), transparent 55%);
}

.ds-fit__icon{
  width: 44px;
  height: 44px;
  border-radius: 14px;
  display: grid;
  place-items: center;
  font-size: 20px;
  background: #fff;
  border: 1px solid var(--line);
  box-shadow: 0 12px 26px rgba(15,23,42,.08);
  position: relative;
  z-index: 1;
}

.ds-fit__cardTitle{
  margin: 12px 0 8px;
  font-size: 18px;
  line-height: 1.25;
  font-weight: 900;
  color: var(--text);
  position: relative;
  z-index: 1;
}

.ds-fit__cardText{
  margin: 0;
  color: var(--muted);
  line-height: 1.55;
  position: relative;
  z-index: 1;
}

.ds-fit__benefit{
  margin-top: 12px;
  padding-top: 12px;
  border-top: 1px dashed var(--line);
  color: rgba(15,23,42,.72);
  font-weight: 800;
  font-size: 13px;
  position: relative;
  z-index: 1;
}

.ds-fit__card--accent{
  border-color: rgba(123,103,240,.28);
}

.ds-fit__card--accent .ds-fit__icon{
  background: linear-gradient(135deg, rgba(123,103,240,.14), rgba(56,189,248,.12));
  border-color: rgba(123,103,240,.22);
}

/* responsive */
@media (max-width: 980px){
  .ds-fit__grid{
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (max-width: 560px){
  .ds-fit__grid{
    grid-template-columns: 1fr;
  }
}
	</style>
	
	<section class="ds-fit" id="who">
  <div class="ds-fit__container">

    <header class="ds-fit__head">
      <h2 class="ds-fit__title">Кому подходит</h2>
      <p class="ds-fit__subtitle">
        Плагин полезен тем, кому важно быстрее доводить посетителя до действия и не терять заявки.
      </p>

      <div class="ds-fit__tags" aria-label="Ключевые сценарии">
        <span class="ds-fit__tag">Лиды</span>
        <span class="ds-fit__tag">Конверсия</span>
        <span class="ds-fit__tag">Автоматизация</span>
        <span class="ds-fit__tag">Без кода</span>
      </div>
    </header>

    <div class="ds-fit__grid wpds-fade-group" role="list">

      <article class="ds-fit__card wpds-fade-item" role="listitem">
        <div class="ds-fit__icon" aria-hidden="true">🛒</div>
        <h3 class="ds-fit__cardTitle">Интернет-магазины</h3>
        <p class="ds-fit__cardText">
          Увеличить конверсию в заявку/покупку, отвечать быстрее, снижать брошенные действия.
        </p>
        <div class="ds-fit__benefit">Выигрыш: +заявки из трафика</div>
      </article>

      <article class="ds-fit__card wpds-fade-item" role="listitem">
        <div class="ds-fit__icon" aria-hidden="true">🏢</div>
        <h3 class="ds-fit__cardTitle">Услуги и компании</h3>
        <p class="ds-fit__cardText">
          Нужны обращения с сайта: расчёт, консультации, заявки на звонок, подбор услуги.
        </p>
        <div class="ds-fit__benefit">Выигрыш: меньше “пустых” визитов</div>
      </article>

      <article class="ds-fit__card wpds-fade-item" role="listitem">
        <div class="ds-fit__icon" aria-hidden="true">🧑‍💻</div>
        <h3 class="ds-fit__cardTitle">Фрилансерам и студиям</h3>
        <p class="ds-fit__cardText">
          Быстро внедрить у клиента, предложить как доп.опцию и повысить чек проекта.
        </p>
        <div class="ds-fit__benefit">Выигрыш: быстрый результат клиенту</div>
      </article>

      <article class="ds-fit__card wpds-fade-item" role="listitem">
        <div class="ds-fit__icon" aria-hidden="true">📣</div>
        <h3 class="ds-fit__cardTitle">Маркетологам</h3>
        <p class="ds-fit__cardText">
          Тестировать гипотезы, сегментировать аудиторию и улучшать воронку без разработки.
        </p>
        <div class="ds-fit__benefit">Выигрыш: быстрее A/B и итерации</div>
      </article>

      <article class="ds-fit__card wpds-fade-item" role="listitem">
        <div class="ds-fit__icon" aria-hidden="true">🧾</div>
        <h3 class="ds-fit__cardTitle">Лендинги и промо</h3>
        <p class="ds-fit__cardText">
          Нужны заявки “здесь и сейчас”: акции, запуски, сбор контактов, запись.
        </p>
        <div class="ds-fit__benefit">Выигрыш: выше конверсия лендинга</div>
      </article>

      <article class="ds-fit__card wpds-fade-item ds-fit__card--accent" role="listitem">
        <div class="ds-fit__icon" aria-hidden="true">⚙️</div>
        <h3 class="ds-fit__cardTitle">Тем, кто не хочет код</h3>
        <p class="ds-fit__cardText">
          Всё настраивается в админке WordPress — без правок темы и без программиста.
        </p>
        <div class="ds-fit__benefit">Выигрыш: экономия времени и денег</div>
      </article>

    </div>
  </div>
</section>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<style>
		.ds-cmpr{
  --container: 1200px;

  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --accent: #7B67F0;
  --accent2: #38bdf8;

  --yes: #22c55e;
  --mid: #f59e0b;
  --no: #ef4444;

  padding: clamp(22px, 3vw, 48px) 0;
}

.ds-cmpr__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;
}

.ds-cmpr__head{
  margin-bottom: clamp(14px, 2vw, 22px);
}

.ds-cmpr__title{
  margin: 0 0 10px;
  font-weight: 900;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}

.ds-cmpr__subtitle{
  margin: 0;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 84ch;
}

/* Table wrapper */
.ds-cmpr__tableWrap{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  overflow: hidden;
}

/* Table */
.ds-cmpr__table{
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  font-size: 15px;
}

.ds-cmpr__th, .ds-cmpr__td{
  padding: 14px 14px;
  border-bottom: 1px solid var(--line);
  vertical-align: middle;
}

.ds-cmpr__th{
  background: #f8fafc;
  text-align: left;
  font-weight: 900;
  color: var(--text);
  position: sticky;
  top: 0; /* если таблица внутри скролла — будет залипать */
  z-index: 1;
}

.ds-cmpr__th--feature{
  width: 40%;
}

.ds-cmpr__thTitle{
  display: inline-flex;
  align-items: center;
  gap: 10px;
}

.ds-cmpr__badge{
  display: inline-flex;
  align-items: center;
  height: 22px;
  padding: 0 10px;
  border-radius: 999px;
  font-size: 12px;
  font-weight: 900;
  color: #fff;
  background: linear-gradient(135deg, var(--accent), var(--accent2));
}

.ds-cmpr__td--feature{
  color: var(--text);
  font-weight: 800;
}

.ds-cmpr__hint{
  display: block;
  margin-top: 4px;
  color: var(--muted);
  font-weight: 600;
  font-size: 13px;
}

.ds-cmpr__td{
  color: var(--text);
}

.ds-cmpr__td--you, .ds-cmpr__th--you{
  background: linear-gradient(0deg, rgba(123,103,240,.06), rgba(123,103,240,.06));
}

.ds-cmpr__note{
  display: block;
  margin-top: 4px;
  font-size: 13px;
  font-weight: 700;
  color: rgba(15,23,42,.72);
}

/* Symbols */
.ds-cmpr__yes, .ds-cmpr__mid, .ds-cmpr__no{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 26px;
  height: 26px;
  border-radius: 9px;
  font-weight: 900;
  border: 1px solid var(--line);
  background: #fff;
}

.ds-cmpr__yes{ color: var(--yes); border-color: rgba(34,197,94,.25); background: rgba(34,197,94,.08); }
.ds-cmpr__mid{ color: var(--mid); border-color: rgba(245,158,11,.25); background: rgba(245,158,11,.10); }
.ds-cmpr__no { color: var(--no);  border-color: rgba(239,68,68,.25); background: rgba(239,68,68,.08); }

/* zebra rows */
.ds-cmpr__row:nth-child(even) .ds-cmpr__td{
  background: rgba(15,23,42,.015);
}
.ds-cmpr__row:nth-child(even) .ds-cmpr__td--you{
  background: linear-gradient(0deg, rgba(123,103,240,.07), rgba(123,103,240,.07));
}

/* Legend + CTA */
.ds-cmpr__legend{
  display: flex;
  flex-wrap: wrap;
  gap: 10px 16px;
  margin-top: 12px;
  color: var(--muted);
  font-weight: 700;
  font-size: 13px;
}
.ds-cmpr__lg{
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.ds-cmpr__cta{
  display: flex;
  flex-wrap: wrap;
  gap: 12px 16px;
  margin-top: 16px;
}

.ds-cmpr__btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 44px;
  padding: 0 16px;
  border-radius: 12px;
  background: var(--accent);
  color: #fff;
  font-weight: 900;
  text-decoration: none;
  box-shadow: 0 12px 26px rgba(123,103,240,.25);
}

.ds-cmpr__btn:hover{ filter: brightness(.98); }

.ds-cmpr__link{
  display: inline-flex;
  align-items: center;
  height: 44px;
  color: var(--text);
  text-decoration: none;
  border-bottom: 1px solid rgba(15,23,42,.25);
  padding-bottom: 2px;
  font-weight: 900;
}

/* ✅ Mobile: table -> cards */
@media (max-width: 860px){
  .ds-cmpr__table, .ds-cmpr__table thead, .ds-cmpr__table tbody, .ds-cmpr__table th, .ds-cmpr__table td, .ds-cmpr__table tr{
    display: block;
  }

  .ds-cmpr__table thead{
    display: none;
  }

  .ds-cmpr__row{
    border-bottom: 1px solid var(--line);
    padding: 12px 12px;
  }

  .ds-cmpr__td{
    border: 0;
    padding: 10px 10px;
    background: transparent !important;
  }

  .ds-cmpr__td--feature{
    padding: 10px 10px 6px;
    font-size: 16px;
  }

  /* label for columns */
  .ds-cmpr__td[data-col]{
    display: grid;
    grid-template-columns: 140px 1fr;
    gap: 10px;
    align-items: start;
    padding: 8px 10px;
    border: 1px solid var(--line);
    border-radius: 14px;
    margin-top: 10px;
    background: #fff !important;
    box-shadow: 0 10px 24px rgba(15,23,42,.06);
  }

  .ds-cmpr__td[data-col]::before{
    content: attr(data-col);
    color: var(--muted);
    font-weight: 900;
    font-size: 13px;
    line-height: 1.2;
    padding-top: 4px;
  }

  .ds-cmpr__td--you[data-col]{
    border-color: rgba(123,103,240,.25);
    background: linear-gradient(0deg, rgba(123,103,240,.06), rgba(123,103,240,.06)) !important;
  }

  .ds-cmpr__note{
    margin-top: 0;
  }
}

@media (max-width: 420px){
  .ds-cmpr__td[data-col]{
    grid-template-columns: 120px 1fr;
  }
}
	</style>
	
	<section class="ds-cmpr" id="compare">
  <div class="ds-cmpr__container">

    <header class="ds-cmpr__head">
      <h2 class="ds-cmpr__title">Сравнение</h2>
      <p class="ds-cmpr__subtitle">
        Сравнение по ключевым пунктам: чтобы было понятно, за что вы платите и где экономите время.
      </p>
    </header>

    <div class="ds-cmpr__tableWrap" role="region" aria-label="Таблица сравнения">
      <table class="ds-cmpr__table">
        <thead>
          <tr>
            <th class="ds-cmpr__th ds-cmpr__th--feature">Функция</th>
            <th class="ds-cmpr__th ds-cmpr__th--you">
              <span class="ds-cmpr__thTitle">Ваш плагин</span>
              <span class="ds-cmpr__badge">Лучший выбор</span>
            </th>
            <th class="ds-cmpr__th">Directorist + Map Add-ons</th>
            <th class="ds-cmpr__th">GeoDirectory</th>
          </tr>
        </thead>

        <tbody>
          <tr class="ds-cmpr__row">
            <td class="ds-cmpr__td ds-cmpr__td--feature">
              Быстрый старт (без кодинга)
              <span class="ds-cmpr__hint">Запуск без разработчика</span>
            </td>
            <td class="ds-cmpr__td ds-cmpr__td--you" data-col="Ваш плагин">
              <span class="ds-cmpr__yes">✓</span>
              <span class="ds-cmpr__note">Готовые сценарии</span>
            </td>
            <td class="ds-cmpr__td" data-col="Конкурент A"><span class="ds-cmpr__mid">~</span></td>
            <td class="ds-cmpr__td" data-col="Конкурент B"><span class="ds-cmpr__no">—</span></td>
          </tr>

          <tr class="ds-cmpr__row">
            <td class="ds-cmpr__td ds-cmpr__td--feature">
              Гибкая настройка
              <span class="ds-cmpr__hint">Поля/шаги/логика</span>
            </td>
            <td class="ds-cmpr__td ds-cmpr__td--you" data-col="Ваш плагин">
              <span class="ds-cmpr__yes">✓</span>
              <span class="ds-cmpr__note">Расширяемо</span>
            </td>
            <td class="ds-cmpr__td" data-col="Конкурент A"><span class="ds-cmpr__yes">✓</span></td>
            <td class="ds-cmpr__td" data-col="Конкурент B"><span class="ds-cmpr__mid">~</span></td>
          </tr>

          <tr class="ds-cmpr__row">
            <td class="ds-cmpr__td ds-cmpr__td--feature">
              Скорость и лёгкость
              <span class="ds-cmpr__hint">Минимум лишних скриптов</span>
            </td>
            <td class="ds-cmpr__td ds-cmpr__td--you" data-col="Ваш плагин">
              <span class="ds-cmpr__yes">✓</span>
              <span class="ds-cmpr__note">Оптимизировано</span>
            </td>
            <td class="ds-cmpr__td" data-col="Конкурент A"><span class="ds-cmpr__mid">~</span></td>
            <td class="ds-cmpr__td" data-col="Конкурент B"><span class="ds-cmpr__no">—</span></td>
          </tr>

          <tr class="ds-cmpr__row">
            <td class="ds-cmpr__td ds-cmpr__td--feature">
              Обновления и поддержка
              <span class="ds-cmpr__hint">Реакция на баги</span>
            </td>
            <td class="ds-cmpr__td ds-cmpr__td--you" data-col="Ваш плагин">
              <span class="ds-cmpr__yes">✓</span>
              <span class="ds-cmpr__note">Прямая связь</span>
            </td>
            <td class="ds-cmpr__td" data-col="Конкурент A"><span class="ds-cmpr__mid">~</span></td>
            <td class="ds-cmpr__td" data-col="Конкурент B"><span class="ds-cmpr__mid">~</span></td>
          </tr>

          <tr class="ds-cmpr__row">
            <td class="ds-cmpr__td ds-cmpr__td--feature">
              Цена / лицензии
              <span class="ds-cmpr__hint">Разумная стоимость</span>
            </td>
            <td class="ds-cmpr__td ds-cmpr__td--you" data-col="Ваш плагин">
              <span class="ds-cmpr__yes">✓</span>
              <span class="ds-cmpr__note">Без подписки</span>
            </td>
            <td class="ds-cmpr__td" data-col="Конкурент A"><span class="ds-cmpr__no">—</span></td>
            <td class="ds-cmpr__td" data-col="Конкурент B"><span class="ds-cmpr__mid">~</span></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="ds-cmpr__legend" aria-label="Обозначения">
      <span class="ds-cmpr__lg"><span class="ds-cmpr__yes">✓</span> есть</span>
      <span class="ds-cmpr__lg"><span class="ds-cmpr__mid">~</span> частично</span>
      <span class="ds-cmpr__lg"><span class="ds-cmpr__no">—</span> нет</span>
    </div>

    <div class="ds-cmpr__cta">
      <a class="ds-cmpr__btn" href="#license">Выбрать лицензию</a>
      <a class="ds-cmpr__link" href="#faq">Частые вопросы</a>
    </div>

  </div>
</section>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<style>
	.ds-faq{
  --container: 1200px;

  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --accent: #7B67F0;
  --accent2: #38bdf8;

  padding: clamp(22px, 3vw, 48px) 0;
}

.ds-faq__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;
}

.ds-faq__head{
  margin-bottom: clamp(14px, 2vw, 22px);
}

.ds-faq__title{
  margin: 0 0 10px;
  font-weight: 900;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}

.ds-faq__subtitle{
  margin: 0;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 84ch;
}

.ds-faq__grid{
  display: grid;
  grid-template-columns: 1.2fr .8fr;
  gap: clamp(12px, 2vw, 20px);
  align-items: start;
}

/* Accordion items */
.ds-faq__items{
  display: grid;
  gap: 12px;
}

.ds-faq__item{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  overflow: hidden;
}

.ds-faq__q{
  list-style: none;
  cursor: pointer;
  padding: 16px 18px;
  display: grid;
  grid-template-columns: 1fr 28px;
  gap: 12px;
  align-items: center;

  font-weight: 900;
  color: var(--text);
  letter-spacing: -0.01em;
}

/* Remove default marker */
.ds-faq__q::-webkit-details-marker{ display:none; }
.ds-faq__q::marker{ content:""; }

.ds-faq__icon{
  width: 28px;
  height: 28px;
  border-radius: 10px;
  border: 1px solid var(--line);
  background: #fff;
  position: relative;
  box-shadow: 0 10px 24px rgba(15,23,42,.06);
}
.ds-faq__icon::before,
.ds-faq__icon::after{
  content:"";
  position:absolute;
  left: 50%;
  top: 50%;
  width: 12px;
  height: 2px;
  background: rgba(15,23,42,.75);
  transform: translate(-50%, -50%);
  border-radius: 2px;
}
.ds-faq__icon::after{
  width: 2px;
  height: 12px;
}

.ds-faq__a{
  padding: 0 18px 16px;
  color: var(--muted);
  line-height: 1.6;
}

/* Open state */
.ds-faq__item[open]{
  border-color: rgba(123,103,240,.28);
}
.ds-faq__item[open] .ds-faq__q{
  background: linear-gradient(0deg, rgba(123,103,240,.06), rgba(123,103,240,.06));
}
.ds-faq__item[open] .ds-faq__icon{
  border-color: rgba(123,103,240,.25);
}
.ds-faq__item[open] .ds-faq__icon::after{
  display:none; /* превращаем плюс в минус */
}

/* Aside card */
.ds-faq__card{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: 18px;
  position: sticky;
  top: 18px;
}

.ds-faq__cardTitle{
  margin: 0 0 8px;
  font-size: 18px;
  font-weight: 900;
  color: var(--text);
}

.ds-faq__cardText{
  margin: 0 0 14px;
  color: var(--muted);
  line-height: 1.55;
}

.ds-faq__ctaRow{
  display: flex;
  flex-wrap: wrap;
  gap: 10px 14px;
  margin-bottom: 12px;
}

.ds-faq__btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 44px;
  padding: 0 16px;
  border-radius: 12px;
  background: var(--accent);
  color: #fff;
  font-weight: 900;
  text-decoration: none;
  box-shadow: 0 12px 26px rgba(123,103,240,.25);
}

.ds-faq__btn:hover{ filter: brightness(.98); }

.ds-faq__link{
  display: inline-flex;
  align-items: center;
  height: 44px;
  color: var(--text);
  text-decoration: none;
  border-bottom: 1px solid rgba(15,23,42,.25);
  padding-bottom: 2px;
  font-weight: 900;
}

.ds-faq__note{
  padding-top: 12px;
  border-top: 1px dashed var(--line);
  color: rgba(15,23,42,.70);
  font-weight: 800;
  font-size: 13px;
}

/* Responsive */
@media (max-width: 900px){
  .ds-faq__grid{
    grid-template-columns: 1fr;
  }
  .ds-faq__card{
    position: static;
  }
}

@media (max-width: 420px){
  .ds-faq__q{
    padding: 14px 14px;
  }
  .ds-faq__a{
    padding: 0 14px 14px;
  }
}
</style>
	
<section class="ds-faq" id="faq">
  <div class="ds-faq__container">

    <header class="ds-faq__head">
      <h2 class="ds-faq__title">FAQ</h2>
      <p class="ds-faq__subtitle">
        Ответы на частые вопросы — установка, лицензии, обновления и совместимость.
      </p>
    </header>

    <div class="ds-faq__grid">
      <!-- Left: accordion -->
      <div class="ds-faq__items" role="list">

        <details class="ds-faq__item" role="listitem">
          <summary class="ds-faq__q">
            <span>Плагин работает с моей темой и конструкторами (Elementor/Gutenberg)?</span>
            <span class="ds-faq__icon" aria-hidden="true"></span>
          </summary>
          <div class="ds-faq__a">
            Да. Плагин вставляется шорткодом и/или блоком, поэтому совместим с большинством тем.
            Если у вас нестандартная тема — обычно достаточно добавить блок/шорткод в нужное место.
          </div>
        </details>

        <details class="ds-faq__item" role="listitem">
          <summary class="ds-faq__q">
            <span>Нужен ли программист для настройки?</span>
            <span class="ds-faq__icon" aria-hidden="true"></span>
          </summary>
          <div class="ds-faq__a">
            Нет. Основные настройки делаются в админке WordPress. Если нужна кастомизация под дизайн сайта —
            можно обойтись CSS (мы даём классы/хуки), либо заказать доработку.
          </div>
        </details>

        <details class="ds-faq__item" role="listitem">
          <summary class="ds-faq__q">
            <span>Как работает лицензия: на домен или на количество сайтов?</span>
            <span class="ds-faq__icon" aria-hidden="true"></span>
          </summary>
          <div class="ds-faq__a">
            Обычно лицензии бывают на 1 сайт / 5 сайтов / безлимит. Вы можете перенести лицензию на другой домен,
            если меняете сайт (по правилам лицензии).
          </div>
        </details>

        <details class="ds-faq__item" role="listitem">
          <summary class="ds-faq__q">
            <span>Обновления бесплатные? Что с поддержкой?</span>
            <span class="ds-faq__icon" aria-hidden="true"></span>
          </summary>
          <div class="ds-faq__a">
            Обновления и поддержка зависят от тарифа. Обычно это период поддержки (например, 6–12 месяцев),
            а обновления доступны на время активной лицензии/подписки на обновления (если у вас такая модель).
          </div>
        </details>

        <details class="ds-faq__item" role="listitem">
          <summary class="ds-faq__q">
            <span>Плагин влияет на скорость сайта?</span>
            <span class="ds-faq__icon" aria-hidden="true"></span>
          </summary>
          <div class="ds-faq__a">
            Мы стараемся грузить только нужные скрипты на тех страницах, где используется плагин.
            Для максимальной скорости используйте кеширование и оптимизацию изображений — как обычно для WordPress.
          </div>
        </details>

        <details class="ds-faq__item" role="listitem">
          <summary class="ds-faq__q">
            <span>Можно ли вернуть деньги, если не подошло?</span>
            <span class="ds-faq__icon" aria-hidden="true"></span>
          </summary>
          <div class="ds-faq__a">
            Да, если вы соблюдаете условия возврата (например, в течение N дней с момента покупки и без злоупотреблений).
            Уточните условия возврата на странице «Политика возвратов».
          </div>
        </details>

      </div>

      <!-- Right: support card -->
      <aside class="ds-faq__aside">
        <div class="ds-faq__card">
          <h3 class="ds-faq__cardTitle">Не нашли ответ?</h3>
          <p class="ds-faq__cardText">
            Напишите — подскажем по совместимости, установке и лицензии.
          </p>
          <div class="ds-faq__ctaRow">
            <a class="ds-faq__btn" href="#contact">Задать вопрос</a>
            <a class="ds-faq__link" href="#docs">Документация</a>
          </div>
          <div class="ds-faq__note">
            Обычно отвечаем в течение 24 часов (в рабочие дни).
          </div>
        </div>
      </aside>
    </div>

  </div>
</section>
	
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Плагин работает с моей темой и конструкторами (Elementor/Gutenberg)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Да. Плагин вставляется шорткодом и/или блоком, поэтому совместим с большинством тем."
      }
    },
    {
      "@type": "Question",
      "name": "Нужен ли программист для настройки?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Нет. Основные настройки делаются в админке WordPress. Для кастомизации можно использовать CSS."
      }
    },
    {
      "@type": "Question",
      "name": "Как работает лицензия: на домен или на количество сайтов?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Обычно лицензии бывают на 1 сайт / 5 сайтов / безлимит. Лицензию можно перенести при смене домена по правилам лицензирования."
      }
    },
    {
      "@type": "Question",
      "name": "Обновления бесплатные? Что с поддержкой?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Зависит от тарифа: обычно есть период поддержки, а обновления доступны на время активной лицензии."
      }
    },
    {
      "@type": "Question",
      "name": "Плагин влияет на скорость сайта?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Мы стараемся подключать скрипты только на страницах, где используется плагин. Для максимальной скорости используйте кеширование и оптимизацию."
      }
    },
    {
      "@type": "Question",
      "name": "Можно ли вернуть деньги, если не подошло?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Да, при соблюдении условий возврата. Уточните детали в политике возвратов."
      }
    }
  ]
}
</script>
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<style>
	.ds-price{
  --container: 1200px;

  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --accent: #7B67F0;
  --accent2: #38bdf8;

  padding: clamp(22px, 3vw, 48px) 0;
}

.ds-price__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;
}

.ds-price__head{
  margin-bottom: clamp(14px, 2vw, 22px);
}

.ds-price__title{
  margin: 0 0 10px;
  font-weight: 900;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}

.ds-price__subtitle{
  margin: 0;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 84ch;
}

/* grid */
.ds-price__grid{
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: clamp(12px, 2vw, 18px);
  align-items: stretch;
}

.ds-price__card{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: clamp(16px, 2.2vw, 22px);
  position: relative;
  overflow: hidden;
}

.ds-price__card::after{
  content:"";
  position:absolute;
  inset: 0;
  pointer-events:none;
  opacity: .10;
  background:
    radial-gradient(700px 260px at 15% 0%, rgba(123,103,240,.65), transparent 60%),
    radial-gradient(700px 240px at 90% 0%, rgba(56,189,248,.55), transparent 55%);
}

.ds-price__top{
  position: relative;
  z-index: 1;
}

.ds-price__name{
  margin: 0 0 10px;
  font-size: 18px;
  line-height: 1.2;
  font-weight: 900;
  color: var(--text);
}

.ds-price__price{
  display: flex;
  align-items: baseline;
  gap: 10px;
  margin-bottom: 8px;
}

.ds-price__value{
  font-size: 28px;
  font-weight: 950;
  letter-spacing: -0.02em;
  color: var(--text);
}

.ds-price__period{
  font-size: 13px;
  font-weight: 900;
  color: rgba(15,23,42,.70);
  border: 1px solid var(--line);
  background: rgba(255,255,255,.75);
  border-radius: 999px;
  padding: 4px 10px;
}

.ds-price__desc{
  margin: 0 0 14px;
  color: var(--muted);
  line-height: 1.55;
}

/* list */
.ds-price__list{
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  gap: 10px;
  position: relative;
  z-index: 1;
}

.ds-price__list li{
  display: grid;
  grid-template-columns: 18px 1fr;
  gap: 10px;
  align-items: start;
  color: rgba(15,23,42,.88);
  line-height: 1.45;
}

.ds-price__list li::before{
  content: "✓";
  width: 18px;
  height: 18px;
  margin-top: 2px;
  border-radius: 7px;
  display: grid;
  place-items: center;
  font-weight: 900;
  color: #22c55e;
  background: rgba(34,197,94,.10);
  border: 1px solid rgba(34,197,94,.25);
}

/* actions */
.ds-price__actions{
  display: flex;
  flex-wrap: wrap;
  gap: 10px 14px;
  margin-top: 16px;
  position: relative;
  z-index: 1;
}

.ds-price__btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 44px;
  padding: 0 16px;
  border-radius: 12px;
  background: #0f172a;
  color: #fff;
  font-weight: 900;
  text-decoration: none;
  border: 1px solid rgba(0,0,0,0);
}

.ds-price__btn:hover{ filter: brightness(.98); }

.ds-price__btn--accent{
  background: var(--accent);
  box-shadow: 0 12px 26px rgba(123,103,240,.25);
}

.ds-price__link{
  display: inline-flex;
  align-items: center;
  height: 44px;
  color: var(--text);
  text-decoration: none;
  border-bottom: 1px solid rgba(15,23,42,.25);
  padding-bottom: 2px;
  font-weight: 900;
}

/* popular styling */
.ds-price__card--popular{
  border-color: rgba(123,103,240,.28);
  transform: translateY(-6px);
}

.ds-price__ribbon{
  position: absolute;
  top: 14px;
  right: 14px;
  z-index: 2;
  font-size: 12px;
  font-weight: 950;
  color: #fff;
  background: linear-gradient(135deg, var(--accent), var(--accent2));
  padding: 6px 10px;
  border-radius: 999px;
  box-shadow: 0 12px 26px rgba(123,103,240,.25);
}

/* bottom */
.ds-price__bottom{
  margin-top: 16px;
  display: grid;
  gap: 12px;
}

.ds-price__note{
  background: #fff;
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: 0 12px 26px rgba(15,23,42,.06);
  padding: 14px 16px;
  color: rgba(15,23,42,.78);
  line-height: 1.55;
}

.ds-price__trust{
  display: flex;
  flex-wrap: wrap;
  gap: 10px 16px;
  color: var(--muted);
  font-weight: 800;
  font-size: 13px;
}

.ds-price__trustItem{
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

/* responsive */
@media (max-width: 980px){
  .ds-price__grid{
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
  .ds-price__card--popular{
    transform: none;
  }
}

@media (max-width: 560px){
  .ds-price__grid{
    grid-template-columns: 1fr;
  }
}
</style>
	
<section class="ds-price" id="license">
  <div class="ds-price__container">
    <header class="ds-price__head">
      <h2 class="ds-price__title">Цены</h2>
      <p class="ds-price__subtitle">
        Выберите лицензию под ваш проект. Обновления и поддержка — по условиям тарифа.
      </p>
    </header>

    <div class="ds-price__grid" role="list">

      <!-- Plan 1 -->
      <article class="ds-price__card" role="listitem">
        <div class="ds-price__top">
          <h3 class="ds-price__name">1 сайт</h3>
          <div class="ds-price__price">
            <span class="ds-price__value">2 990 ₽</span>
            <span class="ds-price__period">разово</span>
          </div>
          <p class="ds-price__desc">Для одного проекта или лендинга.</p>
        </div>

        <ul class="ds-price__list">
          <li>Лицензия на 1 домен</li>
          <li>Обновления: 12 месяцев</li>
          <li>Поддержка: 6 месяцев</li>
          <li>Без подписок</li>
        </ul>

        <div class="ds-price__actions">
          <a class="ds-price__btn ds-tg-buy"
   href="#"
   data-tariff="1 сайт"
   data-price="2 990 ₽"
   data-domains="1 домен"
>Купить</a>
          <a class="ds-price__link" href="#faq">Что входит?</a>
        </div>
      </article>

      <!-- Plan 2 (popular) -->
      <article class="ds-price__card ds-price__card--popular" role="listitem" aria-label="Популярный тариф">
        <div class="ds-price__ribbon">Популярный</div>

        <div class="ds-price__top">
          <h3 class="ds-price__name">5 сайтов</h3>
          <div class="ds-price__price">
            <span class="ds-price__value">6 990 ₽</span>
            <span class="ds-price__period">разово</span>
          </div>
          <p class="ds-price__desc">Для студий, нескольких проектов и тестов.</p>
        </div>

        <ul class="ds-price__list">
          <li>Лицензия до 5 доменов</li>
          <li>Обновления: 12 месяцев</li>
          <li>Поддержка: 12 месяцев</li>
          <li>Приоритетная поддержка</li>
        </ul>

        <div class="ds-price__actions">
          <a class="ds-price__btn ds-price__btn--accent ds-tg-buy"
   href="#"
   data-tariff="5 сайтов"
   data-price="6 990 ₽"
   data-domains="до 5 доменов"
>Купить</a>
          <a class="ds-price__link" href="#compare">Сравнение</a>
        </div>
      </article>

      <!-- Plan 3 -->
      <article class="ds-price__card" role="listitem">
        <div class="ds-price__top">
          <h3 class="ds-price__name">Безлимит</h3>
          <div class="ds-price__price">
            <span class="ds-price__value">12 990 ₽</span>
            <span class="ds-price__period">разово</span>
          </div>
          <p class="ds-price__desc">Для агентств и постоянной работы с клиентами.</p>
        </div>

        <ul class="ds-price__list">
          <li>Неограниченно сайтов</li>
          <li>Обновления: 12 месяцев</li>
          <li>Поддержка: 12 месяцев</li>
          <li>Доступ к бета-функциям</li>
        </ul>

        <div class="ds-price__actions">
          <a class="ds-price__btn ds-tg-buy"
   href="#"
   data-tariff="Безлимит"
   data-price="12 990 ₽"
   data-domains="неограниченно"
>Купить</a>
          <a class="ds-price__link" href="#contact">Задать вопрос</a>
        </div>
      </article>

    </div>
  </div>
</section>
	
	
<script>
(function () {

  const TG_USERNAME = "wp_devstudio";
  const PLUGIN_NAME = "Название плагина"; // ← впиши свой плагин

  function buildMessage(data) {
    return `Здравствуйте! Хочу купить плагин "${PLUGIN_NAME}".\n`
         + `Тариф: ${data.tariff} (${data.domains}).\n`
         + `Цена: ${data.price} (разово).\n\n`
         + `Подскажите, как оплатить и получить лицензию.`;
  }

  document.addEventListener("click", function (e) {

    const btn = e.target.closest(".ds-tg-buy");
    if (!btn) return;

    e.preventDefault();

    const tariff  = btn.dataset.tariff  || "";
    const price   = btn.dataset.price   || "";
    const domains = btn.dataset.domains || "";

    const text = buildMessage({ tariff, price, domains });

    const url = `https://t.me/${TG_USERNAME}?text=${encodeURIComponent(text)}`;

    window.open(url, "_blank", "noopener,noreferrer");

  });

})();
</script>
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	

<style>
	.ds-guar{
  --container: 1200px;

  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --accent: #7B67F0;
  --accent2: #38bdf8;

  padding: clamp(22px, 3vw, 48px) 0;
}

.ds-guar__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;

  display: grid;
  grid-template-columns: .95fr 1.05fr;
  gap: clamp(14px, 3vw, 28px);
  align-items: start;
}

.ds-guar__title{
  margin: 0 0 10px;
  font-weight: 900;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}

.ds-guar__subtitle{
  margin: 0 0 16px;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 72ch;
}

.ds-guar__actions{
  display: flex;
  flex-wrap: wrap;
  gap: 12px 16px;
  margin-bottom: 14px;
}

.ds-guar__btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 44px;
  padding: 0 16px;
  border-radius: 12px;
  background: var(--accent);
  color: #fff;
  font-weight: 900;
  text-decoration: none;
  box-shadow: 0 12px 26px rgba(123,103,240,.25);
}

.ds-guar__btn:hover{ filter: brightness(.98); }

.ds-guar__link{
  display: inline-flex;
  align-items: center;
  height: 44px;
  color: var(--text);
  text-decoration: none;
  border-bottom: 1px solid rgba(15,23,42,.25);
  padding-bottom: 2px;
  font-weight: 900;
}

.ds-guar__note{
  background: #fff;
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: 0 12px 26px rgba(15,23,42,.06);
  padding: 14px 16px;
  color: rgba(15,23,42,.78);
  line-height: 1.55;
}

/* Cards grid */
.ds-guar__grid{
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: clamp(12px, 2vw, 16px);
}

.ds-guar__card{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: 16px 16px 14px;
  position: relative;
  overflow: hidden;
  min-height: 170px;
}

.ds-guar__card::after{
  content:"";
  position:absolute;
  inset: 0;
  pointer-events:none;
  opacity: .10;
  background:
    radial-gradient(700px 240px at 15% 0%, rgba(123,103,240,.65), transparent 60%),
    radial-gradient(700px 220px at 90% 0%, rgba(56,189,248,.55), transparent 55%);
}

.ds-guar__icon{
  width: 44px;
  height: 44px;
  border-radius: 14px;
  display: grid;
  place-items: center;
  font-size: 20px;
  background: #fff;
  border: 1px solid var(--line);
  box-shadow: 0 12px 26px rgba(15,23,42,.08);
  position: relative;
  z-index: 1;
}

.ds-guar__cardTitle{
  margin: 12px 0 8px;
  font-size: 17px;
  line-height: 1.25;
  font-weight: 950;
  color: var(--text);
  position: relative;
  z-index: 1;
}

.ds-guar__cardText{
  margin: 0;
  color: var(--muted);
  line-height: 1.55;
  position: relative;
  z-index: 1;
}

.ds-guar__meta{
  margin-top: 12px;
  padding-top: 12px;
  border-top: 1px dashed var(--line);
  color: rgba(15,23,42,.72);
  font-weight: 900;
  font-size: 13px;
  position: relative;
  z-index: 1;
}

.ds-guar__card--accent{
  border-color: rgba(123,103,240,.28);
}

.ds-guar__card--accent .ds-guar__icon{
  background: linear-gradient(135deg, rgba(123,103,240,.14), rgba(56,189,248,.12));
  border-color: rgba(123,103,240,.22);
}

/* Responsive */
@media (max-width: 980px){
  .ds-guar__container{
    grid-template-columns: 1fr;
  }
  .ds-guar__grid{
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (max-width: 560px){
  .ds-guar__grid{
    grid-template-columns: 1fr;
  }
}
</style>
	
<section class="ds-guar" id="guarantee">
  <div class="ds-guar__container">

    <header class="ds-guar__head">
      <h2 class="ds-guar__title">Гарантии</h2>
      <p class="ds-guar__subtitle">
        Мы продаём не “кот в мешке”, а рабочий продукт: понятные условия, обновления и поддержка.
      </p>

      <div class="ds-guar__actions">
        <a class="ds-guar__btn" href="#license">Выбрать лицензию</a>
        <a class="ds-guar__link" href="#faq">FAQ</a>
      </div>

      <div class="ds-guar__note">
        <strong>Важно:</strong> финальные условия (срок возврата, поддержка, обновления) укажи в политике/лицензии.
      </div>
    </header>

    <div class="ds-guar__grid wpds-fade-group" role="list">

      <article class="ds-guar__card wpds-fade-item" role="listitem">
        <div class="ds-guar__icon" aria-hidden="true">💸</div>
        <h3 class="ds-guar__cardTitle">Возврат денег</h3>
        <p class="ds-guar__cardText">
          Если продукт не подошёл — можно оформить возврат в течение N дней по правилам возврата.
        </p>
        <div class="ds-guar__meta">Без лишних вопросов — по регламенту</div>
      </article>

      <article class="ds-guar__card wpds-fade-item" role="listitem">
        <div class="ds-guar__icon" aria-hidden="true">🛠️</div>
        <h3 class="ds-guar__cardTitle">Поддержка и помощь</h3>
        <p class="ds-guar__cardText">
          Подскажем по установке и базовой настройке, поможем разобраться с типовыми проблемами.
        </p>
        <div class="ds-guar__meta">Ответ обычно до 24 часов</div>
      </article>

      <article class="ds-guar__card wpds-fade-item" role="listitem">
        <div class="ds-guar__icon" aria-hidden="true">🔄</div>
        <h3 class="ds-guar__cardTitle">Обновления и фиксы</h3>
        <p class="ds-guar__cardText">
          Регулярно обновляем совместимость с WordPress и исправляем баги — продукт “живой”.
        </p>
        <div class="ds-guar__meta">Changelog на странице</div>
      </article>

      <article class="ds-guar__card wpds-fade-item ds-guar__card--accent" role="listitem">
        <div class="ds-guar__icon" aria-hidden="true">⚡</div>
        <h3 class="ds-guar__cardTitle">Быстрый старт</h3>
        <p class="ds-guar__cardText">
          Понятная настройка и аккуратная интеграция: без “ломающих” правок темы и без лишних зависимостей.
        </p>
        <div class="ds-guar__meta">Установка за 10–15 минут</div>
      </article>

      <article class="ds-guar__card wpds-fade-item" role="listitem">
        <div class="ds-guar__icon" aria-hidden="true">🔒</div>
        <h3 class="ds-guar__cardTitle">Безопасность</h3>
        <p class="ds-guar__cardText">
          Следим за совместимостью и используем стандартные практики WordPress (санитизация, nonce, роли).
        </p>
        <div class="ds-guar__meta">Аккуратный код</div>
      </article>

      <article class="ds-guar__card wpds-fade-item" role="listitem">
        <div class="ds-guar__icon" aria-hidden="true">📄</div>
        <h3 class="ds-guar__cardTitle">Прозрачная лицензия</h3>
        <p class="ds-guar__cardText">
          Понятные условия: на сколько сайтов, как переносится, что входит в поддержку и обновления.
        </p>
        <div class="ds-guar__meta">Ссылка на условия</div>
      </article>

    </div>
  </div>
</section>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<style>
	.ds-cta{
  --container: 1200px;

  --text: #0f172a;
  --muted: #64748b;
  --line: rgba(255,255,255,.22);

  --card: #ffffff;
  --shadow: 0 24px 70px rgba(15,23,42,.20);
  --radius: 22px;

  --accent: #7B67F0;
  --accent2: #38bdf8;

  padding: clamp(26px, 3.4vw, 56px) 0;
}

.ds-cta__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;
}

.ds-cta__box{
  border-radius: var(--radius);
  overflow: hidden;
  box-shadow: var(--shadow);
  position: relative;

  background:
    radial-gradient(900px 380px at 12% 0%, rgba(255,255,255,.22), transparent 60%),
    radial-gradient(850px 320px at 90% 10%, rgba(255,255,255,.18), transparent 55%),
    linear-gradient(135deg, var(--accent), var(--accent2));

  color: #fff;

  display: grid;
  grid-template-columns: 1.2fr .8fr;
  gap: clamp(14px, 3vw, 28px);
  padding: clamp(18px, 3vw, 34px);
  align-items: center;
}

.ds-cta__box::after{
  content:"";
  position:absolute;
  inset: 0;
  pointer-events:none;
  opacity: .16;
  background:
    radial-gradient(700px 260px at 20% 15%, rgba(255,255,255,.40), transparent 60%),
    radial-gradient(700px 260px at 80% 85%, rgba(0,0,0,.18), transparent 60%);
}

/* Left */
.ds-cta__content{
  position: relative;
  z-index: 1;
}

.ds-cta__title{
  margin: 0 0 10px;
  font-weight: 950;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 3vw, 36px);
  line-height: 1.12;
}

.ds-cta__subtitle{
  margin: 0 0 18px;
  color: rgba(255,255,255,.92);
  font-size: 16px;
  line-height: 1.6;
  max-width: 72ch;
}

.ds-cta__actions{
  display: flex;
  flex-wrap: wrap;
  gap: 12px 14px;
  margin-bottom: 14px;
}

.ds-cta__btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 46px;
  padding: 0 18px;
  border-radius: 14px;
  background: #0f172a;
  color: #fff;
  font-weight: 950;
  text-decoration: none;
  border: 1px solid rgba(0,0,0,0);
  box-shadow: 0 14px 32px rgba(15,23,42,.22);
}

.ds-cta__btn:hover{ filter: brightness(.98); }

.ds-cta__btn--ghost{
  background: rgba(255,255,255,.16);
  border: 1px solid rgba(255,255,255,.28);
  box-shadow: none;
}

.ds-cta__trust{
  display: flex;
  flex-wrap: wrap;
  gap: 10px 14px;
  font-weight: 900;
  font-size: 13px;
  color: rgba(255,255,255,.92);
}

.ds-cta__trustItem{
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

/* Right */
.ds-cta__aside{
  position: relative;
  z-index: 1;
}

.ds-cta__card{
  background: rgba(255,255,255,.12);
  border: 1px solid rgba(255,255,255,.26);
  border-radius: 18px;
  padding: 16px;
  backdrop-filter: blur(10px);
}

.ds-cta__cardTop{
  display: flex;
  align-items: baseline;
  justify-content: space-between;
  gap: 12px;
  margin-bottom: 12px;
}

.ds-cta__badge{
  display: inline-flex;
  align-items: center;
  height: 24px;
  padding: 0 10px;
  border-radius: 999px;
  font-size: 12px;
  font-weight: 950;
  background: rgba(255,255,255,.20);
  border: 1px solid rgba(255,255,255,.28);
}

.ds-cta__small{
  font-weight: 800;
  font-size: 12px;
  color: rgba(255,255,255,.85);
}

.ds-cta__list{
  margin: 0;
  padding: 0;
  list-style: none;
  display: grid;
  gap: 10px;
  color: rgba(255,255,255,.92);
  line-height: 1.45;
  font-weight: 700;
}

.ds-cta__list li{
  display: grid;
  grid-template-columns: 18px 1fr;
  gap: 10px;
  align-items: start;
}

.ds-cta__list li::before{
  content: "✓";
  width: 18px;
  height: 18px;
  margin-top: 2px;
  border-radius: 7px;
  display: grid;
  place-items: center;
  font-weight: 950;
  color: #fff;
  background: rgba(255,255,255,.18);
  border: 1px solid rgba(255,255,255,.26);
}

.ds-cta__mini{
  display: flex;
  flex-wrap: wrap;
  gap: 8px 10px;
  margin-top: 12px;
  padding-top: 12px;
  border-top: 1px solid rgba(255,255,255,.20);
  color: rgba(255,255,255,.90);
  font-weight: 900;
  font-size: 12px;
}

.ds-cta__miniItem{
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(255,255,255,.14);
  border: 1px solid rgba(255,255,255,.22);
  border-radius: 999px;
  padding: 6px 10px;
}

.ds-cta__link{
  display: inline-flex;
  margin-top: 12px;
  color: #fff;
  font-weight: 950;
  text-decoration: none;
  border-bottom: 1px solid rgba(255,255,255,.45);
  padding-bottom: 2px;
}

/* Responsive */
@media (max-width: 980px){
  .ds-cta__box{
    grid-template-columns: 1fr;
  }
}
</style>
	
<section class="ds-cta" id="final-cta">
  <div class="ds-cta__container">

    <div class="ds-cta__box">
      <!-- Left -->
      <div class="ds-cta__content">
        <h2 class="ds-cta__title">Готовы запустить уже сегодня?</h2>
        <p class="ds-cta__subtitle">
          Установите плагин, настройте за 10–15 минут и начните получать результат.
          Если нужна помощь — подскажем по установке и совместимости.
        </p>

        <div class="ds-cta__actions">
          <a class="ds-cta__btn" href="#license">Выбрать лицензию</a>
          <a class="ds-cta__btn ds-cta__btn--ghost" href="#demo">Посмотреть демо</a>
        </div>

        <div class="ds-cta__trust">
          <span class="ds-cta__trustItem">✅ Без подписок</span>
          <span class="ds-cta__trustItem">✅ Обновления и фиксы</span>
          <span class="ds-cta__trustItem">✅ Поддержка</span>
        </div>
      </div>

      <!-- Right -->
      <aside class="ds-cta__aside" aria-label="Что вы получаете">
        <div class="ds-cta__card">
          <div class="ds-cta__cardTop">
            <div class="ds-cta__badge">Что входит</div>
            <div class="ds-cta__small">После покупки</div>
          </div>

          <ul class="ds-cta__list">
            <li>Файл плагина + доступ к обновлениям</li>
            <li>Инструкция по установке и запуску</li>
            <li>Поддержка по типовым вопросам</li>
            <li>Совместимость с темами/конструкторами</li>
          </ul>

          <div class="ds-cta__mini">
            <span class="ds-cta__miniItem">⏱ Быстрый старт</span>
            <span class="ds-cta__miniItem">🧩 Без кодинга</span>
            <span class="ds-cta__miniItem">⚙️ Настройки в WP</span>
          </div>

          <a class="ds-cta__link" href="#faq">Посмотреть FAQ</a>
        </div>
      </aside>
    </div>

  </div>
</section>	
	
	
	

  <div class="container" style="max-width:1200px;margin:0 auto;padding:24px 20px;">
    <?php
    // Ниже контент страницы (что ты введёшь в редакторе)
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
    ?>
  </div>
</main>

<?php if (function_exists('ps_render_plugin_related_sections')) {
	ps_render_plugin_related_sections();
}

get_footer(); ?>