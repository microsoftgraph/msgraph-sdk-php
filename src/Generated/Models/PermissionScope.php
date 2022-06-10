<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PermissionScope implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $adminConsentDescription A description of the delegated permissions, intended to be read by an administrator granting the permission on behalf of all users. This text appears in tenant-wide admin consent experiences.
    */
    private ?string $adminConsentDescription = null;
    
    /**
     * @var string|null $adminConsentDisplayName The permission's title, intended to be read by an administrator granting the permission on behalf of all users.
    */
    private ?string $adminConsentDisplayName = null;
    
    /**
     * @var string|null $id Unique delegated permission identifier inside the collection of delegated permissions defined for a resource application.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isEnabled When creating or updating a permission, this property must be set to true (which is the default). To delete a permission, this property must first be set to false.  At that point, in a subsequent call, the permission may be removed.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var string|null $origin The origin property
    */
    private ?string $origin = null;
    
    /**
     * @var string|null $type The possible values are: User and Admin. Specifies whether this delegated permission should be considered safe for non-admin users to consent to on behalf of themselves, or whether an administrator consent should always be required. While Microsoft Graph defines the default consent requirement for each permission, the tenant administrator may override the behavior in their organization (by allowing, restricting, or limiting user consent to this delegated permission). For more information, see Configure how users consent to applications.
    */
    private ?string $type = null;
    
    /**
     * @var string|null $userConsentDescription A description of the delegated permissions, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
    */
    private ?string $userConsentDescription = null;
    
    /**
     * @var string|null $userConsentDisplayName A title for the permission, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
    */
    private ?string $userConsentDisplayName = null;
    
    /**
     * @var string|null $value Specifies the value to include in the scp (scope) claim in access tokens. Must not exceed 120 characters in length. Allowed characters are : ! # $ % & ' ( ) * + , - . / : ;  =  ? @ [ ] ^ + _  {  } ~, as well as characters in the ranges 0-9, A-Z and a-z. Any other character, including the space character, are not allowed. May not begin with ..
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new permissionScope and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermissionScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermissionScope {
        return new PermissionScope();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the adminConsentDescription property value. A description of the delegated permissions, intended to be read by an administrator granting the permission on behalf of all users. This text appears in tenant-wide admin consent experiences.
     * @return string|null
    */
    public function getAdminConsentDescription(): ?string {
        return $this->adminConsentDescription;
    }

    /**
     * Gets the adminConsentDisplayName property value. The permission's title, intended to be read by an administrator granting the permission on behalf of all users.
     * @return string|null
    */
    public function getAdminConsentDisplayName(): ?string {
        return $this->adminConsentDisplayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adminConsentDescription' => function (ParseNode $n) use ($o) { $o->setAdminConsentDescription($n->getStringValue()); },
            'adminConsentDisplayName' => function (ParseNode $n) use ($o) { $o->setAdminConsentDisplayName($n->getStringValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
            'origin' => function (ParseNode $n) use ($o) { $o->setOrigin($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getStringValue()); },
            'userConsentDescription' => function (ParseNode $n) use ($o) { $o->setUserConsentDescription($n->getStringValue()); },
            'userConsentDisplayName' => function (ParseNode $n) use ($o) { $o->setUserConsentDisplayName($n->getStringValue()); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. Unique delegated permission identifier inside the collection of delegated permissions defined for a resource application.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isEnabled property value. When creating or updating a permission, this property must be set to true (which is the default). To delete a permission, this property must first be set to false.  At that point, in a subsequent call, the permission may be removed.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the origin property value. The origin property
     * @return string|null
    */
    public function getOrigin(): ?string {
        return $this->origin;
    }

    /**
     * Gets the type property value. The possible values are: User and Admin. Specifies whether this delegated permission should be considered safe for non-admin users to consent to on behalf of themselves, or whether an administrator consent should always be required. While Microsoft Graph defines the default consent requirement for each permission, the tenant administrator may override the behavior in their organization (by allowing, restricting, or limiting user consent to this delegated permission). For more information, see Configure how users consent to applications.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the userConsentDescription property value. A description of the delegated permissions, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
     * @return string|null
    */
    public function getUserConsentDescription(): ?string {
        return $this->userConsentDescription;
    }

    /**
     * Gets the userConsentDisplayName property value. A title for the permission, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
     * @return string|null
    */
    public function getUserConsentDisplayName(): ?string {
        return $this->userConsentDisplayName;
    }

    /**
     * Gets the value property value. Specifies the value to include in the scp (scope) claim in access tokens. Must not exceed 120 characters in length. Allowed characters are : ! # $ % & ' ( ) * + , - . / : ;  =  ? @ [ ] ^ + _  {  } ~, as well as characters in the ranges 0-9, A-Z and a-z. Any other character, including the space character, are not allowed. May not begin with ..
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adminConsentDescription', $this->adminConsentDescription);
        $writer->writeStringValue('adminConsentDisplayName', $this->adminConsentDisplayName);
        $writer->writeStringValue('id', $this->id);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeStringValue('origin', $this->origin);
        $writer->writeStringValue('type', $this->type);
        $writer->writeStringValue('userConsentDescription', $this->userConsentDescription);
        $writer->writeStringValue('userConsentDisplayName', $this->userConsentDisplayName);
        $writer->writeStringValue('value', $this->value);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the adminConsentDescription property value. A description of the delegated permissions, intended to be read by an administrator granting the permission on behalf of all users. This text appears in tenant-wide admin consent experiences.
     *  @param string|null $value Value to set for the adminConsentDescription property.
    */
    public function setAdminConsentDescription(?string $value ): void {
        $this->adminConsentDescription = $value;
    }

    /**
     * Sets the adminConsentDisplayName property value. The permission's title, intended to be read by an administrator granting the permission on behalf of all users.
     *  @param string|null $value Value to set for the adminConsentDisplayName property.
    */
    public function setAdminConsentDisplayName(?string $value ): void {
        $this->adminConsentDisplayName = $value;
    }

    /**
     * Sets the id property value. Unique delegated permission identifier inside the collection of delegated permissions defined for a resource application.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the isEnabled property value. When creating or updating a permission, this property must be set to true (which is the default). To delete a permission, this property must first be set to false.  At that point, in a subsequent call, the permission may be removed.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the origin property value. The origin property
     *  @param string|null $value Value to set for the origin property.
    */
    public function setOrigin(?string $value ): void {
        $this->origin = $value;
    }

    /**
     * Sets the type property value. The possible values are: User and Admin. Specifies whether this delegated permission should be considered safe for non-admin users to consent to on behalf of themselves, or whether an administrator consent should always be required. While Microsoft Graph defines the default consent requirement for each permission, the tenant administrator may override the behavior in their organization (by allowing, restricting, or limiting user consent to this delegated permission). For more information, see Configure how users consent to applications.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the userConsentDescription property value. A description of the delegated permissions, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
     *  @param string|null $value Value to set for the userConsentDescription property.
    */
    public function setUserConsentDescription(?string $value ): void {
        $this->userConsentDescription = $value;
    }

    /**
     * Sets the userConsentDisplayName property value. A title for the permission, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
     *  @param string|null $value Value to set for the userConsentDisplayName property.
    */
    public function setUserConsentDisplayName(?string $value ): void {
        $this->userConsentDisplayName = $value;
    }

    /**
     * Sets the value property value. Specifies the value to include in the scp (scope) claim in access tokens. Must not exceed 120 characters in length. Allowed characters are : ! # $ % & ' ( ) * + , - . / : ;  =  ? @ [ ] ^ + _  {  } ~, as well as characters in the ranges 0-9, A-Z and a-z. Any other character, including the space character, are not allowed. May not begin with ..
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

}
