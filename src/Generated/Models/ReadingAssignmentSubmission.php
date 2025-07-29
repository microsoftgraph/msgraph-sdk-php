<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ReadingAssignmentSubmission extends Entity implements Parsable 
{
    /**
     * Instantiates a new ReadingAssignmentSubmission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReadingAssignmentSubmission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReadingAssignmentSubmission {
        return new ReadingAssignmentSubmission();
    }

    /**
     * Gets the accuracyScore property value. Accuracy score of the reading progress.
     * @return float|null
    */
    public function getAccuracyScore(): ?float {
        $val = $this->getBackingStore()->get('accuracyScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accuracyScore'");
    }

    /**
     * Gets the action property value. Indicates whether the submission is an attempt by the student or a miscue edit done by the educator. The possible values are Attempt and EditMiscue.
     * @return string|null
    */
    public function getAction(): ?string {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
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
     * Gets the challengingWords property value. List of words that the student found challenging during the reading session.
     * @return array<ChallengingWord>|null
    */
    public function getChallengingWords(): ?array {
        $val = $this->getBackingStore()->get('challengingWords');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ChallengingWord::class);
            /** @var array<ChallengingWord>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'challengingWords'");
    }

    /**
     * Gets the classId property value. ID of the class this reading progress is associated with.
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
            'accuracyScore' => fn(ParseNode $n) => $o->setAccuracyScore($n->getFloatValue()),
            'action' => fn(ParseNode $n) => $o->setAction($n->getStringValue()),
            'assignmentId' => fn(ParseNode $n) => $o->setAssignmentId($n->getStringValue()),
            'challengingWords' => fn(ParseNode $n) => $o->setChallengingWords($n->getCollectionOfObjectValues([ChallengingWord::class, 'createFromDiscriminatorValue'])),
            'classId' => fn(ParseNode $n) => $o->setClassId($n->getStringValue()),
            'insertions' => fn(ParseNode $n) => $o->setInsertions($n->getIntegerValue()),
            'mispronunciations' => fn(ParseNode $n) => $o->setMispronunciations($n->getIntegerValue()),
            'missedExclamationMarks' => fn(ParseNode $n) => $o->setMissedExclamationMarks($n->getIntegerValue()),
            'missedPeriods' => fn(ParseNode $n) => $o->setMissedPeriods($n->getIntegerValue()),
            'missedQuestionMarks' => fn(ParseNode $n) => $o->setMissedQuestionMarks($n->getIntegerValue()),
            'missedShorts' => fn(ParseNode $n) => $o->setMissedShorts($n->getIntegerValue()),
            'monotoneScore' => fn(ParseNode $n) => $o->setMonotoneScore($n->getFloatValue()),
            'omissions' => fn(ParseNode $n) => $o->setOmissions($n->getIntegerValue()),
            'repetitions' => fn(ParseNode $n) => $o->setRepetitions($n->getIntegerValue()),
            'selfCorrections' => fn(ParseNode $n) => $o->setSelfCorrections($n->getIntegerValue()),
            'studentId' => fn(ParseNode $n) => $o->setStudentId($n->getStringValue()),
            'submissionDateTime' => fn(ParseNode $n) => $o->setSubmissionDateTime($n->getDateTimeValue()),
            'submissionId' => fn(ParseNode $n) => $o->setSubmissionId($n->getStringValue()),
            'unexpectedPauses' => fn(ParseNode $n) => $o->setUnexpectedPauses($n->getIntegerValue()),
            'wordCount' => fn(ParseNode $n) => $o->setWordCount($n->getIntegerValue()),
            'wordsPerMinute' => fn(ParseNode $n) => $o->setWordsPerMinute($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the insertions property value. Insertions of the reading progress.
     * @return int|null
    */
    public function getInsertions(): ?int {
        $val = $this->getBackingStore()->get('insertions');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'insertions'");
    }

    /**
     * Gets the mispronunciations property value. Mispronunciations of the reading progress.
     * @return int|null
    */
    public function getMispronunciations(): ?int {
        $val = $this->getBackingStore()->get('mispronunciations');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mispronunciations'");
    }

    /**
     * Gets the missedExclamationMarks property value. Number of exclamation marks missed in the reading passage.
     * @return int|null
    */
    public function getMissedExclamationMarks(): ?int {
        $val = $this->getBackingStore()->get('missedExclamationMarks');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'missedExclamationMarks'");
    }

    /**
     * Gets the missedPeriods property value. Number of periods missed in the reading passage.
     * @return int|null
    */
    public function getMissedPeriods(): ?int {
        $val = $this->getBackingStore()->get('missedPeriods');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'missedPeriods'");
    }

    /**
     * Gets the missedQuestionMarks property value. Number of question marks missed in the reading passage.
     * @return int|null
    */
    public function getMissedQuestionMarks(): ?int {
        $val = $this->getBackingStore()->get('missedQuestionMarks');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'missedQuestionMarks'");
    }

    /**
     * Gets the missedShorts property value. Number of short words missed during the reading session.
     * @return int|null
    */
    public function getMissedShorts(): ?int {
        $val = $this->getBackingStore()->get('missedShorts');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'missedShorts'");
    }

    /**
     * Gets the monotoneScore property value. Score that reflects the student's use of intonation and expression. Lower scores indicate more monotone reading.
     * @return float|null
    */
    public function getMonotoneScore(): ?float {
        $val = $this->getBackingStore()->get('monotoneScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'monotoneScore'");
    }

    /**
     * Gets the omissions property value. Omissions of the reading progress.
     * @return int|null
    */
    public function getOmissions(): ?int {
        $val = $this->getBackingStore()->get('omissions');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'omissions'");
    }

    /**
     * Gets the repetitions property value. Number of times the student repeated words or phrases during the reading session.
     * @return int|null
    */
    public function getRepetitions(): ?int {
        $val = $this->getBackingStore()->get('repetitions');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'repetitions'");
    }

    /**
     * Gets the selfCorrections property value. Number of times the student self-corrected their reading errors.
     * @return int|null
    */
    public function getSelfCorrections(): ?int {
        $val = $this->getBackingStore()->get('selfCorrections');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'selfCorrections'");
    }

    /**
     * Gets the studentId property value. ID of the user this reading progress is associated with.
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
     * Gets the submissionDateTime property value. Date and time of the submission this reading progress is associated with. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the submissionId property value. ID of the submission this reading progress is associated with.
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
     * Gets the unexpectedPauses property value. Number of unexpected pauses made during the reading session.
     * @return int|null
    */
    public function getUnexpectedPauses(): ?int {
        $val = $this->getBackingStore()->get('unexpectedPauses');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unexpectedPauses'");
    }

    /**
     * Gets the wordCount property value. Words count of the reading progress.
     * @return int|null
    */
    public function getWordCount(): ?int {
        $val = $this->getBackingStore()->get('wordCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wordCount'");
    }

    /**
     * Gets the wordsPerMinute property value. Words per minute of the reading progress.
     * @return float|null
    */
    public function getWordsPerMinute(): ?float {
        $val = $this->getBackingStore()->get('wordsPerMinute');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wordsPerMinute'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('accuracyScore', $this->getAccuracyScore());
        $writer->writeStringValue('action', $this->getAction());
        $writer->writeStringValue('assignmentId', $this->getAssignmentId());
        $writer->writeCollectionOfObjectValues('challengingWords', $this->getChallengingWords());
        $writer->writeStringValue('classId', $this->getClassId());
        $writer->writeIntegerValue('insertions', $this->getInsertions());
        $writer->writeIntegerValue('mispronunciations', $this->getMispronunciations());
        $writer->writeIntegerValue('missedExclamationMarks', $this->getMissedExclamationMarks());
        $writer->writeIntegerValue('missedPeriods', $this->getMissedPeriods());
        $writer->writeIntegerValue('missedQuestionMarks', $this->getMissedQuestionMarks());
        $writer->writeIntegerValue('missedShorts', $this->getMissedShorts());
        $writer->writeFloatValue('monotoneScore', $this->getMonotoneScore());
        $writer->writeIntegerValue('omissions', $this->getOmissions());
        $writer->writeIntegerValue('repetitions', $this->getRepetitions());
        $writer->writeIntegerValue('selfCorrections', $this->getSelfCorrections());
        $writer->writeStringValue('studentId', $this->getStudentId());
        $writer->writeDateTimeValue('submissionDateTime', $this->getSubmissionDateTime());
        $writer->writeStringValue('submissionId', $this->getSubmissionId());
        $writer->writeIntegerValue('unexpectedPauses', $this->getUnexpectedPauses());
        $writer->writeIntegerValue('wordCount', $this->getWordCount());
        $writer->writeFloatValue('wordsPerMinute', $this->getWordsPerMinute());
    }

    /**
     * Sets the accuracyScore property value. Accuracy score of the reading progress.
     * @param float|null $value Value to set for the accuracyScore property.
    */
    public function setAccuracyScore(?float $value): void {
        $this->getBackingStore()->set('accuracyScore', $value);
    }

    /**
     * Sets the action property value. Indicates whether the submission is an attempt by the student or a miscue edit done by the educator. The possible values are Attempt and EditMiscue.
     * @param string|null $value Value to set for the action property.
    */
    public function setAction(?string $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the assignmentId property value. ID of the assignment with which this submission is associated.
     * @param string|null $value Value to set for the assignmentId property.
    */
    public function setAssignmentId(?string $value): void {
        $this->getBackingStore()->set('assignmentId', $value);
    }

    /**
     * Sets the challengingWords property value. List of words that the student found challenging during the reading session.
     * @param array<ChallengingWord>|null $value Value to set for the challengingWords property.
    */
    public function setChallengingWords(?array $value): void {
        $this->getBackingStore()->set('challengingWords', $value);
    }

    /**
     * Sets the classId property value. ID of the class this reading progress is associated with.
     * @param string|null $value Value to set for the classId property.
    */
    public function setClassId(?string $value): void {
        $this->getBackingStore()->set('classId', $value);
    }

    /**
     * Sets the insertions property value. Insertions of the reading progress.
     * @param int|null $value Value to set for the insertions property.
    */
    public function setInsertions(?int $value): void {
        $this->getBackingStore()->set('insertions', $value);
    }

    /**
     * Sets the mispronunciations property value. Mispronunciations of the reading progress.
     * @param int|null $value Value to set for the mispronunciations property.
    */
    public function setMispronunciations(?int $value): void {
        $this->getBackingStore()->set('mispronunciations', $value);
    }

    /**
     * Sets the missedExclamationMarks property value. Number of exclamation marks missed in the reading passage.
     * @param int|null $value Value to set for the missedExclamationMarks property.
    */
    public function setMissedExclamationMarks(?int $value): void {
        $this->getBackingStore()->set('missedExclamationMarks', $value);
    }

    /**
     * Sets the missedPeriods property value. Number of periods missed in the reading passage.
     * @param int|null $value Value to set for the missedPeriods property.
    */
    public function setMissedPeriods(?int $value): void {
        $this->getBackingStore()->set('missedPeriods', $value);
    }

    /**
     * Sets the missedQuestionMarks property value. Number of question marks missed in the reading passage.
     * @param int|null $value Value to set for the missedQuestionMarks property.
    */
    public function setMissedQuestionMarks(?int $value): void {
        $this->getBackingStore()->set('missedQuestionMarks', $value);
    }

    /**
     * Sets the missedShorts property value. Number of short words missed during the reading session.
     * @param int|null $value Value to set for the missedShorts property.
    */
    public function setMissedShorts(?int $value): void {
        $this->getBackingStore()->set('missedShorts', $value);
    }

    /**
     * Sets the monotoneScore property value. Score that reflects the student's use of intonation and expression. Lower scores indicate more monotone reading.
     * @param float|null $value Value to set for the monotoneScore property.
    */
    public function setMonotoneScore(?float $value): void {
        $this->getBackingStore()->set('monotoneScore', $value);
    }

    /**
     * Sets the omissions property value. Omissions of the reading progress.
     * @param int|null $value Value to set for the omissions property.
    */
    public function setOmissions(?int $value): void {
        $this->getBackingStore()->set('omissions', $value);
    }

    /**
     * Sets the repetitions property value. Number of times the student repeated words or phrases during the reading session.
     * @param int|null $value Value to set for the repetitions property.
    */
    public function setRepetitions(?int $value): void {
        $this->getBackingStore()->set('repetitions', $value);
    }

    /**
     * Sets the selfCorrections property value. Number of times the student self-corrected their reading errors.
     * @param int|null $value Value to set for the selfCorrections property.
    */
    public function setSelfCorrections(?int $value): void {
        $this->getBackingStore()->set('selfCorrections', $value);
    }

    /**
     * Sets the studentId property value. ID of the user this reading progress is associated with.
     * @param string|null $value Value to set for the studentId property.
    */
    public function setStudentId(?string $value): void {
        $this->getBackingStore()->set('studentId', $value);
    }

    /**
     * Sets the submissionDateTime property value. Date and time of the submission this reading progress is associated with. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the submissionDateTime property.
    */
    public function setSubmissionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('submissionDateTime', $value);
    }

    /**
     * Sets the submissionId property value. ID of the submission this reading progress is associated with.
     * @param string|null $value Value to set for the submissionId property.
    */
    public function setSubmissionId(?string $value): void {
        $this->getBackingStore()->set('submissionId', $value);
    }

    /**
     * Sets the unexpectedPauses property value. Number of unexpected pauses made during the reading session.
     * @param int|null $value Value to set for the unexpectedPauses property.
    */
    public function setUnexpectedPauses(?int $value): void {
        $this->getBackingStore()->set('unexpectedPauses', $value);
    }

    /**
     * Sets the wordCount property value. Words count of the reading progress.
     * @param int|null $value Value to set for the wordCount property.
    */
    public function setWordCount(?int $value): void {
        $this->getBackingStore()->set('wordCount', $value);
    }

    /**
     * Sets the wordsPerMinute property value. Words per minute of the reading progress.
     * @param float|null $value Value to set for the wordsPerMinute property.
    */
    public function setWordsPerMinute(?float $value): void {
        $this->getBackingStore()->set('wordsPerMinute', $value);
    }

}
