<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphRecordResponse;

use Microsoft\Graph\Generated\Models\Prompt;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RecordResponsePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new recordResponsePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
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
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the bargeInAllowed property value. The bargeInAllowed property
     * @return bool|null
    */
    public function getBargeInAllowed(): ?bool {
        return $this->getBackingStore()->get('bargeInAllowed');
    }

    /**
     * Gets the clientContext property value. The clientContext property
     * @return string|null
    */
    public function getClientContext(): ?string {
        return $this->getBackingStore()->get('clientContext');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bargeInAllowed' => fn(ParseNode $n) => $o->setBargeInAllowed($n->getBooleanValue()),
            'clientContext' => fn(ParseNode $n) => $o->setClientContext($n->getStringValue()),
            'initialSilenceTimeoutInSeconds' => fn(ParseNode $n) => $o->setInitialSilenceTimeoutInSeconds($n->getIntegerValue()),
            'maxRecordDurationInSeconds' => fn(ParseNode $n) => $o->setMaxRecordDurationInSeconds($n->getIntegerValue()),
            'maxSilenceTimeoutInSeconds' => fn(ParseNode $n) => $o->setMaxSilenceTimeoutInSeconds($n->getIntegerValue()),
            'playBeep' => fn(ParseNode $n) => $o->setPlayBeep($n->getBooleanValue()),
            'prompts' => fn(ParseNode $n) => $o->setPrompts($n->getCollectionOfObjectValues([Prompt::class, 'createFromDiscriminatorValue'])),
            'stopTones' => fn(ParseNode $n) => $o->setStopTones($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the initialSilenceTimeoutInSeconds property value. The initialSilenceTimeoutInSeconds property
     * @return int|null
    */
    public function getInitialSilenceTimeoutInSeconds(): ?int {
        return $this->getBackingStore()->get('initialSilenceTimeoutInSeconds');
    }

    /**
     * Gets the maxRecordDurationInSeconds property value. The maxRecordDurationInSeconds property
     * @return int|null
    */
    public function getMaxRecordDurationInSeconds(): ?int {
        return $this->getBackingStore()->get('maxRecordDurationInSeconds');
    }

    /**
     * Gets the maxSilenceTimeoutInSeconds property value. The maxSilenceTimeoutInSeconds property
     * @return int|null
    */
    public function getMaxSilenceTimeoutInSeconds(): ?int {
        return $this->getBackingStore()->get('maxSilenceTimeoutInSeconds');
    }

    /**
     * Gets the playBeep property value. The playBeep property
     * @return bool|null
    */
    public function getPlayBeep(): ?bool {
        return $this->getBackingStore()->get('playBeep');
    }

    /**
     * Gets the prompts property value. The prompts property
     * @return array<Prompt>|null
    */
    public function getPrompts(): ?array {
        return $this->getBackingStore()->get('prompts');
    }

    /**
     * Gets the stopTones property value. The stopTones property
     * @return array<string>|null
    */
    public function getStopTones(): ?array {
        return $this->getBackingStore()->get('stopTones');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('bargeInAllowed', $this->getBargeInAllowed());
        $writer->writeStringValue('clientContext', $this->getClientContext());
        $writer->writeIntegerValue('initialSilenceTimeoutInSeconds', $this->getInitialSilenceTimeoutInSeconds());
        $writer->writeIntegerValue('maxRecordDurationInSeconds', $this->getMaxRecordDurationInSeconds());
        $writer->writeIntegerValue('maxSilenceTimeoutInSeconds', $this->getMaxSilenceTimeoutInSeconds());
        $writer->writeBooleanValue('playBeep', $this->getPlayBeep());
        $writer->writeCollectionOfObjectValues('prompts', $this->getPrompts());
        $writer->writeCollectionOfPrimitiveValues('stopTones', $this->getStopTones());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the bargeInAllowed property value. The bargeInAllowed property
     * @param bool|null $value Value to set for the bargeInAllowed property.
    */
    public function setBargeInAllowed(?bool $value): void {
        $this->getBackingStore()->set('bargeInAllowed', $value);
    }

    /**
     * Sets the clientContext property value. The clientContext property
     * @param string|null $value Value to set for the clientContext property.
    */
    public function setClientContext(?string $value): void {
        $this->getBackingStore()->set('clientContext', $value);
    }

    /**
     * Sets the initialSilenceTimeoutInSeconds property value. The initialSilenceTimeoutInSeconds property
     * @param int|null $value Value to set for the initialSilenceTimeoutInSeconds property.
    */
    public function setInitialSilenceTimeoutInSeconds(?int $value): void {
        $this->getBackingStore()->set('initialSilenceTimeoutInSeconds', $value);
    }

    /**
     * Sets the maxRecordDurationInSeconds property value. The maxRecordDurationInSeconds property
     * @param int|null $value Value to set for the maxRecordDurationInSeconds property.
    */
    public function setMaxRecordDurationInSeconds(?int $value): void {
        $this->getBackingStore()->set('maxRecordDurationInSeconds', $value);
    }

    /**
     * Sets the maxSilenceTimeoutInSeconds property value. The maxSilenceTimeoutInSeconds property
     * @param int|null $value Value to set for the maxSilenceTimeoutInSeconds property.
    */
    public function setMaxSilenceTimeoutInSeconds(?int $value): void {
        $this->getBackingStore()->set('maxSilenceTimeoutInSeconds', $value);
    }

    /**
     * Sets the playBeep property value. The playBeep property
     * @param bool|null $value Value to set for the playBeep property.
    */
    public function setPlayBeep(?bool $value): void {
        $this->getBackingStore()->set('playBeep', $value);
    }

    /**
     * Sets the prompts property value. The prompts property
     * @param array<Prompt>|null $value Value to set for the prompts property.
    */
    public function setPrompts(?array $value): void {
        $this->getBackingStore()->set('prompts', $value);
    }

    /**
     * Sets the stopTones property value. The stopTones property
     * @param array<string>|null $value Value to set for the stopTones property.
    */
    public function setStopTones(?array $value): void {
        $this->getBackingStore()->set('stopTones', $value);
    }

}
