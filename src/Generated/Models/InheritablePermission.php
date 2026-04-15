<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class InheritablePermission implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new InheritablePermission and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InheritablePermission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InheritablePermission {
        return new InheritablePermission();
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
            'inheritableScopes' => fn(ParseNode $n) => $o->setInheritableScopes($n->getObjectValue([InheritableScopes::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resourceAppId' => fn(ParseNode $n) => $o->setResourceAppId($n->getStringValue()),
        ];
    }

    /**
     * Gets the inheritableScopes property value. Inheritance configuration for delegated permission scopes published by the resource application. Supports three patterns: allAllowedScopes (inherit all available scopes), enumeratedScopes (inherit only the listed scopes), and noScopes (inherit none). Each pattern exposes a kind discriminator for filtering.
     * @return InheritableScopes|null
    */
    public function getInheritableScopes(): ?InheritableScopes {
        $val = $this->getBackingStore()->get('inheritableScopes');
        if (is_null($val) || $val instanceof InheritableScopes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inheritableScopes'");
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
     * Gets the resourceAppId property value. The appId of the resource application that publishes these scopes. Primary key.
     * @return string|null
    */
    public function getResourceAppId(): ?string {
        $val = $this->getBackingStore()->get('resourceAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceAppId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('inheritableScopes', $this->getInheritableScopes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('resourceAppId', $this->getResourceAppId());
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
     * Sets the inheritableScopes property value. Inheritance configuration for delegated permission scopes published by the resource application. Supports three patterns: allAllowedScopes (inherit all available scopes), enumeratedScopes (inherit only the listed scopes), and noScopes (inherit none). Each pattern exposes a kind discriminator for filtering.
     * @param InheritableScopes|null $value Value to set for the inheritableScopes property.
    */
    public function setInheritableScopes(?InheritableScopes $value): void {
        $this->getBackingStore()->set('inheritableScopes', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resourceAppId property value. The appId of the resource application that publishes these scopes. Primary key.
     * @param string|null $value Value to set for the resourceAppId property.
    */
    public function setResourceAppId(?string $value): void {
        $this->getBackingStore()->set('resourceAppId', $value);
    }

}
