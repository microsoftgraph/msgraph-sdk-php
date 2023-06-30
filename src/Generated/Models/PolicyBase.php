<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicyBase extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new policyBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.policyBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.activityBasedTimeoutPolicy': return new ActivityBasedTimeoutPolicy();
                case '#microsoft.graph.appManagementPolicy': return new AppManagementPolicy();
                case '#microsoft.graph.authorizationPolicy': return new AuthorizationPolicy();
                case '#microsoft.graph.claimsMappingPolicy': return new ClaimsMappingPolicy();
                case '#microsoft.graph.crossTenantAccessPolicy': return new CrossTenantAccessPolicy();
                case '#microsoft.graph.homeRealmDiscoveryPolicy': return new HomeRealmDiscoveryPolicy();
                case '#microsoft.graph.identitySecurityDefaultsEnforcementPolicy': return new IdentitySecurityDefaultsEnforcementPolicy();
                case '#microsoft.graph.permissionGrantPolicy': return new PermissionGrantPolicy();
                case '#microsoft.graph.stsPolicy': return new StsPolicy();
                case '#microsoft.graph.tenantAppManagementPolicy': return new TenantAppManagementPolicy();
                case '#microsoft.graph.tokenIssuancePolicy': return new TokenIssuancePolicy();
                case '#microsoft.graph.tokenLifetimePolicy': return new TokenLifetimePolicy();
            }
        }
        return new PolicyBase();
    }

    /**
     * Gets the description property value. Description for this policy. Required.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. Display name for this policy. Required.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
    }

    /**
     * Sets the description property value. Description for this policy. Required.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display name for this policy. Required.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

}
