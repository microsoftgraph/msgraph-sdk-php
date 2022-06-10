<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EscapedPrint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<PrintConnector>|null $connectors The list of available print connectors.
    */
    private ?array $connectors = null;
    
    /**
     * @var array<PrintOperation>|null $operations The list of print long running operations.
    */
    private ?array $operations = null;
    
    /**
     * @var array<Printer>|null $printers The list of printers registered in the tenant.
    */
    private ?array $printers = null;
    
    /**
     * @var array<PrintService>|null $services The list of available Universal Print service endpoints.
    */
    private ?array $services = null;
    
    /**
     * @var PrintSettings|null $settings Tenant-wide settings for the Universal Print service.
    */
    private ?PrintSettings $settings = null;
    
    /**
     * @var array<PrinterShare>|null $shares The list of printer shares registered in the tenant.
    */
    private ?array $shares = null;
    
    /**
     * @var array<PrintTaskDefinition>|null $taskDefinitions List of abstract definition for a task that can be triggered when various events occur within Universal Print.
    */
    private ?array $taskDefinitions = null;
    
    /**
     * Instantiates a new EscapedPrint and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EscapedPrint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EscapedPrint {
        return new EscapedPrint();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the connectors property value. The list of available print connectors.
     * @return array<PrintConnector>|null
    */
    public function getConnectors(): ?array {
        return $this->connectors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'connectors' => function (ParseNode $n) use ($o) { $o->setConnectors($n->getCollectionOfObjectValues(array(PrintConnector::class, 'createFromDiscriminatorValue'))); },
            'operations' => function (ParseNode $n) use ($o) { $o->setOperations($n->getCollectionOfObjectValues(array(PrintOperation::class, 'createFromDiscriminatorValue'))); },
            'printers' => function (ParseNode $n) use ($o) { $o->setPrinters($n->getCollectionOfObjectValues(array(Printer::class, 'createFromDiscriminatorValue'))); },
            'services' => function (ParseNode $n) use ($o) { $o->setServices($n->getCollectionOfObjectValues(array(PrintService::class, 'createFromDiscriminatorValue'))); },
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getObjectValue(array(PrintSettings::class, 'createFromDiscriminatorValue'))); },
            'shares' => function (ParseNode $n) use ($o) { $o->setShares($n->getCollectionOfObjectValues(array(PrinterShare::class, 'createFromDiscriminatorValue'))); },
            'taskDefinitions' => function (ParseNode $n) use ($o) { $o->setTaskDefinitions($n->getCollectionOfObjectValues(array(PrintTaskDefinition::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the operations property value. The list of print long running operations.
     * @return array<PrintOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the printers property value. The list of printers registered in the tenant.
     * @return array<Printer>|null
    */
    public function getPrinters(): ?array {
        return $this->printers;
    }

    /**
     * Gets the services property value. The list of available Universal Print service endpoints.
     * @return array<PrintService>|null
    */
    public function getServices(): ?array {
        return $this->services;
    }

    /**
     * Gets the settings property value. Tenant-wide settings for the Universal Print service.
     * @return PrintSettings|null
    */
    public function getSettings(): ?PrintSettings {
        return $this->settings;
    }

    /**
     * Gets the shares property value. The list of printer shares registered in the tenant.
     * @return array<PrinterShare>|null
    */
    public function getShares(): ?array {
        return $this->shares;
    }

    /**
     * Gets the taskDefinitions property value. List of abstract definition for a task that can be triggered when various events occur within Universal Print.
     * @return array<PrintTaskDefinition>|null
    */
    public function getTaskDefinitions(): ?array {
        return $this->taskDefinitions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('connectors', $this->connectors);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeCollectionOfObjectValues('printers', $this->printers);
        $writer->writeCollectionOfObjectValues('services', $this->services);
        $writer->writeObjectValue('settings', $this->settings);
        $writer->writeCollectionOfObjectValues('shares', $this->shares);
        $writer->writeCollectionOfObjectValues('taskDefinitions', $this->taskDefinitions);
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
     * Sets the connectors property value. The list of available print connectors.
     *  @param array<PrintConnector>|null $value Value to set for the connectors property.
    */
    public function setConnectors(?array $value ): void {
        $this->connectors = $value;
    }

    /**
     * Sets the operations property value. The list of print long running operations.
     *  @param array<PrintOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the printers property value. The list of printers registered in the tenant.
     *  @param array<Printer>|null $value Value to set for the printers property.
    */
    public function setPrinters(?array $value ): void {
        $this->printers = $value;
    }

    /**
     * Sets the services property value. The list of available Universal Print service endpoints.
     *  @param array<PrintService>|null $value Value to set for the services property.
    */
    public function setServices(?array $value ): void {
        $this->services = $value;
    }

    /**
     * Sets the settings property value. Tenant-wide settings for the Universal Print service.
     *  @param PrintSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?PrintSettings $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the shares property value. The list of printer shares registered in the tenant.
     *  @param array<PrinterShare>|null $value Value to set for the shares property.
    */
    public function setShares(?array $value ): void {
        $this->shares = $value;
    }

    /**
     * Sets the taskDefinitions property value. List of abstract definition for a task that can be triggered when various events occur within Universal Print.
     *  @param array<PrintTaskDefinition>|null $value Value to set for the taskDefinitions property.
    */
    public function setTaskDefinitions(?array $value ): void {
        $this->taskDefinitions = $value;
    }

}
