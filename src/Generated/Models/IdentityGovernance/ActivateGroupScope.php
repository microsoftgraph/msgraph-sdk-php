<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Generated\Models\Group;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ActivateGroupScope extends ActivationScope implements Parsable 
{
    /**
     * Instantiates a new ActivateGroupScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.activateGroupScope');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActivateGroupScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActivateGroupScope {
        return new ActivateGroupScope();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'group' => fn(ParseNode $n) => $o->setGroup($n->getObjectValue([Group::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the group property value. The group property
     * @return Group|null
    */
    public function getGroup(): ?Group {
        $val = $this->getBackingStore()->get('group');
        if (is_null($val) || $val instanceof Group) {
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
        $writer->writeObjectValue('group', $this->getGroup());
    }

    /**
     * Sets the group property value. The group property
     * @param Group|null $value Value to set for the group property.
    */
    public function setGroup(?Group $value): void {
        $this->getBackingStore()->set('group', $value);
    }

}
