<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class X509CertificateRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $identifier The identifier property
    */
    private ?string $identifier = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var X509CertificateAuthenticationMode|null $x509CertificateAuthenticationMode The x509CertificateAuthenticationMode property
    */
    private ?X509CertificateAuthenticationMode $x509CertificateAuthenticationMode = null;
    
    /**
     * @var X509CertificateRuleType|null $x509CertificateRuleType The x509CertificateRuleType property
    */
    private ?X509CertificateRuleType $x509CertificateRuleType = null;
    
    /**
     * Instantiates a new x509CertificateRule and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.x509CertificateRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return X509CertificateRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): X509CertificateRule {
        return new X509CertificateRule();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'identifier' => function (ParseNode $n) use ($o) { $o->setIdentifier($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'x509CertificateAuthenticationMode' => function (ParseNode $n) use ($o) { $o->setX509CertificateAuthenticationMode($n->getEnumValue(X509CertificateAuthenticationMode::class)); },
            'x509CertificateRuleType' => function (ParseNode $n) use ($o) { $o->setX509CertificateRuleType($n->getEnumValue(X509CertificateRuleType::class)); },
        ];
    }

    /**
     * Gets the identifier property value. The identifier property
     * @return string|null
    */
    public function getIdentifier(): ?string {
        return $this->identifier;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the x509CertificateAuthenticationMode property value. The x509CertificateAuthenticationMode property
     * @return X509CertificateAuthenticationMode|null
    */
    public function getX509CertificateAuthenticationMode(): ?X509CertificateAuthenticationMode {
        return $this->x509CertificateAuthenticationMode;
    }

    /**
     * Gets the x509CertificateRuleType property value. The x509CertificateRuleType property
     * @return X509CertificateRuleType|null
    */
    public function getX509CertificateRuleType(): ?X509CertificateRuleType {
        return $this->x509CertificateRuleType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('identifier', $this->identifier);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('x509CertificateAuthenticationMode', $this->x509CertificateAuthenticationMode);
        $writer->writeEnumValue('x509CertificateRuleType', $this->x509CertificateRuleType);
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
     * Sets the identifier property value. The identifier property
     *  @param string|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?string $value ): void {
        $this->identifier = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the x509CertificateAuthenticationMode property value. The x509CertificateAuthenticationMode property
     *  @param X509CertificateAuthenticationMode|null $value Value to set for the x509CertificateAuthenticationMode property.
    */
    public function setX509CertificateAuthenticationMode(?X509CertificateAuthenticationMode $value ): void {
        $this->x509CertificateAuthenticationMode = $value;
    }

    /**
     * Sets the x509CertificateRuleType property value. The x509CertificateRuleType property
     *  @param X509CertificateRuleType|null $value Value to set for the x509CertificateRuleType property.
    */
    public function setX509CertificateRuleType(?X509CertificateRuleType $value ): void {
        $this->x509CertificateRuleType = $value;
    }

}
