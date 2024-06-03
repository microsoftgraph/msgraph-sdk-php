<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MultiTenantOrganizationPartnerConfigurationTemplate extends Entity implements Parsable 
{
    /**
     * Instantiates a new MultiTenantOrganizationPartnerConfigurationTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MultiTenantOrganizationPartnerConfigurationTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MultiTenantOrganizationPartnerConfigurationTemplate {
        return new MultiTenantOrganizationPartnerConfigurationTemplate();
    }

    /**
     * Gets the automaticUserConsentSettings property value. Determines the partner-specific configuration for automatic user consent settings. Unless configured, the inboundAllowed and outboundAllowed properties are null and inherit from the default settings, which is always false.
     * @return InboundOutboundPolicyConfiguration|null
    */
    public function getAutomaticUserConsentSettings(): ?InboundOutboundPolicyConfiguration {
        $val = $this->getBackingStore()->get('automaticUserConsentSettings');
        if (is_null($val) || $val instanceof InboundOutboundPolicyConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'automaticUserConsentSettings'");
    }

    /**
     * Gets the b2bCollaborationInbound property value. Defines your partner-specific configuration for users from other organizations accessing your resources via Microsoft Entra B2B collaboration.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bCollaborationInbound(): ?CrossTenantAccessPolicyB2BSetting {
        $val = $this->getBackingStore()->get('b2bCollaborationInbound');
        if (is_null($val) || $val instanceof CrossTenantAccessPolicyB2BSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'b2bCollaborationInbound'");
    }

    /**
     * Gets the b2bCollaborationOutbound property value. Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B collaboration.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bCollaborationOutbound(): ?CrossTenantAccessPolicyB2BSetting {
        $val = $this->getBackingStore()->get('b2bCollaborationOutbound');
        if (is_null($val) || $val instanceof CrossTenantAccessPolicyB2BSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'b2bCollaborationOutbound'");
    }

    /**
     * Gets the b2bDirectConnectInbound property value. Defines your partner-specific configuration for users from other organizations accessing your resources via Azure B2B direct connect.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bDirectConnectInbound(): ?CrossTenantAccessPolicyB2BSetting {
        $val = $this->getBackingStore()->get('b2bDirectConnectInbound');
        if (is_null($val) || $val instanceof CrossTenantAccessPolicyB2BSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'b2bDirectConnectInbound'");
    }

    /**
     * Gets the b2bDirectConnectOutbound property value. Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B direct connect.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bDirectConnectOutbound(): ?CrossTenantAccessPolicyB2BSetting {
        $val = $this->getBackingStore()->get('b2bDirectConnectOutbound');
        if (is_null($val) || $val instanceof CrossTenantAccessPolicyB2BSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'b2bDirectConnectOutbound'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'templateApplicationLevel' => fn(ParseNode $n) => $o->setTemplateApplicationLevel($n->getEnumValue(TemplateApplicationLevel::class)),
        ]);
    }

    /**
     * Gets the inboundTrust property value. Determines the partner-specific configuration for trusting other Conditional Access claims from external Microsoft Entra organizations.
     * @return CrossTenantAccessPolicyInboundTrust|null
    */
    public function getInboundTrust(): ?CrossTenantAccessPolicyInboundTrust {
        $val = $this->getBackingStore()->get('inboundTrust');
        if (is_null($val) || $val instanceof CrossTenantAccessPolicyInboundTrust) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inboundTrust'");
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
        $writer->writeEnumValue('templateApplicationLevel', $this->getTemplateApplicationLevel());
    }

    /**
     * Sets the automaticUserConsentSettings property value. Determines the partner-specific configuration for automatic user consent settings. Unless configured, the inboundAllowed and outboundAllowed properties are null and inherit from the default settings, which is always false.
     * @param InboundOutboundPolicyConfiguration|null $value Value to set for the automaticUserConsentSettings property.
    */
    public function setAutomaticUserConsentSettings(?InboundOutboundPolicyConfiguration $value): void {
        $this->getBackingStore()->set('automaticUserConsentSettings', $value);
    }

    /**
     * Sets the b2bCollaborationInbound property value. Defines your partner-specific configuration for users from other organizations accessing your resources via Microsoft Entra B2B collaboration.
     * @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bCollaborationInbound property.
    */
    public function setB2bCollaborationInbound(?CrossTenantAccessPolicyB2BSetting $value): void {
        $this->getBackingStore()->set('b2bCollaborationInbound', $value);
    }

    /**
     * Sets the b2bCollaborationOutbound property value. Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B collaboration.
     * @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bCollaborationOutbound property.
    */
    public function setB2bCollaborationOutbound(?CrossTenantAccessPolicyB2BSetting $value): void {
        $this->getBackingStore()->set('b2bCollaborationOutbound', $value);
    }

    /**
     * Sets the b2bDirectConnectInbound property value. Defines your partner-specific configuration for users from other organizations accessing your resources via Azure B2B direct connect.
     * @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bDirectConnectInbound property.
    */
    public function setB2bDirectConnectInbound(?CrossTenantAccessPolicyB2BSetting $value): void {
        $this->getBackingStore()->set('b2bDirectConnectInbound', $value);
    }

    /**
     * Sets the b2bDirectConnectOutbound property value. Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B direct connect.
     * @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bDirectConnectOutbound property.
    */
    public function setB2bDirectConnectOutbound(?CrossTenantAccessPolicyB2BSetting $value): void {
        $this->getBackingStore()->set('b2bDirectConnectOutbound', $value);
    }

    /**
     * Sets the inboundTrust property value. Determines the partner-specific configuration for trusting other Conditional Access claims from external Microsoft Entra organizations.
     * @param CrossTenantAccessPolicyInboundTrust|null $value Value to set for the inboundTrust property.
    */
    public function setInboundTrust(?CrossTenantAccessPolicyInboundTrust $value): void {
        $this->getBackingStore()->set('inboundTrust', $value);
    }

    /**
     * Sets the templateApplicationLevel property value. The templateApplicationLevel property
     * @param TemplateApplicationLevel|null $value Value to set for the templateApplicationLevel property.
    */
    public function setTemplateApplicationLevel(?TemplateApplicationLevel $value): void {
        $this->getBackingStore()->set('templateApplicationLevel', $value);
    }

}
