<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPmpP2Oq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPmpP2Oq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPmpP2Oq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPmpP2Oq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPmpP2Oq\App_KernelDevDebugContainer([
    'container.build_hash' => 'PmpP2Oq',
    'container.build_id' => 'd6de6b85',
    'container.build_time' => 1681020966,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPmpP2Oq');
