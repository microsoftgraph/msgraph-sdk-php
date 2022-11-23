<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DocumentSet implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new documentSet and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DocumentSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DocumentSet {
        return new DocumentSet();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the allowedContentTypes property value. Content types allowed in document set.
     * @return array<ContentTypeInfo>|null
    */
    public function getAllowedContentTypes(): ?array {
        return $this->getBackingStore()->get('allowedContentTypes');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the defaultContents property value. Default contents of document set.
     * @return array<DocumentSetContent>|null
    */
    public function getDefaultContents(): ?array {
        return $this->getBackingStore()->get('defaultContents');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedContentTypes' => fn(ParseNode $n) => $o->setAllowedContentTypes($n->getCollectionOfObjectValues([ContentTypeInfo::class, 'createFromDiscriminatorValue'])),
            'defaultContents' => fn(ParseNode $n) => $o->setDefaultContents($n->getCollectionOfObjectValues([DocumentSetContent::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'propagateWelcomePageChanges' => fn(ParseNode $n) => $o->setPropagateWelcomePageChanges($n->getBooleanValue()),
            'sharedColumns' => fn(ParseNode $n) => $o->setSharedColumns($n->getCollectionOfObjectValues([ColumnDefinition::class, 'createFromDiscriminatorValue'])),
            'shouldPrefixNameToFile' => fn(ParseNode $n) => $o->setShouldPrefixNameToFile($n->getBooleanValue()),
            'welcomePageColumns' => fn(ParseNode $n) => $o->setWelcomePageColumns($n->getCollectionOfObjectValues([ColumnDefinition::class, 'createFromDiscriminatorValue'])),
            'welcomePageUrl' => fn(ParseNode $n) => $o->setWelcomePageUrl($n->getStringValue()),
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
     * Gets the propagateWelcomePageChanges property value. Specifies whether to push welcome page changes to inherited content types.
     * @return bool|null
    */
    public function getPropagateWelcomePageChanges(): ?bool {
        return $this->getBackingStore()->get('propagateWelcomePageChanges');
    }

    /**
     * Gets the sharedColumns property value. The sharedColumns property
     * @return array<ColumnDefinition>|null
    */
    public function getSharedColumns(): ?array {
        return $this->getBackingStore()->get('sharedColumns');
    }

    /**
     * Gets the shouldPrefixNameToFile property value. Indicates whether to add the name of the document set to each file name.
     * @return bool|null
    */
    public function getShouldPrefixNameToFile(): ?bool {
        return $this->getBackingStore()->get('shouldPrefixNameToFile');
    }

    /**
     * Gets the welcomePageColumns property value. The welcomePageColumns property
     * @return array<ColumnDefinition>|null
    */
    public function getWelcomePageColumns(): ?array {
        return $this->getBackingStore()->get('welcomePageColumns');
    }

    /**
     * Gets the welcomePageUrl property value. Welcome page absolute URL.
     * @return string|null
    */
    public function getWelcomePageUrl(): ?string {
        return $this->getBackingStore()->get('welcomePageUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('allowedContentTypes', $this->getAllowedContentTypes());
        $writer->writeCollectionOfObjectValues('defaultContents', $this->getDefaultContents());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('propagateWelcomePageChanges', $this->getPropagateWelcomePageChanges());
        $writer->writeCollectionOfObjectValues('sharedColumns', $this->getSharedColumns());
        $writer->writeBooleanValue('shouldPrefixNameToFile', $this->getShouldPrefixNameToFile());
        $writer->writeCollectionOfObjectValues('welcomePageColumns', $this->getWelcomePageColumns());
        $writer->writeStringValue('welcomePageUrl', $this->getWelcomePageUrl());
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
     * Sets the allowedContentTypes property value. Content types allowed in document set.
     *  @param array<ContentTypeInfo>|null $value Value to set for the allowedContentTypes property.
    */
    public function setAllowedContentTypes(?array $value): void {
        $this->getBackingStore()->set('allowedContentTypes', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the defaultContents property value. Default contents of document set.
     *  @param array<DocumentSetContent>|null $value Value to set for the defaultContents property.
    */
    public function setDefaultContents(?array $value): void {
        $this->getBackingStore()->set('defaultContents', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the propagateWelcomePageChanges property value. Specifies whether to push welcome page changes to inherited content types.
     *  @param bool|null $value Value to set for the propagateWelcomePageChanges property.
    */
    public function setPropagateWelcomePageChanges(?bool $value): void {
        $this->getBackingStore()->set('propagateWelcomePageChanges', $value);
    }

    /**
     * Sets the sharedColumns property value. The sharedColumns property
     *  @param array<ColumnDefinition>|null $value Value to set for the sharedColumns property.
    */
    public function setSharedColumns(?array $value): void {
        $this->getBackingStore()->set('sharedColumns', $value);
    }

    /**
     * Sets the shouldPrefixNameToFile property value. Indicates whether to add the name of the document set to each file name.
     *  @param bool|null $value Value to set for the shouldPrefixNameToFile property.
    */
    public function setShouldPrefixNameToFile(?bool $value): void {
        $this->getBackingStore()->set('shouldPrefixNameToFile', $value);
    }

    /**
     * Sets the welcomePageColumns property value. The welcomePageColumns property
     *  @param array<ColumnDefinition>|null $value Value to set for the welcomePageColumns property.
    */
    public function setWelcomePageColumns(?array $value): void {
        $this->getBackingStore()->set('welcomePageColumns', $value);
    }

    /**
     * Sets the welcomePageUrl property value. Welcome page absolute URL.
     *  @param string|null $value Value to set for the welcomePageUrl property.
    */
    public function setWelcomePageUrl(?string $value): void {
        $this->getBackingStore()->set('welcomePageUrl', $value);
    }

}
