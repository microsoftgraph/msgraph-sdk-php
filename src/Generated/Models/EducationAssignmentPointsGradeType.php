<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationAssignmentPointsGradeType extends EducationAssignmentGradeType implements Parsable 
{
    /**
     * Instantiates a new educationAssignmentPointsGradeType and sets the default values.
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
            'maxPoints' => fn(ParseNode $n) => $o->setMaxPoints($n->getFloatValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the maxPoints property value. Max points possible for this assignment.
     * @return float|null
    */
    public function getMaxPoints(): ?float {
        $val = $this->getBackingStore()->get('maxPoints');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxPoints'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('maxPoints', $this->getMaxPoints());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the maxPoints property value. Max points possible for this assignment.
     * @param float|null $value Value to set for the maxPoints property.
    */
    public function setMaxPoints(?float $value): void {
        $this->getBackingStore()->set('maxPoints', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
