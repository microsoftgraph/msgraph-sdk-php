<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DelegatedAdminAccessContainer implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new delegatedAdminAccessContainer and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminAccessContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminAccessContainer {
        return new DelegatedAdminAccessContainer();
    }

    /**
     * Gets the accessContainerId property value. 
     * @return string|null
    */
    public function getAccessContainerId(): ?string {
        return $this->getBackingStore()->get('accessContainerId');
    }

    /**
     * Gets the accessContainerType property value. 
     * @return DelegatedAdminAccessContainerType|null
    */
    public function getAccessContainerType(): ?DelegatedAdminAccessContainerType {
        return $this->getBackingStore()->get('accessContainerType');
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
            'accessContainerId' => fn(ParseNode $n) => $o->setAccessContainerId($n->getStringValue()),
            'accessContainerType' => fn(ParseNode $n) => $o->setAccessContainerType($n->getEnumValue(DelegatedAdminAccessContainerType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. 
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
        $writer->writeStringValue('accessContainerId', $this->getAccessContainerId());
        $writer->writeEnumValue('accessContainerType', $this->getAccessContainerType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessContainerId property value. 
     * @param string|null $value Value to set for the accessContainerId property.
    */
    public function setAccessContainerId(?string $value): void {
        $this->getBackingStore()->set('accessContainerId', $value);
    }

    /**
     * Sets the accessContainerType property value. 
     * @param DelegatedAdminAccessContainerType|null $value Value to set for the accessContainerType property.
    */
    public function setAccessContainerType(?DelegatedAdminAccessContainerType $value): void {
        $this->getBackingStore()->set('accessContainerType', $value);
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
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
