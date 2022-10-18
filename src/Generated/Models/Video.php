<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Video implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $audioBitsPerSample Number of audio bits per sample.
    */
    private ?int $audioBitsPerSample = null;
    
    /**
     * @var int|null $audioChannels Number of audio channels.
    */
    private ?int $audioChannels = null;
    
    /**
     * @var string|null $audioFormat Name of the audio format (AAC, MP3, etc.).
    */
    private ?string $audioFormat = null;
    
    /**
     * @var int|null $audioSamplesPerSecond Number of audio samples per second.
    */
    private ?int $audioSamplesPerSecond = null;
    
    /**
     * @var int|null $bitrate Bit rate of the video in bits per second.
    */
    private ?int $bitrate = null;
    
    /**
     * @var int|null $duration Duration of the file in milliseconds.
    */
    private ?int $duration = null;
    
    /**
     * @var string|null $fourCC 'Four character code' name of the video format.
    */
    private ?string $fourCC = null;
    
    /**
     * @var float|null $frameRate Frame rate of the video.
    */
    private ?float $frameRate = null;
    
    /**
     * @var int|null $height Height of the video, in pixels.
    */
    private ?int $height = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $width Width of the video, in pixels.
    */
    private ?int $width = null;
    
    /**
     * Instantiates a new video and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.video');
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the audioBitsPerSample property value. Number of audio bits per sample.
     * @return int|null
    */
    public function getAudioBitsPerSample(): ?int {
        return $this->audioBitsPerSample;
    }

    /**
     * Gets the audioChannels property value. Number of audio channels.
     * @return int|null
    */
    public function getAudioChannels(): ?int {
        return $this->audioChannels;
    }

    /**
     * Gets the audioFormat property value. Name of the audio format (AAC, MP3, etc.).
     * @return string|null
    */
    public function getAudioFormat(): ?string {
        return $this->audioFormat;
    }

    /**
     * Gets the audioSamplesPerSecond property value. Number of audio samples per second.
     * @return int|null
    */
    public function getAudioSamplesPerSecond(): ?int {
        return $this->audioSamplesPerSecond;
    }

    /**
     * Gets the bitrate property value. Bit rate of the video in bits per second.
     * @return int|null
    */
    public function getBitrate(): ?int {
        return $this->bitrate;
    }

    /**
     * Gets the duration property value. Duration of the file in milliseconds.
     * @return int|null
    */
    public function getDuration(): ?int {
        return $this->duration;
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
        return $this->fourCC;
    }

    /**
     * Gets the frameRate property value. Frame rate of the video.
     * @return float|null
    */
    public function getFrameRate(): ?float {
        return $this->frameRate;
    }

    /**
     * Gets the height property value. Height of the video, in pixels.
     * @return int|null
    */
    public function getHeight(): ?int {
        return $this->height;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the width property value. Width of the video, in pixels.
     * @return int|null
    */
    public function getWidth(): ?int {
        return $this->width;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('audioBitsPerSample', $this->audioBitsPerSample);
        $writer->writeIntegerValue('audioChannels', $this->audioChannels);
        $writer->writeStringValue('audioFormat', $this->audioFormat);
        $writer->writeIntegerValue('audioSamplesPerSecond', $this->audioSamplesPerSecond);
        $writer->writeIntegerValue('bitrate', $this->bitrate);
        $writer->writeIntegerValue('duration', $this->duration);
        $writer->writeStringValue('fourCC', $this->fourCC);
        $writer->writeFloatValue('frameRate', $this->frameRate);
        $writer->writeIntegerValue('height', $this->height);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('width', $this->width);
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
     * Sets the audioBitsPerSample property value. Number of audio bits per sample.
     *  @param int|null $value Value to set for the audioBitsPerSample property.
    */
    public function setAudioBitsPerSample(?int $value ): void {
        $this->audioBitsPerSample = $value;
    }

    /**
     * Sets the audioChannels property value. Number of audio channels.
     *  @param int|null $value Value to set for the audioChannels property.
    */
    public function setAudioChannels(?int $value ): void {
        $this->audioChannels = $value;
    }

    /**
     * Sets the audioFormat property value. Name of the audio format (AAC, MP3, etc.).
     *  @param string|null $value Value to set for the audioFormat property.
    */
    public function setAudioFormat(?string $value ): void {
        $this->audioFormat = $value;
    }

    /**
     * Sets the audioSamplesPerSecond property value. Number of audio samples per second.
     *  @param int|null $value Value to set for the audioSamplesPerSecond property.
    */
    public function setAudioSamplesPerSecond(?int $value ): void {
        $this->audioSamplesPerSecond = $value;
    }

    /**
     * Sets the bitrate property value. Bit rate of the video in bits per second.
     *  @param int|null $value Value to set for the bitrate property.
    */
    public function setBitrate(?int $value ): void {
        $this->bitrate = $value;
    }

    /**
     * Sets the duration property value. Duration of the file in milliseconds.
     *  @param int|null $value Value to set for the duration property.
    */
    public function setDuration(?int $value ): void {
        $this->duration = $value;
    }

    /**
     * Sets the fourCC property value. 'Four character code' name of the video format.
     *  @param string|null $value Value to set for the fourCC property.
    */
    public function setFourCC(?string $value ): void {
        $this->fourCC = $value;
    }

    /**
     * Sets the frameRate property value. Frame rate of the video.
     *  @param float|null $value Value to set for the frameRate property.
    */
    public function setFrameRate(?float $value ): void {
        $this->frameRate = $value;
    }

    /**
     * Sets the height property value. Height of the video, in pixels.
     *  @param int|null $value Value to set for the height property.
    */
    public function setHeight(?int $value ): void {
        $this->height = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the width property value. Width of the video, in pixels.
     *  @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value ): void {
        $this->width = $value;
    }

}
