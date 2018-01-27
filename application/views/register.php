<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 27/1/18
 * Time: 6:45 PM
 */?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<form action="<?=base_url('index.php/welcome/registerBusiness')?>" method="post" class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Register you home business here!</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="firstname">First Name</label>
            <div class="col-md-4">
                <input id="name" name="name" type="text" placeholder="Full name" class="form-control input-md">
                <span class="help-block">Enter Full Name</span>
            </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Gender</label>
            <div class="col-md-4">
                <div class="radio">
                    <label for="radios-0">
                        <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                        Male
                    </label>
                </div>
                <div class="radio">
                    <label for="radios-1">
                        <input type="radio" name="radios" id="radios-1" value="2">
                        Female
                    </label>
                </div>
                <div class="radio">
                    <label for="radios-2">
                        <input type="radio" name="radios" id="radios-2" value="3">
                        Other
                    </label>
                </div>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="mobno">Mobile Number</label>
            <div class="col-md-4">
                <input id="mobno" name="phone" type="text" placeholder="Mobile number" class="form-control input-md">
                <span class="help-block">Enter Mobile Number</span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="emailid">Email Id</label>
            <div class="col-md-4">
                <input id="emailid" name="email" type="email" placeholder="email id" class="form-control input-md">
                <span class="help-block">Enter Email Id</span>
            </div>
        </div>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="profession">Profession</label>
            <div class="col-md-4">
                <input id="address2" name="pro" type="text" placeholder="Enter your profession" class="form-control input-md">
                <span class="help-block">Profession</span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="address1">Address Line 1</label>
            <div class="col-md-4">
                <input id="address1" name="street" type="text" placeholder="address line 1" class="form-control input-md">
                <span class="help-block">Street</span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="address2">City</label>
            <div class="col-md-4">
                <input id="address2" name="city" type="text" placeholder="address line 2" class="form-control input-md">
                <span class="help-block">City</span>
            </div>
        </div>
        <!-- Select Multiple -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="state">State</label>
            <div class="col-md-4">
                <select id="state" name="state" class="form-control" multiple="multiple">
                    <option value="">------------Select State------------</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Orissa">Orissa</option>
                    <option value="Pondicherry">Pondicherry</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttaranchal">Uttaranchal</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
            </div>
        </div>
        <!-- Select Multiple -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="country">Country</label>
            <div class="col-md-4">
                <select id="country" name="country" class="form-control" multiple="multiple">
                    <option Value="" Selected="True">Select Country</option>
                    <option Value="AF">Afghanistan</option>
                    <option Value="AL">Albania</option>
                    <option Value="DZ">Algeria</option>
                    <option Value="AS">American Samoa</option>
                    <option Value="AD">Andorra</option>
                    <option Value="AO">Angola</option>
                    <option Value="AI">Anguilla</option>
                    <option Value="AQ">Antarctica</option>
                    <option Value="AG">Antigua And Barbuda</option>
                    <option Value="AR">Argentina</option>
                    <option Value="AM">Armenia</option>
                    <option Value="AW">Aruba</option>
                    <option Value="AU">Australia</option>
                    <option Value="AT">Austria</option>
                    <option Value="AZ">Azerbaijan</option>
                    <option Value="BS">Bahamas</option>
                    <option Value="BH">Bahrain</option>
                    <option Value="BD">Bangladesh</option>
                    <option Value="BB">Barbados</option>
                    <option Value="BY">Belarus</option>
                    <option Value="BE">Belgium</option>
                    <option Value="BZ">Belize</option>
                    <option Value="BJ">Benin</option>
                    <option Value="BM">Bermuda</option>
                    <option Value="BT">Bhutan</option>
                    <option Value="BO">Bolivia</option>
                    <option Value="BA">Bosnia And Herzegowina</option>
                    <option Value="BW">Botswana</option>
                    <option Value="BV">Bouvet Island</option>
                    <option Value="BR">Brazil</option>
                    <option Value="IO">British Indian Ocean Territory</option>
                    <option Value="BN">Brunei Darussalam</option>
                    <option Value="BG">Bulgaria</option>
                    <option Value="BF">Burkina Faso</option>
                    <option Value="BI">Burundi</option>
                    <option Value="KH">Cambodia</option>
                    <option Value="CM">Cameroon</option>
                    <option Value="CA">Canada</option>
                    <option Value="CV">Cape Verde</option>
                    <option Value="KY">Cayman Islands</option>
                    <option Value="CF">Central African Republic</option>
                    <option Value="TD">Chad</option>
                    <option Value="CL">Chile</option>
                    <option Value="CN">China</option>
                    <option Value="CX">Christmas Island</option>
                    <option Value="CC">Cocos (Keeling) Islands</option>
                    <option Value="CO">Colombia</option>
                    <option Value="KM">Comoros</option>
                    <option Value="CG">Congo</option>
                    <option Value="CK">Cook Islands</option>
                    <option Value="CR">Costa Rica</option>
                    <option Value="CI">Cote D'Ivoire</option>
                    <option Value="HR">Croatia (Local Name: Hrvatska)</option>
                    <option Value="CU">Cuba</option>
                    <option Value="CY">Cyprus</option>
                    <option Value="CZ">Czech Republic</option>
                    <option Value="DK">Denmark</option>
                    <option Value="DJ">Djibouti</option>
                    <option Value="DM">Dominica</option>
                    <option Value="DO">Dominican Republic</option>
                    <option Value="TP">East Timor</option>
                    <option Value="EC">Ecuador</option>
                    <option Value="EG">Egypt</option>
                    <option Value="SV">El Salvador</option>
                    <option Value="GQ">Equatorial Guinea</option>
                    <option Value="ER">Eritrea</option>
                    <option Value="EE">Estonia</option>
                    <option Value="ET">Ethiopia</option>
                    <option Value="FK">Falkland Islands (Malvinas)</option>
                    <option Value="FO">Faroe Islands</option>
                    <option Value="FJ">Fiji</option>
                    <option Value="FI">Finland</option>
                    <option Value="FR">France</option>
                    <option Value="GF">French Guiana</option>
                    <option Value="PF">French Polynesia</option>
                    <option Value="TF">French Southern Territories</option>
                    <option Value="GA">Gabon</option>
                    <option Value="GM">Gambia</option>
                    <option Value="GE">Georgia</option>
                    <option Value="DE">Germany</option>
                    <option Value="GH">Ghana</option>
                    <option Value="GI">Gibraltar</option>
                    <option Value="GR">Greece</option>
                    <option Value="GL">Greenland</option>
                    <option Value="GD">Grenada</option>
                    <option Value="GP">Guadeloupe</option>
                    <option Value="GU">Guam</option>
                    <option Value="GT">Guatemala</option>
                    <option Value="GN">Guinea</option>
                    <option Value="GW">Guinea-Bissau</option>
                    <option Value="GY">Guyana</option>
                    <option Value="HT">Haiti</option>
                    <option Value="HM">Heard And Mc Donald Islands</option>
                    <option Value="VA">Holy See (Vatican City State)</option>
                    <option Value="HN">Honduras</option>
                    <option Value="HK">Hong Kong</option>
                    <option Value="HU">Hungary</option>
                    <option Value="IS">Icel And</option>
                    <option Value="IN">India</option>
                    <option Value="ID">Indonesia</option>
                    <option Value="IR">Iran (Islamic Republic Of)</option>
                    <option Value="IQ">Iraq</option>
                    <option Value="IE">Ireland</option>
                    <option Value="IL">Israel</option>
                    <option Value="IT">Italy</option>
                    <option Value="JM">Jamaica</option>
                    <option Value="JP">Japan</option>
                    <option Value="JO">Jordan</option>
                    <option Value="KZ">Kazakhstan</option>
                    <option Value="KE">Kenya</option>
                    <option Value="KI">Kiribati</option>
                    <option Value="KP">Korea, Dem People'S Republic</option>
                    <option Value="KR">Korea, Republic Of</option>
                    <option Value="KW">Kuwait</option>
                    <option Value="KG">Kyrgyzstan</option>
                    <option Value="LA">Lao People'S Dem Republic</option>
                    <option Value="LV">Latvia</option>
                    <option Value="LB">Lebanon</option>
                    <option Value="LS">Lesotho</option>
                    <option Value="LR">Liberia</option>
                    <option Value="LY">Libyan Arab Jamahiriya</option>
                    <option Value="LI">Liechtenstein</option>
                    <option Value="LT">Lithuania</option>
                    <option Value="LU">Luxembourg</option>
                    <option Value="MO">Macau</option>
                    <option Value="MK">Macedonia</option>
                    <option Value="MG">Madagascar</option>
                    <option Value="MW">Malawi</option>
                    <option Value="MY">Malaysia</option>
                    <option Value="MV">Maldives</option>
                    <option Value="ML">Mali</option>
                    <option Value="MT">Malta</option>
                    <option Value="MH">Marshall Islands</option>
                    <option Value="MQ">Martinique</option>
                    <option Value="MR">Mauritania</option>
                    <option Value="MU">Mauritius</option>
                    <option Value="YT">Mayotte</option>
                    <option Value="MX">Mexico</option>
                    <option Value="FM">Micronesia, Federated States</option>
                    <option Value="MD">Moldova, Republic Of</option>
                    <option Value="MC">Monaco</option>
                    <option Value="MN">Mongolia</option>
                    <option Value="MS">Montserrat</option>
                    <option Value="MA">Morocco</option>
                    <option Value="MZ">Mozambique</option>
                    <option Value="MM">Myanmar</option>
                    <option Value="NA">Namibia</option>
                    <option Value="NR">Nauru</option>
                    <option Value="NP">Nepal</option>
                    <option Value="NL">Netherlands</option>
                    <option Value="AN">Netherlands Ant Illes</option>
                    <option Value="NC">New Caledonia</option>
                    <option Value="NZ">New Zealand</option>
                    <option Value="NI">Nicaragua</option>
                    <option Value="NE">Niger</option>
                    <option Value="NG">Nigeria</option>
                    <option Value="NU">Niue</option>
                    <option Value="NF">Norfolk Island</option>
                    <option Value="MP">Northern Mariana Islands</option>
                    <option Value="NO">Norway</option>
                    <option Value="OM">Oman</option>
                    <option Value="PK">Pakistan</option>
                    <option Value="PW">Palau</option>
                    <option Value="PA">Panama</option>
                    <option Value="PG">Papua New Guinea</option>
                    <option Value="PY">Paraguay</option>
                    <option Value="PE">Peru</option>
                    <option Value="PH">Philippines</option>
                    <option Value="PN">Pitcairn</option>
                    <option Value="PL">Poland</option>
                    <option Value="PT">Portugal</option>
                    <option Value="PR">Puerto Rico</option>
                    <option Value="QA">Qatar</option>
                    <option Value="RE">Reunion</option>
                    <option Value="RO">Romania</option>
                    <option Value="RU">Russian Federation</option>
                    <option Value="RW">Rwanda</option>
                    <option Value="KN">Saint K Itts And Nevis</option>
                    <option Value="LC">Saint Lucia</option>
                    <option Value="VC">Saint Vincent, The Grenadines</option>
                    <option Value="WS">Samoa</option>
                    <option Value="SM">San Marino</option>
                    <option Value="ST">Sao Tome And Principe</option>
                    <option Value="SA">Saudi Arabia</option>
                    <option Value="SN">Senegal</option>
                    <option Value="SC">Seychelles</option>
                    <option Value="SL">Sierra Leone</option>
                    <option Value="SG">Singapore</option>
                    <option Value="SK">Slovakia (Slovak Republic)</option>
                    <option Value="SI">Slovenia</option>
                    <option Value="SB">Solomon Islands</option>
                    <option Value="SO">Somalia</option>
                    <option Value="ZA">South Africa</option>
                    <option Value="GS">South Georgia , S Sandwich Is.</option>
                    <option Value="ES">Spain</option>
                    <option Value="LK">Sri Lanka</option>
                    <option Value="SH">St. Helena</option>
                    <option Value="PM">St. Pierre And Miquelon</option>
                    <option Value="SD">Sudan</option>
                    <option Value="SR">Suriname</option>
                    <option Value="SJ">Svalbard, Jan Mayen Islands</option>
                    <option Value="SZ">Sw Aziland</option>
                    <option Value="SE">Sweden</option>
                    <option Value="CH">Switzerland</option>
                    <option Value="SY">Syrian Arab Republic</option>
                    <option Value="TW">Taiwan</option>
                    <option Value="TJ">Tajikistan</option>
                    <option Value="TZ">Tanzania, United Republic Of</option>
                    <option Value="TH">Thailand</option>
                    <option Value="TG">Togo</option>
                    <option Value="TK">Tokelau</option>
                    <option Value="TO">Tonga</option>
                    <option Value="TT">Trinidad And Tobago</option>
                    <option Value="TN">Tunisia</option>
                    <option Value="TR">Turkey</option>
                    <option Value="TM">Turkmenistan</option>
                    <option Value="TC">Turks And Caicos Islands</option>
                    <option Value="TV">Tuvalu</option>
                    <option Value="UG">Uganda</option>
                    <option Value="UA">Ukraine</option>
                    <option Value="AE">United Arab Emirates</option>
                    <option Value="GB">United Kingdom</option>
                    <option Value="US">United States</option>
                    <option Value="UM">United States Minor Is.</option>
                    <option Value="UY">Uruguay</option>
                    <option Value="UZ">Uzbekistan</option>
                    <option Value="VU">Vanuatu</option>
                    <option Value="VE">Venezuela</option>
                    <option Value="VN">Viet Nam</option>
                    <option Value="VG">Virgin Islands (British)</option>
                    <option Value="VI">Virgin Islands (U.S.)</option>
                    <option Value="WF">Wallis And Futuna Islands</option>
                    <option Value="EH">Western Sahara</option>
                    <option Value="YE">Yemen</option>
                    <option Value="ZR">Zaire</option>
                    <option Value="ZM">Zambia</option>
                    <option Value="ZW">Zimbabwe</option>
                </select>
            </div>
        </div>

<!--        <!-- Button -->-->
<!--        <div class="form-group">-->
<!--            <label class="col-md-4 control-label" for="otp">Generate OTP</label>-->
<!--            <div class="col-md-4">-->
<!--                <button id="otp" name="otp" class="btn btn-primary">Generate OTP</button>-->
<!--            </div>-->
<!--        </div>-->

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="login">Click to Register</label>
            <div class="col-md-4">
                <input id="login" type="submit" value="Register" name="login" class="btn btn-primary">
            </div>
        </div>

    </fieldset>
</form>
