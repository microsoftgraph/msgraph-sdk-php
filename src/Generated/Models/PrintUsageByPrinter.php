<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintUsageByPrinter extends PrintUsage implements Parsable 
{
    /**
     * Instantiates a new printUsageByPrinter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.printUsageByPrinter');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintUsageByPrinter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintUsageByPrinter {
        return new PrintUsageByPrinter();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'printerId' => fn(ParseNode $n) => $o->setPrinterId($n->getStringValue()),
            'printerName' => fn(ParseNode $n) => $o->setPrinterName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the printerId property value. The printerId property
     * @return string|null
    */
    public function getPrinterId(): ?string {
        $val = $this->getBackingStore()->get('printerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'printerId'");
    }

    /**
     * Gets the printerName property value. The name of the printer represented by these statistics.
     * @return string|null
    */
    public function getPrinterName(): ?string {
        $val = $this->getBackingStore()->get('printerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'printerName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('printerId', $this->getPrinterId());
        $writer->writeStringValue('printerName', $this->getPrinterName());
    }

    /**
     * Sets the printerId property value. The printerId property
     * @param string|null $value Value to set for the printerId property.
    */
    public function setPrinterId(?string $value): void {
        $this->getBackingStore()->set('printerId', $value);
    }

    /**
     * Sets the printerName property value. The name of the printer represented by these statistics.
     * @param string|null $value Value to set for the printerName property.
    */
    public function setPrinterName(?string $value): void {
        $this->getBackingStore()->set('printerName', $value);
    }

}
