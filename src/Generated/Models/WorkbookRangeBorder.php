<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookRangeBorder extends Entity implements Parsable 
{
    /**
     * Instantiates a new workbookRangeBorder and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookRangeBorder');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookRangeBorder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookRangeBorder {
        return new WorkbookRangeBorder();
    }

    /**
     * Gets the color property value. HTML color code representing the color of the border line, of the form #RRGGBB (e.g. 'FFA500') or as a named HTML color (e.g. 'orange').
     * @return string|null
    */
    public function getColor(): ?string {
        return $this->getBackingStore()->get('color');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'color' => fn(ParseNode $n) => $o->setColor($n->getStringValue()),
            'sideIndex' => fn(ParseNode $n) => $o->setSideIndex($n->getStringValue()),
            'style' => fn(ParseNode $n) => $o->setStyle($n->getStringValue()),
            'weight' => fn(ParseNode $n) => $o->setWeight($n->getStringValue()),
        ]);
    }

    /**
     * Gets the sideIndex property value. Constant value that indicates the specific side of the border. The possible values are: EdgeTop, EdgeBottom, EdgeLeft, EdgeRight, InsideVertical, InsideHorizontal, DiagonalDown, DiagonalUp. Read-only.
     * @return string|null
    */
    public function getSideIndex(): ?string {
        return $this->getBackingStore()->get('sideIndex');
    }

    /**
     * Gets the style property value. One of the constants of line style specifying the line style for the border. The possible values are: None, Continuous, Dash, DashDot, DashDotDot, Dot, Double, SlantDashDot.
     * @return string|null
    */
    public function getStyle(): ?string {
        return $this->getBackingStore()->get('style');
    }

    /**
     * Gets the weight property value. Specifies the weight of the border around a range. The possible values are: Hairline, Thin, Medium, Thick.
     * @return string|null
    */
    public function getWeight(): ?string {
        return $this->getBackingStore()->get('weight');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('color', $this->getColor());
        $writer->writeStringValue('sideIndex', $this->getSideIndex());
        $writer->writeStringValue('style', $this->getStyle());
        $writer->writeStringValue('weight', $this->getWeight());
    }

    /**
     * Sets the color property value. HTML color code representing the color of the border line, of the form #RRGGBB (e.g. 'FFA500') or as a named HTML color (e.g. 'orange').
     *  @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value): void {
        $this->getBackingStore()->set('color', $value);
    }

    /**
     * Sets the sideIndex property value. Constant value that indicates the specific side of the border. The possible values are: EdgeTop, EdgeBottom, EdgeLeft, EdgeRight, InsideVertical, InsideHorizontal, DiagonalDown, DiagonalUp. Read-only.
     *  @param string|null $value Value to set for the sideIndex property.
    */
    public function setSideIndex(?string $value): void {
        $this->getBackingStore()->set('sideIndex', $value);
    }

    /**
     * Sets the style property value. One of the constants of line style specifying the line style for the border. The possible values are: None, Continuous, Dash, DashDot, DashDotDot, Dot, Double, SlantDashDot.
     *  @param string|null $value Value to set for the style property.
    */
    public function setStyle(?string $value): void {
        $this->getBackingStore()->set('style', $value);
    }

    /**
     * Sets the weight property value. Specifies the weight of the border around a range. The possible values are: Hairline, Thin, Medium, Thick.
     *  @param string|null $value Value to set for the weight property.
    */
    public function setWeight(?string $value): void {
        $this->getBackingStore()->set('weight', $value);
    }

}
