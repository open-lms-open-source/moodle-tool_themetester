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

/**
 * URL used as reference for form creation below:
 * http://docs.moodle.org/dev/lib/formslib.php_Form_Definition#definition.28.29
 *
 * Todo:
 *  - it would be useful to apply an incremental className to form groups, to ctrl
 *    spacing between stacked groups, eg; 'class="felement fgroup fgroup1"'
 **/

require_once(dirname(__FILE__) . '/../../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once($CFG->dirroot.'/lib/formslib.php');

$strheading = 'Theme Tester: Moodle Forms: Custom Forms';
$url = new \core\url('/admin/tool/themetester/mform_custom.php');

// Start setting up the page
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading($strheading);

admin_externalpage_setup('toolthemetester');

echo $OUTPUT->header();

echo \core\output\html_writer::link(new \core\url('mform.php'), '&laquo; Back to moodle forms');
echo $OUTPUT->heading($strheading);

echo $OUTPUT->box_start();
echo $OUTPUT->container_start();

echo $OUTPUT->heading('Tabular form (class "tabularform")', 3);

class tabular_form extends moodleform {

    // Define the form
    function definition() {

        $mform =& $this->_form;
        $renderer =& $mform->defaultRenderer();

        // $renderer->clearAllTemplates()  might be useful here depending on requirements

        // limitation - we can't use the 'html_writer:table()' or 'flexible_table()' methods?
        $thead_row = \core\output\html_writer::tag('thead', \core\output\html_writer::tag('tr', \core\output\html_writer::tag('th','Select', array('class'=>'header c0', 'scope'=>'col')) . \core\output\html_writer::tag('th','Item', array('class'=>'header c1', 'scope'=>'col')) ) );
        $template_wrap = \core\output\html_writer::tag('table', $thead_row . '{content}', array('class' => 'generaltable fcontainer') );
        $template_element = \core\output\html_writer::tag('tr', \core\output\html_writer::tag('td', '<!-- END error -->{element}', array('class' => 'felement')) . \core\output\html_writer::tag('td', '<!-- BEGIN required -->' . $mform->getReqHTML() . '<!-- END required -->{label}', array('class' => 'fitemtitle')), array('class' => 'fitem') );

        $renderer->setGroupTemplate($template_wrap, 'tabular_checkboxes');
        $renderer->setGroupElementTemplate($template_element, 'tabular_checkboxes');

        $controlGroup=array();
        $controlGroup[] =& $mform->createElement('checkbox', 'tabular_checkbox1', 'checkbox_name');
        $controlGroup[] =& $mform->createElement('checkbox', 'tabular_checkbox2', 'checkbox_name');
        $controlGroup[] =& $mform->createElement('checkbox', 'tabular_checkbox3', 'checkbox_name');
        $controlGroup[] =& $mform->createElement('checkbox', 'tabular_checkbox4', 'checkbox_name');
        $controlGroup[] =& $mform->createElement('checkbox', 'tabular_checkbox5', 'checkbox_name');

        $mform->addGroup($controlGroup, 'tabular_checkboxes', '', array(' '), false);

        $mform->addElement('submit', 'submit_btn', 'Submit');

        $oldclass = $mform->getAttribute('class');
        if (!empty($oldclass)){
            $mform->updateAttributes(array('class'=>$oldclass.' tabularform'));
        }else {
            $mform->updateAttributes(array('class'=>'tabularform'));
        }
    }

}
$form = new tabular_form();
$data = $form->get_data();
$form->display();



//
echo \core\output\html_writer::empty_tag('hr');
echo $OUTPUT->heading('Form with grouped \'action\' controls above \'data\' controls (class "actionform"), by providing new template markup to the Renderer.', 3);

class action_form extends moodleform {

    // Define the form
    function definition() {

        $mform =& $this->_form;
        $renderer =& $mform->defaultRenderer();

        // 'action' controls grouped together here
        $template_a_wrap = \core\output\html_writer::tag('div', '{content}', array('class' => 'fcontainer actionform') );
        $template_a_element = \core\output\html_writer::tag('div', \core\output\html_writer::tag('div', '<!-- BEGIN required -->' . $mform->getReqHTML() . '<!-- END required -->{label}', array('class' => 'fitemtitle')) . \core\output\html_writer::tag('div', '<!-- END error -->{element}', array('class' => 'felement')), array('class' => 'fitem') );

        $renderer->setGroupTemplate($template_a_wrap, 'action_group');
        $renderer->setGroupElementTemplate($template_a_element, 'action_group');

        $group=array();
        $group[] =& $mform->createElement('date_time_selector', 'date_select', 'Choose a date:'); // grouped date_time_selector objects don't run the JS enhancement?
        $c1 = $mform->createElement('text', 'text_entry', 'Search term:');
        $mform->setType('text_entry', PARAM_INT);
        $group[] =& $c1;
        $c2 = $mform->createElement('checkbox', 'action_group_checkbox', 'checkbox_name');
        $group[] =& $c2;
        $group[] =& $mform->createElement('select', 'action_group_auth', 'select_menu_name', array('Option 1','Option 2','Option 3'));

        $mform->addGroup($group, 'action_group', '', array(' '), false);
        $mform->addElement('submit', 'submit_btn_2', 'Submit');

        // render the table containing more controls
        $thead_row = \core\output\html_writer::tag('thead', \core\output\html_writer::tag('tr', \core\output\html_writer::tag('th','Select', array('class'=>'header c0', 'scope'=>'col')) . \core\output\html_writer::tag('th','Item', array('class'=>'header c1', 'scope'=>'col')) ) );
        $template_b_wrap = \core\output\html_writer::tag('table', $thead_row . '{content}', array('class' => 'generaltable fcontainer') );
        $template_b_element = \core\output\html_writer::tag('tr', \core\output\html_writer::tag('td', '<!-- END error -->{element}', array('class' => 'felement')) . \core\output\html_writer::tag('td', '<!-- BEGIN required -->' . $mform->getReqHTML() . '<!-- END required -->{help}{label}', array('class' => 'fitemtitle')), array('class' => 'fitem') );

        $renderer->setGroupTemplate($template_b_wrap, 'tabular_checkboxes_2');
        $renderer->setGroupElementTemplate($template_b_element, 'tabular_checkboxes_2');

        $group=array();
        $group[] =& $mform->createElement('checkbox', 'tabular_checkbox6', 'checkbox_name');
        $group[] =& $mform->createElement('checkbox', 'tabular_checkbox7', 'checkbox_name');
        $group[] =& $mform->createElement('checkbox', 'tabular_checkbox8', 'checkbox_name');
        $group[] =& $mform->createElement('checkbox', 'tabular_checkbox9', 'checkbox_name');
        $group[] =& $mform->createElement('checkbox', 'tabular_checkbox10', 'checkbox_name');

        $mform->addGroup($group, 'tabular_checkboxes_2', '', array(' '), false);

    }
}
$form = new action_form(); // shouldn't this have an 'id' attribute of 'tabular_form'? ref. /lib/formslib.php:123
$data = $form->get_data();
$form->display();


//
echo \core\output\html_writer::empty_tag('hr');
echo $OUTPUT->heading('Minimal forms', 3);

class minimal_form extends moodleform {

    // Define the form
    function definition() {

        $mform =& $this->_form;

        switch( $this->_customdata['type'] ){
            case 'search' :
                $mform->addElement('text', 'search');
                $mform->setType('search', PARAM_RAW);
                $mform->addElement('submit', 'search_btn', 'Go');
                break;
            case 'single_button' :
                $this->add_action_buttons(false, 'Turn editing on');
                break;
            default:
                break;
        }
    }
}
//
echo \core\output\html_writer::empty_tag('hr');
$form = new minimal_form( null, array('type'=>'search') );
$data = $form->get_data();
$form->display();

//
echo \core\output\html_writer::empty_tag('hr');
$form = new minimal_form( null, array('type'=>'single_button') );
$data = $form->get_data();
$form->display();




echo $OUTPUT->container_end();
echo $OUTPUT->box_end();
echo $OUTPUT->footer();
