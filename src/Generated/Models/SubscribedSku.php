<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SubscribedSku extends Entity implements Parsable 
{
    /**
     * Instantiates a new SubscribedSku and sets the default values.
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
     * Gets the accountId property value. The accountId property
     * @return string|null
    */
    public function getAccountId(): ?string {
        return $this->getBackingStore()->get('accountId');
    }

    /**
     * Gets the accountName property value. The accountName property
     * @return string|null
    */
    public function getAccountName(): ?string {
        return $this->getBackingStore()->get('accountName');
    }

    /**
     * Gets the appliesTo property value. For example, 'User' or 'Company'.
     * @return string|null
    */
    public function getAppliesTo(): ?string {
        return $this->getBackingStore()->get('appliesTo');
    }

    /**
     * Gets the capabilityStatus property value. Possible values are: Enabled, Warning, Suspended, Deleted, LockedOut. The capabilityStatus is Enabled if the prepaidUnits property has at least 1 unit that is enabled, and LockedOut if the customer cancelled their subscription.
     * @return string|null
    */
    public function getCapabilityStatus(): ?string {
        return $this->getBackingStore()->get('capabilityStatus');
    }

    /**
     * Gets the consumedUnits property value. The number of licenses that have been assigned.
     * @return int|null
    */
    public function getConsumedUnits(): ?int {
        return $this->getBackingStore()->get('consumedUnits');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountId' => fn(ParseNode $n) => $o->setAccountId($n->getStringValue()),
            'accountName' => fn(ParseNode $n) => $o->setAccountName($n->getStringValue()),
            'appliesTo' => fn(ParseNode $n) => $o->setAppliesTo($n->getStringValue()),
            'capabilityStatus' => fn(ParseNode $n) => $o->setCapabilityStatus($n->getStringValue()),
            'consumedUnits' => fn(ParseNode $n) => $o->setConsumedUnits($n->getIntegerValue()),
            'prepaidUnits' => fn(ParseNode $n) => $o->setPrepaidUnits($n->getObjectValue([LicenseUnitsDetail::class, 'createFromDiscriminatorValue'])),
            'servicePlans' => fn(ParseNode $n) => $o->setServicePlans($n->getCollectionOfObjectValues([ServicePlanInfo::class, 'createFromDiscriminatorValue'])),
            'skuId' => fn(ParseNode $n) => $o->setSkuId($n->getStringValue()),
            'skuPartNumber' => fn(ParseNode $n) => $o->setSkuPartNumber($n->getStringValue()),
            'subscriptionIds' => fn(ParseNode $n) => $o->setSubscriptionIds($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the prepaidUnits property value. Information about the number and status of prepaid licenses.
     * @return LicenseUnitsDetail|null
    */
    public function getPrepaidUnits(): ?LicenseUnitsDetail {
        return $this->getBackingStore()->get('prepaidUnits');
    }

    /**
     * Gets the servicePlans property value. Information about the service plans that are available with the SKU. Not nullable
     * @return array<ServicePlanInfo>|null
    */
    public function getServicePlans(): ?array {
        return $this->getBackingStore()->get('servicePlans');
    }

    /**
     * Gets the skuId property value. The unique identifier (GUID) for the service SKU.
     * @return string|null
    */
    public function getSkuId(): ?string {
        return $this->getBackingStore()->get('skuId');
    }

    /**
     * Gets the skuPartNumber property value. The SKU part number; for example: 'AAD_PREMIUM' or 'RMSBASIC'. To get a list of commercial subscriptions that an organization has acquired, see List subscribedSkus.
     * @return string|null
    */
    public function getSkuPartNumber(): ?string {
        return $this->getBackingStore()->get('skuPartNumber');
    }

    /**
     * Gets the subscriptionIds property value. The subscriptionIds property
     * @return array<string>|null
    */
    public function getSubscriptionIds(): ?array {
        return $this->getBackingStore()->get('subscriptionIds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountId', $this->getAccountId());
        $writer->writeStringValue('accountName', $this->getAccountName());
        $writer->writeStringValue('appliesTo', $this->getAppliesTo());
        $writer->writeStringValue('capabilityStatus', $this->getCapabilityStatus());
        $writer->writeIntegerValue('consumedUnits', $this->getConsumedUnits());
        $writer->writeObjectValue('prepaidUnits', $this->getPrepaidUnits());
        $writer->writeCollectionOfObjectValues('servicePlans', $this->getServicePlans());
        $writer->writeStringValue('skuId', $this->getSkuId());
        $writer->writeStringValue('skuPartNumber', $this->getSkuPartNumber());
        $writer->writeCollectionOfPrimitiveValues('subscriptionIds', $this->getSubscriptionIds());
    }

    /**
     * Sets the accountId property value. The accountId property
     * @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value): void {
        $this->getBackingStore()->set('accountId', $value);
    }

    /**
     * Sets the accountName property value. The accountName property
     * @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value): void {
        $this->getBackingStore()->set('accountName', $value);
    }

    /**
     * Sets the appliesTo property value. For example, 'User' or 'Company'.
     * @param string|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?string $value): void {
        $this->getBackingStore()->set('appliesTo', $value);
    }

    /**
     * Sets the capabilityStatus property value. Possible values are: Enabled, Warning, Suspended, Deleted, LockedOut. The capabilityStatus is Enabled if the prepaidUnits property has at least 1 unit that is enabled, and LockedOut if the customer cancelled their subscription.
     * @param string|null $value Value to set for the capabilityStatus property.
    */
    public function setCapabilityStatus(?string $value): void {
        $this->getBackingStore()->set('capabilityStatus', $value);
    }

    /**
     * Sets the consumedUnits property value. The number of licenses that have been assigned.
     * @param int|null $value Value to set for the consumedUnits property.
    */
    public function setConsumedUnits(?int $value): void {
        $this->getBackingStore()->set('consumedUnits', $value);
    }

    /**
     * Sets the prepaidUnits property value. Information about the number and status of prepaid licenses.
     * @param LicenseUnitsDetail|null $value Value to set for the prepaidUnits property.
    */
    public function setPrepaidUnits(?LicenseUnitsDetail $value): void {
        $this->getBackingStore()->set('prepaidUnits', $value);
    }

    /**
     * Sets the servicePlans property value. Information about the service plans that are available with the SKU. Not nullable
     * @param array<ServicePlanInfo>|null $value Value to set for the servicePlans property.
    */
    public function setServicePlans(?array $value): void {
        $this->getBackingStore()->set('servicePlans', $value);
    }

    /**
     * Sets the skuId property value. The unique identifier (GUID) for the service SKU.
     * @param string|null $value Value to set for the skuId property.
    */
    public function setSkuId(?string $value): void {
        $this->getBackingStore()->set('skuId', $value);
    }

    /**
     * Sets the skuPartNumber property value. The SKU part number; for example: 'AAD_PREMIUM' or 'RMSBASIC'. To get a list of commercial subscriptions that an organization has acquired, see List subscribedSkus.
     * @param string|null $value Value to set for the skuPartNumber property.
    */
    public function setSkuPartNumber(?string $value): void {
        $this->getBackingStore()->set('skuPartNumber', $value);
    }

    /**
     * Sets the subscriptionIds property value. The subscriptionIds property
     * @param array<string>|null $value Value to set for the subscriptionIds property.
    */
    public function setSubscriptionIds(?array $value): void {
        $this->getBackingStore()->set('subscriptionIds', $value);
    }

}
