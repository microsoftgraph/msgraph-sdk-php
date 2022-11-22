<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReportRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new ReportRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportRoot {
        return new ReportRoot();
    }

    /**
     * Gets the dailyPrintUsageByPrinter property value. The dailyPrintUsageByPrinter property
     * @return array<PrintUsageByPrinter>|null
    */
    public function getDailyPrintUsageByPrinter(): ?array {
        return $this->getBackingStore()->get('dailyPrintUsageByPrinter');
    }

    /**
     * Gets the dailyPrintUsageByUser property value. The dailyPrintUsageByUser property
     * @return array<PrintUsageByUser>|null
    */
    public function getDailyPrintUsageByUser(): ?array {
        return $this->getBackingStore()->get('dailyPrintUsageByUser');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dailyPrintUsageByPrinter' => fn(ParseNode $n) => $o->setDailyPrintUsageByPrinter($n->getCollectionOfObjectValues([PrintUsageByPrinter::class, 'createFromDiscriminatorValue'])),
            'dailyPrintUsageByUser' => fn(ParseNode $n) => $o->setDailyPrintUsageByUser($n->getCollectionOfObjectValues([PrintUsageByUser::class, 'createFromDiscriminatorValue'])),
            'monthlyPrintUsageByPrinter' => fn(ParseNode $n) => $o->setMonthlyPrintUsageByPrinter($n->getCollectionOfObjectValues([PrintUsageByPrinter::class, 'createFromDiscriminatorValue'])),
            'monthlyPrintUsageByUser' => fn(ParseNode $n) => $o->setMonthlyPrintUsageByUser($n->getCollectionOfObjectValues([PrintUsageByUser::class, 'createFromDiscriminatorValue'])),
            'security' => fn(ParseNode $n) => $o->setSecurity($n->getObjectValue([SecurityReportsRoot::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the monthlyPrintUsageByPrinter property value. The monthlyPrintUsageByPrinter property
     * @return array<PrintUsageByPrinter>|null
    */
    public function getMonthlyPrintUsageByPrinter(): ?array {
        return $this->getBackingStore()->get('monthlyPrintUsageByPrinter');
    }

    /**
     * Gets the monthlyPrintUsageByUser property value. The monthlyPrintUsageByUser property
     * @return array<PrintUsageByUser>|null
    */
    public function getMonthlyPrintUsageByUser(): ?array {
        return $this->getBackingStore()->get('monthlyPrintUsageByUser');
    }

    /**
     * Gets the security property value. The security property
     * @return SecurityReportsRoot|null
    */
    public function getSecurity(): ?SecurityReportsRoot {
        return $this->getBackingStore()->get('security');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('dailyPrintUsageByPrinter', $this->getDailyPrintUsageByPrinter());
        $writer->writeCollectionOfObjectValues('dailyPrintUsageByUser', $this->getDailyPrintUsageByUser());
        $writer->writeCollectionOfObjectValues('monthlyPrintUsageByPrinter', $this->getMonthlyPrintUsageByPrinter());
        $writer->writeCollectionOfObjectValues('monthlyPrintUsageByUser', $this->getMonthlyPrintUsageByUser());
        $writer->writeObjectValue('security', $this->getSecurity());
    }

    /**
     * Sets the dailyPrintUsageByPrinter property value. The dailyPrintUsageByPrinter property
     *  @param array<PrintUsageByPrinter>|null $value Value to set for the dailyPrintUsageByPrinter property.
    */
    public function setDailyPrintUsageByPrinter(?array $value): void {
        $this->getBackingStore()->set('dailyPrintUsageByPrinter', $value);
    }

    /**
     * Sets the dailyPrintUsageByUser property value. The dailyPrintUsageByUser property
     *  @param array<PrintUsageByUser>|null $value Value to set for the dailyPrintUsageByUser property.
    */
    public function setDailyPrintUsageByUser(?array $value): void {
        $this->getBackingStore()->set('dailyPrintUsageByUser', $value);
    }

    /**
     * Sets the monthlyPrintUsageByPrinter property value. The monthlyPrintUsageByPrinter property
     *  @param array<PrintUsageByPrinter>|null $value Value to set for the monthlyPrintUsageByPrinter property.
    */
    public function setMonthlyPrintUsageByPrinter(?array $value): void {
        $this->getBackingStore()->set('monthlyPrintUsageByPrinter', $value);
    }

    /**
     * Sets the monthlyPrintUsageByUser property value. The monthlyPrintUsageByUser property
     *  @param array<PrintUsageByUser>|null $value Value to set for the monthlyPrintUsageByUser property.
    */
    public function setMonthlyPrintUsageByUser(?array $value): void {
        $this->getBackingStore()->set('monthlyPrintUsageByUser', $value);
    }

    /**
     * Sets the security property value. The security property
     *  @param SecurityReportsRoot|null $value Value to set for the security property.
    */
    public function setSecurity(?SecurityReportsRoot $value): void {
        $this->getBackingStore()->set('security', $value);
    }

}
