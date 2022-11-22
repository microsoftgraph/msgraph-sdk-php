<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationUser extends Entity implements Parsable 
{
    /**
     * Instantiates a new educationUser and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationUser
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationUser {
        return new EducationUser();
    }

    /**
     * Gets the accountEnabled property value. True if the account is enabled; otherwise, false. This property is required when a user is created. Supports $filter.
     * @return bool|null
    */
    public function getAccountEnabled(): ?bool {
        return $this->getBackingStore()->get('accountEnabled');
    }

    /**
     * Gets the assignedLicenses property value. The licenses that are assigned to the user. Not nullable.
     * @return array<AssignedLicense>|null
    */
    public function getAssignedLicenses(): ?array {
        return $this->getBackingStore()->get('assignedLicenses');
    }

    /**
     * Gets the assignedPlans property value. The plans that are assigned to the user. Read-only. Not nullable.
     * @return array<AssignedPlan>|null
    */
    public function getAssignedPlans(): ?array {
        return $this->getBackingStore()->get('assignedPlans');
    }

    /**
     * Gets the assignments property value. Assignments belonging to the user.
     * @return array<EducationAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the businessPhones property value. The telephone numbers for the user. Note: Although this is a string collection, only one number can be set for this property.
     * @return array<string>|null
    */
    public function getBusinessPhones(): ?array {
        return $this->getBackingStore()->get('businessPhones');
    }

    /**
     * Gets the classes property value. Classes to which the user belongs. Nullable.
     * @return array<EducationClass>|null
    */
    public function getClasses(): ?array {
        return $this->getBackingStore()->get('classes');
    }

    /**
     * Gets the createdBy property value. The entity who created the user.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the department property value. The name for the department in which the user works. Supports $filter.
     * @return string|null
    */
    public function getDepartment(): ?string {
        return $this->getBackingStore()->get('department');
    }

    /**
     * Gets the displayName property value. The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates. Supports $filter and $orderby.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the externalSource property value. Where this user was created from. Possible values are: sis, manual.
     * @return EducationExternalSource|null
    */
    public function getExternalSource(): ?EducationExternalSource {
        return $this->getBackingStore()->get('externalSource');
    }

    /**
     * Gets the externalSourceDetail property value. The name of the external source this resource was generated from.
     * @return string|null
    */
    public function getExternalSourceDetail(): ?string {
        return $this->getBackingStore()->get('externalSourceDetail');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountEnabled' => fn(ParseNode $n) => $o->setAccountEnabled($n->getBooleanValue()),
            'assignedLicenses' => fn(ParseNode $n) => $o->setAssignedLicenses($n->getCollectionOfObjectValues([AssignedLicense::class, 'createFromDiscriminatorValue'])),
            'assignedPlans' => fn(ParseNode $n) => $o->setAssignedPlans($n->getCollectionOfObjectValues([AssignedPlan::class, 'createFromDiscriminatorValue'])),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([EducationAssignment::class, 'createFromDiscriminatorValue'])),
            'businessPhones' => fn(ParseNode $n) => $o->setBusinessPhones($n->getCollectionOfPrimitiveValues()),
            'classes' => fn(ParseNode $n) => $o->setClasses($n->getCollectionOfObjectValues([EducationClass::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'department' => fn(ParseNode $n) => $o->setDepartment($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalSource' => fn(ParseNode $n) => $o->setExternalSource($n->getEnumValue(EducationExternalSource::class)),
            'externalSourceDetail' => fn(ParseNode $n) => $o->setExternalSourceDetail($n->getStringValue()),
            'givenName' => fn(ParseNode $n) => $o->setGivenName($n->getStringValue()),
            'mail' => fn(ParseNode $n) => $o->setMail($n->getStringValue()),
            'mailingAddress' => fn(ParseNode $n) => $o->setMailingAddress($n->getObjectValue([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'mailNickname' => fn(ParseNode $n) => $o->setMailNickname($n->getStringValue()),
            'middleName' => fn(ParseNode $n) => $o->setMiddleName($n->getStringValue()),
            'mobilePhone' => fn(ParseNode $n) => $o->setMobilePhone($n->getStringValue()),
            'officeLocation' => fn(ParseNode $n) => $o->setOfficeLocation($n->getStringValue()),
            'onPremisesInfo' => fn(ParseNode $n) => $o->setOnPremisesInfo($n->getObjectValue([EducationOnPremisesInfo::class, 'createFromDiscriminatorValue'])),
            'passwordPolicies' => fn(ParseNode $n) => $o->setPasswordPolicies($n->getStringValue()),
            'passwordProfile' => fn(ParseNode $n) => $o->setPasswordProfile($n->getObjectValue([PasswordProfile::class, 'createFromDiscriminatorValue'])),
            'preferredLanguage' => fn(ParseNode $n) => $o->setPreferredLanguage($n->getStringValue()),
            'primaryRole' => fn(ParseNode $n) => $o->setPrimaryRole($n->getEnumValue(EducationUserRole::class)),
            'provisionedPlans' => fn(ParseNode $n) => $o->setProvisionedPlans($n->getCollectionOfObjectValues([ProvisionedPlan::class, 'createFromDiscriminatorValue'])),
            'refreshTokensValidFromDateTime' => fn(ParseNode $n) => $o->setRefreshTokensValidFromDateTime($n->getDateTimeValue()),
            'relatedContacts' => fn(ParseNode $n) => $o->setRelatedContacts($n->getCollectionOfObjectValues([RelatedContact::class, 'createFromDiscriminatorValue'])),
            'residenceAddress' => fn(ParseNode $n) => $o->setResidenceAddress($n->getObjectValue([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'rubrics' => fn(ParseNode $n) => $o->setRubrics($n->getCollectionOfObjectValues([EducationRubric::class, 'createFromDiscriminatorValue'])),
            'schools' => fn(ParseNode $n) => $o->setSchools($n->getCollectionOfObjectValues([EducationSchool::class, 'createFromDiscriminatorValue'])),
            'showInAddressList' => fn(ParseNode $n) => $o->setShowInAddressList($n->getBooleanValue()),
            'student' => fn(ParseNode $n) => $o->setStudent($n->getObjectValue([EducationStudent::class, 'createFromDiscriminatorValue'])),
            'surname' => fn(ParseNode $n) => $o->setSurname($n->getStringValue()),
            'taughtClasses' => fn(ParseNode $n) => $o->setTaughtClasses($n->getCollectionOfObjectValues([EducationClass::class, 'createFromDiscriminatorValue'])),
            'teacher' => fn(ParseNode $n) => $o->setTeacher($n->getObjectValue([EducationTeacher::class, 'createFromDiscriminatorValue'])),
            'usageLocation' => fn(ParseNode $n) => $o->setUsageLocation($n->getStringValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([User::class, 'createFromDiscriminatorValue'])),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'userType' => fn(ParseNode $n) => $o->setUserType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the givenName property value. The given name (first name) of the user. Supports $filter.
     * @return string|null
    */
    public function getGivenName(): ?string {
        return $this->getBackingStore()->get('givenName');
    }

    /**
     * Gets the mail property value. The SMTP address for the user, for example, jeff@contoso.onmicrosoft.com. Read-Only. Supports $filter.
     * @return string|null
    */
    public function getMail(): ?string {
        return $this->getBackingStore()->get('mail');
    }

    /**
     * Gets the mailingAddress property value. The mail address of the user.
     * @return PhysicalAddress|null
    */
    public function getMailingAddress(): ?PhysicalAddress {
        return $this->getBackingStore()->get('mailingAddress');
    }

    /**
     * Gets the mailNickname property value. The mail alias for the user. This property must be specified when a user is created. Supports $filter.
     * @return string|null
    */
    public function getMailNickname(): ?string {
        return $this->getBackingStore()->get('mailNickname');
    }

    /**
     * Gets the middleName property value. The middle name of the user.
     * @return string|null
    */
    public function getMiddleName(): ?string {
        return $this->getBackingStore()->get('middleName');
    }

    /**
     * Gets the mobilePhone property value. The primary cellular telephone number for the user.
     * @return string|null
    */
    public function getMobilePhone(): ?string {
        return $this->getBackingStore()->get('mobilePhone');
    }

    /**
     * Gets the officeLocation property value. The officeLocation property
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        return $this->getBackingStore()->get('officeLocation');
    }

    /**
     * Gets the onPremisesInfo property value. Additional information used to associate the Azure Active Directory user with its Active Directory counterpart.
     * @return EducationOnPremisesInfo|null
    */
    public function getOnPremisesInfo(): ?EducationOnPremisesInfo {
        return $this->getBackingStore()->get('onPremisesInfo');
    }

    /**
     * Gets the passwordPolicies property value. Specifies password policies for the user. This value is an enumeration with one possible value being DisableStrongPassword, which allows weaker passwords than the default policy to be specified. DisablePasswordExpiration can also be specified. The two can be specified together; for example: DisablePasswordExpiration, DisableStrongPassword.
     * @return string|null
    */
    public function getPasswordPolicies(): ?string {
        return $this->getBackingStore()->get('passwordPolicies');
    }

    /**
     * Gets the passwordProfile property value. Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required.
     * @return PasswordProfile|null
    */
    public function getPasswordProfile(): ?PasswordProfile {
        return $this->getBackingStore()->get('passwordProfile');
    }

    /**
     * Gets the preferredLanguage property value. The preferred language for the user that should follow the ISO 639-1 code, for example, en-US.
     * @return string|null
    */
    public function getPreferredLanguage(): ?string {
        return $this->getBackingStore()->get('preferredLanguage');
    }

    /**
     * Gets the primaryRole property value. The primaryRole property
     * @return EducationUserRole|null
    */
    public function getPrimaryRole(): ?EducationUserRole {
        return $this->getBackingStore()->get('primaryRole');
    }

    /**
     * Gets the provisionedPlans property value. The plans that are provisioned for the user. Read-only. Not nullable.
     * @return array<ProvisionedPlan>|null
    */
    public function getProvisionedPlans(): ?array {
        return $this->getBackingStore()->get('provisionedPlans');
    }

    /**
     * Gets the refreshTokensValidFromDateTime property value. The refreshTokensValidFromDateTime property
     * @return DateTime|null
    */
    public function getRefreshTokensValidFromDateTime(): ?DateTime {
        return $this->getBackingStore()->get('refreshTokensValidFromDateTime');
    }

    /**
     * Gets the relatedContacts property value. Related records associated with the user. Read-only.
     * @return array<RelatedContact>|null
    */
    public function getRelatedContacts(): ?array {
        return $this->getBackingStore()->get('relatedContacts');
    }

    /**
     * Gets the residenceAddress property value. The address where the user lives.
     * @return PhysicalAddress|null
    */
    public function getResidenceAddress(): ?PhysicalAddress {
        return $this->getBackingStore()->get('residenceAddress');
    }

    /**
     * Gets the rubrics property value. When set, the grading rubric attached to the assignment.
     * @return array<EducationRubric>|null
    */
    public function getRubrics(): ?array {
        return $this->getBackingStore()->get('rubrics');
    }

    /**
     * Gets the schools property value. Schools to which the user belongs. Nullable.
     * @return array<EducationSchool>|null
    */
    public function getSchools(): ?array {
        return $this->getBackingStore()->get('schools');
    }

    /**
     * Gets the showInAddressList property value. True if the Outlook Global Address List should contain this user; otherwise, false. If not set, this will be treated as true. For users invited through the invitation manager, this property will be set to false.
     * @return bool|null
    */
    public function getShowInAddressList(): ?bool {
        return $this->getBackingStore()->get('showInAddressList');
    }

    /**
     * Gets the student property value. If the primary role is student, this block will contain student specific data.
     * @return EducationStudent|null
    */
    public function getStudent(): ?EducationStudent {
        return $this->getBackingStore()->get('student');
    }

    /**
     * Gets the surname property value. The user's surname (family name or last name). Supports $filter.
     * @return string|null
    */
    public function getSurname(): ?string {
        return $this->getBackingStore()->get('surname');
    }

    /**
     * Gets the taughtClasses property value. Classes for which the user is a teacher.
     * @return array<EducationClass>|null
    */
    public function getTaughtClasses(): ?array {
        return $this->getBackingStore()->get('taughtClasses');
    }

    /**
     * Gets the teacher property value. If the primary role is teacher, this block will contain teacher specific data.
     * @return EducationTeacher|null
    */
    public function getTeacher(): ?EducationTeacher {
        return $this->getBackingStore()->get('teacher');
    }

    /**
     * Gets the usageLocation property value. A two-letter country code (ISO standard 3166). Required for users who will be assigned licenses due to a legal requirement to check for availability of services in countries or regions. Examples include: US, JP, and GB. Not nullable. Supports $filter.
     * @return string|null
    */
    public function getUsageLocation(): ?string {
        return $this->getBackingStore()->get('usageLocation');
    }

    /**
     * Gets the user property value. The directory user that corresponds to this user.
     * @return User|null
    */
    public function getUser(): ?User {
        return $this->getBackingStore()->get('user');
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (UPN) of the user. The UPN is an internet-style login name for the user based on the internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant's collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of the organization. Supports $filter and $orderby.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Gets the userType property value. A string value that can be used to classify user types in your directory, such as Member and Guest. Supports $filter.
     * @return string|null
    */
    public function getUserType(): ?string {
        return $this->getBackingStore()->get('userType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountEnabled', $this->getAccountEnabled());
        $writer->writeCollectionOfObjectValues('assignedLicenses', $this->getAssignedLicenses());
        $writer->writeCollectionOfObjectValues('assignedPlans', $this->getAssignedPlans());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeCollectionOfPrimitiveValues('businessPhones', $this->getBusinessPhones());
        $writer->writeCollectionOfObjectValues('classes', $this->getClasses());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeStringValue('department', $this->getDepartment());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('externalSource', $this->getExternalSource());
        $writer->writeStringValue('externalSourceDetail', $this->getExternalSourceDetail());
        $writer->writeStringValue('givenName', $this->getGivenName());
        $writer->writeStringValue('mail', $this->getMail());
        $writer->writeObjectValue('mailingAddress', $this->getMailingAddress());
        $writer->writeStringValue('mailNickname', $this->getMailNickname());
        $writer->writeStringValue('middleName', $this->getMiddleName());
        $writer->writeStringValue('mobilePhone', $this->getMobilePhone());
        $writer->writeStringValue('officeLocation', $this->getOfficeLocation());
        $writer->writeObjectValue('onPremisesInfo', $this->getOnPremisesInfo());
        $writer->writeStringValue('passwordPolicies', $this->getPasswordPolicies());
        $writer->writeObjectValue('passwordProfile', $this->getPasswordProfile());
        $writer->writeStringValue('preferredLanguage', $this->getPreferredLanguage());
        $writer->writeEnumValue('primaryRole', $this->getPrimaryRole());
        $writer->writeCollectionOfObjectValues('provisionedPlans', $this->getProvisionedPlans());
        $writer->writeDateTimeValue('refreshTokensValidFromDateTime', $this->getRefreshTokensValidFromDateTime());
        $writer->writeCollectionOfObjectValues('relatedContacts', $this->getRelatedContacts());
        $writer->writeObjectValue('residenceAddress', $this->getResidenceAddress());
        $writer->writeCollectionOfObjectValues('rubrics', $this->getRubrics());
        $writer->writeCollectionOfObjectValues('schools', $this->getSchools());
        $writer->writeBooleanValue('showInAddressList', $this->getShowInAddressList());
        $writer->writeObjectValue('student', $this->getStudent());
        $writer->writeStringValue('surname', $this->getSurname());
        $writer->writeCollectionOfObjectValues('taughtClasses', $this->getTaughtClasses());
        $writer->writeObjectValue('teacher', $this->getTeacher());
        $writer->writeStringValue('usageLocation', $this->getUsageLocation());
        $writer->writeObjectValue('user', $this->getUser());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeStringValue('userType', $this->getUserType());
    }

    /**
     * Sets the accountEnabled property value. True if the account is enabled; otherwise, false. This property is required when a user is created. Supports $filter.
     *  @param bool|null $value Value to set for the accountEnabled property.
    */
    public function setAccountEnabled(?bool $value): void {
        $this->getBackingStore()->set('accountEnabled', $value);
    }

    /**
     * Sets the assignedLicenses property value. The licenses that are assigned to the user. Not nullable.
     *  @param array<AssignedLicense>|null $value Value to set for the assignedLicenses property.
    */
    public function setAssignedLicenses(?array $value): void {
        $this->getBackingStore()->set('assignedLicenses', $value);
    }

    /**
     * Sets the assignedPlans property value. The plans that are assigned to the user. Read-only. Not nullable.
     *  @param array<AssignedPlan>|null $value Value to set for the assignedPlans property.
    */
    public function setAssignedPlans(?array $value): void {
        $this->getBackingStore()->set('assignedPlans', $value);
    }

    /**
     * Sets the assignments property value. Assignments belonging to the user.
     *  @param array<EducationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the businessPhones property value. The telephone numbers for the user. Note: Although this is a string collection, only one number can be set for this property.
     *  @param array<string>|null $value Value to set for the businessPhones property.
    */
    public function setBusinessPhones(?array $value): void {
        $this->getBackingStore()->set('businessPhones', $value);
    }

    /**
     * Sets the classes property value. Classes to which the user belongs. Nullable.
     *  @param array<EducationClass>|null $value Value to set for the classes property.
    */
    public function setClasses(?array $value): void {
        $this->getBackingStore()->set('classes', $value);
    }

    /**
     * Sets the createdBy property value. The entity who created the user.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the department property value. The name for the department in which the user works. Supports $filter.
     *  @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value): void {
        $this->getBackingStore()->set('department', $value);
    }

    /**
     * Sets the displayName property value. The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates. Supports $filter and $orderby.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalSource property value. Where this user was created from. Possible values are: sis, manual.
     *  @param EducationExternalSource|null $value Value to set for the externalSource property.
    */
    public function setExternalSource(?EducationExternalSource $value): void {
        $this->getBackingStore()->set('externalSource', $value);
    }

    /**
     * Sets the externalSourceDetail property value. The name of the external source this resource was generated from.
     *  @param string|null $value Value to set for the externalSourceDetail property.
    */
    public function setExternalSourceDetail(?string $value): void {
        $this->getBackingStore()->set('externalSourceDetail', $value);
    }

    /**
     * Sets the givenName property value. The given name (first name) of the user. Supports $filter.
     *  @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value): void {
        $this->getBackingStore()->set('givenName', $value);
    }

    /**
     * Sets the mail property value. The SMTP address for the user, for example, jeff@contoso.onmicrosoft.com. Read-Only. Supports $filter.
     *  @param string|null $value Value to set for the mail property.
    */
    public function setMail(?string $value): void {
        $this->getBackingStore()->set('mail', $value);
    }

    /**
     * Sets the mailingAddress property value. The mail address of the user.
     *  @param PhysicalAddress|null $value Value to set for the mailingAddress property.
    */
    public function setMailingAddress(?PhysicalAddress $value): void {
        $this->getBackingStore()->set('mailingAddress', $value);
    }

    /**
     * Sets the mailNickname property value. The mail alias for the user. This property must be specified when a user is created. Supports $filter.
     *  @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value): void {
        $this->getBackingStore()->set('mailNickname', $value);
    }

    /**
     * Sets the middleName property value. The middle name of the user.
     *  @param string|null $value Value to set for the middleName property.
    */
    public function setMiddleName(?string $value): void {
        $this->getBackingStore()->set('middleName', $value);
    }

    /**
     * Sets the mobilePhone property value. The primary cellular telephone number for the user.
     *  @param string|null $value Value to set for the mobilePhone property.
    */
    public function setMobilePhone(?string $value): void {
        $this->getBackingStore()->set('mobilePhone', $value);
    }

    /**
     * Sets the officeLocation property value. The officeLocation property
     *  @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value): void {
        $this->getBackingStore()->set('officeLocation', $value);
    }

    /**
     * Sets the onPremisesInfo property value. Additional information used to associate the Azure Active Directory user with its Active Directory counterpart.
     *  @param EducationOnPremisesInfo|null $value Value to set for the onPremisesInfo property.
    */
    public function setOnPremisesInfo(?EducationOnPremisesInfo $value): void {
        $this->getBackingStore()->set('onPremisesInfo', $value);
    }

    /**
     * Sets the passwordPolicies property value. Specifies password policies for the user. This value is an enumeration with one possible value being DisableStrongPassword, which allows weaker passwords than the default policy to be specified. DisablePasswordExpiration can also be specified. The two can be specified together; for example: DisablePasswordExpiration, DisableStrongPassword.
     *  @param string|null $value Value to set for the passwordPolicies property.
    */
    public function setPasswordPolicies(?string $value): void {
        $this->getBackingStore()->set('passwordPolicies', $value);
    }

    /**
     * Sets the passwordProfile property value. Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required.
     *  @param PasswordProfile|null $value Value to set for the passwordProfile property.
    */
    public function setPasswordProfile(?PasswordProfile $value): void {
        $this->getBackingStore()->set('passwordProfile', $value);
    }

    /**
     * Sets the preferredLanguage property value. The preferred language for the user that should follow the ISO 639-1 code, for example, en-US.
     *  @param string|null $value Value to set for the preferredLanguage property.
    */
    public function setPreferredLanguage(?string $value): void {
        $this->getBackingStore()->set('preferredLanguage', $value);
    }

    /**
     * Sets the primaryRole property value. The primaryRole property
     *  @param EducationUserRole|null $value Value to set for the primaryRole property.
    */
    public function setPrimaryRole(?EducationUserRole $value): void {
        $this->getBackingStore()->set('primaryRole', $value);
    }

    /**
     * Sets the provisionedPlans property value. The plans that are provisioned for the user. Read-only. Not nullable.
     *  @param array<ProvisionedPlan>|null $value Value to set for the provisionedPlans property.
    */
    public function setProvisionedPlans(?array $value): void {
        $this->getBackingStore()->set('provisionedPlans', $value);
    }

    /**
     * Sets the refreshTokensValidFromDateTime property value. The refreshTokensValidFromDateTime property
     *  @param DateTime|null $value Value to set for the refreshTokensValidFromDateTime property.
    */
    public function setRefreshTokensValidFromDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('refreshTokensValidFromDateTime', $value);
    }

    /**
     * Sets the relatedContacts property value. Related records associated with the user. Read-only.
     *  @param array<RelatedContact>|null $value Value to set for the relatedContacts property.
    */
    public function setRelatedContacts(?array $value): void {
        $this->getBackingStore()->set('relatedContacts', $value);
    }

    /**
     * Sets the residenceAddress property value. The address where the user lives.
     *  @param PhysicalAddress|null $value Value to set for the residenceAddress property.
    */
    public function setResidenceAddress(?PhysicalAddress $value): void {
        $this->getBackingStore()->set('residenceAddress', $value);
    }

    /**
     * Sets the rubrics property value. When set, the grading rubric attached to the assignment.
     *  @param array<EducationRubric>|null $value Value to set for the rubrics property.
    */
    public function setRubrics(?array $value): void {
        $this->getBackingStore()->set('rubrics', $value);
    }

    /**
     * Sets the schools property value. Schools to which the user belongs. Nullable.
     *  @param array<EducationSchool>|null $value Value to set for the schools property.
    */
    public function setSchools(?array $value): void {
        $this->getBackingStore()->set('schools', $value);
    }

    /**
     * Sets the showInAddressList property value. True if the Outlook Global Address List should contain this user; otherwise, false. If not set, this will be treated as true. For users invited through the invitation manager, this property will be set to false.
     *  @param bool|null $value Value to set for the showInAddressList property.
    */
    public function setShowInAddressList(?bool $value): void {
        $this->getBackingStore()->set('showInAddressList', $value);
    }

    /**
     * Sets the student property value. If the primary role is student, this block will contain student specific data.
     *  @param EducationStudent|null $value Value to set for the student property.
    */
    public function setStudent(?EducationStudent $value): void {
        $this->getBackingStore()->set('student', $value);
    }

    /**
     * Sets the surname property value. The user's surname (family name or last name). Supports $filter.
     *  @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value): void {
        $this->getBackingStore()->set('surname', $value);
    }

    /**
     * Sets the taughtClasses property value. Classes for which the user is a teacher.
     *  @param array<EducationClass>|null $value Value to set for the taughtClasses property.
    */
    public function setTaughtClasses(?array $value): void {
        $this->getBackingStore()->set('taughtClasses', $value);
    }

    /**
     * Sets the teacher property value. If the primary role is teacher, this block will contain teacher specific data.
     *  @param EducationTeacher|null $value Value to set for the teacher property.
    */
    public function setTeacher(?EducationTeacher $value): void {
        $this->getBackingStore()->set('teacher', $value);
    }

    /**
     * Sets the usageLocation property value. A two-letter country code (ISO standard 3166). Required for users who will be assigned licenses due to a legal requirement to check for availability of services in countries or regions. Examples include: US, JP, and GB. Not nullable. Supports $filter.
     *  @param string|null $value Value to set for the usageLocation property.
    */
    public function setUsageLocation(?string $value): void {
        $this->getBackingStore()->set('usageLocation', $value);
    }

    /**
     * Sets the user property value. The directory user that corresponds to this user.
     *  @param User|null $value Value to set for the user property.
    */
    public function setUser(?User $value): void {
        $this->getBackingStore()->set('user', $value);
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) of the user. The UPN is an internet-style login name for the user based on the internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant's collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of the organization. Supports $filter and $orderby.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the userType property value. A string value that can be used to classify user types in your directory, such as Member and Guest. Supports $filter.
     *  @param string|null $value Value to set for the userType property.
    */
    public function setUserType(?string $value): void {
        $this->getBackingStore()->set('userType', $value);
    }

}
