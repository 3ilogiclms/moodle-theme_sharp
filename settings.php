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
defined('MOODLE_INTERNAL') || die;
if ($ADMIN->fulltree) {
    global $CFG;
    // Logo file setting.
    $name = 'theme_sharp/logo';
    $title = get_string('logo', 'theme_sharp');
    $description = get_string('logodesc', 'theme_sharp');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    // Link color setting.
    $name = 'theme_sharp/linkcolor';
    $title = get_string('linkcolor', 'theme_sharp');
    $description = get_string('linkcolordesc', 'theme_sharp');
    $default = '#2d83d5';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);
    // Block background gradient start color setting.
    $name = 'theme_sharp/gradientstart';
    $title = get_string('gradientstart', 'theme_sharp');
    $description = get_string('gradientstartdesc', 'theme_sharp');
    $default = '#30a1bf';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);
    // Block background gradient end color setting.
    $name = 'theme_sharp/gradientend';
    $title = get_string('gradientend', 'theme_sharp');
    $description = get_string('gradientenddesc', 'theme_sharp');
    $default = '#e2e2e2';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);
    // Block background gradient end color setting.
    $name = 'theme_sharp/buttonbg';
    $title = get_string('buttonbg', 'theme_sharp');
    $description = get_string('buttonbgdesc', 'theme_sharp');
    $default = '#30a1bf';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);
    // Block background gradient end color setting.
    $name = 'theme_sharp/buttoncolor';
    $title = get_string('buttoncolor', 'theme_sharp');
    $description = get_string('buttoncolordesc', 'theme_sharp');
    $default = '#ffffff';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);
    // Block background gradient end color setting.
    $name = 'theme_sharp/buttonhovercolor';
    $title = get_string('buttonhovercolor', 'theme_sharp');
    $description = get_string('buttonhovercolordesc', 'theme_sharp');
    $default = '#000000';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);
    // Tag line setting.
    $name = 'theme_sharp/tagline';
    $title = get_string('tagline', 'theme_sharp');
    $description = get_string('taglinedesc', 'theme_sharp');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $settings->add($setting);
    // Foot note setting.
    $name = 'theme_sharp/footertext';
    $title = get_string('footertext', 'theme_sharp');
    $description = get_string('footertextdesc', 'theme_sharp');
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');
    $settings->add($setting);
    // Custom CSS file.
    $name = 'theme_sharp/customcss';
    $title = get_string('customcss', 'theme_sharp');
    $description = get_string('customcssdesc', 'theme_sharp');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $settings->add($setting);
}