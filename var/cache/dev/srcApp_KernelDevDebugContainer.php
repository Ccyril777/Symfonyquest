<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOoLSQXj\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOoLSQXj/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOoLSQXj.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOoLSQXj\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerOoLSQXj\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'OoLSQXj',
    'container.build_id' => '67ccae6b',
    'container.build_time' => 1575989944,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOoLSQXj');
