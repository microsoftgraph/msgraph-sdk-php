<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UserSecurityState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UserSecurityState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserSecurityState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserSecurityState {
        return new UserSecurityState();
    }

    /**
     * Gets the aadUserId property value. AAD User object identifier (GUID) - represents the physical/multi-account user entity.
     * @return string|null
    */
    public function getAadUserId(): ?string {
        return $this->getBackingStore()->get('aadUserId');
    }

    /**
     * Gets the accountName property value. Account name of user account (without Active Directory domain or DNS domain) - (also called mailNickName).
     * @return string|null
    */
    public function getAccountName(): ?string {
        return $this->getBackingStore()->get('accountName');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the domainName property value. NetBIOS/Active Directory domain of user account (that is, domain/account format).
     * @return string|null
    */
    public function getDomainName(): ?string {
        return $this->getBackingStore()->get('domainName');
    }

    /**
     * Gets the emailRole property value. For email-related alerts - user account's email 'role'. Possible values are: unknown, sender, recipient.
     * @return EmailRole|null
    */
    public function getEmailRole(): ?EmailRole {
        return $this->getBackingStore()->get('emailRole');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aadUserId' => fn(ParseNode $n) => $o->setAadUserId($n->getStringValue()),
            'accountName' => fn(ParseNode $n) => $o->setAccountName($n->getStringValue()),
            'domainName' => fn(ParseNode $n) => $o->setDomainName($n->getStringValue()),
            'emailRole' => fn(ParseNode $n) => $o->setEmailRole($n->getEnumValue(EmailRole::class)),
            'isVpn' => fn(ParseNode $n) => $o->setIsVpn($n->getBooleanValue()),
            'logonDateTime' => fn(ParseNode $n) => $o->setLogonDateTime($n->getDateTimeValue()),
            'logonId' => fn(ParseNode $n) => $o->setLogonId($n->getStringValue()),
            'logonIp' => fn(ParseNode $n) => $o->setLogonIp($n->getStringValue()),
            'logonLocation' => fn(ParseNode $n) => $o->setLogonLocation($n->getStringValue()),
            'logonType' => fn(ParseNode $n) => $o->setLogonType($n->getEnumValue(LogonType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'onPremisesSecurityIdentifier' => fn(ParseNode $n) => $o->setOnPremisesSecurityIdentifier($n->getStringValue()),
            'riskScore' => fn(ParseNode $n) => $o->setRiskScore($n->getStringValue()),
            'userAccountType' => fn(ParseNode $n) => $o->setUserAccountType($n->getEnumValue(UserAccountSecurityType::class)),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ];
    }

    /**
     * Gets the isVpn property value. Indicates whether the user logged on through a VPN.
     * @return bool|null
    */
    public function getIsVpn(): ?bool {
        return $this->getBackingStore()->get('isVpn');
    }

    /**
     * Gets the logonDateTime property value. Time at which the sign-in occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLogonDateTime(): ?DateTime {
        return $this->getBackingStore()->get('logonDateTime');
    }

    /**
     * Gets the logonId property value. User sign-in ID.
     * @return string|null
    */
    public function getLogonId(): ?string {
        return $this->getBackingStore()->get('logonId');
    }

    /**
     * Gets the logonIp property value. IP Address the sign-in request originated from.
     * @return string|null
    */
    public function getLogonIp(): ?string {
        return $this->getBackingStore()->get('logonIp');
    }

    /**
     * Gets the logonLocation property value. Location (by IP address mapping) associated with a user sign-in event by this user.
     * @return string|null
    */
    public function getLogonLocation(): ?string {
        return $this->getBackingStore()->get('logonLocation');
    }

    /**
     * Gets the logonType property value. Method of user sign in. Possible values are: unknown, interactive, remoteInteractive, network, batch, service.
     * @return LogonType|null
    */
    public function getLogonType(): ?LogonType {
        return $this->getBackingStore()->get('logonType');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the onPremisesSecurityIdentifier property value. Active Directory (on-premises) Security Identifier (SID) of the user.
     * @return string|null
    */
    public function getOnPremisesSecurityIdentifier(): ?string {
        return $this->getBackingStore()->get('onPremisesSecurityIdentifier');
    }

    /**
     * Gets the riskScore property value. Provider-generated/calculated risk score of the user account. Recommended value range of 0-1, which equates to a percentage.
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->getBackingStore()->get('riskScore');
    }

    /**
     * Gets the userAccountType property value. User account type (group membership), per Windows definition. Possible values are: unknown, standard, power, administrator.
     * @return UserAccountSecurityType|null
    */
    public function getUserAccountType(): ?UserAccountSecurityType {
        return $this->getBackingStore()->get('userAccountType');
    }

    /**
     * Gets the userPrincipalName property value. User sign-in name - internet format: (user account name)@(user account DNS domain name).
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('aadUserId', $this->getAadUserId());
        $writer->writeStringValue('accountName', $this->getAccountName());
        $writer->writeStringValue('domainName', $this->getDomainName());
        $writer->writeEnumValue('emailRole', $this->getEmailRole());
        $writer->writeBooleanValue('isVpn', $this->getIsVpn());
        $writer->writeDateTimeValue('logonDateTime', $this->getLogonDateTime());
        $writer->writeStringValue('logonId', $this->getLogonId());
        $writer->writeStringValue('logonIp', $this->getLogonIp());
        $writer->writeStringValue('logonLocation', $this->getLogonLocation());
        $writer->writeEnumValue('logonType', $this->getLogonType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('onPremisesSecurityIdentifier', $this->getOnPremisesSecurityIdentifier());
        $writer->writeStringValue('riskScore', $this->getRiskScore());
        $writer->writeEnumValue('userAccountType', $this->getUserAccountType());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the aadUserId property value. AAD User object identifier (GUID) - represents the physical/multi-account user entity.
     * @param string|null $value Value to set for the aadUserId property.
    */
    public function setAadUserId(?string $value): void {
        $this->getBackingStore()->set('aadUserId', $value);
    }

    /**
     * Sets the accountName property value. Account name of user account (without Active Directory domain or DNS domain) - (also called mailNickName).
     * @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value): void {
        $this->getBackingStore()->set('accountName', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the domainName property value. NetBIOS/Active Directory domain of user account (that is, domain/account format).
     * @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value): void {
        $this->getBackingStore()->set('domainName', $value);
    }

    /**
     * Sets the emailRole property value. For email-related alerts - user account's email 'role'. Possible values are: unknown, sender, recipient.
     * @param EmailRole|null $value Value to set for the emailRole property.
    */
    public function setEmailRole(?EmailRole $value): void {
        $this->getBackingStore()->set('emailRole', $value);
    }

    /**
     * Sets the isVpn property value. Indicates whether the user logged on through a VPN.
     * @param bool|null $value Value to set for the isVpn property.
    */
    public function setIsVpn(?bool $value): void {
        $this->getBackingStore()->set('isVpn', $value);
    }

    /**
     * Sets the logonDateTime property value. Time at which the sign-in occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the logonDateTime property.
    */
    public function setLogonDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('logonDateTime', $value);
    }

    /**
     * Sets the logonId property value. User sign-in ID.
     * @param string|null $value Value to set for the logonId property.
    */
    public function setLogonId(?string $value): void {
        $this->getBackingStore()->set('logonId', $value);
    }

    /**
     * Sets the logonIp property value. IP Address the sign-in request originated from.
     * @param string|null $value Value to set for the logonIp property.
    */
    public function setLogonIp(?string $value): void {
        $this->getBackingStore()->set('logonIp', $value);
    }

    /**
     * Sets the logonLocation property value. Location (by IP address mapping) associated with a user sign-in event by this user.
     * @param string|null $value Value to set for the logonLocation property.
    */
    public function setLogonLocation(?string $value): void {
        $this->getBackingStore()->set('logonLocation', $value);
    }

    /**
     * Sets the logonType property value. Method of user sign in. Possible values are: unknown, interactive, remoteInteractive, network, batch, service.
     * @param LogonType|null $value Value to set for the logonType property.
    */
    public function setLogonType(?LogonType $value): void {
        $this->getBackingStore()->set('logonType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the onPremisesSecurityIdentifier property value. Active Directory (on-premises) Security Identifier (SID) of the user.
     * @param string|null $value Value to set for the onPremisesSecurityIdentifier property.
    */
    public function setOnPremisesSecurityIdentifier(?string $value): void {
        $this->getBackingStore()->set('onPremisesSecurityIdentifier', $value);
    }

    /**
     * Sets the riskScore property value. Provider-generated/calculated risk score of the user account. Recommended value range of 0-1, which equates to a percentage.
     * @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value): void {
        $this->getBackingStore()->set('riskScore', $value);
    }

    /**
     * Sets the userAccountType property value. User account type (group membership), per Windows definition. Possible values are: unknown, standard, power, administrator.
     * @param UserAccountSecurityType|null $value Value to set for the userAccountType property.
    */
    public function setUserAccountType(?UserAccountSecurityType $value): void {
        $this->getBackingStore()->set('userAccountType', $value);
    }

    /**
     * Sets the userPrincipalName property value. User sign-in name - internet format: (user account name)@(user account DNS domain name).
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
