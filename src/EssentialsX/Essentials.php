<?php

namespace EssentialsX;



use pocketmine\block\EndStone;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Essentials extends PluginBase{

    /**
     * @var EssentialsX $instance
     */

    private static $instance;
    public $data;

    public function onEnable(): void{

        self::$instance = $this;
        @mkdir($this->getDataFolder());
      //yaml provider todo


    }

    public static function getInstance(): Essentials{

        return self::$instance;
    }
}
