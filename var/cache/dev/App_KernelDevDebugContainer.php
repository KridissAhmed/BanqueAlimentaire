<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUeunkCw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUeunkCw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUeunkCw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUeunkCw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUeunkCw\App_KernelDevDebugContainer([
    'container.build_hash' => 'UeunkCw',
    'container.build_id' => '696a01c8',
    'container.build_time' => 1674658788,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUeunkCw');
