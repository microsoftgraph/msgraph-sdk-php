<?php

namespace Microsoft\Graph\Generated\Models;

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
     * Instantiates a new deviceDetail and sets the default values.
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
     * Gets the browser property value. Indicates the browser information of the used for signing in.
     * @return string|null
    */
    public function getBrowser(): ?string {
        return $this->getBackingStore()->get('browser');
    }

    /**
     * Gets the deviceId property value. Refers to the UniqueID of the device used for signing in.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * Gets the displayName property value. Refers to the name of the device used for signing in.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the isCompliant property value. Indicates whether the device is compliant.
     * @return bool|null
    */
    public function getIsCompliant(): ?bool {
        return $this->getBackingStore()->get('isCompliant');
    }

    /**
     * Gets the isManaged property value. Indicates whether the device is managed.
     * @return bool|null
    */
    public function getIsManaged(): ?bool {
        return $this->getBackingStore()->get('isManaged');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the operatingSystem property value. Indicates the operating system name and version used for signing in.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        return $this->getBackingStore()->get('operatingSystem');
    }

    /**
     * Gets the trustType property value. Provides information about whether the signed-in device is Workplace Joined, AzureAD Joined, Domain Joined.
     * @return string|null
    */
    public function getTrustType(): ?string {
        return $this->getBackingStore()->get('trustType');
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
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the browser property value. Indicates the browser information of the used for signing in.
     * @param string|null $value Value to set for the browser property.
    */
    public function setBrowser(?string $value): void {
        $this->getBackingStore()->set('browser', $value);
    }

    /**
     * Sets the deviceId property value. Refers to the UniqueID of the device used for signing in.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the displayName property value. Refers to the name of the device used for signing in.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isCompliant property value. Indicates whether the device is compliant.
     * @param bool|null $value Value to set for the isCompliant property.
    */
    public function setIsCompliant(?bool $value): void {
        $this->getBackingStore()->set('isCompliant', $value);
    }

    /**
     * Sets the isManaged property value. Indicates whether the device is managed.
     * @param bool|null $value Value to set for the isManaged property.
    */
    public function setIsManaged(?bool $value): void {
        $this->getBackingStore()->set('isManaged', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operatingSystem property value. Indicates the operating system name and version used for signing in.
     * @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('operatingSystem', $value);
    }

    /**
     * Sets the trustType property value. Provides information about whether the signed-in device is Workplace Joined, AzureAD Joined, Domain Joined.
     * @param string|null $value Value to set for the trustType property.
    */
    public function setTrustType(?string $value): void {
        $this->getBackingStore()->set('trustType', $value);
    }

}
