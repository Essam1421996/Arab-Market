@extends('master')
@section('title')
  <title>سوق العرب | تواصل معنا</title>
@section('container')

    <!-- Breadcrumbs -->
    <div class="container">
      <ol class="breadcrumb">
        <li>
          <a href="index.html">الرئيسية</a>
        </li>
        <li>
          <a href="#">الصفحات</a>
        </li>
        <li class="active">
          تواصل معنا
        </li>
      </ol> <!-- end breadcrumbs -->
    </div>

    <!-- Google Map -->
    <div class="container mt-60">
      <div id="google-map" class="gmap" data-address="V Tytana St, Manila, Philippines"></div>
    </div>

    <!-- Contact -->
    <section class="section-wrap contact">
      <div class="container">
        <div class="row">

          <div class="col-md-8">
            <h5 class="uppercase mb-30">رسالة إلينا</h5>
            <form id="contact-form" action="#">

              <div class="contact-name">
                <input name="name" id="name" type="text" placeholder="الأسم*">
              </div>
              <div class="contact-email">
                <input name="mail" id="mail" type="email" placeholder="البريد الإلكتروني*">
              </div>
              <div class="contact-subject">
                <input name="subject" id="subject" type="text" placeholder="الموضوع">
              </div>                

              <textarea name="comment" id="comment" placeholder="الرسالة" rows="9"></textarea>
              <input type="submit" class="btn btn-lg btn-color btn-submit" value="أرسل" id="submit-message">
              <div id="msg" class="message"></div>
            </form>
          </div> <!-- end col -->

          <div class="col-md-4 mb-40 mt-mdm-40 contact-info">

            <div class="address-wrap">
              <h4 class="uppercase">العنوان</h4>
              <h6></h6>
              <address class="address"></address>
              <h6></h6>
              <address class="address"></address>
            </div>

            <h4 class="uppercase">معلومات التواصل</h4>
            <ul class="contact-info-list">
              <li><span>رقم التليفون: </span><a href="tel:+1-888-1554-456-123">+ 1-888-1554-456-123</a></li>
              <li><span>البريد الإلكتروني:</span><a href="mailto:themesupport@gmail.com" class="sliding-link">themesupport@gmail.com</a></li>
              <li><span>Skype: </span><a href="#">ahasupport</a></li>
            </ul>

            
			 <p>الإثنين - الجمعة: 9صباحا إلي 8مساءا</p>
            <p>السبت: 9صباحا إلي 5مساءا</p>
            <p>الأحد: مغلق</p>

          </div>          

        </div>
      </div>
    </section> <!-- end contact -->

  <!-- jQuery Scripts -->   
  <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>

  <!-- Google Map -->
  <script type="text/javascript">
    $(document).ready( function(){

      var gmapDiv = $("#google-map");
      var gmapMarker = gmapDiv.attr("data-address");

      gmapDiv.gmap3({
        zoom: 16,
        address: gmapMarker,
        oomControl: true,
        navigationControl: true,
        scrollwheel: false,
        styles: [
          {
          "featureType":"all",
          "elementType":"all",
            "stylers":[
              { "saturation":"0" }
            ]
        }]
      })
      .marker({
        address: gmapMarker,
        icon: "img/map_pin.png"
      })
      .infowindow({
        content: "V Tytana St, Manila, Philippines"
      })
      .then(function (infowindow) {
        var map = this.get(0);
        var marker = this.get(1);
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      });
    });
  </script>
    
@endsection