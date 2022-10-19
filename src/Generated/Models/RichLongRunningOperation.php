<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RichLongRunningOperation extends LongRunningOperation implements Parsable 
{
    /**
     * @var PublicError|null $error Error that caused the operation to fail.
    */
    private ?PublicError $error = null;
    
    /**
     * @var int|null $percentageComplete A value between 0 and 100 that indicates the progress of the operation.
    */
    private ?int $percentageComplete = null;
    
    /**
     * @var string|null $resourceId The unique identifier for the result.
    */
    private ?string $resourceId = null;
    
    /**
     * @var string|null $type The type of the operation.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new RichLongRunningOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.richLongRunningOperation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RichLongRunningOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RichLongRunningOperation {
        return new RichLongRunningOperation();
    }

    /**
     * Gets the error property value. Error that caused the operation to fail.
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            'percentageComplete' => fn(ParseNode $n) => $o->setPercentageComplete($n->getIntegerValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the percentageComplete property value. A value between 0 and 100 that indicates the progress of the operation.
     * @return int|null
    */
    public function getPercentageComplete(): ?int {
        return $this->percentageComplete;
    }

    /**
     * Gets the resourceId property value. The unique identifier for the result.
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Gets the type property value. The type of the operation.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeIntegerValue('percentageComplete', $this->percentageComplete);
        $writer->writeStringValue('resourceId', $this->resourceId);
        $writer->writeStringValue('type', $this->type);
    }

    /**
     * Sets the error property value. Error that caused the operation to fail.
     *  @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the percentageComplete property value. A value between 0 and 100 that indicates the progress of the operation.
     *  @param int|null $value Value to set for the percentageComplete property.
    */
    public function setPercentageComplete(?int $value ): void {
        $this->percentageComplete = $value;
    }

    /**
     * Sets the resourceId property value. The unique identifier for the result.
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

    /**
     * Sets the type property value. The type of the operation.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
