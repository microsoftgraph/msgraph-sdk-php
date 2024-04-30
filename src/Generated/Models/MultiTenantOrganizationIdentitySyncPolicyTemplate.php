<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MultiTenantOrganizationIdentitySyncPolicyTemplate extends Entity implements Parsable 
{
    /**
     * Instantiates a new MultiTenantOrganizationIdentitySyncPolicyTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MultiTenantOrganizationIdentitySyncPolicyTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MultiTenantOrganizationIdentitySyncPolicyTemplate {
        return new MultiTenantOrganizationIdentitySyncPolicyTemplate();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'templateApplicationLevel' => fn(ParseNode $n) => $o->setTemplateApplicationLevel($n->getEnumValue(TemplateApplicationLevel::class)),
            'userSyncInbound' => fn(ParseNode $n) => $o->setUserSyncInbound($n->getObjectValue([CrossTenantUserSyncInbound::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the templateApplicationLevel property value. The templateApplicationLevel property
     * @return TemplateApplicationLevel|null
    */
    public function getTemplateApplicationLevel(): ?TemplateApplicationLevel {
        $val = $this->getBackingStore()->get('templateApplicationLevel');
        if (is_null($val) || $val instanceof TemplateApplicationLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateApplicationLevel'");
    }

    /**
     * Gets the userSyncInbound property value. Defines whether users can be synchronized from the partner tenant.
     * @return CrossTenantUserSyncInbound|null
    */
    public function getUserSyncInbound(): ?CrossTenantUserSyncInbound {
        $val = $this->getBackingStore()->get('userSyncInbound');
        if (is_null($val) || $val instanceof CrossTenantUserSyncInbound) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userSyncInbound'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('templateApplicationLevel', $this->getTemplateApplicationLevel());
        $writer->writeObjectValue('userSyncInbound', $this->getUserSyncInbound());
    }

    /**
     * Sets the templateApplicationLevel property value. The templateApplicationLevel property
     * @param TemplateApplicationLevel|null $value Value to set for the templateApplicationLevel property.
    */
    public function setTemplateApplicationLevel(?TemplateApplicationLevel $value): void {
        $this->getBackingStore()->set('templateApplicationLevel', $value);
    }

    /**
     * Sets the userSyncInbound property value. Defines whether users can be synchronized from the partner tenant.
     * @param CrossTenantUserSyncInbound|null $value Value to set for the userSyncInbound property.
    */
    public function setUserSyncInbound(?CrossTenantUserSyncInbound $value): void {
        $this->getBackingStore()->set('userSyncInbound', $value);
    }

}
