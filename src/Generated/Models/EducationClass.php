<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EducationClass extends Entity implements Parsable 
{
    /**
     * Instantiates a new EducationClass and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationClass
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationClass {
        return new EducationClass();
    }

    /**
     * Gets the assignmentCategories property value. All categories associated with this class. Nullable.
     * @return array<EducationCategory>|null
    */
    public function getAssignmentCategories(): ?array {
        $val = $this->getBackingStore()->get('assignmentCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationCategory::class);
            /** @var array<EducationCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentCategories'");
    }

    /**
     * Gets the assignmentDefaults property value. Specifies class-level defaults respected by new assignments created in the class.
     * @return EducationAssignmentDefaults|null
    */
    public function getAssignmentDefaults(): ?EducationAssignmentDefaults {
        $val = $this->getBackingStore()->get('assignmentDefaults');
        if (is_null($val) || $val instanceof EducationAssignmentDefaults) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentDefaults'");
    }

    /**
     * Gets the assignments property value. All assignments associated with this class. Nullable.
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
     * Gets the assignmentSettings property value. Specifies class-level assignments settings.
     * @return EducationAssignmentSettings|null
    */
    public function getAssignmentSettings(): ?EducationAssignmentSettings {
        $val = $this->getBackingStore()->get('assignmentSettings');
        if (is_null($val) || $val instanceof EducationAssignmentSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentSettings'");
    }

    /**
     * Gets the classCode property value. Class code used by the school to identify the class.
     * @return string|null
    */
    public function getClassCode(): ?string {
        $val = $this->getBackingStore()->get('classCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classCode'");
    }

    /**
     * Gets the course property value. The course property
     * @return EducationCourse|null
    */
    public function getCourse(): ?EducationCourse {
        $val = $this->getBackingStore()->get('course');
        if (is_null($val) || $val instanceof EducationCourse) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'course'");
    }

    /**
     * Gets the createdBy property value. Entity who created the class
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
     * Gets the description property value. Description of the class.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. Name of the class.
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
     * Gets the externalId property value. ID of the class from the syncing system.
     * @return string|null
    */
    public function getExternalId(): ?string {
        $val = $this->getBackingStore()->get('externalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalId'");
    }

    /**
     * Gets the externalName property value. Name of the class in the syncing system.
     * @return string|null
    */
    public function getExternalName(): ?string {
        $val = $this->getBackingStore()->get('externalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalName'");
    }

    /**
     * Gets the externalSource property value. How this class was created. Possible values are: sis, manual.
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
            'assignmentCategories' => fn(ParseNode $n) => $o->setAssignmentCategories($n->getCollectionOfObjectValues([EducationCategory::class, 'createFromDiscriminatorValue'])),
            'assignmentDefaults' => fn(ParseNode $n) => $o->setAssignmentDefaults($n->getObjectValue([EducationAssignmentDefaults::class, 'createFromDiscriminatorValue'])),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([EducationAssignment::class, 'createFromDiscriminatorValue'])),
            'assignmentSettings' => fn(ParseNode $n) => $o->setAssignmentSettings($n->getObjectValue([EducationAssignmentSettings::class, 'createFromDiscriminatorValue'])),
            'classCode' => fn(ParseNode $n) => $o->setClassCode($n->getStringValue()),
            'course' => fn(ParseNode $n) => $o->setCourse($n->getObjectValue([EducationCourse::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'externalName' => fn(ParseNode $n) => $o->setExternalName($n->getStringValue()),
            'externalSource' => fn(ParseNode $n) => $o->setExternalSource($n->getEnumValue(EducationExternalSource::class)),
            'externalSourceDetail' => fn(ParseNode $n) => $o->setExternalSourceDetail($n->getStringValue()),
            'grade' => fn(ParseNode $n) => $o->setGrade($n->getStringValue()),
            'group' => fn(ParseNode $n) => $o->setGroup($n->getObjectValue([Group::class, 'createFromDiscriminatorValue'])),
            'mailNickname' => fn(ParseNode $n) => $o->setMailNickname($n->getStringValue()),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([EducationUser::class, 'createFromDiscriminatorValue'])),
            'modules' => fn(ParseNode $n) => $o->setModules($n->getCollectionOfObjectValues([EducationModule::class, 'createFromDiscriminatorValue'])),
            'schools' => fn(ParseNode $n) => $o->setSchools($n->getCollectionOfObjectValues([EducationSchool::class, 'createFromDiscriminatorValue'])),
            'teachers' => fn(ParseNode $n) => $o->setTeachers($n->getCollectionOfObjectValues([EducationUser::class, 'createFromDiscriminatorValue'])),
            'term' => fn(ParseNode $n) => $o->setTerm($n->getObjectValue([EducationTerm::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the grade property value. Grade level of the class.
     * @return string|null
    */
    public function getGrade(): ?string {
        $val = $this->getBackingStore()->get('grade');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'grade'");
    }

    /**
     * Gets the group property value. The underlying Microsoft 365 group object.
     * @return Group|null
    */
    public function getGroup(): ?Group {
        $val = $this->getBackingStore()->get('group');
        if (is_null($val) || $val instanceof Group) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'group'");
    }

    /**
     * Gets the mailNickname property value. Mail name for sending email to all members, if this is enabled.
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
     * Gets the members property value. All users in the class. Nullable.
     * @return array<EducationUser>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationUser::class);
            /** @var array<EducationUser>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
    }

    /**
     * Gets the modules property value. All modules in the class. Nullable.
     * @return array<EducationModule>|null
    */
    public function getModules(): ?array {
        $val = $this->getBackingStore()->get('modules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationModule::class);
            /** @var array<EducationModule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modules'");
    }

    /**
     * Gets the schools property value. All schools that this class is associated with. Nullable.
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
     * Gets the teachers property value. All teachers in the class. Nullable.
     * @return array<EducationUser>|null
    */
    public function getTeachers(): ?array {
        $val = $this->getBackingStore()->get('teachers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationUser::class);
            /** @var array<EducationUser>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teachers'");
    }

    /**
     * Gets the term property value. Term for this class.
     * @return EducationTerm|null
    */
    public function getTerm(): ?EducationTerm {
        $val = $this->getBackingStore()->get('term');
        if (is_null($val) || $val instanceof EducationTerm) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'term'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignmentCategories', $this->getAssignmentCategories());
        $writer->writeObjectValue('assignmentDefaults', $this->getAssignmentDefaults());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeObjectValue('assignmentSettings', $this->getAssignmentSettings());
        $writer->writeStringValue('classCode', $this->getClassCode());
        $writer->writeObjectValue('course', $this->getCourse());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeStringValue('externalName', $this->getExternalName());
        $writer->writeEnumValue('externalSource', $this->getExternalSource());
        $writer->writeStringValue('externalSourceDetail', $this->getExternalSourceDetail());
        $writer->writeStringValue('grade', $this->getGrade());
        $writer->writeObjectValue('group', $this->getGroup());
        $writer->writeStringValue('mailNickname', $this->getMailNickname());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeCollectionOfObjectValues('modules', $this->getModules());
        $writer->writeCollectionOfObjectValues('schools', $this->getSchools());
        $writer->writeCollectionOfObjectValues('teachers', $this->getTeachers());
        $writer->writeObjectValue('term', $this->getTerm());
    }

    /**
     * Sets the assignmentCategories property value. All categories associated with this class. Nullable.
     * @param array<EducationCategory>|null $value Value to set for the assignmentCategories property.
    */
    public function setAssignmentCategories(?array $value): void {
        $this->getBackingStore()->set('assignmentCategories', $value);
    }

    /**
     * Sets the assignmentDefaults property value. Specifies class-level defaults respected by new assignments created in the class.
     * @param EducationAssignmentDefaults|null $value Value to set for the assignmentDefaults property.
    */
    public function setAssignmentDefaults(?EducationAssignmentDefaults $value): void {
        $this->getBackingStore()->set('assignmentDefaults', $value);
    }

    /**
     * Sets the assignments property value. All assignments associated with this class. Nullable.
     * @param array<EducationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the assignmentSettings property value. Specifies class-level assignments settings.
     * @param EducationAssignmentSettings|null $value Value to set for the assignmentSettings property.
    */
    public function setAssignmentSettings(?EducationAssignmentSettings $value): void {
        $this->getBackingStore()->set('assignmentSettings', $value);
    }

    /**
     * Sets the classCode property value. Class code used by the school to identify the class.
     * @param string|null $value Value to set for the classCode property.
    */
    public function setClassCode(?string $value): void {
        $this->getBackingStore()->set('classCode', $value);
    }

    /**
     * Sets the course property value. The course property
     * @param EducationCourse|null $value Value to set for the course property.
    */
    public function setCourse(?EducationCourse $value): void {
        $this->getBackingStore()->set('course', $value);
    }

    /**
     * Sets the createdBy property value. Entity who created the class
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the description property value. Description of the class.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Name of the class.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalId property value. ID of the class from the syncing system.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the externalName property value. Name of the class in the syncing system.
     * @param string|null $value Value to set for the externalName property.
    */
    public function setExternalName(?string $value): void {
        $this->getBackingStore()->set('externalName', $value);
    }

    /**
     * Sets the externalSource property value. How this class was created. Possible values are: sis, manual.
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
     * Sets the grade property value. Grade level of the class.
     * @param string|null $value Value to set for the grade property.
    */
    public function setGrade(?string $value): void {
        $this->getBackingStore()->set('grade', $value);
    }

    /**
     * Sets the group property value. The underlying Microsoft 365 group object.
     * @param Group|null $value Value to set for the group property.
    */
    public function setGroup(?Group $value): void {
        $this->getBackingStore()->set('group', $value);
    }

    /**
     * Sets the mailNickname property value. Mail name for sending email to all members, if this is enabled.
     * @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value): void {
        $this->getBackingStore()->set('mailNickname', $value);
    }

    /**
     * Sets the members property value. All users in the class. Nullable.
     * @param array<EducationUser>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the modules property value. All modules in the class. Nullable.
     * @param array<EducationModule>|null $value Value to set for the modules property.
    */
    public function setModules(?array $value): void {
        $this->getBackingStore()->set('modules', $value);
    }

    /**
     * Sets the schools property value. All schools that this class is associated with. Nullable.
     * @param array<EducationSchool>|null $value Value to set for the schools property.
    */
    public function setSchools(?array $value): void {
        $this->getBackingStore()->set('schools', $value);
    }

    /**
     * Sets the teachers property value. All teachers in the class. Nullable.
     * @param array<EducationUser>|null $value Value to set for the teachers property.
    */
    public function setTeachers(?array $value): void {
        $this->getBackingStore()->set('teachers', $value);
    }

    /**
     * Sets the term property value. Term for this class.
     * @param EducationTerm|null $value Value to set for the term property.
    */
    public function setTerm(?EducationTerm $value): void {
        $this->getBackingStore()->set('term', $value);
    }

}
