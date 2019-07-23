<div id="addProductModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="icon close" data-dismiss="modal">Close</div>
        <div class="modal-content">
            <h2 class="title">Add product to order</h2>

            <fieldset class="form-width-7" style="margin-top: -10px;">
                <div class="form-group">
                    <select name="" class="form-control no-label" required="1" id="">
                        <option value="0">Collection - All</option>
                        <option value="1">Brow</option>
                        <option value="2">Color Care</option>
                        <option value="3">Color Enhancing</option>
                        <option value="4">Coloring Tools and Accessories</option>
                        <option value="5">Face and Body</option>
                        <option value="6">Misc</option>
                        <option value="7">Moisture</option>
                        <option value="8">Repair</option>
                        <option value="9">Smoothing</option>
                        <option value="10">Styling</option>
                        <option value="11">Styling Tools and Accessories</option>
                        <option value="12">Volume</option>
                    </select>    
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <select name="" class="form-control no-label" required="1" id="">
                        <option value="0" disabled selected>Product - Choose One</option>
                        <option value="1">Product 1</option>
                        <option value="2">Product 2</option>
                        <option value="3">Product 3</option>
                    </select>    
                </div>
          
                <div style="width: 165px;" class="pull-left">
                    <p class="subtitle">Frequency</p>
                    <div class="form-group" style="margin-top: 5px; margin-right: 10px;">
                        <select name="" class="form-control no-label" required="1" id="">
                            <option value="0">Single Order</option>
                            <option value="1">Auto Delivery</option>
                        </select>    
                    </div>
                </div>

                <div style="width: 45px; margin-right: 10px;" class="pull-left">
                    <p class="subtitle text-center">Qty</p>
                    <div class="form-group floating-label-form-group" style="margin-top: 5px;">
                        <input name="" type="text" class="form-control no-label text-center" required="1" placeholder="" value="1" maxlength="30" id="">                
                    </div>
                </div>

                <div style="width: 110px;" class="pull-right">
                    <p class="subtitle text-right">Adjust Price</p>
                    <div class="form-group price-adjust" style="margin-top: 5px;">
                        <input type="text" class="form-control no-label" onkeypress='return event.charCode >= 48 && event.charCode <= 57' pattern="\d*" value="14.95" placeholder="0.00">
                        <span class="currency">$</span>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="checkbox-wrapper" style="margin-top: 25px;">            
                    <input type="checkbox" id="check-dont-charge" class="checkbox-radio">
                    <label for="check-dont-charge">
                        <span class="check"></span>
                        Don't charge for this product
                    </label>
                </div>

                <hr>

                <p style="line-height: 28px;">
                    Subtotal: $0.00<br>
                    Tax: $0.00<br>
                    <span class="strong">Total: $0.00</span>
                </p>
            </fieldset>

            <button class="cta-btn btn-mainBlue md">Add item</button>
            <a href="javascript:void(0)" class="cta-link" data-dismiss="modal">Cancel</a>
        </div>
    </div>
</div>