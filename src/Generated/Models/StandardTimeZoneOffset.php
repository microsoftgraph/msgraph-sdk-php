<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Time;

class StandardTimeZoneOffset implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new standardTimeZoneOffset and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StandardTimeZoneOffset
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StandardTimeZoneOffset {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.daylightTimeZoneOffset': return new DaylightTimeZoneOffset();
            }
        }
        return new StandardTimeZoneOffset();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the dayOccurrence property value. Represents the nth occurrence of the day of week that the transition from daylight saving time to standard time occurs.
     * @return int|null
    */
    public function getDayOccurrence(): ?int {
        return $this->getBackingStore()->get('dayOccurrence');
    }

    /**
     * Gets the dayOfWeek property value. Represents the day of the week when the transition from daylight saving time to standard time.
     * @return DayOfWeek|null
    */
    public function getDayOfWeek(): ?DayOfWeek {
        return $this->getBackingStore()->get('dayOfWeek');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dayOccurrence' => fn(ParseNode $n) => $o->setDayOccurrence($n->getIntegerValue()),
            'dayOfWeek' => fn(ParseNode $n) => $o->setDayOfWeek($n->getEnumValue(DayOfWeek::class)),
            'month' => fn(ParseNode $n) => $o->setMonth($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'time' => fn(ParseNode $n) => $o->setTime($n->getTimeValue()),
            'year' => fn(ParseNode $n) => $o->setYear($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the month property value. Represents the month of the year when the transition from daylight saving time to standard time occurs.
     * @return int|null
    */
    public function getMonth(): ?int {
        return $this->getBackingStore()->get('month');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the time property value. Represents the time of day when the transition from daylight saving time to standard time occurs.
     * @return Time|null
    */
    public function getTime(): ?Time {
        return $this->getBackingStore()->get('time');
    }

    /**
     * Gets the year property value. Represents how frequently in terms of years the change from daylight saving time to standard time occurs. For example, a value of 0 means every year.
     * @return int|null
    */
    public function getYear(): ?int {
        return $this->getBackingStore()->get('year');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('dayOccurrence', $this->getDayOccurrence());
        $writer->writeEnumValue('dayOfWeek', $this->getDayOfWeek());
        $writer->writeIntegerValue('month', $this->getMonth());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeTimeValue('time', $this->getTime());
        $writer->writeIntegerValue('year', $this->getYear());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the dayOccurrence property value. Represents the nth occurrence of the day of week that the transition from daylight saving time to standard time occurs.
     * @param int|null $value Value to set for the dayOccurrence property.
    */
    public function setDayOccurrence(?int $value): void {
        $this->getBackingStore()->set('dayOccurrence', $value);
    }

    /**
     * Sets the dayOfWeek property value. Represents the day of the week when the transition from daylight saving time to standard time.
     * @param DayOfWeek|null $value Value to set for the dayOfWeek property.
    */
    public function setDayOfWeek(?DayOfWeek $value): void {
        $this->getBackingStore()->set('dayOfWeek', $value);
    }

    /**
     * Sets the month property value. Represents the month of the year when the transition from daylight saving time to standard time occurs.
     * @param int|null $value Value to set for the month property.
    */
    public function setMonth(?int $value): void {
        $this->getBackingStore()->set('month', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the time property value. Represents the time of day when the transition from daylight saving time to standard time occurs.
     * @param Time|null $value Value to set for the time property.
    */
    public function setTime(?Time $value): void {
        $this->getBackingStore()->set('time', $value);
    }

    /**
     * Sets the year property value. Represents how frequently in terms of years the change from daylight saving time to standard time occurs. For example, a value of 0 means every year.
     * @param int|null $value Value to set for the year property.
    */
    public function setYear(?int $value): void {
        $this->getBackingStore()->set('year', $value);
    }

}
