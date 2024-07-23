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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * Instantiates a new BookingSchedulingPolicy and sets the default values.
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
     * Gets the allowStaffSelection property value. True if to allow customers to choose a specific person for the booking.
     * @return bool|null
    */
    public function getAllowStaffSelection(): ?bool {
        $val = $this->getBackingStore()->get('allowStaffSelection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowStaffSelection'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the customAvailabilities property value. collection of custom availabilities for a given time range.
     * @return array<BookingsAvailabilityWindow>|null
    */
    public function getCustomAvailabilities(): ?array {
        $val = $this->getBackingStore()->get('customAvailabilities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BookingsAvailabilityWindow::class);
            /** @var array<BookingsAvailabilityWindow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customAvailabilities'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowStaffSelection' => fn(ParseNode $n) => $o->setAllowStaffSelection($n->getBooleanValue()),
            'customAvailabilities' => fn(ParseNode $n) => $o->setCustomAvailabilities($n->getCollectionOfObjectValues([BookingsAvailabilityWindow::class, 'createFromDiscriminatorValue'])),
            'generalAvailability' => fn(ParseNode $n) => $o->setGeneralAvailability($n->getObjectValue([BookingsAvailability::class, 'createFromDiscriminatorValue'])),
            'isMeetingInviteToCustomersEnabled' => fn(ParseNode $n) => $o->setIsMeetingInviteToCustomersEnabled($n->getBooleanValue()),
            'maximumAdvance' => fn(ParseNode $n) => $o->setMaximumAdvance($n->getDateIntervalValue()),
            'minimumLeadTime' => fn(ParseNode $n) => $o->setMinimumLeadTime($n->getDateIntervalValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sendConfirmationsToOwner' => fn(ParseNode $n) => $o->setSendConfirmationsToOwner($n->getBooleanValue()),
            'timeSlotInterval' => fn(ParseNode $n) => $o->setTimeSlotInterval($n->getDateIntervalValue()),
        ];
    }

    /**
     * Gets the generalAvailability property value. General availability 
     * @return BookingsAvailability|null
    */
    public function getGeneralAvailability(): ?BookingsAvailability {
        $val = $this->getBackingStore()->get('generalAvailability');
        if (is_null($val) || $val instanceof BookingsAvailability) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'generalAvailability'");
    }

    /**
     * Gets the isMeetingInviteToCustomersEnabled property value. Enable sending meeting invite to customers. False by default.
     * @return bool|null
    */
    public function getIsMeetingInviteToCustomersEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isMeetingInviteToCustomersEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMeetingInviteToCustomersEnabled'");
    }

    /**
     * Gets the maximumAdvance property value. Maximum number of days in advance that a booking can be made. It follows the ISO 8601 format.
     * @return DateInterval|null
    */
    public function getMaximumAdvance(): ?DateInterval {
        $val = $this->getBackingStore()->get('maximumAdvance');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumAdvance'");
    }

    /**
     * Gets the minimumLeadTime property value. The minimum amount of time before which bookings and cancellations must be made. It follows the ISO 8601 format.
     * @return DateInterval|null
    */
    public function getMinimumLeadTime(): ?DateInterval {
        $val = $this->getBackingStore()->get('minimumLeadTime');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumLeadTime'");
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
     * Gets the sendConfirmationsToOwner property value. True to notify the business via email when a booking is created or changed. Use the email address specified in the email property of the bookingBusiness entity for the business.
     * @return bool|null
    */
    public function getSendConfirmationsToOwner(): ?bool {
        $val = $this->getBackingStore()->get('sendConfirmationsToOwner');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sendConfirmationsToOwner'");
    }

    /**
     * Gets the timeSlotInterval property value. Duration of each time slot, denoted in ISO 8601 format.
     * @return DateInterval|null
    */
    public function getTimeSlotInterval(): ?DateInterval {
        $val = $this->getBackingStore()->get('timeSlotInterval');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeSlotInterval'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowStaffSelection', $this->getAllowStaffSelection());
        $writer->writeCollectionOfObjectValues('customAvailabilities', $this->getCustomAvailabilities());
        $writer->writeObjectValue('generalAvailability', $this->getGeneralAvailability());
        $writer->writeBooleanValue('isMeetingInviteToCustomersEnabled', $this->getIsMeetingInviteToCustomersEnabled());
        $writer->writeDateIntervalValue('maximumAdvance', $this->getMaximumAdvance());
        $writer->writeDateIntervalValue('minimumLeadTime', $this->getMinimumLeadTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('sendConfirmationsToOwner', $this->getSendConfirmationsToOwner());
        $writer->writeDateIntervalValue('timeSlotInterval', $this->getTimeSlotInterval());
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
     * Sets the allowStaffSelection property value. True if to allow customers to choose a specific person for the booking.
     * @param bool|null $value Value to set for the allowStaffSelection property.
    */
    public function setAllowStaffSelection(?bool $value): void {
        $this->getBackingStore()->set('allowStaffSelection', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the customAvailabilities property value. collection of custom availabilities for a given time range.
     * @param array<BookingsAvailabilityWindow>|null $value Value to set for the customAvailabilities property.
    */
    public function setCustomAvailabilities(?array $value): void {
        $this->getBackingStore()->set('customAvailabilities', $value);
    }

    /**
     * Sets the generalAvailability property value. General availability 
     * @param BookingsAvailability|null $value Value to set for the generalAvailability property.
    */
    public function setGeneralAvailability(?BookingsAvailability $value): void {
        $this->getBackingStore()->set('generalAvailability', $value);
    }

    /**
     * Sets the isMeetingInviteToCustomersEnabled property value. Enable sending meeting invite to customers. False by default.
     * @param bool|null $value Value to set for the isMeetingInviteToCustomersEnabled property.
    */
    public function setIsMeetingInviteToCustomersEnabled(?bool $value): void {
        $this->getBackingStore()->set('isMeetingInviteToCustomersEnabled', $value);
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
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
