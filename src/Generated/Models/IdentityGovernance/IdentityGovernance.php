<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Generated\Models\AccessReviewSet;
use Microsoft\Graph\Generated\Models\AppConsentApprovalRoute;
use Microsoft\Graph\Generated\Models\EntitlementManagement;
use Microsoft\Graph\Generated\Models\TermsOfUseContainer;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IdentityGovernance implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new identityGovernance and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityGovernance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityGovernance {
        return new IdentityGovernance();
    }

    /**
     * Gets the accessReviews property value. The accessReviews property
     * @return AccessReviewSet|null
    */
    public function getAccessReviews(): ?AccessReviewSet {
        $val = $this->getBackingStore()->get('accessReviews');
        if (is_null($val) || $val instanceof AccessReviewSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessReviews'");
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the appConsent property value. The appConsent property
     * @return AppConsentApprovalRoute|null
    */
    public function getAppConsent(): ?AppConsentApprovalRoute {
        $val = $this->getBackingStore()->get('appConsent');
        if (is_null($val) || $val instanceof AppConsentApprovalRoute) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appConsent'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the entitlementManagement property value. The entitlementManagement property
     * @return EntitlementManagement|null
    */
    public function getEntitlementManagement(): ?EntitlementManagement {
        $val = $this->getBackingStore()->get('entitlementManagement');
        if (is_null($val) || $val instanceof EntitlementManagement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entitlementManagement'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessReviews' => fn(ParseNode $n) => $o->setAccessReviews($n->getObjectValue([AccessReviewSet::class, 'createFromDiscriminatorValue'])),
            'appConsent' => fn(ParseNode $n) => $o->setAppConsent($n->getObjectValue([AppConsentApprovalRoute::class, 'createFromDiscriminatorValue'])),
            'entitlementManagement' => fn(ParseNode $n) => $o->setEntitlementManagement($n->getObjectValue([EntitlementManagement::class, 'createFromDiscriminatorValue'])),
            'lifecycleWorkflows' => fn(ParseNode $n) => $o->setLifecycleWorkflows($n->getObjectValue([LifecycleWorkflowsContainer::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'termsOfUse' => fn(ParseNode $n) => $o->setTermsOfUse($n->getObjectValue([TermsOfUseContainer::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the lifecycleWorkflows property value. The lifecycleWorkflows property
     * @return LifecycleWorkflowsContainer|null
    */
    public function getLifecycleWorkflows(): ?LifecycleWorkflowsContainer {
        $val = $this->getBackingStore()->get('lifecycleWorkflows');
        if (is_null($val) || $val instanceof LifecycleWorkflowsContainer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lifecycleWorkflows'");
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
     * Gets the termsOfUse property value. The termsOfUse property
     * @return TermsOfUseContainer|null
    */
    public function getTermsOfUse(): ?TermsOfUseContainer {
        $val = $this->getBackingStore()->get('termsOfUse');
        if (is_null($val) || $val instanceof TermsOfUseContainer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termsOfUse'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accessReviews', $this->getAccessReviews());
        $writer->writeObjectValue('appConsent', $this->getAppConsent());
        $writer->writeObjectValue('entitlementManagement', $this->getEntitlementManagement());
        $writer->writeObjectValue('lifecycleWorkflows', $this->getLifecycleWorkflows());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('termsOfUse', $this->getTermsOfUse());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessReviews property value. The accessReviews property
     * @param AccessReviewSet|null $value Value to set for the accessReviews property.
    */
    public function setAccessReviews(?AccessReviewSet $value): void {
        $this->getBackingStore()->set('accessReviews', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the appConsent property value. The appConsent property
     * @param AppConsentApprovalRoute|null $value Value to set for the appConsent property.
    */
    public function setAppConsent(?AppConsentApprovalRoute $value): void {
        $this->getBackingStore()->set('appConsent', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the entitlementManagement property value. The entitlementManagement property
     * @param EntitlementManagement|null $value Value to set for the entitlementManagement property.
    */
    public function setEntitlementManagement(?EntitlementManagement $value): void {
        $this->getBackingStore()->set('entitlementManagement', $value);
    }

    /**
     * Sets the lifecycleWorkflows property value. The lifecycleWorkflows property
     * @param LifecycleWorkflowsContainer|null $value Value to set for the lifecycleWorkflows property.
    */
    public function setLifecycleWorkflows(?LifecycleWorkflowsContainer $value): void {
        $this->getBackingStore()->set('lifecycleWorkflows', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the termsOfUse property value. The termsOfUse property
     * @param TermsOfUseContainer|null $value Value to set for the termsOfUse property.
    */
    public function setTermsOfUse(?TermsOfUseContainer $value): void {
        $this->getBackingStore()->set('termsOfUse', $value);
    }

}
