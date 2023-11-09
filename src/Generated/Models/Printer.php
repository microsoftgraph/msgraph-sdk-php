<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Printer extends PrinterBase implements Parsable 
{
    /**
     * Instantiates a new printer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.printer');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Printer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Printer {
        return new Printer();
    }

    /**
     * Gets the connectors property value. The connectors that are associated with the printer.
     * @return array<PrintConnector>|null
    */
    public function getConnectors(): ?array {
        $val = $this->getBackingStore()->get('connectors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintConnector::class);
            /** @var array<PrintConnector>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectors'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectors' => fn(ParseNode $n) => $o->setConnectors($n->getCollectionOfObjectValues([PrintConnector::class, 'createFromDiscriminatorValue'])),
            'hasPhysicalDevice' => fn(ParseNode $n) => $o->setHasPhysicalDevice($n->getBooleanValue()),
            'isShared' => fn(ParseNode $n) => $o->setIsShared($n->getBooleanValue()),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'registeredDateTime' => fn(ParseNode $n) => $o->setRegisteredDateTime($n->getDateTimeValue()),
            'shares' => fn(ParseNode $n) => $o->setShares($n->getCollectionOfObjectValues([PrinterShare::class, 'createFromDiscriminatorValue'])),
            'taskTriggers' => fn(ParseNode $n) => $o->setTaskTriggers($n->getCollectionOfObjectValues([PrintTaskTrigger::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the hasPhysicalDevice property value. True if the printer has a physical device for printing. Read-only.
     * @return bool|null
    */
    public function getHasPhysicalDevice(): ?bool {
        $val = $this->getBackingStore()->get('hasPhysicalDevice');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasPhysicalDevice'");
    }

    /**
     * Gets the isShared property value. True if the printer is shared; false otherwise. Read-only.
     * @return bool|null
    */
    public function getIsShared(): ?bool {
        $val = $this->getBackingStore()->get('isShared');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isShared'");
    }

    /**
     * Gets the lastSeenDateTime property value. The most recent dateTimeOffset when a printer interacted with Universal Print. Read-only.
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSeenDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSeenDateTime'");
    }

    /**
     * Gets the registeredDateTime property value. The DateTimeOffset when the printer was registered. Read-only.
     * @return DateTime|null
    */
    public function getRegisteredDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('registeredDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registeredDateTime'");
    }

    /**
     * Gets the shares property value. The list of printerShares that are associated with the printer. Currently, only one printerShare can be associated with the printer. Read-only. Nullable.
     * @return array<PrinterShare>|null
    */
    public function getShares(): ?array {
        $val = $this->getBackingStore()->get('shares');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrinterShare::class);
            /** @var array<PrinterShare>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shares'");
    }

    /**
     * Gets the taskTriggers property value. A list of task triggers that are associated with the printer.
     * @return array<PrintTaskTrigger>|null
    */
    public function getTaskTriggers(): ?array {
        $val = $this->getBackingStore()->get('taskTriggers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintTaskTrigger::class);
            /** @var array<PrintTaskTrigger>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taskTriggers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('connectors', $this->getConnectors());
        $writer->writeBooleanValue('hasPhysicalDevice', $this->getHasPhysicalDevice());
        $writer->writeBooleanValue('isShared', $this->getIsShared());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeDateTimeValue('registeredDateTime', $this->getRegisteredDateTime());
        $writer->writeCollectionOfObjectValues('shares', $this->getShares());
        $writer->writeCollectionOfObjectValues('taskTriggers', $this->getTaskTriggers());
    }

    /**
     * Sets the connectors property value. The connectors that are associated with the printer.
     * @param array<PrintConnector>|null $value Value to set for the connectors property.
    */
    public function setConnectors(?array $value): void {
        $this->getBackingStore()->set('connectors', $value);
    }

    /**
     * Sets the hasPhysicalDevice property value. True if the printer has a physical device for printing. Read-only.
     * @param bool|null $value Value to set for the hasPhysicalDevice property.
    */
    public function setHasPhysicalDevice(?bool $value): void {
        $this->getBackingStore()->set('hasPhysicalDevice', $value);
    }

    /**
     * Sets the isShared property value. True if the printer is shared; false otherwise. Read-only.
     * @param bool|null $value Value to set for the isShared property.
    */
    public function setIsShared(?bool $value): void {
        $this->getBackingStore()->set('isShared', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. The most recent dateTimeOffset when a printer interacted with Universal Print. Read-only.
     * @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the registeredDateTime property value. The DateTimeOffset when the printer was registered. Read-only.
     * @param DateTime|null $value Value to set for the registeredDateTime property.
    */
    public function setRegisteredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('registeredDateTime', $value);
    }

    /**
     * Sets the shares property value. The list of printerShares that are associated with the printer. Currently, only one printerShare can be associated with the printer. Read-only. Nullable.
     * @param array<PrinterShare>|null $value Value to set for the shares property.
    */
    public function setShares(?array $value): void {
        $this->getBackingStore()->set('shares', $value);
    }

    /**
     * Sets the taskTriggers property value. A list of task triggers that are associated with the printer.
     * @param array<PrintTaskTrigger>|null $value Value to set for the taskTriggers property.
    */
    public function setTaskTriggers(?array $value): void {
        $this->getBackingStore()->set('taskTriggers', $value);
    }

}
