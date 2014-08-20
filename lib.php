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
 * @copyright � 2012 - 2014 | 3i Logic (Pvt) Ltd.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
function sharp_set_linkcolor($css, $linkcolor) {
    $tag = '[[setting:linkcolor]]';
    $replacement = $linkcolor;
    if (is_null($replacement)) {
        $replacement = '#2d83d5';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function sharp_set_gradientstart($css, $gradientstart) {
    $tag = '[[setting:gradientstart]]';
    $replacement = $gradientstart;
    if (is_null($replacement)) {
        $replacement = '#30a1bf';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function sharp_set_gradientend($css, $gradientend) {
    $tag = '[[setting:gradientend]]';
    $replacement = $gradientend;
    if (is_null($replacement)) {
        $replacement = '#e2e2e2';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function sharp_set_buttonbg($css, $buttonbg) {
    $tag = '[[setting:buttonbg]]';
    $replacement = $buttonbg;
    if (is_null($replacement)) {
        $replacement = '#30a1bf';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function sharp_set_buttoncolor($css, $buttoncolor) {
    $tag = '[[setting:buttoncolor]]';
    $replacement = $buttoncolor;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function sharp_set_buttonhovercolor($css, $buttonhovercolor) {
    $tag = '[[setting:buttonhovercolor]]';
    $replacement = $buttonhovercolor;
    if (is_null($replacement)) {
        $replacement = '#000000';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function sharp_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function sharp_process_css($css, $theme) {
    if (!empty($theme->settings->linkcolor)) {
        $linkcolor = $theme->settings->linkcolor;
    } else {
        $linkcolor = null;
    }
    $css = sharp_set_linkcolor($css, $linkcolor);
    if (!empty($theme->settings->gradientstart)) {
        $gradientstart = $theme->settings->gradientstart;
    } else {
        $gradientstart = null;
    }
    $css = sharp_set_gradientstart($css, $gradientstart);
    if (!empty($theme->settings->gradientend)) {
        $gradientend = $theme->settings->gradientend;
    } else {
        $gradientend = null;
    }
    $css = sharp_set_gradientend($css, $gradientend);

    if (!empty($theme->settings->buttonbg)) {
        $buttonbg = $theme->settings->buttonbg;
    } else {
        $buttonbg = null;
    }
    $css = sharp_set_buttonbg($css, $buttonbg);

    if (!empty($theme->settings->buttoncolor)) {
        $buttoncolor = $theme->settings->buttoncolor;
    } else {
        $buttoncolor = null;
    }
    $css = sharp_set_buttoncolor($css, $buttoncolor);

    if (!empty($theme->settings->buttonhovercolor)) {
        $buttonhovercolor = $theme->settings->buttonhovercolor;
    } else {
        $buttonhovercolor = null;
    }
    $css = sharp_set_buttonhovercolor($css, $buttonhovercolor);

    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = sharp_set_customcss($css, $customcss);
    return $css;
}
