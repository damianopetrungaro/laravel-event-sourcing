<?php

namespace Spatie\EventSourcing\Tests\TestClasses\Projectors;

use Spatie\EventSourcing\Projectors\Projector;
use Spatie\EventSourcing\Projectors\ProjectsEvents;
use Spatie\EventSourcing\Tests\TestClasses\Events\MoneyAddedEvent;

final class InvalidProjectorThatDoesNotHaveTheRightEventHandlingMethod implements Projector
{
    use ProjectsEvents;

    protected $handlesEvents = [
        MoneyAddedEvent::class => 'hahaThisMethodDoesNotExist',
    ];
}
