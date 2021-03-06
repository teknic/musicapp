<?php

namespace spec\League\Flysystem;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use League\Flysystem\AdapterInterface;

class EventableFilesystemSpec extends ObjectBehavior
{
    public function let(AdapterInterface $adapter)
    {
        $this->beConstructedWith($adapter);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('League\Flysystem\EventableFilesystem');
        $this->shouldHaveType('League\Flysystem\FilesystemInterface');
    }
}
