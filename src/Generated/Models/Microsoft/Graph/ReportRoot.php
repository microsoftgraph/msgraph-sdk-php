<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReportRoot extends Entity 
{
    /** @var array<PrintUsageByPrinter>|null $dailyPrintUsageByPrinter  */
    private ?array $dailyPrintUsageByPrinter = null;
    
    /** @var array<PrintUsageByUser>|null $dailyPrintUsageByUser  */
    private ?array $dailyPrintUsageByUser = null;
    
    /** @var array<PrintUsageByPrinter>|null $monthlyPrintUsageByPrinter  */
    private ?array $monthlyPrintUsageByPrinter = null;
    
    /** @var array<PrintUsageByUser>|null $monthlyPrintUsageByUser  */
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): ReportRoot {
        return new ReportRoot();
    }

    /**
     * Gets the dailyPrintUsageByPrinter property value. 
     * @return array<PrintUsageByPrinter>|null
    */
    public function getDailyPrintUsageByPrinter(): ?array {
        return $this->dailyPrintUsageByPrinter;
    }

    /**
     * Gets the dailyPrintUsageByUser property value. 
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
        return array_merge(parent::getFieldDeserializers(), [
            'dailyPrintUsageByPrinter' => function (self $o, ParseNode $n) { $o->setDailyPrintUsageByPrinter($n->getCollectionOfObjectValues(PrintUsageByPrinter::class)); },
            'dailyPrintUsageByUser' => function (self $o, ParseNode $n) { $o->setDailyPrintUsageByUser($n->getCollectionOfObjectValues(PrintUsageByUser::class)); },
            'monthlyPrintUsageByPrinter' => function (self $o, ParseNode $n) { $o->setMonthlyPrintUsageByPrinter($n->getCollectionOfObjectValues(PrintUsageByPrinter::class)); },
            'monthlyPrintUsageByUser' => function (self $o, ParseNode $n) { $o->setMonthlyPrintUsageByUser($n->getCollectionOfObjectValues(PrintUsageByUser::class)); },
        ]);
    }

    /**
     * Gets the monthlyPrintUsageByPrinter property value. 
     * @return array<PrintUsageByPrinter>|null
    */
    public function getMonthlyPrintUsageByPrinter(): ?array {
        return $this->monthlyPrintUsageByPrinter;
    }

    /**
     * Gets the monthlyPrintUsageByUser property value. 
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
     * Sets the dailyPrintUsageByPrinter property value. 
     *  @param array<PrintUsageByPrinter>|null $value Value to set for the dailyPrintUsageByPrinter property.
    */
    public function setDailyPrintUsageByPrinter(?array $value ): void {
        $this->dailyPrintUsageByPrinter = $value;
    }

    /**
     * Sets the dailyPrintUsageByUser property value. 
     *  @param array<PrintUsageByUser>|null $value Value to set for the dailyPrintUsageByUser property.
    */
    public function setDailyPrintUsageByUser(?array $value ): void {
        $this->dailyPrintUsageByUser = $value;
    }

    /**
     * Sets the monthlyPrintUsageByPrinter property value. 
     *  @param array<PrintUsageByPrinter>|null $value Value to set for the monthlyPrintUsageByPrinter property.
    */
    public function setMonthlyPrintUsageByPrinter(?array $value ): void {
        $this->monthlyPrintUsageByPrinter = $value;
    }

    /**
     * Sets the monthlyPrintUsageByUser property value. 
     *  @param array<PrintUsageByUser>|null $value Value to set for the monthlyPrintUsageByUser property.
    */
    public function setMonthlyPrintUsageByUser(?array $value ): void {
        $this->monthlyPrintUsageByUser = $value;
    }

}
