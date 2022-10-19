<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookRangeFormat extends Entity implements Parsable 
{
    /**
     * @var array<WorkbookRangeBorder>|null $borders Collection of border objects that apply to the overall range selected Read-only.
    */
    private ?array $borders = null;
    
    /**
     * @var float|null $columnWidth Gets or sets the width of all colums within the range. If the column widths are not uniform, null will be returned.
    */
    private ?float $columnWidth = null;
    
    /**
     * @var WorkbookRangeFill|null $fill Returns the fill object defined on the overall range. Read-only.
    */
    private ?WorkbookRangeFill $fill = null;
    
    /**
     * @var WorkbookRangeFont|null $font Returns the font object defined on the overall range selected Read-only.
    */
    private ?WorkbookRangeFont $font = null;
    
    /**
     * @var string|null $horizontalAlignment Represents the horizontal alignment for the specified object. The possible values are: General, Left, Center, Right, Fill, Justify, CenterAcrossSelection, Distributed.
    */
    private ?string $horizontalAlignment = null;
    
    /**
     * @var WorkbookFormatProtection|null $protection Returns the format protection object for a range. Read-only.
    */
    private ?WorkbookFormatProtection $protection = null;
    
    /**
     * @var float|null $rowHeight Gets or sets the height of all rows in the range. If the row heights are not uniform null will be returned.
    */
    private ?float $rowHeight = null;
    
    /**
     * @var string|null $verticalAlignment Represents the vertical alignment for the specified object. The possible values are: Top, Center, Bottom, Justify, Distributed.
    */
    private ?string $verticalAlignment = null;
    
    /**
     * @var bool|null $wrapText Indicates if Excel wraps the text in the object. A null value indicates that the entire range doesn't have uniform wrap setting
    */
    private ?bool $wrapText = null;
    
    /**
     * Instantiates a new workbookRangeFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookRangeFormat');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookRangeFormat
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookRangeFormat {
        return new WorkbookRangeFormat();
    }

    /**
     * Gets the borders property value. Collection of border objects that apply to the overall range selected Read-only.
     * @return array<WorkbookRangeBorder>|null
    */
    public function getBorders(): ?array {
        return $this->borders;
    }

    /**
     * Gets the columnWidth property value. Gets or sets the width of all colums within the range. If the column widths are not uniform, null will be returned.
     * @return float|null
    */
    public function getColumnWidth(): ?float {
        return $this->columnWidth;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'borders' => fn(ParseNode $n) => $o->setBorders($n->getCollectionOfObjectValues([WorkbookRangeBorder::class, 'createFromDiscriminatorValue'])),
            'columnWidth' => fn(ParseNode $n) => $o->setColumnWidth($n->getFloatValue()),
            'fill' => fn(ParseNode $n) => $o->setFill($n->getObjectValue([WorkbookRangeFill::class, 'createFromDiscriminatorValue'])),
            'font' => fn(ParseNode $n) => $o->setFont($n->getObjectValue([WorkbookRangeFont::class, 'createFromDiscriminatorValue'])),
            'horizontalAlignment' => fn(ParseNode $n) => $o->setHorizontalAlignment($n->getStringValue()),
            'protection' => fn(ParseNode $n) => $o->setProtection($n->getObjectValue([WorkbookFormatProtection::class, 'createFromDiscriminatorValue'])),
            'rowHeight' => fn(ParseNode $n) => $o->setRowHeight($n->getFloatValue()),
            'verticalAlignment' => fn(ParseNode $n) => $o->setVerticalAlignment($n->getStringValue()),
            'wrapText' => fn(ParseNode $n) => $o->setWrapText($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the fill property value. Returns the fill object defined on the overall range. Read-only.
     * @return WorkbookRangeFill|null
    */
    public function getFill(): ?WorkbookRangeFill {
        return $this->fill;
    }

    /**
     * Gets the font property value. Returns the font object defined on the overall range selected Read-only.
     * @return WorkbookRangeFont|null
    */
    public function getFont(): ?WorkbookRangeFont {
        return $this->font;
    }

    /**
     * Gets the horizontalAlignment property value. Represents the horizontal alignment for the specified object. The possible values are: General, Left, Center, Right, Fill, Justify, CenterAcrossSelection, Distributed.
     * @return string|null
    */
    public function getHorizontalAlignment(): ?string {
        return $this->horizontalAlignment;
    }

    /**
     * Gets the protection property value. Returns the format protection object for a range. Read-only.
     * @return WorkbookFormatProtection|null
    */
    public function getProtection(): ?WorkbookFormatProtection {
        return $this->protection;
    }

    /**
     * Gets the rowHeight property value. Gets or sets the height of all rows in the range. If the row heights are not uniform null will be returned.
     * @return float|null
    */
    public function getRowHeight(): ?float {
        return $this->rowHeight;
    }

    /**
     * Gets the verticalAlignment property value. Represents the vertical alignment for the specified object. The possible values are: Top, Center, Bottom, Justify, Distributed.
     * @return string|null
    */
    public function getVerticalAlignment(): ?string {
        return $this->verticalAlignment;
    }

    /**
     * Gets the wrapText property value. Indicates if Excel wraps the text in the object. A null value indicates that the entire range doesn't have uniform wrap setting
     * @return bool|null
    */
    public function getWrapText(): ?bool {
        return $this->wrapText;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('borders', $this->borders);
        $writer->writeFloatValue('columnWidth', $this->columnWidth);
        $writer->writeObjectValue('fill', $this->fill);
        $writer->writeObjectValue('font', $this->font);
        $writer->writeStringValue('horizontalAlignment', $this->horizontalAlignment);
        $writer->writeObjectValue('protection', $this->protection);
        $writer->writeFloatValue('rowHeight', $this->rowHeight);
        $writer->writeStringValue('verticalAlignment', $this->verticalAlignment);
        $writer->writeBooleanValue('wrapText', $this->wrapText);
    }

    /**
     * Sets the borders property value. Collection of border objects that apply to the overall range selected Read-only.
     *  @param array<WorkbookRangeBorder>|null $value Value to set for the borders property.
    */
    public function setBorders(?array $value ): void {
        $this->borders = $value;
    }

    /**
     * Sets the columnWidth property value. Gets or sets the width of all colums within the range. If the column widths are not uniform, null will be returned.
     *  @param float|null $value Value to set for the columnWidth property.
    */
    public function setColumnWidth(?float $value ): void {
        $this->columnWidth = $value;
    }

    /**
     * Sets the fill property value. Returns the fill object defined on the overall range. Read-only.
     *  @param WorkbookRangeFill|null $value Value to set for the fill property.
    */
    public function setFill(?WorkbookRangeFill $value ): void {
        $this->fill = $value;
    }

    /**
     * Sets the font property value. Returns the font object defined on the overall range selected Read-only.
     *  @param WorkbookRangeFont|null $value Value to set for the font property.
    */
    public function setFont(?WorkbookRangeFont $value ): void {
        $this->font = $value;
    }

    /**
     * Sets the horizontalAlignment property value. Represents the horizontal alignment for the specified object. The possible values are: General, Left, Center, Right, Fill, Justify, CenterAcrossSelection, Distributed.
     *  @param string|null $value Value to set for the horizontalAlignment property.
    */
    public function setHorizontalAlignment(?string $value ): void {
        $this->horizontalAlignment = $value;
    }

    /**
     * Sets the protection property value. Returns the format protection object for a range. Read-only.
     *  @param WorkbookFormatProtection|null $value Value to set for the protection property.
    */
    public function setProtection(?WorkbookFormatProtection $value ): void {
        $this->protection = $value;
    }

    /**
     * Sets the rowHeight property value. Gets or sets the height of all rows in the range. If the row heights are not uniform null will be returned.
     *  @param float|null $value Value to set for the rowHeight property.
    */
    public function setRowHeight(?float $value ): void {
        $this->rowHeight = $value;
    }

    /**
     * Sets the verticalAlignment property value. Represents the vertical alignment for the specified object. The possible values are: Top, Center, Bottom, Justify, Distributed.
     *  @param string|null $value Value to set for the verticalAlignment property.
    */
    public function setVerticalAlignment(?string $value ): void {
        $this->verticalAlignment = $value;
    }

    /**
     * Sets the wrapText property value. Indicates if Excel wraps the text in the object. A null value indicates that the entire range doesn't have uniform wrap setting
     *  @param bool|null $value Value to set for the wrapText property.
    */
    public function setWrapText(?bool $value ): void {
        $this->wrapText = $value;
    }

}
