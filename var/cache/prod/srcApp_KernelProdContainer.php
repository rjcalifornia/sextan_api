<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHFEEkGk\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHFEEkGk/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerHFEEkGk.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerHFEEkGk\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerHFEEkGk\srcApp_KernelProdContainer([
    'container.build_hash' => 'HFEEkGk',
    'container.build_id' => 'b5cb1f06',
    'container.build_time' => 1580848195,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHFEEkGk');