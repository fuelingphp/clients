<?php 

namespace PHPCloudNative\Clients\Queue;

interface Queueable 
{
  public function create(string $name);
  public function delete(string $name);
  public function get(string $name);
  public function send(string $name, string $message);
  public function put(string $name, string $message);
  public function getAllMessages(string $name);
  public function deleteAllMessages(string $name);
}