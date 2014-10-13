<?php
namespace Rssr\Aura_Feeds_Bundle\_Config;

use Aura\Di\Container;
use Aura\Di\Config;

class Common extends Config
{
    public function define(Container $di)
    {
        $di->set('rssr/feeds:factory', $di->lazyNew('Rssr\Feed\Factory'));
        $di->set('rssr/feeds:collection-factory', $di->lazyNew('Rssr\Feed\Collection\Factory'));
    }

    public function modify(Container $di)
    {
        /**
         * @var \Rssr\Feed\Factory
         */
        $factory = $di->get('rssr/feeds:factory');
        $factory->addHandler('Rssr\Feed\Propel');
        $factory->addHandler('Rssr\Feed\Atom');
        $factory->addHandler('Rssr\Feed\Rss');

        /**
         * @var \Rssr\Feed\Collection\Factory
         */
        $collectionFactory = $di->get('rssr/feeds:collection-factory');
        $collectionFactory->setHandler('Rssr\Feed\Collection');
    }
}
