<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSmMgFQY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSmMgFQY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSmMgFQY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSmMgFQY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSmMgFQY\App_KernelDevDebugContainer([
    'container.build_hash' => 'SmMgFQY',
    'container.build_id' => '4b39491c',
    'container.build_time' => 1680944448,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSmMgFQY');
