<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossTenantAccessPolicyConfigurationDefault extends Entity implements Parsable 
{
    /**
     * @var CrossTenantAccessPolicyB2BSetting|null $b2bCollaborationInbound Defines your default configuration for users from other organizations accessing your resources via Azure AD B2B collaboration.
    */
    private ?CrossTenantAccessPolicyB2BSetting $b2bCollaborationInbound = null;
    
    /**
     * @var CrossTenantAccessPolicyB2BSetting|null $b2bCollaborationOutbound Defines your default configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B collaboration.
    */
    private ?CrossTenantAccessPolicyB2BSetting $b2bCollaborationOutbound = null;
    
    /**
     * @var CrossTenantAccessPolicyB2BSetting|null $b2bDirectConnectInbound Defines your default configuration for users from other organizations accessing your resources via Azure AD B2B direct connect.
    */
    private ?CrossTenantAccessPolicyB2BSetting $b2bDirectConnectInbound = null;
    
    /**
     * @var CrossTenantAccessPolicyB2BSetting|null $b2bDirectConnectOutbound Defines your default configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B direct connect.
    */
    private ?CrossTenantAccessPolicyB2BSetting $b2bDirectConnectOutbound = null;
    
    /**
     * @var CrossTenantAccessPolicyInboundTrust|null $inboundTrust Determines the default configuration for trusting other Conditional Access claims from external Azure AD organizations.
    */
    private ?CrossTenantAccessPolicyInboundTrust $inboundTrust = null;
    
    /**
     * @var bool|null $isServiceDefault If true, the default configuration is set to the system default configuration. If false, the default settings have been customized.
    */
    private ?bool $isServiceDefault = null;
    
    /**
     * Instantiates a new crossTenantAccessPolicyConfigurationDefault and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.crossTenantAccessPolicyConfigurationDefault');
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
     * Gets the b2bCollaborationInbound property value. Defines your default configuration for users from other organizations accessing your resources via Azure AD B2B collaboration.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bCollaborationInbound(): ?CrossTenantAccessPolicyB2BSetting {
        return $this->b2bCollaborationInbound;
    }

    /**
     * Gets the b2bCollaborationOutbound property value. Defines your default configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B collaboration.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bCollaborationOutbound(): ?CrossTenantAccessPolicyB2BSetting {
        return $this->b2bCollaborationOutbound;
    }

    /**
     * Gets the b2bDirectConnectInbound property value. Defines your default configuration for users from other organizations accessing your resources via Azure AD B2B direct connect.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bDirectConnectInbound(): ?CrossTenantAccessPolicyB2BSetting {
        return $this->b2bDirectConnectInbound;
    }

    /**
     * Gets the b2bDirectConnectOutbound property value. Defines your default configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B direct connect.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bDirectConnectOutbound(): ?CrossTenantAccessPolicyB2BSetting {
        return $this->b2bDirectConnectOutbound;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
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
        return $this->inboundTrust;
    }

    /**
     * Gets the isServiceDefault property value. If true, the default configuration is set to the system default configuration. If false, the default settings have been customized.
     * @return bool|null
    */
    public function getIsServiceDefault(): ?bool {
        return $this->isServiceDefault;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('b2bCollaborationInbound', $this->b2bCollaborationInbound);
        $writer->writeObjectValue('b2bCollaborationOutbound', $this->b2bCollaborationOutbound);
        $writer->writeObjectValue('b2bDirectConnectInbound', $this->b2bDirectConnectInbound);
        $writer->writeObjectValue('b2bDirectConnectOutbound', $this->b2bDirectConnectOutbound);
        $writer->writeObjectValue('inboundTrust', $this->inboundTrust);
        $writer->writeBooleanValue('isServiceDefault', $this->isServiceDefault);
    }

    /**
     * Sets the b2bCollaborationInbound property value. Defines your default configuration for users from other organizations accessing your resources via Azure AD B2B collaboration.
     *  @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bCollaborationInbound property.
    */
    public function setB2bCollaborationInbound(?CrossTenantAccessPolicyB2BSetting $value ): void {
        $this->b2bCollaborationInbound = $value;
    }

    /**
     * Sets the b2bCollaborationOutbound property value. Defines your default configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B collaboration.
     *  @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bCollaborationOutbound property.
    */
    public function setB2bCollaborationOutbound(?CrossTenantAccessPolicyB2BSetting $value ): void {
        $this->b2bCollaborationOutbound = $value;
    }

    /**
     * Sets the b2bDirectConnectInbound property value. Defines your default configuration for users from other organizations accessing your resources via Azure AD B2B direct connect.
     *  @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bDirectConnectInbound property.
    */
    public function setB2bDirectConnectInbound(?CrossTenantAccessPolicyB2BSetting $value ): void {
        $this->b2bDirectConnectInbound = $value;
    }

    /**
     * Sets the b2bDirectConnectOutbound property value. Defines your default configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B direct connect.
     *  @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bDirectConnectOutbound property.
    */
    public function setB2bDirectConnectOutbound(?CrossTenantAccessPolicyB2BSetting $value ): void {
        $this->b2bDirectConnectOutbound = $value;
    }

    /**
     * Sets the inboundTrust property value. Determines the default configuration for trusting other Conditional Access claims from external Azure AD organizations.
     *  @param CrossTenantAccessPolicyInboundTrust|null $value Value to set for the inboundTrust property.
    */
    public function setInboundTrust(?CrossTenantAccessPolicyInboundTrust $value ): void {
        $this->inboundTrust = $value;
    }

    /**
     * Sets the isServiceDefault property value. If true, the default configuration is set to the system default configuration. If false, the default settings have been customized.
     *  @param bool|null $value Value to set for the isServiceDefault property.
    */
    public function setIsServiceDefault(?bool $value ): void {
        $this->isServiceDefault = $value;
    }

}
