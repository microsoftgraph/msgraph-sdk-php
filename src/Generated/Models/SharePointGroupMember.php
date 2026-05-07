<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointGroupMember extends Entity implements Parsable 
{
    /**
     * Instantiates a new SharePointGroupMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointGroupMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointGroupMember {
        return new SharePointGroupMember();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'identity' => fn(ParseNode $n) => $o->setIdentity($n->getObjectValue([SharePointIdentitySet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the identity property value. The identity represented by the sharePointGroupMember object.
     * @return SharePointIdentitySet|null
    */
    public function getIdentity(): ?SharePointIdentitySet {
        $val = $this->getBackingStore()->get('identity');
        if (is_null($val) || $val instanceof SharePointIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('identity', $this->getIdentity());
    }

    /**
     * Sets the identity property value. The identity represented by the sharePointGroupMember object.
     * @param SharePointIdentitySet|null $value Value to set for the identity property.
    */
    public function setIdentity(?SharePointIdentitySet $value): void {
        $this->getBackingStore()->set('identity', $value);
    }

}
