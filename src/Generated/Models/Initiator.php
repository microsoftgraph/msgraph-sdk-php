<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Initiator extends Identity implements Parsable 
{
    /**
     * @var InitiatorType|null $initiatorType Type of initiator. Possible values are: user, application, system, unknownFutureValue.
    */
    private ?InitiatorType $initiatorType = null;
    
    /**
     * Instantiates a new Initiator and sets the default values.
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'initiatorType' => function (ParseNode $n) use ($o) { $o->setInitiatorType($n->getEnumValue(InitiatorType::class)); },
        ]);
    }

    /**
     * Gets the initiatorType property value. Type of initiator. Possible values are: user, application, system, unknownFutureValue.
     * @return InitiatorType|null
    */
    public function getInitiatorType(): ?InitiatorType {
        return $this->initiatorType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('initiatorType', $this->initiatorType);
    }

    /**
     * Sets the initiatorType property value. Type of initiator. Possible values are: user, application, system, unknownFutureValue.
     *  @param InitiatorType|null $value Value to set for the initiatorType property.
    */
    public function setInitiatorType(?InitiatorType $value ): void {
        $this->initiatorType = $value;
    }

}
