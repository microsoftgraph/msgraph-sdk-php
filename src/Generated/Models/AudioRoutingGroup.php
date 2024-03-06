<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AudioRoutingGroup extends Entity implements Parsable 
{
    /**
     * Instantiates a new AudioRoutingGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AudioRoutingGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AudioRoutingGroup {
        return new AudioRoutingGroup();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'receivers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setReceivers($val);
            },
            'routingMode' => fn(ParseNode $n) => $o->setRoutingMode($n->getEnumValue(RoutingMode::class)),
            'sources' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSources($val);
            },
        ]);
    }

    /**
     * Gets the receivers property value. List of receiving participant ids.
     * @return array<string>|null
    */
    public function getReceivers(): ?array {
        $val = $this->getBackingStore()->get('receivers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'receivers'");
    }

    /**
     * Gets the routingMode property value. The routingMode property
     * @return RoutingMode|null
    */
    public function getRoutingMode(): ?RoutingMode {
        $val = $this->getBackingStore()->get('routingMode');
        if (is_null($val) || $val instanceof RoutingMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'routingMode'");
    }

    /**
     * Gets the sources property value. List of source participant ids.
     * @return array<string>|null
    */
    public function getSources(): ?array {
        $val = $this->getBackingStore()->get('sources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('receivers', $this->getReceivers());
        $writer->writeEnumValue('routingMode', $this->getRoutingMode());
        $writer->writeCollectionOfPrimitiveValues('sources', $this->getSources());
    }

    /**
     * Sets the receivers property value. List of receiving participant ids.
     * @param array<string>|null $value Value to set for the receivers property.
    */
    public function setReceivers(?array $value): void {
        $this->getBackingStore()->set('receivers', $value);
    }

    /**
     * Sets the routingMode property value. The routingMode property
     * @param RoutingMode|null $value Value to set for the routingMode property.
    */
    public function setRoutingMode(?RoutingMode $value): void {
        $this->getBackingStore()->set('routingMode', $value);
    }

    /**
     * Sets the sources property value. List of source participant ids.
     * @param array<string>|null $value Value to set for the sources property.
    */
    public function setSources(?array $value): void {
        $this->getBackingStore()->set('sources', $value);
    }

}
