<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * This type represents the set of policies that dictate how bookings can be created in a Booking Calendar.
*/
class BookingSchedulingPolicy implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new bookingSchedulingPolicy and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingSchedulingPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingSchedulingPolicy {
        return new BookingSchedulingPolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the allowStaffSelection property value. True if to allow customers to choose a specific person for the booking.
     * @return bool|null
    */
    public function getAllowStaffSelection(): ?bool {
        return $this->getBackingStore()->get('allowStaffSelection');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowStaffSelection' => fn(ParseNode $n) => $o->setAllowStaffSelection($n->getBooleanValue()),
            'maximumAdvance' => fn(ParseNode $n) => $o->setMaximumAdvance($n->getDateIntervalValue()),
            'minimumLeadTime' => fn(ParseNode $n) => $o->setMinimumLeadTime($n->getDateIntervalValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sendConfirmationsToOwner' => fn(ParseNode $n) => $o->setSendConfirmationsToOwner($n->getBooleanValue()),
            'timeSlotInterval' => fn(ParseNode $n) => $o->setTimeSlotInterval($n->getDateIntervalValue()),
        ];
    }

    /**
     * Gets the maximumAdvance property value. Maximum number of days in advance that a booking can be made. It follows the ISO 8601 format.
     * @return DateInterval|null
    */
    public function getMaximumAdvance(): ?DateInterval {
        return $this->getBackingStore()->get('maximumAdvance');
    }

    /**
     * Gets the minimumLeadTime property value. The minimum amount of time before which bookings and cancellations must be made. It follows the ISO 8601 format.
     * @return DateInterval|null
    */
    public function getMinimumLeadTime(): ?DateInterval {
        return $this->getBackingStore()->get('minimumLeadTime');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the sendConfirmationsToOwner property value. True to notify the business via email when a booking is created or changed. Use the email address specified in the email property of the bookingBusiness entity for the business.
     * @return bool|null
    */
    public function getSendConfirmationsToOwner(): ?bool {
        return $this->getBackingStore()->get('sendConfirmationsToOwner');
    }

    /**
     * Gets the timeSlotInterval property value. Duration of each time slot, denoted in ISO 8601 format.
     * @return DateInterval|null
    */
    public function getTimeSlotInterval(): ?DateInterval {
        return $this->getBackingStore()->get('timeSlotInterval');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowStaffSelection', $this->getAllowStaffSelection());
        $writer->writeDateIntervalValue('maximumAdvance', $this->getMaximumAdvance());
        $writer->writeDateIntervalValue('minimumLeadTime', $this->getMinimumLeadTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('sendConfirmationsToOwner', $this->getSendConfirmationsToOwner());
        $writer->writeDateIntervalValue('timeSlotInterval', $this->getTimeSlotInterval());
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
     * Sets the allowStaffSelection property value. True if to allow customers to choose a specific person for the booking.
     * @param bool|null $value Value to set for the allowStaffSelection property.
    */
    public function setAllowStaffSelection(?bool $value): void {
        $this->getBackingStore()->set('allowStaffSelection', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the maximumAdvance property value. Maximum number of days in advance that a booking can be made. It follows the ISO 8601 format.
     * @param DateInterval|null $value Value to set for the maximumAdvance property.
    */
    public function setMaximumAdvance(?DateInterval $value): void {
        $this->getBackingStore()->set('maximumAdvance', $value);
    }

    /**
     * Sets the minimumLeadTime property value. The minimum amount of time before which bookings and cancellations must be made. It follows the ISO 8601 format.
     * @param DateInterval|null $value Value to set for the minimumLeadTime property.
    */
    public function setMinimumLeadTime(?DateInterval $value): void {
        $this->getBackingStore()->set('minimumLeadTime', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sendConfirmationsToOwner property value. True to notify the business via email when a booking is created or changed. Use the email address specified in the email property of the bookingBusiness entity for the business.
     * @param bool|null $value Value to set for the sendConfirmationsToOwner property.
    */
    public function setSendConfirmationsToOwner(?bool $value): void {
        $this->getBackingStore()->set('sendConfirmationsToOwner', $value);
    }

    /**
     * Sets the timeSlotInterval property value. Duration of each time slot, denoted in ISO 8601 format.
     * @param DateInterval|null $value Value to set for the timeSlotInterval property.
    */
    public function setTimeSlotInterval(?DateInterval $value): void {
        $this->getBackingStore()->set('timeSlotInterval', $value);
    }

}
