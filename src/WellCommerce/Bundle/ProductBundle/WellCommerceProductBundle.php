<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\ProductBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use WellCommerce\Bundle\CoreBundle\DependencyInjection\Compiler\AutoRegisterServicesPass;

/**
 * Class WellCommerceProductBundle
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
final class WellCommerceProductBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new AutoRegisterServicesPass($this));
    }
}
