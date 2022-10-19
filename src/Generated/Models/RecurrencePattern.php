<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecurrencePattern implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $dayOfMonth The day of the month on which the event occurs. Required if type is absoluteMonthly or absoluteYearly.
    */
    private ?int $dayOfMonth = null;
    
    /**
     * @var array<DayOfWeek>|null $daysOfWeek A collection of the days of the week on which the event occurs. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. If type is relativeMonthly or relativeYearly, and daysOfWeek specifies more than one day, the event falls on the first day that satisfies the pattern.  Required if type is weekly, relativeMonthly, or relativeYearly.
    */
    private ?array $daysOfWeek = null;
    
    /**
     * @var DayOfWeek|null $firstDayOfWeek The first day of the week. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. Default is sunday. Required if type is weekly.
    */
    private ?DayOfWeek $firstDayOfWeek = null;
    
    /**
     * @var WeekIndex|null $index Specifies on which instance of the allowed days specified in daysOfWeek the event occurs, counted from the first instance in the month. The possible values are: first, second, third, fourth, last. Default is first. Optional and used if type is relativeMonthly or relativeYearly.
    */
    private ?WeekIndex $index = null;
    
    /**
     * @var int|null $interval The number of units between occurrences, where units can be in days, weeks, months, or years, depending on the type. Required.
    */
    private ?int $interval = null;
    
    /**
     * @var int|null $month The month in which the event occurs.  This is a number from 1 to 12.
    */
    private ?int $month = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var RecurrencePatternType|null $type The recurrence pattern type: daily, weekly, absoluteMonthly, relativeMonthly, absoluteYearly, relativeYearly. Required. For more information, see values of type property.
    */
    private ?RecurrencePatternType $type = null;
    
    /**
     * Instantiates a new recurrencePattern and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.recurrencePattern');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dayOfMonth property value. The day of the month on which the event occurs. Required if type is absoluteMonthly or absoluteYearly.
     * @return int|null
    */
    public function getDayOfMonth(): ?int {
        return $this->dayOfMonth;
    }

    /**
     * Gets the daysOfWeek property value. A collection of the days of the week on which the event occurs. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. If type is relativeMonthly or relativeYearly, and daysOfWeek specifies more than one day, the event falls on the first day that satisfies the pattern.  Required if type is weekly, relativeMonthly, or relativeYearly.
     * @return array<DayOfWeek>|null
    */
    public function getDaysOfWeek(): ?array {
        return $this->daysOfWeek;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->firstDayOfWeek;
    }

    /**
     * Gets the index property value. Specifies on which instance of the allowed days specified in daysOfWeek the event occurs, counted from the first instance in the month. The possible values are: first, second, third, fourth, last. Default is first. Optional and used if type is relativeMonthly or relativeYearly.
     * @return WeekIndex|null
    */
    public function getIndex(): ?WeekIndex {
        return $this->index;
    }

    /**
     * Gets the interval property value. The number of units between occurrences, where units can be in days, weeks, months, or years, depending on the type. Required.
     * @return int|null
    */
    public function getInterval(): ?int {
        return $this->interval;
    }

    /**
     * Gets the month property value. The month in which the event occurs.  This is a number from 1 to 12.
     * @return int|null
    */
    public function getMonth(): ?int {
        return $this->month;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the type property value. The recurrence pattern type: daily, weekly, absoluteMonthly, relativeMonthly, absoluteYearly, relativeYearly. Required. For more information, see values of type property.
     * @return RecurrencePatternType|null
    */
    public function getType(): ?RecurrencePatternType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('dayOfMonth', $this->dayOfMonth);
        $writer->writeCollectionOfEnumValues('daysOfWeek', $this->daysOfWeek);
        $writer->writeEnumValue('firstDayOfWeek', $this->firstDayOfWeek);
        $writer->writeEnumValue('index', $this->index);
        $writer->writeIntegerValue('interval', $this->interval);
        $writer->writeIntegerValue('month', $this->month);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('type', $this->type);
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
     * Sets the dayOfMonth property value. The day of the month on which the event occurs. Required if type is absoluteMonthly or absoluteYearly.
     *  @param int|null $value Value to set for the dayOfMonth property.
    */
    public function setDayOfMonth(?int $value ): void {
        $this->dayOfMonth = $value;
    }

    /**
     * Sets the daysOfWeek property value. A collection of the days of the week on which the event occurs. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. If type is relativeMonthly or relativeYearly, and daysOfWeek specifies more than one day, the event falls on the first day that satisfies the pattern.  Required if type is weekly, relativeMonthly, or relativeYearly.
     *  @param array<DayOfWeek>|null $value Value to set for the daysOfWeek property.
    */
    public function setDaysOfWeek(?array $value ): void {
        $this->daysOfWeek = $value;
    }

    /**
     * Sets the firstDayOfWeek property value. The first day of the week. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. Default is sunday. Required if type is weekly.
     *  @param DayOfWeek|null $value Value to set for the firstDayOfWeek property.
    */
    public function setFirstDayOfWeek(?DayOfWeek $value ): void {
        $this->firstDayOfWeek = $value;
    }

    /**
     * Sets the index property value. Specifies on which instance of the allowed days specified in daysOfWeek the event occurs, counted from the first instance in the month. The possible values are: first, second, third, fourth, last. Default is first. Optional and used if type is relativeMonthly or relativeYearly.
     *  @param WeekIndex|null $value Value to set for the index property.
    */
    public function setIndex(?WeekIndex $value ): void {
        $this->index = $value;
    }

    /**
     * Sets the interval property value. The number of units between occurrences, where units can be in days, weeks, months, or years, depending on the type. Required.
     *  @param int|null $value Value to set for the interval property.
    */
    public function setInterval(?int $value ): void {
        $this->interval = $value;
    }

    /**
     * Sets the month property value. The month in which the event occurs.  This is a number from 1 to 12.
     *  @param int|null $value Value to set for the month property.
    */
    public function setMonth(?int $value ): void {
        $this->month = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the type property value. The recurrence pattern type: daily, weekly, absoluteMonthly, relativeMonthly, absoluteYearly, relativeYearly. Required. For more information, see values of type property.
     *  @param RecurrencePatternType|null $value Value to set for the type property.
    */
    public function setType(?RecurrencePatternType $value ): void {
        $this->type = $value;
    }

}
