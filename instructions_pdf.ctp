<?php
echo $this->Cdn->css('/css/instructions.css');
echo $this->Cdn->css('/css/print/print_instructions_pdf.css');
?>

<div class="container" id="personalized-instructions" style="-webkit-print-color-adjust:exact;">

    <div class="custom-color"> 

        <div class="print_pg front">
            <div class="page-title block top">
                <div class="bg">
                    <div class="content-box">
                        <h1 class='title'><?php echo $data['header']['cover_name']; ?></h1>
                        <h2><?php echo $data['header']['cover_title']; ?></h2>
                        <div class="client-info">
                            <table>
                                <tr>
                                    <td>
                                        <p>
                                            <span><?php echo $data['header']['custom_color_label']; ?></span><br>
                                            <?php echo $data['header']['custom_color']; ?>
                                        </p>
                                        <p>
                                            <span><?php echo $data['header']['technique_label']; ?></span><br>
                                            <?php echo $data['header']['technique']; ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <span><?php echo $data['header']['order_number_label']; ?></span>
                                            <?php echo $data['header']['order_number']; ?>
                                        </p>
                                        <p>
                                            <span><?php echo $data['header']['prepared_on_label']; ?></span>
                                            <?php echo $data['header']['prepared_on']; ?>
                                        </p>
                                        <p>
                                            <span><?php echo $data['header']['your_colorist_label']; ?></span>
                                            <?php echo $data['header']['colorist']; ?>
                                        </p>
                                    </td>
                                <tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="block middle">
                    <section class="guide-list">
                        <h2 class="title"><?php echo $data['quick_guide']['title']; ?></h2>
                        <p><?php echo $data['quick_guide']['subcopy']; ?></p>
                        <ul><?php foreach ($data['quick_guide']['list'] as $li) { ?>
                            <li>
                                <h4 class="col col-1 subhead"><?php echo $li['subhead']; ?></h4>
                                <p class="col col-2"><?php echo $li['copy']; ?></p>
                            </li>
                        <?php } ?>
                        </ul>
                        <div class="qr-code"><?php echo $data['header']['barcode_svg']; ?></div>
                        <div class="clearfix"></div>
                    </section>
                </div>

                <div class="block bottom">
                    <section class="color-info hiddennot">
                        <table>
                            <tr>
                                <td class="col-1">
                                    <h3 class="subtitle"><?php echo $data['whats_in_your_kit']['title']; ?></h3>
                                    
                                    <ul class="bullet">
                                        <li><?php echo $data['whats_in_your_kit']['subcopy']; ?></li>
                                        <li>
                                            <?php echo $data['whats_in_your_kit']['subtitle']; ?>
                                            <ul class="bullet kit-items"><?php foreach($data['whats_in_your_kit']['items'] as $i) { ?>
                                                <li><?php echo $i; ?></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                    </ul>

                                    <?php if ($data['whats_in_your_kit']['bonus']) { ?>
                                    <h4 class="subhead"><?php echo $data['whats_in_your_kit']['bonus_title']; ?></h4>
                                    <p><?php echo $data['whats_in_your_kit']['bonus']; ?></p>
                                    <?php } ?>
                                </td>

                                <td class="col-2">
                                    <h3 class="subtitle"><?php echo $data['your_blend']['title']; ?></h3>
                                   
                                    <div class="color-chart">
                                        <p>
                                            <?php echo ($data['your_blend']['num_of_bottles'] == 2) ? $data['your_blend']['bottle_1']['name'] : ''; ?>
                                            <?php echo $data['your_blend']['bottle_1']['dye_type']; ?>
                                        </p>
                                        <p><?php echo $data['your_blend']['bottle_1']['formula_id']; ?></p>
                                        <ul class="color-list">
                                            <?php foreach($data['your_blend']['bottle_1']['colors'] as $c) { ?>
                                                <li><span class="color" style="background-color:<?php echo $c['hex']; ?>;"></span><?php echo $c['name']; ?></li>
                                            <?php } ?>
                                        </ul>
                                        <div id="color-wheel-1-6587809" class="chart">
                                            <div class="color-text"><?php echo $data['your_blend']['bottle_1']['developer']; ?>V</div> 

                                            <svg width="38px" height="38px" viewBox="0 0 38 38" class="donut">
                                                <circle class="donut-hole" cx="19" cy="19" r="15.91549430918954" fill="#fff"></circle>
                                                <circle class="donut-ring" cx="19" cy="19" r="15.91549430918954" fill="transparent" stroke="#d2d3d4" stroke-width="6"></circle>
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
                                            <svg width="38px" height="38px" viewBox="0 0 38 38" class="donut">
                                                <circle class="donut-hole" cx="19" cy="19" r="15.91549430918954" fill="#fff"></circle>
                                                <circle class="donut-ring" cx="19" cy="19" r="15.91549430918954" fill="transparent" stroke="#d2d3d4" stroke-width="6"></circle>
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
                                        <?php if (!empty($data['your_blend']['adjustments'])) { ?>
                                            <h4 class="subhead"><?php echo $data['your_blend']['adjustments']['title']; ?></h4>
                                            <p class="highlight"><?php echo $data['your_blend']['adjustments']['tags_string']; ?></p>
                                        <?php } ?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </section>

                    <!-- <section class="color-info ingredients hidden">
                        <table>
                            <tr>
                                <td class="col-1">
                                    <h3 class="subtitle t-your-set"><span><?php echo $data['whats_in_your_kit']['title']; ?></span></h3>
                                    <div class="whats-in-kit">
                                        <p style="margin-bottom: 10px;"><?php echo $data['whats_in_your_kit']['subcopy']; ?></p>
                                        <p><?php echo $data['whats_in_your_kit']['subtitle']; ?></p>
                                        <ul class="bullet kit-items"><?php foreach($data['whats_in_your_kit']['items'] as $i) { ?>
                                                <li><?php echo $i; ?></li>
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
                                    <?php if ($data['your_blend']['num_of_bottles'] == 1) { ?>
                                        <div class="color-chart">
                                            <p class="bottle-type">
                                                <?php echo $data['your_blend']['bottle_1']['name']; ?>
                                                <?php echo $data['your_blend']['bottle_1']['dye_type']; ?>
                                            </p>
                                            <p class="formula">
                                                <?php echo $data['your_blend']['bottle_1']['formula_id']; ?>
                                            </p>
                                            <ul class="color-list"><?php foreach($data['your_blend']['bottle_1']['colors'] as $c) { ?>
                                                    <li><span class="color" style="background-color:<?php echo $c['hex']; ?>;"></span><?php echo $c['name']; ?></li>
                                                <?php } ?>
                                            </ul>
                                            <div class="chart">
                                                <div class="color-text"><?php echo $data['your_blend']['bottle_1']['developer']; ?>V</div>
                                                <svg width="38px" height="38px" viewBox="0 0 38 38" class="donut">
                                                    <circle class="donut-hole" cx="19" cy="19" r="15.91549430918954" fill="#fff"></circle>
                                                    <circle class="donut-ring" cx="19" cy="19" r="15.91549430918954" fill="transparent" stroke="#d2d3d4" stroke-width="6"></circle>
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
                                    <?php } elseif ($data['your_blend']['num_of_bottles'] == 2) { ?>
                                        <p class="formula">
                                            <?php echo $data['your_blend']['bottle_1']['formula_id']; ?>
                                        </p>
                                        <div class="color-chart">
                                            <div class="bottle-1 pull-left">
                                                <p class="bottle-type">
                                                    <?php echo $data['your_blend']['bottle_1']['name']; ?>:<br>
                                                    <?php echo $data['your_blend']['bottle_1']['dye_type']; ?>
                                                </p>
                                                <ul class="color-list"><?php foreach($data['your_blend']['bottle_1']['colors'] as $c) { ?>
                                                        <li><span class="color" style="background-color:<?php echo $c['hex']; ?>;"></span><?php echo $c['name']; ?></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                            <div class="bottle-2 pull-right">
                                                <p class="bottle-type">
                                                    <?php echo $data['your_blend']['bottle_2']['name']; ?>:<br>
                                                    <?php echo $data['your_blend']['bottle_2']['dye_type']; ?>
                                                </p>
                                                <ul class="color-list"><?php foreach($data['your_blend']['bottle_2']['colors'] as $c) { ?>
                                                        <li><span class="color" style="background-color:<?php echo $c['hex']; ?>;"></span><?php echo $c['name']; ?></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                   <?php } ?>
                                    <div class="adjustments">
                                        <?php if (!empty($data['your_blend']['adjustments'])) { ?>
                                            <h4 class="subhead"><?php echo $data['your_blend']['adjustments']['title']; ?></h4>
                                            <p class="highlight"><?php echo $data['your_blend']['adjustments']['tags_string']; ?></p>
                                        <?php } ?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="copy">
                            <p class="strong"><?php echo $data['your_blend']['bottle_1']['ingredients_label']; ?></p>
                            <p><?php echo $data['your_blend']['bottle_1']['ingredients']; ?></p>
                            <?php if (!empty($data['your_blend']['bottle_2']['ingredients'])) { ?>
                            <p class="strong" style="margin-top: 5pt;"><?php echo $data['your_blend']['bottle_2']['ingredients_label']; ?></p>
                            <p><?php echo $data['your_blend']['bottle_2']['ingredients']; ?></p>
                            <?php } ?>
                        </div>
                    </section> -->
                </div>
            </div>
        </div>

        <div class="print_pg back">
            <div class="content">
                <section class="step-by-step">
                    <h2 class="title col-2"><?php echo $data['header']['cover_name_oneline']; ?></h2>

                    <?php foreach($data['step_by_step']['steps'] as $s) { ?>
                    <div class="step">
                        <h4 class="subhead highlight-tag col-2"><?php echo $s['name']; ?></h4>
                        <table>
                            <tr>
                                <td class="col-1">
                                    <div class="hair-color-icon <?php echo $s['icon']; ?>">
                                        <img class="img-responsive" src="/images/2018/instructions/print/color/print_box_<?php echo $s['icon']; ?>.jpg">
                                    </div>
                                </td>
                                <td class="col-2">
                                    <?php foreach($s['pro_tips'] as $tip) { ?>
                                    <p class="tip"><?php echo $tip; ?></p>
                                    <?php } ?>
                                    
                                    <!-- <?php if (!empty($s['pro_tips'])) { ?><hr /><?php } ?> -->

                                    <ul class="bullet">
                                        <?php foreach($s['sub_steps'] as $sub) { ?>
                                            <li class="<?php echo !empty($sub['class']) ? $sub['class'] : ''; ?>">
                                                <?php if ($sub['minutes'] > 0) { ?>
                                                    <?php echo $sub['text']; ?>
                                                    <div class="minutes"><p><?php echo $sub['minutes']; ?> Min</p></div>
                                                <?php } else { ?>
                                                    <?php echo $sub['text']; ?>
                                                <?php } ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <?php } ?>
                </section>
                <p class="info"><?php echo $data['footer']['print']; ?></p>
            </div> 
        </div>
    </div>
</div>