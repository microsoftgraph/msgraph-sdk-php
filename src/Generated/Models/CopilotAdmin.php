<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CopilotAdmin extends Entity implements Parsable 
{
    /**
     * Instantiates a new CopilotAdmin and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotAdmin
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotAdmin {
        return new CopilotAdmin();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([CopilotAdminSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the settings property value. The settings property
     * @return CopilotAdminSetting|null
    */
    public function getSettings(): ?CopilotAdminSetting {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof CopilotAdminSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('settings', $this->getSettings());
    }

    /**
     * Sets the settings property value. The settings property
     * @param CopilotAdminSetting|null $value Value to set for the settings property.
    */
    public function setSettings(?CopilotAdminSetting $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
