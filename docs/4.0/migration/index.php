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

$strheading = 'Theme Tester: Bootstrap 4 CSS : Migrating to v4';
$url = new \core\url('/admin/tool/themetester/bootswatch4.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Migrating to v4");
$PAGE->requires->jquery();

$PAGE->requires->css('/admin/tool/themetester/docsearch.min.css');

$PAGE->requires->css('/admin/tool/themetester/assets/css/docs.min.css');
admin_externalpage_setup('toolthemetester');

echo $OUTPUT->header();

echo \core\output\html_writer::link(new \core\url('/admin/tool/themetester/index.php'), '&laquo; Back to index');
echo $OUTPUT->heading($strheading);

?>

<!-- Favicons -->
<link rel="apple-touch-icon" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/favicon.ico">
<meta name="msapplication-config" content="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@getbootstrap">
<meta name="twitter:creator" content="@getbootstrap">
<meta name="twitter:title" content="Migrating to v4">
<meta name="twitter:description" content="Bootstrap 4 is a major rewrite of the entire project. The most notable changes are summarized below, followed by more specific changes to relevant components.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/migration/">
<meta property="og:title" content="Migrating to v4">
<meta property="og:description" content="Bootstrap 4 is a major rewrite of the entire project. The most notable changes are summarized below, followed by more specific changes to relevant components.">
<meta property="og:type" content="website">
<meta property="og:image" content="/assets/brand/bootstrap-social.png">
<meta property="og:image:secure_url" content="/assets/brand/bootstrap-social.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">




    <div class="container-fluid">
      <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
          <form class="bd-search d-flex align-items-center">
  <input type="search" class="form-control" id="search-input" placeholder="Search..." aria-label="Search for..." autocomplete="off">
  <button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>
</button>
</form>

<nav class="collapse bd-links" id="bd-docs-nav"><div class="bd-toc-item">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/introduction/">
        Getting started
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/introduction/">
              Introduction
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/download/">
              Download
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/contents/">
              Contents
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/browsers-devices/">
              Browsers & devices
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/javascript/">
              JavaScript
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/theming/">
              Theming
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/build-tools/">
              Build tools
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/webpack/">
              Webpack
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/accessibility/">
              Accessibility
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/layout/overview/">
        Layout
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/layout/overview/">
              Overview
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/layout/grid/">
              Grid
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/layout/media-object/">
              Media object
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/layout/utilities-for-layout/">
              Utilities for layout
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/reboot/">
        Content
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/reboot/">
              Reboot
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/typography/">
              Typography
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/code/">
              Code
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/images/">
              Images
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/tables/">
              Tables
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/figures/">
              Figures
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/alerts/">
        Components
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/alerts/">
              Alerts
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/badge/">
              Badge
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/breadcrumb/">
              Breadcrumb
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/buttons/">
              Buttons
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/button-group/">
              Button group
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/card/">
              Card
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/carousel/">
              Carousel
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/collapse/">
              Collapse
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/dropdowns/">
              Dropdowns
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/forms/">
              Forms
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/input-group/">
              Input group
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/jumbotron/">
              Jumbotron
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/list-group/">
              List group
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/modal/">
              Modal
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/navs/">
              Navs
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/navbar/">
              Navbar
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/pagination/">
              Pagination
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/popovers/">
              Popovers
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/progress/">
              Progress
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/scrollspy/">
              Scrollspy
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/tooltips/">
              Tooltips
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/borders/">
        Utilities
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/borders/">
              Borders
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/clearfix/">
              Clearfix
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/close-icon/">
              Close icon
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/colors/">
              Colors
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/display/">
              Display
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/embed/">
              Embed
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/flex/">
              Flex
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/float/">
              Float
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/image-replacement/">
              Image replacement
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/position/">
              Position
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/screenreaders/">
              Screenreaders
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/sizing/">
              Sizing
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/spacing/">
              Spacing
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/text/">
              Text
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/vertical-align/">
              Vertical align
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/visibility/">
              Visibility
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/extend/approach/">
        Extend
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/extend/approach/">
              Approach
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/extend/icons/">
              Icons
            </a></li></ul>
    </div><div class="bd-toc-item active">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/migration/">
        Migration
      </a>

      <ul class="nav bd-sidenav"></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/about/overview/">
        About
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/about/overview/">
              Overview
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/about/brand/">
              Brand
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/about/license/">
              License
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/about/translations/">
              Translations
            </a></li></ul>
    </div></nav>

        </div>

        
          <div class="d-none d-xl-block col-xl-2 bd-toc">
            <ul class="section-nav">
<li class="toc-entry toc-h2"><a href="#stable-changes">Stable changes</a>
<ul>
<li class="toc-entry toc-h3"><a href="#printing">Printing</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#beta-3-changes">Beta 3 changes</a>
<ul>
<li class="toc-entry toc-h3"><a href="#miscellaneous">Miscellaneous</a></li>
<li class="toc-entry toc-h3"><a href="#forms">Forms</a></li>
<li class="toc-entry toc-h3"><a href="#input-groups">Input groups</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#beta-2-changes">Beta 2 changes</a>
<ul>
<li class="toc-entry toc-h3"><a href="#breaking">Breaking</a></li>
<li class="toc-entry toc-h3"><a href="#highlights">Highlights</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#summary">Summary</a>
<ul>
<li class="toc-entry toc-h3"><a href="#browser-support">Browser support</a></li>
<li class="toc-entry toc-h3"><a href="#global-changes">Global changes</a></li>
<li class="toc-entry toc-h3"><a href="#grid-system">Grid system</a></li>
<li class="toc-entry toc-h3"><a href="#components">Components</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#by-component">By component</a>
<ul>
<li class="toc-entry toc-h3"><a href="#reboot">Reboot</a></li>
<li class="toc-entry toc-h3"><a href="#typography">Typography</a></li>
<li class="toc-entry toc-h3"><a href="#images">Images</a></li>
<li class="toc-entry toc-h3"><a href="#tables">Tables</a></li>
<li class="toc-entry toc-h3"><a href="#forms-1">Forms</a></li>
<li class="toc-entry toc-h3"><a href="#buttons">Buttons</a></li>
<li class="toc-entry toc-h3"><a href="#button-group">Button group</a></li>
<li class="toc-entry toc-h3"><a href="#dropdowns">Dropdowns</a></li>
<li class="toc-entry toc-h3"><a href="#grid-system-1">Grid system</a></li>
<li class="toc-entry toc-h3"><a href="#list-groups">List groups</a></li>
<li class="toc-entry toc-h3"><a href="#modal">Modal</a></li>
<li class="toc-entry toc-h3"><a href="#navs">Navs</a></li>
<li class="toc-entry toc-h3"><a href="#navbar">Navbar</a></li>
<li class="toc-entry toc-h3"><a href="#pagination">Pagination</a></li>
<li class="toc-entry toc-h3"><a href="#breadcrumbs">Breadcrumbs</a></li>
<li class="toc-entry toc-h3"><a href="#labels-and-badges">Labels and badges</a></li>
<li class="toc-entry toc-h3"><a href="#panels-thumbnails-and-wells">Panels, thumbnails, and wells</a></li>
<li class="toc-entry toc-h3"><a href="#panels">Panels</a></li>
<li class="toc-entry toc-h3"><a href="#progress">Progress</a></li>
<li class="toc-entry toc-h3"><a href="#carousel">Carousel</a></li>
<li class="toc-entry toc-h3"><a href="#tables-1">Tables</a></li>
<li class="toc-entry toc-h3"><a href="#utilities">Utilities</a></li>
<li class="toc-entry toc-h3"><a href="#vendor-prefix-mixins">Vendor prefix mixins</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#documentation">Documentation</a>
<ul>
<li class="toc-entry toc-h3"><a href="#responsive-utilities">Responsive utilities</a></li>
</ul>
</li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Migrating to v4</h1>
          <p class="bd-lead">Bootstrap 4 is a major rewrite of the entire project. The most notable changes are summarized below, followed by more specific changes to relevant components.</p>
          <h2 id="stable-changes">Stable changes</h2>

<p>Moving from Beta 3 to our stable v4.0 release, there are no breaking changes, but there are some notable changes.</p>

<h3 id="printing">Printing</h3>
<ul>
  <li>
    <p>Fixed broken print utilities. Previously, using a <code class="highlighter-rouge">.d-print-*</code> class would unexpectedly overrule any other <code class="highlighter-rouge">.d-*</code> class. Now, they match our other display utilities and only apply to that media (<code class="highlighter-rouge">@media print</code>).</p>
  </li>
  <li>
    <p>Expanded available print display utilities to match other utilities. Beta 3 and older only had <code class="highlighter-rouge">block</code>, <code class="highlighter-rouge">inline-block</code>, <code class="highlighter-rouge">inline</code>, and <code class="highlighter-rouge">none</code>. Stable v4 added <code class="highlighter-rouge">flex</code>, <code class="highlighter-rouge">inline-flex</code>, <code class="highlighter-rouge">table</code>, <code class="highlighter-rouge">table-row</code>, and <code class="highlighter-rouge">table-cell</code>.</p>
  </li>
  <li>
    <p>Fixed print preview rendering across browsers with new print styles that specify <code class="highlighter-rouge">@page</code> <code class="highlighter-rouge">size</code>.</p>
  </li>
</ul>

<h2 id="beta-3-changes">Beta 3 changes</h2>

<p>While Beta 2 saw the bulk of our breaking changes during the beta phase, but we still have a few that needed to be addressed in the Beta 3 release. These changes apply if you’re updating to Beta 3 from Beta 2 or any older version of Bootstrap.</p>

<h3 id="miscellaneous">Miscellaneous</h3>

<ul>
  <li>Removed the unused <code class="highlighter-rouge">$thumbnail-transition</code> variable. We weren’t transitioning anything, so it was just extra code.</li>
  <li>The npm package no longer includes any files other than our source and dist files; if you relied on them and were running our scripts via the <code class="highlighter-rouge">node_modules</code> folder, you should adapt your workflow.</li>
</ul>

<h3 id="forms">Forms</h3>

<ul>
  <li>
    <p>Rewrote both custom and default checkboxes and radios. Now, both have matching HTML structure (outer <code class="highlighter-rouge">&lt;div&gt;</code> with sibling <code class="highlighter-rouge">&lt;input&gt;</code> and <code class="highlighter-rouge">&lt;label&gt;</code>) and the same layout styles (stacked default, inline with modifier class). This allows us to style the label based on the input’s state, simplifying support for the <code class="highlighter-rouge">disabled</code> attribute (previously requiring a parent class) and better supporting our form validation.</p>

    <p>As part of this, we’ve changed the CSS for managing multiple <code class="highlighter-rouge">background-image</code>s on custom form checkboxes and radios. Previously, the now removed <code class="highlighter-rouge">.custom-control-indicator</code> element had the background color, gradient, and SVG icon. Customizing the background gradient meant replacing all of those every time you needed to change just one. Now, we have <code class="highlighter-rouge">.custom-control-label::before</code> for the fill and gradient and <code class="highlighter-rouge">.custom-control-label::after</code> handles the icon.</p>

    <p>To make a custom check inline, add <code class="highlighter-rouge">.custom-control-inline</code>.</p>
  </li>
  <li>
    <p>Updated selector for input-based button groups. Instead of <code class="highlighter-rouge">[data-toggle="buttons"] { }</code> for style and behavior, we use the <code class="highlighter-rouge">data</code> attribute just for JS behaviors and rely on a new <code class="highlighter-rouge">.btn-group-toggle</code> class for styling.</p>
  </li>
  <li>
    <p>Removed <code class="highlighter-rouge">.col-form-legend</code> in favor of a slightly improved <code class="highlighter-rouge">.col-form-label</code>. This way <code class="highlighter-rouge">.col-form-label-sm</code> and <code class="highlighter-rouge">.col-form-label-lg</code> can be used on <code class="highlighter-rouge">&lt;legend&gt;</code> elements with ease.</p>
  </li>
  <li>
    <p>Custom file inputs received a change to their <code class="highlighter-rouge">$custom-file-text</code> Sass variable. It’s no longer a nested Sass map and now only powers one string—the <code class="highlighter-rouge">Browse</code> button as that is now the only pseudo-element generated from our Sass. The <code class="highlighter-rouge">Choose file</code> text now comes from the <code class="highlighter-rouge">.custom-file-label</code>.</p>
  </li>
</ul>

<h3 id="input-groups">Input groups</h3>

<ul>
  <li>
    <p>Input group addons are now specific to their placement relative to an input. We’ve dropped <code class="highlighter-rouge">.input-group-addon</code> and <code class="highlighter-rouge">.input-group-btn</code> for two new classes, <code class="highlighter-rouge">.input-group-prepend</code> and <code class="highlighter-rouge">.input-group-append</code>. You must explicitly use an append or a prepend now, simplifying much of our CSS. Within an append or prepend, place your buttons as they would exist anywhere else, but wrap text in <code class="highlighter-rouge">.input-group-text</code>.</p>
  </li>
  <li>
    <p>Validation styles are now supported, as are multiple inputs (though you can only validate one input per group).</p>
  </li>
  <li>
    <p>Sizing classes must be on the parent <code class="highlighter-rouge">.input-group</code> and not the individual form elements.</p>
  </li>
</ul>

<h2 id="beta-2-changes">Beta 2 changes</h2>

<p>While in beta, we aim to have no breaking changes. However, things don’t always go as planned. Below are the breaking changes to bear in mind when moving from Beta 1 to Beta 2.</p>

<h3 id="breaking">Breaking</h3>

<ul>
  <li>Removed <code class="highlighter-rouge">$badge-color</code> variable and its usage on <code class="highlighter-rouge">.badge</code>. We use a color contrast function to pick a <code class="highlighter-rouge">color</code> based on the <code class="highlighter-rouge">background-color</code>, so the variable is unnecessary.</li>
  <li>Renamed <code class="highlighter-rouge">grayscale()</code> function to <code class="highlighter-rouge">gray()</code> to avoid breaking conflict with the CSS native <code class="highlighter-rouge">grayscale</code> filter.</li>
  <li>Renamed <code class="highlighter-rouge">.table-inverse</code>, <code class="highlighter-rouge">.thead-inverse</code>, and <code class="highlighter-rouge">.thead-default</code> to <code class="highlighter-rouge">.*-dark</code> and <code class="highlighter-rouge">.*-light</code>, matching our color schemes used elsewhere.</li>
  <li>Responsive tables now generate classes for each grid breakpoint. This breaks from Beta 1 in that the <code class="highlighter-rouge">.table-responsive</code> you’ve been using is more like <code class="highlighter-rouge">.table-responsive-md</code>. You may now use <code class="highlighter-rouge">.table-responsive</code> or <code class="highlighter-rouge">.table-responsive-{sm,md,lg,xl}</code> as needed.</li>
  <li>Dropped Bower support as the package manager has been deprecated for alternatives (e.g., Yarn or npm). <a href="https://github.com/bower/bower/issues/2298">See bower/bower#2298</a> for details.</li>
  <li>Bootstrap still requires jQuery 1.9.1 or higher, but you’re advised to use version 3.x since v3.x’s supported browsers are the ones Bootstrap supports plus v3.x has some security fixes.</li>
  <li>Removed the unused <code class="highlighter-rouge">.form-control-label</code> class. If you did make use of this class, it was duplicate of the <code class="highlighter-rouge">.col-form-label</code> class that vertically centered a <code class="highlighter-rouge">&lt;label&gt;</code> with it’s associated input in horizontal form layouts.</li>
  <li>Changed the <code class="highlighter-rouge">color-yiq</code> from a mixin that included the <code class="highlighter-rouge">color</code> property to a function that returns a value, allowing you to use it for any CSS property. For example, instead of <code class="highlighter-rouge">color-yiq(#000)</code>, you’d write <code class="highlighter-rouge">color: color-yiq(#000);</code>.</li>
</ul>

<h3 id="highlights">Highlights</h3>

<ul>
  <li>Introduced new <code class="highlighter-rouge">pointer-events</code> usage on modals. The outer <code class="highlighter-rouge">.modal-dialog</code> passes through events with <code class="highlighter-rouge">pointer-events: none</code> for custom click handling (making it possible to just listen on the <code class="highlighter-rouge">.modal-backdrop</code> for any clicks), and then counteracts it for the actual <code class="highlighter-rouge">.modal-content</code> with <code class="highlighter-rouge">pointer-events: auto</code>.</li>
</ul>

<h2 id="summary">Summary</h2>

<p>Here are the big ticket items you’ll want to be aware of when moving from v3 to v4.</p>

<h3 id="browser-support">Browser support</h3>

<ul>
  <li>Dropped IE8, IE9, and iOS 6 support. v4 is now only IE10+ and iOS 7+. For sites needing either of those, use v3.</li>
  <li>Added official support for Android v5.0 Lollipop’s Browser and WebView. Earlier versions of the Android Browser and WebView remain only unofficially supported.</li>
</ul>

<h3 id="global-changes">Global changes</h3>

<ul>
  <li><strong>Flexbox is enabled by default.</strong> In general this means a move away from floats and more across our components.</li>
  <li>Switched from <a href="http://lesscss.org/">Less</a> to <a href="http://sass-lang.com/">Sass</a> for our source CSS files.</li>
  <li>Switched from <code class="highlighter-rouge">px</code> to <code class="highlighter-rouge">rem</code> as our primary CSS unit, though pixels are still used for media queries and grid behavior as device viewports are not affected by type size.</li>
  <li>Global font-size increased from <code class="highlighter-rouge">14px</code> to <code class="highlighter-rouge">16px</code>.</li>
  <li>Revamped grid tiers to add a fifth option (addressing smaller devices at <code class="highlighter-rouge">576px</code> and below) and removed the <code class="highlighter-rouge">-xs</code> infix from those classes. Example: <code class="highlighter-rouge">.col-6.col-sm-4.col-md-3</code>.</li>
  <li>Replaced the separate optional theme with configurable options via SCSS variables (e.g., <code class="highlighter-rouge">$enable-gradients: true</code>).</li>
  <li>Build system overhauled to use a series of npm scripts instead of Grunt. See <code class="highlighter-rouge">package.json</code> for all scripts, or our project readme for local development needs.</li>
  <li>Non-responsive usage of Bootstrap is no longer supported.</li>
  <li>Dropped the online Customizer in favor of more extensive setup documentation and customized builds.</li>
  <li>Added dozens of new <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/">utility classes</a> for common CSS property-value pairs and margin/padding spacing shortcuts.</li>
</ul>

<h3 id="grid-system">Grid system</h3>

<ul>
  <li><strong>Moved to flexbox.</strong>
    <ul>
      <li>Added support for flexbox in the grid mixins and predefined classes.</li>
      <li>As part of flexbox, included support for vertical and horizontal alignment classes.</li>
    </ul>
  </li>
  <li><strong>Updated grid class names and a new grid tier.</strong>
    <ul>
      <li>Added a new <code class="highlighter-rouge">sm</code> grid tier below <code class="highlighter-rouge">768px</code> for more granular control. We now have <code class="highlighter-rouge">xs</code>, <code class="highlighter-rouge">sm</code>, <code class="highlighter-rouge">md</code>, <code class="highlighter-rouge">lg</code>, and <code class="highlighter-rouge">xl</code>. This also means every tier has been bumped up one level (so <code class="highlighter-rouge">.col-md-6</code> in v3 is now <code class="highlighter-rouge">.col-lg-6</code> in v4).</li>
      <li><code class="highlighter-rouge">xs</code> grid classes have been modified to not require the infix to more accurately represent that they start applying styles at <code class="highlighter-rouge">min-width: 0</code> and not a set pixel value. Instead of <code class="highlighter-rouge">.col-xs-6</code>, it’s now <code class="highlighter-rouge">.col-6</code>. All other grid tiers require the infix (e.g., <code class="highlighter-rouge">sm</code>).</li>
    </ul>
  </li>
  <li><strong>Updated grid sizes, mixins, and variables.</strong>
    <ul>
      <li>Grid gutters now have a Sass map so you can specify specific gutter widths at each breakpoint.</li>
      <li>Updated grid mixins to utilize a <code class="highlighter-rouge">make-col-ready</code> prep mixin and a <code class="highlighter-rouge">make-col</code> to set the <code class="highlighter-rouge">flex</code> and <code class="highlighter-rouge">max-width</code> for individual column sizing.</li>
      <li>Changed grid system media query breakpoints and container widths to account for new grid tier and ensure columns are evenly divisible by <code class="highlighter-rouge">12</code> at their max width.</li>
      <li>Grid breakpoints and container widths are now handled via Sass maps (<code class="highlighter-rouge">$grid-breakpoints</code> and <code class="highlighter-rouge">$container-max-widths</code>) instead of a handful of separate variables. These replace the <code class="highlighter-rouge">@screen-*</code> variables entirely and allow you to fully customize the grid tiers.</li>
      <li>Media queries have also changed. Instead of repeating our media query declarations with the same value each time, we now have <code class="highlighter-rouge">@include media-breakpoint-up/down/only</code>. Now, instead of writing <code class="highlighter-rouge">@media (min-width: @screen-sm-min) { ... }</code>, you can write <code class="highlighter-rouge">@include media-breakpoint-up(sm) { ... }</code>.</li>
    </ul>
  </li>
</ul>

<h3 id="components">Components</h3>

<ul>
  <li><strong>Dropped panels, thumbnails, and wells</strong> for a new all-encompassing component, <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/card/">cards</a>.</li>
  <li><strong>Dropped the Glyphicons icon font.</strong> If you need icons, some options are:
    <ul>
      <li>the upstream version of <a href="https://glyphicons.com/">Glyphicons</a></li>
      <li><a href="https://octicons.github.com/">Octicons</a></li>
      <li><a href="https://fontawesome.com/">Font Awesome</a></li>
      <li>See the <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/extend/icons/">Extend page</a> for a list of alternatives. Have additional suggestions? Please open an issue or PR.</li>
    </ul>
  </li>
  <li><strong>Dropped the Affix jQuery plugin.</strong>
    <ul>
      <li>We recommend using <code class="highlighter-rouge">position: sticky</code> instead. <a href="http://html5please.com/#sticky">See the HTML5 Please entry</a> for details and specific polyfill recommendations. One suggestion is to use an <code class="highlighter-rouge">@supports</code> rule for implementing it (e.g., <code class="highlighter-rouge">@supports (position: sticky) { ... }</code>)/</li>
      <li>If you were using Affix to apply additional, non-<code class="highlighter-rouge">position</code> styles, the polyfills might not support your use case. One option for such uses is the third-party <a href="https://github.com/acch/scrollpos-styler">ScrollPos-Styler</a> library.</li>
    </ul>
  </li>
  <li><strong>Dropped the pager component</strong> as it was essentially slightly customized buttons.</li>
  <li><strong>Refactored nearly all components</strong> to use more un-nested class selectors instead of over-specific children selectors.</li>
</ul>

<h2 id="by-component">By component</h2>

<p>This list highlights key changes by component between v3.x.x and v4.0.0.</p>

<h3 id="reboot">Reboot</h3>

<p>New to Bootstrap 4 is the <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/reboot/">Reboot</a>, a new stylesheet that builds on Normalize with our own somewhat opinionated reset styles. Selectors appearing in this file only use elements—there are no classes here. This isolates our reset styles from our component styles for a more modular approach. Some of the most important resets this includes are the <code class="highlighter-rouge">box-sizing: border-box</code> change, moving from <code class="highlighter-rouge">em</code> to <code class="highlighter-rouge">rem</code> units on many elements, link styles, and many form element resets.</p>

<h3 id="typography">Typography</h3>

<ul>
  <li>Moved all <code class="highlighter-rouge">.text-</code> utilities to the <code class="highlighter-rouge">_utilities.scss</code> file.</li>
  <li>Dropped <code class="highlighter-rouge">.page-header</code> as, aside from the border, all its styles can be applied via utilities.</li>
  <li><code class="highlighter-rouge">.dl-horizontal</code> has been dropped. Instead, use <code class="highlighter-rouge">.row</code> on <code class="highlighter-rouge">&lt;dl&gt;</code> and use grid column classes (or mixins) on its <code class="highlighter-rouge">&lt;dt&gt;</code> and <code class="highlighter-rouge">&lt;dd&gt;</code> children.</li>
  <li>Custom <code class="highlighter-rouge">&lt;blockquote&gt;</code> styling has moved to classes—<code class="highlighter-rouge">.blockquote</code> and the <code class="highlighter-rouge">.blockquote-reverse</code> modifier.</li>
  <li><code class="highlighter-rouge">.list-inline</code> now requires that its children list items have the new <code class="highlighter-rouge">.list-inline-item</code> class applied to them.</li>
</ul>

<h3 id="images">Images</h3>

<ul>
  <li>Renamed <code class="highlighter-rouge">.img-responsive</code> to <code class="highlighter-rouge">.img-fluid</code>.</li>
  <li>Renamed <code class="highlighter-rouge">.img-rounded</code> to <code class="highlighter-rouge">.rounded</code></li>
  <li>Renamed <code class="highlighter-rouge">.img-circle</code> to <code class="highlighter-rouge">.rounded-circle</code></li>
</ul>

<h3 id="tables">Tables</h3>

<ul>
  <li>Nearly all instances of the <code class="highlighter-rouge">&gt;</code> selector have been removed, meaning nested tables will now automatically inherit styles from their parents. This greatly simplifies our selectors and potential customizations.</li>
  <li>Renamed <code class="highlighter-rouge">.table-condensed</code> to <code class="highlighter-rouge">.table-sm</code> for consistency.</li>
  <li>Added a new <code class="highlighter-rouge">.table-inverse</code> option.</li>
  <li>Added table header modifiers: <code class="highlighter-rouge">.thead-default</code> and <code class="highlighter-rouge">.thead-inverse</code>.</li>
  <li>Renamed contextual classes to have a <code class="highlighter-rouge">.table-</code>-prefix. Hence <code class="highlighter-rouge">.active</code>, <code class="highlighter-rouge">.success</code>, <code class="highlighter-rouge">.warning</code>, <code class="highlighter-rouge">.danger</code> and <code class="highlighter-rouge">.info</code> to <code class="highlighter-rouge">.table-active</code>, <code class="highlighter-rouge">.table-success</code>, <code class="highlighter-rouge">.table-warning</code>, <code class="highlighter-rouge">.table-danger</code> and <code class="highlighter-rouge">.table-info</code>.</li>
</ul>

<h3 id="forms-1">Forms</h3>

<ul>
  <li>Moved element resets to the <code class="highlighter-rouge">_reboot.scss</code> file.</li>
  <li>Renamed <code class="highlighter-rouge">.control-label</code> to <code class="highlighter-rouge">.col-form-label</code>.</li>
  <li>Renamed <code class="highlighter-rouge">.input-lg</code> and <code class="highlighter-rouge">.input-sm</code> to <code class="highlighter-rouge">.form-control-lg</code> and <code class="highlighter-rouge">.form-control-sm</code>, respectively.</li>
  <li>Dropped <code class="highlighter-rouge">.form-group-*</code> classes for simplicity’s sake. Use <code class="highlighter-rouge">.form-control-*</code> classes instead now.</li>
  <li>Dropped <code class="highlighter-rouge">.help-block</code> and replaced it with <code class="highlighter-rouge">.form-text</code> for block-level help text. For inline help text and other flexible options, use utility classes like <code class="highlighter-rouge">.text-muted</code>.</li>
  <li>Dropped <code class="highlighter-rouge">.radio-inline</code> and <code class="highlighter-rouge">.checkbox-inline</code>.</li>
  <li>Consolidated <code class="highlighter-rouge">.checkbox</code> and <code class="highlighter-rouge">.radio</code> into <code class="highlighter-rouge">.form-check</code> and the various <code class="highlighter-rouge">.form-check-*</code> classes.</li>
  <li>Horizontal forms overhauled:
    <ul>
      <li>Dropped the <code class="highlighter-rouge">.form-horizontal</code> class requirement.</li>
      <li><code class="highlighter-rouge">.form-group</code> no longer applies styles from the <code class="highlighter-rouge">.row</code> via mixin, so <code class="highlighter-rouge">.row</code> is now required for horizontal grid layouts (e.g., <code class="highlighter-rouge">&lt;div class="form-group row"&gt;</code>).</li>
      <li>Added new <code class="highlighter-rouge">.col-form-label</code> class to vertically center labels with <code class="highlighter-rouge">.form-control</code>s.</li>
      <li>Added new <code class="highlighter-rouge">.form-row</code> for compact form layouts with the grid classes (swap your <code class="highlighter-rouge">.row</code> for a <code class="highlighter-rouge">.form-row</code> and go).</li>
    </ul>
  </li>
  <li>Added custom forms support (for checkboxes, radios, selects, and file inputs).</li>
  <li>Replaced <code class="highlighter-rouge">.has-error</code>, <code class="highlighter-rouge">.has-warning</code>, and <code class="highlighter-rouge">.has-success</code> classes with HTML5 form validation via CSS’s <code class="highlighter-rouge">:invalid</code> and <code class="highlighter-rouge">:valid</code> pseudo-classes.</li>
  <li>Renamed <code class="highlighter-rouge">.form-control-static</code> to <code class="highlighter-rouge">.form-control-plaintext</code>.</li>
</ul>

<h3 id="buttons">Buttons</h3>

<ul>
  <li>Renamed <code class="highlighter-rouge">.btn-default</code> to <code class="highlighter-rouge">.btn-secondary</code>.</li>
  <li>Dropped the <code class="highlighter-rouge">.btn-xs</code> class entirely as <code class="highlighter-rouge">.btn-sm</code> is proportionally much smaller than v3’s.</li>
  <li>The <a href="/docs/3.3/javascript/#buttons-stateful">stateful button</a> feature of the <code class="highlighter-rouge">button.js</code> jQuery plugin has been dropped. This includes the <code class="highlighter-rouge">$().button(string)</code> and <code class="highlighter-rouge">$().button('reset')</code> methods. We advise using a tiny bit of custom JavaScript instead, which will have the benefit of behaving exactly the way you want it to.
    <ul>
      <li>Note that the other features of the plugin (button checkboxes, button radios, single-toggle buttons) have been retained in v4.</li>
    </ul>
  </li>
  <li>Change buttons’ <code class="highlighter-rouge">[disabled]</code> to <code class="highlighter-rouge">:disabled</code> as IE9+ supports <code class="highlighter-rouge">:disabled</code>. However <code class="highlighter-rouge">fieldset[disabled]</code> is still necessary because <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset#Browser_compatibility">native disabled fieldsets are still buggy in IE11</a>.</li>
</ul>

<h3 id="button-group">Button group</h3>

<ul>
  <li>Rewrote component with flexbox.</li>
  <li>Removed <code class="highlighter-rouge">.btn-group-justified</code>. As a replacement you can use <code class="highlighter-rouge">&lt;div class="btn-group d-flex" role="group"&gt;&lt;/div&gt;</code> as a wrapper around elements with <code class="highlighter-rouge">.w-100</code>.</li>
  <li>Dropped the <code class="highlighter-rouge">.btn-group-xs</code> class entirely given removal of <code class="highlighter-rouge">.btn-xs</code>.</li>
  <li>Removed explicit spacing between button groups in button toolbars; use margin utilities now.</li>
  <li>Improved documentation for use with other components.</li>
</ul>

<h3 id="dropdowns">Dropdowns</h3>

<ul>
  <li>Switched from parent selectors to singular classes for all components, modifiers, etc.</li>
  <li>Simplified dropdown styles to no longer ship with upward or downward facing arrows attached to the dropdown menu.</li>
  <li>Dropdowns can be built with <code class="highlighter-rouge">&lt;div&gt;</code>s or <code class="highlighter-rouge">&lt;ul&gt;</code>s now.</li>
  <li>Rebuilt dropdown styles and markup to provide easy, built-in support for <code class="highlighter-rouge">&lt;a&gt;</code> and <code class="highlighter-rouge">&lt;button&gt;</code> based dropdown items.</li>
  <li>Renamed <code class="highlighter-rouge">.divider</code> to <code class="highlighter-rouge">.dropdown-divider</code>.</li>
  <li>Dropdown items now require <code class="highlighter-rouge">.dropdown-item</code>.</li>
  <li>Dropdown toggles no longer require an explicit <code class="highlighter-rouge">&lt;span class="caret"&gt;&lt;/span&gt;</code>; this is now provided automatically via CSS’s <code class="highlighter-rouge">::after</code> on <code class="highlighter-rouge">.dropdown-toggle</code>.</li>
</ul>

<h3 id="grid-system-1">Grid system</h3>

<ul>
  <li>Added a new <code class="highlighter-rouge">576px</code> grid breakpoint as <code class="highlighter-rouge">sm</code>, meaning there are now five total tiers (<code class="highlighter-rouge">xs</code>, <code class="highlighter-rouge">sm</code>, <code class="highlighter-rouge">md</code>, <code class="highlighter-rouge">lg</code>, and <code class="highlighter-rouge">xl</code>).</li>
  <li>Renamed the responsive grid modifier classes from <code class="highlighter-rouge">.col-{breakpoint}-{modifier}-{size}</code> to <code class="highlighter-rouge">.{modifier}-{breakpoint}-{size}</code> for simpler grid classes.</li>
  <li>Dropped push and pull modifier classes for the new flexbox-powered <code class="highlighter-rouge">order</code> classes. For example, instead of <code class="highlighter-rouge">.col-8.push-4</code> and <code class="highlighter-rouge">.col-4.pull-8</code>, you’d use <code class="highlighter-rouge">.col-8.order-2</code> and <code class="highlighter-rouge">.col-4.order-1</code>.</li>
  <li>Added flexbox utility classes for grid system and components.</li>
</ul>

<h3 id="list-groups">List groups</h3>

<ul>
  <li>Rewrote component with flexbox.</li>
  <li>Replaced <code class="highlighter-rouge">a.list-group-item</code> with an explicit class, <code class="highlighter-rouge">.list-group-item-action</code>, for styling link and button versions of list group items.</li>
  <li>Added <code class="highlighter-rouge">.list-group-flush</code> class for use with cards.</li>
</ul>

<h3 id="modal">Modal</h3>

<ul>
  <li>Rewrote component with flexbox.</li>
  <li>Given move to flexbox, alignment of dismiss icons in the header is likely broken as we’re no longer using floats. Floated content comes first, but with flexbox that’s no longer the case. Update your dismiss icons to come after modal titles to fix.</li>
  <li>The <code class="highlighter-rouge">remote</code> option (which could be used to automatically load and inject external content into a modal) and the corresponding <code class="highlighter-rouge">loaded.bs.modal</code> event were removed. We recommend instead using client-side templating or a data binding framework, or calling <a href="https://api.jquery.com/load/">jQuery.load</a> yourself.</li>
</ul>

<h3 id="navs">Navs</h3>

<ul>
  <li>Rewrote component with flexbox.</li>
  <li>Dropped nearly all <code class="highlighter-rouge">&gt;</code> selectors for simpler styling via un-nested classes.</li>
  <li>Instead of HTML-specific selectors like <code class="highlighter-rouge">.nav &gt; li &gt; a</code>, we use separate classes for <code class="highlighter-rouge">.nav</code>s, <code class="highlighter-rouge">.nav-item</code>s, and <code class="highlighter-rouge">.nav-link</code>s. This makes your HTML more flexible while bringing along increased extensibility.</li>
</ul>

<h3 id="navbar">Navbar</h3>

<p>The navbar has been entirely rewritten in flexbox with improved support for alignment, responsiveness, and customization.</p>

<ul>
  <li>Responsive navbar behaviors are now applied to the <code class="highlighter-rouge">.navbar</code> class via the <strong>required</strong> <code class="highlighter-rouge">.navbar-expand-{breakpoint}</code> where you choose where to collapse the navbar. Previously this was a Less variable modification and required recompiling.</li>
  <li><code class="highlighter-rouge">.navbar-default</code> is now <code class="highlighter-rouge">.navbar-light</code>, though <code class="highlighter-rouge">.navbar-dark</code> remains the same. <strong>One of these is required on each navbar.</strong> However, these classes no longer set <code class="highlighter-rouge">background-color</code>s; instead they essentially only affect <code class="highlighter-rouge">color</code>.</li>
  <li>Navbars now require a background declaration of some kind. Choose from our background utilities (<code class="highlighter-rouge">.bg-*</code>) or set your own with the light/inverse classes above <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/navbar/#color-schemes">for mad customization</a>.</li>
  <li>Given flexbox styles, navbars can now use flexbox utilities for easy alignment options.</li>
  <li><code class="highlighter-rouge">.navbar-toggle</code> is now <code class="highlighter-rouge">.navbar-toggler</code> and has different styles and inner markup (no more three <code class="highlighter-rouge">&lt;span&gt;</code>s).</li>
  <li>Dropped the <code class="highlighter-rouge">.navbar-form</code> class entirely. It’s no longer necessary; instead, just use <code class="highlighter-rouge">.form-inline</code> and apply margin utilities as necessary.</li>
  <li>Navbars no longer include <code class="highlighter-rouge">margin-bottom</code> or <code class="highlighter-rouge">border-radius</code> by default. Use utilities as necessary.</li>
  <li>All examples featuring navbars have been updated to include new markup.</li>
</ul>

<h3 id="pagination">Pagination</h3>

<ul>
  <li>Rewrote component with flexbox.</li>
  <li>Explicit classes (<code class="highlighter-rouge">.page-item</code>, <code class="highlighter-rouge">.page-link</code>) are now required on the descendants of <code class="highlighter-rouge">.pagination</code>s</li>
  <li>Dropped the <code class="highlighter-rouge">.pager</code> component entirely as it was little more than customized outline buttons.</li>
</ul>

<h3 id="breadcrumbs">Breadcrumbs</h3>

<ul>
  <li>An explicit class, <code class="highlighter-rouge">.breadcrumb-item</code>, is now required on the descendants of <code class="highlighter-rouge">.breadcrumb</code>s</li>
</ul>

<h3 id="labels-and-badges">Labels and badges</h3>

<ul>
  <li>Renamed <code class="highlighter-rouge">.label</code> to <code class="highlighter-rouge">.badge</code> to disambiguate from the <code class="highlighter-rouge">&lt;label&gt;</code> element.</li>
  <li>Dropped the <code class="highlighter-rouge">.badge</code> component as it was nearly identical to labels. Use the <code class="highlighter-rouge">.badge-pill</code> modifier together with the label component instead for that rounded look.</li>
  <li>Badges are no longer floated automatically in list groups and other components. Utility classes are now required for that.</li>
  <li><code class="highlighter-rouge">.badge-default</code> has been dropped and <code class="highlighter-rouge">.badge-secondary</code> added to match component modifier classes used elsewhere.</li>
</ul>

<h3 id="panels-thumbnails-and-wells">Panels, thumbnails, and wells</h3>

<p>Dropped entirely for the new card component.</p>

<h3 id="panels">Panels</h3>

<ul>
  <li><code class="highlighter-rouge">.panel</code> to <code class="highlighter-rouge">.card</code>, now built with flexbox.</li>
  <li><code class="highlighter-rouge">.panel-default</code> removed and no replacement.</li>
  <li><code class="highlighter-rouge">.panel-group</code> removed and no replacement. <code class="highlighter-rouge">.card-group</code> is not a replacement, it is different.</li>
  <li><code class="highlighter-rouge">.panel-heading</code> to <code class="highlighter-rouge">.card-header</code></li>
  <li><code class="highlighter-rouge">.panel-title</code> to <code class="highlighter-rouge">.card-title</code>. Depending on the desired look, you may also want to use <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/typography/#headings">heading elements or classes</a> (e.g. <code class="highlighter-rouge">&lt;h3&gt;</code>, <code class="highlighter-rouge">.h3</code>) or bold elements or classes (e.g. <code class="highlighter-rouge">&lt;strong&gt;</code>, <code class="highlighter-rouge">&lt;b&gt;</code>, <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/text/#font-weight-and-italics"><code class="highlighter-rouge">.font-weight-bold</code></a>). Note that <code class="highlighter-rouge">.card-title</code>, while similarly named, produces a different look than <code class="highlighter-rouge">.panel-title</code>.</li>
  <li><code class="highlighter-rouge">.panel-body</code> to <code class="highlighter-rouge">.card-body</code></li>
  <li><code class="highlighter-rouge">.panel-footer</code> to <code class="highlighter-rouge">.card-footer</code></li>
  <li><code class="highlighter-rouge">.panel-primary</code>, <code class="highlighter-rouge">.panel-success</code>, <code class="highlighter-rouge">.panel-info</code>, <code class="highlighter-rouge">.panel-warning</code>, and <code class="highlighter-rouge">.panel-danger</code> have been dropped for <code class="highlighter-rouge">.bg-</code>, <code class="highlighter-rouge">.text-</code>, and <code class="highlighter-rouge">.border</code> utilities generated from our <code class="highlighter-rouge">$theme-colors</code> Sass map.</li>
</ul>

<h3 id="progress">Progress</h3>

<ul>
  <li>Replaced contextual <code class="highlighter-rouge">.progress-bar-*</code> classes with <code class="highlighter-rouge">.bg-*</code> utilities. For example, <code class="highlighter-rouge">class="progress-bar progress-bar-danger"</code> becomes <code class="highlighter-rouge">class="progress-bar bg-danger"</code>.</li>
  <li>Replaced <code class="highlighter-rouge">.active</code> for animated progress bars with <code class="highlighter-rouge">.progress-bar-animated</code>.</li>
</ul>

<h3 id="carousel">Carousel</h3>

<ul>
  <li>Overhauled the entire component to simplify design and styling. We have fewer styles for you to override, new indicators, and new icons.</li>
  <li>All CSS has been un-nested and renamed, ensuring each class is prefixed with <code class="highlighter-rouge">.carousel-</code>.
    <ul>
      <li>For carousel items, <code class="highlighter-rouge">.next</code>, <code class="highlighter-rouge">.prev</code>, <code class="highlighter-rouge">.left</code>, and <code class="highlighter-rouge">.right</code> are now <code class="highlighter-rouge">.carousel-item-next</code>, <code class="highlighter-rouge">.carousel-item-prev</code>, <code class="highlighter-rouge">.carousel-item-left</code>, and <code class="highlighter-rouge">.carousel-item-right</code>.</li>
      <li><code class="highlighter-rouge">.item</code> is also now <code class="highlighter-rouge">.carousel-item</code>.</li>
      <li>For prev/next controls, <code class="highlighter-rouge">.carousel-control.right</code> and <code class="highlighter-rouge">.carousel-control.left</code> are now <code class="highlighter-rouge">.carousel-control-next</code> and <code class="highlighter-rouge">.carousel-control-prev</code>, meaning they no longer require a specific base class.</li>
    </ul>
  </li>
  <li>Removed all responsive styling, deferring to utilities (e.g., showing captions on certain viewports) and custom styles as needed.</li>
  <li>Removed image overrides for images in carousel items, deferring to utilities.</li>
  <li>Tweaked the Carousel example to include the new markup and styles.</li>
</ul>

<h3 id="tables-1">Tables</h3>

<ul>
  <li>Removed support for styled nested tables. All table styles are now inherited in v4 for simpler selectors.</li>
  <li>Added inverse table variant.</li>
</ul>

<h3 id="utilities">Utilities</h3>

<ul>
  <li><strong>Display, hidden, and more:</strong>
    <ul>
      <li>Made display utilities responsive (e.g., <code class="highlighter-rouge">.d-none</code> and <code class="highlighter-rouge">d-{sm,md,lg,xl}-none</code>).</li>
      <li>Dropped the bulk of <code class="highlighter-rouge">.hidden-*</code> utilities for new <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/display/">display utilities</a>. For example, instead of <code class="highlighter-rouge">.hidden-sm-up</code>, use <code class="highlighter-rouge">.d-sm-none</code>. Renamed the <code class="highlighter-rouge">.hidden-print</code> utilities to use the display utility naming scheme. <a href="#responsive-utilities">More info under the Responsive utilities section of this page.</a></li>
      <li>Added <code class="highlighter-rouge">.float-{sm,md,lg,xl}-{left,right,none}</code> classes for responsive floats and removed <code class="highlighter-rouge">.pull-left</code> and <code class="highlighter-rouge">.pull-right</code> since they’re redundant to <code class="highlighter-rouge">.float-left</code> and <code class="highlighter-rouge">.float-right</code>.</li>
    </ul>
  </li>
  <li><strong>Type:</strong>
    <ul>
      <li>Added responsive variations to our text alignment classes <code class="highlighter-rouge">.text-{sm,md,lg,xl}-{left,center,right}</code>.</li>
    </ul>
  </li>
  <li><strong>Alignment and spacing:</strong>
    <ul>
      <li>Added new <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/spacing/">responsive margin and padding utilities</a> for all sides, plus vertical and horizontal shorthands.</li>
      <li>Added boatload of <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/flex/">flexbox utilities</a>.</li>
      <li>Dropped <code class="highlighter-rouge">.center-block</code> for the new <code class="highlighter-rouge">.mx-auto</code> class.</li>
    </ul>
  </li>
  <li>Clearfix updated to drop support for older browser versions.</li>
</ul>

<h3 id="vendor-prefix-mixins">Vendor prefix mixins</h3>

<p>Bootstrap 3’s <a href="https://www.thoughtco.com/css-vendor-prefixes-3466867">vendor prefix</a> mixins, which were deprecated in v3.2.0, have been removed in Bootstrap 4. Since we use <a href="https://github.com/postcss/autoprefixer">Autoprefixer</a>, they’re no longer necessary.</p>

<p>Removed the following mixins: <code class="highlighter-rouge">animation</code>, <code class="highlighter-rouge">animation-delay</code>, <code class="highlighter-rouge">animation-direction</code>, <code class="highlighter-rouge">animation-duration</code>, <code class="highlighter-rouge">animation-fill-mode</code>, <code class="highlighter-rouge">animation-iteration-count</code>, <code class="highlighter-rouge">animation-name</code>, <code class="highlighter-rouge">animation-timing-function</code>, <code class="highlighter-rouge">backface-visibility</code>, <code class="highlighter-rouge">box-sizing</code>, <code class="highlighter-rouge">content-columns</code>, <code class="highlighter-rouge">hyphens</code>, <code class="highlighter-rouge">opacity</code>, <code class="highlighter-rouge">perspective</code>, <code class="highlighter-rouge">perspective-origin</code>, <code class="highlighter-rouge">rotate</code>, <code class="highlighter-rouge">rotateX</code>, <code class="highlighter-rouge">rotateY</code>, <code class="highlighter-rouge">scale</code>, <code class="highlighter-rouge">scaleX</code>, <code class="highlighter-rouge">scaleY</code>, <code class="highlighter-rouge">skew</code>, <code class="highlighter-rouge">transform-origin</code>, <code class="highlighter-rouge">transition-delay</code>, <code class="highlighter-rouge">transition-duration</code>, <code class="highlighter-rouge">transition-property</code>, <code class="highlighter-rouge">transition-timing-function</code>, <code class="highlighter-rouge">transition-transform</code>, <code class="highlighter-rouge">translate</code>, <code class="highlighter-rouge">translate3d</code>, <code class="highlighter-rouge">user-select</code></p>

<h2 id="documentation">Documentation</h2>

<p>Our documentation received an upgrade across the board as well. Here’s the low down:</p>

<ul>
  <li>We’re still using Jekyll, but we have plugins in the mix:
    <ul>
      <li><code class="highlighter-rouge">bugify.rb</code> is used to efficiently list out the entries on our <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/browser-bugs/">browser bugs</a> page.</li>
      <li><code class="highlighter-rouge">example.rb</code> is a custom fork of the default <code class="highlighter-rouge">highlight.rb</code> plugin, allowing for easier example-code handling.</li>
      <li><code class="highlighter-rouge">callout.rb</code> is a similar custom fork of that, but designed for our special docs callouts.</li>
      <li><a href="https://github.com/toshimaru/jekyll-toc">jekyll-toc</a> is used to generate our table of contents.</li>
    </ul>
  </li>
  <li>All docs content has been rewritten in Markdown (instead of HTML) for easier editing.</li>
  <li>Pages have been reorganized for simpler content and a more approachable hierarchy.</li>
  <li>We moved from regular CSS to SCSS to take full advantage of Bootstrap’s variables, mixins, and more.</li>
</ul>

<h3 id="responsive-utilities">Responsive utilities</h3>

<p>All <code class="highlighter-rouge">@screen-</code> variables have been removed in v4.0.0. Use the <code class="highlighter-rouge">media-breakpoint-up()</code>, <code class="highlighter-rouge">media-breakpoint-down()</code>, or <code class="highlighter-rouge">media-breakpoint-only()</code> Sass mixins or the <code class="highlighter-rouge">$grid-breakpoints</code> Sass map instead.</p>

<p>Our responsive utility classes have largely been removed in favor of explicit <code class="highlighter-rouge">display</code> utilities.</p>

<ul>
  <li>The <code class="highlighter-rouge">.hidden</code> and <code class="highlighter-rouge">.show</code> classes have been removed because they conflicted with jQuery’s <code class="highlighter-rouge">$(...).hide()</code> and <code class="highlighter-rouge">$(...).show()</code> methods. Instead, try toggling the <code class="highlighter-rouge">[hidden]</code> attribute or use inline styles like <code class="highlighter-rouge">style="display: none;"</code> and <code class="highlighter-rouge">style="display: block;"</code>.</li>
  <li>All <code class="highlighter-rouge">.hidden-</code> classes have been removed, save for the print utilities which have been renamed.
    <ul>
      <li>Removed from v3: <code class="highlighter-rouge">.hidden-xs</code> <code class="highlighter-rouge">.hidden-sm</code> <code class="highlighter-rouge">.hidden-md</code> <code class="highlighter-rouge">.hidden-lg</code> <code class="highlighter-rouge">.visible-xs-block</code> <code class="highlighter-rouge">.visible-xs-inline</code> <code class="highlighter-rouge">.visible-xs-inline-block</code> <code class="highlighter-rouge">.visible-sm-block</code> <code class="highlighter-rouge">.visible-sm-inline</code> <code class="highlighter-rouge">.visible-sm-inline-block</code> <code class="highlighter-rouge">.visible-md-block</code> <code class="highlighter-rouge">.visible-md-inline</code> <code class="highlighter-rouge">.visible-md-inline-block</code> <code class="highlighter-rouge">.visible-lg-block</code> <code class="highlighter-rouge">.visible-lg-inline</code> <code class="highlighter-rouge">.visible-lg-inline-block</code></li>
      <li>Removed from v4 alphas: <code class="highlighter-rouge">.hidden-xs-up</code> <code class="highlighter-rouge">.hidden-xs-down</code> <code class="highlighter-rouge">.hidden-sm-up</code> <code class="highlighter-rouge">.hidden-sm-down</code> <code class="highlighter-rouge">.hidden-md-up</code> <code class="highlighter-rouge">.hidden-md-down</code> <code class="highlighter-rouge">.hidden-lg-up</code> <code class="highlighter-rouge">.hidden-lg-down</code></li>
    </ul>
  </li>
  <li>Print utilities no longer start with <code class="highlighter-rouge">.hidden-</code> or <code class="highlighter-rouge">.visible-</code>, but with <code class="highlighter-rouge">.d-print-</code>.
    <ul>
      <li>Old names: <code class="highlighter-rouge">.visible-print-block</code>, <code class="highlighter-rouge">.visible-print-inline</code>, <code class="highlighter-rouge">.visible-print-inline-block</code>, <code class="highlighter-rouge">.hidden-print</code></li>
      <li>New classes: <code class="highlighter-rouge">.d-print-block</code>, <code class="highlighter-rouge">.d-print-inline</code>, <code class="highlighter-rouge">.d-print-inline-block</code>, <code class="highlighter-rouge">.d-print-none</code></li>
    </ul>
  </li>
</ul>

<p>Rather than using explicit <code class="highlighter-rouge">.visible-*</code> classes, you make an element visible by simply not hiding it at that screen size. You can combine one <code class="highlighter-rouge">.d-*-none</code> class with one <code class="highlighter-rouge">.d-*-block</code> class to show an element only on a given interval of screen sizes (e.g. <code class="highlighter-rouge">.d-none.d-md-block.d-xl-none</code> shows the element only on medium and large devices).</p>

<p>Note that the changes to the grid breakpoints in v4 means that you’ll need to go one breakpoint larger to achieve the same results. The new responsive utility classes don’t attempt to accommodate less common cases where an element’s visibility can’t be expressed as a single contiguous range of viewport sizes; you will instead need to use custom CSS in such cases.</p>

        </main>
      </div>
    </div>

    <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/vendor/popper.min.js"></script><script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script><script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/vendor/anchor.min.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/vendor/clipboard.min.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/vendor/holder.min.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/src/application.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/src/ie-emulation-modes-warning.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/src/pwa.js"></script>
  </body>
</html>
