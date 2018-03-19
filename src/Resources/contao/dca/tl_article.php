<?php
/**
 * Created by PhpStorm.
 * User: thomasvoggenreiter
 * Date: 30.10.17
 * Time: 14:44
 */

namespace Resources\contao\dca;


// Selector
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] = 'dreibein_article_background_active';

// Palettes
$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace(";{layout_legend}", ",dreibein_article_background_active;{layout_legend}", $GLOBALS['TL_DCA']['tl_article']['palettes']['default']);

// Subpalettes
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['dreibein_article_background_active'] = 'dreibein_article_background_pic,dreibein_article_background_size,dreibein_article_background_repeat,dreibein_article_background_area,dreibein_article_background_attachment,dreibein_article_background_overlay,dreibein_article_background_overlay_opacity';


// Palettes
//$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace(";{layout_legend}", ",dreibein_article_background_active,dreibein_article_background_pic,dreibein_article_background_size,dreibein_article_background_repeat,dreibein_article_background_area,dreibein_article_background_attachment,dreibein_article_background_overlay,dreibein_article_background_overlay_opacity;{layout_legend}", $GLOBALS['TL_DCA']['tl_article']['palettes']['default']);


// DCA Felder
$GLOBALS['TL_DCA']['tl_article']['fields']['dreibein_article_background_active'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['dreibein_article_background_active'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => ['tl_class'=>'m12 clr long','submitOnChange'=>true],
    'sql'       => "char(1) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['dreibein_article_background_pic'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['dreibein_article_background_pic'],
    'exclude'   => true,
    'inputType' => 'fileTree',
    'eval'      => ['filesOnly'=>'true', 'files'=>'true', 'fieldType'=>'radio', 'tl_class'=>'clr long'],
    'sql'       => "binary(16) NULL"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['dreibein_article_background_size'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['dreibein_article_background_size'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => ['cover'=>'Bild beschneiden', 'contain'=>'Bild nicht beschneiden'],
    'eval'      => ['tl_class'=>'clr w50 wizard', 'includeBlankOption'=>true],
    'sql'       => "varchar(10) NULL"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['dreibein_article_background_repeat'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['dreibein_article_background_repeat'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => ['repeat'=>'Bild wiederholen', 'no-repeat'=>'Bild nicht wiederholen'],
    'eval'      => ['tl_class'=>'w50 wizard', 'includeBlankOption'=>true],
    'sql'       => "varchar(10) NULL"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['dreibein_article_background_area'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['dreibein_article_background_area'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => ['left top'=>'left top', 'left center'=>'left center', 'left bottom'=>'left bottom', 'right top'=>'right top', 'right center'=>'right center', 'right bottom'=>'right bottom', 'center top'=>'center top', 'center center'=>'center center', 'center bottom'=>'center bottom'],
    'eval'      => ['tl_class'=>'w50 wizard clr', 'includeBlankOption'=>true],
    'sql'       => "varchar(20) NULL"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['dreibein_article_background_attachment'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['dreibein_article_background_attachment'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => ['fixed'=>'fixed'],
    'eval'      => ['tl_class'=>'w50 wizard', 'includeBlankOption'=>true],
    'sql'       => "varchar(5) NULL"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['dreibein_article_background_overlay'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['dreibein_article_background_overlay'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => ['tl_class'=>'w50 wizard m12 clr'],
    'sql'       => "char(1) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['dreibein_article_background_overlay_opacity'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['dreibein_article_background_overlay_opacity'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['tl_class'=>'w50', 'maxlength'=>4],
    'sql'       => "varchar(4) NULL"
];
