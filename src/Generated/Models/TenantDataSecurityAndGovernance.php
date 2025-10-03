<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantDataSecurityAndGovernance extends DataSecurityAndGovernance implements Parsable 
{
    /**
     * Instantiates a new TenantDataSecurityAndGovernance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.tenantDataSecurityAndGovernance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantDataSecurityAndGovernance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantDataSecurityAndGovernance {
        return new TenantDataSecurityAndGovernance();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'protectionScopes' => fn(ParseNode $n) => $o->setProtectionScopes($n->getObjectValue([TenantProtectionScopeContainer::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the protectionScopes property value. The protectionScopes property
     * @return TenantProtectionScopeContainer|null
    */
    public function getProtectionScopes(): ?TenantProtectionScopeContainer {
        $val = $this->getBackingStore()->get('protectionScopes');
        if (is_null($val) || $val instanceof TenantProtectionScopeContainer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectionScopes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('protectionScopes', $this->getProtectionScopes());
    }

    /**
     * Sets the protectionScopes property value. The protectionScopes property
     * @param TenantProtectionScopeContainer|null $value Value to set for the protectionScopes property.
    */
    public function setProtectionScopes(?TenantProtectionScopeContainer $value): void {
        $this->getBackingStore()->set('protectionScopes', $value);
    }

}
