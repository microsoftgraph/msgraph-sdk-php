<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StopAndQuarantineFileAction extends AutomatedAction implements Parsable 
{
    /**
     * Instantiates a new StopAndQuarantineFileAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.stopAndQuarantineFileAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StopAndQuarantineFileAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StopAndQuarantineFileAction {
        return new StopAndQuarantineFileAction();
    }

    /**
     * Gets the deviceIdColumn property value. Name of the hunting-query result column that contains the device ID for the device where the file was observed.
     * @return string|null
    */
    public function getDeviceIdColumn(): ?string {
        $val = $this->getBackingStore()->get('deviceIdColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceIdColumn'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceIdColumn' => fn(ParseNode $n) => $o->setDeviceIdColumn($n->getStringValue()),
            'sha1Column' => fn(ParseNode $n) => $o->setSha1Column($n->getStringValue()),
        ]);
    }

    /**
     * Gets the sha1Column property value. Name of the hunting-query result column that contains the SHA-1 hash of the file to stop and quarantine.
     * @return string|null
    */
    public function getSha1Column(): ?string {
        $val = $this->getBackingStore()->get('sha1Column');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sha1Column'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceIdColumn', $this->getDeviceIdColumn());
        $writer->writeStringValue('sha1Column', $this->getSha1Column());
    }

    /**
     * Sets the deviceIdColumn property value. Name of the hunting-query result column that contains the device ID for the device where the file was observed.
     * @param string|null $value Value to set for the deviceIdColumn property.
    */
    public function setDeviceIdColumn(?string $value): void {
        $this->getBackingStore()->set('deviceIdColumn', $value);
    }

    /**
     * Sets the sha1Column property value. Name of the hunting-query result column that contains the SHA-1 hash of the file to stop and quarantine.
     * @param string|null $value Value to set for the sha1Column property.
    */
    public function setSha1Column(?string $value): void {
        $this->getBackingStore()->set('sha1Column', $value);
    }

}
