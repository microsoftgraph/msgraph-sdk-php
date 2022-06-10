<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementTroubleshootingEvent extends Entity implements Parsable 
{
    /**
     * @var string|null $correlationId Id used for tracing the failure in the service.
    */
    private ?string $correlationId = null;
    
    /**
     * @var DateTime|null $eventDateTime Time when the event occurred .
    */
    private ?DateTime $eventDateTime = null;
    
    /**
     * Instantiates a new deviceManagementTroubleshootingEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementTroubleshootingEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementTroubleshootingEvent {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.enrollmentTroubleshootingEvent': return new EnrollmentTroubleshootingEvent();
            }
        }
        return new DeviceManagementTroubleshootingEvent();
    }

    /**
     * Gets the correlationId property value. Id used for tracing the failure in the service.
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the eventDateTime property value. Time when the event occurred .
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        return $this->eventDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'correlationId' => function (ParseNode $n) use ($o) { $o->setCorrelationId($n->getStringValue()); },
            'eventDateTime' => function (ParseNode $n) use ($o) { $o->setEventDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('correlationId', $this->correlationId);
        $writer->writeDateTimeValue('eventDateTime', $this->eventDateTime);
    }

    /**
     * Sets the correlationId property value. Id used for tracing the failure in the service.
     *  @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value ): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the eventDateTime property value. Time when the event occurred .
     *  @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value ): void {
        $this->eventDateTime = $value;
    }

}
