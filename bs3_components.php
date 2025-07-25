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

require_once(dirname(__FILE__) . '/../../../config.php');
require_once($CFG->libdir . '/adminlib.php');

$strheading = 'Theme Tester: Bootstrap 3 Components';
$url = new \core\url('/admin/tool/themetester/bs_components.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading($strheading);
$PAGE->requires->css('/admin/tool/themetester/bs_docs.min.css');
admin_externalpage_setup('toolthemetester');

echo $OUTPUT->header();

echo \core\output\html_writer::link(new \core\url('index.php'), '&laquo; Back to index');
echo $OUTPUT->heading($strheading);

?>
    <!-- Docs page layout -->
    <div class="bs-docs-header" id="content">
      <div class="container">
        <h1>Components</h1>
        <p>Over a dozen reusable components built to provide iconography, dropdowns, input groups, navigation, alerts, and much more.</p>
      </div>
    </div>

    <div class="container bs-docs-container">

      <div class="row">
        <div class="col-md-9" role="main">
          <div class="bs-docs-section">
  <h1 id="glyphicons" class="page-header">Glyphicons</h1>

  <h2 id="glyphicons-glyphs">Available glyphs</h2>
  <p>Includes 260 glyphs in font format from the Glyphicon Halflings set. <a href="http://glyphicons.com/">Glyphicons</a> Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, we only ask that you include a link back to <a href="http://glyphicons.com/">Glyphicons</a> whenever possible.</p>
  <div class="bs-glyphicons">
    <ul class="bs-glyphicons-list">

        <li>
          <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-asterisk</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-plus</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-euro" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-euro</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-eur" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-eur</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-minus</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-cloud</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-envelope</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-pencil</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-glass</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-music" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-music</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-search</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-heart</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-star</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-star-empty</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-user</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-film</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-th-large</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-th</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-th-list</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-ok</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-remove</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-zoom-in</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-zoom-out" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-zoom-out</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-off</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-signal</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-cog</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-trash</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-home</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-file</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-time</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-road" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-road</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-download-alt</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-download" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-download</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-upload</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-inbox</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-play-circle</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-repeat</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-refresh</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-list-alt</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-lock</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-flag</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-headphones</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-volume-off" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-volume-off</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-volume-down</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-volume-up</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-qrcode</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-barcode" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-barcode</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tag</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tags</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-book</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-bookmark</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-print</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-camera</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-font" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-font</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-bold" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-bold</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-italic" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-italic</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-text-height" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-text-height</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-text-width" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-text-width</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-align-left</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-align-center" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-align-center</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-align-right" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-align-right</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-align-justify</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-list</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-indent-left</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-indent-right</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-facetime-video</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-picture</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-map-marker</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-adjust" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-adjust</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-tint" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tint</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-edit</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-share" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-share</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-check</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-move" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-move</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-step-backward</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-fast-backward" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-fast-backward</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-backward</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-play</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-pause" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-pause</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-stop" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-stop</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-forward" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-forward</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-fast-forward" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-fast-forward</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-step-forward" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-step-forward</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-eject" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-eject</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-chevron-left</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-chevron-right</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-plus-sign</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-minus-sign</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-remove-sign</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-ok-sign</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-question-sign</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-info-sign</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-screenshot</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-remove-circle</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-ok-circle</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-ban-circle</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-arrow-left</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-arrow-right</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-arrow-up</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-arrow-down</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-share-alt</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-resize-full</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-resize-small" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-resize-small</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-exclamation-sign</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-gift</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-leaf</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-fire</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-eye-open</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-eye-close</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-warning-sign</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-plane" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-plane</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-calendar</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-random" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-random</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-comment</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-magnet" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-magnet</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-chevron-up</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-chevron-down</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-retweet</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-shopping-cart</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-folder-close</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-folder-open</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-resize-vertical" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-resize-vertical</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-resize-horizontal</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-hdd" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-hdd</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-bullhorn</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-bell</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-certificate</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-thumbs-up</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-thumbs-down</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-hand-right</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-hand-left</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-hand-up</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-hand-down</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-right</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-left</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-up</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-down</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-globe</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-wrench</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tasks</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-filter" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-filter</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-briefcase</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-fullscreen</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-dashboard</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-paperclip</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-heart-empty</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-link" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-link</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-phone</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-pushpin</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-usd</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-gbp" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-gbp</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-sort" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sort</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-sort-by-alphabet" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-sort-by-alphabet-alt" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet-alt</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-sort-by-order" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sort-by-order</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-sort-by-order-alt" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sort-by-order-alt</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-sort-by-attributes-alt" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes-alt</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-unchecked</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-expand</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-collapse-down" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-collapse-down</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-collapse-up</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-log-in</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-flash</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-log-out</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-new-window</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-record" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-record</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-save</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-open</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-saved</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-import" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-import</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-export" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-export</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-send</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-floppy-disk</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-floppy-saved</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-floppy-remove</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-floppy-save</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-floppy-open" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-floppy-open</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-credit-card</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-transfer</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-cutlery</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-header" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-header</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-compressed" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-compressed</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-earphone</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-phone-alt</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-tower" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tower</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-stats</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-sd-video" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sd-video</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-hd-video" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-hd-video</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-subtitles" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-subtitles</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-sound-stereo" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sound-stereo</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-sound-dolby" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sound-dolby</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-sound-5-1" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sound-5-1</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-sound-6-1" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sound-6-1</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-sound-7-1" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sound-7-1</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-copyright-mark</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-registration-mark</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-cloud-download</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-cloud-upload</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-tree-conifer" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tree-conifer</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tree-deciduous</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-cd" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-cd</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-save-file</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-open-file</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-level-up</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-copy" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-copy</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-paste" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-paste</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-alert</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-equalizer</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-king" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-king</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-queen" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-queen</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-pawn</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-bishop" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-bishop</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-knight" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-knight</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-baby-formula" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-baby-formula</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-tent" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tent</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-blackboard</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-bed" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-bed</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-apple</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-erase" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-erase</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-hourglass</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-lamp" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-lamp</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-duplicate</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-piggy-bank</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-scissors" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-scissors</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-bitcoin" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-bitcoin</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-yen" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-yen</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-ruble" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-ruble</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-scale" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-scale</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-ice-lolly</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-ice-lolly-tasted" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-ice-lolly-tasted</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-education</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-option-horizontal</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-option-vertical</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-menu-hamburger</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-modal-window</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-oil" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-oil</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-grain" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-grain</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sunglasses</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-text-size" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-text-size</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-text-color" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-text-color</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-text-background" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-text-background</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-object-align-top" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-object-align-top</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-object-align-bottom" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-object-align-bottom</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-object-align-horizontal" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-object-align-horizontal</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-object-align-left" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-object-align-left</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-object-align-vertical" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-object-align-vertical</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-object-align-right" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-object-align-right</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-triangle-right</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-triangle-left</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-triangle-bottom</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-triangle-top</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-console" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-console</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-superscript" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-superscript</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-subscript" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-subscript</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-menu-left</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-menu-right</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-menu-down</span>
        </li>

        <li>
          <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
          <span class="glyphicon-class">glyphicon glyphicon-menu-up</span>
        </li>

    </ul>
  </div>


  <h2 id="glyphicons-how-to-use">How to use</h2>
  <p>For performance reasons, all icons require a base class and individual icon class. To use, place the following code just about anywhere. Be sure to leave a space between the icon and text for proper padding.</p>
  <div class="bs-callout bs-callout-danger" id="callout-glyphicons-dont-mix">
    <h4>Don't mix with other components</h4>
    <p>Icon classes cannot be directly combined with other components. They should not be used along with other classes on the same element. Instead, add a nested <code>&lt;span&gt;</code> and apply the icon classes to the <code>&lt;span&gt;</code>.</p>
  </div>
  <div class="bs-callout bs-callout-danger" id="callout-glyphicons-empty-only">
    <h4>Only for use on empty elements</h4>
    <p>Icon classes should only be used on elements that contain no text content and have no child elements.</p>
  </div>
  <div class="bs-callout bs-callout-info" id="callout-glyphicons-location">
    <h4>Changing the icon font location</h4>
    <p>Bootstrap assumes icon font files will be located in the <code>../fonts/</code> directory, relative to the compiled CSS files. Moving or renaming those font files means updating the CSS in one of three ways:</p>
    <ul>
      <li>Change the <code>@icon-font-path</code> and/or <code>@icon-font-name</code> variables in the source Less files.</li>
      <li>Utilize the <a href="http://lesscss.org/usage/#command-line-usage-relative-urls">relative URLs option</a> provided by the Less compiler.</li>
      <li>Change the <code>url()</code> paths in the compiled CSS.</li>
    </ul>
    <p>Use whatever option best suits your specific development setup.</p>
  </div>
  <div class="bs-callout bs-callout-warning" id="callout-glyphicons-accessibility">
    <h4>Accessible icons</h4>
    <p>Modern versions of assistive technologies will announce CSS generated content, as well as specific Unicode characters. To avoid unintended and confusing output in screen readers (particularly when icons are used purely for decoration), we hide them with the <code>aria-hidden="true"</code> attribute.</p>
    <p>If you're using an icon to convey meaning (rather than only as a decorative element), ensure that this meaning is also conveyed to assistive technologies – for instance, include additional content, visually hidden with the <code>.sr-only</code> class.</p>
    <p>If you're creating controls with no other text (such as a <code>&lt;button&gt;</code> that only contains an icon), you should always provide alternative content to identify the purpose of the control, so that it will make sense to users of assistive technologies. In this case, you could add an <code>aria-label</code> attribute on the control itself.</p>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-search"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre></div>


  <h2 id="glyphicons-examples">Examples</h2>
  <p>Use them in buttons, button groups for a toolbar, navigation, or prepended form inputs.</p>
  <div class="bs-example" data-example-id="glyphicons-general">
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group">
        <button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span></button>
        <button type="button" class="btn btn-default" aria-label="Center Align"><span class="glyphicon glyphicon-align-center" aria-hidden="true"></span></button>
        <button type="button" class="btn btn-default" aria-label="Right Align"><span class="glyphicon glyphicon-align-right" aria-hidden="true"></span></button>
        <button type="button" class="btn btn-default" aria-label="Justify"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span></button>
      </div>
    </div>
    <div class="btn-toolbar" role="toolbar">
      <button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star</button>
      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star</button>
      <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star</button>
      <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star</button>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">aria-label=</span><span class="s">"Left Align"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-align-left"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-star"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span> Star
<span class="nt">&lt;/button&gt;</span></code></pre></div>
  <p>An icon used in an <a href="#alerts">alert</a> to convey that it's an error message, with additional <code>.sr-only</code> text to convey this hint to users of assistive technologies.</p>
  <div class="bs-example" data-example-id="glyphicons-accessibility">
    <div class="alert alert-danger" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
      Enter a valid email address
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-exclamation-sign"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Error:<span class="nt">&lt;/span&gt;</span>
  Enter a valid email address
<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="dropdowns" class="page-header">Dropdowns</h1>

  <p class="lead">Toggleable, contextual menu for displaying lists of links. Made interactive with the <a href="../javascript/#dropdowns">dropdown JavaScript plugin</a>.</p>

  <h3 id="dropdowns-example">Example</h3>
  <p>Wrap the dropdown's trigger and the dropdown menu within <code>.dropdown</code>, or another element that declares <code>position: relative;</code>. Then add the menu's HTML.</p>
  <div class="bs-example" data-example-id="static-dropdown">
    <div class="dropdown clearfix">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
      </ul>
    </div>
  </div><!-- /example -->
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">id=</span><span class="s">"dropdownMenu1"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"true"</span><span class="nt">&gt;</span>
    Dropdown
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenu1"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="dropdowns-alignment">Alignment</h3>
  <p>By default, a dropdown menu is automatically positioned 100% from the top and along the left side of its parent. Add <code>.dropdown-menu-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.</p>
  <div class="bs-callout bs-callout-warning" id="callout-dropdown-positioning">
    <h4>May require additional positioning</h4>
    <p>Dropdowns are automatically positioned via CSS within the normal flow of the document. This means dropdowns may be cropped by parents with certain <code>overflow</code> properties or appear out of bounds of the viewport. Address these issues on your own as they arise.</p>
  </div>
  <div class="bs-callout bs-callout-warning" id="callout-dropdown-pull-right">
    <h4>Deprecated <code>.pull-right</code> alignment</h4>
    <p>As of v3.1.0, we've deprecated <code>.pull-right</code> on dropdown menus. To right-align a menu, use <code>.dropdown-menu-right</code>. Right-aligned nav components in the navbar use a mixin version of this class to automatically align the menu. To override it, use <code>.dropdown-menu-left</code>.</p>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-right"</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dLabel"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

  <h3 id="dropdowns-headers">Headers</h3>
  <p>Add a header to label sections of actions in any dropdown menu.</p>
  <div class="bs-example">
    <div class="dropdown clearfix">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
        <li role="presentation" class="dropdown-header">Dropdown header</li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
        <li role="presentation" class="dropdown-header">Dropdown header</li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
      </ul>
    </div>
  </div><!-- /example -->
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenu2"</span><span class="nt">&gt;</span>
  ...
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"dropdown-header"</span><span class="nt">&gt;</span>Dropdown header<span class="nt">&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

  <h3 id="dropdowns-divider">Divider</h3>
  <p>Add a divider to separate series of links in a dropdown menu.</p>
  <div class="bs-example">
    <div class="dropdown clearfix">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuDivider" data-toggle="dropdown" aria-expanded="true">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenuDivider">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
        <li role="presentation" class="divider"></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
      </ul>
    </div>
  </div><!-- /example -->
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuDivider"</span><span class="nt">&gt;</span>
  ...
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

  <h3 id="dropdowns-disabled">Disabled menu items</h3>
  <p>Add <code>.disabled</code> to a <code>&lt;li&gt;</code> in the dropdown to disable the link.</p>
  <div class="bs-example">
    <div class="dropdown clearfix">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
        <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
      </ul>
    </div>
  </div><!-- /example -->
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenu3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Regular link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="btn-groups" class="page-header">Button groups</h1>

  <p class="lead">Group a series of buttons together on a single line with the button group. Add on optional JavaScript radio and checkbox style behavior with <a href="../javascript/#buttons">our buttons plugin</a>.</p>

  <div class="bs-callout bs-callout-warning" id="callout-btn-group-tooltips">
    <h4>Tooltips &amp; popovers in button groups require special setting</h4>
    <p>When using tooltips or popovers on elements within a <code>.btn-group</code>, you'll have to specify the option <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip or popover is triggered).</p>
  </div>

  <div class="bs-callout bs-callout-warning" id="callout-btn-group-accessibility">
    <h4>Ensure correct <code>role</code> and provide a label</h4>
    <p>In order for assistive technologies – such as screen readers – to convey that a series of buttons is grouped, an appropriate <code>role</code> attribute needs to be provided. For button groups, this would be <code>role="group"</code>, while toolbars should have a <code>role="toolbar"</code>.</p>
    <p>One exception are groups which only contain a single control (for instance the <a href="#btn-groups-justified">justified button groups</a> with <code>&lt;button&gt;</code> elements) or a dropdown.</p>
    <p>In addition, groups and toolbars should be given an explicit label, as most assistive technologies will otherwise not announce them, despite the presence of the correct <code>role</code> attribute. In the examples provided here, we use <code>aria-label</code>, but alternatives such as <code>aria-labelledby</code> can also be used.</p>
  </div>

  <h3 id="btn-groups-single">Basic example</h3>
  <p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
  <div class="bs-example" data-example-id="simple-button-group">
    <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-default">Left</button>
      <button type="button" class="btn btn-default">Middle</button>
      <button type="button" class="btn btn-default">Right</button>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Left<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Middle<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Right<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="btn-groups-toolbar">Button toolbar</h3>
  <p>Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex components.</p>
  <div class="bs-example" data-example-id="simple-button-toolbar">
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
      <div class="btn-group" role="group" aria-label="First group">
        <button type="button" class="btn btn-default">1</button>
        <button type="button" class="btn btn-default">2</button>
        <button type="button" class="btn btn-default">3</button>
        <button type="button" class="btn btn-default">4</button>
      </div>
      <div class="btn-group" role="group" aria-label="Second group">
        <button type="button" class="btn btn-default">5</button>
        <button type="button" class="btn btn-default">6</button>
        <button type="button" class="btn btn-default">7</button>
      </div>
      <div class="btn-group" role="group" aria-label="Third group">
        <button type="button" class="btn btn-default">8</button>
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-toolbar"</span> <span class="na">role=</span><span class="s">"toolbar"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="btn-groups-sizing">Sizing</h3>
  <p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each <code>.btn-group</code>, including when nesting multiple groups.</p>
  <div class="bs-example" data-example-id="button-group-sizing">
    <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
      <button type="button" class="btn btn-default">Left</button>
      <button type="button" class="btn btn-default">Middle</button>
      <button type="button" class="btn btn-default">Right</button>
    </div>
    <br>
    <div class="btn-group" role="group" aria-label="Default button group">
      <button type="button" class="btn btn-default">Left</button>
      <button type="button" class="btn btn-default">Middle</button>
      <button type="button" class="btn btn-default">Right</button>
    </div>
    <br>
    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
      <button type="button" class="btn btn-default">Left</button>
      <button type="button" class="btn btn-default">Middle</button>
      <button type="button" class="btn btn-default">Right</button>
    </div>
    <br>
    <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">
      <button type="button" class="btn btn-default">Left</button>
      <button type="button" class="btn btn-default">Middle</button>
      <button type="button" class="btn btn-default">Right</button>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-lg"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-sm"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-xs"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="btn-groups-nested">Nesting</h3>
  <p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.</p>
  <div class="bs-example" data-example-id="button-group-nesting">
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
      <button type="button" class="btn btn-default">1</button>
      <button type="button" class="btn btn-default">2</button>

      <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupDrop1">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/button&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
      Dropdown
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="btn-groups-vertical">Vertical variation</h3>
  <p>Make a set of buttons appear vertically stacked rather than horizontally. <strong class="text-danger">Split button dropdowns are not supported here.</strong></p>
  <div class="bs-example" data-example-id="vertical-button-group">
    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
      <button type="button" class="btn btn-default">Button</button>
      <button type="button" class="btn btn-default">Button</button>
      <div class="btn-group" role="group">
        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
      <button type="button" class="btn btn-default">Button</button>
      <button type="button" class="btn btn-default">Button</button>
      <div class="btn-group" role="group">
        <button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop2">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
      <div class="btn-group" role="group">
        <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop3">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
      <div class="btn-group" role="group">
        <button id="btnGroupVerticalDrop4" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop4">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group-vertical"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="btn-groups-justified">Justified button groups</h3>
  <p>Make a group of buttons stretch at equal sizes to span the entire width of its parent. Also works with button dropdowns within the button group.</p>

  <div class="bs-callout bs-callout-warning" id="callout-btn-group-justified-dbl-border">
    <h4>Handling borders</h4>
    <p>Due to the specific HTML and CSS used to justify buttons (namely <code>display: table-cell</code>), the borders between them are doubled. In regular button groups, <code>margin-left: -1px</code> is used to stack the borders instead of removing them. However, <code>margin</code> doesn't work with <code>display: table-cell</code>. As a result, depending on your customizations to Bootstrap, you may wish to remove or re-color the borders.</p>
  </div>
  <div class="bs-callout bs-callout-warning" id="callout-btn-group-ie8-border">
    <h4>IE8 and borders</h4>
    <p>Internet Explorer 8 doesn't render borders on buttons in a justified button group, whether it's on <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> elements. To get around that, wrap each button in another <code>.btn-group</code>.</p>
    <p>See <a href="https://github.com/twbs/bootstrap/issues/12476">#12476</a> for more information.</p>
  </div>

  <h4>With <code>&lt;a&gt;</code> elements</h4>
  <p>Just wrap a series of <code>.btn</code>s in <code>.btn-group.btn-group-justified</code>.</p>
  <div class="bs-example" data-example-id="simple-justified-button-group">
    <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
      <a href="#" class="btn btn-default" role="button">Left</a>
      <a href="#" class="btn btn-default" role="button">Middle</a>
      <a href="#" class="btn btn-default" role="button">Right</a>
    </div>
    <br>
    <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">
      <a href="#" class="btn btn-default" role="button">Left</a>
      <a href="#" class="btn btn-default" role="button">Middle</a>
      <div class="btn-group" role="group">
        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          Dropdown <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-justified"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <div class="bs-callout bs-callout-warning" id="callout-btn-group-anchor-btn">
    <h4>Links acting as buttons</h4>
    <p>If the <code>&lt;a&gt;</code> elements are used to act as buttons – triggering in-page functionality, rather than navigating to another document or section within the current page – they should also be given an appropriate <code>role="button"</code>.</p>
  </div>

  <h4>With <code>&lt;button&gt;</code> elements</h4>
  <p>To use justified button groups with <code>&lt;button&gt;</code> elements, <strong class="text-danger">you must wrap each button in a button group</strong>. Most browsers don't properly apply our CSS for justification to <code>&lt;button&gt;</code> elements, but since we support button dropdowns, we can work around that.</p>
  <div class="bs-example" data-example-id="button-tag-button-group-justified">
    <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-default">Left</button>
      </div>
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-default">Middle</button>
      </div>
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-default">Right</button>
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-justified"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Left<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Middle<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Right<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="btn-dropdowns" class="page-header">Button dropdowns</h1>

  <p class="lead">Use any button to trigger a dropdown menu by placing it within a <code>.btn-group</code> and providing the proper menu markup.</p>

  <div class="bs-callout bs-callout-danger" id="callout-btndropdown-dependency">
    <h4>Plugin dependency</h4>
    <p>Button dropdowns require the <a href="../javascript/#dropdowns">dropdown plugin</a> to be included in your version of Bootstrap.</p>
  </div>

  <h3 id="btn-dropdowns-single">Single button dropdowns</h3>
  <p>Turn a button into a dropdown toggle with some basic markup changes.</p>
  <div class="bs-example" data-example-id="single-button-dropdown">
    <div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Default <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Primary <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Success <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Info <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Warning <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Danger <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Single button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="btn-dropdowns-split">Split button dropdowns</h3>
  <p>Similarly, create split button dropdowns with the same markup changes, only with a separate button.</p>
  <div class="bs-example" data-example-id="split-button-dropdown">
    <div class="btn-group">
      <button type="button" class="btn btn-default">Default</button>
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-success">Success</button>
      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-info">Info</button>
      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-warning">Warning</button>
      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-danger">Danger</button>
      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Split button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="btn-dropdowns-sizing">Sizing</h3>
  <p>Button dropdowns work with buttons of all sizes.</p>
  <div class="bs-example" data-example-id="button-dropdown-sizing">
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group">
        <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
          Large button <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div><!-- /btn-toolbar -->
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group">
        <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
          Small button <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div><!-- /btn-toolbar -->
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group">
        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
          Extra small button <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div><!-- /btn-toolbar -->
  </div><!-- /example -->
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Large button group --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    Large button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Small button group --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-sm dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    Small button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Extra small button group --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-xs dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    Extra small button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="btn-dropdowns-dropup">Dropup variation</h3>
  <p>Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent.</p>
  <div class="bs-example" data-example-id="button-dropdown-dropup">
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group dropup">
        <button type="button" class="btn btn-default">Dropup</button>
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
      <div class="btn-group dropup">
        <button type="button" class="btn btn-primary">Right dropup</button>
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-right" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div>
  </div><!-- /example -->
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group dropup"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Dropup<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- Dropdown menu links --&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="input-groups" class="page-header">Input groups</h1>

  <p class="lead">Extend form controls by adding text or buttons before, after, or on both sides of any text-based <code>&lt;input&gt;</code>. Use <code>.input-group</code> with an <code>.input-group-addon</code> to prepend or append elements to a single <code>.form-control</code>.</p>

  <div class="bs-callout bs-callout-danger" id="callout-inputgroup-text-input-only">
    <h4>Textual <code>&lt;input&gt;</code>s only</h4>
    <p>Avoid using <code>&lt;select&gt;</code> elements here as they cannot be fully styled in WebKit browsers.</p>
    <p>Avoid using <code>&lt;textarea&gt;</code> elements here as their <code>rows</code> attribute will not be respected in some cases.</p>
  </div>
  <div class="bs-callout bs-callout-warning" id="callout-inputgroup-container-body">
    <h4>Tooltips &amp; popovers in input groups require special setting</h4>
    <p>When using tooltips or popovers on elements within an <code>.input-group</code>, you'll have to specify the option <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip or popover is triggered).</p>
  </div>
  <div class="bs-callout bs-callout-warning" id="callout-inputgroup-dont-mix">
    <h4>Don't mix with other components</h4>
    <p>Do not mix form groups or grid column classes directly with input groups. Instead, nest the input group inside of the form group or grid-related element.</p>
  </div>
  <div class="bs-callout bs-callout-warning" id="callout-inputgroup-form-labels">
    <h4>Always add labels</h4>
    <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these input groups, ensure that any additional label or functionality is conveyed to assistive technologies.</p>
    <p>The exact technique to be used (<code>&lt;label&gt;</code> elements hidden using the <code>.sr-only</code> class, or use of the <code>aria-label</code>, <code>aria-labelledby</code>, <code>aria-describedby</code>, <code>title</code> or <code>placeholder</code> attribute) and what additional information will need to be conveyed will vary depending on the exact type of interface widget you're implementing. The examples in this section provide a few suggested, case-specific approaches.</p>
  </div>

  <h2 id="input-groups-basic">Basic example</h2>
  <p>Place one add-on or button on either side of an input. You may also place one on both sides of an input.</p>
  <p><strong class="text-danger">We do not support multiple add-ons on a single side.</strong></p>
  <p><strong class="text-danger">We do not support multiple form-controls in a single input group.</strong></p>
  <form class="bs-example bs-example-form" data-example-id="simple-input-groups">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">@</span>
      <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
    </div>
    <br>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
      <span class="input-group-addon" id="basic-addon2">@example.com</span>
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon">$</span>
      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-addon">.00</span>
    </div>
  </form>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span> <span class="na">id=</span><span class="s">"basic-addon1"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span> <span class="na">aria-describedby=</span><span class="s">"basic-addon1"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Recipient's username"</span> <span class="na">aria-describedby=</span><span class="s">"basic-addon2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span> <span class="na">id=</span><span class="s">"basic-addon2"</span><span class="nt">&gt;</span>@example.com<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>$<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"Amount (to the nearest dollar)"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h2 id="input-groups-sizing">Sizing</h2>
  <p>Add the relative form sizing classes to the <code>.input-group</code> itself and contents within will automatically resize—no need for repeating the form control size classes on each element.</p>
  <form class="bs-example bs-example-form" data-example-id="input-group-sizing">
    <div class="input-group input-group-lg">
      <span class="input-group-addon" id="sizing-addon1">@</span>
      <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon" id="sizing-addon2">@</span>
      <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
    </div>
    <br>
    <div class="input-group input-group-sm">
      <span class="input-group-addon" id="sizing-addon3">@</span>
      <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
    </div>
  </form>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-lg"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span> <span class="na">id=</span><span class="s">"sizing-addon1"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span> <span class="na">aria-describedby=</span><span class="s">"sizing-addon1"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span> <span class="na">id=</span><span class="s">"sizing-addon2"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span> <span class="na">aria-describedby=</span><span class="s">"sizing-addon2"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-sm"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span> <span class="na">id=</span><span class="s">"sizing-addon3"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span> <span class="na">aria-describedby=</span><span class="s">"sizing-addon3"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>


  <h2 id="input-groups-checkboxes-radios">Checkboxes and radio addons</h2>
  <p>Place any checkbox or radio option within an input group's addon instead of text.</p>
  <form class="bs-example bs-example-form" data-example-id="input-group-with-checkbox-radio">
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <span class="input-group-addon">
            <input type="checkbox" aria-label="Checkbox for following text input">
          </span>
          <input type="text" class="form-control" aria-label="Text input with checkbox">
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="col-lg-6">
        <div class="input-group">
          <span class="input-group-addon">
            <input type="radio" aria-label="Radio button for following text input">
          </span>
          <input type="text" class="form-control" aria-label="Text input with radio button">
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
  </form>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span></code></pre></div>


  <h2 id="input-groups-buttons">Button addons</h2>
  <p>Buttons in input groups are a bit different and require one extra level of nesting. Instead of <code>.input-group-addon</code>, you'll need to use <code>.input-group-btn</code> to wrap the buttons. This is required due to default browser styles that cannot be overridden.</p>
  <form class="bs-example bs-example-form" data-example-id="input-group-with-button">
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
          <input type="text" class="form-control" placeholder="Search for...">
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="col-lg-6">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
  </form>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Go!<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search for..."</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search for..."</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Go!<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span></code></pre></div>

  <h2 id="input-groups-buttons-dropdowns">Buttons with dropdowns</h2>
  <p></p>
  <form class="bs-example bs-example-form" data-example-id="input-group-dropdowns">
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div><!-- /btn-group -->
          <input type="text" class="form-control" aria-label="Text input with dropdown button">
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="col-lg-6">
        <div class="input-group">
          <input type="text" class="form-control" aria-label="Text input with dropdown button">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div><!-- /btn-group -->
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
  </form>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;&lt;/button&gt;</span>
        <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /btn-group --&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;&lt;/button&gt;</span>
        <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-right"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /btn-group --&gt;</span>
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span></code></pre></div>

  <h2 id="input-groups-buttons-segmented">Segmented buttons</h2>
  <form class="bs-example bs-example-form" data-example-id="input-group-segmented-buttons">
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default">Action</button>
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
          <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
        </div><!-- /.input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="col-lg-6">
        <div class="input-group">
          <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default">Action</button>
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
        </div><!-- /.input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
  </form>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- Button and dropdown menu --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- Button and dropdown menu --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="nav" class="page-header">Navs</h1>

  <p class="lead">Navs available in Bootstrap have shared markup, starting with the base <code>.nav</code> class, as well as shared states. Swap modifier classes to switch between each style.</p>

  <div class="bs-callout bs-callout-info" id="callout-navs-tabs-plugin">
    <h4>Using navs for tab panels requires JavaScript tabs plugin</h4>
    <p>For tabs with tabbable areas, you must use the <a href="../javascript/#tabs">tabs JavaScript plugin</a>. The markup will also require additional <code>role</code> and ARIA attributes – see the plugin's <a href="../javascript/#tabs-usage">example markup</a> for further details.</p>
  </div>

  <div class="bs-callout bs-callout-warning" id="callout-navs-accessibility">
    <h4>Make navs used as navigation accessible</h4>
    <p>If you are using navs to provide a navigation bar, be sure to add a <code>role="navigation"</code> to the most logical parent container of the <code>&lt;ul&gt;</code>, or wrap a <code>&lt;nav&gt;</code> element around the whole navigation. Do not add the role to the <code>&lt;ul&gt;</code> itself, as this would prevent it from being announced as an actual list by assistive technologies.</p>
  </div>

  <h2 id="nav-tabs">Tabs</h2>
  <p>Note the <code>.nav-tabs</code> class requires the <code>.nav</code> base class.</p>
  <div class="bs-example" data-example-id="simple-nav-tabs">
    <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Profile</a></li>
      <li role="presentation"><a href="#">Messages</a></li>
    </ul>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>


  <h2 id="nav-pills">Pills</h2>
  <p>Take that same HTML, but use <code>.nav-pills</code> instead:</p>
  <div class="bs-example" data-example-id="simple-nav-pills">
    <ul class="nav nav-pills">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Profile</a></li>
      <li role="presentation"><a href="#">Messages</a></li>
    </ul>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>
  <p>Pills are also vertically stackable. Just add <code>.nav-stacked</code>.</p>
  <div class="bs-example" data-example-id="simple-nav-stacked">
    <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Profile</a></li>
      <li role="presentation"><a href="#">Messages</a></li>
    </ul>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-stacked"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span></code></pre></div>


  <h2 id="nav-justified">Justified</h2>
  <p>Easily make tabs or pills equal widths of their parent at screens wider than 768px with <code>.nav-justified</code>. On smaller screens, the nav links are stacked.</p>
  <p><strong class="text-danger">Justified navbar nav links are currently not supported.</strong></p>
  <div class="bs-callout bs-callout-warning" id="callout-navs-justified-safari">
    <h4>Safari and responsive justified navs</h4>
    <p>As of v8.0, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing. This bug is also shown in the <a href="../examples/justified-nav/">justified nav example</a>.</p>
  </div>
  <div class="bs-example" data-example-id="simple-nav-justified">
    <ul class="nav nav-tabs nav-justified">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Profile</a></li>
      <li role="presentation"><a href="#">Messages</a></li>
    </ul>
    <br>
    <ul class="nav nav-pills nav-justified">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Profile</a></li>
      <li role="presentation"><a href="#">Messages</a></li>
    </ul>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs nav-justified"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-justified"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span></code></pre></div>


  <h2 id="nav-disabled-links">Disabled links</h2>
  <p>For any nav component (tabs or pills), add <code>.disabled</code> for <strong>gray links and no hover effects</strong>.</p>

  <div class="bs-callout bs-callout-warning" id="callout-navs-anchor-disabled">
    <h4>Link functionality not impacted</h4>
    <p>This class will only change the <code>&lt;a&gt;</code>'s appearance, not its functionality. Use custom JavaScript to disable links here.</p>
  </div>

  <div class="bs-example" data-example-id="disabled-nav-link">
    <ul class="nav nav-pills">
      <li role="presentation"><a href="#">Clickable link</a></li>
      <li role="presentation"><a href="#">Clickable link</a></li>
      <li role="presentation" class="disabled"><a href="#">Disabled link</a></li>
    </ul>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
  ...
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span></code></pre></div>


  <h2 id="nav-dropdowns">Using dropdowns</h2>
  <p>Add dropdown menus with a little extra HTML and the <a href="../javascript/#dropdowns">dropdowns JavaScript plugin</a>.</p>

  <h3>Tabs with dropdowns</h3>
  <div class="bs-example" data-example-id="nav-tabs-with-dropdown">
    <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Help</a></li>
      <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
          Dropdown <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span><span class="nt">&gt;</span>
  ...
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
      Dropdown <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
      ...
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

  <h3>Pills with dropdowns</h3>
  <div class="bs-example" data-example-id="nav-pills-with-dropdown">
    <ul class="nav nav-pills">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Help</a></li>
      <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
          Dropdown <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /example -->
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
  ...
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
      Dropdown <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
      ...
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="navbar" class="page-header">Navbar</h1>

  <h2 id="navbar-default">Default navbar</h2>
  <p>Navbars are responsive meta components that serve as navigation headers for your application or site. They begin collapsed (and are toggleable) in mobile views and become horizontal as the available viewport width increases.</p>
  <p><strong class="text-danger">Justified navbar nav links are currently not supported.</strong></p>

  <div class="bs-callout bs-callout-warning" id="callout-navbar-overflow">
    <h4>Overflowing content</h4>
    <p>Since Bootstrap doesn't know how much space the content in your navbar needs, you might run into issues with content wrapping into a second row. To resolve this, you can:</p>
    <ol type="a">
      <li>Reduce the amount or width of navbar items.</li>
      <li>Hide certain navbar items at certain screen sizes using <a href="../css/#responsive-utilities">responsive utility classes</a>.</li>
      <li>Change the point at which your navbar switches between collapsed and horizontal mode. Customize the <code>@grid-float-breakpoint</code> variable or add your own media query.</li>
    </ol>
  </div>
  <div class="bs-callout bs-callout-danger" id="callout-navbar-js">
    <h4>Requires JavaScript plugin</h4>
    <p>If JavaScript is disabled and the viewport is narrow enough that the navbar collapses, it will be impossible to expand the navbar and view the content within the <code>.navbar-collapse</code>.</p>
    <p>The responsive navbar requires the <a href="../javascript/#collapse">collapse plugin</a> to be included in your version of Bootstrap.</p>
  </div>
  <div class="bs-callout bs-callout-info" id="callout-navbar-breakpoint">
    <h4>Changing the collapsed mobile navbar breakpoint</h4>
    <p>The navbar collapses into its vertical mobile view when the viewport is narrower than <code>@grid-float-breakpoint</code>, and expands into its horizontal non-mobile view when the viewport is at least <code>@grid-float-breakpoint</code> in width. Adjust this variable in the Less source to control when the navbar collapses/expands. The default value is <code>768px</code> (the smallest "small" or "tablet" screen).</p>
  </div>
  <div class="bs-callout bs-callout-warning" id="callout-navbar-role">
    <h4>Make navbars accessible</h4>
    <p>Be sure to use a <code>&lt;nav&gt;</code> element or, if using a more generic element such as a <code>&lt;div&gt;</code>, add a <code>role="navigation"</code> to every navbar to explicitly identify it as a landmark region for users of assistive technologies.</p>
  </div>

  <div class="bs-example" data-example-id="default-navbar">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-default"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- Brand and toggle get grouped for better mobile display --&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"navbar-header"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"navbar-toggle collapsed"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#bs-example-navbar-collapse-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle navigation<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon-bar"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon-bar"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon-bar"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Brand<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="c">&lt;!-- Collect the nav links, forms, and other content for toggling --&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"bs-example-navbar-collapse-1"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav navbar-nav"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>Dropdown <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;&lt;/a&gt;</span>
          <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>One more separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"navbar-form navbar-left"</span> <span class="na">role=</span><span class="s">"search"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/form&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav navbar-nav navbar-right"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>Dropdown <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;&lt;/a&gt;</span>
          <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.navbar-collapse --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.container-fluid --&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>


  <h2 id="navbar-brand-image">Brand image</h2>
  <p>Replace the navbar brand with your own image by swapping the text for an <code>&lt;img&gt;</code>. Since the <code>.navbar-brand</code> has its own padding and height, you may need to override some CSS depending on your image.</p>
  <div class="bs-example" data-example-id="navbar-with-image-brand">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img alt="Brand" width="20" height="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAA81BMVEX///9VPnxWPXxWPXxWPXxWPXxWPXxWPXz///9hSYT6+vuFc6BXPn37+vz8+/z9/f2LeqWMe6aOfqiTg6uXiK5bQ4BZQX9iS4VdRYFdRYJfSINuWI5vWY9xXJF0YJR3Y5Z4ZZd5ZZd6Z5h9apq0qcW1qsW1q8a6sMqpnLyrn76tocCvpMGwpMJoUoprVYxeRoJjS4abjLGilLemmbrDutDFvdLPx9nX0eDa1OLb1uPd1+Td2OXe2eXh3Ofj3+nk4Orl4evp5u7u7PLv7fPx7/T08vb08/f19Pf29Pj39vn6+fuEcZ9YP35aQn/8/P1ZQH5fR4PINAOdAAAAB3RSTlMAIWWOw/P002ipnAAAAPhJREFUeF6NldWOhEAUBRvtRsfdfd3d3e3/v2ZPmGSWZNPDqScqqaSBSy4CGJbtSi2ubRkiwXRkBo6ZdJIApeEwoWMIS1JYwuZCW7hc6ApJkgrr+T/eW1V9uKXS5I5GXAjW2VAV9KFfSfgJpk+w4yXhwoqwl5AIGwp4RPgdK3XNHD2ETYiwe6nUa18f5jYSxle4vulw7/EtoCdzvqkPv3bn7M0eYbc7xFPXzqCrRCgH0Hsm/IjgTSb04W0i7EGjz+xw+wR6oZ1MnJ9TWrtToEx+4QfcZJ5X6tnhw+nhvqebdVhZUJX/oFcKvaTotUcvUnY188ue/n38AunzPPE8yg7bAAAAAElFTkSuQmCC">
          </a>
        </div>
      </div>
    </nav>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-default"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"navbar-header"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">alt=</span><span class="s">"Brand"</span> <span class="na">src=</span><span class="s">"..."</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>


  <h2 id="navbar-forms">Forms</h2>
  <p>Place form content within <code>.navbar-form</code> for proper vertical alignment and collapsed behavior in narrow viewports. Use the alignment options to decide where it resides within the navbar content.</p>
  <p>As a heads up, <code>.navbar-form</code> shares much of its code with <code>.form-inline</code> via mixin. <strong class="text-danger">Some form controls, like input groups, may require fixed widths to be show up properly within a navbar.</strong></p>
  <div class="bs-example" data-example-id="navbar-form">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"navbar-form navbar-left"</span> <span class="na">role=</span><span class="s">"search"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

  <div class="bs-callout bs-callout-warning" id="callout-navbar-mobile-caveats">
    <h4>Mobile device caveats</h4>
    <p>There are some caveats regarding using form controls within fixed elements on mobile devices. <a href="../getting-started/#support-fixed-position-keyboards">See our browser support docs</a> for details.</p>
  </div>

  <div class="bs-callout bs-callout-warning" id="callout-navbar-form-labels">
    <h4>Always add labels</h4>
    <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the <code>.sr-only</code> class. There are further alternative methods of providing a label for assistive technologies, such as the <code>aria-label</code>, <code>aria-labelledby</code> or <code>title</code> attribute. If none of these is present, screen readers may resort to using the <code>placeholder</code> attribute, if present, but note that use of <code>placeholder</code> as a replacement for other labelling methods is not advised.</p>
  </div>


  <h2 id="navbar-buttons">Buttons</h2>
  <p>Add the <code>.navbar-btn</code> class to <code>&lt;button&gt;</code> elements not residing in a <code>&lt;form&gt;</code> to vertically center them in the navbar.</p>
  <div class="bs-example" data-example-id="navbar-button">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
          <button type="button" class="btn btn-default navbar-btn">Sign in</button>
        </div>
      </div>
    </nav>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default navbar-btn"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span></code></pre></div>

  <div class="bs-callout bs-callout-warning" id="callout-navbar-btn-context">
    <h4>Context-specific usage</h4>
    <p>Like the standard <a href="../css/#buttons">button classes</a>, <code>.navbar-btn</code> can be used on <code>&lt;a&gt;</code> and <code>&lt;input&gt;</code> elements. However, neither <code>.navbar-btn</code> nor the standard button classes should be used on <code>&lt;a&gt;</code> elements within <code>.navbar-nav</code>.</p>
  </div>

  <h2 id="navbar-text">Text</h2>
  <p>Wrap strings of text in an element with <code>.navbar-text</code>, usually on a <code>&lt;p&gt;</code> tag for proper leading and color.</p>
  <div class="bs-example" data-example-id="navbar-text">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-4">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-4">
          <p class="navbar-text">Signed in as Mark Otto</p>
        </div>
      </div>
    </nav>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"navbar-text"</span><span class="nt">&gt;</span>Signed in as Mark Otto<span class="nt">&lt;/p&gt;</span></code></pre></div>


  <h2 id="navbar-links">Non-nav links</h2>
  <p>For folks using standard links that are not within the regular navbar navigation component, use the <code>.navbar-link</code> class to add the proper colors for the default and inverse navbar options.</p>
  <div class="bs-example" data-example-id="navbar-link">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-5">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
          <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Mark Otto</a></p>
        </div>
      </div>
    </nav>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"navbar-text navbar-right"</span><span class="nt">&gt;</span>Signed in as <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"navbar-link"</span><span class="nt">&gt;</span>Mark Otto<span class="nt">&lt;/a&gt;&lt;/p&gt;</span></code></pre></div>


  <h2 id="navbar-component-alignment">Component alignment</h2>
  <p>Align nav links, forms, buttons, or text, using the <code>.navbar-left</code> or <code>.navbar-right</code> utility classes. Both classes will add a CSS float in the specified direction. For example, to align nav links, put them in a separate <code>&lt;ul&gt;</code> with the respective utility class applied.</p>
  <p>These classes are mixin-ed versions of <code>.pull-left</code> and <code>.pull-right</code>, but they're scoped to media queries for easier handling of navbar components across device sizes.</p>
  <div class="bs-callout bs-callout-warning" id="callout-navbar-right-align">
    <h4>Right aligning multiple components</h4>
    <p>Navbars currently have a limitation with multiple <code>.navbar-right</code> classes. To properly space content, we use negative margin on the last <code>.navbar-right</code> element. When there are multiple elements using that class, these margins don't work as intended.</p>
    <p>We'll revisit this when we can rewrite that component in v4.</p>
  </div>


  <h2 id="navbar-fixed-top">Fixed to top</h2>
  <p>Add <code>.navbar-fixed-top</code> and include a <code>.container</code> or <code>.container-fluid</code> to center and pad navbar content.</p>
  <div class="bs-example bs-navbar-top-example" data-example-id="navbar-fixed-to-top">
    <nav class="navbar navbar-default navbar-fixed-top">
      <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div><!-- /example -->
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-default navbar-fixed-top"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

  <div class="bs-callout bs-callout-danger" id="callout-navbar-fixed-top-padding">
    <h4>Body padding required</h4>
    <p>The fixed navbar will overlay your other content, unless you add <code>padding</code> to the top of the <code>&lt;body&gt;</code>. Try out your own values or use our snippet below. Tip: By default, the navbar is 50px high.</p>
<div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nt">body</span> <span class="p">{</span> <span class="nl">padding-top</span><span class="p">:</span> <span class="m">70px</span><span class="p">;</span> <span class="p">}</span></code></pre></div>
    <p>Make sure to include this <strong>after</strong> the core Bootstrap CSS.</p>
  </div>


  <h2 id="navbar-fixed-bottom">Fixed to bottom</h2>
  <p>Add <code>.navbar-fixed-bottom</code> and include a <code>.container</code> or <code>.container-fluid</code> to center and pad navbar content.</p>
  <div class="bs-example bs-navbar-bottom-example" data-example-id="navbar-fixed-to-bottom">
    <nav class="navbar navbar-default navbar-fixed-bottom">
      <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-7">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-7">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div><!-- /example -->
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-default navbar-fixed-bottom"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

  <div class="bs-callout bs-callout-danger" id="callout-navbar-fixed-bottom-padding">
    <h4>Body padding required</h4>
    <p>The fixed navbar will overlay your other content, unless you add <code>padding</code> to the bottom of the <code>&lt;body&gt;</code>. Try out your own values or use our snippet below. Tip: By default, the navbar is 50px high.</p>
<div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nt">body</span> <span class="p">{</span> <span class="nl">padding-bottom</span><span class="p">:</span> <span class="m">70px</span><span class="p">;</span> <span class="p">}</span></code></pre></div>
    <p>Make sure to include this <strong>after</strong> the core Bootstrap CSS.</p>
  </div>


  <h2 id="navbar-static-top">Static top</h2>
  <p>Create a full-width navbar that scrolls away with the page by adding <code>.navbar-static-top</code> and include a <code>.container</code> or <code>.container-fluid</code> to center and pad navbar content.</p>
  <p>Unlike the <code>.navbar-fixed-*</code> classes, you do not need to change any padding on the <code>body</code>.</p>
  <div class="bs-example bs-navbar-top-example" data-example-id="navbar-static-top">
    <nav class="navbar navbar-default navbar-static-top">
      <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div><!-- /example -->
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-default navbar-static-top"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>


  <h2 id="navbar-inverted">Inverted navbar</h2>
  <p>Modify the look of the navbar by adding <code>.navbar-inverse</code>.</p>
  <div class="bs-example" data-example-id="inverted-navbar">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div><!-- /example -->
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-inverse"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/nav&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="breadcrumbs" class="page-header">Breadcrumbs</h1>

  <p class="lead">Indicate the current page's location within a navigational hierarchy.</p>
  <p>Separators are automatically added in CSS through <code>:before</code> and <code>content</code>.</p>
  <div class="bs-example" data-example-id="simple-breadcrumbs">
    <ol class="breadcrumb">
      <li class="active">Home</li>
    </ol>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Library</li>
    </ol>
    <ol class="breadcrumb" style="margin-bottom: 5px;">
      <li><a href="#">Home</a></li>
      <li><a href="#">Library</a></li>
      <li class="active">Data</li>
    </ol>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Library<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>Data<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ol&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="pagination" class="page-header">Pagination</h1>

  <p class="lead">Provide pagination links for your site or app with the multi-page pagination component, or the simpler <a href="#pagination-pager">pager alternative</a>.</p>

  <h2 id="pagination-default">Default pagination</h2>
  <p>Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.</p>
  <div class="bs-example" data-example-id="simple-pagination">
    <nav>
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Previous"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>5<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Next"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;raquo;</span><span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

  <h3>Disabled and active states</h3>
  <p>Links are customizable for different circumstances. Use <code>.disabled</code> for unclickable links and <code>.active</code> to indicate the current page.</p>
  <div class="bs-example" data-example-id="disabled-active-pagination">
    <nav>
      <ul class="pagination">
        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
     </ul>
   </nav>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Previous"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1 <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
    ...
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>
  <p>You can optionally swap out active or disabled anchors for <code>&lt;span&gt;</code>, or omit the anchor in the case of the previous/next arrows, to remove click functionality while retaining intended styles.</p>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span&gt;</span>1 <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    ...
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>


  <h3>Sizing</h3>
  <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>
  <div class="bs-example" data-example-id="pagination-sizing">
    <nav>
      <ul class="pagination pagination-lg">
        <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
      </ul>
    </nav>
    <nav>
      <ul class="pagination">
        <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
      </ul>
    </nav>
    <nav>
      <ul class="pagination pagination-sm">
        <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
      </ul>
    </nav>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;&lt;/nav&gt;</span>
<span class="nt">&lt;nav&gt;&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;&lt;/nav&gt;</span>
<span class="nt">&lt;nav&gt;&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;&lt;/nav&gt;</span></code></pre></div>


  <h2 id="pagination-pager">Pager</h2>
  <p>Quick previous and next links for simple pagination implementations with light markup and styles. It's great for simple sites like blogs or magazines.</p>

  <h3>Default example</h3>
  <p>By default, the pager centers links.</p>
  <div class="bs-example" data-example-id="simple-pager">
    <nav>
      <ul class="pager">
        <li><a href="#">Previous</a></li>
        <li><a href="#">Next</a></li>
      </ul>
    </nav>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

  <h3>Aligned links</h3>
  <p>Alternatively, you can align each link to the sides:</p>
  <div class="bs-example" data-example-id="aligned-pager-links">
    <nav>
      <ul class="pager">
        <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
        <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
    </nav>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"previous"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;larr;</span><span class="nt">&lt;/span&gt;</span> Older<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"next"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Newer <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;rarr;</span><span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>


  <h3>Optional disabled state</h3>
  <p>Pager links also use the general <code>.disabled</code> utility class from the pagination.</p>
  <div class="bs-example" data-example-id="disabled-pager">
    <nav>
      <ul class="pager">
        <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
        <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
    </nav>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"previous disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;larr;</span><span class="nt">&lt;/span&gt;</span> Older<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"next"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Newer <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;rarr;</span><span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="labels" class="page-header">Labels</h1>

  <h3>Example</h3>
  <div class="bs-example" data-example-id="labels-in-headings">
    <h1>Example heading <span class="label label-default">New</span></h1>
    <h2>Example heading <span class="label label-default">New</span></h2>
    <h3>Example heading <span class="label label-default">New</span></h3>
    <h4>Example heading <span class="label label-default">New</span></h4>
    <h5>Example heading <span class="label label-default">New</span></h5>
    <h6>Example heading <span class="label label-default">New</span></h6>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h3&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-default"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span></code></pre></div>

  <h3>Available variations</h3>
  <p>Add any of the below mentioned modifier classes to change the appearance of a label.</p>
  <div class="bs-example" data-example-id="label-variants">
    <span class="label label-default">Default</span>
    <span class="label label-primary">Primary</span>
    <span class="label label-success">Success</span>
    <span class="label label-info">Info</span>
    <span class="label label-warning">Warning</span>
    <span class="label label-danger">Danger</span>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span></code></pre></div>

  <div class="bs-callout bs-callout-info" id="callout-labels-inline-block">
    <h4>Have tons of labels?</h4>
    <p>Rendering problems can arise when you have dozens of inline labels within a narrow container, each containing its own <code>inline-block</code> element (like an icon). The way around this is setting <code>display: inline-block;</code>. For context and an example, <a href="https://github.com/twbs/bootstrap/issues/13219">see #13219</a>.</p>
  </div>
</div>

<div class="bs-docs-section">
  <h1 id="badges" class="page-header">Badges</h1>

  <p class="lead">Easily highlight new or unread items by adding a <code>&lt;span class="badge"&gt;</code> to links, Bootstrap navs, and more.</p>

  <div class="bs-example" data-example-id="simple-badges">
    <a href="#">Inbox <span class="badge">42</span></a>
    <br><br>
    <button class="btn btn-primary" type="button">
      Messages <span class="badge">4</span>
    </button>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Inbox <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge"</span><span class="nt">&gt;</span>42<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>

<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>
  Messages <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span></code></pre></div>

  <h4>Self collapsing</h4>
  <p>When there are no new or unread items, badges will simply collapse (via CSS's <code>:empty</code> selector) provided no content exists within.</p>

  <div class="bs-callout bs-callout-danger" id="callout-badges-ie8-empty">
    <h4>Cross-browser compatibility</h4>
    <p>Badges won't self collapse in Internet Explorer 8 because it lacks support for the <code>:empty</code> selector.</p>
  </div>

  <h4>Adapts to active nav states</h4>
  <p>Built-in styles are included for placing badges in active states in pill navigations.</p>
  <div class="bs-example" data-example-id="badges-in-pills">
    <ul class="nav nav-pills" role="tablist">
      <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
      <li role="presentation"><a href="#">Profile</a></li>
      <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
    </ul>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span> <span class="na">role=</span><span class="s">"tablist"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge"</span><span class="nt">&gt;</span>42<span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Messages <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="jumbotron" class="page-header">Jumbotron</h1>

  <p>A lightweight, flexible component that can optionally extend the entire viewport to showcase key content on your site.</p>
  <div class="bs-example" data-example-id="simple-jumbotron">
    <div class="jumbotron">
      <h1>Hello, world!</h1>
      <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"jumbotron"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p&gt;&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Learn more<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
  <p>To make the jumbotron full width, and without rounded corners, place it outside all <code>.container</code>s and instead add a <code>.container</code> within.</p>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"jumbotron"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="page-header" class="page-header">Page header</h1>

  <p>A simple shell for an <code>h1</code> to appropriately space out and segment sections of content on a page. It can utilize the <code>h1</code>'s default <code>small</code> element, as well as most other components (with additional styles).</p>
  <div class="bs-example" data-example-id="simple-page-header">
    <div class="page-header">
      <h1>Example page header <small>Subtext for header</small></h1>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"page-header"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1&gt;</span>Example page header <span class="nt">&lt;small&gt;</span>Subtext for header<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="thumbnails" class="page-header">Thumbnails</h1>

  <p class="lead">Extend Bootstrap's <a href="../css/#grid">grid system</a> with the thumbnail component to easily display grids of images, videos, text, and more.</p>
  <p>If you're looking for Pinterest-like presentation of thumbnails of varying heights and/or widths, you'll need to use a third-party plugin such as <a href="http://masonry.desandro.com">Masonry</a>, <a href="http://isotope.metafizzy.co">Isotope</a>, or <a href="http://salvattore.com">Salvattore</a>.</p>

  <h3 id="thumbnails-default">Default example</h3>
  <p>By default, Bootstrap's thumbnails are designed to showcase linked images with minimal required markup.</p>
  <div class="bs-example" data-example-id="simple-thumbnails">
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="Generic placeholder thumbnail">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="Generic placeholder thumbnail">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="Generic placeholder thumbnail">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="Generic placeholder thumbnail">
        </a>
      </div>
    </div>
  </div><!-- /.bs-example -->
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"thumbnail"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="thumbnails-custom-content">Custom content</h3>
  <p>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p>
  <div class="bs-example" data-example-id="thumbnails-with-custom-content">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="Generic placeholder thumbnail">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="Generic placeholder thumbnail">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="Generic placeholder thumbnail">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.bs-example -->
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-4"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"thumbnail"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"caption"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h3&gt;</span>Thumbnail label<span class="nt">&lt;/h3&gt;</span>
        <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/a&gt;</span> <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="alerts" class="page-header">Alerts</h1>

  <p class="lead">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>

  <h2 id="alerts-examples">Examples</h2>
  <p>Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</p>

  <div class="bs-callout bs-callout-info" id="callout-alerts-no-default">
    <h4>No default class</h4>
    <p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense, so you're required to specify a type via contextual class. Choose from success, info, warning, or danger.</p>
  </div>

  <div class="bs-example" data-example-id="simple-alerts">
    <div class="alert alert-success" role="alert">
      <strong>Well done!</strong> You successfully read this important alert message.
    </div>
    <div class="alert alert-info" role="alert">
      <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
    </div>
    <div class="alert alert-warning" role="alert">
      <strong>Warning!</strong> Better check yourself, you're not looking too good.
    </div>
    <div class="alert alert-danger" role="alert">
      <strong>Oh snap!</strong> Change a few things up and try submitting again.
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h2 id="alerts-dismissible">Dismissible alerts</h2>
  <p>Build on any alert by adding an optional <code>.alert-dismissible</code> and close button.</p>
  <div class="bs-callout bs-callout-info" id="callout-alerts-dismiss-plugin">
    <h4>Requires JavaScript alert plugin</h4>
    <p>For fully functioning, dismissible alerts, you must use the <a href="../javascript/#alerts">alerts JavaScript plugin</a>.</p>
  </div>
  <div class="bs-example" data-example-id="dismissible-alert-css">
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Warning!</strong> Better check yourself, you're not looking too good.
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning alert-dismissible"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;&lt;/button&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Warning!<span class="nt">&lt;/strong&gt;</span> Better check yourself, you're not looking too good.
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <div class="bs-callout bs-callout-warning" id="callout-alerts-dismiss-use-button">
    <h4>Ensure proper behavior across all devices</h4>
    <p>Be sure to use the <code>&lt;button&gt;</code> element with the <code>data-dismiss="alert"</code> data attribute.</p>
  </div>

  <h2 id="alerts-links">Links in alerts</h2>
  <p>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
  <div class="bs-example" data-example-id="alerts-with-links">
    <div class="alert alert-success" role="alert">
      <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
    </div>
    <div class="alert alert-info" role="alert">
      <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
    </div>
    <div class="alert alert-warning" role="alert">
      <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
    </div>
    <div class="alert alert-danger" role="alert">
      <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="progress" class="page-header">Progress bars</h1>

  <p class="lead">Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.</p>

  <div class="bs-callout bs-callout-danger" id="callout-progress-animation-css3">
    <h4>Cross-browser compatibility</h4>
    <p>Progress bars use CSS3 transitions and animations to achieve some of their effects. These features are not supported in Internet Explorer 9 and below or older versions of Firefox. Opera 12 does not support animations.</p>
  </div>

  <h3 id="progress-basic">Basic example</h3>
  <p>Default progress bar.</p>
  <div class="bs-example" data-example-id="simple-progress-bar">
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
        <span class="sr-only">60% Complete</span>
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%;"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>60% Complete<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="progress-label">With label</h3>
  <p>Remove the <code>&lt;span&gt;</code> with <code>.sr-only</code> class from within the progress bar to show a visible percentage.</p>
  <div class="bs-example" data-example-id="progress-bar-with-label">
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
        60%
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%;"</span><span class="nt">&gt;</span>
    60%
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
  <p>To ensure that the label text remains legible even for low percentages, consider adding a <code>min-width</code> to the progress bar.</p>
  <div class="bs-example" data-example-id="progress-bar-at-low-percentage">
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">
        0%
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 2%;">
        2%
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"0"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"min-width: 2em;"</span><span class="nt">&gt;</span>
    0%
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"2"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"min-width: 2em; width: 2%;"</span><span class="nt">&gt;</span>
    2%
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>


  <h3 id="progress-alternatives">Contextual alternatives</h3>
  <p>Progress bars use some of the same button and alert classes for consistent styles.</p>
  <div class="bs-example" data-example-id="contextual-progress-bar">
    <div class="progress">
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
        <span class="sr-only">40% Complete (success)</span>
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
        <span class="sr-only">20% Complete</span>
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
        <span class="sr-only">60% Complete (warning)</span>
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
        <span class="sr-only">80% Complete (danger)</span>
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"40"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 40%"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>40% Complete (success)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"20"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 20%"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>20% Complete<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>60% Complete (warning)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-danger"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"80"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 80%"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>80% Complete (danger)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="progress-striped">Striped</h3>
  <p>Uses a gradient to create a striped effect. Not available in IE8.</p>
  <div class="bs-example" data-example-id="striped-progress-bar">
    <div class="progress">
      <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
        <span class="sr-only">40% Complete (success)</span>
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
        <span class="sr-only">20% Complete</span>
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
        <span class="sr-only">60% Complete (warning)</span>
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
        <span class="sr-only">80% Complete (danger)</span>
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-success progress-bar-striped"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"40"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 40%"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>40% Complete (success)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-info progress-bar-striped"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"20"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 20%"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>20% Complete<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning progress-bar-striped"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>60% Complete (warning)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-danger progress-bar-striped"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"80"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 80%"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>80% Complete (danger)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="progress-animated">Animated</h3>
  <p>Add <code>.active</code> to <code>.progress-bar-striped</code> to animate the stripes right to left. Not available in IE9 and below.</p>
  <div class="bs-example" data-example-id="animated-progress-bar">
    <div class="progress">
      <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"><span class="sr-only">45% Complete</span></div>
    </div>
    <button type="button" class="btn btn-default bs-docs-activate-animated-progressbar" data-toggle="button" aria-pressed="false" autocomplete="off">Toggle animation</button>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped active"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"45"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 45%"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>45% Complete<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="progress-stacked">Stacked</h3>
  <p>Place multiple bars into the same <code>.progress</code> to stack them.</p>
  <div class="bs-example" data-example-id="stacked-progress-bar">
    <div class="progress">
      <div class="progress-bar progress-bar-success" style="width: 35%">
        <span class="sr-only">35% Complete (success)</span>
      </div>
      <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 20%">
        <span class="sr-only">20% Complete (warning)</span>
      </div>
      <div class="progress-bar progress-bar-danger" style="width: 10%">
        <span class="sr-only">10% Complete (danger)</span>
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-success"</span> <span class="na">style=</span><span class="s">"width: 35%"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>35% Complete (success)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning progress-bar-striped"</span> <span class="na">style=</span><span class="s">"width: 20%"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>20% Complete (warning)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-danger"</span> <span class="na">style=</span><span class="s">"width: 10%"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>10% Complete (danger)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="media" class="page-header">Media object</h1>

  <p class="lead">Abstract object styles for building various types of components (like blog comments, Tweets, etc) that feature a left- or right-aligned image alongside textual content.</p>

  <h3 id="media-default">Default media</h3>
  <p>The default media displays a media object (images, video, audio) to the left or right of a content block.</p>
  <div class="bs-example" data-example-id="default-media">
    <div class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
    <div class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading">Nested media heading</h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>
      </div>
    </div>
    <div class="media">
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
      </div>
      <div class="media-right">
        <a href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
        </a>
      </div>
    </div>
    <div class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
      </div>
      <div class="media-right">
        <a href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
        </a>
      </div>
    </div>
  </div><!-- /.bs-example -->
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h4&gt;</span>
    ...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <p>The classes <code>.pull-left</code> and <code>.pull-right</code> also exist and were previously used as part of the media component, but are deprecated for that use as of v3.3.0. They are approximately equivalent to <code>.media-left</code> and <code>.media-right</code>, except that <code>.media-right</code> should be placed after the <code>.media-body</code> in the html.</p>
  <h3 id="media-alignment">Media alignment</h3>
  <p>The images or other media can be aligned top, middle, or bottom. The default is top aligned.</p>
  <div class="bs-example" data-example-id="media-alignment">
    <div class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Top aligned media</h4>
        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
      </div>
    </div>
    <div class="media">
      <div class="media-left media-middle">
        <a href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Middle aligned media</h4>
        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
      </div>
    </div>
    <div class="media">
      <div class="media-left media-bottom">
        <a href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Bottom aligned media</h4>
        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-left media-middle"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Middle aligned media<span class="nt">&lt;/h4&gt;</span>
    ...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="media-list">Media list</h3>
  <p>With a bit of extra markup, you can use media inside list (useful for comment threads or articles lists).</p>
  <div class="bs-example" data-example-id="media-list">
    <ul class="media-list">
      <li class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
          <!-- Nested media object -->
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Nested media heading</h4>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
              <!-- Nested media object -->
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Nested media heading</h4>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </div>
              </div>
            </div>
          </div>
          <!-- Nested media object -->
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Nested media heading</h4>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"media-list"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h4&gt;</span>
      ...
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="list-group" class="page-header">List group</h1>

  <p class="lead">List groups are a flexible and powerful component for displaying not only simple lists of elements, but complex ones with custom content.</p>

  <h3 id="list-group-basic">Basic example</h3>
  <p>The most basic list group is simply an unordered list with list items, and the proper classes. Build upon it with the options that follow, or your own CSS as needed.</p>
  <div class="bs-example" data-example-id="simple-list-group">
    <ul class="list-group">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Morbi leo risus</li>
      <li class="list-group-item">Porta ac consectetur ac</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

  <h3 id="list-group-badges">Badges</h3>
  <p>Add the badges component to any list group item and it will automatically be positioned on the right.</p>
  <div class="bs-example" data-example-id="list-group-badges">
    <ul class="list-group">
      <li class="list-group-item">
        <span class="badge">14</span>
        Cras justo odio
      </li>
      <li class="list-group-item">
        <span class="badge">2</span>
        Dapibus ac facilisis in
      </li>
      <li class="list-group-item">
        <span class="badge">1</span>
        Morbi leo risus
      </li>
    </ul>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge"</span><span class="nt">&gt;</span>14<span class="nt">&lt;/span&gt;</span>
    Cras justo odio
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

  <h3 id="list-group-linked">Linked items</h3>
  <p>Linkify list group items by using anchor tags instead of list items (that also means a parent <code>&lt;div&gt;</code> instead of an <code>&lt;ul&gt;</code>). No need for individual parents around each element.</p>
  <div class="bs-example" data-example-id="list-group-anchors">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item active"</span><span class="nt">&gt;</span>
    Cras justo odio
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="list-group-disabled">Disabled items</h3>
  <p>Add <code>.disabled</code> to a <code>.list-group-item</code> to gray it out to appear disabled.</p>
  <div class="bs-example" data-example-id="list-group-disabled">
    <div class="list-group">
      <a href="#" class="list-group-item disabled">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item disabled"</span><span class="nt">&gt;</span>
    Cras justo odio
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="list-group-contextual-classes">Contextual classes</h3>
  <p>Use contextual classes to style list items, default or linked. Also includes <code>.active</code> state.</p>
  <div class="bs-example" data-example-id="list-group-variants">
    <div class="row">
      <div class="col-sm-6">
        <ul class="list-group">
          <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
          <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
          <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
          <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
        </ul>
      </div>
      <div class="col-sm-6">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
          <a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
          <a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
          <a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
        </div>
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-success"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-info"</span><span class="nt">&gt;</span>Cras sit amet nibh libero<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-warning"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-danger"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-success"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-info"</span><span class="nt">&gt;</span>Cras sit amet nibh libero<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-warning"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-danger"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="list-group-custom-content">Custom content</h3>
  <p>Add nearly any HTML within, even for linked list groups like the one below.</p>
  <div class="bs-example" data-example-id="list-group-custom-content">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        <h4 class="list-group-item-heading">List group item heading</h4>
        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">List group item heading</h4>
        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">List group item heading</h4>
        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
      </a>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item active"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"list-group-item-heading"</span><span class="nt">&gt;</span>List group item heading<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"list-group-item-text"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="panels" class="page-header">Panels</h1>

  <p class="lead">While not always necessary, sometimes you need to put your DOM in a box. For those situations, try the panel component.</p>

  <h3 id="panels-basic">Basic example</h3>
  <p>By default, all the <code>.panel</code> does is apply some basic border and padding to contain some content.</p>
  <div class="bs-example" data-example-id="simple-panel">
    <div class="panel panel-default">
      <div class="panel-body">
        Basic panel example
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
    Basic panel example
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="panels-heading">Panel with heading</h3>
  <p>Easily add a heading container to your panel with <code>.panel-heading</code>. You may also include any <code>&lt;h1&gt;</code>-<code>&lt;h6&gt;</code> with a <code>.panel-title</code> class to add a pre-styled heading.</p>
  <p>For proper link coloring, be sure to place links in headings within <code>.panel-title</code>.</p>
  <div class="bs-example" data-example-id="panel-with-heading">
    <div class="panel panel-default">
      <div class="panel-heading">Panel heading without title</div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading without title<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
    Panel content
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"panel-title"</span><span class="nt">&gt;</span>Panel title<span class="nt">&lt;/h3&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
    Panel content
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="panels-footer">Panel with footer</h3>
  <p>Wrap buttons or secondary text in <code>.panel-footer</code>. Note that panel footers <strong>do not</strong> inherit colors and borders when using contextual variations as they are not meant to be in the foreground.</p>
  <div class="bs-example" data-example-id="panel-with-footer">
    <div class="panel panel-default">
      <div class="panel-body">
        Panel content
      </div>
      <div class="panel-footer">Panel footer</div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
    Panel content
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-footer"</span><span class="nt">&gt;</span>Panel footer<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="panels-alternatives">Contextual alternatives</h3>
  <p>Like other components, easily make a panel more meaningful to a particular context by adding any of the contextual state classes.</p>
  <div class="bs-example" data-example-id="contextual-panels">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <h3 id="panels-tables">With tables</h3>
  <p>Add any non-bordered <code>.table</code> within a panel for a seamless design. If there is a <code>.panel-body</code>, we add an extra border to the top of the table for separation.</p>
  <div class="bs-example" data-example-id="table-within-panel">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Panel heading</div>
      <div class="panel-body">
        <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Default panel contents --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Table --&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <p>If there is no panel body, the component moves from panel header to table without interruption.</p>
  <div class="bs-example" data-example-id="panel-without-body-with-table">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Panel heading</div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Default panel contents --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Table --&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>


  <h3 id="panels-list-group">With list groups</h3>
  <p>Easily include full-width <a href="#list-group">list groups</a> within any panel.</p>
  <div class="bs-example" data-example-id="panel-with-list-group">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Panel heading</div>
      <div class="panel-body">
        <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>

      <!-- List group -->
      <ul class="list-group">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Default panel contents --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- List group --&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="responsive-embed" class="page-header">Responsive embed</h1>

  <p>Allow browsers to determine video or slideshow dimensions based on the width of their containing block by creating an intrinsic ratio that will properly scale on any device.</p>
  <p>Rules are directly applied to <code>&lt;iframe&gt;</code>, <code>&lt;embed&gt;</code>, <code>&lt;video&gt;</code>, and <code>&lt;object&gt;</code> elements; optionally use an explicit descendant class <code>.embed-responsive-item</code> when you want to match the styling for other attributes.</p>
  <p><strong>Pro-Tip!</strong> You don't need to include <code>frameborder="0"</code> in your <code>&lt;iframe&gt;</code>s as we override that for you.</p>
  <div class="bs-example" data-example-id="responsive-embed-16by9-iframe-youtube">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- 16:9 aspect ratio --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"embed-responsive embed-responsive-16by9"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;iframe</span> <span class="na">class=</span><span class="s">"embed-responsive-item"</span> <span class="na">src=</span><span class="s">"..."</span><span class="nt">&gt;&lt;/iframe&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- 4:3 aspect ratio --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"embed-responsive embed-responsive-4by3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;iframe</span> <span class="na">class=</span><span class="s">"embed-responsive-item"</span> <span class="na">src=</span><span class="s">"..."</span><span class="nt">&gt;&lt;/iframe&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 id="wells" class="page-header">Wells</h1>

  <h3>Default well</h3>
  <p>Use the well as a simple effect on an element to give it an inset effect.</p>
  <div class="bs-example" data-example-id="default-well">
    <div class="well">
      Look, I'm in a well!
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></div>
  <h3>Optional classes</h3>
  <p>Control padding and rounded corners with two optional modifier classes.</p>
  <div class="bs-example" data-example-id="large-well">
    <div class="well well-lg">
      Look, I'm in a large well!
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well well-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></div>

  <div class="bs-example" data-example-id="small-well">
    <div class="well well-sm">
      Look, I'm in a small well!
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well well-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>


        </div>

        <div class="col-md-3" role="complementary">
          <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm">
            <ul class="nav bs-docs-sidenav">

                <li>
  <a href="#glyphicons">Glyphicons</a>
  <ul class="nav">
    <li><a href="#glyphicons-glyphs">Available glyphs</a></li>
    <li><a href="#glyphicons-how-to-use">How to use</a></li>
    <li><a href="#glyphicons-examples">Examples</a></li>
  </ul>
</li>
<li>
  <a href="#dropdowns">Dropdowns</a>
  <ul class="nav">
    <li><a href="#dropdowns-example">Example</a></li>
    <li><a href="#dropdowns-alignment">Alignment</a></li>
    <li><a href="#dropdowns-headers">Headers</a></li>
    <li><a href="#dropdowns-divider">Divider</a></li>
    <li><a href="#dropdowns-disabled">Disabled menu items</a></li>
  </ul>
</li>
<li>
  <a href="#btn-groups">Button groups</a>
  <ul class="nav">
    <li><a href="#btn-groups-single">Basic example</a></li>
    <li><a href="#btn-groups-toolbar">Button toolbar</a></li>
    <li><a href="#btn-groups-sizing">Sizing</a></li>
    <li><a href="#btn-groups-nested">Nesting</a></li>
    <li><a href="#btn-groups-vertical">Vertical variation</a></li>
    <li><a href="#btn-groups-justified">Justified button groups</a></li>
  </ul>
</li>
<li>
  <a href="#btn-dropdowns">Button dropdowns</a>
  <ul class="nav">
    <li><a href="#btn-dropdowns-single">Single button dropdowns</a></li>
    <li><a href="#btn-dropdowns-split">Split button dropdowns</a></li>
    <li><a href="#btn-dropdowns-sizing">Sizing</a></li>
    <li><a href="#btn-dropdowns-dropup">Dropup variation</a></li>
  </ul>
</li>
<li>
  <a href="#input-groups">Input groups</a>
  <ul class="nav">
    <li><a href="#input-groups-basic">Basic example</a></li>
    <li><a href="#input-groups-sizing">Sizing</a></li>
    <li><a href="#input-groups-checkboxes-radios">Checkbox and radios addons</a></li>
    <li><a href="#input-groups-buttons">Button addons</a></li>
    <li><a href="#input-groups-buttons-dropdowns">Buttons with dropdowns</a></li>
    <li><a href="#input-groups-buttons-segmented">Segmented buttons</a></li>
  </ul>
</li>
<li>
  <a href="#nav">Navs</a>
  <ul class="nav">
    <li><a href="#nav-tabs">Tabs</a></li>
    <li><a href="#nav-pills">Pills</a></li>
    <li><a href="#nav-justified">Justified</a></li>
    <li><a href="#nav-disabled-links">Disabled links</a></li>
    <li><a href="#nav-dropdowns">Using dropdowns</a></li>
  </ul>
</li>
<li>
  <a href="#navbar">Navbar</a>
  <ul class="nav">
    <li><a href="#navbar-default">Default navbar</a></li>
    <li><a href="#navbar-brand-image">Brand image</a></li>
    <li><a href="#navbar-forms">Forms</a></li>
    <li><a href="#navbar-buttons">Buttons</a></li>
    <li><a href="#navbar-text">Text</a></li>
    <li><a href="#navbar-links">Non-nav links</a></li>
    <li><a href="#navbar-component-alignment">Component alignment</a></li>
    <li><a href="#navbar-fixed-top">Fixed to top</a></li>
    <li><a href="#navbar-fixed-bottom">Fixed to bottom</a></li>
    <li><a href="#navbar-static-top">Static top</a></li>
    <li><a href="#navbar-inverted">Inverted navbar</a></li>
  </ul>
</li>
<li><a href="#breadcrumbs">Breadcrumbs</a></li>
<li>
  <a href="#pagination">Pagination</a>
  <ul class="nav">
    <li><a href="#pagination-default">Default pagination</a></li>
    <li><a href="#pagination-pager">Pager</a></li>
  </ul>
</li>
<li><a href="#labels">Labels</a></li>
<li><a href="#badges">Badges</a></li>
<li><a href="#jumbotron">Jumbotron</a></li>
<li><a href="#page-header">Page header</a></li>
<li>
  <a href="#thumbnails">Thumbnails</a>
  <ul class="nav">
    <li><a href="#thumbnails-default">Default example</a></li>
    <li><a href="#thumbnails-custom-content">Custom content</a></li>
  </ul>
</li>
<li>
  <a href="#alerts">Alerts</a>
  <ul class="nav">
    <li><a href="#alerts-examples">Examples</a></li>
    <li><a href="#alerts-dismissible">Dismissible alerts</a></li>
    <li><a href="#alerts-links">Links in alerts</a></li>
  </ul>
</li>
<li>
  <a href="#progress">Progress bars</a>
  <ul class="nav">
    <li><a href="#progress-basic">Basic example</a></li>
    <li><a href="#progress-label">With label</a></li>
    <li><a href="#progress-alternatives">Contextual alternatives</a></li>
    <li><a href="#progress-striped">Striped</a></li>
    <li><a href="#progress-animated">Animated</a></li>
    <li><a href="#progress-stacked">Stacked</a></li>
  </ul>
</li>
<li>
  <a href="#media">Media object</a>
  <ul class="nav">
    <li><a href="#media-default">Default media</a></li>
    <li><a href="#media-list">Media list</a></li>
  </ul>
</li>
<li>
  <a href="#list-group">List group</a>
  <ul class="nav">
    <li><a href="#list-group-basic">Basic example</a></li>
    <li><a href="#list-group-badges">Badges</a></li>
    <li><a href="#list-group-linked">Linked items</a></li>
    <li><a href="#list-group-disabled">Disabled items</a></li>
    <li><a href="#list-group-contextual-classes">Contextual classes</a></li>
    <li><a href="#list-group-custom-content">Custom content</a></li>
  </ul>
</li>
<li>
  <a href="#panels">Panels</a>
  <ul class="nav">
    <li><a href="#panels-basic">Basic example</a></li>
    <li><a href="#panels-heading">Panel with heading</a></li>
    <li><a href="#panels-alternatives">Contextual alternatives</a></li>
    <li><a href="#panels-tables">With tables</a>
    <li><a href="#panels-list-group">With list groups</a>
  </ul>
</li>
<li><a href="#responsive-embed">Responsive embed</a></li>
<li><a href="#wells">Wells</a></li>


            </ul>
            <a class="back-to-top" href="#top">
              Back to top
            </a>

            <a href="#" class="bs-docs-theme-toggle" role="button">
              Preview theme
            </a>

          </nav>
        </div>

      </div>
    </div>

<?php
// TODO  <script src="../assets/js/docs.min.js"></script>

echo $OUTPUT->footer();
