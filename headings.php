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

$strheading = 'Theme Tester: Headings';
$url = new \core\url('/admin/tool/themetester/headings.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading($strheading);

admin_externalpage_setup('toolthemetester');
echo $OUTPUT->header();

echo \core\output\html_writer::link(new \core\url('index.php'), '&laquo; Back to index');
echo $OUTPUT->heading($strheading);

echo $OUTPUT->box_start();
echo $OUTPUT->container('Examples of different types of headings:');

echo $OUTPUT->container_start();
echo $OUTPUT->heading('H1 Heading', 1);
echo $OUTPUT->heading('H2 Heading', 2);
echo $OUTPUT->heading('H3 Heading', 3);
echo $OUTPUT->heading('H4 Heading', 4);
echo $OUTPUT->heading('H5 Heading', 5);
echo $OUTPUT->heading('H6 Heading', 6);

echo $OUTPUT->container('Examples showing default spacing before and after the headings:');

echo \core\output\html_writer::empty_tag('hr');
echo \core\output\html_writer::tag('p', 'Paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');
echo $OUTPUT->heading('H1 Heading', 1);
echo \core\output\html_writer::tag('p', 'Paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo \core\output\html_writer::empty_tag('hr');
echo \core\output\html_writer::tag('p', 'Paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');
echo $OUTPUT->heading('H2 Heading', 2);
echo \core\output\html_writer::tag('p', 'Paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo \core\output\html_writer::empty_tag('hr');
echo \core\output\html_writer::tag('p', 'Paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');
echo $OUTPUT->heading('H3 Heading', 3);
echo \core\output\html_writer::tag('p', 'Paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo \core\output\html_writer::empty_tag('hr');
echo \core\output\html_writer::tag('p', 'Paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');
echo $OUTPUT->heading('H4 Heading', 4);
echo \core\output\html_writer::tag('p', 'Paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo \core\output\html_writer::empty_tag('hr');
echo \core\output\html_writer::tag('p', 'Paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');
echo $OUTPUT->heading('H5 Heading', 5);
echo \core\output\html_writer::tag('p', 'Paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo \core\output\html_writer::empty_tag('hr');
echo \core\output\html_writer::tag('p', 'Paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');
echo $OUTPUT->heading('H6 Heading', 6);
echo \core\output\html_writer::tag('p', 'Paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo \core\output\html_writer::empty_tag('hr');
echo $OUTPUT->container('Generic container. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');
echo $OUTPUT->heading('H1 Heading', 1);
echo $OUTPUT->container('Generic container. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo \core\output\html_writer::empty_tag('hr');
echo $OUTPUT->container('Generic container. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');
echo $OUTPUT->heading('H2 Heading', 2);
echo $OUTPUT->container('Generic container. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo \core\output\html_writer::empty_tag('hr');
echo $OUTPUT->container('Generic container. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');
echo $OUTPUT->heading('H3 Heading', 3);
echo $OUTPUT->container('Generic container. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo \core\output\html_writer::empty_tag('hr');
echo $OUTPUT->container('Generic container. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');
echo $OUTPUT->heading('H4 Heading', 4);
echo $OUTPUT->container('Generic container. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo \core\output\html_writer::empty_tag('hr');
echo $OUTPUT->container('Generic container. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');
echo $OUTPUT->heading('H5 Heading', 5);
echo $OUTPUT->container('Generic container. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo \core\output\html_writer::empty_tag('hr');
echo $OUTPUT->container('Generic container. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');
echo $OUTPUT->heading('H6 Heading', 6);
echo $OUTPUT->container('Generic container. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu accumsan nulla. Cras elementum tincidunt dictum. Phasellus varius, est non ornare mattis, leo velit congue libero, vitae suscipit ipsum urna sed orci. Pellentesque venenatis pulvinar lobortis. Vestibulum iaculis commodo eros quis volutpat. Morbi vitae dapibus ante. Nullam convallis interdum ipsum, venenatis consequat eros faucibus sed. Pellentesque non tellus vel eros ullamcorper sollicitudin ut in lectus. Sed aliquet gravida porta.');

echo $OUTPUT->container_end();

echo $OUTPUT->box_end();

echo $OUTPUT->footer();
