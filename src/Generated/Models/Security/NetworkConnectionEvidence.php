<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NetworkConnectionEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new NetworkConnectionEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.networkConnectionEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NetworkConnectionEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NetworkConnectionEvidence {
        return new NetworkConnectionEvidence();
    }

    /**
     * Gets the destinationAddress property value. The destinationAddress property
     * @return IpEvidence|null
    */
    public function getDestinationAddress(): ?IpEvidence {
        $val = $this->getBackingStore()->get('destinationAddress');
        if (is_null($val) || $val instanceof IpEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationAddress'");
    }

    /**
     * Gets the destinationPort property value. The destinationPort property
     * @return int|null
    */
    public function getDestinationPort(): ?int {
        $val = $this->getBackingStore()->get('destinationPort');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationPort'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'destinationAddress' => fn(ParseNode $n) => $o->setDestinationAddress($n->getObjectValue([IpEvidence::class, 'createFromDiscriminatorValue'])),
            'destinationPort' => fn(ParseNode $n) => $o->setDestinationPort($n->getIntegerValue()),
            'protocol' => fn(ParseNode $n) => $o->setProtocol($n->getEnumValue(ProtocolType::class)),
            'sourceAddress' => fn(ParseNode $n) => $o->setSourceAddress($n->getObjectValue([IpEvidence::class, 'createFromDiscriminatorValue'])),
            'sourcePort' => fn(ParseNode $n) => $o->setSourcePort($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the protocol property value. The protocol property
     * @return ProtocolType|null
    */
    public function getProtocol(): ?ProtocolType {
        $val = $this->getBackingStore()->get('protocol');
        if (is_null($val) || $val instanceof ProtocolType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protocol'");
    }

    /**
     * Gets the sourceAddress property value. The sourceAddress property
     * @return IpEvidence|null
    */
    public function getSourceAddress(): ?IpEvidence {
        $val = $this->getBackingStore()->get('sourceAddress');
        if (is_null($val) || $val instanceof IpEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceAddress'");
    }

    /**
     * Gets the sourcePort property value. The sourcePort property
     * @return int|null
    */
    public function getSourcePort(): ?int {
        $val = $this->getBackingStore()->get('sourcePort');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourcePort'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('destinationAddress', $this->getDestinationAddress());
        $writer->writeIntegerValue('destinationPort', $this->getDestinationPort());
        $writer->writeEnumValue('protocol', $this->getProtocol());
        $writer->writeObjectValue('sourceAddress', $this->getSourceAddress());
        $writer->writeIntegerValue('sourcePort', $this->getSourcePort());
    }

    /**
     * Sets the destinationAddress property value. The destinationAddress property
     * @param IpEvidence|null $value Value to set for the destinationAddress property.
    */
    public function setDestinationAddress(?IpEvidence $value): void {
        $this->getBackingStore()->set('destinationAddress', $value);
    }

    /**
     * Sets the destinationPort property value. The destinationPort property
     * @param int|null $value Value to set for the destinationPort property.
    */
    public function setDestinationPort(?int $value): void {
        $this->getBackingStore()->set('destinationPort', $value);
    }

    /**
     * Sets the protocol property value. The protocol property
     * @param ProtocolType|null $value Value to set for the protocol property.
    */
    public function setProtocol(?ProtocolType $value): void {
        $this->getBackingStore()->set('protocol', $value);
    }

    /**
     * Sets the sourceAddress property value. The sourceAddress property
     * @param IpEvidence|null $value Value to set for the sourceAddress property.
    */
    public function setSourceAddress(?IpEvidence $value): void {
        $this->getBackingStore()->set('sourceAddress', $value);
    }

    /**
     * Sets the sourcePort property value. The sourcePort property
     * @param int|null $value Value to set for the sourcePort property.
    */
    public function setSourcePort(?int $value): void {
        $this->getBackingStore()->set('sourcePort', $value);
    }

}
