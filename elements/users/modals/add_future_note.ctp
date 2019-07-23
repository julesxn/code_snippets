<div id="futureNoteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="icon close" data-dismiss="modal">Close</div>
        <div class="modal-content">
            <h2 class="title">Add future note to...</h2>

            <p class="subtitle" style="margin: 20px 0 5px;">Note Type:</p>
            <ul class="radio-btn sm">
                <li>
                    <input type="radio" name="note_type" id="check-current-order" checked="checked">
                    <label for="check-current-order">
                        <span class="radio"></span>
                        Current / next order
                    </label>
                </li>
                <li>
                    <input type="radio" name="note_type" id="check-all-orders">
                    <label for="check-all-orders">
                        <span class="radio"></span>
                        All orders
                    </label>
                </li>
            </ul>

            <p class="subtitle" style="margin: 20px 0 5px;">Step:</p>
            <ul class="radio-btn sm">
                <li>
                    <input type="radio" name="note_step" id="check-qa">
                    <label for="check-qa">
                        <span class="radio"></span>
                        QA
                    </label>
                </li>
                <li>
                    <input type="radio" name="note_step" id="check-sourcing" checked="checked">
                    <label for="check-sourcing">
                        <span class="radio"></span>
                        Sourcing
                    </label>
                </li>
            </ul>

            <div class="form-group floating-label-form-group form-width-9" style="margin-top: 25px;">
                <label>YOUR NOTE</label>
                <textarea class="form-control" placeholder="Add new note" rows="4"></textarea>
            </div>

            <button class="cta-btn btn-mainBlue md">Save note</button>
            <a href="javascript:void(0)" class="cta-link" data-dismiss="modal">Cancel</a>
        </div>
    </div>
</div>