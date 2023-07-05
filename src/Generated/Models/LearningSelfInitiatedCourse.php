<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LearningSelfInitiatedCourse extends LearningCourseActivity implements Parsable 
{
    /**
     * Instantiates a new LearningSelfInitiatedCourse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LearningSelfInitiatedCourse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LearningSelfInitiatedCourse {
        return new LearningSelfInitiatedCourse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'startedDateTime' => fn(ParseNode $n) => $o->setStartedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the startedDateTime property value. The date time value on which the self-initiated course was started by the learner. Optional.
     * @return DateTime|null
    */
    public function getStartedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('startedDateTime', $this->getStartedDateTime());
    }

    /**
     * Sets the startedDateTime property value. The date time value on which the self-initiated course was started by the learner. Optional.
     * @param DateTime|null $value Value to set for the startedDateTime property.
    */
    public function setStartedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startedDateTime', $value);
    }

}
