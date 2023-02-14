<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Contact extends OutlookItem implements Parsable 
{
    /**
     * Instantiates a new contact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.contact');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Contact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Contact {
        return new Contact();
    }

    /**
     * Gets the assistantName property value. The name of the contact's assistant.
     * @return string|null
    */
    public function getAssistantName(): ?string {
        return $this->getBackingStore()->get('assistantName');
    }

    /**
     * Gets the birthday property value. The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getBirthday(): ?DateTime {
        return $this->getBackingStore()->get('birthday');
    }

    /**
     * Gets the businessAddress property value. The contact's business address.
     * @return PhysicalAddress|null
    */
    public function getBusinessAddress(): ?PhysicalAddress {
        return $this->getBackingStore()->get('businessAddress');
    }

    /**
     * Gets the businessHomePage property value. The business home page of the contact.
     * @return string|null
    */
    public function getBusinessHomePage(): ?string {
        return $this->getBackingStore()->get('businessHomePage');
    }

    /**
     * Gets the businessPhones property value. The contact's business phone numbers.
     * @return array<string>|null
    */
    public function getBusinessPhones(): ?array {
        return $this->getBackingStore()->get('businessPhones');
    }

    /**
     * Gets the children property value. The names of the contact's children.
     * @return array<string>|null
    */
    public function getChildren(): ?array {
        return $this->getBackingStore()->get('children');
    }

    /**
     * Gets the companyName property value. The name of the contact's company.
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->getBackingStore()->get('companyName');
    }

    /**
     * Gets the department property value. The contact's department.
     * @return string|null
    */
    public function getDepartment(): ?string {
        return $this->getBackingStore()->get('department');
    }

    /**
     * Gets the displayName property value. The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the emailAddresses property value. The contact's email addresses.
     * @return array<EmailAddress>|null
    */
    public function getEmailAddresses(): ?array {
        return $this->getBackingStore()->get('emailAddresses');
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the contact. Read-only. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->getBackingStore()->get('extensions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assistantName' => fn(ParseNode $n) => $o->setAssistantName($n->getStringValue()),
            'birthday' => fn(ParseNode $n) => $o->setBirthday($n->getDateTimeValue()),
            'businessAddress' => fn(ParseNode $n) => $o->setBusinessAddress($n->getObjectValue([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'businessHomePage' => fn(ParseNode $n) => $o->setBusinessHomePage($n->getStringValue()),
            'businessPhones' => fn(ParseNode $n) => $o->setBusinessPhones($n->getCollectionOfPrimitiveValues()),
            'children' => fn(ParseNode $n) => $o->setChildren($n->getCollectionOfPrimitiveValues()),
            'companyName' => fn(ParseNode $n) => $o->setCompanyName($n->getStringValue()),
            'department' => fn(ParseNode $n) => $o->setDepartment($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'emailAddresses' => fn(ParseNode $n) => $o->setEmailAddresses($n->getCollectionOfObjectValues([EmailAddress::class, 'createFromDiscriminatorValue'])),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'fileAs' => fn(ParseNode $n) => $o->setFileAs($n->getStringValue()),
            'generation' => fn(ParseNode $n) => $o->setGeneration($n->getStringValue()),
            'givenName' => fn(ParseNode $n) => $o->setGivenName($n->getStringValue()),
            'homeAddress' => fn(ParseNode $n) => $o->setHomeAddress($n->getObjectValue([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'homePhones' => fn(ParseNode $n) => $o->setHomePhones($n->getCollectionOfPrimitiveValues()),
            'imAddresses' => fn(ParseNode $n) => $o->setImAddresses($n->getCollectionOfPrimitiveValues()),
            'initials' => fn(ParseNode $n) => $o->setInitials($n->getStringValue()),
            'jobTitle' => fn(ParseNode $n) => $o->setJobTitle($n->getStringValue()),
            'manager' => fn(ParseNode $n) => $o->setManager($n->getStringValue()),
            'middleName' => fn(ParseNode $n) => $o->setMiddleName($n->getStringValue()),
            'mobilePhone' => fn(ParseNode $n) => $o->setMobilePhone($n->getStringValue()),
            'multiValueExtendedProperties' => fn(ParseNode $n) => $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues([MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'nickName' => fn(ParseNode $n) => $o->setNickName($n->getStringValue()),
            'officeLocation' => fn(ParseNode $n) => $o->setOfficeLocation($n->getStringValue()),
            'otherAddress' => fn(ParseNode $n) => $o->setOtherAddress($n->getObjectValue([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'parentFolderId' => fn(ParseNode $n) => $o->setParentFolderId($n->getStringValue()),
            'personalNotes' => fn(ParseNode $n) => $o->setPersonalNotes($n->getStringValue()),
            'photo' => fn(ParseNode $n) => $o->setPhoto($n->getObjectValue([ProfilePhoto::class, 'createFromDiscriminatorValue'])),
            'profession' => fn(ParseNode $n) => $o->setProfession($n->getStringValue()),
            'singleValueExtendedProperties' => fn(ParseNode $n) => $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues([SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'spouseName' => fn(ParseNode $n) => $o->setSpouseName($n->getStringValue()),
            'surname' => fn(ParseNode $n) => $o->setSurname($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'yomiCompanyName' => fn(ParseNode $n) => $o->setYomiCompanyName($n->getStringValue()),
            'yomiGivenName' => fn(ParseNode $n) => $o->setYomiGivenName($n->getStringValue()),
            'yomiSurname' => fn(ParseNode $n) => $o->setYomiSurname($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileAs property value. The name the contact is filed under.
     * @return string|null
    */
    public function getFileAs(): ?string {
        return $this->getBackingStore()->get('fileAs');
    }

    /**
     * Gets the generation property value. The contact's generation.
     * @return string|null
    */
    public function getGeneration(): ?string {
        return $this->getBackingStore()->get('generation');
    }

    /**
     * Gets the givenName property value. The contact's given name.
     * @return string|null
    */
    public function getGivenName(): ?string {
        return $this->getBackingStore()->get('givenName');
    }

    /**
     * Gets the homeAddress property value. The contact's home address.
     * @return PhysicalAddress|null
    */
    public function getHomeAddress(): ?PhysicalAddress {
        return $this->getBackingStore()->get('homeAddress');
    }

    /**
     * Gets the homePhones property value. The contact's home phone numbers.
     * @return array<string>|null
    */
    public function getHomePhones(): ?array {
        return $this->getBackingStore()->get('homePhones');
    }

    /**
     * Gets the imAddresses property value. The imAddresses property
     * @return array<string>|null
    */
    public function getImAddresses(): ?array {
        return $this->getBackingStore()->get('imAddresses');
    }

    /**
     * Gets the initials property value. The initials property
     * @return string|null
    */
    public function getInitials(): ?string {
        return $this->getBackingStore()->get('initials');
    }

    /**
     * Gets the jobTitle property value. The jobTitle property
     * @return string|null
    */
    public function getJobTitle(): ?string {
        return $this->getBackingStore()->get('jobTitle');
    }

    /**
     * Gets the manager property value. The manager property
     * @return string|null
    */
    public function getManager(): ?string {
        return $this->getBackingStore()->get('manager');
    }

    /**
     * Gets the middleName property value. The middleName property
     * @return string|null
    */
    public function getMiddleName(): ?string {
        return $this->getBackingStore()->get('middleName');
    }

    /**
     * Gets the mobilePhone property value. The mobilePhone property
     * @return string|null
    */
    public function getMobilePhone(): ?string {
        return $this->getBackingStore()->get('mobilePhone');
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->getBackingStore()->get('multiValueExtendedProperties');
    }

    /**
     * Gets the nickName property value. The nickName property
     * @return string|null
    */
    public function getNickName(): ?string {
        return $this->getBackingStore()->get('nickName');
    }

    /**
     * Gets the officeLocation property value. The officeLocation property
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        return $this->getBackingStore()->get('officeLocation');
    }

    /**
     * Gets the otherAddress property value. The otherAddress property
     * @return PhysicalAddress|null
    */
    public function getOtherAddress(): ?PhysicalAddress {
        return $this->getBackingStore()->get('otherAddress');
    }

    /**
     * Gets the parentFolderId property value. The parentFolderId property
     * @return string|null
    */
    public function getParentFolderId(): ?string {
        return $this->getBackingStore()->get('parentFolderId');
    }

    /**
     * Gets the personalNotes property value. The personalNotes property
     * @return string|null
    */
    public function getPersonalNotes(): ?string {
        return $this->getBackingStore()->get('personalNotes');
    }

    /**
     * Gets the photo property value. Optional contact picture. You can get or set a photo for a contact.
     * @return ProfilePhoto|null
    */
    public function getPhoto(): ?ProfilePhoto {
        return $this->getBackingStore()->get('photo');
    }

    /**
     * Gets the profession property value. The profession property
     * @return string|null
    */
    public function getProfession(): ?string {
        return $this->getBackingStore()->get('profession');
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the contact. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->getBackingStore()->get('singleValueExtendedProperties');
    }

    /**
     * Gets the spouseName property value. The spouseName property
     * @return string|null
    */
    public function getSpouseName(): ?string {
        return $this->getBackingStore()->get('spouseName');
    }

    /**
     * Gets the surname property value. The surname property
     * @return string|null
    */
    public function getSurname(): ?string {
        return $this->getBackingStore()->get('surname');
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->getBackingStore()->get('title');
    }

    /**
     * Gets the yomiCompanyName property value. The yomiCompanyName property
     * @return string|null
    */
    public function getYomiCompanyName(): ?string {
        return $this->getBackingStore()->get('yomiCompanyName');
    }

    /**
     * Gets the yomiGivenName property value. The yomiGivenName property
     * @return string|null
    */
    public function getYomiGivenName(): ?string {
        return $this->getBackingStore()->get('yomiGivenName');
    }

    /**
     * Gets the yomiSurname property value. The yomiSurname property
     * @return string|null
    */
    public function getYomiSurname(): ?string {
        return $this->getBackingStore()->get('yomiSurname');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assistantName', $this->getAssistantName());
        $writer->writeDateTimeValue('birthday', $this->getBirthday());
        $writer->writeObjectValue('businessAddress', $this->getBusinessAddress());
        $writer->writeStringValue('businessHomePage', $this->getBusinessHomePage());
        $writer->writeCollectionOfPrimitiveValues('businessPhones', $this->getBusinessPhones());
        $writer->writeCollectionOfPrimitiveValues('children', $this->getChildren());
        $writer->writeStringValue('companyName', $this->getCompanyName());
        $writer->writeStringValue('department', $this->getDepartment());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('emailAddresses', $this->getEmailAddresses());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeStringValue('fileAs', $this->getFileAs());
        $writer->writeStringValue('generation', $this->getGeneration());
        $writer->writeStringValue('givenName', $this->getGivenName());
        $writer->writeObjectValue('homeAddress', $this->getHomeAddress());
        $writer->writeCollectionOfPrimitiveValues('homePhones', $this->getHomePhones());
        $writer->writeCollectionOfPrimitiveValues('imAddresses', $this->getImAddresses());
        $writer->writeStringValue('initials', $this->getInitials());
        $writer->writeStringValue('jobTitle', $this->getJobTitle());
        $writer->writeStringValue('manager', $this->getManager());
        $writer->writeStringValue('middleName', $this->getMiddleName());
        $writer->writeStringValue('mobilePhone', $this->getMobilePhone());
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->getMultiValueExtendedProperties());
        $writer->writeStringValue('nickName', $this->getNickName());
        $writer->writeStringValue('officeLocation', $this->getOfficeLocation());
        $writer->writeObjectValue('otherAddress', $this->getOtherAddress());
        $writer->writeStringValue('parentFolderId', $this->getParentFolderId());
        $writer->writeStringValue('personalNotes', $this->getPersonalNotes());
        $writer->writeObjectValue('photo', $this->getPhoto());
        $writer->writeStringValue('profession', $this->getProfession());
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->getSingleValueExtendedProperties());
        $writer->writeStringValue('spouseName', $this->getSpouseName());
        $writer->writeStringValue('surname', $this->getSurname());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('yomiCompanyName', $this->getYomiCompanyName());
        $writer->writeStringValue('yomiGivenName', $this->getYomiGivenName());
        $writer->writeStringValue('yomiSurname', $this->getYomiSurname());
    }

    /**
     * Sets the assistantName property value. The name of the contact's assistant.
     * @param string|null $value Value to set for the assistantName property.
    */
    public function setAssistantName(?string $value): void {
        $this->getBackingStore()->set('assistantName', $value);
    }

    /**
     * Sets the birthday property value. The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the birthday property.
    */
    public function setBirthday(?DateTime $value): void {
        $this->getBackingStore()->set('birthday', $value);
    }

    /**
     * Sets the businessAddress property value. The contact's business address.
     * @param PhysicalAddress|null $value Value to set for the businessAddress property.
    */
    public function setBusinessAddress(?PhysicalAddress $value): void {
        $this->getBackingStore()->set('businessAddress', $value);
    }

    /**
     * Sets the businessHomePage property value. The business home page of the contact.
     * @param string|null $value Value to set for the businessHomePage property.
    */
    public function setBusinessHomePage(?string $value): void {
        $this->getBackingStore()->set('businessHomePage', $value);
    }

    /**
     * Sets the businessPhones property value. The contact's business phone numbers.
     * @param array<string>|null $value Value to set for the businessPhones property.
    */
    public function setBusinessPhones(?array $value): void {
        $this->getBackingStore()->set('businessPhones', $value);
    }

    /**
     * Sets the children property value. The names of the contact's children.
     * @param array<string>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value): void {
        $this->getBackingStore()->set('children', $value);
    }

    /**
     * Sets the companyName property value. The name of the contact's company.
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->getBackingStore()->set('companyName', $value);
    }

    /**
     * Sets the department property value. The contact's department.
     * @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value): void {
        $this->getBackingStore()->set('department', $value);
    }

    /**
     * Sets the displayName property value. The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the emailAddresses property value. The contact's email addresses.
     * @param array<EmailAddress>|null $value Value to set for the emailAddresses property.
    */
    public function setEmailAddresses(?array $value): void {
        $this->getBackingStore()->set('emailAddresses', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the contact. Read-only. Nullable.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the fileAs property value. The name the contact is filed under.
     * @param string|null $value Value to set for the fileAs property.
    */
    public function setFileAs(?string $value): void {
        $this->getBackingStore()->set('fileAs', $value);
    }

    /**
     * Sets the generation property value. The contact's generation.
     * @param string|null $value Value to set for the generation property.
    */
    public function setGeneration(?string $value): void {
        $this->getBackingStore()->set('generation', $value);
    }

    /**
     * Sets the givenName property value. The contact's given name.
     * @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value): void {
        $this->getBackingStore()->set('givenName', $value);
    }

    /**
     * Sets the homeAddress property value. The contact's home address.
     * @param PhysicalAddress|null $value Value to set for the homeAddress property.
    */
    public function setHomeAddress(?PhysicalAddress $value): void {
        $this->getBackingStore()->set('homeAddress', $value);
    }

    /**
     * Sets the homePhones property value. The contact's home phone numbers.
     * @param array<string>|null $value Value to set for the homePhones property.
    */
    public function setHomePhones(?array $value): void {
        $this->getBackingStore()->set('homePhones', $value);
    }

    /**
     * Sets the imAddresses property value. The imAddresses property
     * @param array<string>|null $value Value to set for the imAddresses property.
    */
    public function setImAddresses(?array $value): void {
        $this->getBackingStore()->set('imAddresses', $value);
    }

    /**
     * Sets the initials property value. The initials property
     * @param string|null $value Value to set for the initials property.
    */
    public function setInitials(?string $value): void {
        $this->getBackingStore()->set('initials', $value);
    }

    /**
     * Sets the jobTitle property value. The jobTitle property
     * @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value): void {
        $this->getBackingStore()->set('jobTitle', $value);
    }

    /**
     * Sets the manager property value. The manager property
     * @param string|null $value Value to set for the manager property.
    */
    public function setManager(?string $value): void {
        $this->getBackingStore()->set('manager', $value);
    }

    /**
     * Sets the middleName property value. The middleName property
     * @param string|null $value Value to set for the middleName property.
    */
    public function setMiddleName(?string $value): void {
        $this->getBackingStore()->set('middleName', $value);
    }

    /**
     * Sets the mobilePhone property value. The mobilePhone property
     * @param string|null $value Value to set for the mobilePhone property.
    */
    public function setMobilePhone(?string $value): void {
        $this->getBackingStore()->set('mobilePhone', $value);
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
     * @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('multiValueExtendedProperties', $value);
    }

    /**
     * Sets the nickName property value. The nickName property
     * @param string|null $value Value to set for the nickName property.
    */
    public function setNickName(?string $value): void {
        $this->getBackingStore()->set('nickName', $value);
    }

    /**
     * Sets the officeLocation property value. The officeLocation property
     * @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value): void {
        $this->getBackingStore()->set('officeLocation', $value);
    }

    /**
     * Sets the otherAddress property value. The otherAddress property
     * @param PhysicalAddress|null $value Value to set for the otherAddress property.
    */
    public function setOtherAddress(?PhysicalAddress $value): void {
        $this->getBackingStore()->set('otherAddress', $value);
    }

    /**
     * Sets the parentFolderId property value. The parentFolderId property
     * @param string|null $value Value to set for the parentFolderId property.
    */
    public function setParentFolderId(?string $value): void {
        $this->getBackingStore()->set('parentFolderId', $value);
    }

    /**
     * Sets the personalNotes property value. The personalNotes property
     * @param string|null $value Value to set for the personalNotes property.
    */
    public function setPersonalNotes(?string $value): void {
        $this->getBackingStore()->set('personalNotes', $value);
    }

    /**
     * Sets the photo property value. Optional contact picture. You can get or set a photo for a contact.
     * @param ProfilePhoto|null $value Value to set for the photo property.
    */
    public function setPhoto(?ProfilePhoto $value): void {
        $this->getBackingStore()->set('photo', $value);
    }

    /**
     * Sets the profession property value. The profession property
     * @param string|null $value Value to set for the profession property.
    */
    public function setProfession(?string $value): void {
        $this->getBackingStore()->set('profession', $value);
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the contact. Read-only. Nullable.
     * @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('singleValueExtendedProperties', $value);
    }

    /**
     * Sets the spouseName property value. The spouseName property
     * @param string|null $value Value to set for the spouseName property.
    */
    public function setSpouseName(?string $value): void {
        $this->getBackingStore()->set('spouseName', $value);
    }

    /**
     * Sets the surname property value. The surname property
     * @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value): void {
        $this->getBackingStore()->set('surname', $value);
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

    /**
     * Sets the yomiCompanyName property value. The yomiCompanyName property
     * @param string|null $value Value to set for the yomiCompanyName property.
    */
    public function setYomiCompanyName(?string $value): void {
        $this->getBackingStore()->set('yomiCompanyName', $value);
    }

    /**
     * Sets the yomiGivenName property value. The yomiGivenName property
     * @param string|null $value Value to set for the yomiGivenName property.
    */
    public function setYomiGivenName(?string $value): void {
        $this->getBackingStore()->set('yomiGivenName', $value);
    }

    /**
     * Sets the yomiSurname property value. The yomiSurname property
     * @param string|null $value Value to set for the yomiSurname property.
    */
    public function setYomiSurname(?string $value): void {
        $this->getBackingStore()->set('yomiSurname', $value);
    }

}
