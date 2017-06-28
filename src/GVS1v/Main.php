<?php
namespace GVS1v;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

class Main extends PluginBase{

public function onEnable(){
 $this->getServer()->getLogger()->info("GVS1v has enabled");
$this->getLogger()->info("plugin by plugmcpe");
}
 public function onDisable(){
 $this->getServer()->getLogger()->info("plugin has been disable");
  }
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
 swith ($cmd->getName()){ 
  case 'youtube':
    $sender->setHealth(20);
    }
   }
  }
