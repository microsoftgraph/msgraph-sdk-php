<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationUser extends Entity implements Parsable 
{
    /**
     * @var bool|null $accountEnabled True if the account is enabled; otherwise, false. This property is required when a user is created. Supports /$filter.
    */
    private ?bool $accountEnabled = null;
    
    /**
     * @var array<AssignedLicense>|null $assignedLicenses The licenses that are assigned to the user. Not nullable.
    */
    private ?array $assignedLicenses = null;
    
    /**
     * @var array<AssignedPlan>|null $assignedPlans The plans that are assigned to the user. Read-only. Not nullable.
    */
    private ?array $assignedPlans = null;
    
    /**
     * @var array<EducationAssignment>|null $assignments List of assignments for the user. Nullable.
    */
    private ?array $assignments = null;
    
    /**
     * @var array<string>|null $businessPhones The telephone numbers for the user. Note: Although this is a string collection, only one number can be set for this property.
    */
    private ?array $businessPhones = null;
    
    /**
     * @var array<EducationClass>|null $classes Classes to which the user belongs. Nullable.
    */
    private ?array $classes = null;
    
    /**
     * @var IdentitySet|null $createdBy Entity who created the user.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var string|null $department The name for the department in which the user works. Supports /$filter.
    */
    private ?string $department = null;
    
    /**
     * @var string|null $displayName The name displayed in the address book for the user. Supports $filter and $orderby.
    */
    private ?string $displayName = null;
    
    /**
     * @var EducationExternalSource|null $externalSource The type of external source this resource was generated from (automatically determined from externalSourceDetail). Possible values are: sis, lms, or manual.
    */
    private ?EducationExternalSource $externalSource = null;
    
    /**
     * @var string|null $externalSourceDetail The name of the external source this resources was generated from.
    */
    private ?string $externalSourceDetail = null;
    
    /**
     * @var string|null $givenName The given name (first name) of the user. Supports /$filter.
    */
    private ?string $givenName = null;
    
    /**
     * @var string|null $mail The SMTP address for the user; for example, 'jeff@contoso.onmicrosoft.com'. Read-Only. Supports /$filter.
    */
    private ?string $mail = null;
    
    /**
     * @var PhysicalAddress|null $mailingAddress Mail address of user. Note: type and postOfficeBox are not supported for educationUser resources.
    */
    private ?PhysicalAddress $mailingAddress = null;
    
    /**
     * @var string|null $mailNickname The mail alias for the user. This property must be specified when a user is created. Supports /$filter.
    */
    private ?string $mailNickname = null;
    
    /**
     * @var string|null $middleName The middle name of user.
    */
    private ?string $middleName = null;
    
    /**
     * @var string|null $mobilePhone The primary cellular telephone number for the user.
    */
    private ?string $mobilePhone = null;
    
    /**
     * @var string|null $officeLocation The officeLocation property
    */
    private ?string $officeLocation = null;
    
    /**
     * @var EducationOnPremisesInfo|null $onPremisesInfo Additional information used to associate the AAD user with it's Active Directory counterpart.
    */
    private ?EducationOnPremisesInfo $onPremisesInfo = null;
    
    /**
     * @var string|null $passwordPolicies Specifies password policies for the user. See standard [user] resource for additional details.
    */
    private ?string $passwordPolicies = null;
    
    /**
     * @var PasswordProfile|null $passwordProfile Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. See standard [user] resource for additional details.
    */
    private ?PasswordProfile $passwordProfile = null;
    
    /**
     * @var string|null $preferredLanguage The preferred language for the user. Should follow ISO 639-1 Code; for example, 'en-US'.
    */
    private ?string $preferredLanguage = null;
    
    /**
     * @var EducationUserRole|null $primaryRole Default role for a user. The user's role might be different in an individual class. Possible values are: student, teacher, faculty. Supports /$filter.
    */
    private ?EducationUserRole $primaryRole = null;
    
    /**
     * @var array<ProvisionedPlan>|null $provisionedPlans The plans that are provisioned for the user. Read-only. Not nullable.
    */
    private ?array $provisionedPlans = null;
    
    /**
     * @var DateTime|null $refreshTokensValidFromDateTime The refreshTokensValidFromDateTime property
    */
    private ?DateTime $refreshTokensValidFromDateTime = null;
    
    /**
     * @var array<RelatedContact>|null $relatedContacts Related records related to the user. Possible relationships are parent, relative, aide, doctor, guardian, child, other, unknownFutureValue
    */
    private ?array $relatedContacts = null;
    
    /**
     * @var PhysicalAddress|null $residenceAddress Address where user lives. Note: type and postOfficeBox are not supported for educationUser resources.
    */
    private ?PhysicalAddress $residenceAddress = null;
    
    /**
     * @var array<EducationRubric>|null $rubrics When set, the grading rubric attached to the assignment.
    */
    private ?array $rubrics = null;
    
    /**
     * @var array<EducationSchool>|null $schools Schools to which the user belongs. Nullable.
    */
    private ?array $schools = null;
    
    /**
     * @var bool|null $showInAddressList True if the Outlook Global Address List should contain this user; otherwise, false. If not set, this will be treated as true. For users invited through the invitation manager, this property will be set to false.
    */
    private ?bool $showInAddressList = null;
    
    /**
     * @var EducationStudent|null $student If the primary role is student, this block will contain student specific data.
    */
    private ?EducationStudent $student = null;
    
    /**
     * @var string|null $surname The user's surname (family name or last name). Supports /$filter.
    */
    private ?string $surname = null;
    
    /**
     * @var array<EducationClass>|null $taughtClasses Classes for which the user is a teacher.
    */
    private ?array $taughtClasses = null;
    
    /**
     * @var EducationTeacher|null $teacher If the primary role is teacher, this block will contain teacher specific data.
    */
    private ?EducationTeacher $teacher = null;
    
    /**
     * @var string|null $usageLocation A two-letter country code ([ISO 3166 Alpha-2]). Required for users who will be assigned licenses. Not nullable. Supports /$filter.
    */
    private ?string $usageLocation = null;
    
    /**
     * @var User|null $user The directory user that corresponds to this user.
    */
    private ?User $user = null;
    
    /**
     * @var string|null $userPrincipalName The user principal name (UPN) for the user. Supports $filter and $orderby. See standard [user] resource for additional details.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * @var string|null $userType A string value that can be used to classify user types in your directory, such as 'Member' and 'Guest'. Supports /$filter.
    */
    private ?string $userType = null;
    
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
     * Gets the accountEnabled property value. True if the account is enabled; otherwise, false. This property is required when a user is created. Supports /$filter.
     * @return bool|null
    */
    public function getAccountEnabled(): ?bool {
        return $this->accountEnabled;
    }

    /**
     * Gets the assignedLicenses property value. The licenses that are assigned to the user. Not nullable.
     * @return array<AssignedLicense>|null
    */
    public function getAssignedLicenses(): ?array {
        return $this->assignedLicenses;
    }

    /**
     * Gets the assignedPlans property value. The plans that are assigned to the user. Read-only. Not nullable.
     * @return array<AssignedPlan>|null
    */
    public function getAssignedPlans(): ?array {
        return $this->assignedPlans;
    }

    /**
     * Gets the assignments property value. List of assignments for the user. Nullable.
     * @return array<EducationAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the businessPhones property value. The telephone numbers for the user. Note: Although this is a string collection, only one number can be set for this property.
     * @return array<string>|null
    */
    public function getBusinessPhones(): ?array {
        return $this->businessPhones;
    }

    /**
     * Gets the classes property value. Classes to which the user belongs. Nullable.
     * @return array<EducationClass>|null
    */
    public function getClasses(): ?array {
        return $this->classes;
    }

    /**
     * Gets the createdBy property value. Entity who created the user.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the department property value. The name for the department in which the user works. Supports /$filter.
     * @return string|null
    */
    public function getDepartment(): ?string {
        return $this->department;
    }

    /**
     * Gets the displayName property value. The name displayed in the address book for the user. Supports $filter and $orderby.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the externalSource property value. The type of external source this resource was generated from (automatically determined from externalSourceDetail). Possible values are: sis, lms, or manual.
     * @return EducationExternalSource|null
    */
    public function getExternalSource(): ?EducationExternalSource {
        return $this->externalSource;
    }

    /**
     * Gets the externalSourceDetail property value. The name of the external source this resources was generated from.
     * @return string|null
    */
    public function getExternalSourceDetail(): ?string {
        return $this->externalSourceDetail;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountEnabled' => function (ParseNode $n) use ($o) { $o->setAccountEnabled($n->getBooleanValue()); },
            'assignedLicenses' => function (ParseNode $n) use ($o) { $o->setAssignedLicenses($n->getCollectionOfObjectValues(array(AssignedLicense::class, 'createFromDiscriminatorValue'))); },
            'assignedPlans' => function (ParseNode $n) use ($o) { $o->setAssignedPlans($n->getCollectionOfObjectValues(array(AssignedPlan::class, 'createFromDiscriminatorValue'))); },
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(EducationAssignment::class, 'createFromDiscriminatorValue'))); },
            'businessPhones' => function (ParseNode $n) use ($o) { $o->setBusinessPhones($n->getCollectionOfPrimitiveValues()); },
            'classes' => function (ParseNode $n) use ($o) { $o->setClasses($n->getCollectionOfObjectValues(array(EducationClass::class, 'createFromDiscriminatorValue'))); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'department' => function (ParseNode $n) use ($o) { $o->setDepartment($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'externalSource' => function (ParseNode $n) use ($o) { $o->setExternalSource($n->getEnumValue(EducationExternalSource::class)); },
            'externalSourceDetail' => function (ParseNode $n) use ($o) { $o->setExternalSourceDetail($n->getStringValue()); },
            'givenName' => function (ParseNode $n) use ($o) { $o->setGivenName($n->getStringValue()); },
            'mail' => function (ParseNode $n) use ($o) { $o->setMail($n->getStringValue()); },
            'mailingAddress' => function (ParseNode $n) use ($o) { $o->setMailingAddress($n->getObjectValue(array(PhysicalAddress::class, 'createFromDiscriminatorValue'))); },
            'mailNickname' => function (ParseNode $n) use ($o) { $o->setMailNickname($n->getStringValue()); },
            'middleName' => function (ParseNode $n) use ($o) { $o->setMiddleName($n->getStringValue()); },
            'mobilePhone' => function (ParseNode $n) use ($o) { $o->setMobilePhone($n->getStringValue()); },
            'officeLocation' => function (ParseNode $n) use ($o) { $o->setOfficeLocation($n->getStringValue()); },
            'onPremisesInfo' => function (ParseNode $n) use ($o) { $o->setOnPremisesInfo($n->getObjectValue(array(EducationOnPremisesInfo::class, 'createFromDiscriminatorValue'))); },
            'passwordPolicies' => function (ParseNode $n) use ($o) { $o->setPasswordPolicies($n->getStringValue()); },
            'passwordProfile' => function (ParseNode $n) use ($o) { $o->setPasswordProfile($n->getObjectValue(array(PasswordProfile::class, 'createFromDiscriminatorValue'))); },
            'preferredLanguage' => function (ParseNode $n) use ($o) { $o->setPreferredLanguage($n->getStringValue()); },
            'primaryRole' => function (ParseNode $n) use ($o) { $o->setPrimaryRole($n->getEnumValue(EducationUserRole::class)); },
            'provisionedPlans' => function (ParseNode $n) use ($o) { $o->setProvisionedPlans($n->getCollectionOfObjectValues(array(ProvisionedPlan::class, 'createFromDiscriminatorValue'))); },
            'refreshTokensValidFromDateTime' => function (ParseNode $n) use ($o) { $o->setRefreshTokensValidFromDateTime($n->getDateTimeValue()); },
            'relatedContacts' => function (ParseNode $n) use ($o) { $o->setRelatedContacts($n->getCollectionOfObjectValues(array(RelatedContact::class, 'createFromDiscriminatorValue'))); },
            'residenceAddress' => function (ParseNode $n) use ($o) { $o->setResidenceAddress($n->getObjectValue(array(PhysicalAddress::class, 'createFromDiscriminatorValue'))); },
            'rubrics' => function (ParseNode $n) use ($o) { $o->setRubrics($n->getCollectionOfObjectValues(array(EducationRubric::class, 'createFromDiscriminatorValue'))); },
            'schools' => function (ParseNode $n) use ($o) { $o->setSchools($n->getCollectionOfObjectValues(array(EducationSchool::class, 'createFromDiscriminatorValue'))); },
            'showInAddressList' => function (ParseNode $n) use ($o) { $o->setShowInAddressList($n->getBooleanValue()); },
            'student' => function (ParseNode $n) use ($o) { $o->setStudent($n->getObjectValue(array(EducationStudent::class, 'createFromDiscriminatorValue'))); },
            'surname' => function (ParseNode $n) use ($o) { $o->setSurname($n->getStringValue()); },
            'taughtClasses' => function (ParseNode $n) use ($o) { $o->setTaughtClasses($n->getCollectionOfObjectValues(array(EducationClass::class, 'createFromDiscriminatorValue'))); },
            'teacher' => function (ParseNode $n) use ($o) { $o->setTeacher($n->getObjectValue(array(EducationTeacher::class, 'createFromDiscriminatorValue'))); },
            'usageLocation' => function (ParseNode $n) use ($o) { $o->setUsageLocation($n->getStringValue()); },
            'user' => function (ParseNode $n) use ($o) { $o->setUser($n->getObjectValue(array(User::class, 'createFromDiscriminatorValue'))); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
            'userType' => function (ParseNode $n) use ($o) { $o->setUserType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the givenName property value. The given name (first name) of the user. Supports /$filter.
     * @return string|null
    */
    public function getGivenName(): ?string {
        return $this->givenName;
    }

    /**
     * Gets the mail property value. The SMTP address for the user; for example, 'jeff@contoso.onmicrosoft.com'. Read-Only. Supports /$filter.
     * @return string|null
    */
    public function getMail(): ?string {
        return $this->mail;
    }

    /**
     * Gets the mailingAddress property value. Mail address of user. Note: type and postOfficeBox are not supported for educationUser resources.
     * @return PhysicalAddress|null
    */
    public function getMailingAddress(): ?PhysicalAddress {
        return $this->mailingAddress;
    }

    /**
     * Gets the mailNickname property value. The mail alias for the user. This property must be specified when a user is created. Supports /$filter.
     * @return string|null
    */
    public function getMailNickname(): ?string {
        return $this->mailNickname;
    }

    /**
     * Gets the middleName property value. The middle name of user.
     * @return string|null
    */
    public function getMiddleName(): ?string {
        return $this->middleName;
    }

    /**
     * Gets the mobilePhone property value. The primary cellular telephone number for the user.
     * @return string|null
    */
    public function getMobilePhone(): ?string {
        return $this->mobilePhone;
    }

    /**
     * Gets the officeLocation property value. The officeLocation property
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        return $this->officeLocation;
    }

    /**
     * Gets the onPremisesInfo property value. Additional information used to associate the AAD user with it's Active Directory counterpart.
     * @return EducationOnPremisesInfo|null
    */
    public function getOnPremisesInfo(): ?EducationOnPremisesInfo {
        return $this->onPremisesInfo;
    }

    /**
     * Gets the passwordPolicies property value. Specifies password policies for the user. See standard [user] resource for additional details.
     * @return string|null
    */
    public function getPasswordPolicies(): ?string {
        return $this->passwordPolicies;
    }

    /**
     * Gets the passwordProfile property value. Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. See standard [user] resource for additional details.
     * @return PasswordProfile|null
    */
    public function getPasswordProfile(): ?PasswordProfile {
        return $this->passwordProfile;
    }

    /**
     * Gets the preferredLanguage property value. The preferred language for the user. Should follow ISO 639-1 Code; for example, 'en-US'.
     * @return string|null
    */
    public function getPreferredLanguage(): ?string {
        return $this->preferredLanguage;
    }

    /**
     * Gets the primaryRole property value. Default role for a user. The user's role might be different in an individual class. Possible values are: student, teacher, faculty. Supports /$filter.
     * @return EducationUserRole|null
    */
    public function getPrimaryRole(): ?EducationUserRole {
        return $this->primaryRole;
    }

    /**
     * Gets the provisionedPlans property value. The plans that are provisioned for the user. Read-only. Not nullable.
     * @return array<ProvisionedPlan>|null
    */
    public function getProvisionedPlans(): ?array {
        return $this->provisionedPlans;
    }

    /**
     * Gets the refreshTokensValidFromDateTime property value. The refreshTokensValidFromDateTime property
     * @return DateTime|null
    */
    public function getRefreshTokensValidFromDateTime(): ?DateTime {
        return $this->refreshTokensValidFromDateTime;
    }

    /**
     * Gets the relatedContacts property value. Related records related to the user. Possible relationships are parent, relative, aide, doctor, guardian, child, other, unknownFutureValue
     * @return array<RelatedContact>|null
    */
    public function getRelatedContacts(): ?array {
        return $this->relatedContacts;
    }

    /**
     * Gets the residenceAddress property value. Address where user lives. Note: type and postOfficeBox are not supported for educationUser resources.
     * @return PhysicalAddress|null
    */
    public function getResidenceAddress(): ?PhysicalAddress {
        return $this->residenceAddress;
    }

    /**
     * Gets the rubrics property value. When set, the grading rubric attached to the assignment.
     * @return array<EducationRubric>|null
    */
    public function getRubrics(): ?array {
        return $this->rubrics;
    }

    /**
     * Gets the schools property value. Schools to which the user belongs. Nullable.
     * @return array<EducationSchool>|null
    */
    public function getSchools(): ?array {
        return $this->schools;
    }

    /**
     * Gets the showInAddressList property value. True if the Outlook Global Address List should contain this user; otherwise, false. If not set, this will be treated as true. For users invited through the invitation manager, this property will be set to false.
     * @return bool|null
    */
    public function getShowInAddressList(): ?bool {
        return $this->showInAddressList;
    }

    /**
     * Gets the student property value. If the primary role is student, this block will contain student specific data.
     * @return EducationStudent|null
    */
    public function getStudent(): ?EducationStudent {
        return $this->student;
    }

    /**
     * Gets the surname property value. The user's surname (family name or last name). Supports /$filter.
     * @return string|null
    */
    public function getSurname(): ?string {
        return $this->surname;
    }

    /**
     * Gets the taughtClasses property value. Classes for which the user is a teacher.
     * @return array<EducationClass>|null
    */
    public function getTaughtClasses(): ?array {
        return $this->taughtClasses;
    }

    /**
     * Gets the teacher property value. If the primary role is teacher, this block will contain teacher specific data.
     * @return EducationTeacher|null
    */
    public function getTeacher(): ?EducationTeacher {
        return $this->teacher;
    }

    /**
     * Gets the usageLocation property value. A two-letter country code ([ISO 3166 Alpha-2]). Required for users who will be assigned licenses. Not nullable. Supports /$filter.
     * @return string|null
    */
    public function getUsageLocation(): ?string {
        return $this->usageLocation;
    }

    /**
     * Gets the user property value. The directory user that corresponds to this user.
     * @return User|null
    */
    public function getUser(): ?User {
        return $this->user;
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (UPN) for the user. Supports $filter and $orderby. See standard [user] resource for additional details.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Gets the userType property value. A string value that can be used to classify user types in your directory, such as 'Member' and 'Guest'. Supports /$filter.
     * @return string|null
    */
    public function getUserType(): ?string {
        return $this->userType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountEnabled', $this->accountEnabled);
        $writer->writeCollectionOfObjectValues('assignedLicenses', $this->assignedLicenses);
        $writer->writeCollectionOfObjectValues('assignedPlans', $this->assignedPlans);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeCollectionOfPrimitiveValues('businessPhones', $this->businessPhones);
        $writer->writeCollectionOfObjectValues('classes', $this->classes);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeStringValue('department', $this->department);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('externalSource', $this->externalSource);
        $writer->writeStringValue('externalSourceDetail', $this->externalSourceDetail);
        $writer->writeStringValue('givenName', $this->givenName);
        $writer->writeStringValue('mail', $this->mail);
        $writer->writeObjectValue('mailingAddress', $this->mailingAddress);
        $writer->writeStringValue('mailNickname', $this->mailNickname);
        $writer->writeStringValue('middleName', $this->middleName);
        $writer->writeStringValue('mobilePhone', $this->mobilePhone);
        $writer->writeStringValue('officeLocation', $this->officeLocation);
        $writer->writeObjectValue('onPremisesInfo', $this->onPremisesInfo);
        $writer->writeStringValue('passwordPolicies', $this->passwordPolicies);
        $writer->writeObjectValue('passwordProfile', $this->passwordProfile);
        $writer->writeStringValue('preferredLanguage', $this->preferredLanguage);
        $writer->writeEnumValue('primaryRole', $this->primaryRole);
        $writer->writeCollectionOfObjectValues('provisionedPlans', $this->provisionedPlans);
        $writer->writeDateTimeValue('refreshTokensValidFromDateTime', $this->refreshTokensValidFromDateTime);
        $writer->writeCollectionOfObjectValues('relatedContacts', $this->relatedContacts);
        $writer->writeObjectValue('residenceAddress', $this->residenceAddress);
        $writer->writeCollectionOfObjectValues('rubrics', $this->rubrics);
        $writer->writeCollectionOfObjectValues('schools', $this->schools);
        $writer->writeBooleanValue('showInAddressList', $this->showInAddressList);
        $writer->writeObjectValue('student', $this->student);
        $writer->writeStringValue('surname', $this->surname);
        $writer->writeCollectionOfObjectValues('taughtClasses', $this->taughtClasses);
        $writer->writeObjectValue('teacher', $this->teacher);
        $writer->writeStringValue('usageLocation', $this->usageLocation);
        $writer->writeObjectValue('user', $this->user);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeStringValue('userType', $this->userType);
    }

    /**
     * Sets the accountEnabled property value. True if the account is enabled; otherwise, false. This property is required when a user is created. Supports /$filter.
     *  @param bool|null $value Value to set for the accountEnabled property.
    */
    public function setAccountEnabled(?bool $value ): void {
        $this->accountEnabled = $value;
    }

    /**
     * Sets the assignedLicenses property value. The licenses that are assigned to the user. Not nullable.
     *  @param array<AssignedLicense>|null $value Value to set for the assignedLicenses property.
    */
    public function setAssignedLicenses(?array $value ): void {
        $this->assignedLicenses = $value;
    }

    /**
     * Sets the assignedPlans property value. The plans that are assigned to the user. Read-only. Not nullable.
     *  @param array<AssignedPlan>|null $value Value to set for the assignedPlans property.
    */
    public function setAssignedPlans(?array $value ): void {
        $this->assignedPlans = $value;
    }

    /**
     * Sets the assignments property value. List of assignments for the user. Nullable.
     *  @param array<EducationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the businessPhones property value. The telephone numbers for the user. Note: Although this is a string collection, only one number can be set for this property.
     *  @param array<string>|null $value Value to set for the businessPhones property.
    */
    public function setBusinessPhones(?array $value ): void {
        $this->businessPhones = $value;
    }

    /**
     * Sets the classes property value. Classes to which the user belongs. Nullable.
     *  @param array<EducationClass>|null $value Value to set for the classes property.
    */
    public function setClasses(?array $value ): void {
        $this->classes = $value;
    }

    /**
     * Sets the createdBy property value. Entity who created the user.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the department property value. The name for the department in which the user works. Supports /$filter.
     *  @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value ): void {
        $this->department = $value;
    }

    /**
     * Sets the displayName property value. The name displayed in the address book for the user. Supports $filter and $orderby.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the externalSource property value. The type of external source this resource was generated from (automatically determined from externalSourceDetail). Possible values are: sis, lms, or manual.
     *  @param EducationExternalSource|null $value Value to set for the externalSource property.
    */
    public function setExternalSource(?EducationExternalSource $value ): void {
        $this->externalSource = $value;
    }

    /**
     * Sets the externalSourceDetail property value. The name of the external source this resources was generated from.
     *  @param string|null $value Value to set for the externalSourceDetail property.
    */
    public function setExternalSourceDetail(?string $value ): void {
        $this->externalSourceDetail = $value;
    }

    /**
     * Sets the givenName property value. The given name (first name) of the user. Supports /$filter.
     *  @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value ): void {
        $this->givenName = $value;
    }

    /**
     * Sets the mail property value. The SMTP address for the user; for example, 'jeff@contoso.onmicrosoft.com'. Read-Only. Supports /$filter.
     *  @param string|null $value Value to set for the mail property.
    */
    public function setMail(?string $value ): void {
        $this->mail = $value;
    }

    /**
     * Sets the mailingAddress property value. Mail address of user. Note: type and postOfficeBox are not supported for educationUser resources.
     *  @param PhysicalAddress|null $value Value to set for the mailingAddress property.
    */
    public function setMailingAddress(?PhysicalAddress $value ): void {
        $this->mailingAddress = $value;
    }

    /**
     * Sets the mailNickname property value. The mail alias for the user. This property must be specified when a user is created. Supports /$filter.
     *  @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value ): void {
        $this->mailNickname = $value;
    }

    /**
     * Sets the middleName property value. The middle name of user.
     *  @param string|null $value Value to set for the middleName property.
    */
    public function setMiddleName(?string $value ): void {
        $this->middleName = $value;
    }

    /**
     * Sets the mobilePhone property value. The primary cellular telephone number for the user.
     *  @param string|null $value Value to set for the mobilePhone property.
    */
    public function setMobilePhone(?string $value ): void {
        $this->mobilePhone = $value;
    }

    /**
     * Sets the officeLocation property value. The officeLocation property
     *  @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value ): void {
        $this->officeLocation = $value;
    }

    /**
     * Sets the onPremisesInfo property value. Additional information used to associate the AAD user with it's Active Directory counterpart.
     *  @param EducationOnPremisesInfo|null $value Value to set for the onPremisesInfo property.
    */
    public function setOnPremisesInfo(?EducationOnPremisesInfo $value ): void {
        $this->onPremisesInfo = $value;
    }

    /**
     * Sets the passwordPolicies property value. Specifies password policies for the user. See standard [user] resource for additional details.
     *  @param string|null $value Value to set for the passwordPolicies property.
    */
    public function setPasswordPolicies(?string $value ): void {
        $this->passwordPolicies = $value;
    }

    /**
     * Sets the passwordProfile property value. Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. See standard [user] resource for additional details.
     *  @param PasswordProfile|null $value Value to set for the passwordProfile property.
    */
    public function setPasswordProfile(?PasswordProfile $value ): void {
        $this->passwordProfile = $value;
    }

    /**
     * Sets the preferredLanguage property value. The preferred language for the user. Should follow ISO 639-1 Code; for example, 'en-US'.
     *  @param string|null $value Value to set for the preferredLanguage property.
    */
    public function setPreferredLanguage(?string $value ): void {
        $this->preferredLanguage = $value;
    }

    /**
     * Sets the primaryRole property value. Default role for a user. The user's role might be different in an individual class. Possible values are: student, teacher, faculty. Supports /$filter.
     *  @param EducationUserRole|null $value Value to set for the primaryRole property.
    */
    public function setPrimaryRole(?EducationUserRole $value ): void {
        $this->primaryRole = $value;
    }

    /**
     * Sets the provisionedPlans property value. The plans that are provisioned for the user. Read-only. Not nullable.
     *  @param array<ProvisionedPlan>|null $value Value to set for the provisionedPlans property.
    */
    public function setProvisionedPlans(?array $value ): void {
        $this->provisionedPlans = $value;
    }

    /**
     * Sets the refreshTokensValidFromDateTime property value. The refreshTokensValidFromDateTime property
     *  @param DateTime|null $value Value to set for the refreshTokensValidFromDateTime property.
    */
    public function setRefreshTokensValidFromDateTime(?DateTime $value ): void {
        $this->refreshTokensValidFromDateTime = $value;
    }

    /**
     * Sets the relatedContacts property value. Related records related to the user. Possible relationships are parent, relative, aide, doctor, guardian, child, other, unknownFutureValue
     *  @param array<RelatedContact>|null $value Value to set for the relatedContacts property.
    */
    public function setRelatedContacts(?array $value ): void {
        $this->relatedContacts = $value;
    }

    /**
     * Sets the residenceAddress property value. Address where user lives. Note: type and postOfficeBox are not supported for educationUser resources.
     *  @param PhysicalAddress|null $value Value to set for the residenceAddress property.
    */
    public function setResidenceAddress(?PhysicalAddress $value ): void {
        $this->residenceAddress = $value;
    }

    /**
     * Sets the rubrics property value. When set, the grading rubric attached to the assignment.
     *  @param array<EducationRubric>|null $value Value to set for the rubrics property.
    */
    public function setRubrics(?array $value ): void {
        $this->rubrics = $value;
    }

    /**
     * Sets the schools property value. Schools to which the user belongs. Nullable.
     *  @param array<EducationSchool>|null $value Value to set for the schools property.
    */
    public function setSchools(?array $value ): void {
        $this->schools = $value;
    }

    /**
     * Sets the showInAddressList property value. True if the Outlook Global Address List should contain this user; otherwise, false. If not set, this will be treated as true. For users invited through the invitation manager, this property will be set to false.
     *  @param bool|null $value Value to set for the showInAddressList property.
    */
    public function setShowInAddressList(?bool $value ): void {
        $this->showInAddressList = $value;
    }

    /**
     * Sets the student property value. If the primary role is student, this block will contain student specific data.
     *  @param EducationStudent|null $value Value to set for the student property.
    */
    public function setStudent(?EducationStudent $value ): void {
        $this->student = $value;
    }

    /**
     * Sets the surname property value. The user's surname (family name or last name). Supports /$filter.
     *  @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value ): void {
        $this->surname = $value;
    }

    /**
     * Sets the taughtClasses property value. Classes for which the user is a teacher.
     *  @param array<EducationClass>|null $value Value to set for the taughtClasses property.
    */
    public function setTaughtClasses(?array $value ): void {
        $this->taughtClasses = $value;
    }

    /**
     * Sets the teacher property value. If the primary role is teacher, this block will contain teacher specific data.
     *  @param EducationTeacher|null $value Value to set for the teacher property.
    */
    public function setTeacher(?EducationTeacher $value ): void {
        $this->teacher = $value;
    }

    /**
     * Sets the usageLocation property value. A two-letter country code ([ISO 3166 Alpha-2]). Required for users who will be assigned licenses. Not nullable. Supports /$filter.
     *  @param string|null $value Value to set for the usageLocation property.
    */
    public function setUsageLocation(?string $value ): void {
        $this->usageLocation = $value;
    }

    /**
     * Sets the user property value. The directory user that corresponds to this user.
     *  @param User|null $value Value to set for the user property.
    */
    public function setUser(?User $value ): void {
        $this->user = $value;
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) for the user. Supports $filter and $orderby. See standard [user] resource for additional details.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

    /**
     * Sets the userType property value. A string value that can be used to classify user types in your directory, such as 'Member' and 'Guest'. Supports /$filter.
     *  @param string|null $value Value to set for the userType property.
    */
    public function setUserType(?string $value ): void {
        $this->userType = $value;
    }

}
