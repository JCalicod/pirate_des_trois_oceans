<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZa8rhZE\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZa8rhZE/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZa8rhZE.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZa8rhZE\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZa8rhZE\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Za8rhZE',
    'container.build_id' => 'a5ac1357',
    'container.build_time' => 1596969126,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZa8rhZE');
