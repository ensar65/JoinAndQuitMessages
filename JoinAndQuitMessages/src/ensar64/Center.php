<?php


namespace ensar64;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
class Center extends PluginBase implements Listener {

 public function onLoad() {
    $this->getLogger()->info("Plugin loading");
 }   
 public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
    $this->getLogger()->info("Succesfuly plugin enabled");
 }


public function onJoin (PlayerJoinEvent $event) {
   $user = $event->getPLayer();
   $username = $user->getName();
   $this->getServer()->broadcastMessage(C::BLUE."$username  joined thats game, Thats nice");

}
public function onQuit (PlayerQuitEvent $event) {
   $user = $event->getPLayer();
   $username = $user->getName();
   $this->getServer()->broadcastMessage(C::RED."$username left the game, Thats bad");

}

}  