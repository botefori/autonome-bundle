<?php

declare(strict_types=1);

namespace KnpU\LoremIpsumBundle\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class KnpULoremIpsumExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
       $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
       $loader->load('services.xml');
    }

}