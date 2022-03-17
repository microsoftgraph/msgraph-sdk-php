<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentReviewSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var AccessReviewExpirationBehavior|null $expirationBehavior  */
    private ?AccessReviewExpirationBehavior $expirationBehavior = null;
    
    /** @var array<SubjectSet>|null $fallbackReviewers  */
    private ?array $fallbackReviewers = null;
    
    /** @var bool|null $isEnabled  */
    private ?bool $isEnabled = null;
    
    /** @var bool|null $isRecommendationEnabled  */
    private ?bool $isRecommendationEnabled = null;
    
    /** @var bool|null $isReviewerJustificationRequired  */
    private ?bool $isReviewerJustificationRequired = null;
    
    /** @var bool|null $isSelfReview  */
    private ?bool $isSelfReview = null;
    
    /** @var array<SubjectSet>|null $primaryReviewers  */
    private ?array $primaryReviewers = null;
    
    /** @var EntitlementManagementSchedule|null $schedule  */
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentReviewSettings {
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
     * Gets the expirationBehavior property value. 
     * @return AccessReviewExpirationBehavior|null
    */
    public function getExpirationBehavior(): ?AccessReviewExpirationBehavior {
        return $this->expirationBehavior;
    }

    /**
     * Gets the fallbackReviewers property value. 
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
        return  [
            'expirationBehavior' => function (self $o, ParseNode $n) { $o->setExpirationBehavior($n->getEnumValue(AccessReviewExpirationBehavior::class)); },
            'fallbackReviewers' => function (self $o, ParseNode $n) { $o->setFallbackReviewers($n->getCollectionOfObjectValues(SubjectSet::class)); },
            'isEnabled' => function (self $o, ParseNode $n) { $o->setIsEnabled($n->getBooleanValue()); },
            'isRecommendationEnabled' => function (self $o, ParseNode $n) { $o->setIsRecommendationEnabled($n->getBooleanValue()); },
            'isReviewerJustificationRequired' => function (self $o, ParseNode $n) { $o->setIsReviewerJustificationRequired($n->getBooleanValue()); },
            'isSelfReview' => function (self $o, ParseNode $n) { $o->setIsSelfReview($n->getBooleanValue()); },
            'primaryReviewers' => function (self $o, ParseNode $n) { $o->setPrimaryReviewers($n->getCollectionOfObjectValues(SubjectSet::class)); },
            'schedule' => function (self $o, ParseNode $n) { $o->setSchedule($n->getObjectValue(EntitlementManagementSchedule::class)); },
        ];
    }

    /**
     * Gets the isEnabled property value. 
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the isRecommendationEnabled property value. 
     * @return bool|null
    */
    public function getIsRecommendationEnabled(): ?bool {
        return $this->isRecommendationEnabled;
    }

    /**
     * Gets the isReviewerJustificationRequired property value. 
     * @return bool|null
    */
    public function getIsReviewerJustificationRequired(): ?bool {
        return $this->isReviewerJustificationRequired;
    }

    /**
     * Gets the isSelfReview property value. 
     * @return bool|null
    */
    public function getIsSelfReview(): ?bool {
        return $this->isSelfReview;
    }

    /**
     * Gets the primaryReviewers property value. 
     * @return array<SubjectSet>|null
    */
    public function getPrimaryReviewers(): ?array {
        return $this->primaryReviewers;
    }

    /**
     * Gets the schedule property value. 
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
     * Sets the expirationBehavior property value. 
     *  @param AccessReviewExpirationBehavior|null $value Value to set for the expirationBehavior property.
    */
    public function setExpirationBehavior(?AccessReviewExpirationBehavior $value ): void {
        $this->expirationBehavior = $value;
    }

    /**
     * Sets the fallbackReviewers property value. 
     *  @param array<SubjectSet>|null $value Value to set for the fallbackReviewers property.
    */
    public function setFallbackReviewers(?array $value ): void {
        $this->fallbackReviewers = $value;
    }

    /**
     * Sets the isEnabled property value. 
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the isRecommendationEnabled property value. 
     *  @param bool|null $value Value to set for the isRecommendationEnabled property.
    */
    public function setIsRecommendationEnabled(?bool $value ): void {
        $this->isRecommendationEnabled = $value;
    }

    /**
     * Sets the isReviewerJustificationRequired property value. 
     *  @param bool|null $value Value to set for the isReviewerJustificationRequired property.
    */
    public function setIsReviewerJustificationRequired(?bool $value ): void {
        $this->isReviewerJustificationRequired = $value;
    }

    /**
     * Sets the isSelfReview property value. 
     *  @param bool|null $value Value to set for the isSelfReview property.
    */
    public function setIsSelfReview(?bool $value ): void {
        $this->isSelfReview = $value;
    }

    /**
     * Sets the primaryReviewers property value. 
     *  @param array<SubjectSet>|null $value Value to set for the primaryReviewers property.
    */
    public function setPrimaryReviewers(?array $value ): void {
        $this->primaryReviewers = $value;
    }

    /**
     * Sets the schedule property value. 
     *  @param EntitlementManagementSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?EntitlementManagementSchedule $value ): void {
        $this->schedule = $value;
    }

}
