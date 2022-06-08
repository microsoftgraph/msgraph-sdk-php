<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReportRoot extends Entity implements Parsable 
{
    /**
     * @var array<PrintUsageByPrinter>|null $dailyPrintUsageByPrinter The dailyPrintUsageByPrinter property
    */
    private ?array $dailyPrintUsageByPrinter = null;
    
    /**
     * @var array<PrintUsageByUser>|null $dailyPrintUsageByUser The dailyPrintUsageByUser property
    */
    private ?array $dailyPrintUsageByUser = null;
    
    /**
     * @var array<PrintUsageByPrinter>|null $monthlyPrintUsageByPrinter The monthlyPrintUsageByPrinter property
    */
    private ?array $monthlyPrintUsageByPrinter = null;
    
    /**
     * @var array<PrintUsageByUser>|null $monthlyPrintUsageByUser The monthlyPrintUsageByUser property
    */
    private ?array $monthlyPrintUsageByUser = null;
    
    /**
     * Instantiates a new reportRoot and sets the default values.
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
        return $this->dailyPrintUsageByPrinter;
    }

    /**
     * Gets the dailyPrintUsageByUser property value. The dailyPrintUsageByUser property
     * @return array<PrintUsageByUser>|null
    */
    public function getDailyPrintUsageByUser(): ?array {
        return $this->dailyPrintUsageByUser;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dailyPrintUsageByPrinter' => function (ParseNode $n) use ($o) { $o->setDailyPrintUsageByPrinter($n->getCollectionOfObjectValues(array(PrintUsageByPrinter::class, 'createFromDiscriminatorValue'))); },
            'dailyPrintUsageByUser' => function (ParseNode $n) use ($o) { $o->setDailyPrintUsageByUser($n->getCollectionOfObjectValues(array(PrintUsageByUser::class, 'createFromDiscriminatorValue'))); },
            'monthlyPrintUsageByPrinter' => function (ParseNode $n) use ($o) { $o->setMonthlyPrintUsageByPrinter($n->getCollectionOfObjectValues(array(PrintUsageByPrinter::class, 'createFromDiscriminatorValue'))); },
            'monthlyPrintUsageByUser' => function (ParseNode $n) use ($o) { $o->setMonthlyPrintUsageByUser($n->getCollectionOfObjectValues(array(PrintUsageByUser::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the monthlyPrintUsageByPrinter property value. The monthlyPrintUsageByPrinter property
     * @return array<PrintUsageByPrinter>|null
    */
    public function getMonthlyPrintUsageByPrinter(): ?array {
        return $this->monthlyPrintUsageByPrinter;
    }

    /**
     * Gets the monthlyPrintUsageByUser property value. The monthlyPrintUsageByUser property
     * @return array<PrintUsageByUser>|null
    */
    public function getMonthlyPrintUsageByUser(): ?array {
        return $this->monthlyPrintUsageByUser;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('dailyPrintUsageByPrinter', $this->dailyPrintUsageByPrinter);
        $writer->writeCollectionOfObjectValues('dailyPrintUsageByUser', $this->dailyPrintUsageByUser);
        $writer->writeCollectionOfObjectValues('monthlyPrintUsageByPrinter', $this->monthlyPrintUsageByPrinter);
        $writer->writeCollectionOfObjectValues('monthlyPrintUsageByUser', $this->monthlyPrintUsageByUser);
    }

    /**
     * Sets the dailyPrintUsageByPrinter property value. The dailyPrintUsageByPrinter property
     *  @param array<PrintUsageByPrinter>|null $value Value to set for the dailyPrintUsageByPrinter property.
    */
    public function setDailyPrintUsageByPrinter(?array $value ): void {
        $this->dailyPrintUsageByPrinter = $value;
    }

    /**
     * Sets the dailyPrintUsageByUser property value. The dailyPrintUsageByUser property
     *  @param array<PrintUsageByUser>|null $value Value to set for the dailyPrintUsageByUser property.
    */
    public function setDailyPrintUsageByUser(?array $value ): void {
        $this->dailyPrintUsageByUser = $value;
    }

    /**
     * Sets the monthlyPrintUsageByPrinter property value. The monthlyPrintUsageByPrinter property
     *  @param array<PrintUsageByPrinter>|null $value Value to set for the monthlyPrintUsageByPrinter property.
    */
    public function setMonthlyPrintUsageByPrinter(?array $value ): void {
        $this->monthlyPrintUsageByPrinter = $value;
    }

    /**
     * Sets the monthlyPrintUsageByUser property value. The monthlyPrintUsageByUser property
     *  @param array<PrintUsageByUser>|null $value Value to set for the monthlyPrintUsageByUser property.
    */
    public function setMonthlyPrintUsageByUser(?array $value ): void {
        $this->monthlyPrintUsageByUser = $value;
    }

}
