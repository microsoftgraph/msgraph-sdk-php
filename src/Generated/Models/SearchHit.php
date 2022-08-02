<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SearchHit implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $contentSource The name of the content source which the externalItem is part of .
    */
    private ?string $contentSource = null;
    
    /**
     * @var string|null $hitId The internal identifier for the item. The format of the identifier varies based on the entity type. For details, see hitId format.
    */
    private ?string $hitId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $rank The rank or the order of the result.
    */
    private ?int $rank = null;
    
    /**
     * @var Entity|null $resource The resource property
    */
    private ?Entity $resource = null;
    
    /**
     * @var string|null $resultTemplateId ID of the result template for rendering the search result. This ID must map to a display layout in the resultTemplates dictionary, included in the searchresponse as well.
    */
    private ?string $resultTemplateId = null;
    
    /**
     * @var string|null $summary A summary of the result, if a summary is available.
    */
    private ?string $summary = null;
    
    /**
     * Instantiates a new searchHit and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.searchHit');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchHit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchHit {
        return new SearchHit();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contentSource property value. The name of the content source which the externalItem is part of .
     * @return string|null
    */
    public function getContentSource(): ?string {
        return $this->contentSource;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentSource' => function (ParseNode $n) use ($o) { $o->setContentSource($n->getStringValue()); },
            'hitId' => function (ParseNode $n) use ($o) { $o->setHitId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'rank' => function (ParseNode $n) use ($o) { $o->setRank($n->getIntegerValue()); },
            'resource' => function (ParseNode $n) use ($o) { $o->setResource($n->getObjectValue(array(Entity::class, 'createFromDiscriminatorValue'))); },
            'resultTemplateId' => function (ParseNode $n) use ($o) { $o->setResultTemplateId($n->getStringValue()); },
            'summary' => function (ParseNode $n) use ($o) { $o->setSummary($n->getStringValue()); },
        ];
    }

    /**
     * Gets the hitId property value. The internal identifier for the item. The format of the identifier varies based on the entity type. For details, see hitId format.
     * @return string|null
    */
    public function getHitId(): ?string {
        return $this->hitId;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the rank property value. The rank or the order of the result.
     * @return int|null
    */
    public function getRank(): ?int {
        return $this->rank;
    }

    /**
     * Gets the resource property value. The resource property
     * @return Entity|null
    */
    public function getResource(): ?Entity {
        return $this->resource;
    }

    /**
     * Gets the resultTemplateId property value. ID of the result template for rendering the search result. This ID must map to a display layout in the resultTemplates dictionary, included in the searchresponse as well.
     * @return string|null
    */
    public function getResultTemplateId(): ?string {
        return $this->resultTemplateId;
    }

    /**
     * Gets the summary property value. A summary of the result, if a summary is available.
     * @return string|null
    */
    public function getSummary(): ?string {
        return $this->summary;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contentSource', $this->contentSource);
        $writer->writeStringValue('hitId', $this->hitId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('rank', $this->rank);
        $writer->writeObjectValue('resource', $this->resource);
        $writer->writeStringValue('resultTemplateId', $this->resultTemplateId);
        $writer->writeStringValue('summary', $this->summary);
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
     * Sets the contentSource property value. The name of the content source which the externalItem is part of .
     *  @param string|null $value Value to set for the contentSource property.
    */
    public function setContentSource(?string $value ): void {
        $this->contentSource = $value;
    }

    /**
     * Sets the hitId property value. The internal identifier for the item. The format of the identifier varies based on the entity type. For details, see hitId format.
     *  @param string|null $value Value to set for the hitId property.
    */
    public function setHitId(?string $value ): void {
        $this->hitId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the rank property value. The rank or the order of the result.
     *  @param int|null $value Value to set for the rank property.
    */
    public function setRank(?int $value ): void {
        $this->rank = $value;
    }

    /**
     * Sets the resource property value. The resource property
     *  @param Entity|null $value Value to set for the resource property.
    */
    public function setResource(?Entity $value ): void {
        $this->resource = $value;
    }

    /**
     * Sets the resultTemplateId property value. ID of the result template for rendering the search result. This ID must map to a display layout in the resultTemplates dictionary, included in the searchresponse as well.
     *  @param string|null $value Value to set for the resultTemplateId property.
    */
    public function setResultTemplateId(?string $value ): void {
        $this->resultTemplateId = $value;
    }

    /**
     * Sets the summary property value. A summary of the result, if a summary is available.
     *  @param string|null $value Value to set for the summary property.
    */
    public function setSummary(?string $value ): void {
        $this->summary = $value;
    }

}
