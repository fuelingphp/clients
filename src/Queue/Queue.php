<?php 

namespace PHPCloudNative\Clients\Queue;


/**
 * Queue
 * @author MoonBabyLabs
 * @version 1.0
 * @license MIT
 * @package Queue
 * @see Queue
 */
class Queue
{

  /**
   * @var array
   */
  protected $config;
  protected $queue;
  
  public function __construct(Queueable $createQueue, array $config)
  {
    $this->config = $config;
    $this->queue = $createQueue;

    return $this->create($config);
  }

  public function create(array $config): Queueable
  {
    return $this->queue->create($config);
  }

  public function deleteMessage(array $config): Queueable
  {
    return $this->queue->deleteMessage($config);
  }

  public function deleteMessageBatch(array $config): Queueable
  {
    return $this->queue->deleteMessageBatch($config);
  }

  public function deleteQueue(array $config): Queueable
  {
    return $this->queue->deleteQueue($config);
  }

  public function getMessage(array $config): Queueable
  {
    return $this->queue->getMessage($config);
  }

  public function send(string $name, string $message): Queueable
  {
    return $this->queue->send($name, $message);
  }

  public function listQueues()
  {
    return $this->queue->list();
  }

  public function listMessages(array $config)
  {
    return $this->queue->listMessages($config);
  }

  public function purge(string $name)
  {
    return $this->queue->purge($name);
  }

  public function receive()
  {
    return $this->queue->receive();
  }

  /**
   * AddPermissionChangeMessageVisibilityChangeMessageVisibilityBatchCreateQueueDeleteMessageDeleteMessageBatchDeleteQueueGetQueueAttributesGetQueueUrlListDeadLetterSourceQueuesListQueueTagsListQueuesPurgeQueueReceiveMessageRemovePermissionSendMessageSendMessageBatchSetQueueAttributesTagQueueUntagQueue
   */
}