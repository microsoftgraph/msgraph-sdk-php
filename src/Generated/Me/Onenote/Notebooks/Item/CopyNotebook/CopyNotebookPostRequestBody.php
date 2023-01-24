<?php

namespace Microsoft\Graph\Generated\Me\Onenote\Notebooks\Item\CopyNotebook;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CopyNotebookPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new copyNotebookPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopyNotebookPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopyNotebookPostRequestBody {
        return new CopyNotebookPostRequestBody();
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
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'notebookFolder' => fn(ParseNode $n) => $o->setNotebookFolder($n->getStringValue()),
            'renameAs' => fn(ParseNode $n) => $o->setRenameAs($n->getStringValue()),
            'siteCollectionId' => fn(ParseNode $n) => $o->setSiteCollectionId($n->getStringValue()),
            'siteId' => fn(ParseNode $n) => $o->setSiteId($n->getStringValue()),
        ];
    }

    /**
     * Gets the groupId property value. The groupId property
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->getBackingStore()->get('groupId');
    }

    /**
     * Gets the notebookFolder property value. The notebookFolder property
     * @return string|null
    */
    public function getNotebookFolder(): ?string {
        return $this->getBackingStore()->get('notebookFolder');
    }

    /**
     * Gets the renameAs property value. The renameAs property
     * @return string|null
    */
    public function getRenameAs(): ?string {
        return $this->getBackingStore()->get('renameAs');
    }

    /**
     * Gets the siteCollectionId property value. The siteCollectionId property
     * @return string|null
    */
    public function getSiteCollectionId(): ?string {
        return $this->getBackingStore()->get('siteCollectionId');
    }

    /**
     * Gets the siteId property value. The siteId property
     * @return string|null
    */
    public function getSiteId(): ?string {
        return $this->getBackingStore()->get('siteId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeStringValue('notebookFolder', $this->getNotebookFolder());
        $writer->writeStringValue('renameAs', $this->getRenameAs());
        $writer->writeStringValue('siteCollectionId', $this->getSiteCollectionId());
        $writer->writeStringValue('siteId', $this->getSiteId());
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
     * Sets the groupId property value. The groupId property
     * @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

    /**
     * Sets the notebookFolder property value. The notebookFolder property
     * @param string|null $value Value to set for the notebookFolder property.
    */
    public function setNotebookFolder(?string $value): void {
        $this->getBackingStore()->set('notebookFolder', $value);
    }

    /**
     * Sets the renameAs property value. The renameAs property
     * @param string|null $value Value to set for the renameAs property.
    */
    public function setRenameAs(?string $value): void {
        $this->getBackingStore()->set('renameAs', $value);
    }

    /**
     * Sets the siteCollectionId property value. The siteCollectionId property
     * @param string|null $value Value to set for the siteCollectionId property.
    */
    public function setSiteCollectionId(?string $value): void {
        $this->getBackingStore()->set('siteCollectionId', $value);
    }

    /**
     * Sets the siteId property value. The siteId property
     * @param string|null $value Value to set for the siteId property.
    */
    public function setSiteId(?string $value): void {
        $this->getBackingStore()->set('siteId', $value);
    }

}
