<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UserTrainingContentEventInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new userTrainingContentEventInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.userTrainingContentEventInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserTrainingContentEventInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserTrainingContentEventInfo {
        return new UserTrainingContentEventInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
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
     * Gets the browser property value. Browser of the user from where the training event was generated.
     * @return string|null
    */
    public function getBrowser(): ?string {
        return $this->getBackingStore()->get('browser');
    }

    /**
     * Gets the contentDateTime property value. Date and time of the training content playback by the user.
     * @return DateTime|null
    */
    public function getContentDateTime(): ?DateTime {
        return $this->getBackingStore()->get('contentDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'browser' => fn(ParseNode $n) => $o->setBrowser($n->getStringValue()),
            'contentDateTime' => fn(ParseNode $n) => $o->setContentDateTime($n->getDateTimeValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'osPlatformDeviceDetails' => fn(ParseNode $n) => $o->setOsPlatformDeviceDetails($n->getStringValue()),
            'potentialScoreImpact' => fn(ParseNode $n) => $o->setPotentialScoreImpact($n->getFloatValue()),
        ];
    }

    /**
     * Gets the ipAddress property value. IP address of the user for the training event.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->getBackingStore()->get('ipAddress');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the osPlatformDeviceDetails property value. The operating system, platform, and device details of the user for the training event.
     * @return string|null
    */
    public function getOsPlatformDeviceDetails(): ?string {
        return $this->getBackingStore()->get('osPlatformDeviceDetails');
    }

    /**
     * Gets the potentialScoreImpact property value. Potential improvement in the tenant security posture after completion of the training by the user.
     * @return float|null
    */
    public function getPotentialScoreImpact(): ?float {
        return $this->getBackingStore()->get('potentialScoreImpact');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('browser', $this->getBrowser());
        $writer->writeDateTimeValue('contentDateTime', $this->getContentDateTime());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('osPlatformDeviceDetails', $this->getOsPlatformDeviceDetails());
        $writer->writeFloatValue('potentialScoreImpact', $this->getPotentialScoreImpact());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the browser property value. Browser of the user from where the training event was generated.
     *  @param string|null $value Value to set for the browser property.
    */
    public function setBrowser(?string $value): void {
        $this->getBackingStore()->set('browser', $value);
    }

    /**
     * Sets the contentDateTime property value. Date and time of the training content playback by the user.
     *  @param DateTime|null $value Value to set for the contentDateTime property.
    */
    public function setContentDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('contentDateTime', $value);
    }

    /**
     * Sets the ipAddress property value. IP address of the user for the training event.
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the osPlatformDeviceDetails property value. The operating system, platform, and device details of the user for the training event.
     *  @param string|null $value Value to set for the osPlatformDeviceDetails property.
    */
    public function setOsPlatformDeviceDetails(?string $value): void {
        $this->getBackingStore()->set('osPlatformDeviceDetails', $value);
    }

    /**
     * Sets the potentialScoreImpact property value. Potential improvement in the tenant security posture after completion of the training by the user.
     *  @param float|null $value Value to set for the potentialScoreImpact property.
    */
    public function setPotentialScoreImpact(?float $value): void {
        $this->getBackingStore()->set('potentialScoreImpact', $value);
    }

}
