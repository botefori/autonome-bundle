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

       $configuration = $this->getConfiguration($configs, $container);
       $config = $this->processConfiguration($configuration, $configs);

       $definition = $container->getDefinition('knpu_lorem_ipsum.knpu_ipsum');
       $definition->setArgument(0, $config['unicorns_are_real']);
       $definition->setArgument(1, $config['min_sunshine']);
    }

    public function getAlias()
    {
        return 'knpu_lorem_ipsum';
    }

}