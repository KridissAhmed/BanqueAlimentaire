<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMhRNnUU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMhRNnUU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMhRNnUU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMhRNnUU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMhRNnUU\App_KernelDevDebugContainer([
    'container.build_hash' => 'MhRNnUU',
    'container.build_id' => '322f7965',
    'container.build_time' => 1667900670,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMhRNnUU');
