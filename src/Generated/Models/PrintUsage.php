<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PrintUsage extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new printUsage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintUsage {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.printUsageByPrinter': return new PrintUsageByPrinter();
                case '#microsoft.graph.printUsageByUser': return new PrintUsageByUser();
            }
        }
        return new PrintUsage();
    }

    /**
     * Gets the blackAndWhitePageCount property value. The blackAndWhitePageCount property
     * @return int|null
    */
    public function getBlackAndWhitePageCount(): ?int {
        $val = $this->getBackingStore()->get('blackAndWhitePageCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blackAndWhitePageCount'");
    }

    /**
     * Gets the colorPageCount property value. The colorPageCount property
     * @return int|null
    */
    public function getColorPageCount(): ?int {
        $val = $this->getBackingStore()->get('colorPageCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'colorPageCount'");
    }

    /**
     * Gets the completedBlackAndWhiteJobCount property value. The completedBlackAndWhiteJobCount property
     * @return int|null
    */
    public function getCompletedBlackAndWhiteJobCount(): ?int {
        $val = $this->getBackingStore()->get('completedBlackAndWhiteJobCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedBlackAndWhiteJobCount'");
    }

    /**
     * Gets the completedColorJobCount property value. The completedColorJobCount property
     * @return int|null
    */
    public function getCompletedColorJobCount(): ?int {
        $val = $this->getBackingStore()->get('completedColorJobCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedColorJobCount'");
    }

    /**
     * Gets the completedJobCount property value. The completedJobCount property
     * @return int|null
    */
    public function getCompletedJobCount(): ?int {
        $val = $this->getBackingStore()->get('completedJobCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedJobCount'");
    }

    /**
     * Gets the doubleSidedSheetCount property value. The doubleSidedSheetCount property
     * @return int|null
    */
    public function getDoubleSidedSheetCount(): ?int {
        $val = $this->getBackingStore()->get('doubleSidedSheetCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'doubleSidedSheetCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'blackAndWhitePageCount' => fn(ParseNode $n) => $o->setBlackAndWhitePageCount($n->getIntegerValue()),
            'colorPageCount' => fn(ParseNode $n) => $o->setColorPageCount($n->getIntegerValue()),
            'completedBlackAndWhiteJobCount' => fn(ParseNode $n) => $o->setCompletedBlackAndWhiteJobCount($n->getIntegerValue()),
            'completedColorJobCount' => fn(ParseNode $n) => $o->setCompletedColorJobCount($n->getIntegerValue()),
            'completedJobCount' => fn(ParseNode $n) => $o->setCompletedJobCount($n->getIntegerValue()),
            'doubleSidedSheetCount' => fn(ParseNode $n) => $o->setDoubleSidedSheetCount($n->getIntegerValue()),
            'incompleteJobCount' => fn(ParseNode $n) => $o->setIncompleteJobCount($n->getIntegerValue()),
            'mediaSheetCount' => fn(ParseNode $n) => $o->setMediaSheetCount($n->getIntegerValue()),
            'pageCount' => fn(ParseNode $n) => $o->setPageCount($n->getIntegerValue()),
            'singleSidedSheetCount' => fn(ParseNode $n) => $o->setSingleSidedSheetCount($n->getIntegerValue()),
            'usageDate' => fn(ParseNode $n) => $o->setUsageDate($n->getDateValue()),
        ]);
    }

    /**
     * Gets the incompleteJobCount property value. The incompleteJobCount property
     * @return int|null
    */
    public function getIncompleteJobCount(): ?int {
        $val = $this->getBackingStore()->get('incompleteJobCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incompleteJobCount'");
    }

    /**
     * Gets the mediaSheetCount property value. The mediaSheetCount property
     * @return int|null
    */
    public function getMediaSheetCount(): ?int {
        $val = $this->getBackingStore()->get('mediaSheetCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaSheetCount'");
    }

    /**
     * Gets the pageCount property value. The pageCount property
     * @return int|null
    */
    public function getPageCount(): ?int {
        $val = $this->getBackingStore()->get('pageCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pageCount'");
    }

    /**
     * Gets the singleSidedSheetCount property value. The singleSidedSheetCount property
     * @return int|null
    */
    public function getSingleSidedSheetCount(): ?int {
        $val = $this->getBackingStore()->get('singleSidedSheetCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'singleSidedSheetCount'");
    }

    /**
     * Gets the usageDate property value. The usageDate property
     * @return Date|null
    */
    public function getUsageDate(): ?Date {
        $val = $this->getBackingStore()->get('usageDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usageDate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('blackAndWhitePageCount', $this->getBlackAndWhitePageCount());
        $writer->writeIntegerValue('colorPageCount', $this->getColorPageCount());
        $writer->writeIntegerValue('completedBlackAndWhiteJobCount', $this->getCompletedBlackAndWhiteJobCount());
        $writer->writeIntegerValue('completedColorJobCount', $this->getCompletedColorJobCount());
        $writer->writeIntegerValue('completedJobCount', $this->getCompletedJobCount());
        $writer->writeIntegerValue('doubleSidedSheetCount', $this->getDoubleSidedSheetCount());
        $writer->writeIntegerValue('incompleteJobCount', $this->getIncompleteJobCount());
        $writer->writeIntegerValue('mediaSheetCount', $this->getMediaSheetCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('pageCount', $this->getPageCount());
        $writer->writeIntegerValue('singleSidedSheetCount', $this->getSingleSidedSheetCount());
        $writer->writeDateValue('usageDate', $this->getUsageDate());
    }

    /**
     * Sets the blackAndWhitePageCount property value. The blackAndWhitePageCount property
     * @param int|null $value Value to set for the blackAndWhitePageCount property.
    */
    public function setBlackAndWhitePageCount(?int $value): void {
        $this->getBackingStore()->set('blackAndWhitePageCount', $value);
    }

    /**
     * Sets the colorPageCount property value. The colorPageCount property
     * @param int|null $value Value to set for the colorPageCount property.
    */
    public function setColorPageCount(?int $value): void {
        $this->getBackingStore()->set('colorPageCount', $value);
    }

    /**
     * Sets the completedBlackAndWhiteJobCount property value. The completedBlackAndWhiteJobCount property
     * @param int|null $value Value to set for the completedBlackAndWhiteJobCount property.
    */
    public function setCompletedBlackAndWhiteJobCount(?int $value): void {
        $this->getBackingStore()->set('completedBlackAndWhiteJobCount', $value);
    }

    /**
     * Sets the completedColorJobCount property value. The completedColorJobCount property
     * @param int|null $value Value to set for the completedColorJobCount property.
    */
    public function setCompletedColorJobCount(?int $value): void {
        $this->getBackingStore()->set('completedColorJobCount', $value);
    }

    /**
     * Sets the completedJobCount property value. The completedJobCount property
     * @param int|null $value Value to set for the completedJobCount property.
    */
    public function setCompletedJobCount(?int $value): void {
        $this->getBackingStore()->set('completedJobCount', $value);
    }

    /**
     * Sets the doubleSidedSheetCount property value. The doubleSidedSheetCount property
     * @param int|null $value Value to set for the doubleSidedSheetCount property.
    */
    public function setDoubleSidedSheetCount(?int $value): void {
        $this->getBackingStore()->set('doubleSidedSheetCount', $value);
    }

    /**
     * Sets the incompleteJobCount property value. The incompleteJobCount property
     * @param int|null $value Value to set for the incompleteJobCount property.
    */
    public function setIncompleteJobCount(?int $value): void {
        $this->getBackingStore()->set('incompleteJobCount', $value);
    }

    /**
     * Sets the mediaSheetCount property value. The mediaSheetCount property
     * @param int|null $value Value to set for the mediaSheetCount property.
    */
    public function setMediaSheetCount(?int $value): void {
        $this->getBackingStore()->set('mediaSheetCount', $value);
    }

    /**
     * Sets the pageCount property value. The pageCount property
     * @param int|null $value Value to set for the pageCount property.
    */
    public function setPageCount(?int $value): void {
        $this->getBackingStore()->set('pageCount', $value);
    }

    /**
     * Sets the singleSidedSheetCount property value. The singleSidedSheetCount property
     * @param int|null $value Value to set for the singleSidedSheetCount property.
    */
    public function setSingleSidedSheetCount(?int $value): void {
        $this->getBackingStore()->set('singleSidedSheetCount', $value);
    }

    /**
     * Sets the usageDate property value. The usageDate property
     * @param Date|null $value Value to set for the usageDate property.
    */
    public function setUsageDate(?Date $value): void {
        $this->getBackingStore()->set('usageDate', $value);
    }

}
