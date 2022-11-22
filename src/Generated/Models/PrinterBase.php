<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new printerBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrinterBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.printer': return new Printer();
                case '#microsoft.graph.printerShare': return new PrinterShare();
            }
        }
        return new PrinterBase();
    }

    /**
     * Gets the capabilities property value. The capabilities of the printer/printerShare.
     * @return PrinterCapabilities|null
    */
    public function getCapabilities(): ?PrinterCapabilities {
        return $this->getBackingStore()->get('capabilities');
    }

    /**
     * Gets the defaults property value. The default print settings of printer/printerShare.
     * @return PrinterDefaults|null
    */
    public function getDefaults(): ?PrinterDefaults {
        return $this->getBackingStore()->get('defaults');
    }

    /**
     * Gets the displayName property value. The name of the printer/printerShare.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getObjectValue([PrinterCapabilities::class, 'createFromDiscriminatorValue'])),
            'defaults' => fn(ParseNode $n) => $o->setDefaults($n->getObjectValue([PrinterDefaults::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isAcceptingJobs' => fn(ParseNode $n) => $o->setIsAcceptingJobs($n->getBooleanValue()),
            'jobs' => fn(ParseNode $n) => $o->setJobs($n->getCollectionOfObjectValues([PrintJob::class, 'createFromDiscriminatorValue'])),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([PrinterLocation::class, 'createFromDiscriminatorValue'])),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([PrinterStatus::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isAcceptingJobs property value. Whether the printer/printerShare is currently accepting new print jobs.
     * @return bool|null
    */
    public function getIsAcceptingJobs(): ?bool {
        return $this->getBackingStore()->get('isAcceptingJobs');
    }

    /**
     * Gets the jobs property value. The list of jobs that are queued for printing by the printer/printerShare.
     * @return array<PrintJob>|null
    */
    public function getJobs(): ?array {
        return $this->getBackingStore()->get('jobs');
    }

    /**
     * Gets the location property value. The physical and/or organizational location of the printer/printerShare.
     * @return PrinterLocation|null
    */
    public function getLocation(): ?PrinterLocation {
        return $this->getBackingStore()->get('location');
    }

    /**
     * Gets the manufacturer property value. The manufacturer of the printer/printerShare.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->getBackingStore()->get('manufacturer');
    }

    /**
     * Gets the model property value. The model name of the printer/printerShare.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->getBackingStore()->get('model');
    }

    /**
     * Gets the status property value. The status property
     * @return PrinterStatus|null
    */
    public function getStatus(): ?PrinterStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('capabilities', $this->getCapabilities());
        $writer->writeObjectValue('defaults', $this->getDefaults());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isAcceptingJobs', $this->getIsAcceptingJobs());
        $writer->writeCollectionOfObjectValues('jobs', $this->getJobs());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeObjectValue('status', $this->getStatus());
    }

    /**
     * Sets the capabilities property value. The capabilities of the printer/printerShare.
     *  @param PrinterCapabilities|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?PrinterCapabilities $value): void {
        $this->getBackingStore()->set('capabilities', $value);
    }

    /**
     * Sets the defaults property value. The default print settings of printer/printerShare.
     *  @param PrinterDefaults|null $value Value to set for the defaults property.
    */
    public function setDefaults(?PrinterDefaults $value): void {
        $this->getBackingStore()->set('defaults', $value);
    }

    /**
     * Sets the displayName property value. The name of the printer/printerShare.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isAcceptingJobs property value. Whether the printer/printerShare is currently accepting new print jobs.
     *  @param bool|null $value Value to set for the isAcceptingJobs property.
    */
    public function setIsAcceptingJobs(?bool $value): void {
        $this->getBackingStore()->set('isAcceptingJobs', $value);
    }

    /**
     * Sets the jobs property value. The list of jobs that are queued for printing by the printer/printerShare.
     *  @param array<PrintJob>|null $value Value to set for the jobs property.
    */
    public function setJobs(?array $value): void {
        $this->getBackingStore()->set('jobs', $value);
    }

    /**
     * Sets the location property value. The physical and/or organizational location of the printer/printerShare.
     *  @param PrinterLocation|null $value Value to set for the location property.
    */
    public function setLocation(?PrinterLocation $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the manufacturer property value. The manufacturer of the printer/printerShare.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. The model name of the printer/printerShare.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param PrinterStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PrinterStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
