<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerATTlSR9\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerATTlSR9/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerATTlSR9.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerATTlSR9\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerATTlSR9\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ATTlSR9',
    'container.build_id' => 'f5a3214c',
    'container.build_time' => 1559051017,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerATTlSR9');
