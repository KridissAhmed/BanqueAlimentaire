<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSsYfMUT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSsYfMUT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSsYfMUT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSsYfMUT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSsYfMUT\App_KernelDevDebugContainer([
    'container.build_hash' => 'SsYfMUT',
    'container.build_id' => '7cee446d',
    'container.build_time' => 1671720495,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSsYfMUT');
