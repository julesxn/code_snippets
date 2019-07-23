<section class="section-wrapper account-info">
    <div class="section-title">
        <h2>Account Info</h2>
    </div>
    <ul class="info-list">

        <!-- NAME & SCREENNAME -->
        <li>
            <div class="info-header">
                <h4 class="subtitle">Client Name & Screen Name</h4>
                <ul class="inline-list">
                    <li>Debra Messing</li>
                    <li>dmessing</li>
                </ul>
                <span class="icon edit edit-toggle"></span>
            </div>


            <div class="info-body hidden">
                <a class="icon close">Close</a>
                <h4 class="subtitle">Client Name & Screen Name</h4>
                
                <fieldset>
                    <div class="form-group floating-label-form-group form-width-1 pull-left">
                        <label for="">FIRST NAME</label>
                        <input name="" type="text" class="form-control" required="1" placeholder="First Name" value="" maxlength="30" id="">                
                    </div>
                    <div class="form-group floating-label-form-group form-width-1 pull-right">
                        <label for="">LAST NAME</label>
                        <input name="" type="text" class="form-control" required="1" placeholder="Last Name" value="" maxlength="30" id="">                
                    </div>
                    <div class="clearfix"></div>
                    <hr style="margin-bottom:40px;">
                    <div class="form-group floating-label-form-group form-width-1">
                        <label for="">REVIEWS SCREEN NAME</label>
                        <input name="" type="text" class="form-control" required="1" placeholder="Reviews Screen Name" value="" maxlength="30" id="">                
                    </div>
                    <hr>
                    <button type="submit" class="cta-btn btn-mainBlue md">Save Changes</button>
                    <a href="javascript:void(0)" class="cancel cta-link">CANCEL</a>
                </fieldset>
            </div>
        </li>

        <!-- EMAIL -->
        <li>
            <div class="info-header">
                <h4 class="subtitle">Email</h4>
                <p>debra-m@gmail.com</p>
                <button class="cta-btn btn-white sm">Copy email</button>
                <div class="highlight-tag">Invalid email address</div>
                <span class="icon edit edit-toggle"></span>
            </div>
            <div class="info-body hidden">
                <a class="icon close">Close</a>
                <h4 class="subtitle">Email</h4>
                <fieldset>
                    <div class="form-group floating-label-form-group form-width-1">
                        <label for="">EMAIL ADDRESS</label>
                        <input name="" type="email" class="form-control" placeholder="Email Address" id="">                
                    </div>
                    <hr>
                    <button type="submit" class="cta-btn btn-mainBlue md">Save Changes</button>
                    <a href="javascript:void(0)" class="cancel cta-link">CANCEL</a>
                </fieldset>
            </div>
        </li>

        <!-- PHONE -->
        <li>
            <div class="info-header">
                <h4 class="subtitle">Phone</h4>
                <ul class="inline-list">
                    <li>Home: (888) 123-4567</li>
                    <li>Mobile: (888) 123-4567</li>
                </ul>
                <span class="icon edit edit-toggle"></span>
            </div>

            <div class="info-body hidden">
                <a class="icon close">Close</a>
                <h4 class="subtitle">Phone</h4>

                <fieldset>
                    <div class="form-group floating-label-form-group form-width-1 pull-left">
                        <label for="">PHONE 1</label>
                        <input name="" type="text" class="form-control" required="1" placeholder="Phone 1" value="" maxlength="30" id="">                
                    </div>
                    <div class="form-group form-width-2 pull-left" style="margin-left: 10px;">
                        <select name="" class="form-control no-label" required="1" id="">
                            <option value="0">Home</option>
                            <option value="01">Mobile</option>
                        </select>  
                    </div>
                    <div class="clearfix"></div>
                    <hr style="margin-bottom:5px;">
                    <div class="form-group floating-label-form-group form-width-1 pull-left">
                        <label for="">PHONE 2</label>
                        <input name="" type="text" class="form-control" required="1" placeholder="Phone 2" value="" maxlength="30" id="">                
                    </div>
                    <div class="form-group form-width-2 pull-left" style="margin-left: 10px;">
                        <select name="" class="form-control no-label" required="1" id="">
                            <option value="0">Home</option>
                            <option value="01">Mobile</option>
                        </select>   
                    </div>
                    <div class="clearfix"></div> 
                    <hr>
                    <button type="submit" class="cta-btn btn-mainBlue md">Save Changes</button>
                    <a href="javascript:void(0)" class="cancel cta-link">CANCEL</a>
                </fieldset>
            </div>
        </li>

        <!-- PASSWORD -->
        <li>
            <div class="info-header">
                <h4 class="subtitle">Password</h4>
                <p>••••••</p>
                <button class="cta-btn btn-white sm"  data-toggle="modal" data-target="#resetPasswordModal">Send reset email</button>
                <span class="icon edit edit-toggle"></span>
            </div>
            <div class="info-body hidden">
                <a class="icon close">Close</a>
                <h4 class="subtitle">Password</h4>
                
                <fieldset>
                    <div class="form-group floating-label-form-group form-width-1">
                        <label>PASSWORD</label>
                        <input type="password" name="" class="form-control" placeholder="Password" id="">                
                    </div>
                    <hr>
                    <button type="submit" class="cta-btn btn-mainBlue md">Save Changes</button>
                    <a href="javascript:void(0)" class="cancel cta-link">CANCEL</a>
                </fieldset>
            </div>
        </li>

        <!-- EMAIL/ TEXT PREFS -->
        <li>
            <div class="info-header">
                <h4 class="subtitle">Email & Text Prefs</h4>
                <p>Receiving promotional emails</p>
                <span class="icon edit edit-toggle"></span>
            </div>

            <div class="info-body hidden">
                <a class="icon close">Close</a>
                <h4 class="subtitle">Email & text prefs</h4>
                
                <fieldset>
                    <ul>
                        <li class="checkbox-wrapper">            
                            <input type="checkbox" id="check-email-invalid" class="checkbox-radio" name="email-preference">
                            <label for="check-email-invalid">
                                <span class="check"></span>
                                Email Address Invalid
                            </label>
                        </li>
                        <li class="checkbox-wrapper">            
                            <input type="checkbox" id="check-never-email" class="checkbox-radio" name="email-preference">
                            <label for="check-never-email">
                                <span class="check"></span>
                                Never Email
                            </label>
                        </li>
                        <li class="checkbox-wrapper">            
                            <input type="checkbox" id="check-never-text" class="checkbox-radio" name="email-preference">
                            <label for="check-never-text">
                                <span class="check"></span>
                                Never Text
                            </label>
                        </li>
                        <li class="checkbox-wrapper">            
                            <input type="checkbox" id="check-unsubscribe-content" class="checkbox-radio" name="email-preference">
                            <label for="check-unsubscribe-content">
                                <span class="check"></span>
                                Unsubscribe Content Emails
                            </label>
                        </li>
                        <li class="checkbox-wrapper">            
                            <input type="checkbox" id="check-unsubscribe-feedback" class="checkbox-radio" name="email-preference">
                            <label for="check-unsubscribe-feedback">
                                <span class="check"></span>
                                Unsubscribe Feedback Emails
                            </label>
                        </li>
                        <li class="checkbox-wrapper">            
                            <input type="checkbox" id="check-unsubscribe-promo" class="checkbox-radio" name="email-preference">
                            <label for="check-unsubscribe-promo">
                                <span class="check"></span>
                                Unsubscribe Promo Emails
                            </label>
                        </li>
                    </ul>
                    <hr>
                    <button type="submit" class="cta-btn btn-mainBlue md">Save Changes</button>
                    <a href="javascript:void(0)" class="cancel cta-link">CANCEL</a>
                </fieldset>
            </div>
        </li>

        <!-- SHIPPING & BILLING -->
        <li>
            <div class="info-header">
                <h4 class="subtitle">Shipping & Billing</h4>
                <ul class="inline-list">
                    <li>6560 Briafcliff Road, Fort Myers, FL 33912</li>
                    <li>No payment method</li>
                </ul>
                <div class="highlight-tag">Local</div>
                <div class="highlight-tag">No card on file</div>

                <span class="icon edit edit-toggle"></span>
            </div>

            <div class="info-body hidden">
                <a class="icon close">Close</a>
                <h4 class="subtitle">Shipping & billing</h4>
                <fieldset class="form-width-6">

                    <div class="pull-left form-width-5">
                        <div class="form-title">
                            <h3>Shipping</h3>
                        </div>

                        <div class="form-group floating-label-form-group form-width-2 pull-left">
                            <label for="">FIRST NAME</label>
                            <input name="" type="text" class="form-control" required="1" placeholder="First Name" value="" maxlength="30" id="">                
                        </div>

                        <div class="form-group floating-label-form-group form-width-2 pull-right">
                            <label for="">LAST NAME</label>
                            <input name="" type="text" class="form-control" required="1" placeholder="Last Name" value="" maxlength="30" id="">                
                        </div>

                        <div class="clearfix"></div>

                        <div class="form-group floating-label-form-group">
                            <label for="">SHIPPING ADDRESS 1</label>
                            <input name="" type="text" class="form-control" required="1" placeholder="Shipping Address 1" value="" id="">  
                        </div>

                        <div class="form-group floating-label-form-group">
                            <label for="">SHIPPING ADDRESS 2</label>
                            <input name="" type="text" class="form-control" required="1" placeholder="Shipping Address 2" value="" id="">  
                        </div>

                        <div class="form-group floating-label-form-group">
                            <label for="">CITY</label>
                            <input name="" type="text" class="form-control" required="1" placeholder="City" value="" id="">       
                        </div>

                        <div class="form-group pull-left form-width-3">
                            <label>State</label>
                            <select name="" class="form-control" required="1" id="">
                                <option value="" disabled selected>(Choose a state)</option>
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
                                <option value="GU">Guam</option>
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
                                <option value="PW">Palau</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VI">Virgin Islands</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                                <option value="AA">Armed Forces Americas</option>
                                <option value="AE">Armed Forces Europe</option>
                                <option value="AP">Armed Forces Pacific</option>
                            </select>    
                        </div>

                        <div class="form-group floating-label-form-group form-width-4 pull-right">
                            <label for="">ZIP CODE</label><input name="" type="text" class="form-control" required="1" maxlength="5" placeholder="Zip Code" value="" id="">    
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="pull-right form-width-5">
                        <div class="form-title">
                            <h3>Billing</h3>

                            <div class="checkbox-wrapper" style="margin: 0 0 0 auto">            
                                <input type="checkbox" id="check-same-shipping" class="checkbox-radio">
                                <label for="check-same-shipping">
                                    <span class="check"></span>
                                    Same as Shipping
                                </label>
                            </div>
                        </div>

                        <div class="form-group floating-label-form-group">
                            <label for="">BILLING ADDRESS 1</label>
                            <input name="" type="text" class="form-control" required="1" placeholder="Billing Address 1" value="" id="">  
                        </div>

                        <div class="form-group floating-label-form-group">
                            <label for="">BILLING ADDRESS 2</label>
                            <input name="" type="text" class="form-control" required="1" placeholder="Billing Address 2" value="" id="">  
                        </div>

                        <div class="form-group floating-label-form-group">
                            <label for="">CITY</label>
                            <input name="" type="text" class="form-control" required="1" placeholder="City" value="" id="">       
                        </div>

                        <div class="form-group pull-left form-width-3">
                            <label>State</label>
                            <select name="" class="form-control" required="1" id="">
                                <option value="" disabled selected>(Choose a state)</option>
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
                                <option value="GU">Guam</option>
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
                                <option value="PW">Palau</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VI">Virgin Islands</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                                <option value="AA">Armed Forces Americas</option>
                                <option value="AE">Armed Forces Europe</option>
                                <option value="AP">Armed Forces Pacific</option>
                            </select>    
                        </div>

                        <div class="form-group floating-label-form-group form-width-4 pull-right">
                            <label for="">ZIP CODE</label><input name="" type="text" class="form-control" required="1" maxlength="5" placeholder="Zip Code" value="" id="">    
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>

                    <hr>

                    <div class="form-title">
                        <h3>Payment</h3>
                    </div>

                    <div class="paypal-info">
                        <p><span class="strong">Payment Method:</span> PayPal</p>
                        <p><span class="strong">PayPal email:</span> dmessing@gmail.com</p>
                        <p><span class="strong">PayPal name:</span> debra messing</p>
                        <button type="submit" class="cta-btn sm btn-white">Delete PayPal</button>
                        <span style="font-size: 14px;">AD client. If you remove PayPal, you’ll need to add a credit card.</span>
                    </div>

                    <div class="pull-left form-width-5">
                        <p class="subcopy">VISA, Mastercard, AMEX, Discover</p>
                        <div class="form-group floating-label-form-group">
                            <label for="PaymentProfileCardNumber">CREDIT CARD</label>
                            <input name="" class="form-control" required="required" placeholder="Credit Card Number" value="" type="text" id="">
                        </div>
                        <button type="submit" class="cta-btn sm btn-white">Delete Card</button>
                    </div>

                    <div class="pull-right form-width-5">
                        <p class="subcopy">Expiration Date (mm/yyyy) <span style="float: right;">CVV</span></p>

                        <div class="form-group month pull-left form-width-8" style="margin-right: 5px;">
                            <label for=""></label>
                                <select name="" class="form-control no-label" required="required" id="" placeholder="">
                                <option value="0">MM</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>                                        
                        </div>

                        <div class="form-group pull-left form-width-8">
                            <label for=""></label>
                            <select name="" class="form-control no-label" required="required" id="" placeholder="">
                                <option value="0">YYYY</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                                <option value="2031">2031</option>
                                <option value="2032">2032</option>
                                <option value="2033">2033</option>
                                <option value="2034">2034</option>
                                <option value="2035">2035</option>
                                <option value="2036">2036</option>
                                <option value="2037">2037</option>
                                <option value="2038">2038</option>
                            </select>                                        
                        </div>

                        <div class="form-group floating-label-form-group form-width-4 pull-right">
                            <label for="PaymentProfileCvv2">CVV</label>
                            <input name="" class="form-control" maxlength="4" placeholder="CVV" type="text" id="">                                        
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div> 
                    <hr>

                    <button type="submit" class="cta-btn btn-mainBlue md">Save Changes</button>
                    <a href="javascript:void(0)" class="cancel cta-link">CANCEL</a>
                </fieldset>
            </div>
        </li>

        <!-- COLOR KIT PREFS -->
        <li>
            <div class="info-header">
                <h4 class="subtitle">Color Kit Prefs</h4>
                <ul class="inline-list">
                    <li>Hold all orders at HQ</li>
                    <li>Glove Size: Medium</li>
                </ul>
                <span class="icon edit edit-toggle"></span>
            </div>

            <div class="info-body hidden">
                <a class="icon close">Close</a>
                <h4 class="subtitle">Color Kit Prefs</h4>
                
                <fieldset>
                    <div class="form-title">
                        <h3>Hold at Will Call</h3>
                    </div>
                    <div class="checkbox-wrapper">            
                        <input type="checkbox" id="check-hold-all-orders" class="checkbox-radio">
                        <label for="check-hold-all-orders">
                            <span class="check"></span>
                            Hold all orders at El Segundo Office
                        </label>
                    </div>
                    <hr>
                    <div class="form-title">
                        <h3>Glove Size</h3>
                    </div>

                    <div class="form-group form-width-3">
                        <label>Glove Size</label>
                        <select name="" class="form-control" required="1" id="">
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                        </select>    
                    </div>
                    <hr>
                    <button type="submit" class="cta-btn btn-mainBlue md">Save Changes</button>
                    <a href="javascript:void(0)" class="cancel cta-link">CANCEL</a>
                </fieldset>
            </div>
        </li> 
    </ul>
</section>