<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationClass extends Entity 
{
    /** @var array<EducationCategory>|null $assignmentCategories  */
    private ?array $assignmentCategories = null;
    
    /** @var EducationAssignmentDefaults|null $assignmentDefaults  */
    private ?EducationAssignmentDefaults $assignmentDefaults = null;
    
    /** @var array<EducationAssignment>|null $assignments All assignments associated with this class. Nullable. */
    private ?array $assignments = null;
    
    /** @var EducationAssignmentSettings|null $assignmentSettings  */
    private ?EducationAssignmentSettings $assignmentSettings = null;
    
    /** @var string|null $classCode Class code used by the school to identify the class. */
    private ?string $classCode = null;
    
    /** @var EducationCourse|null $course Course information for the class. */
    private ?EducationCourse $course = null;
    
    /** @var IdentitySet|null $createdBy Entity who created the class */
    private ?IdentitySet $createdBy = null;
    
    /** @var string|null $description Description of the class. */
    private ?string $description = null;
    
    /** @var string|null $displayName Name of the class. */
    private ?string $displayName = null;
    
    /** @var string|null $externalId ID of the class from the syncing system. */
    private ?string $externalId = null;
    
    /** @var string|null $externalName Name of the class in the syncing system. */
    private ?string $externalName = null;
    
    /** @var EducationExternalSource|null $externalSource How this class was created. Possible values are: sis, manual. */
    private ?EducationExternalSource $externalSource = null;
    
    /** @var string|null $externalSourceDetail The name of the external source this resources was generated from. */
    private ?string $externalSourceDetail = null;
    
    /** @var string|null $grade Grade level of the class. */
    private ?string $grade = null;
    
    /** @var Group|null $group The underlying Microsoft 365 group object. */
    private ?Group $group = null;
    
    /** @var string|null $mailNickname Mail name for sending email to all members, if this is enabled. */
    private ?string $mailNickname = null;
    
    /** @var array<EducationUser>|null $members All users in the class. Nullable. */
    private ?array $members = null;
    
    /** @var array<EducationSchool>|null $schools All schools that this class is associated with. Nullable. */
    private ?array $schools = null;
    
    /** @var array<EducationUser>|null $teachers All teachers in the class. Nullable. */
    private ?array $teachers = null;
    
    /** @var EducationTerm|null $term Term for this class. */
    private ?EducationTerm $term = null;
    
    /**
     * Instantiates a new educationClass and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationClass
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EducationClass {
        return new EducationClass();
    }

    /**
     * Gets the assignmentCategories property value. 
     * @return array<EducationCategory>|null
    */
    public function getAssignmentCategories(): ?array {
        return $this->assignmentCategories;
    }

    /**
     * Gets the assignmentDefaults property value. 
     * @return EducationAssignmentDefaults|null
    */
    public function getAssignmentDefaults(): ?EducationAssignmentDefaults {
        return $this->assignmentDefaults;
    }

    /**
     * Gets the assignments property value. All assignments associated with this class. Nullable.
     * @return array<EducationAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the assignmentSettings property value. 
     * @return EducationAssignmentSettings|null
    */
    public function getAssignmentSettings(): ?EducationAssignmentSettings {
        return $this->assignmentSettings;
    }

    /**
     * Gets the classCode property value. Class code used by the school to identify the class.
     * @return string|null
    */
    public function getClassCode(): ?string {
        return $this->classCode;
    }

    /**
     * Gets the course property value. Course information for the class.
     * @return EducationCourse|null
    */
    public function getCourse(): ?EducationCourse {
        return $this->course;
    }

    /**
     * Gets the createdBy property value. Entity who created the class
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the description property value. Description of the class.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Name of the class.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the externalId property value. ID of the class from the syncing system.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * Gets the externalName property value. Name of the class in the syncing system.
     * @return string|null
    */
    public function getExternalName(): ?string {
        return $this->externalName;
    }

    /**
     * Gets the externalSource property value. How this class was created. Possible values are: sis, manual.
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
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentCategories' => function (self $o, ParseNode $n) { $o->setAssignmentCategories($n->getCollectionOfObjectValues(EducationCategory::class)); },
            'assignmentDefaults' => function (self $o, ParseNode $n) { $o->setAssignmentDefaults($n->getObjectValue(EducationAssignmentDefaults::class)); },
            'assignments' => function (self $o, ParseNode $n) { $o->setAssignments($n->getCollectionOfObjectValues(EducationAssignment::class)); },
            'assignmentSettings' => function (self $o, ParseNode $n) { $o->setAssignmentSettings($n->getObjectValue(EducationAssignmentSettings::class)); },
            'classCode' => function (self $o, ParseNode $n) { $o->setClassCode($n->getStringValue()); },
            'course' => function (self $o, ParseNode $n) { $o->setCourse($n->getObjectValue(EducationCourse::class)); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getObjectValue(IdentitySet::class)); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'externalId' => function (self $o, ParseNode $n) { $o->setExternalId($n->getStringValue()); },
            'externalName' => function (self $o, ParseNode $n) { $o->setExternalName($n->getStringValue()); },
            'externalSource' => function (self $o, ParseNode $n) { $o->setExternalSource($n->getEnumValue(EducationExternalSource::class)); },
            'externalSourceDetail' => function (self $o, ParseNode $n) { $o->setExternalSourceDetail($n->getStringValue()); },
            'grade' => function (self $o, ParseNode $n) { $o->setGrade($n->getStringValue()); },
            'group' => function (self $o, ParseNode $n) { $o->setGroup($n->getObjectValue(Group::class)); },
            'mailNickname' => function (self $o, ParseNode $n) { $o->setMailNickname($n->getStringValue()); },
            'members' => function (self $o, ParseNode $n) { $o->setMembers($n->getCollectionOfObjectValues(EducationUser::class)); },
            'schools' => function (self $o, ParseNode $n) { $o->setSchools($n->getCollectionOfObjectValues(EducationSchool::class)); },
            'teachers' => function (self $o, ParseNode $n) { $o->setTeachers($n->getCollectionOfObjectValues(EducationUser::class)); },
            'term' => function (self $o, ParseNode $n) { $o->setTerm($n->getObjectValue(EducationTerm::class)); },
        ]);
    }

    /**
     * Gets the grade property value. Grade level of the class.
     * @return string|null
    */
    public function getGrade(): ?string {
        return $this->grade;
    }

    /**
     * Gets the group property value. The underlying Microsoft 365 group object.
     * @return Group|null
    */
    public function getGroup(): ?Group {
        return $this->group;
    }

    /**
     * Gets the mailNickname property value. Mail name for sending email to all members, if this is enabled.
     * @return string|null
    */
    public function getMailNickname(): ?string {
        return $this->mailNickname;
    }

    /**
     * Gets the members property value. All users in the class. Nullable.
     * @return array<EducationUser>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the schools property value. All schools that this class is associated with. Nullable.
     * @return array<EducationSchool>|null
    */
    public function getSchools(): ?array {
        return $this->schools;
    }

    /**
     * Gets the teachers property value. All teachers in the class. Nullable.
     * @return array<EducationUser>|null
    */
    public function getTeachers(): ?array {
        return $this->teachers;
    }

    /**
     * Gets the term property value. Term for this class.
     * @return EducationTerm|null
    */
    public function getTerm(): ?EducationTerm {
        return $this->term;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignmentCategories', $this->assignmentCategories);
        $writer->writeObjectValue('assignmentDefaults', $this->assignmentDefaults);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeObjectValue('assignmentSettings', $this->assignmentSettings);
        $writer->writeStringValue('classCode', $this->classCode);
        $writer->writeObjectValue('course', $this->course);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('externalId', $this->externalId);
        $writer->writeStringValue('externalName', $this->externalName);
        $writer->writeEnumValue('externalSource', $this->externalSource);
        $writer->writeStringValue('externalSourceDetail', $this->externalSourceDetail);
        $writer->writeStringValue('grade', $this->grade);
        $writer->writeObjectValue('group', $this->group);
        $writer->writeStringValue('mailNickname', $this->mailNickname);
        $writer->writeCollectionOfObjectValues('members', $this->members);
        $writer->writeCollectionOfObjectValues('schools', $this->schools);
        $writer->writeCollectionOfObjectValues('teachers', $this->teachers);
        $writer->writeObjectValue('term', $this->term);
    }

    /**
     * Sets the assignmentCategories property value. 
     *  @param array<EducationCategory>|null $value Value to set for the assignmentCategories property.
    */
    public function setAssignmentCategories(?array $value ): void {
        $this->assignmentCategories = $value;
    }

    /**
     * Sets the assignmentDefaults property value. 
     *  @param EducationAssignmentDefaults|null $value Value to set for the assignmentDefaults property.
    */
    public function setAssignmentDefaults(?EducationAssignmentDefaults $value ): void {
        $this->assignmentDefaults = $value;
    }

    /**
     * Sets the assignments property value. All assignments associated with this class. Nullable.
     *  @param array<EducationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the assignmentSettings property value. 
     *  @param EducationAssignmentSettings|null $value Value to set for the assignmentSettings property.
    */
    public function setAssignmentSettings(?EducationAssignmentSettings $value ): void {
        $this->assignmentSettings = $value;
    }

    /**
     * Sets the classCode property value. Class code used by the school to identify the class.
     *  @param string|null $value Value to set for the classCode property.
    */
    public function setClassCode(?string $value ): void {
        $this->classCode = $value;
    }

    /**
     * Sets the course property value. Course information for the class.
     *  @param EducationCourse|null $value Value to set for the course property.
    */
    public function setCourse(?EducationCourse $value ): void {
        $this->course = $value;
    }

    /**
     * Sets the createdBy property value. Entity who created the class
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the description property value. Description of the class.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Name of the class.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the externalId property value. ID of the class from the syncing system.
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the externalName property value. Name of the class in the syncing system.
     *  @param string|null $value Value to set for the externalName property.
    */
    public function setExternalName(?string $value ): void {
        $this->externalName = $value;
    }

    /**
     * Sets the externalSource property value. How this class was created. Possible values are: sis, manual.
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
     * Sets the grade property value. Grade level of the class.
     *  @param string|null $value Value to set for the grade property.
    */
    public function setGrade(?string $value ): void {
        $this->grade = $value;
    }

    /**
     * Sets the group property value. The underlying Microsoft 365 group object.
     *  @param Group|null $value Value to set for the group property.
    */
    public function setGroup(?Group $value ): void {
        $this->group = $value;
    }

    /**
     * Sets the mailNickname property value. Mail name for sending email to all members, if this is enabled.
     *  @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value ): void {
        $this->mailNickname = $value;
    }

    /**
     * Sets the members property value. All users in the class. Nullable.
     *  @param array<EducationUser>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

    /**
     * Sets the schools property value. All schools that this class is associated with. Nullable.
     *  @param array<EducationSchool>|null $value Value to set for the schools property.
    */
    public function setSchools(?array $value ): void {
        $this->schools = $value;
    }

    /**
     * Sets the teachers property value. All teachers in the class. Nullable.
     *  @param array<EducationUser>|null $value Value to set for the teachers property.
    */
    public function setTeachers(?array $value ): void {
        $this->teachers = $value;
    }

    /**
     * Sets the term property value. Term for this class.
     *  @param EducationTerm|null $value Value to set for the term property.
    */
    public function setTerm(?EducationTerm $value ): void {
        $this->term = $value;
    }

}
