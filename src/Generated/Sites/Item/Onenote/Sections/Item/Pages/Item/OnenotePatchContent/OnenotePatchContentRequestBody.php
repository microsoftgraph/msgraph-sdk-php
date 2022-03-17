<?php

namespace Microsoft\Graph\Generated\Sites\Item\Onenote\Sections\Item\Pages\Item\OnenotePatchContent;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\OnenotePatchContentCommand;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnenotePatchContentRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<OnenotePatchContentCommand>|null $commands  */
    private ?array $commands = null;
    
    /**
     * Instantiates a new onenotePatchContentRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnenotePatchContentRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OnenotePatchContentRequestBody {
        return new OnenotePatchContentRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the commands property value. 
     * @return array<OnenotePatchContentCommand>|null
    */
    public function getCommands(): ?array {
        return $this->commands;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'commands' => function (self $o, ParseNode $n) { $o->setCommands($n->getCollectionOfObjectValues(OnenotePatchContentCommand::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('commands', $this->commands);
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
     * Sets the commands property value. 
     *  @param array<OnenotePatchContentCommand>|null $value Value to set for the commands property.
    */
    public function setCommands(?array $value ): void {
        $this->commands = $value;
    }

}
