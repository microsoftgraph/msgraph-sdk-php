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

class SimulationReport implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new simulationReport and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SimulationReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SimulationReport {
        return new SimulationReport();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'overview' => fn(ParseNode $n) => $o->setOverview($n->getObjectValue([SimulationReportOverview::class, 'createFromDiscriminatorValue'])),
            'simulationUsers' => fn(ParseNode $n) => $o->setSimulationUsers($n->getCollectionOfObjectValues([UserSimulationDetails::class, 'createFromDiscriminatorValue'])),
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
     * Gets the overview property value. Overview of an attack simulation and training campaign.
     * @return SimulationReportOverview|null
    */
    public function getOverview(): ?SimulationReportOverview {
        $val = $this->getBackingStore()->get('overview');
        if (is_null($val) || $val instanceof SimulationReportOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'overview'");
    }

    /**
     * Gets the simulationUsers property value. The tenant users and their online actions in an attack simulation and training campaign.
     * @return array<UserSimulationDetails>|null
    */
    public function getSimulationUsers(): ?array {
        $val = $this->getBackingStore()->get('simulationUsers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserSimulationDetails::class);
            /** @var array<UserSimulationDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simulationUsers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('overview', $this->getOverview());
        $writer->writeCollectionOfObjectValues('simulationUsers', $this->getSimulationUsers());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the overview property value. Overview of an attack simulation and training campaign.
     * @param SimulationReportOverview|null $value Value to set for the overview property.
    */
    public function setOverview(?SimulationReportOverview $value): void {
        $this->getBackingStore()->set('overview', $value);
    }

    /**
     * Sets the simulationUsers property value. The tenant users and their online actions in an attack simulation and training campaign.
     * @param array<UserSimulationDetails>|null $value Value to set for the simulationUsers property.
    */
    public function setSimulationUsers(?array $value): void {
        $this->getBackingStore()->set('simulationUsers', $value);
    }

}
