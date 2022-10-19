<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class RecurrenceRange implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Date|null $endDate The date to stop applying the recurrence pattern. Depending on the recurrence pattern of the event, the last occurrence of the meeting may not be this date. Required if type is endDate.
    */
    private ?Date $endDate = null;
    
    /**
     * @var int|null $numberOfOccurrences The number of times to repeat the event. Required and must be positive if type is numbered.
    */
    private ?int $numberOfOccurrences = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $recurrenceTimeZone Time zone for the startDate and endDate properties. Optional. If not specified, the time zone of the event is used.
    */
    private ?string $recurrenceTimeZone = null;
    
    /**
     * @var Date|null $startDate The date to start applying the recurrence pattern. The first occurrence of the meeting may be this date or later, depending on the recurrence pattern of the event. Must be the same value as the start property of the recurring event. Required.
    */
    private ?Date $startDate = null;
    
    /**
     * @var RecurrenceRangeType|null $type The recurrence range. The possible values are: endDate, noEnd, numbered. Required.
    */
    private ?RecurrenceRangeType $type = null;
    
    /**
     * Instantiates a new recurrenceRange and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.recurrenceRange');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecurrenceRange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecurrenceRange {
        return new RecurrenceRange();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the endDate property value. The date to stop applying the recurrence pattern. Depending on the recurrence pattern of the event, the last occurrence of the meeting may not be this date. Required if type is endDate.
     * @return Date|null
    */
    public function getEndDate(): ?Date {
        return $this->endDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getDateValue()),
            'numberOfOccurrences' => fn(ParseNode $n) => $o->setNumberOfOccurrences($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recurrenceTimeZone' => fn(ParseNode $n) => $o->setRecurrenceTimeZone($n->getStringValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getDateValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(RecurrenceRangeType::class)),
        ];
    }

    /**
     * Gets the numberOfOccurrences property value. The number of times to repeat the event. Required and must be positive if type is numbered.
     * @return int|null
    */
    public function getNumberOfOccurrences(): ?int {
        return $this->numberOfOccurrences;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the recurrenceTimeZone property value. Time zone for the startDate and endDate properties. Optional. If not specified, the time zone of the event is used.
     * @return string|null
    */
    public function getRecurrenceTimeZone(): ?string {
        return $this->recurrenceTimeZone;
    }

    /**
     * Gets the startDate property value. The date to start applying the recurrence pattern. The first occurrence of the meeting may be this date or later, depending on the recurrence pattern of the event. Must be the same value as the start property of the recurring event. Required.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        return $this->startDate;
    }

    /**
     * Gets the type property value. The recurrence range. The possible values are: endDate, noEnd, numbered. Required.
     * @return RecurrenceRangeType|null
    */
    public function getType(): ?RecurrenceRangeType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateValue('endDate', $this->endDate);
        $writer->writeIntegerValue('numberOfOccurrences', $this->numberOfOccurrences);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('recurrenceTimeZone', $this->recurrenceTimeZone);
        $writer->writeDateValue('startDate', $this->startDate);
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
     * Sets the endDate property value. The date to stop applying the recurrence pattern. Depending on the recurrence pattern of the event, the last occurrence of the meeting may not be this date. Required if type is endDate.
     *  @param Date|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Date $value ): void {
        $this->endDate = $value;
    }

    /**
     * Sets the numberOfOccurrences property value. The number of times to repeat the event. Required and must be positive if type is numbered.
     *  @param int|null $value Value to set for the numberOfOccurrences property.
    */
    public function setNumberOfOccurrences(?int $value ): void {
        $this->numberOfOccurrences = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the recurrenceTimeZone property value. Time zone for the startDate and endDate properties. Optional. If not specified, the time zone of the event is used.
     *  @param string|null $value Value to set for the recurrenceTimeZone property.
    */
    public function setRecurrenceTimeZone(?string $value ): void {
        $this->recurrenceTimeZone = $value;
    }

    /**
     * Sets the startDate property value. The date to start applying the recurrence pattern. The first occurrence of the meeting may be this date or later, depending on the recurrence pattern of the event. Must be the same value as the start property of the recurring event. Required.
     *  @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value ): void {
        $this->startDate = $value;
    }

    /**
     * Sets the type property value. The recurrence range. The possible values are: endDate, noEnd, numbered. Required.
     *  @param RecurrenceRangeType|null $value Value to set for the type property.
    */
    public function setType(?RecurrenceRangeType $value ): void {
        $this->type = $value;
    }

}
