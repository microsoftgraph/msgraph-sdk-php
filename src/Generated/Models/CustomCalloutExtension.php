<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Graph\Generated\Models\IdentityGovernance\CustomTaskExtension;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomCalloutExtension extends Entity implements Parsable 
{
    /**
     * Instantiates a new customCalloutExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomCalloutExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomCalloutExtension {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.identityGovernance.customTaskExtension': return new CustomTaskExtension();
            }
        }
        return new CustomCalloutExtension();
    }

    /**
     * Gets the authenticationConfiguration property value. Configuration for securing the API call to the logic app. For example, using OAuth client credentials flow.
     * @return CustomExtensionAuthenticationConfiguration|null
    */
    public function getAuthenticationConfiguration(): ?CustomExtensionAuthenticationConfiguration {
        return $this->getBackingStore()->get('authenticationConfiguration');
    }

    /**
     * Gets the clientConfiguration property value. HTTP connection settings that define how long Azure AD can wait for a connection to a logic app, how many times you can retry a timed-out connection and the exception scenarios when retries are allowed.
     * @return CustomExtensionClientConfiguration|null
    */
    public function getClientConfiguration(): ?CustomExtensionClientConfiguration {
        return $this->getBackingStore()->get('clientConfiguration');
    }

    /**
     * Gets the description property value. Description for the customCalloutExtension object.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. Display name for the customCalloutExtension object.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the endpointConfiguration property value. The type and details for configuring the endpoint to call the logic app's workflow.
     * @return CustomExtensionEndpointConfiguration|null
    */
    public function getEndpointConfiguration(): ?CustomExtensionEndpointConfiguration {
        return $this->getBackingStore()->get('endpointConfiguration');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationConfiguration' => fn(ParseNode $n) => $o->setAuthenticationConfiguration($n->getObjectValue([CustomExtensionAuthenticationConfiguration::class, 'createFromDiscriminatorValue'])),
            'clientConfiguration' => fn(ParseNode $n) => $o->setClientConfiguration($n->getObjectValue([CustomExtensionClientConfiguration::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endpointConfiguration' => fn(ParseNode $n) => $o->setEndpointConfiguration($n->getObjectValue([CustomExtensionEndpointConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('authenticationConfiguration', $this->getAuthenticationConfiguration());
        $writer->writeObjectValue('clientConfiguration', $this->getClientConfiguration());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('endpointConfiguration', $this->getEndpointConfiguration());
    }

    /**
     * Sets the authenticationConfiguration property value. Configuration for securing the API call to the logic app. For example, using OAuth client credentials flow.
     * @param CustomExtensionAuthenticationConfiguration|null $value Value to set for the authenticationConfiguration property.
    */
    public function setAuthenticationConfiguration(?CustomExtensionAuthenticationConfiguration $value): void {
        $this->getBackingStore()->set('authenticationConfiguration', $value);
    }

    /**
     * Sets the clientConfiguration property value. HTTP connection settings that define how long Azure AD can wait for a connection to a logic app, how many times you can retry a timed-out connection and the exception scenarios when retries are allowed.
     * @param CustomExtensionClientConfiguration|null $value Value to set for the clientConfiguration property.
    */
    public function setClientConfiguration(?CustomExtensionClientConfiguration $value): void {
        $this->getBackingStore()->set('clientConfiguration', $value);
    }

    /**
     * Sets the description property value. Description for the customCalloutExtension object.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display name for the customCalloutExtension object.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endpointConfiguration property value. The type and details for configuring the endpoint to call the logic app's workflow.
     * @param CustomExtensionEndpointConfiguration|null $value Value to set for the endpointConfiguration property.
    */
    public function setEndpointConfiguration(?CustomExtensionEndpointConfiguration $value): void {
        $this->getBackingStore()->set('endpointConfiguration', $value);
    }

}
