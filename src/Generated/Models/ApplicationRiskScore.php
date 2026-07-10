<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ApplicationRiskScore implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ApplicationRiskScore and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationRiskScore
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationRiskScore {
        return new ApplicationRiskScore();
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
     * Gets the compliance property value. Specifies the compliance risk score based on the application's alignment with regulatory standards and industry certifications such as HIPAA, CSA, and PCI-DSS.
     * @return float|null
    */
    public function getCompliance(): ?float {
        $val = $this->getBackingStore()->get('compliance');
        if (is_null($val) || is_float($val)) {
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
            'compliance' => fn(ParseNode $n) => $o->setCompliance($n->getFloatValue()),
            'legal' => fn(ParseNode $n) => $o->setLegal($n->getFloatValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getFloatValue()),
            'security' => fn(ParseNode $n) => $o->setSecurity($n->getFloatValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getFloatValue()),
        ];
    }

    /**
     * Gets the legal property value. Specifies the legal risk score based on data protection practices, privacy policy transparency, and jurisdictional compliance to regulations and policies such as DMCA and data retention policy.
     * @return float|null
    */
    public function getLegal(): ?float {
        $val = $this->getBackingStore()->get('legal');
        if (is_null($val) || is_float($val)) {
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
     * Gets the provider property value. Specifies the provider risk score based on vendor credibility, operational maturity, and trustworthiness.
     * @return float|null
    */
    public function getProvider(): ?float {
        $val = $this->getBackingStore()->get('provider');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provider'");
    }

    /**
     * Gets the security property value. Specifies the security risk score based on authentication strength, encryption, vulnerability management, and overall security hygiene.
     * @return float|null
    */
    public function getSecurity(): ?float {
        $val = $this->getBackingStore()->get('security');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'security'");
    }

    /**
     * Gets the total property value. Represents the composite risk score derived from all risk categories.
     * @return float|null
    */
    public function getTotal(): ?float {
        $val = $this->getBackingStore()->get('total');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'total'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('compliance', $this->getCompliance());
        $writer->writeFloatValue('legal', $this->getLegal());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeFloatValue('provider', $this->getProvider());
        $writer->writeFloatValue('security', $this->getSecurity());
        $writer->writeFloatValue('total', $this->getTotal());
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
     * Sets the compliance property value. Specifies the compliance risk score based on the application's alignment with regulatory standards and industry certifications such as HIPAA, CSA, and PCI-DSS.
     * @param float|null $value Value to set for the compliance property.
    */
    public function setCompliance(?float $value): void {
        $this->getBackingStore()->set('compliance', $value);
    }

    /**
     * Sets the legal property value. Specifies the legal risk score based on data protection practices, privacy policy transparency, and jurisdictional compliance to regulations and policies such as DMCA and data retention policy.
     * @param float|null $value Value to set for the legal property.
    */
    public function setLegal(?float $value): void {
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
     * Sets the provider property value. Specifies the provider risk score based on vendor credibility, operational maturity, and trustworthiness.
     * @param float|null $value Value to set for the provider property.
    */
    public function setProvider(?float $value): void {
        $this->getBackingStore()->set('provider', $value);
    }

    /**
     * Sets the security property value. Specifies the security risk score based on authentication strength, encryption, vulnerability management, and overall security hygiene.
     * @param float|null $value Value to set for the security property.
    */
    public function setSecurity(?float $value): void {
        $this->getBackingStore()->set('security', $value);
    }

    /**
     * Sets the total property value. Represents the composite risk score derived from all risk categories.
     * @param float|null $value Value to set for the total property.
    */
    public function setTotal(?float $value): void {
        $this->getBackingStore()->set('total', $value);
    }

}
