<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ImportedWindowsAutopilotDeviceIdentityState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ImportedWindowsAutopilotDeviceIdentityState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportedWindowsAutopilotDeviceIdentityState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportedWindowsAutopilotDeviceIdentityState {
        return new ImportedWindowsAutopilotDeviceIdentityState();
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
     * Gets the deviceErrorCode property value. Device error code reported by Device Directory Service(DDS).
     * @return int|null
    */
    public function getDeviceErrorCode(): ?int {
        $val = $this->getBackingStore()->get('deviceErrorCode');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceErrorCode'");
    }

    /**
     * Gets the deviceErrorName property value. Device error name reported by Device Directory Service(DDS).
     * @return string|null
    */
    public function getDeviceErrorName(): ?string {
        $val = $this->getBackingStore()->get('deviceErrorName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceErrorName'");
    }

    /**
     * Gets the deviceImportStatus property value. The deviceImportStatus property
     * @return ImportedWindowsAutopilotDeviceIdentityImportStatus|null
    */
    public function getDeviceImportStatus(): ?ImportedWindowsAutopilotDeviceIdentityImportStatus {
        $val = $this->getBackingStore()->get('deviceImportStatus');
        if (is_null($val) || $val instanceof ImportedWindowsAutopilotDeviceIdentityImportStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceImportStatus'");
    }

    /**
     * Gets the deviceRegistrationId property value. Device Registration ID for successfully added device reported by Device Directory Service(DDS).
     * @return string|null
    */
    public function getDeviceRegistrationId(): ?string {
        $val = $this->getBackingStore()->get('deviceRegistrationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceRegistrationId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceErrorCode' => fn(ParseNode $n) => $o->setDeviceErrorCode($n->getIntegerValue()),
            'deviceErrorName' => fn(ParseNode $n) => $o->setDeviceErrorName($n->getStringValue()),
            'deviceImportStatus' => fn(ParseNode $n) => $o->setDeviceImportStatus($n->getEnumValue(ImportedWindowsAutopilotDeviceIdentityImportStatus::class)),
            'deviceRegistrationId' => fn(ParseNode $n) => $o->setDeviceRegistrationId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('deviceErrorCode', $this->getDeviceErrorCode());
        $writer->writeStringValue('deviceErrorName', $this->getDeviceErrorName());
        $writer->writeEnumValue('deviceImportStatus', $this->getDeviceImportStatus());
        $writer->writeStringValue('deviceRegistrationId', $this->getDeviceRegistrationId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the deviceErrorCode property value. Device error code reported by Device Directory Service(DDS).
     * @param int|null $value Value to set for the deviceErrorCode property.
    */
    public function setDeviceErrorCode(?int $value): void {
        $this->getBackingStore()->set('deviceErrorCode', $value);
    }

    /**
     * Sets the deviceErrorName property value. Device error name reported by Device Directory Service(DDS).
     * @param string|null $value Value to set for the deviceErrorName property.
    */
    public function setDeviceErrorName(?string $value): void {
        $this->getBackingStore()->set('deviceErrorName', $value);
    }

    /**
     * Sets the deviceImportStatus property value. The deviceImportStatus property
     * @param ImportedWindowsAutopilotDeviceIdentityImportStatus|null $value Value to set for the deviceImportStatus property.
    */
    public function setDeviceImportStatus(?ImportedWindowsAutopilotDeviceIdentityImportStatus $value): void {
        $this->getBackingStore()->set('deviceImportStatus', $value);
    }

    /**
     * Sets the deviceRegistrationId property value. Device Registration ID for successfully added device reported by Device Directory Service(DDS).
     * @param string|null $value Value to set for the deviceRegistrationId property.
    */
    public function setDeviceRegistrationId(?string $value): void {
        $this->getBackingStore()->set('deviceRegistrationId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
