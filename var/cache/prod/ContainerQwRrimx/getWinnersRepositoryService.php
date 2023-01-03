<?php

namespace ContainerQwRrimx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWinnersRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\WinnersRepository' shared autowired service.
     *
     * @return \App\Repository\WinnersRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\WinnersRepository'] = new \App\Repository\WinnersRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}