<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoveryAddToReviewSetOperation extends CaseOperation implements Parsable 
{
    /**
     * Instantiates a new EdiscoveryAddToReviewSetOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryAddToReviewSetOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryAddToReviewSetOperation {
        return new EdiscoveryAddToReviewSetOperation();
    }

    /**
     * Gets the additionalDataOptions property value. The additionalDataOptions property
     * @return AdditionalDataOptions|null
    */
    public function getAdditionalDataOptions(): ?AdditionalDataOptions {
        $val = $this->getBackingStore()->get('additionalDataOptions');
        if (is_null($val) || $val instanceof AdditionalDataOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalDataOptions'");
    }

    /**
     * Gets the cloudAttachmentVersion property value. The cloudAttachmentVersion property
     * @return CloudAttachmentVersion|null
    */
    public function getCloudAttachmentVersion(): ?CloudAttachmentVersion {
        $val = $this->getBackingStore()->get('cloudAttachmentVersion');
        if (is_null($val) || $val instanceof CloudAttachmentVersion) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudAttachmentVersion'");
    }

    /**
     * Gets the documentVersion property value. The documentVersion property
     * @return DocumentVersion|null
    */
    public function getDocumentVersion(): ?DocumentVersion {
        $val = $this->getBackingStore()->get('documentVersion');
        if (is_null($val) || $val instanceof DocumentVersion) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documentVersion'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalDataOptions' => fn(ParseNode $n) => $o->setAdditionalDataOptions($n->getEnumValue(AdditionalDataOptions::class)),
            'cloudAttachmentVersion' => fn(ParseNode $n) => $o->setCloudAttachmentVersion($n->getEnumValue(CloudAttachmentVersion::class)),
            'documentVersion' => fn(ParseNode $n) => $o->setDocumentVersion($n->getEnumValue(DocumentVersion::class)),
            'itemsToInclude' => fn(ParseNode $n) => $o->setItemsToInclude($n->getEnumValue(ItemsToInclude::class)),
            'reviewSet' => fn(ParseNode $n) => $o->setReviewSet($n->getObjectValue([EdiscoveryReviewSet::class, 'createFromDiscriminatorValue'])),
            'search' => fn(ParseNode $n) => $o->setSearch($n->getObjectValue([EdiscoverySearch::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the itemsToInclude property value. The itemsToInclude property
     * @return ItemsToInclude|null
    */
    public function getItemsToInclude(): ?ItemsToInclude {
        $val = $this->getBackingStore()->get('itemsToInclude');
        if (is_null($val) || $val instanceof ItemsToInclude) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemsToInclude'");
    }

    /**
     * Gets the reviewSet property value. eDiscovery review set to which items matching source collection query gets added.
     * @return EdiscoveryReviewSet|null
    */
    public function getReviewSet(): ?EdiscoveryReviewSet {
        $val = $this->getBackingStore()->get('reviewSet');
        if (is_null($val) || $val instanceof EdiscoveryReviewSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewSet'");
    }

    /**
     * Gets the search property value. eDiscovery search that gets added to review set.
     * @return EdiscoverySearch|null
    */
    public function getSearch(): ?EdiscoverySearch {
        $val = $this->getBackingStore()->get('search');
        if (is_null($val) || $val instanceof EdiscoverySearch) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'search'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('additionalDataOptions', $this->getAdditionalDataOptions());
        $writer->writeEnumValue('cloudAttachmentVersion', $this->getCloudAttachmentVersion());
        $writer->writeEnumValue('documentVersion', $this->getDocumentVersion());
        $writer->writeEnumValue('itemsToInclude', $this->getItemsToInclude());
        $writer->writeObjectValue('reviewSet', $this->getReviewSet());
        $writer->writeObjectValue('search', $this->getSearch());
    }

    /**
     * Sets the additionalDataOptions property value. The additionalDataOptions property
     * @param AdditionalDataOptions|null $value Value to set for the additionalDataOptions property.
    */
    public function setAdditionalDataOptions(?AdditionalDataOptions $value): void {
        $this->getBackingStore()->set('additionalDataOptions', $value);
    }

    /**
     * Sets the cloudAttachmentVersion property value. The cloudAttachmentVersion property
     * @param CloudAttachmentVersion|null $value Value to set for the cloudAttachmentVersion property.
    */
    public function setCloudAttachmentVersion(?CloudAttachmentVersion $value): void {
        $this->getBackingStore()->set('cloudAttachmentVersion', $value);
    }

    /**
     * Sets the documentVersion property value. The documentVersion property
     * @param DocumentVersion|null $value Value to set for the documentVersion property.
    */
    public function setDocumentVersion(?DocumentVersion $value): void {
        $this->getBackingStore()->set('documentVersion', $value);
    }

    /**
     * Sets the itemsToInclude property value. The itemsToInclude property
     * @param ItemsToInclude|null $value Value to set for the itemsToInclude property.
    */
    public function setItemsToInclude(?ItemsToInclude $value): void {
        $this->getBackingStore()->set('itemsToInclude', $value);
    }

    /**
     * Sets the reviewSet property value. eDiscovery review set to which items matching source collection query gets added.
     * @param EdiscoveryReviewSet|null $value Value to set for the reviewSet property.
    */
    public function setReviewSet(?EdiscoveryReviewSet $value): void {
        $this->getBackingStore()->set('reviewSet', $value);
    }

    /**
     * Sets the search property value. eDiscovery search that gets added to review set.
     * @param EdiscoverySearch|null $value Value to set for the search property.
    */
    public function setSearch(?EdiscoverySearch $value): void {
        $this->getBackingStore()->set('search', $value);
    }

}
