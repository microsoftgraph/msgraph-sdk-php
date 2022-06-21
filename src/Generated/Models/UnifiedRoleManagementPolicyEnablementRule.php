<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicyEnablementRule extends UnifiedRoleManagementPolicyRule implements Parsable 
{
    /**
     * @var array<string>|null $enabledRules The collection of rules that are enabled for this policy rule. For example, MultiFactorAuthentication, Ticketing, and Justification.
    */
    private ?array $enabledRules = null;
    
    /**
     * Instantiates a new UnifiedRoleManagementPolicyEnablementRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicyEnablementRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicyEnablementRule {
        return new UnifiedRoleManagementPolicyEnablementRule();
    }

    /**
     * Gets the enabledRules property value. The collection of rules that are enabled for this policy rule. For example, MultiFactorAuthentication, Ticketing, and Justification.
     * @return array<string>|null
    */
    public function getEnabledRules(): ?array {
        return $this->enabledRules;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enabledRules' => function (ParseNode $n) use ($o) { $o->setEnabledRules($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('enabledRules', $this->enabledRules);
    }

    /**
     * Sets the enabledRules property value. The collection of rules that are enabled for this policy rule. For example, MultiFactorAuthentication, Ticketing, and Justification.
     *  @param array<string>|null $value Value to set for the enabledRules property.
    */
    public function setEnabledRules(?array $value ): void {
        $this->enabledRules = $value;
    }

}
