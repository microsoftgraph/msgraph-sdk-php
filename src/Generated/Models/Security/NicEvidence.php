<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class NicEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new NicEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.nicEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NicEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NicEvidence {
        return new NicEvidence();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getObjectValue([IpEvidence::class, 'createFromDiscriminatorValue'])),
            'macAddress' => fn(ParseNode $n) => $o->setMacAddress($n->getStringValue()),
            'vlans' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setVlans($val);
            },
        ]);
    }

    /**
     * Gets the ipAddress property value. The ipAddress property
     * @return IpEvidence|null
    */
    public function getIpAddress(): ?IpEvidence {
        $val = $this->getBackingStore()->get('ipAddress');
        if (is_null($val) || $val instanceof IpEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddress'");
    }

    /**
     * Gets the macAddress property value. The macAddress property
     * @return string|null
    */
    public function getMacAddress(): ?string {
        $val = $this->getBackingStore()->get('macAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macAddress'");
    }

    /**
     * Gets the vlans property value. The vlans property
     * @return array<string>|null
    */
    public function getVlans(): ?array {
        $val = $this->getBackingStore()->get('vlans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vlans'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('ipAddress', $this->getIpAddress());
        $writer->writeStringValue('macAddress', $this->getMacAddress());
        $writer->writeCollectionOfPrimitiveValues('vlans', $this->getVlans());
    }

    /**
     * Sets the ipAddress property value. The ipAddress property
     * @param IpEvidence|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?IpEvidence $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the macAddress property value. The macAddress property
     * @param string|null $value Value to set for the macAddress property.
    */
    public function setMacAddress(?string $value): void {
        $this->getBackingStore()->set('macAddress', $value);
    }

    /**
     * Sets the vlans property value. The vlans property
     * @param array<string>|null $value Value to set for the vlans property.
    */
    public function setVlans(?array $value): void {
        $this->getBackingStore()->set('vlans', $value);
    }

}
