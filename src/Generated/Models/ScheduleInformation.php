<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ScheduleInformation implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $availabilityView Represents a merged view of availability of all the items in scheduleItems. The view consists of time slots. Availability during each time slot is indicated with: 0= free, 1= tentative, 2= busy, 3= out of office, 4= working elsewhere. */
    private ?string $availabilityView = null;
    
    /** @var FreeBusyError|null $error Error information from attempting to get the availability of the user, distribution list, or resource. */
    private ?FreeBusyError $error = null;
    
    /** @var string|null $scheduleId An SMTP address of the user, distribution list, or resource, identifying an instance of scheduleInformation. */
    private ?string $scheduleId = null;
    
    /** @var array<ScheduleItem>|null $scheduleItems Contains the items that describe the availability of the user or resource. */
    private ?array $scheduleItems = null;
    
    /** @var WorkingHours|null $workingHours The days of the week and hours in a specific time zone that the user works. These are set as part of the user's mailboxSettings. */
    private ?WorkingHours $workingHours = null;
    
    /**
     * Instantiates a new scheduleInformation and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ScheduleInformation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ScheduleInformation {
        return new ScheduleInformation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the availabilityView property value. Represents a merged view of availability of all the items in scheduleItems. The view consists of time slots. Availability during each time slot is indicated with: 0= free, 1= tentative, 2= busy, 3= out of office, 4= working elsewhere.
     * @return string|null
    */
    public function getAvailabilityView(): ?string {
        return $this->availabilityView;
    }

    /**
     * Gets the error property value. Error information from attempting to get the availability of the user, distribution list, or resource.
     * @return FreeBusyError|null
    */
    public function getError(): ?FreeBusyError {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'availabilityView' => function (self $o, ParseNode $n) { $o->setAvailabilityView($n->getStringValue()); },
            'error' => function (self $o, ParseNode $n) { $o->setError($n->getObjectValue(FreeBusyError::class)); },
            'scheduleId' => function (self $o, ParseNode $n) { $o->setScheduleId($n->getStringValue()); },
            'scheduleItems' => function (self $o, ParseNode $n) { $o->setScheduleItems($n->getCollectionOfObjectValues(ScheduleItem::class)); },
            'workingHours' => function (self $o, ParseNode $n) { $o->setWorkingHours($n->getObjectValue(WorkingHours::class)); },
        ];
    }

    /**
     * Gets the scheduleId property value. An SMTP address of the user, distribution list, or resource, identifying an instance of scheduleInformation.
     * @return string|null
    */
    public function getScheduleId(): ?string {
        return $this->scheduleId;
    }

    /**
     * Gets the scheduleItems property value. Contains the items that describe the availability of the user or resource.
     * @return array<ScheduleItem>|null
    */
    public function getScheduleItems(): ?array {
        return $this->scheduleItems;
    }

    /**
     * Gets the workingHours property value. The days of the week and hours in a specific time zone that the user works. These are set as part of the user's mailboxSettings.
     * @return WorkingHours|null
    */
    public function getWorkingHours(): ?WorkingHours {
        return $this->workingHours;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('availabilityView', $this->availabilityView);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeStringValue('scheduleId', $this->scheduleId);
        $writer->writeCollectionOfObjectValues('scheduleItems', $this->scheduleItems);
        $writer->writeObjectValue('workingHours', $this->workingHours);
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
     * Sets the availabilityView property value. Represents a merged view of availability of all the items in scheduleItems. The view consists of time slots. Availability during each time slot is indicated with: 0= free, 1= tentative, 2= busy, 3= out of office, 4= working elsewhere.
     *  @param string|null $value Value to set for the availabilityView property.
    */
    public function setAvailabilityView(?string $value ): void {
        $this->availabilityView = $value;
    }

    /**
     * Sets the error property value. Error information from attempting to get the availability of the user, distribution list, or resource.
     *  @param FreeBusyError|null $value Value to set for the error property.
    */
    public function setError(?FreeBusyError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the scheduleId property value. An SMTP address of the user, distribution list, or resource, identifying an instance of scheduleInformation.
     *  @param string|null $value Value to set for the scheduleId property.
    */
    public function setScheduleId(?string $value ): void {
        $this->scheduleId = $value;
    }

    /**
     * Sets the scheduleItems property value. Contains the items that describe the availability of the user or resource.
     *  @param array<ScheduleItem>|null $value Value to set for the scheduleItems property.
    */
    public function setScheduleItems(?array $value ): void {
        $this->scheduleItems = $value;
    }

    /**
     * Sets the workingHours property value. The days of the week and hours in a specific time zone that the user works. These are set as part of the user's mailboxSettings.
     *  @param WorkingHours|null $value Value to set for the workingHours property.
    */
    public function setWorkingHours(?WorkingHours $value ): void {
        $this->workingHours = $value;
    }

}
