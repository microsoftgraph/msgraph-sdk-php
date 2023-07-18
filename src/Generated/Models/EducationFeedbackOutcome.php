<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationFeedbackOutcome extends EducationOutcome implements Parsable 
{
    /**
     * Instantiates a new educationFeedbackOutcome and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationFeedbackOutcome');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationFeedbackOutcome
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationFeedbackOutcome {
        return new EducationFeedbackOutcome();
    }

    /**
     * Gets the feedback property value. Teacher's written feedback to the student.
     * @return EducationFeedback|null
    */
    public function getFeedback(): ?EducationFeedback {
        $val = $this->getBackingStore()->get('feedback');
        if (is_null($val) || $val instanceof EducationFeedback) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'feedback'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'feedback' => fn(ParseNode $n) => $o->setFeedback($n->getObjectValue([EducationFeedback::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'publishedFeedback' => fn(ParseNode $n) => $o->setPublishedFeedback($n->getObjectValue([EducationFeedback::class, 'createFromDiscriminatorValue'])),
        ]);
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
     * Gets the publishedFeedback property value. A copy of the feedback property that is made when the grade is released to the student.
     * @return EducationFeedback|null
    */
    public function getPublishedFeedback(): ?EducationFeedback {
        $val = $this->getBackingStore()->get('publishedFeedback');
        if (is_null($val) || $val instanceof EducationFeedback) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishedFeedback'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('feedback', $this->getFeedback());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('publishedFeedback', $this->getPublishedFeedback());
    }

    /**
     * Sets the feedback property value. Teacher's written feedback to the student.
     * @param EducationFeedback|null $value Value to set for the feedback property.
    */
    public function setFeedback(?EducationFeedback $value): void {
        $this->getBackingStore()->set('feedback', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the publishedFeedback property value. A copy of the feedback property that is made when the grade is released to the student.
     * @param EducationFeedback|null $value Value to set for the publishedFeedback property.
    */
    public function setPublishedFeedback(?EducationFeedback $value): void {
        $this->getBackingStore()->set('publishedFeedback', $value);
    }

}
