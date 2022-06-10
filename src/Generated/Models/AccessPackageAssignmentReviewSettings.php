<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentReviewSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AccessReviewExpirationBehavior|null $expirationBehavior The default decision to apply if the access is not reviewed. The possible values are: keepAccess, removeAccess, acceptAccessRecommendation, unknownFutureValue.
    */
    private ?AccessReviewExpirationBehavior $expirationBehavior = null;
    
    /**
     * @var array<SubjectSet>|null $fallbackReviewers This collection specifies the users who will be the fallback reviewers when the primary reviewers don't respond.
    */
    private ?array $fallbackReviewers = null;
    
    /**
     * @var bool|null $isEnabled If true, access reviews are required for assignments through this policy.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var bool|null $isRecommendationEnabled Specifies whether to display recommendations to the reviewer. The default value is true.
    */
    private ?bool $isRecommendationEnabled = null;
    
    /**
     * @var bool|null $isReviewerJustificationRequired Specifies whether the reviewer must provide justification for the approval. The default value is true.
    */
    private ?bool $isReviewerJustificationRequired = null;
    
    /**
     * @var bool|null $isSelfReview Specifies whether the principals can review their own assignments.
    */
    private ?bool $isSelfReview = null;
    
    /**
     * @var array<SubjectSet>|null $primaryReviewers This collection specifies the users or group of users who will review the access package assignments.
    */
    private ?array $primaryReviewers = null;
    
    /**
     * @var EntitlementManagementSchedule|null $schedule When the first review should start and how often it should recur.
    */
    private ?EntitlementManagementSchedule $schedule = null;
    
    /**
     * Instantiates a new accessPackageAssignmentReviewSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentReviewSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentReviewSettings {
        return new AccessPackageAssignmentReviewSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the expirationBehavior property value. The default decision to apply if the access is not reviewed. The possible values are: keepAccess, removeAccess, acceptAccessRecommendation, unknownFutureValue.
     * @return AccessReviewExpirationBehavior|null
    */
    public function getExpirationBehavior(): ?AccessReviewExpirationBehavior {
        return $this->expirationBehavior;
    }

    /**
     * Gets the fallbackReviewers property value. This collection specifies the users who will be the fallback reviewers when the primary reviewers don't respond.
     * @return array<SubjectSet>|null
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
        return  [
            'expirationBehavior' => function (ParseNode $n) use ($o) { $o->setExpirationBehavior($n->getEnumValue(AccessReviewExpirationBehavior::class)); },
            'fallbackReviewers' => function (ParseNode $n) use ($o) { $o->setFallbackReviewers($n->getCollectionOfObjectValues(array(SubjectSet::class, 'createFromDiscriminatorValue'))); },
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
            'isRecommendationEnabled' => function (ParseNode $n) use ($o) { $o->setIsRecommendationEnabled($n->getBooleanValue()); },
            'isReviewerJustificationRequired' => function (ParseNode $n) use ($o) { $o->setIsReviewerJustificationRequired($n->getBooleanValue()); },
            'isSelfReview' => function (ParseNode $n) use ($o) { $o->setIsSelfReview($n->getBooleanValue()); },
            'primaryReviewers' => function (ParseNode $n) use ($o) { $o->setPrimaryReviewers($n->getCollectionOfObjectValues(array(SubjectSet::class, 'createFromDiscriminatorValue'))); },
            'schedule' => function (ParseNode $n) use ($o) { $o->setSchedule($n->getObjectValue(array(EntitlementManagementSchedule::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the isEnabled property value. If true, access reviews are required for assignments through this policy.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the isRecommendationEnabled property value. Specifies whether to display recommendations to the reviewer. The default value is true.
     * @return bool|null
    */
    public function getIsRecommendationEnabled(): ?bool {
        return $this->isRecommendationEnabled;
    }

    /**
     * Gets the isReviewerJustificationRequired property value. Specifies whether the reviewer must provide justification for the approval. The default value is true.
     * @return bool|null
    */
    public function getIsReviewerJustificationRequired(): ?bool {
        return $this->isReviewerJustificationRequired;
    }

    /**
     * Gets the isSelfReview property value. Specifies whether the principals can review their own assignments.
     * @return bool|null
    */
    public function getIsSelfReview(): ?bool {
        return $this->isSelfReview;
    }

    /**
     * Gets the primaryReviewers property value. This collection specifies the users or group of users who will review the access package assignments.
     * @return array<SubjectSet>|null
    */
    public function getPrimaryReviewers(): ?array {
        return $this->primaryReviewers;
    }

    /**
     * Gets the schedule property value. When the first review should start and how often it should recur.
     * @return EntitlementManagementSchedule|null
    */
    public function getSchedule(): ?EntitlementManagementSchedule {
        return $this->schedule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('expirationBehavior', $this->expirationBehavior);
        $writer->writeCollectionOfObjectValues('fallbackReviewers', $this->fallbackReviewers);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeBooleanValue('isRecommendationEnabled', $this->isRecommendationEnabled);
        $writer->writeBooleanValue('isReviewerJustificationRequired', $this->isReviewerJustificationRequired);
        $writer->writeBooleanValue('isSelfReview', $this->isSelfReview);
        $writer->writeCollectionOfObjectValues('primaryReviewers', $this->primaryReviewers);
        $writer->writeObjectValue('schedule', $this->schedule);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the expirationBehavior property value. The default decision to apply if the access is not reviewed. The possible values are: keepAccess, removeAccess, acceptAccessRecommendation, unknownFutureValue.
     *  @param AccessReviewExpirationBehavior|null $value Value to set for the expirationBehavior property.
    */
    public function setExpirationBehavior(?AccessReviewExpirationBehavior $value ): void {
        $this->expirationBehavior = $value;
    }

    /**
     * Sets the fallbackReviewers property value. This collection specifies the users who will be the fallback reviewers when the primary reviewers don't respond.
     *  @param array<SubjectSet>|null $value Value to set for the fallbackReviewers property.
    */
    public function setFallbackReviewers(?array $value ): void {
        $this->fallbackReviewers = $value;
    }

    /**
     * Sets the isEnabled property value. If true, access reviews are required for assignments through this policy.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the isRecommendationEnabled property value. Specifies whether to display recommendations to the reviewer. The default value is true.
     *  @param bool|null $value Value to set for the isRecommendationEnabled property.
    */
    public function setIsRecommendationEnabled(?bool $value ): void {
        $this->isRecommendationEnabled = $value;
    }

    /**
     * Sets the isReviewerJustificationRequired property value. Specifies whether the reviewer must provide justification for the approval. The default value is true.
     *  @param bool|null $value Value to set for the isReviewerJustificationRequired property.
    */
    public function setIsReviewerJustificationRequired(?bool $value ): void {
        $this->isReviewerJustificationRequired = $value;
    }

    /**
     * Sets the isSelfReview property value. Specifies whether the principals can review their own assignments.
     *  @param bool|null $value Value to set for the isSelfReview property.
    */
    public function setIsSelfReview(?bool $value ): void {
        $this->isSelfReview = $value;
    }

    /**
     * Sets the primaryReviewers property value. This collection specifies the users or group of users who will review the access package assignments.
     *  @param array<SubjectSet>|null $value Value to set for the primaryReviewers property.
    */
    public function setPrimaryReviewers(?array $value ): void {
        $this->primaryReviewers = $value;
    }

    /**
     * Sets the schedule property value. When the first review should start and how often it should recur.
     *  @param EntitlementManagementSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?EntitlementManagementSchedule $value ): void {
        $this->schedule = $value;
    }

}
