<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('inc.meta-item')
  <title>sonypiay.com | Portfolio</title>
</head>
<body>

  <div class="uk-width-1-1 uk-height-viewport bg-portfolio bg-portfolio-primary">
    <div class="uk-card uk-card-body">
      <div class="uk-grid-medium uk-grid-match" uk-grid>
        <div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
          <div class="uk-border-rounded uk-box-shadow-large" uk-lightbox uk-scrollspy="cls: uk-animation-slide-top; delay: 200; repeat: false">
            <a href="{{ asset('images/portfolio/labmode.png') }}" data-caption="Labmode Indonesia"><div class="uk-background-cover uk-background-top-center uk-height-large uk-width-1-1" style="background-image: url({{ asset('images/portfolio/labmode.png') }});"></div></a>
          </div>
        </div>
        <div class="uk-width-expand">
          <div class="uk-tile uk-tile-default">
            <div class="portfolio-content">
              <div class="uk-margin portfolio-title">
                Labmode Indonesia
              </div>
              <div class="uk-margin portfolio-description">
                Platform Riset dan Berita Seputar Industri Fashion Indonesia
              </div>
              <div class="uk-margin">
                <a target="_blank" class="portfolio-visit" href="http://labmode.id">Visit Web</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="uk-width-1-1 uk-height-viewport bg-portfolio bg-portfolio-default">
    <div class="uk-card uk-card-body">
      <div class="uk-grid-medium uk-grid-match" uk-grid>
        <div class="uk-width-expand">
          <div class="uk-tile">
            <div class="portfolio-content">
              <div class="uk-margin portfolio-title">
                Biznet Wifi Portal
              </div>
              <div class="uk-margin portfolio-description">
                Hotspot Portal untuk layanan Wi-Fi Gratis dari Biznet
              </div>
              <div class="uk-margin">
                <a target="_blank" class="portfolio-visit" href="https://www.biznetwifi.com/connect/ruckus">Visit Web</a>
              </div>
            </div>
          </div>
        </div>
        <div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
          <div class="uk-border-rounded uk-box-shadow-large" uk-lightbox uk-scrollspy="cls: uk-animation-slide-top; delay: 200; repeat: false">
            <a href="{{ asset('images/portfolio/biznetwifi.png') }}" data-caption="BiznetWifi Portal"><div class="uk-background-cover uk-background-top-center uk-height-large uk-width-1-1" style="background-image: url({{ asset('images/portfolio/biznetwifi.png') }});"></div></a>
            <a hidden href="{{ asset('images/portfolio/biznetwifi2.png') }}" data-caption="BiznetWifi Portal"><div class="uk-background-cover uk-background-top-center uk-height-large uk-width-1-1" style="background-image: url({{ asset('images/portfolio/biznetwifi2.png') }});"></div></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="uk-width-1-1 uk-height-viewport bg-portfolio bg-portfolio-primary">
    <div class="uk-card uk-card-body">
      <div class="uk-grid-medium uk-grid-match" uk-grid>
        <div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
          <div class="uk-border-rounded uk-box-shadow-large" uk-lightbox uk-scrollspy="cls: uk-animation-slide-top; delay: 200; repeat: false">
            <a href="{{ asset('images/portfolio/dashboard_pmtools.jpg') }}" data-caption="Project Management Tools"><div class="uk-background-cover uk-background-top-center uk-height-large uk-width-1-1" style="background-image: url({{ asset('images/portfolio/dashboard_pmtools.jpg') }});"></div></a>
          </div>
        </div>
        <div class="uk-width-expand">
          <div class="uk-tile uk-tile-default">
            <div class="portfolio-content">
              <div class="uk-margin portfolio-title">
                PM Tools
              </div>
              <div class="uk-margin portfolio-description">
                Sistem internal untuk request kebutuhan access point dan approval dari tim internal projectwifi. Selain itu inventori data untuk pendataan model access point, ip, coordinate dan lokasi yang terpasang.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="uk-width-1-1 uk-height-viewport bg-portfolio bg-portfolio-default">
    <div class="uk-card uk-card-body">
      <div class="uk-grid-medium uk-grid-match" uk-grid>
        <div class="uk-width-expand">
          <div class="uk-tile">
            <div class="portfolio-content">
              <div class="uk-margin portfolio-title">
                Garden Buana
              </div>
              <div class="uk-margin portfolio-description">
                (Tugas Kuliah Proyek Pengembangan Sistem Informasi - Tema Startup)
                <br>
                Aplikasi E-Commerce yang mempertemukan customer dengan jasa tukang kebun.
              </div>
            </div>
          </div>
        </div>
        <div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
          <div class="uk-border-rounded uk-box-shadow-large" uk-lightbox uk-scrollspy="cls: uk-animation-slide-top; delay: 200; repeat: false">
            <a href="{{ asset('images/portfolio/gardenbuana/1.png') }}" data-caption="Garden Buana"><div class="uk-background-cover uk-background-top-center uk-height-large uk-width-1-1" style="background-image: url({{ asset('images/portfolio/gardenbuana/1.png') }});"></div></a>
            @for( $i = 2; $i < 16; $i++ )
            <a hidden href="{{ asset('images/portfolio/gardenbuana/' . $i . '.png') }}" data-caption="Garden Buana"><div class="uk-background-cover uk-background-top-center uk-height-large uk-width-1-1" style="background-image: url({{ asset('images/portfolio/gardenbuana/' . $i . '.png') }});"></div></a>
            @endfor
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="uk-width-1-1 uk-height-viewport bg-portfolio bg-portfolio-primary">
    <div class="uk-card uk-card-body">
      <div class="uk-grid-medium uk-grid-match" uk-grid>
        <div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
          <div class="uk-border-rounded uk-box-shadow-large" uk-lightbox uk-scrollspy="cls: uk-animation-slide-top; delay: 200; repeat: false">
            <a href="{{ asset('images/portfolio/biznetanalytic/1.png') }}" data-caption="BiznetWifi Analytic"><div class="uk-background-cover uk-background-top-center uk-height-large uk-width-1-1" style="background-image: url({{ asset('images/portfolio/biznetanalytic/1.png') }});"></div></a>
            @for( $i = 2; $i <= 7; $i++ )
            <a hidden href="{{ asset('images/portfolio/biznetanalytic/' . $i . '.png') }}" data-caption="BiznetWifi Analytic"><div class="uk-background-cover uk-background-top-center uk-height-large uk-width-1-1" style="background-image: url({{ asset('images/portfolio/biznetanalytic/' . $i . '.png') }});"></div></a>
            @endfor
          </div>
        </div>
        <div class="uk-width-expand">
          <div class="uk-tile uk-tile-default">
            <div class="portfolio-content">
              <div class="uk-margin portfolio-title">
                BiznetWifi Analytic
              </div>
              <div class="uk-margin portfolio-description">
                Hotspot analytic, Bandwidth Usage, BiznetWifi Subscriber
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
