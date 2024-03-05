<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Windows Defender last scan result
*/
class WindowsDefenderScanActionResult extends DeviceActionResult implements Parsable 
{
    /**
     * Instantiates a new WindowsDefenderScanActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDefenderScanActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDefenderScanActionResult {
        return new WindowsDefenderScanActionResult();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'scanType' => fn(ParseNode $n) => $o->setScanType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the scanType property value. Scan type either full scan or quick scan
     * @return string|null
    */
    public function getScanType(): ?string {
        $val = $this->getBackingStore()->get('scanType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scanType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('scanType', $this->getScanType());
    }

    /**
     * Sets the scanType property value. Scan type either full scan or quick scan
     * @param string|null $value Value to set for the scanType property.
    */
    public function setScanType(?string $value): void {
        $this->getBackingStore()->set('scanType', $value);
    }

}
