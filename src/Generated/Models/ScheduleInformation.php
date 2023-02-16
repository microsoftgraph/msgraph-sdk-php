<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ScheduleInformation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new scheduleInformation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ScheduleInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ScheduleInformation {
        return new ScheduleInformation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the availabilityView property value. Represents a merged view of availability of all the items in scheduleItems. The view consists of time slots. Availability during each time slot is indicated with: 0= free, 1= tentative, 2= busy, 3= out of office, 4= working elsewhere.
     * @return string|null
    */
    public function getAvailabilityView(): ?string {
        return $this->getBackingStore()->get('availabilityView');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the error property value. Error information from attempting to get the availability of the user, distribution list, or resource.
     * @return FreeBusyError|null
    */
    public function getError(): ?FreeBusyError {
        return $this->getBackingStore()->get('error');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availabilityView' => fn(ParseNode $n) => $o->setAvailabilityView($n->getStringValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([FreeBusyError::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'scheduleId' => fn(ParseNode $n) => $o->setScheduleId($n->getStringValue()),
            'scheduleItems' => fn(ParseNode $n) => $o->setScheduleItems($n->getCollectionOfObjectValues([ScheduleItem::class, 'createFromDiscriminatorValue'])),
            'workingHours' => fn(ParseNode $n) => $o->setWorkingHours($n->getObjectValue([WorkingHours::class, 'createFromDiscriminatorValue'])),
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
     * Gets the scheduleId property value. An SMTP address of the user, distribution list, or resource, identifying an instance of scheduleInformation.
     * @return string|null
    */
    public function getScheduleId(): ?string {
        return $this->getBackingStore()->get('scheduleId');
    }

    /**
     * Gets the scheduleItems property value. Contains the items that describe the availability of the user or resource.
     * @return array<ScheduleItem>|null
    */
    public function getScheduleItems(): ?array {
        return $this->getBackingStore()->get('scheduleItems');
    }

    /**
     * Gets the workingHours property value. The days of the week and hours in a specific time zone that the user works. These are set as part of the user's mailboxSettings.
     * @return WorkingHours|null
    */
    public function getWorkingHours(): ?WorkingHours {
        return $this->getBackingStore()->get('workingHours');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('availabilityView', $this->getAvailabilityView());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('scheduleId', $this->getScheduleId());
        $writer->writeCollectionOfObjectValues('scheduleItems', $this->getScheduleItems());
        $writer->writeObjectValue('workingHours', $this->getWorkingHours());
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
     * Sets the availabilityView property value. Represents a merged view of availability of all the items in scheduleItems. The view consists of time slots. Availability during each time slot is indicated with: 0= free, 1= tentative, 2= busy, 3= out of office, 4= working elsewhere.
     * @param string|null $value Value to set for the availabilityView property.
    */
    public function setAvailabilityView(?string $value): void {
        $this->getBackingStore()->set('availabilityView', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the error property value. Error information from attempting to get the availability of the user, distribution list, or resource.
     * @param FreeBusyError|null $value Value to set for the error property.
    */
    public function setError(?FreeBusyError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the scheduleId property value. An SMTP address of the user, distribution list, or resource, identifying an instance of scheduleInformation.
     * @param string|null $value Value to set for the scheduleId property.
    */
    public function setScheduleId(?string $value): void {
        $this->getBackingStore()->set('scheduleId', $value);
    }

    /**
     * Sets the scheduleItems property value. Contains the items that describe the availability of the user or resource.
     * @param array<ScheduleItem>|null $value Value to set for the scheduleItems property.
    */
    public function setScheduleItems(?array $value): void {
        $this->getBackingStore()->set('scheduleItems', $value);
    }

    /**
     * Sets the workingHours property value. The days of the week and hours in a specific time zone that the user works. These are set as part of the user's mailboxSettings.
     * @param WorkingHours|null $value Value to set for the workingHours property.
    */
    public function setWorkingHours(?WorkingHours $value): void {
        $this->getBackingStore()->set('workingHours', $value);
    }

}
