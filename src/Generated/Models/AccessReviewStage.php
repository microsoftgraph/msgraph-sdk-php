<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessReviewStage extends Entity implements Parsable 
{
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
        $val = $this->getBackingStore()->get('decisions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewInstanceDecisionItem::class);
            /** @var array<AccessReviewInstanceDecisionItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'decisions'");
    }

    /**
     * Gets the endDateTime property value. The date and time in ISO 8601 format and UTC time when the review stage is scheduled to end. This property is the cumulative total of the durationInDays for all stages. Read-only.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * Gets the fallbackReviewers property value. This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers are notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner doesn't exist, or manager is specified as reviewer but a user's manager doesn't exist.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getFallbackReviewers(): ?array {
        $val = $this->getBackingStore()->get('fallbackReviewers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewReviewerScope::class);
            /** @var array<AccessReviewReviewerScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fallbackReviewers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'decisions' => fn(ParseNode $n) => $o->setDecisions($n->getCollectionOfObjectValues([AccessReviewInstanceDecisionItem::class, 'createFromDiscriminatorValue'])),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'fallbackReviewers' => fn(ParseNode $n) => $o->setFallbackReviewers($n->getCollectionOfObjectValues([AccessReviewReviewerScope::class, 'createFromDiscriminatorValue'])),
            'reviewers' => fn(ParseNode $n) => $o->setReviewers($n->getCollectionOfObjectValues([AccessReviewReviewerScope::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ]);
    }

    /**
     * Gets the reviewers property value. This collection of access review scopes is used to define who the reviewers are. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getReviewers(): ?array {
        $val = $this->getBackingStore()->get('reviewers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewReviewerScope::class);
            /** @var array<AccessReviewReviewerScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewers'");
    }

    /**
     * Gets the startDateTime property value. The date and time in ISO 8601 format and UTC time when the review stage is scheduled to start. Read-only.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the status property value. Specifies the status of an accessReviewStage. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $orderby, and $filter (eq only). Read-only.
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
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
        $writer->writeCollectionOfObjectValues('decisions', $this->getDecisions());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeCollectionOfObjectValues('fallbackReviewers', $this->getFallbackReviewers());
        $writer->writeCollectionOfObjectValues('reviewers', $this->getReviewers());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the decisions property value. Each user reviewed in an accessReviewStage has a decision item representing if they were approved, denied, or not yet reviewed.
     * @param array<AccessReviewInstanceDecisionItem>|null $value Value to set for the decisions property.
    */
    public function setDecisions(?array $value): void {
        $this->getBackingStore()->set('decisions', $value);
    }

    /**
     * Sets the endDateTime property value. The date and time in ISO 8601 format and UTC time when the review stage is scheduled to end. This property is the cumulative total of the durationInDays for all stages. Read-only.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the fallbackReviewers property value. This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers are notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner doesn't exist, or manager is specified as reviewer but a user's manager doesn't exist.
     * @param array<AccessReviewReviewerScope>|null $value Value to set for the fallbackReviewers property.
    */
    public function setFallbackReviewers(?array $value): void {
        $this->getBackingStore()->set('fallbackReviewers', $value);
    }

    /**
     * Sets the reviewers property value. This collection of access review scopes is used to define who the reviewers are. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
     * @param array<AccessReviewReviewerScope>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value): void {
        $this->getBackingStore()->set('reviewers', $value);
    }

    /**
     * Sets the startDateTime property value. The date and time in ISO 8601 format and UTC time when the review stage is scheduled to start. Read-only.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. Specifies the status of an accessReviewStage. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $orderby, and $filter (eq only). Read-only.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
