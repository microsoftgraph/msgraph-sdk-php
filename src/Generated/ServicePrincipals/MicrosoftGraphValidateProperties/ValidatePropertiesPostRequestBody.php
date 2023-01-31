<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\MicrosoftGraphValidateProperties;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ValidatePropertiesPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new validatePropertiesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidatePropertiesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ValidatePropertiesPostRequestBody {
        return new ValidatePropertiesPostRequestBody();
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
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the entityType property value. 
     * @return string|null
    */
    public function getEntityType(): ?string {
        return $this->getBackingStore()->get('entityType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'entityType' => fn(ParseNode $n) => $o->setEntityType($n->getStringValue()),
            'mailNickname' => fn(ParseNode $n) => $o->setMailNickname($n->getStringValue()),
            'onBehalfOfUserId' => fn(ParseNode $n) => $o->setOnBehalfOfUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the mailNickname property value. 
     * @return string|null
    */
    public function getMailNickname(): ?string {
        return $this->getBackingStore()->get('mailNickname');
    }

    /**
     * Gets the onBehalfOfUserId property value. 
     * @return string|null
    */
    public function getOnBehalfOfUserId(): ?string {
        return $this->getBackingStore()->get('onBehalfOfUserId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('entityType', $this->getEntityType());
        $writer->writeStringValue('mailNickname', $this->getMailNickname());
        $writer->writeStringValue('onBehalfOfUserId', $this->getOnBehalfOfUserId());
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
     * Sets the displayName property value. 
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the entityType property value. 
     * @param string|null $value Value to set for the entityType property.
    */
    public function setEntityType(?string $value): void {
        $this->getBackingStore()->set('entityType', $value);
    }

    /**
     * Sets the mailNickname property value. 
     * @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value): void {
        $this->getBackingStore()->set('mailNickname', $value);
    }

    /**
     * Sets the onBehalfOfUserId property value. 
     * @param string|null $value Value to set for the onBehalfOfUserId property.
    */
    public function setOnBehalfOfUserId(?string $value): void {
        $this->getBackingStore()->set('onBehalfOfUserId', $value);
    }

}
