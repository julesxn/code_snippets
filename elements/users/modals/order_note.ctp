<div id="orderNoteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="icon close" data-dismiss="modal">Close</div>
        <div class="modal-content">
            <h2 class="title">Add order note</h2>

            <fieldset class="form-width-9" style="margin-top: -10px">
                <div class="form-group">
                    <select name="" class="form-control no-label" required="1" id="">
                        <option value="0" disabled="" selected="">Choose macro</option>
                        <option value="1">Adjusted Date</option>
                        <option value="2">Adjusted Frequency</option>
                        <option value="3">Adjusted Formula</option>
                        <option value="4">Added Product (Charge)</option>
                        <option value="5">Added Product (No Charge)</option>
                        <option value="6">Removed Product</option>
                        <option value="7">Updated Customer Address</option>
                        <option value="8">Updated Customer Phone Number</option>
                        <option value="9">CHPR</option>
                        <option value="10">CDNLC</option>
                        <option value="11">LTP</option>
                        <option value="12">Confirm Darker</option>
                        <option value="13">Confirm Virgin</option>
                        <option value="14">Left Voicemail</option>
                        <option value="15">Cancelled AD</option>
                        <option value="16">Per Call</option>
                        <option value="17">Per Email</option>
                        <option value="18">Per Chat</option>
                        <option value="19">Per Comment</option>
                    </select>    
                </div>

                <div class="form-group floating-label-form-group">
                    <label>YOUR NOTE</label>
                    <textarea class="form-control" placeholder="Add new note" rows="4"></textarea>
                </div>

                <div class="checkbox-wrapper">            
                    <input type="checkbox" id="check-copy-to-account" class="checkbox-radio">
                    <label for="check-copy-to-account">
                        <span class="check"></span>
                        Copy to Account notes
                    </label>
                </div>
            </fieldset>
            <button class="cta-btn btn-mainBlue md">Confirm</button>
            <a href="javascript:void(0)" class="cta-link" data-dismiss="modal">Cancel</a>
        </div>
    </div>
</div>