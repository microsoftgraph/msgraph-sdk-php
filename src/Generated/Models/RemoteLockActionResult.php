<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoteLockActionResult extends DeviceActionResult implements Parsable 
{
    /**
     * Instantiates a new RemoteLockActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoteLockActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoteLockActionResult {
        return new RemoteLockActionResult();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'unlockPin' => fn(ParseNode $n) => $o->setUnlockPin($n->getStringValue()),
        ]);
    }

    /**
     * Gets the unlockPin property value. Pin to unlock the client
     * @return string|null
    */
    public function getUnlockPin(): ?string {
        return $this->getBackingStore()->get('unlockPin');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('unlockPin', $this->getUnlockPin());
    }

    /**
     * Sets the unlockPin property value. Pin to unlock the client
     * @param string|null $value Value to set for the unlockPin property.
    */
    public function setUnlockPin(?string $value): void {
        $this->getBackingStore()->set('unlockPin', $value);
    }

}
