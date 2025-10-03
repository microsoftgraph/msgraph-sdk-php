<?php

namespace Microsoft\\Graph\\Generated\Communications\Calls\Item\SendDtmfTones;

use Microsoft\\Graph\\Generated\Models\Tone;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SendDtmfTonesPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SendDtmfTonesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendDtmfTonesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendDtmfTonesPostRequestBody {
        return new SendDtmfTonesPostRequestBody();
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
     * Gets the delayBetweenTonesMs property value. The delayBetweenTonesMs property
     * @return int|null
    */
    public function getDelayBetweenTonesMs(): ?int {
        $val = $this->getBackingStore()->get('delayBetweenTonesMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delayBetweenTonesMs'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clientContext' => fn(ParseNode $n) => $o->setClientContext($n->getStringValue()),
            'delayBetweenTonesMs' => fn(ParseNode $n) => $o->setDelayBetweenTonesMs($n->getIntegerValue()),
            'tones' => fn(ParseNode $n) => $o->setTones($n->getCollectionOfEnumValues(Tone::class)),
        ];
    }

    /**
     * Gets the tones property value. The tones property
     * @return array<Tone>|null
    */
    public function getTones(): ?array {
        $val = $this->getBackingStore()->get('tones');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Tone::class);
            /** @var array<Tone>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tones'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clientContext', $this->getClientContext());
        $writer->writeIntegerValue('delayBetweenTonesMs', $this->getDelayBetweenTonesMs());
        $writer->writeCollectionOfEnumValues('tones', $this->getTones());
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
     * Sets the clientContext property value. The clientContext property
     * @param string|null $value Value to set for the clientContext property.
    */
    public function setClientContext(?string $value): void {
        $this->getBackingStore()->set('clientContext', $value);
    }

    /**
     * Sets the delayBetweenTonesMs property value. The delayBetweenTonesMs property
     * @param int|null $value Value to set for the delayBetweenTonesMs property.
    */
    public function setDelayBetweenTonesMs(?int $value): void {
        $this->getBackingStore()->set('delayBetweenTonesMs', $value);
    }

    /**
     * Sets the tones property value. The tones property
     * @param array<Tone>|null $value Value to set for the tones property.
    */
    public function setTones(?array $value): void {
        $this->getBackingStore()->set('tones', $value);
    }

}
