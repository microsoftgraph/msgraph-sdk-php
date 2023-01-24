<?php

namespace Microsoft\Graph\Generated\Organization\GetByIds;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class GetByIdsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new getByIdsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetByIdsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetByIdsPostRequestBody {
        return new GetByIdsPostRequestBody();
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
            'ids' => fn(ParseNode $n) => $o->setIds($n->getCollectionOfPrimitiveValues()),
            'types' => fn(ParseNode $n) => $o->setTypes($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the ids property value. The ids property
     * @return array<string>|null
    */
    public function getIds(): ?array {
        return $this->getBackingStore()->get('ids');
    }

    /**
     * Gets the types property value. The types property
     * @return array<string>|null
    */
    public function getTypes(): ?array {
        return $this->getBackingStore()->get('types');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('ids', $this->getIds());
        $writer->writeCollectionOfPrimitiveValues('types', $this->getTypes());
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
     * Sets the ids property value. The ids property
     * @param array<string>|null $value Value to set for the ids property.
    */
    public function setIds(?array $value): void {
        $this->getBackingStore()->set('ids', $value);
    }

    /**
     * Sets the types property value. The types property
     * @param array<string>|null $value Value to set for the types property.
    */
    public function setTypes(?array $value): void {
        $this->getBackingStore()->set('types', $value);
    }

}
