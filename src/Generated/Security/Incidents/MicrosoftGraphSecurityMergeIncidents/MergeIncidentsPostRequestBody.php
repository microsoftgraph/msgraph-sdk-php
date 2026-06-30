<?php

namespace Microsoft\Graph\Generated\Security\Incidents\MicrosoftGraphSecurityMergeIncidents;

use Microsoft\Graph\Generated\Models\Security\CorrelationReason;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MergeIncidentsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MergeIncidentsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MergeIncidentsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MergeIncidentsPostRequestBody {
        return new MergeIncidentsPostRequestBody();
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
            'incidentComment' => fn(ParseNode $n) => $o->setIncidentComment($n->getStringValue()),
            'incidentIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setIncidentIds($val);
            },
            'mergeReasons' => fn(ParseNode $n) => $o->setMergeReasons($n->getEnumValue(CorrelationReason::class)),
        ];
    }

    /**
     * Gets the incidentComment property value. The incidentComment property
     * @return string|null
    */
    public function getIncidentComment(): ?string {
        $val = $this->getBackingStore()->get('incidentComment');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incidentComment'");
    }

    /**
     * Gets the incidentIds property value. The incidentIds property
     * @return array<string>|null
    */
    public function getIncidentIds(): ?array {
        $val = $this->getBackingStore()->get('incidentIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incidentIds'");
    }

    /**
     * Gets the mergeReasons property value. The mergeReasons property
     * @return CorrelationReason|null
    */
    public function getMergeReasons(): ?CorrelationReason {
        $val = $this->getBackingStore()->get('mergeReasons');
        if (is_null($val) || $val instanceof CorrelationReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mergeReasons'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('incidentComment', $this->getIncidentComment());
        $writer->writeCollectionOfPrimitiveValues('incidentIds', $this->getIncidentIds());
        $writer->writeEnumValue('mergeReasons', $this->getMergeReasons());
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
     * Sets the incidentComment property value. The incidentComment property
     * @param string|null $value Value to set for the incidentComment property.
    */
    public function setIncidentComment(?string $value): void {
        $this->getBackingStore()->set('incidentComment', $value);
    }

    /**
     * Sets the incidentIds property value. The incidentIds property
     * @param array<string>|null $value Value to set for the incidentIds property.
    */
    public function setIncidentIds(?array $value): void {
        $this->getBackingStore()->set('incidentIds', $value);
    }

    /**
     * Sets the mergeReasons property value. The mergeReasons property
     * @param CorrelationReason|null $value Value to set for the mergeReasons property.
    */
    public function setMergeReasons(?CorrelationReason $value): void {
        $this->getBackingStore()->set('mergeReasons', $value);
    }

}
