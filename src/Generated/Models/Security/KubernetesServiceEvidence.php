<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class KubernetesServiceEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new KubernetesServiceEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.kubernetesServiceEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KubernetesServiceEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KubernetesServiceEvidence {
        return new KubernetesServiceEvidence();
    }

    /**
     * Gets the clusterIP property value. The service cluster IP.
     * @return IpEvidence|null
    */
    public function getClusterIP(): ?IpEvidence {
        $val = $this->getBackingStore()->get('clusterIP');
        if (is_null($val) || $val instanceof IpEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clusterIP'");
    }

    /**
     * Gets the namespace property value. The service namespace.
     * @return KubernetesNamespaceEvidence|null
    */
    public function getEscapedNamespace(): ?KubernetesNamespaceEvidence {
        $val = $this->getBackingStore()->get('escapedNamespace');
        if (is_null($val) || $val instanceof KubernetesNamespaceEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedNamespace'");
    }

    /**
     * Gets the externalIPs property value. The service external IPs.
     * @return array<IpEvidence>|null
    */
    public function getExternalIPs(): ?array {
        $val = $this->getBackingStore()->get('externalIPs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IpEvidence::class);
            /** @var array<IpEvidence>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalIPs'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clusterIP' => fn(ParseNode $n) => $o->setClusterIP($n->getObjectValue([IpEvidence::class, 'createFromDiscriminatorValue'])),
            'namespace' => fn(ParseNode $n) => $o->setEscapedNamespace($n->getObjectValue([KubernetesNamespaceEvidence::class, 'createFromDiscriminatorValue'])),
            'externalIPs' => fn(ParseNode $n) => $o->setExternalIPs($n->getCollectionOfObjectValues([IpEvidence::class, 'createFromDiscriminatorValue'])),
            'labels' => fn(ParseNode $n) => $o->setLabels($n->getObjectValue([Dictionary::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'selector' => fn(ParseNode $n) => $o->setSelector($n->getObjectValue([Dictionary::class, 'createFromDiscriminatorValue'])),
            'servicePorts' => fn(ParseNode $n) => $o->setServicePorts($n->getCollectionOfObjectValues([KubernetesServicePort::class, 'createFromDiscriminatorValue'])),
            'serviceType' => fn(ParseNode $n) => $o->setServiceType($n->getEnumValue(KubernetesServiceType::class)),
        ]);
    }

    /**
     * Gets the labels property value. The service labels.
     * @return Dictionary|null
    */
    public function getLabels(): ?Dictionary {
        $val = $this->getBackingStore()->get('labels');
        if (is_null($val) || $val instanceof Dictionary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'labels'");
    }

    /**
     * Gets the name property value. The service name.
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
     * Gets the selector property value. The service selector.
     * @return Dictionary|null
    */
    public function getSelector(): ?Dictionary {
        $val = $this->getBackingStore()->get('selector');
        if (is_null($val) || $val instanceof Dictionary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'selector'");
    }

    /**
     * Gets the servicePorts property value. The list of service ports.
     * @return array<KubernetesServicePort>|null
    */
    public function getServicePorts(): ?array {
        $val = $this->getBackingStore()->get('servicePorts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KubernetesServicePort::class);
            /** @var array<KubernetesServicePort>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePorts'");
    }

    /**
     * Gets the serviceType property value. The serviceType property
     * @return KubernetesServiceType|null
    */
    public function getServiceType(): ?KubernetesServiceType {
        $val = $this->getBackingStore()->get('serviceType');
        if (is_null($val) || $val instanceof KubernetesServiceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('clusterIP', $this->getClusterIP());
        $writer->writeObjectValue('namespace', $this->getEscapedNamespace());
        $writer->writeCollectionOfObjectValues('externalIPs', $this->getExternalIPs());
        $writer->writeObjectValue('labels', $this->getLabels());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('selector', $this->getSelector());
        $writer->writeCollectionOfObjectValues('servicePorts', $this->getServicePorts());
        $writer->writeEnumValue('serviceType', $this->getServiceType());
    }

    /**
     * Sets the clusterIP property value. The service cluster IP.
     * @param IpEvidence|null $value Value to set for the clusterIP property.
    */
    public function setClusterIP(?IpEvidence $value): void {
        $this->getBackingStore()->set('clusterIP', $value);
    }

    /**
     * Sets the namespace property value. The service namespace.
     * @param KubernetesNamespaceEvidence|null $value Value to set for the namespace property.
    */
    public function setEscapedNamespace(?KubernetesNamespaceEvidence $value): void {
        $this->getBackingStore()->set('escapedNamespace', $value);
    }

    /**
     * Sets the externalIPs property value. The service external IPs.
     * @param array<IpEvidence>|null $value Value to set for the externalIPs property.
    */
    public function setExternalIPs(?array $value): void {
        $this->getBackingStore()->set('externalIPs', $value);
    }

    /**
     * Sets the labels property value. The service labels.
     * @param Dictionary|null $value Value to set for the labels property.
    */
    public function setLabels(?Dictionary $value): void {
        $this->getBackingStore()->set('labels', $value);
    }

    /**
     * Sets the name property value. The service name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the selector property value. The service selector.
     * @param Dictionary|null $value Value to set for the selector property.
    */
    public function setSelector(?Dictionary $value): void {
        $this->getBackingStore()->set('selector', $value);
    }

    /**
     * Sets the servicePorts property value. The list of service ports.
     * @param array<KubernetesServicePort>|null $value Value to set for the servicePorts property.
    */
    public function setServicePorts(?array $value): void {
        $this->getBackingStore()->set('servicePorts', $value);
    }

    /**
     * Sets the serviceType property value. The serviceType property
     * @param KubernetesServiceType|null $value Value to set for the serviceType property.
    */
    public function setServiceType(?KubernetesServiceType $value): void {
        $this->getBackingStore()->set('serviceType', $value);
    }

}
