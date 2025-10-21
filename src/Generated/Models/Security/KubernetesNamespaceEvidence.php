<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class KubernetesNamespaceEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new KubernetesNamespaceEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.kubernetesNamespaceEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KubernetesNamespaceEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KubernetesNamespaceEvidence {
        return new KubernetesNamespaceEvidence();
    }

    /**
     * Gets the cluster property value. The namespace cluster.
     * @return KubernetesClusterEvidence|null
    */
    public function getCluster(): ?KubernetesClusterEvidence {
        $val = $this->getBackingStore()->get('cluster');
        if (is_null($val) || $val instanceof KubernetesClusterEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cluster'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cluster' => fn(ParseNode $n) => $o->setCluster($n->getObjectValue([KubernetesClusterEvidence::class, 'createFromDiscriminatorValue'])),
            'labels' => fn(ParseNode $n) => $o->setLabels($n->getObjectValue([Dictionary::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
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
     * Gets the name property value. The namespace name.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('cluster', $this->getCluster());
        $writer->writeObjectValue('labels', $this->getLabels());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the cluster property value. The namespace cluster.
     * @param KubernetesClusterEvidence|null $value Value to set for the cluster property.
    */
    public function setCluster(?KubernetesClusterEvidence $value): void {
        $this->getBackingStore()->set('cluster', $value);
    }

    /**
     * Sets the labels property value. The labels for the Kubernetes pod.
     * @param Dictionary|null $value Value to set for the labels property.
    */
    public function setLabels(?Dictionary $value): void {
        $this->getBackingStore()->set('labels', $value);
    }

    /**
     * Sets the name property value. The namespace name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

}
