<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TimeConstraint implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new timeConstraint and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
        $val = $this->getBackingStore()->get('activityDomain');
        if (is_null($val) || $val instanceof ActivityDomain) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityDomain'");
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the timeSlots property value. The timeSlots property
     * @return array<TimeSlot>|null
    */
    public function getTimeSlots(): ?array {
        $val = $this->getBackingStore()->get('timeSlots');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TimeSlot::class);
            /** @var array<TimeSlot>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeSlots'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('activityDomain', $this->getActivityDomain());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('timeSlots', $this->getTimeSlots());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activityDomain property value. The nature of the activity, optional. The possible values are: work, personal, unrestricted, or unknown.
     * @param ActivityDomain|null $value Value to set for the activityDomain property.
    */
    public function setActivityDomain(?ActivityDomain $value): void {
        $this->getBackingStore()->set('activityDomain', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the timeSlots property value. The timeSlots property
     * @param array<TimeSlot>|null $value Value to set for the timeSlots property.
    */
    public function setTimeSlots(?array $value): void {
        $this->getBackingStore()->set('timeSlots', $value);
    }

}
