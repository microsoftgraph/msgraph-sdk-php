<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedAccessRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new PrivilegedAccessRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedAccessRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedAccessRoot {
        return new PrivilegedAccessRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'group' => fn(ParseNode $n) => $o->setGroup($n->getObjectValue([PrivilegedAccessGroup::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the group property value. A group that's governed through Privileged Identity Management (PIM).
     * @return PrivilegedAccessGroup|null
    */
    public function getGroup(): ?PrivilegedAccessGroup {
        $val = $this->getBackingStore()->get('group');
        if (is_null($val) || $val instanceof PrivilegedAccessGroup) {
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
     * Sets the group property value. A group that's governed through Privileged Identity Management (PIM).
     * @param PrivilegedAccessGroup|null $value Value to set for the group property.
    */
    public function setGroup(?PrivilegedAccessGroup $value): void {
        $this->getBackingStore()->set('group', $value);
    }

}
