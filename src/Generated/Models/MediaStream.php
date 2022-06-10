<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MediaStream implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var MediaDirection|null $direction The direction. The possible values are inactive, sendOnly, receiveOnly, sendReceive.
    */
    private ?MediaDirection $direction = null;
    
    /**
     * @var string|null $label The media stream label.
    */
    private ?string $label = null;
    
    /**
     * @var Modality|null $mediaType The media type. The possible value are unknown, audio, video, videoBasedScreenSharing, data.
    */
    private ?Modality $mediaType = null;
    
    /**
     * @var bool|null $serverMuted Indicates whether the media is muted by the server.
    */
    private ?bool $serverMuted = null;
    
    /**
     * @var string|null $sourceId The source ID.
    */
    private ?string $sourceId = null;
    
    /**
     * Instantiates a new mediaStream and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaStream
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaStream {
        return new MediaStream();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the direction property value. The direction. The possible values are inactive, sendOnly, receiveOnly, sendReceive.
     * @return MediaDirection|null
    */
    public function getDirection(): ?MediaDirection {
        return $this->direction;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'direction' => function (ParseNode $n) use ($o) { $o->setDirection($n->getEnumValue(MediaDirection::class)); },
            'label' => function (ParseNode $n) use ($o) { $o->setLabel($n->getStringValue()); },
            'mediaType' => function (ParseNode $n) use ($o) { $o->setMediaType($n->getEnumValue(Modality::class)); },
            'serverMuted' => function (ParseNode $n) use ($o) { $o->setServerMuted($n->getBooleanValue()); },
            'sourceId' => function (ParseNode $n) use ($o) { $o->setSourceId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the label property value. The media stream label.
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the mediaType property value. The media type. The possible value are unknown, audio, video, videoBasedScreenSharing, data.
     * @return Modality|null
    */
    public function getMediaType(): ?Modality {
        return $this->mediaType;
    }

    /**
     * Gets the serverMuted property value. Indicates whether the media is muted by the server.
     * @return bool|null
    */
    public function getServerMuted(): ?bool {
        return $this->serverMuted;
    }

    /**
     * Gets the sourceId property value. The source ID.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('direction', $this->direction);
        $writer->writeStringValue('label', $this->label);
        $writer->writeEnumValue('mediaType', $this->mediaType);
        $writer->writeBooleanValue('serverMuted', $this->serverMuted);
        $writer->writeStringValue('sourceId', $this->sourceId);
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
     * Sets the direction property value. The direction. The possible values are inactive, sendOnly, receiveOnly, sendReceive.
     *  @param MediaDirection|null $value Value to set for the direction property.
    */
    public function setDirection(?MediaDirection $value ): void {
        $this->direction = $value;
    }

    /**
     * Sets the label property value. The media stream label.
     *  @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value ): void {
        $this->label = $value;
    }

    /**
     * Sets the mediaType property value. The media type. The possible value are unknown, audio, video, videoBasedScreenSharing, data.
     *  @param Modality|null $value Value to set for the mediaType property.
    */
    public function setMediaType(?Modality $value ): void {
        $this->mediaType = $value;
    }

    /**
     * Sets the serverMuted property value. Indicates whether the media is muted by the server.
     *  @param bool|null $value Value to set for the serverMuted property.
    */
    public function setServerMuted(?bool $value ): void {
        $this->serverMuted = $value;
    }

    /**
     * Sets the sourceId property value. The source ID.
     *  @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value ): void {
        $this->sourceId = $value;
    }

}
