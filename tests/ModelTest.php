<?php

namespace Microsoft\Graph\Test;

use Microsoft\Graph\Model\Entity;
use Microsoft\Graph\Model\Status;
use PHPUnit\Framework\TestCase;

class ModelTest extends TestCase
{
    function testSerialization() {
        $propDict = [
            "id" => 1,
            "name" => "User",
            "status" => Status::ACTIVE,
            "schedule" => new \Microsoft\Graph\Model\Schedule([
                "enabled" => true,
                "timeOffRequests" => [
                    new \Microsoft\Graph\Model\TimeOffRequest(["name" => "user"]),
                    new \Microsoft\Graph\Model\TimeOffRequest(["name" => "user"])
                ]
            ]),
            "hireDate" => new \DateTime("2021-11-12 00:00:00"),
            "ageGroup" => null
        ];
        $entity = new Entity($propDict);
        $expected = <<<'EOT'
        {
            "id": 1,
            "name": "User",
            "status": "active",
            "schedule": {
                "enabled": true,
                "timeOffRequests": [
                    {
                        "name": "user"
                    },
                    {
                        "name": "user"
                    }
                ]
            },
            "hireDate": "2021-11-12T00:00:00+00:00",
            "ageGroup": null
        }
        EOT;
        $expected = preg_replace('/\s+/', "", $expected);
        $this->assertEquals($expected, json_encode($entity));
    }
}
