<?php

namespace Outpost;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Outpost extends PluginBase
{
    use SingletonTrait;

    public function onEnable(): void
    {
        self::setInstance($this);
        $this->saveDefaultConfig();

        $this->getScheduler()->scheduleRepeatingTask(new OutpostTask(), 20);
    }
}