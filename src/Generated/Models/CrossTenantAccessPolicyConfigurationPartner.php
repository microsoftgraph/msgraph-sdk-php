<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CrossTenantAccessPolicyConfigurationPartner implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CrossTenantAccessPolicyConfigurationPartner and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the automaticUserConsentSettings property value. Determines the partner-specific configuration for automatic user consent settings. Unless specifically configured, the inboundAllowed and outboundAllowed properties are null and inherit from the default settings, which is always false.
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'automaticUserConsentSettings' => fn(ParseNode $n) => $o->setAutomaticUserConsentSettings($n->getObjectValue([InboundOutboundPolicyConfiguration::class, 'createFromDiscriminatorValue'])),
            'b2bCollaborationInbound' => fn(ParseNode $n) => $o->setB2bCollaborationInbound($n->getObjectValue([CrossTenantAccessPolicyB2BSetting::class, 'createFromDiscriminatorValue'])),
            'b2bCollaborationOutbound' => fn(ParseNode $n) => $o->setB2bCollaborationOutbound($n->getObjectValue([CrossTenantAccessPolicyB2BSetting::class, 'createFromDiscriminatorValue'])),
            'b2bDirectConnectInbound' => fn(ParseNode $n) => $o->setB2bDirectConnectInbound($n->getObjectValue([CrossTenantAccessPolicyB2BSetting::class, 'createFromDiscriminatorValue'])),
            'b2bDirectConnectOutbound' => fn(ParseNode $n) => $o->setB2bDirectConnectOutbound($n->getObjectValue([CrossTenantAccessPolicyB2BSetting::class, 'createFromDiscriminatorValue'])),
            'identitySynchronization' => fn(ParseNode $n) => $o->setIdentitySynchronization($n->getObjectValue([CrossTenantIdentitySyncPolicyPartner::class, 'createFromDiscriminatorValue'])),
            'inboundTrust' => fn(ParseNode $n) => $o->setInboundTrust($n->getObjectValue([CrossTenantAccessPolicyInboundTrust::class, 'createFromDiscriminatorValue'])),
            'isInMultiTenantOrganization' => fn(ParseNode $n) => $o->setIsInMultiTenantOrganization($n->getBooleanValue()),
            'isServiceProvider' => fn(ParseNode $n) => $o->setIsServiceProvider($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'tenantRestrictions' => fn(ParseNode $n) => $o->setTenantRestrictions($n->getObjectValue([CrossTenantAccessPolicyTenantRestrictions::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the identitySynchronization property value. Defines the cross-tenant policy for the synchronization of users from a partner tenant. Use this user synchronization policy to streamline collaboration between users in a multitenant organization by automating the creation, update, and deletion of users from one tenant to another.
     * @return CrossTenantIdentitySyncPolicyPartner|null
    */
    public function getIdentitySynchronization(): ?CrossTenantIdentitySyncPolicyPartner {
        $val = $this->getBackingStore()->get('identitySynchronization');
        if (is_null($val) || $val instanceof CrossTenantIdentitySyncPolicyPartner) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identitySynchronization'");
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
     * Gets the isInMultiTenantOrganization property value. Identifies whether a tenant is a member of a multitenant organization.
     * @return bool|null
    */
    public function getIsInMultiTenantOrganization(): ?bool {
        $val = $this->getBackingStore()->get('isInMultiTenantOrganization');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isInMultiTenantOrganization'");
    }

    /**
     * Gets the isServiceProvider property value. Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization.
     * @return bool|null
    */
    public function getIsServiceProvider(): ?bool {
        $val = $this->getBackingStore()->get('isServiceProvider');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isServiceProvider'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the tenantId property value. The tenant identifier for the partner Microsoft Entra organization. Read-only. Key.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the tenantRestrictions property value. Defines the partner-specific tenant restrictions configuration for users in your organization who access a partner organization using partner supplied identities on your network or devices.
     * @return CrossTenantAccessPolicyTenantRestrictions|null
    */
    public function getTenantRestrictions(): ?CrossTenantAccessPolicyTenantRestrictions {
        $val = $this->getBackingStore()->get('tenantRestrictions');
        if (is_null($val) || $val instanceof CrossTenantAccessPolicyTenantRestrictions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantRestrictions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('automaticUserConsentSettings', $this->getAutomaticUserConsentSettings());
        $writer->writeObjectValue('b2bCollaborationInbound', $this->getB2bCollaborationInbound());
        $writer->writeObjectValue('b2bCollaborationOutbound', $this->getB2bCollaborationOutbound());
        $writer->writeObjectValue('b2bDirectConnectInbound', $this->getB2bDirectConnectInbound());
        $writer->writeObjectValue('b2bDirectConnectOutbound', $this->getB2bDirectConnectOutbound());
        $writer->writeObjectValue('identitySynchronization', $this->getIdentitySynchronization());
        $writer->writeObjectValue('inboundTrust', $this->getInboundTrust());
        $writer->writeBooleanValue('isInMultiTenantOrganization', $this->getIsInMultiTenantOrganization());
        $writer->writeBooleanValue('isServiceProvider', $this->getIsServiceProvider());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeObjectValue('tenantRestrictions', $this->getTenantRestrictions());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the automaticUserConsentSettings property value. Determines the partner-specific configuration for automatic user consent settings. Unless specifically configured, the inboundAllowed and outboundAllowed properties are null and inherit from the default settings, which is always false.
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the identitySynchronization property value. Defines the cross-tenant policy for the synchronization of users from a partner tenant. Use this user synchronization policy to streamline collaboration between users in a multitenant organization by automating the creation, update, and deletion of users from one tenant to another.
     * @param CrossTenantIdentitySyncPolicyPartner|null $value Value to set for the identitySynchronization property.
    */
    public function setIdentitySynchronization(?CrossTenantIdentitySyncPolicyPartner $value): void {
        $this->getBackingStore()->set('identitySynchronization', $value);
    }

    /**
     * Sets the inboundTrust property value. Determines the partner-specific configuration for trusting other Conditional Access claims from external Microsoft Entra organizations.
     * @param CrossTenantAccessPolicyInboundTrust|null $value Value to set for the inboundTrust property.
    */
    public function setInboundTrust(?CrossTenantAccessPolicyInboundTrust $value): void {
        $this->getBackingStore()->set('inboundTrust', $value);
    }

    /**
     * Sets the isInMultiTenantOrganization property value. Identifies whether a tenant is a member of a multitenant organization.
     * @param bool|null $value Value to set for the isInMultiTenantOrganization property.
    */
    public function setIsInMultiTenantOrganization(?bool $value): void {
        $this->getBackingStore()->set('isInMultiTenantOrganization', $value);
    }

    /**
     * Sets the isServiceProvider property value. Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization.
     * @param bool|null $value Value to set for the isServiceProvider property.
    */
    public function setIsServiceProvider(?bool $value): void {
        $this->getBackingStore()->set('isServiceProvider', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the tenantId property value. The tenant identifier for the partner Microsoft Entra organization. Read-only. Key.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the tenantRestrictions property value. Defines the partner-specific tenant restrictions configuration for users in your organization who access a partner organization using partner supplied identities on your network or devices.
     * @param CrossTenantAccessPolicyTenantRestrictions|null $value Value to set for the tenantRestrictions property.
    */
    public function setTenantRestrictions(?CrossTenantAccessPolicyTenantRestrictions $value): void {
        $this->getBackingStore()->set('tenantRestrictions', $value);
    }

}
