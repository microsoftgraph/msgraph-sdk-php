<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecommendedAction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionWebUrl The actionWebUrl property
    */
    private ?string $actionWebUrl = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var float|null $potentialScoreImpact The potentialScoreImpact property
    */
    private ?float $potentialScoreImpact = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new recommendedAction and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.recommendedAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecommendedAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecommendedAction {
        return new RecommendedAction();
    }

    /**
     * Gets the actionWebUrl property value. The actionWebUrl property
     * @return string|null
    */
    public function getActionWebUrl(): ?string {
        return $this->actionWebUrl;
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
            'actionWebUrl' => function (ParseNode $n) use ($o) { $o->setActionWebUrl($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'potentialScoreImpact' => function (ParseNode $n) use ($o) { $o->setPotentialScoreImpact($n->getFloatValue()); },
            'title' => function (ParseNode $n) use ($o) { $o->setTitle($n->getStringValue()); },
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
     * Gets the potentialScoreImpact property value. The potentialScoreImpact property
     * @return float|null
    */
    public function getPotentialScoreImpact(): ?float {
        return $this->potentialScoreImpact;
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionWebUrl', $this->actionWebUrl);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeFloatValue('potentialScoreImpact', $this->potentialScoreImpact);
        $writer->writeStringValue('title', $this->title);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionWebUrl property value. The actionWebUrl property
     *  @param string|null $value Value to set for the actionWebUrl property.
    */
    public function setActionWebUrl(?string $value ): void {
        $this->actionWebUrl = $value;
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
     * Sets the potentialScoreImpact property value. The potentialScoreImpact property
     *  @param float|null $value Value to set for the potentialScoreImpact property.
    */
    public function setPotentialScoreImpact(?float $value ): void {
        $this->potentialScoreImpact = $value;
    }

    /**
     * Sets the title property value. The title property
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

}
