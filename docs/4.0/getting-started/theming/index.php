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

$strheading = 'Theme Tester: Bootstrap 4 CSS : Theming Bootstrap';
$url = new \core\url('/admin/tool/themetester/bootswatch4.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Theming Bootstrap");
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
<meta name="twitter:title" content="Theming Bootstrap">
<meta name="twitter:description" content="Customize Bootstrap 4 with our new built-in Sass variables for global style preferences for easy theming and component changes.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/getting-started/theming/">
<meta property="og:title" content="Theming Bootstrap">
<meta property="og:description" content="Customize Bootstrap 4 with our new built-in Sass variables for global style preferences for easy theming and component changes.">
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

<nav class="collapse bd-links" id="bd-docs-nav"><div class="bd-toc-item active">
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
            </a></li><li class="active bd-sidenav-active">
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
    </div><div class="bd-toc-item">
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
<li class="toc-entry toc-h2"><a href="#introduction">Introduction</a></li>
<li class="toc-entry toc-h2"><a href="#sass">Sass</a>
<ul>
<li class="toc-entry toc-h3"><a href="#file-structure">File structure</a></li>
<li class="toc-entry toc-h3"><a href="#importing">Importing</a></li>
<li class="toc-entry toc-h3"><a href="#variable-defaults">Variable defaults</a></li>
<li class="toc-entry toc-h3"><a href="#maps-and-loops">Maps and loops</a>
<ul>
<li class="toc-entry toc-h4"><a href="#modify-map">Modify map</a></li>
<li class="toc-entry toc-h4"><a href="#add-to-map">Add to map</a></li>
<li class="toc-entry toc-h4"><a href="#remove-from-map">Remove from map</a></li>
<li class="toc-entry toc-h4"><a href="#required-keys">Required keys</a></li>
</ul>
</li>
<li class="toc-entry toc-h3"><a href="#functions">Functions</a></li>
<li class="toc-entry toc-h3"><a href="#color-contrast">Color contrast</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#sass-options">Sass options</a></li>
<li class="toc-entry toc-h2"><a href="#color">Color</a>
<ul>
<li class="toc-entry toc-h3"><a href="#all-colors">All colors</a></li>
<li class="toc-entry toc-h3"><a href="#theme-colors">Theme colors</a></li>
<li class="toc-entry toc-h3"><a href="#grays">Grays</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#components">Components</a>
<ul>
<li class="toc-entry toc-h3"><a href="#modifiers">Modifiers</a></li>
<li class="toc-entry toc-h3"><a href="#responsive">Responsive</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#css-variables">CSS variables</a>
<ul>
<li class="toc-entry toc-h3"><a href="#available-variables">Available variables</a></li>
<li class="toc-entry toc-h3"><a href="#examples">Examples</a></li>
</ul>
</li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Theming Bootstrap</h1>
          <p class="bd-lead">Customize Bootstrap 4 with our new built-in Sass variables for global style preferences for easy theming and component changes.</p>
          <h2 id="introduction">Introduction</h2>

<p>In Bootstrap 3, theming was largely driven by variable overrides in LESS, custom CSS, and a separate theme stylesheet that we included in our <code class="highlighter-rouge">dist</code> files. With some effort, one could completely redesign the look of Bootstrap 3 without touching the core files. Bootstrap 4 provides a familiar, but slightly different approach.</p>

<p>Now, theming is accomplished by Sass variables, Sass maps, and custom CSS. There’s no more dedicated theme stylesheet; instead, you can enable the built-in theme to add gradients, shadows, and more.</p>

<h2 id="sass">Sass</h2>

<p>Utilize our source Sass files to take advantage of variables, maps, mixins, and more.</p>

<h3 id="file-structure">File structure</h3>

<p>Whenever possible, avoid modifying Bootstrap’s core files. For Sass, that means creating your own stylesheet that imports Bootstrap so you can modify and extend it. Assuming you’re using a package manager like npm, you’ll have a file structure that looks like this:</p>

<figure class="highlight"><pre><code class="language-plaintext" data-lang="plaintext">your-project/
├── scss
│   └── custom.scss
└── node_modules/
    └── bootstrap
        ├── js
        └── scss</code></pre></figure>

<p>If you’ve downloaded our source files and aren’t using a package manager, you’ll want to manually setup something similar to that structure, keeping Bootstrap’s source files separate from your own.</p>

<figure class="highlight"><pre><code class="language-plaintext" data-lang="plaintext">your-project/
├── scss
│   └── custom.scss
└── bootstrap/
    ├── js
    └── scss</code></pre></figure>

<h3 id="importing">Importing</h3>

<p>In your <code class="highlighter-rouge">custom.scss</code>, you’ll import Bootstrap’s source Sass files. You have two options: include all of Bootstrap, or pick the parts you need. We encourage the latter, though be aware there are some requirements and dependencies across our components. You also will need to include some JavaScript for our plugins.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Custom.scss</span>
<span class="c1">// Option A: Include all of Bootstrap</span>

<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/bootstrap"</span><span class="p">;</span></code></pre></figure>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Custom.scss</span>
<span class="c1">// Option B: Include parts of Bootstrap</span>

<span class="c1">// Required</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/functions"</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/variables"</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/mixins"</span><span class="p">;</span>

<span class="c1">// Optional</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/reboot"</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/type"</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/images"</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/code"</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/grid"</span><span class="p">;</span></code></pre></figure>

<p>With that setup in place, you can begin to modify any of the Sass variables and maps in your <code class="highlighter-rouge">custom.scss</code>. You can also start to add parts of Bootstrap under the <code class="highlighter-rouge">// Optional</code> section as needed. We suggest using the full import stack from our <code class="highlighter-rouge">bootstrap.scss</code> file as your starting point.</p>

<h3 id="variable-defaults">Variable defaults</h3>

<p>Every Sass variable in Bootstrap 4 includes the <code class="highlighter-rouge">!default</code> flag allowing you to override the variable’s default value in your own Sass without modifying Bootstrap’s source code. Copy and paste variables as needed, modify their values, and remove the <code class="highlighter-rouge">!default</code> flag. If a variable has already been assigned, then it won’t be re-assigned by the default values in Bootstrap.</p>

<p>You will find the complete list of Bootstrap’s variables in <code class="highlighter-rouge">scss/_variables.scss</code>.</p>

<p>Variable overrides within the same Sass file can come before or after the default variables. However, when overriding across Sass files, your overrides must come before you import Bootstrap’s Sass files.</p>

<p>Here’s an example that changes the <code class="highlighter-rouge">background-color</code> and <code class="highlighter-rouge">color</code> for the <code class="highlighter-rouge">&lt;body&gt;</code> when importing and compiling Bootstrap via npm:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Your variable overrides</span>
<span class="nv">$body-bg</span><span class="p">:</span> <span class="mh">#000</span><span class="p">;</span>
<span class="nv">$body-color</span><span class="p">:</span> <span class="mh">#111</span><span class="p">;</span>

<span class="c1">// Bootstrap and its default variables</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/bootstrap"</span><span class="p">;</span></code></pre></figure>

<p>Repeat as necessary for any variable in Bootstrap, including the global options below.</p>

<h3 id="maps-and-loops">Maps and loops</h3>

<p>Bootstrap 4 includes a handful of Sass maps, key value pairs that make it easier to generate families of related CSS. We use Sass maps for our colors, grid breakpoints, and more. Just like Sass variables, all Sass maps include the <code class="highlighter-rouge">!default</code> flag and can be overridden and extended.</p>

<p>Some of our Sass maps are merged into empty ones by default. This is done to allow easy expansion of a given Sass map, but comes at the cost of making <em>removing</em> items from a map slightly more difficult.</p>

<h4 id="modify-map">Modify map</h4>

<p>To modify an existing color in our <code class="highlighter-rouge">$theme-colors</code> map, add the following to your custom Sass file:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nv">$theme-colors</span><span class="p">:</span> <span class="p">(</span>
  <span class="s2">"primary"</span><span class="o">:</span> <span class="mh">#0074d9</span><span class="o">,</span>
  <span class="s2">"danger"</span><span class="o">:</span> <span class="mh">#ff4136</span>
<span class="p">);</span></code></pre></figure>

<h4 id="add-to-map">Add to map</h4>

<p>To add a new color to <code class="highlighter-rouge">$theme-colors</code>, add the new key and value:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nv">$theme-colors</span><span class="p">:</span> <span class="p">(</span>
  <span class="s2">"custom-color"</span><span class="o">:</span> <span class="mh">#900</span>
<span class="p">);</span></code></pre></figure>

<h4 id="remove-from-map">Remove from map</h4>

<p>To remove colors from <code class="highlighter-rouge">$theme-colors</code>, or any other map, use <code class="highlighter-rouge">map-remove</code>. Be aware you must insert it between our requirements and options:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Required</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/functions"</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/variables"</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/mixins"</span><span class="p">;</span>

<span class="nv">$theme-colors</span><span class="p">:</span> <span class="nf">map-remove</span><span class="p">(</span><span class="nv">$theme-colors</span><span class="o">,</span> <span class="s2">"info"</span><span class="o">,</span> <span class="s2">"light"</span><span class="o">,</span> <span class="s2">"dark"</span><span class="p">);</span>

<span class="c1">// Optional</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/root"</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/reboot"</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">"node_modules/bootstrap/scss/type"</span><span class="p">;</span>
<span class="nc">...</span></code></pre></figure>

<h4 id="required-keys">Required keys</h4>

<p>Bootstrap assumes the presence of some specific keys within Sass maps as we used and extend these ourselves. As you customize the included maps, you may encounter errors where a specific Sass map’s key is being used.</p>

<p>For example, we use the <code class="highlighter-rouge">primary</code>, <code class="highlighter-rouge">success</code>, and <code class="highlighter-rouge">danger</code> keys from <code class="highlighter-rouge">$theme-colors</code> for links, buttons, and form states. Replacing the values of these keys should present no issues, but removing them may cause Sass compilation issues. In these instances, you’ll need to modify the Sass code that makes use of those values.</p>

<h3 id="functions">Functions</h3>

<p>Bootstrap utilizes several Sass functions, but only a subset are applicable to general theming. We’ve included three functions for getting values from the color maps:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@function</span> <span class="nf">color</span><span class="p">(</span><span class="nv">$key</span><span class="o">:</span> <span class="s2">"blue"</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@return</span> <span class="nf">map-get</span><span class="p">(</span><span class="nv">$colors</span><span class="o">,</span> <span class="nv">$key</span><span class="p">);</span>
<span class="p">}</span>

<span class="k">@function</span> <span class="nf">theme-color</span><span class="p">(</span><span class="nv">$key</span><span class="o">:</span> <span class="s2">"primary"</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@return</span> <span class="nf">map-get</span><span class="p">(</span><span class="nv">$theme-colors</span><span class="o">,</span> <span class="nv">$key</span><span class="p">);</span>
<span class="p">}</span>

<span class="k">@function</span> <span class="nf">gray</span><span class="p">(</span><span class="nv">$key</span><span class="o">:</span> <span class="s2">"100"</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@return</span> <span class="nf">map-get</span><span class="p">(</span><span class="nv">$grays</span><span class="o">,</span> <span class="nv">$key</span><span class="p">);</span>
<span class="p">}</span></code></pre></figure>

<p>These allow you to pick one color from a Sass map much like how you’d use a color variable from v3.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.custom-element</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="nf">gray</span><span class="p">(</span><span class="s2">"100"</span><span class="p">);</span>
  <span class="nl">background-color</span><span class="p">:</span> <span class="nf">theme-color</span><span class="p">(</span><span class="s2">"dark"</span><span class="p">);</span>
<span class="p">}</span></code></pre></figure>

<p>We also have another function for getting a particular <em>level</em> of color from the <code class="highlighter-rouge">$theme-colors</code> map. Negative level values will lighten the color, while higher levels will darken.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@function</span> <span class="nf">theme-color-level</span><span class="p">(</span><span class="nv">$color-name</span><span class="o">:</span> <span class="s2">"primary"</span><span class="o">,</span> <span class="nv">$level</span><span class="o">:</span> <span class="m">0</span><span class="p">)</span> <span class="p">{</span>
  <span class="nv">$color</span><span class="p">:</span> <span class="nf">theme-color</span><span class="p">(</span><span class="nv">$color-name</span><span class="p">);</span>
  <span class="nv">$color-base</span><span class="p">:</span> <span class="nf">if</span><span class="p">(</span><span class="nv">$level</span> <span class="o">&gt;</span> <span class="m">0</span><span class="o">,</span> <span class="mh">#000</span><span class="o">,</span> <span class="mh">#fff</span><span class="p">);</span>
  <span class="nv">$level</span><span class="p">:</span> <span class="nf">abs</span><span class="p">(</span><span class="nv">$level</span><span class="p">);</span>

  <span class="k">@return</span> <span class="nf">mix</span><span class="p">(</span><span class="nv">$color-base</span><span class="o">,</span> <span class="nv">$color</span><span class="o">,</span> <span class="nv">$level</span> <span class="o">*</span> <span class="nv">$theme-color-interval</span><span class="p">);</span>
<span class="p">}</span></code></pre></figure>

<p>In practice, you’d call the function and pass in two parameters: the name of the color from <code class="highlighter-rouge">$theme-colors</code> (e.g., primary or danger) and a numeric level.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.custom-element</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="nf">theme-color-level</span><span class="p">(</span><span class="n">primary</span><span class="o">,</span> <span class="m">-10</span><span class="p">);</span>
<span class="p">}</span></code></pre></figure>

<p>Additional functions could be added in the future or your own custom Sass to create level functions for additional Sass maps, or even a generic one if you wanted to be more verbose.</p>

<h3 id="color-contrast">Color contrast</h3>

<p>One additional function we include in Bootstrap is the color contrast function, <code class="highlighter-rouge">color-yiq</code>. It utilizes the <a href="https://en.wikipedia.org/wiki/YIQ">YIQ color space</a> to automatically return a light (<code class="highlighter-rouge">#fff</code>) or dark (<code class="highlighter-rouge">#111</code>) contrast color based on the specified base color. This function is especially useful for mixins or loops where you’re generating multiple classes.</p>

<p>For example, to generate color swatches from our <code class="highlighter-rouge">$theme-colors</code> map:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@each</span> <span class="nv">$color</span><span class="o">,</span> <span class="nv">$value</span> <span class="n">in</span> <span class="nv">$theme-colors</span> <span class="p">{</span>
  <span class="nc">.swatch-</span><span class="si">#{</span><span class="nv">$color</span><span class="si">}</span> <span class="p">{</span>
    <span class="nl">color</span><span class="p">:</span> <span class="nf">color-yiq</span><span class="p">(</span><span class="nv">$value</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure>

<p>It can also be used for one-off contrast needs:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.custom-element</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="nf">color-yiq</span><span class="p">(</span><span class="mh">#000</span><span class="p">);</span> <span class="c1">// returns `color: #fff`</span>
<span class="p">}</span></code></pre></figure>

<p>You can also specify a base color with our color map functions:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.custom-element</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="nf">color-yiq</span><span class="p">(</span><span class="nf">theme-color</span><span class="p">(</span><span class="s2">"dark"</span><span class="p">));</span> <span class="c1">// returns `color: #fff`</span>
<span class="p">}</span></code></pre></figure>

<h2 id="sass-options">Sass options</h2>

<p>Customize Bootstrap 4 with our built-in custom variables file and easily toggle global CSS preferences with new <code class="highlighter-rouge">$enable-*</code> Sass variables. Override a variable’s value and recompile with <code class="highlighter-rouge">npm run test</code> as needed.</p>

<p>You can find and customize these variables for key global options in Bootstrap’s <code class="highlighter-rouge">scss/_variables.scss</code> file.</p>

<table>
  <thead>
    <tr>
      <th>Variable</th>
      <th>Values</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code class="highlighter-rouge">$spacer</code></td>
      <td><code class="highlighter-rouge">1rem</code> (default), or any value &gt; 0</td>
      <td>Specifies the default spacer value to programmatically generate our <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/spacing/">spacer utilities</a>.</td>
    </tr>
    <tr>
      <td><code class="highlighter-rouge">$enable-rounded</code></td>
      <td><code class="highlighter-rouge">true</code> (default) or <code class="highlighter-rouge">false</code></td>
      <td>Enables predefined <code class="highlighter-rouge">border-radius</code> styles on various components.</td>
    </tr>
    <tr>
      <td><code class="highlighter-rouge">$enable-shadows</code></td>
      <td><code class="highlighter-rouge">true</code> or <code class="highlighter-rouge">false</code> (default)</td>
      <td>Enables predefined <code class="highlighter-rouge">box-shadow</code> styles on various components.</td>
    </tr>
    <tr>
      <td><code class="highlighter-rouge">$enable-gradients</code></td>
      <td><code class="highlighter-rouge">true</code> or <code class="highlighter-rouge">false</code> (default)</td>
      <td>Enables predefined gradients via <code class="highlighter-rouge">background-image</code> styles on various components.</td>
    </tr>
    <tr>
      <td><code class="highlighter-rouge">$enable-transitions</code></td>
      <td><code class="highlighter-rouge">true</code> (default) or <code class="highlighter-rouge">false</code></td>
      <td>Enables predefined <code class="highlighter-rouge">transition</code>s on various components.</td>
    </tr>
    <tr>
      <td><code class="highlighter-rouge">$enable-hover-media-query</code></td>
      <td><code class="highlighter-rouge">true</code> or <code class="highlighter-rouge">false</code> (default)</td>
      <td><strong>Deprecated</strong></td>
    </tr>
    <tr>
      <td><code class="highlighter-rouge">$enable-grid-classes</code></td>
      <td><code class="highlighter-rouge">true</code> (default) or <code class="highlighter-rouge">false</code></td>
      <td>Enables the generation of CSS classes for the grid system (e.g., <code class="highlighter-rouge">.container</code>, <code class="highlighter-rouge">.row</code>, <code class="highlighter-rouge">.col-md-1</code>, etc.).</td>
    </tr>
    <tr>
      <td><code class="highlighter-rouge">$enable-caret</code></td>
      <td><code class="highlighter-rouge">true</code> (default) or <code class="highlighter-rouge">false</code></td>
      <td>Enables pseudo element caret on <code class="highlighter-rouge">.dropdown-toggle</code>.</td>
    </tr>
    <tr>
      <td><code class="highlighter-rouge">$enable-print-styles</code></td>
      <td><code class="highlighter-rouge">true</code> (default) or <code class="highlighter-rouge">false</code></td>
      <td>Enables styles for optimizing printing.</td>
    </tr>
  </tbody>
</table>

<h2 id="color">Color</h2>

<p>Many of Bootstrap’s various components and utilities are built through a series of colors defined in a Sass map. This map can be looped over in Sass to quickly generate a series of rulesets.</p>

<h3 id="all-colors">All colors</h3>

<p>All colors available in Bootstrap 4, are available as Sass variables and a Sass map in <code class="highlighter-rouge">scss/_variables.scss</code> file. This will be expanded upon in subsequent minor releases to add additional shades, much like the <a href="#grays">grayscale palette</a> we already include.</p>

<div class="row">
  
    
    <div class="col-md-4">
        <div class="p-3 mb-3 swatch-blue">Blue</div>
    </div>
    
  
    
    <div class="col-md-4">
        <div class="p-3 mb-3 swatch-indigo">Indigo</div>
    </div>
    
  
    
    <div class="col-md-4">
        <div class="p-3 mb-3 swatch-purple">Purple</div>
    </div>
    
  
    
    <div class="col-md-4">
        <div class="p-3 mb-3 swatch-pink">Pink</div>
    </div>
    
  
    
    <div class="col-md-4">
        <div class="p-3 mb-3 swatch-red">Red</div>
    </div>
    
  
    
    <div class="col-md-4">
        <div class="p-3 mb-3 swatch-orange">Orange</div>
    </div>
    
  
    
    <div class="col-md-4">
        <div class="p-3 mb-3 swatch-yellow">Yellow</div>
    </div>
    
  
    
    <div class="col-md-4">
        <div class="p-3 mb-3 swatch-green">Green</div>
    </div>
    
  
    
    <div class="col-md-4">
        <div class="p-3 mb-3 swatch-teal">Teal</div>
    </div>
    
  
    
    <div class="col-md-4">
        <div class="p-3 mb-3 swatch-cyan">Cyan</div>
    </div>
    
  
    
  
    
  
    
  
</div>

<p>Here’s how you can use these in your Sass:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// With variable</span>
<span class="nc">.alpha</span> <span class="p">{</span> <span class="nl">color</span><span class="p">:</span> <span class="nv">$purple</span><span class="p">;</span> <span class="p">}</span>

<span class="c1">// From the Sass map with our `color()` function</span>
<span class="nc">.beta</span> <span class="p">{</span> <span class="nl">color</span><span class="p">:</span> <span class="nf">color</span><span class="p">(</span><span class="s2">"purple"</span><span class="p">);</span> <span class="p">}</span></code></pre></figure>

<p><a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/colors/">Color utility classes</a> are also available for setting <code class="highlighter-rouge">color</code> and <code class="highlighter-rouge">background-color</code>.</p>

<div class="bd-callout bd-callout-info">
<p>In the future, we’ll aim to provide Sass maps and variables for shades of each color as we’ve done with the grayscale colors below.</p>
</div>

<h3 id="theme-colors">Theme colors</h3>

<p>We use a subset of all colors to create a smaller color palette for generating color schemes, also available as Sass variables and a Sass map in Bootstraps’s <code class="highlighter-rouge">scss/_variables.scss</code> file.</p>

<div class="row">
  
    <div class="col-md-4">
      <div class="p-3 mb-3 swatch-primary">Primary</div>
    </div>
  
    <div class="col-md-4">
      <div class="p-3 mb-3 swatch-secondary">Secondary</div>
    </div>
  
    <div class="col-md-4">
      <div class="p-3 mb-3 swatch-success">Success</div>
    </div>
  
    <div class="col-md-4">
      <div class="p-3 mb-3 swatch-danger">Danger</div>
    </div>
  
    <div class="col-md-4">
      <div class="p-3 mb-3 swatch-warning">Warning</div>
    </div>
  
    <div class="col-md-4">
      <div class="p-3 mb-3 swatch-info">Info</div>
    </div>
  
    <div class="col-md-4">
      <div class="p-3 mb-3 swatch-light">Light</div>
    </div>
  
    <div class="col-md-4">
      <div class="p-3 mb-3 swatch-dark">Dark</div>
    </div>
  
</div>

<h3 id="grays">Grays</h3>

<p>An expansive set of gray variables and a Sass map in <code class="highlighter-rouge">scss/_variables.scss</code> for consistent shades of gray across your project.</p>

<div class="row mb-3">
  <div class="col-md-4">
    
      <div class="p-3 swatch-100">100</div>
    
      <div class="p-3 swatch-200">200</div>
    
      <div class="p-3 swatch-300">300</div>
    
      <div class="p-3 swatch-400">400</div>
    
      <div class="p-3 swatch-500">500</div>
    
      <div class="p-3 swatch-600">600</div>
    
      <div class="p-3 swatch-700">700</div>
    
      <div class="p-3 swatch-800">800</div>
    
      <div class="p-3 swatch-900">900</div>
    
  </div>
</div>

<p>Within <code class="highlighter-rouge">scss/_variables.scss</code>, you’ll find Bootstrap’s color variables and Sass map. Here’s an example of the <code class="highlighter-rouge">$colors</code> Sass map:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nv">$colors</span><span class="p">:</span> <span class="p">(</span>
  <span class="s2">"blue"</span><span class="o">:</span> <span class="nv">$blue</span><span class="o">,</span>
  <span class="s2">"indigo"</span><span class="o">:</span> <span class="nv">$indigo</span><span class="o">,</span>
  <span class="s2">"purple"</span><span class="o">:</span> <span class="nv">$purple</span><span class="o">,</span>
  <span class="s2">"pink"</span><span class="o">:</span> <span class="nv">$pink</span><span class="o">,</span>
  <span class="s2">"red"</span><span class="o">:</span> <span class="nv">$red</span><span class="o">,</span>
  <span class="s2">"orange"</span><span class="o">:</span> <span class="nv">$orange</span><span class="o">,</span>
  <span class="s2">"yellow"</span><span class="o">:</span> <span class="nv">$yellow</span><span class="o">,</span>
  <span class="s2">"green"</span><span class="o">:</span> <span class="nv">$green</span><span class="o">,</span>
  <span class="s2">"teal"</span><span class="o">:</span> <span class="nv">$teal</span><span class="o">,</span>
  <span class="s2">"cyan"</span><span class="o">:</span> <span class="nv">$cyan</span><span class="o">,</span>
  <span class="s2">"white"</span><span class="o">:</span> <span class="nv">$white</span><span class="o">,</span>
  <span class="s2">"gray"</span><span class="o">:</span> <span class="nv">$gray-600</span><span class="o">,</span>
  <span class="s2">"gray-dark"</span><span class="o">:</span> <span class="nv">$gray-800</span>
<span class="p">)</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span></code></pre></figure>

<p>Add, remove, or modify values within the map to update how they’re used in many other components. Unfortunately at this time, not <em>every</em> component utilizes this Sass map. Future updates will strive to improve upon this. Until then, plan on making use of the <code class="highlighter-rouge">${color}</code> variables and this Sass map.</p>

<h2 id="components">Components</h2>

<p>Many of Bootstrap’s components and utilities are built with <code class="highlighter-rouge">@each</code> loops that iterate over a Sass map. This is especially helpful for generating variants of a component by our <code class="highlighter-rouge">$theme-colors</code> and creating responsive variants for each breakpoint. As you customize these Sass maps and recompile, you’ll automatically see your changes reflected in these loops.</p>

<h3 id="modifiers">Modifiers</h3>

<p>Many of Bootstrap’s components are built with a base-modifier class approach. This means the bulk of the styling is contained to a base class (e.g., <code class="highlighter-rouge">.btn</code>) while style variations are confined to modifier classes (e.g., <code class="highlighter-rouge">.btn-danger</code>). These modifier classes are built from the <code class="highlighter-rouge">$theme-colors</code> map to make customizing the number and name of our modifier classes.</p>

<p>Here are two examples of how we loop over the <code class="highlighter-rouge">$theme-colors</code> map to generate modifiers to the <code class="highlighter-rouge">.alert</code> component and all our <code class="highlighter-rouge">.bg-*</code> background utilities.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Generate alert modifier classes</span>
<span class="k">@each</span> <span class="nv">$color</span><span class="o">,</span> <span class="nv">$value</span> <span class="n">in</span> <span class="nv">$theme-colors</span> <span class="p">{</span>
  <span class="nc">.alert-</span><span class="si">#{</span><span class="nv">$color</span><span class="si">}</span> <span class="p">{</span>
    <span class="k">@include</span> <span class="nd">alert-variant</span><span class="p">(</span><span class="nf">theme-color-level</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="m">-10</span><span class="p">)</span><span class="o">,</span> <span class="nf">theme-color-level</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="m">-9</span><span class="p">)</span><span class="o">,</span> <span class="nf">theme-color-level</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="m">6</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate `.bg-*` color utilities</span>
<span class="k">@each</span> <span class="nv">$color</span><span class="o">,</span> <span class="nv">$value</span> <span class="n">in</span> <span class="nv">$theme-colors</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">bg-variant</span><span class="p">(</span><span class="s1">'.bg-</span><span class="si">#{</span><span class="nv">$color</span><span class="si">}</span><span class="s1">'</span><span class="o">,</span> <span class="nv">$value</span><span class="p">);</span>
<span class="p">}</span></code></pre></figure>

<h3 id="responsive">Responsive</h3>

<p>These Sass loops aren’t limited to color maps, either. You can also generate responsive variations of your components or utilities. Take for example our responsive text alignment utilities where we mix an <code class="highlighter-rouge">@each</code> loop for the <code class="highlighter-rouge">$grid-breakpoints</code> Sass map with a media query include.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@each</span> <span class="nv">$breakpoint</span> <span class="n">in</span> <span class="nf">map-keys</span><span class="p">(</span><span class="nv">$grid-breakpoints</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="nv">$breakpoint</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$infix</span><span class="p">:</span> <span class="nf">breakpoint-infix</span><span class="p">(</span><span class="nv">$breakpoint</span><span class="o">,</span> <span class="nv">$grid-breakpoints</span><span class="p">);</span>

    <span class="nc">.text</span><span class="si">#{</span><span class="nv">$infix</span><span class="si">}</span><span class="nc">-left</span>   <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">left</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
    <span class="nc">.text</span><span class="si">#{</span><span class="nv">$infix</span><span class="si">}</span><span class="nc">-right</span>  <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">right</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
    <span class="nc">.text</span><span class="si">#{</span><span class="nv">$infix</span><span class="si">}</span><span class="nc">-center</span> <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">center</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure>

<p>Should you need to modify your <code class="highlighter-rouge">$grid-breakpoints</code>, your changes will apply to all the loops iterating over that map.</p>

<h2 id="css-variables">CSS variables</h2>

<p>Bootstrap 4 includes around two dozen <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_variables">CSS custom properties (variables)</a> in it’s compiled CSS. These provide easy access to commonly used values like our theme colors, breakpoints, and primary font stacks when working in your browser’s Inspector, a code sandbox, or general prototyping.</p>

<h3 id="available-variables">Available variables</h3>

<p>Here are the variables we include (note that the <code class="highlighter-rouge">:root</code> is required). They’re located in our <code class="highlighter-rouge">_root.scss</code> file.</p>

<figure class="highlight"><pre><code class="language-css" data-lang="css"><span class="nd">:root</span> <span class="p">{</span>
  <span class="py">--blue</span><span class="p">:</span> <span class="m">#007bff</span><span class="p">;</span>
  <span class="py">--indigo</span><span class="p">:</span> <span class="m">#6610f2</span><span class="p">;</span>
  <span class="py">--purple</span><span class="p">:</span> <span class="m">#6f42c1</span><span class="p">;</span>
  <span class="py">--pink</span><span class="p">:</span> <span class="m">#e83e8c</span><span class="p">;</span>
  <span class="py">--red</span><span class="p">:</span> <span class="m">#dc3545</span><span class="p">;</span>
  <span class="py">--orange</span><span class="p">:</span> <span class="m">#fd7e14</span><span class="p">;</span>
  <span class="py">--yellow</span><span class="p">:</span> <span class="m">#ffc107</span><span class="p">;</span>
  <span class="py">--green</span><span class="p">:</span> <span class="m">#28a745</span><span class="p">;</span>
  <span class="py">--teal</span><span class="p">:</span> <span class="m">#20c997</span><span class="p">;</span>
  <span class="py">--cyan</span><span class="p">:</span> <span class="m">#17a2b8</span><span class="p">;</span>
  <span class="py">--white</span><span class="p">:</span> <span class="m">#fff</span><span class="p">;</span>
  <span class="py">--gray</span><span class="p">:</span> <span class="m">#6c757d</span><span class="p">;</span>
  <span class="py">--gray-dark</span><span class="p">:</span> <span class="m">#343a40</span><span class="p">;</span>
  <span class="py">--primary</span><span class="p">:</span> <span class="m">#007bff</span><span class="p">;</span>
  <span class="py">--secondary</span><span class="p">:</span> <span class="m">#6c757d</span><span class="p">;</span>
  <span class="py">--success</span><span class="p">:</span> <span class="m">#28a745</span><span class="p">;</span>
  <span class="py">--info</span><span class="p">:</span> <span class="m">#17a2b8</span><span class="p">;</span>
  <span class="py">--warning</span><span class="p">:</span> <span class="m">#ffc107</span><span class="p">;</span>
  <span class="py">--danger</span><span class="p">:</span> <span class="m">#dc3545</span><span class="p">;</span>
  <span class="py">--light</span><span class="p">:</span> <span class="m">#f8f9fa</span><span class="p">;</span>
  <span class="py">--dark</span><span class="p">:</span> <span class="m">#343a40</span><span class="p">;</span>
  <span class="py">--breakpoint-xs</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="py">--breakpoint-sm</span><span class="p">:</span> <span class="m">576px</span><span class="p">;</span>
  <span class="py">--breakpoint-md</span><span class="p">:</span> <span class="m">768px</span><span class="p">;</span>
  <span class="py">--breakpoint-lg</span><span class="p">:</span> <span class="m">992px</span><span class="p">;</span>
  <span class="py">--breakpoint-xl</span><span class="p">:</span> <span class="m">1200px</span><span class="p">;</span>
  <span class="py">--font-family-sans-serif</span><span class="p">:</span> <span class="n">-apple-system</span><span class="p">,</span> <span class="n">BlinkMacSystemFont</span><span class="p">,</span> <span class="s1">"Segoe UI"</span><span class="p">,</span> <span class="n">Roboto</span><span class="p">,</span> <span class="s1">"Helvetica Neue"</span><span class="p">,</span> <span class="n">Arial</span><span class="p">,</span> <span class="nb">sans-serif</span><span class="p">,</span> <span class="s1">"Apple Color Emoji"</span><span class="p">,</span> <span class="s1">"Segoe UI Emoji"</span><span class="p">,</span> <span class="s1">"Segoe UI Symbol"</span><span class="p">;</span>
  <span class="py">--font-family-monospace</span><span class="p">:</span> <span class="n">SFMono-Regular</span><span class="p">,</span> <span class="n">Menlo</span><span class="p">,</span> <span class="n">Monaco</span><span class="p">,</span> <span class="n">Consolas</span><span class="p">,</span> <span class="s1">"Liberation Mono"</span><span class="p">,</span> <span class="s1">"Courier New"</span><span class="p">,</span> <span class="nb">monospace</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

<h3 id="examples">Examples</h3>

<p>CSS variables offer similar flexibility to Sass’s variables, but without the need for compilation before being served to the browser. For example, here we’re resetting our page’s font and link styles with CSS variables.</p>

<figure class="highlight"><pre><code class="language-css" data-lang="css"><span class="nt">body</span> <span class="p">{</span>
  <span class="nl">font</span><span class="p">:</span> <span class="m">1rem</span><span class="p">/</span><span class="m">1.5</span> <span class="n">var</span><span class="p">(</span><span class="n">--font-family-sans-serif</span><span class="p">);</span>
<span class="p">}</span>
<span class="nt">a</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="n">var</span><span class="p">(</span><span class="n">--blue</span><span class="p">);</span>
<span class="p">}</span></code></pre></figure>

<p>You can also use our breakpoint variables in your media queries:</p>

<figure class="highlight"><pre><code class="language-css" data-lang="css"><span class="nc">.content-secondary</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="nb">none</span><span class="p">;</span>
<span class="p">}</span>

<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="p">(</span><span class="n">var</span><span class="p">(</span><span class="n">--breakpoint-sm</span><span class="p">)))</span> <span class="p">{</span>
  <span class="nc">.content-secondary</span> <span class="p">{</span>
    <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure>


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
