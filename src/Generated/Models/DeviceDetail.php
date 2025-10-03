<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DeviceDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DeviceDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceDetail {
        return new DeviceDetail();
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
     * Gets the browser property value. Indicates the browser information of the used in the sign-in. Populated for devices registered in Microsoft Entra.
     * @return string|null
    */
    public function getBrowser(): ?string {
        $val = $this->getBackingStore()->get('browser');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browser'");
    }

    /**
     * Gets the deviceId property value. Refers to the unique ID of the device used in the sign-in. Populated for devices registered in Microsoft Entra.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * Gets the displayName property value. Refers to the name of the device used in the sign-in. Populated for devices registered in Microsoft Entra.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'browser' => fn(ParseNode $n) => $o->setBrowser($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isCompliant' => fn(ParseNode $n) => $o->setIsCompliant($n->getBooleanValue()),
            'isManaged' => fn(ParseNode $n) => $o->setIsManaged($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operatingSystem' => fn(ParseNode $n) => $o->setOperatingSystem($n->getStringValue()),
            'trustType' => fn(ParseNode $n) => $o->setTrustType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isCompliant property value. Indicates whether the device is compliant or not.
     * @return bool|null
    */
    public function getIsCompliant(): ?bool {
        $val = $this->getBackingStore()->get('isCompliant');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCompliant'");
    }

    /**
     * Gets the isManaged property value. Indicates if the device is managed or not.
     * @return bool|null
    */
    public function getIsManaged(): ?bool {
        $val = $this->getBackingStore()->get('isManaged');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isManaged'");
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
     * Gets the operatingSystem property value. Indicates the OS name and version used in the sign-in.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        $val = $this->getBackingStore()->get('operatingSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystem'");
    }

    /**
     * Gets the trustType property value. Indicates information on whether the device used in the sign-in is workplace-joined, Microsoft Entra-joined, domain-joined.
     * @return string|null
    */
    public function getTrustType(): ?string {
        $val = $this->getBackingStore()->get('trustType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trustType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('browser', $this->getBrowser());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isCompliant', $this->getIsCompliant());
        $writer->writeBooleanValue('isManaged', $this->getIsManaged());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('operatingSystem', $this->getOperatingSystem());
        $writer->writeStringValue('trustType', $this->getTrustType());
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
     * Sets the browser property value. Indicates the browser information of the used in the sign-in. Populated for devices registered in Microsoft Entra.
     * @param string|null $value Value to set for the browser property.
    */
    public function setBrowser(?string $value): void {
        $this->getBackingStore()->set('browser', $value);
    }

    /**
     * Sets the deviceId property value. Refers to the unique ID of the device used in the sign-in. Populated for devices registered in Microsoft Entra.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the displayName property value. Refers to the name of the device used in the sign-in. Populated for devices registered in Microsoft Entra.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isCompliant property value. Indicates whether the device is compliant or not.
     * @param bool|null $value Value to set for the isCompliant property.
    */
    public function setIsCompliant(?bool $value): void {
        $this->getBackingStore()->set('isCompliant', $value);
    }

    /**
     * Sets the isManaged property value. Indicates if the device is managed or not.
     * @param bool|null $value Value to set for the isManaged property.
    */
    public function setIsManaged(?bool $value): void {
        $this->getBackingStore()->set('isManaged', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operatingSystem property value. Indicates the OS name and version used in the sign-in.
     * @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('operatingSystem', $value);
    }

    /**
     * Sets the trustType property value. Indicates information on whether the device used in the sign-in is workplace-joined, Microsoft Entra-joined, domain-joined.
     * @param string|null $value Value to set for the trustType property.
    */
    public function setTrustType(?string $value): void {
        $this->getBackingStore()->set('trustType', $value);
    }

}
