<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ContainerEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new ContainerEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.containerEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContainerEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContainerEvidence {
        return new ContainerEvidence();
    }

    /**
     * Gets the args property value. The list of arguments.
     * @return array<string>|null
    */
    public function getArgs(): ?array {
        $val = $this->getBackingStore()->get('args');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'args'");
    }

    /**
     * Gets the command property value. The list of commands.
     * @return array<string>|null
    */
    public function getCommand(): ?array {
        $val = $this->getBackingStore()->get('command');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'command'");
    }

    /**
     * Gets the containerId property value. The container ID.
     * @return string|null
    */
    public function getContainerId(): ?string {
        $val = $this->getBackingStore()->get('containerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containerId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'args' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setArgs($val);
            },
            'command' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCommand($val);
            },
            'containerId' => fn(ParseNode $n) => $o->setContainerId($n->getStringValue()),
            'image' => fn(ParseNode $n) => $o->setImage($n->getObjectValue([ContainerImageEvidence::class, 'createFromDiscriminatorValue'])),
            'isPrivileged' => fn(ParseNode $n) => $o->setIsPrivileged($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'pod' => fn(ParseNode $n) => $o->setPod($n->getObjectValue([KubernetesPodEvidence::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the image property value. The image used to run the container.
     * @return ContainerImageEvidence|null
    */
    public function getImage(): ?ContainerImageEvidence {
        $val = $this->getBackingStore()->get('image');
        if (is_null($val) || $val instanceof ContainerImageEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'image'");
    }

    /**
     * Gets the isPrivileged property value. The privileged status.
     * @return bool|null
    */
    public function getIsPrivileged(): ?bool {
        $val = $this->getBackingStore()->get('isPrivileged');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPrivileged'");
    }

    /**
     * Gets the name property value. The container name.
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
     * Gets the pod property value. The pod this container belongs to.
     * @return KubernetesPodEvidence|null
    */
    public function getPod(): ?KubernetesPodEvidence {
        $val = $this->getBackingStore()->get('pod');
        if (is_null($val) || $val instanceof KubernetesPodEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pod'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('args', $this->getArgs());
        $writer->writeCollectionOfPrimitiveValues('command', $this->getCommand());
        $writer->writeStringValue('containerId', $this->getContainerId());
        $writer->writeObjectValue('image', $this->getImage());
        $writer->writeBooleanValue('isPrivileged', $this->getIsPrivileged());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('pod', $this->getPod());
    }

    /**
     * Sets the args property value. The list of arguments.
     * @param array<string>|null $value Value to set for the args property.
    */
    public function setArgs(?array $value): void {
        $this->getBackingStore()->set('args', $value);
    }

    /**
     * Sets the command property value. The list of commands.
     * @param array<string>|null $value Value to set for the command property.
    */
    public function setCommand(?array $value): void {
        $this->getBackingStore()->set('command', $value);
    }

    /**
     * Sets the containerId property value. The container ID.
     * @param string|null $value Value to set for the containerId property.
    */
    public function setContainerId(?string $value): void {
        $this->getBackingStore()->set('containerId', $value);
    }

    /**
     * Sets the image property value. The image used to run the container.
     * @param ContainerImageEvidence|null $value Value to set for the image property.
    */
    public function setImage(?ContainerImageEvidence $value): void {
        $this->getBackingStore()->set('image', $value);
    }

    /**
     * Sets the isPrivileged property value. The privileged status.
     * @param bool|null $value Value to set for the isPrivileged property.
    */
    public function setIsPrivileged(?bool $value): void {
        $this->getBackingStore()->set('isPrivileged', $value);
    }

    /**
     * Sets the name property value. The container name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the pod property value. The pod this container belongs to.
     * @param KubernetesPodEvidence|null $value Value to set for the pod property.
    */
    public function setPod(?KubernetesPodEvidence $value): void {
        $this->getBackingStore()->set('pod', $value);
    }

}
