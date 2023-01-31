<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossTenantAccessPolicy extends PolicyBase implements Parsable 
{
    /**
     * @var CrossTenantAccessPolicyConfigurationDefault|null $escapedDefault Defines the default configuration for how your organization interacts with external Azure Active Directory organizations.
    */
    public ?CrossTenantAccessPolicyConfigurationDefault $escapedDefault = null;
    
    /**
     * Instantiates a new CrossTenantAccessPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.crossTenantAccessPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantAccessPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantAccessPolicy {
        return new CrossTenantAccessPolicy();
    }

    /**
     * Gets the allowedCloudEndpoints property value. 
     * @return array<string>|null
    */
    public function getAllowedCloudEndpoints(): ?array {
        return $this->getBackingStore()->get('allowedCloudEndpoints');
    }

    /**
     * Gets the default property value. Defines the default configuration for how your organization interacts with external Azure Active Directory organizations.
     * @return CrossTenantAccessPolicyConfigurationDefault|null
    */
    public function getDefault(): ?CrossTenantAccessPolicyConfigurationDefault {
        return $this->getBackingStore()->get('escapedDefault');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedCloudEndpoints' => fn(ParseNode $n) => $o->setAllowedCloudEndpoints($n->getCollectionOfPrimitiveValues()),
            'default' => fn(ParseNode $n) => $o->setDefault($n->getObjectValue([CrossTenantAccessPolicyConfigurationDefault::class, 'createFromDiscriminatorValue'])),
            'partners' => fn(ParseNode $n) => $o->setPartners($n->getCollectionOfObjectValues([CrossTenantAccessPolicyConfigurationPartner::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the partners property value. Defines partner-specific configurations for external Azure Active Directory organizations.
     * @return array<CrossTenantAccessPolicyConfigurationPartner>|null
    */
    public function getPartners(): ?array {
        return $this->getBackingStore()->get('partners');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('allowedCloudEndpoints', $this->getAllowedCloudEndpoints());
        $writer->writeObjectValue('default', $this->getDefault());
        $writer->writeCollectionOfObjectValues('partners', $this->getPartners());
    }

    /**
     * Sets the allowedCloudEndpoints property value. 
     * @param array<string>|null $value Value to set for the allowedCloudEndpoints property.
    */
    public function setAllowedCloudEndpoints(?array $value): void {
        $this->getBackingStore()->set('allowedCloudEndpoints', $value);
    }

    /**
     * Sets the default property value. Defines the default configuration for how your organization interacts with external Azure Active Directory organizations.
     * @param CrossTenantAccessPolicyConfigurationDefault|null $value Value to set for the EscapedDefault property.
    */
    public function setDefault(?CrossTenantAccessPolicyConfigurationDefault $value): void {
        $this->getBackingStore()->set('escapedDefault', $value);
    }

    /**
     * Sets the partners property value. Defines partner-specific configurations for external Azure Active Directory organizations.
     * @param array<CrossTenantAccessPolicyConfigurationPartner>|null $value Value to set for the partners property.
    */
    public function setPartners(?array $value): void {
        $this->getBackingStore()->set('partners', $value);
    }

}
