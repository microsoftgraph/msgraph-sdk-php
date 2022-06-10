<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewStage extends Entity implements Parsable 
{
    /**
     * @var array<AccessReviewInstanceDecisionItem>|null $decisions Each user reviewed in an accessReviewStage has a decision item representing if they were approved, denied, or not yet reviewed.
    */
    private ?array $decisions = null;
    
    /**
     * @var DateTime|null $endDateTime DateTime when review stage is scheduled to end. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. This property is the cumulative total of the durationInDays for all stages. Read-only.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var array<AccessReviewReviewerScope>|null $fallbackReviewers This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist.
    */
    private ?array $fallbackReviewers = null;
    
    /**
     * @var array<AccessReviewReviewerScope>|null $reviewers This collection of access review scopes is used to define who the reviewers are. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
    */
    private ?array $reviewers = null;
    
    /**
     * @var DateTime|null $startDateTime DateTime when review stage is scheduled to start. May be in the future. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var string|null $status Specifies the status of an accessReviewStage. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $orderby, and $filter (eq only). Read-only.
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new accessReviewStage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewStage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewStage {
        return new AccessReviewStage();
    }

    /**
     * Gets the decisions property value. Each user reviewed in an accessReviewStage has a decision item representing if they were approved, denied, or not yet reviewed.
     * @return array<AccessReviewInstanceDecisionItem>|null
    */
    public function getDecisions(): ?array {
        return $this->decisions;
    }

    /**
     * Gets the endDateTime property value. DateTime when review stage is scheduled to end. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. This property is the cumulative total of the durationInDays for all stages. Read-only.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * Gets the fallbackReviewers property value. This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getFallbackReviewers(): ?array {
        return $this->fallbackReviewers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'decisions' => function (ParseNode $n) use ($o) { $o->setDecisions($n->getCollectionOfObjectValues(array(AccessReviewInstanceDecisionItem::class, 'createFromDiscriminatorValue'))); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'fallbackReviewers' => function (ParseNode $n) use ($o) { $o->setFallbackReviewers($n->getCollectionOfObjectValues(array(AccessReviewReviewerScope::class, 'createFromDiscriminatorValue'))); },
            'reviewers' => function (ParseNode $n) use ($o) { $o->setReviewers($n->getCollectionOfObjectValues(array(AccessReviewReviewerScope::class, 'createFromDiscriminatorValue'))); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the reviewers property value. This collection of access review scopes is used to define who the reviewers are. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getReviewers(): ?array {
        return $this->reviewers;
    }

    /**
     * Gets the startDateTime property value. DateTime when review stage is scheduled to start. May be in the future. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the status property value. Specifies the status of an accessReviewStage. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $orderby, and $filter (eq only). Read-only.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('decisions', $this->decisions);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeCollectionOfObjectValues('fallbackReviewers', $this->fallbackReviewers);
        $writer->writeCollectionOfObjectValues('reviewers', $this->reviewers);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('status', $this->status);
    }

    /**
     * Sets the decisions property value. Each user reviewed in an accessReviewStage has a decision item representing if they were approved, denied, or not yet reviewed.
     *  @param array<AccessReviewInstanceDecisionItem>|null $value Value to set for the decisions property.
    */
    public function setDecisions(?array $value ): void {
        $this->decisions = $value;
    }

    /**
     * Sets the endDateTime property value. DateTime when review stage is scheduled to end. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. This property is the cumulative total of the durationInDays for all stages. Read-only.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the fallbackReviewers property value. This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist.
     *  @param array<AccessReviewReviewerScope>|null $value Value to set for the fallbackReviewers property.
    */
    public function setFallbackReviewers(?array $value ): void {
        $this->fallbackReviewers = $value;
    }

    /**
     * Sets the reviewers property value. This collection of access review scopes is used to define who the reviewers are. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
     *  @param array<AccessReviewReviewerScope>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value ): void {
        $this->reviewers = $value;
    }

    /**
     * Sets the startDateTime property value. DateTime when review stage is scheduled to start. May be in the future. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the status property value. Specifies the status of an accessReviewStage. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $orderby, and $filter (eq only). Read-only.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

}
