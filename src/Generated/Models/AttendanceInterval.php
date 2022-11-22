<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AttendanceInterval implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new attendanceInterval and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttendanceInterval
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttendanceInterval {
        return new AttendanceInterval();
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
     * Gets the durationInSeconds property value. Duration of the meeting interval in seconds; that is, the difference between joinDateTime and leaveDateTime.
     * @return int|null
    */
    public function getDurationInSeconds(): ?int {
        return $this->getBackingStore()->get('durationInSeconds');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'durationInSeconds' => fn(ParseNode $n) => $o->setDurationInSeconds($n->getIntegerValue()),
            'joinDateTime' => fn(ParseNode $n) => $o->setJoinDateTime($n->getDateTimeValue()),
            'leaveDateTime' => fn(ParseNode $n) => $o->setLeaveDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the joinDateTime property value. The time the attendee joined in UTC.
     * @return DateTime|null
    */
    public function getJoinDateTime(): ?DateTime {
        return $this->getBackingStore()->get('joinDateTime');
    }

    /**
     * Gets the leaveDateTime property value. The time the attendee left in UTC.
     * @return DateTime|null
    */
    public function getLeaveDateTime(): ?DateTime {
        return $this->getBackingStore()->get('leaveDateTime');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('durationInSeconds', $this->getDurationInSeconds());
        $writer->writeDateTimeValue('joinDateTime', $this->getJoinDateTime());
        $writer->writeDateTimeValue('leaveDateTime', $this->getLeaveDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the durationInSeconds property value. Duration of the meeting interval in seconds; that is, the difference between joinDateTime and leaveDateTime.
     *  @param int|null $value Value to set for the durationInSeconds property.
    */
    public function setDurationInSeconds(?int $value): void {
        $this->getBackingStore()->set('durationInSeconds', $value);
    }

    /**
     * Sets the joinDateTime property value. The time the attendee joined in UTC.
     *  @param DateTime|null $value Value to set for the joinDateTime property.
    */
    public function setJoinDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('joinDateTime', $value);
    }

    /**
     * Sets the leaveDateTime property value. The time the attendee left in UTC.
     *  @param DateTime|null $value Value to set for the leaveDateTime property.
    */
    public function setLeaveDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('leaveDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
