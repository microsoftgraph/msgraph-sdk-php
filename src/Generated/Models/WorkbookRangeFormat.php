<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WorkbookRangeFormat extends Entity implements Parsable 
{
    /**
     * Instantiates a new workbookRangeFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('borders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkbookRangeBorder::class);
            /** @var array<WorkbookRangeBorder>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'borders'");
    }

    /**
     * Gets the columnWidth property value. Gets or sets the width of all colums within the range. If the column widths are not uniform, null will be returned.
     * @return float|null
    */
    public function getColumnWidth(): ?float {
        $val = $this->getBackingStore()->get('columnWidth');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'columnWidth'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'borders' => fn(ParseNode $n) => $o->setBorders($n->getCollectionOfObjectValues([WorkbookRangeBorder::class, 'createFromDiscriminatorValue'])),
            'columnWidth' => fn(ParseNode $n) => $o->setColumnWidth($n->getFloatValue()),
            'fill' => fn(ParseNode $n) => $o->setFill($n->getObjectValue([WorkbookRangeFill::class, 'createFromDiscriminatorValue'])),
            'font' => fn(ParseNode $n) => $o->setFont($n->getObjectValue([WorkbookRangeFont::class, 'createFromDiscriminatorValue'])),
            'horizontalAlignment' => fn(ParseNode $n) => $o->setHorizontalAlignment($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
        $val = $this->getBackingStore()->get('fill');
        if (is_null($val) || $val instanceof WorkbookRangeFill) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fill'");
    }

    /**
     * Gets the font property value. Returns the font object defined on the overall range selected Read-only.
     * @return WorkbookRangeFont|null
    */
    public function getFont(): ?WorkbookRangeFont {
        $val = $this->getBackingStore()->get('font');
        if (is_null($val) || $val instanceof WorkbookRangeFont) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'font'");
    }

    /**
     * Gets the horizontalAlignment property value. Represents the horizontal alignment for the specified object. The possible values are: General, Left, Center, Right, Fill, Justify, CenterAcrossSelection, Distributed.
     * @return string|null
    */
    public function getHorizontalAlignment(): ?string {
        $val = $this->getBackingStore()->get('horizontalAlignment');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'horizontalAlignment'");
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
     * Gets the protection property value. Returns the format protection object for a range. Read-only.
     * @return WorkbookFormatProtection|null
    */
    public function getProtection(): ?WorkbookFormatProtection {
        $val = $this->getBackingStore()->get('protection');
        if (is_null($val) || $val instanceof WorkbookFormatProtection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protection'");
    }

    /**
     * Gets the rowHeight property value. Gets or sets the height of all rows in the range. If the row heights are not uniform null will be returned.
     * @return float|null
    */
    public function getRowHeight(): ?float {
        $val = $this->getBackingStore()->get('rowHeight');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rowHeight'");
    }

    /**
     * Gets the verticalAlignment property value. Represents the vertical alignment for the specified object. The possible values are: Top, Center, Bottom, Justify, Distributed.
     * @return string|null
    */
    public function getVerticalAlignment(): ?string {
        $val = $this->getBackingStore()->get('verticalAlignment');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verticalAlignment'");
    }

    /**
     * Gets the wrapText property value. Indicates if Excel wraps the text in the object. A null value indicates that the entire range doesn't have uniform wrap setting
     * @return bool|null
    */
    public function getWrapText(): ?bool {
        $val = $this->getBackingStore()->get('wrapText');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wrapText'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('borders', $this->getBorders());
        $writer->writeFloatValue('columnWidth', $this->getColumnWidth());
        $writer->writeObjectValue('fill', $this->getFill());
        $writer->writeObjectValue('font', $this->getFont());
        $writer->writeStringValue('horizontalAlignment', $this->getHorizontalAlignment());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('protection', $this->getProtection());
        $writer->writeFloatValue('rowHeight', $this->getRowHeight());
        $writer->writeStringValue('verticalAlignment', $this->getVerticalAlignment());
        $writer->writeBooleanValue('wrapText', $this->getWrapText());
    }

    /**
     * Sets the borders property value. Collection of border objects that apply to the overall range selected Read-only.
     * @param array<WorkbookRangeBorder>|null $value Value to set for the borders property.
    */
    public function setBorders(?array $value): void {
        $this->getBackingStore()->set('borders', $value);
    }

    /**
     * Sets the columnWidth property value. Gets or sets the width of all colums within the range. If the column widths are not uniform, null will be returned.
     * @param float|null $value Value to set for the columnWidth property.
    */
    public function setColumnWidth(?float $value): void {
        $this->getBackingStore()->set('columnWidth', $value);
    }

    /**
     * Sets the fill property value. Returns the fill object defined on the overall range. Read-only.
     * @param WorkbookRangeFill|null $value Value to set for the fill property.
    */
    public function setFill(?WorkbookRangeFill $value): void {
        $this->getBackingStore()->set('fill', $value);
    }

    /**
     * Sets the font property value. Returns the font object defined on the overall range selected Read-only.
     * @param WorkbookRangeFont|null $value Value to set for the font property.
    */
    public function setFont(?WorkbookRangeFont $value): void {
        $this->getBackingStore()->set('font', $value);
    }

    /**
     * Sets the horizontalAlignment property value. Represents the horizontal alignment for the specified object. The possible values are: General, Left, Center, Right, Fill, Justify, CenterAcrossSelection, Distributed.
     * @param string|null $value Value to set for the horizontalAlignment property.
    */
    public function setHorizontalAlignment(?string $value): void {
        $this->getBackingStore()->set('horizontalAlignment', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the protection property value. Returns the format protection object for a range. Read-only.
     * @param WorkbookFormatProtection|null $value Value to set for the protection property.
    */
    public function setProtection(?WorkbookFormatProtection $value): void {
        $this->getBackingStore()->set('protection', $value);
    }

    /**
     * Sets the rowHeight property value. Gets or sets the height of all rows in the range. If the row heights are not uniform null will be returned.
     * @param float|null $value Value to set for the rowHeight property.
    */
    public function setRowHeight(?float $value): void {
        $this->getBackingStore()->set('rowHeight', $value);
    }

    /**
     * Sets the verticalAlignment property value. Represents the vertical alignment for the specified object. The possible values are: Top, Center, Bottom, Justify, Distributed.
     * @param string|null $value Value to set for the verticalAlignment property.
    */
    public function setVerticalAlignment(?string $value): void {
        $this->getBackingStore()->set('verticalAlignment', $value);
    }

    /**
     * Sets the wrapText property value. Indicates if Excel wraps the text in the object. A null value indicates that the entire range doesn't have uniform wrap setting
     * @param bool|null $value Value to set for the wrapText property.
    */
    public function setWrapText(?bool $value): void {
        $this->getBackingStore()->set('wrapText', $value);
    }

}
