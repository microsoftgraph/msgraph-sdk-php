<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EducationRubric extends Entity implements Parsable 
{
    /**
     * Instantiates a new EducationRubric and sets the default values.
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
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. The description of this rubric.
     * @return EducationItemBody|null
    */
    public function getDescription(): ?EducationItemBody {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || $val instanceof EducationItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The name of this rubric.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getObjectValue([EducationItemBody::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'grading' => fn(ParseNode $n) => $o->setGrading($n->getObjectValue([EducationAssignmentGradeType::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'levels' => fn(ParseNode $n) => $o->setLevels($n->getCollectionOfObjectValues([RubricLevel::class, 'createFromDiscriminatorValue'])),
            'qualities' => fn(ParseNode $n) => $o->setQualities($n->getCollectionOfObjectValues([RubricQuality::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the grading property value. The grading type of this rubric. You can use null for a no-points rubric or educationAssignmentPointsGradeType for a points rubric.
     * @return EducationAssignmentGradeType|null
    */
    public function getGrading(): ?EducationAssignmentGradeType {
        $val = $this->getBackingStore()->get('grading');
        if (is_null($val) || $val instanceof EducationAssignmentGradeType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'grading'");
    }

    /**
     * Gets the lastModifiedBy property value. The last user to modify the resource.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Moment in time when the resource was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the levels property value. The collection of levels making up this rubric.
     * @return array<RubricLevel>|null
    */
    public function getLevels(): ?array {
        $val = $this->getBackingStore()->get('levels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RubricLevel::class);
            /** @var array<RubricLevel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'levels'");
    }

    /**
     * Gets the qualities property value. The collection of qualities making up this rubric.
     * @return array<RubricQuality>|null
    */
    public function getQualities(): ?array {
        $val = $this->getBackingStore()->get('qualities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RubricQuality::class);
            /** @var array<RubricQuality>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'qualities'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('grading', $this->getGrading());
        $writer->writeCollectionOfObjectValues('levels', $this->getLevels());
        $writer->writeCollectionOfObjectValues('qualities', $this->getQualities());
    }

    /**
     * Sets the createdBy property value. The user who created this resource.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description of this rubric.
     * @param EducationItemBody|null $value Value to set for the description property.
    */
    public function setDescription(?EducationItemBody $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of this rubric.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the grading property value. The grading type of this rubric. You can use null for a no-points rubric or educationAssignmentPointsGradeType for a points rubric.
     * @param EducationAssignmentGradeType|null $value Value to set for the grading property.
    */
    public function setGrading(?EducationAssignmentGradeType $value): void {
        $this->getBackingStore()->set('grading', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The last user to modify the resource.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Moment in time when the resource was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the levels property value. The collection of levels making up this rubric.
     * @param array<RubricLevel>|null $value Value to set for the levels property.
    */
    public function setLevels(?array $value): void {
        $this->getBackingStore()->set('levels', $value);
    }

    /**
     * Sets the qualities property value. The collection of qualities making up this rubric.
     * @param array<RubricQuality>|null $value Value to set for the qualities property.
    */
    public function setQualities(?array $value): void {
        $this->getBackingStore()->set('qualities', $value);
    }

}
