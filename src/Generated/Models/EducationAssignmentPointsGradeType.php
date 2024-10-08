<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationAssignmentPointsGradeType extends EducationAssignmentGradeType implements Parsable 
{
    /**
     * Instantiates a new EducationAssignmentPointsGradeType and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationAssignmentPointsGradeType');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationAssignmentPointsGradeType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationAssignmentPointsGradeType {
        return new EducationAssignmentPointsGradeType();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'maxPoints' => fn(ParseNode $n) => $o->setMaxPoints($n->getObjectValue([EducationAssignmentPointsGradeType_maxPoints::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the maxPoints property value. Max points possible for this assignment.
     * @return EducationAssignmentPointsGradeType_maxPoints|null
    */
    public function getMaxPoints(): ?EducationAssignmentPointsGradeType_maxPoints {
        $val = $this->getBackingStore()->get('maxPoints');
        if (is_null($val) || $val instanceof EducationAssignmentPointsGradeType_maxPoints) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxPoints'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('maxPoints', $this->getMaxPoints());
    }

    /**
     * Sets the maxPoints property value. Max points possible for this assignment.
     * @param EducationAssignmentPointsGradeType_maxPoints|null $value Value to set for the maxPoints property.
    */
    public function setMaxPoints(?EducationAssignmentPointsGradeType_maxPoints $value): void {
        $this->getBackingStore()->set('maxPoints', $value);
    }

}
