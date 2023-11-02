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

class RecurrencePattern implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new recurrencePattern and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecurrencePattern
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecurrencePattern {
        return new RecurrencePattern();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the dayOfMonth property value. The day of the month on which the event occurs. Required if type is absoluteMonthly or absoluteYearly.
     * @return int|null
    */
    public function getDayOfMonth(): ?int {
        $val = $this->getBackingStore()->get('dayOfMonth');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dayOfMonth'");
    }

    /**
     * Gets the daysOfWeek property value. A collection of the days of the week on which the event occurs. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. If type is relativeMonthly or relativeYearly, and daysOfWeek specifies more than one day, the event falls on the first day that satisfies the pattern.  Required if type is weekly, relativeMonthly, or relativeYearly.
     * @return array<DayOfWeek>|null
    */
    public function getDaysOfWeek(): ?array {
        $val = $this->getBackingStore()->get('daysOfWeek');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DayOfWeek::class);
            /** @var array<DayOfWeek>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'daysOfWeek'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dayOfMonth' => fn(ParseNode $n) => $o->setDayOfMonth($n->getIntegerValue()),
            'daysOfWeek' => fn(ParseNode $n) => $o->setDaysOfWeek($n->getCollectionOfEnumValues(DayOfWeek::class)),
            'firstDayOfWeek' => fn(ParseNode $n) => $o->setFirstDayOfWeek($n->getEnumValue(DayOfWeek::class)),
            'index' => fn(ParseNode $n) => $o->setIndex($n->getEnumValue(WeekIndex::class)),
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getIntegerValue()),
            'month' => fn(ParseNode $n) => $o->setMonth($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(RecurrencePatternType::class)),
        ];
    }

    /**
     * Gets the firstDayOfWeek property value. The first day of the week. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. Default is sunday. Required if type is weekly.
     * @return DayOfWeek|null
    */
    public function getFirstDayOfWeek(): ?DayOfWeek {
        $val = $this->getBackingStore()->get('firstDayOfWeek');
        if (is_null($val) || $val instanceof DayOfWeek) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstDayOfWeek'");
    }

    /**
     * Gets the index property value. Specifies on which instance of the allowed days specified in daysOfWeek the event occurs, counted from the first instance in the month. The possible values are: first, second, third, fourth, last. Default is first. Optional and used if type is relativeMonthly or relativeYearly.
     * @return WeekIndex|null
    */
    public function getIndex(): ?WeekIndex {
        $val = $this->getBackingStore()->get('index');
        if (is_null($val) || $val instanceof WeekIndex) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'index'");
    }

    /**
     * Gets the interval property value. The number of units between occurrences, where units can be in days, weeks, months, or years, depending on the type. Required.
     * @return int|null
    */
    public function getInterval(): ?int {
        $val = $this->getBackingStore()->get('interval');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'interval'");
    }

    /**
     * Gets the month property value. The month in which the event occurs.  This is a number from 1 to 12.
     * @return int|null
    */
    public function getMonth(): ?int {
        $val = $this->getBackingStore()->get('month');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'month'");
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
     * Gets the type property value. The recurrence pattern type: daily, weekly, absoluteMonthly, relativeMonthly, absoluteYearly, relativeYearly. Required. For more information, see values of type property.
     * @return RecurrencePatternType|null
    */
    public function getType(): ?RecurrencePatternType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof RecurrencePatternType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('dayOfMonth', $this->getDayOfMonth());
        $writer->writeCollectionOfEnumValues('daysOfWeek', $this->getDaysOfWeek());
        $writer->writeEnumValue('firstDayOfWeek', $this->getFirstDayOfWeek());
        $writer->writeEnumValue('index', $this->getIndex());
        $writer->writeIntegerValue('interval', $this->getInterval());
        $writer->writeIntegerValue('month', $this->getMonth());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the dayOfMonth property value. The day of the month on which the event occurs. Required if type is absoluteMonthly or absoluteYearly.
     * @param int|null $value Value to set for the dayOfMonth property.
    */
    public function setDayOfMonth(?int $value): void {
        $this->getBackingStore()->set('dayOfMonth', $value);
    }

    /**
     * Sets the daysOfWeek property value. A collection of the days of the week on which the event occurs. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. If type is relativeMonthly or relativeYearly, and daysOfWeek specifies more than one day, the event falls on the first day that satisfies the pattern.  Required if type is weekly, relativeMonthly, or relativeYearly.
     * @param array<DayOfWeek>|null $value Value to set for the daysOfWeek property.
    */
    public function setDaysOfWeek(?array $value): void {
        $this->getBackingStore()->set('daysOfWeek', $value);
    }

    /**
     * Sets the firstDayOfWeek property value. The first day of the week. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. Default is sunday. Required if type is weekly.
     * @param DayOfWeek|null $value Value to set for the firstDayOfWeek property.
    */
    public function setFirstDayOfWeek(?DayOfWeek $value): void {
        $this->getBackingStore()->set('firstDayOfWeek', $value);
    }

    /**
     * Sets the index property value. Specifies on which instance of the allowed days specified in daysOfWeek the event occurs, counted from the first instance in the month. The possible values are: first, second, third, fourth, last. Default is first. Optional and used if type is relativeMonthly or relativeYearly.
     * @param WeekIndex|null $value Value to set for the index property.
    */
    public function setIndex(?WeekIndex $value): void {
        $this->getBackingStore()->set('index', $value);
    }

    /**
     * Sets the interval property value. The number of units between occurrences, where units can be in days, weeks, months, or years, depending on the type. Required.
     * @param int|null $value Value to set for the interval property.
    */
    public function setInterval(?int $value): void {
        $this->getBackingStore()->set('interval', $value);
    }

    /**
     * Sets the month property value. The month in which the event occurs.  This is a number from 1 to 12.
     * @param int|null $value Value to set for the month property.
    */
    public function setMonth(?int $value): void {
        $this->getBackingStore()->set('month', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the type property value. The recurrence pattern type: daily, weekly, absoluteMonthly, relativeMonthly, absoluteYearly, relativeYearly. Required. For more information, see values of type property.
     * @param RecurrencePatternType|null $value Value to set for the type property.
    */
    public function setType(?RecurrencePatternType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
