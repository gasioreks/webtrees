<?php
namespace Webtrees;

/**
 * webtrees: online genealogy
 * Copyright (C) 2015 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

$controller = new IndividualController;

echo '<link href="' . WT_STATIC_URL . WT_MODULES_DIR . 'GEDFact_assistant/css/gf_styles.css" rel="stylesheet" type="text/css" media="screen">';

global $tabno, $linkToID, $SEARCH_SPIDER;
global $SHOW_AGE_DIFF;
global $GEDCOM;
global $show_full;
global $famid, $censyear, $censdate;

$summary =
	$controller->record->format_first_major_fact(WT_EVENTS_BIRT, 2) .
	$controller->record->format_first_major_fact(WT_EVENTS_DEAT, 2);

require WT_ROOT . WT_MODULES_DIR . 'GEDFact_assistant/_MEDIA/media_1_ctrl.php';
