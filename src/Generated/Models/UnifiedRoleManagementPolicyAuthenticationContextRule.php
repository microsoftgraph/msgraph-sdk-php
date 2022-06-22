<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicyAuthenticationContextRule extends UnifiedRoleManagementPolicyRule implements Parsable 
{
    /**
     * @var string|null $claimValue The value of the authentication context claim.
    */
    private ?string $claimValue = null;
    
    /**
     * @var bool|null $isEnabled Whether this rule is enabled.
    */
    private ?bool $isEnabled = null;
    
    /**
     * Instantiates a new UnifiedRoleManagementPolicyAuthenticationContextRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicyAuthenticationContextRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicyAuthenticationContextRule {
        return new UnifiedRoleManagementPolicyAuthenticationContextRule();
    }

    /**
     * Gets the claimValue property value. The value of the authentication context claim.
     * @return string|null
    */
    public function getClaimValue(): ?string {
        return $this->claimValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'claimValue' => function (ParseNode $n) use ($o) { $o->setClaimValue($n->getStringValue()); },
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isEnabled property value. Whether this rule is enabled.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('claimValue', $this->claimValue);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
    }

    /**
     * Sets the claimValue property value. The value of the authentication context claim.
     *  @param string|null $value Value to set for the claimValue property.
    */
    public function setClaimValue(?string $value ): void {
        $this->claimValue = $value;
    }

    /**
     * Sets the isEnabled property value. Whether this rule is enabled.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

}
