<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterCreateOperation extends PrintOperation implements Parsable 
{
    /**
     * Instantiates a new PrinterCreateOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.printerCreateOperation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterCreateOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrinterCreateOperation {
        return new PrinterCreateOperation();
    }

    /**
     * Gets the certificate property value. The signed certificate created during the registration process. Read-only.
     * @return string|null
    */
    public function getCertificate(): ?string {
        return $this->getBackingStore()->get('certificate');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificate' => fn(ParseNode $n) => $o->setCertificate($n->getStringValue()),
            'printer' => fn(ParseNode $n) => $o->setPrinter($n->getObjectValue([Printer::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the printer property value. The created printer entity. Read-only.
     * @return Printer|null
    */
    public function getPrinter(): ?Printer {
        return $this->getBackingStore()->get('printer');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certificate', $this->getCertificate());
        $writer->writeObjectValue('printer', $this->getPrinter());
    }

    /**
     * Sets the certificate property value. The signed certificate created during the registration process. Read-only.
     * @param string|null $value Value to set for the certificate property.
    */
    public function setCertificate(?string $value): void {
        $this->getBackingStore()->set('certificate', $value);
    }

    /**
     * Sets the printer property value. The created printer entity. Read-only.
     * @param Printer|null $value Value to set for the printer property.
    */
    public function setPrinter(?Printer $value): void {
        $this->getBackingStore()->set('printer', $value);
    }

}
