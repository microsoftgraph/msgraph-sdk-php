<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class X509CertificateUserBinding implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $priority The priority property
    */
    private ?int $priority = null;
    
    /**
     * @var string|null $userProperty The userProperty property
    */
    private ?string $userProperty = null;
    
    /**
     * @var string|null $x509CertificateField The x509CertificateField property
    */
    private ?string $x509CertificateField = null;
    
    /**
     * Instantiates a new x509CertificateUserBinding and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.x509CertificateUserBinding');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return X509CertificateUserBinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): X509CertificateUserBinding {
        return new X509CertificateUserBinding();
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'priority' => function (ParseNode $n) use ($o) { $o->setPriority($n->getIntegerValue()); },
            'userProperty' => function (ParseNode $n) use ($o) { $o->setUserProperty($n->getStringValue()); },
            'x509CertificateField' => function (ParseNode $n) use ($o) { $o->setX509CertificateField($n->getStringValue()); },
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
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the userProperty property value. The userProperty property
     * @return string|null
    */
    public function getUserProperty(): ?string {
        return $this->userProperty;
    }

    /**
     * Gets the x509CertificateField property value. The x509CertificateField property
     * @return string|null
    */
    public function getX509CertificateField(): ?string {
        return $this->x509CertificateField;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('priority', $this->priority);
        $writer->writeStringValue('userProperty', $this->userProperty);
        $writer->writeStringValue('x509CertificateField', $this->x509CertificateField);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the priority property value. The priority property
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the userProperty property value. The userProperty property
     *  @param string|null $value Value to set for the userProperty property.
    */
    public function setUserProperty(?string $value ): void {
        $this->userProperty = $value;
    }

    /**
     * Sets the x509CertificateField property value. The x509CertificateField property
     *  @param string|null $value Value to set for the x509CertificateField property.
    */
    public function setX509CertificateField(?string $value ): void {
        $this->x509CertificateField = $value;
    }

}
