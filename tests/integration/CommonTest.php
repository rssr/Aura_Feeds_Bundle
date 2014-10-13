<?php
namespace Rssr\Aura_Feeds_Bundle\_Config;

use Aura\Di\ContainerBuilder;

class CommonTest extends \PHPUnit_Framework_TestCase
{
    protected function getDi()
    {
        $builder = new ContainerBuilder();
        $di = $builder->newInstance(
            [],
            [
                'Rssr\Aura_Feeds_Bundle\_Config\Common',
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
