<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterDefaults implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var PrintColorMode|null $colorMode The default color mode to use when printing the document. Valid values are described in the following table. */
    private ?PrintColorMode $colorMode = null;
    
    /** @var string|null $contentType The default content (MIME) type to use when processing documents. */
    private ?string $contentType = null;
    
    /** @var int|null $copiesPerJob The default number of copies printed per job. */
    private ?int $copiesPerJob = null;
    
    /** @var int|null $dpi The default resolution in DPI to use when printing the job. */
    private ?int $dpi = null;
    
    /** @var PrintDuplexMode|null $duplexMode The default duplex (double-sided) configuration to use when printing a document. Valid values are described in the following table. */
    private ?PrintDuplexMode $duplexMode = null;
    
    /** @var array<PrintFinishing>|null $finishings The default set of finishings to apply to print jobs. Valid values are described in the following table. */
    private ?array $finishings = null;
    
    /** @var bool|null $fitPdfToPage The default fitPdfToPage setting. True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions. */
    private ?bool $fitPdfToPage = null;
    
    /** @var string|null $inputBin The default input bin that serves as the paper source. */
    private ?string $inputBin = null;
    
    /** @var string|null $mediaColor The default media (such as paper) color to print the document on. */
    private ?string $mediaColor = null;
    
    /** @var string|null $mediaSize The default media size to use. Supports standard size names for ISO and ANSI media sizes. Valid values are listed in the printerCapabilities topic. */
    private ?string $mediaSize = null;
    
    /** @var string|null $mediaType The default media (such as paper) type to print the document on. */
    private ?string $mediaType = null;
    
    /** @var PrintMultipageLayout|null $multipageLayout The default direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table. */
    private ?PrintMultipageLayout $multipageLayout = null;
    
    /** @var PrintOrientation|null $orientation The default orientation to use when printing the document. Valid values are described in the following table. */
    private ?PrintOrientation $orientation = null;
    
    /** @var string|null $outputBin The default output bin to place completed prints into. See the printer's capabilities for a list of supported output bins. */
    private ?string $outputBin = null;
    
    /** @var int|null $pagesPerSheet The default number of document pages to print on each sheet. */
    private ?int $pagesPerSheet = null;
    
    /** @var PrintQuality|null $quality The default quality to use when printing the document. Valid values are described in the following table. */
    private ?PrintQuality $quality = null;
    
    /** @var PrintScaling|null $scaling Specifies how the printer scales the document data to fit the requested media. Valid values are described in the following table. */
    private ?PrintScaling $scaling = null;
    
    /**
     * Instantiates a new printerDefaults and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterDefaults
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PrinterDefaults {
        return new PrinterDefaults();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the colorMode property value. The default color mode to use when printing the document. Valid values are described in the following table.
     * @return PrintColorMode|null
    */
    public function getColorMode(): ?PrintColorMode {
        return $this->colorMode;
    }

    /**
     * Gets the contentType property value. The default content (MIME) type to use when processing documents.
     * @return string|null
    */
    public function getContentType(): ?string {
        return $this->contentType;
    }

    /**
     * Gets the copiesPerJob property value. The default number of copies printed per job.
     * @return int|null
    */
    public function getCopiesPerJob(): ?int {
        return $this->copiesPerJob;
    }

    /**
     * Gets the dpi property value. The default resolution in DPI to use when printing the job.
     * @return int|null
    */
    public function getDpi(): ?int {
        return $this->dpi;
    }

    /**
     * Gets the duplexMode property value. The default duplex (double-sided) configuration to use when printing a document. Valid values are described in the following table.
     * @return PrintDuplexMode|null
    */
    public function getDuplexMode(): ?PrintDuplexMode {
        return $this->duplexMode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'colorMode' => function (self $o, ParseNode $n) { $o->setColorMode($n->getEnumValue(PrintColorMode::class)); },
            'contentType' => function (self $o, ParseNode $n) { $o->setContentType($n->getStringValue()); },
            'copiesPerJob' => function (self $o, ParseNode $n) { $o->setCopiesPerJob($n->getIntegerValue()); },
            'dpi' => function (self $o, ParseNode $n) { $o->setDpi($n->getIntegerValue()); },
            'duplexMode' => function (self $o, ParseNode $n) { $o->setDuplexMode($n->getEnumValue(PrintDuplexMode::class)); },
            'finishings' => function (self $o, ParseNode $n) { $o->setFinishings($n->getCollectionOfEnumValues(PrintFinishing::class)); },
            'fitPdfToPage' => function (self $o, ParseNode $n) { $o->setFitPdfToPage($n->getBooleanValue()); },
            'inputBin' => function (self $o, ParseNode $n) { $o->setInputBin($n->getStringValue()); },
            'mediaColor' => function (self $o, ParseNode $n) { $o->setMediaColor($n->getStringValue()); },
            'mediaSize' => function (self $o, ParseNode $n) { $o->setMediaSize($n->getStringValue()); },
            'mediaType' => function (self $o, ParseNode $n) { $o->setMediaType($n->getStringValue()); },
            'multipageLayout' => function (self $o, ParseNode $n) { $o->setMultipageLayout($n->getEnumValue(PrintMultipageLayout::class)); },
            'orientation' => function (self $o, ParseNode $n) { $o->setOrientation($n->getEnumValue(PrintOrientation::class)); },
            'outputBin' => function (self $o, ParseNode $n) { $o->setOutputBin($n->getStringValue()); },
            'pagesPerSheet' => function (self $o, ParseNode $n) { $o->setPagesPerSheet($n->getIntegerValue()); },
            'quality' => function (self $o, ParseNode $n) { $o->setQuality($n->getEnumValue(PrintQuality::class)); },
            'scaling' => function (self $o, ParseNode $n) { $o->setScaling($n->getEnumValue(PrintScaling::class)); },
        ];
    }

    /**
     * Gets the finishings property value. The default set of finishings to apply to print jobs. Valid values are described in the following table.
     * @return array<PrintFinishing>|null
    */
    public function getFinishings(): ?array {
        return $this->finishings;
    }

    /**
     * Gets the fitPdfToPage property value. The default fitPdfToPage setting. True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions.
     * @return bool|null
    */
    public function getFitPdfToPage(): ?bool {
        return $this->fitPdfToPage;
    }

    /**
     * Gets the inputBin property value. The default input bin that serves as the paper source.
     * @return string|null
    */
    public function getInputBin(): ?string {
        return $this->inputBin;
    }

    /**
     * Gets the mediaColor property value. The default media (such as paper) color to print the document on.
     * @return string|null
    */
    public function getMediaColor(): ?string {
        return $this->mediaColor;
    }

    /**
     * Gets the mediaSize property value. The default media size to use. Supports standard size names for ISO and ANSI media sizes. Valid values are listed in the printerCapabilities topic.
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
     * Gets the multipageLayout property value. The default direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table.
     * @return PrintMultipageLayout|null
    */
    public function getMultipageLayout(): ?PrintMultipageLayout {
        return $this->multipageLayout;
    }

    /**
     * Gets the orientation property value. The default orientation to use when printing the document. Valid values are described in the following table.
     * @return PrintOrientation|null
    */
    public function getOrientation(): ?PrintOrientation {
        return $this->orientation;
    }

    /**
     * Gets the outputBin property value. The default output bin to place completed prints into. See the printer's capabilities for a list of supported output bins.
     * @return string|null
    */
    public function getOutputBin(): ?string {
        return $this->outputBin;
    }

    /**
     * Gets the pagesPerSheet property value. The default number of document pages to print on each sheet.
     * @return int|null
    */
    public function getPagesPerSheet(): ?int {
        return $this->pagesPerSheet;
    }

    /**
     * Gets the quality property value. The default quality to use when printing the document. Valid values are described in the following table.
     * @return PrintQuality|null
    */
    public function getQuality(): ?PrintQuality {
        return $this->quality;
    }

    /**
     * Gets the scaling property value. Specifies how the printer scales the document data to fit the requested media. Valid values are described in the following table.
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
        $writer->writeEnumValue('colorMode', $this->colorMode);
        $writer->writeStringValue('contentType', $this->contentType);
        $writer->writeIntegerValue('copiesPerJob', $this->copiesPerJob);
        $writer->writeIntegerValue('dpi', $this->dpi);
        $writer->writeEnumValue('duplexMode', $this->duplexMode);
        $writer->writeCollectionOfEnumValues('finishings', $this->finishings);
        $writer->writeBooleanValue('fitPdfToPage', $this->fitPdfToPage);
        $writer->writeStringValue('inputBin', $this->inputBin);
        $writer->writeStringValue('mediaColor', $this->mediaColor);
        $writer->writeStringValue('mediaSize', $this->mediaSize);
        $writer->writeStringValue('mediaType', $this->mediaType);
        $writer->writeEnumValue('multipageLayout', $this->multipageLayout);
        $writer->writeEnumValue('orientation', $this->orientation);
        $writer->writeStringValue('outputBin', $this->outputBin);
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
     * Sets the colorMode property value. The default color mode to use when printing the document. Valid values are described in the following table.
     *  @param PrintColorMode|null $value Value to set for the colorMode property.
    */
    public function setColorMode(?PrintColorMode $value ): void {
        $this->colorMode = $value;
    }

    /**
     * Sets the contentType property value. The default content (MIME) type to use when processing documents.
     *  @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value ): void {
        $this->contentType = $value;
    }

    /**
     * Sets the copiesPerJob property value. The default number of copies printed per job.
     *  @param int|null $value Value to set for the copiesPerJob property.
    */
    public function setCopiesPerJob(?int $value ): void {
        $this->copiesPerJob = $value;
    }

    /**
     * Sets the dpi property value. The default resolution in DPI to use when printing the job.
     *  @param int|null $value Value to set for the dpi property.
    */
    public function setDpi(?int $value ): void {
        $this->dpi = $value;
    }

    /**
     * Sets the duplexMode property value. The default duplex (double-sided) configuration to use when printing a document. Valid values are described in the following table.
     *  @param PrintDuplexMode|null $value Value to set for the duplexMode property.
    */
    public function setDuplexMode(?PrintDuplexMode $value ): void {
        $this->duplexMode = $value;
    }

    /**
     * Sets the finishings property value. The default set of finishings to apply to print jobs. Valid values are described in the following table.
     *  @param array<PrintFinishing>|null $value Value to set for the finishings property.
    */
    public function setFinishings(?array $value ): void {
        $this->finishings = $value;
    }

    /**
     * Sets the fitPdfToPage property value. The default fitPdfToPage setting. True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions.
     *  @param bool|null $value Value to set for the fitPdfToPage property.
    */
    public function setFitPdfToPage(?bool $value ): void {
        $this->fitPdfToPage = $value;
    }

    /**
     * Sets the inputBin property value. The default input bin that serves as the paper source.
     *  @param string|null $value Value to set for the inputBin property.
    */
    public function setInputBin(?string $value ): void {
        $this->inputBin = $value;
    }

    /**
     * Sets the mediaColor property value. The default media (such as paper) color to print the document on.
     *  @param string|null $value Value to set for the mediaColor property.
    */
    public function setMediaColor(?string $value ): void {
        $this->mediaColor = $value;
    }

    /**
     * Sets the mediaSize property value. The default media size to use. Supports standard size names for ISO and ANSI media sizes. Valid values are listed in the printerCapabilities topic.
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
     * Sets the multipageLayout property value. The default direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table.
     *  @param PrintMultipageLayout|null $value Value to set for the multipageLayout property.
    */
    public function setMultipageLayout(?PrintMultipageLayout $value ): void {
        $this->multipageLayout = $value;
    }

    /**
     * Sets the orientation property value. The default orientation to use when printing the document. Valid values are described in the following table.
     *  @param PrintOrientation|null $value Value to set for the orientation property.
    */
    public function setOrientation(?PrintOrientation $value ): void {
        $this->orientation = $value;
    }

    /**
     * Sets the outputBin property value. The default output bin to place completed prints into. See the printer's capabilities for a list of supported output bins.
     *  @param string|null $value Value to set for the outputBin property.
    */
    public function setOutputBin(?string $value ): void {
        $this->outputBin = $value;
    }

    /**
     * Sets the pagesPerSheet property value. The default number of document pages to print on each sheet.
     *  @param int|null $value Value to set for the pagesPerSheet property.
    */
    public function setPagesPerSheet(?int $value ): void {
        $this->pagesPerSheet = $value;
    }

    /**
     * Sets the quality property value. The default quality to use when printing the document. Valid values are described in the following table.
     *  @param PrintQuality|null $value Value to set for the quality property.
    */
    public function setQuality(?PrintQuality $value ): void {
        $this->quality = $value;
    }

    /**
     * Sets the scaling property value. Specifies how the printer scales the document data to fit the requested media. Valid values are described in the following table.
     *  @param PrintScaling|null $value Value to set for the scaling property.
    */
    public function setScaling(?PrintScaling $value ): void {
        $this->scaling = $value;
    }

}
