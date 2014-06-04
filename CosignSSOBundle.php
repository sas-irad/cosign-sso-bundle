<?php

namespace SAS\IRAD\CosignSSOBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use SAS\IRAD\CosignSSOBundle\DependencyInjection\Security\Factory\CosignSSOFactory;

class CosignSSOBundle extends Bundle {
    
    public function build(ContainerBuilder $container) {

        parent::build($container);
        
        $extension = $container->getExtension('security');
        $extension->addSecurityListenerFactory(new CosignSSOFactory());
    }
    
}
