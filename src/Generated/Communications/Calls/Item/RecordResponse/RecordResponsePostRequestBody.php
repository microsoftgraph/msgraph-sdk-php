<?php

namespace Microsoft\\Graph\\Generated\Communications\Calls\Item\RecordResponse;

use Microsoft\\Graph\\Generated\Models\Prompt;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RecordResponsePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RecordResponsePostRequestBody and sets the default values.
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
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
        $val = $this->getBackingStore()->get('bargeInAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bargeInAllowed'");
    }

    /**
     * Gets the clientContext property value. The clientContext property
     * @return string|null
    */
    public function getClientContext(): ?string {
        $val = $this->getBackingStore()->get('clientContext');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientContext'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'stopTones' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setStopTones($val);
            },
        ];
    }

    /**
     * Gets the initialSilenceTimeoutInSeconds property value. The initialSilenceTimeoutInSeconds property
     * @return int|null
    */
    public function getInitialSilenceTimeoutInSeconds(): ?int {
        $val = $this->getBackingStore()->get('initialSilenceTimeoutInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initialSilenceTimeoutInSeconds'");
    }

    /**
     * Gets the maxRecordDurationInSeconds property value. The maxRecordDurationInSeconds property
     * @return int|null
    */
    public function getMaxRecordDurationInSeconds(): ?int {
        $val = $this->getBackingStore()->get('maxRecordDurationInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxRecordDurationInSeconds'");
    }

    /**
     * Gets the maxSilenceTimeoutInSeconds property value. The maxSilenceTimeoutInSeconds property
     * @return int|null
    */
    public function getMaxSilenceTimeoutInSeconds(): ?int {
        $val = $this->getBackingStore()->get('maxSilenceTimeoutInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxSilenceTimeoutInSeconds'");
    }

    /**
     * Gets the playBeep property value. The playBeep property
     * @return bool|null
    */
    public function getPlayBeep(): ?bool {
        $val = $this->getBackingStore()->get('playBeep');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'playBeep'");
    }

    /**
     * Gets the prompts property value. The prompts property
     * @return array<Prompt>|null
    */
    public function getPrompts(): ?array {
        $val = $this->getBackingStore()->get('prompts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Prompt::class);
            /** @var array<Prompt>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'prompts'");
    }

    /**
     * Gets the stopTones property value. The stopTones property
     * @return array<string>|null
    */
    public function getStopTones(): ?array {
        $val = $this->getBackingStore()->get('stopTones');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stopTones'");
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
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
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
