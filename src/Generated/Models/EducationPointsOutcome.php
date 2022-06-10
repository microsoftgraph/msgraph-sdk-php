<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationPointsOutcome extends EducationOutcome implements Parsable 
{
    /**
     * @var EducationAssignmentPointsGrade|null $points The numeric grade the teacher has given the student for this assignment.
    */
    private ?EducationAssignmentPointsGrade $points = null;
    
    /**
     * @var EducationAssignmentPointsGrade|null $publishedPoints A copy of the points property that is made when the grade is released to the student.
    */
    private ?EducationAssignmentPointsGrade $publishedPoints = null;
    
    /**
     * Instantiates a new EducationPointsOutcome and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationPointsOutcome
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationPointsOutcome {
        return new EducationPointsOutcome();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'points' => function (ParseNode $n) use ($o) { $o->setPoints($n->getObjectValue(array(EducationAssignmentPointsGrade::class, 'createFromDiscriminatorValue'))); },
            'publishedPoints' => function (ParseNode $n) use ($o) { $o->setPublishedPoints($n->getObjectValue(array(EducationAssignmentPointsGrade::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the points property value. The numeric grade the teacher has given the student for this assignment.
     * @return EducationAssignmentPointsGrade|null
    */
    public function getPoints(): ?EducationAssignmentPointsGrade {
        return $this->points;
    }

    /**
     * Gets the publishedPoints property value. A copy of the points property that is made when the grade is released to the student.
     * @return EducationAssignmentPointsGrade|null
    */
    public function getPublishedPoints(): ?EducationAssignmentPointsGrade {
        return $this->publishedPoints;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('points', $this->points);
        $writer->writeObjectValue('publishedPoints', $this->publishedPoints);
    }

    /**
     * Sets the points property value. The numeric grade the teacher has given the student for this assignment.
     *  @param EducationAssignmentPointsGrade|null $value Value to set for the points property.
    */
    public function setPoints(?EducationAssignmentPointsGrade $value ): void {
        $this->points = $value;
    }

    /**
     * Sets the publishedPoints property value. A copy of the points property that is made when the grade is released to the student.
     *  @param EducationAssignmentPointsGrade|null $value Value to set for the publishedPoints property.
    */
    public function setPublishedPoints(?EducationAssignmentPointsGrade $value ): void {
        $this->publishedPoints = $value;
    }

}
