<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * The user experience analytics summary of Devices not windows autopilot ready.
*/
class UserExperienceAnalyticsAutopilotDevicesSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new userExperienceAnalyticsAutopilotDevicesSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAutopilotDevicesSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAutopilotDevicesSummary {
        return new UserExperienceAnalyticsAutopilotDevicesSummary();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the devicesNotAutopilotRegistered property value. The count of intune devices that are not autopilot registerd. Read-only.
     * @return int|null
    */
    public function getDevicesNotAutopilotRegistered(): ?int {
        $val = $this->getBackingStore()->get('devicesNotAutopilotRegistered');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'devicesNotAutopilotRegistered'");
    }

    /**
     * Gets the devicesWithoutAutopilotProfileAssigned property value. The count of intune devices not autopilot profile assigned. Read-only.
     * @return int|null
    */
    public function getDevicesWithoutAutopilotProfileAssigned(): ?int {
        $val = $this->getBackingStore()->get('devicesWithoutAutopilotProfileAssigned');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'devicesWithoutAutopilotProfileAssigned'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'devicesNotAutopilotRegistered' => fn(ParseNode $n) => $o->setDevicesNotAutopilotRegistered($n->getIntegerValue()),
            'devicesWithoutAutopilotProfileAssigned' => fn(ParseNode $n) => $o->setDevicesWithoutAutopilotProfileAssigned($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'totalWindows10DevicesWithoutTenantAttached' => fn(ParseNode $n) => $o->setTotalWindows10DevicesWithoutTenantAttached($n->getIntegerValue()),
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
     * Gets the totalWindows10DevicesWithoutTenantAttached property value. The count of windows 10 devices that are Intune and co-managed. Read-only.
     * @return int|null
    */
    public function getTotalWindows10DevicesWithoutTenantAttached(): ?int {
        $val = $this->getBackingStore()->get('totalWindows10DevicesWithoutTenantAttached');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalWindows10DevicesWithoutTenantAttached'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('devicesNotAutopilotRegistered', $this->getDevicesNotAutopilotRegistered());
        $writer->writeIntegerValue('devicesWithoutAutopilotProfileAssigned', $this->getDevicesWithoutAutopilotProfileAssigned());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('totalWindows10DevicesWithoutTenantAttached', $this->getTotalWindows10DevicesWithoutTenantAttached());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the devicesNotAutopilotRegistered property value. The count of intune devices that are not autopilot registerd. Read-only.
     * @param int|null $value Value to set for the devicesNotAutopilotRegistered property.
    */
    public function setDevicesNotAutopilotRegistered(?int $value): void {
        $this->getBackingStore()->set('devicesNotAutopilotRegistered', $value);
    }

    /**
     * Sets the devicesWithoutAutopilotProfileAssigned property value. The count of intune devices not autopilot profile assigned. Read-only.
     * @param int|null $value Value to set for the devicesWithoutAutopilotProfileAssigned property.
    */
    public function setDevicesWithoutAutopilotProfileAssigned(?int $value): void {
        $this->getBackingStore()->set('devicesWithoutAutopilotProfileAssigned', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the totalWindows10DevicesWithoutTenantAttached property value. The count of windows 10 devices that are Intune and co-managed. Read-only.
     * @param int|null $value Value to set for the totalWindows10DevicesWithoutTenantAttached property.
    */
    public function setTotalWindows10DevicesWithoutTenantAttached(?int $value): void {
        $this->getBackingStore()->set('totalWindows10DevicesWithoutTenantAttached', $value);
    }

}
