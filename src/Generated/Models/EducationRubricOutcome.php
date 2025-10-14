<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EducationRubricOutcome extends EducationOutcome implements Parsable 
{
    /**
     * Instantiates a new EducationRubricOutcome and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationRubricOutcome');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationRubricOutcome
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationRubricOutcome {
        return new EducationRubricOutcome();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'publishedRubricQualityFeedback' => fn(ParseNode $n) => $o->setPublishedRubricQualityFeedback($n->getCollectionOfObjectValues([RubricQualityFeedbackModel::class, 'createFromDiscriminatorValue'])),
            'publishedRubricQualitySelectedLevels' => fn(ParseNode $n) => $o->setPublishedRubricQualitySelectedLevels($n->getCollectionOfObjectValues([RubricQualitySelectedColumnModel::class, 'createFromDiscriminatorValue'])),
            'rubricQualityFeedback' => fn(ParseNode $n) => $o->setRubricQualityFeedback($n->getCollectionOfObjectValues([RubricQualityFeedbackModel::class, 'createFromDiscriminatorValue'])),
            'rubricQualitySelectedLevels' => fn(ParseNode $n) => $o->setRubricQualitySelectedLevels($n->getCollectionOfObjectValues([RubricQualitySelectedColumnModel::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the publishedRubricQualityFeedback property value. A copy of the rubricQualityFeedback property that is made when the grade is released to the student.
     * @return array<RubricQualityFeedbackModel>|null
    */
    public function getPublishedRubricQualityFeedback(): ?array {
        $val = $this->getBackingStore()->get('publishedRubricQualityFeedback');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RubricQualityFeedbackModel::class);
            /** @var array<RubricQualityFeedbackModel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishedRubricQualityFeedback'");
    }

    /**
     * Gets the publishedRubricQualitySelectedLevels property value. A copy of the rubricQualitySelectedLevels property that is made when the grade is released to the student.
     * @return array<RubricQualitySelectedColumnModel>|null
    */
    public function getPublishedRubricQualitySelectedLevels(): ?array {
        $val = $this->getBackingStore()->get('publishedRubricQualitySelectedLevels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RubricQualitySelectedColumnModel::class);
            /** @var array<RubricQualitySelectedColumnModel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishedRubricQualitySelectedLevels'");
    }

    /**
     * Gets the rubricQualityFeedback property value. A collection of specific feedback for each quality of this rubric.
     * @return array<RubricQualityFeedbackModel>|null
    */
    public function getRubricQualityFeedback(): ?array {
        $val = $this->getBackingStore()->get('rubricQualityFeedback');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RubricQualityFeedbackModel::class);
            /** @var array<RubricQualityFeedbackModel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rubricQualityFeedback'");
    }

    /**
     * Gets the rubricQualitySelectedLevels property value. The level that the teacher has selected for each quality while grading this assignment.
     * @return array<RubricQualitySelectedColumnModel>|null
    */
    public function getRubricQualitySelectedLevels(): ?array {
        $val = $this->getBackingStore()->get('rubricQualitySelectedLevels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RubricQualitySelectedColumnModel::class);
            /** @var array<RubricQualitySelectedColumnModel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rubricQualitySelectedLevels'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('publishedRubricQualityFeedback', $this->getPublishedRubricQualityFeedback());
        $writer->writeCollectionOfObjectValues('publishedRubricQualitySelectedLevels', $this->getPublishedRubricQualitySelectedLevels());
        $writer->writeCollectionOfObjectValues('rubricQualityFeedback', $this->getRubricQualityFeedback());
        $writer->writeCollectionOfObjectValues('rubricQualitySelectedLevels', $this->getRubricQualitySelectedLevels());
    }

    /**
     * Sets the publishedRubricQualityFeedback property value. A copy of the rubricQualityFeedback property that is made when the grade is released to the student.
     * @param array<RubricQualityFeedbackModel>|null $value Value to set for the publishedRubricQualityFeedback property.
    */
    public function setPublishedRubricQualityFeedback(?array $value): void {
        $this->getBackingStore()->set('publishedRubricQualityFeedback', $value);
    }

    /**
     * Sets the publishedRubricQualitySelectedLevels property value. A copy of the rubricQualitySelectedLevels property that is made when the grade is released to the student.
     * @param array<RubricQualitySelectedColumnModel>|null $value Value to set for the publishedRubricQualitySelectedLevels property.
    */
    public function setPublishedRubricQualitySelectedLevels(?array $value): void {
        $this->getBackingStore()->set('publishedRubricQualitySelectedLevels', $value);
    }

    /**
     * Sets the rubricQualityFeedback property value. A collection of specific feedback for each quality of this rubric.
     * @param array<RubricQualityFeedbackModel>|null $value Value to set for the rubricQualityFeedback property.
    */
    public function setRubricQualityFeedback(?array $value): void {
        $this->getBackingStore()->set('rubricQualityFeedback', $value);
    }

    /**
     * Sets the rubricQualitySelectedLevels property value. The level that the teacher has selected for each quality while grading this assignment.
     * @param array<RubricQualitySelectedColumnModel>|null $value Value to set for the rubricQualitySelectedLevels property.
    */
    public function setRubricQualitySelectedLevels(?array $value): void {
        $this->getBackingStore()->set('rubricQualitySelectedLevels', $value);
    }

}
