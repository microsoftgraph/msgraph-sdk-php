<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EmployeeExperience implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EmployeeExperience and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmployeeExperience
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmployeeExperience {
        return new EmployeeExperience();
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
            'learningCourseActivities' => fn(ParseNode $n) => $o->setLearningCourseActivities($n->getCollectionOfObjectValues([LearningCourseActivity::class, 'createFromDiscriminatorValue'])),
            'learningProviders' => fn(ParseNode $n) => $o->setLearningProviders($n->getCollectionOfObjectValues([LearningProvider::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the learningCourseActivities property value. The learningCourseActivities property
     * @return array<LearningCourseActivity>|null
    */
    public function getLearningCourseActivities(): ?array {
        $val = $this->getBackingStore()->get('learningCourseActivities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LearningCourseActivity::class);
            /** @var array<LearningCourseActivity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'learningCourseActivities'");
    }

    /**
     * Gets the learningProviders property value. A collection of learning providers.
     * @return array<LearningProvider>|null
    */
    public function getLearningProviders(): ?array {
        $val = $this->getBackingStore()->get('learningProviders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LearningProvider::class);
            /** @var array<LearningProvider>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'learningProviders'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('learningCourseActivities', $this->getLearningCourseActivities());
        $writer->writeCollectionOfObjectValues('learningProviders', $this->getLearningProviders());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the learningCourseActivities property value. The learningCourseActivities property
     * @param array<LearningCourseActivity>|null $value Value to set for the learningCourseActivities property.
    */
    public function setLearningCourseActivities(?array $value): void {
        $this->getBackingStore()->set('learningCourseActivities', $value);
    }

    /**
     * Sets the learningProviders property value. A collection of learning providers.
     * @param array<LearningProvider>|null $value Value to set for the learningProviders property.
    */
    public function setLearningProviders(?array $value): void {
        $this->getBackingStore()->set('learningProviders', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
