<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IdentityProtectionRoot implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IdentityProtectionRoot and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityProtectionRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityProtectionRoot {
        return new IdentityProtectionRoot();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'riskDetections' => fn(ParseNode $n) => $o->setRiskDetections($n->getCollectionOfObjectValues([RiskDetection::class, 'createFromDiscriminatorValue'])),
            'riskyServicePrincipals' => fn(ParseNode $n) => $o->setRiskyServicePrincipals($n->getCollectionOfObjectValues([RiskyServicePrincipal::class, 'createFromDiscriminatorValue'])),
            'riskyUsers' => fn(ParseNode $n) => $o->setRiskyUsers($n->getCollectionOfObjectValues([RiskyUser::class, 'createFromDiscriminatorValue'])),
            'servicePrincipalRiskDetections' => fn(ParseNode $n) => $o->setServicePrincipalRiskDetections($n->getCollectionOfObjectValues([ServicePrincipalRiskDetection::class, 'createFromDiscriminatorValue'])),
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
     * Gets the riskDetections property value. Risk detection in Azure AD Identity Protection and the associated information about the detection.
     * @return array<RiskDetection>|null
    */
    public function getRiskDetections(): ?array {
        return $this->getBackingStore()->get('riskDetections');
    }

    /**
     * Gets the riskyServicePrincipals property value. Azure AD service principals that are at risk.
     * @return array<RiskyServicePrincipal>|null
    */
    public function getRiskyServicePrincipals(): ?array {
        return $this->getBackingStore()->get('riskyServicePrincipals');
    }

    /**
     * Gets the riskyUsers property value. Users that are flagged as at-risk by Azure AD Identity Protection.
     * @return array<RiskyUser>|null
    */
    public function getRiskyUsers(): ?array {
        return $this->getBackingStore()->get('riskyUsers');
    }

    /**
     * Gets the servicePrincipalRiskDetections property value. Represents information about detected at-risk service principals in an Azure AD tenant.
     * @return array<ServicePrincipalRiskDetection>|null
    */
    public function getServicePrincipalRiskDetections(): ?array {
        return $this->getBackingStore()->get('servicePrincipalRiskDetections');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('riskDetections', $this->getRiskDetections());
        $writer->writeCollectionOfObjectValues('riskyServicePrincipals', $this->getRiskyServicePrincipals());
        $writer->writeCollectionOfObjectValues('riskyUsers', $this->getRiskyUsers());
        $writer->writeCollectionOfObjectValues('servicePrincipalRiskDetections', $this->getServicePrincipalRiskDetections());
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
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the riskDetections property value. Risk detection in Azure AD Identity Protection and the associated information about the detection.
     * @param array<RiskDetection>|null $value Value to set for the riskDetections property.
    */
    public function setRiskDetections(?array $value): void {
        $this->getBackingStore()->set('riskDetections', $value);
    }

    /**
     * Sets the riskyServicePrincipals property value. Azure AD service principals that are at risk.
     * @param array<RiskyServicePrincipal>|null $value Value to set for the riskyServicePrincipals property.
    */
    public function setRiskyServicePrincipals(?array $value): void {
        $this->getBackingStore()->set('riskyServicePrincipals', $value);
    }

    /**
     * Sets the riskyUsers property value. Users that are flagged as at-risk by Azure AD Identity Protection.
     * @param array<RiskyUser>|null $value Value to set for the riskyUsers property.
    */
    public function setRiskyUsers(?array $value): void {
        $this->getBackingStore()->set('riskyUsers', $value);
    }

    /**
     * Sets the servicePrincipalRiskDetections property value. Represents information about detected at-risk service principals in an Azure AD tenant.
     * @param array<ServicePrincipalRiskDetection>|null $value Value to set for the servicePrincipalRiskDetections property.
    */
    public function setServicePrincipalRiskDetections(?array $value): void {
        $this->getBackingStore()->set('servicePrincipalRiskDetections', $value);
    }

}
