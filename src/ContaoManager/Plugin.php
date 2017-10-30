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

/**
 * Class Plugin
 * @package ContaoManager
 */
class Plugin implements BundlePluginInterface
{
    /**
     * @param ParserInterface $parser
     * @return array
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('Dreibein\ArticleBackgroundBundle\DreibeinArticleBackgroundBundle')->setLoadAfter([ContaoCoreBundle::class])
        ];
    }

}