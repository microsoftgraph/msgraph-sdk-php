<?php

namespace Microsoft\Graph\Communications\Calls\Item\Participants\Item\StartHoldMusic;

use Microsoft\Graph\Models\Prompt;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StartHoldMusicPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $clientContext The clientContext property
    */
    private ?string $clientContext = null;
    
    /**
     * @var Prompt|null $customPrompt The customPrompt property
    */
    private ?Prompt $customPrompt = null;
    
    /**
     * Instantiates a new startHoldMusicPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StartHoldMusicPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StartHoldMusicPostRequestBody {
        return new StartHoldMusicPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the clientContext property value. The clientContext property
     * @return string|null
    */
    public function getClientContext(): ?string {
        return $this->clientContext;
    }

    /**
     * Gets the customPrompt property value. The customPrompt property
     * @return Prompt|null
    */
    public function getCustomPrompt(): ?Prompt {
        return $this->customPrompt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clientContext' => function (ParseNode $n) use ($o) { $o->setClientContext($n->getStringValue()); },
            'customPrompt' => function (ParseNode $n) use ($o) { $o->setCustomPrompt($n->getObjectValue(array(Prompt::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clientContext', $this->clientContext);
        $writer->writeObjectValue('customPrompt', $this->customPrompt);
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
     * Sets the clientContext property value. The clientContext property
     *  @param string|null $value Value to set for the clientContext property.
    */
    public function setClientContext(?string $value ): void {
        $this->clientContext = $value;
    }

    /**
     * Sets the customPrompt property value. The customPrompt property
     *  @param Prompt|null $value Value to set for the customPrompt property.
    */
    public function setCustomPrompt(?Prompt $value ): void {
        $this->customPrompt = $value;
    }

}
