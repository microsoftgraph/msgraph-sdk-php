<?php

namespace Microsoft\\Graph\\Generated\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DeviceInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DeviceInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceInfo {
        return new DeviceInfo();
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
     * Gets the captureDeviceDriver property value. Name of the capture device driver used by the media endpoint.
     * @return string|null
    */
    public function getCaptureDeviceDriver(): ?string {
        $val = $this->getBackingStore()->get('captureDeviceDriver');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'captureDeviceDriver'");
    }

    /**
     * Gets the captureDeviceName property value. Name of the capture device used by the media endpoint.
     * @return string|null
    */
    public function getCaptureDeviceName(): ?string {
        $val = $this->getBackingStore()->get('captureDeviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'captureDeviceName'");
    }

    /**
     * Gets the captureNotFunctioningEventRatio property value. Fraction of the call that the media endpoint detected the capture device was not working properly.
     * @return float|null
    */
    public function getCaptureNotFunctioningEventRatio(): ?float {
        $val = $this->getBackingStore()->get('captureNotFunctioningEventRatio');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'captureNotFunctioningEventRatio'");
    }

    /**
     * Gets the cpuInsufficentEventRatio property value. Fraction of the call that the media endpoint detected the CPU resources available were insufficient and caused poor quality of the audio sent and received.
     * @return float|null
    */
    public function getCpuInsufficentEventRatio(): ?float {
        $val = $this->getBackingStore()->get('cpuInsufficentEventRatio');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cpuInsufficentEventRatio'");
    }

    /**
     * Gets the deviceClippingEventRatio property value. Fraction of the call that the media endpoint detected clipping in the captured audio that caused poor quality of the audio being sent.
     * @return float|null
    */
    public function getDeviceClippingEventRatio(): ?float {
        $val = $this->getBackingStore()->get('deviceClippingEventRatio');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceClippingEventRatio'");
    }

    /**
     * Gets the deviceGlitchEventRatio property value. Fraction of the call that the media endpoint detected glitches or gaps in the audio played or captured that caused poor quality of the audio being sent or received.
     * @return float|null
    */
    public function getDeviceGlitchEventRatio(): ?float {
        $val = $this->getBackingStore()->get('deviceGlitchEventRatio');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceGlitchEventRatio'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'captureDeviceDriver' => fn(ParseNode $n) => $o->setCaptureDeviceDriver($n->getStringValue()),
            'captureDeviceName' => fn(ParseNode $n) => $o->setCaptureDeviceName($n->getStringValue()),
            'captureNotFunctioningEventRatio' => fn(ParseNode $n) => $o->setCaptureNotFunctioningEventRatio($n->getFloatValue()),
            'cpuInsufficentEventRatio' => fn(ParseNode $n) => $o->setCpuInsufficentEventRatio($n->getFloatValue()),
            'deviceClippingEventRatio' => fn(ParseNode $n) => $o->setDeviceClippingEventRatio($n->getFloatValue()),
            'deviceGlitchEventRatio' => fn(ParseNode $n) => $o->setDeviceGlitchEventRatio($n->getFloatValue()),
            'howlingEventCount' => fn(ParseNode $n) => $o->setHowlingEventCount($n->getIntegerValue()),
            'initialSignalLevelRootMeanSquare' => fn(ParseNode $n) => $o->setInitialSignalLevelRootMeanSquare($n->getFloatValue()),
            'lowSpeechLevelEventRatio' => fn(ParseNode $n) => $o->setLowSpeechLevelEventRatio($n->getFloatValue()),
            'lowSpeechToNoiseEventRatio' => fn(ParseNode $n) => $o->setLowSpeechToNoiseEventRatio($n->getFloatValue()),
            'micGlitchRate' => fn(ParseNode $n) => $o->setMicGlitchRate($n->getFloatValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'receivedNoiseLevel' => fn(ParseNode $n) => $o->setReceivedNoiseLevel($n->getIntegerValue()),
            'receivedSignalLevel' => fn(ParseNode $n) => $o->setReceivedSignalLevel($n->getIntegerValue()),
            'renderDeviceDriver' => fn(ParseNode $n) => $o->setRenderDeviceDriver($n->getStringValue()),
            'renderDeviceName' => fn(ParseNode $n) => $o->setRenderDeviceName($n->getStringValue()),
            'renderMuteEventRatio' => fn(ParseNode $n) => $o->setRenderMuteEventRatio($n->getFloatValue()),
            'renderNotFunctioningEventRatio' => fn(ParseNode $n) => $o->setRenderNotFunctioningEventRatio($n->getFloatValue()),
            'renderZeroVolumeEventRatio' => fn(ParseNode $n) => $o->setRenderZeroVolumeEventRatio($n->getFloatValue()),
            'sentNoiseLevel' => fn(ParseNode $n) => $o->setSentNoiseLevel($n->getIntegerValue()),
            'sentSignalLevel' => fn(ParseNode $n) => $o->setSentSignalLevel($n->getIntegerValue()),
            'speakerGlitchRate' => fn(ParseNode $n) => $o->setSpeakerGlitchRate($n->getFloatValue()),
        ];
    }

    /**
     * Gets the howlingEventCount property value. Number of times during the call that the media endpoint detected howling or screeching audio.
     * @return int|null
    */
    public function getHowlingEventCount(): ?int {
        $val = $this->getBackingStore()->get('howlingEventCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'howlingEventCount'");
    }

    /**
     * Gets the initialSignalLevelRootMeanSquare property value. The root mean square (RMS) of the incoming signal of up to the first 30 seconds of the call.
     * @return float|null
    */
    public function getInitialSignalLevelRootMeanSquare(): ?float {
        $val = $this->getBackingStore()->get('initialSignalLevelRootMeanSquare');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initialSignalLevelRootMeanSquare'");
    }

    /**
     * Gets the lowSpeechLevelEventRatio property value. Fraction of the call that the media endpoint detected low speech level that caused poor quality of the audio being sent.
     * @return float|null
    */
    public function getLowSpeechLevelEventRatio(): ?float {
        $val = $this->getBackingStore()->get('lowSpeechLevelEventRatio');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lowSpeechLevelEventRatio'");
    }

    /**
     * Gets the lowSpeechToNoiseEventRatio property value. Fraction of the call that the media endpoint detected low speech to noise level that caused poor quality of the audio being sent.
     * @return float|null
    */
    public function getLowSpeechToNoiseEventRatio(): ?float {
        $val = $this->getBackingStore()->get('lowSpeechToNoiseEventRatio');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lowSpeechToNoiseEventRatio'");
    }

    /**
     * Gets the micGlitchRate property value. Glitches per 5 minute interval for the media endpoint's microphone.
     * @return float|null
    */
    public function getMicGlitchRate(): ?float {
        $val = $this->getBackingStore()->get('micGlitchRate');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'micGlitchRate'");
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
     * Gets the receivedNoiseLevel property value. Average energy level of received audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
     * @return int|null
    */
    public function getReceivedNoiseLevel(): ?int {
        $val = $this->getBackingStore()->get('receivedNoiseLevel');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'receivedNoiseLevel'");
    }

    /**
     * Gets the receivedSignalLevel property value. Average energy level of received audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
     * @return int|null
    */
    public function getReceivedSignalLevel(): ?int {
        $val = $this->getBackingStore()->get('receivedSignalLevel');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'receivedSignalLevel'");
    }

    /**
     * Gets the renderDeviceDriver property value. Name of the render device driver used by the media endpoint.
     * @return string|null
    */
    public function getRenderDeviceDriver(): ?string {
        $val = $this->getBackingStore()->get('renderDeviceDriver');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'renderDeviceDriver'");
    }

    /**
     * Gets the renderDeviceName property value. Name of the render device used by the media endpoint.
     * @return string|null
    */
    public function getRenderDeviceName(): ?string {
        $val = $this->getBackingStore()->get('renderDeviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'renderDeviceName'");
    }

    /**
     * Gets the renderMuteEventRatio property value. Fraction of the call that media endpoint detected device render is muted.
     * @return float|null
    */
    public function getRenderMuteEventRatio(): ?float {
        $val = $this->getBackingStore()->get('renderMuteEventRatio');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'renderMuteEventRatio'");
    }

    /**
     * Gets the renderNotFunctioningEventRatio property value. Fraction of the call that the media endpoint detected the render device was not working properly.
     * @return float|null
    */
    public function getRenderNotFunctioningEventRatio(): ?float {
        $val = $this->getBackingStore()->get('renderNotFunctioningEventRatio');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'renderNotFunctioningEventRatio'");
    }

    /**
     * Gets the renderZeroVolumeEventRatio property value. Fraction of the call that media endpoint detected device render volume is set to 0.
     * @return float|null
    */
    public function getRenderZeroVolumeEventRatio(): ?float {
        $val = $this->getBackingStore()->get('renderZeroVolumeEventRatio');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'renderZeroVolumeEventRatio'");
    }

    /**
     * Gets the sentNoiseLevel property value. Average energy level of sent audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
     * @return int|null
    */
    public function getSentNoiseLevel(): ?int {
        $val = $this->getBackingStore()->get('sentNoiseLevel');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sentNoiseLevel'");
    }

    /**
     * Gets the sentSignalLevel property value. Average energy level of sent audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
     * @return int|null
    */
    public function getSentSignalLevel(): ?int {
        $val = $this->getBackingStore()->get('sentSignalLevel');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sentSignalLevel'");
    }

    /**
     * Gets the speakerGlitchRate property value. Glitches per 5 minute internal for the media endpoint's loudspeaker.
     * @return float|null
    */
    public function getSpeakerGlitchRate(): ?float {
        $val = $this->getBackingStore()->get('speakerGlitchRate');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'speakerGlitchRate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('captureDeviceDriver', $this->getCaptureDeviceDriver());
        $writer->writeStringValue('captureDeviceName', $this->getCaptureDeviceName());
        $writer->writeFloatValue('captureNotFunctioningEventRatio', $this->getCaptureNotFunctioningEventRatio());
        $writer->writeFloatValue('cpuInsufficentEventRatio', $this->getCpuInsufficentEventRatio());
        $writer->writeFloatValue('deviceClippingEventRatio', $this->getDeviceClippingEventRatio());
        $writer->writeFloatValue('deviceGlitchEventRatio', $this->getDeviceGlitchEventRatio());
        $writer->writeIntegerValue('howlingEventCount', $this->getHowlingEventCount());
        $writer->writeFloatValue('initialSignalLevelRootMeanSquare', $this->getInitialSignalLevelRootMeanSquare());
        $writer->writeFloatValue('lowSpeechLevelEventRatio', $this->getLowSpeechLevelEventRatio());
        $writer->writeFloatValue('lowSpeechToNoiseEventRatio', $this->getLowSpeechToNoiseEventRatio());
        $writer->writeFloatValue('micGlitchRate', $this->getMicGlitchRate());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('receivedNoiseLevel', $this->getReceivedNoiseLevel());
        $writer->writeIntegerValue('receivedSignalLevel', $this->getReceivedSignalLevel());
        $writer->writeStringValue('renderDeviceDriver', $this->getRenderDeviceDriver());
        $writer->writeStringValue('renderDeviceName', $this->getRenderDeviceName());
        $writer->writeFloatValue('renderMuteEventRatio', $this->getRenderMuteEventRatio());
        $writer->writeFloatValue('renderNotFunctioningEventRatio', $this->getRenderNotFunctioningEventRatio());
        $writer->writeFloatValue('renderZeroVolumeEventRatio', $this->getRenderZeroVolumeEventRatio());
        $writer->writeIntegerValue('sentNoiseLevel', $this->getSentNoiseLevel());
        $writer->writeIntegerValue('sentSignalLevel', $this->getSentSignalLevel());
        $writer->writeFloatValue('speakerGlitchRate', $this->getSpeakerGlitchRate());
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
     * Sets the captureDeviceDriver property value. Name of the capture device driver used by the media endpoint.
     * @param string|null $value Value to set for the captureDeviceDriver property.
    */
    public function setCaptureDeviceDriver(?string $value): void {
        $this->getBackingStore()->set('captureDeviceDriver', $value);
    }

    /**
     * Sets the captureDeviceName property value. Name of the capture device used by the media endpoint.
     * @param string|null $value Value to set for the captureDeviceName property.
    */
    public function setCaptureDeviceName(?string $value): void {
        $this->getBackingStore()->set('captureDeviceName', $value);
    }

    /**
     * Sets the captureNotFunctioningEventRatio property value. Fraction of the call that the media endpoint detected the capture device was not working properly.
     * @param float|null $value Value to set for the captureNotFunctioningEventRatio property.
    */
    public function setCaptureNotFunctioningEventRatio(?float $value): void {
        $this->getBackingStore()->set('captureNotFunctioningEventRatio', $value);
    }

    /**
     * Sets the cpuInsufficentEventRatio property value. Fraction of the call that the media endpoint detected the CPU resources available were insufficient and caused poor quality of the audio sent and received.
     * @param float|null $value Value to set for the cpuInsufficentEventRatio property.
    */
    public function setCpuInsufficentEventRatio(?float $value): void {
        $this->getBackingStore()->set('cpuInsufficentEventRatio', $value);
    }

    /**
     * Sets the deviceClippingEventRatio property value. Fraction of the call that the media endpoint detected clipping in the captured audio that caused poor quality of the audio being sent.
     * @param float|null $value Value to set for the deviceClippingEventRatio property.
    */
    public function setDeviceClippingEventRatio(?float $value): void {
        $this->getBackingStore()->set('deviceClippingEventRatio', $value);
    }

    /**
     * Sets the deviceGlitchEventRatio property value. Fraction of the call that the media endpoint detected glitches or gaps in the audio played or captured that caused poor quality of the audio being sent or received.
     * @param float|null $value Value to set for the deviceGlitchEventRatio property.
    */
    public function setDeviceGlitchEventRatio(?float $value): void {
        $this->getBackingStore()->set('deviceGlitchEventRatio', $value);
    }

    /**
     * Sets the howlingEventCount property value. Number of times during the call that the media endpoint detected howling or screeching audio.
     * @param int|null $value Value to set for the howlingEventCount property.
    */
    public function setHowlingEventCount(?int $value): void {
        $this->getBackingStore()->set('howlingEventCount', $value);
    }

    /**
     * Sets the initialSignalLevelRootMeanSquare property value. The root mean square (RMS) of the incoming signal of up to the first 30 seconds of the call.
     * @param float|null $value Value to set for the initialSignalLevelRootMeanSquare property.
    */
    public function setInitialSignalLevelRootMeanSquare(?float $value): void {
        $this->getBackingStore()->set('initialSignalLevelRootMeanSquare', $value);
    }

    /**
     * Sets the lowSpeechLevelEventRatio property value. Fraction of the call that the media endpoint detected low speech level that caused poor quality of the audio being sent.
     * @param float|null $value Value to set for the lowSpeechLevelEventRatio property.
    */
    public function setLowSpeechLevelEventRatio(?float $value): void {
        $this->getBackingStore()->set('lowSpeechLevelEventRatio', $value);
    }

    /**
     * Sets the lowSpeechToNoiseEventRatio property value. Fraction of the call that the media endpoint detected low speech to noise level that caused poor quality of the audio being sent.
     * @param float|null $value Value to set for the lowSpeechToNoiseEventRatio property.
    */
    public function setLowSpeechToNoiseEventRatio(?float $value): void {
        $this->getBackingStore()->set('lowSpeechToNoiseEventRatio', $value);
    }

    /**
     * Sets the micGlitchRate property value. Glitches per 5 minute interval for the media endpoint's microphone.
     * @param float|null $value Value to set for the micGlitchRate property.
    */
    public function setMicGlitchRate(?float $value): void {
        $this->getBackingStore()->set('micGlitchRate', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the receivedNoiseLevel property value. Average energy level of received audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
     * @param int|null $value Value to set for the receivedNoiseLevel property.
    */
    public function setReceivedNoiseLevel(?int $value): void {
        $this->getBackingStore()->set('receivedNoiseLevel', $value);
    }

    /**
     * Sets the receivedSignalLevel property value. Average energy level of received audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
     * @param int|null $value Value to set for the receivedSignalLevel property.
    */
    public function setReceivedSignalLevel(?int $value): void {
        $this->getBackingStore()->set('receivedSignalLevel', $value);
    }

    /**
     * Sets the renderDeviceDriver property value. Name of the render device driver used by the media endpoint.
     * @param string|null $value Value to set for the renderDeviceDriver property.
    */
    public function setRenderDeviceDriver(?string $value): void {
        $this->getBackingStore()->set('renderDeviceDriver', $value);
    }

    /**
     * Sets the renderDeviceName property value. Name of the render device used by the media endpoint.
     * @param string|null $value Value to set for the renderDeviceName property.
    */
    public function setRenderDeviceName(?string $value): void {
        $this->getBackingStore()->set('renderDeviceName', $value);
    }

    /**
     * Sets the renderMuteEventRatio property value. Fraction of the call that media endpoint detected device render is muted.
     * @param float|null $value Value to set for the renderMuteEventRatio property.
    */
    public function setRenderMuteEventRatio(?float $value): void {
        $this->getBackingStore()->set('renderMuteEventRatio', $value);
    }

    /**
     * Sets the renderNotFunctioningEventRatio property value. Fraction of the call that the media endpoint detected the render device was not working properly.
     * @param float|null $value Value to set for the renderNotFunctioningEventRatio property.
    */
    public function setRenderNotFunctioningEventRatio(?float $value): void {
        $this->getBackingStore()->set('renderNotFunctioningEventRatio', $value);
    }

    /**
     * Sets the renderZeroVolumeEventRatio property value. Fraction of the call that media endpoint detected device render volume is set to 0.
     * @param float|null $value Value to set for the renderZeroVolumeEventRatio property.
    */
    public function setRenderZeroVolumeEventRatio(?float $value): void {
        $this->getBackingStore()->set('renderZeroVolumeEventRatio', $value);
    }

    /**
     * Sets the sentNoiseLevel property value. Average energy level of sent audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
     * @param int|null $value Value to set for the sentNoiseLevel property.
    */
    public function setSentNoiseLevel(?int $value): void {
        $this->getBackingStore()->set('sentNoiseLevel', $value);
    }

    /**
     * Sets the sentSignalLevel property value. Average energy level of sent audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
     * @param int|null $value Value to set for the sentSignalLevel property.
    */
    public function setSentSignalLevel(?int $value): void {
        $this->getBackingStore()->set('sentSignalLevel', $value);
    }

    /**
     * Sets the speakerGlitchRate property value. Glitches per 5 minute internal for the media endpoint's loudspeaker.
     * @param float|null $value Value to set for the speakerGlitchRate property.
    */
    public function setSpeakerGlitchRate(?float $value): void {
        $this->getBackingStore()->set('speakerGlitchRate', $value);
    }

}
