<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Sharepoint extends Entity implements Parsable 
{
    /**
     * Instantiates a new sharepoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Sharepoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Sharepoint {
        return new Sharepoint();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([SharepointSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the settings property value. The settings property
     * @return SharepointSettings|null
    */
    public function getSettings(): ?SharepointSettings {
        return $this->getBackingStore()->get('settings');
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
     * @param SharepointSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?SharepointSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
