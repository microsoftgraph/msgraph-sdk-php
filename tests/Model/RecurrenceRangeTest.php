<?php

use Microsoft\Graph\Model\RecurrenceRange;
use PHPUnit\Framework\TestCase;

class RecurrenceRangeTest extends TestCase
{

    public function testGetStartDate()
    {
        $recurrenceRange = new RecurrenceRange(['startDate'=>'2017-01-01']);

        $this->assertInstanceOf(\DateTime::class,$recurrenceRange->getStartDate());
        // Test that is still a DateTime-object after requesting it twice
        $this->assertInstanceOf(\DateTime::class,$recurrenceRange->getStartDate());
    }
}
