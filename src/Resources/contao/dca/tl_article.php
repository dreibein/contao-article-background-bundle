<?php

declare(strict_types=1);

/*
 * This file is part of the Dreibein-Article-Background-Bundle.
 * (c) Werbeagentur Dreibein GmbH
 */

namespace Resources\contao\dca;

$table = 'tl_article';

// Selector
$GLOBALS['TL_DCA'][$table]['palettes']['__selector__'][] = 'dreibein_article_background_active';

// Palettes
$GLOBALS['TL_DCA'][$table]['palettes']['default'] = str_replace(';{layout_legend}', ',dreibein_article_background_active;{layout_legend}', $GLOBALS['TL_DCA'][$table]['palettes']['default']);

// Subpalettes
$GLOBALS['TL_DCA'][$table]['subpalettes']['dreibein_article_background_active'] = 'dreibein_article_background_pic,dreibein_article_background_size,dreibein_article_background_repeat,dreibein_article_background_area,dreibein_article_background_attachment,dreibein_article_background_overlay,dreibein_article_background_overlay_opacity';

// Palettes
//$GLOBALS['TL_DCA'][$table]['palettes']['default'] = str_replace(";{layout_legend}", ",dreibein_article_background_active,dreibein_article_background_pic,dreibein_article_background_size,dreibein_article_background_repeat,dreibein_article_background_area,dreibein_article_background_attachment,dreibein_article_background_overlay,dreibein_article_background_overlay_opacity;{layout_legend}", $GLOBALS['TL_DCA'][$table]['palettes']['default']);

// DCA Felder
$GLOBALS['TL_DCA'][$table]['fields']['dreibein_article_background_active'] = [
    'label' => &$GLOBALS['TL_LANG'][$table]['dreibein_article_background_active'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'm12 clr long', 'submitOnChange' => true],
    'sql' => ['type' => 'string', 'length' => 1, 'notnull' => true, 'default' => ''],
];

$GLOBALS['TL_DCA'][$table]['fields']['dreibein_article_background_pic'] = [
    'label' => &$GLOBALS['TL_LANG'][$table]['dreibein_article_background_pic'],
    'exclude' => true,
    'inputType' => 'fileTree',
    'eval' => ['filesOnly' => 'true', 'files' => 'true', 'fieldType' => 'radio', 'tl_class' => 'clr long'],
    'sql' => ['type' => 'blob', 'notnull' => true],
];

$GLOBALS['TL_DCA'][$table]['fields']['dreibein_article_background_size'] = [
    'label' => &$GLOBALS['TL_LANG'][$table]['dreibein_article_background_size'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['cover' => 'Bild beschneiden', 'contain' => 'Bild nicht beschneiden'],
    'eval' => ['tl_class' => 'clr w50 wizard', 'includeBlankOption' => true],
    'sql' => ['type' => 'string', 'length' => 10, 'notnull' => false],
];

$GLOBALS['TL_DCA'][$table]['fields']['dreibein_article_background_repeat'] = [
    'label' => &$GLOBALS['TL_LANG'][$table]['dreibein_article_background_repeat'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['repeat' => 'Bild wiederholen', 'no-repeat' => 'Bild nicht wiederholen'],
    'eval' => ['tl_class' => 'w50 wizard', 'includeBlankOption' => true],
    'sql' => ['type' => 'string', 'length' => 10, 'notnull' => false],
];

$GLOBALS['TL_DCA'][$table]['fields']['dreibein_article_background_area'] = [
    'label' => &$GLOBALS['TL_LANG'][$table]['dreibein_article_background_area'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['left top' => 'left top', 'left center' => 'left center', 'left bottom' => 'left bottom', 'right top' => 'right top', 'right center' => 'right center', 'right bottom' => 'right bottom', 'center top' => 'center top', 'center center' => 'center center', 'center bottom' => 'center bottom'],
    'eval' => ['tl_class' => 'w50 wizard clr', 'includeBlankOption' => true],
    'sql' => ['type' => 'string', 'length' => 20, 'notnull' => false],
];

$GLOBALS['TL_DCA'][$table]['fields']['dreibein_article_background_attachment'] = [
    'label' => &$GLOBALS['TL_LANG'][$table]['dreibein_article_background_attachment'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['fixed' => 'fixed'],
    'eval' => ['tl_class' => 'w50 wizard', 'includeBlankOption' => true],
    'sql' => ['type' => 'string', 'length' => 5, 'notnull' => false],
];

$GLOBALS['TL_DCA'][$table]['fields']['dreibein_article_background_overlay'] = [
    'label' => &$GLOBALS['TL_LANG'][$table]['dreibein_article_background_overlay'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50 wizard m12 clr'],
    'sql' => ['type' => 'string', 'length' => 1, 'notnull' => true, 'default' => ''],
];

$GLOBALS['TL_DCA'][$table]['fields']['dreibein_article_background_overlay_opacity'] = [
    'label' => &$GLOBALS['TL_LANG'][$table]['dreibein_article_background_overlay_opacity'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50', 'maxlength' => 4],
    'sql' => ['type' => 'string', 'length' => 4, 'notnull' => false],
];
