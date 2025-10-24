<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ReadingCoachPassage extends Entity implements Parsable 
{
    /**
     * Instantiates a new ReadingCoachPassage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReadingCoachPassage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReadingCoachPassage {
        return new ReadingCoachPassage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isReadingCompleted' => fn(ParseNode $n) => $o->setIsReadingCompleted($n->getBooleanValue()),
            'languageTag' => fn(ParseNode $n) => $o->setLanguageTag($n->getStringValue()),
            'practicedAtDateTime' => fn(ParseNode $n) => $o->setPracticedAtDateTime($n->getDateTimeValue()),
            'practiceWords' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPracticeWords($val);
            },
            'storyType' => fn(ParseNode $n) => $o->setStoryType($n->getEnumValue(ReadingCoachStoryType::class)),
            'studentId' => fn(ParseNode $n) => $o->setStudentId($n->getStringValue()),
            'timeSpentReadingInSeconds' => fn(ParseNode $n) => $o->setTimeSpentReadingInSeconds($n->getFloatValue()),
            'wordsAccuracyPercentage' => fn(ParseNode $n) => $o->setWordsAccuracyPercentage($n->getFloatValue()),
            'wordsPerMinute' => fn(ParseNode $n) => $o->setWordsPerMinute($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the isReadingCompleted property value. Indicates if the reading passage was completed.
     * @return bool|null
    */
    public function getIsReadingCompleted(): ?bool {
        $val = $this->getBackingStore()->get('isReadingCompleted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isReadingCompleted'");
    }

    /**
     * Gets the languageTag property value. The language of the reading passage.
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        $val = $this->getBackingStore()->get('languageTag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'languageTag'");
    }

    /**
     * Gets the practicedAtDateTime property value. The date and time when the Reading Coach passage was practiced. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getPracticedAtDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('practicedAtDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'practicedAtDateTime'");
    }

    /**
     * Gets the practiceWords property value. The list of challenging words for the student that they can practice further.
     * @return array<string>|null
    */
    public function getPracticeWords(): ?array {
        $val = $this->getBackingStore()->get('practiceWords');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'practiceWords'");
    }

    /**
     * Gets the storyType property value. The storyType property
     * @return ReadingCoachStoryType|null
    */
    public function getStoryType(): ?ReadingCoachStoryType {
        $val = $this->getBackingStore()->get('storyType');
        if (is_null($val) || $val instanceof ReadingCoachStoryType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storyType'");
    }

    /**
     * Gets the studentId property value. ID of the student that practiced the reading passage.
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
     * Gets the timeSpentReadingInSeconds property value. The time the student spent reading in seconds.
     * @return float|null
    */
    public function getTimeSpentReadingInSeconds(): ?float {
        $val = $this->getBackingStore()->get('timeSpentReadingInSeconds');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeSpentReadingInSeconds'");
    }

    /**
     * Gets the wordsAccuracyPercentage property value. The percentage of words that the student read correctly.
     * @return float|null
    */
    public function getWordsAccuracyPercentage(): ?float {
        $val = $this->getBackingStore()->get('wordsAccuracyPercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wordsAccuracyPercentage'");
    }

    /**
     * Gets the wordsPerMinute property value. The rate the student read at in words per minute.
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
        $writer->writeBooleanValue('isReadingCompleted', $this->getIsReadingCompleted());
        $writer->writeStringValue('languageTag', $this->getLanguageTag());
        $writer->writeDateTimeValue('practicedAtDateTime', $this->getPracticedAtDateTime());
        $writer->writeCollectionOfPrimitiveValues('practiceWords', $this->getPracticeWords());
        $writer->writeEnumValue('storyType', $this->getStoryType());
        $writer->writeStringValue('studentId', $this->getStudentId());
        $writer->writeFloatValue('timeSpentReadingInSeconds', $this->getTimeSpentReadingInSeconds());
        $writer->writeFloatValue('wordsAccuracyPercentage', $this->getWordsAccuracyPercentage());
        $writer->writeFloatValue('wordsPerMinute', $this->getWordsPerMinute());
    }

    /**
     * Sets the isReadingCompleted property value. Indicates if the reading passage was completed.
     * @param bool|null $value Value to set for the isReadingCompleted property.
    */
    public function setIsReadingCompleted(?bool $value): void {
        $this->getBackingStore()->set('isReadingCompleted', $value);
    }

    /**
     * Sets the languageTag property value. The language of the reading passage.
     * @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value): void {
        $this->getBackingStore()->set('languageTag', $value);
    }

    /**
     * Sets the practicedAtDateTime property value. The date and time when the Reading Coach passage was practiced. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the practicedAtDateTime property.
    */
    public function setPracticedAtDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('practicedAtDateTime', $value);
    }

    /**
     * Sets the practiceWords property value. The list of challenging words for the student that they can practice further.
     * @param array<string>|null $value Value to set for the practiceWords property.
    */
    public function setPracticeWords(?array $value): void {
        $this->getBackingStore()->set('practiceWords', $value);
    }

    /**
     * Sets the storyType property value. The storyType property
     * @param ReadingCoachStoryType|null $value Value to set for the storyType property.
    */
    public function setStoryType(?ReadingCoachStoryType $value): void {
        $this->getBackingStore()->set('storyType', $value);
    }

    /**
     * Sets the studentId property value. ID of the student that practiced the reading passage.
     * @param string|null $value Value to set for the studentId property.
    */
    public function setStudentId(?string $value): void {
        $this->getBackingStore()->set('studentId', $value);
    }

    /**
     * Sets the timeSpentReadingInSeconds property value. The time the student spent reading in seconds.
     * @param float|null $value Value to set for the timeSpentReadingInSeconds property.
    */
    public function setTimeSpentReadingInSeconds(?float $value): void {
        $this->getBackingStore()->set('timeSpentReadingInSeconds', $value);
    }

    /**
     * Sets the wordsAccuracyPercentage property value. The percentage of words that the student read correctly.
     * @param float|null $value Value to set for the wordsAccuracyPercentage property.
    */
    public function setWordsAccuracyPercentage(?float $value): void {
        $this->getBackingStore()->set('wordsAccuracyPercentage', $value);
    }

    /**
     * Sets the wordsPerMinute property value. The rate the student read at in words per minute.
     * @param float|null $value Value to set for the wordsPerMinute property.
    */
    public function setWordsPerMinute(?float $value): void {
        $this->getBackingStore()->set('wordsPerMinute', $value);
    }

}
