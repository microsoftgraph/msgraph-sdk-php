<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class KubernetesControllerEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new KubernetesControllerEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.kubernetesControllerEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KubernetesControllerEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KubernetesControllerEvidence {
        return new KubernetesControllerEvidence();
    }

    /**
     * Gets the namespace property value. The service account namespace.
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
            'namespace' => fn(ParseNode $n) => $o->setEscapedNamespace($n->getObjectValue([KubernetesNamespaceEvidence::class, 'createFromDiscriminatorValue'])),
            'labels' => fn(ParseNode $n) => $o->setLabels($n->getObjectValue([Dictionary::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the labels property value. The labels for the Kubernetes pod.
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
     * Gets the name property value. The controller name.
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
     * Gets the type property value. The controller type.
     * @return string|null
    */
    public function getType(): ?string {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('namespace', $this->getEscapedNamespace());
        $writer->writeObjectValue('labels', $this->getLabels());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the namespace property value. The service account namespace.
     * @param KubernetesNamespaceEvidence|null $value Value to set for the namespace property.
    */
    public function setEscapedNamespace(?KubernetesNamespaceEvidence $value): void {
        $this->getBackingStore()->set('escapedNamespace', $value);
    }

    /**
     * Sets the labels property value. The labels for the Kubernetes pod.
     * @param Dictionary|null $value Value to set for the labels property.
    */
    public function setLabels(?Dictionary $value): void {
        $this->getBackingStore()->set('labels', $value);
    }

    /**
     * Sets the name property value. The controller name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the type property value. The controller type.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
