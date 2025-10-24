<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicyTenantScope extends PolicyScopeBase implements Parsable 
{
    /**
     * Instantiates a new PolicyTenantScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.policyTenantScope');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyTenantScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyTenantScope {
        return new PolicyTenantScope();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'policyScope' => fn(ParseNode $n) => $o->setPolicyScope($n->getObjectValue([PolicyBinding::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the policyScope property value. Specifies the users and groups included in or excluded from this tenant-level policy scope.
     * @return PolicyBinding|null
    */
    public function getPolicyScope(): ?PolicyBinding {
        $val = $this->getBackingStore()->get('policyScope');
        if (is_null($val) || $val instanceof PolicyBinding) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyScope'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('policyScope', $this->getPolicyScope());
    }

    /**
     * Sets the policyScope property value. Specifies the users and groups included in or excluded from this tenant-level policy scope.
     * @param PolicyBinding|null $value Value to set for the policyScope property.
    */
    public function setPolicyScope(?PolicyBinding $value): void {
        $this->getBackingStore()->set('policyScope', $value);
    }

}
