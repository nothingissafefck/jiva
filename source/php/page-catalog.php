<?php /* Template Name: Каталог */ ?>

<?php get_header(); ?>
<main>
  <section class="breadcrumbs">
    <h2 class="visually-hidden">Навигация страницы каталога.</h2>
    <div class="container">
      <ul class="breadcrumbs__list">
        <li class="breadcrumbs__item">
          <a class="breadcrumbs__link"
             href="/"
             tabindex="0">Главная</a>
        </li>

        <li class="breadcrumbs__item">
          <span class="breadcrumbs__link">Каталог</span>
        </li>
      </ul>
    </div>
  </section>

  <section class="catalog">
    <h1>Каталог</h1>

    <div class="container catalog__container">
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

      <div class="catalog__info">
        <span>На сайте представлены не все наши растения
          <br>
          Увидеть больше и приобрести понравившееся вы можете, посетив нас</span>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
