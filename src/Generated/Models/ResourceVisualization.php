<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ResourceVisualization implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ResourceVisualization and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResourceVisualization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResourceVisualization {
        return new ResourceVisualization();
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
     * Gets the containerDisplayName property value. A string describing where the item is stored. For example, the name of a SharePoint site or the user name identifying the owner of the OneDrive storing the item.
     * @return string|null
    */
    public function getContainerDisplayName(): ?string {
        $val = $this->getBackingStore()->get('containerDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containerDisplayName'");
    }

    /**
     * Gets the containerType property value. Can be used for filtering by the type of container in which the file is stored. Such as Site or OneDriveBusiness.
     * @return string|null
    */
    public function getContainerType(): ?string {
        $val = $this->getBackingStore()->get('containerType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containerType'");
    }

    /**
     * Gets the containerWebUrl property value. A path leading to the folder in which the item is stored.
     * @return string|null
    */
    public function getContainerWebUrl(): ?string {
        $val = $this->getBackingStore()->get('containerWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containerWebUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'containerDisplayName' => fn(ParseNode $n) => $o->setContainerDisplayName($n->getStringValue()),
            'containerType' => fn(ParseNode $n) => $o->setContainerType($n->getStringValue()),
            'containerWebUrl' => fn(ParseNode $n) => $o->setContainerWebUrl($n->getStringValue()),
            'mediaType' => fn(ParseNode $n) => $o->setMediaType($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'previewImageUrl' => fn(ParseNode $n) => $o->setPreviewImageUrl($n->getStringValue()),
            'previewText' => fn(ParseNode $n) => $o->setPreviewText($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the mediaType property value. The item's media type. Can be used for filtering for a specific type of file based on supported IANA Media Mime Types. Not all Media Mime Types are supported.
     * @return string|null
    */
    public function getMediaType(): ?string {
        $val = $this->getBackingStore()->get('mediaType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaType'");
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
     * Gets the previewImageUrl property value. A URL leading to the preview image for the item.
     * @return string|null
    */
    public function getPreviewImageUrl(): ?string {
        $val = $this->getBackingStore()->get('previewImageUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previewImageUrl'");
    }

    /**
     * Gets the previewText property value. A preview text for the item.
     * @return string|null
    */
    public function getPreviewText(): ?string {
        $val = $this->getBackingStore()->get('previewText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previewText'");
    }

    /**
     * Gets the title property value. The item's title text.
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Gets the type property value. The item's media type. Can be used for filtering for a specific file based on a specific type. See the section Type property values for supported types.
     * @return string|null
    */
    public function getType(): ?string {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('containerDisplayName', $this->getContainerDisplayName());
        $writer->writeStringValue('containerType', $this->getContainerType());
        $writer->writeStringValue('containerWebUrl', $this->getContainerWebUrl());
        $writer->writeStringValue('mediaType', $this->getMediaType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('previewImageUrl', $this->getPreviewImageUrl());
        $writer->writeStringValue('previewText', $this->getPreviewText());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('type', $this->getType());
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
     * Sets the containerDisplayName property value. A string describing where the item is stored. For example, the name of a SharePoint site or the user name identifying the owner of the OneDrive storing the item.
     * @param string|null $value Value to set for the containerDisplayName property.
    */
    public function setContainerDisplayName(?string $value): void {
        $this->getBackingStore()->set('containerDisplayName', $value);
    }

    /**
     * Sets the containerType property value. Can be used for filtering by the type of container in which the file is stored. Such as Site or OneDriveBusiness.
     * @param string|null $value Value to set for the containerType property.
    */
    public function setContainerType(?string $value): void {
        $this->getBackingStore()->set('containerType', $value);
    }

    /**
     * Sets the containerWebUrl property value. A path leading to the folder in which the item is stored.
     * @param string|null $value Value to set for the containerWebUrl property.
    */
    public function setContainerWebUrl(?string $value): void {
        $this->getBackingStore()->set('containerWebUrl', $value);
    }

    /**
     * Sets the mediaType property value. The item's media type. Can be used for filtering for a specific type of file based on supported IANA Media Mime Types. Not all Media Mime Types are supported.
     * @param string|null $value Value to set for the mediaType property.
    */
    public function setMediaType(?string $value): void {
        $this->getBackingStore()->set('mediaType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the previewImageUrl property value. A URL leading to the preview image for the item.
     * @param string|null $value Value to set for the previewImageUrl property.
    */
    public function setPreviewImageUrl(?string $value): void {
        $this->getBackingStore()->set('previewImageUrl', $value);
    }

    /**
     * Sets the previewText property value. A preview text for the item.
     * @param string|null $value Value to set for the previewText property.
    */
    public function setPreviewText(?string $value): void {
        $this->getBackingStore()->set('previewText', $value);
    }

    /**
     * Sets the title property value. The item's title text.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

    /**
     * Sets the type property value. The item's media type. Can be used for filtering for a specific file based on a specific type. See the section Type property values for supported types.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
