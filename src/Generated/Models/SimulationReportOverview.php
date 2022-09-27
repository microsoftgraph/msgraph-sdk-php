<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SimulationReportOverview implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<RecommendedAction>|null $recommendedActions The recommendedActions property
    */
    private ?array $recommendedActions = null;
    
    /**
     * @var int|null $resolvedTargetsCount The resolvedTargetsCount property
    */
    private ?int $resolvedTargetsCount = null;
    
    /**
     * @var SimulationEventsContent|null $simulationEventsContent The simulationEventsContent property
    */
    private ?SimulationEventsContent $simulationEventsContent = null;
    
    /**
     * @var TrainingEventsContent|null $trainingEventsContent The trainingEventsContent property
    */
    private ?TrainingEventsContent $trainingEventsContent = null;
    
    /**
     * Instantiates a new simulationReportOverview and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.simulationReportOverview');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'recommendedActions' => function (ParseNode $n) use ($o) { $o->setRecommendedActions($n->getCollectionOfObjectValues(array(RecommendedAction::class, 'createFromDiscriminatorValue'))); },
            'resolvedTargetsCount' => function (ParseNode $n) use ($o) { $o->setResolvedTargetsCount($n->getIntegerValue()); },
            'simulationEventsContent' => function (ParseNode $n) use ($o) { $o->setSimulationEventsContent($n->getObjectValue(array(SimulationEventsContent::class, 'createFromDiscriminatorValue'))); },
            'trainingEventsContent' => function (ParseNode $n) use ($o) { $o->setTrainingEventsContent($n->getObjectValue(array(TrainingEventsContent::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the recommendedActions property value. The recommendedActions property
     * @return array<RecommendedAction>|null
    */
    public function getRecommendedActions(): ?array {
        return $this->recommendedActions;
    }

    /**
     * Gets the resolvedTargetsCount property value. The resolvedTargetsCount property
     * @return int|null
    */
    public function getResolvedTargetsCount(): ?int {
        return $this->resolvedTargetsCount;
    }

    /**
     * Gets the simulationEventsContent property value. The simulationEventsContent property
     * @return SimulationEventsContent|null
    */
    public function getSimulationEventsContent(): ?SimulationEventsContent {
        return $this->simulationEventsContent;
    }

    /**
     * Gets the trainingEventsContent property value. The trainingEventsContent property
     * @return TrainingEventsContent|null
    */
    public function getTrainingEventsContent(): ?TrainingEventsContent {
        return $this->trainingEventsContent;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('recommendedActions', $this->recommendedActions);
        $writer->writeIntegerValue('resolvedTargetsCount', $this->resolvedTargetsCount);
        $writer->writeObjectValue('simulationEventsContent', $this->simulationEventsContent);
        $writer->writeObjectValue('trainingEventsContent', $this->trainingEventsContent);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the recommendedActions property value. The recommendedActions property
     *  @param array<RecommendedAction>|null $value Value to set for the recommendedActions property.
    */
    public function setRecommendedActions(?array $value ): void {
        $this->recommendedActions = $value;
    }

    /**
     * Sets the resolvedTargetsCount property value. The resolvedTargetsCount property
     *  @param int|null $value Value to set for the resolvedTargetsCount property.
    */
    public function setResolvedTargetsCount(?int $value ): void {
        $this->resolvedTargetsCount = $value;
    }

    /**
     * Sets the simulationEventsContent property value. The simulationEventsContent property
     *  @param SimulationEventsContent|null $value Value to set for the simulationEventsContent property.
    */
    public function setSimulationEventsContent(?SimulationEventsContent $value ): void {
        $this->simulationEventsContent = $value;
    }

    /**
     * Sets the trainingEventsContent property value. The trainingEventsContent property
     *  @param TrainingEventsContent|null $value Value to set for the trainingEventsContent property.
    */
    public function setTrainingEventsContent(?TrainingEventsContent $value ): void {
        $this->trainingEventsContent = $value;
    }

}
