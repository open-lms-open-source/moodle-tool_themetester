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
 * Theme tester tool
 *
 * @package   tool_themetester
 * @copyright  2012 Simon Coggins
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . '/../../../config.php');
require_once($CFG->libdir . '/adminlib.php');

$strheading = 'Theme Tester: Notifications';
$url = new \core\url('/admin/tool/themetester/notifications.php');

$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading($strheading);

admin_externalpage_setup('toolthemetester');

echo $OUTPUT->header();

echo \core\output\html_writer::link(new \core\url('/admin/tool/themetester/'), '&laquo; Back to index');
echo $OUTPUT->heading($strheading);


echo $OUTPUT->notification('This is an error notification <a href="#">with a link</a>');

echo $OUTPUT->notification('This is a warning notification <a href="#">with a link</a>', 'warning');

echo $OUTPUT->notification('This is a success notification <a href="#">with a link</a>', 'success');

echo $OUTPUT->notification('This is an info notification <a href="#">with a link</a>', 'info');

echo $OUTPUT->error_text('This is an error generated using error_text(). I think this is used in form validation errors.');

echo $OUTPUT->footer();
