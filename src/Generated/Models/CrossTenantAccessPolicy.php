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
    private ?CrossTenantAccessPolicyConfigurationDefault $escapedDefault = null;
    
    /**
     * @var array<CrossTenantAccessPolicyConfigurationPartner>|null $partners Defines partner-specific configurations for external Azure Active Directory organizations.
    */
    private ?array $partners = null;
    
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
     * Gets the default property value. Defines the default configuration for how your organization interacts with external Azure Active Directory organizations.
     * @return CrossTenantAccessPolicyConfigurationDefault|null
    */
    public function getDefault(): ?CrossTenantAccessPolicyConfigurationDefault {
        return $this->escapedDefault;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'default' => function (ParseNode $n) use ($o) { $o->setDefault($n->getObjectValue(array(CrossTenantAccessPolicyConfigurationDefault::class, 'createFromDiscriminatorValue'))); },
            'partners' => function (ParseNode $n) use ($o) { $o->setPartners($n->getCollectionOfObjectValues(array(CrossTenantAccessPolicyConfigurationPartner::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the partners property value. Defines partner-specific configurations for external Azure Active Directory organizations.
     * @return array<CrossTenantAccessPolicyConfigurationPartner>|null
    */
    public function getPartners(): ?array {
        return $this->partners;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('default', $this->escapedDefault);
        $writer->writeCollectionOfObjectValues('partners', $this->partners);
    }

    /**
     * Sets the default property value. Defines the default configuration for how your organization interacts with external Azure Active Directory organizations.
     *  @param CrossTenantAccessPolicyConfigurationDefault|null $value Value to set for the EscapedDefault property.
    */
    public function setDefault(?CrossTenantAccessPolicyConfigurationDefault $value ): void {
        $this->escapedDefault = $value;
    }

    /**
     * Sets the partners property value. Defines partner-specific configurations for external Azure Active Directory organizations.
     *  @param array<CrossTenantAccessPolicyConfigurationPartner>|null $value Value to set for the partners property.
    */
    public function setPartners(?array $value ): void {
        $this->partners = $value;
    }

}
