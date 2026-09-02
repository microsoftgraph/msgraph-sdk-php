<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class M365CapabilityInboundAccess implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new M365CapabilityInboundAccess and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return M365CapabilityInboundAccess
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): M365CapabilityInboundAccess {
        return new M365CapabilityInboundAccess();
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
            'isAllowed' => fn(ParseNode $n) => $o->setIsAllowed($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resourceScopes' => fn(ParseNode $n) => $o->setResourceScopes($n->getObjectValue([M365CapabilityResourceScopes::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isAllowed property value. Indicates whether this capability should be allowed or blocked for inbound access.
     * @return bool|null
    */
    public function getIsAllowed(): ?bool {
        $val = $this->getBackingStore()->get('isAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAllowed'");
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
     * Gets the resourceScopes property value. Specifies the included and excluded resource scopes for the capability.
     * @return M365CapabilityResourceScopes|null
    */
    public function getResourceScopes(): ?M365CapabilityResourceScopes {
        $val = $this->getBackingStore()->get('resourceScopes');
        if (is_null($val) || $val instanceof M365CapabilityResourceScopes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceScopes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isAllowed', $this->getIsAllowed());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('resourceScopes', $this->getResourceScopes());
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
     * Sets the isAllowed property value. Indicates whether this capability should be allowed or blocked for inbound access.
     * @param bool|null $value Value to set for the isAllowed property.
    */
    public function setIsAllowed(?bool $value): void {
        $this->getBackingStore()->set('isAllowed', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resourceScopes property value. Specifies the included and excluded resource scopes for the capability.
     * @param M365CapabilityResourceScopes|null $value Value to set for the resourceScopes property.
    */
    public function setResourceScopes(?M365CapabilityResourceScopes $value): void {
        $this->getBackingStore()->set('resourceScopes', $value);
    }

}
