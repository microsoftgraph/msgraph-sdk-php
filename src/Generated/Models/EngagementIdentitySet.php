<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The Viva Engage identities.
*/
class EngagementIdentitySet extends IdentitySet implements Parsable 
{
    /**
     * Instantiates a new EngagementIdentitySet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.engagementIdentitySet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EngagementIdentitySet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EngagementIdentitySet {
        return new EngagementIdentitySet();
    }

    /**
     * Gets the audience property value. Optional. The audience associated with this action.
     * @return Identity|null
    */
    public function getAudience(): ?Identity {
        $val = $this->getBackingStore()->get('audience');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'audience'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'audience' => fn(ParseNode $n) => $o->setAudience($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'group' => fn(ParseNode $n) => $o->setGroup($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the group property value. Optional. The group associated with this action.
     * @return Identity|null
    */
    public function getGroup(): ?Identity {
        $val = $this->getBackingStore()->get('group');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'group'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('audience', $this->getAudience());
        $writer->writeObjectValue('group', $this->getGroup());
    }

    /**
     * Sets the audience property value. Optional. The audience associated with this action.
     * @param Identity|null $value Value to set for the audience property.
    */
    public function setAudience(?Identity $value): void {
        $this->getBackingStore()->set('audience', $value);
    }

    /**
     * Sets the group property value. Optional. The group associated with this action.
     * @param Identity|null $value Value to set for the group property.
    */
    public function setGroup(?Identity $value): void {
        $this->getBackingStore()->set('group', $value);
    }

}
