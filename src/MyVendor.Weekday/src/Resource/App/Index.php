<?php
namespace MyVendor\Weekday\Resource\App;

use BEAR\Resource\ResourceObject;

class Index extends ResourceObject
{
    public function onGet(string $name = 'BEAR.Sunday') : ResourceObject
    {
        $this->body = [
            'greeting' => 'Hello ' . $name
        ];

        return $this;
    }
}
