<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software iip2, either version 3 of the License, or
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
 * Language strings for iip2 theme based on Boost
 *
 * @package    theme_iip2
 * @copyright  2016 Damyon Wiese
 * @modified by Richard Jones <richard@hrdnz.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// The name of our plugin.
$string['pluginname'] = 'IIP 2';

$string['choosereadme'] = 'Theme IIP 2 is a child theme of Boost. Code by Damyon Wiese and modified by Richard Jones.';

// Name of the settings pages.
$string['configtitle'] = 'IIP 2 settings';
// Name of the first settings tab.
$string['generalsettings'] = 'General';
// The name of the second tab in the theme settings.
$string['advancedsettings'] = 'Advanced';
// Preset files setting.
$string['presetfiles'] = 'Additional theme preset files';
// Preset files help text.
$string['presetfiles_desc'] = 'Preset files can be used to dramatically alter the appearance of the theme. See <a href=https://docs.moodle.org/dev/Boost_Presets>Boost presets</a> for information on creating and sharing your own preset files, and see the <a href=http://moodle.net/boost>Presets repository</a> for presets that others have shared.';
// Preset setting.
$string['preset'] = 'Theme preset';
// Preset help text.
$string['preset_desc'] = 'Preset IIP2 can be edited directly in the theme preset folder.';
// Raw SCSS setting.
$string['rawscss'] = 'Raw SCSS';
// Raw SCSS setting help text.
$string['rawscss_desc'] = 'Use this field to provide SCSS or CSS code which will be injected at the end of the style sheet.';
// Raw initial SCSS setting.
$string['rawscsspre'] = 'Raw initial SCSS';
// Raw initial SCSS setting help text.
$string['rawscsspre_desc'] = 'In this field you can provide initialising SCSS code, it will be injected before everything else. Most of the time you will use this setting to define variables.';
// Header title text
$string['headerarea'] = 'Title text next to header logo';
$string['headerarea_desc'] = 'In this field you can provide text to appear to the right of the site logo';
// The brand colour setting.
$string['brandcolor'] = 'Brand colour';
// The brand colour setting description.
$string['brandcolor_desc'] = 'The accent colour.';
// We need to include a lang string for each block region.
$string['region-side-pre'] = 'Right';