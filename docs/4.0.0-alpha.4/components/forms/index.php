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
 * @copyright  Copyright (c) 2015 Open LMS (https://www.openlms.net)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . '/../../../../../../../config.php');
require_once($CFG->libdir . '/adminlib.php');

$strheading = "Theme Tester: Bootstrap 4 alpha-4 CSS";
$url = new \core\url('/admin/tool/themetester/docs/4.0.0-alpha4/getting-started/introduction/index.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Forms");
$PAGE->requires->jquery();
admin_externalpage_setup('toolthemetester');
$PAGE->add_body_class('bd-docs'); //   <body class="bd-docs" data-spy="scroll" data-target=".bd-sidenav-active">
echo $OUTPUT->header();

echo \core\output\html_writer::link(new \core\url('/admin/tool/themetester/index.php'), '&laquo; Back to index');
echo $OUTPUT->heading($strheading);

?>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-3 push-md-9 bd-sidebar">
          <form class="bd-search hidden-sm-down">
  <input type="text" class="form-control" id="search-input" placeholder="Search..." autocomplete="off">
  <div class="dropdown-menu bd-search-results" id="search-results"></div>
</form>

<nav class="bd-links" id="docsNavbarContent">
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/introduction">
      
        Getting started
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/introduction">
              Introduction
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/download">
              Download
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/contents">
              Contents
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/browsers-devices">
              Browsers & devices
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/javascript">
              JavaScript
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/options">
              Options
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/flexbox">
              Flexbox
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/build-tools">
              Build tools
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/best-practices">
              Best practices
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/accessibility">
              Accessibility
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/layout/overview">
      
        Layout
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/layout/overview">
              Overview
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/layout/grid">
              Grid
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/layout/flexbox-grid">
              Flexbox grid
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/layout/media-object">
              Media object
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/layout/responsive-utilities">
              Responsive utilities
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/reboot">
      
        Content
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/reboot">
              Reboot
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/typography">
              Typography
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/code">
              Code
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/images">
              Images
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/tables">
              Tables
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/figures">
              Figures
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item active">
    
        <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/alerts">
      
        Components
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/alerts">
              Alerts
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/breadcrumb">
              Breadcrumb
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/buttons">
              Buttons
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/button-group">
              Button group
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/card">
              Card
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/carousel">
              Carousel
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/collapse">
              Collapse
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/dropdowns">
              Dropdowns
            </a>

            
          </li>
        
          
          
          

          

          <li class="active bd-sidenav-active">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/forms">
              Forms
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/input-group">
              Input group
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/jumbotron">
              Jumbotron
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/list-group">
              List group
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/modal">
              Modal
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/navs">
              Navs
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/navbar">
              Navbar
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/pagination">
              Pagination
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/popovers">
              Popovers
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/progress">
              Progress
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/scrollspy">
              Scrollspy
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/tag">
              Tag
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/tooltips">
              Tooltips
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/utilities">
              Utilities
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/about/history">
      
        About
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/about/history">
              History
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/about/team">
              Team
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/about/brand">
              Brand
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/about/license">
              License
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/about/translations">
              Translations
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/migration/">
      
        Migration
      </a>

      <ul class="nav bd-sidenav">
        
      </ul>
    </div>
  
</nav>

        </div>
        <div class="col-xs-12 col-md-9 pull-md-3 bd-content">
          <h1 class="bd-title" id="content">Forms</h1>
          <p>Bootstrap provides several form control styles, layout options, and custom components for creating a wide variety of forms.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
  <li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#form-controls" id="markdown-toc-form-controls">Form controls</a>    <ul>
      <li><a href="#textual-inputs" id="markdown-toc-textual-inputs">Textual inputs</a></li>
    </ul>
  </li>
  <li><a href="#form-layouts" id="markdown-toc-form-layouts">Form layouts</a>    <ul>
      <li><a href="#form-groups" id="markdown-toc-form-groups">Form groups</a></li>
      <li><a href="#inline-forms" id="markdown-toc-inline-forms">Inline forms</a>        <ul>
          <li><a href="#visible-labels" id="markdown-toc-visible-labels">Visible labels</a></li>
          <li><a href="#hidden-labels" id="markdown-toc-hidden-labels">Hidden labels</a></li>
        </ul>
      </li>
      <li><a href="#using-the-grid" id="markdown-toc-using-the-grid">Using the Grid</a></li>
    </ul>
  </li>
  <li><a href="#checkboxes-and-radios" id="markdown-toc-checkboxes-and-radios">Checkboxes and radios</a>    <ul>
      <li><a href="#default-stacked" id="markdown-toc-default-stacked">Default (stacked)</a></li>
      <li><a href="#inline" id="markdown-toc-inline">Inline</a></li>
      <li><a href="#without-labels" id="markdown-toc-without-labels">Without labels</a></li>
    </ul>
  </li>
  <li><a href="#static-controls" id="markdown-toc-static-controls">Static controls</a></li>
  <li><a href="#disabled-states" id="markdown-toc-disabled-states">Disabled states</a></li>
  <li><a href="#readonly-inputs" id="markdown-toc-readonly-inputs">Readonly inputs</a></li>
  <li><a href="#control-sizing" id="markdown-toc-control-sizing">Control sizing</a></li>
  <li><a href="#column-sizing" id="markdown-toc-column-sizing">Column sizing</a></li>
  <li><a href="#help-text" id="markdown-toc-help-text">Help text</a>    <ul>
      <li><a href="#block-level" id="markdown-toc-block-level">Block level</a></li>
      <li><a href="#inline-1" id="markdown-toc-inline-1">Inline</a></li>
    </ul>
  </li>
  <li><a href="#validation" id="markdown-toc-validation">Validation</a></li>
  <li><a href="#custom-forms" id="markdown-toc-custom-forms">Custom forms</a>    <ul>
      <li><a href="#checkboxes-and-radios-1" id="markdown-toc-checkboxes-and-radios-1">Checkboxes and radios</a>        <ul>
          <li><a href="#checkboxes" id="markdown-toc-checkboxes">Checkboxes</a></li>
          <li><a href="#radios" id="markdown-toc-radios">Radios</a></li>
          <li><a href="#disabled" id="markdown-toc-disabled">Disabled</a></li>
          <li><a href="#validation-states" id="markdown-toc-validation-states">Validation states</a></li>
          <li><a href="#stacked" id="markdown-toc-stacked">Stacked</a></li>
        </ul>
      </li>
      <li><a href="#select-menu" id="markdown-toc-select-menu">Select menu</a></li>
      <li><a href="#file-browser" id="markdown-toc-file-browser">File browser</a>        <ul>
          <li><a href="#translating-or-customizing-the-strings" id="markdown-toc-translating-or-customizing-the-strings">Translating or customizing the strings</a></li>
        </ul>
      </li>
    </ul>
  </li>
</ul>

<h2 id="form-controls">Form controls</h2>

<p>Bootstrap’s form controls expand on <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/reboot/#forms">our Rebooted form styles</a> with classes. Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices. The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.</p>

<p>Remember, since Bootstrap utilizes the HTML5 doctype, <strong>all inputs must have a <code class="highlighter-rouge">type</code> attribute</strong>.</p>

<div class="bd-example" data-example-id="">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" />
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Example select</label>
    <select class="form-control" id="exampleSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleSelect2">Example multiple select</label>
    <select multiple="" class="form-control" id="exampleSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Example textarea</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
  </div>
  <fieldset class="form-group">
    <legend>Radio buttons</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="" />
        Option one is this and that&mdash;be sure to include why it's great
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" />
        Option two can be something else and selecting it will deselect option one
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="" />
        Option three is disabled
      </label>
    </div>
  </fieldset>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" />
      Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputEmail1"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail1"</span> <span class="na">aria-describedby=</span><span class="s">"emailHelp"</span> <span class="na">placeholder=</span><span class="s">"Enter email"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;small</span> <span class="na">id=</span><span class="s">"emailHelp"</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>We'll never share your email with anyone else.<span class="nt">&lt;/small&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputPassword1"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword1"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleSelect1"</span><span class="nt">&gt;</span>Example select<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleSelect1"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;/select&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleSelect2"</span><span class="nt">&gt;</span>Example multiple select<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;select</span> <span class="na">multiple</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleSelect2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;/select&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleTextarea"</span><span class="nt">&gt;</span>Example textarea<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleTextarea"</span> <span class="na">rows=</span><span class="s">"3"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputFile"</span><span class="nt">&gt;</span>File input<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">class=</span><span class="s">"form-control-file"</span> <span class="na">id=</span><span class="s">"exampleInputFile"</span> <span class="na">aria-describedby=</span><span class="s">"fileHelp"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;small</span> <span class="na">id=</span><span class="s">"fileHelp"</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.<span class="nt">&lt;/small&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;fieldset</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;legend&gt;</span>Radio buttons<span class="nt">&lt;/legend&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">checked</span><span class="nt">&gt;</span>
        Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
        Option two can be something else and selecting it will deselect option one
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check disabled"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
        Option three is disabled
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/fieldset&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"form-check-input"</span><span class="nt">&gt;</span>
      Check me out
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<p>Below is a complete list of the specific form controls supported by Bootstrap and the classes that customize them. Additional documentation is available for each group.</p>

<table>
  <thead>
    <tr>
      <th>Classes</th>
      <th>Used for</th>
      <th>Supported variations</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <p><code class="highlighter-rouge">.form-group</code></p>

      </td>
      <td class="text-nowrap">
        Any group of form controls
      </td>
      <td>
        <p>Use with any block-level element like <code class="highlighter-rouge">&lt;fieldset&gt;</code> or <code class="highlighter-rouge">&lt;div&gt;</code></p>

      </td>
    </tr>
    <tr>
      <td rowspan="3">
        <p><code class="highlighter-rouge">.form-control</code></p>

      </td>
      <td>
        Textual inputs
      </td>
      <td>
        <p><code class="highlighter-rouge">text</code>, <code class="highlighter-rouge">password</code>, <code class="highlighter-rouge">datetime-local</code>, <code class="highlighter-rouge">date</code>, <code class="highlighter-rouge">month</code>, <code class="highlighter-rouge">time</code>, <code class="highlighter-rouge">week</code>, <code class="highlighter-rouge">number</code>, <code class="highlighter-rouge">email</code>, <code class="highlighter-rouge">url</code>, <code class="highlighter-rouge">search</code>, <code class="highlighter-rouge">tel</code>, <code class="highlighter-rouge">color</code></p>

      </td>
    </tr>
    <tr>
      <td>
        Select menus
      </td>
      <td>
        <p><code class="highlighter-rouge">multiple</code>, <code class="highlighter-rouge">size</code></p>

      </td>
    </tr>
    <tr>
      <td>
        Textareas
      </td>
      <td>
        <span class="text-muted">N/A</span>
      </td>
    </tr>
    <tr>
      <td class="text-nowrap">
        <p><code class="highlighter-rouge">.form-control-file</code></p>

      </td>
      <td>
        File inputs
      </td>
      <td>
        <p><code class="highlighter-rouge">file</code></p>

      </td>
    </tr>
    <tr>
      <td class="text-nowrap">

<p><code class="highlighter-rouge">.form-check</code><br />
<code class="highlighter-rouge">.form-check-inline</code></p>

      </td>
      <td class="text-nowrap">
        Checkboxes and radios
      </td>
      <td>
        <span class="text-muted">N/A</span>
      </td>
    </tr>
  </tbody>
</table>

<h3 id="textual-inputs">Textual inputs</h3>

<p>Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p>

<div class="bd-example" data-example-id="">
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Text</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input" />
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label">Search</label>
  <div class="col-xs-10">
    <input class="form-control" type="search" value="How do I shoot web" id="example-search-input" />
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-xs-2 col-form-label">Email</label>
  <div class="col-xs-10">
    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input" />
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-xs-2 col-form-label">URL</label>
  <div class="col-xs-10">
    <input class="form-control" type="url" value="http://getbootstrap.com" id="example-url-input" />
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-xs-2 col-form-label">Telephone</label>
  <div class="col-xs-10">
    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input" />
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-xs-2 col-form-label">Password</label>
  <div class="col-xs-10">
    <input class="form-control" type="password" value="hunter2" id="example-password-input" />
  </div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-xs-2 col-form-label">Number</label>
  <div class="col-xs-10">
    <input class="form-control" type="number" value="42" id="example-number-input" />
  </div>
</div>
<div class="form-group row">
  <label for="example-datetime-local-input" class="col-xs-2 col-form-label">Date and time</label>
  <div class="col-xs-10">
    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" />
  </div>
</div>
<div class="form-group row">
  <label for="example-date-input" class="col-xs-2 col-form-label">Date</label>
  <div class="col-xs-10">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input" />
  </div>
</div>
<div class="form-group row">
  <label for="example-month-input" class="col-xs-2 col-form-label">Month</label>
  <div class="col-xs-10">
    <input class="form-control" type="month" value="2011-08" id="example-month-input" />
  </div>
</div>
<div class="form-group row">
  <label for="example-week-input" class="col-xs-2 col-form-label">Week</label>
  <div class="col-xs-10">
    <input class="form-control" type="week" value="2011-W33" id="example-week-input" />
  </div>
</div>
<div class="form-group row">
  <label for="example-time-input" class="col-xs-2 col-form-label">Time</label>
  <div class="col-xs-10">
    <input class="form-control" type="time" value="13:45:00" id="example-time-input" />
  </div>
</div>
<div class="form-group row">
  <label for="example-color-input" class="col-xs-2 col-form-label">Color</label>
  <div class="col-xs-10">
    <input class="form-control" type="color" value="#563d7c" id="example-color-input" />
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-text-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Text<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">value=</span><span class="s">"Artisanal kale"</span> <span class="na">id=</span><span class="s">"example-text-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-search-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Search<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"search"</span> <span class="na">value=</span><span class="s">"How do I shoot web"</span> <span class="na">id=</span><span class="s">"example-search-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-email-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">value=</span><span class="s">"bootstrap@example.com"</span> <span class="na">id=</span><span class="s">"example-email-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-url-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>URL<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"url"</span> <span class="na">value=</span><span class="s">"http://getbootstrap.com"</span> <span class="na">id=</span><span class="s">"example-url-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-tel-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Telephone<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"tel"</span> <span class="na">value=</span><span class="s">"1-(555)-555-5555"</span> <span class="na">id=</span><span class="s">"example-tel-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-password-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">value=</span><span class="s">"hunter2"</span> <span class="na">id=</span><span class="s">"example-password-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-number-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Number<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"number"</span> <span class="na">value=</span><span class="s">"42"</span> <span class="na">id=</span><span class="s">"example-number-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-datetime-local-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Date and time<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"datetime-local"</span> <span class="na">value=</span><span class="s">"2011-08-19T13:45:00"</span> <span class="na">id=</span><span class="s">"example-datetime-local-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-date-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Date<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"date"</span> <span class="na">value=</span><span class="s">"2011-08-19"</span> <span class="na">id=</span><span class="s">"example-date-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-month-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Month<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"month"</span> <span class="na">value=</span><span class="s">"2011-08"</span> <span class="na">id=</span><span class="s">"example-month-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-week-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Week<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"week"</span> <span class="na">value=</span><span class="s">"2011-W33"</span> <span class="na">id=</span><span class="s">"example-week-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-time-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Time<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"time"</span> <span class="na">value=</span><span class="s">"13:45:00"</span> <span class="na">id=</span><span class="s">"example-time-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"example-color-input"</span> <span class="na">class=</span><span class="s">"col-xs-2 col-form-label"</span><span class="nt">&gt;</span>Color<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-10"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"color"</span> <span class="na">value=</span><span class="s">"#563d7c"</span> <span class="na">id=</span><span class="s">"example-color-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="form-layouts">Form layouts</h2>

<p>Since Bootstrap applies <code class="highlighter-rouge">display: block</code> and <code class="highlighter-rouge">width: 100%</code> to almost all our form controls, forms will by default stack vertically. Additional classes can be used to vary this layout on a per-form basis.</p>

<h3 id="form-groups">Form groups</h3>

<p>The <code class="highlighter-rouge">.form-group</code> class is the easiest way to add some structure to forms. Its only purpose is to provide <code class="highlighter-rouge">margin-bottom</code> around a label and control pairing. As a bonus, since it’s a class you can use it with <code class="highlighter-rouge">&lt;fieldset&gt;</code>s, <code class="highlighter-rouge">&lt;div&gt;</code>s, or nearly any other element.</p>

<div class="bd-example" data-example-id="">
<form>
  <div class="form-group">
    <label for="formGroupExampleInput">Example label</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" />
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Another label</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" />
  </div>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"formGroupExampleInput"</span><span class="nt">&gt;</span>Example label<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"formGroupExampleInput"</span> <span class="na">placeholder=</span><span class="s">"Example input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"formGroupExampleInput2"</span><span class="nt">&gt;</span>Another label<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"formGroupExampleInput2"</span> <span class="na">placeholder=</span><span class="s">"Another input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<h3 id="inline-forms">Inline forms</h3>

<p>Use the <code class="highlighter-rouge">.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row. Form controls within inline forms behave differently:</p>

<ul>
  <li>Controls are <code class="highlighter-rouge">display: inline-block</code> to provide alignment control via <code class="highlighter-rouge">vertical-align</code> and <code class="highlighter-rouge">margin</code>.</li>
  <li>Controls receive <code class="highlighter-rouge">width: auto</code> to override the Bootstrap default <code class="highlighter-rouge">width: 100%</code>.</li>
  <li>Controls <strong>only appear inline in viewports that are at least 768px wide</strong> to account for narrow viewports on mobile devices.</li>
</ul>

<p>Because of this, you may need to manually address the width and alignment of individual form controls. Lastly, as shown below, you should always include a <code class="highlighter-rouge">&lt;label&gt;</code> with each form control.</p>

<h4 id="visible-labels">Visible labels</h4>

<div class="bd-example" data-example-id="">
<form class="form-inline">
  <div class="form-group">
    <label for="exampleInputName2">Name</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe" />
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com" />
  </div>
  <button type="submit" class="btn btn-primary">Send invitation</button>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputName2"</span><span class="nt">&gt;</span>Name<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputName2"</span> <span class="na">placeholder=</span><span class="s">"Jane Doe"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputEmail2"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail2"</span> <span class="na">placeholder=</span><span class="s">"jane.doe@example.com"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Send invitation<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<h4 id="hidden-labels">Hidden labels</h4>

<div class="bd-example" data-example-id="">
<form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email" />
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" />
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" /> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputEmail3"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail3"</span> <span class="na">placeholder=</span><span class="s">"Enter email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputPassword3"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword3"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Remember me
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount" />
      <div class="input-group-addon">.00</div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Transfer cash</button>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputAmount"</span><span class="nt">&gt;</span>Amount (in dollars)<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>$<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputAmount"</span> <span class="na">placeholder=</span><span class="s">"Amount"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Transfer cash<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h4 id="alternatives-to-hidden-labels">Alternatives to hidden labels</h4>
<p>Assistive technologies such as screen readers will have trouble with your forms if you don’t include a label for every input. For these inline forms, you can hide the labels using the <code class="highlighter-rouge">.sr-only</code> class. There are further alternative methods of providing a label for assistive technologies, such as the <code class="highlighter-rouge">aria-label</code>, <code class="highlighter-rouge">aria-labelledby</code> or <code class="highlighter-rouge">title</code> attribute. If none of these are present, assistive technologies may resort to using the <code class="highlighter-rouge">placeholder</code> attribute, if present, but note that use of <code class="highlighter-rouge">placeholder</code> as a replacement for other labelling methods is not advised.</p>
</div>

<h3 id="using-the-grid">Using the Grid</h3>

<p>For more structured form layouts that are also responsive, you can utilize Bootstrap’s <a href="/layout/grid/#predefined-classes">predefined grid classes</a> or <a href="/layout/grid/#sass-mixins">mixins</a> to create horizontal forms. Add the <code class="highlighter-rouge">.row</code> class to form groups and use the <code class="highlighter-rouge">.col-*-*</code> classes to specify the width of your labels and controls.</p>

<p>Be sure to add <code class="highlighter-rouge">.col-form-label</code> to your <code class="highlighter-rouge">&lt;label&gt;</code>s as well so they’re vertically centered with their associated form controls. For <code class="highlighter-rouge">&lt;legend&gt;</code> elements, you can use <code class="highlighter-rouge">.col-form-legend</code> to make them appear similar to regular <code class="highlighter-rouge">&lt;label&gt;</code> elements.</p>

<div class="bd-example" data-example-id="">
<div class="container">
  <form>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" />
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" />
      </div>
    </div>
    <fieldset class="form-group row">
      <legend class="col-form-legend col-sm-2">Radios</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="" />
            Option one is this and that&mdash;be sure to include why it's great
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" />
            Option two can be something else and selecting it will deselect option one
          </label>
        </div>
        <div class="form-check disabled">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled="" />
            Option three is disabled
          </label>
        </div>
      </div>
    </fieldset>
    <div class="form-group row">
      <label class="col-sm-2">Checkbox</label>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" /> Check me out
          </label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </div>
  </form>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputEmail3"</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputEmail3"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword3"</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword3"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;fieldset</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;legend</span> <span class="na">class=</span><span class="s">"col-form-legend col-sm-2"</span><span class="nt">&gt;</span>Radios<span class="nt">&lt;/legend&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"gridRadios"</span> <span class="na">id=</span><span class="s">"gridRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">checked</span><span class="nt">&gt;</span>
            Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
          <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"gridRadios"</span> <span class="na">id=</span><span class="s">"gridRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
            Option two can be something else and selecting it will deselect option one
          <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check disabled"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"gridRadios"</span> <span class="na">id=</span><span class="s">"gridRadios3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
            Option three is disabled
          <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/fieldset&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2"</span><span class="nt">&gt;</span>Checkbox<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Check me out
          <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"offset-sm-2 col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Grid-based form layouts also support large and small inputs.</p>

<div class="bd-example" data-example-id="">
<div class="container">
  <form>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="you@example.com" />
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control form-control-sm" id="smFormGroupInput" placeholder="you@example.com" />
      </div>
    </div>
  </form>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"lgFormGroupInput"</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label col-form-label-lg"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control form-control-lg"</span> <span class="na">id=</span><span class="s">"lgFormGroupInput"</span> <span class="na">placeholder=</span><span class="s">"you@example.com"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"smFormGroupInput"</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label col-form-label-sm"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control form-control-sm"</span> <span class="na">id=</span><span class="s">"smFormGroupInput"</span> <span class="na">placeholder=</span><span class="s">"you@example.com"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="checkboxes-and-radios">Checkboxes and radios</h2>

<p>Default checkboxes and radios are improved upon with the help of <code class="highlighter-rouge">.form-check</code>, <strong>a single class for both input types that improves the layout and behavior of their HTML elements</strong>. Checkboxes are for selecting one or several options in a list, while radios are for selecting one option from many.</p>

<p>Disabled checkboxes and radios are supported, but to provide a <code class="highlighter-rouge">not-allowed</code> cursor on hover of the parent <code class="highlighter-rouge">&lt;label&gt;</code>, you’ll need to add the <code class="highlighter-rouge">.disabled</code> class to the parent <code class="highlighter-rouge">.form-check</code>. The disabled class will also lighten the text color to help indicate the input’s state.</p>

<h3 id="default-stacked">Default (stacked)</h3>

<p>By default, any number of checkboxes and radios that are immediate sibling will be vertically stacked and appropriately spaced with <code class="highlighter-rouge">.form-check</code>.</p>

<div class="bd-example" data-example-id="">
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" value="" />
    Option one is this and that&mdash;be sure to include why it's great
  </label>
</div>
<div class="form-check disabled">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" value="" disabled="" />
    Option two is disabled
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span><span class="nt">&gt;</span>
    Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check disabled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    Option two is disabled
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="" />
    Option one is this and that&mdash;be sure to include why it's great
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" />
    Option two can be something else and selecting it will deselect option one
  </label>
</div>
<div class="form-check disabled">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled="" />
    Option three is disabled
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"exampleRadios"</span> <span class="na">id=</span><span class="s">"exampleRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">checked</span><span class="nt">&gt;</span>
    Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"exampleRadios"</span> <span class="na">id=</span><span class="s">"exampleRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
    Option two can be something else and selecting it will deselect option one
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check disabled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"exampleRadios"</span> <span class="na">id=</span><span class="s">"exampleRadios3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    Option three is disabled
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="inline">Inline</h3>

<p>Groups of checkboxes or radios that appear on the same horizontal row are similar to their stacked counterparts, but require different HTML and a single class. To switch from stacked to inline, drop the surrounding <code class="highlighter-rouge">&lt;div&gt;</code>, add <code class="highlighter-rouge">.form-check-inline</code> to the <code class="highlighter-rouge">&lt;label&gt;</code>, and keep the <code class="highlighter-rouge">.form-check-input</code> on the <code class="highlighter-rouge">&lt;input&gt;</code>.</p>

<div class="bd-example" data-example-id="">
<label class="form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" /> 1
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" /> 2
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" /> 3
</label>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span> 1
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span> 2
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox3"</span> <span class="na">value=</span><span class="s">"option3"</span><span class="nt">&gt;</span> 3
<span class="nt">&lt;/label&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<label class="form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" /> 1
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" /> 2
</label>
<label class="form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" /> 3
</label>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span> 1
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span> 2
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio3"</span> <span class="na">value=</span><span class="s">"option3"</span><span class="nt">&gt;</span> 3
<span class="nt">&lt;/label&gt;</span></code></pre></div>

<h3 id="without-labels">Without labels</h3>

<p>Should you have no text within the <code class="highlighter-rouge">&lt;label&gt;</code>, the input is positioned as you’d expect. <strong>Currently only works on non-inline checkboxes and radios.</strong> Remember to still provide some form of label for assistive technologies (for instance, using <code class="highlighter-rouge">aria-label</code>).</p>

<div class="bd-example" data-example-id="">
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="..." />
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="..." />
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"blankCheckbox"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"blankRadio"</span> <span class="na">id=</span><span class="s">"blankRadio1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="static-controls">Static controls</h2>

<p>When you need to place plain text next to a form label within a form, use the <code class="highlighter-rouge">.form-control-static</code> class on a <code class="highlighter-rouge">&lt;p&gt;</code>.</p>

<div class="bd-example" data-example-id="">
<form>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <p class="form-control-static">email@example.com</p>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password" />
    </div>
  </div>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"form-control-static"</span><span class="nt">&gt;</span>email@example.com<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword"</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<form class="form-inline">
  <div class="form-group">
    <label class="sr-only">Email</label>
    <p class="form-control-static">email@example.com</p>
  </div>
  <div class="form-group">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password" />
  </div>
  <button type="submit" class="btn btn-primary">Confirm identity</button>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"form-control-static"</span><span class="nt">&gt;</span>email@example.com<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword2"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword2"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Confirm identity<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<h2 id="disabled-states">Disabled states</h2>

<p>Add the <code class="highlighter-rouge">disabled</code> boolean attribute on an input to prevent user interactions. Disabled inputs appear lighter and add a <code class="highlighter-rouge">not-allowed</code> cursor.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"disabledInput"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Disabled input here..."</span> <span class="na">disabled</span><span class="nt">&gt;</span></code></pre></figure>

<p>Add the <code class="highlighter-rouge">disabled</code> attribute to a <code class="highlighter-rouge">&lt;fieldset&gt;</code> to disable all the controls within.</p>

<div class="bd-example" data-example-id="">
<form>
  <fieldset disabled="">
    <div class="form-group">
      <label for="disabledTextInput">Disabled input</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" />
    </div>
    <div class="form-group">
      <label for="disabledSelect">Disabled select menu</label>
      <select id="disabledSelect" class="form-control">
        <option>Disabled select</option>
      </select>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" /> Can't check this
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;fieldset</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledTextInput"</span><span class="nt">&gt;</span>Disabled input<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"disabledTextInput"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Disabled input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledSelect"</span><span class="nt">&gt;</span>Disabled select menu<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;select</span> <span class="na">id=</span><span class="s">"disabledSelect"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;option&gt;</span>Disabled select<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Can't check this
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/fieldset&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h4 id="caveat-about-link-functionality-of-a">Caveat about link functionality of <code class="highlighter-rouge">&lt;a&gt;</code></h4>

<p>By default, browsers will treat all native form controls (<code class="highlighter-rouge">&lt;input&gt;</code>, <code class="highlighter-rouge">&lt;select&gt;</code> and <code class="highlighter-rouge">&lt;button&gt;</code> elements) inside a <code class="highlighter-rouge">&lt;fieldset disabled&gt;</code> as disabled, preventing both keyboard and mouse interactions on them. However, if your form also includes <code class="highlighter-rouge">&lt;a ... class="btn btn-*"&gt;</code> elements, these will only be given a style of <code class="highlighter-rouge">pointer-events: none</code>. As noted in the section about <a href="../buttons/#disabled-state">disabled state for buttons</a> (and specifically in the sub-section for anchor elements), this CSS property is not yet standardized and isn’t fully supported in Opera 18 and below, or in Internet Explorer 11, and won’t prevent keyboard users from being able to focus or activate these links. So to be safe, use custom JavaScript to disable such links.</p>
</div>

<div class="bd-callout bd-callout-danger">
<h4 id="cross-browser-compatibility">Cross-browser compatibility</h4>

<p>While Bootstrap will apply these styles in all browsers, Internet Explorer 11 and below don’t fully support the <code class="highlighter-rouge">disabled</code> attribute on a <code class="highlighter-rouge">&lt;fieldset&gt;</code>. Use custom JavaScript to disable the fieldset in these browsers.</p>
</div>

<h2 id="readonly-inputs">Readonly inputs</h2>

<p>Add the <code class="highlighter-rouge">readonly</code> boolean attribute on an input to prevent modification of the input’s value. Read-only inputs appear lighter (just like disabled inputs), but retain the standard cursor.</p>

<div class="bd-example" data-example-id="">
<input class="form-control" type="text" placeholder="Readonly input here…" readonly="" />
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Readonly input here…"</span> <span class="na">readonly</span><span class="nt">&gt;</span></code></pre></div>

<h2 id="control-sizing">Control sizing</h2>

<p>Set heights using classes like <code class="highlighter-rouge">.form-control-lg</code>, and set widths using grid column classes like <code class="highlighter-rouge">.col-lg-*</code>.</p>

<div class="bd-example" data-example-id="">
<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" />
<input class="form-control" type="text" placeholder="Default input" />
<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" />
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control form-control-lg"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">".form-control-lg"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Default input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control form-control-sm"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">".form-control-sm"</span><span class="nt">&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<select class="form-control form-control-lg">
  <option>Large select</option>
</select>
<select class="form-control">
  <option>Default select</option>
</select>
<select class="form-control form-control-sm">
  <option>Small select</option>
</select>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control form-control-lg"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>Large select<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span>
<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>Default select<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span>
<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control form-control-sm"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>Small select<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span></code></pre></div>

<h2 id="column-sizing">Column sizing</h2>

<p>Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-xs-2">
    <input type="text" class="form-control" placeholder=".col-xs-2" />
  </div>
  <div class="col-xs-3">
    <input type="text" class="form-control" placeholder=".col-xs-3" />
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder=".col-xs-4" />
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-2"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="help-text">Help text</h2>

<p>Block-level help text in forms can be created using <code class="highlighter-rouge">.form-text</code> (previously known as <code class="highlighter-rouge">.help-block</code> in v3). Inline help text can be flexibly implemented using any inline HTML element and utility classes like <code class="highlighter-rouge">.text-muted</code>.</p>

<div class="bd-callout bd-callout-warning">
<h4 id="associating-help-text-with-form-controls">Associating help text with form controls</h4>

<p>Help text should be explicitly associated with the form control it relates to using the <code class="highlighter-rouge">aria-describedby</code> attribute. This will ensure that assistive technologies – such as screen readers – will announce this help text when the user focuses or enters the control.</p>
</div>

<h3 id="block-level">Block level</h3>

<p>Block help text—for below inputs or for longer lines of help text—can be easily achieved with <code class="highlighter-rouge">.form-text</code>. This class includes <code class="highlighter-rouge">display: block</code> and adds some top margin for easy spacing from the inputs above.</p>

<div class="bd-example" data-example-id="">
<label for="inputPassword5">Password</label>
<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" />
<p id="passwordHelpBlock" class="form-text text-muted">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword5"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">id=</span><span class="s">"inputPassword5"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-describedby=</span><span class="s">"passwordHelpBlock"</span><span class="nt">&gt;</span>
<span class="nt">&lt;p</span> <span class="na">id=</span><span class="s">"passwordHelpBlock"</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
<span class="nt">&lt;/p&gt;</span></code></pre></div>

<h3 id="inline-1">Inline</h3>

<p>Inline text can use any typical inline HTML element (be it a <code class="highlighter-rouge">&lt;small&gt;</code>, <code class="highlighter-rouge">&lt;span&gt;</code>, or something else).</p>

<div class="bd-example" data-example-id="">
<form class="form-inline">
  <div class="form-group">
    <label for="inputPassword4">Password</label>
    <input type="password" id="inputPassword4" class="form-control" aria-describedby="passwordHelpInline" />
    <small id="passwordHelpInline" class="text-muted">
      Must be 8-20 characters long.
    </small>
  </div>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword4"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">id=</span><span class="s">"inputPassword4"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-describedby=</span><span class="s">"passwordHelpInline"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;small</span> <span class="na">id=</span><span class="s">"passwordHelpInline"</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>
      Must be 8-20 characters long.
    <span class="nt">&lt;/small&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<h2 id="validation">Validation</h2>

<p>Bootstrap includes validation styles for danger, warning, and success states on form controls. Here’s a rundown of how they work:</p>

<ul>
  <li>To use, add <code class="highlighter-rouge">.has-warning</code>, <code class="highlighter-rouge">.has-danger</code>, or <code class="highlighter-rouge">.has-success</code> to the parent element. Any <code class="highlighter-rouge">.col-form-label</code>, <code class="highlighter-rouge">.form-control</code>, or custom form element will receive the validation styles.</li>
  <li>Contextual validation text, in addition to your usual form field help text, can be added with the use of <code class="highlighter-rouge">.form-control-feedback</code>. This text will adapt to the parent <code class="highlighter-rouge">.has-*</code> class. By default it only includes a bit of <code class="highlighter-rouge">margin</code> for spacing and a modified <code class="highlighter-rouge">color</code> for each state.</li>
  <li>Validation icons are <code class="highlighter-rouge">url()</code>s configured via Sass variables that are applied to <code class="highlighter-rouge">background-image</code> declarations for each state.</li>
  <li>You may use your own base64 PNGs or SVGs by updating the Sass variables and recompiling.</li>
  <li>Icons can also be disabled entirely by setting the variables to <code class="highlighter-rouge">none</code> or commenting out the source Sass.</li>
</ul>

<p>Generally speaking, you’ll want to use a particular state for specific types of feedback:</p>

<ul>
  <li><strong>Danger</strong> is great for when there’s a blocking or required field. A user <em>must</em> fill in this field properly to submit the form.</li>
  <li><strong>Warning</strong> works well for input values that are in progress, like password strength, or soft validation before a user attempts to submit a form.</li>
  <li>And lastly, <strong>success</strong> is ideal for situations when you have per-field validation throughout a form and want to encourage a user through the rest of the fields.</li>
</ul>

<p>Here are some examples of the aforementioned classes in action.</p>

<div class="bd-example" data-example-id="">
<div class="form-group has-success">
  <label class="col-form-label" for="inputSuccess1">Input with success</label>
  <input type="text" class="form-control form-control-success" id="inputSuccess1" />
  <div class="form-control-feedback">Success! You've done it.</div>
  <small class="form-text text-muted">Example help text that remains unchanged.</small>
</div>
<div class="form-group has-warning">
  <label class="col-form-label" for="inputWarning1">Input with warning</label>
  <input type="text" class="form-control form-control-warning" id="inputWarning1" />
  <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
  <small class="form-text text-muted">Example help text that remains unchanged.</small>
</div>
<div class="form-group has-danger">
  <label class="col-form-label" for="inputDanger1">Input with danger</label>
  <input type="text" class="form-control form-control-danger" id="inputDanger1" />
  <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
  <small class="form-text text-muted">Example help text that remains unchanged.</small>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-form-label"</span> <span class="na">for=</span><span class="s">"inputSuccess1"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control form-control-success"</span> <span class="na">id=</span><span class="s">"inputSuccess1"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-control-feedback"</span><span class="nt">&gt;</span>Success! You've done it.<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>Example help text that remains unchanged.<span class="nt">&lt;/small&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-form-label"</span> <span class="na">for=</span><span class="s">"inputWarning1"</span><span class="nt">&gt;</span>Input with warning<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control form-control-warning"</span> <span class="na">id=</span><span class="s">"inputWarning1"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-control-feedback"</span><span class="nt">&gt;</span>Shucks, check the formatting of that and try again.<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>Example help text that remains unchanged.<span class="nt">&lt;/small&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-danger"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-form-label"</span> <span class="na">for=</span><span class="s">"inputDanger1"</span><span class="nt">&gt;</span>Input with danger<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control form-control-danger"</span> <span class="na">id=</span><span class="s">"inputDanger1"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-control-feedback"</span><span class="nt">&gt;</span>Sorry, that username's taken. Try another?<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>Example help text that remains unchanged.<span class="nt">&lt;/small&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="form-check has-success">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" id="checkboxSuccess" value="option1" />
    Checkbox with success
  </label>
</div>
<div class="form-check has-warning">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" id="checkboxWarning" value="option1" />
    Checkbox with warning
  </label>
</div>
<div class="form-check has-danger">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" id="checkboxDanger" value="option1" />
    Checkbox with danger
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check has-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">id=</span><span class="s">"checkboxSuccess"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
    Checkbox with success
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check has-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">id=</span><span class="s">"checkboxWarning"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
    Checkbox with warning
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check has-danger"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">id=</span><span class="s">"checkboxDanger"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
    Checkbox with danger
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="custom-forms">Custom forms</h2>

<p>For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</p>

<h3 id="checkboxes-and-radios-1">Checkboxes and radios</h3>

<p>Each checkbox and radio is wrapped in a <code class="highlighter-rouge">&lt;label&gt;</code> for three reasons:</p>

<ul>
  <li>It provides a larger hit areas for checking the control.</li>
  <li>It provides a helpful and semantic wrapper to help us replace the default <code class="highlighter-rouge">&lt;input&gt;</code>s.</li>
  <li>It triggers the state of the <code class="highlighter-rouge">&lt;input&gt;</code> automatically, meaning no JavaScript is required.</li>
</ul>

<p>We hide the default <code class="highlighter-rouge">&lt;input&gt;</code> with <code class="highlighter-rouge">opacity</code> and use the <code class="highlighter-rouge">.custom-control-indicator</code> to build a new custom form indicator in its place. Unfortunately we can’t build a custom one from just the <code class="highlighter-rouge">&lt;input&gt;</code> because CSS’s <code class="highlighter-rouge">content</code> doesn’t work on that element.</p>

<p>We use the sibling selector (<code class="highlighter-rouge">~</code>) for all our <code class="highlighter-rouge">&lt;input&gt;</code> states—like <code class="highlighter-rouge">:checked</code>—to properly style our custom form indicator. When combined with the <code class="highlighter-rouge">.custom-control-description</code> class, we can also style the text for each item based on the <code class="highlighter-rouge">&lt;input&gt;</code>’s state.</p>

<p>In the checked states, we use <strong>base64 embedded SVG icons</strong> from <a href="https://useiconic.com/open">Open Iconic</a>. This provides us the best control for styling and positioning across browsers and devices.</p>

<h4 id="checkboxes">Checkboxes</h4>

<div class="bd-example" data-example-id="">
<label class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" />
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description">Check this custom checkbox</span>
</label>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-checkbox"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Check this custom checkbox<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/label&gt;</span></code></pre></div>

<p>Custom checkboxes can also utilize the <code class="highlighter-rouge">:indeterminate</code> pseudo class when manually set via JavaScript (there is no available HTML attribute for specifying it).</p>

<div class="bd-example bd-example-indeterminate">
  <label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" />
    <span class="custom-control-indicator"></span>
    <span class="custom-control-description">Check this custom checkbox</span>
  </label>
</div>

<p>If you’re using jQuery, something like this should suffice:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'.your-checkbox'</span><span class="p">).</span><span class="nx">prop</span><span class="p">(</span><span class="s1">'indeterminate'</span><span class="p">,</span> <span class="kc">true</span><span class="p">)</span></code></pre></figure>

<h4 id="radios">Radios</h4>

<div class="bd-example" data-example-id="">
<label class="custom-control custom-radio">
  <input id="radio1" name="radio" type="radio" class="custom-control-input" />
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description">Toggle this custom radio</span>
</label>
<label class="custom-control custom-radio">
  <input id="radio2" name="radio" type="radio" class="custom-control-input" />
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description">Or toggle this other custom radio</span>
</label>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">id=</span><span class="s">"radio1"</span> <span class="na">name=</span><span class="s">"radio"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Toggle this custom radio<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">id=</span><span class="s">"radio2"</span> <span class="na">name=</span><span class="s">"radio"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Or toggle this other custom radio<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/label&gt;</span></code></pre></div>

<h4 id="disabled">Disabled</h4>

<p>Custom checkboxes and radios can also be disabled. Add the <code class="highlighter-rouge">disabled</code> boolean attribute to the <code class="highlighter-rouge">&lt;input&gt;</code> and the custom indicator and label description will be automatically styled.</p>

<div class="bd-example" data-example-id="">
<label class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" disabled="" />
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description">Check this custom checkbox</span>
</label>

<label class="custom-control custom-radio">
  <input id="radio3" name="radioDisabled" type="radio" class="custom-control-input" disabled="" />
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description">Toggle this custom radio</span>
</label>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-checkbox"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Check this custom checkbox<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/label&gt;</span>

<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">id=</span><span class="s">"radio3"</span> <span class="na">name=</span><span class="s">"radioDisabled"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Toggle this custom radio<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/label&gt;</span></code></pre></div>

<h4 id="validation-states">Validation states</h4>

<p>Add other states to your custom forms with our validation classes.</p>

<div class="bd-example" data-example-id="">
<div class="form-group has-success">
  <label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" />
    <span class="custom-control-indicator"></span>
    <span class="custom-control-description">Check this custom checkbox</span>
  </label>
</div>
<div class="form-group has-warning">
  <label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" />
    <span class="custom-control-indicator"></span>
    <span class="custom-control-description">Check this custom checkbox</span>
  </label>
</div>
<div class="form-group has-danger m-b-0">
  <label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" />
    <span class="custom-control-indicator"></span>
    <span class="custom-control-description">Check this custom checkbox</span>
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Check this custom checkbox<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Check this custom checkbox<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-danger m-b-0"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Check this custom checkbox<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h4 id="stacked">Stacked</h4>

<p>Custom checkboxes and radios are inline to start. Add a parent with class <code class="highlighter-rouge">.custom-controls-stacked</code> to ensure each form control is on separate lines.</p>

<div class="bd-example" data-example-id="">
<div class="custom-controls-stacked">
  <label class="custom-control custom-radio">
    <input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input" />
    <span class="custom-control-indicator"></span>
    <span class="custom-control-description">Toggle this custom radio</span>
  </label>
  <label class="custom-control custom-radio">
    <input id="radioStacked2" name="radio-stacked" type="radio" class="custom-control-input" />
    <span class="custom-control-indicator"></span>
    <span class="custom-control-description">Or toggle this other custom radio</span>
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"custom-controls-stacked"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">id=</span><span class="s">"radioStacked1"</span> <span class="na">name=</span><span class="s">"radio-stacked"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Toggle this custom radio<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control custom-radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">id=</span><span class="s">"radioStacked2"</span> <span class="na">name=</span><span class="s">"radio-stacked"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-description"</span><span class="nt">&gt;</span>Or toggle this other custom radio<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="select-menu">Select menu</h3>

<p>Custom <code class="highlighter-rouge">&lt;select&gt;</code> menus need only a custom class, <code class="highlighter-rouge">.custom-select</code> to trigger the custom styles.</p>

<div class="bd-example" data-example-id="">
<select class="custom-select">
  <option selected="">Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"custom-select"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">selected</span><span class="nt">&gt;</span>Open this select menu<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"1"</span><span class="nt">&gt;</span>One<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"2"</span><span class="nt">&gt;</span>Two<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"3"</span><span class="nt">&gt;</span>Three<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span></code></pre></div>

<p>Custom selects degrade nicely in IE9, receiving only a handful of overrides to remove the custom <code class="highlighter-rouge">background-image</code>. <strong>Multiple selects (e.g., <code class="highlighter-rouge">&lt;select multiple&gt;</code>) are not currently supported.</strong></p>

<h3 id="file-browser">File browser</h3>

<p>The file input is the most gnarly of the bunch and require additional JavaScript if you’d like to hook them up with functional <em>Choose file…</em> and selected file name text.</p>

<div class="bd-example" data-example-id="">
<label class="custom-file">
  <input type="file" id="file" class="custom-file-input" />
  <span class="custom-file-control"></span>
</label>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-file"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">id=</span><span class="s">"file"</span> <span class="na">class=</span><span class="s">"custom-file-input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-file-control"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/label&gt;</span></code></pre></div>

<p>Here’s how it works:</p>

<ul>
  <li>We wrap the <code class="highlighter-rouge">&lt;input&gt;</code> in a <code class="highlighter-rouge">&lt;label&gt;</code> so the custom control properly triggers the file browser.</li>
  <li>We hide the default file <code class="highlighter-rouge">&lt;input&gt;</code> via <code class="highlighter-rouge">opacity</code>.</li>
  <li>We use <code class="highlighter-rouge">:after</code> to generate a custom background and directive (<em>Choose file…</em>).</li>
  <li>We use <code class="highlighter-rouge">:before</code> to generate and position the <em>Browse</em> button.</li>
  <li>We declare a <code class="highlighter-rouge">height</code> on the <code class="highlighter-rouge">&lt;input&gt;</code> for proper spacing for surrounding content.</li>
</ul>

<p>In other words, it’s an entirely custom element, all generated via CSS.</p>

<h4 id="translating-or-customizing-the-strings">Translating or customizing the strings</h4>

<p>The <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/:lang"><code class="highlighter-rouge">:lang()</code> pseudo-class</a> is used to allow for easy translation of the “Browse” and “Choose file…” text into other languages. Simply override or add entries to the <code class="highlighter-rouge">$custom-file-text</code> SCSS variable with the relevant <a href="https://en.wikipedia.org/wiki/IETF_language_tag">language tag</a> and localized strings. The English strings can be customized the same way. For example, here’s how one might add a Spanish translation (Spanish’s language code is <code class="highlighter-rouge">es</code>):</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nv">$custom-file-text</span><span class="p">:</span> <span class="p">(</span>
  <span class="n">placeholder</span><span class="o">:</span> <span class="p">(</span>
    <span class="n">en</span><span class="o">:</span> <span class="s2">"Choose file..."</span><span class="o">,</span>
    <span class="n">es</span><span class="o">:</span> <span class="s2">"Seleccionar archivo..."</span>
  <span class="p">)</span><span class="o">,</span>
  <span class="n">button-label</span><span class="o">:</span> <span class="p">(</span>
    <span class="n">en</span><span class="o">:</span> <span class="s2">"Browse"</span><span class="o">,</span>
    <span class="n">es</span><span class="o">:</span> <span class="s2">"Navegar"</span>
  <span class="p">)</span>
<span class="p">);</span></code></pre></figure>

<p>You’ll need to set the language of your document (or subtree thereof) correctly in order for the correct text to be shown. This can be done using <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/lang">the <code class="highlighter-rouge">lang</code> attribute</a> or the <a href="https://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.12"><code class="highlighter-rouge">Content-Language</code> HTTP header</a>, among other methods.</p>

        </div>
      </div>
    </div>

    <footer class="bd-footer text-muted">
  <div class="container">
    <ul class="bd-footer-links">
      <li><a href="https://github.com/twbs/bootstrap">GitHub</a></li>
      <li><a href="https://twitter.com/getbootstrap">Twitter</a></li>
      <li><a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/examples/">Examples</a></li>
      <li><a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/about/history/">About</a></li>
    </ul>
    <p>Designed and built with all the love in the world by <a href="https://twitter.com/mdo" target="_blank">@mdo</a> and <a href="https://twitter.com/fat" target="_blank">@fat</a>. Maintained by the <a href="https://github.com/orgs/twbs/people">core team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
    <p>Currently v4.0.0-alpha.4. Code licensed <a rel="license" href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a>, docs <a rel="license" href="https://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a>.</p>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/jquery.min.js"><\/script>')</script>

<script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/tether.min.js"></script>


  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/dist/js/bootstrap.js"></script>



  
    <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/anchor.min.js"></script>
  
    <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/clipboard.min.js"></script>
  
    <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/holder.min.js"></script>
  
    <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/src/application.js"></script>
  


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/ie-emulation-modes-warning.js"></script>


<script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/jekyll-search.min.js"></script>

<script>
SimpleJekyllSearch.init({
  searchInput: document.getElementById('search-input'),
  resultsContainer: document.getElementById('search-results'),
  searchResultTemplate: '<a class="dropdown-item" href="{url}">{title}</a>',
  noResultsText: '<div class="dropdown-item no-results">Sorry, there are no results for that search.</div>',
  json: '/admin/tool/themetester/docs/4.0.0-alpha.4/search.json'
})
</script>


<script>
Holder.addTheme('gray', {
  bg: '#777',
  fg: 'rgba(255,255,255,.75)',
  font: 'Helvetica',
  fontweight: 'normal'
})
</script>

  </body>
</html>
