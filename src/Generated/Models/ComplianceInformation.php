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

class ComplianceInformation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new complianceInformation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComplianceInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComplianceInformation {
        return new ComplianceInformation();
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the certificationControls property value. Collection of the certification controls associated with certification
     * @return array<CertificationControl>|null
    */
    public function getCertificationControls(): ?array {
        $val = $this->getBackingStore()->get('certificationControls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CertificationControl::class);
            /** @var array<CertificationControl>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificationControls'");
    }

    /**
     * Gets the certificationName property value. Compliance certification name (for example, ISO 27018:2014, GDPR, FedRAMP, NIST 800-171)
     * @return string|null
    */
    public function getCertificationName(): ?string {
        $val = $this->getBackingStore()->get('certificationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificationName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'certificationControls' => fn(ParseNode $n) => $o->setCertificationControls($n->getCollectionOfObjectValues([CertificationControl::class, 'createFromDiscriminatorValue'])),
            'certificationName' => fn(ParseNode $n) => $o->setCertificationName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('certificationControls', $this->getCertificationControls());
        $writer->writeStringValue('certificationName', $this->getCertificationName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the certificationControls property value. Collection of the certification controls associated with certification
     * @param array<CertificationControl>|null $value Value to set for the certificationControls property.
    */
    public function setCertificationControls(?array $value): void {
        $this->getBackingStore()->set('certificationControls', $value);
    }

    /**
     * Sets the certificationName property value. Compliance certification name (for example, ISO 27018:2014, GDPR, FedRAMP, NIST 800-171)
     * @param string|null $value Value to set for the certificationName property.
    */
    public function setCertificationName(?string $value): void {
        $this->getBackingStore()->set('certificationName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
