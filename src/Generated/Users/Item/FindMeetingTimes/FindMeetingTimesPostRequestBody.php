<?php

namespace Microsoft\Graph\Generated\Users\Item\FindMeetingTimes;

use DateInterval;
use Microsoft\Graph\Generated\Models\AttendeeBase;
use Microsoft\Graph\Generated\Models\LocationConstraint;
use Microsoft\Graph\Generated\Models\TimeConstraint;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class FindMeetingTimesPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new findMeetingTimesPostRequestBody and sets the default values.
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the attendees property value. The attendees property
     * @return array<AttendeeBase>|null
    */
    public function getAttendees(): ?array {
        return $this->getBackingStore()->get('attendees');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->getBackingStore()->get('isOrganizerOptional');
    }

    /**
     * Gets the locationConstraint property value. The locationConstraint property
     * @return LocationConstraint|null
    */
    public function getLocationConstraint(): ?LocationConstraint {
        return $this->getBackingStore()->get('locationConstraint');
    }

    /**
     * Gets the maxCandidates property value. The maxCandidates property
     * @return int|null
    */
    public function getMaxCandidates(): ?int {
        return $this->getBackingStore()->get('maxCandidates');
    }

    /**
     * Gets the meetingDuration property value. The meetingDuration property
     * @return DateInterval|null
    */
    public function getMeetingDuration(): ?DateInterval {
        return $this->getBackingStore()->get('meetingDuration');
    }

    /**
     * Gets the minimumAttendeePercentage property value. The minimumAttendeePercentage property
     * @return float|null
    */
    public function getMinimumAttendeePercentage(): ?float {
        return $this->getBackingStore()->get('minimumAttendeePercentage');
    }

    /**
     * Gets the returnSuggestionReasons property value. The returnSuggestionReasons property
     * @return bool|null
    */
    public function getReturnSuggestionReasons(): ?bool {
        return $this->getBackingStore()->get('returnSuggestionReasons');
    }

    /**
     * Gets the timeConstraint property value. The timeConstraint property
     * @return TimeConstraint|null
    */
    public function getTimeConstraint(): ?TimeConstraint {
        return $this->getBackingStore()->get('timeConstraint');
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
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Sets the backingStore property value. Stores model information.
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
