<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WorkbookWorksheetProtectionOptions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new workbookWorksheetProtectionOptions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookWorksheetProtectionOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookWorksheetProtectionOptions {
        return new WorkbookWorksheetProtectionOptions();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the allowAutoFilter property value. Represents the worksheet protection option of allowing using auto filter feature.
     * @return bool|null
    */
    public function getAllowAutoFilter(): ?bool {
        return $this->getBackingStore()->get('allowAutoFilter');
    }

    /**
     * Gets the allowDeleteColumns property value. Represents the worksheet protection option of allowing deleting columns.
     * @return bool|null
    */
    public function getAllowDeleteColumns(): ?bool {
        return $this->getBackingStore()->get('allowDeleteColumns');
    }

    /**
     * Gets the allowDeleteRows property value. Represents the worksheet protection option of allowing deleting rows.
     * @return bool|null
    */
    public function getAllowDeleteRows(): ?bool {
        return $this->getBackingStore()->get('allowDeleteRows');
    }

    /**
     * Gets the allowFormatCells property value. Represents the worksheet protection option of allowing formatting cells.
     * @return bool|null
    */
    public function getAllowFormatCells(): ?bool {
        return $this->getBackingStore()->get('allowFormatCells');
    }

    /**
     * Gets the allowFormatColumns property value. Represents the worksheet protection option of allowing formatting columns.
     * @return bool|null
    */
    public function getAllowFormatColumns(): ?bool {
        return $this->getBackingStore()->get('allowFormatColumns');
    }

    /**
     * Gets the allowFormatRows property value. Represents the worksheet protection option of allowing formatting rows.
     * @return bool|null
    */
    public function getAllowFormatRows(): ?bool {
        return $this->getBackingStore()->get('allowFormatRows');
    }

    /**
     * Gets the allowInsertColumns property value. Represents the worksheet protection option of allowing inserting columns.
     * @return bool|null
    */
    public function getAllowInsertColumns(): ?bool {
        return $this->getBackingStore()->get('allowInsertColumns');
    }

    /**
     * Gets the allowInsertHyperlinks property value. Represents the worksheet protection option of allowing inserting hyperlinks.
     * @return bool|null
    */
    public function getAllowInsertHyperlinks(): ?bool {
        return $this->getBackingStore()->get('allowInsertHyperlinks');
    }

    /**
     * Gets the allowInsertRows property value. Represents the worksheet protection option of allowing inserting rows.
     * @return bool|null
    */
    public function getAllowInsertRows(): ?bool {
        return $this->getBackingStore()->get('allowInsertRows');
    }

    /**
     * Gets the allowPivotTables property value. Represents the worksheet protection option of allowing using pivot table feature.
     * @return bool|null
    */
    public function getAllowPivotTables(): ?bool {
        return $this->getBackingStore()->get('allowPivotTables');
    }

    /**
     * Gets the allowSort property value. Represents the worksheet protection option of allowing using sort feature.
     * @return bool|null
    */
    public function getAllowSort(): ?bool {
        return $this->getBackingStore()->get('allowSort');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowAutoFilter' => fn(ParseNode $n) => $o->setAllowAutoFilter($n->getBooleanValue()),
            'allowDeleteColumns' => fn(ParseNode $n) => $o->setAllowDeleteColumns($n->getBooleanValue()),
            'allowDeleteRows' => fn(ParseNode $n) => $o->setAllowDeleteRows($n->getBooleanValue()),
            'allowFormatCells' => fn(ParseNode $n) => $o->setAllowFormatCells($n->getBooleanValue()),
            'allowFormatColumns' => fn(ParseNode $n) => $o->setAllowFormatColumns($n->getBooleanValue()),
            'allowFormatRows' => fn(ParseNode $n) => $o->setAllowFormatRows($n->getBooleanValue()),
            'allowInsertColumns' => fn(ParseNode $n) => $o->setAllowInsertColumns($n->getBooleanValue()),
            'allowInsertHyperlinks' => fn(ParseNode $n) => $o->setAllowInsertHyperlinks($n->getBooleanValue()),
            'allowInsertRows' => fn(ParseNode $n) => $o->setAllowInsertRows($n->getBooleanValue()),
            'allowPivotTables' => fn(ParseNode $n) => $o->setAllowPivotTables($n->getBooleanValue()),
            'allowSort' => fn(ParseNode $n) => $o->setAllowSort($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowAutoFilter', $this->getAllowAutoFilter());
        $writer->writeBooleanValue('allowDeleteColumns', $this->getAllowDeleteColumns());
        $writer->writeBooleanValue('allowDeleteRows', $this->getAllowDeleteRows());
        $writer->writeBooleanValue('allowFormatCells', $this->getAllowFormatCells());
        $writer->writeBooleanValue('allowFormatColumns', $this->getAllowFormatColumns());
        $writer->writeBooleanValue('allowFormatRows', $this->getAllowFormatRows());
        $writer->writeBooleanValue('allowInsertColumns', $this->getAllowInsertColumns());
        $writer->writeBooleanValue('allowInsertHyperlinks', $this->getAllowInsertHyperlinks());
        $writer->writeBooleanValue('allowInsertRows', $this->getAllowInsertRows());
        $writer->writeBooleanValue('allowPivotTables', $this->getAllowPivotTables());
        $writer->writeBooleanValue('allowSort', $this->getAllowSort());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the allowAutoFilter property value. Represents the worksheet protection option of allowing using auto filter feature.
     * @param bool|null $value Value to set for the allowAutoFilter property.
    */
    public function setAllowAutoFilter(?bool $value): void {
        $this->getBackingStore()->set('allowAutoFilter', $value);
    }

    /**
     * Sets the allowDeleteColumns property value. Represents the worksheet protection option of allowing deleting columns.
     * @param bool|null $value Value to set for the allowDeleteColumns property.
    */
    public function setAllowDeleteColumns(?bool $value): void {
        $this->getBackingStore()->set('allowDeleteColumns', $value);
    }

    /**
     * Sets the allowDeleteRows property value. Represents the worksheet protection option of allowing deleting rows.
     * @param bool|null $value Value to set for the allowDeleteRows property.
    */
    public function setAllowDeleteRows(?bool $value): void {
        $this->getBackingStore()->set('allowDeleteRows', $value);
    }

    /**
     * Sets the allowFormatCells property value. Represents the worksheet protection option of allowing formatting cells.
     * @param bool|null $value Value to set for the allowFormatCells property.
    */
    public function setAllowFormatCells(?bool $value): void {
        $this->getBackingStore()->set('allowFormatCells', $value);
    }

    /**
     * Sets the allowFormatColumns property value. Represents the worksheet protection option of allowing formatting columns.
     * @param bool|null $value Value to set for the allowFormatColumns property.
    */
    public function setAllowFormatColumns(?bool $value): void {
        $this->getBackingStore()->set('allowFormatColumns', $value);
    }

    /**
     * Sets the allowFormatRows property value. Represents the worksheet protection option of allowing formatting rows.
     * @param bool|null $value Value to set for the allowFormatRows property.
    */
    public function setAllowFormatRows(?bool $value): void {
        $this->getBackingStore()->set('allowFormatRows', $value);
    }

    /**
     * Sets the allowInsertColumns property value. Represents the worksheet protection option of allowing inserting columns.
     * @param bool|null $value Value to set for the allowInsertColumns property.
    */
    public function setAllowInsertColumns(?bool $value): void {
        $this->getBackingStore()->set('allowInsertColumns', $value);
    }

    /**
     * Sets the allowInsertHyperlinks property value. Represents the worksheet protection option of allowing inserting hyperlinks.
     * @param bool|null $value Value to set for the allowInsertHyperlinks property.
    */
    public function setAllowInsertHyperlinks(?bool $value): void {
        $this->getBackingStore()->set('allowInsertHyperlinks', $value);
    }

    /**
     * Sets the allowInsertRows property value. Represents the worksheet protection option of allowing inserting rows.
     * @param bool|null $value Value to set for the allowInsertRows property.
    */
    public function setAllowInsertRows(?bool $value): void {
        $this->getBackingStore()->set('allowInsertRows', $value);
    }

    /**
     * Sets the allowPivotTables property value. Represents the worksheet protection option of allowing using pivot table feature.
     * @param bool|null $value Value to set for the allowPivotTables property.
    */
    public function setAllowPivotTables(?bool $value): void {
        $this->getBackingStore()->set('allowPivotTables', $value);
    }

    /**
     * Sets the allowSort property value. Represents the worksheet protection option of allowing using sort feature.
     * @param bool|null $value Value to set for the allowSort property.
    */
    public function setAllowSort(?bool $value): void {
        $this->getBackingStore()->set('allowSort', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
