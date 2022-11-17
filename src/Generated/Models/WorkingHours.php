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

class WorkingHours implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new workingHours and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.workingHours');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkingHours
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkingHours {
        return new WorkingHours();
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
     * Gets the daysOfWeek property value. The days of the week on which the user works.
     * @return array<DayOfWeek>|null
    */
    public function getDaysOfWeek(): ?array {
        return $this->getBackingStore()->get('daysOfWeek');
    }

    /**
     * Gets the endTime property value. The time of the day that the user stops working.
     * @return Time|null
    */
    public function getEndTime(): ?Time {
        return $this->getBackingStore()->get('endTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'daysOfWeek' => fn(ParseNode $n) => $o->setDaysOfWeek($n->getCollectionOfEnumValues(DayOfWeek::class)),
            'endTime' => fn(ParseNode $n) => $o->setEndTime($n->getTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'startTime' => fn(ParseNode $n) => $o->setStartTime($n->getTimeValue()),
            'timeZone' => fn(ParseNode $n) => $o->setTimeZone($n->getObjectValue([TimeZoneBase::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the startTime property value. The time of the day that the user starts working.
     * @return Time|null
    */
    public function getStartTime(): ?Time {
        return $this->getBackingStore()->get('startTime');
    }

    /**
     * Gets the timeZone property value. The time zone to which the working hours apply.
     * @return TimeZoneBase|null
    */
    public function getTimeZone(): ?TimeZoneBase {
        return $this->getBackingStore()->get('timeZone');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfEnumValues('daysOfWeek', $this->getDaysOfWeek());
        $writer->writeTimeValue('endTime', $this->getEndTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeTimeValue('startTime', $this->getStartTime());
        $writer->writeObjectValue('timeZone', $this->getTimeZone());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the daysOfWeek property value. The days of the week on which the user works.
     *  @param array<DayOfWeek>|null $value Value to set for the daysOfWeek property.
    */
    public function setDaysOfWeek(?array $value): void {
        $this->getBackingStore()->set('daysOfWeek', $value);
    }

    /**
     * Sets the endTime property value. The time of the day that the user stops working.
     *  @param Time|null $value Value to set for the endTime property.
    */
    public function setEndTime(?Time $value): void {
        $this->getBackingStore()->set('endTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the startTime property value. The time of the day that the user starts working.
     *  @param Time|null $value Value to set for the startTime property.
    */
    public function setStartTime(?Time $value): void {
        $this->getBackingStore()->set('startTime', $value);
    }

    /**
     * Sets the timeZone property value. The time zone to which the working hours apply.
     *  @param TimeZoneBase|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?TimeZoneBase $value): void {
        $this->getBackingStore()->set('timeZone', $value);
    }

}
