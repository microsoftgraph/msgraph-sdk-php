<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ComplianceInformation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<CertificationControl>|null $certificationControls Collection of the certification controls associated with certification
    */
    private ?array $certificationControls = null;
    
    /**
     * @var string|null $certificationName Compliance certification name (for example, ISO 27018:2014, GDPR, FedRAMP, NIST 800-171)
    */
    private ?string $certificationName = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new complianceInformation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.complianceInformation');
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the certificationControls property value. Collection of the certification controls associated with certification
     * @return array<CertificationControl>|null
    */
    public function getCertificationControls(): ?array {
        return $this->certificationControls;
    }

    /**
     * Gets the certificationName property value. Compliance certification name (for example, ISO 27018:2014, GDPR, FedRAMP, NIST 800-171)
     * @return string|null
    */
    public function getCertificationName(): ?string {
        return $this->certificationName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('certificationControls', $this->certificationControls);
        $writer->writeStringValue('certificationName', $this->certificationName);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the certificationControls property value. Collection of the certification controls associated with certification
     *  @param array<CertificationControl>|null $value Value to set for the certificationControls property.
    */
    public function setCertificationControls(?array $value ): void {
        $this->certificationControls = $value;
    }

    /**
     * Sets the certificationName property value. Compliance certification name (for example, ISO 27018:2014, GDPR, FedRAMP, NIST 800-171)
     *  @param string|null $value Value to set for the certificationName property.
    */
    public function setCertificationName(?string $value ): void {
        $this->certificationName = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
