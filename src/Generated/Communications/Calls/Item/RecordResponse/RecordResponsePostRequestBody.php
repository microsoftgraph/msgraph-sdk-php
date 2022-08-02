<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\RecordResponse;

use Microsoft\Graph\Generated\Models\Prompt;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecordResponsePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $bargeInAllowed The bargeInAllowed property
    */
    private ?bool $bargeInAllowed = null;
    
    /**
     * @var string|null $clientContext The clientContext property
    */
    private ?string $clientContext = null;
    
    /**
     * @var int|null $initialSilenceTimeoutInSeconds The initialSilenceTimeoutInSeconds property
    */
    private ?int $initialSilenceTimeoutInSeconds = null;
    
    /**
     * @var int|null $maxRecordDurationInSeconds The maxRecordDurationInSeconds property
    */
    private ?int $maxRecordDurationInSeconds = null;
    
    /**
     * @var int|null $maxSilenceTimeoutInSeconds The maxSilenceTimeoutInSeconds property
    */
    private ?int $maxSilenceTimeoutInSeconds = null;
    
    /**
     * @var bool|null $playBeep The playBeep property
    */
    private ?bool $playBeep = null;
    
    /**
     * @var array<Prompt>|null $prompts The prompts property
    */
    private ?array $prompts = null;
    
    /**
     * @var array<string>|null $stopTones The stopTones property
    */
    private ?array $stopTones = null;
    
    /**
     * Instantiates a new recordResponsePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecordResponsePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecordResponsePostRequestBody {
        return new RecordResponsePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the bargeInAllowed property value. The bargeInAllowed property
     * @return bool|null
    */
    public function getBargeInAllowed(): ?bool {
        return $this->bargeInAllowed;
    }

    /**
     * Gets the clientContext property value. The clientContext property
     * @return string|null
    */
    public function getClientContext(): ?string {
        return $this->clientContext;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bargeInAllowed' => function (ParseNode $n) use ($o) { $o->setBargeInAllowed($n->getBooleanValue()); },
            'clientContext' => function (ParseNode $n) use ($o) { $o->setClientContext($n->getStringValue()); },
            'initialSilenceTimeoutInSeconds' => function (ParseNode $n) use ($o) { $o->setInitialSilenceTimeoutInSeconds($n->getIntegerValue()); },
            'maxRecordDurationInSeconds' => function (ParseNode $n) use ($o) { $o->setMaxRecordDurationInSeconds($n->getIntegerValue()); },
            'maxSilenceTimeoutInSeconds' => function (ParseNode $n) use ($o) { $o->setMaxSilenceTimeoutInSeconds($n->getIntegerValue()); },
            'playBeep' => function (ParseNode $n) use ($o) { $o->setPlayBeep($n->getBooleanValue()); },
            'prompts' => function (ParseNode $n) use ($o) { $o->setPrompts($n->getCollectionOfObjectValues(array(Prompt::class, 'createFromDiscriminatorValue'))); },
            'stopTones' => function (ParseNode $n) use ($o) { $o->setStopTones($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the initialSilenceTimeoutInSeconds property value. The initialSilenceTimeoutInSeconds property
     * @return int|null
    */
    public function getInitialSilenceTimeoutInSeconds(): ?int {
        return $this->initialSilenceTimeoutInSeconds;
    }

    /**
     * Gets the maxRecordDurationInSeconds property value. The maxRecordDurationInSeconds property
     * @return int|null
    */
    public function getMaxRecordDurationInSeconds(): ?int {
        return $this->maxRecordDurationInSeconds;
    }

    /**
     * Gets the maxSilenceTimeoutInSeconds property value. The maxSilenceTimeoutInSeconds property
     * @return int|null
    */
    public function getMaxSilenceTimeoutInSeconds(): ?int {
        return $this->maxSilenceTimeoutInSeconds;
    }

    /**
     * Gets the playBeep property value. The playBeep property
     * @return bool|null
    */
    public function getPlayBeep(): ?bool {
        return $this->playBeep;
    }

    /**
     * Gets the prompts property value. The prompts property
     * @return array<Prompt>|null
    */
    public function getPrompts(): ?array {
        return $this->prompts;
    }

    /**
     * Gets the stopTones property value. The stopTones property
     * @return array<string>|null
    */
    public function getStopTones(): ?array {
        return $this->stopTones;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('bargeInAllowed', $this->bargeInAllowed);
        $writer->writeStringValue('clientContext', $this->clientContext);
        $writer->writeIntegerValue('initialSilenceTimeoutInSeconds', $this->initialSilenceTimeoutInSeconds);
        $writer->writeIntegerValue('maxRecordDurationInSeconds', $this->maxRecordDurationInSeconds);
        $writer->writeIntegerValue('maxSilenceTimeoutInSeconds', $this->maxSilenceTimeoutInSeconds);
        $writer->writeBooleanValue('playBeep', $this->playBeep);
        $writer->writeCollectionOfObjectValues('prompts', $this->prompts);
        $writer->writeCollectionOfPrimitiveValues('stopTones', $this->stopTones);
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
     * Sets the bargeInAllowed property value. The bargeInAllowed property
     *  @param bool|null $value Value to set for the bargeInAllowed property.
    */
    public function setBargeInAllowed(?bool $value ): void {
        $this->bargeInAllowed = $value;
    }

    /**
     * Sets the clientContext property value. The clientContext property
     *  @param string|null $value Value to set for the clientContext property.
    */
    public function setClientContext(?string $value ): void {
        $this->clientContext = $value;
    }

    /**
     * Sets the initialSilenceTimeoutInSeconds property value. The initialSilenceTimeoutInSeconds property
     *  @param int|null $value Value to set for the initialSilenceTimeoutInSeconds property.
    */
    public function setInitialSilenceTimeoutInSeconds(?int $value ): void {
        $this->initialSilenceTimeoutInSeconds = $value;
    }

    /**
     * Sets the maxRecordDurationInSeconds property value. The maxRecordDurationInSeconds property
     *  @param int|null $value Value to set for the maxRecordDurationInSeconds property.
    */
    public function setMaxRecordDurationInSeconds(?int $value ): void {
        $this->maxRecordDurationInSeconds = $value;
    }

    /**
     * Sets the maxSilenceTimeoutInSeconds property value. The maxSilenceTimeoutInSeconds property
     *  @param int|null $value Value to set for the maxSilenceTimeoutInSeconds property.
    */
    public function setMaxSilenceTimeoutInSeconds(?int $value ): void {
        $this->maxSilenceTimeoutInSeconds = $value;
    }

    /**
     * Sets the playBeep property value. The playBeep property
     *  @param bool|null $value Value to set for the playBeep property.
    */
    public function setPlayBeep(?bool $value ): void {
        $this->playBeep = $value;
    }

    /**
     * Sets the prompts property value. The prompts property
     *  @param array<Prompt>|null $value Value to set for the prompts property.
    */
    public function setPrompts(?array $value ): void {
        $this->prompts = $value;
    }

    /**
     * Sets the stopTones property value. The stopTones property
     *  @param array<string>|null $value Value to set for the stopTones property.
    */
    public function setStopTones(?array $value ): void {
        $this->stopTones = $value;
    }

}
