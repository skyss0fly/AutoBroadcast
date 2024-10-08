<?php 
namespace skyss0fly\AutoBroadcast; 
use pocketmine\plugin\PluginBase; 

class Main extends PluginBase {
  private $config; 
  public function onLoad(): void { 
    $this->config = $this->getConfig(); 
  } 
  
  public function broadcast(string $str): bool {
    $this->getServer()->broadcastMessage($str); 
    return true;
  } 
  
  public function onEnable(): void { 
    $i = 1; 
    while ($i <= 10) { 	
      $message = rand($config->get("Messages")); 
      broadcast($message); 
      sleep($config->get("Delay"));
    } 
  } 
}
