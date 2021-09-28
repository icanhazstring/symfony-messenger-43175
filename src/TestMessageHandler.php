<?php

declare(strict_types=1);

namespace App;

use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

#[AutoconfigureTag(name: 'messenger.message_handler', attributes: ['from_transport' => 'test'])]
final class TestMessageHandler implements MessageHandlerInterface
{
    public function __invoke(TestEvent $event): void
    {
    }
}
