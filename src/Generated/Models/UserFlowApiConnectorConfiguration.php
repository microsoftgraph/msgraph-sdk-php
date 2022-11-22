<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UserFlowApiConnectorConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new userFlowApiConnectorConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserFlowApiConnectorConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserFlowApiConnectorConfiguration {
        return new UserFlowApiConnectorConfiguration();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'postAttributeCollection' => fn(ParseNode $n) => $o->setPostAttributeCollection($n->getObjectValue([IdentityApiConnector::class, 'createFromDiscriminatorValue'])),
            'postFederationSignup' => fn(ParseNode $n) => $o->setPostFederationSignup($n->getObjectValue([IdentityApiConnector::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the postAttributeCollection property value. The postAttributeCollection property
     * @return IdentityApiConnector|null
    */
    public function getPostAttributeCollection(): ?IdentityApiConnector {
        return $this->getBackingStore()->get('postAttributeCollection');
    }

    /**
     * Gets the postFederationSignup property value. The postFederationSignup property
     * @return IdentityApiConnector|null
    */
    public function getPostFederationSignup(): ?IdentityApiConnector {
        return $this->getBackingStore()->get('postFederationSignup');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('postAttributeCollection', $this->getPostAttributeCollection());
        $writer->writeObjectValue('postFederationSignup', $this->getPostFederationSignup());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the postAttributeCollection property value. The postAttributeCollection property
     *  @param IdentityApiConnector|null $value Value to set for the postAttributeCollection property.
    */
    public function setPostAttributeCollection(?IdentityApiConnector $value): void {
        $this->getBackingStore()->set('postAttributeCollection', $value);
    }

    /**
     * Sets the postFederationSignup property value. The postFederationSignup property
     *  @param IdentityApiConnector|null $value Value to set for the postFederationSignup property.
    */
    public function setPostFederationSignup(?IdentityApiConnector $value): void {
        $this->getBackingStore()->set('postFederationSignup', $value);
    }

}
