<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ApplicationRiskFactors implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ApplicationRiskFactors and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationRiskFactors
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationRiskFactors {
        return new ApplicationRiskFactors();
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
     * Gets the compliance property value. Provides information about the application's adherence to security frameworks, certifications, and industry compliance standards.
     * @return ApplicationSecurityCompliance|null
    */
    public function getCompliance(): ?ApplicationSecurityCompliance {
        $val = $this->getBackingStore()->get('compliance');
        if (is_null($val) || $val instanceof ApplicationSecurityCompliance) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliance'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'compliance' => fn(ParseNode $n) => $o->setCompliance($n->getObjectValue([ApplicationSecurityCompliance::class, 'createFromDiscriminatorValue'])),
            'general' => fn(ParseNode $n) => $o->setGeneral($n->getObjectValue([ApplicationRiskFactorGeneralInfo::class, 'createFromDiscriminatorValue'])),
            'legal' => fn(ParseNode $n) => $o->setLegal($n->getObjectValue([ApplicationRiskFactorLegalInfo::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'security' => fn(ParseNode $n) => $o->setSecurity($n->getObjectValue([ApplicationRiskFactorSecurityInfo::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the general property value. Contains general business, operational, and data handling details that influence the application's risk assessment.
     * @return ApplicationRiskFactorGeneralInfo|null
    */
    public function getGeneral(): ?ApplicationRiskFactorGeneralInfo {
        $val = $this->getBackingStore()->get('general');
        if (is_null($val) || $val instanceof ApplicationRiskFactorGeneralInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'general'");
    }

    /**
     * Gets the legal property value. Provides legal and regulatory compliance information, including data ownership, retention, and GDPR adherence.
     * @return ApplicationRiskFactorLegalInfo|null
    */
    public function getLegal(): ?ApplicationRiskFactorLegalInfo {
        $val = $this->getBackingStore()->get('legal');
        if (is_null($val) || $val instanceof ApplicationRiskFactorLegalInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'legal'");
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
     * Gets the security property value. Contains information related to the application's security posture, such as encryption, authentication, and vulnerability management practices.
     * @return ApplicationRiskFactorSecurityInfo|null
    */
    public function getSecurity(): ?ApplicationRiskFactorSecurityInfo {
        $val = $this->getBackingStore()->get('security');
        if (is_null($val) || $val instanceof ApplicationRiskFactorSecurityInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'security'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('compliance', $this->getCompliance());
        $writer->writeObjectValue('general', $this->getGeneral());
        $writer->writeObjectValue('legal', $this->getLegal());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('security', $this->getSecurity());
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
     * Sets the compliance property value. Provides information about the application's adherence to security frameworks, certifications, and industry compliance standards.
     * @param ApplicationSecurityCompliance|null $value Value to set for the compliance property.
    */
    public function setCompliance(?ApplicationSecurityCompliance $value): void {
        $this->getBackingStore()->set('compliance', $value);
    }

    /**
     * Sets the general property value. Contains general business, operational, and data handling details that influence the application's risk assessment.
     * @param ApplicationRiskFactorGeneralInfo|null $value Value to set for the general property.
    */
    public function setGeneral(?ApplicationRiskFactorGeneralInfo $value): void {
        $this->getBackingStore()->set('general', $value);
    }

    /**
     * Sets the legal property value. Provides legal and regulatory compliance information, including data ownership, retention, and GDPR adherence.
     * @param ApplicationRiskFactorLegalInfo|null $value Value to set for the legal property.
    */
    public function setLegal(?ApplicationRiskFactorLegalInfo $value): void {
        $this->getBackingStore()->set('legal', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the security property value. Contains information related to the application's security posture, such as encryption, authentication, and vulnerability management practices.
     * @param ApplicationRiskFactorSecurityInfo|null $value Value to set for the security property.
    */
    public function setSecurity(?ApplicationRiskFactorSecurityInfo $value): void {
        $this->getBackingStore()->set('security', $value);
    }

}
