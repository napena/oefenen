<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFWhjyov\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFWhjyov/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFWhjyov.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFWhjyov\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFWhjyov\App_KernelDevDebugContainer([
    'container.build_hash' => 'FWhjyov',
    'container.build_id' => '4808319b',
    'container.build_time' => 1675296448,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFWhjyov');
