<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ServiceUpdateMessageViewpoint implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new serviceUpdateMessageViewpoint and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.serviceUpdateMessageViewpoint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceUpdateMessageViewpoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceUpdateMessageViewpoint {
        return new ServiceUpdateMessageViewpoint();
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
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'isFavorited' => fn(ParseNode $n) => $o->setIsFavorited($n->getBooleanValue()),
            'isRead' => fn(ParseNode $n) => $o->setIsRead($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isArchived property value. Indicates whether the user archived the message.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        return $this->getBackingStore()->get('isArchived');
    }

    /**
     * Gets the isFavorited property value. Indicates whether the user marked the message as favorite.
     * @return bool|null
    */
    public function getIsFavorited(): ?bool {
        return $this->getBackingStore()->get('isFavorited');
    }

    /**
     * Gets the isRead property value. Indicates whether the user read the message.
     * @return bool|null
    */
    public function getIsRead(): ?bool {
        return $this->getBackingStore()->get('isRead');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeBooleanValue('isFavorited', $this->getIsFavorited());
        $writer->writeBooleanValue('isRead', $this->getIsRead());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the isArchived property value. Indicates whether the user archived the message.
     *  @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->getBackingStore()->set('isArchived', $value);
    }

    /**
     * Sets the isFavorited property value. Indicates whether the user marked the message as favorite.
     *  @param bool|null $value Value to set for the isFavorited property.
    */
    public function setIsFavorited(?bool $value): void {
        $this->getBackingStore()->set('isFavorited', $value);
    }

    /**
     * Sets the isRead property value. Indicates whether the user read the message.
     *  @param bool|null $value Value to set for the isRead property.
    */
    public function setIsRead(?bool $value): void {
        $this->getBackingStore()->set('isRead', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
