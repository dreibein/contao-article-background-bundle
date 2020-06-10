<?php

declare(strict_types=1);

/*
 * This file is part of the Dreibein-Article-Background-Bundle.
 *
 * (c) Werbeagentur Dreibein GmbH
 */

namespace Dreibein\ArticleBackgroundBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Dreibein\ArticleBackgroundBundle\DreibeinArticleBackgroundBundle;

/**
 * Class Plugin.
 */
class Plugin implements BundlePluginInterface
{
    /**
     * @param ParserInterface $parser
     *
     * @return array
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(DreibeinArticleBackgroundBundle::class)->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
