<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Permission extends Entity implements Parsable 
{
    /**
     * Instantiates a new permission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Permission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Permission {
        return new Permission();
    }

    /**
     * Gets the expirationDateTime property value. A format of yyyy-MM-ddTHH:mm:ssZ of DateTimeOffset indicates the expiration time of the permission. DateTime.MinValue indicates there is no expiration set for this permission. Optional.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'grantedTo' => fn(ParseNode $n) => $o->setGrantedTo($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'grantedToIdentities' => fn(ParseNode $n) => $o->setGrantedToIdentities($n->getCollectionOfObjectValues([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'grantedToIdentitiesV2' => fn(ParseNode $n) => $o->setGrantedToIdentitiesV2($n->getCollectionOfObjectValues([SharePointIdentitySet::class, 'createFromDiscriminatorValue'])),
            'grantedToV2' => fn(ParseNode $n) => $o->setGrantedToV2($n->getObjectValue([SharePointIdentitySet::class, 'createFromDiscriminatorValue'])),
            'hasPassword' => fn(ParseNode $n) => $o->setHasPassword($n->getBooleanValue()),
            'inheritedFrom' => fn(ParseNode $n) => $o->setInheritedFrom($n->getObjectValue([ItemReference::class, 'createFromDiscriminatorValue'])),
            'invitation' => fn(ParseNode $n) => $o->setInvitation($n->getObjectValue([SharingInvitation::class, 'createFromDiscriminatorValue'])),
            'link' => fn(ParseNode $n) => $o->setLink($n->getObjectValue([SharingLink::class, 'createFromDiscriminatorValue'])),
            'roles' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoles($val);
            },
            'shareId' => fn(ParseNode $n) => $o->setShareId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the grantedTo property value. The grantedTo property
     * @return IdentitySet|null
    */
    public function getGrantedTo(): ?IdentitySet {
        $val = $this->getBackingStore()->get('grantedTo');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'grantedTo'");
    }

    /**
     * Gets the grantedToIdentities property value. The grantedToIdentities property
     * @return array<IdentitySet>|null
    */
    public function getGrantedToIdentities(): ?array {
        $val = $this->getBackingStore()->get('grantedToIdentities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IdentitySet::class);
            /** @var array<IdentitySet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'grantedToIdentities'");
    }

    /**
     * Gets the grantedToIdentitiesV2 property value. For link type permissions, the details of the users to whom permission was granted. Read-only.
     * @return array<SharePointIdentitySet>|null
    */
    public function getGrantedToIdentitiesV2(): ?array {
        $val = $this->getBackingStore()->get('grantedToIdentitiesV2');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SharePointIdentitySet::class);
            /** @var array<SharePointIdentitySet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'grantedToIdentitiesV2'");
    }

    /**
     * Gets the grantedToV2 property value. For user type permissions, the details of the users and applications for this permission. Read-only.
     * @return SharePointIdentitySet|null
    */
    public function getGrantedToV2(): ?SharePointIdentitySet {
        $val = $this->getBackingStore()->get('grantedToV2');
        if (is_null($val) || $val instanceof SharePointIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'grantedToV2'");
    }

    /**
     * Gets the hasPassword property value. Indicates whether the password is set for this permission. This property only appears in the response. Optional. Read-only. For OneDrive Personal only..
     * @return bool|null
    */
    public function getHasPassword(): ?bool {
        $val = $this->getBackingStore()->get('hasPassword');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasPassword'");
    }

    /**
     * Gets the inheritedFrom property value. Provides a reference to the ancestor of the current permission, if it is inherited from an ancestor. Read-only.
     * @return ItemReference|null
    */
    public function getInheritedFrom(): ?ItemReference {
        $val = $this->getBackingStore()->get('inheritedFrom');
        if (is_null($val) || $val instanceof ItemReference) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inheritedFrom'");
    }

    /**
     * Gets the invitation property value. Details of any associated sharing invitation for this permission. Read-only.
     * @return SharingInvitation|null
    */
    public function getInvitation(): ?SharingInvitation {
        $val = $this->getBackingStore()->get('invitation');
        if (is_null($val) || $val instanceof SharingInvitation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invitation'");
    }

    /**
     * Gets the link property value. Provides the link details of the current permission, if it is a link type permissions. Read-only.
     * @return SharingLink|null
    */
    public function getLink(): ?SharingLink {
        $val = $this->getBackingStore()->get('link');
        if (is_null($val) || $val instanceof SharingLink) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'link'");
    }

    /**
     * Gets the roles property value. The type of permission, for example, read. See below for the full list of roles. Read-only.
     * @return array<string>|null
    */
    public function getRoles(): ?array {
        $val = $this->getBackingStore()->get('roles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roles'");
    }

    /**
     * Gets the shareId property value. A unique token that can be used to access this shared item via the **shares** API. Read-only.
     * @return string|null
    */
    public function getShareId(): ?string {
        $val = $this->getBackingStore()->get('shareId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shareId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeObjectValue('grantedTo', $this->getGrantedTo());
        $writer->writeCollectionOfObjectValues('grantedToIdentities', $this->getGrantedToIdentities());
        $writer->writeCollectionOfObjectValues('grantedToIdentitiesV2', $this->getGrantedToIdentitiesV2());
        $writer->writeObjectValue('grantedToV2', $this->getGrantedToV2());
        $writer->writeBooleanValue('hasPassword', $this->getHasPassword());
        $writer->writeObjectValue('inheritedFrom', $this->getInheritedFrom());
        $writer->writeObjectValue('invitation', $this->getInvitation());
        $writer->writeObjectValue('link', $this->getLink());
        $writer->writeCollectionOfPrimitiveValues('roles', $this->getRoles());
        $writer->writeStringValue('shareId', $this->getShareId());
    }

    /**
     * Sets the expirationDateTime property value. A format of yyyy-MM-ddTHH:mm:ssZ of DateTimeOffset indicates the expiration time of the permission. DateTime.MinValue indicates there is no expiration set for this permission. Optional.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the grantedTo property value. The grantedTo property
     * @param IdentitySet|null $value Value to set for the grantedTo property.
    */
    public function setGrantedTo(?IdentitySet $value): void {
        $this->getBackingStore()->set('grantedTo', $value);
    }

    /**
     * Sets the grantedToIdentities property value. The grantedToIdentities property
     * @param array<IdentitySet>|null $value Value to set for the grantedToIdentities property.
    */
    public function setGrantedToIdentities(?array $value): void {
        $this->getBackingStore()->set('grantedToIdentities', $value);
    }

    /**
     * Sets the grantedToIdentitiesV2 property value. For link type permissions, the details of the users to whom permission was granted. Read-only.
     * @param array<SharePointIdentitySet>|null $value Value to set for the grantedToIdentitiesV2 property.
    */
    public function setGrantedToIdentitiesV2(?array $value): void {
        $this->getBackingStore()->set('grantedToIdentitiesV2', $value);
    }

    /**
     * Sets the grantedToV2 property value. For user type permissions, the details of the users and applications for this permission. Read-only.
     * @param SharePointIdentitySet|null $value Value to set for the grantedToV2 property.
    */
    public function setGrantedToV2(?SharePointIdentitySet $value): void {
        $this->getBackingStore()->set('grantedToV2', $value);
    }

    /**
     * Sets the hasPassword property value. Indicates whether the password is set for this permission. This property only appears in the response. Optional. Read-only. For OneDrive Personal only..
     * @param bool|null $value Value to set for the hasPassword property.
    */
    public function setHasPassword(?bool $value): void {
        $this->getBackingStore()->set('hasPassword', $value);
    }

    /**
     * Sets the inheritedFrom property value. Provides a reference to the ancestor of the current permission, if it is inherited from an ancestor. Read-only.
     * @param ItemReference|null $value Value to set for the inheritedFrom property.
    */
    public function setInheritedFrom(?ItemReference $value): void {
        $this->getBackingStore()->set('inheritedFrom', $value);
    }

    /**
     * Sets the invitation property value. Details of any associated sharing invitation for this permission. Read-only.
     * @param SharingInvitation|null $value Value to set for the invitation property.
    */
    public function setInvitation(?SharingInvitation $value): void {
        $this->getBackingStore()->set('invitation', $value);
    }

    /**
     * Sets the link property value. Provides the link details of the current permission, if it is a link type permissions. Read-only.
     * @param SharingLink|null $value Value to set for the link property.
    */
    public function setLink(?SharingLink $value): void {
        $this->getBackingStore()->set('link', $value);
    }

    /**
     * Sets the roles property value. The type of permission, for example, read. See below for the full list of roles. Read-only.
     * @param array<string>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value): void {
        $this->getBackingStore()->set('roles', $value);
    }

    /**
     * Sets the shareId property value. A unique token that can be used to access this shared item via the **shares** API. Read-only.
     * @param string|null $value Value to set for the shareId property.
    */
    public function setShareId(?string $value): void {
        $this->getBackingStore()->set('shareId', $value);
    }

}
