<?php

namespace Microsoft\\Graph\\Generated\Models\Search;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Acronym extends SearchAnswer implements Parsable 
{
    /**
     * Instantiates a new Acronym and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Acronym
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Acronym {
        return new Acronym();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'standsFor' => fn(ParseNode $n) => $o->setStandsFor($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(AnswerState::class)),
        ]);
    }

    /**
     * Gets the standsFor property value. What the acronym stands for.
     * @return string|null
    */
    public function getStandsFor(): ?string {
        $val = $this->getBackingStore()->get('standsFor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'standsFor'");
    }

    /**
     * Gets the state property value. The state property
     * @return AnswerState|null
    */
    public function getState(): ?AnswerState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof AnswerState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('standsFor', $this->getStandsFor());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the standsFor property value. What the acronym stands for.
     * @param string|null $value Value to set for the standsFor property.
    */
    public function setStandsFor(?string $value): void {
        $this->getBackingStore()->set('standsFor', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param AnswerState|null $value Value to set for the state property.
    */
    public function setState(?AnswerState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
