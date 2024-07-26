<?php

/**
 * Created by MEN AT WORK Werbeagentur GmbH 2019
 *
 * @copyright  Andi Platen, MEN AT WORK Werbeagentur GmbH 2019
 * @author     Stefan Heimes <heimes@men-at-work.de>
 */

/**
 * Palettes
 */
foreach ($GLOBALS['TL_DCA']['tl_page']['palettes'] as $key => $row) {
    if ($key == '__selector__') {
        continue;
    }
    if (!stristr($row, 'hide,')) {
        continue;
    }
    $GLOBALS['TL_DCA']['tl_page']['palettes'][$key] = str_replace(
        'hide,', 'hide,wf_extendedBreadcrumb,', $GLOBALS['TL_DCA']['tl_page']['palettes'][$key]
    );
}

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['wf_extendedBreadcrumb'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['wf_extendedBreadcrumb'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "char(1) NOT NULL default ''"
);
