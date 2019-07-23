<div id="duplicateChargeModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="icon close" data-dismiss="modal">Close</div>
        <div class="modal-content">
            <h2 class="title">Duplicate Order & Charge</h2>

            <p style="margin-bottom: 20px;">
                This will duplicate the order exactly and <span class="strong">will charge the client.</span><br>
                Please review the details below before proceeding.
            </p>

            <h4 class="subtitle">Reason:</h4>
            <div class="form-group form-width-10" style="margin-top: 5px;">
                <select name="" class="form-control no-label" required="1" id="">
                    <option value="" disabled="" selected="">Lost Shipment</option>
                    <option value="1">Reason 1</option>
                    <option value="2">Reason 2</option>
                </select>    
            </div>

            <table class="orders-list" style="margin-top: 20px;">
                <tr>
                    <th class="col-1 product">Product</th>
                    <th class="col-2 qty text-center">QTY</th>
                    <th class="col-3 price text-right">Price</th>
                </tr>
                <tr>
                    <td class="col-1 product">Single Bottle Demi Treatment</td>
                    <td class="col-2 qty text-center">1</td>
                    <td class="col-3 price text-right">$20.00</td>
                </tr>
                <tr>
                    <td class="col-1 product">10 Volume Single Developer (new)</td>
                    <td class="col-2 qty text-center">1</td>
                    <td class="col-3 price text-right">$0.00</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="col-2 qty">
                        Subtotal<br>
                        Shipping<br>
                        Tax<br>
                        <span class="strong">Total</span>
                    </td>
                    <td class="col-3 text-right">
                        $20.00<br>
                        $0.00<br>
                        $0.00<br>
                        <span class="strong">$25.95</span>
                    </td>
                </tr>
            </table>

            <div class="checkbox-wrapper" style="margin-top: 0;">            
                <input type="checkbox" id="check-free-shipping" class="checkbox-radio">
                <label for="check-free-shipping">
                    <span class="check"></span>
                    Include Free Shipping
                </label>
            </div>

            <button class="cta-btn btn-mainBlue md">Create order</button>
            <a href="javascript:void(0)" class="cta-link" data-dismiss="modal">Cancel</a>
        </div>
    </div>
</div>
