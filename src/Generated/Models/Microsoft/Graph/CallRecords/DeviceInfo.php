<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceInfo implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $captureDeviceDriver Name of the capture device driver used by the media endpoint. */
    private ?string $captureDeviceDriver = null;
    
    /** @var string|null $captureDeviceName Name of the capture device used by the media endpoint. */
    private ?string $captureDeviceName = null;
    
    /** @var float|null $captureNotFunctioningEventRatio Fraction of the call that the media endpoint detected the capture device was not working properly. */
    private ?float $captureNotFunctioningEventRatio = null;
    
    /** @var float|null $cpuInsufficentEventRatio Fraction of the call that the media endpoint detected the CPU resources available were insufficient and caused poor quality of the audio sent and received. */
    private ?float $cpuInsufficentEventRatio = null;
    
    /** @var float|null $deviceClippingEventRatio Fraction of the call that the media endpoint detected clipping in the captured audio that caused poor quality of the audio being sent. */
    private ?float $deviceClippingEventRatio = null;
    
    /** @var float|null $deviceGlitchEventRatio Fraction of the call that the media endpoint detected glitches or gaps in the audio played or captured that caused poor quality of the audio being sent or received. */
    private ?float $deviceGlitchEventRatio = null;
    
    /** @var int|null $howlingEventCount Number of times during the call that the media endpoint detected howling or screeching audio. */
    private ?int $howlingEventCount = null;
    
    /** @var float|null $initialSignalLevelRootMeanSquare The root mean square (RMS) of the incoming signal of up to the first 30 seconds of the call. */
    private ?float $initialSignalLevelRootMeanSquare = null;
    
    /** @var float|null $lowSpeechLevelEventRatio Fraction of the call that the media endpoint detected low speech level that caused poor quality of the audio being sent. */
    private ?float $lowSpeechLevelEventRatio = null;
    
    /** @var float|null $lowSpeechToNoiseEventRatio Fraction of the call that the media endpoint detected low speech to noise level that caused poor quality of the audio being sent. */
    private ?float $lowSpeechToNoiseEventRatio = null;
    
    /** @var float|null $micGlitchRate Glitches per 5 minute interval for the media endpoint's microphone. */
    private ?float $micGlitchRate = null;
    
    /** @var int|null $receivedNoiseLevel Average energy level of received audio for audio classified as mono noise or left channel of stereo noise by the media endpoint. */
    private ?int $receivedNoiseLevel = null;
    
    /** @var int|null $receivedSignalLevel Average energy level of received audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint. */
    private ?int $receivedSignalLevel = null;
    
    /** @var string|null $renderDeviceDriver Name of the render device driver used by the media endpoint. */
    private ?string $renderDeviceDriver = null;
    
    /** @var string|null $renderDeviceName Name of the render device used by the media endpoint. */
    private ?string $renderDeviceName = null;
    
    /** @var float|null $renderMuteEventRatio Fraction of the call that media endpoint detected device render is muted. */
    private ?float $renderMuteEventRatio = null;
    
    /** @var float|null $renderNotFunctioningEventRatio Fraction of the call that the media endpoint detected the render device was not working properly. */
    private ?float $renderNotFunctioningEventRatio = null;
    
    /** @var float|null $renderZeroVolumeEventRatio Fraction of the call that media endpoint detected device render volume is set to 0. */
    private ?float $renderZeroVolumeEventRatio = null;
    
    /** @var int|null $sentNoiseLevel Average energy level of sent audio for audio classified as mono noise or left channel of stereo noise by the media endpoint. */
    private ?int $sentNoiseLevel = null;
    
    /** @var int|null $sentSignalLevel Average energy level of sent audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint. */
    private ?int $sentSignalLevel = null;
    
    /** @var float|null $speakerGlitchRate Glitches per 5 minute internal for the media endpoint's loudspeaker. */
    private ?float $speakerGlitchRate = null;
    
    /**
     * Instantiates a new deviceInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceInfo
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceInfo {
        return new DeviceInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the captureDeviceDriver property value. Name of the capture device driver used by the media endpoint.
     * @return string|null
    */
    public function getCaptureDeviceDriver(): ?string {
        return $this->captureDeviceDriver;
    }

    /**
     * Gets the captureDeviceName property value. Name of the capture device used by the media endpoint.
     * @return string|null
    */
    public function getCaptureDeviceName(): ?string {
        return $this->captureDeviceName;
    }

    /**
     * Gets the captureNotFunctioningEventRatio property value. Fraction of the call that the media endpoint detected the capture device was not working properly.
     * @return float|null
    */
    public function getCaptureNotFunctioningEventRatio(): ?float {
        return $this->captureNotFunctioningEventRatio;
    }

    /**
     * Gets the cpuInsufficentEventRatio property value. Fraction of the call that the media endpoint detected the CPU resources available were insufficient and caused poor quality of the audio sent and received.
     * @return float|null
    */
    public function getCpuInsufficentEventRatio(): ?float {
        return $this->cpuInsufficentEventRatio;
    }

    /**
     * Gets the deviceClippingEventRatio property value. Fraction of the call that the media endpoint detected clipping in the captured audio that caused poor quality of the audio being sent.
     * @return float|null
    */
    public function getDeviceClippingEventRatio(): ?float {
        return $this->deviceClippingEventRatio;
    }

    /**
     * Gets the deviceGlitchEventRatio property value. Fraction of the call that the media endpoint detected glitches or gaps in the audio played or captured that caused poor quality of the audio being sent or received.
     * @return float|null
    */
    public function getDeviceGlitchEventRatio(): ?float {
        return $this->deviceGlitchEventRatio;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'captureDeviceDriver' => function (self $o, ParseNode $n) { $o->setCaptureDeviceDriver($n->getStringValue()); },
            'captureDeviceName' => function (self $o, ParseNode $n) { $o->setCaptureDeviceName($n->getStringValue()); },
            'captureNotFunctioningEventRatio' => function (self $o, ParseNode $n) { $o->setCaptureNotFunctioningEventRatio($n->getFloatValue()); },
            'cpuInsufficentEventRatio' => function (self $o, ParseNode $n) { $o->setCpuInsufficentEventRatio($n->getFloatValue()); },
            'deviceClippingEventRatio' => function (self $o, ParseNode $n) { $o->setDeviceClippingEventRatio($n->getFloatValue()); },
            'deviceGlitchEventRatio' => function (self $o, ParseNode $n) { $o->setDeviceGlitchEventRatio($n->getFloatValue()); },
            'howlingEventCount' => function (self $o, ParseNode $n) { $o->setHowlingEventCount($n->getIntegerValue()); },
            'initialSignalLevelRootMeanSquare' => function (self $o, ParseNode $n) { $o->setInitialSignalLevelRootMeanSquare($n->getFloatValue()); },
            'lowSpeechLevelEventRatio' => function (self $o, ParseNode $n) { $o->setLowSpeechLevelEventRatio($n->getFloatValue()); },
            'lowSpeechToNoiseEventRatio' => function (self $o, ParseNode $n) { $o->setLowSpeechToNoiseEventRatio($n->getFloatValue()); },
            'micGlitchRate' => function (self $o, ParseNode $n) { $o->setMicGlitchRate($n->getFloatValue()); },
            'receivedNoiseLevel' => function (self $o, ParseNode $n) { $o->setReceivedNoiseLevel($n->getIntegerValue()); },
            'receivedSignalLevel' => function (self $o, ParseNode $n) { $o->setReceivedSignalLevel($n->getIntegerValue()); },
            'renderDeviceDriver' => function (self $o, ParseNode $n) { $o->setRenderDeviceDriver($n->getStringValue()); },
            'renderDeviceName' => function (self $o, ParseNode $n) { $o->setRenderDeviceName($n->getStringValue()); },
            'renderMuteEventRatio' => function (self $o, ParseNode $n) { $o->setRenderMuteEventRatio($n->getFloatValue()); },
            'renderNotFunctioningEventRatio' => function (self $o, ParseNode $n) { $o->setRenderNotFunctioningEventRatio($n->getFloatValue()); },
            'renderZeroVolumeEventRatio' => function (self $o, ParseNode $n) { $o->setRenderZeroVolumeEventRatio($n->getFloatValue()); },
            'sentNoiseLevel' => function (self $o, ParseNode $n) { $o->setSentNoiseLevel($n->getIntegerValue()); },
            'sentSignalLevel' => function (self $o, ParseNode $n) { $o->setSentSignalLevel($n->getIntegerValue()); },
            'speakerGlitchRate' => function (self $o, ParseNode $n) { $o->setSpeakerGlitchRate($n->getFloatValue()); },
        ];
    }

    /**
     * Gets the howlingEventCount property value. Number of times during the call that the media endpoint detected howling or screeching audio.
     * @return int|null
    */
    public function getHowlingEventCount(): ?int {
        return $this->howlingEventCount;
    }

    /**
     * Gets the initialSignalLevelRootMeanSquare property value. The root mean square (RMS) of the incoming signal of up to the first 30 seconds of the call.
     * @return float|null
    */
    public function getInitialSignalLevelRootMeanSquare(): ?float {
        return $this->initialSignalLevelRootMeanSquare;
    }

    /**
     * Gets the lowSpeechLevelEventRatio property value. Fraction of the call that the media endpoint detected low speech level that caused poor quality of the audio being sent.
     * @return float|null
    */
    public function getLowSpeechLevelEventRatio(): ?float {
        return $this->lowSpeechLevelEventRatio;
    }

    /**
     * Gets the lowSpeechToNoiseEventRatio property value. Fraction of the call that the media endpoint detected low speech to noise level that caused poor quality of the audio being sent.
     * @return float|null
    */
    public function getLowSpeechToNoiseEventRatio(): ?float {
        return $this->lowSpeechToNoiseEventRatio;
    }

    /**
     * Gets the micGlitchRate property value. Glitches per 5 minute interval for the media endpoint's microphone.
     * @return float|null
    */
    public function getMicGlitchRate(): ?float {
        return $this->micGlitchRate;
    }

    /**
     * Gets the receivedNoiseLevel property value. Average energy level of received audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
     * @return int|null
    */
    public function getReceivedNoiseLevel(): ?int {
        return $this->receivedNoiseLevel;
    }

    /**
     * Gets the receivedSignalLevel property value. Average energy level of received audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
     * @return int|null
    */
    public function getReceivedSignalLevel(): ?int {
        return $this->receivedSignalLevel;
    }

    /**
     * Gets the renderDeviceDriver property value. Name of the render device driver used by the media endpoint.
     * @return string|null
    */
    public function getRenderDeviceDriver(): ?string {
        return $this->renderDeviceDriver;
    }

    /**
     * Gets the renderDeviceName property value. Name of the render device used by the media endpoint.
     * @return string|null
    */
    public function getRenderDeviceName(): ?string {
        return $this->renderDeviceName;
    }

    /**
     * Gets the renderMuteEventRatio property value. Fraction of the call that media endpoint detected device render is muted.
     * @return float|null
    */
    public function getRenderMuteEventRatio(): ?float {
        return $this->renderMuteEventRatio;
    }

    /**
     * Gets the renderNotFunctioningEventRatio property value. Fraction of the call that the media endpoint detected the render device was not working properly.
     * @return float|null
    */
    public function getRenderNotFunctioningEventRatio(): ?float {
        return $this->renderNotFunctioningEventRatio;
    }

    /**
     * Gets the renderZeroVolumeEventRatio property value. Fraction of the call that media endpoint detected device render volume is set to 0.
     * @return float|null
    */
    public function getRenderZeroVolumeEventRatio(): ?float {
        return $this->renderZeroVolumeEventRatio;
    }

    /**
     * Gets the sentNoiseLevel property value. Average energy level of sent audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
     * @return int|null
    */
    public function getSentNoiseLevel(): ?int {
        return $this->sentNoiseLevel;
    }

    /**
     * Gets the sentSignalLevel property value. Average energy level of sent audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
     * @return int|null
    */
    public function getSentSignalLevel(): ?int {
        return $this->sentSignalLevel;
    }

    /**
     * Gets the speakerGlitchRate property value. Glitches per 5 minute internal for the media endpoint's loudspeaker.
     * @return float|null
    */
    public function getSpeakerGlitchRate(): ?float {
        return $this->speakerGlitchRate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('captureDeviceDriver', $this->captureDeviceDriver);
        $writer->writeStringValue('captureDeviceName', $this->captureDeviceName);
        $writer->writeFloatValue('captureNotFunctioningEventRatio', $this->captureNotFunctioningEventRatio);
        $writer->writeFloatValue('cpuInsufficentEventRatio', $this->cpuInsufficentEventRatio);
        $writer->writeFloatValue('deviceClippingEventRatio', $this->deviceClippingEventRatio);
        $writer->writeFloatValue('deviceGlitchEventRatio', $this->deviceGlitchEventRatio);
        $writer->writeIntegerValue('howlingEventCount', $this->howlingEventCount);
        $writer->writeFloatValue('initialSignalLevelRootMeanSquare', $this->initialSignalLevelRootMeanSquare);
        $writer->writeFloatValue('lowSpeechLevelEventRatio', $this->lowSpeechLevelEventRatio);
        $writer->writeFloatValue('lowSpeechToNoiseEventRatio', $this->lowSpeechToNoiseEventRatio);
        $writer->writeFloatValue('micGlitchRate', $this->micGlitchRate);
        $writer->writeIntegerValue('receivedNoiseLevel', $this->receivedNoiseLevel);
        $writer->writeIntegerValue('receivedSignalLevel', $this->receivedSignalLevel);
        $writer->writeStringValue('renderDeviceDriver', $this->renderDeviceDriver);
        $writer->writeStringValue('renderDeviceName', $this->renderDeviceName);
        $writer->writeFloatValue('renderMuteEventRatio', $this->renderMuteEventRatio);
        $writer->writeFloatValue('renderNotFunctioningEventRatio', $this->renderNotFunctioningEventRatio);
        $writer->writeFloatValue('renderZeroVolumeEventRatio', $this->renderZeroVolumeEventRatio);
        $writer->writeIntegerValue('sentNoiseLevel', $this->sentNoiseLevel);
        $writer->writeIntegerValue('sentSignalLevel', $this->sentSignalLevel);
        $writer->writeFloatValue('speakerGlitchRate', $this->speakerGlitchRate);
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
     * Sets the captureDeviceDriver property value. Name of the capture device driver used by the media endpoint.
     *  @param string|null $value Value to set for the captureDeviceDriver property.
    */
    public function setCaptureDeviceDriver(?string $value ): void {
        $this->captureDeviceDriver = $value;
    }

    /**
     * Sets the captureDeviceName property value. Name of the capture device used by the media endpoint.
     *  @param string|null $value Value to set for the captureDeviceName property.
    */
    public function setCaptureDeviceName(?string $value ): void {
        $this->captureDeviceName = $value;
    }

    /**
     * Sets the captureNotFunctioningEventRatio property value. Fraction of the call that the media endpoint detected the capture device was not working properly.
     *  @param float|null $value Value to set for the captureNotFunctioningEventRatio property.
    */
    public function setCaptureNotFunctioningEventRatio(?float $value ): void {
        $this->captureNotFunctioningEventRatio = $value;
    }

    /**
     * Sets the cpuInsufficentEventRatio property value. Fraction of the call that the media endpoint detected the CPU resources available were insufficient and caused poor quality of the audio sent and received.
     *  @param float|null $value Value to set for the cpuInsufficentEventRatio property.
    */
    public function setCpuInsufficentEventRatio(?float $value ): void {
        $this->cpuInsufficentEventRatio = $value;
    }

    /**
     * Sets the deviceClippingEventRatio property value. Fraction of the call that the media endpoint detected clipping in the captured audio that caused poor quality of the audio being sent.
     *  @param float|null $value Value to set for the deviceClippingEventRatio property.
    */
    public function setDeviceClippingEventRatio(?float $value ): void {
        $this->deviceClippingEventRatio = $value;
    }

    /**
     * Sets the deviceGlitchEventRatio property value. Fraction of the call that the media endpoint detected glitches or gaps in the audio played or captured that caused poor quality of the audio being sent or received.
     *  @param float|null $value Value to set for the deviceGlitchEventRatio property.
    */
    public function setDeviceGlitchEventRatio(?float $value ): void {
        $this->deviceGlitchEventRatio = $value;
    }

    /**
     * Sets the howlingEventCount property value. Number of times during the call that the media endpoint detected howling or screeching audio.
     *  @param int|null $value Value to set for the howlingEventCount property.
    */
    public function setHowlingEventCount(?int $value ): void {
        $this->howlingEventCount = $value;
    }

    /**
     * Sets the initialSignalLevelRootMeanSquare property value. The root mean square (RMS) of the incoming signal of up to the first 30 seconds of the call.
     *  @param float|null $value Value to set for the initialSignalLevelRootMeanSquare property.
    */
    public function setInitialSignalLevelRootMeanSquare(?float $value ): void {
        $this->initialSignalLevelRootMeanSquare = $value;
    }

    /**
     * Sets the lowSpeechLevelEventRatio property value. Fraction of the call that the media endpoint detected low speech level that caused poor quality of the audio being sent.
     *  @param float|null $value Value to set for the lowSpeechLevelEventRatio property.
    */
    public function setLowSpeechLevelEventRatio(?float $value ): void {
        $this->lowSpeechLevelEventRatio = $value;
    }

    /**
     * Sets the lowSpeechToNoiseEventRatio property value. Fraction of the call that the media endpoint detected low speech to noise level that caused poor quality of the audio being sent.
     *  @param float|null $value Value to set for the lowSpeechToNoiseEventRatio property.
    */
    public function setLowSpeechToNoiseEventRatio(?float $value ): void {
        $this->lowSpeechToNoiseEventRatio = $value;
    }

    /**
     * Sets the micGlitchRate property value. Glitches per 5 minute interval for the media endpoint's microphone.
     *  @param float|null $value Value to set for the micGlitchRate property.
    */
    public function setMicGlitchRate(?float $value ): void {
        $this->micGlitchRate = $value;
    }

    /**
     * Sets the receivedNoiseLevel property value. Average energy level of received audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
     *  @param int|null $value Value to set for the receivedNoiseLevel property.
    */
    public function setReceivedNoiseLevel(?int $value ): void {
        $this->receivedNoiseLevel = $value;
    }

    /**
     * Sets the receivedSignalLevel property value. Average energy level of received audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
     *  @param int|null $value Value to set for the receivedSignalLevel property.
    */
    public function setReceivedSignalLevel(?int $value ): void {
        $this->receivedSignalLevel = $value;
    }

    /**
     * Sets the renderDeviceDriver property value. Name of the render device driver used by the media endpoint.
     *  @param string|null $value Value to set for the renderDeviceDriver property.
    */
    public function setRenderDeviceDriver(?string $value ): void {
        $this->renderDeviceDriver = $value;
    }

    /**
     * Sets the renderDeviceName property value. Name of the render device used by the media endpoint.
     *  @param string|null $value Value to set for the renderDeviceName property.
    */
    public function setRenderDeviceName(?string $value ): void {
        $this->renderDeviceName = $value;
    }

    /**
     * Sets the renderMuteEventRatio property value. Fraction of the call that media endpoint detected device render is muted.
     *  @param float|null $value Value to set for the renderMuteEventRatio property.
    */
    public function setRenderMuteEventRatio(?float $value ): void {
        $this->renderMuteEventRatio = $value;
    }

    /**
     * Sets the renderNotFunctioningEventRatio property value. Fraction of the call that the media endpoint detected the render device was not working properly.
     *  @param float|null $value Value to set for the renderNotFunctioningEventRatio property.
    */
    public function setRenderNotFunctioningEventRatio(?float $value ): void {
        $this->renderNotFunctioningEventRatio = $value;
    }

    /**
     * Sets the renderZeroVolumeEventRatio property value. Fraction of the call that media endpoint detected device render volume is set to 0.
     *  @param float|null $value Value to set for the renderZeroVolumeEventRatio property.
    */
    public function setRenderZeroVolumeEventRatio(?float $value ): void {
        $this->renderZeroVolumeEventRatio = $value;
    }

    /**
     * Sets the sentNoiseLevel property value. Average energy level of sent audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
     *  @param int|null $value Value to set for the sentNoiseLevel property.
    */
    public function setSentNoiseLevel(?int $value ): void {
        $this->sentNoiseLevel = $value;
    }

    /**
     * Sets the sentSignalLevel property value. Average energy level of sent audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
     *  @param int|null $value Value to set for the sentSignalLevel property.
    */
    public function setSentSignalLevel(?int $value ): void {
        $this->sentSignalLevel = $value;
    }

    /**
     * Sets the speakerGlitchRate property value. Glitches per 5 minute internal for the media endpoint's loudspeaker.
     *  @param float|null $value Value to set for the speakerGlitchRate property.
    */
    public function setSpeakerGlitchRate(?float $value ): void {
        $this->speakerGlitchRate = $value;
    }

}
