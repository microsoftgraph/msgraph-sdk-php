<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationGradingCategory extends Entity implements Parsable 
{
    /**
     * Instantiates a new educationGradingCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationGradingCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationGradingCategory {
        return new EducationGradingCategory();
    }

    /**
     * Gets the displayName property value. The name of the grading category.
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
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'percentageWeight' => fn(ParseNode $n) => $o->setPercentageWeight($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the percentageWeight property value. The weight of the category; an integer between 0 and 100.
     * @return int|null
    */
    public function getPercentageWeight(): ?int {
        $val = $this->getBackingStore()->get('percentageWeight');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'percentageWeight'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('percentageWeight', $this->getPercentageWeight());
    }

    /**
     * Sets the displayName property value. The name of the grading category.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the percentageWeight property value. The weight of the category; an integer between 0 and 100.
     * @param int|null $value Value to set for the percentageWeight property.
    */
    public function setPercentageWeight(?int $value): void {
        $this->getBackingStore()->set('percentageWeight', $value);
    }

}
