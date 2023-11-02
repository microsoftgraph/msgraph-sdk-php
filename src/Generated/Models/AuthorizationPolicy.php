<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthorizationPolicy extends PolicyBase implements Parsable 
{
    /**
     * Instantiates a new authorizationPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.authorizationPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthorizationPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthorizationPolicy {
        return new AuthorizationPolicy();
    }

    /**
     * Gets the allowedToSignUpEmailBasedSubscriptions property value. Indicates whether users can sign up for email based subscriptions.
     * @return bool|null
    */
    public function getAllowedToSignUpEmailBasedSubscriptions(): ?bool {
        $val = $this->getBackingStore()->get('allowedToSignUpEmailBasedSubscriptions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedToSignUpEmailBasedSubscriptions'");
    }

    /**
     * Gets the allowedToUseSSPR property value. Indicates whether users can use the Self-Service Password Reset feature on the tenant.
     * @return bool|null
    */
    public function getAllowedToUseSSPR(): ?bool {
        $val = $this->getBackingStore()->get('allowedToUseSSPR');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedToUseSSPR'");
    }

    /**
     * Gets the allowEmailVerifiedUsersToJoinOrganization property value. Indicates whether a user can join the tenant by email validation.
     * @return bool|null
    */
    public function getAllowEmailVerifiedUsersToJoinOrganization(): ?bool {
        $val = $this->getBackingStore()->get('allowEmailVerifiedUsersToJoinOrganization');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowEmailVerifiedUsersToJoinOrganization'");
    }

    /**
     * Gets the allowInvitesFrom property value. Indicates who can invite external users to the organization. Possible values are: none, adminsAndGuestInviters, adminsGuestInvitersAndAllMembers, everyone.  everyone is the default setting for all cloud environments except US Government. For more information, see allowInvitesFrom values.
     * @return AllowInvitesFrom|null
    */
    public function getAllowInvitesFrom(): ?AllowInvitesFrom {
        $val = $this->getBackingStore()->get('allowInvitesFrom');
        if (is_null($val) || $val instanceof AllowInvitesFrom) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowInvitesFrom'");
    }

    /**
     * Gets the allowUserConsentForRiskyApps property value. Indicates whether user consent for risky apps is allowed. We recommend keeping allowUserConsentForRiskyApps as false. Default value is false.
     * @return bool|null
    */
    public function getAllowUserConsentForRiskyApps(): ?bool {
        $val = $this->getBackingStore()->get('allowUserConsentForRiskyApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowUserConsentForRiskyApps'");
    }

    /**
     * Gets the blockMsolPowerShell property value. To disable the use of MSOL PowerShell, set this property to true. This also disables user-based access to the legacy service endpoint used by MSOL PowerShell. This doesn't affect Microsoft Entra Connect or Microsoft Graph.
     * @return bool|null
    */
    public function getBlockMsolPowerShell(): ?bool {
        $val = $this->getBackingStore()->get('blockMsolPowerShell');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockMsolPowerShell'");
    }

    /**
     * Gets the defaultUserRolePermissions property value. The defaultUserRolePermissions property
     * @return DefaultUserRolePermissions|null
    */
    public function getDefaultUserRolePermissions(): ?DefaultUserRolePermissions {
        $val = $this->getBackingStore()->get('defaultUserRolePermissions');
        if (is_null($val) || $val instanceof DefaultUserRolePermissions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultUserRolePermissions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedToSignUpEmailBasedSubscriptions' => fn(ParseNode $n) => $o->setAllowedToSignUpEmailBasedSubscriptions($n->getBooleanValue()),
            'allowedToUseSSPR' => fn(ParseNode $n) => $o->setAllowedToUseSSPR($n->getBooleanValue()),
            'allowEmailVerifiedUsersToJoinOrganization' => fn(ParseNode $n) => $o->setAllowEmailVerifiedUsersToJoinOrganization($n->getBooleanValue()),
            'allowInvitesFrom' => fn(ParseNode $n) => $o->setAllowInvitesFrom($n->getEnumValue(AllowInvitesFrom::class)),
            'allowUserConsentForRiskyApps' => fn(ParseNode $n) => $o->setAllowUserConsentForRiskyApps($n->getBooleanValue()),
            'blockMsolPowerShell' => fn(ParseNode $n) => $o->setBlockMsolPowerShell($n->getBooleanValue()),
            'defaultUserRolePermissions' => fn(ParseNode $n) => $o->setDefaultUserRolePermissions($n->getObjectValue([DefaultUserRolePermissions::class, 'createFromDiscriminatorValue'])),
            'guestUserRoleId' => fn(ParseNode $n) => $o->setGuestUserRoleId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the guestUserRoleId property value. Represents role templateId for the role that should be granted to guest user. Currently following roles are supported:  User (a0b1b346-4d3e-4e8b-98f8-753987be4970), Guest User (10dae51f-b6af-4016-8d66-8c2a99b929b3), and Restricted Guest User (2af84b1e-32c8-42b7-82bc-daa82404023b).
     * @return string|null
    */
    public function getGuestUserRoleId(): ?string {
        $val = $this->getBackingStore()->get('guestUserRoleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'guestUserRoleId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowedToSignUpEmailBasedSubscriptions', $this->getAllowedToSignUpEmailBasedSubscriptions());
        $writer->writeBooleanValue('allowedToUseSSPR', $this->getAllowedToUseSSPR());
        $writer->writeBooleanValue('allowEmailVerifiedUsersToJoinOrganization', $this->getAllowEmailVerifiedUsersToJoinOrganization());
        $writer->writeEnumValue('allowInvitesFrom', $this->getAllowInvitesFrom());
        $writer->writeBooleanValue('allowUserConsentForRiskyApps', $this->getAllowUserConsentForRiskyApps());
        $writer->writeBooleanValue('blockMsolPowerShell', $this->getBlockMsolPowerShell());
        $writer->writeObjectValue('defaultUserRolePermissions', $this->getDefaultUserRolePermissions());
        $writer->writeStringValue('guestUserRoleId', $this->getGuestUserRoleId());
    }

    /**
     * Sets the allowedToSignUpEmailBasedSubscriptions property value. Indicates whether users can sign up for email based subscriptions.
     * @param bool|null $value Value to set for the allowedToSignUpEmailBasedSubscriptions property.
    */
    public function setAllowedToSignUpEmailBasedSubscriptions(?bool $value): void {
        $this->getBackingStore()->set('allowedToSignUpEmailBasedSubscriptions', $value);
    }

    /**
     * Sets the allowedToUseSSPR property value. Indicates whether users can use the Self-Service Password Reset feature on the tenant.
     * @param bool|null $value Value to set for the allowedToUseSSPR property.
    */
    public function setAllowedToUseSSPR(?bool $value): void {
        $this->getBackingStore()->set('allowedToUseSSPR', $value);
    }

    /**
     * Sets the allowEmailVerifiedUsersToJoinOrganization property value. Indicates whether a user can join the tenant by email validation.
     * @param bool|null $value Value to set for the allowEmailVerifiedUsersToJoinOrganization property.
    */
    public function setAllowEmailVerifiedUsersToJoinOrganization(?bool $value): void {
        $this->getBackingStore()->set('allowEmailVerifiedUsersToJoinOrganization', $value);
    }

    /**
     * Sets the allowInvitesFrom property value. Indicates who can invite external users to the organization. Possible values are: none, adminsAndGuestInviters, adminsGuestInvitersAndAllMembers, everyone.  everyone is the default setting for all cloud environments except US Government. For more information, see allowInvitesFrom values.
     * @param AllowInvitesFrom|null $value Value to set for the allowInvitesFrom property.
    */
    public function setAllowInvitesFrom(?AllowInvitesFrom $value): void {
        $this->getBackingStore()->set('allowInvitesFrom', $value);
    }

    /**
     * Sets the allowUserConsentForRiskyApps property value. Indicates whether user consent for risky apps is allowed. We recommend keeping allowUserConsentForRiskyApps as false. Default value is false.
     * @param bool|null $value Value to set for the allowUserConsentForRiskyApps property.
    */
    public function setAllowUserConsentForRiskyApps(?bool $value): void {
        $this->getBackingStore()->set('allowUserConsentForRiskyApps', $value);
    }

    /**
     * Sets the blockMsolPowerShell property value. To disable the use of MSOL PowerShell, set this property to true. This also disables user-based access to the legacy service endpoint used by MSOL PowerShell. This doesn't affect Microsoft Entra Connect or Microsoft Graph.
     * @param bool|null $value Value to set for the blockMsolPowerShell property.
    */
    public function setBlockMsolPowerShell(?bool $value): void {
        $this->getBackingStore()->set('blockMsolPowerShell', $value);
    }

    /**
     * Sets the defaultUserRolePermissions property value. The defaultUserRolePermissions property
     * @param DefaultUserRolePermissions|null $value Value to set for the defaultUserRolePermissions property.
    */
    public function setDefaultUserRolePermissions(?DefaultUserRolePermissions $value): void {
        $this->getBackingStore()->set('defaultUserRolePermissions', $value);
    }

    /**
     * Sets the guestUserRoleId property value. Represents role templateId for the role that should be granted to guest user. Currently following roles are supported:  User (a0b1b346-4d3e-4e8b-98f8-753987be4970), Guest User (10dae51f-b6af-4016-8d66-8c2a99b929b3), and Restricted Guest User (2af84b1e-32c8-42b7-82bc-daa82404023b).
     * @param string|null $value Value to set for the guestUserRoleId property.
    */
    public function setGuestUserRoleId(?string $value): void {
        $this->getBackingStore()->set('guestUserRoleId', $value);
    }

}
