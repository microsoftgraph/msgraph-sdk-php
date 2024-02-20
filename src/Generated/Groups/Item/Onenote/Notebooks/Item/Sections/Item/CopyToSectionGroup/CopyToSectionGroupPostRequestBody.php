<?php

namespace Microsoft\Graph\Generated\Groups\Item\Onenote\Notebooks\Item\Sections\Item\CopyToSectionGroup;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CopyToSectionGroupPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CopyToSectionGroupPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopyToSectionGroupPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopyToSectionGroupPostRequestBody {
        return new CopyToSectionGroupPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
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
        $val = $this->getBackingStore()->get('groupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupId'");
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the renameAs property value. The renameAs property
     * @return string|null
    */
    public function getRenameAs(): ?string {
        $val = $this->getBackingStore()->get('renameAs');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'renameAs'");
    }

    /**
     * Gets the siteCollectionId property value. The siteCollectionId property
     * @return string|null
    */
    public function getSiteCollectionId(): ?string {
        $val = $this->getBackingStore()->get('siteCollectionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteCollectionId'");
    }

    /**
     * Gets the siteId property value. The siteId property
     * @return string|null
    */
    public function getSiteId(): ?string {
        $val = $this->getBackingStore()->get('siteId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('renameAs', $this->getRenameAs());
        $writer->writeStringValue('siteCollectionId', $this->getSiteCollectionId());
        $writer->writeStringValue('siteId', $this->getSiteId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
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
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
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
