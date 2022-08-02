<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosNotificationSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var IosNotificationAlertType|null $alertType Notification Settings Alert Type.
    */
    private ?IosNotificationAlertType $alertType = null;
    
    /**
     * @var string|null $appName Application name to be associated with the bundleID.
    */
    private ?string $appName = null;
    
    /**
     * @var bool|null $badgesEnabled Indicates whether badges are allowed for this app.
    */
    private ?bool $badgesEnabled = null;
    
    /**
     * @var string|null $bundleID Bundle id of app to which to apply these notification settings.
    */
    private ?string $bundleID = null;
    
    /**
     * @var bool|null $enabled Indicates whether notifications are allowed for this app.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $publisher Publisher to be associated with the bundleID.
    */
    private ?string $publisher = null;
    
    /**
     * @var bool|null $showInNotificationCenter Indicates whether notifications can be shown in notification center.
    */
    private ?bool $showInNotificationCenter = null;
    
    /**
     * @var bool|null $showOnLockScreen Indicates whether notifications can be shown on the lock screen.
    */
    private ?bool $showOnLockScreen = null;
    
    /**
     * @var bool|null $soundsEnabled Indicates whether sounds are allowed for this app.
    */
    private ?bool $soundsEnabled = null;
    
    /**
     * Instantiates a new iosNotificationSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.iosNotificationSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosNotificationSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosNotificationSettings {
        return new IosNotificationSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the alertType property value. Notification Settings Alert Type.
     * @return IosNotificationAlertType|null
    */
    public function getAlertType(): ?IosNotificationAlertType {
        return $this->alertType;
    }

    /**
     * Gets the appName property value. Application name to be associated with the bundleID.
     * @return string|null
    */
    public function getAppName(): ?string {
        return $this->appName;
    }

    /**
     * Gets the badgesEnabled property value. Indicates whether badges are allowed for this app.
     * @return bool|null
    */
    public function getBadgesEnabled(): ?bool {
        return $this->badgesEnabled;
    }

    /**
     * Gets the bundleID property value. Bundle id of app to which to apply these notification settings.
     * @return string|null
    */
    public function getBundleID(): ?string {
        return $this->bundleID;
    }

    /**
     * Gets the enabled property value. Indicates whether notifications are allowed for this app.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alertType' => function (ParseNode $n) use ($o) { $o->setAlertType($n->getEnumValue(IosNotificationAlertType::class)); },
            'appName' => function (ParseNode $n) use ($o) { $o->setAppName($n->getStringValue()); },
            'badgesEnabled' => function (ParseNode $n) use ($o) { $o->setBadgesEnabled($n->getBooleanValue()); },
            'bundleID' => function (ParseNode $n) use ($o) { $o->setBundleID($n->getStringValue()); },
            'enabled' => function (ParseNode $n) use ($o) { $o->setEnabled($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'publisher' => function (ParseNode $n) use ($o) { $o->setPublisher($n->getStringValue()); },
            'showInNotificationCenter' => function (ParseNode $n) use ($o) { $o->setShowInNotificationCenter($n->getBooleanValue()); },
            'showOnLockScreen' => function (ParseNode $n) use ($o) { $o->setShowOnLockScreen($n->getBooleanValue()); },
            'soundsEnabled' => function (ParseNode $n) use ($o) { $o->setSoundsEnabled($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the publisher property value. Publisher to be associated with the bundleID.
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    /**
     * Gets the showInNotificationCenter property value. Indicates whether notifications can be shown in notification center.
     * @return bool|null
    */
    public function getShowInNotificationCenter(): ?bool {
        return $this->showInNotificationCenter;
    }

    /**
     * Gets the showOnLockScreen property value. Indicates whether notifications can be shown on the lock screen.
     * @return bool|null
    */
    public function getShowOnLockScreen(): ?bool {
        return $this->showOnLockScreen;
    }

    /**
     * Gets the soundsEnabled property value. Indicates whether sounds are allowed for this app.
     * @return bool|null
    */
    public function getSoundsEnabled(): ?bool {
        return $this->soundsEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('alertType', $this->alertType);
        $writer->writeStringValue('appName', $this->appName);
        $writer->writeBooleanValue('badgesEnabled', $this->badgesEnabled);
        $writer->writeStringValue('bundleID', $this->bundleID);
        $writer->writeBooleanValue('enabled', $this->enabled);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('publisher', $this->publisher);
        $writer->writeBooleanValue('showInNotificationCenter', $this->showInNotificationCenter);
        $writer->writeBooleanValue('showOnLockScreen', $this->showOnLockScreen);
        $writer->writeBooleanValue('soundsEnabled', $this->soundsEnabled);
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
     * Sets the alertType property value. Notification Settings Alert Type.
     *  @param IosNotificationAlertType|null $value Value to set for the alertType property.
    */
    public function setAlertType(?IosNotificationAlertType $value ): void {
        $this->alertType = $value;
    }

    /**
     * Sets the appName property value. Application name to be associated with the bundleID.
     *  @param string|null $value Value to set for the appName property.
    */
    public function setAppName(?string $value ): void {
        $this->appName = $value;
    }

    /**
     * Sets the badgesEnabled property value. Indicates whether badges are allowed for this app.
     *  @param bool|null $value Value to set for the badgesEnabled property.
    */
    public function setBadgesEnabled(?bool $value ): void {
        $this->badgesEnabled = $value;
    }

    /**
     * Sets the bundleID property value. Bundle id of app to which to apply these notification settings.
     *  @param string|null $value Value to set for the bundleID property.
    */
    public function setBundleID(?string $value ): void {
        $this->bundleID = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether notifications are allowed for this app.
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value ): void {
        $this->enabled = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the publisher property value. Publisher to be associated with the bundleID.
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

    /**
     * Sets the showInNotificationCenter property value. Indicates whether notifications can be shown in notification center.
     *  @param bool|null $value Value to set for the showInNotificationCenter property.
    */
    public function setShowInNotificationCenter(?bool $value ): void {
        $this->showInNotificationCenter = $value;
    }

    /**
     * Sets the showOnLockScreen property value. Indicates whether notifications can be shown on the lock screen.
     *  @param bool|null $value Value to set for the showOnLockScreen property.
    */
    public function setShowOnLockScreen(?bool $value ): void {
        $this->showOnLockScreen = $value;
    }

    /**
     * Sets the soundsEnabled property value. Indicates whether sounds are allowed for this app.
     *  @param bool|null $value Value to set for the soundsEnabled property.
    */
    public function setSoundsEnabled(?bool $value ): void {
        $this->soundsEnabled = $value;
    }

}
