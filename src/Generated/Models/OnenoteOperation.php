<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnenoteOperation extends Operation implements Parsable 
{
    /**
     * @var OnenoteOperationError|null $error The error returned by the operation.
    */
    private ?OnenoteOperationError $error = null;
    
    /**
     * @var string|null $percentComplete The operation percent complete if the operation is still in running status.
    */
    private ?string $percentComplete = null;
    
    /**
     * @var string|null $resourceId The resource id.
    */
    private ?string $resourceId = null;
    
    /**
     * @var string|null $resourceLocation The resource URI for the object. For example, the resource URI for a copied page or section.
    */
    private ?string $resourceLocation = null;
    
    /**
     * Instantiates a new OnenoteOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onenoteOperation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnenoteOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnenoteOperation {
        return new OnenoteOperation();
    }

    /**
     * Gets the error property value. The error returned by the operation.
     * @return OnenoteOperationError|null
    */
    public function getError(): ?OnenoteOperationError {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'error' => function (ParseNode $n) use ($o) { $o->setError($n->getObjectValue(array(OnenoteOperationError::class, 'createFromDiscriminatorValue'))); },
            'percentComplete' => function (ParseNode $n) use ($o) { $o->setPercentComplete($n->getStringValue()); },
            'resourceId' => function (ParseNode $n) use ($o) { $o->setResourceId($n->getStringValue()); },
            'resourceLocation' => function (ParseNode $n) use ($o) { $o->setResourceLocation($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the percentComplete property value. The operation percent complete if the operation is still in running status.
     * @return string|null
    */
    public function getPercentComplete(): ?string {
        return $this->percentComplete;
    }

    /**
     * Gets the resourceId property value. The resource id.
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Gets the resourceLocation property value. The resource URI for the object. For example, the resource URI for a copied page or section.
     * @return string|null
    */
    public function getResourceLocation(): ?string {
        return $this->resourceLocation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeStringValue('percentComplete', $this->percentComplete);
        $writer->writeStringValue('resourceId', $this->resourceId);
        $writer->writeStringValue('resourceLocation', $this->resourceLocation);
    }

    /**
     * Sets the error property value. The error returned by the operation.
     *  @param OnenoteOperationError|null $value Value to set for the error property.
    */
    public function setError(?OnenoteOperationError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the percentComplete property value. The operation percent complete if the operation is still in running status.
     *  @param string|null $value Value to set for the percentComplete property.
    */
    public function setPercentComplete(?string $value ): void {
        $this->percentComplete = $value;
    }

    /**
     * Sets the resourceId property value. The resource id.
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

    /**
     * Sets the resourceLocation property value. The resource URI for the object. For example, the resource URI for a copied page or section.
     *  @param string|null $value Value to set for the resourceLocation property.
    */
    public function setResourceLocation(?string $value ): void {
        $this->resourceLocation = $value;
    }

}
