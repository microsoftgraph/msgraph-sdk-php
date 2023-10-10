<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EscapedPrint implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EscapedPrint and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the connectors property value. The list of available print connectors.
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
        return  [
            'connectors' => fn(ParseNode $n) => $o->setConnectors($n->getCollectionOfObjectValues([PrintConnector::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([PrintOperation::class, 'createFromDiscriminatorValue'])),
            'printers' => fn(ParseNode $n) => $o->setPrinters($n->getCollectionOfObjectValues([Printer::class, 'createFromDiscriminatorValue'])),
            'services' => fn(ParseNode $n) => $o->setServices($n->getCollectionOfObjectValues([PrintService::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([PrintSettings::class, 'createFromDiscriminatorValue'])),
            'shares' => fn(ParseNode $n) => $o->setShares($n->getCollectionOfObjectValues([PrinterShare::class, 'createFromDiscriminatorValue'])),
            'taskDefinitions' => fn(ParseNode $n) => $o->setTaskDefinitions($n->getCollectionOfObjectValues([PrintTaskDefinition::class, 'createFromDiscriminatorValue'])),
        ];
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
     * Gets the operations property value. The list of print long running operations.
     * @return array<PrintOperation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintOperation::class);
            /** @var array<PrintOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Gets the printers property value. The list of printers registered in the tenant.
     * @return array<Printer>|null
    */
    public function getPrinters(): ?array {
        $val = $this->getBackingStore()->get('printers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Printer::class);
            /** @var array<Printer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'printers'");
    }

    /**
     * Gets the services property value. The list of available Universal Print service endpoints.
     * @return array<PrintService>|null
    */
    public function getServices(): ?array {
        $val = $this->getBackingStore()->get('services');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintService::class);
            /** @var array<PrintService>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'services'");
    }

    /**
     * Gets the settings property value. Tenant-wide settings for the Universal Print service.
     * @return PrintSettings|null
    */
    public function getSettings(): ?PrintSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof PrintSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the shares property value. The list of printer shares registered in the tenant.
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
     * Gets the taskDefinitions property value. List of abstract definition for a task that can be triggered when various events occur within Universal Print.
     * @return array<PrintTaskDefinition>|null
    */
    public function getTaskDefinitions(): ?array {
        $val = $this->getBackingStore()->get('taskDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintTaskDefinition::class);
            /** @var array<PrintTaskDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taskDefinitions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('connectors', $this->getConnectors());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('printers', $this->getPrinters());
        $writer->writeCollectionOfObjectValues('services', $this->getServices());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeCollectionOfObjectValues('shares', $this->getShares());
        $writer->writeCollectionOfObjectValues('taskDefinitions', $this->getTaskDefinitions());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the connectors property value. The list of available print connectors.
     * @param array<PrintConnector>|null $value Value to set for the connectors property.
    */
    public function setConnectors(?array $value): void {
        $this->getBackingStore()->set('connectors', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operations property value. The list of print long running operations.
     * @param array<PrintOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the printers property value. The list of printers registered in the tenant.
     * @param array<Printer>|null $value Value to set for the printers property.
    */
    public function setPrinters(?array $value): void {
        $this->getBackingStore()->set('printers', $value);
    }

    /**
     * Sets the services property value. The list of available Universal Print service endpoints.
     * @param array<PrintService>|null $value Value to set for the services property.
    */
    public function setServices(?array $value): void {
        $this->getBackingStore()->set('services', $value);
    }

    /**
     * Sets the settings property value. Tenant-wide settings for the Universal Print service.
     * @param PrintSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?PrintSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the shares property value. The list of printer shares registered in the tenant.
     * @param array<PrinterShare>|null $value Value to set for the shares property.
    */
    public function setShares(?array $value): void {
        $this->getBackingStore()->set('shares', $value);
    }

    /**
     * Sets the taskDefinitions property value. List of abstract definition for a task that can be triggered when various events occur within Universal Print.
     * @param array<PrintTaskDefinition>|null $value Value to set for the taskDefinitions property.
    */
    public function setTaskDefinitions(?array $value): void {
        $this->getBackingStore()->set('taskDefinitions', $value);
    }

}
