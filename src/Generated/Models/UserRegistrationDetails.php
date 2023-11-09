<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UserRegistrationDetails extends Entity implements Parsable 
{
    /**
     * Instantiates a new userRegistrationDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserRegistrationDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserRegistrationDetails {
        return new UserRegistrationDetails();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isAdmin' => fn(ParseNode $n) => $o->setIsAdmin($n->getBooleanValue()),
            'isMfaCapable' => fn(ParseNode $n) => $o->setIsMfaCapable($n->getBooleanValue()),
            'isMfaRegistered' => fn(ParseNode $n) => $o->setIsMfaRegistered($n->getBooleanValue()),
            'isPasswordlessCapable' => fn(ParseNode $n) => $o->setIsPasswordlessCapable($n->getBooleanValue()),
            'isSsprCapable' => fn(ParseNode $n) => $o->setIsSsprCapable($n->getBooleanValue()),
            'isSsprEnabled' => fn(ParseNode $n) => $o->setIsSsprEnabled($n->getBooleanValue()),
            'isSsprRegistered' => fn(ParseNode $n) => $o->setIsSsprRegistered($n->getBooleanValue()),
            'isSystemPreferredAuthenticationMethodEnabled' => fn(ParseNode $n) => $o->setIsSystemPreferredAuthenticationMethodEnabled($n->getBooleanValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'methodsRegistered' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMethodsRegistered($val);
            },
            'systemPreferredAuthenticationMethods' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSystemPreferredAuthenticationMethods($val);
            },
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userPreferredMethodForSecondaryAuthentication' => fn(ParseNode $n) => $o->setUserPreferredMethodForSecondaryAuthentication($n->getEnumValue(UserDefaultAuthenticationMethod::class)),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'userType' => fn(ParseNode $n) => $o->setUserType($n->getEnumValue(SignInUserType::class)),
        ]);
    }

    /**
     * Gets the isAdmin property value. Indicates whether the user has an admin role in the tenant. This value can be used to check the authentication methods that privileged accounts are registered for and capable of.
     * @return bool|null
    */
    public function getIsAdmin(): ?bool {
        $val = $this->getBackingStore()->get('isAdmin');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAdmin'");
    }

    /**
     * Gets the isMfaCapable property value. Indicates whether the user has registered a strong authentication method for multifactor authentication. The method must be allowed by the authentication methods policy. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsMfaCapable(): ?bool {
        $val = $this->getBackingStore()->get('isMfaCapable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMfaCapable'");
    }

    /**
     * Gets the isMfaRegistered property value. Indicates whether the user has registered a strong authentication method for multifactor authentication. The method may not necessarily be allowed by the authentication methods policy. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsMfaRegistered(): ?bool {
        $val = $this->getBackingStore()->get('isMfaRegistered');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMfaRegistered'");
    }

    /**
     * Gets the isPasswordlessCapable property value. Indicates whether the user has registered a passwordless strong authentication method (including FIDO2, Windows Hello for Business, and Microsoft Authenticator (Passwordless)) that is allowed by the authentication methods policy. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsPasswordlessCapable(): ?bool {
        $val = $this->getBackingStore()->get('isPasswordlessCapable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPasswordlessCapable'");
    }

    /**
     * Gets the isSsprCapable property value. Indicates whether the user has registered the required number of authentication methods for self-service password reset and the user is allowed to perform self-service password reset by policy. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsSsprCapable(): ?bool {
        $val = $this->getBackingStore()->get('isSsprCapable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSsprCapable'");
    }

    /**
     * Gets the isSsprEnabled property value. Indicates whether the user is allowed to perform self-service password reset by policy. The user may not necessarily have registered the required number of authentication methods for self-service password reset. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsSsprEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSsprEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSsprEnabled'");
    }

    /**
     * Gets the isSsprRegistered property value. Indicates whether the user has registered the required number of authentication methods for self-service password reset. The user may not necessarily be allowed to perform self-service password reset by policy. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsSsprRegistered(): ?bool {
        $val = $this->getBackingStore()->get('isSsprRegistered');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSsprRegistered'");
    }

    /**
     * Gets the isSystemPreferredAuthenticationMethodEnabled property value. Indicates whether system preferred authentication method is enabled. If enabled, the system dynamically determines the most secure authentication method among the methods registered by the user. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsSystemPreferredAuthenticationMethodEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSystemPreferredAuthenticationMethodEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSystemPreferredAuthenticationMethodEnabled'");
    }

    /**
     * Gets the lastUpdatedDateTime property value. The date and time (UTC) when the record was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the methodsRegistered property value. Collection of authentication methods registered, such as mobilePhone, email, fido2. Supports $filter (any with eq).
     * @return array<string>|null
    */
    public function getMethodsRegistered(): ?array {
        $val = $this->getBackingStore()->get('methodsRegistered');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'methodsRegistered'");
    }

    /**
     * Gets the systemPreferredAuthenticationMethods property value. Collection of authentication methods that the system determined to be the most secure authentication methods among the registered methods for second factor authentication. Possible values are: push, oath, voiceMobile, voiceAlternateMobile, voiceOffice, sms, none, unknownFutureValue. Supports $filter (any with eq).
     * @return array<string>|null
    */
    public function getSystemPreferredAuthenticationMethods(): ?array {
        $val = $this->getBackingStore()->get('systemPreferredAuthenticationMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemPreferredAuthenticationMethods'");
    }

    /**
     * Gets the userDisplayName property value. The user display name, such as Adele Vance. Supports $filter (eq, startsWith) and $orderby.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        $val = $this->getBackingStore()->get('userDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userDisplayName'");
    }

    /**
     * Gets the userPreferredMethodForSecondaryAuthentication property value. The method the user selected as the default second-factor for performing multifactor authentication. Possible values are: push, oath, voiceMobile, voiceAlternateMobile, voiceOffice, sms, none, unknownFutureValue. This property is used as preferred MFA method when isSystemPreferredAuthenticationMethodEnabled is false. Supports $filter (any with eq).
     * @return UserDefaultAuthenticationMethod|null
    */
    public function getUserPreferredMethodForSecondaryAuthentication(): ?UserDefaultAuthenticationMethod {
        $val = $this->getBackingStore()->get('userPreferredMethodForSecondaryAuthentication');
        if (is_null($val) || $val instanceof UserDefaultAuthenticationMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPreferredMethodForSecondaryAuthentication'");
    }

    /**
     * Gets the userPrincipalName property value. The user principal name, such as AdeleV@contoso.com. Supports $filter (eq, startsWith) and $orderby.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Gets the userType property value. Identifies whether the user is a member or guest in the tenant. The possible values are: member, guest, unknownFutureValue.
     * @return SignInUserType|null
    */
    public function getUserType(): ?SignInUserType {
        $val = $this->getBackingStore()->get('userType');
        if (is_null($val) || $val instanceof SignInUserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isAdmin', $this->getIsAdmin());
        $writer->writeBooleanValue('isMfaCapable', $this->getIsMfaCapable());
        $writer->writeBooleanValue('isMfaRegistered', $this->getIsMfaRegistered());
        $writer->writeBooleanValue('isPasswordlessCapable', $this->getIsPasswordlessCapable());
        $writer->writeBooleanValue('isSsprCapable', $this->getIsSsprCapable());
        $writer->writeBooleanValue('isSsprEnabled', $this->getIsSsprEnabled());
        $writer->writeBooleanValue('isSsprRegistered', $this->getIsSsprRegistered());
        $writer->writeBooleanValue('isSystemPreferredAuthenticationMethodEnabled', $this->getIsSystemPreferredAuthenticationMethodEnabled());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeCollectionOfPrimitiveValues('methodsRegistered', $this->getMethodsRegistered());
        $writer->writeCollectionOfPrimitiveValues('systemPreferredAuthenticationMethods', $this->getSystemPreferredAuthenticationMethods());
        $writer->writeStringValue('userDisplayName', $this->getUserDisplayName());
        $writer->writeEnumValue('userPreferredMethodForSecondaryAuthentication', $this->getUserPreferredMethodForSecondaryAuthentication());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeEnumValue('userType', $this->getUserType());
    }

    /**
     * Sets the isAdmin property value. Indicates whether the user has an admin role in the tenant. This value can be used to check the authentication methods that privileged accounts are registered for and capable of.
     * @param bool|null $value Value to set for the isAdmin property.
    */
    public function setIsAdmin(?bool $value): void {
        $this->getBackingStore()->set('isAdmin', $value);
    }

    /**
     * Sets the isMfaCapable property value. Indicates whether the user has registered a strong authentication method for multifactor authentication. The method must be allowed by the authentication methods policy. Supports $filter (eq).
     * @param bool|null $value Value to set for the isMfaCapable property.
    */
    public function setIsMfaCapable(?bool $value): void {
        $this->getBackingStore()->set('isMfaCapable', $value);
    }

    /**
     * Sets the isMfaRegistered property value. Indicates whether the user has registered a strong authentication method for multifactor authentication. The method may not necessarily be allowed by the authentication methods policy. Supports $filter (eq).
     * @param bool|null $value Value to set for the isMfaRegistered property.
    */
    public function setIsMfaRegistered(?bool $value): void {
        $this->getBackingStore()->set('isMfaRegistered', $value);
    }

    /**
     * Sets the isPasswordlessCapable property value. Indicates whether the user has registered a passwordless strong authentication method (including FIDO2, Windows Hello for Business, and Microsoft Authenticator (Passwordless)) that is allowed by the authentication methods policy. Supports $filter (eq).
     * @param bool|null $value Value to set for the isPasswordlessCapable property.
    */
    public function setIsPasswordlessCapable(?bool $value): void {
        $this->getBackingStore()->set('isPasswordlessCapable', $value);
    }

    /**
     * Sets the isSsprCapable property value. Indicates whether the user has registered the required number of authentication methods for self-service password reset and the user is allowed to perform self-service password reset by policy. Supports $filter (eq).
     * @param bool|null $value Value to set for the isSsprCapable property.
    */
    public function setIsSsprCapable(?bool $value): void {
        $this->getBackingStore()->set('isSsprCapable', $value);
    }

    /**
     * Sets the isSsprEnabled property value. Indicates whether the user is allowed to perform self-service password reset by policy. The user may not necessarily have registered the required number of authentication methods for self-service password reset. Supports $filter (eq).
     * @param bool|null $value Value to set for the isSsprEnabled property.
    */
    public function setIsSsprEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSsprEnabled', $value);
    }

    /**
     * Sets the isSsprRegistered property value. Indicates whether the user has registered the required number of authentication methods for self-service password reset. The user may not necessarily be allowed to perform self-service password reset by policy. Supports $filter (eq).
     * @param bool|null $value Value to set for the isSsprRegistered property.
    */
    public function setIsSsprRegistered(?bool $value): void {
        $this->getBackingStore()->set('isSsprRegistered', $value);
    }

    /**
     * Sets the isSystemPreferredAuthenticationMethodEnabled property value. Indicates whether system preferred authentication method is enabled. If enabled, the system dynamically determines the most secure authentication method among the methods registered by the user. Supports $filter (eq).
     * @param bool|null $value Value to set for the isSystemPreferredAuthenticationMethodEnabled property.
    */
    public function setIsSystemPreferredAuthenticationMethodEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSystemPreferredAuthenticationMethodEnabled', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. The date and time (UTC) when the record was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the methodsRegistered property value. Collection of authentication methods registered, such as mobilePhone, email, fido2. Supports $filter (any with eq).
     * @param array<string>|null $value Value to set for the methodsRegistered property.
    */
    public function setMethodsRegistered(?array $value): void {
        $this->getBackingStore()->set('methodsRegistered', $value);
    }

    /**
     * Sets the systemPreferredAuthenticationMethods property value. Collection of authentication methods that the system determined to be the most secure authentication methods among the registered methods for second factor authentication. Possible values are: push, oath, voiceMobile, voiceAlternateMobile, voiceOffice, sms, none, unknownFutureValue. Supports $filter (any with eq).
     * @param array<string>|null $value Value to set for the systemPreferredAuthenticationMethods property.
    */
    public function setSystemPreferredAuthenticationMethods(?array $value): void {
        $this->getBackingStore()->set('systemPreferredAuthenticationMethods', $value);
    }

    /**
     * Sets the userDisplayName property value. The user display name, such as Adele Vance. Supports $filter (eq, startsWith) and $orderby.
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userPreferredMethodForSecondaryAuthentication property value. The method the user selected as the default second-factor for performing multifactor authentication. Possible values are: push, oath, voiceMobile, voiceAlternateMobile, voiceOffice, sms, none, unknownFutureValue. This property is used as preferred MFA method when isSystemPreferredAuthenticationMethodEnabled is false. Supports $filter (any with eq).
     * @param UserDefaultAuthenticationMethod|null $value Value to set for the userPreferredMethodForSecondaryAuthentication property.
    */
    public function setUserPreferredMethodForSecondaryAuthentication(?UserDefaultAuthenticationMethod $value): void {
        $this->getBackingStore()->set('userPreferredMethodForSecondaryAuthentication', $value);
    }

    /**
     * Sets the userPrincipalName property value. The user principal name, such as AdeleV@contoso.com. Supports $filter (eq, startsWith) and $orderby.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the userType property value. Identifies whether the user is a member or guest in the tenant. The possible values are: member, guest, unknownFutureValue.
     * @param SignInUserType|null $value Value to set for the userType property.
    */
    public function setUserType(?SignInUserType $value): void {
        $this->getBackingStore()->set('userType', $value);
    }

}
