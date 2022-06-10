<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResourceVisualization implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $containerDisplayName A string describing where the item is stored. For example, the name of a SharePoint site or the user name identifying the owner of the OneDrive storing the item.
    */
    private ?string $containerDisplayName = null;
    
    /**
     * @var string|null $containerType Can be used for filtering by the type of container in which the file is stored. Such as Site or OneDriveBusiness.
    */
    private ?string $containerType = null;
    
    /**
     * @var string|null $containerWebUrl A path leading to the folder in which the item is stored.
    */
    private ?string $containerWebUrl = null;
    
    /**
     * @var string|null $mediaType The item's media type. Can be used for filtering for a specific type of file based on supported IANA Media Mime Types. Note that not all Media Mime Types are supported.
    */
    private ?string $mediaType = null;
    
    /**
     * @var string|null $previewImageUrl A URL leading to the preview image for the item.
    */
    private ?string $previewImageUrl = null;
    
    /**
     * @var string|null $previewText A preview text for the item.
    */
    private ?string $previewText = null;
    
    /**
     * @var string|null $title The item's title text.
    */
    private ?string $title = null;
    
    /**
     * @var string|null $type The item's media type. Can be used for filtering for a specific file based on a specific type. See below for supported types.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new resourceVisualization and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the containerDisplayName property value. A string describing where the item is stored. For example, the name of a SharePoint site or the user name identifying the owner of the OneDrive storing the item.
     * @return string|null
    */
    public function getContainerDisplayName(): ?string {
        return $this->containerDisplayName;
    }

    /**
     * Gets the containerType property value. Can be used for filtering by the type of container in which the file is stored. Such as Site or OneDriveBusiness.
     * @return string|null
    */
    public function getContainerType(): ?string {
        return $this->containerType;
    }

    /**
     * Gets the containerWebUrl property value. A path leading to the folder in which the item is stored.
     * @return string|null
    */
    public function getContainerWebUrl(): ?string {
        return $this->containerWebUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'containerDisplayName' => function (ParseNode $n) use ($o) { $o->setContainerDisplayName($n->getStringValue()); },
            'containerType' => function (ParseNode $n) use ($o) { $o->setContainerType($n->getStringValue()); },
            'containerWebUrl' => function (ParseNode $n) use ($o) { $o->setContainerWebUrl($n->getStringValue()); },
            'mediaType' => function (ParseNode $n) use ($o) { $o->setMediaType($n->getStringValue()); },
            'previewImageUrl' => function (ParseNode $n) use ($o) { $o->setPreviewImageUrl($n->getStringValue()); },
            'previewText' => function (ParseNode $n) use ($o) { $o->setPreviewText($n->getStringValue()); },
            'title' => function (ParseNode $n) use ($o) { $o->setTitle($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the mediaType property value. The item's media type. Can be used for filtering for a specific type of file based on supported IANA Media Mime Types. Note that not all Media Mime Types are supported.
     * @return string|null
    */
    public function getMediaType(): ?string {
        return $this->mediaType;
    }

    /**
     * Gets the previewImageUrl property value. A URL leading to the preview image for the item.
     * @return string|null
    */
    public function getPreviewImageUrl(): ?string {
        return $this->previewImageUrl;
    }

    /**
     * Gets the previewText property value. A preview text for the item.
     * @return string|null
    */
    public function getPreviewText(): ?string {
        return $this->previewText;
    }

    /**
     * Gets the title property value. The item's title text.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the type property value. The item's media type. Can be used for filtering for a specific file based on a specific type. See below for supported types.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('containerDisplayName', $this->containerDisplayName);
        $writer->writeStringValue('containerType', $this->containerType);
        $writer->writeStringValue('containerWebUrl', $this->containerWebUrl);
        $writer->writeStringValue('mediaType', $this->mediaType);
        $writer->writeStringValue('previewImageUrl', $this->previewImageUrl);
        $writer->writeStringValue('previewText', $this->previewText);
        $writer->writeStringValue('title', $this->title);
        $writer->writeStringValue('type', $this->type);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the containerDisplayName property value. A string describing where the item is stored. For example, the name of a SharePoint site or the user name identifying the owner of the OneDrive storing the item.
     *  @param string|null $value Value to set for the containerDisplayName property.
    */
    public function setContainerDisplayName(?string $value ): void {
        $this->containerDisplayName = $value;
    }

    /**
     * Sets the containerType property value. Can be used for filtering by the type of container in which the file is stored. Such as Site or OneDriveBusiness.
     *  @param string|null $value Value to set for the containerType property.
    */
    public function setContainerType(?string $value ): void {
        $this->containerType = $value;
    }

    /**
     * Sets the containerWebUrl property value. A path leading to the folder in which the item is stored.
     *  @param string|null $value Value to set for the containerWebUrl property.
    */
    public function setContainerWebUrl(?string $value ): void {
        $this->containerWebUrl = $value;
    }

    /**
     * Sets the mediaType property value. The item's media type. Can be used for filtering for a specific type of file based on supported IANA Media Mime Types. Note that not all Media Mime Types are supported.
     *  @param string|null $value Value to set for the mediaType property.
    */
    public function setMediaType(?string $value ): void {
        $this->mediaType = $value;
    }

    /**
     * Sets the previewImageUrl property value. A URL leading to the preview image for the item.
     *  @param string|null $value Value to set for the previewImageUrl property.
    */
    public function setPreviewImageUrl(?string $value ): void {
        $this->previewImageUrl = $value;
    }

    /**
     * Sets the previewText property value. A preview text for the item.
     *  @param string|null $value Value to set for the previewText property.
    */
    public function setPreviewText(?string $value ): void {
        $this->previewText = $value;
    }

    /**
     * Sets the title property value. The item's title text.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

    /**
     * Sets the type property value. The item's media type. Can be used for filtering for a specific file based on a specific type. See below for supported types.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
