<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Video implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new video and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Video
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Video {
        return new Video();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the audioBitsPerSample property value. Number of audio bits per sample.
     * @return int|null
    */
    public function getAudioBitsPerSample(): ?int {
        return $this->getBackingStore()->get('audioBitsPerSample');
    }

    /**
     * Gets the audioChannels property value. Number of audio channels.
     * @return int|null
    */
    public function getAudioChannels(): ?int {
        return $this->getBackingStore()->get('audioChannels');
    }

    /**
     * Gets the audioFormat property value. Name of the audio format (AAC, MP3, etc.).
     * @return string|null
    */
    public function getAudioFormat(): ?string {
        return $this->getBackingStore()->get('audioFormat');
    }

    /**
     * Gets the audioSamplesPerSecond property value. Number of audio samples per second.
     * @return int|null
    */
    public function getAudioSamplesPerSecond(): ?int {
        return $this->getBackingStore()->get('audioSamplesPerSecond');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the bitrate property value. Bit rate of the video in bits per second.
     * @return int|null
    */
    public function getBitrate(): ?int {
        return $this->getBackingStore()->get('bitrate');
    }

    /**
     * Gets the duration property value. Duration of the file in milliseconds.
     * @return int|null
    */
    public function getDuration(): ?int {
        return $this->getBackingStore()->get('duration');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'audioBitsPerSample' => fn(ParseNode $n) => $o->setAudioBitsPerSample($n->getIntegerValue()),
            'audioChannels' => fn(ParseNode $n) => $o->setAudioChannels($n->getIntegerValue()),
            'audioFormat' => fn(ParseNode $n) => $o->setAudioFormat($n->getStringValue()),
            'audioSamplesPerSecond' => fn(ParseNode $n) => $o->setAudioSamplesPerSecond($n->getIntegerValue()),
            'bitrate' => fn(ParseNode $n) => $o->setBitrate($n->getIntegerValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getIntegerValue()),
            'fourCC' => fn(ParseNode $n) => $o->setFourCC($n->getStringValue()),
            'frameRate' => fn(ParseNode $n) => $o->setFrameRate($n->getFloatValue()),
            'height' => fn(ParseNode $n) => $o->setHeight($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the fourCC property value. 'Four character code' name of the video format.
     * @return string|null
    */
    public function getFourCC(): ?string {
        return $this->getBackingStore()->get('fourCC');
    }

    /**
     * Gets the frameRate property value. Frame rate of the video.
     * @return float|null
    */
    public function getFrameRate(): ?float {
        return $this->getBackingStore()->get('frameRate');
    }

    /**
     * Gets the height property value. Height of the video, in pixels.
     * @return int|null
    */
    public function getHeight(): ?int {
        return $this->getBackingStore()->get('height');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the width property value. Width of the video, in pixels.
     * @return int|null
    */
    public function getWidth(): ?int {
        return $this->getBackingStore()->get('width');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('audioBitsPerSample', $this->getAudioBitsPerSample());
        $writer->writeIntegerValue('audioChannels', $this->getAudioChannels());
        $writer->writeStringValue('audioFormat', $this->getAudioFormat());
        $writer->writeIntegerValue('audioSamplesPerSecond', $this->getAudioSamplesPerSecond());
        $writer->writeIntegerValue('bitrate', $this->getBitrate());
        $writer->writeIntegerValue('duration', $this->getDuration());
        $writer->writeStringValue('fourCC', $this->getFourCC());
        $writer->writeFloatValue('frameRate', $this->getFrameRate());
        $writer->writeIntegerValue('height', $this->getHeight());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('width', $this->getWidth());
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
     * Sets the audioBitsPerSample property value. Number of audio bits per sample.
     * @param int|null $value Value to set for the audioBitsPerSample property.
    */
    public function setAudioBitsPerSample(?int $value): void {
        $this->getBackingStore()->set('audioBitsPerSample', $value);
    }

    /**
     * Sets the audioChannels property value. Number of audio channels.
     * @param int|null $value Value to set for the audioChannels property.
    */
    public function setAudioChannels(?int $value): void {
        $this->getBackingStore()->set('audioChannels', $value);
    }

    /**
     * Sets the audioFormat property value. Name of the audio format (AAC, MP3, etc.).
     * @param string|null $value Value to set for the audioFormat property.
    */
    public function setAudioFormat(?string $value): void {
        $this->getBackingStore()->set('audioFormat', $value);
    }

    /**
     * Sets the audioSamplesPerSecond property value. Number of audio samples per second.
     * @param int|null $value Value to set for the audioSamplesPerSecond property.
    */
    public function setAudioSamplesPerSecond(?int $value): void {
        $this->getBackingStore()->set('audioSamplesPerSecond', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the bitrate property value. Bit rate of the video in bits per second.
     * @param int|null $value Value to set for the bitrate property.
    */
    public function setBitrate(?int $value): void {
        $this->getBackingStore()->set('bitrate', $value);
    }

    /**
     * Sets the duration property value. Duration of the file in milliseconds.
     * @param int|null $value Value to set for the duration property.
    */
    public function setDuration(?int $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the fourCC property value. 'Four character code' name of the video format.
     * @param string|null $value Value to set for the fourCC property.
    */
    public function setFourCC(?string $value): void {
        $this->getBackingStore()->set('fourCC', $value);
    }

    /**
     * Sets the frameRate property value. Frame rate of the video.
     * @param float|null $value Value to set for the frameRate property.
    */
    public function setFrameRate(?float $value): void {
        $this->getBackingStore()->set('frameRate', $value);
    }

    /**
     * Sets the height property value. Height of the video, in pixels.
     * @param int|null $value Value to set for the height property.
    */
    public function setHeight(?int $value): void {
        $this->getBackingStore()->set('height', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the width property value. Width of the video, in pixels.
     * @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value): void {
        $this->getBackingStore()->set('width', $value);
    }

}
