<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ServerProcessedContent implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ServerProcessedContent and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServerProcessedContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServerProcessedContent {
        return new ServerProcessedContent();
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
            'htmlStrings' => fn(ParseNode $n) => $o->setHtmlStrings($n->getCollectionOfObjectValues([MetaDataKeyStringPair::class, 'createFromDiscriminatorValue'])),
            'imageSources' => fn(ParseNode $n) => $o->setImageSources($n->getCollectionOfObjectValues([MetaDataKeyStringPair::class, 'createFromDiscriminatorValue'])),
            'links' => fn(ParseNode $n) => $o->setLinks($n->getCollectionOfObjectValues([MetaDataKeyStringPair::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'searchablePlainTexts' => fn(ParseNode $n) => $o->setSearchablePlainTexts($n->getCollectionOfObjectValues([MetaDataKeyStringPair::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the htmlStrings property value. A key-value map where keys are string identifiers and values are rich text with HTML format. SharePoint servers treat the values as HTML content and run services like safety checks, search index and link fixup on them.
     * @return array<MetaDataKeyStringPair>|null
    */
    public function getHtmlStrings(): ?array {
        $val = $this->getBackingStore()->get('htmlStrings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MetaDataKeyStringPair::class);
            /** @var array<MetaDataKeyStringPair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'htmlStrings'");
    }

    /**
     * Gets the imageSources property value. A key-value map where keys are string identifiers and values are image sources. SharePoint servers treat the values as image sources and run services like search index and link fixup on them.
     * @return array<MetaDataKeyStringPair>|null
    */
    public function getImageSources(): ?array {
        $val = $this->getBackingStore()->get('imageSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MetaDataKeyStringPair::class);
            /** @var array<MetaDataKeyStringPair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageSources'");
    }

    /**
     * Gets the links property value. A key-value map where keys are string identifiers and values are links. SharePoint servers treat the values as links and run services like link fixup on them.
     * @return array<MetaDataKeyStringPair>|null
    */
    public function getLinks(): ?array {
        $val = $this->getBackingStore()->get('links');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MetaDataKeyStringPair::class);
            /** @var array<MetaDataKeyStringPair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'links'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the searchablePlainTexts property value. A key-value map where keys are string identifiers and values are strings that should be search indexed.
     * @return array<MetaDataKeyStringPair>|null
    */
    public function getSearchablePlainTexts(): ?array {
        $val = $this->getBackingStore()->get('searchablePlainTexts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MetaDataKeyStringPair::class);
            /** @var array<MetaDataKeyStringPair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'searchablePlainTexts'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('htmlStrings', $this->getHtmlStrings());
        $writer->writeCollectionOfObjectValues('imageSources', $this->getImageSources());
        $writer->writeCollectionOfObjectValues('links', $this->getLinks());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('searchablePlainTexts', $this->getSearchablePlainTexts());
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
     * Sets the htmlStrings property value. A key-value map where keys are string identifiers and values are rich text with HTML format. SharePoint servers treat the values as HTML content and run services like safety checks, search index and link fixup on them.
     * @param array<MetaDataKeyStringPair>|null $value Value to set for the htmlStrings property.
    */
    public function setHtmlStrings(?array $value): void {
        $this->getBackingStore()->set('htmlStrings', $value);
    }

    /**
     * Sets the imageSources property value. A key-value map where keys are string identifiers and values are image sources. SharePoint servers treat the values as image sources and run services like search index and link fixup on them.
     * @param array<MetaDataKeyStringPair>|null $value Value to set for the imageSources property.
    */
    public function setImageSources(?array $value): void {
        $this->getBackingStore()->set('imageSources', $value);
    }

    /**
     * Sets the links property value. A key-value map where keys are string identifiers and values are links. SharePoint servers treat the values as links and run services like link fixup on them.
     * @param array<MetaDataKeyStringPair>|null $value Value to set for the links property.
    */
    public function setLinks(?array $value): void {
        $this->getBackingStore()->set('links', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the searchablePlainTexts property value. A key-value map where keys are string identifiers and values are strings that should be search indexed.
     * @param array<MetaDataKeyStringPair>|null $value Value to set for the searchablePlainTexts property.
    */
    public function setSearchablePlainTexts(?array $value): void {
        $this->getBackingStore()->set('searchablePlainTexts', $value);
    }

}
