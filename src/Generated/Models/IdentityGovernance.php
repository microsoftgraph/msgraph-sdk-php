<?php

namespace Microsoft\Graph\Generated\Models;

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
     * Instantiates a new IdentityGovernance and sets the default values.
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
     * Gets the accessReviews property value. 
     * @return AccessReviewSet|null
    */
    public function getAccessReviews(): ?AccessReviewSet {
        return $this->getBackingStore()->get('accessReviews');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the appConsent property value. 
     * @return AppConsentApprovalRoute|null
    */
    public function getAppConsent(): ?AppConsentApprovalRoute {
        return $this->getBackingStore()->get('appConsent');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the entitlementManagement property value. 
     * @return EntitlementManagement|null
    */
    public function getEntitlementManagement(): ?EntitlementManagement {
        return $this->getBackingStore()->get('entitlementManagement');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessReviews' => fn(ParseNode $n) => $o->setAccessReviews($n->getObjectValue([AccessReviewSet::class, 'createFromDiscriminatorValue'])),
            'appConsent' => fn(ParseNode $n) => $o->setAppConsent($n->getObjectValue([AppConsentApprovalRoute::class, 'createFromDiscriminatorValue'])),
            'entitlementManagement' => fn(ParseNode $n) => $o->setEntitlementManagement($n->getObjectValue([EntitlementManagement::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'termsOfUse' => fn(ParseNode $n) => $o->setTermsOfUse($n->getObjectValue([TermsOfUseContainer::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the termsOfUse property value. 
     * @return TermsOfUseContainer|null
    */
    public function getTermsOfUse(): ?TermsOfUseContainer {
        return $this->getBackingStore()->get('termsOfUse');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accessReviews', $this->getAccessReviews());
        $writer->writeObjectValue('appConsent', $this->getAppConsent());
        $writer->writeObjectValue('entitlementManagement', $this->getEntitlementManagement());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('termsOfUse', $this->getTermsOfUse());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessReviews property value. 
     * @param AccessReviewSet|null $value Value to set for the accessReviews property.
    */
    public function setAccessReviews(?AccessReviewSet $value): void {
        $this->getBackingStore()->set('accessReviews', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the appConsent property value. 
     * @param AppConsentApprovalRoute|null $value Value to set for the appConsent property.
    */
    public function setAppConsent(?AppConsentApprovalRoute $value): void {
        $this->getBackingStore()->set('appConsent', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the entitlementManagement property value. 
     * @param EntitlementManagement|null $value Value to set for the entitlementManagement property.
    */
    public function setEntitlementManagement(?EntitlementManagement $value): void {
        $this->getBackingStore()->set('entitlementManagement', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the termsOfUse property value. 
     * @param TermsOfUseContainer|null $value Value to set for the termsOfUse property.
    */
    public function setTermsOfUse(?TermsOfUseContainer $value): void {
        $this->getBackingStore()->set('termsOfUse', $value);
    }

}
