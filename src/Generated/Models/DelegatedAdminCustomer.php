<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * Gets the displayName property value. The Microsoft Entra ID display name of the customer tenant. Read-only. Supports $orderby.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
     * Gets the serviceManagementDetails property value. Contains the management details of a service in the customer tenant that's managed by delegated administration.
     * @return array<DelegatedAdminServiceManagementDetail>|null
    */
    public function getServiceManagementDetails(): ?array {
        $val = $this->getBackingStore()->get('serviceManagementDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DelegatedAdminServiceManagementDetail::class);
            /** @var array<DelegatedAdminServiceManagementDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceManagementDetails'");
    }

    /**
     * Gets the tenantId property value. The Microsoft Entra ID-assigned tenant ID of the customer. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
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
     * Sets the displayName property value. The Microsoft Entra ID display name of the customer tenant. Read-only. Supports $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the serviceManagementDetails property value. Contains the management details of a service in the customer tenant that's managed by delegated administration.
     * @param array<DelegatedAdminServiceManagementDetail>|null $value Value to set for the serviceManagementDetails property.
    */
    public function setServiceManagementDetails(?array $value): void {
        $this->getBackingStore()->set('serviceManagementDetails', $value);
    }

    /**
     * Sets the tenantId property value. The Microsoft Entra ID-assigned tenant ID of the customer. Read-only.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
