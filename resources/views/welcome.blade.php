<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('inc.meta-item')
  <title>sonypiay.com | Homepage</title>
</head>
<body>
  <section class="uk-container uk-margin-top uk-margin-bottom">
    <div class="uk-width-3-4@xl uk-width-3-4@l uk-width-2-3@m uk-width-1-1@s uk-align-center">
      <div class="uk-card uk-card-body uk-card-large uk-card-default hello-container">
        <div class="uk-grid-medium" uk-grid>
          <div class="uk-width-1-4@xl uk-width-1-4@l uk-width-1-4@m uk-width-1-1@s">
            <div class="uk-text-center">
              <img src="{{ asset('images/avatar/me.jpg') }}" class="uk-border-circle">
            </div>
          </div>
          <div class="uk-width-expand">
            <div class="hello-heading">Hi, I'm Sony</div>
            <div class="hello-lead">Web Developer Based in Jakarta, Indonesia.</div>
            <div class="uk-margin hello-content">
              <p>
                I really passionate with web programming, linux, network, learn everything autodidact on the Internet.
                I start code when i was in a high schools, with my friend and my teacher who supported me as well. My first job was as an Engineer in an Internet Service Provider company.
                I currently study at Mercubuana University in Meruya, Jakarta Barat and focus on <strong>Skripsi</strong>.
                <br><br>
                Basically, i don't have an experience in other company as Web Developer, Software Engineer or even Fullstack Developer.
                But i created several projects such as Company Profile, Inventory &amp; Internal Systems, E-Commerce, Hotspot Portal, Mikrotik Controller and IPTV on LG TV webOS.
                Some projects are still  on my <a target="_blank" href="https://github.com/sonypiay/">GitHub</a>.
                <br><br>
                Currently develop as a startup company, <a target="_blank" href="http://labmode.id">Labmode Indonesia</a>
              </p>
              <div class="uk-margin-top uk-grid-small uk-child-width-auto" uk-grid>
                <div>
                  <strong><a href="mailto:sonypiay@mail.com">Send an Email</a></strong>
                </div>
                <div>
                  <strong><a href="{{ route('my_portfolio') }}">Portfolio</a></strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
