<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointIdentitySet extends IdentitySet implements Parsable 
{
    /**
     * @var Identity|null $group The group associated with this action. Optional.
    */
    private ?Identity $group = null;
    
    /**
     * @var SharePointIdentity|null $siteGroup The SharePoint group associated with this action. Optional.
    */
    private ?SharePointIdentity $siteGroup = null;
    
    /**
     * @var SharePointIdentity|null $siteUser The SharePoint user associated with this action. Optional.
    */
    private ?SharePointIdentity $siteUser = null;
    
    /**
     * Instantiates a new sharePointIdentitySet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'group' => function (ParseNode $n) use ($o) { $o->setGroup($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'siteGroup' => function (ParseNode $n) use ($o) { $o->setSiteGroup($n->getObjectValue(array(SharePointIdentity::class, 'createFromDiscriminatorValue'))); },
            'siteUser' => function (ParseNode $n) use ($o) { $o->setSiteUser($n->getObjectValue(array(SharePointIdentity::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the group property value. The group associated with this action. Optional.
     * @return Identity|null
    */
    public function getGroup(): ?Identity {
        return $this->group;
    }

    /**
     * Gets the siteGroup property value. The SharePoint group associated with this action. Optional.
     * @return SharePointIdentity|null
    */
    public function getSiteGroup(): ?SharePointIdentity {
        return $this->siteGroup;
    }

    /**
     * Gets the siteUser property value. The SharePoint user associated with this action. Optional.
     * @return SharePointIdentity|null
    */
    public function getSiteUser(): ?SharePointIdentity {
        return $this->siteUser;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('group', $this->group);
        $writer->writeObjectValue('siteGroup', $this->siteGroup);
        $writer->writeObjectValue('siteUser', $this->siteUser);
    }

    /**
     * Sets the group property value. The group associated with this action. Optional.
     *  @param Identity|null $value Value to set for the group property.
    */
    public function setGroup(?Identity $value ): void {
        $this->group = $value;
    }

    /**
     * Sets the siteGroup property value. The SharePoint group associated with this action. Optional.
     *  @param SharePointIdentity|null $value Value to set for the siteGroup property.
    */
    public function setSiteGroup(?SharePointIdentity $value ): void {
        $this->siteGroup = $value;
    }

    /**
     * Sets the siteUser property value. The SharePoint user associated with this action. Optional.
     *  @param SharePointIdentity|null $value Value to set for the siteUser property.
    */
    public function setSiteUser(?SharePointIdentity $value ): void {
        $this->siteUser = $value;
    }

}
