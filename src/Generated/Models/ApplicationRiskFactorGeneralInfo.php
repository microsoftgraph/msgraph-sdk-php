<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Date;

class ApplicationRiskFactorGeneralInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ApplicationRiskFactorGeneralInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationRiskFactorGeneralInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationRiskFactorGeneralInfo {
        return new ApplicationRiskFactorGeneralInfo();
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
     * Gets the consumerPopularity property value. Indicates the relative popularity or adoption of the application based on the user or tenant usage metrics.
     * @return int|null
    */
    public function getConsumerPopularity(): ?int {
        $val = $this->getBackingStore()->get('consumerPopularity');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'consumerPopularity'");
    }

    /**
     * Gets the domainRegistrationDate property value. Specifies the date when the application's primary domain was registered, used to assess domain maturity and legitimacy.
     * @return Date|null
    */
    public function getDomainRegistrationDate(): ?Date {
        $val = $this->getBackingStore()->get('domainRegistrationDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainRegistrationDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'consumerPopularity' => fn(ParseNode $n) => $o->setConsumerPopularity($n->getIntegerValue()),
            'domainRegistrationDate' => fn(ParseNode $n) => $o->setDomainRegistrationDate($n->getDateValue()),
            'founded' => fn(ParseNode $n) => $o->setFounded($n->getIntegerValue()),
            'hasDisasterRecoveryPlan' => fn(ParseNode $n) => $o->setHasDisasterRecoveryPlan($n->getBooleanValue()),
            'hold' => fn(ParseNode $n) => $o->setHold($n->getEnumValue(HoldType::class)),
            'hostingCompanyName' => fn(ParseNode $n) => $o->setHostingCompanyName($n->getStringValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([ApplicationLocation::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'privacyPolicy' => fn(ParseNode $n) => $o->setPrivacyPolicy($n->getStringValue()),
            'processedDataTypes' => fn(ParseNode $n) => $o->setProcessedDataTypes($n->getEnumValue(ApplicationDataType::class)),
            'termsOfService' => fn(ParseNode $n) => $o->setTermsOfService($n->getStringValue()),
        ];
    }

    /**
     * Gets the founded property value. Year the company or organization behind the application was founded.
     * @return int|null
    */
    public function getFounded(): ?int {
        $val = $this->getBackingStore()->get('founded');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'founded'");
    }

    /**
     * Gets the hasDisasterRecoveryPlan property value. Indicates whether the application provider maintains a disaster recovery or business continuity plan.
     * @return bool|null
    */
    public function getHasDisasterRecoveryPlan(): ?bool {
        $val = $this->getBackingStore()->get('hasDisasterRecoveryPlan');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasDisasterRecoveryPlan'");
    }

    /**
     * Gets the hold property value. The hold property
     * @return HoldType|null
    */
    public function getHold(): ?HoldType {
        $val = $this->getBackingStore()->get('hold');
        if (is_null($val) || $val instanceof HoldType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hold'");
    }

    /**
     * Gets the hostingCompanyName property value. Specifies the name of the company or provider that hosts the application's infrastructure.
     * @return string|null
    */
    public function getHostingCompanyName(): ?string {
        $val = $this->getBackingStore()->get('hostingCompanyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostingCompanyName'");
    }

    /**
     * Gets the location property value. Provides the geographical and operational location information for the application, including data center and headquarters regions.
     * @return ApplicationLocation|null
    */
    public function getLocation(): ?ApplicationLocation {
        $val = $this->getBackingStore()->get('location');
        if (is_null($val) || $val instanceof ApplicationLocation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'location'");
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
     * Gets the privacyPolicy property value. Specifies the URL of the application's privacy policy.
     * @return string|null
    */
    public function getPrivacyPolicy(): ?string {
        $val = $this->getBackingStore()->get('privacyPolicy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privacyPolicy'");
    }

    /**
     * Gets the processedDataTypes property value. The processedDataTypes property
     * @return ApplicationDataType|null
    */
    public function getProcessedDataTypes(): ?ApplicationDataType {
        $val = $this->getBackingStore()->get('processedDataTypes');
        if (is_null($val) || $val instanceof ApplicationDataType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processedDataTypes'");
    }

    /**
     * Gets the termsOfService property value. Specifies the URL of the application's terms of service.
     * @return string|null
    */
    public function getTermsOfService(): ?string {
        $val = $this->getBackingStore()->get('termsOfService');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termsOfService'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('consumerPopularity', $this->getConsumerPopularity());
        $writer->writeDateValue('domainRegistrationDate', $this->getDomainRegistrationDate());
        $writer->writeIntegerValue('founded', $this->getFounded());
        $writer->writeBooleanValue('hasDisasterRecoveryPlan', $this->getHasDisasterRecoveryPlan());
        $writer->writeEnumValue('hold', $this->getHold());
        $writer->writeStringValue('hostingCompanyName', $this->getHostingCompanyName());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('privacyPolicy', $this->getPrivacyPolicy());
        $writer->writeEnumValue('processedDataTypes', $this->getProcessedDataTypes());
        $writer->writeStringValue('termsOfService', $this->getTermsOfService());
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
     * Sets the consumerPopularity property value. Indicates the relative popularity or adoption of the application based on the user or tenant usage metrics.
     * @param int|null $value Value to set for the consumerPopularity property.
    */
    public function setConsumerPopularity(?int $value): void {
        $this->getBackingStore()->set('consumerPopularity', $value);
    }

    /**
     * Sets the domainRegistrationDate property value. Specifies the date when the application's primary domain was registered, used to assess domain maturity and legitimacy.
     * @param Date|null $value Value to set for the domainRegistrationDate property.
    */
    public function setDomainRegistrationDate(?Date $value): void {
        $this->getBackingStore()->set('domainRegistrationDate', $value);
    }

    /**
     * Sets the founded property value. Year the company or organization behind the application was founded.
     * @param int|null $value Value to set for the founded property.
    */
    public function setFounded(?int $value): void {
        $this->getBackingStore()->set('founded', $value);
    }

    /**
     * Sets the hasDisasterRecoveryPlan property value. Indicates whether the application provider maintains a disaster recovery or business continuity plan.
     * @param bool|null $value Value to set for the hasDisasterRecoveryPlan property.
    */
    public function setHasDisasterRecoveryPlan(?bool $value): void {
        $this->getBackingStore()->set('hasDisasterRecoveryPlan', $value);
    }

    /**
     * Sets the hold property value. The hold property
     * @param HoldType|null $value Value to set for the hold property.
    */
    public function setHold(?HoldType $value): void {
        $this->getBackingStore()->set('hold', $value);
    }

    /**
     * Sets the hostingCompanyName property value. Specifies the name of the company or provider that hosts the application's infrastructure.
     * @param string|null $value Value to set for the hostingCompanyName property.
    */
    public function setHostingCompanyName(?string $value): void {
        $this->getBackingStore()->set('hostingCompanyName', $value);
    }

    /**
     * Sets the location property value. Provides the geographical and operational location information for the application, including data center and headquarters regions.
     * @param ApplicationLocation|null $value Value to set for the location property.
    */
    public function setLocation(?ApplicationLocation $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the privacyPolicy property value. Specifies the URL of the application's privacy policy.
     * @param string|null $value Value to set for the privacyPolicy property.
    */
    public function setPrivacyPolicy(?string $value): void {
        $this->getBackingStore()->set('privacyPolicy', $value);
    }

    /**
     * Sets the processedDataTypes property value. The processedDataTypes property
     * @param ApplicationDataType|null $value Value to set for the processedDataTypes property.
    */
    public function setProcessedDataTypes(?ApplicationDataType $value): void {
        $this->getBackingStore()->set('processedDataTypes', $value);
    }

    /**
     * Sets the termsOfService property value. Specifies the URL of the application's terms of service.
     * @param string|null $value Value to set for the termsOfService property.
    */
    public function setTermsOfService(?string $value): void {
        $this->getBackingStore()->set('termsOfService', $value);
    }

}
