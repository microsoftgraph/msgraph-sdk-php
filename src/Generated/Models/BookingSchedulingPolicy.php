<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingSchedulingPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowStaffSelection True if to allow customers to choose a specific person for the booking.
    */
    private ?bool $allowStaffSelection = null;
    
    /**
     * @var DateInterval|null $maximumAdvance Maximum number of days in advance that a booking can be made. It follows the ISO 8601 format.
    */
    private ?DateInterval $maximumAdvance = null;
    
    /**
     * @var DateInterval|null $minimumLeadTime The minimum amount of time before which bookings and cancellations must be made. It follows the ISO 8601 format.
    */
    private ?DateInterval $minimumLeadTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $sendConfirmationsToOwner True to notify the business via email when a booking is created or changed. Use the email address specified in the email property of the bookingBusiness entity for the business.
    */
    private ?bool $sendConfirmationsToOwner = null;
    
    /**
     * @var DateInterval|null $timeSlotInterval Duration of each time slot, denoted in ISO 8601 format.
    */
    private ?DateInterval $timeSlotInterval = null;
    
    /**
     * Instantiates a new bookingSchedulingPolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.bookingSchedulingPolicy');
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowStaffSelection property value. True if to allow customers to choose a specific person for the booking.
     * @return bool|null
    */
    public function getAllowStaffSelection(): ?bool {
        return $this->allowStaffSelection;
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
        return $this->maximumAdvance;
    }

    /**
     * Gets the minimumLeadTime property value. The minimum amount of time before which bookings and cancellations must be made. It follows the ISO 8601 format.
     * @return DateInterval|null
    */
    public function getMinimumLeadTime(): ?DateInterval {
        return $this->minimumLeadTime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the sendConfirmationsToOwner property value. True to notify the business via email when a booking is created or changed. Use the email address specified in the email property of the bookingBusiness entity for the business.
     * @return bool|null
    */
    public function getSendConfirmationsToOwner(): ?bool {
        return $this->sendConfirmationsToOwner;
    }

    /**
     * Gets the timeSlotInterval property value. Duration of each time slot, denoted in ISO 8601 format.
     * @return DateInterval|null
    */
    public function getTimeSlotInterval(): ?DateInterval {
        return $this->timeSlotInterval;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowStaffSelection', $this->allowStaffSelection);
        $writer->writeDateIntervalValue('maximumAdvance', $this->maximumAdvance);
        $writer->writeDateIntervalValue('minimumLeadTime', $this->minimumLeadTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('sendConfirmationsToOwner', $this->sendConfirmationsToOwner);
        $writer->writeDateIntervalValue('timeSlotInterval', $this->timeSlotInterval);
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
     * Sets the allowStaffSelection property value. True if to allow customers to choose a specific person for the booking.
     *  @param bool|null $value Value to set for the allowStaffSelection property.
    */
    public function setAllowStaffSelection(?bool $value ): void {
        $this->allowStaffSelection = $value;
    }

    /**
     * Sets the maximumAdvance property value. Maximum number of days in advance that a booking can be made. It follows the ISO 8601 format.
     *  @param DateInterval|null $value Value to set for the maximumAdvance property.
    */
    public function setMaximumAdvance(?DateInterval $value ): void {
        $this->maximumAdvance = $value;
    }

    /**
     * Sets the minimumLeadTime property value. The minimum amount of time before which bookings and cancellations must be made. It follows the ISO 8601 format.
     *  @param DateInterval|null $value Value to set for the minimumLeadTime property.
    */
    public function setMinimumLeadTime(?DateInterval $value ): void {
        $this->minimumLeadTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the sendConfirmationsToOwner property value. True to notify the business via email when a booking is created or changed. Use the email address specified in the email property of the bookingBusiness entity for the business.
     *  @param bool|null $value Value to set for the sendConfirmationsToOwner property.
    */
    public function setSendConfirmationsToOwner(?bool $value ): void {
        $this->sendConfirmationsToOwner = $value;
    }

    /**
     * Sets the timeSlotInterval property value. Duration of each time slot, denoted in ISO 8601 format.
     *  @param DateInterval|null $value Value to set for the timeSlotInterval property.
    */
    public function setTimeSlotInterval(?DateInterval $value ): void {
        $this->timeSlotInterval = $value;
    }

}
