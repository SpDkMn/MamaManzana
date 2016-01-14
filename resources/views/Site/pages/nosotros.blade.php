@extends('Site.layout.template')

@section('content')
<section class="section-us">
    <ul class="nav nav_us">
      <li>
        <div class="b_left effect">
          <div class="b_table">
            <div class="b_cell">
              <div class="b_text">
                <h1>Historia</h1>
                <?= $about->about; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="b_right effect" style="background-image: url({{asset('app/img/imgus1.jpg')}})"></div>
      </li>
      <li>
        <div class="b_left effect" style="background-image: url({{asset('app/img/imgus2.jpg')}})"></div>
        <div class="b_right effect">
          <div class="b_table">
            <div class="b_cell">
              <div class="b_text">
                <h1>Misión</h1>
                <?= $about->mission ?>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="b_left effect">
          <div class="b_table">
            <div class="b_cell">
              <div class="b_text">
                <h1>Visión</h1>
                <?= $about->vision ?>
              </div>
            </div>
          </div>
        </div>
        <div class="b_right effect" style="background-image: url({{asset('app/img/imgus3.jpg')}})"></div>
      </li>
    </ul>
  </section>
  @stop

  @section('script1')
  <script src="{{asset('app/js/jquery-ui.js')}}"></script>
  @stop
