<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationRubricOutcome extends EducationOutcome implements Parsable 
{
    /**
     * @var array<RubricQualityFeedbackModel>|null $publishedRubricQualityFeedback A copy of the rubricQualityFeedback property that is made when the grade is released to the student.
    */
    private ?array $publishedRubricQualityFeedback = null;
    
    /**
     * @var array<RubricQualitySelectedColumnModel>|null $publishedRubricQualitySelectedLevels A copy of the rubricQualitySelectedLevels property that is made when the grade is released to the student.
    */
    private ?array $publishedRubricQualitySelectedLevels = null;
    
    /**
     * @var array<RubricQualityFeedbackModel>|null $rubricQualityFeedback A collection of specific feedback for each quality of this rubric.
    */
    private ?array $rubricQualityFeedback = null;
    
    /**
     * @var array<RubricQualitySelectedColumnModel>|null $rubricQualitySelectedLevels The level that the teacher has selected for each quality while grading this assignment.
    */
    private ?array $rubricQualitySelectedLevels = null;
    
    /**
     * Instantiates a new EducationRubricOutcome and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'publishedRubricQualityFeedback' => function (ParseNode $n) use ($o) { $o->setPublishedRubricQualityFeedback($n->getCollectionOfObjectValues(array(RubricQualityFeedbackModel::class, 'createFromDiscriminatorValue'))); },
            'publishedRubricQualitySelectedLevels' => function (ParseNode $n) use ($o) { $o->setPublishedRubricQualitySelectedLevels($n->getCollectionOfObjectValues(array(RubricQualitySelectedColumnModel::class, 'createFromDiscriminatorValue'))); },
            'rubricQualityFeedback' => function (ParseNode $n) use ($o) { $o->setRubricQualityFeedback($n->getCollectionOfObjectValues(array(RubricQualityFeedbackModel::class, 'createFromDiscriminatorValue'))); },
            'rubricQualitySelectedLevels' => function (ParseNode $n) use ($o) { $o->setRubricQualitySelectedLevels($n->getCollectionOfObjectValues(array(RubricQualitySelectedColumnModel::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the publishedRubricQualityFeedback property value. A copy of the rubricQualityFeedback property that is made when the grade is released to the student.
     * @return array<RubricQualityFeedbackModel>|null
    */
    public function getPublishedRubricQualityFeedback(): ?array {
        return $this->publishedRubricQualityFeedback;
    }

    /**
     * Gets the publishedRubricQualitySelectedLevels property value. A copy of the rubricQualitySelectedLevels property that is made when the grade is released to the student.
     * @return array<RubricQualitySelectedColumnModel>|null
    */
    public function getPublishedRubricQualitySelectedLevels(): ?array {
        return $this->publishedRubricQualitySelectedLevels;
    }

    /**
     * Gets the rubricQualityFeedback property value. A collection of specific feedback for each quality of this rubric.
     * @return array<RubricQualityFeedbackModel>|null
    */
    public function getRubricQualityFeedback(): ?array {
        return $this->rubricQualityFeedback;
    }

    /**
     * Gets the rubricQualitySelectedLevels property value. The level that the teacher has selected for each quality while grading this assignment.
     * @return array<RubricQualitySelectedColumnModel>|null
    */
    public function getRubricQualitySelectedLevels(): ?array {
        return $this->rubricQualitySelectedLevels;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('publishedRubricQualityFeedback', $this->publishedRubricQualityFeedback);
        $writer->writeCollectionOfObjectValues('publishedRubricQualitySelectedLevels', $this->publishedRubricQualitySelectedLevels);
        $writer->writeCollectionOfObjectValues('rubricQualityFeedback', $this->rubricQualityFeedback);
        $writer->writeCollectionOfObjectValues('rubricQualitySelectedLevels', $this->rubricQualitySelectedLevels);
    }

    /**
     * Sets the publishedRubricQualityFeedback property value. A copy of the rubricQualityFeedback property that is made when the grade is released to the student.
     *  @param array<RubricQualityFeedbackModel>|null $value Value to set for the publishedRubricQualityFeedback property.
    */
    public function setPublishedRubricQualityFeedback(?array $value ): void {
        $this->publishedRubricQualityFeedback = $value;
    }

    /**
     * Sets the publishedRubricQualitySelectedLevels property value. A copy of the rubricQualitySelectedLevels property that is made when the grade is released to the student.
     *  @param array<RubricQualitySelectedColumnModel>|null $value Value to set for the publishedRubricQualitySelectedLevels property.
    */
    public function setPublishedRubricQualitySelectedLevels(?array $value ): void {
        $this->publishedRubricQualitySelectedLevels = $value;
    }

    /**
     * Sets the rubricQualityFeedback property value. A collection of specific feedback for each quality of this rubric.
     *  @param array<RubricQualityFeedbackModel>|null $value Value to set for the rubricQualityFeedback property.
    */
    public function setRubricQualityFeedback(?array $value ): void {
        $this->rubricQualityFeedback = $value;
    }

    /**
     * Sets the rubricQualitySelectedLevels property value. The level that the teacher has selected for each quality while grading this assignment.
     *  @param array<RubricQualitySelectedColumnModel>|null $value Value to set for the rubricQualitySelectedLevels property.
    */
    public function setRubricQualitySelectedLevels(?array $value ): void {
        $this->rubricQualitySelectedLevels = $value;
    }

}
