<?php
namespace Wuethrich44\SSO\Listener;
use Flarum\Event\UserEmailChangeWasRequested;
use Illuminate\Contracts\Events\Dispatcher;
class DisableChangeAccount
{
    public function __construct()
    {
        
    }
    public function subscribe(Dispatcher $events)
    {
        $events->listen(UserEmailChangeWasRequested::class, [$this, 'disablePasswordChange']);
    }
    public function disablePasswordChange()
    {
        die('Not allowed');
    }
}
