<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CrossTenantAccessPolicyInboundTrust implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CrossTenantAccessPolicyInboundTrust and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantAccessPolicyInboundTrust
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantAccessPolicyInboundTrust {
        return new CrossTenantAccessPolicyInboundTrust();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isCompliantDeviceAccepted' => fn(ParseNode $n) => $o->setIsCompliantDeviceAccepted($n->getBooleanValue()),
            'isHybridAzureADJoinedDeviceAccepted' => fn(ParseNode $n) => $o->setIsHybridAzureADJoinedDeviceAccepted($n->getBooleanValue()),
            'isMfaAccepted' => fn(ParseNode $n) => $o->setIsMfaAccepted($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isCompliantDeviceAccepted property value. Specifies whether compliant devices from external Microsoft Entra organizations are trusted.
     * @return bool|null
    */
    public function getIsCompliantDeviceAccepted(): ?bool {
        $val = $this->getBackingStore()->get('isCompliantDeviceAccepted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCompliantDeviceAccepted'");
    }

    /**
     * Gets the isHybridAzureADJoinedDeviceAccepted property value. Specifies whether Microsoft Entra hybrid joined devices from external Microsoft Entra organizations are trusted.
     * @return bool|null
    */
    public function getIsHybridAzureADJoinedDeviceAccepted(): ?bool {
        $val = $this->getBackingStore()->get('isHybridAzureADJoinedDeviceAccepted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHybridAzureADJoinedDeviceAccepted'");
    }

    /**
     * Gets the isMfaAccepted property value. Specifies whether MFA from external Microsoft Entra organizations is trusted.
     * @return bool|null
    */
    public function getIsMfaAccepted(): ?bool {
        $val = $this->getBackingStore()->get('isMfaAccepted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMfaAccepted'");
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
        $writer->writeBooleanValue('isCompliantDeviceAccepted', $this->getIsCompliantDeviceAccepted());
        $writer->writeBooleanValue('isHybridAzureADJoinedDeviceAccepted', $this->getIsHybridAzureADJoinedDeviceAccepted());
        $writer->writeBooleanValue('isMfaAccepted', $this->getIsMfaAccepted());
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
     * Sets the isCompliantDeviceAccepted property value. Specifies whether compliant devices from external Microsoft Entra organizations are trusted.
     * @param bool|null $value Value to set for the isCompliantDeviceAccepted property.
    */
    public function setIsCompliantDeviceAccepted(?bool $value): void {
        $this->getBackingStore()->set('isCompliantDeviceAccepted', $value);
    }

    /**
     * Sets the isHybridAzureADJoinedDeviceAccepted property value. Specifies whether Microsoft Entra hybrid joined devices from external Microsoft Entra organizations are trusted.
     * @param bool|null $value Value to set for the isHybridAzureADJoinedDeviceAccepted property.
    */
    public function setIsHybridAzureADJoinedDeviceAccepted(?bool $value): void {
        $this->getBackingStore()->set('isHybridAzureADJoinedDeviceAccepted', $value);
    }

    /**
     * Sets the isMfaAccepted property value. Specifies whether MFA from external Microsoft Entra organizations is trusted.
     * @param bool|null $value Value to set for the isMfaAccepted property.
    */
    public function setIsMfaAccepted(?bool $value): void {
        $this->getBackingStore()->set('isMfaAccepted', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
