<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointIdentitySet extends IdentitySet implements Parsable 
{
    /**
     * Instantiates a new SharePointIdentitySet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sharePointIdentitySet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointIdentitySet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointIdentitySet {
        return new SharePointIdentitySet();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'group' => fn(ParseNode $n) => $o->setGroup($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'siteGroup' => fn(ParseNode $n) => $o->setSiteGroup($n->getObjectValue([SharePointIdentity::class, 'createFromDiscriminatorValue'])),
            'siteUser' => fn(ParseNode $n) => $o->setSiteUser($n->getObjectValue([SharePointIdentity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the group property value. The group associated with this action. Optional.
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
     * Gets the siteGroup property value. The SharePoint group associated with this action. Optional.
     * @return SharePointIdentity|null
    */
    public function getSiteGroup(): ?SharePointIdentity {
        $val = $this->getBackingStore()->get('siteGroup');
        if (is_null($val) || $val instanceof SharePointIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteGroup'");
    }

    /**
     * Gets the siteUser property value. The SharePoint user associated with this action. Optional.
     * @return SharePointIdentity|null
    */
    public function getSiteUser(): ?SharePointIdentity {
        $val = $this->getBackingStore()->get('siteUser');
        if (is_null($val) || $val instanceof SharePointIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteUser'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('group', $this->getGroup());
        $writer->writeObjectValue('siteGroup', $this->getSiteGroup());
        $writer->writeObjectValue('siteUser', $this->getSiteUser());
    }

    /**
     * Sets the group property value. The group associated with this action. Optional.
     * @param Identity|null $value Value to set for the group property.
    */
    public function setGroup(?Identity $value): void {
        $this->getBackingStore()->set('group', $value);
    }

    /**
     * Sets the siteGroup property value. The SharePoint group associated with this action. Optional.
     * @param SharePointIdentity|null $value Value to set for the siteGroup property.
    */
    public function setSiteGroup(?SharePointIdentity $value): void {
        $this->getBackingStore()->set('siteGroup', $value);
    }

    /**
     * Sets the siteUser property value. The SharePoint user associated with this action. Optional.
     * @param SharePointIdentity|null $value Value to set for the siteUser property.
    */
    public function setSiteUser(?SharePointIdentity $value): void {
        $this->getBackingStore()->set('siteUser', $value);
    }

}
