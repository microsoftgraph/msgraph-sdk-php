<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ListInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new listInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListInfo {
        return new ListInfo();
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
     * Gets the contentTypesEnabled property value. If true, indicates that content types are enabled for this list.
     * @return bool|null
    */
    public function getContentTypesEnabled(): ?bool {
        return $this->getBackingStore()->get('contentTypesEnabled');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentTypesEnabled' => fn(ParseNode $n) => $o->setContentTypesEnabled($n->getBooleanValue()),
            'hidden' => fn(ParseNode $n) => $o->setHidden($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'template' => fn(ParseNode $n) => $o->setTemplate($n->getStringValue()),
        ];
    }

    /**
     * Gets the hidden property value. If true, indicates that the list is not normally visible in the SharePoint user experience.
     * @return bool|null
    */
    public function getHidden(): ?bool {
        return $this->getBackingStore()->get('hidden');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the template property value. An enumerated value that represents the base list template used in creating the list. Possible values include documentLibrary, genericList, task, survey, announcements, contacts, and more.
     * @return string|null
    */
    public function getTemplate(): ?string {
        return $this->getBackingStore()->get('template');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('contentTypesEnabled', $this->getContentTypesEnabled());
        $writer->writeBooleanValue('hidden', $this->getHidden());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('template', $this->getTemplate());
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
     * Sets the contentTypesEnabled property value. If true, indicates that content types are enabled for this list.
     *  @param bool|null $value Value to set for the contentTypesEnabled property.
    */
    public function setContentTypesEnabled(?bool $value): void {
        $this->getBackingStore()->set('contentTypesEnabled', $value);
    }

    /**
     * Sets the hidden property value. If true, indicates that the list is not normally visible in the SharePoint user experience.
     *  @param bool|null $value Value to set for the hidden property.
    */
    public function setHidden(?bool $value): void {
        $this->getBackingStore()->set('hidden', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the template property value. An enumerated value that represents the base list template used in creating the list. Possible values include documentLibrary, genericList, task, survey, announcements, contacts, and more.
     *  @param string|null $value Value to set for the template property.
    */
    public function setTemplate(?string $value): void {
        $this->getBackingStore()->set('template', $value);
    }

}
