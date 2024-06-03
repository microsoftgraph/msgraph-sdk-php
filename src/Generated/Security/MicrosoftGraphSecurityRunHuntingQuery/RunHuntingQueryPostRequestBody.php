<?php

namespace Microsoft\Graph\Generated\Security\MicrosoftGraphSecurityRunHuntingQuery;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RunHuntingQueryPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RunHuntingQueryPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RunHuntingQueryPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RunHuntingQueryPostRequestBody {
        return new RunHuntingQueryPostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'query' => fn(ParseNode $n) => $o->setQuery($n->getStringValue()),
            'timespan' => fn(ParseNode $n) => $o->setTimespan($n->getStringValue()),
        ];
    }

    /**
     * Gets the query property value. The query property
     * @return string|null
    */
    public function getQuery(): ?string {
        $val = $this->getBackingStore()->get('query');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'query'");
    }

    /**
     * Gets the timespan property value. The timespan property
     * @return string|null
    */
    public function getTimespan(): ?string {
        $val = $this->getBackingStore()->get('timespan');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timespan'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('query', $this->getQuery());
        $writer->writeStringValue('timespan', $this->getTimespan());
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
     * Sets the query property value. The query property
     * @param string|null $value Value to set for the query property.
    */
    public function setQuery(?string $value): void {
        $this->getBackingStore()->set('query', $value);
    }

    /**
     * Sets the timespan property value. The timespan property
     * @param string|null $value Value to set for the timespan property.
    */
    public function setTimespan(?string $value): void {
        $this->getBackingStore()->set('timespan', $value);
    }

}
