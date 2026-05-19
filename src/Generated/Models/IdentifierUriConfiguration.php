<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IdentifierUriConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IdentifierUriConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentifierUriConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentifierUriConfiguration {
        return new IdentifierUriConfiguration();
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
            'nonDefaultUriAddition' => fn(ParseNode $n) => $o->setNonDefaultUriAddition($n->getObjectValue([IdentifierUriRestriction::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'uriAdditionWithoutUniqueTenantIdentifier' => fn(ParseNode $n) => $o->setUriAdditionWithoutUniqueTenantIdentifier($n->getObjectValue([IdentifierUriRestriction::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the nonDefaultUriAddition property value. Block new identifier URIs for applications, unless they are the 'default' URI of the format api://{appId} or api://{tenantId}/{appId}.
     * @return IdentifierUriRestriction|null
    */
    public function getNonDefaultUriAddition(): ?IdentifierUriRestriction {
        $val = $this->getBackingStore()->get('nonDefaultUriAddition');
        if (is_null($val) || $val instanceof IdentifierUriRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nonDefaultUriAddition'");
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
     * Gets the uriAdditionWithoutUniqueTenantIdentifier property value. Block new identifier URIs for applications, unless they contain a unique tenant identifier like the tenant ID, appId (client ID), or verified domain. For example, api://{tenantId}/string, api://{appId}/string, {scheme}://string/{tenantId}, {scheme}://string/{appId}, https://{verified-domain.com}/path, {scheme}://{subdomain}.{verified-domain.com}/path.
     * @return IdentifierUriRestriction|null
    */
    public function getUriAdditionWithoutUniqueTenantIdentifier(): ?IdentifierUriRestriction {
        $val = $this->getBackingStore()->get('uriAdditionWithoutUniqueTenantIdentifier');
        if (is_null($val) || $val instanceof IdentifierUriRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uriAdditionWithoutUniqueTenantIdentifier'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('nonDefaultUriAddition', $this->getNonDefaultUriAddition());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('uriAdditionWithoutUniqueTenantIdentifier', $this->getUriAdditionWithoutUniqueTenantIdentifier());
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
     * Sets the nonDefaultUriAddition property value. Block new identifier URIs for applications, unless they are the 'default' URI of the format api://{appId} or api://{tenantId}/{appId}.
     * @param IdentifierUriRestriction|null $value Value to set for the nonDefaultUriAddition property.
    */
    public function setNonDefaultUriAddition(?IdentifierUriRestriction $value): void {
        $this->getBackingStore()->set('nonDefaultUriAddition', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the uriAdditionWithoutUniqueTenantIdentifier property value. Block new identifier URIs for applications, unless they contain a unique tenant identifier like the tenant ID, appId (client ID), or verified domain. For example, api://{tenantId}/string, api://{appId}/string, {scheme}://string/{tenantId}, {scheme}://string/{appId}, https://{verified-domain.com}/path, {scheme}://{subdomain}.{verified-domain.com}/path.
     * @param IdentifierUriRestriction|null $value Value to set for the uriAdditionWithoutUniqueTenantIdentifier property.
    */
    public function setUriAdditionWithoutUniqueTenantIdentifier(?IdentifierUriRestriction $value): void {
        $this->getBackingStore()->set('uriAdditionWithoutUniqueTenantIdentifier', $value);
    }

}
