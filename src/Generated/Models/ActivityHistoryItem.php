<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ActivityHistoryItem extends Entity implements Parsable 
{
    /**
     * @var int|null $activeDurationSeconds Optional. The duration of active user engagement. if not supplied, this is calculated from the startedDateTime and lastActiveDateTime.
    */
    private ?int $activeDurationSeconds = null;
    
    /**
     * @var UserActivity|null $activity The activity property
    */
    private ?UserActivity $activity = null;
    
    /**
     * @var DateTime|null $createdDateTime Set by the server. DateTime in UTC when the object was created on the server.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $expirationDateTime Optional. UTC DateTime when the historyItem will undergo hard-delete. Can be set by the client.
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var DateTime|null $lastActiveDateTime Optional. UTC DateTime when the historyItem (activity session) was last understood as active or finished - if null, historyItem status should be Ongoing.
    */
    private ?DateTime $lastActiveDateTime = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Set by the server. DateTime in UTC when the object was modified on the server.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DateTime|null $startedDateTime Required. UTC DateTime when the historyItem (activity session) was started. Required for timeline history.
    */
    private ?DateTime $startedDateTime = null;
    
    /**
     * @var Status|null $status Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
    */
    private ?Status $status = null;
    
    /**
     * @var string|null $userTimezone Optional. The timezone in which the user's device used to generate the activity was located at activity creation time. Values supplied as Olson IDs in order to support cross-platform representation.
    */
    private ?string $userTimezone = null;
    
    /**
     * Instantiates a new activityHistoryItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.activityHistoryItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActivityHistoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActivityHistoryItem {
        return new ActivityHistoryItem();
    }

    /**
     * Gets the activeDurationSeconds property value. Optional. The duration of active user engagement. if not supplied, this is calculated from the startedDateTime and lastActiveDateTime.
     * @return int|null
    */
    public function getActiveDurationSeconds(): ?int {
        return $this->activeDurationSeconds;
    }

    /**
     * Gets the activity property value. The activity property
     * @return UserActivity|null
    */
    public function getActivity(): ?UserActivity {
        return $this->activity;
    }

    /**
     * Gets the createdDateTime property value. Set by the server. DateTime in UTC when the object was created on the server.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the expirationDateTime property value. Optional. UTC DateTime when the historyItem will undergo hard-delete. Can be set by the client.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDurationSeconds' => fn(ParseNode $n) => $o->setActiveDurationSeconds($n->getIntegerValue()),
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getObjectValue([UserActivity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'lastActiveDateTime' => fn(ParseNode $n) => $o->setLastActiveDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'startedDateTime' => fn(ParseNode $n) => $o->setStartedDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(Status::class)),
            'userTimezone' => fn(ParseNode $n) => $o->setUserTimezone($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastActiveDateTime property value. Optional. UTC DateTime when the historyItem (activity session) was last understood as active or finished - if null, historyItem status should be Ongoing.
     * @return DateTime|null
    */
    public function getLastActiveDateTime(): ?DateTime {
        return $this->lastActiveDateTime;
    }

    /**
     * Gets the lastModifiedDateTime property value. Set by the server. DateTime in UTC when the object was modified on the server.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the startedDateTime property value. Required. UTC DateTime when the historyItem (activity session) was started. Required for timeline history.
     * @return DateTime|null
    */
    public function getStartedDateTime(): ?DateTime {
        return $this->startedDateTime;
    }

    /**
     * Gets the status property value. Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
     * @return Status|null
    */
    public function getStatus(): ?Status {
        return $this->status;
    }

    /**
     * Gets the userTimezone property value. Optional. The timezone in which the user's device used to generate the activity was located at activity creation time. Values supplied as Olson IDs in order to support cross-platform representation.
     * @return string|null
    */
    public function getUserTimezone(): ?string {
        return $this->userTimezone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeDurationSeconds', $this->activeDurationSeconds);
        $writer->writeObjectValue('activity', $this->activity);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeDateTimeValue('lastActiveDateTime', $this->lastActiveDateTime);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeDateTimeValue('startedDateTime', $this->startedDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('userTimezone', $this->userTimezone);
    }

    /**
     * Sets the activeDurationSeconds property value. Optional. The duration of active user engagement. if not supplied, this is calculated from the startedDateTime and lastActiveDateTime.
     *  @param int|null $value Value to set for the activeDurationSeconds property.
    */
    public function setActiveDurationSeconds(?int $value ): void {
        $this->activeDurationSeconds = $value;
    }

    /**
     * Sets the activity property value. The activity property
     *  @param UserActivity|null $value Value to set for the activity property.
    */
    public function setActivity(?UserActivity $value ): void {
        $this->activity = $value;
    }

    /**
     * Sets the createdDateTime property value. Set by the server. DateTime in UTC when the object was created on the server.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the expirationDateTime property value. Optional. UTC DateTime when the historyItem will undergo hard-delete. Can be set by the client.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the lastActiveDateTime property value. Optional. UTC DateTime when the historyItem (activity session) was last understood as active or finished - if null, historyItem status should be Ongoing.
     *  @param DateTime|null $value Value to set for the lastActiveDateTime property.
    */
    public function setLastActiveDateTime(?DateTime $value ): void {
        $this->lastActiveDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Set by the server. DateTime in UTC when the object was modified on the server.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the startedDateTime property value. Required. UTC DateTime when the historyItem (activity session) was started. Required for timeline history.
     *  @param DateTime|null $value Value to set for the startedDateTime property.
    */
    public function setStartedDateTime(?DateTime $value ): void {
        $this->startedDateTime = $value;
    }

    /**
     * Sets the status property value. Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
     *  @param Status|null $value Value to set for the status property.
    */
    public function setStatus(?Status $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the userTimezone property value. Optional. The timezone in which the user's device used to generate the activity was located at activity creation time. Values supplied as Olson IDs in order to support cross-platform representation.
     *  @param string|null $value Value to set for the userTimezone property.
    */
    public function setUserTimezone(?string $value ): void {
        $this->userTimezone = $value;
    }

}
