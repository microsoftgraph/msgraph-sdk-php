<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AzureADRegistrationPolicy implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AzureADRegistrationPolicy and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureADRegistrationPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureADRegistrationPolicy {
        return new AzureADRegistrationPolicy();
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
     * Gets the allowedToRegister property value. The allowedToRegister property
     * @return DeviceRegistrationMembership|null
    */
    public function getAllowedToRegister(): ?DeviceRegistrationMembership {
        $val = $this->getBackingStore()->get('allowedToRegister');
        if (is_null($val) || $val instanceof DeviceRegistrationMembership) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedToRegister'");
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
            'allowedToRegister' => fn(ParseNode $n) => $o->setAllowedToRegister($n->getObjectValue([DeviceRegistrationMembership::class, 'createFromDiscriminatorValue'])),
            'isAdminConfigurable' => fn(ParseNode $n) => $o->setIsAdminConfigurable($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isAdminConfigurable property value. The isAdminConfigurable property
     * @return bool|null
    */
    public function getIsAdminConfigurable(): ?bool {
        $val = $this->getBackingStore()->get('isAdminConfigurable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAdminConfigurable'");
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
        $writer->writeObjectValue('allowedToRegister', $this->getAllowedToRegister());
        $writer->writeBooleanValue('isAdminConfigurable', $this->getIsAdminConfigurable());
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
     * Sets the allowedToRegister property value. The allowedToRegister property
     * @param DeviceRegistrationMembership|null $value Value to set for the allowedToRegister property.
    */
    public function setAllowedToRegister(?DeviceRegistrationMembership $value): void {
        $this->getBackingStore()->set('allowedToRegister', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isAdminConfigurable property value. The isAdminConfigurable property
     * @param bool|null $value Value to set for the isAdminConfigurable property.
    */
    public function setIsAdminConfigurable(?bool $value): void {
        $this->getBackingStore()->set('isAdminConfigurable', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
