<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EducationGradingScheme extends Entity implements Parsable 
{
    /**
     * Instantiates a new EducationGradingScheme and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationGradingScheme
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationGradingScheme {
        return new EducationGradingScheme();
    }

    /**
     * Gets the displayName property value. The name of the grading scheme.
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
            'grades' => fn(ParseNode $n) => $o->setGrades($n->getCollectionOfObjectValues([EducationGradingSchemeGrade::class, 'createFromDiscriminatorValue'])),
            'hidePointsDuringGrading' => fn(ParseNode $n) => $o->setHidePointsDuringGrading($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the grades property value. The grades that make up the scheme.
     * @return array<EducationGradingSchemeGrade>|null
    */
    public function getGrades(): ?array {
        $val = $this->getBackingStore()->get('grades');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationGradingSchemeGrade::class);
            /** @var array<EducationGradingSchemeGrade>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'grades'");
    }

    /**
     * Gets the hidePointsDuringGrading property value. The display setting for the UI. Indicates whether teachers can grade with points in addition to letter grades.
     * @return bool|null
    */
    public function getHidePointsDuringGrading(): ?bool {
        $val = $this->getBackingStore()->get('hidePointsDuringGrading');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hidePointsDuringGrading'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('grades', $this->getGrades());
        $writer->writeBooleanValue('hidePointsDuringGrading', $this->getHidePointsDuringGrading());
    }

    /**
     * Sets the displayName property value. The name of the grading scheme.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the grades property value. The grades that make up the scheme.
     * @param array<EducationGradingSchemeGrade>|null $value Value to set for the grades property.
    */
    public function setGrades(?array $value): void {
        $this->getBackingStore()->set('grades', $value);
    }

    /**
     * Sets the hidePointsDuringGrading property value. The display setting for the UI. Indicates whether teachers can grade with points in addition to letter grades.
     * @param bool|null $value Value to set for the hidePointsDuringGrading property.
    */
    public function setHidePointsDuringGrading(?bool $value): void {
        $this->getBackingStore()->set('hidePointsDuringGrading', $value);
    }

}
