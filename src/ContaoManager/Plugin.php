<?php

/**
 * Created by MEN AT WORK Werbeagentur GmbH 2019
 *
 * @copyright  Andi Platen, MEN AT WORK Werbeagentur GmbH 2019
 * @author     Stefan Heimes <heimes@men-at-work.de>
 */

namespace MenAtWork\WfExtendedBreadcrumbBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Config\ConfigInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use MenAtWork\WfExtendedBreadcrumbBundle\WfExtendedBreadcrumbBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * Gets a list of autoload configurations for this bundle.
     *
     * @return ConfigInterface[]
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(WfExtendedBreadcrumbBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
