<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewHistoryDefinition extends Entity implements Parsable 
{
    /**
     * @var UserIdentity|null $createdBy The createdBy property
    */
    private ?UserIdentity $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime Timestamp when the access review definition was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var array<string>|null $decisions Determines which review decisions will be included in the fetched review history data if specified. Optional on create. All decisions will be included by default if no decisions are provided on create. Possible values are: approve, deny, dontKnow, notReviewed, and notNotified.
    */
    private ?array $decisions = null;
    
    /**
     * @var string|null $displayName Name for the access review history data collection. Required.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<AccessReviewHistoryInstance>|null $instances If the accessReviewHistoryDefinition is a recurring definition, instances represent each recurrence. A definition that does not recur will have exactly one instance.
    */
    private ?array $instances = null;
    
    /**
     * @var DateTime|null $reviewHistoryPeriodEndDateTime A timestamp. Reviews ending on or before this date will be included in the fetched history data. Only required if scheduleSettings is not defined.
    */
    private ?DateTime $reviewHistoryPeriodEndDateTime = null;
    
    /**
     * @var DateTime|null $reviewHistoryPeriodStartDateTime A timestamp. Reviews starting on or before this date will be included in the fetched history data. Only required if scheduleSettings is not defined.
    */
    private ?DateTime $reviewHistoryPeriodStartDateTime = null;
    
    /**
     * @var AccessReviewHistoryScheduleSettings|null $scheduleSettings The settings for a recurring access review history definition series. Only required if reviewHistoryPeriodStartDateTime or reviewHistoryPeriodEndDateTime are not defined. Not supported yet.
    */
    private ?AccessReviewHistoryScheduleSettings $scheduleSettings = null;
    
    /**
     * @var array<AccessReviewScope>|null $scopes Used to scope what reviews are included in the fetched history data. Fetches reviews whose scope matches with this provided scope. Required.
    */
    private ?array $scopes = null;
    
    /**
     * @var AccessReviewHistoryStatus|null $status Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue.
    */
    private ?AccessReviewHistoryStatus $status = null;
    
    /**
     * Instantiates a new AccessReviewHistoryDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewHistoryDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewHistoryDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewHistoryDefinition {
        return new AccessReviewHistoryDefinition();
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return UserIdentity|null
    */
    public function getCreatedBy(): ?UserIdentity {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. Timestamp when the access review definition was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the decisions property value. Determines which review decisions will be included in the fetched review history data if specified. Optional on create. All decisions will be included by default if no decisions are provided on create. Possible values are: approve, deny, dontKnow, notReviewed, and notNotified.
     * @return array<string>|null
    */
    public function getDecisions(): ?array {
        return $this->decisions;
    }

    /**
     * Gets the displayName property value. Name for the access review history data collection. Required.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(UserIdentity::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'decisions' => function (ParseNode $n) use ($o) { $o->setDecisions($n->getCollectionOfPrimitiveValues()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'instances' => function (ParseNode $n) use ($o) { $o->setInstances($n->getCollectionOfObjectValues(array(AccessReviewHistoryInstance::class, 'createFromDiscriminatorValue'))); },
            'reviewHistoryPeriodEndDateTime' => function (ParseNode $n) use ($o) { $o->setReviewHistoryPeriodEndDateTime($n->getDateTimeValue()); },
            'reviewHistoryPeriodStartDateTime' => function (ParseNode $n) use ($o) { $o->setReviewHistoryPeriodStartDateTime($n->getDateTimeValue()); },
            'scheduleSettings' => function (ParseNode $n) use ($o) { $o->setScheduleSettings($n->getObjectValue(array(AccessReviewHistoryScheduleSettings::class, 'createFromDiscriminatorValue'))); },
            'scopes' => function (ParseNode $n) use ($o) { $o->setScopes($n->getCollectionOfObjectValues(array(AccessReviewScope::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(AccessReviewHistoryStatus::class)); },
        ]);
    }

    /**
     * Gets the instances property value. If the accessReviewHistoryDefinition is a recurring definition, instances represent each recurrence. A definition that does not recur will have exactly one instance.
     * @return array<AccessReviewHistoryInstance>|null
    */
    public function getInstances(): ?array {
        return $this->instances;
    }

    /**
     * Gets the reviewHistoryPeriodEndDateTime property value. A timestamp. Reviews ending on or before this date will be included in the fetched history data. Only required if scheduleSettings is not defined.
     * @return DateTime|null
    */
    public function getReviewHistoryPeriodEndDateTime(): ?DateTime {
        return $this->reviewHistoryPeriodEndDateTime;
    }

    /**
     * Gets the reviewHistoryPeriodStartDateTime property value. A timestamp. Reviews starting on or before this date will be included in the fetched history data. Only required if scheduleSettings is not defined.
     * @return DateTime|null
    */
    public function getReviewHistoryPeriodStartDateTime(): ?DateTime {
        return $this->reviewHistoryPeriodStartDateTime;
    }

    /**
     * Gets the scheduleSettings property value. The settings for a recurring access review history definition series. Only required if reviewHistoryPeriodStartDateTime or reviewHistoryPeriodEndDateTime are not defined. Not supported yet.
     * @return AccessReviewHistoryScheduleSettings|null
    */
    public function getScheduleSettings(): ?AccessReviewHistoryScheduleSettings {
        return $this->scheduleSettings;
    }

    /**
     * Gets the scopes property value. Used to scope what reviews are included in the fetched history data. Fetches reviews whose scope matches with this provided scope. Required.
     * @return array<AccessReviewScope>|null
    */
    public function getScopes(): ?array {
        return $this->scopes;
    }

    /**
     * Gets the status property value. Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue.
     * @return AccessReviewHistoryStatus|null
    */
    public function getStatus(): ?AccessReviewHistoryStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfPrimitiveValues('decisions', $this->decisions);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('instances', $this->instances);
        $writer->writeDateTimeValue('reviewHistoryPeriodEndDateTime', $this->reviewHistoryPeriodEndDateTime);
        $writer->writeDateTimeValue('reviewHistoryPeriodStartDateTime', $this->reviewHistoryPeriodStartDateTime);
        $writer->writeObjectValue('scheduleSettings', $this->scheduleSettings);
        $writer->writeCollectionOfObjectValues('scopes', $this->scopes);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the createdBy property value. The createdBy property
     *  @param UserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?UserIdentity $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. Timestamp when the access review definition was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the decisions property value. Determines which review decisions will be included in the fetched review history data if specified. Optional on create. All decisions will be included by default if no decisions are provided on create. Possible values are: approve, deny, dontKnow, notReviewed, and notNotified.
     *  @param array<string>|null $value Value to set for the decisions property.
    */
    public function setDecisions(?array $value ): void {
        $this->decisions = $value;
    }

    /**
     * Sets the displayName property value. Name for the access review history data collection. Required.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the instances property value. If the accessReviewHistoryDefinition is a recurring definition, instances represent each recurrence. A definition that does not recur will have exactly one instance.
     *  @param array<AccessReviewHistoryInstance>|null $value Value to set for the instances property.
    */
    public function setInstances(?array $value ): void {
        $this->instances = $value;
    }

    /**
     * Sets the reviewHistoryPeriodEndDateTime property value. A timestamp. Reviews ending on or before this date will be included in the fetched history data. Only required if scheduleSettings is not defined.
     *  @param DateTime|null $value Value to set for the reviewHistoryPeriodEndDateTime property.
    */
    public function setReviewHistoryPeriodEndDateTime(?DateTime $value ): void {
        $this->reviewHistoryPeriodEndDateTime = $value;
    }

    /**
     * Sets the reviewHistoryPeriodStartDateTime property value. A timestamp. Reviews starting on or before this date will be included in the fetched history data. Only required if scheduleSettings is not defined.
     *  @param DateTime|null $value Value to set for the reviewHistoryPeriodStartDateTime property.
    */
    public function setReviewHistoryPeriodStartDateTime(?DateTime $value ): void {
        $this->reviewHistoryPeriodStartDateTime = $value;
    }

    /**
     * Sets the scheduleSettings property value. The settings for a recurring access review history definition series. Only required if reviewHistoryPeriodStartDateTime or reviewHistoryPeriodEndDateTime are not defined. Not supported yet.
     *  @param AccessReviewHistoryScheduleSettings|null $value Value to set for the scheduleSettings property.
    */
    public function setScheduleSettings(?AccessReviewHistoryScheduleSettings $value ): void {
        $this->scheduleSettings = $value;
    }

    /**
     * Sets the scopes property value. Used to scope what reviews are included in the fetched history data. Fetches reviews whose scope matches with this provided scope. Required.
     *  @param array<AccessReviewScope>|null $value Value to set for the scopes property.
    */
    public function setScopes(?array $value ): void {
        $this->scopes = $value;
    }

    /**
     * Sets the status property value. Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue.
     *  @param AccessReviewHistoryStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AccessReviewHistoryStatus $value ): void {
        $this->status = $value;
    }

}
