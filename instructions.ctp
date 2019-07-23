<?php
echo $this->Cdn->css('/css/instructions.css');
echo $this->Cdn->css('/css/print/print_instructions.css');
?>

<div class="user-account container" id="personalized-instructions">
    <?php echo $this->element('account/header'); ?>

    <ul class="file-options">
        <li class="hidden-xs"><a href="/instructions/color_pdf/<?php echo $last_order_number; ?>" target="_blank"><span class="icon pdf"></span> <?php echo $data['header']['pdf']; ?></a></li>
        <li><a href="javascript:window.print()"><span class="icon printer"></span> <?php echo $data['header']['print']; ?></a></li>
    </ul>

    <div class="pull-left body-wrapper custom-color">
        <?php if ($this->request->action !== 'instructions') { ?>
        <nav class="account-breadcrumb hidden-xs">
                <a href="/my_account/tutorials/">&#60; <?php echo __d('my-account', 'How-To Videos'); ?></a>
        </nav>
        <?php } ?>

        <div class="page-title">
            <h1 class="title"><?php echo $data['header']['title']; ?></h1>
            <p><?php echo $data['header']['subcopy']; ?></p>
        </div>

        <div class="client-info-wrapper hidden-xs">
            <ul class="client-info">
                <li>
                    <p class="subtitle"><?php echo $data['header']['order_number_label']; ?></p>
                    <h3><?php echo $data['header']['order_number']; ?></h3>
                </li>
                <li>
                    <p class="subtitle"><?php echo $data['header']['prepared_on_label']; ?></p>
                    <h3><?php echo $data['header']['prepared_on']; ?></h3>
                </li>
                <li>
                    <p class="subtitle"><?php echo $data['header']['your_colorist_label']; ?></p>
                    <h3>
                        <?php if ($data['header']['colorist'] == '-') { ?>
                        eSalon Team
                        <?php } else { ?>
                            <?php echo $data['header']['colorist']; ?>
                        <?php } ?>
                    </h3>
                </li>
                <li>
                    <p class="subtitle"><?php echo $data['header']['technique_label']; ?></p>
                    <h3><?php echo $data['header']['technique']; ?></h3>
                </li>
                <li>
                    <p class="subtitle"><?php echo $data['header']['custom_color_label']; ?></p>
                    <h3><?php echo $data['header']['custom_color']; ?></h3>
                </li>
            </ul>
        </div>

        <div class="content">
            <div class="hidden-xs">
                <section class="guide-list content-wrapper">
                    <div class="section-wrapper">
                        <h2 class="title"><?php echo $data['quick_guide']['title']; ?></h2>
                        <p><?php echo __d('my-account', 'It all starts here. Your full instructions will show you the ropes step by step, but here’s a quick roundup of main tips to follow:'); ?></p>
                        <ul>
                            <?php foreach ($data['quick_guide']['list'] as $index => $list_item) {  ?>
                            <li>
                                <h4 class="col col-1 subhead"><?php echo $list_item['subhead']; ?></h4>
                                <p class="col col-2"><?php echo $list_item['copy']; ?></p>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>

                 <section class="step-by-step">
                    <div class="section-wrapper">
                        <h2 class="title"><?php echo $data['step_by_step']['title']; ?></h2>
                        
                        <?php foreach ($data['step_by_step']['steps'] as $index => $step) {  ?>
                        <div class="step">
                            <h4 class="subhead highlight-tag"><?php echo $step['name']; ?></h4>
                            <table>
                                <tr>
                                    <td class="col-1">
                                        <div class="hair-color-icon <?php echo $step['icon']; ?>">
                                            <img src="/images/2018/instructions/color/color_<?php echo $step['icon']; ?>.png" srcset="/images/2018/instructions/color/color_<?php echo $step['icon']; ?>@2x.png 2x, /images/2018/instructions/color/color_<?php echo $step['icon']; ?>@3x.png 3x">
                                        </div>
                                    </td>
                                    <td class="col-2">
                                        <?php foreach ($step['pro_tips'] as $index => $tip) {  ?>
                                            <p class="tip"><?php echo $tip?></p><hr>
                                        <?php } ?>

                                        <ul class="bullet">
                                            <?php foreach ($step['sub_steps'] as $index => $step_list) {  ?>
                                                <li><?php echo $step_list['text']; ?></li>
                                            <?php } ?>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <?php } ?>
                    </div>
                    <p class="info print info-print"><?php echo $data['footer']['print']; ?></p>
                </section>

                <section class="color-info">
                    <table>
                        <tr>
                            <td class="col-1">
                                <h3 class="subtitle t-your-set">
                                    <?php echo $data['whats_in_your_kit']['title']; ?>
                                </h3>
                                <div class="whats-in-kit">
                                    <p style="margin-bottom: 10px;">
                                        <?php echo $data['whats_in_your_kit']['subcopy']; ?>
                                    </p>
                                    <p><?php echo $data['whats_in_your_kit']['subtitle']; ?></p>
                                    <ul class="bullet kit-items">
                                        <?php foreach ($data['whats_in_your_kit']['items'] as $index => $kit_item) {  ?>
                                            <li><?php echo $kit_item; ?></li>
                                        <?php } ?>
                                    </ul>

                                    <?php if ($data['whats_in_your_kit']['bonus']) { ?>
                                    <h4 class="subhead"><?php echo $data['whats_in_your_kit']['bonus_title']; ?></h4>
                                    <p><?php echo $data['whats_in_your_kit']['bonus']; ?></p>
                                    <?php } ?>
                                </div>
                            </td>

                            <td class="col-2">
                                <h3 class="subtitle t-your-blend"><?php echo $data['your_blend']['title']; ?></h3>
                                
                                <div class="color-chart bottle-1">
                                    <p class="bottle-type">
                                        <?php echo $data['your_blend']['bottle_1']['name']; ?> <?php echo $data['your_blend']['bottle_1']['dye_type']; ?>
                                    </p>
                                    <p class="formula"><?php echo $data['your_blend']['bottle_1']['formula_id']; ?></p>
                                    <ul class="color-list">
                                        <?php foreach ($data['your_blend']['bottle_1']['colors'] as $index => $color) {  ?>
                                            <li><span class="color" style="background-color:<?php echo $color['hex']; ?>;"></span><?php echo $color['name']; ?></li>
                                        <?php } ?>
                                    </ul>
                                    <div class="chart">
                                        <div class="color-text"><?php echo $data['your_blend']['bottle_1']['developer']; ?>V</div>

                                            <svg width="140px" height="140px" viewBox="0 0 38 38" class="donut">
                                                <circle class="donut-hole" cx="70" cy="70" r="15.91549430918954" fill="#fff"></circle>
                                                <circle class="donut-ring" cx="70" cy="70" r="15.91549430918954" fill="transparent" stroke="#d2d3d4" stroke-width="6"></circle>
                                                <?php
                                                $offset = 25;
                                                foreach (array_reverse($data['your_blend']['bottle_1']['colors']) as $c) {
                                                    ?>
                                                    <circle class="donut-segment" cx="19" cy="19" r="15.91549430918954"
                                                            fill="transparent" stroke="<?php echo $c['hex']; ?>"
                                                            stroke-width="6"
                                                            stroke-dasharray="<?php echo $c['percent']; ?> <?php echo 100 - $c['percent']; ?>"
                                                            stroke-dashoffset="<?php echo $offset; ?>"></circle>
                                                    <?php
                                                    $offset = $offset + (100 - $c['percent']);
                                                }
                                                ?>
                                            </svg>
                                    </div>
                                </div>

                                <?php if ($data['your_blend']['num_of_bottles'] == 2) { ?>
                                <div class="color-chart">
                                    <p>
                                        <?php echo $data['your_blend']['bottle_2']['name']; ?>
                                        <?php echo $data['your_blend']['bottle_2']['dye_type']; ?>
                                    </p>
                                    <ul class="color-list">
                                        <?php foreach($data['your_blend']['bottle_2']['colors'] as $c) { ?>
                                            <li><span class="color" style="background-color:<?php echo $c['hex']; ?>;"></span><?php echo $c['name']; ?></li>
                                        <?php } ?>
                                    </ul>
                                    <div id="color-wheel-1-6587809" class="chart">
                                        <div class="color-text"><?php echo $data['your_blend']['bottle_2']['developer']; ?>V</div>
                                        <svg width="140px" height="140px" viewBox="0 0 38 38" class="donut">
                                            <circle class="donut-hole" cx="70" cy="70" r="15.91549430918954" fill="#fff"></circle>
                                            <circle class="donut-ring" cx="70" cy="70" r="15.91549430918954" fill="transparent" stroke="#d2d3d4" stroke-width="6"></circle>
                                            <?php
                                            $offset = 25;
                                            foreach (array_reverse($data['your_blend']['bottle_2']['colors']) as $c) {
                                                ?>
                                                <circle class="donut-segment" cx="19" cy="19" r="15.91549430918954"
                                                        fill="transparent" stroke="<?php echo $c['hex']; ?>"
                                                        stroke-width="6"
                                                        stroke-dasharray="<?php echo $c['percent']; ?> <?php echo 100 - $c['percent']; ?>"
                                                        stroke-dashoffset="<?php echo $offset; ?>"></circle>
                                                <?php
                                                $offset = $offset + (100 - $c['percent']);
                                            }
                                            ?>
                                        </svg>
                                    </div>
                                </div>
                                <?php } ?>

                                <div class="adjustments">
                                    <h4 class="subhead"><?php echo $data['your_blend']['adjustments']['title']; ?></h4>
                                    <p class='highlight'><?php echo $data['your_blend']['adjustments']['tags_string']; ?></p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </section>
            </div>

            <div class="visible-xs">
                <ul class="panel-group" id="accordion">
                    <li class="panel">
                        <a class="panel-heading caret-toggle2 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            <h2><?php echo $data['quick_guide']['title']; ?></h2>
                        </a>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body guide-list-panel">
                                <p><?php echo __d('my-account', 'It all starts here. Your full instructions will show you the ropes step by step, but here’s a quick roundup of main tips to follow:'); ?></p>
                                <ul>
                                    <?php foreach ($data['quick_guide']['list'] as $index => $list_item) {  ?>
                                    <li>
                                        <h4 class="col col-1 subhead"><?php echo $list_item['subhead']; ?></h4>
                                        <p class="col col-2"><?php echo $list_item['copy']; ?></p>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                
                    <li class="panel">
                        <a class="panel-heading caret-toggle2 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            <h2><?php echo $data['step_by_step']['title_mobile']; ?></h2>
                        </a>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body step-by-step-panel">
                                <?php foreach ($data['step_by_step']['steps'] as $index => $step) {  ?>
                                <div class="step">
                                    <h4 class="subhead highlight-tag"><?php echo $step['name']; ?></h4>
                                  
                                    <div class="hair-color-icon <?php echo $step['icon']; ?>">
                                        <img src="/images/2018/instructions/color/color_<?php echo $step['icon']; ?>.png" srcset="/images/2018/instructions/color/color_<?php echo $step['icon']; ?>@2x.png 2x, /images/2018/instructions/color/color_<?php echo $step['icon']; ?>@3x.png 3x">
                                    </div>

                                    <?php foreach ($step['pro_tips'] as $index => $tip) {  ?>
                                        <p class="tip"><?php echo $tip?></p><hr>
                                    <?php } ?>

                                    <ul class="bullet">
                                        <?php foreach ($step['sub_steps'] as $index => $step_list) {  ?>
                                            <li><?php echo $step_list['text']; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </li>

                    <li class="panel">
                        <a class="panel-heading caret-toggle2 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            <h2><?php echo $data['whats_in_your_kit']['title']; ?></h2>
                        </a>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="whats-in-kit">
                                    <p style="margin-bottom: 10px;">
                                        <?php echo $data['whats_in_your_kit']['subcopy']; ?>
                                    </p>
                                    <p><?php echo $data['whats_in_your_kit']['subtitle']; ?></p>
                                    <ul class="bullet kit-items">
                                        <?php foreach ($data['whats_in_your_kit']['items'] as $index => $kit_item) {  ?>
                                            <li><?php echo $kit_item; ?></li>
                                        <?php } ?>
                                    </ul>
                                    <?php if ($data['whats_in_your_kit']['bonus']) { ?>
                                    <h4 class="subhead"><?php echo $data['whats_in_your_kit']['bonus_title']; ?></h4>
                                    <p><?php echo $data['whats_in_your_kit']['bonus']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="panel">
                        <a class="panel-heading caret-toggle2 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            <h2><?php echo $data['your_blend']['title']; ?></h2>
                        </a>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="color-chart bottle-1">
                                    <p class="bottle-type">
                                        <?php echo $data['your_blend']['bottle_1']['name']; ?> <?php echo $data['your_blend']['bottle_1']['dye_type']; ?>
                                    </p>
                                    <p class="formula"><?php echo $data['your_blend']['bottle_1']['formula_id']; ?></p>
                                    <ul class="color-list">
                                        <?php foreach ($data['your_blend']['bottle_1']['colors'] as $index => $color) {  ?>
                                            <li><span class="color" style="background-color:<?php echo $color['hex']; ?>;"></span><?php echo $color['name']; ?></li>
                                        <?php } ?>
                                    </ul>
                                    <div class="chart">
                                        <div class="color-text"><?php echo $data['your_blend']['bottle_1']['developer']; ?>V</div>
                                        <svg width="140px" height="140px" viewBox="0 0 38 38" class="donut">
                                            <circle class="donut-hole" cx="70" cy="70" r="15.91549430918954" fill="#fff"></circle>
                                            <circle class="donut-ring" cx="70" cy="70" r="15.91549430918954" fill="transparent" stroke="#d2d3d4" stroke-width="6"></circle>
                                            <?php
                                            $offset = 25;
                                            foreach (array_reverse($data['your_blend']['bottle_1']['colors']) as $c) {
                                                ?>
                                                <circle class="donut-segment" cx="19" cy="19" r="15.91549430918954"
                                                        fill="transparent" stroke="<?php echo $c['hex']; ?>"
                                                        stroke-width="6"
                                                        stroke-dasharray="<?php echo $c['percent']; ?> <?php echo 100 - $c['percent']; ?>"
                                                        stroke-dashoffset="<?php echo $offset; ?>"></circle>
                                                <?php
                                                $offset = $offset + (100 - $c['percent']);
                                            }
                                            ?>
                                        </svg>
                                    </div>
                                </div>

                                <?php if ($data['your_blend']['num_of_bottles'] == 2) { ?>
                                <div class="color-chart">
                                    <p>
                                        <?php echo $data['your_blend']['bottle_2']['name']; ?>
                                        <?php echo $data['your_blend']['bottle_2']['dye_type']; ?>
                                    </p>
                                    <ul class="color-list">
                                        <?php foreach($data['your_blend']['bottle_2']['colors'] as $c) { ?>
                                            <li><span class="color" style="background-color:<?php echo $c['hex']; ?>;"></span><?php echo $c['name']; ?></li>
                                        <?php } ?>
                                    </ul>
                                    <div id="color-wheel-1-6587809" class="chart">
                                        <div class="color-text"><?php echo $data['your_blend']['bottle_2']['developer']; ?>V</div>
                                        <svg width="140px" height="140px" viewBox="0 0 38 38" class="donut">
                                            <circle class="donut-hole" cx="70" cy="70" r="15.91549430918954" fill="#fff"></circle>
                                            <circle class="donut-ring" cx="70" cy="70" r="15.91549430918954" fill="transparent" stroke="#d2d3d4" stroke-width="6"></circle>
                                            <?php
                                            $offset = 25;
                                            foreach (array_reverse($data['your_blend']['bottle_2']['colors']) as $c) {
                                                ?>
                                                <circle class="donut-segment" cx="19" cy="19" r="15.91549430918954"
                                                        fill="transparent" stroke="<?php echo $c['hex']; ?>"
                                                        stroke-width="6"
                                                        stroke-dasharray="<?php echo $c['percent']; ?> <?php echo 100 - $c['percent']; ?>"
                                                        stroke-dashoffset="<?php echo $offset; ?>"></circle>
                                                <?php
                                                $offset = $offset + (100 - $c['percent']);
                                            }
                                            ?>
                                        </svg>
                                    </div>
                                </div>
                                <?php } ?>

                                <div class="adjustments">
                                    <h4 class="subhead"><?php echo $data['your_blend']['adjustments']['title']; ?></h4>
                                    <p class='highlight'><?php echo $data['your_blend']['adjustments']['tags_string']; ?></p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="panel">
                        <a class="panel-heading caret-toggle2 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                            <h2><?php echo $data['header']['heading_mobile']; ?></h2>
                        </a>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="client-info">
                                    <li>
                                        <p class="subtitle"><?php echo $data['header']['order_number_label']; ?></p>
                                        <h3><?php echo $data['header']['order_number']; ?></h3>
                                    </li>
                                    <li>
                                        <p class="subtitle"><?php echo $data['header']['prepared_on_label']; ?></p>
                                        <h3><?php echo $data['header']['prepared_on']; ?></h3>
                                    </li>
                                    <li>
                                        <p class="subtitle"><?php echo $data['header']['your_colorist_label']; ?></p>
                                        <h3>
                                            <?php if ($data['header']['colorist'] == '-') { ?>
                                            eSalon Team
                                            <?php } else { ?>
                                                <?php echo $data['header']['colorist']; ?>
                                            <?php } ?>
                                        </h3>
                                    </li>
                                    <li>
                                        <p class="subtitle"><?php echo $data['header']['technique_label']; ?></p>
                                        <h3><?php echo $data['header']['technique']; ?></h3>
                                    </li>
                                    <li>
                                        <p class="subtitle"><?php echo $data['header']['custom_color_label']; ?></p>
                                        <h3><?php echo $data['header']['custom_color']; ?></h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <p class="info info-online"><?php echo $data['footer']['online']; ?></p>
        </div>
    </div>
</div>