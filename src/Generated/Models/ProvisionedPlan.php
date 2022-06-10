<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProvisionedPlan implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $capabilityStatus For example, 'Enabled'.
    */
    private ?string $capabilityStatus = null;
    
    /**
     * @var string|null $provisioningStatus For example, 'Success'.
    */
    private ?string $provisioningStatus = null;
    
    /**
     * @var string|null $service The name of the service; for example, 'AccessControlS2S'
    */
    private ?string $service = null;
    
    /**
     * Instantiates a new provisionedPlan and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvisionedPlan
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvisionedPlan {
        return new ProvisionedPlan();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the capabilityStatus property value. For example, 'Enabled'.
     * @return string|null
    */
    public function getCapabilityStatus(): ?string {
        return $this->capabilityStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'capabilityStatus' => function (ParseNode $n) use ($o) { $o->setCapabilityStatus($n->getStringValue()); },
            'provisioningStatus' => function (ParseNode $n) use ($o) { $o->setProvisioningStatus($n->getStringValue()); },
            'service' => function (ParseNode $n) use ($o) { $o->setService($n->getStringValue()); },
        ];
    }

    /**
     * Gets the provisioningStatus property value. For example, 'Success'.
     * @return string|null
    */
    public function getProvisioningStatus(): ?string {
        return $this->provisioningStatus;
    }

    /**
     * Gets the service property value. The name of the service; for example, 'AccessControlS2S'
     * @return string|null
    */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('capabilityStatus', $this->capabilityStatus);
        $writer->writeStringValue('provisioningStatus', $this->provisioningStatus);
        $writer->writeStringValue('service', $this->service);
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
     * Sets the capabilityStatus property value. For example, 'Enabled'.
     *  @param string|null $value Value to set for the capabilityStatus property.
    */
    public function setCapabilityStatus(?string $value ): void {
        $this->capabilityStatus = $value;
    }

    /**
     * Sets the provisioningStatus property value. For example, 'Success'.
     *  @param string|null $value Value to set for the provisioningStatus property.
    */
    public function setProvisioningStatus(?string $value ): void {
        $this->provisioningStatus = $value;
    }

    /**
     * Sets the service property value. The name of the service; for example, 'AccessControlS2S'
     *  @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value ): void {
        $this->service = $value;
    }

}
