<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The user experience analytics insight is the recomendation to improve the user experience analytics score.
*/
class UserExperienceAnalyticsInsight implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UserExperienceAnalyticsInsight and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsInsight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsInsight {
        return new UserExperienceAnalyticsInsight();
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
            'insightId' => fn(ParseNode $n) => $o->setInsightId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(UserExperienceAnalyticsInsightSeverity::class)),
            'userExperienceAnalyticsMetricId' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsMetricId($n->getStringValue()),
            'values' => fn(ParseNode $n) => $o->setValues($n->getCollectionOfObjectValues([UserExperienceAnalyticsInsightValue::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the insightId property value. The unique identifier of the user experience analytics insight.
     * @return string|null
    */
    public function getInsightId(): ?string {
        $val = $this->getBackingStore()->get('insightId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'insightId'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the severity property value. Indicates severity of insights. Possible values are: None, Informational, Warning, Error.
     * @return UserExperienceAnalyticsInsightSeverity|null
    */
    public function getSeverity(): ?UserExperienceAnalyticsInsightSeverity {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsInsightSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Gets the userExperienceAnalyticsMetricId property value. The unique identifier of the user experience analytics metric.
     * @return string|null
    */
    public function getUserExperienceAnalyticsMetricId(): ?string {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsMetricId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsMetricId'");
    }

    /**
     * Gets the values property value. The value of the user experience analytics insight.
     * @return array<UserExperienceAnalyticsInsightValue>|null
    */
    public function getValues(): ?array {
        $val = $this->getBackingStore()->get('values');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsInsightValue::class);
            /** @var array<UserExperienceAnalyticsInsightValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'values'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('insightId', $this->getInsightId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeStringValue('userExperienceAnalyticsMetricId', $this->getUserExperienceAnalyticsMetricId());
        $writer->writeCollectionOfObjectValues('values', $this->getValues());
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
     * Sets the insightId property value. The unique identifier of the user experience analytics insight.
     * @param string|null $value Value to set for the insightId property.
    */
    public function setInsightId(?string $value): void {
        $this->getBackingStore()->set('insightId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the severity property value. Indicates severity of insights. Possible values are: None, Informational, Warning, Error.
     * @param UserExperienceAnalyticsInsightSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?UserExperienceAnalyticsInsightSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

    /**
     * Sets the userExperienceAnalyticsMetricId property value. The unique identifier of the user experience analytics metric.
     * @param string|null $value Value to set for the userExperienceAnalyticsMetricId property.
    */
    public function setUserExperienceAnalyticsMetricId(?string $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsMetricId', $value);
    }

    /**
     * Sets the values property value. The value of the user experience analytics insight.
     * @param array<UserExperienceAnalyticsInsightValue>|null $value Value to set for the values property.
    */
    public function setValues(?array $value): void {
        $this->getBackingStore()->set('values', $value);
    }

}
