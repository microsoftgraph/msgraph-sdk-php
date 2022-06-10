<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TelecomExpenseManagementPartner extends Entity implements Parsable 
{
    /**
     * @var bool|null $appAuthorized Whether the partner's AAD app has been authorized to access Intune.
    */
    private ?bool $appAuthorized = null;
    
    /**
     * @var string|null $displayName Display name of the TEM partner.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $enabled Whether Intune's connection to the TEM service is currently enabled or disabled.
    */
    private ?bool $enabled = null;
    
    /**
     * @var DateTime|null $lastConnectionDateTime Timestamp of the last request sent to Intune by the TEM partner.
    */
    private ?DateTime $lastConnectionDateTime = null;
    
    /**
     * @var string|null $url URL of the TEM partner's administrative control panel, where an administrator can configure their TEM service.
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new telecomExpenseManagementPartner and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TelecomExpenseManagementPartner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TelecomExpenseManagementPartner {
        return new TelecomExpenseManagementPartner();
    }

    /**
     * Gets the appAuthorized property value. Whether the partner's AAD app has been authorized to access Intune.
     * @return bool|null
    */
    public function getAppAuthorized(): ?bool {
        return $this->appAuthorized;
    }

    /**
     * Gets the displayName property value. Display name of the TEM partner.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enabled property value. Whether Intune's connection to the TEM service is currently enabled or disabled.
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
        return array_merge(parent::getFieldDeserializers(), [
            'appAuthorized' => function (ParseNode $n) use ($o) { $o->setAppAuthorized($n->getBooleanValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'enabled' => function (ParseNode $n) use ($o) { $o->setEnabled($n->getBooleanValue()); },
            'lastConnectionDateTime' => function (ParseNode $n) use ($o) { $o->setLastConnectionDateTime($n->getDateTimeValue()); },
            'url' => function (ParseNode $n) use ($o) { $o->setUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastConnectionDateTime property value. Timestamp of the last request sent to Intune by the TEM partner.
     * @return DateTime|null
    */
    public function getLastConnectionDateTime(): ?DateTime {
        return $this->lastConnectionDateTime;
    }

    /**
     * Gets the url property value. URL of the TEM partner's administrative control panel, where an administrator can configure their TEM service.
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('appAuthorized', $this->appAuthorized);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('enabled', $this->enabled);
        $writer->writeDateTimeValue('lastConnectionDateTime', $this->lastConnectionDateTime);
        $writer->writeStringValue('url', $this->url);
    }

    /**
     * Sets the appAuthorized property value. Whether the partner's AAD app has been authorized to access Intune.
     *  @param bool|null $value Value to set for the appAuthorized property.
    */
    public function setAppAuthorized(?bool $value ): void {
        $this->appAuthorized = $value;
    }

    /**
     * Sets the displayName property value. Display name of the TEM partner.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enabled property value. Whether Intune's connection to the TEM service is currently enabled or disabled.
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value ): void {
        $this->enabled = $value;
    }

    /**
     * Sets the lastConnectionDateTime property value. Timestamp of the last request sent to Intune by the TEM partner.
     *  @param DateTime|null $value Value to set for the lastConnectionDateTime property.
    */
    public function setLastConnectionDateTime(?DateTime $value ): void {
        $this->lastConnectionDateTime = $value;
    }

    /**
     * Sets the url property value. URL of the TEM partner's administrative control panel, where an administrator can configure their TEM service.
     *  @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value ): void {
        $this->url = $value;
    }

}
