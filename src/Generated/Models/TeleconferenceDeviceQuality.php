<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeleconferenceDeviceQuality implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $callChainId A unique identifier for all  the participant calls in a conference or a unique identifier for two participant calls in P2P call. This needs to be copied over from Microsoft.Graph.Call.CallChainId. */
    private ?string $callChainId = null;
    
    /** @var string|null $cloudServiceDeploymentEnvironment A geo-region where the service is deployed, such as ProdNoam. */
    private ?string $cloudServiceDeploymentEnvironment = null;
    
    /** @var string|null $cloudServiceDeploymentId A unique deployment identifier assigned by Azure. */
    private ?string $cloudServiceDeploymentId = null;
    
    /** @var string|null $cloudServiceInstanceName The Azure deployed cloud service instance name, such as FrontEnd_IN_3. */
    private ?string $cloudServiceInstanceName = null;
    
    /** @var string|null $cloudServiceName The Azure deployed cloud service name, such as contoso.cloudapp.net. */
    private ?string $cloudServiceName = null;
    
    /** @var string|null $deviceDescription Any additional description, such as VTC Bldg 30/21. */
    private ?string $deviceDescription = null;
    
    /** @var string|null $deviceName The user media agent name, such as Cisco SX80. */
    private ?string $deviceName = null;
    
    /** @var string|null $mediaLegId A unique identifier for a specific media leg of a participant in a conference.  One participant can have multiple media leg identifiers if retargeting happens. CVI partner assigns this value. */
    private ?string $mediaLegId = null;
    
    /** @var array<TeleconferenceDeviceMediaQuality>|null $mediaQualityList The list of media qualities in a media session (call), such as audio quality, video quality, and/or screen sharing quality. */
    private ?array $mediaQualityList = null;
    
    /** @var string|null $participantId A unique identifier for a specific participant in a conference. The CVI partner needs to copy over Call.MyParticipantId to this property. */
    private ?string $participantId = null;
    
    /**
     * Instantiates a new teleconferenceDeviceQuality and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeleconferenceDeviceQuality
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeleconferenceDeviceQuality {
        return new TeleconferenceDeviceQuality();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the callChainId property value. A unique identifier for all  the participant calls in a conference or a unique identifier for two participant calls in P2P call. This needs to be copied over from Microsoft.Graph.Call.CallChainId.
     * @return string|null
    */
    public function getCallChainId(): ?string {
        return $this->callChainId;
    }

    /**
     * Gets the cloudServiceDeploymentEnvironment property value. A geo-region where the service is deployed, such as ProdNoam.
     * @return string|null
    */
    public function getCloudServiceDeploymentEnvironment(): ?string {
        return $this->cloudServiceDeploymentEnvironment;
    }

    /**
     * Gets the cloudServiceDeploymentId property value. A unique deployment identifier assigned by Azure.
     * @return string|null
    */
    public function getCloudServiceDeploymentId(): ?string {
        return $this->cloudServiceDeploymentId;
    }

    /**
     * Gets the cloudServiceInstanceName property value. The Azure deployed cloud service instance name, such as FrontEnd_IN_3.
     * @return string|null
    */
    public function getCloudServiceInstanceName(): ?string {
        return $this->cloudServiceInstanceName;
    }

    /**
     * Gets the cloudServiceName property value. The Azure deployed cloud service name, such as contoso.cloudapp.net.
     * @return string|null
    */
    public function getCloudServiceName(): ?string {
        return $this->cloudServiceName;
    }

    /**
     * Gets the deviceDescription property value. Any additional description, such as VTC Bldg 30/21.
     * @return string|null
    */
    public function getDeviceDescription(): ?string {
        return $this->deviceDescription;
    }

    /**
     * Gets the deviceName property value. The user media agent name, such as Cisco SX80.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'callChainId' => function (self $o, ParseNode $n) { $o->setCallChainId($n->getStringValue()); },
            'cloudServiceDeploymentEnvironment' => function (self $o, ParseNode $n) { $o->setCloudServiceDeploymentEnvironment($n->getStringValue()); },
            'cloudServiceDeploymentId' => function (self $o, ParseNode $n) { $o->setCloudServiceDeploymentId($n->getStringValue()); },
            'cloudServiceInstanceName' => function (self $o, ParseNode $n) { $o->setCloudServiceInstanceName($n->getStringValue()); },
            'cloudServiceName' => function (self $o, ParseNode $n) { $o->setCloudServiceName($n->getStringValue()); },
            'deviceDescription' => function (self $o, ParseNode $n) { $o->setDeviceDescription($n->getStringValue()); },
            'deviceName' => function (self $o, ParseNode $n) { $o->setDeviceName($n->getStringValue()); },
            'mediaLegId' => function (self $o, ParseNode $n) { $o->setMediaLegId($n->getStringValue()); },
            'mediaQualityList' => function (self $o, ParseNode $n) { $o->setMediaQualityList($n->getCollectionOfObjectValues(TeleconferenceDeviceMediaQuality::class)); },
            'participantId' => function (self $o, ParseNode $n) { $o->setParticipantId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the mediaLegId property value. A unique identifier for a specific media leg of a participant in a conference.  One participant can have multiple media leg identifiers if retargeting happens. CVI partner assigns this value.
     * @return string|null
    */
    public function getMediaLegId(): ?string {
        return $this->mediaLegId;
    }

    /**
     * Gets the mediaQualityList property value. The list of media qualities in a media session (call), such as audio quality, video quality, and/or screen sharing quality.
     * @return array<TeleconferenceDeviceMediaQuality>|null
    */
    public function getMediaQualityList(): ?array {
        return $this->mediaQualityList;
    }

    /**
     * Gets the participantId property value. A unique identifier for a specific participant in a conference. The CVI partner needs to copy over Call.MyParticipantId to this property.
     * @return string|null
    */
    public function getParticipantId(): ?string {
        return $this->participantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('callChainId', $this->callChainId);
        $writer->writeStringValue('cloudServiceDeploymentEnvironment', $this->cloudServiceDeploymentEnvironment);
        $writer->writeStringValue('cloudServiceDeploymentId', $this->cloudServiceDeploymentId);
        $writer->writeStringValue('cloudServiceInstanceName', $this->cloudServiceInstanceName);
        $writer->writeStringValue('cloudServiceName', $this->cloudServiceName);
        $writer->writeStringValue('deviceDescription', $this->deviceDescription);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('mediaLegId', $this->mediaLegId);
        $writer->writeCollectionOfObjectValues('mediaQualityList', $this->mediaQualityList);
        $writer->writeStringValue('participantId', $this->participantId);
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
     * Sets the callChainId property value. A unique identifier for all  the participant calls in a conference or a unique identifier for two participant calls in P2P call. This needs to be copied over from Microsoft.Graph.Call.CallChainId.
     *  @param string|null $value Value to set for the callChainId property.
    */
    public function setCallChainId(?string $value ): void {
        $this->callChainId = $value;
    }

    /**
     * Sets the cloudServiceDeploymentEnvironment property value. A geo-region where the service is deployed, such as ProdNoam.
     *  @param string|null $value Value to set for the cloudServiceDeploymentEnvironment property.
    */
    public function setCloudServiceDeploymentEnvironment(?string $value ): void {
        $this->cloudServiceDeploymentEnvironment = $value;
    }

    /**
     * Sets the cloudServiceDeploymentId property value. A unique deployment identifier assigned by Azure.
     *  @param string|null $value Value to set for the cloudServiceDeploymentId property.
    */
    public function setCloudServiceDeploymentId(?string $value ): void {
        $this->cloudServiceDeploymentId = $value;
    }

    /**
     * Sets the cloudServiceInstanceName property value. The Azure deployed cloud service instance name, such as FrontEnd_IN_3.
     *  @param string|null $value Value to set for the cloudServiceInstanceName property.
    */
    public function setCloudServiceInstanceName(?string $value ): void {
        $this->cloudServiceInstanceName = $value;
    }

    /**
     * Sets the cloudServiceName property value. The Azure deployed cloud service name, such as contoso.cloudapp.net.
     *  @param string|null $value Value to set for the cloudServiceName property.
    */
    public function setCloudServiceName(?string $value ): void {
        $this->cloudServiceName = $value;
    }

    /**
     * Sets the deviceDescription property value. Any additional description, such as VTC Bldg 30/21.
     *  @param string|null $value Value to set for the deviceDescription property.
    */
    public function setDeviceDescription(?string $value ): void {
        $this->deviceDescription = $value;
    }

    /**
     * Sets the deviceName property value. The user media agent name, such as Cisco SX80.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the mediaLegId property value. A unique identifier for a specific media leg of a participant in a conference.  One participant can have multiple media leg identifiers if retargeting happens. CVI partner assigns this value.
     *  @param string|null $value Value to set for the mediaLegId property.
    */
    public function setMediaLegId(?string $value ): void {
        $this->mediaLegId = $value;
    }

    /**
     * Sets the mediaQualityList property value. The list of media qualities in a media session (call), such as audio quality, video quality, and/or screen sharing quality.
     *  @param array<TeleconferenceDeviceMediaQuality>|null $value Value to set for the mediaQualityList property.
    */
    public function setMediaQualityList(?array $value ): void {
        $this->mediaQualityList = $value;
    }

    /**
     * Sets the participantId property value. A unique identifier for a specific participant in a conference. The CVI partner needs to copy over Call.MyParticipantId to this property.
     *  @param string|null $value Value to set for the participantId property.
    */
    public function setParticipantId(?string $value ): void {
        $this->participantId = $value;
    }

}
