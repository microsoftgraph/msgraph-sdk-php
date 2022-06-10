<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SubscribedSku extends Entity implements Parsable 
{
    /**
     * @var string|null $appliesTo For example, 'User' or 'Company'.
    */
    private ?string $appliesTo = null;
    
    /**
     * @var string|null $capabilityStatus Possible values are: Enabled, Warning, Suspended, Deleted, LockedOut. The capabilityStatus is Enabled if the prepaidUnits property has at least 1 unit that is enabled, and LockedOut if the customer cancelled their subscription.
    */
    private ?string $capabilityStatus = null;
    
    /**
     * @var int|null $consumedUnits The number of licenses that have been assigned.
    */
    private ?int $consumedUnits = null;
    
    /**
     * @var LicenseUnitsDetail|null $prepaidUnits Information about the number and status of prepaid licenses.
    */
    private ?LicenseUnitsDetail $prepaidUnits = null;
    
    /**
     * @var array<ServicePlanInfo>|null $servicePlans Information about the service plans that are available with the SKU. Not nullable
    */
    private ?array $servicePlans = null;
    
    /**
     * @var string|null $skuId The unique identifier (GUID) for the service SKU.
    */
    private ?string $skuId = null;
    
    /**
     * @var string|null $skuPartNumber The SKU part number; for example: 'AAD_PREMIUM' or 'RMSBASIC'. To get a list of commercial subscriptions that an organization has acquired, see List subscribedSkus.
    */
    private ?string $skuPartNumber = null;
    
    /**
     * Instantiates a new subscribedSku and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscribedSku
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscribedSku {
        return new SubscribedSku();
    }

    /**
     * Gets the appliesTo property value. For example, 'User' or 'Company'.
     * @return string|null
    */
    public function getAppliesTo(): ?string {
        return $this->appliesTo;
    }

    /**
     * Gets the capabilityStatus property value. Possible values are: Enabled, Warning, Suspended, Deleted, LockedOut. The capabilityStatus is Enabled if the prepaidUnits property has at least 1 unit that is enabled, and LockedOut if the customer cancelled their subscription.
     * @return string|null
    */
    public function getCapabilityStatus(): ?string {
        return $this->capabilityStatus;
    }

    /**
     * Gets the consumedUnits property value. The number of licenses that have been assigned.
     * @return int|null
    */
    public function getConsumedUnits(): ?int {
        return $this->consumedUnits;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appliesTo' => function (ParseNode $n) use ($o) { $o->setAppliesTo($n->getStringValue()); },
            'capabilityStatus' => function (ParseNode $n) use ($o) { $o->setCapabilityStatus($n->getStringValue()); },
            'consumedUnits' => function (ParseNode $n) use ($o) { $o->setConsumedUnits($n->getIntegerValue()); },
            'prepaidUnits' => function (ParseNode $n) use ($o) { $o->setPrepaidUnits($n->getObjectValue(array(LicenseUnitsDetail::class, 'createFromDiscriminatorValue'))); },
            'servicePlans' => function (ParseNode $n) use ($o) { $o->setServicePlans($n->getCollectionOfObjectValues(array(ServicePlanInfo::class, 'createFromDiscriminatorValue'))); },
            'skuId' => function (ParseNode $n) use ($o) { $o->setSkuId($n->getStringValue()); },
            'skuPartNumber' => function (ParseNode $n) use ($o) { $o->setSkuPartNumber($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the prepaidUnits property value. Information about the number and status of prepaid licenses.
     * @return LicenseUnitsDetail|null
    */
    public function getPrepaidUnits(): ?LicenseUnitsDetail {
        return $this->prepaidUnits;
    }

    /**
     * Gets the servicePlans property value. Information about the service plans that are available with the SKU. Not nullable
     * @return array<ServicePlanInfo>|null
    */
    public function getServicePlans(): ?array {
        return $this->servicePlans;
    }

    /**
     * Gets the skuId property value. The unique identifier (GUID) for the service SKU.
     * @return string|null
    */
    public function getSkuId(): ?string {
        return $this->skuId;
    }

    /**
     * Gets the skuPartNumber property value. The SKU part number; for example: 'AAD_PREMIUM' or 'RMSBASIC'. To get a list of commercial subscriptions that an organization has acquired, see List subscribedSkus.
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
        $writer->writeStringValue('appliesTo', $this->appliesTo);
        $writer->writeStringValue('capabilityStatus', $this->capabilityStatus);
        $writer->writeIntegerValue('consumedUnits', $this->consumedUnits);
        $writer->writeObjectValue('prepaidUnits', $this->prepaidUnits);
        $writer->writeCollectionOfObjectValues('servicePlans', $this->servicePlans);
        $writer->writeStringValue('skuId', $this->skuId);
        $writer->writeStringValue('skuPartNumber', $this->skuPartNumber);
    }

    /**
     * Sets the appliesTo property value. For example, 'User' or 'Company'.
     *  @param string|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?string $value ): void {
        $this->appliesTo = $value;
    }

    /**
     * Sets the capabilityStatus property value. Possible values are: Enabled, Warning, Suspended, Deleted, LockedOut. The capabilityStatus is Enabled if the prepaidUnits property has at least 1 unit that is enabled, and LockedOut if the customer cancelled their subscription.
     *  @param string|null $value Value to set for the capabilityStatus property.
    */
    public function setCapabilityStatus(?string $value ): void {
        $this->capabilityStatus = $value;
    }

    /**
     * Sets the consumedUnits property value. The number of licenses that have been assigned.
     *  @param int|null $value Value to set for the consumedUnits property.
    */
    public function setConsumedUnits(?int $value ): void {
        $this->consumedUnits = $value;
    }

    /**
     * Sets the prepaidUnits property value. Information about the number and status of prepaid licenses.
     *  @param LicenseUnitsDetail|null $value Value to set for the prepaidUnits property.
    */
    public function setPrepaidUnits(?LicenseUnitsDetail $value ): void {
        $this->prepaidUnits = $value;
    }

    /**
     * Sets the servicePlans property value. Information about the service plans that are available with the SKU. Not nullable
     *  @param array<ServicePlanInfo>|null $value Value to set for the servicePlans property.
    */
    public function setServicePlans(?array $value ): void {
        $this->servicePlans = $value;
    }

    /**
     * Sets the skuId property value. The unique identifier (GUID) for the service SKU.
     *  @param string|null $value Value to set for the skuId property.
    */
    public function setSkuId(?string $value ): void {
        $this->skuId = $value;
    }

    /**
     * Sets the skuPartNumber property value. The SKU part number; for example: 'AAD_PREMIUM' or 'RMSBASIC'. To get a list of commercial subscriptions that an organization has acquired, see List subscribedSkus.
     *  @param string|null $value Value to set for the skuPartNumber property.
    */
    public function setSkuPartNumber(?string $value ): void {
        $this->skuPartNumber = $value;
    }

}
