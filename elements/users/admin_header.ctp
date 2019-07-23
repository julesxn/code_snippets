<header class="global-header" id="admin-header">
    <nav class="container" role="navigation">

        <a href="javascript:void(0)" class="menu-nav-wrapper">
            <svg class="nav-menu"><path fill="#fff" d="M24 18v1h-24v-1h24zm0-6v1h-24v-1h24zm0-6v1h-24v-1h24z">Menu</path></svg>
        </a>
        
        <div class="title">admin <span class="strong">Color + Care Team</span></div> 
    </nav>
</header>


<?php 
echo $this->element('admin_menu_panel');
?>

<script src="/js/slideMenu.js" type="text/javascript"></script>
<script>
    var slideLeft = new Menu({
        wrapper:         '.menu-nav-wrapper',
        type:            'slide-left',
        menuOpenerClass: '.nav-menu',
        maskId:          '#menu-overlay-nav'
    });
    $('.nav-menu').on('click', function (e) {
        e.preventDefault;
        slideLeft.open();
    });
</script>