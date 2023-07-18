<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Initiator extends Identity implements Parsable 
{
    /**
     * Instantiates a new initiator and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.initiator');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Initiator
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Initiator {
        return new Initiator();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'initiatorType' => fn(ParseNode $n) => $o->setInitiatorType($n->getEnumValue(InitiatorType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the initiatorType property value. Type of initiator. Possible values are: user, application, system, unknownFutureValue.
     * @return InitiatorType|null
    */
    public function getInitiatorType(): ?InitiatorType {
        $val = $this->getBackingStore()->get('initiatorType');
        if (is_null($val) || $val instanceof InitiatorType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiatorType'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('initiatorType', $this->getInitiatorType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the initiatorType property value. Type of initiator. Possible values are: user, application, system, unknownFutureValue.
     * @param InitiatorType|null $value Value to set for the initiatorType property.
    */
    public function setInitiatorType(?InitiatorType $value): void {
        $this->getBackingStore()->set('initiatorType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
