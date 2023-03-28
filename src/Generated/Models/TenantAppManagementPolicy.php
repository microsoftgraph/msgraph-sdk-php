<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantAppManagementPolicy extends PolicyBase implements Parsable 
{
    /**
     * Instantiates a new TenantAppManagementPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.tenantAppManagementPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantAppManagementPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantAppManagementPolicy {
        return new TenantAppManagementPolicy();
    }

    /**
     * Gets the applicationRestrictions property value. Restrictions that apply as default to all application objects in the tenant.
     * @return AppManagementConfiguration|null
    */
    public function getApplicationRestrictions(): ?AppManagementConfiguration {
        return $this->getBackingStore()->get('applicationRestrictions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationRestrictions' => fn(ParseNode $n) => $o->setApplicationRestrictions($n->getObjectValue([AppManagementConfiguration::class, 'createFromDiscriminatorValue'])),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'servicePrincipalRestrictions' => fn(ParseNode $n) => $o->setServicePrincipalRestrictions($n->getObjectValue([AppManagementConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isEnabled property value. Denotes whether the policy is enabled. Default value is false.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->getBackingStore()->get('isEnabled');
    }

    /**
     * Gets the servicePrincipalRestrictions property value. Restrictions that apply as default to all service principal objects in the tenant.
     * @return AppManagementConfiguration|null
    */
    public function getServicePrincipalRestrictions(): ?AppManagementConfiguration {
        return $this->getBackingStore()->get('servicePrincipalRestrictions');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('applicationRestrictions', $this->getApplicationRestrictions());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeObjectValue('servicePrincipalRestrictions', $this->getServicePrincipalRestrictions());
    }

    /**
     * Sets the applicationRestrictions property value. Restrictions that apply as default to all application objects in the tenant.
     * @param AppManagementConfiguration|null $value Value to set for the applicationRestrictions property.
    */
    public function setApplicationRestrictions(?AppManagementConfiguration $value): void {
        $this->getBackingStore()->set('applicationRestrictions', $value);
    }

    /**
     * Sets the isEnabled property value. Denotes whether the policy is enabled. Default value is false.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the servicePrincipalRestrictions property value. Restrictions that apply as default to all service principal objects in the tenant.
     * @param AppManagementConfiguration|null $value Value to set for the servicePrincipalRestrictions property.
    */
    public function setServicePrincipalRestrictions(?AppManagementConfiguration $value): void {
        $this->getBackingStore()->set('servicePrincipalRestrictions', $value);
    }

}
