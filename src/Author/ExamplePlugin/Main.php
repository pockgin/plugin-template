<?php

declare(strict_types=1);

namespace Author\ExamplePlugin;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    protected function onEnable(): void {
        $this->getLogger()->info("ExamplePlugin enabled!");
    }

    protected function onDisable(): void {
        $this->getLogger()->info("ExamplePlugin disabled.");
    }
}
