<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImageInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var bool|null $addImageQuery Optional; parameter used to indicate the server is able to render image dynamically in response to parameterization. For example – a high contrast image
    */
    private ?bool $addImageQuery = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $alternateText Optional; alt-text accessible content for the image
    */
    private ?string $alternateText = null;
    
    /**
     * @var string|null $alternativeText The alternativeText property
    */
    private ?string $alternativeText = null;
    
    /**
     * @var string|null $iconUrl Optional; URI that points to an icon which represents the application used to generate the activity
    */
    private ?string $iconUrl = null;
    
    /**
     * Instantiates a new imageInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImageInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImageInfo {
        return new ImageInfo();
    }

    /**
     * Gets the addImageQuery property value. Optional; parameter used to indicate the server is able to render image dynamically in response to parameterization. For example – a high contrast image
     * @return bool|null
    */
    public function getAddImageQuery(): ?bool {
        return $this->addImageQuery;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the alternateText property value. Optional; alt-text accessible content for the image
     * @return string|null
    */
    public function getAlternateText(): ?string {
        return $this->alternateText;
    }

    /**
     * Gets the alternativeText property value. The alternativeText property
     * @return string|null
    */
    public function getAlternativeText(): ?string {
        return $this->alternativeText;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'addImageQuery' => function (ParseNode $n) use ($o) { $o->setAddImageQuery($n->getBooleanValue()); },
            'alternateText' => function (ParseNode $n) use ($o) { $o->setAlternateText($n->getStringValue()); },
            'alternativeText' => function (ParseNode $n) use ($o) { $o->setAlternativeText($n->getStringValue()); },
            'iconUrl' => function (ParseNode $n) use ($o) { $o->setIconUrl($n->getStringValue()); },
        ];
    }

    /**
     * Gets the iconUrl property value. Optional; URI that points to an icon which represents the application used to generate the activity
     * @return string|null
    */
    public function getIconUrl(): ?string {
        return $this->iconUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('addImageQuery', $this->addImageQuery);
        $writer->writeStringValue('alternateText', $this->alternateText);
        $writer->writeStringValue('alternativeText', $this->alternativeText);
        $writer->writeStringValue('iconUrl', $this->iconUrl);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the addImageQuery property value. Optional; parameter used to indicate the server is able to render image dynamically in response to parameterization. For example – a high contrast image
     *  @param bool|null $value Value to set for the addImageQuery property.
    */
    public function setAddImageQuery(?bool $value ): void {
        $this->addImageQuery = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the alternateText property value. Optional; alt-text accessible content for the image
     *  @param string|null $value Value to set for the alternateText property.
    */
    public function setAlternateText(?string $value ): void {
        $this->alternateText = $value;
    }

    /**
     * Sets the alternativeText property value. The alternativeText property
     *  @param string|null $value Value to set for the alternativeText property.
    */
    public function setAlternativeText(?string $value ): void {
        $this->alternativeText = $value;
    }

    /**
     * Sets the iconUrl property value. Optional; URI that points to an icon which represents the application used to generate the activity
     *  @param string|null $value Value to set for the iconUrl property.
    */
    public function setIconUrl(?string $value ): void {
        $this->iconUrl = $value;
    }

}
