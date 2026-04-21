<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class LocalAdminSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new LocalAdminSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LocalAdminSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LocalAdminSettings {
        return new LocalAdminSettings();
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
     * Gets the enableGlobalAdmins property value. The enableGlobalAdmins property
     * @return bool|null
    */
    public function getEnableGlobalAdmins(): ?bool {
        $val = $this->getBackingStore()->get('enableGlobalAdmins');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableGlobalAdmins'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enableGlobalAdmins' => fn(ParseNode $n) => $o->setEnableGlobalAdmins($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'registeringUsers' => fn(ParseNode $n) => $o->setRegisteringUsers($n->getObjectValue([DeviceRegistrationMembership::class, 'createFromDiscriminatorValue'])),
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
     * Gets the registeringUsers property value. The registeringUsers property
     * @return DeviceRegistrationMembership|null
    */
    public function getRegisteringUsers(): ?DeviceRegistrationMembership {
        $val = $this->getBackingStore()->get('registeringUsers');
        if (is_null($val) || $val instanceof DeviceRegistrationMembership) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registeringUsers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('enableGlobalAdmins', $this->getEnableGlobalAdmins());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('registeringUsers', $this->getRegisteringUsers());
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
     * Sets the enableGlobalAdmins property value. The enableGlobalAdmins property
     * @param bool|null $value Value to set for the enableGlobalAdmins property.
    */
    public function setEnableGlobalAdmins(?bool $value): void {
        $this->getBackingStore()->set('enableGlobalAdmins', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the registeringUsers property value. The registeringUsers property
     * @param DeviceRegistrationMembership|null $value Value to set for the registeringUsers property.
    */
    public function setRegisteringUsers(?DeviceRegistrationMembership $value): void {
        $this->getBackingStore()->set('registeringUsers', $value);
    }

}
