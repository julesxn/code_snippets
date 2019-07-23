<?php
echo $this->Cdn->script(array('/js/upcoming-order.js'));
echo $this->element('loading_spinner');
?>

<div ng-app="upcomingApp" ng-controller="upcomingCtrl" class="user-account container ng-cloak hidden" id="my-color-upcoming-order">
    <?php echo $this->element('account/header'); ?>
    <div class="pull-left body-wrapper" id="upcoming-order-v2">

        <div class="page-title">
            <h1 class="title">
                <?php echo __d('my-account', 'Upcoming Order'); ?>
            </h1>
        </div>

        <div class="hidden-xs">
            <a href="javascript:void(0)" id="edit-order"><span><?php echo __d('my-account', 'EDIT ORDER'); ?></span> <span class="icon edit-order"></span></a>
            <a href="javascript:void(0)" class="hidden" id="hide-details"><span><?php echo __d('my-account', 'HIDE DETAILS'); ?></span> <span class="icon edit-order"></span></a>
            <div class="clearfix"></div>
        </div>

        <div class="client-order-wrapper">

            <section class="delivery-settings panel-xs pull-left">
                <div class="view heading visible-xs">
                    <div class="title">
                        <h2 class="sub-heading"><?php echo __d('my-account', 'Delivery settings'); ?></h2>
                        <p><span class="strong"><?php echo __d('my-account', 'Ship date:'); ?></span> {{next_order_date | formatDateLong}}</p>
                        <p><span class="strong"><?php echo __d('my-account', 'Frequency:'); ?></span> <?php echo __d('my-account', 'Every <span class="plan-frequency-weeks-value">%1$s</span> weeks', '{{(delivery_schedule/7)}}'); ?></p>
                    </div>
                    <a class="edit-toggle" href="javascript:void(0)">
                        <?php echo __d('my-account', 'EDIT'); ?>
                    </a>
                </div>

                <div class="view body hidden-xs">
                    <h2 class="sub-heading visible-xs"><?php echo __d('my-account', 'Delivery settings'); ?></h2>
                    <div class="icon close visible-xs"></div>

                    <div class="client-info-wrapper bg">
                        <ul class="client-info">
                            <!-- CHANGE NEXT SHIPMENT DATE CALENDAR -->
                            <li>
                                <div class="flex">
                                    <div>
                                        <p class="subtitle">
                                            <?php echo __d('my-account', 'Next Ship Date'); ?>
                                        </p>
                                        <h3>
                                            <span>{{next_order_date | formatDateLong}}</span>
                                        </h3>
                                    </div>
                                    <div class="calendar dropdown" id="next_ship_date_container">
                                        <button class="btn-primary4-esalon sm cta-btn">
                                            <span><?php echo __d('my-account', 'CHANGE'); ?></span>
                                            <input type="text" id="next_ship_date_input" ng-model='next_order_date'>
                                        </button>
                                    </div>
                                </div>
                                <p class="info">
                                    <?php
                                    printf(
                                        __d('my-account', 'Orders ship within 1-3 days of this date. <a %1$s>FAQ</a>'),
                                        'href="javascript:void(0)" data-toggle="modal" data-target="#FAQ-plan" class="cta-link"'
                                    );
                                    ?>
                                </p>
                            </li>

                            <!-- CHANGE FREQUENCY -->
                            <li>
                                <div class="flex">
                                    <div>
                                        <p class="subtitle">
                                            <?php
                                            if ($APP_user_on_haircolor_ad) {
                                                echo __d('my-account', '<span class="hidden-xs">Color </span>Frequency');
                                            } else {
                                                echo __d('my-account', 'Frequency');
                                            }
                                            ?>
                                        </p>
                                        <h3>
                                            <?php echo __d('my-account', 'Every <span class="plan-frequency-weeks-value">%1$s</span> weeks', '{{(delivery_schedule/7)}}'); ?>
                                        </h3>
                                    </div>

                                    <div class="dropdown">
                                        <button class="btn-primary4-esalon sm cta-btn dropdown-click">
                                            <?php echo __d('my-account', 'CHANGE'); ?>
                                        </button>

                                        <div class="dropdown-menu color-frequency right-xs">
                                            <h4>
                                                <?php
                                                if ($APP_user_on_haircolor_ad) {
                                                    echo __d('my-account', 'Send my color every...');
                                                } else {
                                                    echo __d('my-account', 'Send my order every...');
                                                }
                                                ?>

                                            </h4>
                                            <ul class="pd-quantity">
                                                <li class="increment" ng-class="{'visibility-hidden disabled' : delivery_schedule <= min_frequency_allowed}" ng-click="delivery_schedule=1*delivery_schedule-7;updateDeliverySchedule(delivery_schedule);"><span>-</span></li>
                                                <li>
                                                    <div class="number">
                                                        <?php echo __d('my-account', '%1$s <span>weeks</span>', '{{(delivery_schedule/7)}}'); ?>
                                                    </div>
                                                </li>
                                                <li class="increment" ng-class="{'visibility-hidden disabled' : delivery_schedule >= max_frequency_allowed}" ng-click="delivery_schedule=1*delivery_schedule+7;updateDeliverySchedule(delivery_schedule);"><span>+</span></li>
                                            </ul>
                                            <button class="close-dropdown btn-primary4-esalon sm cta-btn">
                                                <?php echo __d('my-account', 'DONE'); ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- SKIP NEXT SHIPMENT -->
                            <li>
                                <div class="flex">
                                    <div>
                                        <p class="subtitle">
                                            <?php echo __d('my-account', 'Not Ready?'); ?>
                                        </p>
                                        <h3>
                                            <?php echo __d('my-account', 'Skip this shipment'); ?>
                                        </h3>
                                    </div>

                                    <div class="dropdown">
                                        <button class="btn-primary4-esalon sm cta-btn dropdown-click">
                                            <?php echo __d('my-account', 'SKIP ORDER'); ?>
                                        </button>
                                        <div class="dropdown-menu skip-color right-xs">
                                            <div ng-hide="next_skip_date_nice">
                                                <p class="subtitle">
                                                    <?php echo __d('my-account', 'ALL DONE!'); ?>
                                                </p>
                                                <p>
                                                <?php echo __d('my-account', 'That\'s all the skips we can do. Your order has been pushed out as far as possible.'); ?>
                                                </p>
                                                <p>
                                                    <a class="cta-link" href="/support/contact" target="_blank">
                                                        <?php echo __d('my-account', 'Need help? Contact our support team.'); ?>
                                                    </a>
                                                </p>
                                            </div>
                                            <div ng-show="next_skip_date_nice">
                                                <h4>
                                                    <?php echo __d('my-account', 'Skip entire order'); ?>
                                                </h4>
                                                <p class="sub-copy">
                                                    <?php echo __d('my-account', 'Send my next shipment on:'); ?>
                                                    <span class="strong">{{next_skip_date_nice}}</span>
                                                </p>
                                                <button class="btn-primary4-esalon cta-btn sm close-dropdown" ng-click="updateNextOrderDate(next_skip_date)">
                                                    <?php echo __d('my-account', 'CONFIRM'); ?>
                                                </button>
                                                <span class="close-dropdown cancel-link">
                                                    <?php echo __d('my-account', 'CANCEL'); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <a href="/my_account/turn_off/plan" class="turn-off-plan">
                        <span class="user-icon turnoff"></span>
                        <span><?php echo __d('my-account', 'TURN OFF PLAN'); ?></span>
                    </a>
                </div>
            </section>

            <section class="client-order panel-xs pull-left">
                <div class="view heading visible-xs">
                    <div class="title">
                        <h2 class="sub-heading"><?php echo __d('my-account', 'In your order'); ?></h2>
                    </div>
                     <ul class="product-list collapsed">
                        <li class="item-row" ng-repeat="item in getCartItems()">
                            <div class="pd-image" ng-class="{'disabled': (item.skipped || item.out_of_stock)}">
                                <img class="img-responsive" alt="{{item.translated_name}}" title="{{item.name}}" ng-src="{{item.images.v4_square_cdn}}" ng-srcset="{{item.images.v4_square_2x_cdn}} 2x, {{item.images.v4_square_3x_cdn}} 3x"/>

                                <div ng-show="item.skipped" class="pd-skip">
                                    <span class="user-icon skip hidden"></span><?php echo __d('my-account', 'SKIPPED'); ?>
                                </div>
                            </div>
                            <span ng-class="{'skipped': item.skipped}">{{item.name}}</span>
                            <span ng-class="{'skipped-text': item.skipped}">
                                <?php echo __d('my-account', 'SKIPPED'); ?>
                            </span>
                        </li>
                    </ul> 
                    <a class="edit-toggle" href="javascript:void(0)">
                        <?php echo __d('my-account', 'EDIT'); ?>
                    </a>
                </div>

                <div class="view body hidden-xs">
                    <h2 class="sub-heading visible-xs">
                        <?php echo __d('my-account', 'In your order:'); ?>
                    </h2>

                    <div class="icon close visible-xs"></div>

                    <div class="page-title sub hidden-xs">
                        <h2 class="sub-title">
                            <?php echo __d('my-account', 'In your order:'); ?>
                        </h2>
                    </div>

                    <!-- PROMO DISCOUNT BANNER -->
                    <div ng-show="discount_description" class="page-title">
                        <p class="promo highlight">
                            <?php echo __d('my-account', 'Promotional discounts are shown in your Order Total below.'); ?>
                        </p>
                    </div>

                    <!-- PRODUCT LIST -->
                    <ul class="product-list collapsed">
                        <li class="item-row" ng-repeat="item in getCartItems()">
                            <div class="pd-image" ng-class="{'disabled': (item.skipped || item.out_of_stock)}">
                                <img class="img-responsive" alt="{{item.translated_name}}" title="{{item.name}}" ng-src="{{item.images.v4_square_cdn}}" ng-srcset="{{item.images.v4_square_2x_cdn}} 2x, {{item.images.v4_square_3x_cdn}} 3x"/>

                                <div ng-show="item.skipped" class="pd-skip">
                                    <span class="user-icon skip hidden"></span><?php echo __d('my-account', 'SKIPPED'); ?>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <!-- PRODUCT LIST -->
                    <ul id="upcoming-product-list" class="product-list details hidden">
                        <li class="item-row" ng-repeat="item in getCartItems()">
                            <table>
                                <tr>
                                    <td class="pd-image hidden-xs" ng-class="{'disabled': (item.skipped || item.out_of_stock)}">
                                        <img class="img-responsive" alt="{{item.translated_name}}" title="{{item.name}}" ng-src="{{item.images.v4_square_cdn}}" ng-srcset="{{item.images.v4_square_2x_cdn}} 2x, {{item.images.v4_square_3x_cdn}} 3x"/>
                                    </td>

                                    <td>
                                        <div class="pd-info" ng-class="{'disabled': item.out_of_stock}">

                                            <div class="pd-price visible-xs" ng-show="item.frequency>=1 && !item.skipped && !item.out_of_stock">
                                                <p class="subtitle" ng-show="<?php echo $APP_user_shipped_haircolor_order_count == 0 ? 'true' : 'false'; ?> && item.is_haircolor && item.unit_price == <?php echo FIRST_DEAL_PRICE; ?>">
                                                    <?php echo __d('my-account', 'Introductory price'); ?>
                                                </p>
                                                <p class="subtitle" ng-show="<?php echo $APP_shipped_highlight_order_count == 0 ? 'true' : 'false'; ?> && item.is_highlight && item.unit_price == <?php echo HIGHLIGHT_FIRST_PRICE; ?>">
                                                    <?php echo __d('my-account', 'Introductory price'); ?>
                                                </p>

                                                <p class="subtitle" ng-show="item.is_first_sub_50off_promo">
                                                    <?php echo __d('my-account', 'First Order Special!'); ?>
                                                </p>
                                            </div>

                                            <h3 class="pd-title" ng-class="{'disabled': item.skipped}">{{item.name}}</h3>
                                            <p class="pd-description" ng-class="{'disabled': item.skipped}">{{item.translated_name}}</p>
                                            <p ng-show="item.variation_name" ng-class="{'disabled': item.skipped}">{{getVariationType(item.variation_type)}}: {{item.variation_name}}</p>

                                            <div class="pd-price visible-xs" ng-show="!item.skipped && !item.out_of_stock">
                                                <p class="price">
                                                    <span class="old" ng-show="item.unit_price < item.full_price && !item.skipped && !item.out_of_stock">{{item.qty * item.full_price | formatCurrency}}</span>
                                                    <span class="new" ng-show="!item.skipped && !item.out_of_stock && item.unit_price > 0">{{item.qty * item.unit_price | formatCurrency}}</span>
                                                    <span class="highlight" ng-show="!item.skipped && !item.out_of_stock && item.unit_price == 0">
                                                        <?php echo __d('my-account', 'Free!'); ?>
                                                    </span>
                                                </p>
                                            </div>

                                            <p class="info highlight" ng-show="item.is_free_gift">
                                                <?php echo __d('my-account', 'Your <span>Free Gift Credit</span> is reflected below with your order total.'); ?>
                                            </p>

                                            <div ng-show="item.is_haircolor">
                                                <p class="info">
                                                    <?php echo $color_info_long; ?>
                                                    <a ng-show="item.is_haircolor && <?php echo $show_color_details?'true':'false'; ?>" href="/my_account/color_details" class="cta-link-2">
                                                        <?php echo __d('my-account', 'View Color Details &raquo;'); ?>
                                                    </a>
                                                </p>
                                                <p class="highlight" ng-show="item.is_haircolor && using_free_order_credit">
                                                    <?php echo __d('my-account', 'Your Free Order Credit is reflected below with your order total.'); ?>
                                                </p>
                                                <p class="info frequency">
                                                    <?php echo __d('my-account', 'Glove size:'); ?>
                                                </p>
                                                <div class="dropdown">
                                                    <div class="dropdown-click">
                                                        <p class="cta-link">{{user_glove_setting_nice}}</p>
                                                    </div>
                                                    <div class="dropdown-menu glove-size">
                                                        <h4>
                                                            <?php echo __d('my-account', 'Choose Glove Size'); ?>
                                                        </h4>
                                                        <ul>
                                                            <li ng-click="updateNextOrderGlove('M')">
                                                                <h3>
                                                                    <?php echo __d('my-account', 'Medium'); ?>
                                                                </h3>
                                                            </li>
                                                            <li ng-click="updateNextOrderGlove('L')">
                                                                <h3>
                                                                    <?php echo __d('my-account', 'Large'); ?>
                                                                </h3>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- HIGHLIGHT AD FREQUENCY - DESKTOP  -->
                                            <div ng-show="item.frequency > 0 && item.is_highlight">
                                                <div ng-hide="item.skipped">
                                                    <p class="info frequency">
                                                        <?php echo __d('my-account', 'Frequency:'); ?>
                                                    </p>
                                                    <?php if ($APP_shipped_highlight_order_count > 0) { ?>
                                                    <div class="dropdown">
                                                        <div class="dropdown-click">
                                                            <p class="cta-link">
                                                            <?php
                                                            if ($APP_user_on_haircolor_ad) {
                                                                echo __d('my-account', 'Every %1$s color', '{{frequency_range_labels[item.frequency].label}}');
                                                            } else {
                                                                echo __d('my-account', 'Every %1$s order', '{{frequency_range_labels[item.frequency].label}}');
                                                            }
                                                            ?>
                                                            </p>
                                                        </div>
                                                        <div class="dropdown-menu highlight-frequency">
                                                            <h4>
                                                                <?php echo __d('my-account', 'Send my highlights with...'); ?>
                                                            </h4>
                                                            <ul>
                                                                <li ng-click="item.frequency=frequency_range_labels[n].frequency;updateHighlightFrequency(item)" ng-repeat="n in [] | range:item.allow_freq_min:item.allow_freq_max">
                                                                    <h3>
                                                                        <?php
                                                                        if ($APP_user_on_haircolor_ad) {
                                                                            echo __d('my-account', 'Every %1$s color<span>(Every %2$s weeks)</span>', '{{frequency_range_labels[n].label}}', '{{frequency_range_labels[n].frequency*delivery_schedule/7}}');
                                                                        } else {
                                                                            echo __d('my-account', 'Every %1$s order<span>(Every %2$s weeks)</span>', '{{frequency_range_labels[n].label}}', '{{frequency_range_labels[n].frequency*delivery_schedule/7}}');
                                                                        }
                                                                        ?>

                                                                    </h3>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                        <?php } else {
                                                        echo "<p style='display:inline'>";
                                                        if ($APP_user_on_haircolor_ad) {
                                                            echo __d('my-account', 'Every %1$s color', '{{frequency_range_labels[item.frequency].label}}');
                                                        } else {
                                                            echo __d('my-account', 'Every %1$s order', '{{frequency_range_labels[item.frequency].label}}');
                                                        }
                                                        echo "</p>";
                                                    } ?>
                                                </div>

                                                <p class="info" ng-show="item.skipped">
                                                    <?php echo __d('my-account', 'Next shipment: <span class="highlight-next-order-date">%1$s</span>', '{{item.next_order_date_nice}}'); ?>
                                                </p>
                                                <p class="info" ng-hide="item.skipped">
                                                    <?php echo __d('my-account', 'Ships with this order'); ?>
                                                </p>
                                            </div>

                                            <div ng-show="item.allow_freq_change && item.frequency > 0 && !item.is_highlight">
                                                <div ng-hide="item.skipped">
                                                    <p class="frequency">
                                                        <?php echo __d('my-account', 'Frequency:'); ?>
                                                    </p>
                                                    <div class="dropdown">
                                                        <div class="dropdown-click">
                                                            <p class="cta-link">
                                                                <?php
                                                                if ($APP_user_on_haircolor_ad) {
                                                                    echo __d('my-account', 'Every %1$s color', '{{frequency_range_labels[item.frequency].label}}');
                                                                } else {
                                                                    echo __d('my-account', 'Every %1$s order', '{{frequency_range_labels[item.frequency].label}}');
                                                                }
                                                                ?>
                                                            </p>
                                                        </div>
                                                        <div class="dropdown-menu highlight-frequency">
                                                            <h4>
                                                                <?php echo __d('my-account', 'Send my %1$s with...', '{{item.name}}'); ?>
                                                            </h4>
                                                            <ul>
                                                                <li ng-click="item.frequency=frequency_range_labels[n].frequency;updateProductFrequency(item)" ng-repeat="n in [] | range:item.allow_freq_min:item.allow_freq_max">
                                                                  <h3>
                                                                      <?php
                                                                      if ($APP_user_on_haircolor_ad) {
                                                                          echo __d('my-account', 'Every %1$s color<span>(Every %2$s weeks)</span>', '{{frequency_range_labels[n].label}}', '{{frequency_range_labels[n].frequency*delivery_schedule/7}}');
                                                                      } else {
                                                                          echo __d('my-account', 'Every %2$s order<span>(Every %2$s weeks)</span>', '{{frequency_range_labels[n].label}}', '{{frequency_range_labels[n].frequency*delivery_schedule/7}}');
                                                                      }
                                                                      ?>
                                                                  </h3>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <p ng-show="item.skipped">
                                                    <?php echo __d('my-account', 'Next shipment: <span class="highlight-next-order-date">%1$s</span>', '{{item.next_order_date_nice}}'); ?>
                                                </p>
                                                <p ng-hide="item.skipped">
                                                    <?php echo __d('my-account', 'Ships with this order'); ?>
                                                </p>
                                            </div>

                                            <!-- NEW FEATURE -->
                                            <ul class="radio-btn sm" ng-show="item.allow_toggle_single_ad">

                                                <li ng-hide="(item.is_highlight || item.is_lightset)">
                                                    <!-- AUTOSHIP PROMO -->
                                                    <div ng-show="!item.is_first_sub_50off_promo">
                                                        <input type="radio" name="{{item.product_id}}_upcoming_ad" id="{{item.product_id}}_autoship" value="Autoship" ng-checked="(item.frequency>=1)" ng-click="changeItemFrequency(item, 1)">

                                                        <label for="{{item.product_id}}_autoship">
                                                            <span class="radio"></span>
                                                            <?php echo __d('my-account','Autoship: <span class="strong">20% Off</span>'); ?>
                                                        </label>
                                                    </div>

                                                    <!-- FIRST ORDER SPECIAL -->
                                                    <!-- OMID TO UPDATE NG-CLICK -->
                                                    <div ng-show="item.is_first_sub_50off_promo">
                                                        <input type="radio" name="{{item.product_id}}_upcoming_ad_special" id="{{item.product_id}}_ad_special" value="Autoship" ng-checked="(item.frequency>=1)" ng-click="changeItemFrequency(item, 1)">
                                                        <label for="{{item.product_id}}_ad_special">
                                                            <span class="radio"></span>
                                                            <?php echo __d('my-account','Autoship: <span class="strong">50% Off</span>'); ?>
                                                        </label>
                                                    </div>
                                                </li>


                                                <!-- HL ONLY -->
                                                <li ng-show="item.is_highlight || item.is_lightset">
                                                    <input type="radio" name="{{item.product_id}}_hl_upcoming_ad" id="{{item.product_id}}_hl_autoship" value="Autoship" ng-checked="(item.frequency>=1)" ng-click="changeItemFrequency(item, min_hl_freq_orders_allowed)">

                                                    <label for="{{item.product_id}}_hl_autoship">
                                                        <span class="radio"></span>

                                                        <?php echo __d('my-account', 'Autoship:'); ?>
                                                        <span class="strong" ng-show="!item.qualifies_first_sub_50off_promo"><?php echo __d('my-account','20% Off'); ?></span>

                                                        <!-- OMID TO SHOW IF ITS A SPECIAL INTRO PRICE -->
                                                        <span class="strong" ng-show=""><?php echo __d('my-account', 'Intro Special'); ?></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <input type="radio" name="{{item.product_id}}_upcoming_ad" id="{{item.product_id}}_onetime" value="One-time" ng-checked="(item.frequency==0)" ng-click="changeItemFrequency(item, 0)">
                                                    <label for="{{item.product_id}}_onetime">
                                                        <span class="radio"></span>
                                                        <?php echo __d('my-account', 'One-time:'); ?> <span class="strong" ng-show="!item.skipped && !item.out_of_stock"> {{item.full_price | formatCurrency}}</span>
                                                    </label>
                                                </li>
                                            </ul>

                                            <!-- PRODUCT QUANTITY -->
                                            <ul class="pd-quantity" ng-show="item.allow_multiple && !item.skipped && !item.out_of_stock" ng-class="{'disabled': item.skipped}">
                                                <li class="increment" ng-class="{'disabled': item.qty <= 1}" ng-click="incrementQty(item, -1)"><span>-</span></li>
                                                <li>{{item.qty}}</li>
                                                <li class="increment" ng-class="{'disabled': item.qty >= max_item_qty_allowed}" ng-click="incrementQty(item, 1)"><span>+</span></li>
                                            </ul>

                                            <ul class="pd-quantity" ng-show="! item.allow_multiple && item.removable && item.qty > 1">
                                                <li>
                                                    <?php echo __d('my-account', 'Quantity:'); ?> {{item.qty}}
                                                </li>
                                            </ul>

                                            <div class="remove-link" ng-show="item.removable && item.frequency==0 && all_item_count > 1" remove-future-item data-position="{{$index}}">
                                                <span class="subtitle cta-link no-margin">
                                                    <?php echo __d('my-account', 'remove'); ?>
                                                </span>
                                            </div>

                                            <span ng-show="item.frequency>=1">
                                                <!-- HAIRCOLOR -->
                                                <div class="remove-link" ng-show="item.is_haircolor" onclick="window.location.href='/my_account/turn_off/haircolor/'">
                                                    <span class="cta-link no-margin">
                                                        <?php echo __d('my-account', 'remove'); ?>
                                                    </span>
                                                </div>

                                                <!-- ONLY 1 ITEM ON PLAN AND NOT HAIRCOLOR -->
                                                <div class="remove-link" ng-show="!item.is_haircolor && ad_items_count == 1" onclick="window.location.href='/my_account/remove_last_ad_product_turn_off_plan/'">
                                                    <span class="cta-link no-margin">
                                                        <?php echo __d('my-account', 'remove'); ?>
                                                    </span>
                                                </div>

                                                 <!-- AD PRODUCTS -->
                                                <div class="remove-link" ng-show="!item.is_haircolor && ad_items_count > 1" remove-future-item data-position="{{$index}}">
                                                    <span class="cta-link no-margin">
                                                        <?php echo __d('my-account', 'remove'); ?>
                                                    </span>
                                                </div>
                                            </span>
                                        </div>
                                    </td>

                                    <td>

                                        <div ng-show="item.allow_skip">
                                            <div ng-click="changeItemNextOrderDate(item, item.skipped ? 'now' : 'next')" class="checkbox-wrapper">
                                                <input class="checkbox-radio" type="checkbox" id="skip_toggle_{{item.product_id}}_{{item.osp_id}}" name="skip_toggle_{{item.product_id}}_{{item.osp_id}}" ng-checked="item.skipped" />
                                                <label for="skip_toggle_{{item.product_id}}_{{item.osp_id}}">
                                                    <?php echo __d('my-account', 'Skip'); ?>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="pd-price hidden-xs" ng-show="!item.skipped && !item.out_of_stock">
                                            <!-- PRICING & LABELS -->
                                            <!-- if this item is a HC or HL with the first time intro price and this is client's first HC/HL order then show the 'Introductory price' tag above the price -->
                                            <div ng-show="item.frequency>=1">
                                                <p class="subtitle" ng-show="<?php echo $APP_user_shipped_haircolor_order_count == 0 ? 'true' : 'false'; ?> && item.is_haircolor && item.unit_price == <?php echo FIRST_DEAL_PRICE; ?>">
                                                    <?php echo __d('my-account', 'Introductory price'); ?>
                                                </p>
                                                <p class="subtitle" ng-show="<?php echo $APP_shipped_highlight_order_count == 0 ? 'true' : 'false'; ?> && item.is_highlight && item.unit_price == <?php echo HIGHLIGHT_FIRST_PRICE; ?>">
                                                    <?php echo __d('my-account', 'Introductory price'); ?>
                                                </p>

                                                <p class="subtitle" ng-show="item.is_first_sub_50off_promo">
                                                    <?php echo __d('my-account', 'First Order Special!'); ?>
                                                </p>
                                            </div>

                                            <p class="price">
                                                <span class="old" ng-show="item.unit_price < item.full_price && !item.skipped && !item.out_of_stock">{{item.qty * item.full_price | formatCurrency}}</span>
                                                <span class="new" ng-show="!item.skipped && !item.out_of_stock && item.unit_price > 0">{{item.qty * item.unit_price | formatCurrency}}</span>
                                                <span class="highlight" ng-show="!item.skipped && !item.out_of_stock && item.unit_price == 0">
                                                    <?php echo __d('my-account', 'Free!'); ?>
                                                </span>
                                            </p>
                                        </div>

                                        <div class="pd-image visible-xs" ng-class="{'disabled': (item.skipped || item.out_of_stock)}">
                                            <img class="img-responsive" alt="{{item.translated_name}}" title="{{item.name}}" ng-src="{{item.images.v4_square_cdn}}" ng-srcset="{{item.images.v4_square_2x_cdn}} 2x, {{item.images.v4_square_3x_cdn}} 3x"/>
                                        </div>
                                    </td>
                                </tr>

                                <!-- special case: client is receiving gloss on her first highlight order -->
                                <tr ng-show="item.is_gloss && has_highlight" ng-class="{'disabled': item.skipped}">
                                    <td class="hidden-xs"></td>
                                    <td colspan=3 style="padding-top: 0">
                                        <div class="pd-info" style="padding-right: 0">
                                            <p class="disclaimer highlight">
                                                <?php
                                                printf(
                                                    __d('my-account', '*Please note: Applying %1$s over highlights will cover your highlights, so %1$s will not be available for future orders while you have highlights in your hair. Contact your colorist to order again.'),
                                                    product_name_gloss()
                                                );
                                                ?>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </li>
                    </ul>

                    <!-- ORDER TOTAL -->
                    <div class="order-total">
                        <div class="promo-box v2 hidden-xs" ng-show="(short_for_free_shipping_amount > 0)">
                            <p>
                                <?php echo __d('my-account', 'You\'re just <span class="highlight">%1$s</span> away from free shipping.', '{{short_for_free_shipping_amount | formatCurrency}}'); ?>
                            </p>
                        </div>

                        <div class="col-2">
                            <ul>
                                <li>
                                    <?php echo __d('my-account', 'Subtotal:'); ?>
                                    <span class="price" ng-bind="subtotal_amount | formatCurrency"></span>
                                <li>

                                <li ng-show="discount_description">
                                    <?php echo __d('my-account', 'Discount %1$s:', '{{discount_description}}'); ?>
                                    <span class="price">
                                        (-<span ng-bind="discount_amount | formatCurrency"></span>)
                                    </span>
                                </li>

                                <li ng-show="tax_amount > 0">
                                    <?php echo __d('my-account', 'Tax:'); ?>
                                    <span class="price" ng-bind="tax_amount | formatCurrency"></span>
                                </li>

                                <li ng-show="shipping_amount==0" class="highlight">
                                    <?php echo __d('my-account', 'Shipping:'); ?>
                                    <span class="price"><?php echo __d('my-account', 'Free!'); ?></span>
                                </li>

                                <li ng-show="shipping_amount > 0">
                                    <?php echo __d('my-account', 'Shipping:'); ?>
                                    <span class="price" ng-bind="shipping_amount | formatCurrency"></span>
                                </li>

                                <li ng-show="credit_used_amount > 0">
                                    <?php echo __d('my-account', 'Account credit:'); ?>
                                    <span class="price">
                                        (-<span ng-bind="credit_used_amount | formatCurrency"></span>)
                                    </span>
                                </li>

                                <li class="strong">
                                    <?php echo __d('my-account', 'Order Total:'); ?>
                                    <span class="price" ng-bind="total_amount | formatCurrency"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="clearfix"></div>
        </div>

        <!-- RECOMMENDED PRODUCTS -->
        <section class="recommended-products upcoming" ng-show="showRecommendedProductsModule()">
            <div class="page-title">
                <h2 class="sub-title">
                    <?php echo __d('my-account', 'Recommended Add-ons'); ?>
                </h2>

                <p ng-show="(shipping_amount==0)"><?php echo __d('my-account', 'Products that protect and enhance your color'); ?></p>

                <p ng-show="(short_for_free_shipping_amount > 0)" class="visible-xs" style="font-weight:300;">
                    <?php echo __d('my-account', 'You\'re <span>Just %1$s</span> away from <span class="highlight">free shipping.</span>', '{{short_for_free_shipping_amount | formatCurrency}}'); ?>
                </p>
            </div>

            <ul class="product-list">
                <li ng-repeat="item in getRecommendedProducts()" ng-hide="item.added">
                    <table>
                        <tr>
                            <td class="pd-image hidden-xs">
                                <a href="{{item.product_url}}">
                                    <img ng-src="{{item.image}}" class="img-responsive" alt="{{item.translated_name}}" title="{{item.name}}" />
                                </a>
                            </td>
                            <td>
                                <div class="pd-info">
                                    <div class="content">
                                        <div ng-show="item.qualifies_first_sub_50off_promo" class="subtitle promo"><?php echo __d('my-account', 'First Order Special!'); ?></div>

                                        <h3 class="pd-title">{{item.name}}</h3>

                                        <p class="pd-description">{{item.translated_name}}</p>

                                        <div ng-show="item.product_id==<?php echo HAIR_COLOR_PRODUCT_ID; ?>">
                                            <p>
                                                <?php echo __d('my-account', 'One time:'); ?> {{item.single_price | formatCurrency}} / <?php echo __d('my-account', 'Autoship:'); ?> {{item.auto_price | formatCurrency}}
                                            </p>
                                        </div>

                                        <div ng-show="item.average_rating_stars_width_px" class="pd-review-stars">
                                            <span class="stars">
                                                <span style="width: {{item.average_rating_stars_width_px}}px;"></span>
                                            </span>
                                        </div>

                                        <p ng-show="item.variation_name">{{getVariationType(item.variation_type)}}: {{item.variation_name}}</p>
                                    </div>

                                    <div class="pd-image visible-xs">
                                        <a href="{{item.product_url}}">
                                            <img ng-src="{{item.image}}" class="img-responsive" alt="{{item.translated_name}}" title="{{item.name}}" />
                                        </a>
                                    </div>

                                    <div class="clearfix visible-xs"></div>

                                    <p>{{item.description}}</p>

                                    <div class="pd-cta-btns">
                                        <ul ng-show="item.product_id==<?php echo HAIR_COLOR_PRODUCT_ID; ?>">
                                            <li>
                                                <button class="button-3-esalon sm cta-btn center" onclick="window.location.href='<?php echo $APP_user_shipped_haircolor_order_count ? '/my_account/order_color' : '/color_profile9'; ?>'">
                                                    <?php echo __d('my-account', 'Order My Color'); ?>
                                                </button>
                                            </li>
                                        </ul>

                                        <ul ng-hide="item.product_id==<?php echo HAIR_COLOR_PRODUCT_ID; ?>">
                                            <li>
                                                <button ng-show="item.allow_subscription==1" ng-click="item.added=true;addToPlan(item.product_id,1,1,-1,'','#upcoming-product-list');" class="button-3-esalon sm cta-btn">
                                                <span ng-show="!item.qualifies_first_sub_50off_promo"><?php echo __d('my-account', 'Autoship'); ?></span>
                                                <span ng-show="item.qualifies_first_sub_50off_promo"><?php echo __d('my-account', 'Autoship'); ?>*</span>
                                                <span ng-show="!item.qualifies_first_sub_50off_promo" class="price">{{item.auto_price | formatCurrency}}</span>
                                                <span ng-show="item.qualifies_first_sub_50off_promo" class="price">{{item.deal_price | formatCurrency}}</span>
                                                </button>
                                            </li>
                                            <li>
                                                <button ng-click="item.added=true;addToPlan(item.product_id,0,1,-1,'','#upcoming-product-list');" class="button-3-esalon sm cta-btn">
                                                    <span><?php echo __d('my-account', 'Add one time'); ?></span> <span class="price">{{item.single_price | formatCurrency}}</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>

                                    <p ng-show="item.qualifies_first_sub_50off_promo" class="autoship-promo">
                                        *<?php echo __d('my-account', 'First order'); ?>: {{item.deal_price | formatCurrency}}. <?php echo __d('my-account', 'Future orders'); ?>: {{item.auto_price | formatCurrency}}
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </li>
             </ul>
            <div class="cta">
                <a href="/products" class="cta-link">
                    <?php echo __d('my-account', 'SHOP ALL HAIR CARE &raquo;'); ?>
                </a>
            </div>
        </section>
    </div>
    <?php echo $this->element('modals/account/color_faq'); ?>
    <?php
    if ($show_modal_free_shipping_minimum_spend_raised) {
      echo $this->element('modals/account/free_shipping_minimum_spend_raised_group_1');
    }
    ?>
</div>

<?php
echo $this->Cdn->script(array("/js/jquery.ui.min.datepicker.js"));
?>

<script>
var update_in_progess = false;
var holidays = <?php echo $holidays; ?>;
var i18n_strings = <?php echo json_encode($i18n_strings); ?>;

$(function() {
   <?php if ($show_modal_free_shipping_minimum_spend_raised) { ?>
   $("#free-shipping-update").modal('show');
   <?php } ?>

    $('#edit-order').on("keypress click", function(){
        $(this).fadeOut().addClass('hidden');
        $("#hide-details").fadeIn().removeClass('hidden');
        $(".product-list.collapsed").fadeOut().addClass('hidden');
        $(".product-list.details").fadeIn().removeClass('hidden');
    });

    $('#hide-details').on("keypress click", function(){
        $(this).fadeOut().addClass('hidden');
        $("#edit-order").fadeIn().removeClass('hidden');
        $(".product-list.collapsed").fadeIn().removeClass('hidden');
        $(".product-list.details").fadeOut().addClass('hidden');
    });

    $('.edit-toggle').on("keypress click", function(){
        $(this).parents('.heading').fadeOut().addClass('hidden-xs');
        $(this).parents().next('.body').fadeIn().removeClass('hidden-xs');
    });

    $('.close, .cancel').click(function () {
        $(this).parents().prev('.heading').fadeIn().removeClass('hidden-xs');
        $(this).parents('.body').fadeOut().addClass('hidden-xs');
    });

    $('#loading-spinner').removeClass('hidden');
    angular.bootstrap(document.getElementById('my-color-upcoming-order'), ['upcomingApp']);

    function t(t) {
        $(t).bind("click", function (t) {
            t.preventDefault();
            $(this).parent().fadeOut()
        })
    }
    $(document).on('click','.dropdown-click', function () {
        var t = $(this).parents(".dropdown").children(".dropdown-menu").is(":hidden");
        $(".user-account .dropdown .dropdown-menu").hide();
        if (t) {
            $(this).parents(".user-account .dropdown").children(".dropdown-menu").toggle().parents(".user-account .dropdown").children(".dropdown-click");
        }
    });
    $(document).bind('click', function (t) {
        var n = $(t.target);
        if (!n.parents().hasClass("dropdown")) $(".user-account .dropdown .dropdown-menu").hide();
        $('.dropdown .close-dropdown').click(function() {
            $(this).parents('.dropdown-menu').hide();
        });
   });

    /* --- START - NEXT SHIP DATE CALENDAR --- */
    $('#next_ship_date_container').click(function() {
        var $scope = angular.element('#my-color-upcoming-order').scope();
        date = $scope.next_order_date;
        $('#next_ship_date_input').datepicker('show');
        $('#next_ship_date_input').datepicker('setDate', date );
    });

    $( '#next_ship_date_input' ).datepicker({
        minDate: 1,
        firstDay: 0,
        maxDate: '+8m',
        showOtherMonths: true,
        beforeShowDay: $.datepicker.noWeekends,
        dayNamesMin:I18N.getWeekdayShort(),
        monthNames: I18N.getMonth(),
        dateFormat: 'yy-mm-dd',
        beforeShowDay: function(dt) {
        if (dt.getDay() < 1 || dt.getDay() > 5) { //weekend
            return [false, ''];
        }
        var string = $.datepicker.formatDate('yy-mm-dd', dt);
        if (holidays.indexOf(string) >= 0) { //holidays
            return [false, ''];
        }
        return [true, ''];
        },
        onClose: function(date) {
            var $scope = angular.element('#my-color-upcoming-order').scope();
            $scope.next_order_date = date;
            $scope.$apply();
        },
        beforeShow: function (input, inst) {
            var offset = $(input).offset();
            var height = $(input).height();
            window.setTimeout(function () {
                inst.dpDiv.css({ top: (offset.top + height + 2) + 'px' })
            }, 1);

            $('#next_ship_date_input').prop("disabled", true);
            $(this).datepicker('widget').addClass('account-date');
        }
    });
   /* --- END - NEXT SHIP DATE CALENDAR --- */
});
</script>
