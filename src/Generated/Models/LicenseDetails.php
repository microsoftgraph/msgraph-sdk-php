<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LicenseDetails extends Entity implements Parsable 
{
    /**
     * @var array<ServicePlanInfo>|null $servicePlans Information about the service plans assigned with the license. Read-only, Not nullable
    */
    private ?array $servicePlans = null;
    
    /**
     * @var string|null $skuId Unique identifier (GUID) for the service SKU. Equal to the skuId property on the related SubscribedSku object. Read-only
    */
    private ?string $skuId = null;
    
    /**
     * @var string|null $skuPartNumber Unique SKU display name. Equal to the skuPartNumber on the related SubscribedSku object; for example: 'AAD_Premium'. Read-only
    */
    private ?string $skuPartNumber = null;
    
    /**
     * Instantiates a new licenseDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.licenseDetails');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LicenseDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LicenseDetails {
        return new LicenseDetails();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'servicePlans' => function (ParseNode $n) use ($o) { $o->setServicePlans($n->getCollectionOfObjectValues(array(ServicePlanInfo::class, 'createFromDiscriminatorValue'))); },
            'skuId' => function (ParseNode $n) use ($o) { $o->setSkuId($n->getStringValue()); },
            'skuPartNumber' => function (ParseNode $n) use ($o) { $o->setSkuPartNumber($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the servicePlans property value. Information about the service plans assigned with the license. Read-only, Not nullable
     * @return array<ServicePlanInfo>|null
    */
    public function getServicePlans(): ?array {
        return $this->servicePlans;
    }

    /**
     * Gets the skuId property value. Unique identifier (GUID) for the service SKU. Equal to the skuId property on the related SubscribedSku object. Read-only
     * @return string|null
    */
    public function getSkuId(): ?string {
        return $this->skuId;
    }

    /**
     * Gets the skuPartNumber property value. Unique SKU display name. Equal to the skuPartNumber on the related SubscribedSku object; for example: 'AAD_Premium'. Read-only
     * @return string|null
    */
    public function getSkuPartNumber(): ?string {
        return $this->skuPartNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('servicePlans', $this->servicePlans);
        $writer->writeStringValue('skuId', $this->skuId);
        $writer->writeStringValue('skuPartNumber', $this->skuPartNumber);
    }

    /**
     * Sets the servicePlans property value. Information about the service plans assigned with the license. Read-only, Not nullable
     *  @param array<ServicePlanInfo>|null $value Value to set for the servicePlans property.
    */
    public function setServicePlans(?array $value ): void {
        $this->servicePlans = $value;
    }

    /**
     * Sets the skuId property value. Unique identifier (GUID) for the service SKU. Equal to the skuId property on the related SubscribedSku object. Read-only
     *  @param string|null $value Value to set for the skuId property.
    */
    public function setSkuId(?string $value ): void {
        $this->skuId = $value;
    }

    /**
     * Sets the skuPartNumber property value. Unique SKU display name. Equal to the skuPartNumber on the related SubscribedSku object; for example: 'AAD_Premium'. Read-only
     *  @param string|null $value Value to set for the skuPartNumber property.
    */
    public function setSkuPartNumber(?string $value ): void {
        $this->skuPartNumber = $value;
    }

}
