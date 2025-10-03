<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TeleconferenceDeviceQuality implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TeleconferenceDeviceQuality and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeleconferenceDeviceQuality
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeleconferenceDeviceQuality {
        return new TeleconferenceDeviceQuality();
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
     * Gets the callChainId property value. A unique identifier for all  the participant calls in a conference or a unique identifier for two participant calls in P2P call. This needs to be copied over from Microsoft.Graph.Call.CallChainId.
     * @return string|null
    */
    public function getCallChainId(): ?string {
        $val = $this->getBackingStore()->get('callChainId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callChainId'");
    }

    /**
     * Gets the cloudServiceDeploymentEnvironment property value. A geo-region where the service is deployed, such as ProdNoam.
     * @return string|null
    */
    public function getCloudServiceDeploymentEnvironment(): ?string {
        $val = $this->getBackingStore()->get('cloudServiceDeploymentEnvironment');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudServiceDeploymentEnvironment'");
    }

    /**
     * Gets the cloudServiceDeploymentId property value. A unique deployment identifier assigned by Azure.
     * @return string|null
    */
    public function getCloudServiceDeploymentId(): ?string {
        $val = $this->getBackingStore()->get('cloudServiceDeploymentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudServiceDeploymentId'");
    }

    /**
     * Gets the cloudServiceInstanceName property value. The Azure deployed cloud service instance name, such as FrontEndIN3.
     * @return string|null
    */
    public function getCloudServiceInstanceName(): ?string {
        $val = $this->getBackingStore()->get('cloudServiceInstanceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudServiceInstanceName'");
    }

    /**
     * Gets the cloudServiceName property value. The Azure deployed cloud service name, such as contoso.cloudapp.net.
     * @return string|null
    */
    public function getCloudServiceName(): ?string {
        $val = $this->getBackingStore()->get('cloudServiceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudServiceName'");
    }

    /**
     * Gets the deviceDescription property value. Any additional description, such as VTC Bldg 30/21.
     * @return string|null
    */
    public function getDeviceDescription(): ?string {
        $val = $this->getBackingStore()->get('deviceDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceDescription'");
    }

    /**
     * Gets the deviceName property value. The user media agent name, such as Cisco SX80.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callChainId' => fn(ParseNode $n) => $o->setCallChainId($n->getStringValue()),
            'cloudServiceDeploymentEnvironment' => fn(ParseNode $n) => $o->setCloudServiceDeploymentEnvironment($n->getStringValue()),
            'cloudServiceDeploymentId' => fn(ParseNode $n) => $o->setCloudServiceDeploymentId($n->getStringValue()),
            'cloudServiceInstanceName' => fn(ParseNode $n) => $o->setCloudServiceInstanceName($n->getStringValue()),
            'cloudServiceName' => fn(ParseNode $n) => $o->setCloudServiceName($n->getStringValue()),
            'deviceDescription' => fn(ParseNode $n) => $o->setDeviceDescription($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'mediaLegId' => fn(ParseNode $n) => $o->setMediaLegId($n->getStringValue()),
            'mediaQualityList' => fn(ParseNode $n) => $o->setMediaQualityList($n->getCollectionOfObjectValues([TeleconferenceDeviceMediaQuality::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'participantId' => fn(ParseNode $n) => $o->setParticipantId($n->getStringValue()),
        ];
    }

    /**
     * Gets the mediaLegId property value. A unique identifier for a specific media leg of a participant in a conference.  One participant can have multiple media leg identifiers if retargeting happens. CVI partner assigns this value.
     * @return string|null
    */
    public function getMediaLegId(): ?string {
        $val = $this->getBackingStore()->get('mediaLegId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaLegId'");
    }

    /**
     * Gets the mediaQualityList property value. The list of media qualities in a media session (call), such as audio quality, video quality, and/or screen sharing quality.
     * @return array<TeleconferenceDeviceMediaQuality>|null
    */
    public function getMediaQualityList(): ?array {
        $val = $this->getBackingStore()->get('mediaQualityList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TeleconferenceDeviceMediaQuality::class);
            /** @var array<TeleconferenceDeviceMediaQuality>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaQualityList'");
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
     * Gets the participantId property value. A unique identifier for a specific participant in a conference. The CVI partner needs to copy over Call.MyParticipantId to this property.
     * @return string|null
    */
    public function getParticipantId(): ?string {
        $val = $this->getBackingStore()->get('participantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'participantId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('callChainId', $this->getCallChainId());
        $writer->writeStringValue('cloudServiceDeploymentEnvironment', $this->getCloudServiceDeploymentEnvironment());
        $writer->writeStringValue('cloudServiceDeploymentId', $this->getCloudServiceDeploymentId());
        $writer->writeStringValue('cloudServiceInstanceName', $this->getCloudServiceInstanceName());
        $writer->writeStringValue('cloudServiceName', $this->getCloudServiceName());
        $writer->writeStringValue('deviceDescription', $this->getDeviceDescription());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('mediaLegId', $this->getMediaLegId());
        $writer->writeCollectionOfObjectValues('mediaQualityList', $this->getMediaQualityList());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('participantId', $this->getParticipantId());
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
     * Sets the callChainId property value. A unique identifier for all  the participant calls in a conference or a unique identifier for two participant calls in P2P call. This needs to be copied over from Microsoft.Graph.Call.CallChainId.
     * @param string|null $value Value to set for the callChainId property.
    */
    public function setCallChainId(?string $value): void {
        $this->getBackingStore()->set('callChainId', $value);
    }

    /**
     * Sets the cloudServiceDeploymentEnvironment property value. A geo-region where the service is deployed, such as ProdNoam.
     * @param string|null $value Value to set for the cloudServiceDeploymentEnvironment property.
    */
    public function setCloudServiceDeploymentEnvironment(?string $value): void {
        $this->getBackingStore()->set('cloudServiceDeploymentEnvironment', $value);
    }

    /**
     * Sets the cloudServiceDeploymentId property value. A unique deployment identifier assigned by Azure.
     * @param string|null $value Value to set for the cloudServiceDeploymentId property.
    */
    public function setCloudServiceDeploymentId(?string $value): void {
        $this->getBackingStore()->set('cloudServiceDeploymentId', $value);
    }

    /**
     * Sets the cloudServiceInstanceName property value. The Azure deployed cloud service instance name, such as FrontEndIN3.
     * @param string|null $value Value to set for the cloudServiceInstanceName property.
    */
    public function setCloudServiceInstanceName(?string $value): void {
        $this->getBackingStore()->set('cloudServiceInstanceName', $value);
    }

    /**
     * Sets the cloudServiceName property value. The Azure deployed cloud service name, such as contoso.cloudapp.net.
     * @param string|null $value Value to set for the cloudServiceName property.
    */
    public function setCloudServiceName(?string $value): void {
        $this->getBackingStore()->set('cloudServiceName', $value);
    }

    /**
     * Sets the deviceDescription property value. Any additional description, such as VTC Bldg 30/21.
     * @param string|null $value Value to set for the deviceDescription property.
    */
    public function setDeviceDescription(?string $value): void {
        $this->getBackingStore()->set('deviceDescription', $value);
    }

    /**
     * Sets the deviceName property value. The user media agent name, such as Cisco SX80.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the mediaLegId property value. A unique identifier for a specific media leg of a participant in a conference.  One participant can have multiple media leg identifiers if retargeting happens. CVI partner assigns this value.
     * @param string|null $value Value to set for the mediaLegId property.
    */
    public function setMediaLegId(?string $value): void {
        $this->getBackingStore()->set('mediaLegId', $value);
    }

    /**
     * Sets the mediaQualityList property value. The list of media qualities in a media session (call), such as audio quality, video quality, and/or screen sharing quality.
     * @param array<TeleconferenceDeviceMediaQuality>|null $value Value to set for the mediaQualityList property.
    */
    public function setMediaQualityList(?array $value): void {
        $this->getBackingStore()->set('mediaQualityList', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the participantId property value. A unique identifier for a specific participant in a conference. The CVI partner needs to copy over Call.MyParticipantId to this property.
     * @param string|null $value Value to set for the participantId property.
    */
    public function setParticipantId(?string $value): void {
        $this->getBackingStore()->set('participantId', $value);
    }

}
