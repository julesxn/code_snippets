<?php 
echo $this->element('admin_header');
?>

<div class="admin-user profile">

    <?php 
    echo $this->element('users/message_banner');
    echo $this->element('users/users_header');
    ?>

    <div class="top-content">
        <?php 
        echo $this->element('users/profile/order_history');
        ?>
    </div>

    <div class="middle-content">
        <div class="container column-wrapper">
            <div class="column">
                <?php 
                    echo $this->element('users/profile/communication');
                ?>
            </div>

            <div class="column width-sm">
                <?php 
                    echo $this->element('users/profile/future_note');
                ?>
            </div>
        </div>
    </div>

    <div class="bottom-content">
        <div class="container column-wrapper">
            <div class="column">
                <?php 
                    echo $this->element('users/profile/account_info');
                ?>
            </div>

            <div class="column width-sm">
                <?php 
                    echo $this->element('users/profile/user_tags');
                    echo $this->element('users/profile/user_credits');
                ?>
            </div>
        </div>
    </div>
</div>

<?php 
    echo $this->element('users/modals/retention_credit');
    echo $this->element('users/modals/reset_password');
    echo $this->element('users/modals/zendesk_ticket');
    echo $this->element('users/modals/add_future_note');
    echo $this->element('users/modals/add_account_note');
    echo $this->element('users/modals/filter_orders');
    echo $this->element('users/modals/duplicate_charge');
    echo $this->element('users/modals/duplicate');
?>

<script>
$('.edit-toggle').click(function(){
    $(this).parents('.info-header').fadeOut().addClass('hidden');
    $(this).parents().next('.info-body').fadeIn().removeClass('hidden');
});
$('.close, .cancel').click(function(){
    $(this).parents().prev('.info-header').fadeIn().removeClass('hidden');
    $(this).parents('.info-body').fadeOut().addClass('hidden');
});
$('.tag-delete').click(function(){
    $(this).parent().fadeOut();
});
$('.duplicate-charge').click(function() {
    $("#duplicateChargeModal").modal('show');
});
$('.duplicate-order').click(function() {
    $("#duplicateModal").modal('show');
});
</script>