<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5tfktVW\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5tfktVW/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5tfktVW.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5tfktVW\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container5tfktVW\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => '5tfktVW',
    'container.build_id' => 'f296a466',
    'container.build_time' => 1550816442,
), __DIR__.\DIRECTORY_SEPARATOR.'Container5tfktVW');
