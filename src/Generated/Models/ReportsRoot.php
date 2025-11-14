<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ReportsRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new ReportsRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportsRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportsRoot {
        return new ReportsRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'readingAssignmentSubmissions' => fn(ParseNode $n) => $o->setReadingAssignmentSubmissions($n->getCollectionOfObjectValues([ReadingAssignmentSubmission::class, 'createFromDiscriminatorValue'])),
            'readingCoachPassages' => fn(ParseNode $n) => $o->setReadingCoachPassages($n->getCollectionOfObjectValues([ReadingCoachPassage::class, 'createFromDiscriminatorValue'])),
            'reflectCheckInResponses' => fn(ParseNode $n) => $o->setReflectCheckInResponses($n->getCollectionOfObjectValues([ReflectCheckInResponse::class, 'createFromDiscriminatorValue'])),
            'speakerAssignmentSubmissions' => fn(ParseNode $n) => $o->setSpeakerAssignmentSubmissions($n->getCollectionOfObjectValues([SpeakerAssignmentSubmission::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the readingAssignmentSubmissions property value. Details of submitted reading assignments.
     * @return array<ReadingAssignmentSubmission>|null
    */
    public function getReadingAssignmentSubmissions(): ?array {
        $val = $this->getBackingStore()->get('readingAssignmentSubmissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ReadingAssignmentSubmission::class);
            /** @var array<ReadingAssignmentSubmission>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'readingAssignmentSubmissions'");
    }

    /**
     * Gets the readingCoachPassages property value. Details of practiced Reading Coach passages.
     * @return array<ReadingCoachPassage>|null
    */
    public function getReadingCoachPassages(): ?array {
        $val = $this->getBackingStore()->get('readingCoachPassages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ReadingCoachPassage::class);
            /** @var array<ReadingCoachPassage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'readingCoachPassages'");
    }

    /**
     * Gets the reflectCheckInResponses property value. Details of check-in responses.
     * @return array<ReflectCheckInResponse>|null
    */
    public function getReflectCheckInResponses(): ?array {
        $val = $this->getBackingStore()->get('reflectCheckInResponses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ReflectCheckInResponse::class);
            /** @var array<ReflectCheckInResponse>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reflectCheckInResponses'");
    }

    /**
     * Gets the speakerAssignmentSubmissions property value. Details of submitted speaker assignments.
     * @return array<SpeakerAssignmentSubmission>|null
    */
    public function getSpeakerAssignmentSubmissions(): ?array {
        $val = $this->getBackingStore()->get('speakerAssignmentSubmissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SpeakerAssignmentSubmission::class);
            /** @var array<SpeakerAssignmentSubmission>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'speakerAssignmentSubmissions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('readingAssignmentSubmissions', $this->getReadingAssignmentSubmissions());
        $writer->writeCollectionOfObjectValues('readingCoachPassages', $this->getReadingCoachPassages());
        $writer->writeCollectionOfObjectValues('reflectCheckInResponses', $this->getReflectCheckInResponses());
        $writer->writeCollectionOfObjectValues('speakerAssignmentSubmissions', $this->getSpeakerAssignmentSubmissions());
    }

    /**
     * Sets the readingAssignmentSubmissions property value. Details of submitted reading assignments.
     * @param array<ReadingAssignmentSubmission>|null $value Value to set for the readingAssignmentSubmissions property.
    */
    public function setReadingAssignmentSubmissions(?array $value): void {
        $this->getBackingStore()->set('readingAssignmentSubmissions', $value);
    }

    /**
     * Sets the readingCoachPassages property value. Details of practiced Reading Coach passages.
     * @param array<ReadingCoachPassage>|null $value Value to set for the readingCoachPassages property.
    */
    public function setReadingCoachPassages(?array $value): void {
        $this->getBackingStore()->set('readingCoachPassages', $value);
    }

    /**
     * Sets the reflectCheckInResponses property value. Details of check-in responses.
     * @param array<ReflectCheckInResponse>|null $value Value to set for the reflectCheckInResponses property.
    */
    public function setReflectCheckInResponses(?array $value): void {
        $this->getBackingStore()->set('reflectCheckInResponses', $value);
    }

    /**
     * Sets the speakerAssignmentSubmissions property value. Details of submitted speaker assignments.
     * @param array<SpeakerAssignmentSubmission>|null $value Value to set for the speakerAssignmentSubmissions property.
    */
    public function setSpeakerAssignmentSubmissions(?array $value): void {
        $this->getBackingStore()->set('speakerAssignmentSubmissions', $value);
    }

}
