<?php
/**
 * Created by PhpStorm.
 * User: thomasvoggenreiter
 * Date: 30.10.17
 * Time: 14:43
 */

namespace ContaoManager;


use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Dreibein\ArticleBackgroundBundle\DreibeinArticleBackgroundBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(DreibeinArticleBackgroundBundle::class)->setLoadAfter([ContaoCoreBundle::class])
        ];
    }

}