<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class KubernetesClusterEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new kubernetesClusterEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.kubernetesClusterEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KubernetesClusterEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KubernetesClusterEvidence {
        return new KubernetesClusterEvidence();
    }

    /**
     * Gets the cloudResource property value. The cloudResource property
     * @return AlertEvidence|null
    */
    public function getCloudResource(): ?AlertEvidence {
        $val = $this->getBackingStore()->get('cloudResource');
        if (is_null($val) || $val instanceof AlertEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudResource'");
    }

    /**
     * Gets the distribution property value. The distribution property
     * @return string|null
    */
    public function getDistribution(): ?string {
        $val = $this->getBackingStore()->get('distribution');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'distribution'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cloudResource' => fn(ParseNode $n) => $o->setCloudResource($n->getObjectValue([AlertEvidence::class, 'createFromDiscriminatorValue'])),
            'distribution' => fn(ParseNode $n) => $o->setDistribution($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getEnumValue(KubernetesPlatform::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
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
     * Gets the platform property value. The platform property
     * @return KubernetesPlatform|null
    */
    public function getPlatform(): ?KubernetesPlatform {
        $val = $this->getBackingStore()->get('platform');
        if (is_null($val) || $val instanceof KubernetesPlatform) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platform'");
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('cloudResource', $this->getCloudResource());
        $writer->writeStringValue('distribution', $this->getDistribution());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeEnumValue('platform', $this->getPlatform());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the cloudResource property value. The cloudResource property
     * @param AlertEvidence|null $value Value to set for the cloudResource property.
    */
    public function setCloudResource(?AlertEvidence $value): void {
        $this->getBackingStore()->set('cloudResource', $value);
    }

    /**
     * Sets the distribution property value. The distribution property
     * @param string|null $value Value to set for the distribution property.
    */
    public function setDistribution(?string $value): void {
        $this->getBackingStore()->set('distribution', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the platform property value. The platform property
     * @param KubernetesPlatform|null $value Value to set for the platform property.
    */
    public function setPlatform(?KubernetesPlatform $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

    /**
     * Sets the version property value. The version property
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
