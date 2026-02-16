<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AiAgentInfo extends AiInteractionEntity implements Parsable 
{
    /**
     * Instantiates a new AiAgentInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AiAgentInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AiAgentInfo {
        return new AiAgentInfo();
    }

    /**
     * Gets the blueprintId property value. The unique identifier of the parent agent blueprint that defines the identity and configuration of this agent instance.
     * @return string|null
    */
    public function getBlueprintId(): ?string {
        $val = $this->getBackingStore()->get('blueprintId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blueprintId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'blueprintId' => fn(ParseNode $n) => $o->setBlueprintId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('blueprintId', $this->getBlueprintId());
    }

    /**
     * Sets the blueprintId property value. The unique identifier of the parent agent blueprint that defines the identity and configuration of this agent instance.
     * @param string|null $value Value to set for the blueprintId property.
    */
    public function setBlueprintId(?string $value): void {
        $this->getBackingStore()->set('blueprintId', $value);
    }

}
