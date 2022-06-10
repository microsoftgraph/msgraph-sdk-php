<?php

namespace Microsoft\Graph\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Media implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceInfo|null $calleeDevice Device information associated with the callee endpoint of this media.
    */
    private ?DeviceInfo $calleeDevice = null;
    
    /**
     * @var NetworkInfo|null $calleeNetwork Network information associated with the callee endpoint of this media.
    */
    private ?NetworkInfo $calleeNetwork = null;
    
    /**
     * @var DeviceInfo|null $callerDevice Device information associated with the caller endpoint of this media.
    */
    private ?DeviceInfo $callerDevice = null;
    
    /**
     * @var NetworkInfo|null $callerNetwork Network information associated with the caller endpoint of this media.
    */
    private ?NetworkInfo $callerNetwork = null;
    
    /**
     * @var string|null $label How the media was identified during media negotiation stage.
    */
    private ?string $label = null;
    
    /**
     * @var array<MediaStream>|null $streams Network streams associated with this media.
    */
    private ?array $streams = null;
    
    /**
     * Instantiates a new media and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Media
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Media {
        return new Media();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the calleeDevice property value. Device information associated with the callee endpoint of this media.
     * @return DeviceInfo|null
    */
    public function getCalleeDevice(): ?DeviceInfo {
        return $this->calleeDevice;
    }

    /**
     * Gets the calleeNetwork property value. Network information associated with the callee endpoint of this media.
     * @return NetworkInfo|null
    */
    public function getCalleeNetwork(): ?NetworkInfo {
        return $this->calleeNetwork;
    }

    /**
     * Gets the callerDevice property value. Device information associated with the caller endpoint of this media.
     * @return DeviceInfo|null
    */
    public function getCallerDevice(): ?DeviceInfo {
        return $this->callerDevice;
    }

    /**
     * Gets the callerNetwork property value. Network information associated with the caller endpoint of this media.
     * @return NetworkInfo|null
    */
    public function getCallerNetwork(): ?NetworkInfo {
        return $this->callerNetwork;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'calleeDevice' => function (ParseNode $n) use ($o) { $o->setCalleeDevice($n->getObjectValue(array(DeviceInfo::class, 'createFromDiscriminatorValue'))); },
            'calleeNetwork' => function (ParseNode $n) use ($o) { $o->setCalleeNetwork($n->getObjectValue(array(NetworkInfo::class, 'createFromDiscriminatorValue'))); },
            'callerDevice' => function (ParseNode $n) use ($o) { $o->setCallerDevice($n->getObjectValue(array(DeviceInfo::class, 'createFromDiscriminatorValue'))); },
            'callerNetwork' => function (ParseNode $n) use ($o) { $o->setCallerNetwork($n->getObjectValue(array(NetworkInfo::class, 'createFromDiscriminatorValue'))); },
            'label' => function (ParseNode $n) use ($o) { $o->setLabel($n->getStringValue()); },
            'streams' => function (ParseNode $n) use ($o) { $o->setStreams($n->getCollectionOfObjectValues(array(MediaStream::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the label property value. How the media was identified during media negotiation stage.
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the streams property value. Network streams associated with this media.
     * @return array<MediaStream>|null
    */
    public function getStreams(): ?array {
        return $this->streams;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('calleeDevice', $this->calleeDevice);
        $writer->writeObjectValue('calleeNetwork', $this->calleeNetwork);
        $writer->writeObjectValue('callerDevice', $this->callerDevice);
        $writer->writeObjectValue('callerNetwork', $this->callerNetwork);
        $writer->writeStringValue('label', $this->label);
        $writer->writeCollectionOfObjectValues('streams', $this->streams);
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
     * Sets the calleeDevice property value. Device information associated with the callee endpoint of this media.
     *  @param DeviceInfo|null $value Value to set for the calleeDevice property.
    */
    public function setCalleeDevice(?DeviceInfo $value ): void {
        $this->calleeDevice = $value;
    }

    /**
     * Sets the calleeNetwork property value. Network information associated with the callee endpoint of this media.
     *  @param NetworkInfo|null $value Value to set for the calleeNetwork property.
    */
    public function setCalleeNetwork(?NetworkInfo $value ): void {
        $this->calleeNetwork = $value;
    }

    /**
     * Sets the callerDevice property value. Device information associated with the caller endpoint of this media.
     *  @param DeviceInfo|null $value Value to set for the callerDevice property.
    */
    public function setCallerDevice(?DeviceInfo $value ): void {
        $this->callerDevice = $value;
    }

    /**
     * Sets the callerNetwork property value. Network information associated with the caller endpoint of this media.
     *  @param NetworkInfo|null $value Value to set for the callerNetwork property.
    */
    public function setCallerNetwork(?NetworkInfo $value ): void {
        $this->callerNetwork = $value;
    }

    /**
     * Sets the label property value. How the media was identified during media negotiation stage.
     *  @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value ): void {
        $this->label = $value;
    }

    /**
     * Sets the streams property value. Network streams associated with this media.
     *  @param array<MediaStream>|null $value Value to set for the streams property.
    */
    public function setStreams(?array $value ): void {
        $this->streams = $value;
    }

}
