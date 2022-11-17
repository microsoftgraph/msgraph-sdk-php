<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PersonOrGroupColumn implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new personOrGroupColumn and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.personOrGroupColumn');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersonOrGroupColumn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PersonOrGroupColumn {
        return new PersonOrGroupColumn();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the allowMultipleSelection property value. Indicates whether multiple values can be selected from the source.
     * @return bool|null
    */
    public function getAllowMultipleSelection(): ?bool {
        return $this->getBackingStore()->get('allowMultipleSelection');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the chooseFromType property value. Whether to allow selection of people only, or people and groups. Must be one of peopleAndGroups or peopleOnly.
     * @return string|null
    */
    public function getChooseFromType(): ?string {
        return $this->getBackingStore()->get('chooseFromType');
    }

    /**
     * Gets the displayAs property value. How to display the information about the person or group chosen. See below.
     * @return string|null
    */
    public function getDisplayAs(): ?string {
        return $this->getBackingStore()->get('displayAs');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowMultipleSelection' => fn(ParseNode $n) => $o->setAllowMultipleSelection($n->getBooleanValue()),
            'chooseFromType' => fn(ParseNode $n) => $o->setChooseFromType($n->getStringValue()),
            'displayAs' => fn(ParseNode $n) => $o->setDisplayAs($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowMultipleSelection', $this->getAllowMultipleSelection());
        $writer->writeStringValue('chooseFromType', $this->getChooseFromType());
        $writer->writeStringValue('displayAs', $this->getDisplayAs());
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
     * Sets the allowMultipleSelection property value. Indicates whether multiple values can be selected from the source.
     *  @param bool|null $value Value to set for the allowMultipleSelection property.
    */
    public function setAllowMultipleSelection(?bool $value): void {
        $this->getBackingStore()->set('allowMultipleSelection', $value);
    }

    /**
     * Sets the chooseFromType property value. Whether to allow selection of people only, or people and groups. Must be one of peopleAndGroups or peopleOnly.
     *  @param string|null $value Value to set for the chooseFromType property.
    */
    public function setChooseFromType(?string $value): void {
        $this->getBackingStore()->set('chooseFromType', $value);
    }

    /**
     * Sets the displayAs property value. How to display the information about the person or group chosen. See below.
     *  @param string|null $value Value to set for the displayAs property.
    */
    public function setDisplayAs(?string $value): void {
        $this->getBackingStore()->set('displayAs', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
