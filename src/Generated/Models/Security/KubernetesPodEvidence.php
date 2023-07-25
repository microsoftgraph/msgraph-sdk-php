<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class KubernetesPodEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new kubernetesPodEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.kubernetesPodEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KubernetesPodEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KubernetesPodEvidence {
        return new KubernetesPodEvidence();
    }

    /**
     * Gets the containers property value. The containers property
     * @return array<ContainerEvidence>|null
    */
    public function getContainers(): ?array {
        $val = $this->getBackingStore()->get('containers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ContainerEvidence::class);
            /** @var array<ContainerEvidence>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containers'");
    }

    /**
     * Gets the controller property value. The controller property
     * @return KubernetesControllerEvidence|null
    */
    public function getController(): ?KubernetesControllerEvidence {
        $val = $this->getBackingStore()->get('controller');
        if (is_null($val) || $val instanceof KubernetesControllerEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'controller'");
    }

    /**
     * Gets the ephemeralContainers property value. The ephemeralContainers property
     * @return array<ContainerEvidence>|null
    */
    public function getEphemeralContainers(): ?array {
        $val = $this->getBackingStore()->get('ephemeralContainers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ContainerEvidence::class);
            /** @var array<ContainerEvidence>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ephemeralContainers'");
    }

    /**
     * Gets the namespace property value. The namespace property
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'containers' => fn(ParseNode $n) => $o->setContainers($n->getCollectionOfObjectValues([ContainerEvidence::class, 'createFromDiscriminatorValue'])),
            'controller' => fn(ParseNode $n) => $o->setController($n->getObjectValue([KubernetesControllerEvidence::class, 'createFromDiscriminatorValue'])),
            'ephemeralContainers' => fn(ParseNode $n) => $o->setEphemeralContainers($n->getCollectionOfObjectValues([ContainerEvidence::class, 'createFromDiscriminatorValue'])),
            'namespace' => fn(ParseNode $n) => $o->setEscapedNamespace($n->getObjectValue([KubernetesNamespaceEvidence::class, 'createFromDiscriminatorValue'])),
            'initContainers' => fn(ParseNode $n) => $o->setInitContainers($n->getCollectionOfObjectValues([ContainerEvidence::class, 'createFromDiscriminatorValue'])),
            'labels' => fn(ParseNode $n) => $o->setLabels($n->getObjectValue([Dictionary::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'podIp' => fn(ParseNode $n) => $o->setPodIp($n->getObjectValue([IpEvidence::class, 'createFromDiscriminatorValue'])),
            'serviceAccount' => fn(ParseNode $n) => $o->setServiceAccount($n->getObjectValue([KubernetesServiceAccountEvidence::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the initContainers property value. The initContainers property
     * @return array<ContainerEvidence>|null
    */
    public function getInitContainers(): ?array {
        $val = $this->getBackingStore()->get('initContainers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ContainerEvidence::class);
            /** @var array<ContainerEvidence>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initContainers'");
    }

    /**
     * Gets the labels property value. The labels property
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
     * Gets the name property value. The name property
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
     * Gets the podIp property value. The podIp property
     * @return IpEvidence|null
    */
    public function getPodIp(): ?IpEvidence {
        $val = $this->getBackingStore()->get('podIp');
        if (is_null($val) || $val instanceof IpEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'podIp'");
    }

    /**
     * Gets the serviceAccount property value. The serviceAccount property
     * @return KubernetesServiceAccountEvidence|null
    */
    public function getServiceAccount(): ?KubernetesServiceAccountEvidence {
        $val = $this->getBackingStore()->get('serviceAccount');
        if (is_null($val) || $val instanceof KubernetesServiceAccountEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceAccount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('containers', $this->getContainers());
        $writer->writeObjectValue('controller', $this->getController());
        $writer->writeCollectionOfObjectValues('ephemeralContainers', $this->getEphemeralContainers());
        $writer->writeObjectValue('namespace', $this->getEscapedNamespace());
        $writer->writeCollectionOfObjectValues('initContainers', $this->getInitContainers());
        $writer->writeObjectValue('labels', $this->getLabels());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('podIp', $this->getPodIp());
        $writer->writeObjectValue('serviceAccount', $this->getServiceAccount());
    }

    /**
     * Sets the containers property value. The containers property
     * @param array<ContainerEvidence>|null $value Value to set for the containers property.
    */
    public function setContainers(?array $value): void {
        $this->getBackingStore()->set('containers', $value);
    }

    /**
     * Sets the controller property value. The controller property
     * @param KubernetesControllerEvidence|null $value Value to set for the controller property.
    */
    public function setController(?KubernetesControllerEvidence $value): void {
        $this->getBackingStore()->set('controller', $value);
    }

    /**
     * Sets the ephemeralContainers property value. The ephemeralContainers property
     * @param array<ContainerEvidence>|null $value Value to set for the ephemeralContainers property.
    */
    public function setEphemeralContainers(?array $value): void {
        $this->getBackingStore()->set('ephemeralContainers', $value);
    }

    /**
     * Sets the namespace property value. The namespace property
     * @param KubernetesNamespaceEvidence|null $value Value to set for the namespace property.
    */
    public function setEscapedNamespace(?KubernetesNamespaceEvidence $value): void {
        $this->getBackingStore()->set('escapedNamespace', $value);
    }

    /**
     * Sets the initContainers property value. The initContainers property
     * @param array<ContainerEvidence>|null $value Value to set for the initContainers property.
    */
    public function setInitContainers(?array $value): void {
        $this->getBackingStore()->set('initContainers', $value);
    }

    /**
     * Sets the labels property value. The labels property
     * @param Dictionary|null $value Value to set for the labels property.
    */
    public function setLabels(?Dictionary $value): void {
        $this->getBackingStore()->set('labels', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the podIp property value. The podIp property
     * @param IpEvidence|null $value Value to set for the podIp property.
    */
    public function setPodIp(?IpEvidence $value): void {
        $this->getBackingStore()->set('podIp', $value);
    }

    /**
     * Sets the serviceAccount property value. The serviceAccount property
     * @param KubernetesServiceAccountEvidence|null $value Value to set for the serviceAccount property.
    */
    public function setServiceAccount(?KubernetesServiceAccountEvidence $value): void {
        $this->getBackingStore()->set('serviceAccount', $value);
    }

}
