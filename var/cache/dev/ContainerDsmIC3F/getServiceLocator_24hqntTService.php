<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.24hqntT' shared service.

return $this->privates['service_locator.24hqntT'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('subjectRepository' => function (): ?\App\Repository\SubjectRepository {
    return ($this->privates['App\Repository\SubjectRepository'] ?? $this->load('getSubjectRepositoryService.php'));
}));