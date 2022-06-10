<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\BatchRecordDecisions;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BatchRecordDecisionsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $decision The decision property
    */
    private ?string $decision = null;
    
    /**
     * @var string|null $justification The justification property
    */
    private ?string $justification = null;
    
    /**
     * @var string|null $principalId The principalId property
    */
    private ?string $principalId = null;
    
    /**
     * @var string|null $resourceId The resourceId property
    */
    private ?string $resourceId = null;
    
    /**
     * Instantiates a new batchRecordDecisionsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BatchRecordDecisionsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BatchRecordDecisionsPostRequestBody {
        return new BatchRecordDecisionsPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the decision property value. The decision property
     * @return string|null
    */
    public function getDecision(): ?string {
        return $this->decision;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'decision' => function (ParseNode $n) use ($o) { $o->setDecision($n->getStringValue()); },
            'justification' => function (ParseNode $n) use ($o) { $o->setJustification($n->getStringValue()); },
            'principalId' => function (ParseNode $n) use ($o) { $o->setPrincipalId($n->getStringValue()); },
            'resourceId' => function (ParseNode $n) use ($o) { $o->setResourceId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the justification property value. The justification property
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->justification;
    }

    /**
     * Gets the principalId property value. The principalId property
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        return $this->principalId;
    }

    /**
     * Gets the resourceId property value. The resourceId property
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('decision', $this->decision);
        $writer->writeStringValue('justification', $this->justification);
        $writer->writeStringValue('principalId', $this->principalId);
        $writer->writeStringValue('resourceId', $this->resourceId);
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
     * Sets the decision property value. The decision property
     *  @param string|null $value Value to set for the decision property.
    */
    public function setDecision(?string $value ): void {
        $this->decision = $value;
    }

    /**
     * Sets the justification property value. The justification property
     *  @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value ): void {
        $this->justification = $value;
    }

    /**
     * Sets the principalId property value. The principalId property
     *  @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value ): void {
        $this->principalId = $value;
    }

    /**
     * Sets the resourceId property value. The resourceId property
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

}
