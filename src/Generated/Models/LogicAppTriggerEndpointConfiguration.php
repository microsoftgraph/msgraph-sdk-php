<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LogicAppTriggerEndpointConfiguration extends CustomExtensionEndpointConfiguration implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new logicAppTriggerEndpointConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.logicAppTriggerEndpointConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LogicAppTriggerEndpointConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LogicAppTriggerEndpointConfiguration {
        return new LogicAppTriggerEndpointConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'logicAppWorkflowName' => fn(ParseNode $n) => $o->setLogicAppWorkflowName($n->getStringValue()),
            'resourceGroupName' => fn(ParseNode $n) => $o->setResourceGroupName($n->getStringValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the logicAppWorkflowName property value. The name of the logic app.
     * @return string|null
    */
    public function getLogicAppWorkflowName(): ?string {
        $val = $this->getBackingStore()->get('logicAppWorkflowName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'logicAppWorkflowName'");
    }

    /**
     * Gets the resourceGroupName property value. The Azure resource group name for the logic app.
     * @return string|null
    */
    public function getResourceGroupName(): ?string {
        $val = $this->getBackingStore()->get('resourceGroupName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceGroupName'");
    }

    /**
     * Gets the subscriptionId property value. Identifier of the Azure subscription for the logic app.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        $val = $this->getBackingStore()->get('subscriptionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptionId'");
    }

    /**
     * Gets the url property value. The URL to the logic app endpoint that will be triggered. Only required for app-only token scenarios where app is creating a customCalloutExtension without a signed-in user.
     * @return string|null
    */
    public function getUrl(): ?string {
        $val = $this->getBackingStore()->get('url');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'url'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('logicAppWorkflowName', $this->getLogicAppWorkflowName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('resourceGroupName', $this->getResourceGroupName());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the logicAppWorkflowName property value. The name of the logic app.
     * @param string|null $value Value to set for the logicAppWorkflowName property.
    */
    public function setLogicAppWorkflowName(?string $value): void {
        $this->getBackingStore()->set('logicAppWorkflowName', $value);
    }

    /**
     * Sets the resourceGroupName property value. The Azure resource group name for the logic app.
     * @param string|null $value Value to set for the resourceGroupName property.
    */
    public function setResourceGroupName(?string $value): void {
        $this->getBackingStore()->set('resourceGroupName', $value);
    }

    /**
     * Sets the subscriptionId property value. Identifier of the Azure subscription for the logic app.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('subscriptionId', $value);
    }

    /**
     * Sets the url property value. The URL to the logic app endpoint that will be triggered. Only required for app-only token scenarios where app is creating a customCalloutExtension without a signed-in user.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
