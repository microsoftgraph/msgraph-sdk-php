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

class RequiredResourceAccess implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new requiredResourceAccess and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RequiredResourceAccess
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RequiredResourceAccess {
        return new RequiredResourceAccess();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resourceAccess' => fn(ParseNode $n) => $o->setResourceAccess($n->getCollectionOfObjectValues([ResourceAccess::class, 'createFromDiscriminatorValue'])),
            'resourceAppId' => fn(ParseNode $n) => $o->setResourceAppId($n->getStringValue()),
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
     * Gets the resourceAccess property value. The list of OAuth2.0 permission scopes and app roles that the application requires from the specified resource.
     * @return array<ResourceAccess>|null
    */
    public function getResourceAccess(): ?array {
        $val = $this->getBackingStore()->get('resourceAccess');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ResourceAccess::class);
            /** @var array<ResourceAccess>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceAccess'");
    }

    /**
     * Gets the resourceAppId property value. The unique identifier for the resource that the application requires access to. This should be equal to the appId declared on the target resource application.
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('resourceAccess', $this->getResourceAccess());
        $writer->writeStringValue('resourceAppId', $this->getResourceAppId());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resourceAccess property value. The list of OAuth2.0 permission scopes and app roles that the application requires from the specified resource.
     * @param array<ResourceAccess>|null $value Value to set for the resourceAccess property.
    */
    public function setResourceAccess(?array $value): void {
        $this->getBackingStore()->set('resourceAccess', $value);
    }

    /**
     * Sets the resourceAppId property value. The unique identifier for the resource that the application requires access to. This should be equal to the appId declared on the target resource application.
     * @param string|null $value Value to set for the resourceAppId property.
    */
    public function setResourceAppId(?string $value): void {
        $this->getBackingStore()->set('resourceAppId', $value);
    }

}
