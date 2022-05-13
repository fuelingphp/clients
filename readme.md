# PHPCloudNative

## Description
An adapter system to use cloud-native architecture without vendor lock-in.


## How to use
This architecture follows the adapter pattern. You will need to include a library that follows the various service interfaces.
All interfaces exist within the associated service namespace.

1. Add base PHPCloudNative clients package
```composer require phpcloudnative/clients@^1.0.0 ```

2. Add cloud adapter package 
***(example: Aws)***
```composer require phpcloudnative/aws@^1.0.0 ```

3. Initialize & use in your application
```
require_once "vendor/autoload.php"

// Create a new queue
// Be careful with the config object. You will need it
// but you can & likely will put infrastructure specific configuration

$queue = new PHPCloudNative/Clients/Queue(
  PHPCloudNativeAWS::class,
  [
    "name" => "sample queue",
    "attributes" => [
      "DelaySeconds" => 5,
      "MaximumMessageSize" => 3050
    ]
  ]
);
$queue->send("sample message", "queueName", [
  'delay' => 10,
  'attributes' => [
    'title' => 'hitchhikers guide.'
  ]
]
]);


## Questions
**What's the point?**
Many applications are going cloud native to take advantage of their various infrastructure services instead of running everything on a server instance that you manage. You get several benefits when you go cloud native such as giving infrastructure related concerns to your infrastructure platform, reducing costs & ease of scale. On the flipside, the infrastructure provider gives you their SDK and you become "locked-in" to this vendor which is a bad smell. You don't want your application to be stuck if something happens to your infrastructure without doing a major overhaul.

The goal of this system is to help prevent that lock-in, give you the benefits of going cloud-native without risking your app to be held hostage buy an infrastructure platform.