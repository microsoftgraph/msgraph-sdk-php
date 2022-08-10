<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Permission extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $expirationDateTime A format of yyyy-MM-ddTHH:mm:ssZ of DateTimeOffset indicates the expiration time of the permission. DateTime.MinValue indicates there is no expiration set for this permission. Optional.
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var IdentitySet|null $grantedTo The grantedTo property
    */
    private ?IdentitySet $grantedTo = null;
    
    /**
     * @var array<IdentitySet>|null $grantedToIdentities The grantedToIdentities property
    */
    private ?array $grantedToIdentities = null;
    
    /**
     * @var array<SharePointIdentitySet>|null $grantedToIdentitiesV2 For link type permissions, the details of the users to whom permission was granted. Read-only.
    */
    private ?array $grantedToIdentitiesV2 = null;
    
    /**
     * @var SharePointIdentitySet|null $grantedToV2 For user type permissions, the details of the users and applications for this permission. Read-only.
    */
    private ?SharePointIdentitySet $grantedToV2 = null;
    
    /**
     * @var bool|null $hasPassword Indicates whether the password is set for this permission. This property only appears in the response. Optional. Read-only. For OneDrive Personal only.
    */
    private ?bool $hasPassword = null;
    
    /**
     * @var ItemReference|null $inheritedFrom Provides a reference to the ancestor of the current permission, if it is inherited from an ancestor. Read-only.
    */
    private ?ItemReference $inheritedFrom = null;
    
    /**
     * @var SharingInvitation|null $invitation Details of any associated sharing invitation for this permission. Read-only.
    */
    private ?SharingInvitation $invitation = null;
    
    /**
     * @var SharingLink|null $link Provides the link details of the current permission, if it is a link type permissions. Read-only.
    */
    private ?SharingLink $link = null;
    
    /**
     * @var array<string>|null $roles The type of permission, for example, read. See below for the full list of roles. Read-only.
    */
    private ?array $roles = null;
    
    /**
     * @var string|null $shareId A unique token that can be used to access this shared item via the [shares API][]. Read-only.
    */
    private ?string $shareId = null;
    
    /**
     * Instantiates a new permission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.permission');
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
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'grantedTo' => function (ParseNode $n) use ($o) { $o->setGrantedTo($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'grantedToIdentities' => function (ParseNode $n) use ($o) { $o->setGrantedToIdentities($n->getCollectionOfObjectValues(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'grantedToIdentitiesV2' => function (ParseNode $n) use ($o) { $o->setGrantedToIdentitiesV2($n->getCollectionOfObjectValues(array(SharePointIdentitySet::class, 'createFromDiscriminatorValue'))); },
            'grantedToV2' => function (ParseNode $n) use ($o) { $o->setGrantedToV2($n->getObjectValue(array(SharePointIdentitySet::class, 'createFromDiscriminatorValue'))); },
            'hasPassword' => function (ParseNode $n) use ($o) { $o->setHasPassword($n->getBooleanValue()); },
            'inheritedFrom' => function (ParseNode $n) use ($o) { $o->setInheritedFrom($n->getObjectValue(array(ItemReference::class, 'createFromDiscriminatorValue'))); },
            'invitation' => function (ParseNode $n) use ($o) { $o->setInvitation($n->getObjectValue(array(SharingInvitation::class, 'createFromDiscriminatorValue'))); },
            'link' => function (ParseNode $n) use ($o) { $o->setLink($n->getObjectValue(array(SharingLink::class, 'createFromDiscriminatorValue'))); },
            'roles' => function (ParseNode $n) use ($o) { $o->setRoles($n->getCollectionOfPrimitiveValues()); },
            'shareId' => function (ParseNode $n) use ($o) { $o->setShareId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the grantedTo property value. The grantedTo property
     * @return IdentitySet|null
    */
    public function getGrantedTo(): ?IdentitySet {
        return $this->grantedTo;
    }

    /**
     * Gets the grantedToIdentities property value. The grantedToIdentities property
     * @return array<IdentitySet>|null
    */
    public function getGrantedToIdentities(): ?array {
        return $this->grantedToIdentities;
    }

    /**
     * Gets the grantedToIdentitiesV2 property value. For link type permissions, the details of the users to whom permission was granted. Read-only.
     * @return array<SharePointIdentitySet>|null
    */
    public function getGrantedToIdentitiesV2(): ?array {
        return $this->grantedToIdentitiesV2;
    }

    /**
     * Gets the grantedToV2 property value. For user type permissions, the details of the users and applications for this permission. Read-only.
     * @return SharePointIdentitySet|null
    */
    public function getGrantedToV2(): ?SharePointIdentitySet {
        return $this->grantedToV2;
    }

    /**
     * Gets the hasPassword property value. Indicates whether the password is set for this permission. This property only appears in the response. Optional. Read-only. For OneDrive Personal only.
     * @return bool|null
    */
    public function getHasPassword(): ?bool {
        return $this->hasPassword;
    }

    /**
     * Gets the inheritedFrom property value. Provides a reference to the ancestor of the current permission, if it is inherited from an ancestor. Read-only.
     * @return ItemReference|null
    */
    public function getInheritedFrom(): ?ItemReference {
        return $this->inheritedFrom;
    }

    /**
     * Gets the invitation property value. Details of any associated sharing invitation for this permission. Read-only.
     * @return SharingInvitation|null
    */
    public function getInvitation(): ?SharingInvitation {
        return $this->invitation;
    }

    /**
     * Gets the link property value. Provides the link details of the current permission, if it is a link type permissions. Read-only.
     * @return SharingLink|null
    */
    public function getLink(): ?SharingLink {
        return $this->link;
    }

    /**
     * Gets the roles property value. The type of permission, for example, read. See below for the full list of roles. Read-only.
     * @return array<string>|null
    */
    public function getRoles(): ?array {
        return $this->roles;
    }

    /**
     * Gets the shareId property value. A unique token that can be used to access this shared item via the [shares API][]. Read-only.
     * @return string|null
    */
    public function getShareId(): ?string {
        return $this->shareId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeObjectValue('grantedTo', $this->grantedTo);
        $writer->writeCollectionOfObjectValues('grantedToIdentities', $this->grantedToIdentities);
        $writer->writeCollectionOfObjectValues('grantedToIdentitiesV2', $this->grantedToIdentitiesV2);
        $writer->writeObjectValue('grantedToV2', $this->grantedToV2);
        $writer->writeBooleanValue('hasPassword', $this->hasPassword);
        $writer->writeObjectValue('inheritedFrom', $this->inheritedFrom);
        $writer->writeObjectValue('invitation', $this->invitation);
        $writer->writeObjectValue('link', $this->link);
        $writer->writeCollectionOfPrimitiveValues('roles', $this->roles);
        $writer->writeStringValue('shareId', $this->shareId);
    }

    /**
     * Sets the expirationDateTime property value. A format of yyyy-MM-ddTHH:mm:ssZ of DateTimeOffset indicates the expiration time of the permission. DateTime.MinValue indicates there is no expiration set for this permission. Optional.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the grantedTo property value. The grantedTo property
     *  @param IdentitySet|null $value Value to set for the grantedTo property.
    */
    public function setGrantedTo(?IdentitySet $value ): void {
        $this->grantedTo = $value;
    }

    /**
     * Sets the grantedToIdentities property value. The grantedToIdentities property
     *  @param array<IdentitySet>|null $value Value to set for the grantedToIdentities property.
    */
    public function setGrantedToIdentities(?array $value ): void {
        $this->grantedToIdentities = $value;
    }

    /**
     * Sets the grantedToIdentitiesV2 property value. For link type permissions, the details of the users to whom permission was granted. Read-only.
     *  @param array<SharePointIdentitySet>|null $value Value to set for the grantedToIdentitiesV2 property.
    */
    public function setGrantedToIdentitiesV2(?array $value ): void {
        $this->grantedToIdentitiesV2 = $value;
    }

    /**
     * Sets the grantedToV2 property value. For user type permissions, the details of the users and applications for this permission. Read-only.
     *  @param SharePointIdentitySet|null $value Value to set for the grantedToV2 property.
    */
    public function setGrantedToV2(?SharePointIdentitySet $value ): void {
        $this->grantedToV2 = $value;
    }

    /**
     * Sets the hasPassword property value. Indicates whether the password is set for this permission. This property only appears in the response. Optional. Read-only. For OneDrive Personal only.
     *  @param bool|null $value Value to set for the hasPassword property.
    */
    public function setHasPassword(?bool $value ): void {
        $this->hasPassword = $value;
    }

    /**
     * Sets the inheritedFrom property value. Provides a reference to the ancestor of the current permission, if it is inherited from an ancestor. Read-only.
     *  @param ItemReference|null $value Value to set for the inheritedFrom property.
    */
    public function setInheritedFrom(?ItemReference $value ): void {
        $this->inheritedFrom = $value;
    }

    /**
     * Sets the invitation property value. Details of any associated sharing invitation for this permission. Read-only.
     *  @param SharingInvitation|null $value Value to set for the invitation property.
    */
    public function setInvitation(?SharingInvitation $value ): void {
        $this->invitation = $value;
    }

    /**
     * Sets the link property value. Provides the link details of the current permission, if it is a link type permissions. Read-only.
     *  @param SharingLink|null $value Value to set for the link property.
    */
    public function setLink(?SharingLink $value ): void {
        $this->link = $value;
    }

    /**
     * Sets the roles property value. The type of permission, for example, read. See below for the full list of roles. Read-only.
     *  @param array<string>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value ): void {
        $this->roles = $value;
    }

    /**
     * Sets the shareId property value. A unique token that can be used to access this shared item via the [shares API][]. Read-only.
     *  @param string|null $value Value to set for the shareId property.
    */
    public function setShareId(?string $value ): void {
        $this->shareId = $value;
    }

}
