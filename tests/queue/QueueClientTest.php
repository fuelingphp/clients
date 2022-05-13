<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPCloudNative\Clients\Queue\Queue;


final class QueueClientTest extends TestCase
{
   public function testCanCreateNewAWSQueue()
   {
      $q = new Queue();;
      $this->assertInstanceof(Queue, $q);
   }

}