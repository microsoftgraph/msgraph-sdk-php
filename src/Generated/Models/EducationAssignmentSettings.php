<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EducationAssignmentSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new EducationAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationAssignmentSettings {
        return new EducationAssignmentSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'gradingCategories' => fn(ParseNode $n) => $o->setGradingCategories($n->getCollectionOfObjectValues([EducationGradingCategory::class, 'createFromDiscriminatorValue'])),
            'submissionAnimationDisabled' => fn(ParseNode $n) => $o->setSubmissionAnimationDisabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the gradingCategories property value. When set, enables users to weight assignments differently when computing a class average grade.
     * @return array<EducationGradingCategory>|null
    */
    public function getGradingCategories(): ?array {
        $val = $this->getBackingStore()->get('gradingCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationGradingCategory::class);
            /** @var array<EducationGradingCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gradingCategories'");
    }

    /**
     * Gets the submissionAnimationDisabled property value. Indicates whether to show the turn-in celebration animation. If true, indicates to skip the animation. The default value is false.
     * @return bool|null
    */
    public function getSubmissionAnimationDisabled(): ?bool {
        $val = $this->getBackingStore()->get('submissionAnimationDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'submissionAnimationDisabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('gradingCategories', $this->getGradingCategories());
        $writer->writeBooleanValue('submissionAnimationDisabled', $this->getSubmissionAnimationDisabled());
    }

    /**
     * Sets the gradingCategories property value. When set, enables users to weight assignments differently when computing a class average grade.
     * @param array<EducationGradingCategory>|null $value Value to set for the gradingCategories property.
    */
    public function setGradingCategories(?array $value): void {
        $this->getBackingStore()->set('gradingCategories', $value);
    }

    /**
     * Sets the submissionAnimationDisabled property value. Indicates whether to show the turn-in celebration animation. If true, indicates to skip the animation. The default value is false.
     * @param bool|null $value Value to set for the submissionAnimationDisabled property.
    */
    public function setSubmissionAnimationDisabled(?bool $value): void {
        $this->getBackingStore()->set('submissionAnimationDisabled', $value);
    }

}
