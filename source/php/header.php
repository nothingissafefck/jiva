<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
  <meta name="description"
        content="<?php bloginfo('description'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <link rel="icon"
        href="/assets/favicon-eff1b2a5.ico">
  <link rel="apple-touch-icon"
        sizes="180x180"
        href="/assets/apple-touch-icon-a2402526.png">
  <link rel="icon"
        type="image/png"
        sizes="32x32"
        href="data:image/png;base64,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">
  <link rel="icon"
        type="image/png"
        sizes="16x16"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABmFBMVEX////////////////////////////////////9/f3////////////////////////////////9/Pz9/f3////////////////////////////+/v76+vr8/Pz9/f3m5ubi4uKcmpu4t7fEw8PZ2NjT0tLR0NFgXV7m5eXQ0NCsqquwr6+qqKmnpqbPzs6WlJQrJyjS0dHLy8u2tLW3tba6uLl/fX3n5+f4+PinpaZXVFTFxMTU09PEw8S7urq2tbV0cnL39/fAv796eHl5d3g5NTaVk5Pg39+gnp86NzhWU1RaV1iHhYbo6OibmZqvra7My8vq6uq5t7hua2y3traenZ3Ozc7FxMXAvr/LysrLystyb3CVk5Scm5s7NzhHREW0srOxr7Cvrq6Fg4OZl5cwLC14dXampKTe3d729vaysbGysLF8env19PX19fWYl5d9enuYlpbNzMywrq6opqeUkpLo5+f39vdkYWJqZ2jW1dWurKyqqamQjo6GhIXp6em8u7uura2WlJWgn5/BwMDa2dn5+fn7+/uNXOxqAAAAGnRSTlMFYNj92mQGYe3vZ9fd/P7Z32Xv8Wtm3uBqB1ohvXUAAAABYktHRACIBR1IAAAAB3RJTUUH5wMYFh8TRNcUuAAAAOdJREFUGNNjYGBkYpaCAmYWVjYGdg4oT1pGVk6ak4uBG8SRlZeVUlBUUlZR5WHgBQmoqWtIaWpp6+jq8TGAlesbGEoZGZuYmplLgQQs5CytrG1s7ez1HBzBAk7O1i6ubnYm2u4eUmABFU8vbx9fPw99/wCwgGxgUHBIaFi4YURkFFjAMTomNi5eMyExySlZFqwlJTUtPSMzK1s7OycXLJCXX1BY5JiVXVxSWibFwCwnW25fUVllkVRdU1tXxcfAX6/cUJUpIyXT2NSc1dIqwCAo1NYuDfabRZuctLAIA5uomBQciEtIAgCAGDTRmT57QwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMy0wMy0yNFQyMjozMToxOSswMDowMDifqM8AAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjMtMDMtMjRUMjI6MzE6MTkrMDA6MDBJwhBzAAAAV3pUWHRSYXcgcHJvZmlsZSB0eXBlIGlwdGMAAHic4/IMCHFWKCjKT8vMSeVSAAMjCy5jCxMjE0uTFAMTIESANMNkAyOzVCDL2NTIxMzEHMQHy4BIoEouAOoXEXTyQjWVAAAAAElFTkSuQmCC">
  <link rel="manifest"
        href="data:application/manifest+json;base64,ewogICAgIm5hbWUiOiAiIiwKICAgICJzaG9ydF9uYW1lIjogIiIsCiAgICAiaWNvbnMiOiBbCiAgICAgICAgewogICAgICAgICAgICAic3JjIjogIi9hbmRyb2lkLWNocm9tZS0xOTJ4MTkyLnBuZyIsCiAgICAgICAgICAgICJzaXplcyI6ICIxOTJ4MTkyIiwKICAgICAgICAgICAgInR5cGUiOiAiaW1hZ2UvcG5nIgogICAgICAgIH0sCiAgICAgICAgewogICAgICAgICAgICAic3JjIjogIi9hbmRyb2lkLWNocm9tZS01MTJ4NTEyLnBuZyIsCiAgICAgICAgICAgICJzaXplcyI6ICI1MTJ4NTEyIiwKICAgICAgICAgICAgInR5cGUiOiAiaW1hZ2UvcG5nIgogICAgICAgIH0KICAgIF0sCiAgICAidGhlbWVfY29sb3IiOiAiI2ZmZmZmZiIsCiAgICAiYmFja2dyb3VuZF9jb2xvciI6ICIjZmZmZmZmIiwKICAgICJkaXNwbGF5IjogInN0YW5kYWxvbmUiCn0K">
  <link rel="mask-icon"
        href="/assets/safari-pinned-tab-11f6a222.svg"
        color="#5bbad5">
  <meta name="msapplication-TileColor"
        content="#da532c">
  <meta name="theme-color"
        content="#ffffff">
  <link rel="preload"
        href="<?= THEME_PATH ?>/assets/montserrat-bold-f052bcff.woff2"
        as="font"
        type="font/woff2"
        crossorigin>
  <link rel="preload"
        href="<?= THEME_PATH ?>/assets/montserrat-medium-94c55c31.woff2"
        as="font"
        type="font/woff2"
        crossorigin>
  <link rel="preload"
        href="<?= THEME_PATH ?>/assets/montserrat-regular-fa88ed6d.woff2"
        as="font"
        type="font/woff2"
        crossorigin>
  <link rel="preload"
        href="<?= THEME_PATH ?>/assets/montserrat-semibold-e3e9e40f.woff2"
        as="font"
        type="font/woff2"
        crossorigin>
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">
    <header class="header"
            data-menu>
      <div class="container header__container">
        <div>
          <a href="/">
            <svg width="80"
                 height="48"
                 role="img"
                 aria-hidden="true"
                 focusable="false">
              <use href="<?= THEME_PATH ?>/assets/sprite-c9604116.svg#logo-soul"></use>
            </svg>
          </a>
        </div>

        <button class="header__toggle"
                type="button"
                data-menu-toggle>
          <span class="header__toggle-line"></span>

          <span class="visually-hidden">Открыть меню.</span>
        </button>

        <nav class="navigation header__navigation">
          <ul>
            <li>
              <a href="/#about"
                 data-menu-close>
                О нас
              </a>
            </li>

            <li>
              <a href="/#advantages"
                 data-menu-close>
                Преимущества
              </a>
            </li>

            <li>
              <a href="/#catalog"
                 data-menu-close>
                Каталог
              </a>
            </li>

            <li>
              <a href="/#feedback"
                 data-menu-close>
                Обратная связь
              </a>
            </li>

            <li>
              <a href="/#contacts"
                 data-menu-close>
                Контакты
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
