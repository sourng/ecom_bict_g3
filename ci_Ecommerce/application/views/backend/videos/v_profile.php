<?php
if($this->session->userdata('message')){
    ?>
    <!--<script>
        //$(document).ready(function(){
            setTimeout(hideNotificationMessage,3000);
            function hideNotificationMessage()
                $("#notification_message").trigger("click");
        //});
    </script>-->
<?php }?>



<form action="<?php echo site_url();?>backend/tours/update" method="post" class="form" id="validate" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $this->m_ps->encrypt_decrypt('encrypt',$users_profile[0]['uid'])?>"

    <section id="content" class="pn animated fadeIn">

    <!-- <div class="p40 bg-background bg-topbar bg-psuedo-tp"> -->
    <div class="pv30 ph40 bg-light dark br-b br-grey posr">

        <div class="table-layout">
            <div class="w200 text-center pr30 hidden-xs">
                <img src="<?php echo base_url(); ?>theme_backend/assets/img/avatars/profile_avatar.jpg" class="responsive">
            </div>
            <div class="va-t m30">

                <h2 class=""> <?php echo $this->session->userdata['name']; ?> <small> <?php echo $users_profile[0]['name']; ?> </small></h2>
                <p class="fs15 mb20">Lorem ipsum dolor sit amet ctetur adicing elit, sed do eiusmod tempor incididunt</p>

                <ul class="list-inline list-unstyled">
                    <li>
                        <a href="#" title="facebook link">
                            <span class="fa fa-facebook-square fs35 text-primary"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="twitter link">
                            <span class="fa fa-twitter-square fs35 text-info"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="google plus link">
                            <span class="fa fa-google-plus-square fs35 text-danger"></span>
                        </a>
                    </li>
                    <li class="hidden">
                        <a href="#" title="behance link">
                            <span class="fa fa-behance-square fs35 text-primary"></span>
                        </a>
                    </li>
                    <li class="hidden">
                        <a href="#" title="pinterest link">
                            <span class="fa fa-pinterest-square fs35 text-danger-light"></span>
                        </a>
                    </li>
                    <li class="hidden">
                        <a href="#" title="linkedin link">
                            <span class="fa fa-linkedin-square fs35 text-info"></span>
                        </a>
                    </li>
                    <li class="hidden">
                        <a href="#" title="github link">
                            <span class="fa fa-github-square fs35 text-dark"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#" title="phone link">
                            <span class="fa fa-phone-square fs35 text-system"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="email link">
                            <span class="fa fa-envelope-square fs35 text-muted"></span>
                        </a>
                    </li>
                    <li class="hidden">
                        <a href="#" title="external link">
                            <span class="fa fa-external-link-square fs35 text-muted"></span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <div class="p25 pt35">
        <div class="row">
            <div class="col-md-4">

                <h4 class="page-header mtn br-light text-muted hidden">User Info</h4>

                <div class="panel">
                    <div class="panel-heading">
                                    <span class="panel-icon"><i class="fa fa-star"></i>
                                    </span>
                        <span class="panel-title"> User Popularity</span>
                    </div>
                    <div class="panel-body pn">
                        <table class="table mbn tc-icon-1 tc-med-2 tc-bold-last">
                            <thead>
                            <tr class="hidden">
                                <th class="mw30">#</th>
                                <th>First Name</th>
                                <th>Revenue</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="fa fa-desktop text-warning"></span>
                                </td>
                                <td>Television</td>
                                <td><i class="fa fa-caret-up text-info pr10"></i>$855,913</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fa fa-microphone text-primary"></span>
                                </td>
                                <td>Radio</td>
                                <td><i class="fa fa-caret-down text-danger pr10"></i>$349,712</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fa fa-newspaper-o text-info"></span>
                                </td>
                                <td>Newspaper</td>
                                <td><i class="fa fa-caret-up text-info pr10"></i>$1,259,742</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                                    <span class="panel-icon"><i class="fa fa-trophy"></i>
                                    </span>
                        <span class="panel-title"> My Skills</span>
                    </div>
                    <div class="panel-body pb5">
                        <span class="label label-warning mr5 mb10 ib lh15">Default</span>
                        <span class="label label-primary mr5 mb10 ib lh15">Primary</span>
                        <span class="label label-info mr5 mb10 ib lh15">Success</span>
                        <span class="label label-success mr5 mb10 ib lh15">Info</span>
                        <span class="label label-alert mr5 mb10 ib lh15">Warning</span>
                        <span class="label label-system mr5 mb10 ib lh15">Danger</span>
                        <span class="label label-info mr5 mb10 ib lh15">Success</span>
                        <span class="label label-success mr5 mb10 ib lh15">Ui Design</span>
                        <span class="label label-primary mr5 mb10 ib lh15">Primary</span>

                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                                    <span class="panel-icon"><i class="fa fa-pencil"></i>
                                    </span>
                        <span class="panel-title">About Me</span>
                    </div>
                    <div class="panel-body pb5">
                        <h6 class="text-muted fs13">Experience</h6>

                        <h4>Facebook Internship</h4>
                        <p class="text-muted"> University of Missouri, Columbia
                            <br> Student Health Center, June 2010 - 2012
                        </p>

                        <hr class="short br-lighter">




                    </div>
                </div>

            </div>
            <div class="col-md-8">

                <h4 class="page-header text-muted mtn br-light hidden">User Activity</h4>

                <div class="admin-form hidden">
                    <div class="panel mb30">
                        <label class="field prepend-icon">
                            <textarea class="gui-textarea br-light h-60" id="comment" name="comment" placeholder="Text area"></textarea>
                            <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                            </label>
                            <span class="input-footer hidden">
                                            <strong>Hint:</strong>Don't be negative or off topic! just be awesome...</span>
                        </label>
                        <div class="panel-footer text-right br-t-n p8">
                            <button type="button" class="btn btn-primary p4 ph10">Comment</button>
                        </div>
                    </div>
                </div>



                    <div class="panel mb25 mt5">
                        <div class="panel-heading">
                            <span class="panel-title"> Add New Customer</span>

                        </div>
                        <div class="panel-body p20 pb10">
                            <div class="tab-content pn br-n admin-form">

                                <div id="tab1_1" class="tab-pane active">

                                    <div class="section row mbn">
                                        <div class="col-md-9">
                                            <div class="section row ">
                                                <div class="col-md-6">
                                                    <label for="name1" class="field prepend-icon">
                                                        <input type="text" name="name1" id="name1" class="event-name gui-input br-light light" placeholder="First Name">
                                                        <label for="name1" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="name2" class="field prepend-icon">
                                                        <input type="text" name="name2" id="name2" class="event-name gui-input br-light light" placeholder="Last Name">
                                                        <label for="name2" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section row mb15">
                                                <div class="col-md-6">
                                                    <label for="password" class="field prepend-icon">
                                                        <input type="password" name="password" id="password" class="event-name gui-input br-light light" placeholder="Password">
                                                        <label for="name2" class="field-icon"><i class="fa fa-lock"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="password2" class="field prepend-icon">
                                                        <input type="password2" name="password2" id="password2" class="event-name gui-input br-light light" placeholder="Confirm Password">
                                                        <label for="password2" class="field-icon"><i class="fa fa-unlock"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section mb15">
                                                <label for="email" class="field prepend-icon">
                                                    <input type="text" name="email" id="email" class="event-name gui-input br-light bg-light" placeholder="Customer Email Address">
                                                    <label for="email" class="field-icon"><i class="fa fa-envelope-o"></i>
                                                    </label>
                                                </label>
                                            </div>
                                            <div class="section mb10">
                                                <input id="tagsinput" class="bg-light" type="text" value="IBM, Software, Friend">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                                                <div class="fileupload-preview thumbnail mb15">
                                                    <img data-src="holder.js/100%x147" alt="holder">
                                                </div>
                                                <span class="button btn-system btn-file btn-block ph5">
                                                            <span class="fileupload-new">Change</span>
                                                <span class="fileupload-exists">Change</span>
                                                <input type="file">
                                                </span>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="section row mbn">
                                        <div class="col-xs-6 pr15">
                                            <div class="section mb10">
                                                <label for="cust-phone" class="field prepend-icon">
                                                    <input type="text" name="cust-phone" id="cust-phone" class="event-name gui-input bg-light br-light" placeholder="Customer Phone Number...">
                                                    <label for="cust-phone" class="field-icon"><i class="fa fa-phone"></i>
                                                    </label>
                                                </label>
                                            </div>
                                            <div class="section mb10">
                                                <label for="customer-group" class="field select">
                                                    <select id="customer-group" name="customer-group">
                                                        <option value="0" selected="selected">Customer Group...</option>
                                                        <option value="1">Vendor</option>
                                                        <option value="2">Supplier</option>
                                                        <option value="3">Distributor</option>
                                                    </select>
                                                    <i class="arrow double"></i>
                                                </label>
                                            </div>
                                            <div class="section">
                                                <label for="customer-language" class="field select">
                                                    <select id="customer-language" name="customer-language">
                                                        <option value="0" selected="selected">Customer Language...</option>
                                                        <option value="1">English</option>
                                                        <option value="2">Spanish</option>
                                                        <option value="3">German</option>
                                                    </select>
                                                    <i class="arrow double"></i>
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <hr class="short alt mtn">

                                    <div class="section mb15">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea br-light bg-light" id="cust-note" name="cust-note" placeholder="Customer Notes"></textarea>
                                            <label for="cust-note" class="field-icon"><i class="fa fa-edit"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="section">
                                        <label for="lastaddr" class="field prepend-icon">
                                            <input type="text" name="lastaddr" id="lastaddr" class="gui-input" placeholder="Street address">
                                            <label for="lastaddr" class="field-icon"><i class="fa fa-map-marker"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="section">
                                        <label class="field select">
                                            <select id="location" name="location">
                                                <option value="">Select country...</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan Republic</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BR">Brazil</option>
                                                <option value="BN">Brunei</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="C2">China Worldwide</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="CD">Democratic Republic of the Congo</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="GA">Gabon Republic</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Laos</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
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
                                                <option value="FM">Micronesia</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="AN">Netherlands Antilles</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PW">Palau</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn Islands</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="QA">Qatar</option>
                                                <option value="CG">Republic of the Congo</option>
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russia</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="KN">Saint Kitts and Nevis Anguilla</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">São Tomé and Príncipe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="KR">South Korea</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SH">St. Helena</option>
                                                <option value="LC">St. Lucia</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="TW">Taiwan</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TG">Togo</option>
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
                                                <option value="UY">Uruguay</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VA">Vatican City State</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="VG">Virgin Islands (British)</option>
                                                <option value="WF">Wallis and Futuna Islands</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="section row">
                                        <div class="col-md-3">
                                            <label for="zip" class="field prepend-icon">
                                                <input type="text" name="zip" id="zip" class="gui-input" placeholder="Zip">
                                                <label for="zip" class="field-icon"><i class="fa fa-certificate"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="col-md-4">
                                            <label for="city" class="field prepend-icon">
                                                <input type="text" name="city" id="city" class="gui-input" placeholder="City">
                                                <label for="city" class="field-icon"><i class="fa fa-building-o"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="col-md-5">
                                            <label for="states" class="field select">
                                                <select id="states" name="states">
                                                    <option value="">Choose state</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="CA">California</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="DC">District Of Columbia</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WA">Washington</option>
                                                    <option value="WV">West Virginia</option>
                                                    <option value="WI">Wisconsin</option>
                                                    <option value="WY">Wyoming</option>
                                                </select>
                                                <i class="arrow double"></i>
                                            </label>
                                        </div>
                                        <!-- end .col8 section -->

                                    </div>
                                    <!-- end section row section -->

                                    <div class="section row mbn">
                                        <div class="col-sm-8">
                                            <label class="field option mt10">
                                                <input type="checkbox" name="info" checked>
                                                <span class="checkbox"></span>Save Customer
                                                <em class="small-text text-muted">- A Random Unique ID will be generated</em>
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-right">
                                                <button class="btn btn-primary" type="button">Save Order</button>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end section row -->

                                </div>


                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

</section>
</form>

    <script>

        CKEDITOR.replace('tour_description' ,{
            filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/index.html'
        });
        CKEDITOR.replace('tour_detail' ,{
            filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/index.html'
        });

        CKEDITOR.replace('packages' ,{
            filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/index.html'
        });
    </script>