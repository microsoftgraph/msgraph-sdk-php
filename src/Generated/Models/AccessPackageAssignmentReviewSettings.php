<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageAssignmentReviewSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AccessPackageAssignmentReviewSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the expirationBehavior property value. The default decision to apply if the access is not reviewed. The possible values are: keepAccess, removeAccess, acceptAccessRecommendation, unknownFutureValue.
     * @return AccessReviewExpirationBehavior|null
    */
    public function getExpirationBehavior(): ?AccessReviewExpirationBehavior {
        $val = $this->getBackingStore()->get('expirationBehavior');
        if (is_null($val) || $val instanceof AccessReviewExpirationBehavior) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationBehavior'");
    }

    /**
     * Gets the fallbackReviewers property value. This collection specifies the users who will be the fallback reviewers when the primary reviewers don't respond.
     * @return array<SubjectSet>|null
    */
    public function getFallbackReviewers(): ?array {
        $val = $this->getBackingStore()->get('fallbackReviewers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SubjectSet::class);
            /** @var array<SubjectSet>|null $val */
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
        return  [
            'expirationBehavior' => fn(ParseNode $n) => $o->setExpirationBehavior($n->getEnumValue(AccessReviewExpirationBehavior::class)),
            'fallbackReviewers' => fn(ParseNode $n) => $o->setFallbackReviewers($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'isRecommendationEnabled' => fn(ParseNode $n) => $o->setIsRecommendationEnabled($n->getBooleanValue()),
            'isReviewerJustificationRequired' => fn(ParseNode $n) => $o->setIsReviewerJustificationRequired($n->getBooleanValue()),
            'isSelfReview' => fn(ParseNode $n) => $o->setIsSelfReview($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'primaryReviewers' => fn(ParseNode $n) => $o->setPrimaryReviewers($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([EntitlementManagementSchedule::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isEnabled property value. If true, access reviews are required for assignments through this policy.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the isRecommendationEnabled property value. Specifies whether to display recommendations to the reviewer. The default value is true.
     * @return bool|null
    */
    public function getIsRecommendationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isRecommendationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRecommendationEnabled'");
    }

    /**
     * Gets the isReviewerJustificationRequired property value. Specifies whether the reviewer must provide justification for the approval. The default value is true.
     * @return bool|null
    */
    public function getIsReviewerJustificationRequired(): ?bool {
        $val = $this->getBackingStore()->get('isReviewerJustificationRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isReviewerJustificationRequired'");
    }

    /**
     * Gets the isSelfReview property value. Specifies whether the principals can review their own assignments.
     * @return bool|null
    */
    public function getIsSelfReview(): ?bool {
        $val = $this->getBackingStore()->get('isSelfReview');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSelfReview'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the primaryReviewers property value. This collection specifies the users or group of users who will review the access package assignments.
     * @return array<SubjectSet>|null
    */
    public function getPrimaryReviewers(): ?array {
        $val = $this->getBackingStore()->get('primaryReviewers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SubjectSet::class);
            /** @var array<SubjectSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryReviewers'");
    }

    /**
     * Gets the schedule property value. When the first review should start and how often it should recur.
     * @return EntitlementManagementSchedule|null
    */
    public function getSchedule(): ?EntitlementManagementSchedule {
        $val = $this->getBackingStore()->get('schedule');
        if (is_null($val) || $val instanceof EntitlementManagementSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedule'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('expirationBehavior', $this->getExpirationBehavior());
        $writer->writeCollectionOfObjectValues('fallbackReviewers', $this->getFallbackReviewers());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeBooleanValue('isRecommendationEnabled', $this->getIsRecommendationEnabled());
        $writer->writeBooleanValue('isReviewerJustificationRequired', $this->getIsReviewerJustificationRequired());
        $writer->writeBooleanValue('isSelfReview', $this->getIsSelfReview());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('primaryReviewers', $this->getPrimaryReviewers());
        $writer->writeObjectValue('schedule', $this->getSchedule());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the expirationBehavior property value. The default decision to apply if the access is not reviewed. The possible values are: keepAccess, removeAccess, acceptAccessRecommendation, unknownFutureValue.
     * @param AccessReviewExpirationBehavior|null $value Value to set for the expirationBehavior property.
    */
    public function setExpirationBehavior(?AccessReviewExpirationBehavior $value): void {
        $this->getBackingStore()->set('expirationBehavior', $value);
    }

    /**
     * Sets the fallbackReviewers property value. This collection specifies the users who will be the fallback reviewers when the primary reviewers don't respond.
     * @param array<SubjectSet>|null $value Value to set for the fallbackReviewers property.
    */
    public function setFallbackReviewers(?array $value): void {
        $this->getBackingStore()->set('fallbackReviewers', $value);
    }

    /**
     * Sets the isEnabled property value. If true, access reviews are required for assignments through this policy.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the isRecommendationEnabled property value. Specifies whether to display recommendations to the reviewer. The default value is true.
     * @param bool|null $value Value to set for the isRecommendationEnabled property.
    */
    public function setIsRecommendationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isRecommendationEnabled', $value);
    }

    /**
     * Sets the isReviewerJustificationRequired property value. Specifies whether the reviewer must provide justification for the approval. The default value is true.
     * @param bool|null $value Value to set for the isReviewerJustificationRequired property.
    */
    public function setIsReviewerJustificationRequired(?bool $value): void {
        $this->getBackingStore()->set('isReviewerJustificationRequired', $value);
    }

    /**
     * Sets the isSelfReview property value. Specifies whether the principals can review their own assignments.
     * @param bool|null $value Value to set for the isSelfReview property.
    */
    public function setIsSelfReview(?bool $value): void {
        $this->getBackingStore()->set('isSelfReview', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the primaryReviewers property value. This collection specifies the users or group of users who will review the access package assignments.
     * @param array<SubjectSet>|null $value Value to set for the primaryReviewers property.
    */
    public function setPrimaryReviewers(?array $value): void {
        $this->getBackingStore()->set('primaryReviewers', $value);
    }

    /**
     * Sets the schedule property value. When the first review should start and how often it should recur.
     * @param EntitlementManagementSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?EntitlementManagementSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

}
