<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicyApprovalRule extends UnifiedRoleManagementPolicyRule implements Parsable 
{
    /**
     * Instantiates a new UnifiedRoleManagementPolicyApprovalRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.unifiedRoleManagementPolicyApprovalRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicyApprovalRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicyApprovalRule {
        return new UnifiedRoleManagementPolicyApprovalRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'setting' => fn(ParseNode $n) => $o->setSetting($n->getObjectValue([ApprovalSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the setting property value. The settings for approval of the role assignment.
     * @return ApprovalSettings|null
    */
    public function getSetting(): ?ApprovalSettings {
        $val = $this->getBackingStore()->get('setting');
        if (is_null($val) || $val instanceof ApprovalSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'setting'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('setting', $this->getSetting());
    }

    /**
     * Sets the setting property value. The settings for approval of the role assignment.
     * @param ApprovalSettings|null $value Value to set for the setting property.
    */
    public function setSetting(?ApprovalSettings $value): void {
        $this->getBackingStore()->set('setting', $value);
    }

}
