<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LearningCourseActivity extends Entity implements Parsable 
{
    /**
     * Instantiates a new LearningCourseActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LearningCourseActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LearningCourseActivity {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.learningAssignment': return new LearningAssignment();
                case '#microsoft.graph.learningSelfInitiatedCourse': return new LearningSelfInitiatedCourse();
            }
        }
        return new LearningCourseActivity();
    }

    /**
     * Gets the completedDateTime property value. Date and time when the assignment was completed. Optional.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * Gets the completionPercentage property value. The percentage completion value of the course activity. Optional.
     * @return int|null
    */
    public function getCompletionPercentage(): ?int {
        $val = $this->getBackingStore()->get('completionPercentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completionPercentage'");
    }

    /**
     * Gets the externalcourseActivityId property value. The externalcourseActivityId property
     * @return string|null
    */
    public function getExternalcourseActivityId(): ?string {
        $val = $this->getBackingStore()->get('externalcourseActivityId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalcourseActivityId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'completionPercentage' => fn(ParseNode $n) => $o->setCompletionPercentage($n->getIntegerValue()),
            'externalcourseActivityId' => fn(ParseNode $n) => $o->setExternalcourseActivityId($n->getStringValue()),
            'learnerUserId' => fn(ParseNode $n) => $o->setLearnerUserId($n->getStringValue()),
            'learningContentId' => fn(ParseNode $n) => $o->setLearningContentId($n->getStringValue()),
            'learningProviderId' => fn(ParseNode $n) => $o->setLearningProviderId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CourseStatus::class)),
        ]);
    }

    /**
     * Gets the learnerUserId property value. The user ID of the learner to whom the activity is assigned. Required.
     * @return string|null
    */
    public function getLearnerUserId(): ?string {
        $val = $this->getBackingStore()->get('learnerUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'learnerUserId'");
    }

    /**
     * Gets the learningContentId property value. The ID of the learning content created in Viva Learning. Required.
     * @return string|null
    */
    public function getLearningContentId(): ?string {
        $val = $this->getBackingStore()->get('learningContentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'learningContentId'");
    }

    /**
     * Gets the learningProviderId property value. The registration ID of the provider. Required.
     * @return string|null
    */
    public function getLearningProviderId(): ?string {
        $val = $this->getBackingStore()->get('learningProviderId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'learningProviderId'");
    }

    /**
     * Gets the status property value. The status of the course activity. The possible values are: notStarted, inProgress, completed. Required.
     * @return CourseStatus|null
    */
    public function getStatus(): ?CourseStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CourseStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeIntegerValue('completionPercentage', $this->getCompletionPercentage());
        $writer->writeStringValue('externalcourseActivityId', $this->getExternalcourseActivityId());
        $writer->writeStringValue('learnerUserId', $this->getLearnerUserId());
        $writer->writeStringValue('learningContentId', $this->getLearningContentId());
        $writer->writeStringValue('learningProviderId', $this->getLearningProviderId());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the completedDateTime property value. Date and time when the assignment was completed. Optional.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the completionPercentage property value. The percentage completion value of the course activity. Optional.
     * @param int|null $value Value to set for the completionPercentage property.
    */
    public function setCompletionPercentage(?int $value): void {
        $this->getBackingStore()->set('completionPercentage', $value);
    }

    /**
     * Sets the externalcourseActivityId property value. The externalcourseActivityId property
     * @param string|null $value Value to set for the externalcourseActivityId property.
    */
    public function setExternalcourseActivityId(?string $value): void {
        $this->getBackingStore()->set('externalcourseActivityId', $value);
    }

    /**
     * Sets the learnerUserId property value. The user ID of the learner to whom the activity is assigned. Required.
     * @param string|null $value Value to set for the learnerUserId property.
    */
    public function setLearnerUserId(?string $value): void {
        $this->getBackingStore()->set('learnerUserId', $value);
    }

    /**
     * Sets the learningContentId property value. The ID of the learning content created in Viva Learning. Required.
     * @param string|null $value Value to set for the learningContentId property.
    */
    public function setLearningContentId(?string $value): void {
        $this->getBackingStore()->set('learningContentId', $value);
    }

    /**
     * Sets the learningProviderId property value. The registration ID of the provider. Required.
     * @param string|null $value Value to set for the learningProviderId property.
    */
    public function setLearningProviderId(?string $value): void {
        $this->getBackingStore()->set('learningProviderId', $value);
    }

    /**
     * Sets the status property value. The status of the course activity. The possible values are: notStarted, inProgress, completed. Required.
     * @param CourseStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CourseStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
