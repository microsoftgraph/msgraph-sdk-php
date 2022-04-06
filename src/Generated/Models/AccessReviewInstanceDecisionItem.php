<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewInstanceDecisionItem extends Entity 
{
    /** @var string|null $accessReviewId The identifier of the accessReviewInstance parent. Supports $select. Read-only. */
    private ?string $accessReviewId = null;
    
    /** @var UserIdentity|null $appliedBy The identifier of the user who applied the decision. Read-only. */
    private ?UserIdentity $appliedBy = null;
    
    /** @var DateTime|null $appliedDateTime The timestamp when the approval decision was applied. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $select. Read-only. */
    private ?DateTime $appliedDateTime = null;
    
    /** @var string|null $applyResult The result of applying the decision. Possible values: New, AppliedSuccessfully, AppliedWithUnknownFailure, AppliedSuccessfullyButObjectNotFound and ApplyNotSupported. Supports $select, $orderby, and $filter (eq only). Read-only. */
    private ?string $applyResult = null;
    
    /** @var string|null $decision Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow. Supports $select, $orderby, and $filter (eq only). */
    private ?string $decision = null;
    
    /** @var string|null $justification Justification left by the reviewer when they made the decision. */
    private ?string $justification = null;
    
    /** @var Identity|null $principal Every decision item in an access review represents a principal's access to a resource. This property represents details of the principal. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is 'Bob' and the resource is 'Sales'. Principals can be of two types - userIdentity and servicePrincipalIdentity. Supports $select. Read-only. */
    private ?Identity $principal = null;
    
    /** @var string|null $principalLink A link to the principal object. For example, https://graph.microsoft.com/v1.0/users/a6c7aecb-cbfd-4763-87ef-e91b4bd509d9. Read-only. */
    private ?string $principalLink = null;
    
    /** @var string|null $recommendation A system-generated recommendation for the approval decision based off last interactive sign-in to tenant. Recommend approve if sign-in is within thirty days of start of review. Recommend deny if sign-in is greater than thirty days of start of review. Recommendation not available otherwise. Possible values: Approve, Deny, or NoInfoAvailable. Supports $select, $orderby, and $filter (eq only). Read-only. */
    private ?string $recommendation = null;
    
    /** @var AccessReviewInstanceDecisionItemResource|null $resource Every decision item in an access review represents a principal's access to a resource. This property represents details of the resource. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is Bob and the resource is 'Sales'. Resources can be of multiple types. See accessReviewInstanceDecisionItemResource. Read-only. */
    private ?AccessReviewInstanceDecisionItemResource $resource = null;
    
    /** @var string|null $resourceLink A link to the resource. For example, https://graph.microsoft.com/v1.0/servicePrincipals/c86300f3-8695-4320-9f6e-32a2555f5ff8. Supports $select. Read-only. */
    private ?string $resourceLink = null;
    
    /** @var UserIdentity|null $reviewedBy The identifier of the reviewer. Supports $select. Read-only. */
    private ?UserIdentity $reviewedBy = null;
    
    /** @var DateTime|null $reviewedDateTime The timestamp when the review decision occurred. Supports $select. Read-only. */
    private ?DateTime $reviewedDateTime = null;
    
    /**
     * Instantiates a new accessReviewInstanceDecisionItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewInstanceDecisionItem
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewInstanceDecisionItem {
        return new AccessReviewInstanceDecisionItem();
    }

    /**
     * Gets the accessReviewId property value. The identifier of the accessReviewInstance parent. Supports $select. Read-only.
     * @return string|null
    */
    public function getAccessReviewId(): ?string {
        return $this->accessReviewId;
    }

    /**
     * Gets the appliedBy property value. The identifier of the user who applied the decision. Read-only.
     * @return UserIdentity|null
    */
    public function getAppliedBy(): ?UserIdentity {
        return $this->appliedBy;
    }

    /**
     * Gets the appliedDateTime property value. The timestamp when the approval decision was applied. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $select. Read-only.
     * @return DateTime|null
    */
    public function getAppliedDateTime(): ?DateTime {
        return $this->appliedDateTime;
    }

    /**
     * Gets the applyResult property value. The result of applying the decision. Possible values: New, AppliedSuccessfully, AppliedWithUnknownFailure, AppliedSuccessfullyButObjectNotFound and ApplyNotSupported. Supports $select, $orderby, and $filter (eq only). Read-only.
     * @return string|null
    */
    public function getApplyResult(): ?string {
        return $this->applyResult;
    }

    /**
     * Gets the decision property value. Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow. Supports $select, $orderby, and $filter (eq only).
     * @return string|null
    */
    public function getDecision(): ?string {
        return $this->decision;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'accessReviewId' => function (self $o, ParseNode $n) { $o->setAccessReviewId($n->getStringValue()); },
            'appliedBy' => function (self $o, ParseNode $n) { $o->setAppliedBy($n->getObjectValue(UserIdentity::class)); },
            'appliedDateTime' => function (self $o, ParseNode $n) { $o->setAppliedDateTime($n->getDateTimeValue()); },
            'applyResult' => function (self $o, ParseNode $n) { $o->setApplyResult($n->getStringValue()); },
            'decision' => function (self $o, ParseNode $n) { $o->setDecision($n->getStringValue()); },
            'justification' => function (self $o, ParseNode $n) { $o->setJustification($n->getStringValue()); },
            'principal' => function (self $o, ParseNode $n) { $o->setPrincipal($n->getObjectValue(Identity::class)); },
            'principalLink' => function (self $o, ParseNode $n) { $o->setPrincipalLink($n->getStringValue()); },
            'recommendation' => function (self $o, ParseNode $n) { $o->setRecommendation($n->getStringValue()); },
            'resource' => function (self $o, ParseNode $n) { $o->setResource($n->getObjectValue(AccessReviewInstanceDecisionItemResource::class)); },
            'resourceLink' => function (self $o, ParseNode $n) { $o->setResourceLink($n->getStringValue()); },
            'reviewedBy' => function (self $o, ParseNode $n) { $o->setReviewedBy($n->getObjectValue(UserIdentity::class)); },
            'reviewedDateTime' => function (self $o, ParseNode $n) { $o->setReviewedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the justification property value. Justification left by the reviewer when they made the decision.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->justification;
    }

    /**
     * Gets the principal property value. Every decision item in an access review represents a principal's access to a resource. This property represents details of the principal. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is 'Bob' and the resource is 'Sales'. Principals can be of two types - userIdentity and servicePrincipalIdentity. Supports $select. Read-only.
     * @return Identity|null
    */
    public function getPrincipal(): ?Identity {
        return $this->principal;
    }

    /**
     * Gets the principalLink property value. A link to the principal object. For example, https://graph.microsoft.com/v1.0/users/a6c7aecb-cbfd-4763-87ef-e91b4bd509d9. Read-only.
     * @return string|null
    */
    public function getPrincipalLink(): ?string {
        return $this->principalLink;
    }

    /**
     * Gets the recommendation property value. A system-generated recommendation for the approval decision based off last interactive sign-in to tenant. Recommend approve if sign-in is within thirty days of start of review. Recommend deny if sign-in is greater than thirty days of start of review. Recommendation not available otherwise. Possible values: Approve, Deny, or NoInfoAvailable. Supports $select, $orderby, and $filter (eq only). Read-only.
     * @return string|null
    */
    public function getRecommendation(): ?string {
        return $this->recommendation;
    }

    /**
     * Gets the resource property value. Every decision item in an access review represents a principal's access to a resource. This property represents details of the resource. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is Bob and the resource is 'Sales'. Resources can be of multiple types. See accessReviewInstanceDecisionItemResource. Read-only.
     * @return AccessReviewInstanceDecisionItemResource|null
    */
    public function getResource(): ?AccessReviewInstanceDecisionItemResource {
        return $this->resource;
    }

    /**
     * Gets the resourceLink property value. A link to the resource. For example, https://graph.microsoft.com/v1.0/servicePrincipals/c86300f3-8695-4320-9f6e-32a2555f5ff8. Supports $select. Read-only.
     * @return string|null
    */
    public function getResourceLink(): ?string {
        return $this->resourceLink;
    }

    /**
     * Gets the reviewedBy property value. The identifier of the reviewer. Supports $select. Read-only.
     * @return UserIdentity|null
    */
    public function getReviewedBy(): ?UserIdentity {
        return $this->reviewedBy;
    }

    /**
     * Gets the reviewedDateTime property value. The timestamp when the review decision occurred. Supports $select. Read-only.
     * @return DateTime|null
    */
    public function getReviewedDateTime(): ?DateTime {
        return $this->reviewedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accessReviewId', $this->accessReviewId);
        $writer->writeObjectValue('appliedBy', $this->appliedBy);
        $writer->writeDateTimeValue('appliedDateTime', $this->appliedDateTime);
        $writer->writeStringValue('applyResult', $this->applyResult);
        $writer->writeStringValue('decision', $this->decision);
        $writer->writeStringValue('justification', $this->justification);
        $writer->writeObjectValue('principal', $this->principal);
        $writer->writeStringValue('principalLink', $this->principalLink);
        $writer->writeStringValue('recommendation', $this->recommendation);
        $writer->writeObjectValue('resource', $this->resource);
        $writer->writeStringValue('resourceLink', $this->resourceLink);
        $writer->writeObjectValue('reviewedBy', $this->reviewedBy);
        $writer->writeDateTimeValue('reviewedDateTime', $this->reviewedDateTime);
    }

    /**
     * Sets the accessReviewId property value. The identifier of the accessReviewInstance parent. Supports $select. Read-only.
     *  @param string|null $value Value to set for the accessReviewId property.
    */
    public function setAccessReviewId(?string $value ): void {
        $this->accessReviewId = $value;
    }

    /**
     * Sets the appliedBy property value. The identifier of the user who applied the decision. Read-only.
     *  @param UserIdentity|null $value Value to set for the appliedBy property.
    */
    public function setAppliedBy(?UserIdentity $value ): void {
        $this->appliedBy = $value;
    }

    /**
     * Sets the appliedDateTime property value. The timestamp when the approval decision was applied. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $select. Read-only.
     *  @param DateTime|null $value Value to set for the appliedDateTime property.
    */
    public function setAppliedDateTime(?DateTime $value ): void {
        $this->appliedDateTime = $value;
    }

    /**
     * Sets the applyResult property value. The result of applying the decision. Possible values: New, AppliedSuccessfully, AppliedWithUnknownFailure, AppliedSuccessfullyButObjectNotFound and ApplyNotSupported. Supports $select, $orderby, and $filter (eq only). Read-only.
     *  @param string|null $value Value to set for the applyResult property.
    */
    public function setApplyResult(?string $value ): void {
        $this->applyResult = $value;
    }

    /**
     * Sets the decision property value. Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow. Supports $select, $orderby, and $filter (eq only).
     *  @param string|null $value Value to set for the decision property.
    */
    public function setDecision(?string $value ): void {
        $this->decision = $value;
    }

    /**
     * Sets the justification property value. Justification left by the reviewer when they made the decision.
     *  @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value ): void {
        $this->justification = $value;
    }

    /**
     * Sets the principal property value. Every decision item in an access review represents a principal's access to a resource. This property represents details of the principal. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is 'Bob' and the resource is 'Sales'. Principals can be of two types - userIdentity and servicePrincipalIdentity. Supports $select. Read-only.
     *  @param Identity|null $value Value to set for the principal property.
    */
    public function setPrincipal(?Identity $value ): void {
        $this->principal = $value;
    }

    /**
     * Sets the principalLink property value. A link to the principal object. For example, https://graph.microsoft.com/v1.0/users/a6c7aecb-cbfd-4763-87ef-e91b4bd509d9. Read-only.
     *  @param string|null $value Value to set for the principalLink property.
    */
    public function setPrincipalLink(?string $value ): void {
        $this->principalLink = $value;
    }

    /**
     * Sets the recommendation property value. A system-generated recommendation for the approval decision based off last interactive sign-in to tenant. Recommend approve if sign-in is within thirty days of start of review. Recommend deny if sign-in is greater than thirty days of start of review. Recommendation not available otherwise. Possible values: Approve, Deny, or NoInfoAvailable. Supports $select, $orderby, and $filter (eq only). Read-only.
     *  @param string|null $value Value to set for the recommendation property.
    */
    public function setRecommendation(?string $value ): void {
        $this->recommendation = $value;
    }

    /**
     * Sets the resource property value. Every decision item in an access review represents a principal's access to a resource. This property represents details of the resource. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is Bob and the resource is 'Sales'. Resources can be of multiple types. See accessReviewInstanceDecisionItemResource. Read-only.
     *  @param AccessReviewInstanceDecisionItemResource|null $value Value to set for the resource property.
    */
    public function setResource(?AccessReviewInstanceDecisionItemResource $value ): void {
        $this->resource = $value;
    }

    /**
     * Sets the resourceLink property value. A link to the resource. For example, https://graph.microsoft.com/v1.0/servicePrincipals/c86300f3-8695-4320-9f6e-32a2555f5ff8. Supports $select. Read-only.
     *  @param string|null $value Value to set for the resourceLink property.
    */
    public function setResourceLink(?string $value ): void {
        $this->resourceLink = $value;
    }

    /**
     * Sets the reviewedBy property value. The identifier of the reviewer. Supports $select. Read-only.
     *  @param UserIdentity|null $value Value to set for the reviewedBy property.
    */
    public function setReviewedBy(?UserIdentity $value ): void {
        $this->reviewedBy = $value;
    }

    /**
     * Sets the reviewedDateTime property value. The timestamp when the review decision occurred. Supports $select. Read-only.
     *  @param DateTime|null $value Value to set for the reviewedDateTime property.
    */
    public function setReviewedDateTime(?DateTime $value ): void {
        $this->reviewedDateTime = $value;
    }

}
