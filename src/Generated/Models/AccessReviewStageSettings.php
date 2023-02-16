<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AccessReviewStageSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new accessReviewStageSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewStageSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewStageSettings {
        return new AccessReviewStageSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the decisionsThatWillMoveToNextStage property value. Indicate which decisions will go to the next stage. Can be a sub-set of Approve, Deny, Recommendation, or NotReviewed. If not provided, all decisions will go to the next stage. Optional.
     * @return array<string>|null
    */
    public function getDecisionsThatWillMoveToNextStage(): ?array {
        return $this->getBackingStore()->get('decisionsThatWillMoveToNextStage');
    }

    /**
     * Gets the dependsOn property value. Defines the sequential or parallel order of the stages and depends on the stageId. Only sequential stages are currently supported. For example, if stageId is 2, then dependsOn must be 1. If stageId is 1, do not specify dependsOn. Required if stageId is not 1.
     * @return array<string>|null
    */
    public function getDependsOn(): ?array {
        return $this->getBackingStore()->get('dependsOn');
    }

    /**
     * Gets the durationInDays property value. The duration of the stage. Required.  NOTE: The cumulative value of this property across all stages  1. Will override the instanceDurationInDays setting on the accessReviewScheduleDefinition object. 2. Cannot exceed the length of one recurrence. That is, if the review recurs weekly, the cumulative durationInDays cannot exceed 7.
     * @return int|null
    */
    public function getDurationInDays(): ?int {
        return $this->getBackingStore()->get('durationInDays');
    }

    /**
     * Gets the fallbackReviewers property value. If provided, the fallback reviewers are asked to complete a review if the primary reviewers do not exist. For example, if managers are selected as reviewers and a principal under review does not have a manager in Azure AD, the fallback reviewers are asked to review that principal. NOTE: The value of this property will override the corresponding setting on the accessReviewScheduleDefinition object.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getFallbackReviewers(): ?array {
        return $this->getBackingStore()->get('fallbackReviewers');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'decisionsThatWillMoveToNextStage' => fn(ParseNode $n) => $o->setDecisionsThatWillMoveToNextStage($n->getCollectionOfPrimitiveValues()),
            'dependsOn' => fn(ParseNode $n) => $o->setDependsOn($n->getCollectionOfPrimitiveValues()),
            'durationInDays' => fn(ParseNode $n) => $o->setDurationInDays($n->getIntegerValue()),
            'fallbackReviewers' => fn(ParseNode $n) => $o->setFallbackReviewers($n->getCollectionOfObjectValues([AccessReviewReviewerScope::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recommendationsEnabled' => fn(ParseNode $n) => $o->setRecommendationsEnabled($n->getBooleanValue()),
            'reviewers' => fn(ParseNode $n) => $o->setReviewers($n->getCollectionOfObjectValues([AccessReviewReviewerScope::class, 'createFromDiscriminatorValue'])),
            'stageId' => fn(ParseNode $n) => $o->setStageId($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the recommendationsEnabled property value. Indicates whether showing recommendations to reviewers is enabled. Required. NOTE: The value of this property will override override the corresponding setting on the accessReviewScheduleDefinition object.
     * @return bool|null
    */
    public function getRecommendationsEnabled(): ?bool {
        return $this->getBackingStore()->get('recommendationsEnabled');
    }

    /**
     * Gets the reviewers property value. Defines who the reviewers are. If none are specified, the review is a self-review (users review their own access).  For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. NOTE: The value of this property will override the corresponding setting on the accessReviewScheduleDefinition.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getReviewers(): ?array {
        return $this->getBackingStore()->get('reviewers');
    }

    /**
     * Gets the stageId property value. Unique identifier of the accessReviewStageSettings object. The stageId will be used by the dependsOn property to indicate the order of the stages. Required.
     * @return string|null
    */
    public function getStageId(): ?string {
        return $this->getBackingStore()->get('stageId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('decisionsThatWillMoveToNextStage', $this->getDecisionsThatWillMoveToNextStage());
        $writer->writeCollectionOfPrimitiveValues('dependsOn', $this->getDependsOn());
        $writer->writeIntegerValue('durationInDays', $this->getDurationInDays());
        $writer->writeCollectionOfObjectValues('fallbackReviewers', $this->getFallbackReviewers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('recommendationsEnabled', $this->getRecommendationsEnabled());
        $writer->writeCollectionOfObjectValues('reviewers', $this->getReviewers());
        $writer->writeStringValue('stageId', $this->getStageId());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the decisionsThatWillMoveToNextStage property value. Indicate which decisions will go to the next stage. Can be a sub-set of Approve, Deny, Recommendation, or NotReviewed. If not provided, all decisions will go to the next stage. Optional.
     * @param array<string>|null $value Value to set for the decisionsThatWillMoveToNextStage property.
    */
    public function setDecisionsThatWillMoveToNextStage(?array $value): void {
        $this->getBackingStore()->set('decisionsThatWillMoveToNextStage', $value);
    }

    /**
     * Sets the dependsOn property value. Defines the sequential or parallel order of the stages and depends on the stageId. Only sequential stages are currently supported. For example, if stageId is 2, then dependsOn must be 1. If stageId is 1, do not specify dependsOn. Required if stageId is not 1.
     * @param array<string>|null $value Value to set for the dependsOn property.
    */
    public function setDependsOn(?array $value): void {
        $this->getBackingStore()->set('dependsOn', $value);
    }

    /**
     * Sets the durationInDays property value. The duration of the stage. Required.  NOTE: The cumulative value of this property across all stages  1. Will override the instanceDurationInDays setting on the accessReviewScheduleDefinition object. 2. Cannot exceed the length of one recurrence. That is, if the review recurs weekly, the cumulative durationInDays cannot exceed 7.
     * @param int|null $value Value to set for the durationInDays property.
    */
    public function setDurationInDays(?int $value): void {
        $this->getBackingStore()->set('durationInDays', $value);
    }

    /**
     * Sets the fallbackReviewers property value. If provided, the fallback reviewers are asked to complete a review if the primary reviewers do not exist. For example, if managers are selected as reviewers and a principal under review does not have a manager in Azure AD, the fallback reviewers are asked to review that principal. NOTE: The value of this property will override the corresponding setting on the accessReviewScheduleDefinition object.
     * @param array<AccessReviewReviewerScope>|null $value Value to set for the fallbackReviewers property.
    */
    public function setFallbackReviewers(?array $value): void {
        $this->getBackingStore()->set('fallbackReviewers', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recommendationsEnabled property value. Indicates whether showing recommendations to reviewers is enabled. Required. NOTE: The value of this property will override override the corresponding setting on the accessReviewScheduleDefinition object.
     * @param bool|null $value Value to set for the recommendationsEnabled property.
    */
    public function setRecommendationsEnabled(?bool $value): void {
        $this->getBackingStore()->set('recommendationsEnabled', $value);
    }

    /**
     * Sets the reviewers property value. Defines who the reviewers are. If none are specified, the review is a self-review (users review their own access).  For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. NOTE: The value of this property will override the corresponding setting on the accessReviewScheduleDefinition.
     * @param array<AccessReviewReviewerScope>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value): void {
        $this->getBackingStore()->set('reviewers', $value);
    }

    /**
     * Sets the stageId property value. Unique identifier of the accessReviewStageSettings object. The stageId will be used by the dependsOn property to indicate the order of the stages. Required.
     * @param string|null $value Value to set for the stageId property.
    */
    public function setStageId(?string $value): void {
        $this->getBackingStore()->set('stageId', $value);
    }

}
