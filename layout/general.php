<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * Theme version info
 *
 * @package    theme
 * @subpackage sharp
 * @copyright � 2012 - 2013 | 3i Logic (Pvt) Ltd.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$haslogo = (!empty($PAGE->theme->settings->logo));
$hassidepost = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-post', $OUTPUT));
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));
$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));
$bodyclasses = array();
if ($showsidepost) {
    $bodyclasses[] = 'side-post-only';
} else if (!$showsidepost) {
    $bodyclasses[] = 'content-only';
}
if (!empty($PAGE->theme->settings->tagline)) {
    $tagline = $PAGE->theme->settings->tagline;
} else {
    $tagline = "";
}
if ($hascustommenu) {
    $bodyclasses[] = 'has_custom_menu';
}
if (!empty($PAGE->theme->settings->footertext)) {
    $footnote = $PAGE->theme->settings->footertext;
} else {
    $footnote = '<!-- There was no custom footnote set -->';
}
echo $OUTPUT->doctype()
?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
    <head>
        <title><?php echo $PAGE->title ?></title>
        <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme') ?>" />
        <?php echo $OUTPUT->standard_head_html() ?>
        <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>
    <body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses . ' ' . join(' ', $bodyclasses)) ?>">
        <?php echo $OUTPUT->standard_top_of_body_html() ?>
        <div id="page">
            <?php if ($hasheading || $hasnavbar) { ?>
                <div id="page-wrap1">
                    <div id="page-wrap2">
                        <div id="wrapper" class="clearfix">
                            <!-- START OF HEADER -->
                               <header id="page-header">
                    <div class="container">
                        <div id="page-header-wrapper" class="wrapper clearfix">
                            <div id="headermenus" class="clearfix">
                                <div class="col-md-6 col-sm-6">
                                    <?php if ($hascustommenu) { ?>
                                    <div id="custommenu"><?php echo $custommenu; ?></div>
                                    <?php } else {
                                        ?>
                                    <div id="custommenu" style="line-height:1em;">&nbsp;</div>
                                    <!-- temporary until I find a better fix -->
                                    <?php }
                                    ?>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="headermenu clearfix">
                                        <?php
                                        echo $OUTPUT->lang_menu();
                                        echo $OUTPUT->login_info();
                                        echo $PAGE->headingmenu;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="clearfix">&nbsp;</div>
                            <!-- END OF HEADER -->
                        <?php }
                        ?>
                        <!-- START OF CONTENT -->
                        <div id="page-content-wrapper" class="wrapper clearfix">
                            <div id="page-content" class="container">
                                <div id="region-main-box">
                                    <div id="region-post-box">
                                    <div id="region-main-wrap" class="col-md-9 zero-padding">
                                       
                                            <div id="region-main">
                                                <div class="region-content">
                                                    <div id="region-header" class="inside">
                                                        <?php
                                                        if ($haslogo) {
                                    //echo html_writer::link(new moodle_url('/'), "<img src='" . (!empty($PAGE->theme->setting_file_url('logo', 'logo'))) . "' alt='logo' />");
									?>
									<a href="<?php echo $CFG->wwwroot; ?>">
							<img alt="Logo" src="<?php echo $PAGE->theme->setting_file_url('logo', 'logo') ?>">
						</a>
                        <p class="tagline"><?php echo $tagline ?></p>
									<?php
                                } else {
                                    ?>
                                    <a href="<?php echo $CFG->wwwroot; ?>">
							<img src="<?php echo $OUTPUT->pix_url('logo', 'theme'); ?>" alt="Logo" />
						</a>
                        <p class="tagline"><?php echo $tagline ?></p>
                                    <?php
                                }
                                                        ?>
                                                    </div>
                                                    <?php if ($hasnavbar) { ?>
                                                        <div class="navbar">
                                                            <div class="wrapper clearfix">
                                                                <div class="breadcrumb">
                                                                    <?php echo $OUTPUT->navbar(); ?>
                                                                </div>
                                                                <div class="navbutton">
                                                                    <?php echo $PAGE->button; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <?php echo core_renderer::MAIN_CONTENT_TOKEN ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($hassidepost) { ?>
                                             <div id="region-post" class="col-md-3 zero-padding">
                                                <div id="region-post-wrap-1">
                                                    <div id="region-post-wrap-2">
                                                        <div class="region-content">
                                                            <?php echo $OUTPUT->blocks_for_region('side-post') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF CONTENT -->
                        <?php if ($hasheading || $hasnavbar) { ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- START OF FOOTER -->
            <?php if ($hasfooter) { ?>
                <div id="page-footer" class="wrapper">
                    <?php echo $footnote ?>
                    <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p>
                    <?php
                    echo $OUTPUT->login_info();
                    echo $OUTPUT->home_link();
                    echo $OUTPUT->standard_footer_html();
                    ?>
                </div>
            <?php } ?>
        </div>
        <?php echo $OUTPUT->standard_end_of_body_html() ?>
    </body>
</html>