<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBoxzd3I\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBoxzd3I/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBoxzd3I.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBoxzd3I\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBoxzd3I\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Boxzd3I',
    'container.build_id' => '45636dcd',
    'container.build_time' => 1597530880,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBoxzd3I');
