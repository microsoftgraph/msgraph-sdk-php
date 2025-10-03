<?php

namespace Microsoft\\Graph\\Generated\Groups\Item\Calendar\GetSchedule;

use Microsoft\\Graph\\Generated\Models\DateTimeTimeZone;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class GetSchedulePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new GetSchedulePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetSchedulePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetSchedulePostRequestBody {
        return new GetSchedulePostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the AvailabilityViewInterval property value. The AvailabilityViewInterval property
     * @return int|null
    */
    public function getAvailabilityViewInterval(): ?int {
        $val = $this->getBackingStore()->get('availabilityViewInterval');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'availabilityViewInterval'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the EndTime property value. The EndTime property
     * @return DateTimeTimeZone|null
    */
    public function getEndTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('endTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'AvailabilityViewInterval' => fn(ParseNode $n) => $o->setAvailabilityViewInterval($n->getIntegerValue()),
            'EndTime' => fn(ParseNode $n) => $o->setEndTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'Schedules' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSchedules($val);
            },
            'StartTime' => fn(ParseNode $n) => $o->setStartTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the Schedules property value. The Schedules property
     * @return array<string>|null
    */
    public function getSchedules(): ?array {
        $val = $this->getBackingStore()->get('schedules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedules'");
    }

    /**
     * Gets the StartTime property value. The StartTime property
     * @return DateTimeTimeZone|null
    */
    public function getStartTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('startTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('AvailabilityViewInterval', $this->getAvailabilityViewInterval());
        $writer->writeObjectValue('EndTime', $this->getEndTime());
        $writer->writeCollectionOfPrimitiveValues('Schedules', $this->getSchedules());
        $writer->writeObjectValue('StartTime', $this->getStartTime());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the AvailabilityViewInterval property value. The AvailabilityViewInterval property
     * @param int|null $value Value to set for the AvailabilityViewInterval property.
    */
    public function setAvailabilityViewInterval(?int $value): void {
        $this->getBackingStore()->set('availabilityViewInterval', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the EndTime property value. The EndTime property
     * @param DateTimeTimeZone|null $value Value to set for the EndTime property.
    */
    public function setEndTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('endTime', $value);
    }

    /**
     * Sets the Schedules property value. The Schedules property
     * @param array<string>|null $value Value to set for the Schedules property.
    */
    public function setSchedules(?array $value): void {
        $this->getBackingStore()->set('schedules', $value);
    }

    /**
     * Sets the StartTime property value. The StartTime property
     * @param DateTimeTimeZone|null $value Value to set for the StartTime property.
    */
    public function setStartTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('startTime', $value);
    }

}
