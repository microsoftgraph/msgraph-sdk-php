<?php

namespace Microsoft\Graph\Generated\Security\Alerts_v2\MicrosoftGraphSecurityMoveAlerts;

use Microsoft\Graph\Generated\Models\Security\CorrelationReason;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MoveAlertsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MoveAlertsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MoveAlertsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MoveAlertsPostRequestBody {
        return new MoveAlertsPostRequestBody();
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
     * Gets the alertComment property value. The alertComment property
     * @return string|null
    */
    public function getAlertComment(): ?string {
        $val = $this->getBackingStore()->get('alertComment');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertComment'");
    }

    /**
     * Gets the alertIds property value. The alertIds property
     * @return array<string>|null
    */
    public function getAlertIds(): ?array {
        $val = $this->getBackingStore()->get('alertIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertIds'");
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
            'alertComment' => fn(ParseNode $n) => $o->setAlertComment($n->getStringValue()),
            'alertIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAlertIds($val);
            },
            'incidentId' => fn(ParseNode $n) => $o->setIncidentId($n->getStringValue()),
            'newCorrelationReasons' => fn(ParseNode $n) => $o->setNewCorrelationReasons($n->getEnumValue(CorrelationReason::class)),
        ];
    }

    /**
     * Gets the incidentId property value. The incidentId property
     * @return string|null
    */
    public function getIncidentId(): ?string {
        $val = $this->getBackingStore()->get('incidentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incidentId'");
    }

    /**
     * Gets the newCorrelationReasons property value. The newCorrelationReasons property
     * @return CorrelationReason|null
    */
    public function getNewCorrelationReasons(): ?CorrelationReason {
        $val = $this->getBackingStore()->get('newCorrelationReasons');
        if (is_null($val) || $val instanceof CorrelationReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'newCorrelationReasons'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('alertComment', $this->getAlertComment());
        $writer->writeCollectionOfPrimitiveValues('alertIds', $this->getAlertIds());
        $writer->writeStringValue('incidentId', $this->getIncidentId());
        $writer->writeEnumValue('newCorrelationReasons', $this->getNewCorrelationReasons());
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
     * Sets the alertComment property value. The alertComment property
     * @param string|null $value Value to set for the alertComment property.
    */
    public function setAlertComment(?string $value): void {
        $this->getBackingStore()->set('alertComment', $value);
    }

    /**
     * Sets the alertIds property value. The alertIds property
     * @param array<string>|null $value Value to set for the alertIds property.
    */
    public function setAlertIds(?array $value): void {
        $this->getBackingStore()->set('alertIds', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the incidentId property value. The incidentId property
     * @param string|null $value Value to set for the incidentId property.
    */
    public function setIncidentId(?string $value): void {
        $this->getBackingStore()->set('incidentId', $value);
    }

    /**
     * Sets the newCorrelationReasons property value. The newCorrelationReasons property
     * @param CorrelationReason|null $value Value to set for the newCorrelationReasons property.
    */
    public function setNewCorrelationReasons(?CorrelationReason $value): void {
        $this->getBackingStore()->set('newCorrelationReasons', $value);
    }

}
