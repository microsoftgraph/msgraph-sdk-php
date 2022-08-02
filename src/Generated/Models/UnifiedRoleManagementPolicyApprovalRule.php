<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicyApprovalRule extends UnifiedRoleManagementPolicyRule implements Parsable 
{
    /**
     * @var ApprovalSettings|null $setting The settings for approval of the role assignment.
    */
    private ?ApprovalSettings $setting = null;
    
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'setting' => function (ParseNode $n) use ($o) { $o->setSetting($n->getObjectValue(array(ApprovalSettings::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the setting property value. The settings for approval of the role assignment.
     * @return ApprovalSettings|null
    */
    public function getSetting(): ?ApprovalSettings {
        return $this->setting;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('setting', $this->setting);
    }

    /**
     * Sets the setting property value. The settings for approval of the role assignment.
     *  @param ApprovalSettings|null $value Value to set for the setting property.
    */
    public function setSetting(?ApprovalSettings $value ): void {
        $this->setting = $value;
    }

}
