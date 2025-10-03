<?php

namespace Microsoft\\Graph\\Generated\Users\Item\FindMeetingTimes;

use DateInterval;
use Microsoft\\Graph\\Generated\Models\AttendeeBase;
use Microsoft\\Graph\\Generated\Models\LocationConstraint;
use Microsoft\\Graph\\Generated\Models\TimeConstraint;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class FindMeetingTimesPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new FindMeetingTimesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FindMeetingTimesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FindMeetingTimesPostRequestBody {
        return new FindMeetingTimesPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the attendees property value. The attendees property
     * @return array<AttendeeBase>|null
    */
    public function getAttendees(): ?array {
        $val = $this->getBackingStore()->get('attendees');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AttendeeBase::class);
            /** @var array<AttendeeBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attendees'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attendees' => fn(ParseNode $n) => $o->setAttendees($n->getCollectionOfObjectValues([AttendeeBase::class, 'createFromDiscriminatorValue'])),
            'isOrganizerOptional' => fn(ParseNode $n) => $o->setIsOrganizerOptional($n->getBooleanValue()),
            'locationConstraint' => fn(ParseNode $n) => $o->setLocationConstraint($n->getObjectValue([LocationConstraint::class, 'createFromDiscriminatorValue'])),
            'maxCandidates' => fn(ParseNode $n) => $o->setMaxCandidates($n->getIntegerValue()),
            'meetingDuration' => fn(ParseNode $n) => $o->setMeetingDuration($n->getDateIntervalValue()),
            'minimumAttendeePercentage' => fn(ParseNode $n) => $o->setMinimumAttendeePercentage($n->getFloatValue()),
            'returnSuggestionReasons' => fn(ParseNode $n) => $o->setReturnSuggestionReasons($n->getBooleanValue()),
            'timeConstraint' => fn(ParseNode $n) => $o->setTimeConstraint($n->getObjectValue([TimeConstraint::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isOrganizerOptional property value. The isOrganizerOptional property
     * @return bool|null
    */
    public function getIsOrganizerOptional(): ?bool {
        $val = $this->getBackingStore()->get('isOrganizerOptional');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOrganizerOptional'");
    }

    /**
     * Gets the locationConstraint property value. The locationConstraint property
     * @return LocationConstraint|null
    */
    public function getLocationConstraint(): ?LocationConstraint {
        $val = $this->getBackingStore()->get('locationConstraint');
        if (is_null($val) || $val instanceof LocationConstraint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locationConstraint'");
    }

    /**
     * Gets the maxCandidates property value. The maxCandidates property
     * @return int|null
    */
    public function getMaxCandidates(): ?int {
        $val = $this->getBackingStore()->get('maxCandidates');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxCandidates'");
    }

    /**
     * Gets the meetingDuration property value. The meetingDuration property
     * @return DateInterval|null
    */
    public function getMeetingDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('meetingDuration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetingDuration'");
    }

    /**
     * Gets the minimumAttendeePercentage property value. The minimumAttendeePercentage property
     * @return float|null
    */
    public function getMinimumAttendeePercentage(): ?float {
        $val = $this->getBackingStore()->get('minimumAttendeePercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumAttendeePercentage'");
    }

    /**
     * Gets the returnSuggestionReasons property value. The returnSuggestionReasons property
     * @return bool|null
    */
    public function getReturnSuggestionReasons(): ?bool {
        $val = $this->getBackingStore()->get('returnSuggestionReasons');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'returnSuggestionReasons'");
    }

    /**
     * Gets the timeConstraint property value. The timeConstraint property
     * @return TimeConstraint|null
    */
    public function getTimeConstraint(): ?TimeConstraint {
        $val = $this->getBackingStore()->get('timeConstraint');
        if (is_null($val) || $val instanceof TimeConstraint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeConstraint'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attendees', $this->getAttendees());
        $writer->writeBooleanValue('isOrganizerOptional', $this->getIsOrganizerOptional());
        $writer->writeObjectValue('locationConstraint', $this->getLocationConstraint());
        $writer->writeIntegerValue('maxCandidates', $this->getMaxCandidates());
        $writer->writeDateIntervalValue('meetingDuration', $this->getMeetingDuration());
        $writer->writeFloatValue('minimumAttendeePercentage', $this->getMinimumAttendeePercentage());
        $writer->writeBooleanValue('returnSuggestionReasons', $this->getReturnSuggestionReasons());
        $writer->writeObjectValue('timeConstraint', $this->getTimeConstraint());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the attendees property value. The attendees property
     * @param array<AttendeeBase>|null $value Value to set for the attendees property.
    */
    public function setAttendees(?array $value): void {
        $this->getBackingStore()->set('attendees', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isOrganizerOptional property value. The isOrganizerOptional property
     * @param bool|null $value Value to set for the isOrganizerOptional property.
    */
    public function setIsOrganizerOptional(?bool $value): void {
        $this->getBackingStore()->set('isOrganizerOptional', $value);
    }

    /**
     * Sets the locationConstraint property value. The locationConstraint property
     * @param LocationConstraint|null $value Value to set for the locationConstraint property.
    */
    public function setLocationConstraint(?LocationConstraint $value): void {
        $this->getBackingStore()->set('locationConstraint', $value);
    }

    /**
     * Sets the maxCandidates property value. The maxCandidates property
     * @param int|null $value Value to set for the maxCandidates property.
    */
    public function setMaxCandidates(?int $value): void {
        $this->getBackingStore()->set('maxCandidates', $value);
    }

    /**
     * Sets the meetingDuration property value. The meetingDuration property
     * @param DateInterval|null $value Value to set for the meetingDuration property.
    */
    public function setMeetingDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('meetingDuration', $value);
    }

    /**
     * Sets the minimumAttendeePercentage property value. The minimumAttendeePercentage property
     * @param float|null $value Value to set for the minimumAttendeePercentage property.
    */
    public function setMinimumAttendeePercentage(?float $value): void {
        $this->getBackingStore()->set('minimumAttendeePercentage', $value);
    }

    /**
     * Sets the returnSuggestionReasons property value. The returnSuggestionReasons property
     * @param bool|null $value Value to set for the returnSuggestionReasons property.
    */
    public function setReturnSuggestionReasons(?bool $value): void {
        $this->getBackingStore()->set('returnSuggestionReasons', $value);
    }

    /**
     * Sets the timeConstraint property value. The timeConstraint property
     * @param TimeConstraint|null $value Value to set for the timeConstraint property.
    */
    public function setTimeConstraint(?TimeConstraint $value): void {
        $this->getBackingStore()->set('timeConstraint', $value);
    }

}
