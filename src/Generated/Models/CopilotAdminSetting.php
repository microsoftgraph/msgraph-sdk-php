<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CopilotAdminSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new CopilotAdminSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotAdminSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotAdminSetting {
        return new CopilotAdminSetting();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'limitedMode' => fn(ParseNode $n) => $o->setLimitedMode($n->getObjectValue([CopilotAdminLimitedMode::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the limitedMode property value. Represents a setting that controls whether users of Microsoft 365 Copilot in Teams meetings can receive responses to sentiment-related prompts. Read-only. Nullable.
     * @return CopilotAdminLimitedMode|null
    */
    public function getLimitedMode(): ?CopilotAdminLimitedMode {
        $val = $this->getBackingStore()->get('limitedMode');
        if (is_null($val) || $val instanceof CopilotAdminLimitedMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'limitedMode'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('limitedMode', $this->getLimitedMode());
    }

    /**
     * Sets the limitedMode property value. Represents a setting that controls whether users of Microsoft 365 Copilot in Teams meetings can receive responses to sentiment-related prompts. Read-only. Nullable.
     * @param CopilotAdminLimitedMode|null $value Value to set for the limitedMode property.
    */
    public function setLimitedMode(?CopilotAdminLimitedMode $value): void {
        $this->getBackingStore()->set('limitedMode', $value);
    }

}
