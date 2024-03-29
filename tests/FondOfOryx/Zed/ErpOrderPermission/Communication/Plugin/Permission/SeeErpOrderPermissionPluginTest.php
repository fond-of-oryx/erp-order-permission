<?php

namespace FondOfOryx\Zed\ErpOrderPermission\Communication\Plugin\Permission;

use Codeception\Test\Unit;

class SeeErpOrderPermissionPluginTest extends Unit
{
    /**
     * @var \Spryker\Shared\PermissionExtension\Dependency\Plugin\PermissionPluginInterface
     */
    protected $plugin;

    /**
     * @return void
     */
    protected function _before()
    {
        parent::_before();

        $this->plugin = new SeeErpOrdersPermissionPlugin();
    }

    /**
     * @return void
     */
    public function testGetKey(): void
    {
        static::assertSame(SeeErpOrdersPermissionPlugin::KEY, $this->plugin->getKey());
    }
}
