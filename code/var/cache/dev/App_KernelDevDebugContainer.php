<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLxKrHAI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLxKrHAI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLxKrHAI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLxKrHAI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLxKrHAI\App_KernelDevDebugContainer([
    'container.build_hash' => 'LxKrHAI',
    'container.build_id' => '79d08d0b',
    'container.build_time' => 1680590746,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLxKrHAI');