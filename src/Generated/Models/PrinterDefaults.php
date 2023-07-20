<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PrinterDefaults implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new printerDefaults and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterDefaults
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrinterDefaults {
        return new PrinterDefaults();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the colorMode property value. The default color mode to use when printing the document. Valid values are described in the following table.
     * @return PrintColorMode|null
    */
    public function getColorMode(): ?PrintColorMode {
        $val = $this->getBackingStore()->get('colorMode');
        if (is_null($val) || $val instanceof PrintColorMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'colorMode'");
    }

    /**
     * Gets the contentType property value. The default content (MIME) type to use when processing documents.
     * @return string|null
    */
    public function getContentType(): ?string {
        $val = $this->getBackingStore()->get('contentType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentType'");
    }

    /**
     * Gets the copiesPerJob property value. The default number of copies printed per job.
     * @return int|null
    */
    public function getCopiesPerJob(): ?int {
        $val = $this->getBackingStore()->get('copiesPerJob');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'copiesPerJob'");
    }

    /**
     * Gets the dpi property value. The default resolution in DPI to use when printing the job.
     * @return int|null
    */
    public function getDpi(): ?int {
        $val = $this->getBackingStore()->get('dpi');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dpi'");
    }

    /**
     * Gets the duplexMode property value. The default duplex (double-sided) configuration to use when printing a document. Valid values are described in the following table.
     * @return PrintDuplexMode|null
    */
    public function getDuplexMode(): ?PrintDuplexMode {
        $val = $this->getBackingStore()->get('duplexMode');
        if (is_null($val) || $val instanceof PrintDuplexMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duplexMode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'colorMode' => fn(ParseNode $n) => $o->setColorMode($n->getEnumValue(PrintColorMode::class)),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'copiesPerJob' => fn(ParseNode $n) => $o->setCopiesPerJob($n->getIntegerValue()),
            'dpi' => fn(ParseNode $n) => $o->setDpi($n->getIntegerValue()),
            'duplexMode' => fn(ParseNode $n) => $o->setDuplexMode($n->getEnumValue(PrintDuplexMode::class)),
            'finishings' => fn(ParseNode $n) => $o->setFinishings($n->getCollectionOfEnumValues(PrintFinishing::class)),
            'fitPdfToPage' => fn(ParseNode $n) => $o->setFitPdfToPage($n->getBooleanValue()),
            'inputBin' => fn(ParseNode $n) => $o->setInputBin($n->getStringValue()),
            'mediaColor' => fn(ParseNode $n) => $o->setMediaColor($n->getStringValue()),
            'mediaSize' => fn(ParseNode $n) => $o->setMediaSize($n->getStringValue()),
            'mediaType' => fn(ParseNode $n) => $o->setMediaType($n->getStringValue()),
            'multipageLayout' => fn(ParseNode $n) => $o->setMultipageLayout($n->getEnumValue(PrintMultipageLayout::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'orientation' => fn(ParseNode $n) => $o->setOrientation($n->getEnumValue(PrintOrientation::class)),
            'outputBin' => fn(ParseNode $n) => $o->setOutputBin($n->getStringValue()),
            'pagesPerSheet' => fn(ParseNode $n) => $o->setPagesPerSheet($n->getIntegerValue()),
            'quality' => fn(ParseNode $n) => $o->setQuality($n->getEnumValue(PrintQuality::class)),
            'scaling' => fn(ParseNode $n) => $o->setScaling($n->getEnumValue(PrintScaling::class)),
        ];
    }

    /**
     * Gets the finishings property value. The default set of finishings to apply to print jobs. Valid values are described in the following table.
     * @return array<PrintFinishing>|null
    */
    public function getFinishings(): ?array {
        $val = $this->getBackingStore()->get('finishings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintFinishing::class);
            /** @var array<PrintFinishing>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'finishings'");
    }

    /**
     * Gets the fitPdfToPage property value. The default fitPdfToPage setting. True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions.
     * @return bool|null
    */
    public function getFitPdfToPage(): ?bool {
        $val = $this->getBackingStore()->get('fitPdfToPage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fitPdfToPage'");
    }

    /**
     * Gets the inputBin property value. The inputBin property
     * @return string|null
    */
    public function getInputBin(): ?string {
        $val = $this->getBackingStore()->get('inputBin');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inputBin'");
    }

    /**
     * Gets the mediaColor property value. The default media (such as paper) color to print the document on.
     * @return string|null
    */
    public function getMediaColor(): ?string {
        $val = $this->getBackingStore()->get('mediaColor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaColor'");
    }

    /**
     * Gets the mediaSize property value. The default media size to use. Supports standard size names for ISO and ANSI media sizes. Valid values are listed in the printerCapabilities topic.
     * @return string|null
    */
    public function getMediaSize(): ?string {
        $val = $this->getBackingStore()->get('mediaSize');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaSize'");
    }

    /**
     * Gets the mediaType property value. The default media (such as paper) type to print the document on.
     * @return string|null
    */
    public function getMediaType(): ?string {
        $val = $this->getBackingStore()->get('mediaType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaType'");
    }

    /**
     * Gets the multipageLayout property value. The default direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table.
     * @return PrintMultipageLayout|null
    */
    public function getMultipageLayout(): ?PrintMultipageLayout {
        $val = $this->getBackingStore()->get('multipageLayout');
        if (is_null($val) || $val instanceof PrintMultipageLayout) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multipageLayout'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the orientation property value. The default orientation to use when printing the document. Valid values are described in the following table.
     * @return PrintOrientation|null
    */
    public function getOrientation(): ?PrintOrientation {
        $val = $this->getBackingStore()->get('orientation');
        if (is_null($val) || $val instanceof PrintOrientation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'orientation'");
    }

    /**
     * Gets the outputBin property value. The default output bin to place completed prints into. See the printer's capabilities for a list of supported output bins.
     * @return string|null
    */
    public function getOutputBin(): ?string {
        $val = $this->getBackingStore()->get('outputBin');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outputBin'");
    }

    /**
     * Gets the pagesPerSheet property value. The default number of document pages to print on each sheet.
     * @return int|null
    */
    public function getPagesPerSheet(): ?int {
        $val = $this->getBackingStore()->get('pagesPerSheet');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pagesPerSheet'");
    }

    /**
     * Gets the quality property value. The default quality to use when printing the document. Valid values are described in the following table.
     * @return PrintQuality|null
    */
    public function getQuality(): ?PrintQuality {
        $val = $this->getBackingStore()->get('quality');
        if (is_null($val) || $val instanceof PrintQuality) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'quality'");
    }

    /**
     * Gets the scaling property value. Specifies how the printer scales the document data to fit the requested media. Valid values are described in the following table.
     * @return PrintScaling|null
    */
    public function getScaling(): ?PrintScaling {
        $val = $this->getBackingStore()->get('scaling');
        if (is_null($val) || $val instanceof PrintScaling) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scaling'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('colorMode', $this->getColorMode());
        $writer->writeStringValue('contentType', $this->getContentType());
        $writer->writeIntegerValue('copiesPerJob', $this->getCopiesPerJob());
        $writer->writeIntegerValue('dpi', $this->getDpi());
        $writer->writeEnumValue('duplexMode', $this->getDuplexMode());
        $writer->writeCollectionOfEnumValues('finishings', $this->getFinishings());
        $writer->writeBooleanValue('fitPdfToPage', $this->getFitPdfToPage());
        $writer->writeStringValue('inputBin', $this->getInputBin());
        $writer->writeStringValue('mediaColor', $this->getMediaColor());
        $writer->writeStringValue('mediaSize', $this->getMediaSize());
        $writer->writeStringValue('mediaType', $this->getMediaType());
        $writer->writeEnumValue('multipageLayout', $this->getMultipageLayout());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('orientation', $this->getOrientation());
        $writer->writeStringValue('outputBin', $this->getOutputBin());
        $writer->writeIntegerValue('pagesPerSheet', $this->getPagesPerSheet());
        $writer->writeEnumValue('quality', $this->getQuality());
        $writer->writeEnumValue('scaling', $this->getScaling());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the colorMode property value. The default color mode to use when printing the document. Valid values are described in the following table.
     * @param PrintColorMode|null $value Value to set for the colorMode property.
    */
    public function setColorMode(?PrintColorMode $value): void {
        $this->getBackingStore()->set('colorMode', $value);
    }

    /**
     * Sets the contentType property value. The default content (MIME) type to use when processing documents.
     * @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value): void {
        $this->getBackingStore()->set('contentType', $value);
    }

    /**
     * Sets the copiesPerJob property value. The default number of copies printed per job.
     * @param int|null $value Value to set for the copiesPerJob property.
    */
    public function setCopiesPerJob(?int $value): void {
        $this->getBackingStore()->set('copiesPerJob', $value);
    }

    /**
     * Sets the dpi property value. The default resolution in DPI to use when printing the job.
     * @param int|null $value Value to set for the dpi property.
    */
    public function setDpi(?int $value): void {
        $this->getBackingStore()->set('dpi', $value);
    }

    /**
     * Sets the duplexMode property value. The default duplex (double-sided) configuration to use when printing a document. Valid values are described in the following table.
     * @param PrintDuplexMode|null $value Value to set for the duplexMode property.
    */
    public function setDuplexMode(?PrintDuplexMode $value): void {
        $this->getBackingStore()->set('duplexMode', $value);
    }

    /**
     * Sets the finishings property value. The default set of finishings to apply to print jobs. Valid values are described in the following table.
     * @param array<PrintFinishing>|null $value Value to set for the finishings property.
    */
    public function setFinishings(?array $value): void {
        $this->getBackingStore()->set('finishings', $value);
    }

    /**
     * Sets the fitPdfToPage property value. The default fitPdfToPage setting. True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions.
     * @param bool|null $value Value to set for the fitPdfToPage property.
    */
    public function setFitPdfToPage(?bool $value): void {
        $this->getBackingStore()->set('fitPdfToPage', $value);
    }

    /**
     * Sets the inputBin property value. The inputBin property
     * @param string|null $value Value to set for the inputBin property.
    */
    public function setInputBin(?string $value): void {
        $this->getBackingStore()->set('inputBin', $value);
    }

    /**
     * Sets the mediaColor property value. The default media (such as paper) color to print the document on.
     * @param string|null $value Value to set for the mediaColor property.
    */
    public function setMediaColor(?string $value): void {
        $this->getBackingStore()->set('mediaColor', $value);
    }

    /**
     * Sets the mediaSize property value. The default media size to use. Supports standard size names for ISO and ANSI media sizes. Valid values are listed in the printerCapabilities topic.
     * @param string|null $value Value to set for the mediaSize property.
    */
    public function setMediaSize(?string $value): void {
        $this->getBackingStore()->set('mediaSize', $value);
    }

    /**
     * Sets the mediaType property value. The default media (such as paper) type to print the document on.
     * @param string|null $value Value to set for the mediaType property.
    */
    public function setMediaType(?string $value): void {
        $this->getBackingStore()->set('mediaType', $value);
    }

    /**
     * Sets the multipageLayout property value. The default direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table.
     * @param PrintMultipageLayout|null $value Value to set for the multipageLayout property.
    */
    public function setMultipageLayout(?PrintMultipageLayout $value): void {
        $this->getBackingStore()->set('multipageLayout', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the orientation property value. The default orientation to use when printing the document. Valid values are described in the following table.
     * @param PrintOrientation|null $value Value to set for the orientation property.
    */
    public function setOrientation(?PrintOrientation $value): void {
        $this->getBackingStore()->set('orientation', $value);
    }

    /**
     * Sets the outputBin property value. The default output bin to place completed prints into. See the printer's capabilities for a list of supported output bins.
     * @param string|null $value Value to set for the outputBin property.
    */
    public function setOutputBin(?string $value): void {
        $this->getBackingStore()->set('outputBin', $value);
    }

    /**
     * Sets the pagesPerSheet property value. The default number of document pages to print on each sheet.
     * @param int|null $value Value to set for the pagesPerSheet property.
    */
    public function setPagesPerSheet(?int $value): void {
        $this->getBackingStore()->set('pagesPerSheet', $value);
    }

    /**
     * Sets the quality property value. The default quality to use when printing the document. Valid values are described in the following table.
     * @param PrintQuality|null $value Value to set for the quality property.
    */
    public function setQuality(?PrintQuality $value): void {
        $this->getBackingStore()->set('quality', $value);
    }

    /**
     * Sets the scaling property value. Specifies how the printer scales the document data to fit the requested media. Valid values are described in the following table.
     * @param PrintScaling|null $value Value to set for the scaling property.
    */
    public function setScaling(?PrintScaling $value): void {
        $this->getBackingStore()->set('scaling', $value);
    }

}
