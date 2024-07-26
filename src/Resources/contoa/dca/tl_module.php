<?php

/**
 * Created by MEN AT WORK Werbeagentur GmbH 2019
 *
 * @copyright  Andi Platen, MEN AT WORK Werbeagentur GmbH 2019
 * @author     Stefan Heimes <heimes@men-at-work.de>
 */

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['wf_extendedBreadcrumb_rootpage'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['wf_extendedBreadcrumb_rootpage'],
    'inputType' => 'pageTree',
    'search'    => false,
    'eval'      => array('fieldType' => 'radio', 'tl_class' => 'clr'),
    'sql'       => 'varchar(64) NOT NULL default ""'
);

$GLOBALS['TL_DCA']['tl_module']['fields']['wf_extendedBreadcrumb_defineRoot'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['wf_extendedBreadcrumb_defineRoot'],
    'inputType' => 'checkbox',
    'eval'      => array('submitOnChange' => true, 'tl_class' => 'clr w50'),
    'sql'       => 'char(1) NOT NULL default ""'
);

$GLOBALS['TL_DCA']['tl_module']['fields']['wf_extendedBreadcrumb_delimiter'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['wf_extendedBreadcrumb_delimiter'],
    'default'   => '>',
    'inputType' => 'text',
    'search'    => false,
    'eval'      => array('mandatory' => true, 'maxlength' => 64, 'tl_class' => 'w50'),
    'sql'       => 'char(64) NOT NULL default ""'
);

$GLOBALS['TL_DCA']['tl_module']['fields']['wf_extendedBreadcrumb_cutlength'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['wf_extendedBreadcrumb_cutlength'],
    'default'   => '20',
    'inputType' => 'text',
    'search'    => false,
    'eval'      => array('maxlength' => 3, 'rgxp' => 'digit', 'tl_class' => 'w50'),
    'sql'       => 'int(10) NOT NULL default 20'
);

$GLOBALS['TL_DCA']['tl_module']['fields']['wf_extendedBreadcrumb_placeholder'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['wf_extendedBreadcrumb_placeholder'],
    'default'   => '...',
    'inputType' => 'text',
    'search'    => false,
    'eval'      => array('maxlength' => 5, 'tl_class' => 'w50'),
    'sql'       => 'char(64) NOT NULL default ""'
);

$GLOBALS['TL_DCA']['tl_module']['fields']['wf_extendedBreadcrumb_keywords'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['wf_extendedBreadcrumb_keywords'],
    'inputType' => 'text',
    'search'    => false,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => 'text NULL'
);

$GLOBALS['TL_DCA']['tl_module']['fields']['wf_extendedBreadcrumb_hidden'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['wf_extendedBreadcrumb_hidden'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'search'    => false,
    'eval'      => array('tl_class' => 'clr'),
    'sql'       => 'char(1) NOT NULL default ""'
);

$GLOBALS['TL_DCA']['tl_module']['fields']['wf_extendedBreadcrumb_onlytitle'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['wf_extendedBreadcrumb_onlytitle'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'search'    => false,
    'sql'       => 'char(1) NOT NULL default ""'
);

$GLOBALS['TL_DCA']['tl_module']['fields']['wf_extendedBreadcrumb_hideOnFirstLevel'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['wf_extendedBreadcrumb_hideOnFirstLevel'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'search'    => false,
    'sql'       => 'char(1) NOT NULL default ""'
);

// add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['MenAtWork\WfExtendedBreadcrumbBundle\Module\wf_extendedBreadcrumb']
    = '{title_legend},name,headline,type;{wf_extendedBreadcrumb_config},wf_extendedBreadcrumb_delimiter,wf_extendedBreadcrumb_cutlength,wf_extendedBreadcrumb_placeholder,wf_extendedBreadcrumb_keywords,wf_extendedBreadcrumb_hidden,wf_extendedBreadcrumb_hideOnFirstLevel,wf_extendedBreadcrumb_onlytitle;{wf_extendedBreadcrumb_startpage},wf_extendedBreadcrumb_defineRoot;{protected_legend},protected;{expert_legend},align,space,cssID';

// extend selector
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][]
    = 'wf_extendedBreadcrumb_defineRoot';

// extend subpalettes
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['wf_extendedBreadcrumb_defineRoot']
    = 'wf_extendedBreadcrumb_rootpage';
