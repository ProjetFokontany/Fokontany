<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container47Gn26V\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container47Gn26V/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container47Gn26V.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container47Gn26V\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container47Gn26V\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => '47Gn26V',
    'container.build_id' => '2f79b3f3',
    'container.build_time' => 1552031822,
), __DIR__.\DIRECTORY_SEPARATOR.'Container47Gn26V');
