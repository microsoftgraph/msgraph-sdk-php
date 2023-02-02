<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IdentitySet implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new identitySet and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentitySet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentitySet {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.chatMessageFromIdentitySet': return new ChatMessageFromIdentitySet();
                case '#microsoft.graph.chatMessageMentionedIdentitySet': return new ChatMessageMentionedIdentitySet();
                case '#microsoft.graph.chatMessageReactionIdentitySet': return new ChatMessageReactionIdentitySet();
                case '#microsoft.graph.sharePointIdentitySet': return new SharePointIdentitySet();
            }
        }
        return new IdentitySet();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the application property value. Optional. The application associated with this action.
     * @return Identity|null
    */
    public function getApplication(): ?Identity {
        return $this->getBackingStore()->get('application');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the device property value. Optional. The device associated with this action.
     * @return Identity|null
    */
    public function getDevice(): ?Identity {
        return $this->getBackingStore()->get('device');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'application' => fn(ParseNode $n) => $o->setApplication($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'device' => fn(ParseNode $n) => $o->setDevice($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
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
     * Gets the user property value. Optional. The user associated with this action.
     * @return Identity|null
    */
    public function getUser(): ?Identity {
        return $this->getBackingStore()->get('user');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('application', $this->getApplication());
        $writer->writeObjectValue('device', $this->getDevice());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('user', $this->getUser());
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
     * Sets the application property value. Optional. The application associated with this action.
     * @param Identity|null $value Value to set for the application property.
    */
    public function setApplication(?Identity $value): void {
        $this->getBackingStore()->set('application', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the device property value. Optional. The device associated with this action.
     * @param Identity|null $value Value to set for the device property.
    */
    public function setDevice(?Identity $value): void {
        $this->getBackingStore()->set('device', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the user property value. Optional. The user associated with this action.
     * @param Identity|null $value Value to set for the user property.
    */
    public function setUser(?Identity $value): void {
        $this->getBackingStore()->set('user', $value);
    }

}
