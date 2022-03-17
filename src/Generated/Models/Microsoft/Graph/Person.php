<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Person extends Entity 
{
    /** @var string|null $birthday The person's birthday. */
    private ?string $birthday = null;
    
    /** @var string|null $companyName The name of the person's company. */
    private ?string $companyName = null;
    
    /** @var string|null $department The person's department. */
    private ?string $department = null;
    
    /** @var string|null $displayName The person's display name. */
    private ?string $displayName = null;
    
    /** @var string|null $givenName The person's given name. */
    private ?string $givenName = null;
    
    /** @var string|null $imAddress The instant message voice over IP (VOIP) session initiation protocol (SIP) address for the user. Read-only. */
    private ?string $imAddress = null;
    
    /** @var bool|null $isFavorite true if the user has flagged this person as a favorite. */
    private ?bool $isFavorite = null;
    
    /** @var string|null $jobTitle The person's job title. */
    private ?string $jobTitle = null;
    
    /** @var string|null $officeLocation The location of the person's office. */
    private ?string $officeLocation = null;
    
    /** @var string|null $personNotes Free-form notes that the user has taken about this person. */
    private ?string $personNotes = null;
    
    /** @var PersonType|null $personType The type of person. */
    private ?PersonType $personType = null;
    
    /** @var array<Phone>|null $phones The person's phone numbers. */
    private ?array $phones = null;
    
    /** @var array<Location>|null $postalAddresses The person's addresses. */
    private ?array $postalAddresses = null;
    
    /** @var string|null $profession The person's profession. */
    private ?string $profession = null;
    
    /** @var array<ScoredEmailAddress>|null $scoredEmailAddresses The person's email addresses. */
    private ?array $scoredEmailAddresses = null;
    
    /** @var string|null $surname The person's surname. */
    private ?string $surname = null;
    
    /** @var string|null $userPrincipalName The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard RFC 822. By convention, this should map to the person's email name. The general format is alias@domain. */
    private ?string $userPrincipalName = null;
    
    /** @var array<Website>|null $websites The person's websites. */
    private ?array $websites = null;
    
    /** @var string|null $yomiCompany The phonetic Japanese name of the person's company. */
    private ?string $yomiCompany = null;
    
    /**
     * Instantiates a new person and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Person
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Person {
        return new Person();
    }

    /**
     * Gets the birthday property value. The person's birthday.
     * @return string|null
    */
    public function getBirthday(): ?string {
        return $this->birthday;
    }

    /**
     * Gets the companyName property value. The name of the person's company.
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Gets the department property value. The person's department.
     * @return string|null
    */
    public function getDepartment(): ?string {
        return $this->department;
    }

    /**
     * Gets the displayName property value. The person's display name.
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
        return array_merge(parent::getFieldDeserializers(), [
            'birthday' => function (self $o, ParseNode $n) { $o->setBirthday($n->getStringValue()); },
            'companyName' => function (self $o, ParseNode $n) { $o->setCompanyName($n->getStringValue()); },
            'department' => function (self $o, ParseNode $n) { $o->setDepartment($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'givenName' => function (self $o, ParseNode $n) { $o->setGivenName($n->getStringValue()); },
            'imAddress' => function (self $o, ParseNode $n) { $o->setImAddress($n->getStringValue()); },
            'isFavorite' => function (self $o, ParseNode $n) { $o->setIsFavorite($n->getBooleanValue()); },
            'jobTitle' => function (self $o, ParseNode $n) { $o->setJobTitle($n->getStringValue()); },
            'officeLocation' => function (self $o, ParseNode $n) { $o->setOfficeLocation($n->getStringValue()); },
            'personNotes' => function (self $o, ParseNode $n) { $o->setPersonNotes($n->getStringValue()); },
            'personType' => function (self $o, ParseNode $n) { $o->setPersonType($n->getObjectValue(PersonType::class)); },
            'phones' => function (self $o, ParseNode $n) { $o->setPhones($n->getCollectionOfObjectValues(Phone::class)); },
            'postalAddresses' => function (self $o, ParseNode $n) { $o->setPostalAddresses($n->getCollectionOfObjectValues(Location::class)); },
            'profession' => function (self $o, ParseNode $n) { $o->setProfession($n->getStringValue()); },
            'scoredEmailAddresses' => function (self $o, ParseNode $n) { $o->setScoredEmailAddresses($n->getCollectionOfObjectValues(ScoredEmailAddress::class)); },
            'surname' => function (self $o, ParseNode $n) { $o->setSurname($n->getStringValue()); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
            'websites' => function (self $o, ParseNode $n) { $o->setWebsites($n->getCollectionOfObjectValues(Website::class)); },
            'yomiCompany' => function (self $o, ParseNode $n) { $o->setYomiCompany($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the givenName property value. The person's given name.
     * @return string|null
    */
    public function getGivenName(): ?string {
        return $this->givenName;
    }

    /**
     * Gets the imAddress property value. The instant message voice over IP (VOIP) session initiation protocol (SIP) address for the user. Read-only.
     * @return string|null
    */
    public function getImAddress(): ?string {
        return $this->imAddress;
    }

    /**
     * Gets the isFavorite property value. true if the user has flagged this person as a favorite.
     * @return bool|null
    */
    public function getIsFavorite(): ?bool {
        return $this->isFavorite;
    }

    /**
     * Gets the jobTitle property value. The person's job title.
     * @return string|null
    */
    public function getJobTitle(): ?string {
        return $this->jobTitle;
    }

    /**
     * Gets the officeLocation property value. The location of the person's office.
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        return $this->officeLocation;
    }

    /**
     * Gets the personNotes property value. Free-form notes that the user has taken about this person.
     * @return string|null
    */
    public function getPersonNotes(): ?string {
        return $this->personNotes;
    }

    /**
     * Gets the personType property value. The type of person.
     * @return PersonType|null
    */
    public function getPersonType(): ?PersonType {
        return $this->personType;
    }

    /**
     * Gets the phones property value. The person's phone numbers.
     * @return array<Phone>|null
    */
    public function getPhones(): ?array {
        return $this->phones;
    }

    /**
     * Gets the postalAddresses property value. The person's addresses.
     * @return array<Location>|null
    */
    public function getPostalAddresses(): ?array {
        return $this->postalAddresses;
    }

    /**
     * Gets the profession property value. The person's profession.
     * @return string|null
    */
    public function getProfession(): ?string {
        return $this->profession;
    }

    /**
     * Gets the scoredEmailAddresses property value. The person's email addresses.
     * @return array<ScoredEmailAddress>|null
    */
    public function getScoredEmailAddresses(): ?array {
        return $this->scoredEmailAddresses;
    }

    /**
     * Gets the surname property value. The person's surname.
     * @return string|null
    */
    public function getSurname(): ?string {
        return $this->surname;
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard RFC 822. By convention, this should map to the person's email name. The general format is alias@domain.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Gets the websites property value. The person's websites.
     * @return array<Website>|null
    */
    public function getWebsites(): ?array {
        return $this->websites;
    }

    /**
     * Gets the yomiCompany property value. The phonetic Japanese name of the person's company.
     * @return string|null
    */
    public function getYomiCompany(): ?string {
        return $this->yomiCompany;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('birthday', $this->birthday);
        $writer->writeStringValue('companyName', $this->companyName);
        $writer->writeStringValue('department', $this->department);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('givenName', $this->givenName);
        $writer->writeStringValue('imAddress', $this->imAddress);
        $writer->writeBooleanValue('isFavorite', $this->isFavorite);
        $writer->writeStringValue('jobTitle', $this->jobTitle);
        $writer->writeStringValue('officeLocation', $this->officeLocation);
        $writer->writeStringValue('personNotes', $this->personNotes);
        $writer->writeObjectValue('personType', $this->personType);
        $writer->writeCollectionOfObjectValues('phones', $this->phones);
        $writer->writeCollectionOfObjectValues('postalAddresses', $this->postalAddresses);
        $writer->writeStringValue('profession', $this->profession);
        $writer->writeCollectionOfObjectValues('scoredEmailAddresses', $this->scoredEmailAddresses);
        $writer->writeStringValue('surname', $this->surname);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeCollectionOfObjectValues('websites', $this->websites);
        $writer->writeStringValue('yomiCompany', $this->yomiCompany);
    }

    /**
     * Sets the birthday property value. The person's birthday.
     *  @param string|null $value Value to set for the birthday property.
    */
    public function setBirthday(?string $value ): void {
        $this->birthday = $value;
    }

    /**
     * Sets the companyName property value. The name of the person's company.
     *  @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value ): void {
        $this->companyName = $value;
    }

    /**
     * Sets the department property value. The person's department.
     *  @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value ): void {
        $this->department = $value;
    }

    /**
     * Sets the displayName property value. The person's display name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the givenName property value. The person's given name.
     *  @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value ): void {
        $this->givenName = $value;
    }

    /**
     * Sets the imAddress property value. The instant message voice over IP (VOIP) session initiation protocol (SIP) address for the user. Read-only.
     *  @param string|null $value Value to set for the imAddress property.
    */
    public function setImAddress(?string $value ): void {
        $this->imAddress = $value;
    }

    /**
     * Sets the isFavorite property value. true if the user has flagged this person as a favorite.
     *  @param bool|null $value Value to set for the isFavorite property.
    */
    public function setIsFavorite(?bool $value ): void {
        $this->isFavorite = $value;
    }

    /**
     * Sets the jobTitle property value. The person's job title.
     *  @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value ): void {
        $this->jobTitle = $value;
    }

    /**
     * Sets the officeLocation property value. The location of the person's office.
     *  @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value ): void {
        $this->officeLocation = $value;
    }

    /**
     * Sets the personNotes property value. Free-form notes that the user has taken about this person.
     *  @param string|null $value Value to set for the personNotes property.
    */
    public function setPersonNotes(?string $value ): void {
        $this->personNotes = $value;
    }

    /**
     * Sets the personType property value. The type of person.
     *  @param PersonType|null $value Value to set for the personType property.
    */
    public function setPersonType(?PersonType $value ): void {
        $this->personType = $value;
    }

    /**
     * Sets the phones property value. The person's phone numbers.
     *  @param array<Phone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value ): void {
        $this->phones = $value;
    }

    /**
     * Sets the postalAddresses property value. The person's addresses.
     *  @param array<Location>|null $value Value to set for the postalAddresses property.
    */
    public function setPostalAddresses(?array $value ): void {
        $this->postalAddresses = $value;
    }

    /**
     * Sets the profession property value. The person's profession.
     *  @param string|null $value Value to set for the profession property.
    */
    public function setProfession(?string $value ): void {
        $this->profession = $value;
    }

    /**
     * Sets the scoredEmailAddresses property value. The person's email addresses.
     *  @param array<ScoredEmailAddress>|null $value Value to set for the scoredEmailAddresses property.
    */
    public function setScoredEmailAddresses(?array $value ): void {
        $this->scoredEmailAddresses = $value;
    }

    /**
     * Sets the surname property value. The person's surname.
     *  @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value ): void {
        $this->surname = $value;
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard RFC 822. By convention, this should map to the person's email name. The general format is alias@domain.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

    /**
     * Sets the websites property value. The person's websites.
     *  @param array<Website>|null $value Value to set for the websites property.
    */
    public function setWebsites(?array $value ): void {
        $this->websites = $value;
    }

    /**
     * Sets the yomiCompany property value. The phonetic Japanese name of the person's company.
     *  @param string|null $value Value to set for the yomiCompany property.
    */
    public function setYomiCompany(?string $value ): void {
        $this->yomiCompany = $value;
    }

}
