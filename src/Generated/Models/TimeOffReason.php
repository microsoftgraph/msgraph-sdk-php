<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeOffReason extends ChangeTrackedEntity implements Parsable 
{
    /**
     * @var string|null $displayName The name of the timeOffReason. Required.
    */
    private ?string $displayName = null;
    
    /**
     * @var TimeOffReasonIconType|null $iconType Supported icon types are: none, car, calendar, running, plane, firstAid, doctor, notWorking, clock, juryDuty, globe, cup, phone, weather, umbrella, piggyBank, dog, cake, trafficCone, pin, sunny. Required.
    */
    private ?TimeOffReasonIconType $iconType = null;
    
    /**
     * @var bool|null $isActive Indicates whether the timeOffReason can be used when creating new entities or updating existing ones. Required.
    */
    private ?bool $isActive = null;
    
    /**
     * Instantiates a new TimeOffReason and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.timeOffReason');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeOffReason
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeOffReason {
        return new TimeOffReason();
    }

    /**
     * Gets the displayName property value. The name of the timeOffReason. Required.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'iconType' => fn(ParseNode $n) => $o->setIconType($n->getEnumValue(TimeOffReasonIconType::class)),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the iconType property value. Supported icon types are: none, car, calendar, running, plane, firstAid, doctor, notWorking, clock, juryDuty, globe, cup, phone, weather, umbrella, piggyBank, dog, cake, trafficCone, pin, sunny. Required.
     * @return TimeOffReasonIconType|null
    */
    public function getIconType(): ?TimeOffReasonIconType {
        return $this->iconType;
    }

    /**
     * Gets the isActive property value. Indicates whether the timeOffReason can be used when creating new entities or updating existing ones. Required.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('iconType', $this->iconType);
        $writer->writeBooleanValue('isActive', $this->isActive);
    }

    /**
     * Sets the displayName property value. The name of the timeOffReason. Required.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the iconType property value. Supported icon types are: none, car, calendar, running, plane, firstAid, doctor, notWorking, clock, juryDuty, globe, cup, phone, weather, umbrella, piggyBank, dog, cake, trafficCone, pin, sunny. Required.
     *  @param TimeOffReasonIconType|null $value Value to set for the iconType property.
    */
    public function setIconType(?TimeOffReasonIconType $value ): void {
        $this->iconType = $value;
    }

    /**
     * Sets the isActive property value. Indicates whether the timeOffReason can be used when creating new entities or updating existing ones. Required.
     *  @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value ): void {
        $this->isActive = $value;
    }

}
