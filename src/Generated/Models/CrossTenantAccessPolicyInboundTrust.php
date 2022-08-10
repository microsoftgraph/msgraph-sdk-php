<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossTenantAccessPolicyInboundTrust implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isCompliantDeviceAccepted Specifies whether compliant devices from external Azure AD organizations are trusted.
    */
    private ?bool $isCompliantDeviceAccepted = null;
    
    /**
     * @var bool|null $isHybridAzureADJoinedDeviceAccepted Specifies whether hybrid Azure AD joined devices from external Azure AD organizations are trusted.
    */
    private ?bool $isHybridAzureADJoinedDeviceAccepted = null;
    
    /**
     * @var bool|null $isMfaAccepted Specifies whether MFA from external Azure AD organizations is trusted.
    */
    private ?bool $isMfaAccepted = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new crossTenantAccessPolicyInboundTrust and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.crossTenantAccessPolicyInboundTrust');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantAccessPolicyInboundTrust
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantAccessPolicyInboundTrust {
        return new CrossTenantAccessPolicyInboundTrust();
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
            'isCompliantDeviceAccepted' => function (ParseNode $n) use ($o) { $o->setIsCompliantDeviceAccepted($n->getBooleanValue()); },
            'isHybridAzureADJoinedDeviceAccepted' => function (ParseNode $n) use ($o) { $o->setIsHybridAzureADJoinedDeviceAccepted($n->getBooleanValue()); },
            'isMfaAccepted' => function (ParseNode $n) use ($o) { $o->setIsMfaAccepted($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isCompliantDeviceAccepted property value. Specifies whether compliant devices from external Azure AD organizations are trusted.
     * @return bool|null
    */
    public function getIsCompliantDeviceAccepted(): ?bool {
        return $this->isCompliantDeviceAccepted;
    }

    /**
     * Gets the isHybridAzureADJoinedDeviceAccepted property value. Specifies whether hybrid Azure AD joined devices from external Azure AD organizations are trusted.
     * @return bool|null
    */
    public function getIsHybridAzureADJoinedDeviceAccepted(): ?bool {
        return $this->isHybridAzureADJoinedDeviceAccepted;
    }

    /**
     * Gets the isMfaAccepted property value. Specifies whether MFA from external Azure AD organizations is trusted.
     * @return bool|null
    */
    public function getIsMfaAccepted(): ?bool {
        return $this->isMfaAccepted;
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
        $writer->writeBooleanValue('isCompliantDeviceAccepted', $this->isCompliantDeviceAccepted);
        $writer->writeBooleanValue('isHybridAzureADJoinedDeviceAccepted', $this->isHybridAzureADJoinedDeviceAccepted);
        $writer->writeBooleanValue('isMfaAccepted', $this->isMfaAccepted);
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
     * Sets the isCompliantDeviceAccepted property value. Specifies whether compliant devices from external Azure AD organizations are trusted.
     *  @param bool|null $value Value to set for the isCompliantDeviceAccepted property.
    */
    public function setIsCompliantDeviceAccepted(?bool $value ): void {
        $this->isCompliantDeviceAccepted = $value;
    }

    /**
     * Sets the isHybridAzureADJoinedDeviceAccepted property value. Specifies whether hybrid Azure AD joined devices from external Azure AD organizations are trusted.
     *  @param bool|null $value Value to set for the isHybridAzureADJoinedDeviceAccepted property.
    */
    public function setIsHybridAzureADJoinedDeviceAccepted(?bool $value ): void {
        $this->isHybridAzureADJoinedDeviceAccepted = $value;
    }

    /**
     * Sets the isMfaAccepted property value. Specifies whether MFA from external Azure AD organizations is trusted.
     *  @param bool|null $value Value to set for the isMfaAccepted property.
    */
    public function setIsMfaAccepted(?bool $value ): void {
        $this->isMfaAccepted = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
