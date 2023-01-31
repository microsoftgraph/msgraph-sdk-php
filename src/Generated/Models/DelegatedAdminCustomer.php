<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminCustomer extends Entity implements Parsable 
{
    /**
     * Instantiates a new delegatedAdminCustomer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminCustomer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminCustomer {
        return new DelegatedAdminCustomer();
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'serviceManagementDetails' => fn(ParseNode $n) => $o->setServiceManagementDetails($n->getCollectionOfObjectValues([DelegatedAdminServiceManagementDetail::class, 'createFromDiscriminatorValue'])),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the serviceManagementDetails property value. 
     * @return array<DelegatedAdminServiceManagementDetail>|null
    */
    public function getServiceManagementDetails(): ?array {
        return $this->getBackingStore()->get('serviceManagementDetails');
    }

    /**
     * Gets the tenantId property value. 
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('serviceManagementDetails', $this->getServiceManagementDetails());
        $writer->writeStringValue('tenantId', $this->getTenantId());
    }

    /**
     * Sets the displayName property value. 
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the serviceManagementDetails property value. 
     * @param array<DelegatedAdminServiceManagementDetail>|null $value Value to set for the serviceManagementDetails property.
    */
    public function setServiceManagementDetails(?array $value): void {
        $this->getBackingStore()->set('serviceManagementDetails', $value);
    }

    /**
     * Sets the tenantId property value. 
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
