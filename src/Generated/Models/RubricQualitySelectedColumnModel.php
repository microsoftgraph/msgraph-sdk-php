<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RubricQualitySelectedColumnModel implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $columnId ID of the selected level for this quality.
    */
    private ?string $columnId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $qualityId ID of the associated quality.
    */
    private ?string $qualityId = null;
    
    /**
     * Instantiates a new rubricQualitySelectedColumnModel and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.rubricQualitySelectedColumnModel');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RubricQualitySelectedColumnModel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RubricQualitySelectedColumnModel {
        return new RubricQualitySelectedColumnModel();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the columnId property value. ID of the selected level for this quality.
     * @return string|null
    */
    public function getColumnId(): ?string {
        return $this->columnId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'columnId' => function (ParseNode $n) use ($o) { $o->setColumnId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'qualityId' => function (ParseNode $n) use ($o) { $o->setQualityId($n->getStringValue()); },
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
     * Gets the qualityId property value. ID of the associated quality.
     * @return string|null
    */
    public function getQualityId(): ?string {
        return $this->qualityId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('columnId', $this->columnId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('qualityId', $this->qualityId);
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
     * Sets the columnId property value. ID of the selected level for this quality.
     *  @param string|null $value Value to set for the columnId property.
    */
    public function setColumnId(?string $value ): void {
        $this->columnId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the qualityId property value. ID of the associated quality.
     *  @param string|null $value Value to set for the qualityId property.
    */
    public function setQualityId(?string $value ): void {
        $this->qualityId = $value;
    }

}
