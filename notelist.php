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

define('WT_SCRIPT_NAME', 'notelist.php');
require './includes/session.php';
require_once WT_ROOT . 'includes/functions/functions_print_lists.php';

$controller = new PageController;
$controller->setPageTitle(I18N::translate('Shared notes'));
$controller->pageHeader();

echo '<div id="notelist-page">',
	'<h2>', I18N::translate('Shared notes'), '</h2>',
	format_note_table(get_note_list(WT_GED_ID));
echo '</div>';
