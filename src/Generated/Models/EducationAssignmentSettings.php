<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'submissionAnimationDisabled' => fn(ParseNode $n) => $o->setSubmissionAnimationDisabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the submissionAnimationDisabled property value. Indicates whether turn-in celebration animation will be shown. A value of true indicates that the animation will not be shown. Default value is false.
     * @return bool|null
    */
    public function getSubmissionAnimationDisabled(): ?bool {
        return $this->getBackingStore()->get('submissionAnimationDisabled');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('submissionAnimationDisabled', $this->getSubmissionAnimationDisabled());
    }

    /**
     * Sets the submissionAnimationDisabled property value. Indicates whether turn-in celebration animation will be shown. A value of true indicates that the animation will not be shown. Default value is false.
     *  @param bool|null $value Value to set for the submissionAnimationDisabled property.
    */
    public function setSubmissionAnimationDisabled(?bool $value): void {
        $this->getBackingStore()->set('submissionAnimationDisabled', $value);
    }

}
