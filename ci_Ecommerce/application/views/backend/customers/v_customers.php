<?php
/**
 * Created by PhpStorm.
 * User: SENG Sourng
 * Date: 1/21/2017
 * Time: 1:39 AM
 */
?>
<div class="tray tray-center p25 va-t posr">

    <!-- create new order panel -->
    <div class="panel mb25 mt5">
        <div class="panel-heading">
            <span class="panel-title"> Add New Customer</span>
            <ul class="nav panel-tabs-border panel-tabs">
                <li class="active">
                    <a href="#tab1_1" data-toggle="tab">General</a>
                </li>
                <li>
                    <a href="#tab1_2" data-toggle="tab">Settings</a>
                </li>
                <li>
                    <a href="#tab1_3" data-toggle="tab">Billing Address</a>
                </li>
            </ul>
        </div>
        <div class="panel-body p20 pb10">
            <div class="tab-content pn br-n admin-form">

                <div id="tab1_1" class="tab-pane active">

                    <div class="section row mbn">
                        <div class="col-md-9 pl15">
                            <div class="section row mb15">
                                <div class="col-xs-6">
                                    <label for="name1" class="field prepend-icon">
                                        <input type="text" name="name1" id="name1" class="event-name gui-input br-light light" placeholder="First Name">
                                        <label for="name1" class="field-icon"><i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                                <div class="col-xs-6">
                                    <label for="name2" class="field prepend-icon">
                                        <input type="text" name="name2" id="name2" class="event-name gui-input br-light light" placeholder="Last Name">
                                        <label for="name2" class="field-icon"><i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                            <div class="section row mb15">
                                <div class="col-xs-6">
                                    <label for="password" class="field prepend-icon">
                                        <input type="password" name="password" id="password" class="event-name gui-input br-light light" placeholder="Password">
                                        <label for="name2" class="field-icon"><i class="fa fa-lock"></i>
                                        </label>
                                    </label>
                                </div>
                                <div class="col-xs-6">
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
                    <!-- end section row -->

                </div>
                <div id="tab1_2" class="tab-pane">

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
                        <div class="col-xs-6">
                            <label class="field option">
                                <input type="checkbox" name="info">
                                <span class="checkbox mr10"></span> Customer is Tax Exempt
                            </label>
                            <br>
                            <label class="field option mt15">
                                <input type="checkbox" name="info">
                                <span class="checkbox mr10"></span> Customer Accepts Marketing
                            </label>
                            <br>
                            <label class="field option mt15">
                                <input type="checkbox" name="info">
                                <span class="checkbox mr10"></span> Activate/Enable Account?
                            </label>
                            <hr class="alt short mv15">
                            <p class="text-muted"> <span class="fa fa-exclamation-circle text-warning fs15 pr5"></span> Grants the customer limited store access.</p>
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
                    <!-- end section -->

                </div>
                <div id="tab1_3" class="tab-pane">

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
                            <?php include_once('countries.php'); ?>
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
                    <!-- end section -->

                </div>
            </div>
        </div>
    </div>

    <!-- recent orders table -->
    <div class="panel">
        <div class="panel-menu p12 admin-form theme-primary">
            <div class="row">
                <div class="col-md-4">
                    <label class="field select">
                        <select id="filter-purchases" name="filter-purchases">
                            <option value="0">Filter by Purchases</option>
                            <option value="1">1-49</option>
                            <option value="2">50-499</option>
                            <option value="1">500-999</option>
                            <option value="2">1000+</option>
                        </select>
                        <i class="arrow double"></i>
                    </label>
                </div>
                <div class="col-md-4">
                    <label class="field select">
                        <select id="filter-group" name="filter-group">
                            <option value="0">Filter by Group</option>
                            <option value="1">Customers</option>
                            <option value="2">Vendors</option>
                            <option value="3">Distributors</option>
                            <option value="4">Employees</option>
                        </select>
                        <i class="arrow double"></i>
                    </label>
                </div>
                <div class="col-md-4">
                    <label class="field select">
                        <select id="filter-status" name="filter-status">
                            <option value="0">Filter by Status</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                            <option value="3">Suspended</option>
                            <option value="4">Online</option>
                            <option value="5">Offline</option>
                        </select>
                        <i class="arrow double"></i>
                    </label>
                </div>
            </div>
        </div>
        <div class="panel-body pn">
            <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                <thead>
                <tr class="bg-light">
                    <th class="text-center">Select</th>
                    <th class="">Avatar</th>
                    <th class="">Name</th>
                    <th class="">Email</th>
                    <th class="">Registered</th>
                    <th class="">Purchases</th>
                    <th class="">Total Spent</th>
                    <th class="text-right">Status</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center">
                        <label class="option block mn">
                            <input type="checkbox" name="mobileos" value="FR">
                            <span class="checkbox mn"></span>
                        </label>
                    </td>
                    <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                    </td>
                    <td class="">Dave Robert</td>
                    <td class="">dave@company.com</td>
                    <td class="">12/03/2014</td>
                    <td class="">222</td>
                    <td class="">$3,600</td>
                    <td class="text-right">
                        <div class="btn-group text-right">
                            <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                <span class="caret ml5"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li class="divider"></li>
                                <li class="active">
                                    <a href="#">Active</a>
                                </li>
                                <li>
                                    <a href="#">Suspend</a>
                                </li>
                                <li>
                                    <a href="#">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label class="option block mn">
                            <input type="checkbox" name="mobileos" value="FR">
                            <span class="checkbox mn"></span>
                        </label>
                    </td>
                    <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/2.jpg">
                    </td>
                    <td class="">Sara Marshall</td>
                    <td class="">sara@company.com</td>
                    <td class="">12/03/2014</td>
                    <td class="">16</td>
                    <td class="">$4,200</td>
                    <td class="text-right">
                        <div class="btn-group text-right">
                            <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                <span class="caret ml5"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li class="divider"></li>
                                <li class="active">
                                    <a href="#">Active</a>
                                </li>
                                <li>
                                    <a href="#">Suspend</a>
                                </li>
                                <li>
                                    <a href="#">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label class="option block mn">
                            <input type="checkbox" name="mobileos" value="FR">
                            <span class="checkbox mn"></span>
                        </label>
                    </td>
                    <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/3.jpg">
                    </td>
                    <td class="">Larry Kingster</td>
                    <td class="">larry@company.com</td>
                    <td class="">12/03/2014</td>
                    <td class="">46</td>
                    <td class="">$16,200</td>
                    <td class="text-right">
                        <div class="btn-group text-right">
                            <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                <span class="caret ml5"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li class="divider"></li>
                                <li class="active">
                                    <a href="#">Active</a>
                                </li>
                                <li>
                                    <a href="#">Suspend</a>
                                </li>
                                <li>
                                    <a href="#">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label class="option block mn">
                            <input type="checkbox" name="mobileos" value="FR">
                            <span class="checkbox mn"></span>
                        </label>
                    </td>
                    <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/4.jpg">
                    </td>
                    <td class="">Emily Roundwheel</td>
                    <td class="">emily@company.com</td>
                    <td class="">12/03/2014</td>
                    <td class="">06</td>
                    <td class="">$1,400</td>
                    <td class="text-right">
                        <div class="btn-group text-right">
                            <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                <span class="caret ml5"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li class="divider"></li>
                                <li class="active">
                                    <a href="#">Active</a>
                                </li>
                                <li>
                                    <a href="#">Suspend</a>
                                </li>
                                <li>
                                    <a href="#">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label class="option block mn">
                            <input type="checkbox" name="mobileos" value="FR">
                            <span class="checkbox mn"></span>
                        </label>
                    </td>
                    <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/5.jpg">
                    </td>
                    <td class="">Nick Cannoneer</td>
                    <td class="">sara@company.com</td>
                    <td class="">12/03/2014</td>
                    <td class="">43</td>
                    <td class="">$13,600</td>
                    <td class="text-right">
                        <div class="btn-group text-right">
                            <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                <span class="caret ml5"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li class="divider"></li>
                                <li class="active">
                                    <a href="#">Active</a>
                                </li>
                                <li>
                                    <a href="#">Suspend</a>
                                </li>
                                <li>
                                    <a href="#">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label class="option block mn">
                            <input type="checkbox" name="mobileos" value="FR">
                            <span class="checkbox mn"></span>
                        </label>
                    </td>
                    <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/6.jpg">
                    </td>
                    <td class="">Morgan Lunar</td>
                    <td class="">morgan@company.com</td>
                    <td class="">12/03/2014</td>
                    <td class="">11</td>
                    <td class="">$3,200</td>
                    <td class="text-right">
                        <div class="btn-group text-right">
                            <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                <span class="caret ml5"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li class="divider"></li>
                                <li class="active">
                                    <a href="#">Active</a>
                                </li>
                                <li>
                                    <a href="#">Suspend</a>
                                </li>
                                <li>
                                    <a href="#">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label class="option block mn">
                            <input type="checkbox" name="mobileos" value="FR">
                            <span class="checkbox mn"></span>
                        </label>
                    </td>
                    <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/4.jpg">
                    </td>
                    <td class="">Emily Roundwheel</td>
                    <td class="">emily@company.com</td>
                    <td class="">12/03/2014</td>
                    <td class="">06</td>
                    <td class="">$1,400</td>
                    <td class="text-right">
                        <div class="btn-group text-right">
                            <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> In-Active
                                <span class="caret ml5"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li class="divider"></li>
                                <li class="active">
                                    <a href="#">Active</a>
                                </li>
                                <li>
                                    <a href="#">Suspend</a>
                                </li>
                                <li>
                                    <a href="#">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label class="option block mn">
                            <input type="checkbox" name="mobileos" value="FR">
                            <span class="checkbox mn"></span>
                        </label>
                    </td>
                    <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/2.jpg">
                    </td>
                    <td class="">Sara Marshall</td>
                    <td class="">sara@company.com</td>
                    <td class="">12/03/2014</td>
                    <td class="">16</td>
                    <td class="">$4,200</td>
                    <td class="text-right">
                        <div class="btn-group text-right">
                            <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> In-Active
                                <span class="caret ml5"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li class="divider"></li>
                                <li class="active">
                                    <a href="#">Active</a>
                                </li>
                                <li>
                                    <a href="#">Suspend</a>
                                </li>
                                <li>
                                    <a href="#">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label class="option block mn">
                            <input type="checkbox" name="mobileos" value="FR">
                            <span class="checkbox mn"></span>
                        </label>
                    </td>
                    <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                    </td>
                    <td class="">Roger Rover</td>
                    <td class="">roger@company.com</td>
                    <td class="">12/03/2014</td>
                    <td class="">33</td>
                    <td class="">$17,100</td>
                    <td class="text-right">
                        <div class="btn-group text-right">
                            <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> In-Active
                                <span class="caret ml5"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li class="divider"></li>
                                <li class="active">
                                    <a href="#">Active</a>
                                </li>
                                <li>
                                    <a href="#">Suspend</a>
                                </li>
                                <li>
                                    <a href="#">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label class="option block mn">
                            <input type="checkbox" name="mobileos" value="FR">
                            <span class="checkbox mn"></span>
                        </label>
                    </td>
                    <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/2.jpg">
                    </td>
                    <td class="">Laura Smileton</td>
                    <td class="">laura@company.com</td>
                    <td class="">12/03/2014</td>
                    <td class="">12</td>
                    <td class="">$3,100</td>
                    <td class="text-right">
                        <div class="btn-group text-right">
                            <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Suspended
                                <span class="caret ml5"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li class="divider"></li>
                                <li class="active">
                                    <a href="#">Active</a>
                                </li>
                                <li>
                                    <a href="#">Suspend</a>
                                </li>
                                <li>
                                    <a href="#">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label class="option block mn">
                            <input type="checkbox" name="mobileos" value="FR">
                            <span class="checkbox mn"></span>
                        </label>
                    </td>
                    <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                    </td>
                    <td class="">Dave Robert</td>
                    <td class="">dave@company.com</td>
                    <td class="">12/03/2014</td>
                    <td class="">222</td>
                    <td class="">$3,600</td>
                    <td class="text-right">
                        <div class="btn-group text-right">
                            <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Suspended
                                <span class="caret ml5"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li class="divider"></li>
                                <li class="active">
                                    <a href="#">Active</a>
                                </li>
                                <li>
                                    <a href="#">Suspend</a>
                                </li>
                                <li>
                                    <a href="#">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
