<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossTenantAccessPolicyConfigurationPartner implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var CrossTenantAccessPolicyB2BSetting|null $b2bCollaborationInbound Defines your partner-specific configuration for users from other organizations accessing your resources via Azure AD B2B collaboration.
    */
    private ?CrossTenantAccessPolicyB2BSetting $b2bCollaborationInbound = null;
    
    /**
     * @var CrossTenantAccessPolicyB2BSetting|null $b2bCollaborationOutbound Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B collaboration.
    */
    private ?CrossTenantAccessPolicyB2BSetting $b2bCollaborationOutbound = null;
    
    /**
     * @var CrossTenantAccessPolicyB2BSetting|null $b2bDirectConnectInbound Defines your partner-specific configuration for users from other organizations accessing your resources via Azure B2B direct connect.
    */
    private ?CrossTenantAccessPolicyB2BSetting $b2bDirectConnectInbound = null;
    
    /**
     * @var CrossTenantAccessPolicyB2BSetting|null $b2bDirectConnectOutbound Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B direct connect.
    */
    private ?CrossTenantAccessPolicyB2BSetting $b2bDirectConnectOutbound = null;
    
    /**
     * @var CrossTenantAccessPolicyInboundTrust|null $inboundTrust Determines the partner-specific configuration for trusting other Conditional Access claims from external Azure AD organizations.
    */
    private ?CrossTenantAccessPolicyInboundTrust $inboundTrust = null;
    
    /**
     * @var bool|null $isServiceProvider Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization.
    */
    private ?bool $isServiceProvider = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $tenantId The tenant identifier for the partner Azure AD organization. Read-only. Key.
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new crossTenantAccessPolicyConfigurationPartner and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.crossTenantAccessPolicyConfigurationPartner');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantAccessPolicyConfigurationPartner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantAccessPolicyConfigurationPartner {
        return new CrossTenantAccessPolicyConfigurationPartner();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the b2bCollaborationInbound property value. Defines your partner-specific configuration for users from other organizations accessing your resources via Azure AD B2B collaboration.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bCollaborationInbound(): ?CrossTenantAccessPolicyB2BSetting {
        return $this->b2bCollaborationInbound;
    }

    /**
     * Gets the b2bCollaborationOutbound property value. Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B collaboration.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bCollaborationOutbound(): ?CrossTenantAccessPolicyB2BSetting {
        return $this->b2bCollaborationOutbound;
    }

    /**
     * Gets the b2bDirectConnectInbound property value. Defines your partner-specific configuration for users from other organizations accessing your resources via Azure B2B direct connect.
     * @return CrossTenantAccessPolicyB2BSetting|null
    */
    public function getB2bDirectConnectInbound(): ?CrossTenantAccessPolicyB2BSetting {
        return $this->b2bDirectConnectInbound;
    }

    /**
     * Gets the b2bDirectConnectOutbound property value. Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B direct connect.
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
        return  [
            'b2bCollaborationInbound' => fn(ParseNode $n) => $o->setB2bCollaborationInbound($n->getObjectValue([CrossTenantAccessPolicyB2BSetting::class, 'createFromDiscriminatorValue'])),
            'b2bCollaborationOutbound' => fn(ParseNode $n) => $o->setB2bCollaborationOutbound($n->getObjectValue([CrossTenantAccessPolicyB2BSetting::class, 'createFromDiscriminatorValue'])),
            'b2bDirectConnectInbound' => fn(ParseNode $n) => $o->setB2bDirectConnectInbound($n->getObjectValue([CrossTenantAccessPolicyB2BSetting::class, 'createFromDiscriminatorValue'])),
            'b2bDirectConnectOutbound' => fn(ParseNode $n) => $o->setB2bDirectConnectOutbound($n->getObjectValue([CrossTenantAccessPolicyB2BSetting::class, 'createFromDiscriminatorValue'])),
            'inboundTrust' => fn(ParseNode $n) => $o->setInboundTrust($n->getObjectValue([CrossTenantAccessPolicyInboundTrust::class, 'createFromDiscriminatorValue'])),
            'isServiceProvider' => fn(ParseNode $n) => $o->setIsServiceProvider($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ];
    }

    /**
     * Gets the inboundTrust property value. Determines the partner-specific configuration for trusting other Conditional Access claims from external Azure AD organizations.
     * @return CrossTenantAccessPolicyInboundTrust|null
    */
    public function getInboundTrust(): ?CrossTenantAccessPolicyInboundTrust {
        return $this->inboundTrust;
    }

    /**
     * Gets the isServiceProvider property value. Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization.
     * @return bool|null
    */
    public function getIsServiceProvider(): ?bool {
        return $this->isServiceProvider;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the tenantId property value. The tenant identifier for the partner Azure AD organization. Read-only. Key.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('b2bCollaborationInbound', $this->b2bCollaborationInbound);
        $writer->writeObjectValue('b2bCollaborationOutbound', $this->b2bCollaborationOutbound);
        $writer->writeObjectValue('b2bDirectConnectInbound', $this->b2bDirectConnectInbound);
        $writer->writeObjectValue('b2bDirectConnectOutbound', $this->b2bDirectConnectOutbound);
        $writer->writeObjectValue('inboundTrust', $this->inboundTrust);
        $writer->writeBooleanValue('isServiceProvider', $this->isServiceProvider);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the b2bCollaborationInbound property value. Defines your partner-specific configuration for users from other organizations accessing your resources via Azure AD B2B collaboration.
     *  @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bCollaborationInbound property.
    */
    public function setB2bCollaborationInbound(?CrossTenantAccessPolicyB2BSetting $value ): void {
        $this->b2bCollaborationInbound = $value;
    }

    /**
     * Sets the b2bCollaborationOutbound property value. Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B collaboration.
     *  @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bCollaborationOutbound property.
    */
    public function setB2bCollaborationOutbound(?CrossTenantAccessPolicyB2BSetting $value ): void {
        $this->b2bCollaborationOutbound = $value;
    }

    /**
     * Sets the b2bDirectConnectInbound property value. Defines your partner-specific configuration for users from other organizations accessing your resources via Azure B2B direct connect.
     *  @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bDirectConnectInbound property.
    */
    public function setB2bDirectConnectInbound(?CrossTenantAccessPolicyB2BSetting $value ): void {
        $this->b2bDirectConnectInbound = $value;
    }

    /**
     * Sets the b2bDirectConnectOutbound property value. Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B direct connect.
     *  @param CrossTenantAccessPolicyB2BSetting|null $value Value to set for the b2bDirectConnectOutbound property.
    */
    public function setB2bDirectConnectOutbound(?CrossTenantAccessPolicyB2BSetting $value ): void {
        $this->b2bDirectConnectOutbound = $value;
    }

    /**
     * Sets the inboundTrust property value. Determines the partner-specific configuration for trusting other Conditional Access claims from external Azure AD organizations.
     *  @param CrossTenantAccessPolicyInboundTrust|null $value Value to set for the inboundTrust property.
    */
    public function setInboundTrust(?CrossTenantAccessPolicyInboundTrust $value ): void {
        $this->inboundTrust = $value;
    }

    /**
     * Sets the isServiceProvider property value. Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization.
     *  @param bool|null $value Value to set for the isServiceProvider property.
    */
    public function setIsServiceProvider(?bool $value ): void {
        $this->isServiceProvider = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the tenantId property value. The tenant identifier for the partner Azure AD organization. Read-only. Key.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
