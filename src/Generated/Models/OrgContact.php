<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrgContact extends DirectoryObject implements Parsable 
{
    /**
     * @var array<PhysicalOfficeAddress>|null $addresses The addresses property
    */
    private ?array $addresses = null;
    
    /**
     * @var string|null $companyName The companyName property
    */
    private ?string $companyName = null;
    
    /**
     * @var string|null $department The department property
    */
    private ?string $department = null;
    
    /**
     * @var array<DirectoryObject>|null $directReports The directReports property
    */
    private ?array $directReports = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $givenName The givenName property
    */
    private ?string $givenName = null;
    
    /**
     * @var string|null $jobTitle The jobTitle property
    */
    private ?string $jobTitle = null;
    
    /**
     * @var string|null $mail The mail property
    */
    private ?string $mail = null;
    
    /**
     * @var string|null $mailNickname The mailNickname property
    */
    private ?string $mailNickname = null;
    
    /**
     * @var DirectoryObject|null $manager The manager property
    */
    private ?DirectoryObject $manager = null;
    
    /**
     * @var array<DirectoryObject>|null $memberOf The memberOf property
    */
    private ?array $memberOf = null;
    
    /**
     * @var DateTime|null $onPremisesLastSyncDateTime The onPremisesLastSyncDateTime property
    */
    private ?DateTime $onPremisesLastSyncDateTime = null;
    
    /**
     * @var array<OnPremisesProvisioningError>|null $onPremisesProvisioningErrors The onPremisesProvisioningErrors property
    */
    private ?array $onPremisesProvisioningErrors = null;
    
    /**
     * @var bool|null $onPremisesSyncEnabled The onPremisesSyncEnabled property
    */
    private ?bool $onPremisesSyncEnabled = null;
    
    /**
     * @var array<Phone>|null $phones The phones property
    */
    private ?array $phones = null;
    
    /**
     * @var array<string>|null $proxyAddresses The proxyAddresses property
    */
    private ?array $proxyAddresses = null;
    
    /**
     * @var string|null $surname The surname property
    */
    private ?string $surname = null;
    
    /**
     * @var array<DirectoryObject>|null $transitiveMemberOf The transitiveMemberOf property
    */
    private ?array $transitiveMemberOf = null;
    
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
        return $this->addresses;
    }

    /**
     * Gets the companyName property value. The companyName property
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Gets the department property value. The department property
     * @return string|null
    */
    public function getDepartment(): ?string {
        return $this->department;
    }

    /**
     * Gets the directReports property value. The directReports property
     * @return array<DirectoryObject>|null
    */
    public function getDirectReports(): ?array {
        return $this->directReports;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addresses' => function (ParseNode $n) use ($o) { $o->setAddresses($n->getCollectionOfObjectValues(array(PhysicalOfficeAddress::class, 'createFromDiscriminatorValue'))); },
            'companyName' => function (ParseNode $n) use ($o) { $o->setCompanyName($n->getStringValue()); },
            'department' => function (ParseNode $n) use ($o) { $o->setDepartment($n->getStringValue()); },
            'directReports' => function (ParseNode $n) use ($o) { $o->setDirectReports($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'givenName' => function (ParseNode $n) use ($o) { $o->setGivenName($n->getStringValue()); },
            'jobTitle' => function (ParseNode $n) use ($o) { $o->setJobTitle($n->getStringValue()); },
            'mail' => function (ParseNode $n) use ($o) { $o->setMail($n->getStringValue()); },
            'mailNickname' => function (ParseNode $n) use ($o) { $o->setMailNickname($n->getStringValue()); },
            'manager' => function (ParseNode $n) use ($o) { $o->setManager($n->getObjectValue(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'memberOf' => function (ParseNode $n) use ($o) { $o->setMemberOf($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'onPremisesLastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setOnPremisesLastSyncDateTime($n->getDateTimeValue()); },
            'onPremisesProvisioningErrors' => function (ParseNode $n) use ($o) { $o->setOnPremisesProvisioningErrors($n->getCollectionOfObjectValues(array(OnPremisesProvisioningError::class, 'createFromDiscriminatorValue'))); },
            'onPremisesSyncEnabled' => function (ParseNode $n) use ($o) { $o->setOnPremisesSyncEnabled($n->getBooleanValue()); },
            'phones' => function (ParseNode $n) use ($o) { $o->setPhones($n->getCollectionOfObjectValues(array(Phone::class, 'createFromDiscriminatorValue'))); },
            'proxyAddresses' => function (ParseNode $n) use ($o) { $o->setProxyAddresses($n->getCollectionOfPrimitiveValues()); },
            'surname' => function (ParseNode $n) use ($o) { $o->setSurname($n->getStringValue()); },
            'transitiveMemberOf' => function (ParseNode $n) use ($o) { $o->setTransitiveMemberOf($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the givenName property value. The givenName property
     * @return string|null
    */
    public function getGivenName(): ?string {
        return $this->givenName;
    }

    /**
     * Gets the jobTitle property value. The jobTitle property
     * @return string|null
    */
    public function getJobTitle(): ?string {
        return $this->jobTitle;
    }

    /**
     * Gets the mail property value. The mail property
     * @return string|null
    */
    public function getMail(): ?string {
        return $this->mail;
    }

    /**
     * Gets the mailNickname property value. The mailNickname property
     * @return string|null
    */
    public function getMailNickname(): ?string {
        return $this->mailNickname;
    }

    /**
     * Gets the manager property value. The manager property
     * @return DirectoryObject|null
    */
    public function getManager(): ?DirectoryObject {
        return $this->manager;
    }

    /**
     * Gets the memberOf property value. The memberOf property
     * @return array<DirectoryObject>|null
    */
    public function getMemberOf(): ?array {
        return $this->memberOf;
    }

    /**
     * Gets the onPremisesLastSyncDateTime property value. The onPremisesLastSyncDateTime property
     * @return DateTime|null
    */
    public function getOnPremisesLastSyncDateTime(): ?DateTime {
        return $this->onPremisesLastSyncDateTime;
    }

    /**
     * Gets the onPremisesProvisioningErrors property value. The onPremisesProvisioningErrors property
     * @return array<OnPremisesProvisioningError>|null
    */
    public function getOnPremisesProvisioningErrors(): ?array {
        return $this->onPremisesProvisioningErrors;
    }

    /**
     * Gets the onPremisesSyncEnabled property value. The onPremisesSyncEnabled property
     * @return bool|null
    */
    public function getOnPremisesSyncEnabled(): ?bool {
        return $this->onPremisesSyncEnabled;
    }

    /**
     * Gets the phones property value. The phones property
     * @return array<Phone>|null
    */
    public function getPhones(): ?array {
        return $this->phones;
    }

    /**
     * Gets the proxyAddresses property value. The proxyAddresses property
     * @return array<string>|null
    */
    public function getProxyAddresses(): ?array {
        return $this->proxyAddresses;
    }

    /**
     * Gets the surname property value. The surname property
     * @return string|null
    */
    public function getSurname(): ?string {
        return $this->surname;
    }

    /**
     * Gets the transitiveMemberOf property value. The transitiveMemberOf property
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveMemberOf(): ?array {
        return $this->transitiveMemberOf;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('addresses', $this->addresses);
        $writer->writeStringValue('companyName', $this->companyName);
        $writer->writeStringValue('department', $this->department);
        $writer->writeCollectionOfObjectValues('directReports', $this->directReports);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('givenName', $this->givenName);
        $writer->writeStringValue('jobTitle', $this->jobTitle);
        $writer->writeStringValue('mail', $this->mail);
        $writer->writeStringValue('mailNickname', $this->mailNickname);
        $writer->writeObjectValue('manager', $this->manager);
        $writer->writeCollectionOfObjectValues('memberOf', $this->memberOf);
        $writer->writeDateTimeValue('onPremisesLastSyncDateTime', $this->onPremisesLastSyncDateTime);
        $writer->writeCollectionOfObjectValues('onPremisesProvisioningErrors', $this->onPremisesProvisioningErrors);
        $writer->writeBooleanValue('onPremisesSyncEnabled', $this->onPremisesSyncEnabled);
        $writer->writeCollectionOfObjectValues('phones', $this->phones);
        $writer->writeCollectionOfPrimitiveValues('proxyAddresses', $this->proxyAddresses);
        $writer->writeStringValue('surname', $this->surname);
        $writer->writeCollectionOfObjectValues('transitiveMemberOf', $this->transitiveMemberOf);
    }

    /**
     * Sets the addresses property value. The addresses property
     *  @param array<PhysicalOfficeAddress>|null $value Value to set for the addresses property.
    */
    public function setAddresses(?array $value ): void {
        $this->addresses = $value;
    }

    /**
     * Sets the companyName property value. The companyName property
     *  @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value ): void {
        $this->companyName = $value;
    }

    /**
     * Sets the department property value. The department property
     *  @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value ): void {
        $this->department = $value;
    }

    /**
     * Sets the directReports property value. The directReports property
     *  @param array<DirectoryObject>|null $value Value to set for the directReports property.
    */
    public function setDirectReports(?array $value ): void {
        $this->directReports = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the givenName property value. The givenName property
     *  @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value ): void {
        $this->givenName = $value;
    }

    /**
     * Sets the jobTitle property value. The jobTitle property
     *  @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value ): void {
        $this->jobTitle = $value;
    }

    /**
     * Sets the mail property value. The mail property
     *  @param string|null $value Value to set for the mail property.
    */
    public function setMail(?string $value ): void {
        $this->mail = $value;
    }

    /**
     * Sets the mailNickname property value. The mailNickname property
     *  @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value ): void {
        $this->mailNickname = $value;
    }

    /**
     * Sets the manager property value. The manager property
     *  @param DirectoryObject|null $value Value to set for the manager property.
    */
    public function setManager(?DirectoryObject $value ): void {
        $this->manager = $value;
    }

    /**
     * Sets the memberOf property value. The memberOf property
     *  @param array<DirectoryObject>|null $value Value to set for the memberOf property.
    */
    public function setMemberOf(?array $value ): void {
        $this->memberOf = $value;
    }

    /**
     * Sets the onPremisesLastSyncDateTime property value. The onPremisesLastSyncDateTime property
     *  @param DateTime|null $value Value to set for the onPremisesLastSyncDateTime property.
    */
    public function setOnPremisesLastSyncDateTime(?DateTime $value ): void {
        $this->onPremisesLastSyncDateTime = $value;
    }

    /**
     * Sets the onPremisesProvisioningErrors property value. The onPremisesProvisioningErrors property
     *  @param array<OnPremisesProvisioningError>|null $value Value to set for the onPremisesProvisioningErrors property.
    */
    public function setOnPremisesProvisioningErrors(?array $value ): void {
        $this->onPremisesProvisioningErrors = $value;
    }

    /**
     * Sets the onPremisesSyncEnabled property value. The onPremisesSyncEnabled property
     *  @param bool|null $value Value to set for the onPremisesSyncEnabled property.
    */
    public function setOnPremisesSyncEnabled(?bool $value ): void {
        $this->onPremisesSyncEnabled = $value;
    }

    /**
     * Sets the phones property value. The phones property
     *  @param array<Phone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value ): void {
        $this->phones = $value;
    }

    /**
     * Sets the proxyAddresses property value. The proxyAddresses property
     *  @param array<string>|null $value Value to set for the proxyAddresses property.
    */
    public function setProxyAddresses(?array $value ): void {
        $this->proxyAddresses = $value;
    }

    /**
     * Sets the surname property value. The surname property
     *  @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value ): void {
        $this->surname = $value;
    }

    /**
     * Sets the transitiveMemberOf property value. The transitiveMemberOf property
     *  @param array<DirectoryObject>|null $value Value to set for the transitiveMemberOf property.
    */
    public function setTransitiveMemberOf(?array $value ): void {
        $this->transitiveMemberOf = $value;
    }

}
