<?php get_header(); ?>
<main>
  <section class="intro">
    <div class="bg"></div>
    <div class="container intro__container">
      <h1>Душа: растения и кофе</h1>
      <p>насладись ароматным кофе в тропической атмосфере</p>
    </div>
  </section>

  <section class="about"
           id="about">
    <div class="container about__container">
      <h3>Кто мы такие и чем занимаемся?</h3>
      <div class="about__introduce">
        <img src="<?= THEME_PATH ?>/assets/about-eb69ec13.webp"
             width="250"
             height="250"
             alt="Но сначала кофе.">
          <?php the_field( 'new_text','option' ); ?>
      </div>

      <div class="about__addition">
          <?php the_field( 'new_text','option' ); ?>
        <img src="<?= THEME_PATH ?>/assets/about2-696b1cba.webp"
             width="250"
             height="250"
             alt="Но сначала кофе.">
      </div>
    </div>
  </section>

  <section class="advantages"
           id="advantages">
    <div class="container advantages__container">
      <h2>Наши преимущества</h2>
      <ul>
        <li>
          <svg aria-hidden="true"
               focusable="false"
               width="40"
               height="40">
            <use href="<?= THEME_PATH ?>/assets/sprite-c9604116.svg#icon-leaf"></use>
          </svg>
          <h3>Уникальный ассортимент</h3>
          <p>У нас вы найдете самые красивые и редкие растения в городе: филодендрон, алоказия,
            церопегия и многие другие</p>
        </li>

        <li>
          <svg aria-hidden="true"
               focusable="false"
               width="40"
               height="40">
            <use href="<?= THEME_PATH ?>/assets/sprite-c9604116.svg#icon-leaf"></use>
          </svg>
          <h3>Консультации по уходу</h3>
          <p>Мы подробно расскажем и объясним как ухаживать за растением, чтобы оно радовало вас
            долгие годы!</p>
        </li>

        <li>
          <svg aria-hidden="true"
               focusable="false"
               width="40"
               height="40">
            <use href="<?= THEME_PATH ?>/assets/sprite-c9604116.svg#icon-leaf"></use>
          </svg>
          <h3>Экологичность</h3>
          <p>А еще мы варим очень вкусный кофе по приятной цене! А наши стаканчики сделаны из
            перерабатываемого материала</p>
        </li>
      </ul>
    </div>
  </section>

  <section class="catalog"
           id="catalog">
    <div class="container catalog__container">
      <h2>Наши растения</h2>

      <?php $catalog_cards = get_field( 'catalog', 'option' ); ?>
      <?php if ($catalog_cards): ?>
      <ul>
        <?php foreach( $catalog_cards as $card) : ?>
          <li>
            <img src="<?= $card['img']; ?>"
                width="200"
                height="300"
                alt="<?= $card['title']; ?>">
            <h3>
              <span><?= $card['title']; ?></span>
            </h3>
          </li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>

      <a class="catalog__link"
         href="/catalog/">Показать больше</a>
    </div>
  </section>

  <section class="feedback"
           id="feedback">
    <h2 class="visually-hidden">Обратная связь.</h2>
    <div class="container feedback__container">
      <form>
        <span>Появились вопросы?
          <br>
          Пишите нам, и мы скоро ответим!</span>

        <label>
          <input type="text"
                 name="name"
                 placeholder="Имя"
                 title="Пожалуйста, напишите ваше имя, чтобы мы знали, как к вам обращаться"
                 required>
          <span class="visually-hidden">Имя.</span>
        </label>

        <label>
          <input type="email"
                 name="email"
                 placeholder="E-mail"
                 title="Пожалуйста, введите вашу почту, чтобы мы знали, куда направить ответ"
                 required>
          <span class="visually-hidden">Email.</span>
        </label>

        <label class="feedback__message">
          <textarea name="question"
                    placeholder="Ваш вопрос"
                    rows="4"
                    title="Введите интересующий вас вопрос"
                    required></textarea>
          <span class="visually-hidden">Ваш вопрос</span>
        </label>

        <button class="btn feedback__btn"
                type="submit">
          Отправить
        </button>
      </form>
    </div>
  </section>

  <section class="contacts"
           id="contacts">
    <h2 class="visually-hidden">Контакты.</h2>
    <div class="container contacts__container">
      <div class="contacts__content">
        <ul>
          <li>
            <h4>Адрес:</h4>
            <address>г. Калининград, ул. Интернациональная, 74</address>
          </li>

          <li>
            <h4>Телефон:</h4>
            <?= get_phone(get_field('contacts_phone', 'option')); ?>
          </li>

          <li>
            <h4>График работы:</h4>
            <span>Пн-Пт, с 8-00 до 20-00</span>
            <br>
            <span>Сб-Вс, с 10-00 до 20-00</span>
          </li>
        </ul>
      </div>

      <div id=map
           class="contacts__map">
        <span>Пожалуйста, подождите, пока загрузится карта</span>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
