<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\SecurityController:login' => function () {
    return ($this->privates['service_locator.ltE88OR'] ?? $this->load('getServiceLocator_LtE88ORService.php'));
}, 'App\\Controller\\SecurityController:register' => function () {
    return ($this->privates['service_locator.K3zGKxb'] ?? $this->load('getServiceLocator_K3zGKxbService.php'));
}, 'App\\Controller\\SubjectController:index' => function () {
    return ($this->privates['service_locator.24hqntT'] ?? $this->load('getServiceLocator_24hqntTService.php'));
}, 'App\\Controller\\TaskController:index' => function () {
    return ($this->privates['service_locator.ptWLnt7'] ?? $this->load('getServiceLocator_PtWLnt7Service.php'));
}, 'App\\Controller\\SecurityController::login' => function () {
    return ($this->privates['service_locator.ltE88OR'] ?? $this->load('getServiceLocator_LtE88ORService.php'));
}, 'App\\Controller\\SecurityController::register' => function () {
    return ($this->privates['service_locator.K3zGKxb'] ?? $this->load('getServiceLocator_K3zGKxbService.php'));
}, 'App\\Controller\\SubjectController::index' => function () {
    return ($this->privates['service_locator.24hqntT'] ?? $this->load('getServiceLocator_24hqntTService.php'));
}, 'App\\Controller\\TaskController::index' => function () {
    return ($this->privates['service_locator.ptWLnt7'] ?? $this->load('getServiceLocator_PtWLnt7Service.php'));
})));
