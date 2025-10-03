<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class KubernetesServicePort implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new KubernetesServicePort and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KubernetesServicePort
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KubernetesServicePort {
        return new KubernetesServicePort();
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
     * Gets the appProtocol property value. The application protocol for this port.
     * @return string|null
    */
    public function getAppProtocol(): ?string {
        $val = $this->getBackingStore()->get('appProtocol');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appProtocol'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appProtocol' => fn(ParseNode $n) => $o->setAppProtocol($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'nodePort' => fn(ParseNode $n) => $o->setNodePort($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'port' => fn(ParseNode $n) => $o->setPort($n->getIntegerValue()),
            'protocol' => fn(ParseNode $n) => $o->setProtocol($n->getEnumValue(ContainerPortProtocol::class)),
            'targetPort' => fn(ParseNode $n) => $o->setTargetPort($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The name of this port within the service.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the nodePort property value. The port on each node on which this service is exposed when the type is either NodePort or LoadBalancer.
     * @return int|null
    */
    public function getNodePort(): ?int {
        $val = $this->getBackingStore()->get('nodePort');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nodePort'");
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
     * Gets the port property value. The port that this service exposes.
     * @return int|null
    */
    public function getPort(): ?int {
        $val = $this->getBackingStore()->get('port');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'port'");
    }

    /**
     * Gets the protocol property value. The protocol name. Possible values are: udp, tcp, sctp, unknownFutureValue.
     * @return ContainerPortProtocol|null
    */
    public function getProtocol(): ?ContainerPortProtocol {
        $val = $this->getBackingStore()->get('protocol');
        if (is_null($val) || $val instanceof ContainerPortProtocol) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protocol'");
    }

    /**
     * Gets the targetPort property value. The name or number of the port to access on the pods targeted by the service. The port number must be in the range 1 to 65535. The name must be an IANASVCNAME.
     * @return string|null
    */
    public function getTargetPort(): ?string {
        $val = $this->getBackingStore()->get('targetPort');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetPort'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appProtocol', $this->getAppProtocol());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeIntegerValue('nodePort', $this->getNodePort());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('port', $this->getPort());
        $writer->writeEnumValue('protocol', $this->getProtocol());
        $writer->writeStringValue('targetPort', $this->getTargetPort());
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
     * Sets the appProtocol property value. The application protocol for this port.
     * @param string|null $value Value to set for the appProtocol property.
    */
    public function setAppProtocol(?string $value): void {
        $this->getBackingStore()->set('appProtocol', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the name property value. The name of this port within the service.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the nodePort property value. The port on each node on which this service is exposed when the type is either NodePort or LoadBalancer.
     * @param int|null $value Value to set for the nodePort property.
    */
    public function setNodePort(?int $value): void {
        $this->getBackingStore()->set('nodePort', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the port property value. The port that this service exposes.
     * @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value): void {
        $this->getBackingStore()->set('port', $value);
    }

    /**
     * Sets the protocol property value. The protocol name. Possible values are: udp, tcp, sctp, unknownFutureValue.
     * @param ContainerPortProtocol|null $value Value to set for the protocol property.
    */
    public function setProtocol(?ContainerPortProtocol $value): void {
        $this->getBackingStore()->set('protocol', $value);
    }

    /**
     * Sets the targetPort property value. The name or number of the port to access on the pods targeted by the service. The port number must be in the range 1 to 65535. The name must be an IANASVCNAME.
     * @param string|null $value Value to set for the targetPort property.
    */
    public function setTargetPort(?string $value): void {
        $this->getBackingStore()->set('targetPort', $value);
    }

}
