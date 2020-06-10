<?php

declare(strict_types=1);

/*
 * This file is part of the Dreibein-Article-Background-Bundle.
 *
 * (c) Werbeagentur Dreibein GmbH
 */

namespace Dreibein\ArticleBackgroundBundle\EventListener;

use Contao\Environment;
use Contao\FilesModel;
use Contao\FrontendTemplate;
use Contao\Module;

class CompileArticleListener
{
    /**
     * @param FrontendTemplate $template
     * @param array            $data
     * @param Module           $module
     */
    public function onCompileArticle(FrontendTemplate $template, array $data, Module $module): void
    {
        // Set the variables in the template
        $template->dreibeinArticleBackground = false;
        $template->dreibeinArticleBackgroundStyle = '';
        $template->dreibeinArticleOverlay = false;
        $template->dreibeinArticleOverlayStyle = '';

        $this->setBackgroundStyle($template, $data);
        $this->setOpacityStyle($template, $data);
    }

    private function setBackgroundStyle(FrontendTemplate $template, array $data): void
    {
        if ($data['dreibein_article_background_active'] && $data['dreibein_article_background_pic']) {
            $backgroundFile = FilesModel::findByPk($data['dreibein_article_background_pic']);
            if (null === $backgroundFile) {
                return;
            }

            $template->dreibeinArticleBackground = true;

            // Add the default style
            $style = 'position:relative; background-image: url(\'' . $backgroundFile->path . '\');';

            // Set the background size
            if ($data['dreibein_article_background_size']) {
                $style .= ' background-size:' . $data['dreibein_article_background_size'] . ';';
            }

            // Set the background repeat property
            if ($data['dreibein_article_background_repeat']) {
                $style .= ' background-repeat:' . $data['dreibein_article_background_repeat'] . ';';
            }

            // Set the background position
            if ($data['dreibein_article_background_area']) {
                $style .= ' background-position:' . $data['dreibein_article_background_area'] . ';';
            }

            // Set the background attachment and check the user agent
            if ($data['dreibein_article_background_attachment'] && !Environment::get('agent')->mobile) {
                $style .= ' background-attachment:' . $data['dreibein_article_background_attachment'] . ';';
            }

            // Add the style to the template
            $template->dreibeinArticleBackgroundStyle = $style;
        }
    }

    private function setOpacityStyle(FrontendTemplate $template, array $data): void
    {
        if ($template->dreibeinArticleBackground && $data['dreibein_article_background_overlay']) {
            $template->dreibeinArticleOverlay = true;

            $style = 'top:0; left:0; right:0; bottom:0; position:absolute;';

            // Add the opacity to the styling
            if ($data['dreibein_article_background_overlay_opacity']) {
                $style .= ' opacity:' . $data['dreibein_article_background_overlay_opacity'] . ';';
            }

            $template->dreibeinArticleOverlayStyle = $style;
        }
    }
}
