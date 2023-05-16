<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossTenantAccessPolicyConfigurationDefault extends Entity implements Parsable 
{
    /**
     * Instantiates a new crossTenantAccessPolicyConfigurationDefault and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantAccessPolicyConfigurationDefault
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantAccessPolicyConfigurationDefault {
        return new CrossTenantAccessPolicyConfigurationDefault();
    }

    /**
     * Gets the automaticUserConsentSettings property value. Determines the default configuration for automatic user consent settings. The inboundAllowed and outboundAllowed properties are always false and cannot be updated in the default configuration. Read-only.
     * @return InboundOutboundPolicyConfiguration|null
    */
    public function getAutomaticUserConsentSettings(): ?InboundOutboundPolicyConfiguration {
        return $this->getBackingStore()->get('automaticUserConsentSettings');
    }

    /**
     * Gets the b2bCollaborationInbound property value. Defines your default configuration for users from other organizations accessing your resources via Azure AD B2B collaboration.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bCollaborationInbound(): ?CrossTenantAccessPolicyB2BSetting {
        return $this->getBackingStore()->get('b2bCollaborationInbound');
    }

    /**
     * Gets the b2bCollaborationOutbound property value. Defines your default configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B collaboration.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bCollaborationOutbound(): ?CrossTenantAccessPolicyB2BSetting {
        return $this->getBackingStore()->get('b2bCollaborationOutbound');
    }

    /**
     * Gets the b2bDirectConnectInbound property value. Defines your default configuration for users from other organizations accessing your resources via Azure AD B2B direct connect.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bDirectConnectInbound(): ?CrossTenantAccessPolicyB2BSetting {
        return $this->getBackingStore()->get('b2bDirectConnectInbound');
    }

    /**
     * Gets the b2bDirectConnectOutbound property value. Defines your default configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B direct connect.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bDirectConnectOutbound(): ?CrossTenantAccessPolicyB2BSetting {
        return $this->getBackingStore()->get('b2bDirectConnectOutbound');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'automaticUserConsentSettings' => fn(ParseNode $n) => $o->setAutomaticUserConsentSettings($n->getObjectValue([InboundOutboundPolicyConfiguration::class, 'createFromDiscriminatorValue'])),
            'b2bCollaborationInbound' => fn(ParseNode $n) => $o->setB2bCollaborationInbound($n->getObjectValue([CrossTenantAccessPolicyB2BSetting::class, 'createFromDiscriminatorValue'])),
            'b2bCollaborationOutbound' => fn(ParseNode $n) => $o->setB2bCollaborationOutbound($n->getObjectValue([CrossTenantAccessPolicyB2BSetting::class, 'createFromDiscriminatorValue'])),
            'b2bDirectConnectInbound' => fn(ParseNode $n) => $o->setB2bDirectConnectInbound($n->getObjectValue([CrossTenantAccessPolicyB2BSetting::class, 'createFromDiscriminatorValue'])),
            'b2bDirectConnectOutbound' => fn(ParseNode $n) => $o->setB2bDirectConnectOutbound($n->getObjectValue([CrossTenantAccessPolicyB2BSetting::class, 'createFromDiscriminatorValue'])),
            'inboundTrust' => fn(ParseNode $n) => $o->setInboundTrust($n->getObjectValue([CrossTenantAccessPolicyInboundTrust::class, 'createFromDiscriminatorValue'])),
            'isServiceDefault' => fn(ParseNode $n) => $o->setIsServiceDefault($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the inboundTrust property value. Determines the default configuration for trusting other Conditional Access claims from external Azure AD organizations.
     * @return CrossTenantAccessPolicyInboundTrust|null
    */
    public function getInboundTrust(): ?CrossTenantAccessPolicyInboundTrust {
        return $this->getBackingStore()->get('inboundTrust');
    }

    /**
     * Gets the isServiceDefault property value. If true, the default configuration is set to the system default configuration. If false, the default settings have been customized.
     * @return bool|null
    */
    public function getIsServiceDefault(): ?bool {
        return $this->getBackingStore()->get('isServiceDefault');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('automaticUserConsentSettings', $this->getAutomaticUserConsentSettings());
        $writer->writeObjectValue('b2bCollaborationInbound', $this->getB2bCollaborationInbound());
        $writer->writeObjectValue('b2bCollaborationOutbound', $this->getB2bCollaborationOutbound());
        $writer->writeObjectValue('b2bDirectConnectInbound', $this->getB2bDirectConnectInbound());
        $writer->writeObjectValue('b2bDirectConnectOutbound', $this->getB2bDirectConnectOutbound());
        $writer->writeObjectValue('inboundTrust', $this->getInboundTrust());
        $writer->writeBooleanValue('isServiceDefault', $this->getIsServiceDefault());
    }

    /**
     * Sets the automaticUserConsentSettings property value. Determines the default configuration for automatic user consent settings. The inboundAllowed and outboundAllowed properties are always false and cannot be updated in the default configuration. Read-only.
     * @param InboundOutboundPolicyConfiguration|null $value Value to set for the automaticUserConsentSettings property.
    */
    public function setAutomaticUserConsentSettings(?InboundOutboundPolicyConfiguration $value): void {
        $this->getBackingStore()->set('automaticUserConsentSettings', $value);
    }

    /**
     * Sets the b2bCollaborationInbound property value. Defines your default configuration for users from other organizations accessing your resources via Azure AD B2B collaboration.
     * @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bCollaborationInbound property.
    */
    public function setB2bCollaborationInbound(?CrossTenantAccessPolicyB2BSetting $value): void {
        $this->getBackingStore()->set('b2bCollaborationInbound', $value);
    }

    /**
     * Sets the b2bCollaborationOutbound property value. Defines your default configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B collaboration.
     * @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bCollaborationOutbound property.
    */
    public function setB2bCollaborationOutbound(?CrossTenantAccessPolicyB2BSetting $value): void {
        $this->getBackingStore()->set('b2bCollaborationOutbound', $value);
    }

    /**
     * Sets the b2bDirectConnectInbound property value. Defines your default configuration for users from other organizations accessing your resources via Azure AD B2B direct connect.
     * @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bDirectConnectInbound property.
    */
    public function setB2bDirectConnectInbound(?CrossTenantAccessPolicyB2BSetting $value): void {
        $this->getBackingStore()->set('b2bDirectConnectInbound', $value);
    }

    /**
     * Sets the b2bDirectConnectOutbound property value. Defines your default configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B direct connect.
     * @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bDirectConnectOutbound property.
    */
    public function setB2bDirectConnectOutbound(?CrossTenantAccessPolicyB2BSetting $value): void {
        $this->getBackingStore()->set('b2bDirectConnectOutbound', $value);
    }

    /**
     * Sets the inboundTrust property value. Determines the default configuration for trusting other Conditional Access claims from external Azure AD organizations.
     * @param CrossTenantAccessPolicyInboundTrust|null $value Value to set for the inboundTrust property.
    */
    public function setInboundTrust(?CrossTenantAccessPolicyInboundTrust $value): void {
        $this->getBackingStore()->set('inboundTrust', $value);
    }

    /**
     * Sets the isServiceDefault property value. If true, the default configuration is set to the system default configuration. If false, the default settings have been customized.
     * @param bool|null $value Value to set for the isServiceDefault property.
    */
    public function setIsServiceDefault(?bool $value): void {
        $this->getBackingStore()->set('isServiceDefault', $value);
    }

}
