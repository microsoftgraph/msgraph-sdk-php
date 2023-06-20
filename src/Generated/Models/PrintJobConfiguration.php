<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PrintJobConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PrintJobConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintJobConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintJobConfiguration {
        return new PrintJobConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the collate property value. Whether the printer should collate pages wehen printing multiple copies of a multi-page document.
     * @return bool|null
    */
    public function getCollate(): ?bool {
        return $this->getBackingStore()->get('collate');
    }

    /**
     * Gets the colorMode property value. The color mode the printer should use to print the job. Valid values are described in the table below. Read-only.
     * @return PrintColorMode|null
    */
    public function getColorMode(): ?PrintColorMode {
        return $this->getBackingStore()->get('colorMode');
    }

    /**
     * Gets the copies property value. The number of copies that should be printed. Read-only.
     * @return int|null
    */
    public function getCopies(): ?int {
        return $this->getBackingStore()->get('copies');
    }

    /**
     * Gets the dpi property value. The resolution to use when printing the job, expressed in dots per inch (DPI). Read-only.
     * @return int|null
    */
    public function getDpi(): ?int {
        return $this->getBackingStore()->get('dpi');
    }

    /**
     * Gets the duplexMode property value. The duplex mode the printer should use when printing the job. Valid values are described in the table below. Read-only.
     * @return PrintDuplexMode|null
    */
    public function getDuplexMode(): ?PrintDuplexMode {
        return $this->getBackingStore()->get('duplexMode');
    }

    /**
     * Gets the feedOrientation property value. The orientation to use when feeding media into the printer. Valid values are described in the following table. Read-only.
     * @return PrinterFeedOrientation|null
    */
    public function getFeedOrientation(): ?PrinterFeedOrientation {
        return $this->getBackingStore()->get('feedOrientation');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'collate' => fn(ParseNode $n) => $o->setCollate($n->getBooleanValue()),
            'colorMode' => fn(ParseNode $n) => $o->setColorMode($n->getEnumValue(PrintColorMode::class)),
            'copies' => fn(ParseNode $n) => $o->setCopies($n->getIntegerValue()),
            'dpi' => fn(ParseNode $n) => $o->setDpi($n->getIntegerValue()),
            'duplexMode' => fn(ParseNode $n) => $o->setDuplexMode($n->getEnumValue(PrintDuplexMode::class)),
            'feedOrientation' => fn(ParseNode $n) => $o->setFeedOrientation($n->getEnumValue(PrinterFeedOrientation::class)),
            'finishings' => fn(ParseNode $n) => $o->setFinishings($n->getCollectionOfEnumValues(PrintFinishing::class)),
            'fitPdfToPage' => fn(ParseNode $n) => $o->setFitPdfToPage($n->getBooleanValue()),
            'inputBin' => fn(ParseNode $n) => $o->setInputBin($n->getStringValue()),
            'margin' => fn(ParseNode $n) => $o->setMargin($n->getObjectValue([PrintMargin::class, 'createFromDiscriminatorValue'])),
            'mediaSize' => fn(ParseNode $n) => $o->setMediaSize($n->getStringValue()),
            'mediaType' => fn(ParseNode $n) => $o->setMediaType($n->getStringValue()),
            'multipageLayout' => fn(ParseNode $n) => $o->setMultipageLayout($n->getEnumValue(PrintMultipageLayout::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'orientation' => fn(ParseNode $n) => $o->setOrientation($n->getEnumValue(PrintOrientation::class)),
            'outputBin' => fn(ParseNode $n) => $o->setOutputBin($n->getStringValue()),
            'pageRanges' => fn(ParseNode $n) => $o->setPageRanges($n->getCollectionOfObjectValues([IntegerRange::class, 'createFromDiscriminatorValue'])),
            'pagesPerSheet' => fn(ParseNode $n) => $o->setPagesPerSheet($n->getIntegerValue()),
            'quality' => fn(ParseNode $n) => $o->setQuality($n->getEnumValue(PrintQuality::class)),
            'scaling' => fn(ParseNode $n) => $o->setScaling($n->getEnumValue(PrintScaling::class)),
        ];
    }

    /**
     * Gets the finishings property value. Finishing processes to use when printing.
     * @return array<PrintFinishing>|null
    */
    public function getFinishings(): ?array {
        return $this->getBackingStore()->get('finishings');
    }

    /**
     * Gets the fitPdfToPage property value. The fitPdfToPage property
     * @return bool|null
    */
    public function getFitPdfToPage(): ?bool {
        return $this->getBackingStore()->get('fitPdfToPage');
    }

    /**
     * Gets the inputBin property value. The input bin (tray) to use when printing. See the printer's capabilities for a list of supported input bins.
     * @return string|null
    */
    public function getInputBin(): ?string {
        return $this->getBackingStore()->get('inputBin');
    }

    /**
     * Gets the margin property value. The margin settings to use when printing.
     * @return PrintMargin|null
    */
    public function getMargin(): ?PrintMargin {
        return $this->getBackingStore()->get('margin');
    }

    /**
     * Gets the mediaSize property value. The media size to use when printing. Supports standard size names for ISO and ANSI media sizes.
     * @return string|null
    */
    public function getMediaSize(): ?string {
        return $this->getBackingStore()->get('mediaSize');
    }

    /**
     * Gets the mediaType property value. The mediaType property
     * @return string|null
    */
    public function getMediaType(): ?string {
        return $this->getBackingStore()->get('mediaType');
    }

    /**
     * Gets the multipageLayout property value. The multipageLayout property
     * @return PrintMultipageLayout|null
    */
    public function getMultipageLayout(): ?PrintMultipageLayout {
        return $this->getBackingStore()->get('multipageLayout');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the orientation property value. The orientation property
     * @return PrintOrientation|null
    */
    public function getOrientation(): ?PrintOrientation {
        return $this->getBackingStore()->get('orientation');
    }

    /**
     * Gets the outputBin property value. The outputBin property
     * @return string|null
    */
    public function getOutputBin(): ?string {
        return $this->getBackingStore()->get('outputBin');
    }

    /**
     * Gets the pageRanges property value. The pageRanges property
     * @return array<IntegerRange>|null
    */
    public function getPageRanges(): ?array {
        return $this->getBackingStore()->get('pageRanges');
    }

    /**
     * Gets the pagesPerSheet property value. The pagesPerSheet property
     * @return int|null
    */
    public function getPagesPerSheet(): ?int {
        return $this->getBackingStore()->get('pagesPerSheet');
    }

    /**
     * Gets the quality property value. The quality property
     * @return PrintQuality|null
    */
    public function getQuality(): ?PrintQuality {
        return $this->getBackingStore()->get('quality');
    }

    /**
     * Gets the scaling property value. The scaling property
     * @return PrintScaling|null
    */
    public function getScaling(): ?PrintScaling {
        return $this->getBackingStore()->get('scaling');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('collate', $this->getCollate());
        $writer->writeEnumValue('colorMode', $this->getColorMode());
        $writer->writeIntegerValue('copies', $this->getCopies());
        $writer->writeIntegerValue('dpi', $this->getDpi());
        $writer->writeEnumValue('duplexMode', $this->getDuplexMode());
        $writer->writeEnumValue('feedOrientation', $this->getFeedOrientation());
        $writer->writeCollectionOfEnumValues('finishings', $this->getFinishings());
        $writer->writeBooleanValue('fitPdfToPage', $this->getFitPdfToPage());
        $writer->writeStringValue('inputBin', $this->getInputBin());
        $writer->writeObjectValue('margin', $this->getMargin());
        $writer->writeStringValue('mediaSize', $this->getMediaSize());
        $writer->writeStringValue('mediaType', $this->getMediaType());
        $writer->writeEnumValue('multipageLayout', $this->getMultipageLayout());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('orientation', $this->getOrientation());
        $writer->writeStringValue('outputBin', $this->getOutputBin());
        $writer->writeCollectionOfObjectValues('pageRanges', $this->getPageRanges());
        $writer->writeIntegerValue('pagesPerSheet', $this->getPagesPerSheet());
        $writer->writeEnumValue('quality', $this->getQuality());
        $writer->writeEnumValue('scaling', $this->getScaling());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the collate property value. Whether the printer should collate pages wehen printing multiple copies of a multi-page document.
     * @param bool|null $value Value to set for the collate property.
    */
    public function setCollate(?bool $value): void {
        $this->getBackingStore()->set('collate', $value);
    }

    /**
     * Sets the colorMode property value. The color mode the printer should use to print the job. Valid values are described in the table below. Read-only.
     * @param PrintColorMode|null $value Value to set for the colorMode property.
    */
    public function setColorMode(?PrintColorMode $value): void {
        $this->getBackingStore()->set('colorMode', $value);
    }

    /**
     * Sets the copies property value. The number of copies that should be printed. Read-only.
     * @param int|null $value Value to set for the copies property.
    */
    public function setCopies(?int $value): void {
        $this->getBackingStore()->set('copies', $value);
    }

    /**
     * Sets the dpi property value. The resolution to use when printing the job, expressed in dots per inch (DPI). Read-only.
     * @param int|null $value Value to set for the dpi property.
    */
    public function setDpi(?int $value): void {
        $this->getBackingStore()->set('dpi', $value);
    }

    /**
     * Sets the duplexMode property value. The duplex mode the printer should use when printing the job. Valid values are described in the table below. Read-only.
     * @param PrintDuplexMode|null $value Value to set for the duplexMode property.
    */
    public function setDuplexMode(?PrintDuplexMode $value): void {
        $this->getBackingStore()->set('duplexMode', $value);
    }

    /**
     * Sets the feedOrientation property value. The orientation to use when feeding media into the printer. Valid values are described in the following table. Read-only.
     * @param PrinterFeedOrientation|null $value Value to set for the feedOrientation property.
    */
    public function setFeedOrientation(?PrinterFeedOrientation $value): void {
        $this->getBackingStore()->set('feedOrientation', $value);
    }

    /**
     * Sets the finishings property value. Finishing processes to use when printing.
     * @param array<PrintFinishing>|null $value Value to set for the finishings property.
    */
    public function setFinishings(?array $value): void {
        $this->getBackingStore()->set('finishings', $value);
    }

    /**
     * Sets the fitPdfToPage property value. The fitPdfToPage property
     * @param bool|null $value Value to set for the fitPdfToPage property.
    */
    public function setFitPdfToPage(?bool $value): void {
        $this->getBackingStore()->set('fitPdfToPage', $value);
    }

    /**
     * Sets the inputBin property value. The input bin (tray) to use when printing. See the printer's capabilities for a list of supported input bins.
     * @param string|null $value Value to set for the inputBin property.
    */
    public function setInputBin(?string $value): void {
        $this->getBackingStore()->set('inputBin', $value);
    }

    /**
     * Sets the margin property value. The margin settings to use when printing.
     * @param PrintMargin|null $value Value to set for the margin property.
    */
    public function setMargin(?PrintMargin $value): void {
        $this->getBackingStore()->set('margin', $value);
    }

    /**
     * Sets the mediaSize property value. The media size to use when printing. Supports standard size names for ISO and ANSI media sizes.
     * @param string|null $value Value to set for the mediaSize property.
    */
    public function setMediaSize(?string $value): void {
        $this->getBackingStore()->set('mediaSize', $value);
    }

    /**
     * Sets the mediaType property value. The mediaType property
     * @param string|null $value Value to set for the mediaType property.
    */
    public function setMediaType(?string $value): void {
        $this->getBackingStore()->set('mediaType', $value);
    }

    /**
     * Sets the multipageLayout property value. The multipageLayout property
     * @param PrintMultipageLayout|null $value Value to set for the multipageLayout property.
    */
    public function setMultipageLayout(?PrintMultipageLayout $value): void {
        $this->getBackingStore()->set('multipageLayout', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the orientation property value. The orientation property
     * @param PrintOrientation|null $value Value to set for the orientation property.
    */
    public function setOrientation(?PrintOrientation $value): void {
        $this->getBackingStore()->set('orientation', $value);
    }

    /**
     * Sets the outputBin property value. The outputBin property
     * @param string|null $value Value to set for the outputBin property.
    */
    public function setOutputBin(?string $value): void {
        $this->getBackingStore()->set('outputBin', $value);
    }

    /**
     * Sets the pageRanges property value. The pageRanges property
     * @param array<IntegerRange>|null $value Value to set for the pageRanges property.
    */
    public function setPageRanges(?array $value): void {
        $this->getBackingStore()->set('pageRanges', $value);
    }

    /**
     * Sets the pagesPerSheet property value. The pagesPerSheet property
     * @param int|null $value Value to set for the pagesPerSheet property.
    */
    public function setPagesPerSheet(?int $value): void {
        $this->getBackingStore()->set('pagesPerSheet', $value);
    }

    /**
     * Sets the quality property value. The quality property
     * @param PrintQuality|null $value Value to set for the quality property.
    */
    public function setQuality(?PrintQuality $value): void {
        $this->getBackingStore()->set('quality', $value);
    }

    /**
     * Sets the scaling property value. The scaling property
     * @param PrintScaling|null $value Value to set for the scaling property.
    */
    public function setScaling(?PrintScaling $value): void {
        $this->getBackingStore()->set('scaling', $value);
    }

}
