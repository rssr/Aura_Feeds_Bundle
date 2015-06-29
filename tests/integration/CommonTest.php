<?php
namespace Rssr\Aura_Feeds_Bundle\Config;

use Aura\Di\ContainerBuilder;

class CommonTest extends \PHPUnit_Framework_TestCase
{
    protected function getDi()
    {
        $builder = new ContainerBuilder();
        $di = $builder->newConfiguredInstance(
            [
                'Rssr\Aura_Feeds_Bundle\Config\Common',
            ]
        );

        return $di;
    }
    public function testFactoryConfig()
    {
        $di = $this->getDi();

        $this->assertInstanceOf('Rssr\Feed\Factory', $di->get('rssr/feeds:factory'));
    }

    public function testContainerFactoryConfig()
    {
        $di = $this->getDi();

        $this->assertInstanceOf('Rssr\Feed\Collection\Factory', $di->get('rssr/feeds:collection-factory'));
    }
}
