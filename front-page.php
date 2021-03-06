<?php
get_header();
?>

<?php $hero = get_field('hero');?>

<div class="content">

  <section class="banner section">
  <!--style="background-image: url('<?php echo get_field('background_image')['url']?>')">-->

    <div class="container">
      <div class="banner__info">
        <h1 class="banner__title section__title">
          <?php echo $hero['big_title'];?>
        </h1>
        <p class="banner__description"><?php echo $hero['small_title'];?></p>
      </div><a class="banner__scroll scroll" href="#about">
        <svg class="scroll__mouse">
          <use href="static/images/svg/symbol/#mouse"></use>
        </svg>
        <div class="scroll__text"><?php echo $hero['scroll_text'];?></div>
        <svg class="scroll__arrow">
          <use href="static/images/svg/symbol/#arrow"></use>
        </svg></a>
      </div>
    </section>

    <?php $about = get_field('about');?>
    <section class="about section">
      <div class="container">
        <div class="about__info">
          <h2 class="about__title section__title"><?php echo $about['about_title'];?></h2>


          <!--<img class="about__image" src="'.get_field('image').'">-->
          <img class="about__image" src="wp-content/themes/iap_siposalex_theme/assets/images/general/author.png">

          <p class="about__description"><?php echo $about['about_text'];?></p>
        </div>
      </div>
    </section>




    <section class="works section">
      <h2 class="works__title section__title">selected work</h2>
      <div class="works__list">
        <div class="works__item work">
          <div class="work__header"><img class="work__img" src="wp-content/themes/iap_siposalex_theme/assets/images/content/works/work-1.png"><a class="work__button button" href="#">case study<span class="button__arrow-right">&rarr;</span></a></div>
          <div class="work__info">
            <div class="work__title">MOUNTAINS + SUNSET</div>
            <div class="work__description">Landscape photography</div>
          </div>
        </div>
        <div class="works__item work">
          <div class="work__header"><img class="work__img" src="wp-content/themes/iap_siposalex_theme/assets/images/content/works/work-2.png"><a class="work__button button" href="#">case study<span class="button__arrow-right">&rarr;</span></a></div>
          <div class="work__info">
            <div class="work__title">GOTHIC MOUNTAINS #1</div>
            <div class="work__description">Nature photography</div>
          </div>
        </div>
        <div class="works__item work">
          <div class="work__header"><img class="work__img" src="wp-content/themes/iap_siposalex_theme/assets/images/content/works/work-3.png"><a class="work__button button" href="#">case study<span class="button__arrow-right">&rarr;</span></a></div>
          <div class="work__info">
            <div class="work__title">GOTHIC MOUNTAINS #1</div>
            <div class="work__description">Landscape photography</div>
          </div>
        </div>
        <div class="works__item work">
          <div class="work__header"><img class="work__img" src="wp-content/themes/iap_siposalex_theme/assets/images/content/works/work-4.png"><a class="work__button button" href="#">case study<span class="button__arrow-right">&rarr;</span></a></div>
          <div class="work__info">
            <div class="work__title">BACON IPSUM DOLOR</div>
            <div class="work__description">Landscape photography</div>
          </div>
        </div>
        <div class="works__item work">
          <div class="work__header"><img class="work__img" src="wp-content/themes/iap_siposalex_theme/assets/images/content/works/work-5.png"><a class="work__button button" href="#">case study<span class="button__arrow-right">&rarr;</span></a></div>
          <div class="work__info">
            <div class="work__title">BACON IPSUM DOLOR</div>
            <div class="work__description">Nature photography</div>
          </div>
        </div>
        <div class="works__item work">
          <div class="work__header"><img class="work__img" src="wp-content/themes/iap_siposalex_theme/assets/images/content/works/work-6.png"><a class="work__button button" href="#">case study<span class="button__arrow-right">&rarr;</span></a></div>
          <div class="work__info">
            <div class="work__title">BACON IPSUM DOLOR</div>
            <div class="work__description">Nature photography</div>
          </div>
        </div>
      </div>
      <div class="works__more"><a class="works__button button" href="#">all projects<span class="button__arrow-right">&rarr;</span></a></div>
    </section>
    <section class="proficiency section">
      <div class="container">
        <h2 class="proficiency__title section__title">proficiency</h2>
        <div class="proficiency__list">
          <div class="proficiency__item">
            <svg class="proficiency__chart" viewbox="0 0 36 36">
              <path class="proficiency__circle-bg" d="M18 2.0845                        a 15.9155 15.9155 0 0 1 0 31.831                        a 15.9155 15.9155 0 0 1 0 -31.831"></path>
              <path class="proficiency__circle" stroke-dasharray="100, 100" d="M18 2.0845                        a 15.9155 15.9155 0 0 1 0 31.831                        a 15.9155 15.9155 0 0 1 0 -31.831"></path>
              <text class="proficiency__percentage" x="18" y="20.35" text-anchor="middle">10/10</text>
            </svg>
            <div class="proficiency__name">adobe photoshop</div>
          </div>
          <div class="proficiency__item">
            <svg class="proficiency__chart" viewbox="0 0 36 36">
              <path class="proficiency__circle-bg" d="M18 2.0845                        a 15.9155 15.9155 0 0 1 0 31.831                        a 15.9155 15.9155 0 0 1 0 -31.831"></path>
              <path class="proficiency__circle" stroke-dasharray="80, 100" d="M18 2.0845                        a 15.9155 15.9155 0 0 1 0 31.831                        a 15.9155 15.9155 0 0 1 0 -31.831"></path>
              <text class="proficiency__percentage" x="18" y="20.35" text-anchor="middle">8/10</text>
            </svg>
            <div class="proficiency__name">adobe illustrator</div>
          </div>
          <div class="proficiency__item">
            <svg class="proficiency__chart" viewbox="0 0 36 36">
              <path class="proficiency__circle-bg" d="M18 2.0845                        a 15.9155 15.9155 0 0 1 0 31.831                        a 15.9155 15.9155 0 0 1 0 -31.831"></path>
              <path class="proficiency__circle" stroke-dasharray="75, 100" d="M18 2.0845                        a 15.9155 15.9155 0 0 1 0 31.831                        a 15.9155 15.9155 0 0 1 0 -31.831"></path>
              <text class="proficiency__percentage" x="18" y="20.35" text-anchor="middle">7.5/10</text>
            </svg>
            <div class="proficiency__name">axure</div>
          </div>
          <div class="proficiency__item">
            <svg class="proficiency__chart" viewbox="0 0 36 36">
              <path class="proficiency__circle-bg" d="M18 2.0845                        a 15.9155 15.9155 0 0 1 0 31.831                        a 15.9155 15.9155 0 0 1 0 -31.831"></path>
              <path class="proficiency__circle" stroke-dasharray="70, 100" d="M18 2.0845                        a 15.9155 15.9155 0 0 1 0 31.831                        a 15.9155 15.9155 0 0 1 0 -31.831"></path>
              <text class="proficiency__percentage" x="18" y="20.35" text-anchor="middle">7/10</text>
            </svg>
            <div class="proficiency__name">3d max</div>
          </div>
        </div>
      </div>
    </section>
    <div class="trends section">
      <div class="container">
        <div class="trends__list">
          <div class="trends__item">
            <svg class="trends__image">
              <use href="static/images/svg/symbol/#web"></use>
            </svg>
            <div class="trends__title">Web design</div>
            <div class="trends__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
          </div>
          <div class="trends__item">
            <svg class="trends__image">
              <use href="static/images/svg/symbol/#ux"></use>
            </svg>
            <div class="trends__title">UI/UX design</div>
            <div class="trends__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
          </div>
          <div class="trends__item">
            <svg class="trends__image">
              <use href="static/images/svg/symbol/#promo"></use>
            </svg>
            <div class="trends__title">Promo design</div>
            <div class="trends__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
          </div>
        </div>
      </div>
    </div>
    <section class="things section">
      <div class="container">
        <h2 class="things__title section__title">things i enjoy</h2>
        <div class="things__list">
          <div class="things__item">
            <svg class="things__icon">
              <use href="static/images/svg/symbol/#guitar"></use>
            </svg>
          </div>
          <div class="things__item">
            <svg class="things__icon">
              <use href="static/images/svg/symbol/#palette"></use>
            </svg>
          </div>
          <div class="things__item">
            <svg class="things__icon">
              <use href="static/images/svg/symbol/#food"></use>
            </svg>
          </div>
          <div class="things__item">
            <svg class="things__icon">
              <use href="static/images/svg/symbol/#puzzle"></use>
            </svg>
          </div>
        </div>
      </div>
    </section>
    <section class="contacts section">
      <div class="container">
        <h2 class="contacts__title section__title">get in touch</h2>
        <div class="contacts__container">
          <div class="contacts__column">
            <div class="contacts__heading">Ready to hire me?</div><a class="contacts__button button" href="#">get in touch<span class="button__arrow-right">&rarr;</span></a>
          </div>
          <div class="contacts__column">
            <div class="contacts__row">
              <svg class="contacts__icon">
                <use href="static/images/svg/symbol/#email"></use>
              </svg>
              <div class="contacts__text">siposalex24@gmail.com</div>
            </div>
            <div class="contacts__row">
              <svg class="contacts__icon">
                <use href="static/images/svg/symbol/#mobile"></use>
              </svg>
              <div class="contacts__text">0748973072</div>
            </div>
            <div class="contacts__row">
              <svg class="contacts__icon">
                <use href="static/images/svg/symbol/g#skype"></use>
              </svg>
              <div class="contacts__text">Sipos Alex</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php
  get_footer();
  ?>