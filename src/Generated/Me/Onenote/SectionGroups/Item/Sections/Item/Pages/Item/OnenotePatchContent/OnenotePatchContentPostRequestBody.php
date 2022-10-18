<?php

namespace Microsoft\Graph\Generated\Me\Onenote\SectionGroups\Item\Sections\Item\Pages\Item\OnenotePatchContent;

use Microsoft\Graph\Generated\Models\OnenotePatchContentCommand;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnenotePatchContentPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<OnenotePatchContentCommand>|null $commands The commands property
    */
    private ?array $commands = null;
    
    /**
     * Instantiates a new onenotePatchContentPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnenotePatchContentPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnenotePatchContentPostRequestBody {
        return new OnenotePatchContentPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the commands property value. The commands property
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
        $o = $this;
        return  [
            'commands' => fn(ParseNode $n) => $o->setCommands($n->getCollectionOfObjectValues([OnenotePatchContentCommand::class, 'createFromDiscriminatorValue'])),
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
     * Sets the commands property value. The commands property
     *  @param array<OnenotePatchContentCommand>|null $value Value to set for the commands property.
    */
    public function setCommands(?array $value ): void {
        $this->commands = $value;
    }

}
