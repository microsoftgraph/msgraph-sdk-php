<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new teamsAppSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppSettings {
        return new TeamsAppSettings();
    }

    /**
     * Gets the allowUserRequestsForAppAccess property value. The allowUserRequestsForAppAccess property
     * @return bool|null
    */
    public function getAllowUserRequestsForAppAccess(): ?bool {
        $val = $this->getBackingStore()->get('allowUserRequestsForAppAccess');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowUserRequestsForAppAccess'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowUserRequestsForAppAccess' => fn(ParseNode $n) => $o->setAllowUserRequestsForAppAccess($n->getBooleanValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowUserRequestsForAppAccess', $this->getAllowUserRequestsForAppAccess());
    }

    /**
     * Sets the allowUserRequestsForAppAccess property value. The allowUserRequestsForAppAccess property
     * @param bool|null $value Value to set for the allowUserRequestsForAppAccess property.
    */
    public function setAllowUserRequestsForAppAccess(?bool $value): void {
        $this->getBackingStore()->set('allowUserRequestsForAppAccess', $value);
    }

}
