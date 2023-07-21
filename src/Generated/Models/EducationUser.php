<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('accountEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountEnabled'");
    }

    /**
     * Gets the assignedLicenses property value. The licenses that are assigned to the user. Not nullable.
     * @return array<AssignedLicense>|null
    */
    public function getAssignedLicenses(): ?array {
        $val = $this->getBackingStore()->get('assignedLicenses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AssignedLicense::class);
            /** @var array<AssignedLicense>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedLicenses'");
    }

    /**
     * Gets the assignedPlans property value. The plans that are assigned to the user. Read-only. Not nullable.
     * @return array<AssignedPlan>|null
    */
    public function getAssignedPlans(): ?array {
        $val = $this->getBackingStore()->get('assignedPlans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AssignedPlan::class);
            /** @var array<AssignedPlan>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedPlans'");
    }

    /**
     * Gets the assignments property value. Assignments belonging to the user.
     * @return array<EducationAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationAssignment::class);
            /** @var array<EducationAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the businessPhones property value. The telephone numbers for the user. Note: Although this is a string collection, only one number can be set for this property.
     * @return array<string>|null
    */
    public function getBusinessPhones(): ?array {
        $val = $this->getBackingStore()->get('businessPhones');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'businessPhones'");
    }

    /**
     * Gets the classes property value. Classes to which the user belongs. Nullable.
     * @return array<EducationClass>|null
    */
    public function getClasses(): ?array {
        $val = $this->getBackingStore()->get('classes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationClass::class);
            /** @var array<EducationClass>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classes'");
    }

    /**
     * Gets the createdBy property value. The entity who created the user.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the department property value. The name for the department in which the user works. Supports $filter.
     * @return string|null
    */
    public function getDepartment(): ?string {
        $val = $this->getBackingStore()->get('department');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'department'");
    }

    /**
     * Gets the displayName property value. The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates. Supports $filter and $orderby.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the externalSource property value. Where this user was created from. Possible values are: sis, manual.
     * @return EducationExternalSource|null
    */
    public function getExternalSource(): ?EducationExternalSource {
        $val = $this->getBackingStore()->get('externalSource');
        if (is_null($val) || $val instanceof EducationExternalSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalSource'");
    }

    /**
     * Gets the externalSourceDetail property value. The name of the external source this resource was generated from.
     * @return string|null
    */
    public function getExternalSourceDetail(): ?string {
        $val = $this->getBackingStore()->get('externalSourceDetail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalSourceDetail'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountEnabled' => fn(ParseNode $n) => $o->setAccountEnabled($n->getBooleanValue()),
            'assignedLicenses' => fn(ParseNode $n) => $o->setAssignedLicenses($n->getCollectionOfObjectValues([AssignedLicense::class, 'createFromDiscriminatorValue'])),
            'assignedPlans' => fn(ParseNode $n) => $o->setAssignedPlans($n->getCollectionOfObjectValues([AssignedPlan::class, 'createFromDiscriminatorValue'])),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([EducationAssignment::class, 'createFromDiscriminatorValue'])),
            'businessPhones' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBusinessPhones($val);
            },
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
        $val = $this->getBackingStore()->get('givenName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'givenName'");
    }

    /**
     * Gets the mail property value. The SMTP address for the user, for example, jeff@contoso.onmicrosoft.com. Read-Only. Supports $filter.
     * @return string|null
    */
    public function getMail(): ?string {
        $val = $this->getBackingStore()->get('mail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mail'");
    }

    /**
     * Gets the mailingAddress property value. The mail address of the user.
     * @return PhysicalAddress|null
    */
    public function getMailingAddress(): ?PhysicalAddress {
        $val = $this->getBackingStore()->get('mailingAddress');
        if (is_null($val) || $val instanceof PhysicalAddress) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailingAddress'");
    }

    /**
     * Gets the mailNickname property value. The mail alias for the user. This property must be specified when a user is created. Supports $filter.
     * @return string|null
    */
    public function getMailNickname(): ?string {
        $val = $this->getBackingStore()->get('mailNickname');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailNickname'");
    }

    /**
     * Gets the middleName property value. The middle name of the user.
     * @return string|null
    */
    public function getMiddleName(): ?string {
        $val = $this->getBackingStore()->get('middleName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'middleName'");
    }

    /**
     * Gets the mobilePhone property value. The primary cellular telephone number for the user.
     * @return string|null
    */
    public function getMobilePhone(): ?string {
        $val = $this->getBackingStore()->get('mobilePhone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobilePhone'");
    }

    /**
     * Gets the officeLocation property value. The officeLocation property
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        $val = $this->getBackingStore()->get('officeLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'officeLocation'");
    }

    /**
     * Gets the onPremisesInfo property value. Additional information used to associate the Azure Active Directory user with its Active Directory counterpart.
     * @return EducationOnPremisesInfo|null
    */
    public function getOnPremisesInfo(): ?EducationOnPremisesInfo {
        $val = $this->getBackingStore()->get('onPremisesInfo');
        if (is_null($val) || $val instanceof EducationOnPremisesInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesInfo'");
    }

    /**
     * Gets the passwordPolicies property value. Specifies password policies for the user. This value is an enumeration with one possible value being DisableStrongPassword, which allows weaker passwords than the default policy to be specified. DisablePasswordExpiration can also be specified. The two can be specified together; for example: DisablePasswordExpiration, DisableStrongPassword.
     * @return string|null
    */
    public function getPasswordPolicies(): ?string {
        $val = $this->getBackingStore()->get('passwordPolicies');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordPolicies'");
    }

    /**
     * Gets the passwordProfile property value. Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required.
     * @return PasswordProfile|null
    */
    public function getPasswordProfile(): ?PasswordProfile {
        $val = $this->getBackingStore()->get('passwordProfile');
        if (is_null($val) || $val instanceof PasswordProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordProfile'");
    }

    /**
     * Gets the preferredLanguage property value. The preferred language for the user that should follow the ISO 639-1 code, for example, en-US.
     * @return string|null
    */
    public function getPreferredLanguage(): ?string {
        $val = $this->getBackingStore()->get('preferredLanguage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preferredLanguage'");
    }

    /**
     * Gets the primaryRole property value. The primaryRole property
     * @return EducationUserRole|null
    */
    public function getPrimaryRole(): ?EducationUserRole {
        $val = $this->getBackingStore()->get('primaryRole');
        if (is_null($val) || $val instanceof EducationUserRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryRole'");
    }

    /**
     * Gets the provisionedPlans property value. The plans that are provisioned for the user. Read-only. Not nullable.
     * @return array<ProvisionedPlan>|null
    */
    public function getProvisionedPlans(): ?array {
        $val = $this->getBackingStore()->get('provisionedPlans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProvisionedPlan::class);
            /** @var array<ProvisionedPlan>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provisionedPlans'");
    }

    /**
     * Gets the refreshTokensValidFromDateTime property value. The refreshTokensValidFromDateTime property
     * @return DateTime|null
    */
    public function getRefreshTokensValidFromDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('refreshTokensValidFromDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'refreshTokensValidFromDateTime'");
    }

    /**
     * Gets the relatedContacts property value. Related records associated with the user. Read-only.
     * @return array<RelatedContact>|null
    */
    public function getRelatedContacts(): ?array {
        $val = $this->getBackingStore()->get('relatedContacts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RelatedContact::class);
            /** @var array<RelatedContact>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relatedContacts'");
    }

    /**
     * Gets the residenceAddress property value. The address where the user lives.
     * @return PhysicalAddress|null
    */
    public function getResidenceAddress(): ?PhysicalAddress {
        $val = $this->getBackingStore()->get('residenceAddress');
        if (is_null($val) || $val instanceof PhysicalAddress) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'residenceAddress'");
    }

    /**
     * Gets the rubrics property value. When set, the grading rubric attached to the assignment.
     * @return array<EducationRubric>|null
    */
    public function getRubrics(): ?array {
        $val = $this->getBackingStore()->get('rubrics');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationRubric::class);
            /** @var array<EducationRubric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rubrics'");
    }

    /**
     * Gets the schools property value. Schools to which the user belongs. Nullable.
     * @return array<EducationSchool>|null
    */
    public function getSchools(): ?array {
        $val = $this->getBackingStore()->get('schools');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationSchool::class);
            /** @var array<EducationSchool>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schools'");
    }

    /**
     * Gets the showInAddressList property value. True if the Outlook Global Address List should contain this user; otherwise, false. If not set, this will be treated as true. For users invited through the invitation manager, this property will be set to false.
     * @return bool|null
    */
    public function getShowInAddressList(): ?bool {
        $val = $this->getBackingStore()->get('showInAddressList');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showInAddressList'");
    }

    /**
     * Gets the student property value. If the primary role is student, this block will contain student specific data.
     * @return EducationStudent|null
    */
    public function getStudent(): ?EducationStudent {
        $val = $this->getBackingStore()->get('student');
        if (is_null($val) || $val instanceof EducationStudent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'student'");
    }

    /**
     * Gets the surname property value. The user's surname (family name or last name). Supports $filter.
     * @return string|null
    */
    public function getSurname(): ?string {
        $val = $this->getBackingStore()->get('surname');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'surname'");
    }

    /**
     * Gets the taughtClasses property value. Classes for which the user is a teacher.
     * @return array<EducationClass>|null
    */
    public function getTaughtClasses(): ?array {
        $val = $this->getBackingStore()->get('taughtClasses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationClass::class);
            /** @var array<EducationClass>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taughtClasses'");
    }

    /**
     * Gets the teacher property value. If the primary role is teacher, this block will contain teacher specific data.
     * @return EducationTeacher|null
    */
    public function getTeacher(): ?EducationTeacher {
        $val = $this->getBackingStore()->get('teacher');
        if (is_null($val) || $val instanceof EducationTeacher) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teacher'");
    }

    /**
     * Gets the usageLocation property value. A two-letter country code (ISO standard 3166). Required for users who will be assigned licenses due to a legal requirement to check for availability of services in countries or regions. Examples include: US, JP, and GB. Not nullable. Supports $filter.
     * @return string|null
    */
    public function getUsageLocation(): ?string {
        $val = $this->getBackingStore()->get('usageLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usageLocation'");
    }

    /**
     * Gets the user property value. The directory user that corresponds to this user.
     * @return User|null
    */
    public function getUser(): ?User {
        $val = $this->getBackingStore()->get('user');
        if (is_null($val) || $val instanceof User) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'user'");
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (UPN) of the user. The UPN is an internet-style login name for the user based on the internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant's collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of the organization. Supports $filter and $orderby.
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
     * Gets the userType property value. A string value that can be used to classify user types in your directory, such as Member and Guest. Supports $filter.
     * @return string|null
    */
    public function getUserType(): ?string {
        $val = $this->getBackingStore()->get('userType');
        if (is_null($val) || is_string($val)) {
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
     * @param bool|null $value Value to set for the accountEnabled property.
    */
    public function setAccountEnabled(?bool $value): void {
        $this->getBackingStore()->set('accountEnabled', $value);
    }

    /**
     * Sets the assignedLicenses property value. The licenses that are assigned to the user. Not nullable.
     * @param array<AssignedLicense>|null $value Value to set for the assignedLicenses property.
    */
    public function setAssignedLicenses(?array $value): void {
        $this->getBackingStore()->set('assignedLicenses', $value);
    }

    /**
     * Sets the assignedPlans property value. The plans that are assigned to the user. Read-only. Not nullable.
     * @param array<AssignedPlan>|null $value Value to set for the assignedPlans property.
    */
    public function setAssignedPlans(?array $value): void {
        $this->getBackingStore()->set('assignedPlans', $value);
    }

    /**
     * Sets the assignments property value. Assignments belonging to the user.
     * @param array<EducationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the businessPhones property value. The telephone numbers for the user. Note: Although this is a string collection, only one number can be set for this property.
     * @param array<string>|null $value Value to set for the businessPhones property.
    */
    public function setBusinessPhones(?array $value): void {
        $this->getBackingStore()->set('businessPhones', $value);
    }

    /**
     * Sets the classes property value. Classes to which the user belongs. Nullable.
     * @param array<EducationClass>|null $value Value to set for the classes property.
    */
    public function setClasses(?array $value): void {
        $this->getBackingStore()->set('classes', $value);
    }

    /**
     * Sets the createdBy property value. The entity who created the user.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the department property value. The name for the department in which the user works. Supports $filter.
     * @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value): void {
        $this->getBackingStore()->set('department', $value);
    }

    /**
     * Sets the displayName property value. The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates. Supports $filter and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalSource property value. Where this user was created from. Possible values are: sis, manual.
     * @param EducationExternalSource|null $value Value to set for the externalSource property.
    */
    public function setExternalSource(?EducationExternalSource $value): void {
        $this->getBackingStore()->set('externalSource', $value);
    }

    /**
     * Sets the externalSourceDetail property value. The name of the external source this resource was generated from.
     * @param string|null $value Value to set for the externalSourceDetail property.
    */
    public function setExternalSourceDetail(?string $value): void {
        $this->getBackingStore()->set('externalSourceDetail', $value);
    }

    /**
     * Sets the givenName property value. The given name (first name) of the user. Supports $filter.
     * @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value): void {
        $this->getBackingStore()->set('givenName', $value);
    }

    /**
     * Sets the mail property value. The SMTP address for the user, for example, jeff@contoso.onmicrosoft.com. Read-Only. Supports $filter.
     * @param string|null $value Value to set for the mail property.
    */
    public function setMail(?string $value): void {
        $this->getBackingStore()->set('mail', $value);
    }

    /**
     * Sets the mailingAddress property value. The mail address of the user.
     * @param PhysicalAddress|null $value Value to set for the mailingAddress property.
    */
    public function setMailingAddress(?PhysicalAddress $value): void {
        $this->getBackingStore()->set('mailingAddress', $value);
    }

    /**
     * Sets the mailNickname property value. The mail alias for the user. This property must be specified when a user is created. Supports $filter.
     * @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value): void {
        $this->getBackingStore()->set('mailNickname', $value);
    }

    /**
     * Sets the middleName property value. The middle name of the user.
     * @param string|null $value Value to set for the middleName property.
    */
    public function setMiddleName(?string $value): void {
        $this->getBackingStore()->set('middleName', $value);
    }

    /**
     * Sets the mobilePhone property value. The primary cellular telephone number for the user.
     * @param string|null $value Value to set for the mobilePhone property.
    */
    public function setMobilePhone(?string $value): void {
        $this->getBackingStore()->set('mobilePhone', $value);
    }

    /**
     * Sets the officeLocation property value. The officeLocation property
     * @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value): void {
        $this->getBackingStore()->set('officeLocation', $value);
    }

    /**
     * Sets the onPremisesInfo property value. Additional information used to associate the Azure Active Directory user with its Active Directory counterpart.
     * @param EducationOnPremisesInfo|null $value Value to set for the onPremisesInfo property.
    */
    public function setOnPremisesInfo(?EducationOnPremisesInfo $value): void {
        $this->getBackingStore()->set('onPremisesInfo', $value);
    }

    /**
     * Sets the passwordPolicies property value. Specifies password policies for the user. This value is an enumeration with one possible value being DisableStrongPassword, which allows weaker passwords than the default policy to be specified. DisablePasswordExpiration can also be specified. The two can be specified together; for example: DisablePasswordExpiration, DisableStrongPassword.
     * @param string|null $value Value to set for the passwordPolicies property.
    */
    public function setPasswordPolicies(?string $value): void {
        $this->getBackingStore()->set('passwordPolicies', $value);
    }

    /**
     * Sets the passwordProfile property value. Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required.
     * @param PasswordProfile|null $value Value to set for the passwordProfile property.
    */
    public function setPasswordProfile(?PasswordProfile $value): void {
        $this->getBackingStore()->set('passwordProfile', $value);
    }

    /**
     * Sets the preferredLanguage property value. The preferred language for the user that should follow the ISO 639-1 code, for example, en-US.
     * @param string|null $value Value to set for the preferredLanguage property.
    */
    public function setPreferredLanguage(?string $value): void {
        $this->getBackingStore()->set('preferredLanguage', $value);
    }

    /**
     * Sets the primaryRole property value. The primaryRole property
     * @param EducationUserRole|null $value Value to set for the primaryRole property.
    */
    public function setPrimaryRole(?EducationUserRole $value): void {
        $this->getBackingStore()->set('primaryRole', $value);
    }

    /**
     * Sets the provisionedPlans property value. The plans that are provisioned for the user. Read-only. Not nullable.
     * @param array<ProvisionedPlan>|null $value Value to set for the provisionedPlans property.
    */
    public function setProvisionedPlans(?array $value): void {
        $this->getBackingStore()->set('provisionedPlans', $value);
    }

    /**
     * Sets the refreshTokensValidFromDateTime property value. The refreshTokensValidFromDateTime property
     * @param DateTime|null $value Value to set for the refreshTokensValidFromDateTime property.
    */
    public function setRefreshTokensValidFromDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('refreshTokensValidFromDateTime', $value);
    }

    /**
     * Sets the relatedContacts property value. Related records associated with the user. Read-only.
     * @param array<RelatedContact>|null $value Value to set for the relatedContacts property.
    */
    public function setRelatedContacts(?array $value): void {
        $this->getBackingStore()->set('relatedContacts', $value);
    }

    /**
     * Sets the residenceAddress property value. The address where the user lives.
     * @param PhysicalAddress|null $value Value to set for the residenceAddress property.
    */
    public function setResidenceAddress(?PhysicalAddress $value): void {
        $this->getBackingStore()->set('residenceAddress', $value);
    }

    /**
     * Sets the rubrics property value. When set, the grading rubric attached to the assignment.
     * @param array<EducationRubric>|null $value Value to set for the rubrics property.
    */
    public function setRubrics(?array $value): void {
        $this->getBackingStore()->set('rubrics', $value);
    }

    /**
     * Sets the schools property value. Schools to which the user belongs. Nullable.
     * @param array<EducationSchool>|null $value Value to set for the schools property.
    */
    public function setSchools(?array $value): void {
        $this->getBackingStore()->set('schools', $value);
    }

    /**
     * Sets the showInAddressList property value. True if the Outlook Global Address List should contain this user; otherwise, false. If not set, this will be treated as true. For users invited through the invitation manager, this property will be set to false.
     * @param bool|null $value Value to set for the showInAddressList property.
    */
    public function setShowInAddressList(?bool $value): void {
        $this->getBackingStore()->set('showInAddressList', $value);
    }

    /**
     * Sets the student property value. If the primary role is student, this block will contain student specific data.
     * @param EducationStudent|null $value Value to set for the student property.
    */
    public function setStudent(?EducationStudent $value): void {
        $this->getBackingStore()->set('student', $value);
    }

    /**
     * Sets the surname property value. The user's surname (family name or last name). Supports $filter.
     * @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value): void {
        $this->getBackingStore()->set('surname', $value);
    }

    /**
     * Sets the taughtClasses property value. Classes for which the user is a teacher.
     * @param array<EducationClass>|null $value Value to set for the taughtClasses property.
    */
    public function setTaughtClasses(?array $value): void {
        $this->getBackingStore()->set('taughtClasses', $value);
    }

    /**
     * Sets the teacher property value. If the primary role is teacher, this block will contain teacher specific data.
     * @param EducationTeacher|null $value Value to set for the teacher property.
    */
    public function setTeacher(?EducationTeacher $value): void {
        $this->getBackingStore()->set('teacher', $value);
    }

    /**
     * Sets the usageLocation property value. A two-letter country code (ISO standard 3166). Required for users who will be assigned licenses due to a legal requirement to check for availability of services in countries or regions. Examples include: US, JP, and GB. Not nullable. Supports $filter.
     * @param string|null $value Value to set for the usageLocation property.
    */
    public function setUsageLocation(?string $value): void {
        $this->getBackingStore()->set('usageLocation', $value);
    }

    /**
     * Sets the user property value. The directory user that corresponds to this user.
     * @param User|null $value Value to set for the user property.
    */
    public function setUser(?User $value): void {
        $this->getBackingStore()->set('user', $value);
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) of the user. The UPN is an internet-style login name for the user based on the internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant's collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of the organization. Supports $filter and $orderby.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the userType property value. A string value that can be used to classify user types in your directory, such as Member and Guest. Supports $filter.
     * @param string|null $value Value to set for the userType property.
    */
    public function setUserType(?string $value): void {
        $this->getBackingStore()->set('userType', $value);
    }

}
