<?php
namespace Aoepeople\ComposerInstallers;

class MagentoInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'   => 'code/magento/.modman/{$vendor}-{$name}/',
        'source'   => 'code/magento/'
    );
}
