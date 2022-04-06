<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintJobConfiguration implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $collate Whether the printer should collate pages wehen printing multiple copies of a multi-page document. */
    private ?bool $collate = null;
    
    /** @var PrintColorMode|null $colorMode The color mode the printer should use to print the job. Valid values are described in the table below. Read-only. */
    private ?PrintColorMode $colorMode = null;
    
    /** @var int|null $copies The number of copies that should be printed. Read-only. */
    private ?int $copies = null;
    
    /** @var int|null $dpi The resolution to use when printing the job, expressed in dots per inch (DPI). Read-only. */
    private ?int $dpi = null;
    
    /** @var PrintDuplexMode|null $duplexMode The duplex mode the printer should use when printing the job. Valid values are described in the table below. Read-only. */
    private ?PrintDuplexMode $duplexMode = null;
    
    /** @var PrinterFeedOrientation|null $feedOrientation The orientation to use when feeding media into the printer. Valid values are described in the following table. Read-only. */
    private ?PrinterFeedOrientation $feedOrientation = null;
    
    /** @var array<PrintFinishing>|null $finishings Finishing processes to use when printing. */
    private ?array $finishings = null;
    
    /** @var bool|null $fitPdfToPage The fitPdfToPage property */
    private ?bool $fitPdfToPage = null;
    
    /** @var string|null $inputBin The input bin (tray) to use when printing. See the printer's capabilities for a list of supported input bins. */
    private ?string $inputBin = null;
    
    /** @var PrintMargin|null $margin The margin settings to use when printing. */
    private ?PrintMargin $margin = null;
    
    /** @var string|null $mediaSize The media size to use when printing. Supports standard size names for ISO and ANSI media sizes. Valid values listed in the printerCapabilities topic. */
    private ?string $mediaSize = null;
    
    /** @var string|null $mediaType The default media (such as paper) type to print the document on. */
    private ?string $mediaType = null;
    
    /** @var PrintMultipageLayout|null $multipageLayout The direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table. */
    private ?PrintMultipageLayout $multipageLayout = null;
    
    /** @var PrintOrientation|null $orientation The orientation setting the printer should use when printing the job. Valid values are described in the following table. */
    private ?PrintOrientation $orientation = null;
    
    /** @var string|null $outputBin The output bin to place completed prints into. See the printer's capabilities for a list of supported output bins. */
    private ?string $outputBin = null;
    
    /** @var array<IntegerRange>|null $pageRanges The page ranges to print. Read-only. */
    private ?array $pageRanges = null;
    
    /** @var int|null $pagesPerSheet The number of document pages to print on each sheet. */
    private ?int $pagesPerSheet = null;
    
    /** @var PrintQuality|null $quality The print quality to use when printing the job. Valid values are described in the table below. Read-only. */
    private ?PrintQuality $quality = null;
    
    /** @var PrintScaling|null $scaling Specifies how the printer should scale the document data to fit the requested media. Valid values are described in the following table. */
    private ?PrintScaling $scaling = null;
    
    /**
     * Instantiates a new printJobConfiguration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintJobConfiguration
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PrintJobConfiguration {
        return new PrintJobConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the collate property value. Whether the printer should collate pages wehen printing multiple copies of a multi-page document.
     * @return bool|null
    */
    public function getCollate(): ?bool {
        return $this->collate;
    }

    /**
     * Gets the colorMode property value. The color mode the printer should use to print the job. Valid values are described in the table below. Read-only.
     * @return PrintColorMode|null
    */
    public function getColorMode(): ?PrintColorMode {
        return $this->colorMode;
    }

    /**
     * Gets the copies property value. The number of copies that should be printed. Read-only.
     * @return int|null
    */
    public function getCopies(): ?int {
        return $this->copies;
    }

    /**
     * Gets the dpi property value. The resolution to use when printing the job, expressed in dots per inch (DPI). Read-only.
     * @return int|null
    */
    public function getDpi(): ?int {
        return $this->dpi;
    }

    /**
     * Gets the duplexMode property value. The duplex mode the printer should use when printing the job. Valid values are described in the table below. Read-only.
     * @return PrintDuplexMode|null
    */
    public function getDuplexMode(): ?PrintDuplexMode {
        return $this->duplexMode;
    }

    /**
     * Gets the feedOrientation property value. The orientation to use when feeding media into the printer. Valid values are described in the following table. Read-only.
     * @return PrinterFeedOrientation|null
    */
    public function getFeedOrientation(): ?PrinterFeedOrientation {
        return $this->feedOrientation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'collate' => function (self $o, ParseNode $n) { $o->setCollate($n->getBooleanValue()); },
            'colorMode' => function (self $o, ParseNode $n) { $o->setColorMode($n->getEnumValue(PrintColorMode::class)); },
            'copies' => function (self $o, ParseNode $n) { $o->setCopies($n->getIntegerValue()); },
            'dpi' => function (self $o, ParseNode $n) { $o->setDpi($n->getIntegerValue()); },
            'duplexMode' => function (self $o, ParseNode $n) { $o->setDuplexMode($n->getEnumValue(PrintDuplexMode::class)); },
            'feedOrientation' => function (self $o, ParseNode $n) { $o->setFeedOrientation($n->getEnumValue(PrinterFeedOrientation::class)); },
            'finishings' => function (self $o, ParseNode $n) { $o->setFinishings($n->getCollectionOfEnumValues(PrintFinishing::class)); },
            'fitPdfToPage' => function (self $o, ParseNode $n) { $o->setFitPdfToPage($n->getBooleanValue()); },
            'inputBin' => function (self $o, ParseNode $n) { $o->setInputBin($n->getStringValue()); },
            'margin' => function (self $o, ParseNode $n) { $o->setMargin($n->getObjectValue(PrintMargin::class)); },
            'mediaSize' => function (self $o, ParseNode $n) { $o->setMediaSize($n->getStringValue()); },
            'mediaType' => function (self $o, ParseNode $n) { $o->setMediaType($n->getStringValue()); },
            'multipageLayout' => function (self $o, ParseNode $n) { $o->setMultipageLayout($n->getEnumValue(PrintMultipageLayout::class)); },
            'orientation' => function (self $o, ParseNode $n) { $o->setOrientation($n->getEnumValue(PrintOrientation::class)); },
            'outputBin' => function (self $o, ParseNode $n) { $o->setOutputBin($n->getStringValue()); },
            'pageRanges' => function (self $o, ParseNode $n) { $o->setPageRanges($n->getCollectionOfObjectValues(IntegerRange::class)); },
            'pagesPerSheet' => function (self $o, ParseNode $n) { $o->setPagesPerSheet($n->getIntegerValue()); },
            'quality' => function (self $o, ParseNode $n) { $o->setQuality($n->getEnumValue(PrintQuality::class)); },
            'scaling' => function (self $o, ParseNode $n) { $o->setScaling($n->getEnumValue(PrintScaling::class)); },
        ];
    }

    /**
     * Gets the finishings property value. Finishing processes to use when printing.
     * @return array<PrintFinishing>|null
    */
    public function getFinishings(): ?array {
        return $this->finishings;
    }

    /**
     * Gets the fitPdfToPage property value. The fitPdfToPage property
     * @return bool|null
    */
    public function getFitPdfToPage(): ?bool {
        return $this->fitPdfToPage;
    }

    /**
     * Gets the inputBin property value. The input bin (tray) to use when printing. See the printer's capabilities for a list of supported input bins.
     * @return string|null
    */
    public function getInputBin(): ?string {
        return $this->inputBin;
    }

    /**
     * Gets the margin property value. The margin settings to use when printing.
     * @return PrintMargin|null
    */
    public function getMargin(): ?PrintMargin {
        return $this->margin;
    }

    /**
     * Gets the mediaSize property value. The media size to use when printing. Supports standard size names for ISO and ANSI media sizes. Valid values listed in the printerCapabilities topic.
     * @return string|null
    */
    public function getMediaSize(): ?string {
        return $this->mediaSize;
    }

    /**
     * Gets the mediaType property value. The default media (such as paper) type to print the document on.
     * @return string|null
    */
    public function getMediaType(): ?string {
        return $this->mediaType;
    }

    /**
     * Gets the multipageLayout property value. The direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table.
     * @return PrintMultipageLayout|null
    */
    public function getMultipageLayout(): ?PrintMultipageLayout {
        return $this->multipageLayout;
    }

    /**
     * Gets the orientation property value. The orientation setting the printer should use when printing the job. Valid values are described in the following table.
     * @return PrintOrientation|null
    */
    public function getOrientation(): ?PrintOrientation {
        return $this->orientation;
    }

    /**
     * Gets the outputBin property value. The output bin to place completed prints into. See the printer's capabilities for a list of supported output bins.
     * @return string|null
    */
    public function getOutputBin(): ?string {
        return $this->outputBin;
    }

    /**
     * Gets the pageRanges property value. The page ranges to print. Read-only.
     * @return array<IntegerRange>|null
    */
    public function getPageRanges(): ?array {
        return $this->pageRanges;
    }

    /**
     * Gets the pagesPerSheet property value. The number of document pages to print on each sheet.
     * @return int|null
    */
    public function getPagesPerSheet(): ?int {
        return $this->pagesPerSheet;
    }

    /**
     * Gets the quality property value. The print quality to use when printing the job. Valid values are described in the table below. Read-only.
     * @return PrintQuality|null
    */
    public function getQuality(): ?PrintQuality {
        return $this->quality;
    }

    /**
     * Gets the scaling property value. Specifies how the printer should scale the document data to fit the requested media. Valid values are described in the following table.
     * @return PrintScaling|null
    */
    public function getScaling(): ?PrintScaling {
        return $this->scaling;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('collate', $this->collate);
        $writer->writeEnumValue('colorMode', $this->colorMode);
        $writer->writeIntegerValue('copies', $this->copies);
        $writer->writeIntegerValue('dpi', $this->dpi);
        $writer->writeEnumValue('duplexMode', $this->duplexMode);
        $writer->writeEnumValue('feedOrientation', $this->feedOrientation);
        $writer->writeCollectionOfEnumValues('finishings', $this->finishings);
        $writer->writeBooleanValue('fitPdfToPage', $this->fitPdfToPage);
        $writer->writeStringValue('inputBin', $this->inputBin);
        $writer->writeObjectValue('margin', $this->margin);
        $writer->writeStringValue('mediaSize', $this->mediaSize);
        $writer->writeStringValue('mediaType', $this->mediaType);
        $writer->writeEnumValue('multipageLayout', $this->multipageLayout);
        $writer->writeEnumValue('orientation', $this->orientation);
        $writer->writeStringValue('outputBin', $this->outputBin);
        $writer->writeCollectionOfObjectValues('pageRanges', $this->pageRanges);
        $writer->writeIntegerValue('pagesPerSheet', $this->pagesPerSheet);
        $writer->writeEnumValue('quality', $this->quality);
        $writer->writeEnumValue('scaling', $this->scaling);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the collate property value. Whether the printer should collate pages wehen printing multiple copies of a multi-page document.
     *  @param bool|null $value Value to set for the collate property.
    */
    public function setCollate(?bool $value ): void {
        $this->collate = $value;
    }

    /**
     * Sets the colorMode property value. The color mode the printer should use to print the job. Valid values are described in the table below. Read-only.
     *  @param PrintColorMode|null $value Value to set for the colorMode property.
    */
    public function setColorMode(?PrintColorMode $value ): void {
        $this->colorMode = $value;
    }

    /**
     * Sets the copies property value. The number of copies that should be printed. Read-only.
     *  @param int|null $value Value to set for the copies property.
    */
    public function setCopies(?int $value ): void {
        $this->copies = $value;
    }

    /**
     * Sets the dpi property value. The resolution to use when printing the job, expressed in dots per inch (DPI). Read-only.
     *  @param int|null $value Value to set for the dpi property.
    */
    public function setDpi(?int $value ): void {
        $this->dpi = $value;
    }

    /**
     * Sets the duplexMode property value. The duplex mode the printer should use when printing the job. Valid values are described in the table below. Read-only.
     *  @param PrintDuplexMode|null $value Value to set for the duplexMode property.
    */
    public function setDuplexMode(?PrintDuplexMode $value ): void {
        $this->duplexMode = $value;
    }

    /**
     * Sets the feedOrientation property value. The orientation to use when feeding media into the printer. Valid values are described in the following table. Read-only.
     *  @param PrinterFeedOrientation|null $value Value to set for the feedOrientation property.
    */
    public function setFeedOrientation(?PrinterFeedOrientation $value ): void {
        $this->feedOrientation = $value;
    }

    /**
     * Sets the finishings property value. Finishing processes to use when printing.
     *  @param array<PrintFinishing>|null $value Value to set for the finishings property.
    */
    public function setFinishings(?array $value ): void {
        $this->finishings = $value;
    }

    /**
     * Sets the fitPdfToPage property value. The fitPdfToPage property
     *  @param bool|null $value Value to set for the fitPdfToPage property.
    */
    public function setFitPdfToPage(?bool $value ): void {
        $this->fitPdfToPage = $value;
    }

    /**
     * Sets the inputBin property value. The input bin (tray) to use when printing. See the printer's capabilities for a list of supported input bins.
     *  @param string|null $value Value to set for the inputBin property.
    */
    public function setInputBin(?string $value ): void {
        $this->inputBin = $value;
    }

    /**
     * Sets the margin property value. The margin settings to use when printing.
     *  @param PrintMargin|null $value Value to set for the margin property.
    */
    public function setMargin(?PrintMargin $value ): void {
        $this->margin = $value;
    }

    /**
     * Sets the mediaSize property value. The media size to use when printing. Supports standard size names for ISO and ANSI media sizes. Valid values listed in the printerCapabilities topic.
     *  @param string|null $value Value to set for the mediaSize property.
    */
    public function setMediaSize(?string $value ): void {
        $this->mediaSize = $value;
    }

    /**
     * Sets the mediaType property value. The default media (such as paper) type to print the document on.
     *  @param string|null $value Value to set for the mediaType property.
    */
    public function setMediaType(?string $value ): void {
        $this->mediaType = $value;
    }

    /**
     * Sets the multipageLayout property value. The direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table.
     *  @param PrintMultipageLayout|null $value Value to set for the multipageLayout property.
    */
    public function setMultipageLayout(?PrintMultipageLayout $value ): void {
        $this->multipageLayout = $value;
    }

    /**
     * Sets the orientation property value. The orientation setting the printer should use when printing the job. Valid values are described in the following table.
     *  @param PrintOrientation|null $value Value to set for the orientation property.
    */
    public function setOrientation(?PrintOrientation $value ): void {
        $this->orientation = $value;
    }

    /**
     * Sets the outputBin property value. The output bin to place completed prints into. See the printer's capabilities for a list of supported output bins.
     *  @param string|null $value Value to set for the outputBin property.
    */
    public function setOutputBin(?string $value ): void {
        $this->outputBin = $value;
    }

    /**
     * Sets the pageRanges property value. The page ranges to print. Read-only.
     *  @param array<IntegerRange>|null $value Value to set for the pageRanges property.
    */
    public function setPageRanges(?array $value ): void {
        $this->pageRanges = $value;
    }

    /**
     * Sets the pagesPerSheet property value. The number of document pages to print on each sheet.
     *  @param int|null $value Value to set for the pagesPerSheet property.
    */
    public function setPagesPerSheet(?int $value ): void {
        $this->pagesPerSheet = $value;
    }

    /**
     * Sets the quality property value. The print quality to use when printing the job. Valid values are described in the table below. Read-only.
     *  @param PrintQuality|null $value Value to set for the quality property.
    */
    public function setQuality(?PrintQuality $value ): void {
        $this->quality = $value;
    }

    /**
     * Sets the scaling property value. Specifies how the printer should scale the document data to fit the requested media. Valid values are described in the following table.
     *  @param PrintScaling|null $value Value to set for the scaling property.
    */
    public function setScaling(?PrintScaling $value ): void {
        $this->scaling = $value;
    }

}
