<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYiZNdmQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYiZNdmQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYiZNdmQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYiZNdmQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYiZNdmQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'YiZNdmQ',
    'container.build_id' => '06727f5b',
    'container.build_time' => 1665131736,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYiZNdmQ');
