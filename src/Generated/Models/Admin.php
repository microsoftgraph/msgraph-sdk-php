<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Graph\Generated\Models\TeamsAdministration\TeamsAdminRoot;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Admin implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Admin and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Admin
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Admin {
        return new Admin();
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
     * Gets the edge property value. A container for Microsoft Edge resources. Read-only.
     * @return Edge|null
    */
    public function getEdge(): ?Edge {
        $val = $this->getBackingStore()->get('edge');
        if (is_null($val) || $val instanceof Edge) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edge'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'edge' => fn(ParseNode $n) => $o->setEdge($n->getObjectValue([Edge::class, 'createFromDiscriminatorValue'])),
            'microsoft365Apps' => fn(ParseNode $n) => $o->setMicrosoft365Apps($n->getObjectValue([AdminMicrosoft365Apps::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'people' => fn(ParseNode $n) => $o->setPeople($n->getObjectValue([PeopleAdminSettings::class, 'createFromDiscriminatorValue'])),
            'reportSettings' => fn(ParseNode $n) => $o->setReportSettings($n->getObjectValue([AdminReportSettings::class, 'createFromDiscriminatorValue'])),
            'serviceAnnouncement' => fn(ParseNode $n) => $o->setServiceAnnouncement($n->getObjectValue([ServiceAnnouncement::class, 'createFromDiscriminatorValue'])),
            'sharepoint' => fn(ParseNode $n) => $o->setSharepoint($n->getObjectValue([Sharepoint::class, 'createFromDiscriminatorValue'])),
            'teams' => fn(ParseNode $n) => $o->setTeams($n->getObjectValue([TeamsAdminRoot::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the microsoft365Apps property value. A container for the Microsoft 365 apps admin functionality.
     * @return AdminMicrosoft365Apps|null
    */
    public function getMicrosoft365Apps(): ?AdminMicrosoft365Apps {
        $val = $this->getBackingStore()->get('microsoft365Apps');
        if (is_null($val) || $val instanceof AdminMicrosoft365Apps) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoft365Apps'");
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
     * Gets the people property value. Represents a setting to control people-related admin settings in the tenant.
     * @return PeopleAdminSettings|null
    */
    public function getPeople(): ?PeopleAdminSettings {
        $val = $this->getBackingStore()->get('people');
        if (is_null($val) || $val instanceof PeopleAdminSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'people'");
    }

    /**
     * Gets the reportSettings property value. A container for administrative resources to manage reports.
     * @return AdminReportSettings|null
    */
    public function getReportSettings(): ?AdminReportSettings {
        $val = $this->getBackingStore()->get('reportSettings');
        if (is_null($val) || $val instanceof AdminReportSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportSettings'");
    }

    /**
     * Gets the serviceAnnouncement property value. A container for service communications resources. Read-only.
     * @return ServiceAnnouncement|null
    */
    public function getServiceAnnouncement(): ?ServiceAnnouncement {
        $val = $this->getBackingStore()->get('serviceAnnouncement');
        if (is_null($val) || $val instanceof ServiceAnnouncement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceAnnouncement'");
    }

    /**
     * Gets the sharepoint property value. The sharepoint property
     * @return Sharepoint|null
    */
    public function getSharepoint(): ?Sharepoint {
        $val = $this->getBackingStore()->get('sharepoint');
        if (is_null($val) || $val instanceof Sharepoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharepoint'");
    }

    /**
     * Gets the teams property value. Represents a collection of user configurations.
     * @return TeamsAdminRoot|null
    */
    public function getTeams(): ?TeamsAdminRoot {
        $val = $this->getBackingStore()->get('teams');
        if (is_null($val) || $val instanceof TeamsAdminRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teams'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('edge', $this->getEdge());
        $writer->writeObjectValue('microsoft365Apps', $this->getMicrosoft365Apps());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('people', $this->getPeople());
        $writer->writeObjectValue('reportSettings', $this->getReportSettings());
        $writer->writeObjectValue('serviceAnnouncement', $this->getServiceAnnouncement());
        $writer->writeObjectValue('sharepoint', $this->getSharepoint());
        $writer->writeObjectValue('teams', $this->getTeams());
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
     * Sets the edge property value. A container for Microsoft Edge resources. Read-only.
     * @param Edge|null $value Value to set for the edge property.
    */
    public function setEdge(?Edge $value): void {
        $this->getBackingStore()->set('edge', $value);
    }

    /**
     * Sets the microsoft365Apps property value. A container for the Microsoft 365 apps admin functionality.
     * @param AdminMicrosoft365Apps|null $value Value to set for the microsoft365Apps property.
    */
    public function setMicrosoft365Apps(?AdminMicrosoft365Apps $value): void {
        $this->getBackingStore()->set('microsoft365Apps', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the people property value. Represents a setting to control people-related admin settings in the tenant.
     * @param PeopleAdminSettings|null $value Value to set for the people property.
    */
    public function setPeople(?PeopleAdminSettings $value): void {
        $this->getBackingStore()->set('people', $value);
    }

    /**
     * Sets the reportSettings property value. A container for administrative resources to manage reports.
     * @param AdminReportSettings|null $value Value to set for the reportSettings property.
    */
    public function setReportSettings(?AdminReportSettings $value): void {
        $this->getBackingStore()->set('reportSettings', $value);
    }

    /**
     * Sets the serviceAnnouncement property value. A container for service communications resources. Read-only.
     * @param ServiceAnnouncement|null $value Value to set for the serviceAnnouncement property.
    */
    public function setServiceAnnouncement(?ServiceAnnouncement $value): void {
        $this->getBackingStore()->set('serviceAnnouncement', $value);
    }

    /**
     * Sets the sharepoint property value. The sharepoint property
     * @param Sharepoint|null $value Value to set for the sharepoint property.
    */
    public function setSharepoint(?Sharepoint $value): void {
        $this->getBackingStore()->set('sharepoint', $value);
    }

    /**
     * Sets the teams property value. Represents a collection of user configurations.
     * @param TeamsAdminRoot|null $value Value to set for the teams property.
    */
    public function setTeams(?TeamsAdminRoot $value): void {
        $this->getBackingStore()->set('teams', $value);
    }

}
