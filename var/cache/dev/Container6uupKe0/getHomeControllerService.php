<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\HomeController' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Controller\\HomeController.php';

return $this->services['App\Controller\HomeController'] = new \App\Controller\HomeController(($this->services['twig'] ?? $this->getTwigService()));
