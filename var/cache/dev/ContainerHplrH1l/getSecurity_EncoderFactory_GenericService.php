<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.encoder_factory.generic' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Encoder/EncoderFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Encoder/EncoderFactory.php';

return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('App\\Entity\\Student' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', 'arguments' => array(0 => 12))));
