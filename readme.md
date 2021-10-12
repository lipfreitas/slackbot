```php <?php
include('vendor/autoload.php');
include('src/slackbot.php');
$token = 'token';

$slackbot = new lipfreitas\slackbot($token);

$slackbot->sendMessage('example message');
```
