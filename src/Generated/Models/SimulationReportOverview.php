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

class SimulationReportOverview implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SimulationReportOverview and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SimulationReportOverview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SimulationReportOverview {
        return new SimulationReportOverview();
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
            'recommendedActions' => fn(ParseNode $n) => $o->setRecommendedActions($n->getCollectionOfObjectValues([RecommendedAction::class, 'createFromDiscriminatorValue'])),
            'resolvedTargetsCount' => fn(ParseNode $n) => $o->setResolvedTargetsCount($n->getIntegerValue()),
            'simulationEventsContent' => fn(ParseNode $n) => $o->setSimulationEventsContent($n->getObjectValue([SimulationEventsContent::class, 'createFromDiscriminatorValue'])),
            'trainingEventsContent' => fn(ParseNode $n) => $o->setTrainingEventsContent($n->getObjectValue([TrainingEventsContent::class, 'createFromDiscriminatorValue'])),
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
     * Gets the recommendedActions property value. List of recommended actions for a tenant to improve its security posture based on the attack simulation and training campaign attack type.
     * @return array<RecommendedAction>|null
    */
    public function getRecommendedActions(): ?array {
        $val = $this->getBackingStore()->get('recommendedActions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RecommendedAction::class);
            /** @var array<RecommendedAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recommendedActions'");
    }

    /**
     * Gets the resolvedTargetsCount property value. Number of valid users in the attack simulation and training campaign.
     * @return int|null
    */
    public function getResolvedTargetsCount(): ?int {
        $val = $this->getBackingStore()->get('resolvedTargetsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resolvedTargetsCount'");
    }

    /**
     * Gets the simulationEventsContent property value. Summary of simulation events in the attack simulation and training campaign.
     * @return SimulationEventsContent|null
    */
    public function getSimulationEventsContent(): ?SimulationEventsContent {
        $val = $this->getBackingStore()->get('simulationEventsContent');
        if (is_null($val) || $val instanceof SimulationEventsContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simulationEventsContent'");
    }

    /**
     * Gets the trainingEventsContent property value. Summary of assigned trainings in the attack simulation and training campaign.
     * @return TrainingEventsContent|null
    */
    public function getTrainingEventsContent(): ?TrainingEventsContent {
        $val = $this->getBackingStore()->get('trainingEventsContent');
        if (is_null($val) || $val instanceof TrainingEventsContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trainingEventsContent'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('recommendedActions', $this->getRecommendedActions());
        $writer->writeIntegerValue('resolvedTargetsCount', $this->getResolvedTargetsCount());
        $writer->writeObjectValue('simulationEventsContent', $this->getSimulationEventsContent());
        $writer->writeObjectValue('trainingEventsContent', $this->getTrainingEventsContent());
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
     * Sets the recommendedActions property value. List of recommended actions for a tenant to improve its security posture based on the attack simulation and training campaign attack type.
     * @param array<RecommendedAction>|null $value Value to set for the recommendedActions property.
    */
    public function setRecommendedActions(?array $value): void {
        $this->getBackingStore()->set('recommendedActions', $value);
    }

    /**
     * Sets the resolvedTargetsCount property value. Number of valid users in the attack simulation and training campaign.
     * @param int|null $value Value to set for the resolvedTargetsCount property.
    */
    public function setResolvedTargetsCount(?int $value): void {
        $this->getBackingStore()->set('resolvedTargetsCount', $value);
    }

    /**
     * Sets the simulationEventsContent property value. Summary of simulation events in the attack simulation and training campaign.
     * @param SimulationEventsContent|null $value Value to set for the simulationEventsContent property.
    */
    public function setSimulationEventsContent(?SimulationEventsContent $value): void {
        $this->getBackingStore()->set('simulationEventsContent', $value);
    }

    /**
     * Sets the trainingEventsContent property value. Summary of assigned trainings in the attack simulation and training campaign.
     * @param TrainingEventsContent|null $value Value to set for the trainingEventsContent property.
    */
    public function setTrainingEventsContent(?TrainingEventsContent $value): void {
        $this->getBackingStore()->set('trainingEventsContent', $value);
    }

}
