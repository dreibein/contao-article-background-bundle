<?php

declare(strict_types=1);

/*
 * This file is part of the Dreibein-Article-Background-Bundle.
 *
 * (c) Werbeagentur Dreibein GmbH
 */

namespace Dreibein\ArticleBackgroundBundle;

use Dreibein\ArticleBackgroundBundle\DependencyInjection\DreibeinArticleBackgroundExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class DreibeinArticleBackgroundBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new DreibeinArticleBackgroundExtension();
    }
}
