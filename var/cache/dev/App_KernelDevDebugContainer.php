<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMF3g48X\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMF3g48X/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMF3g48X.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMF3g48X\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMF3g48X\App_KernelDevDebugContainer([
    'container.build_hash' => 'MF3g48X',
    'container.build_id' => '1f8385af',
    'container.build_time' => 1656935949,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMF3g48X');
