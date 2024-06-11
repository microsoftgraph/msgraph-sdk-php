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

class ScheduleInformation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ScheduleInformation and sets the default values.
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
     * Gets the availabilityView property value. Represents a merged view of availability of all the items in scheduleItems. The view consists of time slots. Availability during each time slot is indicated with: 0= free or working elswhere, 1= tentative, 2= busy, 3= out of office.Note: Working elsewhere is set to 0 instead of 4 for backward compatibility. For details, see the Q&A.
     * @return string|null
    */
    public function getAvailabilityView(): ?string {
        $val = $this->getBackingStore()->get('availabilityView');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'availabilityView'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
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
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof FreeBusyError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the scheduleId property value. An SMTP address of the user, distribution list, or resource, identifying an instance of scheduleInformation.
     * @return string|null
    */
    public function getScheduleId(): ?string {
        $val = $this->getBackingStore()->get('scheduleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduleId'");
    }

    /**
     * Gets the scheduleItems property value. Contains the items that describe the availability of the user or resource.
     * @return array<ScheduleItem>|null
    */
    public function getScheduleItems(): ?array {
        $val = $this->getBackingStore()->get('scheduleItems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ScheduleItem::class);
            /** @var array<ScheduleItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduleItems'");
    }

    /**
     * Gets the workingHours property value. The days of the week and hours in a specific time zone that the user works. These are set as part of the user's mailboxSettings.
     * @return WorkingHours|null
    */
    public function getWorkingHours(): ?WorkingHours {
        $val = $this->getBackingStore()->get('workingHours');
        if (is_null($val) || $val instanceof WorkingHours) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workingHours'");
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
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the availabilityView property value. Represents a merged view of availability of all the items in scheduleItems. The view consists of time slots. Availability during each time slot is indicated with: 0= free or working elswhere, 1= tentative, 2= busy, 3= out of office.Note: Working elsewhere is set to 0 instead of 4 for backward compatibility. For details, see the Q&A.
     * @param string|null $value Value to set for the availabilityView property.
    */
    public function setAvailabilityView(?string $value): void {
        $this->getBackingStore()->set('availabilityView', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
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
     * @param string|null $value Value to set for the @odata.type property.
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
