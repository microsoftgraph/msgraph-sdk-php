<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AiAgentEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new AiAgentEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.aiAgentEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AiAgentEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AiAgentEvidence {
        return new AiAgentEvidence();
    }

    /**
     * Gets the agentId property value. The unique identifier for the AI agent.
     * @return string|null
    */
    public function getAgentId(): ?string {
        $val = $this->getBackingStore()->get('agentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentId'");
    }

    /**
     * Gets the agentName property value. The display name for the AI agent.
     * @return string|null
    */
    public function getAgentName(): ?string {
        $val = $this->getBackingStore()->get('agentName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentId' => fn(ParseNode $n) => $o->setAgentId($n->getStringValue()),
            'agentName' => fn(ParseNode $n) => $o->setAgentName($n->getStringValue()),
            'hostingPlatformType' => fn(ParseNode $n) => $o->setHostingPlatformType($n->getEnumValue(AiAgentPlatform::class)),
            'instructions' => fn(ParseNode $n) => $o->setInstructions($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hostingPlatformType property value. Type of the platform the agent runs on. Possible values are: unknown, azureAIFoundry, copilotStudio, copilot, unknownFutureValue.
     * @return AiAgentPlatform|null
    */
    public function getHostingPlatformType(): ?AiAgentPlatform {
        $val = $this->getBackingStore()->get('hostingPlatformType');
        if (is_null($val) || $val instanceof AiAgentPlatform) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostingPlatformType'");
    }

    /**
     * Gets the instructions property value. The instructions of the agent.
     * @return string|null
    */
    public function getInstructions(): ?string {
        $val = $this->getBackingStore()->get('instructions');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'instructions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('agentId', $this->getAgentId());
        $writer->writeStringValue('agentName', $this->getAgentName());
        $writer->writeEnumValue('hostingPlatformType', $this->getHostingPlatformType());
        $writer->writeStringValue('instructions', $this->getInstructions());
    }

    /**
     * Sets the agentId property value. The unique identifier for the AI agent.
     * @param string|null $value Value to set for the agentId property.
    */
    public function setAgentId(?string $value): void {
        $this->getBackingStore()->set('agentId', $value);
    }

    /**
     * Sets the agentName property value. The display name for the AI agent.
     * @param string|null $value Value to set for the agentName property.
    */
    public function setAgentName(?string $value): void {
        $this->getBackingStore()->set('agentName', $value);
    }

    /**
     * Sets the hostingPlatformType property value. Type of the platform the agent runs on. Possible values are: unknown, azureAIFoundry, copilotStudio, copilot, unknownFutureValue.
     * @param AiAgentPlatform|null $value Value to set for the hostingPlatformType property.
    */
    public function setHostingPlatformType(?AiAgentPlatform $value): void {
        $this->getBackingStore()->set('hostingPlatformType', $value);
    }

    /**
     * Sets the instructions property value. The instructions of the agent.
     * @param string|null $value Value to set for the instructions property.
    */
    public function setInstructions(?string $value): void {
        $this->getBackingStore()->set('instructions', $value);
    }

}
