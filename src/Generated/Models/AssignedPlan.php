<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignedPlan implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $assignedDateTime The date and time at which the plan was assigned; for example: 2013-01-02T19:32:30Z. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $assignedDateTime = null;
    
    /**
     * @var string|null $capabilityStatus Condition of the capability assignment. The possible values are Enabled, Warning, Suspended, Deleted, LockedOut.
    */
    private ?string $capabilityStatus = null;
    
    /**
     * @var string|null $service The name of the service; for example, exchange.
    */
    private ?string $service = null;
    
    /**
     * @var string|null $servicePlanId A GUID that identifies the service plan. For a complete list of GUIDs and their equivalent friendly service names, see Product names and service plan identifiers for licensing.
    */
    private ?string $servicePlanId = null;
    
    /**
     * Instantiates a new assignedPlan and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignedPlan
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignedPlan {
        return new AssignedPlan();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignedDateTime property value. The date and time at which the plan was assigned; for example: 2013-01-02T19:32:30Z. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getAssignedDateTime(): ?DateTime {
        return $this->assignedDateTime;
    }

    /**
     * Gets the capabilityStatus property value. Condition of the capability assignment. The possible values are Enabled, Warning, Suspended, Deleted, LockedOut.
     * @return string|null
    */
    public function getCapabilityStatus(): ?string {
        return $this->capabilityStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedDateTime' => function (ParseNode $n) use ($o) { $o->setAssignedDateTime($n->getDateTimeValue()); },
            'capabilityStatus' => function (ParseNode $n) use ($o) { $o->setCapabilityStatus($n->getStringValue()); },
            'service' => function (ParseNode $n) use ($o) { $o->setService($n->getStringValue()); },
            'servicePlanId' => function (ParseNode $n) use ($o) { $o->setServicePlanId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the service property value. The name of the service; for example, exchange.
     * @return string|null
    */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Gets the servicePlanId property value. A GUID that identifies the service plan. For a complete list of GUIDs and their equivalent friendly service names, see Product names and service plan identifiers for licensing.
     * @return string|null
    */
    public function getServicePlanId(): ?string {
        return $this->servicePlanId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('assignedDateTime', $this->assignedDateTime);
        $writer->writeStringValue('capabilityStatus', $this->capabilityStatus);
        $writer->writeStringValue('service', $this->service);
        $writer->writeStringValue('servicePlanId', $this->servicePlanId);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the assignedDateTime property value. The date and time at which the plan was assigned; for example: 2013-01-02T19:32:30Z. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the assignedDateTime property.
    */
    public function setAssignedDateTime(?DateTime $value ): void {
        $this->assignedDateTime = $value;
    }

    /**
     * Sets the capabilityStatus property value. Condition of the capability assignment. The possible values are Enabled, Warning, Suspended, Deleted, LockedOut.
     *  @param string|null $value Value to set for the capabilityStatus property.
    */
    public function setCapabilityStatus(?string $value ): void {
        $this->capabilityStatus = $value;
    }

    /**
     * Sets the service property value. The name of the service; for example, exchange.
     *  @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value ): void {
        $this->service = $value;
    }

    /**
     * Sets the servicePlanId property value. A GUID that identifies the service plan. For a complete list of GUIDs and their equivalent friendly service names, see Product names and service plan identifiers for licensing.
     *  @param string|null $value Value to set for the servicePlanId property.
    */
    public function setServicePlanId(?string $value ): void {
        $this->servicePlanId = $value;
    }

}
