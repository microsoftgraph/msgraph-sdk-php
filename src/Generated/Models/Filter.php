<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Filter implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new filter and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Filter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Filter {
        return new Filter();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * Gets the categoryFilterGroups property value. The categoryFilterGroups property
     * @return array<FilterGroup>|null
    */
    public function getCategoryFilterGroups(): ?array {
        return $this->getBackingStore()->get('categoryFilterGroups');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categoryFilterGroups' => fn(ParseNode $n) => $o->setCategoryFilterGroups($n->getCollectionOfObjectValues([FilterGroup::class, 'createFromDiscriminatorValue'])),
            'groups' => fn(ParseNode $n) => $o->setGroups($n->getCollectionOfObjectValues([FilterGroup::class, 'createFromDiscriminatorValue'])),
            'inputFilterGroups' => fn(ParseNode $n) => $o->setInputFilterGroups($n->getCollectionOfObjectValues([FilterGroup::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the groups property value. The groups property
     * @return array<FilterGroup>|null
    */
    public function getGroups(): ?array {
        return $this->getBackingStore()->get('groups');
    }

    /**
     * Gets the inputFilterGroups property value. The inputFilterGroups property
     * @return array<FilterGroup>|null
    */
    public function getInputFilterGroups(): ?array {
        return $this->getBackingStore()->get('inputFilterGroups');
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
        $writer->writeCollectionOfObjectValues('categoryFilterGroups', $this->getCategoryFilterGroups());
        $writer->writeCollectionOfObjectValues('groups', $this->getGroups());
        $writer->writeCollectionOfObjectValues('inputFilterGroups', $this->getInputFilterGroups());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the categoryFilterGroups property value. The categoryFilterGroups property
     * @param array<FilterGroup>|null $value Value to set for the categoryFilterGroups property.
    */
    public function setCategoryFilterGroups(?array $value): void {
        $this->getBackingStore()->set('categoryFilterGroups', $value);
    }

    /**
     * Sets the groups property value. The groups property
     * @param array<FilterGroup>|null $value Value to set for the groups property.
    */
    public function setGroups(?array $value): void {
        $this->getBackingStore()->set('groups', $value);
    }

    /**
     * Sets the inputFilterGroups property value. The inputFilterGroups property
     * @param array<FilterGroup>|null $value Value to set for the inputFilterGroups property.
    */
    public function setInputFilterGroups(?array $value): void {
        $this->getBackingStore()->set('inputFilterGroups', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
