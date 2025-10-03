<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics device startup score history.
*/
class UserExperienceAnalyticsScoreHistory extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsScoreHistory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsScoreHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsScoreHistory {
        return new UserExperienceAnalyticsScoreHistory();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'startupDateTime' => fn(ParseNode $n) => $o->setStartupDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the startupDateTime property value. The device startup date time. The value cannot be modified and is automatically populated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default.
     * @return DateTime|null
    */
    public function getStartupDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startupDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startupDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('startupDateTime', $this->getStartupDateTime());
    }

    /**
     * Sets the startupDateTime property value. The device startup date time. The value cannot be modified and is automatically populated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default.
     * @param DateTime|null $value Value to set for the startupDateTime property.
    */
    public function setStartupDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startupDateTime', $value);
    }

}
