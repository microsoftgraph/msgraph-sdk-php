<?php

namespace Microsoft\Graph\Generated\Models\ExternalConnectors;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalActivity extends Entity implements Parsable 
{
    /**
     * Instantiates a new ExternalActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalActivity {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.externalConnectors.externalActivityResult': return new ExternalActivityResult();
            }
        }
        return new ExternalActivity();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'performedBy' => fn(ParseNode $n) => $o->setPerformedBy($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(ExternalActivityType::class)),
        ]);
    }

    /**
     * Gets the performedBy property value. Represents an identity used to identify who is responsible for the activity.
     * @return Identity|null
    */
    public function getPerformedBy(): ?Identity {
        $val = $this->getBackingStore()->get('performedBy');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'performedBy'");
    }

    /**
     * Gets the startDateTime property value. The date and time when the particular activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the type property value. The type property
     * @return ExternalActivityType|null
    */
    public function getType(): ?ExternalActivityType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof ExternalActivityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('performedBy', $this->getPerformedBy());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('type', $this->getType());
    }

    /**
     * Sets the performedBy property value. Represents an identity used to identify who is responsible for the activity.
     * @param Identity|null $value Value to set for the performedBy property.
    */
    public function setPerformedBy(?Identity $value): void {
        $this->getBackingStore()->set('performedBy', $value);
    }

    /**
     * Sets the startDateTime property value. The date and time when the particular activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param ExternalActivityType|null $value Value to set for the type property.
    */
    public function setType(?ExternalActivityType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
