@extends('master')
@section('title')
<title>سوق العرب  | تأكيد الطلب</title>
@endsection
@section('container')
    <!-- Page Title -->
    <section class="page-title text-center">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1 class="uppercase">تأكيد الطلب</h1>
          </div>
        </div>
      </div>
    </section> <!-- end page title -->

    <!-- Checkout -->
    <section class="section-wrap checkout pt-0 pb-50">
      <div class="container relative">
        <div class="row">

          <div class="ecommerce col-xs-12">

            <div class="row mb-30">
              <div class="col-md-8">
                <p class="ecommerce-info">
                  العودة للتسجيل؟ 
                  <a href="{{asset('/login')}}" class="showlogin">أضغط هنا لتسجيل الدخول</a>
                </p>
              </div>
            </div>
            <form  method='post' action="{{route('add_order')}}" class="checkout ecommerce-checkout row" >
            <input type="hidden" name="_token" value="{{csrf_token()}}">

              <div class="col-md-8" id="customer_details">
                <div>
                  <h2 class="heading uppercase mb-30">تسجيل البيانات</h2>

                  <p class="form-row form-row-wide address-field update_totals_on_change validate-required ecommerce-validated" id="billing_country_field">
                    <label for="billing_country">الدولة
                      <abbr class="required" title="required">*</abbr>
                    </label>
                    <select name="country" id="billing_country" class="country_to_state country_select" title="الدولة" required> 
                      <option>Select a country…</option>
                      <option value="AF">أفغانستان</option>
                      <option value="AX">Åland Islands</option>
                      <option value="AL">ألبانيا</option>
                      <option value="الجزائر">Algeria</option>
                      <option value="AS">American Samoa</option>
                      <option value="أندورا">Andorra</option>
                      <option value="أنجولا">Angola</option>
                      <option value="أنجويلا">Anguilla</option>
                      <option value="القارة القطبية الجنوبية">Antarctica</option>
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="الأرجنتين">Argentina</option>
                      <option value="أرمينيا">Armenia</option>
                      <option value="AW">Aruba</option>
                      <option value="أستراليا">Australia</option>
                      <option value="AT">Austria</option>
                      <option value="AZ">Azerbaijan</option>
                      <option value="BS">Bahamas</option>
                      <option value="BH">Bahrain</option>
                      <option value="BD">Bangladesh</option>
                      <option value="BB">Barbados</option>
                      <option value="BY">Belarus</option>
                      <option value="BE">Belgium</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin</option>
                      <option value="BM">Bermuda</option>
                      <option value="BT">Bhutan</option>
                      <option value="BO">Bolivia, Plurinational State of</option>
                      <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                      <option value="BA">Bosnia and Herzegovina</option>
                      <option value="BW">Botswana</option>
                      <option value="BV">Bouvet Island</option>
                      <option value="BR">Brazil</option>
                      <option value="IO">British Indian Ocean Territory</option>
                      <option value="BN">Brunei Darussalam</option>
                      <option value="BG">Bulgaria</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="KH">Cambodia</option>
                      <option value="CM">Cameroon</option>
                      <option value="CA">Canada</option>
                      <option value="CV">Cape Verde</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CF">Central African Republic</option>
                      <option value="TD">Chad</option>
                      <option value="CL">Chile</option>
                      <option value="CN">China</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CC">Cocos (Keeling) Islands</option>
                      <option value="CO">Colombia</option>
                      <option value="KM">Comoros</option>
                      <option value="CG">Congo</option>
                      <option value="CD">Congo, the Democratic Republic of the</option>
                      <option value="CK">Cook Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="CI">Côte d'Ivoire</option>
                      <option value="HR">Croatia</option>
                      <option value="CU">Cuba</option>
                      <option value="CW">Curaçao</option>
                      <option value="CY">Cyprus</option>
                      <option value="CZ">Czech Republic</option>
                      <option value="DK">Denmark</option>
                      <option value="DJ">Djibouti</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic</option>
                      <option value="EC">Ecuador</option>
                      <option value="مصر" selected="selected">مصر</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Equatorial Guinea</option>
                      <option value="ER">Eritrea</option>
                      <option value="EE">Estonia</option>
                      <option value="ET">Ethiopia</option>
                      <option value="FK">Falkland Islands (Malvinas)</option>
                      <option value="FO">Faroe Islands</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finland</option>
                      <option value="FR">France</option>
                      <option value="GF">French Guiana</option>
                      <option value="PF">French Polynesia</option>
                      <option value="TF">French Southern Territories</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GE">Georgia</option>
                      <option value="DE">Germany</option>
                      <option value="GH">Ghana</option>
                      <option value="GI">Gibraltar</option>
                      <option value="GR">Greece</option>
                      <option value="GL">Greenland</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GU">Guam</option>
                      <option value="GT">Guatemala</option>
                      <option value="GG">Guernsey</option>
                      <option value="GN">Guinea</option>
                      <option value="GW">Guinea-Bissau</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="HM">Heard Island and McDonald Islands</option>
                      <option value="VA">Holy See (Vatican City State)</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Hong Kong</option>
                      <option value="HU">Hungary</option>
                      <option value="IS">Iceland</option>
                      <option value="IN">India</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran, Islamic Republic of</option>
                      <option value="IQ">Iraq</option>
                      <option value="IE">Ireland</option>
                      <option value="IM">Isle of Man</option>
                      <option value="IL">Israel</option>
                      <option value="IT">Italy</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan</option>
                      <option value="JE">Jersey</option>
                      <option value="JO">Jordan</option>
                      <option value="KZ">Kazakhstan</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="KP">Korea, Democratic People's Republic of</option>
                      <option value="KR">Korea, Republic of</option>
                      <option value="KW">Kuwait</option>
                      <option value="KG">Kyrgyzstan</option>
                      <option value="LA">Lao People's Democratic Republic</option>
                      <option value="LV">Latvia</option>
                      <option value="LB">Lebanon</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libya</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LT">Lithuania</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MO">Macao</option>
                      <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                      <option value="MG">Madagascar</option>
                      <option value="MW">Malawi</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="ML">Mali</option>
                      <option value="MT">Malta</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="MQ">Martinique</option>
                      <option value="MR">Mauritania</option>
                      <option value="MU">Mauritius</option>
                      <option value="YT">Mayotte</option>
                      <option value="MX">Mexico</option>
                      <option value="FM">Micronesia, Federated States of</option>
                      <option value="MD">Moldova, Republic of</option>
                      <option value="MC">Monaco</option>
                      <option value="MN">Mongolia</option>
                      <option value="ME">Montenegro</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Morocco</option>
                      <option value="MZ">Mozambique</option>
                      <option value="MM">Myanmar</option>
                      <option value="NA">Namibia</option>
                      <option value="NR">Nauru</option>
                      <option value="NP">Nepal</option>
                      <option value="NL">Netherlands</option>
                      <option value="NC">New Caledonia</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NI">Nicaragua</option>
                      <option value="NE">Niger</option>
                      <option value="NG">Nigeria</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Island</option>
                      <option value="MP">Northern Mariana Islands</option>
                      <option value="NO">Norway</option>
                      <option value="OM">Oman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PW">Palau</option>
                      <option value="PS">Palestinian Territory, Occupied</option>
                      <option value="PA">Panama</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="PH" >Philippines</option>
                      <option value="PN">Pitcairn</option>
                      <option value="PL">Poland</option>
                      <option value="PT">Portugal</option>
                      <option value="PR">Puerto Rico</option>
                      <option value="QA">Qatar</option>
                      <option value="RE">Réunion</option>
                      <option value="RO">Romania</option>
                      <option value="RU">Russian Federation</option>
                      <option value="RW">Rwanda</option>
                      <option value="BL">Saint Barthélemy</option>
                      <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint Lucia</option>
                      <option value="MF">Saint Martin (French part)</option>
                      <option value="PM">Saint Pierre and Miquelon</option>
                      <option value="VC">Saint Vincent and the Grenadines</option>
                      <option value="WS">Samoa</option>
                      <option value="SM">San Marino</option>
                      <option value="ST">Sao Tome and Principe</option>
                      <option value="SA">Saudi Arabia</option>
                      <option value="SN">Senegal</option>
                      <option value="RS">Serbia</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapore</option>
                      <option value="SX">Sint Maarten (Dutch part)</option>
                      <option value="SK">Slovakia</option>
                      <option value="SI">Slovenia</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="SO">Somalia</option>
                      <option value="ZA">South Africa</option>
                      <option value="GS">South Georgia and the South Sandwich Islands</option>
                      <option value="SS">South Sudan</option>
                      <option value="ES">Spain</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard and Jan Mayen</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="SY">Syrian Arab Republic</option>
                      <option value="TW">Taiwan, Province of China</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania, United Republic of</option>
                      <option value="TH">Thailand</option>
                      <option value="TL">Timor-Leste</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TN">Tunisia</option>
                      <option value="TR">Turkey</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="GB">United Kingdom</option>
                      <option value="US">United States</option>
                      <option value="UM">United States Minor Outlying Islands</option>
                      <option value="UY">Uruguay</option>
                      <option value="UZ">Uzbekistan</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VE">Venezuela, Bolivarian Republic of</option>
                      <option value="VN">Viet Nam</option>
                      <option value="VG">Virgin Islands, British</option>
                      <option value="VI">Virgin Islands, U.S.</option>
                      <option value="WF">Wallis and Futuna</option>
                      <option value="EH">Western Sahara</option>
                      <option value="YE">Yemen</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>
                    </select>
                  </p>

                  <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_first_name_field">
                    <label for="billing_first_name">الأسم الأول
                      <abbr class="required" title="required">*</abbr>
                    </label>
                    <input type="text" class="input-text" placeholder="الأسم الأول" id="billing_first_name" name="first_name" required>
                  </p>

                  <p class="form-row form-row-last validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_last_name_field">
                    <label for="billing_last_name">أسم العائلة
                      <abbr class="required" title="required">*</abbr>
                    </label>
                    <input type="text" class="input-text" placeholder="أسم العائلة" id="billing_last_name" name="last_name" required>
                  </p>

                  <p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-o_class="form-row form-row-wide address-field validate-required">
                    <label for="billing_city">المدينة/المحافظة
                      <abbr class="required" title="required">*</abbr>
                    </label>
                    <input type="text" class="input-text" placeholder="المدينة/المحافظة" name="town" id="billing_city" required>
                  </p>

                  
                  <p class="form-row form-row-wide address-field validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_address_1_field">
                    <label for="billing_address_1">العنوان بالتفصيل
                      <abbr class="required" title="required">*</abbr>
                    </label>
                    <input type="text" class="input-text" placeholder="العنوان بالتفصيل" name="address" id="billing_address_1" required>
                  </p>

                 
                  <p class="form-row form-row-last address-field validate-required validate-postcode ecommerce-invalid ecommerce-invalid-required-field" id="billing_postcode_field" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                    <label for="billing_postcode">كود المحافظة
                      <abbr class="required" title="required">*</abbr>
                    </label>
                    <input type="text" class="input-text" placeholder="كود المحافظة" name="postcode" id="billing_postcode" required>
                  </p>

                  <p class="form-row form-row-first validate-required validate-email" id="billing_email_field">
                    <label for="billing_email">البريد الإلكتروني
                      <abbr class="required" title="required">*</abbr>
                    </label>
                    <input type="email" class="input-text" placeholder="البريد الإلكتروني" id="billing_email" name="email" required>
                  </p>

                  <p class="form-row form-row-last validate-required validate-phone" id="billing_phone_field">
                    <label for="billing_phone">رقم التليفون
                      <abbr class="required" title="required">*</abbr>
                    </label>
                    <input type="text" class="input-text" placeholder="رقم التليفون" id="billing_phone" name="phone" required>
                  </p>

                  <div class="clear"></div>

                </div>


                <div class="clear"></div>

                <div>
                
                  <p class="form-row notes ecommerce-validated" id="order_comments_field">
                    <label for="order_comments">ملاحظات</label>
                    <textarea  class="input-text" id="order_comments" placeholder="ملاحظاتك" rows="2" cols="5" name="note" ></textarea>
                  </p>
                </div>

                <div class="clear"></div>

              </div> <!-- end col -->


              <div class="col-md-4">
                <div class="order-review-wrap ecommerce-checkout-review-order" id="order_review">
                  <h2 class="heading uppercase mb-30">طلبك</h2>
                  <table class="table shop_table ecommerce-checkout-review-order-table">
                    <tbody>
                @foreach(Auth::user()->carts()->paginate(3) as $cart)
                      <tr>
                        <th><span class="count">{{$cart->quantity}} قطعة من منتج </span>{{$cart->product->name}}</th>
                        <td>
                          <span class="amount">{{$cart->product->price}} جنيه</span>
                        </td>
                      </tr>
                      @endforeach
                      <tr class="shipping">
                        <th>الشحن</th>
                        <td>
                          <span>مجاني</span>
                        </td>
                      </tr>
                      
                      @if(Auth::user()->gifts()->value('user_id'))
                      <tr class="order-total">
                        <th><strong>إجمالي الطلب قبل الخصم</strong></th>
                        <td> 
                          <del><span class="amount">{{App\Cart::total_price()}}</span></del>
                        </td>
                        </tr>
                        <tr class="order-total">
                        <th><strong>إجمالي الطلب بعد الخصم</strong></th>
                        <td>
                       
                        
                          <strong><span class="amount">{{Auth::user()->gifts()->value('totalprice')}} جنيه</span></strong>
                         
                        </td>
                        </tr>
                      @else
                      <tr class="order-total">
                      <th><strong>إجمالي الطلب</strong></th>
                        <td>
                          <strong><span class="amount">{{App\Cart::total_price()}} جنيه</span></strong>
                        </td>
                        </tr>
                       @endif
                     
                    </tbody>
                  </table>

                  <div id="payment" class="ecommerce-checkout-payment">
                    <h2 class="heading uppercase mb-30">طريقة الدفع</h2>
                    <ul class="payment_methods methods">

                      <li class="payment_method_bacs">
                        <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
                        <label for="payment_method_bacs">بنك تحويل مباشر</label>
                        <div class="payment_box payment_method_bacs">
                          <p>أجعل دفعك مباشر لحسابنا البنكي.من فضلك أستخدم الرقم التعريفي للطلب كمرجع للدفع.طلبك لن يتم شحنه حتي تتم دفع التكاليف.</p>
                        </div>
                      </li>

                      <li class="payment_method_cheque">
                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque">
                        <label for="payment_method_cheque">دفع فوري</label>
                        <div class="payment_box payment_method_cheque">
                          <p>من فضلك أرسل Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                        </div>
                      </li>

                      <li class="payment_method_paypal">
                        <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal">
                        <label for="payment_method_paypal">باي بال</label>
                        <img src="img/shop/paypal.png" alt="">
                        <div class="payment_box payment_method_paypal">
                          <p>الدفع بواسطة باي بال,تستطيع الدفع بالبطاقة الذكية لو لاتمتلك حساب باي بال</p>
                        </div>
                      </li>

                    </ul>
                    <div class="form-row place-order">
                      <input type="submit" name="ecommerce_checkout_place_order" class="btn btn-lg" id="place_order" value="إتمام تأكيد الطلب">
                    </div>
                  </div>
                </div>
              </div> <!-- end order review -->
            </form>

          </div> <!-- end ecommerce -->

        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end checkout -->
@endsection