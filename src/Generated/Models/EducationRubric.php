<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationRubric extends Entity implements Parsable 
{
    /**
     * @var IdentitySet|null $createdBy The user who created this resource.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var EducationItemBody|null $description The description of this rubric.
    */
    private ?EducationItemBody $description = null;
    
    /**
     * @var string|null $displayName The name of this rubric.
    */
    private ?string $displayName = null;
    
    /**
     * @var EducationAssignmentGradeType|null $grading The grading type of this rubric -- null for a no-points rubric, or educationAssignmentPointsGradeType for a points rubric.
    */
    private ?EducationAssignmentGradeType $grading = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy The last user to modify the resource.
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Moment in time when the resource was last modified.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<RubricLevel>|null $levels The collection of levels making up this rubric.
    */
    private ?array $levels = null;
    
    /**
     * @var array<RubricQuality>|null $qualities The collection of qualities making up this rubric.
    */
    private ?array $qualities = null;
    
    /**
     * Instantiates a new educationRubric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationRubric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationRubric {
        return new EducationRubric();
    }

    /**
     * Gets the createdBy property value. The user who created this resource.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description of this rubric.
     * @return EducationItemBody|null
    */
    public function getDescription(): ?EducationItemBody {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The name of this rubric.
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
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getObjectValue(array(EducationItemBody::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'grading' => function (ParseNode $n) use ($o) { $o->setGrading($n->getObjectValue(array(EducationAssignmentGradeType::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'levels' => function (ParseNode $n) use ($o) { $o->setLevels($n->getCollectionOfObjectValues(array(RubricLevel::class, 'createFromDiscriminatorValue'))); },
            'qualities' => function (ParseNode $n) use ($o) { $o->setQualities($n->getCollectionOfObjectValues(array(RubricQuality::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the grading property value. The grading type of this rubric -- null for a no-points rubric, or educationAssignmentPointsGradeType for a points rubric.
     * @return EducationAssignmentGradeType|null
    */
    public function getGrading(): ?EducationAssignmentGradeType {
        return $this->grading;
    }

    /**
     * Gets the lastModifiedBy property value. The last user to modify the resource.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. Moment in time when the resource was last modified.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the levels property value. The collection of levels making up this rubric.
     * @return array<RubricLevel>|null
    */
    public function getLevels(): ?array {
        return $this->levels;
    }

    /**
     * Gets the qualities property value. The collection of qualities making up this rubric.
     * @return array<RubricQuality>|null
    */
    public function getQualities(): ?array {
        return $this->qualities;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('grading', $this->grading);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('levels', $this->levels);
        $writer->writeCollectionOfObjectValues('qualities', $this->qualities);
    }

    /**
     * Sets the createdBy property value. The user who created this resource.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description of this rubric.
     *  @param EducationItemBody|null $value Value to set for the description property.
    */
    public function setDescription(?EducationItemBody $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The name of this rubric.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the grading property value. The grading type of this rubric -- null for a no-points rubric, or educationAssignmentPointsGradeType for a points rubric.
     *  @param EducationAssignmentGradeType|null $value Value to set for the grading property.
    */
    public function setGrading(?EducationAssignmentGradeType $value ): void {
        $this->grading = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The last user to modify the resource.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Moment in time when the resource was last modified.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the levels property value. The collection of levels making up this rubric.
     *  @param array<RubricLevel>|null $value Value to set for the levels property.
    */
    public function setLevels(?array $value ): void {
        $this->levels = $value;
    }

    /**
     * Sets the qualities property value. The collection of qualities making up this rubric.
     *  @param array<RubricQuality>|null $value Value to set for the qualities property.
    */
    public function setQualities(?array $value ): void {
        $this->qualities = $value;
    }

}
