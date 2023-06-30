<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentitySecurityDefaultsEnforcementPolicy extends PolicyBase implements Parsable 
{
    /**
     * Instantiates a new IdentitySecurityDefaultsEnforcementPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identitySecurityDefaultsEnforcementPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentitySecurityDefaultsEnforcementPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentitySecurityDefaultsEnforcementPolicy {
        return new IdentitySecurityDefaultsEnforcementPolicy();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isEnabled property value. If set to true, Azure Active Directory security defaults is enabled for the tenant.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
    }

    /**
     * Sets the isEnabled property value. If set to true, Azure Active Directory security defaults is enabled for the tenant.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

}
