<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXRE6oOT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXRE6oOT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXRE6oOT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXRE6oOT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXRE6oOT\App_KernelDevDebugContainer([
    'container.build_hash' => 'XRE6oOT',
    'container.build_id' => '37d7e39a',
    'container.build_time' => 1619522885,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXRE6oOT');
