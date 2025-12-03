<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignedPlaceMode extends PlaceMode implements Parsable 
{
    /**
     * Instantiates a new AssignedPlaceMode and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.assignedPlaceMode');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignedPlaceMode
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignedPlaceMode {
        return new AssignedPlaceMode();
    }

    /**
     * Gets the assignedUserEmailAddress property value. The assignedUserEmailAddress property
     * @return string|null
    */
    public function getAssignedUserEmailAddress(): ?string {
        $val = $this->getBackingStore()->get('assignedUserEmailAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedUserEmailAddress'");
    }

    /**
     * Gets the assignedUserId property value. The assignedUserId property
     * @return string|null
    */
    public function getAssignedUserId(): ?string {
        $val = $this->getBackingStore()->get('assignedUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedUserId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedUserEmailAddress' => fn(ParseNode $n) => $o->setAssignedUserEmailAddress($n->getStringValue()),
            'assignedUserId' => fn(ParseNode $n) => $o->setAssignedUserId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignedUserEmailAddress', $this->getAssignedUserEmailAddress());
        $writer->writeStringValue('assignedUserId', $this->getAssignedUserId());
    }

    /**
     * Sets the assignedUserEmailAddress property value. The assignedUserEmailAddress property
     * @param string|null $value Value to set for the assignedUserEmailAddress property.
    */
    public function setAssignedUserEmailAddress(?string $value): void {
        $this->getBackingStore()->set('assignedUserEmailAddress', $value);
    }

    /**
     * Sets the assignedUserId property value. The assignedUserId property
     * @param string|null $value Value to set for the assignedUserId property.
    */
    public function setAssignedUserId(?string $value): void {
        $this->getBackingStore()->set('assignedUserId', $value);
    }

}
