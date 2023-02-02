<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrgContact extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new OrgContact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.orgContact');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrgContact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrgContact {
        return new OrgContact();
    }

    /**
     * Gets the addresses property value. The addresses property
     * @return array<PhysicalOfficeAddress>|null
    */
    public function getAddresses(): ?array {
        return $this->getBackingStore()->get('addresses');
    }

    /**
     * Gets the companyName property value. The companyName property
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->getBackingStore()->get('companyName');
    }

    /**
     * Gets the department property value. The department property
     * @return string|null
    */
    public function getDepartment(): ?string {
        return $this->getBackingStore()->get('department');
    }

    /**
     * Gets the directReports property value. The directReports property
     * @return array<DirectoryObject>|null
    */
    public function getDirectReports(): ?array {
        return $this->getBackingStore()->get('directReports');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addresses' => fn(ParseNode $n) => $o->setAddresses($n->getCollectionOfObjectValues([PhysicalOfficeAddress::class, 'createFromDiscriminatorValue'])),
            'companyName' => fn(ParseNode $n) => $o->setCompanyName($n->getStringValue()),
            'department' => fn(ParseNode $n) => $o->setDepartment($n->getStringValue()),
            'directReports' => fn(ParseNode $n) => $o->setDirectReports($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'givenName' => fn(ParseNode $n) => $o->setGivenName($n->getStringValue()),
            'jobTitle' => fn(ParseNode $n) => $o->setJobTitle($n->getStringValue()),
            'mail' => fn(ParseNode $n) => $o->setMail($n->getStringValue()),
            'mailNickname' => fn(ParseNode $n) => $o->setMailNickname($n->getStringValue()),
            'manager' => fn(ParseNode $n) => $o->setManager($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'memberOf' => fn(ParseNode $n) => $o->setMemberOf($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'onPremisesLastSyncDateTime' => fn(ParseNode $n) => $o->setOnPremisesLastSyncDateTime($n->getDateTimeValue()),
            'onPremisesProvisioningErrors' => fn(ParseNode $n) => $o->setOnPremisesProvisioningErrors($n->getCollectionOfObjectValues([OnPremisesProvisioningError::class, 'createFromDiscriminatorValue'])),
            'onPremisesSyncEnabled' => fn(ParseNode $n) => $o->setOnPremisesSyncEnabled($n->getBooleanValue()),
            'phones' => fn(ParseNode $n) => $o->setPhones($n->getCollectionOfObjectValues([Phone::class, 'createFromDiscriminatorValue'])),
            'proxyAddresses' => fn(ParseNode $n) => $o->setProxyAddresses($n->getCollectionOfPrimitiveValues()),
            'surname' => fn(ParseNode $n) => $o->setSurname($n->getStringValue()),
            'transitiveMemberOf' => fn(ParseNode $n) => $o->setTransitiveMemberOf($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the givenName property value. The givenName property
     * @return string|null
    */
    public function getGivenName(): ?string {
        return $this->getBackingStore()->get('givenName');
    }

    /**
     * Gets the jobTitle property value. The jobTitle property
     * @return string|null
    */
    public function getJobTitle(): ?string {
        return $this->getBackingStore()->get('jobTitle');
    }

    /**
     * Gets the mail property value. The mail property
     * @return string|null
    */
    public function getMail(): ?string {
        return $this->getBackingStore()->get('mail');
    }

    /**
     * Gets the mailNickname property value. The mailNickname property
     * @return string|null
    */
    public function getMailNickname(): ?string {
        return $this->getBackingStore()->get('mailNickname');
    }

    /**
     * Gets the manager property value. The manager property
     * @return DirectoryObject|null
    */
    public function getManager(): ?DirectoryObject {
        return $this->getBackingStore()->get('manager');
    }

    /**
     * Gets the memberOf property value. The memberOf property
     * @return array<DirectoryObject>|null
    */
    public function getMemberOf(): ?array {
        return $this->getBackingStore()->get('memberOf');
    }

    /**
     * Gets the onPremisesLastSyncDateTime property value. The onPremisesLastSyncDateTime property
     * @return DateTime|null
    */
    public function getOnPremisesLastSyncDateTime(): ?DateTime {
        return $this->getBackingStore()->get('onPremisesLastSyncDateTime');
    }

    /**
     * Gets the onPremisesProvisioningErrors property value. The onPremisesProvisioningErrors property
     * @return array<OnPremisesProvisioningError>|null
    */
    public function getOnPremisesProvisioningErrors(): ?array {
        return $this->getBackingStore()->get('onPremisesProvisioningErrors');
    }

    /**
     * Gets the onPremisesSyncEnabled property value. The onPremisesSyncEnabled property
     * @return bool|null
    */
    public function getOnPremisesSyncEnabled(): ?bool {
        return $this->getBackingStore()->get('onPremisesSyncEnabled');
    }

    /**
     * Gets the phones property value. The phones property
     * @return array<Phone>|null
    */
    public function getPhones(): ?array {
        return $this->getBackingStore()->get('phones');
    }

    /**
     * Gets the proxyAddresses property value. The proxyAddresses property
     * @return array<string>|null
    */
    public function getProxyAddresses(): ?array {
        return $this->getBackingStore()->get('proxyAddresses');
    }

    /**
     * Gets the surname property value. The surname property
     * @return string|null
    */
    public function getSurname(): ?string {
        return $this->getBackingStore()->get('surname');
    }

    /**
     * Gets the transitiveMemberOf property value. The transitiveMemberOf property
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveMemberOf(): ?array {
        return $this->getBackingStore()->get('transitiveMemberOf');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('addresses', $this->getAddresses());
        $writer->writeStringValue('companyName', $this->getCompanyName());
        $writer->writeStringValue('department', $this->getDepartment());
        $writer->writeCollectionOfObjectValues('directReports', $this->getDirectReports());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('givenName', $this->getGivenName());
        $writer->writeStringValue('jobTitle', $this->getJobTitle());
        $writer->writeStringValue('mail', $this->getMail());
        $writer->writeStringValue('mailNickname', $this->getMailNickname());
        $writer->writeObjectValue('manager', $this->getManager());
        $writer->writeCollectionOfObjectValues('memberOf', $this->getMemberOf());
        $writer->writeDateTimeValue('onPremisesLastSyncDateTime', $this->getOnPremisesLastSyncDateTime());
        $writer->writeCollectionOfObjectValues('onPremisesProvisioningErrors', $this->getOnPremisesProvisioningErrors());
        $writer->writeBooleanValue('onPremisesSyncEnabled', $this->getOnPremisesSyncEnabled());
        $writer->writeCollectionOfObjectValues('phones', $this->getPhones());
        $writer->writeCollectionOfPrimitiveValues('proxyAddresses', $this->getProxyAddresses());
        $writer->writeStringValue('surname', $this->getSurname());
        $writer->writeCollectionOfObjectValues('transitiveMemberOf', $this->getTransitiveMemberOf());
    }

    /**
     * Sets the addresses property value. The addresses property
     * @param array<PhysicalOfficeAddress>|null $value Value to set for the addresses property.
    */
    public function setAddresses(?array $value): void {
        $this->getBackingStore()->set('addresses', $value);
    }

    /**
     * Sets the companyName property value. The companyName property
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->getBackingStore()->set('companyName', $value);
    }

    /**
     * Sets the department property value. The department property
     * @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value): void {
        $this->getBackingStore()->set('department', $value);
    }

    /**
     * Sets the directReports property value. The directReports property
     * @param array<DirectoryObject>|null $value Value to set for the directReports property.
    */
    public function setDirectReports(?array $value): void {
        $this->getBackingStore()->set('directReports', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the givenName property value. The givenName property
     * @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value): void {
        $this->getBackingStore()->set('givenName', $value);
    }

    /**
     * Sets the jobTitle property value. The jobTitle property
     * @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value): void {
        $this->getBackingStore()->set('jobTitle', $value);
    }

    /**
     * Sets the mail property value. The mail property
     * @param string|null $value Value to set for the mail property.
    */
    public function setMail(?string $value): void {
        $this->getBackingStore()->set('mail', $value);
    }

    /**
     * Sets the mailNickname property value. The mailNickname property
     * @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value): void {
        $this->getBackingStore()->set('mailNickname', $value);
    }

    /**
     * Sets the manager property value. The manager property
     * @param DirectoryObject|null $value Value to set for the manager property.
    */
    public function setManager(?DirectoryObject $value): void {
        $this->getBackingStore()->set('manager', $value);
    }

    /**
     * Sets the memberOf property value. The memberOf property
     * @param array<DirectoryObject>|null $value Value to set for the memberOf property.
    */
    public function setMemberOf(?array $value): void {
        $this->getBackingStore()->set('memberOf', $value);
    }

    /**
     * Sets the onPremisesLastSyncDateTime property value. The onPremisesLastSyncDateTime property
     * @param DateTime|null $value Value to set for the onPremisesLastSyncDateTime property.
    */
    public function setOnPremisesLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('onPremisesLastSyncDateTime', $value);
    }

    /**
     * Sets the onPremisesProvisioningErrors property value. The onPremisesProvisioningErrors property
     * @param array<OnPremisesProvisioningError>|null $value Value to set for the onPremisesProvisioningErrors property.
    */
    public function setOnPremisesProvisioningErrors(?array $value): void {
        $this->getBackingStore()->set('onPremisesProvisioningErrors', $value);
    }

    /**
     * Sets the onPremisesSyncEnabled property value. The onPremisesSyncEnabled property
     * @param bool|null $value Value to set for the onPremisesSyncEnabled property.
    */
    public function setOnPremisesSyncEnabled(?bool $value): void {
        $this->getBackingStore()->set('onPremisesSyncEnabled', $value);
    }

    /**
     * Sets the phones property value. The phones property
     * @param array<Phone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value): void {
        $this->getBackingStore()->set('phones', $value);
    }

    /**
     * Sets the proxyAddresses property value. The proxyAddresses property
     * @param array<string>|null $value Value to set for the proxyAddresses property.
    */
    public function setProxyAddresses(?array $value): void {
        $this->getBackingStore()->set('proxyAddresses', $value);
    }

    /**
     * Sets the surname property value. The surname property
     * @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value): void {
        $this->getBackingStore()->set('surname', $value);
    }

    /**
     * Sets the transitiveMemberOf property value. The transitiveMemberOf property
     * @param array<DirectoryObject>|null $value Value to set for the transitiveMemberOf property.
    */
    public function setTransitiveMemberOf(?array $value): void {
        $this->getBackingStore()->set('transitiveMemberOf', $value);
    }

}
