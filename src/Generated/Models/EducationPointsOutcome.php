<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationPointsOutcome extends EducationOutcome implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new educationPointsOutcome and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationPointsOutcome');
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'points' => fn(ParseNode $n) => $o->setPoints($n->getObjectValue([EducationAssignmentPointsGrade::class, 'createFromDiscriminatorValue'])),
            'publishedPoints' => fn(ParseNode $n) => $o->setPublishedPoints($n->getObjectValue([EducationAssignmentPointsGrade::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the points property value. The numeric grade the teacher has given the student for this assignment.
     * @return EducationAssignmentPointsGrade|null
    */
    public function getPoints(): ?EducationAssignmentPointsGrade {
        $val = $this->getBackingStore()->get('points');
        if (is_null($val) || $val instanceof EducationAssignmentPointsGrade) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'points'");
    }

    /**
     * Gets the publishedPoints property value. A copy of the points property that is made when the grade is released to the student.
     * @return EducationAssignmentPointsGrade|null
    */
    public function getPublishedPoints(): ?EducationAssignmentPointsGrade {
        $val = $this->getBackingStore()->get('publishedPoints');
        if (is_null($val) || $val instanceof EducationAssignmentPointsGrade) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishedPoints'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('points', $this->getPoints());
        $writer->writeObjectValue('publishedPoints', $this->getPublishedPoints());
    }

    /**
     * Sets the points property value. The numeric grade the teacher has given the student for this assignment.
     * @param EducationAssignmentPointsGrade|null $value Value to set for the points property.
    */
    public function setPoints(?EducationAssignmentPointsGrade $value): void {
        $this->getBackingStore()->set('points', $value);
    }

    /**
     * Sets the publishedPoints property value. A copy of the points property that is made when the grade is released to the student.
     * @param EducationAssignmentPointsGrade|null $value Value to set for the publishedPoints property.
    */
    public function setPublishedPoints(?EducationAssignmentPointsGrade $value): void {
        $this->getBackingStore()->set('publishedPoints', $value);
    }

}
