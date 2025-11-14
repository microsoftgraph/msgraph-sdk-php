<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SpeakerAssignmentSubmission extends Entity implements Parsable 
{
    /**
     * Instantiates a new SpeakerAssignmentSubmission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SpeakerAssignmentSubmission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SpeakerAssignmentSubmission {
        return new SpeakerAssignmentSubmission();
    }

    /**
     * Gets the assignmentId property value. ID of the assignment with which this submission is associated.
     * @return string|null
    */
    public function getAssignmentId(): ?string {
        $val = $this->getBackingStore()->get('assignmentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentId'");
    }

    /**
     * Gets the averageWordsPerMinutePace property value. The average speaking pace of the student, measured in words per minute.
     * @return int|null
    */
    public function getAverageWordsPerMinutePace(): ?int {
        $val = $this->getBackingStore()->get('averageWordsPerMinutePace');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageWordsPerMinutePace'");
    }

    /**
     * Gets the classId property value. ID of the class this speaker progress is associated with.
     * @return string|null
    */
    public function getClassId(): ?string {
        $val = $this->getBackingStore()->get('classId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentId' => fn(ParseNode $n) => $o->setAssignmentId($n->getStringValue()),
            'averageWordsPerMinutePace' => fn(ParseNode $n) => $o->setAverageWordsPerMinutePace($n->getIntegerValue()),
            'classId' => fn(ParseNode $n) => $o->setClassId($n->getStringValue()),
            'fillerWordsOccurrencesCount' => fn(ParseNode $n) => $o->setFillerWordsOccurrencesCount($n->getIntegerValue()),
            'incorrectCameraDistanceOccurrencesCount' => fn(ParseNode $n) => $o->setIncorrectCameraDistanceOccurrencesCount($n->getIntegerValue()),
            'lengthOfSubmissionInSeconds' => fn(ParseNode $n) => $o->setLengthOfSubmissionInSeconds($n->getFloatValue()),
            'lostEyeContactOccurrencesCount' => fn(ParseNode $n) => $o->setLostEyeContactOccurrencesCount($n->getIntegerValue()),
            'monotoneOccurrencesCount' => fn(ParseNode $n) => $o->setMonotoneOccurrencesCount($n->getIntegerValue()),
            'nonInclusiveLanguageOccurrencesCount' => fn(ParseNode $n) => $o->setNonInclusiveLanguageOccurrencesCount($n->getIntegerValue()),
            'obstructedViewOccurrencesCount' => fn(ParseNode $n) => $o->setObstructedViewOccurrencesCount($n->getIntegerValue()),
            'repetitiveLanguageOccurrencesCount' => fn(ParseNode $n) => $o->setRepetitiveLanguageOccurrencesCount($n->getIntegerValue()),
            'studentId' => fn(ParseNode $n) => $o->setStudentId($n->getStringValue()),
            'submissionDateTime' => fn(ParseNode $n) => $o->setSubmissionDateTime($n->getDateTimeValue()),
            'submissionId' => fn(ParseNode $n) => $o->setSubmissionId($n->getStringValue()),
            'topFillerWords' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTopFillerWords($val);
            },
            'topMispronouncedWords' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTopMispronouncedWords($val);
            },
            'topNonInclusiveWordsAndPhrases' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTopNonInclusiveWordsAndPhrases($val);
            },
            'topRepetitiveWordsAndPhrases' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTopRepetitiveWordsAndPhrases($val);
            },
            'wordsSpokenCount' => fn(ParseNode $n) => $o->setWordsSpokenCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the fillerWordsOccurrencesCount property value. The number of times the student was flagged by Speaker Coach for using a filler word.
     * @return int|null
    */
    public function getFillerWordsOccurrencesCount(): ?int {
        $val = $this->getBackingStore()->get('fillerWordsOccurrencesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fillerWordsOccurrencesCount'");
    }

    /**
     * Gets the incorrectCameraDistanceOccurrencesCount property value. The number of times the student was flagged by Speaker Coach for being either too close or too far away from the camera.
     * @return int|null
    */
    public function getIncorrectCameraDistanceOccurrencesCount(): ?int {
        $val = $this->getBackingStore()->get('incorrectCameraDistanceOccurrencesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incorrectCameraDistanceOccurrencesCount'");
    }

    /**
     * Gets the lengthOfSubmissionInSeconds property value. The length of the student submission in seconds.
     * @return float|null
    */
    public function getLengthOfSubmissionInSeconds(): ?float {
        $val = $this->getBackingStore()->get('lengthOfSubmissionInSeconds');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lengthOfSubmissionInSeconds'");
    }

    /**
     * Gets the lostEyeContactOccurrencesCount property value. The number of times the student was flagged by Speaker Coach for losing eye contact with the camera.
     * @return int|null
    */
    public function getLostEyeContactOccurrencesCount(): ?int {
        $val = $this->getBackingStore()->get('lostEyeContactOccurrencesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lostEyeContactOccurrencesCount'");
    }

    /**
     * Gets the monotoneOccurrencesCount property value. The number of times the student was flagged by Speaker Coach for speaking in monotone.
     * @return int|null
    */
    public function getMonotoneOccurrencesCount(): ?int {
        $val = $this->getBackingStore()->get('monotoneOccurrencesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'monotoneOccurrencesCount'");
    }

    /**
     * Gets the nonInclusiveLanguageOccurrencesCount property value. The number of times the student was flagged by Speaker Coach for using non-inclusive or sensitive language.
     * @return int|null
    */
    public function getNonInclusiveLanguageOccurrencesCount(): ?int {
        $val = $this->getBackingStore()->get('nonInclusiveLanguageOccurrencesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nonInclusiveLanguageOccurrencesCount'");
    }

    /**
     * Gets the obstructedViewOccurrencesCount property value. The number of times the student was flagged by Speaker Coach for obstructing the view of their face.
     * @return int|null
    */
    public function getObstructedViewOccurrencesCount(): ?int {
        $val = $this->getBackingStore()->get('obstructedViewOccurrencesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'obstructedViewOccurrencesCount'");
    }

    /**
     * Gets the repetitiveLanguageOccurrencesCount property value. The number of times the student was flagged by Speaker Coach for using repetitive language.
     * @return int|null
    */
    public function getRepetitiveLanguageOccurrencesCount(): ?int {
        $val = $this->getBackingStore()->get('repetitiveLanguageOccurrencesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'repetitiveLanguageOccurrencesCount'");
    }

    /**
     * Gets the studentId property value. ID of the user this speaker progress is associated with.
     * @return string|null
    */
    public function getStudentId(): ?string {
        $val = $this->getBackingStore()->get('studentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'studentId'");
    }

    /**
     * Gets the submissionDateTime property value. Date and time of the submission this speaker progress is associated with. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getSubmissionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('submissionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'submissionDateTime'");
    }

    /**
     * Gets the submissionId property value. ID of the submission this speaker progress is associated with.
     * @return string|null
    */
    public function getSubmissionId(): ?string {
        $val = $this->getBackingStore()->get('submissionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'submissionId'");
    }

    /**
     * Gets the topFillerWords property value. The filler words used most by the student.
     * @return array<string>|null
    */
    public function getTopFillerWords(): ?array {
        $val = $this->getBackingStore()->get('topFillerWords');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'topFillerWords'");
    }

    /**
     * Gets the topMispronouncedWords property value. The words mispronounced most by the student.
     * @return array<string>|null
    */
    public function getTopMispronouncedWords(): ?array {
        $val = $this->getBackingStore()->get('topMispronouncedWords');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'topMispronouncedWords'");
    }

    /**
     * Gets the topNonInclusiveWordsAndPhrases property value. The non-inclusive or sensitive words and phrases most used by the student.
     * @return array<string>|null
    */
    public function getTopNonInclusiveWordsAndPhrases(): ?array {
        $val = $this->getBackingStore()->get('topNonInclusiveWordsAndPhrases');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'topNonInclusiveWordsAndPhrases'");
    }

    /**
     * Gets the topRepetitiveWordsAndPhrases property value. The words and phrases most repeated by the student.
     * @return array<string>|null
    */
    public function getTopRepetitiveWordsAndPhrases(): ?array {
        $val = $this->getBackingStore()->get('topRepetitiveWordsAndPhrases');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'topRepetitiveWordsAndPhrases'");
    }

    /**
     * Gets the wordsSpokenCount property value. Total number of words spoken by the student in the submission.
     * @return int|null
    */
    public function getWordsSpokenCount(): ?int {
        $val = $this->getBackingStore()->get('wordsSpokenCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wordsSpokenCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignmentId', $this->getAssignmentId());
        $writer->writeIntegerValue('averageWordsPerMinutePace', $this->getAverageWordsPerMinutePace());
        $writer->writeStringValue('classId', $this->getClassId());
        $writer->writeIntegerValue('fillerWordsOccurrencesCount', $this->getFillerWordsOccurrencesCount());
        $writer->writeIntegerValue('incorrectCameraDistanceOccurrencesCount', $this->getIncorrectCameraDistanceOccurrencesCount());
        $writer->writeFloatValue('lengthOfSubmissionInSeconds', $this->getLengthOfSubmissionInSeconds());
        $writer->writeIntegerValue('lostEyeContactOccurrencesCount', $this->getLostEyeContactOccurrencesCount());
        $writer->writeIntegerValue('monotoneOccurrencesCount', $this->getMonotoneOccurrencesCount());
        $writer->writeIntegerValue('nonInclusiveLanguageOccurrencesCount', $this->getNonInclusiveLanguageOccurrencesCount());
        $writer->writeIntegerValue('obstructedViewOccurrencesCount', $this->getObstructedViewOccurrencesCount());
        $writer->writeIntegerValue('repetitiveLanguageOccurrencesCount', $this->getRepetitiveLanguageOccurrencesCount());
        $writer->writeStringValue('studentId', $this->getStudentId());
        $writer->writeDateTimeValue('submissionDateTime', $this->getSubmissionDateTime());
        $writer->writeStringValue('submissionId', $this->getSubmissionId());
        $writer->writeCollectionOfPrimitiveValues('topFillerWords', $this->getTopFillerWords());
        $writer->writeCollectionOfPrimitiveValues('topMispronouncedWords', $this->getTopMispronouncedWords());
        $writer->writeCollectionOfPrimitiveValues('topNonInclusiveWordsAndPhrases', $this->getTopNonInclusiveWordsAndPhrases());
        $writer->writeCollectionOfPrimitiveValues('topRepetitiveWordsAndPhrases', $this->getTopRepetitiveWordsAndPhrases());
        $writer->writeIntegerValue('wordsSpokenCount', $this->getWordsSpokenCount());
    }

    /**
     * Sets the assignmentId property value. ID of the assignment with which this submission is associated.
     * @param string|null $value Value to set for the assignmentId property.
    */
    public function setAssignmentId(?string $value): void {
        $this->getBackingStore()->set('assignmentId', $value);
    }

    /**
     * Sets the averageWordsPerMinutePace property value. The average speaking pace of the student, measured in words per minute.
     * @param int|null $value Value to set for the averageWordsPerMinutePace property.
    */
    public function setAverageWordsPerMinutePace(?int $value): void {
        $this->getBackingStore()->set('averageWordsPerMinutePace', $value);
    }

    /**
     * Sets the classId property value. ID of the class this speaker progress is associated with.
     * @param string|null $value Value to set for the classId property.
    */
    public function setClassId(?string $value): void {
        $this->getBackingStore()->set('classId', $value);
    }

    /**
     * Sets the fillerWordsOccurrencesCount property value. The number of times the student was flagged by Speaker Coach for using a filler word.
     * @param int|null $value Value to set for the fillerWordsOccurrencesCount property.
    */
    public function setFillerWordsOccurrencesCount(?int $value): void {
        $this->getBackingStore()->set('fillerWordsOccurrencesCount', $value);
    }

    /**
     * Sets the incorrectCameraDistanceOccurrencesCount property value. The number of times the student was flagged by Speaker Coach for being either too close or too far away from the camera.
     * @param int|null $value Value to set for the incorrectCameraDistanceOccurrencesCount property.
    */
    public function setIncorrectCameraDistanceOccurrencesCount(?int $value): void {
        $this->getBackingStore()->set('incorrectCameraDistanceOccurrencesCount', $value);
    }

    /**
     * Sets the lengthOfSubmissionInSeconds property value. The length of the student submission in seconds.
     * @param float|null $value Value to set for the lengthOfSubmissionInSeconds property.
    */
    public function setLengthOfSubmissionInSeconds(?float $value): void {
        $this->getBackingStore()->set('lengthOfSubmissionInSeconds', $value);
    }

    /**
     * Sets the lostEyeContactOccurrencesCount property value. The number of times the student was flagged by Speaker Coach for losing eye contact with the camera.
     * @param int|null $value Value to set for the lostEyeContactOccurrencesCount property.
    */
    public function setLostEyeContactOccurrencesCount(?int $value): void {
        $this->getBackingStore()->set('lostEyeContactOccurrencesCount', $value);
    }

    /**
     * Sets the monotoneOccurrencesCount property value. The number of times the student was flagged by Speaker Coach for speaking in monotone.
     * @param int|null $value Value to set for the monotoneOccurrencesCount property.
    */
    public function setMonotoneOccurrencesCount(?int $value): void {
        $this->getBackingStore()->set('monotoneOccurrencesCount', $value);
    }

    /**
     * Sets the nonInclusiveLanguageOccurrencesCount property value. The number of times the student was flagged by Speaker Coach for using non-inclusive or sensitive language.
     * @param int|null $value Value to set for the nonInclusiveLanguageOccurrencesCount property.
    */
    public function setNonInclusiveLanguageOccurrencesCount(?int $value): void {
        $this->getBackingStore()->set('nonInclusiveLanguageOccurrencesCount', $value);
    }

    /**
     * Sets the obstructedViewOccurrencesCount property value. The number of times the student was flagged by Speaker Coach for obstructing the view of their face.
     * @param int|null $value Value to set for the obstructedViewOccurrencesCount property.
    */
    public function setObstructedViewOccurrencesCount(?int $value): void {
        $this->getBackingStore()->set('obstructedViewOccurrencesCount', $value);
    }

    /**
     * Sets the repetitiveLanguageOccurrencesCount property value. The number of times the student was flagged by Speaker Coach for using repetitive language.
     * @param int|null $value Value to set for the repetitiveLanguageOccurrencesCount property.
    */
    public function setRepetitiveLanguageOccurrencesCount(?int $value): void {
        $this->getBackingStore()->set('repetitiveLanguageOccurrencesCount', $value);
    }

    /**
     * Sets the studentId property value. ID of the user this speaker progress is associated with.
     * @param string|null $value Value to set for the studentId property.
    */
    public function setStudentId(?string $value): void {
        $this->getBackingStore()->set('studentId', $value);
    }

    /**
     * Sets the submissionDateTime property value. Date and time of the submission this speaker progress is associated with. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the submissionDateTime property.
    */
    public function setSubmissionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('submissionDateTime', $value);
    }

    /**
     * Sets the submissionId property value. ID of the submission this speaker progress is associated with.
     * @param string|null $value Value to set for the submissionId property.
    */
    public function setSubmissionId(?string $value): void {
        $this->getBackingStore()->set('submissionId', $value);
    }

    /**
     * Sets the topFillerWords property value. The filler words used most by the student.
     * @param array<string>|null $value Value to set for the topFillerWords property.
    */
    public function setTopFillerWords(?array $value): void {
        $this->getBackingStore()->set('topFillerWords', $value);
    }

    /**
     * Sets the topMispronouncedWords property value. The words mispronounced most by the student.
     * @param array<string>|null $value Value to set for the topMispronouncedWords property.
    */
    public function setTopMispronouncedWords(?array $value): void {
        $this->getBackingStore()->set('topMispronouncedWords', $value);
    }

    /**
     * Sets the topNonInclusiveWordsAndPhrases property value. The non-inclusive or sensitive words and phrases most used by the student.
     * @param array<string>|null $value Value to set for the topNonInclusiveWordsAndPhrases property.
    */
    public function setTopNonInclusiveWordsAndPhrases(?array $value): void {
        $this->getBackingStore()->set('topNonInclusiveWordsAndPhrases', $value);
    }

    /**
     * Sets the topRepetitiveWordsAndPhrases property value. The words and phrases most repeated by the student.
     * @param array<string>|null $value Value to set for the topRepetitiveWordsAndPhrases property.
    */
    public function setTopRepetitiveWordsAndPhrases(?array $value): void {
        $this->getBackingStore()->set('topRepetitiveWordsAndPhrases', $value);
    }

    /**
     * Sets the wordsSpokenCount property value. Total number of words spoken by the student in the submission.
     * @param int|null $value Value to set for the wordsSpokenCount property.
    */
    public function setWordsSpokenCount(?int $value): void {
        $this->getBackingStore()->set('wordsSpokenCount', $value);
    }

}
