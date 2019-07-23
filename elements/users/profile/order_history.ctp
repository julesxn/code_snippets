<section class="order-history">
    <div class="container">
        <div class="section-title">
            <h2>Orders (5)</h2>

            <div class="checkbox-wrapper">            
                <input type="checkbox" id="check-comped-orders" class="checkbox-radio">
                <label for="check-comped-orders">
                    <span class="check"></span>
                    Show comped orders
                </label>
            </div>

            <a class="dropdown" href="#filterOrdersModal" data-toggle="modal">
                Filter by product<span class="caret"></span>
            </a>

            <div style="margin-left: auto">
                <button class="cta-btn btn-white sm pull-right">Create product only order</button>
            </div>
            <small style="margin-left: 20px;"><a href="#">+ SHOW ALL</a></small>
        </div>

        <table class="orders-list">
            <tr>
                <th class="col-1 count text-center">CT</th>
                <th class="col-2 order">ORDER #</th>
                <th class="col-3 date text-center">CREATED</th>
                <th class="col-4 product">PRODUCT</th>
                <th class="col-5 formula">FORMULA</th>
                <th class="col-6 target">TARGET</th>
                <th class="col-7 total text-right">TOTAL</th>
                <th class="col-8 refund text-right">REFUNDED</th>
                <th class="col-9 status text-right">STATUS</th>
            </tr>
            <tr>
                <td class="col-1 count text-center"><a href="#">3</a></td>
                <td class="col-2 order">
                    <div class="dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <div class="order-number">12374629<span class="caret"></span></div>
                        </div>
                        <div class="dropdown-menu duplicate">
                            <ul class="inline-list">
                                <li><button class="cta-btn btn-white sm">View</button></li>
                                <li><button class="cta-btn btn-white sm duplicate-order">Duplicate</button></li>
                                <li><button class="cta-btn btn-white sm duplicate-charge">Duplicate & Charge</button></li>
                            </ul>
                        </div>
                    </div>
                </td>
                <td class="col-3 text-center">11/16/16</td>
                <td class="col-4 product"><span>Single Bottle Perm + 4 more items</span> <div class="highlight-tag highlight-1">Enhanced</div></td>
                <td class="col-5 formula">CW-03-20V</td>
                <td class="col-6 target">6½.0 (V4)</td>
                <td class="col-7 total text-right"><div class="flag uk"></div> £19.70</td>
                <td class="col-8 refund text-right">£0.00</td>
                <td class="col-9 status text-right">Ordered</td>
            </tr>
            <tr>
                <td class="col-1 count text-center"><a href="#">2</a></td>
                <td class="col-2 order"><div class="order-number"><a href="#">12374629</a></div></td>
                <td class="col-3 date text-center">11/16/16</td>
                <td class="col-4 product"><span>Double Bottle Perm</span> <div class="highlight-tag highlight-1">Enhanced</div></td>
                <td class="col-5 formula">CW-03-20V</td>
                <td class="col-6 target">6½.0 (V4)</td>
                <td class="col-7 total text-right"><div class="flag uk"></div> £19.70</td>
                <td class="col-8 refund text-right">£0.00</td>
                <td class="col-9 status text-right">Shipped</td>
            </tr>
        </table>
    </div>
</section>