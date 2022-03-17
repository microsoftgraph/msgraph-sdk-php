<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CallOptions implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $hideBotAfterEscalation  */
    private ?bool $hideBotAfterEscalation = null;
    
    /**
     * Instantiates a new callOptions and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallOptions
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CallOptions {
        return new CallOptions();
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
        return  [
            'hideBotAfterEscalation' => function (self $o, ParseNode $n) { $o->setHideBotAfterEscalation($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the hideBotAfterEscalation property value. 
     * @return bool|null
    */
    public function getHideBotAfterEscalation(): ?bool {
        return $this->hideBotAfterEscalation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('hideBotAfterEscalation', $this->hideBotAfterEscalation);
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
     * Sets the hideBotAfterEscalation property value. 
     *  @param bool|null $value Value to set for the hideBotAfterEscalation property.
    */
    public function setHideBotAfterEscalation(?bool $value ): void {
        $this->hideBotAfterEscalation = $value;
    }

}
