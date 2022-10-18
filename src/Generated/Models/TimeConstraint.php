<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeConstraint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var ActivityDomain|null $activityDomain The nature of the activity, optional. The possible values are: work, personal, unrestricted, or unknown.
    */
    private ?ActivityDomain $activityDomain = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<TimeSlot>|null $timeSlots The timeSlots property
    */
    private ?array $timeSlots = null;
    
    /**
     * Instantiates a new timeConstraint and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.timeConstraint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeConstraint {
        return new TimeConstraint();
    }

    /**
     * Gets the activityDomain property value. The nature of the activity, optional. The possible values are: work, personal, unrestricted, or unknown.
     * @return ActivityDomain|null
    */
    public function getActivityDomain(): ?ActivityDomain {
        return $this->activityDomain;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activityDomain' => fn(ParseNode $n) => $o->setActivityDomain($n->getEnumValue(ActivityDomain::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'timeSlots' => fn(ParseNode $n) => $o->setTimeSlots($n->getCollectionOfObjectValues([TimeSlot::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the timeSlots property value. The timeSlots property
     * @return array<TimeSlot>|null
    */
    public function getTimeSlots(): ?array {
        return $this->timeSlots;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('activityDomain', $this->activityDomain);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('timeSlots', $this->timeSlots);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the activityDomain property value. The nature of the activity, optional. The possible values are: work, personal, unrestricted, or unknown.
     *  @param ActivityDomain|null $value Value to set for the activityDomain property.
    */
    public function setActivityDomain(?ActivityDomain $value ): void {
        $this->activityDomain = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the timeSlots property value. The timeSlots property
     *  @param array<TimeSlot>|null $value Value to set for the timeSlots property.
    */
    public function setTimeSlots(?array $value ): void {
        $this->timeSlots = $value;
    }

}
