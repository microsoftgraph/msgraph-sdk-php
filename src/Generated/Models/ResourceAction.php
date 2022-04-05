<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResourceAction implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $allowedResourceActions Allowed Actions */
    private ?array $allowedResourceActions = null;
    
    /** @var array<string>|null $notAllowedResourceActions Not Allowed Actions. */
    private ?array $notAllowedResourceActions = null;
    
    /**
     * Instantiates a new resourceAction and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResourceAction
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ResourceAction {
        return new ResourceAction();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedResourceActions property value. Allowed Actions
     * @return array<string>|null
    */
    public function getAllowedResourceActions(): ?array {
        return $this->allowedResourceActions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'allowedResourceActions' => function (self $o, ParseNode $n) { $o->setAllowedResourceActions($n->getCollectionOfPrimitiveValues()); },
            'notAllowedResourceActions' => function (self $o, ParseNode $n) { $o->setNotAllowedResourceActions($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the notAllowedResourceActions property value. Not Allowed Actions.
     * @return array<string>|null
    */
    public function getNotAllowedResourceActions(): ?array {
        return $this->notAllowedResourceActions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('allowedResourceActions', $this->allowedResourceActions);
        $writer->writeCollectionOfPrimitiveValues('notAllowedResourceActions', $this->notAllowedResourceActions);
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
     * Sets the allowedResourceActions property value. Allowed Actions
     *  @param array<string>|null $value Value to set for the allowedResourceActions property.
    */
    public function setAllowedResourceActions(?array $value ): void {
        $this->allowedResourceActions = $value;
    }

    /**
     * Sets the notAllowedResourceActions property value. Not Allowed Actions.
     *  @param array<string>|null $value Value to set for the notAllowedResourceActions property.
    */
    public function setNotAllowedResourceActions(?array $value ): void {
        $this->notAllowedResourceActions = $value;
    }

}
